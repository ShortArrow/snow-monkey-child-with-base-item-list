<?php
if (!defined('ABSPATH')) exit;
global $base_items;
/*
	 * item
	 *	item_id int
	 *	title string
	 *	detail string
	 *	price int
	 *	stock int
	 *  visible int(0|1)
	 *  list_order int
	 *	**img(n) is 1 to 5**
	 *	img(n)_origin string
	 *	img(n)_76 string
	 *	img(n)_146 string
	 *	img(n)_300 string
	 *	img(n)_500 string
	 *	img(n)_640 string
	 *	img(n)_sp_480 string
	 *	img(n)_sp_640 string
	 *	modified timestamp
	 *  variations
	 *   variation_id int
	 *   variation string
	 *   variation_stock int
	 *	shop_id string
	 *  shop_name string
	 *	shop_url string
	 *	categories array (string,string...)
	 */
?>
<?php if (isset($base_items)) : ?>

	<div class="wp-block-snow-monkey-blocks-pricing-table smb-pricing-table" data-has-items="3">
		<div class="c-row c-row--md-nowrap">
			<?php foreach ($base_items as $item) : ?>
				<div class="wp-block-snow-monkey-blocks-pricing-table--item c-row__col">
					<div class="smb-pricing-table__item base_item">
						<div class="smb-pricing-table__item__figure">
							<a href="<?php echo esc_url($item->shop_url) ?>/items/<?php echo $item->item_id; ?>" target="_blank">
								<img src="<?php echo esc_url($item->img1_300); ?>" alt="<?php echo esc_attr($item->title); ?>">
							</a>
						</div>
						<div class="smb-pricing-table__item__title base_item_title">
							<a href="<?php echo esc_url($item->shop_url) ?>/items/<?php echo $item->item_id; ?>">
								<?php echo esc_html($item->title); ?>
							</a>
						</div>
						<div class="smb-pricing-table__item__lede base_item_price">
							<strong> <?php echo esc_html(number_format($item->price)); ?>円（内税）</strong>
						</div>
						<div class="smb-pricing-table__item__action">
							<a class="smb-btn smb-pricing-table__item__btn" href="<?php echo esc_url($item->shop_url) ?>/items/<?php echo $item->item_id; ?>" target="_blank">
								<span class="smb-btn__label">詳しく見てみる</span>
							</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div><!-- base_items -->

<?php endif;
