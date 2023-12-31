<?php 
/*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
composer require midtrans/midtrans-php
                              
Alternatively, if you are not using **Composer**, you can download midtrans-php library 
(https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
the file manually.   */

require_once dirname(__FILE__) . '\midtrans-php-master\Midtrans.php';

// require_once dirname(__FILE__) . '\midtrans-php-master\Midtrans.php';
// require_once __DIR__ . 'Midtrans.php';


//SAMPLE REQUEST START HERE

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-37pMy79gEJqSZIRqPfnvRnTi';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => $_POST['total'],
    ),
    'item_details' => json_decode($_POST['items'], true),
    'customer_details' => array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);

// if ($snapToken) {
//     return redirect('/MyBooks')->with([
//         'token' => $snapToken
//     ]);
// } else {
//     return redirect('/MyBooks')->with('error', 'Checkout gagal');
// }
 echo $snapToken;

