<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
try{
    $data = $_POST;
    // Store the requestData in a session variable
    $randomNumber = rand(0, 5000);
    $randomString = strval($randomNumber);
    $data['custom_order_id'] = $randomString;
    // Serialize the $data array
    $dataSerialized = serialize($data);
    // Set the cookie with the serialized data
    setcookie('data_cookie', $dataSerialized, time() + (86400 * 30), '/');
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $domain = $_SERVER['HTTP_HOST'];
    // print_r($browser);
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
    $url = 'https://octopus-app-834wg.ondigitalocean.app/simplified/v1/authenticatePayer';
    $dateString = $data['expiry'];
    list($month, $year) = explode('/', $dateString);
    // Data to be sent in the request
    $requestData = array(
        "merchantId" => "3214LAFCMB7U",
        "orderId" => $randomString,
        "amount" => 0.01,
        "cardExpiryYear" => $year,
        "cardExpiryMonth" =>$month,
        "cardNumber" => $data['number'],
        "cardSecurityCode" => $data['verification_value'],
        "browser" => $browser,
        "customerEmail" => $data['email'],
        "customerFirstName" => $data['firstName'],
        "customerLastName" => $data['lastName'],
        "customerCity" => $data['city'],
        "customerCountry" => $data['countryCode'],
        "customerPostCodeZip" => $data['postalCode'],
        "customerAddress" => $data['address1'],
        "redirectUrl" => $protocol.$domain."/confirmation.php"
    );
    // Headers for the request
    $headers = array(
        'Content-Type: application/json',
        'X-Aggregator-Id: fields',
        'X-Merchant-Id: 3214LAFCMB7U',
        'Authorization: Basic '. base64_encode('merchant.3214LAFCMB7U:a0b3276beb1e028734103fcd343b343a')
    );
    // Initialize cURL session
    $curl = curl_init();
    // Set cURL options
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($requestData));
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // Execute cURL request
    $response = curl_exec($curl);
    // Check for errors
    if($response === false){
        echo 'Curl error: ' . curl_error($curl);
    }
    // Close cURL session
    curl_close($curl);
    $response = json_decode($response,true);
    if($response['gatewayRecommendation']  == 'PROCEED'){
        $redirect_html = $response['redirectHtml'];
        $redirect_html = preg_replace('/<iframe.*?<\/iframe>/s', '', $redirect_html);
        $redirect_html = str_replace('target="challengeFrame"', '', $redirect_html);
        $response['redirectHtml'] = $redirect_html;
    }else{
        echo '<script>alert("' . $response['gatewayRecommendation'] . '");</script>';
        header("Location: index.php?cancel_payment=1");
    }
} catch (Exception $e) {
    // Handle exceptions
    echo 'Error: ' . $e->getMessage();
}

?>
<html>
    <head>    </head>
    <body>
        <?php if($response['gatewayRecommendation']  == 'PROCEED'){ ?>
            <div> <?= $response['redirectHtml'] ?> </dv>
            <?php } ?>
    </body>
</html>



