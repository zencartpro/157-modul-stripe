<?php
define('MODULE_PAYMENT_STRIPE_TEXT_TITLE' , 'Stripe Checkout');
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION' , 'Stripe Checkout : Credit Card and other payment options');
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION_CHECKOUT_PAYMENT', 'Pay with <b>Credit Card</b>, <b>Amazon Pay</b>, <b>Google Pay</b> or <b>Apple Pay</b>. The payment details are entered in the next step.');
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION_CHECKOUT_HEADER', 'Stripe Checkout: Select your preferred payment method:');
define('MODULE_PAYMENT_STRIPE_TEXT_NOTICES_TO_CUSTOMER' , '');
define('TEXT_PAYMENT_STRIPE_SUCCESS','Payment succeeded! Please wait a few seconds.');

if (defined('MODULE_PAYMENT_STRIPE_STATUS') && MODULE_PAYMENT_STRIPE_STATUS === 'True') {
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION' , 'Stripe Payment Module <br> When testing credit card transactions, use a test Visa card 4242 4242 4242 4242.');
} else {
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION', '<a rel="noreferrer noopener" target="_blank" href="https://stripe.com/">Click here to Sign Up for an Account </a> <br><br><strong>Requirements<br>&nbsp;Stripe API Publishable key<br>&nbsp;Stripe API Secret key<br>&nbsp;Stripe API Publishable test key<br>&nbsp;Stripe API Secret test key<br></strong>');
}