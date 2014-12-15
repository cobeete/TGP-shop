<?php /* Smarty version Smarty-3.1.14, created on 2014-10-13 13:31:12
         compiled from "/home2/topgourm/public_html/themes/warehouse/modules/ph_simpleblog/views/templates/front/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1149412025543bb8009db766-66119501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df16fd778f7a875a9c95a8c0edbf09eca22e6422' => 
    array (
      0 => '/home2/topgourm/public_html/themes/warehouse/modules/ph_simpleblog/views/templates/front/list.tpl',
      1 => 1412678491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149412025543bb8009db766-66119501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_category' => 0,
    'navigationPipe' => 0,
    'blogCategory' => 0,
    'is_16' => 0,
    'posts' => 0,
    'blogMainTitle' => 0,
    'columns' => 0,
    'blogLayout' => 0,
    'cols' => 0,
    'post' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543bb800b73fa5_06331154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543bb800b73fa5_06331154')) {function content_543bb800b73fa5_06331154($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home2/topgourm/public_html/tools/smarty/plugins/modifier.date_format.php';
?><script>
var currentBlog = '<?php if ($_smarty_tpl->tpl_vars['is_category']->value){?>category<?php }else{ ?>home<?php }?>';
</script>
<?php if (Configuration::get('PH_BLOG_DISPLAY_BREADCRUMBS')){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
		<a href="<?php echo ph_simpleblog::getLink();?>
"><?php echo smartyTranslate(array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['is_category']->value==true){?>
			<span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['blogCategory']->value->name;?>

		<?php }?>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (!$_smarty_tpl->tpl_vars['is_16']->value){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)>0){?>
<div class="ph_simpleblog simpleblog-<?php if ($_smarty_tpl->tpl_vars['is_category']->value){?>category<?php }else{ ?>home<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['is_category']->value==true){?>
		<h1 class="page-heading"><?php echo $_smarty_tpl->tpl_vars['blogCategory']->value->name;?>
</h1>

		<?php if (Configuration::get('PH_BLOG_DISPLAY_CATEGORY_IMAGE')&&isset($_smarty_tpl->tpl_vars['blogCategory']->value->image)){?>
		<div class="simpleblog-category-image">
			<img src="<?php echo $_smarty_tpl->tpl_vars['blogCategory']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['blogCategory']->value->name;?>
" class="img-responsive" />
		</div>
		<?php }?>

		<?php if (!empty($_smarty_tpl->tpl_vars['blogCategory']->value->description)&&Configuration::get('PH_BLOG_DISPLAY_CAT_DESC')){?>
		<div class="ph_cat_description">
			<?php echo $_smarty_tpl->tpl_vars['blogCategory']->value->description;?>

		</div>
		<?php }?>
	<?php }else{ ?>
		<h1 class="page-heading"><?php echo $_smarty_tpl->tpl_vars['blogMainTitle']->value;?>
</h1>
	<?php }?>

	<div class="row simpleblog-posts">

		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>

			<?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable('col-xs-12 col-ms-6 col-md-6', null, 0);?>

			<?php if ($_smarty_tpl->tpl_vars['columns']->value=='3'){?>
					<?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable('col-xs-12 col-ms-6 col-md-4', null, 0);?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['columns']->value=='4'){?>
				<?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable('col-xs-12 col-ms-6 col-md-3', null, 0);?>
			<?php }?>

			<div class="simpleblog-post-item <?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='grid'){?><?php echo $_smarty_tpl->tpl_vars['cols']->value;?>
<?php }else{ ?>col-md-12<?php }?>">

				<div class="post-item">

				<?php if (isset($_smarty_tpl->tpl_vars['post']->value['banner'])&&Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')){?>
						<div class="post-thumbnail">
							<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="<?php echo smartyTranslate(array('s'=>'Permalink to','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
">
								<?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='full'){?>
									<img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['banner_wide'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" class="img-responsive" />
								<?php }else{ ?>
									<img src="<?php echo $_smarty_tpl->tpl_vars['post']->value['banner_thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" class="img-responsive" />
								<?php }?>
							</a>
						<h2>
							<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</a>
						</h2>
						</div>
					<?php }?>
						<?php if (!isset($_smarty_tpl->tpl_vars['post']->value['banner'])||!Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')){?>
					<div class="post-title">
				
						<h2>
							<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</a>
						</h2>
						
					</div>	<?php }?>
					<div class="post-content">
						
						<?php if (Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['short_content'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['post']->value['short_content'];?>

							</a>
						<?php }?>
					</div>	


					<div class="post-additional-info clearfix">
						<?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')){?>
							<span class="post-date">
								<?php echo smartyTranslate(array('s'=>'Posted on:','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],Configuration::get('PH_BLOG_DATEFORMAT'));?>

							</span>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['is_category']->value==false&&Configuration::get('PH_BLOG_DISPLAY_CATEGORY')){?>
							<span class="post-category">
								<?php echo smartyTranslate(array('s'=>'Posted in:','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['category_url'];?>
" title=""><?php echo $_smarty_tpl->tpl_vars['post']->value['category'];?>
</a>
							</span>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['post']->value['author'])&&!empty($_smarty_tpl->tpl_vars['post']->value['author'])&&Configuration::get('PH_BLOG_DISPLAY_AUTHOR')){?>
							<span class="post-author">
								<?php echo smartyTranslate(array('s'=>'Author:','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['author'];?>

							</span>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['post']->value['tags'])&&$_smarty_tpl->tpl_vars['post']->value['tags']&&Configuration::get('PH_BLOG_DISPLAY_TAGS')){?>
							<span class="post-tags clear">
								<?php echo smartyTranslate(array('s'=>'Tags:','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 
								<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tagsLoop']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
									<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tagsLoop']['last']){?>, <?php }?>
								<?php } ?>
							</span>
						<?php }?>
					</div><!-- .additional-info -->
				</div>
			</div><!-- .simpleblog-post-item -->

		<?php } ?>
	</div><!-- .row -->
		
	<?php if ($_smarty_tpl->tpl_vars['is_category']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('rewrite'=>$_smarty_tpl->tpl_vars['blogCategory']->value->link_rewrite,'type'=>'category'), 0);?>

	<?php }else{ ?>
		<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('rewrite'=>false,'type'=>false), 0);?>

	<?php }?>
</div><!-- .ph_simpleblog -->
<script>
$(window).load(function() {
	$('body').addClass('simpleblog simpleblog-'+currentBlog);
});
<?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='grid'){?>


$(window).load(function() {
SimpleBlogEqualHeight();
	});

$( window ).resize(function() {
SimpleBlogEqualHeight();
});




function SimpleBlogEqualHeight()
{
  	var mini = 0;
  	//	$('.simpleblog-post-item .post-item').removeAttr( 'style' );
  	$('.simpleblog-post-item .post-item .post-content').removeAttr( 'style' );
  	$('.simpleblog-post-item .post-item').each(function(){
      	if(parseInt($(this).height()) > mini )
      	{
        	mini = parseInt($(this).height());
      	}  
      	

  	});

  	  	$('.simpleblog-post-item .post-item').each(function(){
  	$(this).find('.post-content').height($(this).find('.post-content').height()+(mini - $(this).height()));
  	});
  	$('.simpleblog-post-item .post-item').parent().css('height',mini+10);  
}
<?php }?>
</script>
<?php }else{ ?>
	<p class="warning alert alert-warning"><?php echo smartyTranslate(array('s'=>'There are no posts','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</p>
<?php }?><?php }} ?>