		<section class="page-product-box tab-pane fade" id="idTab669">
		<div class="ph_simpleblog simpleblog-related-posts">
			<div class="row simpleblog-posts">
				{foreach from=$posts item=post}

					{assign var='columns' value=Configuration::get('PH_RELATEDPOSTS_GRID_COLUMNS')}
					{assign var='blogLayout' value='grid'}
					{assign var='cols' value='col-md-6 col-xs-6 col-ms-12'}

					{if $columns eq '3'}
						{assign var='cols' value='col-md-4 col-xs-4 col-ms-12'}
					{/if}

					{if $columns eq '4'}
						{assign var='cols' value='col-md-3 col-xs-3 col-ms-12'}
					{/if}

					{if $columns eq '3'}
					<div class="simpleblog-post-item {if $blogLayout eq 'grid'}col-md-4 col-sm-6 col-xs-12 col-ms-12 {cycle values="first-in-line,second-in-line,last-in-line"}{else}col-md-12{/if}">
					{elseif $columns eq '4'}
					<div class="simpleblog-post-item {if $blogLayout eq 'grid'}col-md-3 col-sm-6 col-xs-12 col-ms-12 {cycle values="first-in-line,second-in-line,third-in-line,last-in-line"}{else}col-md-12{/if}">
					{else}
					<div class="simpleblog-post-item {if $blogLayout eq 'grid'}col-md-6 col-sm-6 col-xs-12 col-ms-12 {cycle values="first-in-line,last-in-line"}{else}col-md-12{/if}">
					{/if}

						<div class="post-item">

							{if isset($post.banner) && Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')}
								<div class="post-thumbnail">
									<a href="{$post.url|escape:'html':'UTF-8'}" title="{l s='Permalink to' mod='ph_relatedposts'} {$post.title|escape:'html':'UTF-8'}">
										{if $blogLayout eq 'full'}
											<img src="{$post.banner_wide}" alt="{$post.title}" class="img-responsive" />
										{else}
											<img src="{$post.banner_thumb}" alt="{$post.title}" class="img-responsive" />
										{/if}
									</a>
								</div>
							{/if}

							<div class="post-title">
								<h2><a href="{$post.url|escape:'html':'UTF-8'}" title="{l s='Permalink to' mod='ph_relatedposts'} {$post.title}">{$post.title|escape:'html':'UTF-8'}</a></h2>
							</div><!-- .post-title -->

							{if Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')}
							<div class="post-content">
								{$post.short_content|strip_tags:'UTF-8'}

								{if Configuration::get('PH_BLOG_DISPLAY_MORE')}
								<div class="post-read-more">
									<a href="{$post.url|escape:'html':'UTF-8'}" title="{l s='Read more' mod='ph_relatedposts'}">{l s='Read more' mod='ph_relatedposts'} <i class="fa fa-chevron-right"></i></a>
								</div><!-- .post-read-more -->
								{/if}
							</div>	
							{/if}

							<div class="post-additional-info post-meta-info">
								{if Configuration::get('PH_BLOG_DISPLAY_DATE')}
									<span class="post-date">
										<i class="fa fa-calendar"></i> {$post.date_add|date_format:Configuration::get('PH_BLOG_DATEFORMAT')}
									</span>
								{/if}

								{if Configuration::get('PH_BLOG_DISPLAY_CATEGORY')}
									<span class="post-category">
										<i class="fa fa-tags"></i> <a href="{$post.category_url}" title="">{$post.category}</a>
									</span>
								{/if}

								{if isset($post.author) && !empty($post.author) && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')}
									<span class="post-author">
										<i class="fa fa-user"></i> {$post.author}
									</span>
								{/if}
							</div><!-- .post-additional-info post-meta-info -->
						</div><!-- .post-item -->
					</div><!-- .simpleblog-post-item -->

				{/foreach}
			</div><!-- .ph_row -->
		</div><!-- .ph_simpleblog.related-posts -->
	</section>

<script>
$(window).load(function() {
	$('body').addClass('simpleblog-related-exists');
});
</script>