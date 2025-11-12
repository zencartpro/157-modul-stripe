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
 * @version $Id: zcAjaxStripe.php 2025-11-12 11:49:14Z webchills $
 */
class zcAjaxStripe
{
    // -----
    // Check the number of times a credit-card failure has been recorded.
    //
    public function checkCC()
    {
        zen_define_default('MAX_STRIPE_FAILED_ATTEMPTS', 3);

        $_SESSION['stripe_payment_attempts'] ??= 0;
        $_SESSION['stripe_payment_attempts']++;

        // -----
        // Return the attempts-exceeded status
        //
        return [
            'status' => ($_SESSION['stripe_payment_attempts'] > (int)MAX_STRIPE_FAILED_ATTEMPTS) ? 'false' : 'ok',
        ];
    }
}