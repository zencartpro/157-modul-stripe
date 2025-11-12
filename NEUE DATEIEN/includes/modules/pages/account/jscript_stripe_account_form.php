<?php
/**
 * Stripe Payments for Zen Cart German 1.5.7j
 * Zen Cart German Specific (zencartpro adaptations)
 *
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: jscript_stripe_account_form.php 2025-11-12 11:49:14Z webchills $
 */
$sql = "SELECT Stripe_Customers_id FROM " . TABLE_STRIPE . " WHERE customers_id = " . (int)$_SESSION['customer_id'] . " LIMIT 1";
$stripe_customer = $db->Execute($sql);
if ($stripe_customer->EOF) {
    return;
}
?>
<script id="stripe-form">
    $(document).ready(function(){
        let stripeForm = '';
        stripeForm.append('<h2 style="color: #2254dd;  font-size: 24px;  font-weight: bold;">Stripe</h2>');
        stripeForm.append('<?= TEXT_STRIPE_CARD_INFORMATION ?>');
        
        stripeForm.append($('<form>', {'method': 'post'}));
        stripeForm.append($('<input>', {'id': 'btn_delete', 'type': 'submit', 'name': 'Delete', 'value': '<?= TEXT_DELETE_STRIPE ?>'}));
        
        $('#accountDefault').append(stripeForm);
    });
</script>
