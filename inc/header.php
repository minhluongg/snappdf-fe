<?php
/**
 * Config
 */
$isThumb = '/assets/img/thumb.jpg';
$subDomain = array_shift((explode('.', $_SERVER['HTTP_HOST'])));

?>
<!DOCTYPE html>
<html lang="<?=$lang['metaLang']?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <? if ($subDomain === 'dev') {
  $isCanonical = 'https://snappdf.app';
  ?>
    <meta name="robots" content="noindex, follow" />
  <? } else { ?>
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 days" />
    
  <? } ?>
    <title><?=$isTitle?></title>
    <meta name="description" content="<?=$isDesc?>">
    <meta itemprop="name" content="<?=$isTitle?>">
    <meta name="author" content="Admin" />
    <meta property="og:locale" content="<?=$isMetaLang?>" />
    <meta itemprop="image" content="/assets/img/thumb.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?=$isTitle?>">
    <meta name="twitter:description" content="<?=$isDesc?>">
    <meta name="twitter:image:src" content="/assets/img/thumb.jpg">
    <meta property="og:title" content="<?=$isTitle?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="/assets/img/thumb.jpg">
    <meta property="og:description" content="<?=$isDesc?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/assets/css/style.css?v=1.61" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/img/favicon-16x16.png" />
    <link rel="apple-touch-icon" sizes="192x192" href="/assets/img/apple-touch-icon.png">
    <meta name="google" content="notranslate" />
  <?php if (isset($multiLanguage) && $multiLanguage === true) {
  if (!isset($slug)) { $slug = '';}
  ?>
    <link rel="alternate" hreflang="x-default" href="<?=$isHomeUrl?>" />
    <link rel="alternate" hreflang="en" href="<?=$isHomeUrl?>" />
    <link rel="alternate" hreflang="vi" href="<?=$isHomeUrl . '/vn' . $slug?>" />
    <link rel="alternate" hreflang="tr" href="<?=$isHomeUrl . '/tr' . $slug?>" />
    <link rel="alternate" hreflang="id-ID" href="<?=$isHomeUrl . '/id' . $slug?>" />
    <link rel="alternate" hreflang="fr" href="<?=$isHomeUrl . '/fr' . $slug?>" />
    <link rel="alternate" hreflang="pt" href="<?=$isHomeUrl . '/pt' . $slug?>" />
    <link rel="alternate" hreflang="ru" href="<?=$isHomeUrl . '/ru' . $slug?>" />
    <link rel="alternate" hreflang="es" href="<?=$isHomeUrl . '/es' . $slug?>" />
    <link rel="alternate" hreflang="ko" href="<?=$isHomeUrl . '/ko' . $slug?>" />
    <link rel="alternate" hreflang="ja" href="<?=$isHomeUrl . '/ja' . $slug?>" />
    <link rel="alternate" hreflang="de" href="<?=$isHomeUrl . '/de' . $slug?>" />
    <link rel="alternate" hreflang="it" href="<?=$isHomeUrl . '/it' . $slug?>" />
    <link rel="alternate" hreflang="th" href="<?=$isHomeUrl . '/th' . $slug?>" />
<? } elseif($isCanonical) {?>
    <link rel="alternate" hreflang="x-default" href="<?=$cal?>">
<? } if($isCanonical) { ?>
    <link rel="canonical" href="<?=$isCanonical?>" />
<? } ?>
</head>
<body>
    <header class="sticky">
    <nav class="navbar navbar-expand-lg" style="z-index:1056">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><svg width="123" height="32" viewBox="0 0 123 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.2401 24.594C10.9697 24.594 9.78883 24.3639 8.69739 23.9036C7.62384 23.4434 6.69344 22.8061 5.90617 21.9917C5.13679 21.1597 4.57318 20.1949 4.21533 19.0973L7.2481 17.7962C7.7312 18.9292 8.429 19.8231 9.34152 20.4781C10.254 21.1154 11.2828 21.4341 12.428 21.4341C13.0721 21.4341 13.6268 21.3367 14.092 21.142C14.5751 20.9296 14.9419 20.6463 15.1923 20.2923C15.4607 19.9382 15.5949 19.5133 15.5949 19.0177C15.5949 18.4335 15.416 17.9555 15.0582 17.5837C14.7182 17.1943 14.1993 16.8933 13.5015 16.6809L9.66358 15.4594C8.10694 14.9814 6.93498 14.2645 6.14772 13.3085C5.36045 12.3526 4.96681 11.2285 4.96681 9.93616C4.96681 8.80319 5.24415 7.80298 5.79881 6.93555C6.37137 6.06811 7.15864 5.39541 8.16062 4.91743C9.18049 4.42176 10.3435 4.17392 11.6496 4.17392C12.8484 4.17392 13.9488 4.38635 14.9508 4.81122C15.9528 5.21838 16.8116 5.79372 17.5273 6.53724C18.2609 7.26305 18.8066 8.12163 19.1645 9.11298L16.1585 10.4407C15.7649 9.44934 15.1745 8.68812 14.3872 8.15704C13.5999 7.60825 12.6874 7.33386 11.6496 7.33386C11.0413 7.33386 10.5045 7.44008 10.0393 7.65251C9.57412 7.84724 9.20732 8.13048 8.93894 8.50224C8.68844 8.8563 8.5632 9.28116 8.5632 9.77684C8.5632 10.3256 8.74212 10.8124 9.09997 11.2373C9.45782 11.6445 10.0035 11.9631 10.7371 12.1933L14.414 13.3351C16.0065 13.8485 17.1963 14.5566 17.9836 15.4594C18.7887 16.3623 19.1913 17.4775 19.1913 18.8052C19.1913 19.9382 18.8961 20.9384 18.3056 21.8059C17.7152 22.6733 16.9011 23.3548 15.8633 23.8505C14.8256 24.3462 13.6178 24.594 12.2401 24.594Z" fill="#23203D"/><path d="M20.8408 24.2754V9.82995H24.142V12.6712L23.8736 12.1667C24.2136 11.2993 24.7682 10.6443 25.5376 10.2017C26.3249 9.74143 27.2374 9.51129 28.2752 9.51129C29.3487 9.51129 30.297 9.74143 31.1201 10.2017C31.961 10.662 32.6141 11.3081 33.0793 12.1402C33.5445 12.9545 33.7771 13.9016 33.7771 14.9814V24.2754H30.2612V15.8046C30.2612 15.1673 30.136 14.6185 29.8855 14.1583C29.635 13.698 29.2861 13.3439 28.8388 13.0961C28.4093 12.8306 27.8994 12.6978 27.309 12.6978C26.7364 12.6978 26.2265 12.8306 25.7792 13.0961C25.3318 13.3439 24.9829 13.698 24.7324 14.1583C24.482 14.6185 24.3567 15.1673 24.3567 15.8046V24.2754H20.8408Z" fill="#23203D"/><path d="M39.8365 24.594C38.8167 24.594 37.931 24.4259 37.1795 24.0895C36.428 23.7532 35.8465 23.2752 35.435 22.6556C35.0235 22.0183 34.8177 21.2836 34.8177 20.4516C34.8177 19.655 34.9966 18.9469 35.3545 18.3273C35.7123 17.69 36.267 17.1589 37.0185 16.734C37.77 16.3091 38.7183 16.0082 39.8634 15.8312L44.6407 15.0611V17.7165L40.5343 18.4069C39.8365 18.5308 39.3177 18.7521 38.9777 19.0708C38.6377 19.3894 38.4678 19.8054 38.4678 20.3188C38.4678 20.8145 38.6556 21.2128 39.0314 21.5138C39.425 21.797 39.9081 21.9386 40.4807 21.9386C41.2143 21.9386 41.8584 21.7881 42.4131 21.4872C42.9856 21.1686 43.424 20.7348 43.7281 20.1861C44.0502 19.6373 44.2112 19.0354 44.2112 18.3804V14.6628C44.2112 14.0432 43.9607 13.5298 43.4598 13.1227C42.9767 12.6978 42.3325 12.4854 41.5274 12.4854C40.7759 12.4854 40.1049 12.6889 39.5145 13.0961C38.9419 13.4856 38.5214 14.0078 38.2531 14.6628L35.3813 13.282C35.6676 12.5208 36.1149 11.8658 36.7233 11.317C37.3495 10.7505 38.0831 10.3079 38.924 9.98927C39.765 9.67062 40.6775 9.51129 41.6616 9.51129C42.8604 9.51129 43.916 9.73258 44.8285 10.1751C45.741 10.6 46.4478 11.2019 46.9488 11.9808C47.4677 12.742 47.7271 13.636 47.7271 14.6628V24.2754H44.3991V21.8059L45.1506 21.7527C44.7749 22.3723 44.3275 22.8946 43.8087 23.3194C43.2898 23.7266 42.6993 24.0452 42.0373 24.2754C41.3753 24.4878 40.6417 24.594 39.8365 24.594Z" fill="#23203D"/><path d="M49.6347 29.2174V9.82995H52.9359V12.6978L52.6138 11.9808C53.1148 11.2019 53.7947 10.6 54.6536 10.1751C55.5124 9.73258 56.5054 9.51129 57.6327 9.51129C59.0104 9.51129 60.2539 9.84765 61.3632 10.5204C62.4726 11.1931 63.3493 12.0959 63.9934 13.2289C64.6555 14.3618 64.9865 15.6364 64.9865 17.0527C64.9865 18.4512 64.6644 19.7258 64.0203 20.8765C63.3761 22.0271 62.4994 22.9388 61.3901 23.6115C60.2807 24.2665 59.0193 24.594 57.6058 24.594C56.5502 24.594 55.575 24.3905 54.6804 23.9833C53.8037 23.5584 53.1059 22.9565 52.587 22.1776L53.1506 21.4872V29.2174H49.6347ZM57.2033 21.4075C58.0084 21.4075 58.7241 21.2217 59.3503 20.8499C59.9766 20.4781 60.4597 19.9648 60.7996 19.3098C61.1575 18.6548 61.3364 17.9024 61.3364 17.0527C61.3364 16.2029 61.1575 15.4594 60.7996 14.8221C60.4597 14.1671 59.9766 13.6537 59.3503 13.282C58.7241 12.8925 58.0084 12.6978 57.2033 12.6978C56.4339 12.6978 55.7361 12.8837 55.1098 13.2554C54.5015 13.6272 54.0184 14.1494 53.6605 14.8221C53.3206 15.4771 53.1506 16.2206 53.1506 17.0527C53.1506 17.9024 53.3206 18.6548 53.6605 19.3098C54.0184 19.9648 54.5015 20.4781 55.1098 20.8499C55.7361 21.2217 56.4339 21.4075 57.2033 21.4075Z" fill="#23203D"/><path fill-rule="evenodd" clip-rule="evenodd" d="M118.732 4.17393C118.732 3.40553 118.103 2.78262 117.327 2.78262H68.8505C68.0745 2.78262 67.4454 3.40553 67.4454 4.17393V27.1304C67.4454 27.8988 68.0745 28.5218 68.8505 28.5218H111.288C111.661 28.5218 112.018 28.3752 112.282 28.1143L118.32 22.1349C118.584 21.874 118.732 21.5201 118.732 21.1511V4.17393Z" fill="#7E1DF9"/><path d="M71.8215 24.2878V7.01657H78.5176C79.7194 7.01657 80.7808 7.22522 81.7017 7.64251C82.6382 8.0598 83.3718 8.67801 83.9025 9.49714C84.4332 10.3163 84.6986 11.3286 84.6986 12.5341C84.6986 13.7087 84.4254 14.7055 83.8791 15.5247C83.3484 16.3438 82.6148 16.9697 81.6783 17.4025C80.7574 17.8198 79.7038 18.0284 78.5176 18.0284H75.4505V24.2878H71.8215ZM75.4505 14.8987H78.541C79.0561 14.8987 79.5009 14.7983 79.8755 14.5974C80.2501 14.3964 80.5389 14.1182 80.7418 13.7628C80.9603 13.4073 81.0696 12.9977 81.0696 12.5341C81.0696 12.055 80.9603 11.6377 80.7418 11.2822C80.5389 10.9267 80.2501 10.6485 79.8755 10.4476C79.5009 10.2467 79.0561 10.1463 78.541 10.1463H75.4505V14.8987Z" fill="white"/><path d="M86.3339 24.2878V7.01657H92.0233C93.9119 7.01657 95.5508 7.3875 96.94 8.12935C98.3291 8.8712 99.4061 9.89124 100.171 11.1895C100.936 12.4877 101.318 13.9714 101.318 15.6406C101.318 17.3098 100.936 18.8012 100.171 20.1149C99.4061 21.4131 98.3291 22.4332 96.94 23.175C95.5508 23.9169 93.9119 24.2878 92.0233 24.2878H86.3339ZM89.9629 21.1581H92.1169C93.2563 21.1581 94.2397 20.934 95.0669 20.4858C95.8942 20.0221 96.5341 19.3808 96.9868 18.5616C97.4551 17.727 97.6892 16.7534 97.6892 15.6406C97.6892 14.5124 97.4551 13.5387 96.9868 12.7196C96.5341 11.9004 95.8942 11.2668 95.0669 10.8186C94.2397 10.3704 93.2563 10.1463 92.1169 10.1463H89.9629V21.1581Z" fill="white"/><path d="M102.999 24.2878V7.01657H114.939V10.1463H106.628V14.5278H113.769V17.6575H106.628V24.2878H102.999Z" fill="white"/></svg></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <div class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_97_2410)"><path d="M8.13477 1.25H3.44727C2.75691 1.25 2.19727 1.80964 2.19727 2.5V7.1875C2.19727 7.87786 2.75691 8.4375 3.44727 8.4375H8.13477C8.82512 8.4375 9.38477 7.87786 9.38477 7.1875V2.5C9.38477 1.80964 8.82512 1.25 8.13477 1.25Z" fill="#212121"/><path d="M20.2707 3.965L16.9823 0.676559C16.8669 0.561131 16.7299 0.469567 16.5791 0.407095C16.4283 0.344624 16.2667 0.312469 16.1035 0.312469C15.9403 0.312469 15.7787 0.344624 15.6279 0.407095C15.4771 0.469567 15.3401 0.561131 15.2248 0.676559L11.9363 3.965C11.7035 4.19819 11.5728 4.51423 11.5728 4.84375C11.5728 5.17326 11.7035 5.48931 11.9363 5.7225L15.2248 9.01093C15.3401 9.12636 15.4771 9.21793 15.6279 9.2804C15.7787 9.34287 15.9403 9.37502 16.1035 9.37502C16.2667 9.37502 16.4283 9.34287 16.5791 9.2804C16.7299 9.21793 16.8669 9.12636 16.9823 9.01093L20.2707 5.7225C20.5035 5.48931 20.6343 5.17326 20.6343 4.84375C20.6343 4.51423 20.5035 4.19819 20.2707 3.965Z" fill="#212121"/><path d="M18.4473 11.5625H13.7598C13.0694 11.5625 12.5098 12.1221 12.5098 12.8125V17.5C12.5098 18.1904 13.0694 18.75 13.7598 18.75H18.4473C19.1376 18.75 19.6973 18.1904 19.6973 17.5V12.8125C19.6973 12.1221 19.1376 11.5625 18.4473 11.5625Z" fill="#212121"/><path d="M8.13477 11.5625H3.44727C2.75691 11.5625 2.19727 12.1221 2.19727 12.8125V17.5C2.19727 18.1904 2.75691 18.75 3.44727 18.75H8.13477C8.82512 18.75 9.38477 18.1904 9.38477 17.5V12.8125C9.38477 12.1221 8.82512 11.5625 8.13477 11.5625Z" fill="#212121"/></g><defs><clipPath id="clip0_97_2410"><rect width="20" height="20" fill="white" transform="translate(0.947266)"/></clipPath></defs></svg>All tools</div>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/merge-pdf">Merge PDF</a></li>
                <li><a class="dropdown-item" href="/split-pdf">Split PDF</a></li>
                <li><a class="dropdown-item" href="/word-to-pdf">Word to PDF</a></li>
                <li><a class="dropdown-item" href="/pdf-to-word">PDF to Word</a></li>
                <li><a class="dropdown-item" href="/jpg-to-pdf">JPG to PDF</a></li>
                <li><a class="dropdown-item" href="/pdf-to-jpg">PDF to JPG</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="/merge-pdf">Merge</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="/split-pdf">Split</a></li>
          </ul>
          <div class="navbar-nav">
            <div class="nav-item dropdown">
              <a class="nav-link nav-langs dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?=$lang['languages']?></a>
              <ul class="dropdown-menu nav-lang">
              <?php foreach ($listLanguage as $key => $value) { ?>
                <li><a class="dropdown-item" href="<?=$isHomeUrl?><?= $key ?><?= isset($slug) ? '/' . $slug : '' ?>"><?= $value['name'] ?></a></li>
              <?php } ?>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </nav>
    </header>