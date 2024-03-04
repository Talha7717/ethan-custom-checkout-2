<?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $url = 'https://octopus-app-834wg.ondigitalocean.app/simplified/v1/pay';

    // To retrieve the values from the cookie:
    if(isset($_COOKIE['data_cookie'])) {
      // Unserialize the data
      $dataFromCookie = unserialize($_COOKIE['data_cookie']);
      // Now $dataFromCookie contains the original $data array
      // You can access its values like $dataFromCookie['custom_order_id']
  }


    $custom_order_id = $dataFromCookie['custom_order_id'];

    $data = array(
        "merchantId" => "3214LAFCMB7U",
        "orderId" => $custom_order_id,
    );
    $headers = array(
        'Content-Type: application/json',
        'X-Aggregator-Id: fields',
        'X-Merchant-Id: 3214LAFCMB7U',
        'Authorization: Basic '. base64_encode('merchant.3214LAFCMB7U:a0b3276beb1e028734103fcd343b343a')
    );
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $response = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response,true);

    if($response['result'] == 'SUCCESS'){
      header("Location: success-page.php");
    }else{
      // print_r( $response );
      // echo '<script>alert("' . $response['gatewayCode'] . '");</script>';
      header("Location: index.php?gatewayCode=" . urlencode($response['gatewayCode']));
    }