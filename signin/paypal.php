<?php

if(Input::exists('get')) {

$paypalAmount = Input::get("amount");
$newTaxName = Input::get("taxName");
$newAmount = Input::get("amount");
    
    $METHOD="SetExpressCheckout";
    $VERSION=109.0;

    $USER="sdk-three_api1.sdk.com";
    $PWD="QFZCWN5HZM8VBG7Q";
    $SIGNATURE="A-IzJhZZjhg29XQ2qnhapuwxIDzyAZQ92FRP5dqBzVesOkzbdUONzmOU";

    $PAYMENTREQUEST_0_AMT=1;
    $PAYMENTREQUEST_0_CURRENCYCODE="AUD";

    $RETURNURL="return_url";

    $CANCELURL="cancel_url";

    $PAYMENTREQUEST_0_PAYMENTACTION="Sale";

}
?>
<form method=post action=https://api-3t.sandbox.paypal.com/nvp>
		<input type=hidden name=USER value=API_username>
		<input type=hidden name=PWD value=API_password>
		<input type=hidden name=SIGNATURE value=API_signature>
		<input type=hidden name=VERSION value=XX.0>
		<input type=hidden name=PAYMENTREQUEST_0_PAYMENTACTION
			value=Sale>
		<input name=PAYMENTREQUEST_0_AMT value=19.95>
		<input type=hidden name=RETURNURL
			value=/realtc/login/index.php>
		<input type=hidden name=CANCELURL
			value=/realtc/signin/donate.php>
		<input type=submit name=METHOD value=SetExpressCheckout>
	</form>