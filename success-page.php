<?php
    $data = $_POST;
    $sub1 = isset($_COOKIE['sub1']) ? $_COOKIE['sub1'] : '';
    $sub5 = isset($_COOKIE['sub5']) ? $_COOKIE['sub5'] : '';
    $sub3 = isset($_COOKIE['sub3']) ?  '$ '.$_COOKIE['sub3'] : '';;
    $sub4 = isset($_COOKIE['sub4']) ? $_COOKIE['sub4'] : '';
    $sub2 = isset($_COOKIE['sub2']) ? $_COOKIE['sub2'] : '';
    $width = isset($_COOKIE['width']) ? $_COOKIE['width'] : '';
    $pt = isset($_COOKIE['pt']) ? $_COOKIE['pt'] : '';
    // To retrieve the values from the cookie:
    
    if(isset($_COOKIE['data_cookie'])) {
        // Unserialize the data
        $data = unserialize($_COOKIE['data_cookie']);
        // Now $dataFromCookie contains the original $data array
        // You can access its values like $dataFromCookie['custom_order_id']
    }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/success.css">
</head>
<script>
    function initMap() {
        var geocoder = new google.maps.Geocoder();
        var iframe = document.querySelector('iframe');
        var urlParams = new URLSearchParams(iframe.src);
        var locationQuery = urlParams.get('q');
        geocoder.geocode({ address: locationQuery }, function (results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    console.log('City Name:', results[0].address_components[0].long_name);
                }
            } else {
                console.error('Geocode was not successful for the following reason:', status);
            }
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC77k6FOZXp_gRmTeDMGfycTmVSi2U-Nkw&callback=initMap"></script>
<body>
<?php
    if (!empty($sub1) && !empty($sub5) && !empty($sub3) && !empty($sub4)) {
        ?>
        <div class="header_logo_wrapper" style="--_16s97g79: 1fr; --_16s97g7a: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g715: minmax(0, 1fr) minmax(0, 61rem) minmax(0, 1fr); --_16s97g716: minmax(0, 1fr) minmax(0, 110.5rem) minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                              <div class="_1fragemfs _1fragem8s _1fragemao _1fragem6w _1fragemck _1fragemeg">
                                 <div class="_1fragemfs _1fragem9q _1fragemaq _1fragem7u _1fragemcm _1fragemeg _16s97g7ac">
                                    <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgi _1fragemgz">
                                       <div>
                                          <div>
                                             <header class="_1fragemeg _1fragemfy _1fragemgm _1fragemh3 _1fragemeo _1fragemes _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g    _16s97g7ac" style="--_16s97g78: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr) minmax(auto, max-content); --_16s97g71c: minmax(0, 1fr);">
                                                <h1 class="n8k95w1 _1fragemeg n8k95w2">
                                                   <div class="_1fragemfs _1fragemeg _16s97g730" style="--_16s97g72w: 22rem;"><span><a href="#" class="s2kwpi1 _1fragemeg _1fragemmd _1fragemmm s2kwpi3 _1fragemm4 _1fragemm8">
                                                      <img src="https://1983.efuserassets.com/1983/assets/logo/2d09d3be-76c8-05dc-eab3-61ef5692ddd7.png" alt="" width="220" height="59.32992617830778" class="hmHjN"></a></span></div>
                                                   <span class="_1fragemm0">Paiement</span>
                                                </h1>
                                             </header>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
    <div class="sooyq">
        <div class="cLGHj qVVgQ _1fragemjt _1fragemjs">
            <div class="ETRXz">
                <main id="checkout-main" class="jvQbN">
                    <div
                        class="_1fragemk5 _1fragembe _1fragemck _1fragemdh _1fragemf2 _1fragem8w _1fragema2 _1fragemfz _1fragemhk _1fragemir">
                        <div class="_1ip0g651 _1fragemkb _1fragemir _1fragemkz _1fragemlh">
                            <div class="_1fragemk7 _1fragemir _1fragemmd">
                                <header
                                    class="_5uqybw2 _1fragemk7 _1fragemhx _1fragemku _1fragemlc _1fragemj1 _1fragemj5 _1fragemmd">
                                    <div class="_1fragemk5 _1fragemir _16s97g73h _16s97g73r _16s97g741 _16s97g74b"
                                        style="--_16s97g73c: 3rem; --_16s97g73m: 3rem; --_16s97g73w: 3rem; --_16s97g746: 3rem;">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 50 50"
                                            focusable="false" aria-hidden="true" style="color: #1773b0;">
                                            <path stroke-width="2"
                                                d="M49 25c0 13.255-10.745 24-24 24S1 38.255 1 25 11.745 1 25 1s24 10.745 24 24Z"
                                                style="stroke: currentcolor;"></path>
                                            <path stroke-width="2" d="m15 24.511 7.307 7.307L35.125 19"
                                                style="stroke: currentcolor;"></path>
                                        </svg>
                                    </div>
                                    <div class="_1fragemk5 _1fragemir">
                                        <p class="_1x52f9s1 _1fragemir _1x52f9so _1fragemkj _1x52f9si">Confirmation
                                            #AULGH75U8</p>
                                        <h2 class="n8k95w1 _1fragemir n8k95w2">Thank you, <?= $data['firstName']; ?> <?= $data['lastName']; ?>!</h2>
                                    </div>
                                </header>
                            </div>
                            <div class="_1fragemk5 _1fragemir">
                                <div class="_1ip0g651 _1fragemkb _1fragemir _1fragemkx _1fragemlf">
                                    <div class="_1ip0g651 _1fragemkb _1fragemir _1fragemku _1fragemlc">
                                        <section aria-label="Your order is confirmed"
                                            class="_1fragemk5 _1fragempz _1fragemq1 _1fragemms _1fragemmx _1fragemn7 _1fragemn2 _1fragem3w _1fragem3c _1fragem4g _1fragem2s _1fragemir">
                                            <div
                                                class="_1ip0g651 _1fragemkb _1fragemir _1fragemku _1fragemlc _1fragemaz _1fragemdh _1fragem8h _1fragemfz _1fragem3r _1fragem37 _1fragem4b _1fragem2n">
                                                <h2 class="n8k95w1 _1fragemir n8k95w3">Your order is confirmed</h2>
                                                <div class="_1ip0g651 _1fragemkb _1fragemir _1fragemkr _1frageml9">
                                                    <span class="_19gi7yt0 _19gi7ytl _1fragemkj">You’ll receive a
                                                        confirmation email with your order number shortly.</span>
                                                </div>
                                            </div>
                                         
                                        </section>
                                        <iframe
                                            width="100%"
                                            height="300"
                                            style="border:0"
                                            loading="lazy"
                                            allowfullscreen
                                            src="https://www.google.com/maps/embed/v1/place?q=<?= urlencode($data['city']) ?>&key=AIzaSyC77k6FOZXp_gRmTeDMGfycTmVSi2U-Nkw"
                                        ></iframe>
                                        <section aria-label="Order details"
                                            class="_1fragemk5 _1fragemms _1fragemmx _1fragemn7 _1fragemn2 _1fragem3w _1fragem3c _1fragem4g _1fragem2s _1fragemre _1fragemir">
                                            <div
                                                class="_1ip0g651 _1fragemkb _1fragemir _1fragemku _1fragemlc _1fragemaz _1fragemdh _1fragem8h _1fragemfz">
                                                <div class="_1fragemir _1fragemkb _1frageml5 _1fragemln _1fragemlo _1fragemmc _1fragemmg _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
                                                    style="--_16s97g7a: 1fr; --_16s97g7k: minmax(0, 1fr); --_16s97g71e: minmax(auto, max-content) minmax(0, 1fr); --_16s97g71o: minmax(0, 1fr);">
                                                    <h2 class="n8k95w1 _1fragemir n8k95w3">Order details</h2>
                                                </div>
                                                <div class="_1fragemir _1fragemkb _1fragemks _1fragemla _1fragemlp _16s97g7f _16s97g7h _16s97g7p _16s97g71j _16s97g71l _16s97g71t"
                                                    style="--_16s97g7a: minmax(0, 1fr); --_16s97g7c: 1fr; --_16s97g7k: 1fr; --_16s97g71e: minmax(0, 1fr); --_16s97g71g: minmax(0, 1fr)
                                                    minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);">
                                                    <section class="_1fragemk5 _1fragemir">
                                                        <div
                                                            class="_1ip0g651 _1fragemkb _1fragemir _1fragemku _1fragemlc">
                                                            <div
                                                                class="_1ip0g651 _1fragemkb _1fragemir _1fragemks _1fragemla">
                                                                <h3 class="n8k95w1 _1fragemir n8k95w4">Contact
                                                                    information</h3>
                                                                <div
                                                                    class="_1ip0g651 _1fragemkb _1fragemir _1frageml5 _1fragemln">
                                                                    <p
                                                                        class="_1x52f9s1 _1fragemir _1x52f9so _1fragemkj">
                                                                        <?= $data['email']; ?></p>

                                                                </div>
                                                            </div>
                                                            <div
                                                                class="_1ip0g651 _1fragemkb _1fragemir _1fragemks _1fragemla">
                                                                <h3 class="n8k95w1 _1fragemir n8k95w4">Shipping address
                                                                </h3>
                                                                <p class="_1x52f9s1 _1fragemir _1x52f9so _1fragemkj">
                                                                <?= $data['firstName']; ?> <?= $data['lastName']; ?> <br /><?= $data['postalCode']; ?> <br /><?= $data['address1']; ?>
                                                                    <br /><?= $data['country']; ?>
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="_1ip0g651 _1fragemkb _1fragemir _1fragemks _1fragemla">
                                                                <h3 class="n8k95w1 _1fragemir n8k95w4">Shipping method
                                                                </h3>
                                                                <p class="_1x52f9s1 _1fragemir _1x52f9so _1fragemkj">
                                                                    Standard</p>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section class="_1fragemk5 _1fragemir">
                                                        <div
                                                            class="_1ip0g651 _1fragemkb _1fragemir _1fragemku _1fragemlc">
                                                            <div
                                                                class="_1ip0g651 _1fragemkb _1fragemir _1fragemks _1fragemla">
                                                                <h3 class="n8k95w1 _1fragemir n8k95w4">Payment method
                                                                </h3>
                                                                <div
                                                                    class="_1ip0g651 _1fragemkb _1fragemir _1fragemks _1fragemla">
                                                                    <div
                                                                        class="_1ip0g651 _1fragemkb _1fragemir _1frageml5 _1fragemln">
                                                                        <div class="_1fragemk7 _1fragemir _1fragemmd">
                                                                            <div
                                                                                class="_5uqybw2 _1fragemk7 _1fragemhx _1fragemks _1fragemla _1fragemj1 _1fragemj5 _1fragemmd">
                                                                                <!-- <img alt="BOGUS"
                                                                                    src="https://cdn.shopify.com/shopifycloud/checkout-web/assets/f9cb6714da64e73281df.svg"
                                                                                    role="img" width="38" height="24"
                                                                                    class="_1tgdqw61 _1fragemqx _1fragemqs _1fragemr6 _1fragemm8"> -->




                                                                                <p
                                                                                    class="_1x52f9s1 _1fragemir _1x52f9so _1fragemkj">
                                                                                    <?= $data['number']; ?></p> <span
                                                                                        class="_19gi7yt0 _19gi7ytl _1fragemkj">
                                                                                        · &nbsp;<?= $sub3 ?></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="_1ip0g651 _1fragemkb _1fragemir _1fragemks _1fragemla">
                                                                <h3 class="n8k95w1 _1fragemir n8k95w4">Billing address
                                                                </h3>
                                                                <p class="_1x52f9s1 _1fragemir _1x52f9so _1fragemkj">
                                                                <?= $data['firstName']; ?> <?= $data['lastName']; ?> <?= $data['postalCode']; ?> <br /><?= $data['address1']; ?>
                                                                <br /><?= $data['country']; ?>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="oQEAZ">
                                        <div>
                                            <a href="#"
                                                class="QT4by _1fragemjx rqC98 hodFu _7QHNJ VDIfJ j6D1f janiy">
                                                <span class="AjwsM">Continue shopping</span>
                                            </a>
                                        </div>
                                        <div class="center">
                                            <p class="_1x52f9s1 _1fragemir _1x52f9so _1fragemkj _1fragemql">
                                            <div class="go06b0">
                                                <span>Need help? <span id="replacement-thank_you.contact_us_html-0">
                                                        <a href="mailto:"
                                                            class="s2kwpi1 _1fragemir _1fragemqx _1fragemr6 s2kwpi2 _1fragemqp _1fragemqs">Contact
                                                            us</a>
                                                    </span>
                                                </span>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer role="contentinfo" class="mZR1U PSiog _1fragemjt _1fragemjs">
                    <div class="TfwLd">
                        <div>
                            <div class="_1ip0g651 _1fragemkb _1fragemir _1fragemkv _1fragemld">
                                <div class="_1fragemk7 _1fragemir _1fragemmd">
                                    <div
                                        class="_5uqybw2 _1fragemk7 _1fragemhx _1fragemj1 _1fragemj5 _1fragemkq _1fragemlc _1fragemmd">
                                        <span class="_19gi7yt0 _19gi7ytj _1fragemki _19gi7ytb"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="jCic4 _1fragemjt _1fragemjr">
            <div class="blA7b">
                <div class="_1fragemqk">
                    <h2 class="n8k95w1 _1fragemir n8k95w3">Order summary</h2>
                </div>
                <aside>
                    <div>
                        <section class="_1fragemk5 _1fragemir">
                            <div class="_1ip0g651 _1fragemkb _1fragemir _1fragemkw _1fragemle">
                                <div class="_1ip0g651 _1fragemkb _1fragemir _1fragemkw _1fragemle">
                                    <section class="_1fragemk5 _1fragemir">
                                        <div class="_1fragemk5 _1fragemqk _1fragemir">
                                            <h4 id="ResourceList1" class="n8k95w1 _1fragemir n8k95w5">Shopping cart</h4>
                                        </div>
                                        <div role="table" aria-labelledby="ResourceList1"
                                            class="_6zbcq55 _1fragemk7 _1fragemkd _6zbcq56">
                                            <div role="row"
                                                class="_6zbcq51d _1fragemk7 _1fragemj5 _1fragemm9 _6zbcq51b">
                                                <div role="columnheader" class="_6zbcq51e">
                                                    <div class="_1fragemk5 _1fragemqk _1fragemir">Product image</div>
                                                </div>
                                                <div role="columnheader" class="_6zbcq51e">
                                                    <div class="_1fragemk5 _1fragemqk _1fragemir">Description</div>
                                                </div>
                                                <div role="columnheader" class="_6zbcq51e">
                                                    <div class="_1fragemk5 _1fragemqk _1fragemir">Quantity</div>
                                                </div>
                                                <div role="columnheader" class="_6zbcq51e">
                                                    <div class="_1fragemk5 _1fragemqk _1fragemir">Price</div>
                                                </div>
                                            </div>
                                            <div role="row" class="_6zbcq524 _1fragemk7 _1fragem2i _6zbcq52b">
                                                <div role="cell" class="_6zbcq53s _1fragemk7 _1fragemkd _1fragemmd">
                                                    <div class="_1m6j2n32 _1fragemir _1fragemri _1m6j2n33"
                                                        style="--_1m6j2n30: 1;">
                                                        <div class="_1h3po421 _1h3po423 _1fragemir"
                                                            style="--_1h3po420: 1;">
                                                            <picture>
                                                                <source media="(min-width: 0px)"  srcset="<?= $sub5 ?>">
                                                                <img src="<?= $sub5 ?>"
                                                                    alt="Susan Reys  HEAL COUNTRY"
                                                                    class="_1h3po424 _1fragemk5 _1fragemhs _1fragemms _1fragemmx _1fragemn7 _1fragemn2 _1fragem3w _1fragem3c _1fragem4g _1fragem2s _1fragem69 _1fragem5k _1fragem6y _1fragem4v _1fragemi7">
                                                            </picture>
                                                        </div>
                                                        <div class="_1m6j2n3e _1fragemih _1fragemoa _1fragemou">
                                                            <div
                                                                class="_99ss3s1 _1fragemka _1fragemj5 _1fragemmb _99ss3s4 _99ss3s2 _99ss3s8">
                                                                1</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="cell"
                                                    class="_6zbcq53s _1fragemk7 _1fragemkd _1fragemmb _1fragemkg">
                                                    <div class="_1fragemk5 _1fragemir iZ894">
                                                        <p class="_1x52f9s1 _1fragemir _1x52f9so _1fragemkj"><?= $sub1 ?>   </p>
                                                        <div
                                                            class="_1ip0g651 _1fragemkb _1fragemir _1frageml5 _1fragemln">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="cell"
                                                    class="_6zbcq53s _1fragemk7 _1fragemkd _1fragemmb _6zbcq53q">
                                                    <div class="_1fragemk5 _1fragemqk _1fragemir"><span
                                                            class="_19gi7yt0 _19gi7ytl _1fragemkj">1<div
                                                                aria-hidden="true" class="_1fragemk5 _1fragemir"> x
                                                            </div></span></div>
                                                </div>
                                                <div role="cell" class="_6zbcq53s _1fragemk7 _1fragemkd _1fragemmd">
                                                    <div class="_1fragemk7 _1fragemkd _1fragemj6 _1fragemmb _1fragemir _16s97g741 bua0H"
                                                        style="--_16s97g73w: 64px;"><span translate="yes"
                                                            class="_19gi7yt0 _19gi7ytl _1fragemkj notranslate">&nbsp;<?= $sub3 ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="_1ip0g651 _1fragemkb _1fragemir _1fragemkw _1fragemle">
                                    <section aria-label="Discount code or gift card" class="_1fragemk5 _1fragemir">
                                    </section>
                                </div>
                                <section class="_1fragemk5 _1fragemir">
                                    <div class="_1fragemk5 _1fragemqk _1fragemir">
                                        <h4 id="MoneyLine-Heading1" class="n8k95w1 _1fragemir n8k95w5">Cost summary</h4>
                                    </div>
                                    <div role="table" aria-labelledby="MoneyLine-Heading1" class="nfgb6p0">
                                        <div role="row" class="_1qy6ue61 _1fragemkb _1qy6ue65">
                                            <div role="rowheader" class="_1qy6ue67">
                                                <span class="_19gi7yt0 _19gi7ytl _1fragemkj">Subtotal</span>
                                            </div>
                                            <div role="cell" class="_1qy6ue68">
                                                <span translate="yes"
                                                    class="_19gi7yt0 _19gi7ytl _1fragemkj _19gi7yt1 notranslate">&nbsp;<?= $sub3 ?></span>
                                            </div>
                                        </div>
                                        <div role="row" class="_1qy6ue61 _1fragemkb _1qy6ue65">
                                            <div role="rowheader" class="_1qy6ue67">
                                                <div class="_1ip0g651 _1fragemkb _1fragemir _1fragemkq _1frageml8">
                                                    <div class="_1fragemk7 _1fragemir _1fragemmd">
                                                        <div
                                                            class="_5uqybw2 _1fragemk7 _1fragemhx _1fragemkq _1frageml8 _1fragemj1 _1fragemj5 _1fragemmd">
                                                            <span class="_19gi7yt0 _19gi7ytl _1fragemkj">Shipping</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="cell" class="_1qy6ue68">
                                                <span translate="yes"
                                                    class="_19gi7yt0 _19gi7ytl _1fragemkj _19gi7ytc notranslate">Free</span>
                                            </div>
                                        </div>
                                        <div role="row" class="_1qy6ue61 _1fragemkb _1fragemj5 _1x41w3p5">
                                            <div role="rowheader" class="_1x41w3p7">
                                                <span class="_19gi7yt0 _19gi7ytp _1fragemkl _19gi7yt1">Total</span>
                                            </div>
                                            <div role="cell" class="_1x41w3p8">
                                                <div class="_1fragemk7 _1fragemir _1fragemmd">
                                                    <div
                                                        class="_5uqybw2 _1fragemk7 _1fragemhx _1fragemks _1fragemla _1fragemj4 _1fragemmd">
                                                        <!-- <abbr translate="yes"
                                                            class="_19gi7yt0 _19gi7ytj _1fragemki _19gi7ytb notranslate _19gi7ytx _1fragemqo">PKR</abbr> -->
                                                        <strong translate="yes"
                                                            class="_19gi7yt0 _19gi7ytr _1fragemkm _19gi7yt1 notranslate">&nbsp;<?= $sub3 ?></strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </div>
                </aside>
            </div>
        </div>
        <button class="b20QW"><span
                class="IfmSL"><span class="show-summary">Show order summary<div
                        class="_1fragemk9 _16s97g7be _16s97g77x"></div><span
                        class="_1fragemm9 _1fragem2i _1fragemhs _1fragemhn a8x1wua a8x1wue _1fragemk9 a8x1wug a8x1wum"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true"
                            class="a8x1wuo _1fragemk5 _1fragemhs _1fragemhn">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                        </svg></span></span><span>
                    <div class="_1ip0g651 _1fragemkb _1fragemir _1frageml5 _1fragemln _1fragemmg">
                        <p translate="yes"
                            class="_1x52f9s1 _1fragemir _1x52f9ss _1fragemkl _1x52f9s2 _1x52f9sh notranslate">
                            &nbsp;<?= $sub3 ?></p>
                    </div>
                </span></span></button>
    </div>
    <?php  
} else {

    http_response_code(404);
    echo "<div class=\"row\" id=\"subpage\">
    <div id=\"content-wrapper\" class=\"clearfix background-animation color1\">
      <div id=\"pg-store404\">
        <a class=\"back-button\" href=\"https://d3177a6231.nxcli.io/\">
        <svg width=\"34\" height=\"13\" viewBox=\"-5 0 39 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path class=\"arrow-line\" d=\"M32.2692 6.40674L2.73077 6.40674\" stroke=\"#5B5B5B\" stroke-width=\"2\"></path>
            <path class=\"arrow-head\" d=\"M7.84277 0.843018L2.18592 6.49987L7.84277 12.1567\" stroke=\"#5B5B5B\" stroke-width=\"2\"></path>
          </svg>
          <span class=\"back-button-text\">
             Go to Checkout
          </span>
        </a>
        <div id=\"shop-not-found\" class=\"error-message\">
          <h1 class=\"tc\" id=\"hero-text\">404 Not Found</h1>
        </div>
      </div>
    </div>
  </div>";
}
?>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const showSummaryButton = document.querySelector('.show-summary');
        const jCic4Container = document.querySelector('.jCic4');

        showSummaryButton.addEventListener('click', function () {
            if (jCic4Container.style.display === 'none' || jCic4Container.style.display === '') {
                jCic4Container.style.display = 'block';
                showSummaryButton.classList.add('active');
            } else {
                jCic4Container.style.display = 'none';
                showSummaryButton.classList.remove('active');
            }
        });
    });
</script>

</html>