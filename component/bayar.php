<?php
require_once dirname(__FILE__) . '/midtrans/Midtrans.php';

// Set your Merchant Server Key
Midtrans\Config::$serverKey = 'SB-Mid-server-bvMQmgpwGwrhyO6AYwWtW5in';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
Midtrans\Config::$is3ds = true;

$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' =>  $_POST['total'],
    ),
    'customer_details' => array(
        'first_name' => $_POST['nama'],
        'last_name' => '',
        'email' =>  $_POST['email'],
        'phone' =>  $_POST['no_hp'],
    ),
);

$snapToken = Midtrans\Snap::getSnapToken($params);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($snapToken);