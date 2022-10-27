<?php
/**
 * Config
 */
$multiLanguage = true;
$slug = '/word-to-pdf';
$privateLanguage = 'word2pdf/';

include '../inc/config.php';

$isTitle = $merge['title'];
$isDesc = $merge['desc'];
$isCanonical = $isHomeUrl . $slug;

include '../inc/header.php';
?>

<link href="/assets/css/app.css?v=1.6" rel="stylesheet">
<div class="main-cover">
    <div class="container mt-3">
        <div class="upload" id="upload">
            <div class="title-wrapper">
                <div class="title-page">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.777832 12.6443C0.777832 10.7022 2.33339 9.12878 4.25372 9.12878H14.4193C16.3396 9.12878 17.8959 10.7022 17.8959 12.6443V22.9281C17.8959 24.8702 16.3396 26.4445 14.4193 26.4445H4.2545C2.33339 26.4445 0.777832 24.8702 0.777832 22.9289V12.6436V12.6443Z" fill="#005EEB"/><path d="M6.94162 21.014L5.58829 14.5336C5.57383 14.4646 5.57462 14.3932 5.59061 14.3246C5.6066 14.2559 5.63739 14.1916 5.68085 14.1361C5.72199 14.0791 5.77647 14.0331 5.83952 14.0021C5.90257 13.971 5.97226 13.9559 6.04251 13.958C6.2074 13.958 6.35596 14.014 6.48662 14.126C6.61729 14.2302 6.69662 14.3663 6.72462 14.5336L7.74662 20.3233C7.74662 20.3311 7.74973 20.3342 7.75673 20.3342C7.76373 20.3342 7.76685 20.3303 7.76685 20.3233L8.7904 14.5429C8.82159 14.3814 8.90493 14.2347 9.02762 14.1252C9.15359 14.0155 9.31556 13.9559 9.48262 13.958H9.75096C9.92362 13.958 10.0745 14.0132 10.206 14.1252C10.3366 14.2364 10.416 14.3757 10.4432 14.5429L11.4667 20.3233C11.4667 20.3311 11.4698 20.3342 11.4768 20.3342C11.4838 20.3342 11.487 20.3303 11.487 20.3233L12.5105 14.5118C12.5355 14.3564 12.6162 14.2153 12.7376 14.1151C12.8594 14.0134 13.013 13.9575 13.1716 13.9572C13.2402 13.956 13.308 13.9716 13.3692 14.0027C13.4303 14.0337 13.4829 14.0793 13.5224 14.1353C13.5686 14.185 13.6014 14.2456 13.6178 14.3115C13.6341 14.3773 13.6334 14.4463 13.6157 14.5118L12.2515 21.014C12.218 21.1795 12.1264 21.3277 11.9933 21.4317C11.8647 21.5351 11.7041 21.5904 11.5391 21.588H11.3213C11.1545 21.5899 10.9928 21.5304 10.8671 21.4208C10.7441 21.3114 10.6605 21.1646 10.6291 21.0031L9.60629 15.2227C9.60629 15.2149 9.60318 15.2118 9.59618 15.2118C9.58918 15.2118 9.58607 15.2157 9.58607 15.2227L8.56251 21.0031C8.53715 21.1669 8.45278 21.3157 8.32529 21.4216C8.19929 21.5312 8.03734 21.5908 7.87029 21.5888H7.65329C7.48501 21.5901 7.32119 21.5347 7.18818 21.4317C7.06023 21.3246 6.97291 21.1769 6.94085 21.0132L6.94162 21.014Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.7237 2.09617H23.0137C24.1881 2.09617 25.1409 3.05983 25.1409 4.24828V14.6581C25.1409 15.8465 24.1889 16.8094 23.0145 16.8094H18.7981V18.1285H23.0137C24.9084 18.1285 26.4445 16.5745 26.4445 14.6581V4.24828C26.4445 2.33105 24.9084 0.777832 23.0145 0.777832H12.7237C10.829 0.777832 9.2937 2.33105 9.2937 4.24828V8.33705H10.5965V4.24828C10.5965 3.05983 11.5485 2.09617 12.7237 2.09617Z" fill="#005EEB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.7246 6.0962C13.7246 5.73142 14.0163 5.43665 14.3764 5.43665H21.4145C21.7746 5.43665 22.0663 5.7322 22.0663 6.0962C22.0671 6.26996 21.9989 6.43694 21.8767 6.56047C21.7545 6.68399 21.5883 6.75395 21.4145 6.75498H14.3756C14.202 6.75375 14.0359 6.68369 13.9139 6.56019C13.7919 6.43669 13.7238 6.26983 13.7246 6.0962Z" fill="#005EEB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M23.0144 0.777832C24.9083 0.777832 26.4444 2.33105 26.4444 4.24828V14.6581C26.4444 16.5745 24.9083 18.1285 23.0144 18.1285H18.7981V16.8094H23.0136C24.1881 16.8094 25.1408 15.8465 25.1408 14.6581V4.24828C25.1408 3.05983 24.1888 2.09617 23.0144 2.09617H12.7236C11.5492 2.09617 10.5964 3.05983 10.5964 4.24828V8.33705H9.29285V4.24828C9.29285 2.33105 10.829 0.777832 12.7228 0.777832H23.0144Z" fill="#005EEB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M18.9381 9.34815C18.9381 8.98415 19.1567 8.6886 19.4266 8.6886H21.5771C21.8478 8.6886 22.0663 8.98415 22.0663 9.34815C22.0663 9.71215 21.8478 10.0069 21.5771 10.0069H19.4266C19.1567 10.0069 18.9381 9.71138 18.9381 9.34815ZM18.9381 12.6C18.9381 12.236 19.2298 11.9413 19.5899 11.9413H21.4146C21.7747 11.9413 22.0663 12.2368 22.0663 12.6C22.0669 12.6861 22.0504 12.7715 22.0179 12.8513C21.9854 12.931 21.9376 13.0036 21.8771 13.0648C21.8165 13.1261 21.7445 13.1748 21.6652 13.2082C21.5858 13.2416 21.5007 13.2591 21.4146 13.2596H19.5899C19.5038 13.2591 19.4186 13.2416 19.3393 13.2082C19.2599 13.1748 19.1879 13.1261 19.1274 13.0648C19.0669 13.0036 19.019 12.931 18.9865 12.8513C18.9541 12.7715 18.9376 12.6861 18.9381 12.6Z" fill="#005EEB"/></svg>
                    <h1 class="page-title"><?=$merge['h1']?></h1>
                </div>
                <h2 class="page-subtitle"><?=$merge['h2']?></h2>
            </div>
            <div class="upload-box" id="upload-box">
                <div id="drop-area" class="drop-area">
                    <label for="file" class="label-upload"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 11H13.5V5C13.5 4.73478 13.3946 4.48043 13.2071 4.29289C13.0196 4.10536 12.7652 4 12.5 4C12.2348 4 11.9804 4.10536 11.7929 4.29289C11.6054 4.48043 11.5 4.73478 11.5 5V11H5.5C5.23478 11 4.98043 11.1054 4.79289 11.2929C4.60536 11.4804 4.5 11.7348 4.5 12C4.5 12.2652 4.60536 12.5196 4.79289 12.7071C4.98043 12.8946 5.23478 13 5.5 13H11.5V19C11.5 19.2652 11.6054 19.5196 11.7929 19.7071C11.9804 19.8946 12.2348 20 12.5 20C12.7652 20 13.0196 19.8946 13.2071 19.7071C13.3946 19.5196 13.5 19.2652 13.5 19V13H19.5C19.7652 13 20.0196 12.8946 20.2071 12.7071C20.3946 12.5196 20.5 12.2652 20.5 12C20.5 11.7348 20.3946 11.4804 20.2071 11.2929C20.0196 11.1054 19.7652 11 19.5 11Z" fill="white"/></svg>Upload</label>
                    <input type="file" accept=".doc,.docx" id="file">
                </div>
            </div>

        </div>
    </div>

