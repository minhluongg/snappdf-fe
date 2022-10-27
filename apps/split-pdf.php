<?php
/**
 * Config
 */
$multiLanguage = true;
$slug = '/split-pdf';
$privateLanguage = 'split/';

include '../inc/config.php';

$isTitle = $merge['title'];
$isDesc = $merge['desc'];
$isCanonical = $isHomeUrl . $slug;

include '../inc/header.php';
?>
<link href="/assets/css/app.css?v=1.6" rel="stylesheet">
<div class="main-cover">
    <div class="container">
        <div class="upload" id="upload">
            <div class="title-wrapper">
                <div class="title-page">
                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.38892 14.4348C1.38892 12.2126 3.16669 10.4126 5.36136 10.4126H16.9791C19.1738 10.4126 20.9525 12.2135 20.9525 14.4348V26.2002C20.9525 28.4215 19.1738 30.2224 16.9791 30.2224H5.36225C3.16669 30.2224 1.38892 28.4215 1.38892 26.2002V14.4348Z" fill="#05A85C"/><path d="M7.65112 19.7521L5.37201 22.7708C5.33681 22.8172 5.31517 22.8724 5.30949 22.9303C5.3038 22.9883 5.3143 23.0467 5.33982 23.099C5.36534 23.1513 5.40488 23.1955 5.45403 23.2267C5.50318 23.2579 5.56002 23.2749 5.61824 23.2757H16.7525C17.0111 23.2757 17.156 22.9735 16.996 22.7672L13.0431 17.6739C13.0147 17.637 12.9782 17.6071 12.9365 17.5864C12.8948 17.5656 12.849 17.5546 12.8024 17.5542C12.7559 17.5538 12.7098 17.5639 12.6677 17.5839C12.6257 17.6039 12.5887 17.6331 12.5596 17.6695L9.80579 21.0801C9.77778 21.1152 9.74241 21.1438 9.70218 21.1638C9.66195 21.1837 9.61783 21.1947 9.57293 21.1958C9.52803 21.1969 9.48343 21.1881 9.44227 21.1701C9.40111 21.1522 9.36438 21.1254 9.33468 21.0917L8.12935 19.7335C8.09914 19.6991 8.06165 19.6719 8.01959 19.6538C7.97753 19.6357 7.93197 19.6273 7.88623 19.6291C7.8405 19.6309 7.79574 19.6428 7.75522 19.6641C7.7147 19.6854 7.67944 19.7155 7.65201 19.7521H7.65112Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M15.0413 2.39712H26.8013C28.1436 2.39712 29.2324 3.49934 29.2324 4.85845V16.7678C29.2324 18.1278 28.1444 19.23 26.8022 19.23H21.9836V20.7376H26.8013C28.9667 20.7376 30.7222 18.9598 30.7222 16.7678V4.85845C30.7222 2.66645 28.9667 0.888672 26.8022 0.888672H15.0413C12.876 0.888672 11.1213 2.66645 11.1213 4.85845V9.53667H12.6102V4.85845C12.6102 3.49845 13.6982 2.39623 15.0413 2.39623V2.39712Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M16.1853 6.97253C16.1853 6.55653 16.5187 6.21875 16.9302 6.21875H24.9738C25.3853 6.21875 25.7187 6.55653 25.7187 6.97253C25.7194 7.07101 25.7006 7.16866 25.6636 7.2599C25.6265 7.35114 25.5718 7.43418 25.5026 7.50427C25.4335 7.57436 25.3511 7.63012 25.2604 7.66837C25.1696 7.70662 25.0722 7.72661 24.9738 7.72719H16.9293C16.8309 7.7265 16.7336 7.70642 16.643 7.66812C16.5523 7.62982 16.4701 7.57403 16.401 7.50395C16.3319 7.43388 16.2773 7.35088 16.2403 7.25969C16.2033 7.16851 16.1846 7.07093 16.1853 6.97253Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M26.8023 0.888672C28.9667 0.888672 30.7223 2.66645 30.7223 4.85845V16.7678C30.7223 18.9607 28.9667 20.7376 26.8023 20.7376H21.9836V19.2291H26.8014C28.1436 19.2291 29.2325 18.1269 29.2325 16.7678V4.85845C29.2325 3.49845 28.1445 2.39623 26.8023 2.39623H15.0414C13.6992 2.39623 12.6103 3.49845 12.6103 4.85845V9.53667H11.1205V4.85845C11.1205 2.66645 12.876 0.888672 15.0405 0.888672H26.8023Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M22.1436 10.6931C22.1436 10.2763 22.3933 9.93848 22.7018 9.93848H25.1596C25.4689 9.93848 25.7187 10.2763 25.7187 10.6931C25.7187 11.11 25.4689 11.4469 25.1596 11.4469H22.7018C22.3933 11.4469 22.1436 11.1091 22.1436 10.6931ZM22.1436 14.414C22.1436 13.9971 22.4769 13.6594 22.8885 13.6594H24.9738C25.3853 13.6594 25.7187 13.9971 25.7187 14.414C25.7193 14.5124 25.7005 14.61 25.6633 14.7011C25.6262 14.7923 25.5715 14.8752 25.5023 14.9452C25.4332 15.0152 25.3509 15.0709 25.2602 15.1091C25.1695 15.1473 25.0722 15.1672 24.9738 15.1678H22.8885C22.7901 15.1672 22.6927 15.1473 22.602 15.1091C22.5113 15.0709 22.4291 15.0152 22.3599 14.9452C22.2907 14.8752 22.236 14.7923 22.1989 14.7011C22.1618 14.61 22.143 14.5124 22.1436 14.414Z" fill="#05A85C"/></svg>
                    <h1 class="page-title"><?=$merge['h1']?></h1>
                </div>
                <h2 class="page-subtitle"><?=$merge['h2']?></h2>
            </div>
            <div class="upload-box" id="upload-box">
                <div id="drop-area" class="drop-area">
                    <label for="file" class="label-upload"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 11H13.5V5C13.5 4.73478 13.3946 4.48043 13.2071 4.29289C13.0196 4.10536 12.7652 4 12.5 4C12.2348 4 11.9804 4.10536 11.7929 4.29289C11.6054 4.48043 11.5 4.73478 11.5 5V11H5.5C5.23478 11 4.98043 11.1054 4.79289 11.2929C4.60536 11.4804 4.5 11.7348 4.5 12C4.5 12.2652 4.60536 12.5196 4.79289 12.7071C4.98043 12.8946 5.23478 13 5.5 13H11.5V19C11.5 19.2652 11.6054 19.5196 11.7929 19.7071C11.9804 19.8946 12.2348 20 12.5 20C12.7652 20 13.0196 19.8946 13.2071 19.7071C13.3946 19.5196 13.5 19.2652 13.5 19V13H19.5C19.7652 13 20.0196 12.8946 20.2071 12.7071C20.3946 12.5196 20.5 12.2652 20.5 12C20.5 11.7348 20.3946 11.4804 20.2071 11.2929C20.0196 11.1054 19.7652 11 19.5 11Z" fill="white"/></svg>Upload</label>
                    <input type="file" accept="application/pdf,.pdf" id="file">
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
<!-- Convert  -->
<div class="converter" id="converter">
    <div class="converter-content">
        <div class="converter-body">
            <div class="converter-main">
                <div class="converter-container">
                    <button type="button" class="btn btn-settings" onclick="$('.settings').addClass('show');$('.converter').css('z-index', 1057)"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.9999 9.625C13.1346 9.625 12.2887 9.88159 11.5692 10.3623C10.8498 10.8431 10.289 11.5263 9.95788 12.3258C9.62675 13.1252 9.54011 14.0049 9.70892 14.8535C9.87773 15.7022 10.2944 16.4817 10.9063 17.0936C11.5181 17.7054 12.2977 18.1221 13.1463 18.2909C13.995 18.4597 14.8747 18.3731 15.6741 18.042C16.4735 17.7108 17.1568 17.1501 17.6375 16.4306C18.1183 15.7112 18.3749 14.8653 18.3749 14C18.3714 12.8407 17.9093 11.73 17.0896 10.9102C16.2699 10.0905 15.1591 9.62846 13.9999 9.625ZM23.4455 14C23.4432 14.4088 23.4132 14.817 23.3558 15.2217L26.0185 17.3064C26.1345 17.4022 26.2126 17.536 26.239 17.6841C26.2653 17.8322 26.2382 17.9848 26.1624 18.1147L23.6434 22.4634C23.5669 22.5922 23.4474 22.6898 23.3059 22.7391C23.1645 22.7884 23.0102 22.7863 22.8702 22.733L19.7393 21.4752C19.0874 21.9773 18.3739 22.3939 17.6163 22.715L17.1482 26.0389C17.122 26.1878 17.0449 26.323 16.9301 26.4213C16.8153 26.5197 16.6699 26.5751 16.5188 26.5781H11.4809C11.3326 26.5752 11.1895 26.5221 11.0752 26.4275C10.9609 26.3328 10.882 26.2022 10.8515 26.057L10.3834 22.733C9.62369 22.4157 8.90974 21.9984 8.2604 21.4922L5.12954 22.75C4.98959 22.8033 4.83534 22.8055 4.6939 22.7563C4.55247 22.7071 4.43292 22.6096 4.35626 22.4809L1.83735 18.1327C1.76153 18.0028 1.73437 17.8502 1.76072 17.7022C1.78707 17.5541 1.86521 17.4202 1.98118 17.3245L4.64392 15.2398C4.58712 14.8289 4.55716 14.4148 4.55423 14C4.5565 13.5912 4.58647 13.183 4.64392 12.7783L1.98118 10.6936C1.86521 10.5978 1.78707 10.464 1.76072 10.3159C1.73437 10.1678 1.76153 10.0152 1.83735 9.88531L4.35626 5.53656C4.43283 5.40783 4.55235 5.31021 4.69379 5.2609C4.83523 5.21159 4.98953 5.21373 5.12954 5.26695L8.2604 6.52477C8.91234 6.02274 9.62578 5.60611 10.3834 5.285L10.8515 1.96109C10.8777 1.81221 10.9548 1.67704 11.0696 1.57869C11.1844 1.48034 11.3298 1.42491 11.4809 1.42188H16.5188C16.6672 1.42476 16.8102 1.47787 16.9245 1.57253C17.0388 1.66718 17.1177 1.7978 17.1482 1.94305L17.6163 5.26695C18.377 5.58412 19.0919 6.00143 19.742 6.50781L22.8702 5.25C23.0101 5.19673 23.1644 5.1945 23.3058 5.24371C23.4472 5.29293 23.5668 5.39042 23.6434 5.51906L26.1624 9.86781C26.2382 9.9977 26.2653 10.1503 26.239 10.2984C26.2126 10.4465 26.1345 10.5803 26.0185 10.6761L23.3558 12.7608C23.4126 13.1715 23.4425 13.5854 23.4455 14Z" fill="#4C119A"/></svg></button>
                    <div class="convert-wrapper" id="convert-wrapper">
                        <div class="title-wrapper">
                            <div class="title-page">
                                <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.38892 14.4348C1.38892 12.2126 3.16669 10.4126 5.36136 10.4126H16.9791C19.1738 10.4126 20.9525 12.2135 20.9525 14.4348V26.2002C20.9525 28.4215 19.1738 30.2224 16.9791 30.2224H5.36225C3.16669 30.2224 1.38892 28.4215 1.38892 26.2002V14.4348Z" fill="#05A85C"/><path d="M7.65112 19.7521L5.37201 22.7708C5.33681 22.8172 5.31517 22.8724 5.30949 22.9303C5.3038 22.9883 5.3143 23.0467 5.33982 23.099C5.36534 23.1513 5.40488 23.1955 5.45403 23.2267C5.50318 23.2579 5.56002 23.2749 5.61824 23.2757H16.7525C17.0111 23.2757 17.156 22.9735 16.996 22.7672L13.0431 17.6739C13.0147 17.637 12.9782 17.6071 12.9365 17.5864C12.8948 17.5656 12.849 17.5546 12.8024 17.5542C12.7559 17.5538 12.7098 17.5639 12.6677 17.5839C12.6257 17.6039 12.5887 17.6331 12.5596 17.6695L9.80579 21.0801C9.77778 21.1152 9.74241 21.1438 9.70218 21.1638C9.66195 21.1837 9.61783 21.1947 9.57293 21.1958C9.52803 21.1969 9.48343 21.1881 9.44227 21.1701C9.40111 21.1522 9.36438 21.1254 9.33468 21.0917L8.12935 19.7335C8.09914 19.6991 8.06165 19.6719 8.01959 19.6538C7.97753 19.6357 7.93197 19.6273 7.88623 19.6291C7.8405 19.6309 7.79574 19.6428 7.75522 19.6641C7.7147 19.6854 7.67944 19.7155 7.65201 19.7521H7.65112Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M15.0413 2.39712H26.8013C28.1436 2.39712 29.2324 3.49934 29.2324 4.85845V16.7678C29.2324 18.1278 28.1444 19.23 26.8022 19.23H21.9836V20.7376H26.8013C28.9667 20.7376 30.7222 18.9598 30.7222 16.7678V4.85845C30.7222 2.66645 28.9667 0.888672 26.8022 0.888672H15.0413C12.876 0.888672 11.1213 2.66645 11.1213 4.85845V9.53667H12.6102V4.85845C12.6102 3.49845 13.6982 2.39623 15.0413 2.39623V2.39712Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M16.1853 6.97253C16.1853 6.55653 16.5187 6.21875 16.9302 6.21875H24.9738C25.3853 6.21875 25.7187 6.55653 25.7187 6.97253C25.7194 7.07101 25.7006 7.16866 25.6636 7.2599C25.6265 7.35114 25.5718 7.43418 25.5026 7.50427C25.4335 7.57436 25.3511 7.63012 25.2604 7.66837C25.1696 7.70662 25.0722 7.72661 24.9738 7.72719H16.9293C16.8309 7.7265 16.7336 7.70642 16.643 7.66812C16.5523 7.62982 16.4701 7.57403 16.401 7.50395C16.3319 7.43388 16.2773 7.35088 16.2403 7.25969C16.2033 7.16851 16.1846 7.07093 16.1853 6.97253Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M26.8023 0.888672C28.9667 0.888672 30.7223 2.66645 30.7223 4.85845V16.7678C30.7223 18.9607 28.9667 20.7376 26.8023 20.7376H21.9836V19.2291H26.8014C28.1436 19.2291 29.2325 18.1269 29.2325 16.7678V4.85845C29.2325 3.49845 28.1445 2.39623 26.8023 2.39623H15.0414C13.6992 2.39623 12.6103 3.49845 12.6103 4.85845V9.53667H11.1205V4.85845C11.1205 2.66645 12.876 0.888672 15.0405 0.888672H26.8023Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M22.1436 10.6931C22.1436 10.2763 22.3933 9.93848 22.7018 9.93848H25.1596C25.4689 9.93848 25.7187 10.2763 25.7187 10.6931C25.7187 11.11 25.4689 11.4469 25.1596 11.4469H22.7018C22.3933 11.4469 22.1436 11.1091 22.1436 10.6931ZM22.1436 14.414C22.1436 13.9971 22.4769 13.6594 22.8885 13.6594H24.9738C25.3853 13.6594 25.7187 13.9971 25.7187 14.414C25.7193 14.5124 25.7005 14.61 25.6633 14.7011C25.6262 14.7923 25.5715 14.8752 25.5023 14.9452C25.4332 15.0152 25.3509 15.0709 25.2602 15.1091C25.1695 15.1473 25.0722 15.1672 24.9738 15.1678H22.8885C22.7901 15.1672 22.6927 15.1473 22.602 15.1091C22.5113 15.0709 22.4291 15.0152 22.3599 14.9452C22.2907 14.8752 22.236 14.7923 22.1989 14.7011C22.1618 14.61 22.143 14.5124 22.1436 14.414Z" fill="#05A85C"/></svg>
                                <div class="page-title"><?=$merge['h1']?></div>
                            </div>
                        </div>
                        <div class="row handle-upload" id="handle-upload">
                            <div class="col-12">
                                <div class="ready-convert">
                                    <div class="pdf-items" id="pdfItems"></div>
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
                                    <div class="pdf-file-size" id="dlFileSize"></div></div>
                                </div>
                        </div>
                        <div class="mt-4 justify-center">
                            <a type="button" class="btn btn-primary btn-convert" href="#" id="download-btn"><?=$lang['download']?><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 9H15.5V3H9.5V9H5.5L12.5 16L19.5 9ZM5.5 18V20H19.5V18H5.5Z" fill="white"/></svg></a>
                        </div>
                        
                    </div>

                </div>
            </div>
            <div class="settings">
                <div class="setting-header border-none">
                    <div class="settings-title"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9999 8.25C11.2582 8.25 10.5332 8.46993 9.9165 8.88199C9.29981 9.29404 8.81916 9.87971 8.53534 10.5649C8.25151 11.2502 8.17724 12.0042 8.32194 12.7316C8.46663 13.459 8.82379 14.1272 9.34823 14.6517C9.87268 15.1761 10.5409 15.5333 11.2683 15.6779C11.9957 15.8226 12.7497 15.7484 13.4349 15.4645C14.1202 15.1807 14.7058 14.7001 15.1179 14.0834C15.53 13.4667 15.7499 12.7417 15.7499 12C15.7469 11.0064 15.3509 10.0542 14.6483 9.35163C13.9456 8.64901 12.9935 8.25297 11.9999 8.25ZM20.0961 12C20.0942 12.3504 20.0685 12.7003 20.0193 13.0472L22.3016 14.8341C22.401 14.9161 22.468 15.0309 22.4906 15.1578C22.5132 15.2847 22.4899 15.4155 22.4249 15.5269L20.2658 19.2544C20.2002 19.3647 20.0977 19.4484 19.9765 19.4907C19.8553 19.5329 19.723 19.5311 19.603 19.4855L16.9194 18.4073C16.3606 18.8377 15.7491 19.1948 15.0997 19.47L14.6985 22.3191C14.676 22.4467 14.6099 22.5625 14.5115 22.6468C14.4131 22.7311 14.2885 22.7786 14.1589 22.7812H9.84082C9.71363 22.7788 9.59103 22.7333 9.49304 22.6521C9.39504 22.571 9.32745 22.459 9.30129 22.3345L8.90004 19.4855C8.24889 19.2134 7.63693 18.8557 7.08035 18.4219L4.39676 19.5C4.2768 19.5457 4.14458 19.5476 4.02336 19.5054C3.90213 19.4632 3.79965 19.3796 3.73395 19.2694L1.57488 15.5423C1.5099 15.431 1.48661 15.3002 1.5092 15.1733C1.53178 15.0464 1.59876 14.9316 1.69816 14.8495L3.98051 13.0627C3.93183 12.7105 3.90615 12.3555 3.90363 12C3.90558 11.6496 3.93127 11.2997 3.98051 10.9528L1.69816 9.16594C1.59876 9.08386 1.53178 8.96911 1.5092 8.84219C1.48661 8.71527 1.5099 8.58446 1.57488 8.47312L3.73395 4.74563C3.79958 4.63528 3.90202 4.55161 4.02326 4.50934C4.14449 4.46707 4.27675 4.46891 4.39676 4.51453L7.08035 5.59266C7.63916 5.16235 8.25068 4.80524 8.90004 4.53L9.30129 1.68094C9.32375 1.55332 9.38983 1.43746 9.48823 1.35316C9.58664 1.26886 9.71127 1.22135 9.84082 1.21875H14.1589C14.2861 1.22123 14.4087 1.26675 14.5067 1.34788C14.6047 1.42901 14.6723 1.54097 14.6985 1.66547L15.0997 4.51453C15.7517 4.78639 16.3645 5.14408 16.9218 5.57812L19.603 4.5C19.723 4.45434 19.8552 4.45243 19.9764 4.49461C20.0976 4.53679 20.2001 4.62036 20.2658 4.73062L22.4249 8.45813C22.4899 8.56946 22.5132 8.70027 22.4906 8.82719C22.468 8.95411 22.401 9.06886 22.3016 9.15094L20.0193 10.9378C20.0679 11.2898 20.0936 11.6446 20.0961 12Z" fill="#363539"/></svg>Split setting</div>
                    <button type="button" class="btn-close" onclick="$('.settings').removeClass('show');$('.converter').css('z-index', 1000)"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.59216 7.00049L13.0453 2.54736C13.2566 2.33639 13.3755 2.0501 13.3758 1.75148C13.376 1.45286 13.2577 1.16636 13.0467 0.955018C12.8357 0.743674 12.5494 0.624793 12.2508 0.62453C11.9522 0.624266 11.6657 0.74264 11.4543 0.953612L7.00122 5.40674L2.54809 0.953612C2.33675 0.742267 2.05011 0.623535 1.75122 0.623535C1.45233 0.623535 1.16569 0.742267 0.954344 0.953612C0.743 1.16496 0.624268 1.4516 0.624268 1.75049C0.624268 2.04937 0.743 2.33602 0.954344 2.54736L5.40747 7.00049L0.954344 11.4536C0.743 11.665 0.624268 11.9516 0.624268 12.2505C0.624268 12.5494 0.743 12.836 0.954344 13.0474C1.16569 13.2587 1.45233 13.3774 1.75122 13.3774C2.05011 13.3774 2.33675 13.2587 2.54809 13.0474L7.00122 8.59424L11.4543 13.0474C11.6657 13.2587 11.9523 13.3774 12.2512 13.3774C12.5501 13.3774 12.8367 13.2587 13.0481 13.0474C13.2594 12.836 13.3782 12.5494 13.3782 12.2505C13.3782 11.9516 13.2594 11.665 13.0481 11.4536L8.59216 7.00049Z" fill="#5C5D6B"/></svg></button>
                </div>
                <div class="setting-main">
                    <div class="radio-toggle mt-3 p-c border-none">
                        <div class="row">
                            <div class="col-6">
                                <input class="hide-input" type="radio" name="mode" value="pages" id="modePages" checked="checked">
                                <label for="modePages">Split by range</label>
                            </div>
                            <div class="col-6">
                                <input class="hide-input" type="radio" name="mode" value="extract" id="modeExtract">
                                <label for="modeExtract">Extract pages</label>
                            </div>
                        </div>
                    </div>
                    <div class="setting-box mt-3 p-c border-none">
                        <div class="setting-title">Pages to delete</div>
                            <div class="input-group has-validation">
                                <input id="pageRange" type="text" name="page_range" class="form-control" placeholder="Example: 2, 3-7, 10-end" min="1">
                                <div class="invalid-feedback">
                                    Please enter a number.
                                </div>
                            </div>
                            <div class="input-about">You can enter multiple ranges separated by a comma.</div>
                        <input id="page_count" type="hidden" name="page_count" class="form-control" value="" min="1">
                        <input id="page_range" type="hidden" name="page_range" class="form-control" value="">
                        <div class="input-deletepage text-muted mt-3"><b>Delete page:</b> <span id="listsDelete"></span></div>
                    </div>
                    
                </div>
                <div class="setting-footer">
                    <button type="button" class="btn btn-convert" onclick="handleConvert()"><?=$lang['convert_now']?><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_58_608)"><path d="M12.5 4L11.09 5.41L16.67 11H4.5V13H16.67L11.09 18.59L12.5 20L20.5 12L12.5 4Z" fill="white"/></g><defs><clipPath id="clip0_58_608"><rect width="24" height="24" fill="white" transform="translate(0.5)"/></clipPath></defs></svg></button>

                </div>
            </div>
        </div>
        
        <div class="converter-footer">
            <div class="upload-more convert-now">
                <button type="button" class="btn btn-convert" onclick="handleConvert()"><?=$lang['convert_now']?><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_58_608)"><path d="M12.5 4L11.09 5.41L16.67 11H4.5V13H16.67L11.09 18.59L12.5 20L20.5 12L12.5 4Z" fill="white"/></g><defs><clipPath id="clip0_58_608"><rect width="24" height="24" fill="white" transform="translate(0.5)"/></clipPath></defs></svg></button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script>
