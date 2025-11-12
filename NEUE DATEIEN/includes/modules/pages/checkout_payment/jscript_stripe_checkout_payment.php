<?php
/**
 * Stripe Payments for Zen Cart German 1.5.7j
 * Zen Cart German Specific (zencartpro adaptations)
 *
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: jscript_stripe_checkout_payment.php 2025-11-12 11:49:14Z webchills $
 */
$_SESSION['paymentIntent'] = '';
unset($_SESSION['order_add_comment']);