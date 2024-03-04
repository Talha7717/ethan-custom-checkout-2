
<?php

// 1. sub1 = Product name
// 2. sub2 =  {transaction_id}
// 3. sub3 = product price
// 4. sub4 = product description
// 5. ⁠sub5 = Product image
   // Set cookies with the provided values
   setcookie("sub1", $_GET['sub1'], time() + (86400 * 30), "/"); // 30 days expiration
   setcookie("sub5", $_GET['sub5'], time() + (86400 * 30), "/"); // 30 days expiration
   setcookie("sub3", $_GET['sub3'], time() + (86400 * 30), "/");
   setcookie("sub4", $_GET['sub4'], time() + (86400 * 30), "/");
   setcookie("sub2", $_GET['sub2'], time() + (86400 * 30), "/");
   setcookie("width", $_GET['width'], time() + (86400 * 30), "/");
   setcookie("pt", $_GET['pt'], time() + (86400 * 30), "/");

  $sub1 = $_GET['sub1'];
  $sub2 = $_GET['sub2'];
  $sub5 = $_GET['sub5'];
  $sub3 = isset($_GET['sub3']) ?  '$ '.$_GET['sub3'] : '';;
  $sub4 = $_GET['sub4'];
  $width = $_GET['width'];
  $pt = $_GET['pt'];