<script src="/assets/js/all.js?v=1.2"></script>
<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
<script>
Sortable.create(pdfItems, { /* options */ });
var pdfjsLib = window['pdfjs-dist/build/pdf'];

pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

var currPage = 1;
var numPages = 0;
var thePDF = null;
var pdfData = [];
var pdfs = [];
var allPageDel = [];
var fileName = '';

$("#drop-area").dmUploader({
    url: '/upload.php',
    headers: {
    'Access-Control-Allow-Origin': "*"
    },
    onNewFile: function(id, file){
        handlePrint(file);
        showPreview(id, file);
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
        // update_file_status(id, 'danger', message);
        ui_update_pdf_progress(id, 0, 'progress-success', false);
        updateError(id, 0);
    },
    onInit: function() {
        console.log('Callback: Plugin initialized');
    },
});

function updateError () {
    console.log(0);
}


function handlePages(page)
{
    //This gives us the page's dimensions at full scale
    var viewport = page.getViewport( {scale: .5} );
    numPage = page['_pageIndex'] + 1;
    $('#pdfItems').append('<div id="page-num' + numPage + '" data-id="' + numPage + '" class="pdf-item"><div class="file-info"><div class="pdf-file-size">' + numPage + '</div></div></div>');
    //We'll create a canvas for each page to draw it on
    var canvas = document.createElement( "canvas" );
    canvas.className = 'pdf-page-canvas';
    var context = canvas.getContext('2d');
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    page.render({canvasContext: context, viewport: viewport});

    document.getElementById('page-num' + numPage).prepend( canvas );

    currPage++;
    if ( thePDF !== null && currPage <= numPages )
    {
        thePDF.getPage( currPage ).then( handlePages );
    }
}

