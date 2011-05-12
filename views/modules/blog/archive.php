<h2><?php echo $month_year . ' ' . lang('blog_archive_title');?></h2>
<?php if (!empty($blog)): ?>
	<?php foreach ($blog as $post): ?>
		<div class="blog_post">
			<h3><?php echo  anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, $post->title); ?></h3>
			<div class="post_body"><?php echo stripslashes($post->intro); ?></div>
			<div class="post_info">
				<p class="post_date_and_category">
					<?php echo lang('blog_posted_label');?>: <?php echo format_date($post->created_on); ?>
					<?php if($post->category_slug): ?>
						<?php echo lang('blog_category_label');?>: <?php echo anchor('blog/category/'.$post->category_slug, $post->category_title);?>
					<?php endif; ?>
				</p>
				<p class="post_view"><?php echo  anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, lang('blog_view_label') . ' &raquo;'); ?></p>
				<div class="clear"></div>
			</div>
		</div>
	<?php endforeach; ?>
	<?php echo $pagination['links']; ?>
<?php else: ?>
	<p><?php echo lang('blog_currently_no_posts');?></p>
<?php endif; ?>