?>
<html lang="en" dir="ltr" style="">
   <head>
      <title>Checkout </title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, user-scalable=0">
      <meta name="referrer" content="origin">
      <link rel="preload" href="https://fonts.shopifycdn.com/montserrat/montserrat_n4.1d581f6d4bf1a97f4cbc0b88b933bc136d38d178.woff2?h1=dGhlb29kaWUuY29t&amp;hmac=5f1d65ad7d86287445d33e32426abc2cec7623f782f9ccaecdf2e5be81683249" as="font" type="font/woff2" crossorigin="">
      <link rel="preload" href="https://fonts.shopifycdn.com/montserrat/montserrat_n7.c496e9cf2031deec4c4bca338faa81971c8631d4.woff2?h1=dGhlb29kaWUuY29t&amp;hmac=f1c97aab54ce0d07b44455432f3136ee54a31ba3ecce99519505e4baeb23aa78" as="font" type="font/woff2" crossorigin="">
      <style>@font-face { font-family: 'Montserrat'; src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.shopifycdn.com/montserrat/montserrat_n4.1d581f6d4bf1a97f4cbc0b88b933bc136d38d178.woff2?h1=dGhlb29kaWUuY29t&hmac=5f1d65ad7d86287445d33e32426abc2cec7623f782f9ccaecdf2e5be81683249) format('woff2'),url(https://fonts.shopifycdn.com/montserrat/montserrat_n4.cfce41a967758ce5a9b7d48daeb5b028fd977a9b.woff?h1=dGhlb29kaWUuY29t&hmac=7b2ba73b717f0a57df66281b0d3813702293e2740248ee558a2178105042942d) format('woff'); font-style: normal; font-weight: 400; }
         @font-face { font-family: 'Montserrat'; src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.shopifycdn.com/montserrat/montserrat_n7.c496e9cf2031deec4c4bca338faa81971c8631d4.woff2?h1=dGhlb29kaWUuY29t&hmac=f1c97aab54ce0d07b44455432f3136ee54a31ba3ecce99519505e4baeb23aa78) format('woff2'),url(https://fonts.shopifycdn.com/montserrat/montserrat_n7.78b0223375c94b39ce1af7e09a0225f2bb3d05f7.woff?h1=dGhlb29kaWUuY29t&hmac=23c382772c9a34dc38489f6214912a6d2938dba05d13fa6f85ef50de1f2d96a5) format('woff'); font-style: normal; font-weight: 700; }
      </style>
      <link rel="stylesheet" type="text/css" href="css/43.latest.en.b938f41135cc3b105ab2.css">
      <link rel="stylesheet" type="text/css" href="css/926.latest.en.9385b35a5572a09bc3f9.css">
      <script async="" src="https://checkout.shopifycs.com/dist/card_fields.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="css/148.latest.en.bf17ef0135350f9add31.css">
      <link rel="stylesheet" type="text/css" href="css/786.latest.en.a98cd59d9c37d11349dc.css">
      <link rel="stylesheet" href="css/success.css">
   </head>

   <body class="" cz-shortcut-listen="true" style="">

      <style>
         
      </style>
      <link rel="stylesheet" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/576.latest.en.0b463e113780a7092e3c.css" crossorigin="">
      <link rel="stylesheet" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.e5a7f63ca146c0549466.css" crossorigin="">
      <link rel="stylesheet" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/958.latest.en.3388a58cacfe5a93e981.css" crossorigin="">
      <link rel="stylesheet" href="https://cdn.shopify.com/shopifycloud/checkout-web/assets/74.latest.en.8bcf767b70fb8a7ebf43.css" crossorigin="">
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <script>
        function showSummary() {
          $("#link_ss").hide();
          $("#link_hs").show();
          $("#disclosure_content").show();
          
          $("#link_mss").hide();
          $("#link_mhs").show();
          $(".cart_details").show();
        }
        function hideSummary() {
          $("#link_hs").hide();
          $("#link_ss").show();
          $("#disclosure_content").hide();
          
          $("#link_mhs").hide();
          $("#link_mss").show();
          $(".cart_details").hide();
        }
        $(document).ready(function(){
            $('#expiry').on('input', function() {
               var val = this.value;
               var char = val.slice(-1);
               var month = val.substring(0, 2);
               var year = val.substring(3, 5);

               if (isNaN(char) || val.length > 5 || (val.length === 3 && char !== '/') || (val.length === 1 && parseInt(char) > 1) || (val.length === 2 && parseInt(month) > 12) || parseInt(year) > 54 || parseInt(year) < 0) {
                     this.value = val.slice(0, -1);
               }
               else if ((val.length === 2 && char !== '/') || (val.length === 3 && char !== '/')) {
                     this.value += '/';
               }
            });
         });
         $(document).ready(function() {
    $('#number').on('keypress', function(event) {
        var keyCode = event.which;
        // Allow only numbers (0-9)
        if (keyCode < 48 || keyCode > 57) {
            event.preventDefault();
        }
    });
});



      </script>
      <div id="app">
         <div style="--swn0j0: rgb(24,120,185); --swn0j1: rgb(255,255,255); --swn0j2: rgb(32,146,224); --swn0j3: rgb(242,247,255); --swn0j6: rgb(94,105,122); --swn0j7: rgb(242,108,79); --swn0j9: rgb(209,83,50); --swn0j8: rgb(209,83,50); --swn0ja: rgb(255,255,255); --swn0jb: rgb(255,255,255); --swn0j25: rgb(24,120,185); --swn0j26: rgb(24,120,185); --swn0j27: rgb(255,255,255); --swn0j28: rgb(32,146,224); --swn0j29: rgb(242,247,255); --swn0j17: rgb(0, 0, 0); --swn0j2c: rgb(94,105,122); --swn0j2a: rgba(24,120,185,0.05); --swn0j2n: rgba(24,120,185,0.05); --swn0j35: rgba(24,120,185,0.05); --swn0j4i: rgb(24,120,185); --swn0j1m: rgb(242,242,242); --swn0j1o: rgb(210,210,210); --swn0j4j: rgb(24,120,185); --swn0j1n: rgb(0,0,0); --swn0j1q: rgb(233,233,233); --swn0j1r: rgba(0,0,0,0.045); --swn0j1s: rgb(255,255,255); --swn0j1t: rgba(0,0,0,0.56); --swn0j1u: rgba(0,0,0,0.1); --swn0j4k: rgb(255,255,255); --swn0j4l: rgb(32,146,224); --swn0j4m: rgb(242,247,255); --swn0j1p: rgb(0, 0, 0); --swn0j4p: rgb(94,105,122); --swn0j4n: rgba(24,120,185,0.05); --swn0j4q: rgb(195,52,95); --swn0j50: rgba(24,120,185,0.05); --swn0j5i: rgba(24,120,185,0.05); --x-typography-primary-fonts: Montserrat, sans-serif; --x-typography-primary-weight-base: 400; --x-typography-primary-weight-bold: 700; --x-typography-secondary-fonts: Montserrat, sans-serif; --x-typography-secondary-weight-base: 400; --x-typography-secondary-weight-bold: 700;">
            <div class="g9gqqf1 _1fragemg6 _1fragemmu _1fragemfd _1fragemfg">
               <div class="_1fragemfs _1fragemeg">
                  <div class="_1fragemfg _1fragemfd _1fragemfs _1fragemmu _1fragemeg F3k_c">
                     <a href="#checkout-main" class="Xo_dq">Ignorez le contenu</a>
                     <div class="_1fragemfy _1fragemdw">
                        <div class="_1fragemeg _1fragemfy _1fragemgr _1fragemh8 _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: minmax(0, 1fr); --_16s97g7g: 1fr; --_16s97g714: minmax(0, 1fr); --_16s97g71c: minmax(auto, max-content) minmax(0, 1fr) minmax(auto, max-content);">
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
                                                <iframe src="https://www.nhvhtrk.com/?nid=1983&transaction_id={<?= $sub2 ?>}" title="description"></iframe>
                                             </header>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="_1fragemfs _1fragemeg">
                               <aside class="_1fragemfs _1fragemmy _1fragemeg">
                                 <div class="_1fragemeg _1fragemfy _1fragemgr _1fragemh8 _1fragemh9 _1fragemhv _1fragemhz _16s97g7c _16s97g7d _16s97g7k _16s97g718 _16s97g719 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g79: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g715: minmax(0, 61rem); --_16s97g71c: minmax(0, 1fr);">
                                    <div style="width: 100%; overflow-x: clip;">
                                       <button type="button" aria-controls="disclosure_content" aria-expanded="false" class="_1xqelvi1 _1fragemfq _1fragemfs _1fragemeg _1fragemm3 _1fragemmd _1fragemm8 _1fragemmm _1fragem8k _1fragemao _1fragem6o _1fragemck _16s97g7ac _1fragemfu _1fragemev _1xqelvid">
                                          <span class="_1xqelvi2">
                                             <div class="_1fragemeg _1fragemfy _1fragemgf _1fragemgw _1fragemeo _1fragemes _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr) minmax(auto, max-content); --_16s97g71c: minmax(0, 1fr);">
                                                <span onclick="showSummary();" id="link_ss" class="_19gi7yt0 _19gi7yth _1fragemg6">
                                                Afficher le récapitulatif de la commande.
                                                   <div class="_1fragemfw _16s97g78w _16s97g768"></div>
                                                   <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wua a8x1wue _1fragemfw a8x1wug a8x1wum">
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                         <path stroke-linecap="round" stroke-linejoin="round" d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                                                      </svg>
                                                   </span>
                                                </span>
                                                <span onclick="hideSummary();" id="link_hs" style="display:none;" class="_19gi7yt0 _19gi7yth _1fragemg6">
                                                Cacher le récapitulatif de commande.
                                                   <div class="_1fragemfw _16s97g78w _16s97g768"></div>
                                                   <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wua a8x1wue _1fragemfw a8x1wug a8x1wum">
                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk"><path stroke-linecap="round" stroke-linejoin="round" d="m2.1 8.4 4.653-4.653a.35.35 0 0 1 .495 0L11.9 8.4"></path></svg>
                                                   </span>
                                                </span>
                                                <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgr _1fragemh8 _1fragemi0">
                                                  <!--<del translate="yes" class="_19gi7yt0 _19gi7ytf _1fragemg5 _19gi7ytb notranslate _19gi7ytr _1fragemm6">$129.00</del>-->
                                                  <span class="_19gi7yt0 _19gi7ytl _1fragemg8 _19gi7yt1 _19gi7yta finalTotal">  <?= $sub3 ?></span>
                                                </div>
                                             </div>
                                          </span>
                                       </button>
                                    </div>
                                 </div>
                                 <div id="disclosure_content" class="_94sxtb1 _1fragemlf _1fragemlh _1fragemeg _1fragemmf _1fragemmj _1fragemm9" style="height: auto; overflow: visible;">
                                   <div>
                                      <div class="_1fragemfg _1fragemfe _1fragemfs _1fragemmu _1fragemeg">
                                         <div class="_1fragemeg _1fragemfy _1fragemgr _1fragemh8 _1fragemh9 _1fragemhv _1fragemhz _16s97g7c _16s97g7d _16s97g7k _16s97g718 _16s97g719 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g79: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g715: minmax(0, 61rem); --_16s97g71c: minmax(0, 1fr);">
                                            <div class="_1fragemfs _1fragem9o _1fragemao _1fragem7s _1fragemck _1fragemeg _16s97g7ac">
                                               <div class="_1fragemfs _1fragem30 _1fragem2g _1fragem3c _1fragem20 _1fragem8s _1fragembk _1fragem6w _1fragemdg _1fragemeg">
                                                  <div>
                                                     <section class="_1fragemfs _1fragemeg">
                                                        <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0">
                                                           <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0">
                                                              <section class="_1fragemfs _1fragemeg">
                                                                 <div class="_1fragemfs _1fragemm0 _1fragemeg">
                                                                    <h2 id="ResourceList7" class="n8k95w1 _1fragemeg n8k95w3">Chariot de magasinage</h2>
                                                                 </div>
                                                                 <div role="table" aria-labelledby="ResourceList7" class="_6zbcq55 _1fragemfu _1fragemg0 _6zbcq56">
                                                                    <div role="row" class="_6zbcq51d _1fragemfu _1fragemes _1fragemht _6zbcq51b">
                                                                       <div role="columnheader" class="_6zbcq51e">
                                                                          <div class="_1fragemfs _1fragemm0 _1fragemeg">Image du produit.</div>
                                                                       </div>
                                                                       <div role="columnheader" class="_6zbcq51e">
                                                                          <div class="_1fragemfs _1fragemm0 _1fragemeg">Description</div>
                                                                       </div>
                                                                       <div role="columnheader" class="_6zbcq51e">
                                                                          <div class="_1fragemfs _1fragemm0 _1fragemeg">Quantité</div>
                                                                       </div>
                                                                       <div role="columnheader" class="_6zbcq51e">
                                                                          <div class="_1fragemfs _1fragemm0 _1fragemeg">Prix</div>
                                                                       </div>
                                                                    </div>
                                                                    <ul class="packg_selector">
                                                                        <li for="x1">
                                                                            <div class="product_div">
                                                                              <img class="product_img" src="<?= isset($sub5) ? $sub5 : 'https://www.gettle.com/wp-content/uploads/2017/01/default_image.png' ?>" width="80px" height="80px"><span class="count_item">1</span></div>
                                                                            <div class="product_name" style="max-width:initial;">
                                                                            <?= $sub1 ?>  <?= $sub4 ?> </div>
                                                                            <div class="price">  <?= $sub3 ?></div>
                                                                        </li>
                                                                    </ul>
                              
                                                                 </div>
                                                              </section>
                                                           </div>
                                                           <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0">
                                                              <section aria-label="Code de réduction ou carte-cadeau" class="_1fragemfs _1fragemeg">
                                                                 <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                    <form action="" method="POST" novalidate="" id="Form8" class="_1fragemft">
                                                                       <div class="_1fragemeg">
                                                                          <div class="_1fragemeg _1fragemfy _1fragemgd _1fragemgy _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(auto, max-content); --_16s97g714: minmax(0, 1fr) minmax(auto, max-content); --_16s97g71c: minmax(auto, max-content);">
                                                                             <div class="_7ozb2u2 _1fragemgd _1fragemgu _1fragemeg _1fragemfy _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                <div class="_1fragemeg">
                                                                                   <label id="TextField16-label" for="TextField16" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Code de réduction ou carte-cadeau</span></span></label>
                                                                                   <div class="_7ozb2u6 _1fragemeg _1fragemfy _1fragemfr _1fragemmd _1fragemm8 _1fragemmm _1fragemmn _1fragemfh _1fragemmu _7ozb2ul _7ozb2uh"><input id="TextField16" name="reductions" placeholder="Code de réduction ou carte-cadeau" type="text" aria-labelledby="TextField16-label" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _7ozb2u11 _7ozb2u1j"></div>
                                                                                </div>
                                                                             </div>
                                                                             <button type="submit" disabled="" aria-label="Apply Discount Code" class="QT4by rqC98 EbLsk _7QHNJ VDIfJ janiy Fox6W hlBcn"><span class="AjwsM">Appliquer</span></button>
                                                                          </div>
                                                                       </div>
                                                                       <div class="_1fragemfs _1fragemm0 _1fragemeg"><button type="submit" tabindex="-1" aria-hidden="true">Soumettre</button></div>
                                                                    </form>
                                                                    <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                       <!--<ul aria-label="Code de réduction ou carte-cadeau" class="_5uqybw2 _1fragemfu _1fragemds _1fragemgf _1fragemgw _1fragemeq _1fragemeu _1fragemhx">
                                                                          <li class="_1fragemfs _1fragemeg">
                                                                             <div class="i8os0m1 _1fragem88 _1fragem6c _1fragemc4 _1fragema8 _1fragemfx _1fragemes _1fragemlx">
                                                                                <span class="i8os0m2">
                                                                                   <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wu3 _1fragemfs a8x1wui a8x1wum">
                                                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                         <path stroke-linecap="round" d="M7.284 1.402h4.964a.35.35 0 0 1 .35.35v4.964a.7.7 0 0 1-.205.495L7.49 12.115a.7.7 0 0 1-.99 0L1.885 7.5a.7.7 0 0 1 0-.99L6.79 1.607a.7.7 0 0 1 .495-.205Z"></path>
                                                                                         <circle cx="9.1" cy="4.9" r="0.7"></circle>
                                                                                         <path stroke-linecap="round" stroke-linejoin="round" d="M9.102 4.897h-.005v.005h.005z"></path>
                                                                                      </svg>
                                                                                   </span>
                                                                                </span>
                                                                                <span class="i8os0m3"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">ÉTÉ</span></span>
                                                                                <button type="button" aria-label="Remove SUMMER" class="i8os0m5 _1fragem8c _1fragema8 _1fragem6g _1fragemc4 _1fragemfs _1fragemme _1fragemm8 _1fragemmm">
                                                                                   <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wua _1fragemfs a8x1wuh a8x1wum">
                                                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                         <path stroke-linecap="round" d="M2.8 2.8 7 7m4.2 4.2L7 7m0 0 4.2-4.2M7 7l-4.2 4.2"></path>
                                                                                      </svg>
                                                                                   </span>
                                                                                </button>
                                                                             </div>
                                                                          </li>
                                                                       </ul>-->
                                                                    </div>
                                                                 </div>
                                                              </section>
                                                           </div>
                                                           <section class="_1fragemfs _1fragemeg">
                                                              <div class="_1fragemfs _1fragemm0 _1fragemeg">
                                                                 <h2 id="MoneyLine-Heading7" class="n8k95w1 _1fragemeg n8k95w3">Résumé des coûts</h2>
                                                              </div>
                                                              <div role="table" aria-labelledby="MoneyLine-Heading7" class="nfgb6p0">
                                                                 <div role="row" class="_1qy6ue61 _1fragemfy _1qy6ue65">
                                                                    <div role="rowheader" class="_1qy6ue67"><span class="_19gi7yt0 _19gi7yth _1fragemg6">Sous-total</span></div>
                                                                    <div role="cell" class="_1qy6ue68"><span translate="yes" class="_19gi7yt0 _19gi7yth _1fragemg6 _19gi7yt1 notranslate subTotal">  <?= $sub3 ?></span></div>
                                                                 </div>
                                                                 
                                                          
                                                                 </div>
                                                                 <div role="row" class="_1x41w3p1 _1fragemfy _1fragemes _1x41w3p5">
                                                                    <div role="rowheader" class="_1x41w3p7">
                                                                       <span class="_19gi7yt0 _19gi7ytl _1fragemg8 _19gi7yt1">Total</span>
                                                                       
                                                                    </div>
                                                                    <div role="cell" class="_1x41w3p8">
                                                                       <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                          <div class="_5uqybw2 _1fragemfu _1fragemds _1fragemgf _1fragemgw _1fragemer _1fragemhx"><abbr translate="yes" class="_19gi7yt0 _19gi7ytf _1fragemg5 _19gi7ytb notranslate _19gi7ytt _1fragemm4"></abbr><strong translate="yes" class="_19gi7yt0 _19gi7ytl _1fragemg8 _19gi7yt1 notranslate finalTotal">  <?= $sub3 ?></strong></div>
                                                                       </div>
                                                                    </div>
                                                                 </div>
                                                              </div>
                                                              <div class="_16s97g754"></div>
                                                              <div role="row" class="_1x41w3p1 _1fragemfy _1fragemes _1x41w3p5">
                                                                 <div role="rowheader" class="_1x41w3p7">
                                                                    <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                       <!--<div class="_5uqybw2 _1fragemfu _1fragemds _1fragemgf _1fragemgw _1fragemeo _1fragemes _1fragemhx">
                                                                          <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wua _1fragemfs a8x1wui a8x1wum">
                                                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m10.802 15.686 5.367-5.368a.15.15 0 0 0 .046-.109V4.144m-2.998-.95h-5.67a.16.16 0 0 0-.11.046L1.779 8.897a.154.154 0 0 0 0 .219l5.594 5.593c.06.06.158.06.218 0l5.658-5.657a.15.15 0 0 0 .045-.11v-5.67a.077.077 0 0 0-.077-.077Zm-3.06 3.749a.643.643 0 1 1-1.286 0 .643.643 0 0 1 1.286 0m-.648-.005h.01v.01h-.01z"></path>
                                                                             </svg>
                                                                          </span>
                                                                          <strong class="_19gi7yt0 _19gi7yth _1fragemg6 _19gi7yt1">ÉPARGNE TOTALE</strong><strong translate="yes" class="_19gi7yt0 _19gi7yth _1fragemg6 _19gi7yt1 notranslate">$25.00</strong>
                                                                       </div>-->
                                                                    </div>
                                                                 </div>
                                                                 <div role="cell" class="_1x41w3p8"></div>
                                                              </div>
                                                           </section>
                                                        </div>
                                                     </section>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                              </aside>
                              <div class="_1fragemeg _1fragemfy _1fragemgr _1fragemh8 _1fragemha _16s97g7c _16s97g7d _16s97g7e _16s97g7k _16s97g718 _16s97g719 _16s97g71a _16s97g71g   _16s97g78a" style="--_16s97g78: minmax(0, 1fr); --_16s97g79: 1fr; --_16s97g7a: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g715: minmax(0, 1fr) minmax(0, 61rem) minmax(0, 1fr); --_16s97g716: minmax(0, 1fr) minmax(0, 65rem) minmax(0, 45.5rem) minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                 <div class="_16s97g7s" style="--_16s97g7o: span 2;">
                                    <div class="_1fragemeg _1fragemfy _1fragemgr _1fragemh8 _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g   _16s97g788" style="--_16s97g78: minmax(0, 1fr); --_16s97g7g: 1fr; --_16s97g714: minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr) minmax(auto, max-content);">
                                    
                                    <form method="post" action="payment_api.php">
                                       <div class="_1fragemfu _1fragemg0 _1fragemet _1fragemeg">
                                          <div class="_1fragemfs _1fragem8t _1fragemap _1fragem6x _1fragemcl _1fragemeg _16s97g77s  _16s97g732" style="--_16s97g72y: 65rem;">
                                             <main id="checkout-main" class="_1fragemfs _1fragem8u _1fragemaq _1fragem6y _1fragemcm _1fragemeg _16s97g7ac">
                                                <div id="OnePageFrame" class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0">
                                                   <form action="" method="POST" novalidate="" id="Form0" class="_1fragemft">
                                                      <div class="_1fragemeg">
                                                         <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy _1fragem9o _1fragembk _1fragem7s _1fragemdg">
                                                            <div class="hhdYQ">
                                                               <section class="_1fragemfg _1fragemfd _1fragemfs _1fragem8s _1fragem9p _1fragemao _1fragembl _1fragem6w _1fragem7t _1fragemck _1fragemdh _1fragemmu _1fragemeg">
                                                                  <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgr _1fragemh8">
                                                                     <div>
                                                                        <div>
                                                                           <div>
                                                                              <div class="Rne9s">
                                                                                 <h2 class="n8k95w1 _1fragemeg n8k95w2">Contact</h2>
                                                                              </div>
                                                                              <div class="_16s97g74g"></div>
                                                                              <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                 <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                                    <div class="_7ozb2u2 _1fragemgd _1fragemgu _1fragemeg _1fragemfy _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                       <div class="_1fragemeg">
                                                                                          <label id="email-label" for="email" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">E-mail</span></span></label>
                                                                                          <div class="_7ozb2u6 _1fragemeg _1fragemfy _1fragemfr _1fragemmd _1fragemm8 _1fragemmm _1fragemmn _1fragemfh _1fragemmu _7ozb2ul _7ozb2uh"><input id="email" name="email" placeholder="E-mail" type="email" aria-labelledby="email-label" autocomplete="shipping email" data-protected-input="true" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _7ozb2u12 _7ozb2u1j" autofocus="true"></div>
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                                 <div class="xMIj4"></div>
                                                                                 <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgp _1fragemh6">
                                                                                    <div>
                                                                                       <div class="_1fragemeg _1fragemfu">
                                                                                          <div class="_1mmswk95 _1fragemeg">
                                                                                             <input type="checkbox" id="marketing_opt_in" name="marketing_opt_in" class="_1mmswk97 _1fragemi7 _1fragemi5 _1fragemi9 _1fragemi3 _1fragemj3 _1fragemiz _1fragemj7 _1fragemiv _1fragem4w _1fragem4c _1fragem5g _1fragem3s _1fragemfq _1fragemfs _1fragemht _1fragem1w _1fragemmd _1fragemm7 _1fragemmj _1fragemfh _1fragemmu">
                                                                                             <div class="_1mmswk9l _1fragemfh _1fragemlz _1fragemli _1frageme8 _1fragemm7 _1fragemmm _1fragemmd">
                                                                                                <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wua _1fragemfs a8x1wug a8x1wum">
                                                                                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                                      <path stroke-linecap="round" stroke-linejoin="round" d="m12.1 2.8-5.877 8.843a.35.35 0 0 1-.54.054L1.4 7.4"></path>
                                                                                                   </svg>
                                                                                                </span>
                                                                                             </div>
                                                                                          </div>
                                                                                          <label for="marketing_opt_in" class="_1mmswk9h _1fragemfs _1fragemdo _1fragemfq _1fragemc8">Envoyez-moi un courrier électronique avec des nouvelles et des offres.</label>
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                              <div class="_16s97g74s"></div>                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </section>
                                                               <div class="_16s97g74g _16s97g74x"></div>
                                                               <div>
                                                                  <div>
                                                                     <section class="_1fragemfg _1fragemfd _1fragemfs _1fragem8s _1fragem9p _1fragemao _1fragembl _1fragem6w _1fragem7t _1fragemck _1fragemdh _1fragemmu _1fragemeg">
                                                                        <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                           <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgd _1fragemgu">
                                                                              <h2 class="n8k95w1 _1fragemeg n8k95w2">Livraison</h2>
                                                                           </div>
                                                                           <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgk _1fragemh1">
                                                                              <section aria-label="Shipping address" class="_1fragemfs _1fragemeg">
                                                                                 <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                    <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgk _1fragemh1">
                                                                                       <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                          <div>
                                                                                             <div id="shippingAddressForm">
                                                                                                <div aria-hidden="false" class="pxSEU">
                                                                                                   <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                                      <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: minmax(0, 1fr); --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                                                         <div class="vTXBW _1fragemfh _10vrn9p1 _10vrn9p0 _10vrn9p4">
                                                                                                            <div>
                                                                                                               <div class="j2JE7 _1fragemfh">
                                                                                                                  <label for="Select0" class="QOQ2V NKh24"><span class="KBYKh"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Pays/Région.</span></span></label>
                                                                                                                  <select name="countryCode" id="Select0" required="" autocomplete="shipping country" class="_b6uH _1fragemmu yA4Q8 vYo81 RGaKd">
                                                                                                                        <option value="">---Sélectionner---</option>
                                                                                                                        <option value="AFG">Afghanistan</option>
                                                                                                                        <option value="ALA">Åland Islands</option>
                                                                                                                        <option value="ALB">Albania</option>
                                                                                                                        <option value="DZA">Algeria</option>
                                                                                                                        <option value="ASM">American Samoa</option>
                                                                                                                        <option value="AND">Andorra</option>
                                                                                                                        <option value="AGO">Angola</option>
                                                                                                                        <option value="AIA">Anguilla</option>
                                                                                                                        <option value="ATA">Antarctica</option>
                                                                                                                        <option value="ATG">Antigua and Barbuda</option>
                                                                                                                        <option value="ARG">Argentina</option>
                                                                                                                        <option value="ARM">Armenia</option>
                                                                                                                        <option value="ABW">Aruba</option>
                                                                                                                        <option value="AUS">Australia</option>
                                                                                                                        <option value="AUT">Austria</option>
                                                                                                                        <option value="AZE">Azerbaijan</option>
                                                                                                                        <option value="BHS">Bahamas</option>
                                                                                                                        <option value="BHR">Bahrain</option>
                                                                                                                        <option value="BGD">Bangladesh</option>
                                                                                                                        <option value="BRB">Barbados</option>
                                                                                                                        <option value="BLR">Belarus</option>
                                                                                                                        <option value="BEL">Belgium</option>
                                                                                                                        <option value="BLZ">Belize</option>
                                                                                                                        <option value="BEN">Benin</option>
                                                                                                                        <option value="BMU">Bermuda</option>
                                                                                                                        <option value="BTN">Bhutan</option>
                                                                                                                        <option value="BOL">Bolivia, Plurinational State of</option>
                                                                                                                        <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                                                                                                                        <option value="BIH">Bosnia and Herzegovina</option>
                                                                                                                        <option value="BWA">Botswana</option>
                                                                                                                        <option value="BVT">Bouvet Island</option>
                                                                                                                        <option value="BRA">Brazil</option>
                                                                                                                        <option value="IOT">British Indian Ocean Territory</option>
                                                                                                                        <option value="BRN">Brunei Darussalam</option>
                                                                                                                        <option value="BGR">Bulgaria</option>
                                                                                                                        <option value="BFA">Burkina Faso</option>
                                                                                                                        <option value="BDI">Burundi</option>
                                                                                                                        <option value="KHM">Cambodia</option>
                                                                                                                        <option value="CMR">Cameroon</option>
                                                                                                                        <option value="CAN">Canada</option>
                                                                                                                        <option value="CPV">Cape Verde</option>
                                                                                                                        <option value="CYM">Cayman Islands</option>
                                                                                                                        <option value="CAF">Central African Republic</option>
                                                                                                                        <option value="TCD">Chad</option>
                                                                                                                        <option value="CHL">Chile</option>
                                                                                                                        <option value="CHN">China</option>
                                                                                                                        <option value="CXR">Christmas Island</option>
                                                                                                                        <option value="CCK">Cocos (Keeling) Islands</option>
                                                                                                                        <option value="COL">Colombia</option>
                                                                                                                        <option value="COM">Comoros</option>
                                                                                                                        <option value="COG">Congo</option>
                                                                                                                        <option value="COD">Congo, the Democratic Republic of the</option>
                                                                                                                        <option value="COK">Cook Islands</option>
                                                                                                                        <option value="CRI">Costa Rica</option>
                                                                                                                        <option value="CIV">Côte d'Ivoire</option>
                                                                                                                        <option value="HRV">Croatia</option>
                                                                                                                        <option value="CUB">Cuba</option>
                                                                                                                        <option value="CUW">Curaçao</option>
                                                                                                                        <option value="CYP">Cyprus</option>
                                                                                                                        <option value="CZE">Czech Republic</option>
                                                                                                                        <option value="DNK">Denmark</option>
                                                                                                                        <option value="DJI">Djibouti</option>
                                                                                                                        <option value="DMA">Dominica</option>
                                                                                                                        <option value="DOM">Dominican Republic</option>
                                                                                                                        <option value="ECU">Ecuador</option>
                                                                                                                        <option value="EGY">Egypt</option>
                                                                                                                        <option value="SLV">El Salvador</option>
                                                                                                                        <option value="GNQ">Equatorial Guinea</option>
                                                                                                                        <option value="ERI">Eritrea</option>
                                                                                                                        <option value="EST">Estonia</option>
                                                                                                                        <option value="ETH">Ethiopia</option>
                                                                                                                        <option value="FLK">Falkland Islands (Malvinas)</option>
                                                                                                                        <option value="FRO">Faroe Islands</option>
                                                                                                                        <option value="FJI">Fiji</option>
                                                                                                                        <option value="FIN">Finland</option>
                                                                                                                        <option value="FRA" selected="selected">France</option>
                                                                                                                        <option value="GUF">French Guiana</option>
                                                                                                                        <option value="PYF">French Polynesia</option>
                                                                                                                        <option value="ATF">French Southern Territories</option>
                                                                                                                        <option value="GAB">Gabon</option>
                                                                                                                        <option value="GMB">Gambia</option>
                                                                                                                        <option value="GEO">Georgia</option>
                                                                                                                        <option value="DEU">Germany</option>
                                                                                                                        <option value="GHA">Ghana</option>
                                                                                                                        <option value="GIB">Gibraltar</option>
                                                                                                                        <option value="GRC">Greece</option>
                                                                                                                        <option value="GRL">Greenland</option>
                                                                                                                        <option value="GRD">Grenada</option>
                                                                                                                        <option value="GLP">Guadeloupe</option>
                                                                                                                        <option value="GUM">Guam</option>
                                                                                                                        <option value="GTM">Guatemala</option>
                                                                                                                        <option value="GGY">Guernsey</option>
                                                                                                                        <option value="GIN">Guinea</option>
                                                                                                                        <option value="GNB">Guinea-Bissau</option>
                                                                                                                        <option value="GUY">Guyana</option>
                                                                                                                        <option value="HTI">Haiti</option>
                                                                                                                        <option value="HMD">Heard Island and McDonald Islands</option>
                                                                                                                        <option value="VAT">Holy See (Vatican City State)</option>
                                                                                                                        <option value="HND">Honduras</option>
                                                                                                                        <option value="HKG">Hong Kong</option>
                                                                                                                        <option value="HUN">Hungary</option>
                                                                                                                        <option value="ISL">Iceland</option>
                                                                                                                        <option value="IND">India</option>
                                                                                                                        <option value="IDN">Indonesia</option>
                                                                                                                        <option value="IRN">Iran, Islamic Republic of</option>
                                                                                                                        <option value="IRQ">Iraq</option>
                                                                                                                        <option value="IRL">Ireland</option>
                                                                                                                        <option value="IMN">Isle of Man</option>
                                                                                                                        <option value="ISR">Israel</option>
                                                                                                                        <option value="ITA">Italy</option>
                                                                                                                        <option value="JAM">Jamaica</option>
                                                                                                                        <option value="JPN">Japan</option>
                                                                                                                        <option value="JEY">Jersey</option>
                                                                                                                        <option value="JOR">Jordan</option>
                                                                                                                        <option value="KAZ">Kazakhstan</option>
                                                                                                                        <option value="KEN">Kenya</option>
                                                                                                                        <option value="KIR">Kiribati</option>
                                                                                                                        <option value="PRK">Korea, Democratic People's Republic of</option>
                                                                                                                        <option value="KOR">Korea, Republic of</option>
                                                                                                                        <option value="KWT">Kuwait</option>
                                                                                                                        <option value="KGZ">Kyrgyzstan</option>
                                                                                                                        <option value="LAO">Lao People's Democratic Republic</option>
                                                                                                                        <option value="LVA">Latvia</option>
                                                                                                                        <option value="LBN">Lebanon</option>
                                                                                                                        <option value="LSO">Lesotho</option>
                                                                                                                        <option value="LBR">Liberia</option>
                                                                                                                        <option value="LBY">Libya</option>
                                                                                                                        <option value="LIE">Liechtenstein</option>
                                                                                                                        <option value="LTU">Lithuania</option>
                                                                                                                        <option value="LUX">Luxembourg</option>
                                                                                                                        <option value="MAC">Macao</option>
                                                                                                                        <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                                                                                                                        <option value="MDG">Madagascar</option>
                                                                                                                        <option value="MWI">Malawi</option>
                                                                                                                        <option value="MYS">Malaysia</option>
                                                                                                                        <option value="MDV">Maldives</option>
                                                                                                                        <option value="MLI">Mali</option>
                                                                                                                        <option value="MLT">Malta</option>
                                                                                                                        <option value="MHL">Marshall Islands</option>
                                                                                                                        <option value="MTQ">Martinique</option>
                                                                                                                        <option value="MRT">Mauritania</option>
                                                                                                                        <option value="MUS">Mauritius</option>
                                                                                                                        <option value="MYT">Mayotte</option>
                                                                                                                        <option value="MEX">Mexico</option>
                                                                                                                        <option value="FSM">Micronesia, Federated States of</option>
                                                                                                                        <option value="MDA">Moldova, Republic of</option>
                                                                                                                        <option value="MCO">Monaco</option>
                                                                                                                        <option value="MNG">Mongolia</option>
                                                                                                                        <option value="MNE">Montenegro</option>
                                                                                                                        <option value="MSR">Montserrat</option>
                                                                                                                        <option value="MAR">Morocco</option>
                                                                                                                        <option value="MOZ">Mozambique</option>
                                                                                                                        <option value="MMR">Myanmar</option>
                                                                                                                        <option value="NAM">Namibia</option>
                                                                                                                        <option value="NRU">Nauru</option>
                                                                                                                        <option value="NPL">Nepal</option>
                                                                                                                        <option value="NLD">Netherlands</option>
                                                                                                                        <option value="NCL">New Caledonia</option>
                                                                                                                        <option value="NZL">New Zealand</option>
                                                                                                                        <option value="NIC">Nicaragua</option>
                                                                                                                        <option value="NER">Niger</option>
                                                                                                                        <option value="NGA">Nigeria</option>
                                                                                                                        <option value="NIU">Niue</option>
                                                                                                                        <option value="NFK">Norfolk Island</option>
                                                                                                                        <option value="MNP">Northern Mariana Islands</option>
                                                                                                                        <option value="NOR">Norway</option>
                                                                                                                        <option value="OMN">Oman</option>
                                                                                                                        <option value="PAK">Pakistan</option>
                                                                                                                        <option value="PLW">Palau</option>
                                                                                                                        <option value="PSE">Palestinian Territory, Occupied</option>
                                                                                                                        <option value="PAN">Panama</option>
                                                                                                                        <option value="PNG">Papua New Guinea</option>
                                                                                                                        <option value="PRY">Paraguay</option>
                                                                                                                        <option value="PER">Peru</option>
                                                                                                                        <option value="PHL">Philippines</option>
                                                                                                                        <option value="PCN">Pitcairn</option>
                                                                                                                        <option value="POL">Poland</option>
                                                                                                                        <option value="PRT">Portugal</option>
                                                                                                                        <option value="PRI">Puerto Rico</option>
                                                                                                                        <option value="QAT">Qatar</option>
                                                                                                                        <option value="REU">Réunion</option>
                                                                                                                        <option value="ROU">Romania</option>
                                                                                                                        <option value="RUS">Russian Federation</option>
                                                                                                                        <option value="RWA">Rwanda</option>
                                                                                                                        <option value="BLM">Saint Barthélemy</option>
                                                                                                                        <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                                                                        <option value="KNA">Saint Kitts and Nevis</option>
                                                                                                                        <option value="LCA">Saint Lucia</option>
                                                                                                                        <option value="MAF">Saint Martin (French part)</option>
                                                                                                                        <option value="SPM">Saint Pierre and Miquelon</option>
                                                                                                                        <option value="VCT">Saint Vincent and the Grenadines</option>
                                                                                                                        <option value="WSM">Samoa</option>
                                                                                                                        <option value="SMR">San Marino</option>
                                                                                                                        <option value="STP">Sao Tome and Principe</option>
                                                                                                                        <option value="SAU">Saudi Arabia</option>
                                                                                                                        <option value="SEN">Senegal</option>
                                                                                                                        <option value="SRB">Serbia</option>
                                                                                                                        <option value="SYC">Seychelles</option>
                                                                                                                        <option value="SLE">Sierra Leone</option>
                                                                                                                        <option value="SGP">Singapore</option>
                                                                                                                        <option value="SXM">Sint Maarten (Dutch part)</option>
                                                                                                                        <option value="SVK">Slovakia</option>
                                                                                                                        <option value="SVN">Slovenia</option>
                                                                                                                        <option value="SLB">Solomon Islands</option>
                                                                                                                        <option value="SOM">Somalia</option>
                                                                                                                        <option value="ZAF">South Africa</option>
                                                                                                                        <option value="SGS">South Georgia and the South Sandwich Islands</option>
                                                                                                                        <option value="SSD">South Sudan</option>
                                                                                                                        <option value="ESP">Spain</option>
                                                                                                                        <option value="LKA">Sri Lanka</option>
                                                                                                                        <option value="SDN">Sudan</option>
                                                                                                                        <option value="SUR">Suriname</option>
                                                                                                                        <option value="SJM">Svalbard and Jan Mayen</option>
                                                                                                                        <option value="SWZ">Swaziland</option>
                                                                                                                        <option value="SWE">Sweden</option>
                                                                                                                        <option value="CHE">Switzerland</option>
                                                                                                                        <option value="SYR">Syrian Arab Republic</option>
                                                                                                                        <option value="TWN">Taiwan, Province of China</option>
                                                                                                                        <option value="TJK">Tajikistan</option>
                                                                                                                        <option value="TZA">Tanzania, United Republic of</option>
                                                                                                                        <option value="THA">Thailand</option>
                                                                                                                        <option value="TLS">Timor-Leste</option>
                                                                                                                        <option value="TGO">Togo</option>
                                                                                                                        <option value="TKL">Tokelau</option>
                                                                                                                        <option value="TON">Tonga</option>
                                                                                                                        <option value="TTO">Trinidad and Tobago</option>
                                                                                                                        <option value="TUN">Tunisia</option>
                                                                                                                        <option value="TUR">Turkey</option>
                                                                                                                        <option value="TKM">Turkmenistan</option>
                                                                                                                        <option value="TCA">Turks and Caicos Islands</option>
                                                                                                                        <option value="TUV">Tuvalu</option>
                                                                                                                        <option value="UGA">Uganda</option>
                                                                                                                        <option value="UKR">Ukraine</option>
                                                                                                                        <option value="ARE">United Arab Emirates</option>
                                                                                                                        <option value="GBR">United Kingdom</option>
                                                                                                                        <option value="USA">United States</option>
                                                                                                                        <option value="UMI">United States Minor Outlying Islands</option>
                                                                                                                        <option value="URY">Uruguay</option>
                                                                                                                        <option value="UZB">Uzbekistan</option>
                                                                                                                        <option value="VUT">Vanuatu</option>
                                                                                                                        <option value="VEN">Venezuela, Bolivarian Republic of</option>
                                                                                                                        <option value="VNM">Viet Nam</option>
                                                                                                                        <option value="VGB">Virgin Islands, British</option>
                                                                                                                        <option value="VIR">Virgin Islands, U.S.</option>
                                                                                                                        <option value="WLF">Wallis and Futuna</option>
                                                                                                                        <option value="ESH">Western Sahara</option>
                                                                                                                        <option value="YEM">Yemen</option>
                                                                                                                        <option value="ZMB">Zambia</option>
                                                                                                                        <option value="ZWE">Zimbabwe</option>
                                                                                                                  </select>
                                                                                                                  <div class="TUEJq">
                                                                                                                     <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wu3 _1fragemfs a8x1wug a8x1wum">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                                                           <path stroke-linecap="round" stroke-linejoin="round" d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                                                                                                                        </svg>
                                                                                                                     </span>
                                                                                                                  </div>
                                                                                                               </div>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                      </div>
                                                                                                      <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: minmax(0, 1fr); --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                                                         <div class="_7ozb2u2 _1fragemgd _1fragemgu _1fragemeg _1fragemfy _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                                            <div class="_1fragemeg">
                                                                                                               <label id="TextField0-label" for="TextField0" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Prénom</span></span></label>
                                                                                                               <div class="_7ozb2u6 _1fragemeg _1fragemfy _1fragemfr _1fragemmd _1fragemm8 _1fragemmm _1fragemmn _1fragemfh _1fragemmu _7ozb2ul _7ozb2uh"><input id="TextField0" name="firstName" placeholder="Prénom" required="" type="text" aria-required="true" aria-labelledby="TextField0-label" autocomplete="shipping given-name" data-protected-input="true" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _7ozb2u11 _7ozb2u1j"></div>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                         <div class="_7ozb2u2 _1fragemgd _1fragemgu _1fragemeg _1fragemfy _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                                            <div class="_1fragemeg">
                                                                                                               <label id="TextField1-label" for="TextField1" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Nom de famille</span></span></label>
                                                                                                               <div class="_7ozb2u6 _1fragemeg _1fragemfy _1fragemfr _1fragemmd _1fragemm8 _1fragemmm _1fragemmn _1fragemfh _1fragemmu _7ozb2ul _7ozb2uh"><input id="TextField1" name="lastName" placeholder="Nom de famille" required="" type="text" aria-required="true" aria-labelledby="TextField1-label" autocomplete="shipping family-name" data-protected-input="true" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _7ozb2u11 _7ozb2u1j"></div>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                      </div>
                                                                                                      <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: minmax(0, 1fr); --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                                                         <div class="Vob8N R5Ptu">
                                                                                                            <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgf _1fragemgw">
                                                                                                               <div>
                                                                                                                  <div class="_7ozb2u2 _1fragemgd _1fragemgu _1fragemeg _1fragemfy _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                                                     <div class="_1fragemeg">
                                                                                                                        <label id="shipping-address1-label" for="shipping-address1" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Adresse</span></span></label>
                                                                                                                        <div class="_7ozb2u6 _1fragemeg _1fragemfy _1fragemfr _1fragemmd _1fragemm8 _1fragemmm _1fragemmn _1fragemfh _1fragemmu _7ozb2ul _7ozb2uh">
                                                                                                                           <input id="shipping-address1" name="address1" placeholder="Address" required="" type="text" aria-autocomplete="list" aria-controls="shipping-address1-options" aria-owns="shipping-address1-options" aria-expanded="false" aria-required="true" aria-labelledby="shipping-address1-label" aria-haspopup="listbox" role="combobox" autocomplete="shipping address-line1" autocorrect="off" data-protected-input="true" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _1fragemif _1fragemip _7ozb2u11 _7ozb2u1j">
                                                                                                                           <div class="_1fragemeg _1fragemmo _1fragemex _1fragemfo _7ozb2u1g">
                                                                                                                              <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wu3 _1fragemfs a8x1wui a8x1wum">
                                                                                                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                                                                    <path stroke-linecap="round" d="M9.16 9.159a4.194 4.194 0 1 0-5.933-5.93 4.194 4.194 0 0 0 5.934 5.93Zm0 0L12.6 12.6"></path>
                                                                                                                                 </svg>
                                                                                                                              </span>
                                                                                                                           </div>
                                                                                                                        </div>
                                                                                                                     </div>
                                                                                                                  </div>
                                                                                                               </div>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                      </div>
                                                                                                      <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: minmax(0, 1fr); --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                                                         <div class="_7ozb2u2 _1fragemgd _1fragemgu _1fragemeg _1fragemfy _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                                            <div class="_1fragemeg">
                                                                                                               <label id="TextField8-label" for="TextField8" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Ville</span></span></label>
                                                                                                               <div class="_7ozb2u6 _1fragemeg _1fragemfy _1fragemfr _1fragemmd _1fragemm8 _1fragemmm _1fragemmn _1fragemfh _1fragemmu _7ozb2ul _7ozb2uh"><input id="TextField8" name="city" placeholder="Ville" required="" type="text" aria-required="true" aria-labelledby="TextField8-label" autocomplete="shipping address-level2" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _7ozb2u11 _7ozb2u1j"></div>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                         <div class="vTXBW _1fragemfh _10vrn9p1 _10vrn9p0 _10vrn9p4">
                                                                                                            <div>
                                                                                                               <div class="j2JE7 _1fragemfh">
                                                                                                                  <select style="padding-top:5px;" name="zone" id="Select1" required="" autocomplete="shipping address-level1" class="_b6uH _1fragemmu yA4Q8 vYo81 RGaKd">
                                                                                                                    <option value="">Select state</option>
                                                                                                                    <option value="WF-AL">Alo</option>
                                                                                                                    <option value="A">Alsace</option>
                                                                                                                    <option value="B">Aquitaine</option>
                                                                                                                    <option value="C">Auvergne</option>
                                                                                                                    <option value="ARA">Auvergne-Rhône-Alpes</option>
                                                                                                                    <option value="BFC">Bourgogne-Franche-Comté</option>
                                                                                                                    <option value="BRE">Brittany</option>
                                                                                                                    <option value="D">Burgundy</option>
                                                                                                                    <option value="CVL">Centre-Val de Loire</option>
                                                                                                                    <option value="G">Champagne-Ardenne</option>
                                                                                                                    <option value="COR">Corsica</option>
                                                                                                                    <option value="I">Franche-Comté</option>
                                                                                                                    <option value="GF">French Guiana</option>
                                                                                                                    <option value="PF">French Polynesia</option>
                                                                                                                    <option value="GES">Grand Est</option>
                                                                                                                    <option value="GP">Guadeloupe</option>
                                                                                                                    <option value="HDF">Hauts-de-France</option>
                                                                                                                    <option value="IDF">Île-de-France</option>
                                                                                                                    <option value="K">Languedoc-Roussillon</option>
                                                                                                                    <option value="L">Limousin</option>
                                                                                                                    <option value="M">Lorraine</option>
                                                                                                                    <option value="P">Lower Normandy</option>
                                                                                                                    <option value="MQ">Martinique</option>
                                                                                                                    <option value="YT">Mayotte</option>
                                                                                                                    <option value="O">Nord-Pas-de-Calais</option>
                                                                                                                    <option value="NOR">Normandy</option>
                                                                                                                    <option value="NAQ">Nouvelle-Aquitaine</option>
                                                                                                                    <option value="OCC">Occitania</option>
                                                                                                                    <option value="75">Paris</option>
                                                                                                                    <option value="PDL">Pays de la Loire</option>
                                                                                                                    <option value="S">Picardy</option>
                                                                                                                    <option value="T">Poitou-Charentes</option>
                                                                                                                    <option value="PAC">Provence-Alpes-Côte d'Azur</option>
                                                                                                                    <option value="RE">Réunion</option>
                                                                                                                    <option value="V">Rhône-Alpes</option>
                                                                                                                    <option value="BL">Saint Barthélemy</option>
                                                                                                                    <option value="MF">Saint Martin</option>
                                                                                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                                                                                    <option value="WF-SG">Sigave</option>
                                                                                                                    <option value="Q">Upper Normandy</option>
                                                                                                                    <option value="WF-UV">Uvea</option>
                                                                                                                    <option value="WF">Wallis and Futuna</option>
                                                                                                                  </select>
                                                                                                                  <div class="TUEJq">
                                                                                                                     <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wu3 _1fragemfs a8x1wug a8x1wum">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                                                           <path stroke-linecap="round" stroke-linejoin="round" d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                                                                                                                        </svg>
                                                                                                                     </span>
                                                                                                                  </div>
                                                                                                               </div>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                         <div class="ii1aN">
                                                                                                            <div class="_7ozb2u2 _1fragemgd _1fragemgu _1fragemeg _1fragemfy _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                                               <div class="_1fragemeg">
                                                                                                                  <label id="TextField9-label" for="TextField9" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Code postal</span></span></label>
                                                                                                                  <div class="_7ozb2u6 _1fragemeg _1fragemfy _1fragemfr _1fragemmd _1fragemm8 _1fragemmm _1fragemmn _1fragemfh _1fragemmu _7ozb2ul _7ozb2uh"><input id="TextField9" name="postalCode" placeholder="Code postal" required="" type="text" inputmode="numeric" aria-required="true" aria-labelledby="TextField9-label" autocomplete="shipping postal-code" autocapitalize="characters" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _7ozb2u11 _7ozb2u1j"></div>
                                                                                                               </div>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                      </div>
                                                                                                      <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: minmax(0, 1fr); --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                                                         <div class="_7ozb2u2 _1fragemgd _1fragemgu _1fragemeg _1fragemfy _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                                            <div class="_1fragemeg">
                                                                                                               <label id="TextField5-label" for="TextField5" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Téléphone</span></span></label>
                                                                                                               <div class="_7ozb2u6 _1fragemeg _1fragemfy _1fragemfr _1fragemmd _1fragemm8 _1fragemmm _1fragemmn _1fragemfh _1fragemmu _7ozb2ul _7ozb2uh">
                                                                                                                  <input id="TextField5" name="phone" placeholder="Téléphone" required="" type="tel" aria-required="true" aria-labelledby="TextField5-label" autocomplete="shipping tel" data-protected-input="true" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _1fragemif _1fragemip _7ozb2u10 _7ozb2u1j">
                                                                                                                  <div class="_1fragemeg _1fragemmo _1fragemex _1fragemfo _7ozb2u1g">
                                                                                                                     <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                                                                        <div class="_5uqybw2 _1fragemfu _1fragemds _1fragemgh _1fragemgy _1fragemeo _1fragemes _1fragemhx">
                                                                                                                           <button type="button" class="_1xqelvi1 _1fragemfq _1fragemfs _1fragemeg _1fragemm3 _1fragemmd _1fragemm8 _1fragemmm _1fragemfu _1fragemev">
                                                                                                                              <span class="_1xqelvi2">
                                                                                                                                 <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wu3 _1fragemfs a8x1wui a8x1wum">
                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-label="More information" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                                                                       <circle cx="7" cy="7" r="5.6"></circle>
                                                                                                                                       <path stroke-linecap="round" stroke-linejoin="round" d="M5.6 5.1c.2-1.3 2.6-1.3 2.8 0S6.95 6.4 6.95 7.45m.055 2.35H7v.005h.005z"></path>
                                                                                                                                       <circle cx="7" cy="9.7" r="0.1"></circle>
                                                                                                                                    </svg>
                                                                                                                                 </span>
                                                                                                                              </span>
                                                                                                                           </button>
                                                                                                                        </div>
                                                                                                                     </div>
                                                                                                                  </div>
                                                                                                               </div>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                      </div>
                                                                                                      <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                                         <div>
                                                                                                            <div class="_1fragemeg _1fragemfu">
                                                                                                               <div class="_1mmswk95 _1fragemeg">
                                                                                                                  <input type="checkbox" id="sms_marketing_opt_in" name="sms_marketing_opt_in" aria-expanded="false" aria-controls="smsMarketingOptInDisclosureContent-transition" class="_1mmswk97 _1fragemi7 _1fragemi5 _1fragemi9 _1fragemi3 _1fragemj3 _1fragemiz _1fragemj7 _1fragemiv _1fragem4w _1fragem4c _1fragem5g _1fragem3s _1fragemfq _1fragemfs _1fragemht _1fragem1w _1fragemmd _1fragemm7 _1fragemmj _1fragemfh _1fragemmu">
                                                                                                                  <div class="_1mmswk9l _1fragemfh _1fragemlz _1fragemli _1frageme8 _1fragemm7 _1fragemmm _1fragemmd">
                                                                                                                     <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wua _1fragemfs a8x1wug a8x1wum">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                                                           <path stroke-linecap="round" stroke-linejoin="round" d="m12.1 2.8-5.877 8.843a.35.35 0 0 1-.54.054L1.4 7.4"></path>
                                                                                                                        </svg>
                                                                                                                     </span>
                                                                                                                  </div>
                                                                                                               </div>
                                                                                                               <label for="sms_marketing_opt_in" class="_1mmswk9h _1fragemfs _1fragemdo _1fragemfq _1fragemc8">Envoyez-moi des nouvelles et des offres par SMS</label>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                         <div id="smsMarketingOptInDisclosureContent-transition" hidden="" class="_94sxtb1 _1fragemlf _1fragemlh _1fragemeg _1fragemmf _1fragemmj _1fragemm9" style="height: 0px;">
                                                                                                            <div></div>
                                                                                                         </div>
                                                                                                      </div>
                                                                                                   </div>
                                                                                                   </div>
                                                                                             </div>
                                                                                          </div>
                                                                                       </div>
                                                                                       <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                          <h3 class="n8k95w1 _1fragemeg n8k95w3">Méthode d'expédition</h3>
                                                                                          <div class="yblnR">
                                                                                             <div class="_1fragemfs _1fragemic _1fragemih _1fragemir _1fragemim _1fragemmy _1fragem8o _1fragemak _1fragem6s _1fragemcg _1fragemeg">
                                                                                                <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgf _1fragemgw">
                                                                                                   <p class="_1x52f9s1 _1fragemeg _1x52f9so _1fragemg6 _1x52f9si">Entrez votre adresse de livraison pour afficher les méthodes d'expédition disponibles.</p>
                                                                                                </div>
                                                                                             </div>
                                                                                          </div>
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </section>
                                                                           </div>
                                                                        </div>
                                                                     </section>
                                                                     <div class="_16s97g74g _16s97g74x"></div>
                                                                  </div>
                                                               </div>
                                                               <section aria-label="Payment" class="_1fragemfg _1fragemfd _1fragemfs _1fragem8s _1fragem9p _1fragemao _1fragembl _1fragem6w _1fragem7t _1fragemck _1fragemdh _1fragemmu _1fragemeg">
                                                                  <div>
                                                                     <div>
                                                                        <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                           <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgd _1fragemgu">
                                                                              <h2 class="n8k95w1 _1fragemeg n8k95w2">Paiement</h2>
                                                                              <p class="_1x52f9s1 _1fragemeg _1x52f9so _1fragemg6 _1x52f9si">Toutes les transactions sont sécurisées et chiffrées.</p>
                                                                           </div>
                                                                           <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgl _1fragemh2">
                                                                              <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgm _1fragemh3">
                                                                                 <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                    <div>
                                                                                       <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                          <fieldset id="basic">
                                                                                             <legend class="_1fragemm0">Choisissez un mode de paiement</legend>
                                                                                             <div class="Wo4qW ezrb1p3 _1fragemfh _1fragemmu NDMe9 NdTJE PuVf0">
                                                                                                <div class="B4zH6 Zb82w HKtYc OpmPd">
                                                                                                   <label for="basic-creditCards" class="yL8c2 ezrb1p5 _1fragemfi D1RJr">
                                                                                                      <div class="hEGyz">
                                                                                                         <div class="_1fragemeg">
                                                                                                         <input type="radio" id="basic-creditCards" name="basic" class="_6hzjvo5 _1fragemfq _1fragemfs _1fragemmd _1fragemm7 _1fragemmj _6hzjvof _6hzjvo7 _1fragemfh _1fragemmu _6hzjvoe _6hzjvob">
                                                                                                         </div>
                                                                                                         <div class="f5aCe">
                                                                                                            <div><span class="_19gi7yt0 _19gi7yth _1fragemg6">Carte de crédit</span></div>
                                                                                                            <div>
                                                                                                               <div class="wAAjh">
                                                                                                                  <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                                                                     <div class="_5uqybw2 _1fragemfu _1fragemds _1fragemgd _1fragemgu _1fragemeo _1fragemes _1fragemhx">
                                                                                                                     <!-- <img alt="VISA" src="https://cdn.shopify.com/shopifycloud/checkout-web/assets/0169695890db3db16bfe.svg" role="img" width="38" height="24" class="_1tgdqw61 _1fragemmd _1fragemm8 _1fragemmm _1fragemhs"> -->
                                                                                                                     <img alt="MASTERCARD" src="https://cdn.shopify.com/shopifycloud/checkout-web/assets/ae9ceec48b1dc489596c.svg" role="img" width="38" height="24" class="_1tgdqw61 _1fragemmd _1fragemm8 _1fragemmm _1fragemhs">
                                                                                                                     <!-- <img alt="AMEX" src="https://cdn.shopify.com/shopifycloud/checkout-web/assets/f11b90c2972f3811f2d5.svg" role="img" width="38" height="24" class="_1tgdqw61 _1fragemmd _1fragemm8 _1fragemmm _1fragemhs"> -->
                                                                                                                     <!-- <img alt="UNIONPAY" src="https://cdn.shopify.com/shopifycloud/checkout-web/assets/bddb21e40274706727fb.svg" role="img" width="38" height="24" class="_1tgdqw61 _1fragemmd _1fragemm8 _1fragemmm _1fragemhs"> -->
                                                                                                                     <!-- <img alt="JCB" src="https://cdn.shopify.com/shopifycloud/checkout-web/assets/aa9f2b5de4dc7ce12bc7.svg" role="img" width="38" height="24" class="_1tgdqw61 _1fragemmd _1fragemm8 _1fragemmm _1fragemhs"> -->
                                                                                                                  </div>
                                                                                                                  </div>
                                                                                                               </div>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                      </div>
                                                                                                   </label>
                                                                                                   <div id="basic-creditCards-collapsible" class="_94sxtb1 _1fragemlf _1fragemlh _1fragemeg _1fragemmf _1fragemmj _1fragemm9" style="height: auto; overflow: visible;">
                                                                                                      <div>
                                                                                                         <div class="b7U_P">
                                                                                                            <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                                               <div id="directPaymentMethodDetails" class="_94sxtb1 _1fragemlf _1fragemlh _1fragemeg _1fragemmf _1fragemmj _1fragemm9" style="height: auto; overflow: visible;">
                                                                                                                  <div>
                                                                                                                     <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                                                        <div>
                                                                                                                           <div class="jNSGe">
                                                                                                                              <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                                                                 <div class="apbd6 _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                                                                    <div class="_1fragemeg">
                                                                                                                                       <label id="number-label" for="number" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Numéro de carte</span></span></label>
                                                                                                                                       <div data-protected-input="true" class="oT32G B46er _1fragemfh Xkh0E IbLRo">
                                                                                                                                          <input required="" autocomplete="cc-number" id="number" name="number" maxlength="16" type="text" inputmode="numeric" pattern="5[1-5][0-9]{14}" aria-describedby="error-for-number tooltip-for-number" data-current-field="number" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _1fragemif _1fragemip _7ozb2u10 _7ozb2u1j" placeholder="Numéro de carte" aria-invalid="true">
                                                                                                                                          <div class="P7KAT">
                                                                                                                                             <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wu3 _1fragemfs a8x1wui a8x1wum">
                                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                                                                                   <path stroke-linecap="round" stroke-linejoin="round" d="M3.5 6.3c0-2.298 1.131-4.9 3.5-4.9s3.5 2.602 3.5 4.9m-8.4.47v5.36c0 .26.21.47.47.47h8.86c.26 0 .47-.21.47-.47V6.77a.47.47 0 0 0-.47-.47H2.57a.47.47 0 0 0-.47.47"></path>
                                                                                                                                                </svg>
                                                                                                                                             </span>
                                                                                                                                          </div>
                                                                                                                                       </div>
                                                                                                                                    </div>
                                                                                                                                 </div>
                                                                                                                                 <div class="T50Pa Layout0 PypyI rhUtJ">
                                                                                                                                    <style>
                                                                                                                                       .Layout0 > .i602M > :nth-child(1) {
                                                                                                                                       flex: 0 0 100%;
                                                                                                                                       }
                                                                                                                                       .Layout0 > .i602M > :nth-child(2) {
                                                                                                                                       flex: 0 0 100%;
                                                                                                                                       }
                                                                                                                                       .Layout0 > .i602M > :nth-child(3) {
                                                                                                                                       flex: 0 0 100%;
                                                                                                                                       }
                                                                                                                                       .Layout0 > .i602M { flex-wrap: wrap; } @media all and (min-width: 750px) {
                                                                                                                                       .Layout0 > .i602M > :nth-child(1) {
                                                                                                                                       flex: 1 0px;
                                                                                                                                       }
                                                                                                                                       .Layout0 > .i602M > :nth-child(2) {
                                                                                                                                       flex: 1 0px;
                                                                                                                                       }
                                                                                                                                       .Layout0 > .i602M > :nth-child(3) {
                                                                                                                                       flex: 1 0px;
                                                                                                                                       }
                                                                                                                                       .Layout0 > .i602M { flex-wrap: nowrap; } }
                                                                                                                                    </style>
                                                                                                                                    <div class="i602M T9faX">
                                                                                                                                       <div class="qyWc2">
                                                                                                                                          <div>
                                                                                                                                             <div>
                                                                                                                                                <div class="apbd6 _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                                                                                   <div class="_1fragemeg">
                                                                                                                                                      <label id="expiry-label" for="expiry" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Date de péremption (MM / YY)</span></span></label>
                                                                                                                                                      <div data-protected-input="true" class="oT32G B46er _1fragemfh Xkh0E IbLRo">
                                                                                                                                                         <input required="" autocomplete="cc-exp" id="expiry" name="expiry" type="text" inputmode="numeric"  aria-describedby="error-for-expiry tooltip-for-expiry" data-current-field="expiry" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _1fragemif _1fragemip _7ozb2u10 _7ozb2u1j" placeholder="Date de péremption (MM / YY)" aria-invalid="false">
                                                                                                                                                      </div>
                                                                                                                                                   </div>
                                                                                                                                                </div>
                                                                                                                                             </div>
                                                                                                                                          </div>
                                                                                                                                       </div>
                                                                                                                                       <div class="qyWc2">
                                                                                                                                          <div>
                                                                                                                                             <div>
                                                                                                                                                <div class="apbd6 _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                                                                                   <div class="_1fragemeg">
                                                                                                                                                      <label id="verification_value-label" for="verification_value" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Code de sécurité</span></span></label>
                                                                                                                                                      <div data-protected-input="true" class="oT32G B46er _1fragemfh Xkh0E IbLRo">
                                                                                                                                                         <input autocomplete="cc-csc" id="verification_value" name="verification_value" type="text" inputmode="numeric" pattern="[0-9]*" aria-describedby="error-for-verification_value tooltip-for-verification_value" data-current-field="verification_value" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _1fragemif _1fragemip _7ozb2u10 _7ozb2u1j" placeholder="Code de sécurité" aria-invalid="false">
                                                                                                                                                         <div class="P7KAT">
                                                                                                                                                            <button type="button" class="_1xqelvi1 _1fragemfq _1fragemfs _1fragemeg _1fragemm3 _1fragemmd _1fragemm8 _1fragemmm _1fragemfu _1fragemev">
                                                                                                                                                               <span class="_1xqelvi2">
                                                                                                                                                                  <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wu3 _1fragemfs a8x1wui a8x1wum">
                                                                                                                                                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-label="More information" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                                                                                                        <circle cx="7" cy="7" r="5.6"></circle>
                                                                                                                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.6 5.1c.2-1.3 2.6-1.3 2.8 0S6.95 6.4 6.95 7.45m.055 2.35H7v.005h.005z"></path>
                                                                                                                                                                        <circle cx="7" cy="9.7" r="0.1"></circle>
                                                                                                                                                                     </svg>
                                                                                                                                                                  </span>
                                                                                                                                                               </span>
                                                                                                                                                            </button>
                                                                                                                                                         </div>
                                                                                                                                                      </div>
                                                                                                                                                   </div>
                                                                                                                                                </div>
                                                                                                                                             </div>
                                                                                                                                          </div>
                                                                                                                                       </div>
                                                                                                                                    </div>
                                                                                                                                 </div>
                                                                                                                                 <div>
                                                                                                                                    <div class="apbd6 _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                                                                       <div class="_1fragemeg">
                                                                                                                                          <label id="name-label" for="name" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Nom sur la carte</span></span></label>
                                                                                                                                          <div data-protected-input="true" class="oT32G B46er _1fragemfh Xkh0E IbLRo">
                                                                                                                                             <input required="" autocomplete="cc-name" id="name" name="name" type="text" inputmode="text" aria-describedby="error-for-name tooltip-for-name" data-current-field="name" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _1fragemif _1fragemip _7ozb2u10 _7ozb2u1j" placeholder="Nom sur la carte" aria-invalid="false">
                                                                                                                                          </div>
                                                                                                                                       </div>
                                                                                                                                    </div>
                                                                                                                                 </div>
                                                                                                                              </div>
                                                                                                                           </div>
                                                                                                                        </div>
                                                                                                                        <div class="_1fragemfs _1fragemeg">
                                                                                                                           <div>
                                                                                                                              <div class="_1fragemeg _1fragemfu">
                                                                                                                                 <div class="_1mmswk95 _1fragemeg">
                                                                                                                                    <input type="checkbox" id="billingAddress" name="billingAddress" class="_1mmswk97 _1fragemi7 _1fragemi5 _1fragemi9 _1fragemi3 _1fragemj3 _1fragemiz _1fragemj7 _1fragemiv _1fragem4w _1fragem4c _1fragem5g _1fragem3s _1fragemfq _1fragemfs _1fragemht _1fragem1w _1fragemmd _1fragemm7 _1fragemmj _1fragemfh _1fragemmu">
                                                                                                                                    <div class="_1mmswk9l _1fragemfh _1fragemlz _1fragemli _1frageme8 _1fragemm7 _1fragemmm _1fragemmd">
                                                                                                                                       <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wua _1fragemfs a8x1wug a8x1wum">
                                                                                                                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                                                                             <path stroke-linecap="round" stroke-linejoin="round" d="m12.1 2.8-5.877 8.843a.35.35 0 0 1-.54.054L1.4 7.4"></path>
                                                                                                                                          </svg>
                                                                                                                                       </span>
                                                                                                                                    </div>
                                                                                                                                 </div>
                                                                                                                                 <label for="billingAddress" class="_1mmswk9h _1fragemfs _1fragemdo _1fragemfq _1fragemc8">Utiliser l'adresse de livraison comme adresse de facturation</label>
                                                                                                                              </div>
                                                                                                                           </div>
                                                                                                                           <div id="billingAddressDetails" hidden="" class="_94sxtb1 _1fragemlf _1fragemlh _1fragemeg _1fragemmf _1fragemmj _1fragemm9" style="height: 0px;">
                                                                                                                              <div></div>
                                                                                                                           </div>
                                                                                                                        </div>
                                                                                                                     </div>
                                                                                                                  </div>
                                                                                                               </div>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                      </div>
                                                                                                   </div>
                                                                                                </div>
                                                                                             </div>
                                                                                          </fieldset>
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                           <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgr _1fragemh8">
                                                                              <div class="_16s97g74c"></div>
                                                                              <h2 class="n8k95w1 _1fragemeg n8k95w3">Souviens-toi de moi</h2>
                                                                              <div class="_16s97g74g"></div>
                                                                              <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgf _1fragemgw">
                                                                                 <div id="RememberMe">
                                                                                    <div class="Wo4qW ezrb1p3 _1fragemfh _1fragemmu NDMe9 NdTJE PuVf0">
                                                                                       <div class="B4zH6">
                                                                                          <label for="RememberMe-RememberMeCheckbox" class="yL8c2 D1RJr">
                                                                                             <div class="hEGyz">
                                                                                                <div class="_1mmswk95 _1fragemeg">
                                                                                                   <input type="checkbox" id="RememberMe-RememberMeCheckbox" name="RememberMe" class="_1mmswk97 _1fragemi7 _1fragemi5 _1fragemi9 _1fragemi3 _1fragemj3 _1fragemiz _1fragemj7 _1fragemiv _1fragem4w _1fragem4c _1fragem5g _1fragem3s _1fragemfq _1fragemfs _1fragemht _1fragem1w _1fragemmd _1fragemm7 _1fragemmj _1fragemfh _1fragemmu">
                                                                                                   <div class="_1mmswk9l _1fragemfh _1fragemlz _1fragemli _1frageme8 _1fragemm7 _1fragemmm _1fragemmd">
                                                                                                      <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wua _1fragemfs a8x1wug a8x1wum">
                                                                                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m12.1 2.8-5.877 8.843a.35.35 0 0 1-.54.054L1.4 7.4"></path>
                                                                                                         </svg>
                                                                                                      </span>
                                                                                                   </div>
                                                                                                </div>
                                                                                                <span class="_19gi7yt0 _19gi7yth _1fragemg6">Enregistrez mes informations pour une commande plus rapide</span>
                                                                                             </div>
                                                                                          </label>
                                                                                          <div id="RememberMe-RememberMeCheckbox-collapsible" hidden="" class="_94sxtb1 _1fragemlf _1fragemlh _1fragemeg _1fragemmf _1fragemmj _1fragemm9" style="height: 0px;">
                                                                                             <div></div>
                                                                                          </div>
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                        <div class="_16s97g74g _16s97g74x"></div>
                                                                     </div>
                                                                  </div>
                                                                  <div>
                                                                     <div>
                                                                        <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgl _1fragemh2">
                                                                           <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0">
                                                                              <div>
                                                                                 <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                                    <div id="pay-button-container" class="_1fragemfs _1fragemeg">
                                                                                       <div>
                                                                                          <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0"><button type="submit" class="QT4by _1fragemfk rqC98 EbLsk _7QHNJ VDIfJ j6D1f janiy"><span class="AjwsM"><span class="_19gi7yt0 _19gi7ytl _1fragemg8">Payer maintenant</span></span></button></div>
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </section>
                                                               <div class="_16s97g74g _16s97g74x"></div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="_1fragemfs _1fragemm0 _1fragemeg"><button type="submit" tabindex="-1" aria-hidden="true">Soumettre</button></div>
                                                   </form>
                                                </div>
                                             </main>
                                          </div>
                                       </div>
                                    </from>
                                       <div class="_1fragemfu _1fragemg0 _1fragemet _1fragem30 _1fragem2g _1fragem3c _1fragem20 _1fragemeg">
                                          <footer class="_1fragemfs _1fragem8s _1fragemao _1fragem6w _1fragemck _1fragemeg _16s97g77s  _16s97g732" style="--_16s97g72y: 65rem;">
                                             <div class="_1fragemfs _1fragem9o _1fragemao _1fragem7s _1fragemck _1fragemeg">
                                                <div>
                                                   <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgi _1fragemgz">
                                                      <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                         <div class="_5uqybw2 _1fragemfu _1fragemds _1fragemeq _1fragemeu _1fragemgd _1fragemgy _1fragemhx"><button type="button" aria-haspopup="dialog" class="QT4by eVFmT janiy mRJ8x EP07D"><span class="AjwsM">Politique de remboursement</span></button><button type="button" aria-haspopup="dialog" class="QT4by eVFmT janiy mRJ8x EP07D"><span class="AjwsM">Politique d'expédition</span></button><button type="button" aria-haspopup="dialog" class="QT4by eVFmT janiy mRJ8x EP07D"><span class="AjwsM">Politique de confidentialité</span></button><button type="button" aria-haspopup="dialog" class="QT4by eVFmT janiy mRJ8x EP07D"><span class="AjwsM">Conditions d'utilisation</span></button></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </footer>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="_16s97g7s mobileHide" style="--_16s97g7o: span 2;">
         <!-- ------------------------------------------------------------------------------- -->
         <?php
            // if ( isset($_GET['sub1']) && isset($_GET['sub5'])&& isset($_GET['sub3'])&& isset($_GET['sub4'])){
         ?>
                                    <!-- <div class="_1fragemfs _1fragemeg">
                                       <div class="_94sxtb1 _1fragemlf _1fragemlh _1fragemeg _1fragemmf _1fragemmj _1fragemm9" style="height: auto; overflow: visible;">
                                       <div>
                                          <div class="_1fragemfg _1fragemfe _1fragemfs _1fragemmu _1fragemeg">
                                             <div class="_1fragemeg _1fragemfy _1fragemgr _1fragemh8 _1fragemh9 _1fragemhv _1fragemhz _16s97g7c _16s97g7d _16s97g7k _16s97g718 _16s97g719 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g79: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g715: minmax(0, 61rem); --_16s97g71c: minmax(0, 1fr);">
                                                <div class="_1fragemfs _1fragem9o _1fragemao _1fragem7s _1fragemck _1fragemeg _16s97g7ac">
                                                   <div class="_1fragemfs _1fragem30 _1fragem2g _1fragem3c _1fragem20 _1fragem8s _1fragembk _1fragem6w _1fragemdg _1fragemeg">
                                                      <div>
                                                         <section class="_1fragemfs _1fragemeg">
                                                            <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0">
                                                               <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0">
                                                                  <section class="_1fragemfs _1fragemeg">
                                                                     <div class="_1fragemfs _1fragemm0 _1fragemeg">
                                                                        <h2 id="ResourceList7" class="n8k95w1 _1fragemeg n8k95w3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Shopping Cart</font></font></h2>
                                                                     </div>
                                                                     <div role="table" aria-labelledby="ResourceList7" class="_6zbcq55 _1fragemfu _1fragemg0 _6zbcq56">
                                                                        <div role="row" class="_6zbcq51d _1fragemfu _1fragemes _1fragemht _6zbcq51b">
                                                                           <div role="columnheader" class="_6zbcq51e">
                                                                              <div class="_1fragemfs _1fragemm0 _1fragemeg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Product image.</font></font></div>
                                                                           </div>
                                                                           <div role="columnheader" class="_6zbcq51e">
                                                                              <div class="_1fragemfs _1fragemm0 _1fragemeg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Description</font></font></div>
                                                                           </div>
                                                                           <div role="columnheader" class="_6zbcq51e">
                                                                              <div class="_1fragemfs _1fragemm0 _1fragemeg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quantity</font></font></div>
                                                                           </div>
                                                                           <div role="columnheader" class="_6zbcq51e">
                                                                              <div class="_1fragemfs _1fragemm0 _1fragemeg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Price</font></font></div>
                                                                           </div>
                                                                        </div>
                                                                        <ul class="packg_selector">
                                                                              <li for="x1">
                                                                                 <div class="product_div"><img class="product_img" src="<?= $sub5 ?>" width ="80px" height = "80px"><span class="count_item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span></div>
                                                                                 <div class="product_name" style="max-width:initial;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                                                 <?= $sub1 ?>  <?= $sub4 ?></font></font></div>
                                                                                 <div class="price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">  <?= $sub3 ?></font></font></div>
                                                                              </li>
                                                                        </ul>
                                                                     </div>
                                                                  </section>
                                                               </div>
                                                               <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0">
                                                                  <section aria-label="Discount code or gift card" class="_1fragemfs _1fragemeg">
                                                                     <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                                        <form action="" method="POST" novalidate="" id="Form8" class="_1fragemft">
                                                                           <div class="_1fragemeg">
                                                                              <div class="_1fragemeg _1fragemfy _1fragemgd _1fragemgy _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(auto, max-content); --_16s97g714: minmax(0, 1fr) minmax(auto, max-content); --_16s97g71c: minmax(auto, max-content);">
                                                                                 <div class="_7ozb2u2 _1fragemgd _1fragemgu _1fragemeg _1fragemfy _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                                    <div class="_1fragemeg">
                                                                                       <label id="TextField16-label" for="TextField16" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Discount code or gift card</font></font></span></span></label>
                                                                                       <div class="_7ozb2u6 _1fragemeg _1fragemfy _1fragemfr _1fragemmd _1fragemm8 _1fragemmm _1fragemmn _1fragemfh _1fragemmu _7ozb2ul _7ozb2uh"><input id="TextField16" name="reductions" placeholder="Discount code or gift card" type="text" aria-labelledby="TextField16-label" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _7ozb2u11 _7ozb2u1j"></div>
                                                                                    </div>
                                                                                 </div>
                                                                                 <button type="submit" disabled="" aria-label="Apply Discount Code" class="QT4by rqC98 EbLsk _7QHNJ VDIfJ janiy Fox6W hlBcn"><span class="AjwsM"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apply</font></font></span></button>
                                                                              </div>
                                                                           </div>
                                                                           <div class="_1fragemfs _1fragemm0 _1fragemeg"><button type="submit" tabindex="-1" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Submit</font></font></button></div>
                                                                        </form>
                                                                        <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                            
                                                                        </div>
                                                                     </div>
                                                                  </section>
                                                               </div>
                                                               <section class="_1fragemfs _1fragemeg">
                                                                  <div class="_1fragemfs _1fragemm0 _1fragemeg">
                                                                     <h2 id="MoneyLine-Heading7" class="n8k95w1 _1fragemeg n8k95w3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cost Summary</font></font></h2>
                                                                  </div>
                                                                  <div role="table" aria-labelledby="MoneyLine-Heading7" class="nfgb6p0">
                                                                     <div role="row" class="_1qy6ue61 _1fragemfy _1qy6ue65">
                                                                        <div role="rowheader" class="_1qy6ue67"><span class="_19gi7yt0 _19gi7yth _1fragemg6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Subtotal</font></font></span></div>
                                                                        <div role="cell" class="_1qy6ue68"><span translate="yes" class="_19gi7yt0 _19gi7yth _1fragemg6 _19gi7yt1 notranslate subTotal">  <?= $sub3 ?></span></div>
                                                                     </div>
                                                                     
                                                               
                                                                     </div>
                                                                     <div role="row" class="_1x41w3p1 _1fragemfy _1fragemes _1x41w3p5">
                                                                        <div role="rowheader" class="_1x41w3p7">
                                                                           <span class="_19gi7yt0 _19gi7ytl _1fragemg8 _19gi7yt1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total</font></font></span>
                                                                           
                                                                        </div>
                                                                        <div role="cell" class="_1x41w3p8">
                                                                           <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                              <div class="_5uqybw2 _1fragemfu _1fragemds _1fragemgf _1fragemgw _1fragemer _1fragemhx"><abbr translate="yes" class="_19gi7yt0 _19gi7ytf _1fragemg5 _19gi7ytb notranslate _19gi7ytt _1fragemm4"></abbr><strong translate="yes" class="_19gi7yt0 _19gi7ytl _1fragemg8 _19gi7yt1 notranslate finalTotal">  <?= $sub3 ?></strong></div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </section></div>
                                                                  <div class="_16s97g754"></div>
                                                               </section>
                                                            </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div> -->
                                 <?php  //}?>
       <!-- ------------------------------------------------------------------------------- -->
                                    <div class="_1fragemfg _1fragemfe _1fragemfs _1fragemmu _1fragem2w _1fragem2g _1fragem3c _1fragem24 _1fragemeg _16s97g788">
                                       <div class="_1fragemfs _1fragem8s _1fragemao _1fragem6w _1fragemck _1fragemek _16s97g730    _16s97g71w _16s97g724 _16s97g72c _16s97g72k" style="--_16s97g72w: 45.5rem; --_16s97g71s: 0rem; --_16s97g720: auto; --_16s97g728: auto; --_16s97g72g: auto;">
                                          <aside class="_1fragemfs _1fragem8u _1fragemaq _1fragem6y _1fragemcm _1fragemeg _16s97g7ac">
                                             <div>
                                                <div class="_1fragemeg _1fragemfy _1fragemgr _1fragemh8 _1fragemh9 _1fragemhv _1fragemhz _16s97g7c _16s97g7d _16s97g7k _16s97g718 _16s97g719 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g79: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr); --_16s97g715: minmax(0, 61rem); --_16s97g71c: minmax(0, 1fr);">
                                                    <div style="width: 100%; overflow-x: clip;">
                                                       <button type="button" aria-controls="disclosure_content" aria-expanded="false" class="_1xqelvi1 _1fragemfq _1fragemfs _1fragemeg _1fragemm3 _1fragemmd _1fragemm8 _1fragemmm _1fragem8k _1fragemao _1fragem6o _1fragemck _16s97g7ac _1fragemfu _1fragemev _1xqelvid">
                                                          <span class="_1xqelvi2">
                                                             <div style="display:none;" class="_1fragemeg _1fragemfy _1fragemgf _1fragemgw _1fragemeo _1fragemes _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(0, 1fr) minmax(auto, max-content); --_16s97g71c: minmax(0, 1fr);">
                                                                <span onclick="showSummary();" id="link_mss" class="_19gi7yt0 _19gi7yth _1fragemg6">
                                                                Afficher le récapitulatif de la commande.
                                                                   <div class="_1fragemfw _16s97g78w _16s97g768"></div>
                                                                   <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wua a8x1wue _1fragemfw a8x1wug a8x1wum">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                         <path stroke-linecap="round" stroke-linejoin="round" d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                                                                      </svg>
                                                                   </span>
                                                                </span>
                                                                <span onclick="hideSummary();" id="link_mhs" style="display:none;" class="_19gi7yt0 _19gi7yth _1fragemg6">
                                                                Cacher le récapitulatif de commande.
                                                                   <div class="_1fragemfw _16s97g78w _16s97g768"></div>
                                                                   <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wua a8x1wue _1fragemfw a8x1wug a8x1wum">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk"><path stroke-linecap="round" stroke-linejoin="round" d="m2.1 8.4 4.653-4.653a.35.35 0 0 1 .495 0L11.9 8.4"></path></svg>
                                                                   </span>
                                                                </span>
                                                                <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgr _1fragemh8 _1fragemi0">
                                                                  <!--<del translate="yes" class="_19gi7yt0 _19gi7ytf _1fragemg5 _19gi7ytb notranslate _19gi7ytr _1fragemm6">$129.00</del>-->
                                                                  <span class="_19gi7yt0 _19gi7ytl _1fragemg8 _19gi7yt1 _19gi7yta finalTotal">  <?= $sub3 ?></span>
                                                                </div>
                                                             </div>
                                                          </span>
                                                       </button>
                                                    </div>
                                                </div>
                                                <section class="_1fragemfs _1fragemeg">
                                                   <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0">  
                                                    <!--selector-->
                                                    <ul class="packg_selector cart_details" style="display:none;">
                                                        <li for="x1">
                                                            <div class="product_div"><img class="product_img" src="<?= $sub5 ?>" width ="80px" height = "80px"><span class="count_item">1</span></div>
                                                            <div class="product_name"> <?= $sub1 ?>  <?= $sub4 ?></div>
                                                            <div class="price">  <?= $sub3 ?></div>
                                                        </li>
                                                    </ul>
                                                    <!------>
                                                      <div class="cart_details _1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0" style="display:none;">
                                                         <section aria-label="Code de réduction ou carte-cadeau" class="_1fragemfs _1fragemeg">
                                                            <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgh _1fragemgy">
                                                               <form action="" method="POST" novalidate="" id="Form1" class="_1fragemft">
                                                                  <div class="_1fragemeg">
                                                                     <div class="_1fragemeg _1fragemfy _1fragemgd _1fragemgy _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(auto, max-content); --_16s97g714: minmax(0, 1fr) minmax(auto, max-content); --_16s97g71c: minmax(auto, max-content);">
                                                                        <div class="_7ozb2u2 _1fragemgd _1fragemgu _1fragemeg _1fragemfy _10vrn9p1 _10vrn9p0 _10vrn9p4 _1fragemfh">
                                                                           <div class="_1fragemeg">
                                                                              <label id="TextField7-label" for="TextField7" class="cektnc3 _1frageme8 _1fragemlz _1fragemli _1fragemmo _1fragemmd _1fragemm8 _1fragemmm"><span class="cektnc9"><span class="rermvf1 _1fragemlf _1fragemlh _1fragemfs">Code de réduction ou carte cadeau</span></span></label>
                                                                              <div class="_7ozb2u6 _1fragemeg _1fragemfy _1fragemfr _1fragemmd _1fragemm8 _1fragemmm _1fragemmn _1fragemfh _1fragemmu _7ozb2ul _7ozb2uh"><input id="TextField7" name="reductions" placeholder="Code de réduction ou carte-cadeau" type="text" aria-labelledby="TextField7-label" class="_7ozb2uq _1fragemeg _1fragemmo _1fragemht _1fragemly _7ozb2ur _7ozb2u11 _7ozb2u1j"></div>
                                                                           </div>
                                                                        </div>
                                                                        <button type="submit" disabled="" aria-label="Apply Discount Code" class="QT4by rqC98 EbLsk _7QHNJ VDIfJ janiy Fox6W hlBcn"><span class="AjwsM">Appliquer</span></button>
                                                                     </div>
                                                                  </div>
                                                                  <div class="_1fragemfs _1fragemm0 _1fragemeg"><button type="submit" tabindex="-1" aria-hidden="true">Soumettre</button></div>
                                                               </form>
                                                            </div>
                                                         </section>
                                                      </div>
                                                      <section class="cart_details _1fragemfs _1fragemeg" style="display:none;">
                                                         <div class="_1fragemfs _1fragemm0 _1fragemeg">
                                                            <h3 id="MoneyLine-Heading0" class="n8k95w1 _1fragemeg n8k95w4">Résumé des coûts</h3>
                                                         </div>
                                                         <div role="table" aria-labelledby="MoneyLine-Heading0" class="nfgb6p0">
                                                            <div role="row" class="_1qy6ue61 _1fragemfy _1qy6ue65">
                                                               <div role="rowheader" class="_1qy6ue67"><span class="_19gi7yt0 _19gi7yth _1fragemg6">Sous-total</span></div>
                                                               <div role="cell" class="_1qy6ue68"><span translate="yes" class="_19gi7yt0 _19gi7yth _1fragemg6 _19gi7yt1 notranslate subTotal">  <?= $sub3 ?></span></div>
                                                            </div>
                                                            <div role="row" class="_1qy6ue61 _1fragemfy _1qy6ue65">
                                                               <div role="rowheader" class="_1qy6ue67">
                                                                  <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgd _1fragemgu">
                                                                     <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                        <div class="_5uqybw2 _1fragemfu _1fragemds _1fragemgd _1fragemgu _1fragemeo _1fragemes _1fragemhx">
                                                                           <span class="_19gi7yt0 _19gi7yth _1fragemg6">Expédition</span>
                                                                           <button type="button" aria-label="Shipping policy" aria-haspopup="dialog" class="QT4by eVFmT janiy mRJ8x EP07D">
                                                                              <span class="AjwsM">
                                                                                 <span class="_1fragemht _1fragem1w _1fragemdo _1fragemdk a8x1wu3 _1fragemfs a8x1wuh a8x1wum">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wuo _1fragemfs _1fragemht _1fragemdo _1fragemdk">
                                                                                       <circle cx="7" cy="7" r="5.6"></circle>
                                                                                       <path stroke-linecap="round" stroke-linejoin="round" d="M5.6 5.1c.2-1.3 2.6-1.3 2.8 0S6.95 6.4 6.95 7.45m.055 2.35H7v.005h.005z"></path>
                                                                                       <circle cx="7" cy="9.7" r="0.1"></circle>
                                                                                    </svg>
                                                                                 </span>
                                                                              </span>
                                                                           </button>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div role="cell" class="_1qy6ue68"><span translate="yes" class="_19gi7yt0 _19gi7ytf _1fragemg5 _19gi7ytb notranslate">Enter shipping address</span></div>
                                                            </div>
                                                            <div role="row" class="_1x41w3p1 _1fragemfy _1fragemes _1x41w3p5">
                                                               <div role="rowheader" class="_1x41w3p7">
                                                                  <span class="_19gi7yt0 _19gi7ytl _1fragemg8 _19gi7yt1">Total</span>
                                                                  <p class="_1x52f9s1 _1fragemeg _1x52f9sm _1fragemg5 _1x52f9si">Incluant $11.73 de taxes.</p>
                                                               </div>
                                                               <div role="cell" class="_1x41w3p8">
                                                                  <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                     <div class="_5uqybw2 _1fragemfu _1fragemds _1fragemgf _1fragemgw _1fragemer _1fragemhx"><abbr translate="yes" class="_19gi7yt0 _19gi7ytf _1fragemg5 _19gi7ytb notranslate _19gi7ytt _1fragemm4"></abbr><strong translate="yes" class="_19gi7yt0 _19gi7ytl _1fragemg8 _19gi7yt1 notranslate finalTotal">$51.63</strong></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </section>
                                                      <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgj _1fragemh0">
                                                         <section class="cart_details _1fragemfs _1fragemeg" style="display:none;">
                                                            <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgp _1fragemh6">
                                                               <div class="_1fragemeg _1fragemfy _1fragemlf _1fragemlh _1fragemie _1fragemij _1fragemit _1fragemio _1fragemgr _1fragemh8 _1fragem30 _1fragem2k _1fragem3g _1fragem24 _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: 1fr; --_16s97g714: minmax(0, 100%) minmax(0, 0%); --_16s97g71c: minmax(0, 0.8rem);">
                                                                  <div class="_1h3po421 _1h3po423 _1fragemeg" style="--_1h3po420: 1000;">
                                                                  <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogIDxyZWN0IHdpZHRoPSIxMDAwMDAwIiBoZWlnaHQ9IjEwMDAwMDAiIGZpbGw9IiMwQTgwMUYiIC8+Cjwvc3ZnPgo=" alt="" class="_1h3po424 _1fragemfs _1fragemdo _1fragemie _1fragemij _1fragemit _1fragemio"></div>
                                                                  <div class="_1h3po421 _1h3po423 _1fragemeg" style="--_1h3po420: 1000;"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogIDxyZWN0IHdpZHRoPSIxMDAwMDAwIiBoZWlnaHQ9IjEwMDAwMDAiIGZpbGw9IndoaXRlIiAvPgo8L3N2Zz4K" alt="" class="_1h3po424 _1fragemfs _1fragemdo _1fragemia _1fragemif _1fragemip _1fragemik"></div>
                                                               </div>
                                                               <p class="_1x52f9s1 _1fragemeg _1x52f9so _1fragemg6 _1fragemm1"><span class="_19gi7yt0 _19gi7ytf _1fragemg5">Vous avez débloqué la livraison gratuite !</span></p>
                                                            </div>
                                                         </section>
                                                         <section class="_1fragemfs _1fragemeg">
                                                            <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgr _1fragemh8">
                                                               <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgo _1fragemh5">
                                                                  <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemeq _1fragemeu _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(auto, max-content) minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                     <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgp _1fragemh6">
                                                                        <h3 class="n8k95w1 _1fragemeg _1fragemm3 n8k95w3">Pourquoi nous choisir?</h3>
                                                                     </div>
                                                                  </div>
                                                                  <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemeq _1fragemeu _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(auto, max-content) minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                     <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                        <div class="_5uqybw2 _1fragemfu _1fragemds _1fragemgr _1fragemh8 _1fragemeq _1fragemeu _1fragemhx">
                                                                           <div class="_1fragemeg _1fragemfy _1fragemgr _1fragemh8 _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: 1fr; --_16s97g714: minmax(0, 3.5rem); --_16s97g71c: minmax(0, 3.5rem);">
                                                                              <div><img src="https://checkout.conversionbear.com/images/trust-badges/shield.svg" alt="" class="_1h3po424 _1fragemfs _1fragemdo _1frageme0"></div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgp _1fragemh6">
                                                                        <h3 class="n8k95w1 _1fragemeg _1fragemm3 n8k95w3">Garantie de remboursement de 30 jours*</h3>
                                                                        <p class="_1x52f9s1 _1fragemeg _1x52f9so _1fragemg6 _1fragemm3">Si vous n'êtes pas satisfait de votre commande, il vous suffit de la retourner dans les 30 jours suivant votre achat et nous vous rembourserons intégralement*.</p>
                                                                     </div>
                                                                  </div>
                                                                  <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemeq _1fragemeu _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(auto, max-content) minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                     <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                        <div class="_5uqybw2 _1fragemfu _1fragemds _1fragemgr _1fragemh8 _1fragemeq _1fragemeu _1fragemhx">
                                                                           <div class="_1fragemeg _1fragemfy _1fragemgr _1fragemh8 _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: 1fr; --_16s97g714: minmax(0, 3.5rem); --_16s97g71c: minmax(0, 3.5rem);">
                                                                              <div><img src="https://checkout.conversionbear.com/images/trust-badges/circle-tick.svg" alt="" class="_1h3po424 _1fragemfs _1fragemdo _1frageme0"></div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgp _1fragemh6">
                                                                        <h3 class="n8k95w1 _1fragemeg _1fragemm3 n8k95w3">Livraison gratuite &amp; Retours gratuits*</h3>
                                                                        <p class="_1x52f9s1 _1fragemeg _1x52f9so _1fragemg6 _1fragemm3">Nous proposons la possibilité d'une livraison gratuite pour les commandes de plus de 50 $ et d'une livraison express. Si vous devez retourner votre commande, nous prendrons également en charge les frais de retour*.</p>
                                                                     </div>
                                                                  </div>
                                                                  <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemeq _1fragemeu _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(auto, max-content) minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                     <div class="_1fragemfu _1fragemeg _1fragemhx">
                                                                        <div class="_5uqybw2 _1fragemfu _1fragemds _1fragemgr _1fragemh8 _1fragemeq _1fragemeu _1fragemhx">
                                                                           <div class="_1fragemeg _1fragemfy _1fragemgr _1fragemh8 _1fragemha _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: 1fr; --_16s97g714: minmax(0, 3.5rem); --_16s97g71c: minmax(0, 3.5rem);">
                                                                              <div><img src="https://checkout.conversionbear.com/images/trust-badges/thumbs-up.svg" alt="" class="_1h3po424 _1fragemfs _1fragemdo _1frageme0"></div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgp _1fragemh6">
                                                                        <h3 class="n8k95w1 _1fragemeg _1fragemm3 n8k95w3">Plus de 3 millions de clients satisfaits.</h3>
                                                                        <p class="_1x52f9s1 _1fragemeg _1x52f9so _1fragemg6 _1fragemm3">Tout le monde qui essaie dit que c'est un incontournable. Nous investissons beaucoup d'amour et de soin dans la création, afin que vous puissiez en profiter où que vous soyez.</p>
                                                                     </div>
                                                                  </div>
                                                                  <div class="_1fragemeg _1fragemfy _1fragemgh _1fragemgy _1fragemeq _1fragemeu _1fragemh9 _16s97g7c _16s97g7k _16s97g718 _16s97g71g" style="--_16s97g78: 1fr; --_16s97g7g: minmax(0, 1fr); --_16s97g714: minmax(auto, max-content) minmax(0, 1fr); --_16s97g71c: minmax(0, 1fr);">
                                                                     <div class="_1ip0g651 _1fragemfy _1fragemeg _1fragemgp _1fragemh6">
                                                                        <p class="_1x52f9s1 _1fragemeg _1x52f9so _1fragemg6 _1fragemm3">*Ne s'applique pas à tous les produits, veuillez vous référer à la page du produit pour plus d'informations.</p>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </section>
                                                      </div>
                                                   </div>
                                                </section>
                                             </div>
                                          </aside>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div role="status" class="_1fragemm0">Prix total mis à jour: $129.00</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