</div>

<div class="app-how">
    <div class="container">
        <h2 class="title-h2"><?=$merge['how_title']?></h2>
        <div class="apphow-box">
            <div class="img">
                <img src="/assets/img/tools-icon.svg" alt="Icon">
            </div>
            <div class="content">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-text"><?=$merge['how']?></div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-text"><?=$merge['how2']?></div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-text"><?=$merge['how3']?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why-choose">
    <div class="container">
        <h2 class="title-h2"><?=$merge['why-choose_title']?></h2>
        <div class="whys">
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" fill="none" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)" stroke="#6D18DC" stroke-width="2"><path d="m35 20c0 2.9667-0.8797 5.8668-2.5279 8.3336-1.6483 2.4667-3.991 4.3893-6.7318 5.5246-2.7409 1.1353-5.7569 1.4324-8.6666 0.8536-2.9098-0.5788-5.5825-2.0074-7.6803-4.1052-2.0978-2.0978-3.5264-4.7705-4.1052-7.6802-0.57878-2.9098-0.28173-5.9258 0.85358-8.6667 1.1353-2.7408 3.0579-5.0835 5.5247-6.7317 2.4667-1.6482 5.3668-2.528 8.3335-2.528" stroke-linecap="round" stroke-linejoin="round"/><path d="m30.197 4.4008c0.1049-0.19217 0.2597-0.35255 0.448-0.46427 0.1883-0.11173 0.4032-0.17069 0.6222-0.17069s0.4339 0.05896 0.6222 0.17069c0.1883 0.11172 0.3431 0.2721 0.448 0.46427l0.9454 1.727c0.1135 0.20594 0.2805 0.37296 0.4865 0.48646l1.7269 0.94375c0.1926 0.10481 0.3533 0.25961 0.4653 0.4481 0.112 0.18848 0.1712 0.40367 0.1712 0.62293 0 0.21925-0.0592 0.43444-0.1712 0.62293-0.112 0.18848-0.2727 0.34328-0.4653 0.4481l-1.7269 0.94535c-0.206 0.1115-0.375 0.2805-0.4865 0.4865l-0.9454 1.7253c-0.1049 0.1922-0.2597 0.3526-0.448 0.4643s-0.4032 0.1707-0.6222 0.1707-0.4339-0.059-0.6222-0.1707-0.3431-0.2721-0.448-0.4643l-0.9454-1.7269c-0.1115-0.206-0.2805-0.375-0.4864-0.4865l-1.727-0.94375c-0.1926-0.10482-0.3533-0.25962-0.4653-0.4481-0.112-0.18849-0.1711-0.40368-0.1711-0.62293 0-0.21926 0.0591-0.43445 0.1711-0.62293 0.112-0.18849 0.2727-0.34329 0.4653-0.4481l1.727-0.94375c0.2054-0.11217 0.3743-0.28103 0.4864-0.48646l0.9454-1.727z"/><path d="m15 15.55v1.6667" stroke-linecap="round" stroke-linejoin="round"/><path d="m25 15.55v1.6667" stroke-linecap="round" stroke-linejoin="round"/><path d="m25.403 24.43c-1.4333 1.4321-3.3765 2.2366-5.4025 2.2366-2.0261 0-3.9693-0.8045-5.4025-2.2366" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="a"><rect width="40" height="40" fill="#fff"/></clipPath></defs></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$merge['whyChoose_1']?></h3>
            <div class="desc-content"><?=$merge['why-choose_desc1']?></div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" fill="none" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)" stroke="#6D18DC" stroke-width="2"><path d="m35 20c0 2.9667-0.8797 5.8668-2.5279 8.3336-1.6483 2.4667-3.991 4.3893-6.7318 5.5246-2.7409 1.1353-5.7569 1.4324-8.6666 0.8536-2.9098-0.5788-5.5825-2.0074-7.6803-4.1052-2.0978-2.0978-3.5264-4.7705-4.1052-7.6802-0.57878-2.9098-0.28173-5.9258 0.85358-8.6667 1.1353-2.7408 3.0579-5.0835 5.5247-6.7317 2.4667-1.6482 5.3668-2.528 8.3335-2.528" stroke-linecap="round" stroke-linejoin="round"/><path d="m30.197 4.4008c0.1049-0.19217 0.2597-0.35255 0.448-0.46427 0.1883-0.11173 0.4032-0.17069 0.6222-0.17069s0.4339 0.05896 0.6222 0.17069c0.1883 0.11172 0.3431 0.2721 0.448 0.46427l0.9454 1.727c0.1135 0.20594 0.2805 0.37296 0.4865 0.48646l1.7269 0.94375c0.1926 0.10481 0.3533 0.25961 0.4653 0.4481 0.112 0.18848 0.1712 0.40367 0.1712 0.62293 0 0.21925-0.0592 0.43444-0.1712 0.62293-0.112 0.18848-0.2727 0.34328-0.4653 0.4481l-1.7269 0.94535c-0.206 0.1115-0.375 0.2805-0.4865 0.4865l-0.9454 1.7253c-0.1049 0.1922-0.2597 0.3526-0.448 0.4643s-0.4032 0.1707-0.6222 0.1707-0.4339-0.059-0.6222-0.1707-0.3431-0.2721-0.448-0.4643l-0.9454-1.7269c-0.1115-0.206-0.2805-0.375-0.4864-0.4865l-1.727-0.94375c-0.1926-0.10482-0.3533-0.25962-0.4653-0.4481-0.112-0.18849-0.1711-0.40368-0.1711-0.62293 0-0.21926 0.0591-0.43445 0.1711-0.62293 0.112-0.18849 0.2727-0.34329 0.4653-0.4481l1.727-0.94375c0.2054-0.11217 0.3743-0.28103 0.4864-0.48646l0.9454-1.727z"/><path d="m15 15.55v1.6667" stroke-linecap="round" stroke-linejoin="round"/><path d="m25 15.55v1.6667" stroke-linecap="round" stroke-linejoin="round"/><path d="m25.403 24.43c-1.4333 1.4321-3.3765 2.2366-5.4025 2.2366-2.0261 0-3.9693-0.8045-5.4025-2.2366" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="a"><rect width="40" height="40" fill="#fff"/></clipPath></defs></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$merge['whyChoose_2']?></h3>
            <div class="desc-content"><?=$merge['why-choose_desc2']?></div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_310_5338)"><path d="M8.39559 31.904L20.8416 19.458L29.2096 27.828L16.7656 40.272C16.216 40.8216 15.5636 41.2575 14.8455 41.555C14.1274 41.8524 13.3578 42.0055 12.5806 42.0055C11.8034 42.0055 11.0338 41.8524 10.3157 41.555C9.59762 41.2575 8.94518 40.8216 8.39559 40.272C7.28566 39.1621 6.66211 37.6567 6.66211 36.087C6.66211 34.5173 7.28566 33.0119 8.39559 31.902V31.904Z" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M39.4949 25.7722L29.2069 27.8302L20.8369 19.4602L22.8949 9.17222C23.0924 8.18329 23.6612 7.30757 24.4844 6.72504C25.3076 6.14252 26.3226 5.89746 27.3209 6.04022L27.5329 6.07022C31.3351 6.61453 34.8584 8.37681 37.5744 11.0928C40.2903 13.8087 42.0526 17.332 42.5969 21.1342L42.6269 21.3462C42.7697 22.3445 42.5246 23.3596 41.9421 24.1828C41.3596 25.006 40.4838 25.5748 39.4949 25.7722V25.7722Z" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.667 36L16.667 32" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_310_5338"><rect width="48" height="48" fill="white" transform="translate(0.666992)"/></clipPath></defs></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$merge['whyChoose_3']?></h3>
            <div class="desc-content"><?=$merge['why-choose_desc3']?></div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.412 24.2856V15.2856C25.412 14.49 25.096 13.7269 24.5334 13.1643C23.9708 12.6017 23.2077 12.2856 22.412 12.2856C21.6164 12.2856 20.8533 12.6017 20.2907 13.1643C19.7281 13.7269 19.412 14.49 19.412 15.2856V30.2856L15.348 28.9316C14.6177 28.6869 13.8247 28.7053 13.1065 28.9835C12.3882 29.2617 11.7898 29.7823 11.4148 30.4551C11.0398 31.128 10.9118 31.9107 11.053 32.6679C11.1943 33.4252 11.5957 34.1092 12.188 34.6016L20.298 41.3596C21.02 41.9576 21.926 42.2856 22.86 42.2856H31.88C32.8552 42.2859 33.7968 41.9299 34.5279 41.2846C35.2589 40.6393 35.7291 39.7492 35.85 38.7816L36.936 30.0956C37.0642 29.0709 36.791 28.0363 36.1737 27.2083C35.5564 26.3804 34.6428 25.8233 33.624 25.6536L25.412 24.2856Z" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.4199 14.2856H12.4199" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M34.4199 14.2856H32.4199" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M30.8995 5.80566L29.4795 7.20566" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.9199 5.80566L15.3399 7.20566" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M22.4199 2.28564V4.28564" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$merge['whyChoose_4']?></h3>
            <div class="desc-content"><?=$merge['why-choose_desc4']?></div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.412 24.2856V15.2856C25.412 14.49 25.096 13.7269 24.5334 13.1643C23.9708 12.6017 23.2077 12.2856 22.412 12.2856C21.6164 12.2856 20.8533 12.6017 20.2907 13.1643C19.7281 13.7269 19.412 14.49 19.412 15.2856V30.2856L15.348 28.9316C14.6177 28.6869 13.8247 28.7053 13.1065 28.9835C12.3882 29.2617 11.7898 29.7823 11.4148 30.4551C11.0398 31.128 10.9118 31.9107 11.053 32.6679C11.1943 33.4252 11.5957 34.1092 12.188 34.6016L20.298 41.3596C21.02 41.9576 21.926 42.2856 22.86 42.2856H31.88C32.8552 42.2859 33.7968 41.9299 34.5279 41.2846C35.2589 40.6393 35.7291 39.7492 35.85 38.7816L36.936 30.0956C37.0642 29.0709 36.791 28.0363 36.1737 27.2083C35.5564 26.3804 34.6428 25.8233 33.624 25.6536L25.412 24.2856Z" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.4199 14.2856H12.4199" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M34.4199 14.2856H32.4199" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M30.8995 5.80566L29.4795 7.20566" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.9199 5.80566L15.3399 7.20566" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M22.4199 2.28564V4.28564" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$merge['whyChoose_5']?></h3>
            <div class="desc-content"><?=$merge['why-choose_desc5']?></div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.3948 28.1818H4.57662C4.19085 28.1818 3.82088 28.0285 3.5481 27.7557C3.27532 27.4829 3.12207 27.113 3.12207 26.7272V25.2727C3.12207 24.8869 3.27532 24.5169 3.5481 24.2441C3.82088 23.9714 4.19085 23.8181 4.57662 23.8181H20.3948" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M29.3034 7.81803C29.3034 7.04649 28.997 6.30655 28.4514 5.76099C27.9058 5.21543 27.1659 4.90894 26.3944 4.90894H7.48526C6.71372 4.90894 5.97379 5.21543 5.42822 5.76099C4.88266 6.30655 4.57617 7.04649 4.57617 7.81803V23.818" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M23.3036 12.1816H29.3036C30.0752 12.1816 30.8151 12.4881 31.3607 13.0337C31.9062 13.5793 32.2127 14.3192 32.2127 15.0907V28.1816C32.2127 28.9532 31.9062 29.6931 31.3607 30.2387C30.8151 30.7842 30.0752 31.0907 29.3036 31.0907H23.3036C22.5321 31.0907 21.7921 30.7842 21.2466 30.2387C20.701 29.6931 20.3945 28.9532 20.3945 28.1816V15.0907C20.3945 14.3192 20.701 13.5793 21.2466 13.0337C21.7921 12.4881 22.5321 12.1816 23.3036 12.1816V12.1816Z" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M29.3037 12.1818V7.81812" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M25.0273 27.8179H27.5728" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$merge['whyChoose_6']?></h3>
            <div class="desc-content"><?=$merge['why-choose_desc6']?></div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php
