<?php
/**
 * Stripe Payments for Zen Cart German 1.5.7j
 * Zen Cart German Specific (zencartpro adaptations)
 *
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: jscript_stripe_checkout_confirmation.php 2026-01-27 14:49:14Z webchills $
 */
if (defined('MODULE_PAYMENT_STRIPE_STATUS') && (MODULE_PAYMENT_STRIPE_STATUS === 'True') && (isset($stripe_select)) && ($stripe_select === 'True')) {
    // -----
    // Gather the order data-related values needed by stripe_checkout.js.
    //
    require DIR_FS_CATALOG . DIR_WS_MODULES . 'payment/stripepay/create.php';
?>
<script src="https://js.stripe.com/clover/stripe.js"></script>
<script id="stripe-form">
$(document).ready(function(){
    let stripeForm = $('<form>', {'id': 'payment-form'});
    stripeForm.append('<div id="payment-head" style="color: #2254dd;  font-size: 20px;  font-weight: bold; margin:24px 0 12px;"><?= MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION_CHECKOUT_HEADER ?></div>');
    stripeForm.append('<div id="payment-element"><!--Stripe.js injects the Payment Element--></div>');
    stripeForm.append('<div id="payment-message" class="hidden"></div>');
    stripeForm.append('<button id="submit"><div class="spinner hidden" id="spinner"></div><span id="button-text"><?= BUTTON_CONFIRM_ORDER_ALT ?></span></button>');    

    $('#checkout_confirmation').before(stripeForm);

    <?= file_get_contents('includes/stripe_checkout.js') ?>

    $('div.confirm-order, #checkoutConfirmationDefault-btn-toolbar').hide();
});
</script>
<?php
}