function handlePrint(file) {

    if(file.type == "application/pdf"){
		var fileReader = new FileReader();  
		fileReader.onload = function() {
        var pdfData = new Uint8Array(this.result);
        // Using DocumentInitParameters object to load binary data.

        pdfjsLib.getDocument({data: pdfData}).promise.then(function(pdf) {

        thePDF = pdf;
        numPages = pdf.numPages;
        $("#page_count").val(numPages);
        pdf.getPage( 1 ).then( handlePages );
        });
			
		};
		fileReader.readAsArrayBuffer(file);
	}
}


function showPreview(id, file) {
    $('#upload').addClass('disabled');
    $('#converter').addClass('d-block');
    $('#convert-wrapper').removeClass('disabled');
    $('#handle-upload').addClass('active');
    $('body').addClass('d-scroll');
    fileName = file.name.replace(/\.[^/.]+$/, "");
    fileName = fixFilename(fileName);
}

function removeItem(id) {
    $("#" + id).remove();
    if ($(".pdf-item").length === 0) {
        $('#upload').removeClass('disabled');
        $('#converter').removeClass('d-block');
        $('#convert-wrapper').removeClass('disabled');
        $('#handle-upload').addClass('active');
        $('body').removeClass('d-scroll');
    }
}



$('#pageRange').on('input', function() {
  hiddenErrorInput('pageRange');
  var rangeValue = $(this).val();
  var rangeArr = rangeValue.split(",");
  var rangeLength = rangeArr.length;
  var allPage = [];
  for (var i = 0; i < rangeLength; i++) {
    var oneStrPage = rangeArr[i].trim();
   
    if (isNaN(Number(oneStrPage))) {
        if (oneStrPage.indexOf("-") != -1) {
            console.log('yes');
            var myRange = oneStrPage.split("-");
            var first_Range = myRange[0].trim();
            var last_Range = myRange[myRange.length - 1].trim();
            
            if (!isNaN(Number(first_Range)) && !isNaN(Number(last_Range))) {
                if (numPages < last_Range) {
                    last_Range = numPages;
                    // showErrorInput('pageRange', 'Your PDF has only <b>' + numPages + '</b> pages, you must not enter a number greater than ' + numPages);
                }
                var rangeSplit  = range(Number(myRange[0]), Number(last_Range));
                var rangeSplitLength = rangeSplit.length;
                for (var j =0; j < rangeSplitLength; j++) {
                    allPage.push(rangeSplit[j]);
                }
            }
        } else {
            showErrorInput('pageRange', 'The data you entered is incorrect, must be digits');
        }
    } else {
        if (oneStrPage != '') {
            if (numPages < Number(oneStrPage)) {
                showErrorInput('pageRange', 'Your PDF has only <b>' + numPages + '</b> pages, you must not enter a number greater than ' + numPages);
            } else {
                allPage.push(Number(oneStrPage));
            }
        }
    }
  }
  allPage.sort(function(a, b) {
    return a - b;
  });
  allPageDel = allPage.filter(onlyUnique);

  var stringPageDel = allPageDel.join(', ');
    $('#listsDelete').text(stringPageDel);
    $('#page_range').val(stringPageDel);

});



function handleConvert() {
    ui_converting();
    $('.settings').removeClass('show');
	countPDF = $(".pdf-item").length;

    var isPageCount = $('input[name=page_count]').val();
    var isPageRange = $('input[name=page_range]').val();
    var isTaskId = pdfs[0]['id_be'];
    var isTaskId = pdfs[0]['id_be'];
    // if () {

    // }
    console.log(isPageRange);
    if (allPageDel != [] && isPageCount != '' && pdfs[0]['id_be']) {
        var items = getItems();

        var dataSend = {
                "task": 'remove_page',
                "files": [{"id": pdfs[0]['id_be'], "name":fileName}],
                "config": {
                    "page_range": allPageDel,
                    "page_count": Number(isPageCount)
                }
            };
        getTaskId(dataSend);

    } else {
        showAlertError("Please fill in the page you want to delete");
    }

}

</script>

<?php
include '../inc/footer.php';
?>