include '../inc/products.php';
?>
<div class="converter" id="converter">
    <div class="converter-content">
        <div class="converter-body">
            <div>
                <div class="container">
                    <div class="convert-wrapper" id="convert-wrapper">
                        <div class="title-wrapper">
                            <div class="title-page">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.777832 12.6443C0.777832 10.7022 2.33339 9.12878 4.25372 9.12878H14.4193C16.3396 9.12878 17.8959 10.7022 17.8959 12.6443V22.9281C17.8959 24.8702 16.3396 26.4445 14.4193 26.4445H4.2545C2.33339 26.4445 0.777832 24.8702 0.777832 22.9289V12.6436V12.6443Z" fill="#005EEB"/><path d="M6.94162 21.014L5.58829 14.5336C5.57383 14.4646 5.57462 14.3932 5.59061 14.3246C5.6066 14.2559 5.63739 14.1916 5.68085 14.1361C5.72199 14.0791 5.77647 14.0331 5.83952 14.0021C5.90257 13.971 5.97226 13.9559 6.04251 13.958C6.2074 13.958 6.35596 14.014 6.48662 14.126C6.61729 14.2302 6.69662 14.3663 6.72462 14.5336L7.74662 20.3233C7.74662 20.3311 7.74973 20.3342 7.75673 20.3342C7.76373 20.3342 7.76685 20.3303 7.76685 20.3233L8.7904 14.5429C8.82159 14.3814 8.90493 14.2347 9.02762 14.1252C9.15359 14.0155 9.31556 13.9559 9.48262 13.958H9.75096C9.92362 13.958 10.0745 14.0132 10.206 14.1252C10.3366 14.2364 10.416 14.3757 10.4432 14.5429L11.4667 20.3233C11.4667 20.3311 11.4698 20.3342 11.4768 20.3342C11.4838 20.3342 11.487 20.3303 11.487 20.3233L12.5105 14.5118C12.5355 14.3564 12.6162 14.2153 12.7376 14.1151C12.8594 14.0134 13.013 13.9575 13.1716 13.9572C13.2402 13.956 13.308 13.9716 13.3692 14.0027C13.4303 14.0337 13.4829 14.0793 13.5224 14.1353C13.5686 14.185 13.6014 14.2456 13.6178 14.3115C13.6341 14.3773 13.6334 14.4463 13.6157 14.5118L12.2515 21.014C12.218 21.1795 12.1264 21.3277 11.9933 21.4317C11.8647 21.5351 11.7041 21.5904 11.5391 21.588H11.3213C11.1545 21.5899 10.9928 21.5304 10.8671 21.4208C10.7441 21.3114 10.6605 21.1646 10.6291 21.0031L9.60629 15.2227C9.60629 15.2149 9.60318 15.2118 9.59618 15.2118C9.58918 15.2118 9.58607 15.2157 9.58607 15.2227L8.56251 21.0031C8.53715 21.1669 8.45278 21.3157 8.32529 21.4216C8.19929 21.5312 8.03734 21.5908 7.87029 21.5888H7.65329C7.48501 21.5901 7.32119 21.5347 7.18818 21.4317C7.06023 21.3246 6.97291 21.1769 6.94085 21.0132L6.94162 21.014Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.7237 2.09617H23.0137C24.1881 2.09617 25.1409 3.05983 25.1409 4.24828V14.6581C25.1409 15.8465 24.1889 16.8094 23.0145 16.8094H18.7981V18.1285H23.0137C24.9084 18.1285 26.4445 16.5745 26.4445 14.6581V4.24828C26.4445 2.33105 24.9084 0.777832 23.0145 0.777832H12.7237C10.829 0.777832 9.2937 2.33105 9.2937 4.24828V8.33705H10.5965V4.24828C10.5965 3.05983 11.5485 2.09617 12.7237 2.09617Z" fill="#005EEB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.7246 6.0962C13.7246 5.73142 14.0163 5.43665 14.3764 5.43665H21.4145C21.7746 5.43665 22.0663 5.7322 22.0663 6.0962C22.0671 6.26996 21.9989 6.43694 21.8767 6.56047C21.7545 6.68399 21.5883 6.75395 21.4145 6.75498H14.3756C14.202 6.75375 14.0359 6.68369 13.9139 6.56019C13.7919 6.43669 13.7238 6.26983 13.7246 6.0962Z" fill="#005EEB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M23.0144 0.777832C24.9083 0.777832 26.4444 2.33105 26.4444 4.24828V14.6581C26.4444 16.5745 24.9083 18.1285 23.0144 18.1285H18.7981V16.8094H23.0136C24.1881 16.8094 25.1408 15.8465 25.1408 14.6581V4.24828C25.1408 3.05983 24.1888 2.09617 23.0144 2.09617H12.7236C11.5492 2.09617 10.5964 3.05983 10.5964 4.24828V8.33705H9.29285V4.24828C9.29285 2.33105 10.829 0.777832 12.7228 0.777832H23.0144Z" fill="#005EEB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M18.9381 9.34815C18.9381 8.98415 19.1567 8.6886 19.4266 8.6886H21.5771C21.8478 8.6886 22.0663 8.98415 22.0663 9.34815C22.0663 9.71215 21.8478 10.0069 21.5771 10.0069H19.4266C19.1567 10.0069 18.9381 9.71138 18.9381 9.34815ZM18.9381 12.6C18.9381 12.236 19.2298 11.9413 19.5899 11.9413H21.4146C21.7747 11.9413 22.0663 12.2368 22.0663 12.6C22.0669 12.6861 22.0504 12.7715 22.0179 12.8513C21.9854 12.931 21.9376 13.0036 21.8771 13.0648C21.8165 13.1261 21.7445 13.1748 21.6652 13.2082C21.5858 13.2416 21.5007 13.2591 21.4146 13.2596H19.5899C19.5038 13.2591 19.4186 13.2416 19.3393 13.2082C19.2599 13.1748 19.1879 13.1261 19.1274 13.0648C19.0669 13.0036 19.019 12.931 18.9865 12.8513C18.9541 12.7715 18.9376 12.6861 18.9381 12.6Z" fill="#005EEB"/></svg>
                                <div class="page-title"><?=$merge['h1']?></div>
                            </div>
                        </div>
                        <div class="handle-upload" id="handle-upload">
                            <div style="width:100%">
                                <div class="ready-convert">
                                    <div class="pdf-items" id="pdfItems"></div>
                                    <div class="upload-more"><label for="file" class="btn-upload-more"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 4.5C12.4142 4.5 12.75 4.83579 12.75 5.25V11.25H18.75C19.1642 11.25 19.5 11.5858 19.5 12C19.5 12.4142 19.1642 12.75 18.75 12.75H12.75V18.75C12.75 19.1642 12.4142 19.5 12 19.5C11.5858 19.5 11.25 19.1642 11.25 18.75V12.75H5.25C4.83579 12.75 4.5 12.4142 4.5 12C4.5 11.5858 4.83579 11.25 5.25 11.25H11.25V5.25C11.25 4.83579 11.5858 4.5 12 4.5Z" fill="#363539"/></svg></label></div>
                                    <div class="only-pc">
                                        <div class="upload-more convert-now">
                                        <button type="button" class="btn btn-convert only-pc" onclick="handleConvert()"><?=$lang['convert_now']?><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_58_608)"><path d="M12.5 4L11.09 5.41L16.67 11H4.5V13H16.67L11.09 18.59L12.5 20L20.5 12L12.5 4Z" fill="white"/></g><defs><clipPath id="clip0_58_608"><rect width="24" height="24" fill="white" transform="translate(0.5)"/></clipPath></defs></svg></button>
                                        </div>
                                    </div>    
                                    
                                </div>

                            </div>
                        </div>
                        <div class="task-processing" id="task-process">
                            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                            <div class="processing-title"><?=$lang['task_processing']?></div>
                            <span><?=$lang['please_wait']?></span>
                        </div>
                    </div>
                    <div class="download-wrapper" id="download-final">
                        <div class="title-wrapper">
                            <div class="title-page">
                            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5 3.5C9.33187 3.5 3.5 9.33187 3.5 16.5C3.5 23.6681 9.33187 29.5 16.5 29.5C23.6681 29.5 29.5 23.6681 29.5 16.5C29.5 9.33187 23.6681 3.5 16.5 3.5ZM23.2656 12.1431L14.8656 22.1431C14.7735 22.2529 14.6588 22.3415 14.5294 22.4031C14.4 22.4647 14.2589 22.4977 14.1156 22.5H14.0988C13.9586 22.4999 13.82 22.4704 13.692 22.4134C13.564 22.3563 13.4494 22.273 13.3556 22.1688L9.75562 18.1688C9.6642 18.0718 9.59308 17.9575 9.54644 17.8327C9.49981 17.7078 9.4786 17.5749 9.48407 17.4417C9.48953 17.3086 9.52156 17.1778 9.57827 17.0572C9.63498 16.9366 9.71523 16.8286 9.81429 16.7394C9.91336 16.6503 10.0293 16.5818 10.1551 16.5381C10.281 16.4944 10.4144 16.4763 10.5474 16.4848C10.6804 16.4934 10.8104 16.5284 10.9296 16.5879C11.0489 16.6474 11.155 16.7301 11.2419 16.8312L14.0725 19.9762L21.7344 10.8569C21.9062 10.6582 22.1494 10.5351 22.4113 10.5142C22.6732 10.4934 22.9327 10.5764 23.1339 10.7454C23.3351 10.9143 23.4617 11.1557 23.4863 11.4172C23.5109 11.6788 23.4317 11.9395 23.2656 12.1431Z" fill="#05A85C"/></svg>
                            <div class="page-title"><?=$lang['pdf_converted']?></div>
                            </div>
                        </div>
                        <div class="preview-download">
                            <div class="preview-file">
                                <div class="file-info">
                                    <div id="download-icon"></div>
                                    <div class="pdf-filename" id="downloadFilename"></div>
                                    <div class="pdf-file-size" id="dlFileSize"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 justify-center">
                            <a type="button" class="btn btn-primary btn-convert" href="#" id="download-btn"><?=$lang['download']?><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 9H15.5V3H9.5V9H5.5L12.5 16L19.5 9ZM5.5 18V20H19.5V18H5.5Z" fill="white"/></svg></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="converter-footer">
            <div class="container">
                <div class="upload-more convert-now">
                    <button type="button" class="btn btn-convert" onclick="handleConvert()"><?=$lang['convert_now']?><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_58_608)"><path d="M12.5 4L11.09 5.41L16.67 11H4.5V13H16.67L11.09 18.59L12.5 20L20.5 12L12.5 4Z" fill="white"/></g><defs><clipPath id="clip0_58_608"><rect width="24" height="24" fill="white" transform="translate(0.5)"/></clipPath></defs></svg></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/assets/js/all.js?v=1.2"></script>
