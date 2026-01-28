<?php
define('MODULE_PAYMENT_STRIPE_TEXT_TITLE', 'Stripe Checkout');
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION', 'Stripe Checkout: Kreditkarte und andere Zahlungsarten');
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION_CHECKOUT_PAYMENT', 'Bezahlen Sie mit <b>Kreditkarte</b>, <b>Amazon Pay</b>, <b>Klarna</b>, <b>Apple Pay</b> oder <b>Google Pay</b>. Die Eingabe der Zahlungsdaten erfolgt im nächsten Schritt.');
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION_CHECKOUT_HEADER', 'Stripe Checkout: Wählen Sie Ihre gewünschte Zahlungsart:');
define('MODULE_PAYMENT_STRIPE_TEXT_NOTICES_TO_CUSTOMER', '');
define('TEXT_PAYMENT_STRIPE_SUCCESS','Zahlung erfolgreich abgeschlossen! Bitte warten Sie ein paar Sekunden.');

if (defined('MODULE_PAYMENT_STRIPE_STATUS') && MODULE_PAYMENT_STRIPE_STATUS === 'True') {
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION' ,'Stripe-Zahlungsmodul <br> Verwenden Sie beim Testen einer Kreditkarte eine Test-Visa-Karte 4242 4242 4242 4242');
} else {
define('MODULE_PAYMENT_STRIPE_TEXT_DESCRIPTION' , '<a rel="noreferrer noopener" target="_blank" href="https://stripe.com/">Klicken Sie hier, um sich für ein Konto anzumelden </a> <br><br><strong>Anforderungen<br>&nbsp;Stripe API Veröffentlichbarer Schlüssel<br>&nbsp;Stripe API Geheimschlüssel<br>&nbsp;Stripe API Test Veröffentlichbarer Schlüssel<br>&nbsp;Stripe API Test Geheimschlüssel<br></strong>');
}