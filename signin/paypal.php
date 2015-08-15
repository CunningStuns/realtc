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