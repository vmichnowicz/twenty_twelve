<h2><?php echo lang('galleries.galleries_label'); ?></h2>

<?php if ( ! empty($galleries)): ?>
	<ul class="galleries">
		<?php foreach ($galleries as $gallery): ?>
			<?php if (empty($gallery->parent)): ?>
				<li>
					<h3 class="gallery_title"><?php echo anchor('galleries/' . $gallery->slug, $gallery->title); ?></h3>
					<?php if ( ! empty($gallery->filename)): ?>
						<a href="<?php echo site_url() . 'galleries/' . $gallery->slug; ?>" class="gallery_thumb">
							<?php echo img(array('src' => site_url() . 'files/thumb/' . $gallery->file_id, 'alt' => $gallery->title)); ?>
						</a>
					<?php endif; ?>
					<div class="gallery_details <?php echo empty($gallery->filename) ? 'full' : NULL ?>">
						<div class="gallery_description">
							<?php echo ( ! empty($gallery->description)) ? $gallery->description : lang('galleries.no_gallery_description'); ?>
						</div>
						<div class="gallery_info">
							<p class="gallery_updated">
								<?php echo lang('galleries.updated_label'); ?>
								<?php echo date('l F jS Y', $gallery->updated_on); ?>
							</p>
							<p class="gallery_view">
								<?php echo anchor('galleries/' . $gallery->slug, lang('galleries.view_label') . ' &raquo;'); ?>
							</p>
						</div>
					</div>
					<div class="clear"></div>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
<?php else: ?>
	<p><?php echo lang('galleries.no_galleries_error'); ?></p>
<?php endif; ?>
