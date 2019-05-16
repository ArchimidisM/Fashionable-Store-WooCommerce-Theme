<!-- Mobile Menu Trigger -->
<div class="column col-sm-3 show-md text-right">
    <?php if (fashionable_store_check_woocommerce() == true): ?>
        <a id="open-minicart" href="#minicart"
           title="<?php echo esc_attr__('View Cart', 'fashionable-store'); ?>"
           class="shopping-cart-icon-link"><i class="fas fa-shopping-bag"></i>
            <span class="shopping-cart-badge"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        </a>
    <?php endif; ?>
    <a href="#"  class="mobile-search search-btn"><span class="fas fa-search"></span></a>
	<a href="#sidr-mobile" id="mobile-menu-nav" class="mobile-trigger link-transition">
		<span class="fa fa-bars"></span>
	</a>
</div>