<script>
function formatBytes(a,b=2){if(!+a)return"0 Bytes";const c=0>b?0:b,d=Math.floor(Math.log(a)/Math.log(1024));return`${parseFloat((a/Math.pow(1024,d)).toFixed(c))} ${["Bytes","KB","MB","GB","TB","PB","EB","ZB","YB"][d]}`}
var pdfs = [];

$("#drop-area").dmUploader({
    url: '/upload.php',
    headers: {
    'Access-Control-Allow-Origin': "*"
    },
    onNewFile: function(id, file){
        ui_show_preview(id, file, 'word');
    },
    onUploadProgress: function(id, percent) {
        // Updating file progress
        ui_update_pdf_progress(id, percent);
    },
    onUploadSuccess: function(id, data) {
        // A file was successfully uploaded
        update_file_status(id, data);
        ui_update_pdf_progress(id, 100, 'progress-success', false);
    },
    onUploadError: function(id, xhr, status, message) {
        ui_update_pdf_progress(id, 0, 'danger', false);
        updateError(id, 0);
    },
    onInit: function() {
        console.log('Callback: Plugin initialized');
    },
});

function updateError () {
    console.log(0);
}
function removeItem(id) {
    $("#" + id).remove();
    if ($(".pdf-item").length === 0) {
        $('#upload').removeClass('disabled');
        $('#converter').removeClass('d-block');
        $('#convert-wrapper').removeClass('disabled');
        $('#handle-upload').addClass('active');
    }
}


function handleConvert() {
    ui_converting();
    var items = getItems();
    var dataSend = {
			task: 'word2pdf',
            files: items
		};
    getTaskId(dataSend);
}
</script>
</body>
</html>