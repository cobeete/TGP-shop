<?php

class OrderDetail extends OrderDetailCore
{

    /**
     * Get order products
     *
     * @return array Products with price, quantity (with taxe and without)
     */
    public function getProducts($products = false, $selectedProducts = false, $selectedQty = false)
    {
        if (!$products)
            $products = $this->getProductsDetail();

        $order = new Order($this->id_order);
        $customized_datas = Product::getAllCustomizedDatas($order->id_cart);

        $resultArray = array();
        foreach ($products as $row)
        {
            // Retrieve tax rate
            $product = new Product($row['product_id']);
            $row['id_tax_rules_group'] = $product->id_tax_rules_group;
            $row['tax_rate'] = $product->getTaxesRate();
            $row['price'] = $product->getPrice();

            // Change qty if selected
            if ($selectedQty)
            {
                $row['product_quantity'] = 0;
                foreach ($selectedProducts as $key => $id_product)
                    if ($row['id_order_detail'] == $id_product)
                        $row['product_quantity'] = (int)($selectedQty[$key]);
                if (!$row['product_quantity'])
                    continue;
            }

            $this->setProductImageInformations($row);
            $this->setProductCurrentStock($row);
            $this->setProductCustomizedDatas($row, $customized_datas);

            // Add information for virtual product
            if ($row['download_hash'] && !empty($row['download_hash']))
            {
                $row['filename'] = ProductDownload::getFilenameFromIdProduct((int)$row['product_id']);
                // Get the display filename
                $row['display_filename'] = ProductDownload::getFilenameFromFilename($row['filename']);
            }

            $row['id_address_delivery'] = $order->id_address_delivery;

            /* Stock product */
            $resultArray[(int)$row['id_order_detail']] = $row;
        }

        if ($customized_datas)
            Product::addCustomizationPrice($resultArray, $customized_datas);

        return $resultArray;
    }

}