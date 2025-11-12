<?php
/**
 * Stripe Payments for Zen Cart German 1.5.7j
 * Zen Cart German Specific (zencartpro adaptations)
 * Copyright 2025 lat9
 * see: https://github.com/lat9/stripe/
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: auto.stripe.php 2025-11-12 11:49:14Z webchills $
 */
class zcObserverStripe
{
    public function __construct()
    {
        if (defined('MODULE_PAYMENT_STRIPE_STATUS') && MODULE_PAYMENT_STRIPE_STATUS === 'True') {
            if (defined('MODULE_PAYMENT_STRIPE_TEST_MODE') && MODULE_PAYMENT_STRIPE_TEST_MODE === 'True') {
                global $messageStack;
                $messageStack->add('header', 'STRIPE IS IN TESTING MODE', 'warning');
            }
            
            global $current_page_base, $db;
            if ($current_page_base === FILENAME_ACCOUNT && isset($_POST['Delete'])) {
                $db->Execute("DELETE FROM " . TABLE_STRIPE . " WHERE customers_id = " . (int)$_SESSION['customer_id']);
                zen_redirect(zen_href_link(FILENAME_ACCOUNT, '', 'SSL'));
            }
        }
    }
}