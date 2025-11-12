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
 * @version $Id: stripe_database_names.php 2025-11-12 11:49:14Z webchills $
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}
define('TABLE_STRIPE', DB_PREFIX . 'stripe');