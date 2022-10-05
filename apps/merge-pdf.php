<?php
/**
 * Config
 */
// $multiLanguage = true;
$isCanonical = $isHomeUrl;
$privateLanguage = 'merge/';
// include 
include '../inc/config.php';
include '../inc/header.php';
?>
<link href="/assets/css/app.css" rel="stylesheet">
<div class="main-cover">
    <div class="container">
        <div class="upload" id="upload">
            <div class="title-wrapper">
                <div class="title-page">
                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.38892 14.4348C1.38892 12.2126 3.16669 10.4126 5.36136 10.4126H16.9791C19.1738 10.4126 20.9525 12.2135 20.9525 14.4348V26.2002C20.9525 28.4215 19.1738 30.2224 16.9791 30.2224H5.36225C3.16669 30.2224 1.38892 28.4215 1.38892 26.2002V14.4348Z" fill="#05A85C"/><path d="M7.65112 19.7521L5.37201 22.7708C5.33681 22.8172 5.31517 22.8724 5.30949 22.9303C5.3038 22.9883 5.3143 23.0467 5.33982 23.099C5.36534 23.1513 5.40488 23.1955 5.45403 23.2267C5.50318 23.2579 5.56002 23.2749 5.61824 23.2757H16.7525C17.0111 23.2757 17.156 22.9735 16.996 22.7672L13.0431 17.6739C13.0147 17.637 12.9782 17.6071 12.9365 17.5864C12.8948 17.5656 12.849 17.5546 12.8024 17.5542C12.7559 17.5538 12.7098 17.5639 12.6677 17.5839C12.6257 17.6039 12.5887 17.6331 12.5596 17.6695L9.80579 21.0801C9.77778 21.1152 9.74241 21.1438 9.70218 21.1638C9.66195 21.1837 9.61783 21.1947 9.57293 21.1958C9.52803 21.1969 9.48343 21.1881 9.44227 21.1701C9.40111 21.1522 9.36438 21.1254 9.33468 21.0917L8.12935 19.7335C8.09914 19.6991 8.06165 19.6719 8.01959 19.6538C7.97753 19.6357 7.93197 19.6273 7.88623 19.6291C7.8405 19.6309 7.79574 19.6428 7.75522 19.6641C7.7147 19.6854 7.67944 19.7155 7.65201 19.7521H7.65112Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M15.0413 2.39712H26.8013C28.1436 2.39712 29.2324 3.49934 29.2324 4.85845V16.7678C29.2324 18.1278 28.1444 19.23 26.8022 19.23H21.9836V20.7376H26.8013C28.9667 20.7376 30.7222 18.9598 30.7222 16.7678V4.85845C30.7222 2.66645 28.9667 0.888672 26.8022 0.888672H15.0413C12.876 0.888672 11.1213 2.66645 11.1213 4.85845V9.53667H12.6102V4.85845C12.6102 3.49845 13.6982 2.39623 15.0413 2.39623V2.39712Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M16.1853 6.97253C16.1853 6.55653 16.5187 6.21875 16.9302 6.21875H24.9738C25.3853 6.21875 25.7187 6.55653 25.7187 6.97253C25.7194 7.07101 25.7006 7.16866 25.6636 7.2599C25.6265 7.35114 25.5718 7.43418 25.5026 7.50427C25.4335 7.57436 25.3511 7.63012 25.2604 7.66837C25.1696 7.70662 25.0722 7.72661 24.9738 7.72719H16.9293C16.8309 7.7265 16.7336 7.70642 16.643 7.66812C16.5523 7.62982 16.4701 7.57403 16.401 7.50395C16.3319 7.43388 16.2773 7.35088 16.2403 7.25969C16.2033 7.16851 16.1846 7.07093 16.1853 6.97253Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M26.8023 0.888672C28.9667 0.888672 30.7223 2.66645 30.7223 4.85845V16.7678C30.7223 18.9607 28.9667 20.7376 26.8023 20.7376H21.9836V19.2291H26.8014C28.1436 19.2291 29.2325 18.1269 29.2325 16.7678V4.85845C29.2325 3.49845 28.1445 2.39623 26.8023 2.39623H15.0414C13.6992 2.39623 12.6103 3.49845 12.6103 4.85845V9.53667H11.1205V4.85845C11.1205 2.66645 12.876 0.888672 15.0405 0.888672H26.8023Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M22.1436 10.6931C22.1436 10.2763 22.3933 9.93848 22.7018 9.93848H25.1596C25.4689 9.93848 25.7187 10.2763 25.7187 10.6931C25.7187 11.11 25.4689 11.4469 25.1596 11.4469H22.7018C22.3933 11.4469 22.1436 11.1091 22.1436 10.6931ZM22.1436 14.414C22.1436 13.9971 22.4769 13.6594 22.8885 13.6594H24.9738C25.3853 13.6594 25.7187 13.9971 25.7187 14.414C25.7193 14.5124 25.7005 14.61 25.6633 14.7011C25.6262 14.7923 25.5715 14.8752 25.5023 14.9452C25.4332 15.0152 25.3509 15.0709 25.2602 15.1091C25.1695 15.1473 25.0722 15.1672 24.9738 15.1678H22.8885C22.7901 15.1672 22.6927 15.1473 22.602 15.1091C22.5113 15.0709 22.4291 15.0152 22.3599 14.9452C22.2907 14.8752 22.236 14.7923 22.1989 14.7011C22.1618 14.61 22.143 14.5124 22.1436 14.414Z" fill="#05A85C"/></svg>
                    <h1 class="page-title">Merge PDF</h1>
                </div>
                <h2 class="page-subtitle">Magically convert PDFs to editable Word files</h2>
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
        <h2 class="title-h2">How to Convert Files to and from PDF Free</h2>
        <div class="apphow-box">
            <div class="img">
                <img src="/assets/img/tools-icon.svg" alt="Icon">
            </div>
            <div class="content">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-text">Select the Word, Excel, PowerPoint, PDF or other file you wish to convert.</div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-text">Our free PDF creator will convert your document to PDF or from PDF in seconds.</div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-text">Your new document will be ready to download immediately.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why-choose">
    <div class="container">
        <h2 class="title-h2"><?=$home['why-choose_title']?></h2>
        <div class="whys">
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" fill="none" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)" stroke="#6D18DC" stroke-width="2"><path d="m35 20c0 2.9667-0.8797 5.8668-2.5279 8.3336-1.6483 2.4667-3.991 4.3893-6.7318 5.5246-2.7409 1.1353-5.7569 1.4324-8.6666 0.8536-2.9098-0.5788-5.5825-2.0074-7.6803-4.1052-2.0978-2.0978-3.5264-4.7705-4.1052-7.6802-0.57878-2.9098-0.28173-5.9258 0.85358-8.6667 1.1353-2.7408 3.0579-5.0835 5.5247-6.7317 2.4667-1.6482 5.3668-2.528 8.3335-2.528" stroke-linecap="round" stroke-linejoin="round"/><path d="m30.197 4.4008c0.1049-0.19217 0.2597-0.35255 0.448-0.46427 0.1883-0.11173 0.4032-0.17069 0.6222-0.17069s0.4339 0.05896 0.6222 0.17069c0.1883 0.11172 0.3431 0.2721 0.448 0.46427l0.9454 1.727c0.1135 0.20594 0.2805 0.37296 0.4865 0.48646l1.7269 0.94375c0.1926 0.10481 0.3533 0.25961 0.4653 0.4481 0.112 0.18848 0.1712 0.40367 0.1712 0.62293 0 0.21925-0.0592 0.43444-0.1712 0.62293-0.112 0.18848-0.2727 0.34328-0.4653 0.4481l-1.7269 0.94535c-0.206 0.1115-0.375 0.2805-0.4865 0.4865l-0.9454 1.7253c-0.1049 0.1922-0.2597 0.3526-0.448 0.4643s-0.4032 0.1707-0.6222 0.1707-0.4339-0.059-0.6222-0.1707-0.3431-0.2721-0.448-0.4643l-0.9454-1.7269c-0.1115-0.206-0.2805-0.375-0.4864-0.4865l-1.727-0.94375c-0.1926-0.10482-0.3533-0.25962-0.4653-0.4481-0.112-0.18849-0.1711-0.40368-0.1711-0.62293 0-0.21926 0.0591-0.43445 0.1711-0.62293 0.112-0.18849 0.2727-0.34329 0.4653-0.4481l1.727-0.94375c0.2054-0.11217 0.3743-0.28103 0.4864-0.48646l0.9454-1.727z"/><path d="m15 15.55v1.6667" stroke-linecap="round" stroke-linejoin="round"/><path d="m25 15.55v1.6667" stroke-linecap="round" stroke-linejoin="round"/><path d="m25.403 24.43c-1.4333 1.4321-3.3765 2.2366-5.4025 2.2366-2.0261 0-3.9693-0.8045-5.4025-2.2366" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="a"><rect width="40" height="40" fill="#fff"/></clipPath></defs></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$home['whyChoose_1']?></h3>
            <div class="desc-content"><?=$home['why-choose_desc1']?></div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" fill="none" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)" stroke="#6D18DC" stroke-width="2"><path d="m35 20c0 2.9667-0.8797 5.8668-2.5279 8.3336-1.6483 2.4667-3.991 4.3893-6.7318 5.5246-2.7409 1.1353-5.7569 1.4324-8.6666 0.8536-2.9098-0.5788-5.5825-2.0074-7.6803-4.1052-2.0978-2.0978-3.5264-4.7705-4.1052-7.6802-0.57878-2.9098-0.28173-5.9258 0.85358-8.6667 1.1353-2.7408 3.0579-5.0835 5.5247-6.7317 2.4667-1.6482 5.3668-2.528 8.3335-2.528" stroke-linecap="round" stroke-linejoin="round"/><path d="m30.197 4.4008c0.1049-0.19217 0.2597-0.35255 0.448-0.46427 0.1883-0.11173 0.4032-0.17069 0.6222-0.17069s0.4339 0.05896 0.6222 0.17069c0.1883 0.11172 0.3431 0.2721 0.448 0.46427l0.9454 1.727c0.1135 0.20594 0.2805 0.37296 0.4865 0.48646l1.7269 0.94375c0.1926 0.10481 0.3533 0.25961 0.4653 0.4481 0.112 0.18848 0.1712 0.40367 0.1712 0.62293 0 0.21925-0.0592 0.43444-0.1712 0.62293-0.112 0.18848-0.2727 0.34328-0.4653 0.4481l-1.7269 0.94535c-0.206 0.1115-0.375 0.2805-0.4865 0.4865l-0.9454 1.7253c-0.1049 0.1922-0.2597 0.3526-0.448 0.4643s-0.4032 0.1707-0.6222 0.1707-0.4339-0.059-0.6222-0.1707-0.3431-0.2721-0.448-0.4643l-0.9454-1.7269c-0.1115-0.206-0.2805-0.375-0.4864-0.4865l-1.727-0.94375c-0.1926-0.10482-0.3533-0.25962-0.4653-0.4481-0.112-0.18849-0.1711-0.40368-0.1711-0.62293 0-0.21926 0.0591-0.43445 0.1711-0.62293 0.112-0.18849 0.2727-0.34329 0.4653-0.4481l1.727-0.94375c0.2054-0.11217 0.3743-0.28103 0.4864-0.48646l0.9454-1.727z"/><path d="m15 15.55v1.6667" stroke-linecap="round" stroke-linejoin="round"/><path d="m25 15.55v1.6667" stroke-linecap="round" stroke-linejoin="round"/><path d="m25.403 24.43c-1.4333 1.4321-3.3765 2.2366-5.4025 2.2366-2.0261 0-3.9693-0.8045-5.4025-2.2366" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="a"><rect width="40" height="40" fill="#fff"/></clipPath></defs></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$home['whyChoose_2']?></h3>
            <div class="desc-content"><?=$home['why-choose_desc2']?></div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_310_5338)"><path d="M8.39559 31.904L20.8416 19.458L29.2096 27.828L16.7656 40.272C16.216 40.8216 15.5636 41.2575 14.8455 41.555C14.1274 41.8524 13.3578 42.0055 12.5806 42.0055C11.8034 42.0055 11.0338 41.8524 10.3157 41.555C9.59762 41.2575 8.94518 40.8216 8.39559 40.272C7.28566 39.1621 6.66211 37.6567 6.66211 36.087C6.66211 34.5173 7.28566 33.0119 8.39559 31.902V31.904Z" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M39.4949 25.7722L29.2069 27.8302L20.8369 19.4602L22.8949 9.17222C23.0924 8.18329 23.6612 7.30757 24.4844 6.72504C25.3076 6.14252 26.3226 5.89746 27.3209 6.04022L27.5329 6.07022C31.3351 6.61453 34.8584 8.37681 37.5744 11.0928C40.2903 13.8087 42.0526 17.332 42.5969 21.1342L42.6269 21.3462C42.7697 22.3445 42.5246 23.3596 41.9421 24.1828C41.3596 25.006 40.4838 25.5748 39.4949 25.7722V25.7722Z" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12.667 36L16.667 32" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_310_5338"><rect width="48" height="48" fill="white" transform="translate(0.666992)"/></clipPath></defs></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$home['whyChoose_3']?></h3>
            <div class="desc-content"><?=$home['why-choose_desc3']?></div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.412 24.2856V15.2856C25.412 14.49 25.096 13.7269 24.5334 13.1643C23.9708 12.6017 23.2077 12.2856 22.412 12.2856C21.6164 12.2856 20.8533 12.6017 20.2907 13.1643C19.7281 13.7269 19.412 14.49 19.412 15.2856V30.2856L15.348 28.9316C14.6177 28.6869 13.8247 28.7053 13.1065 28.9835C12.3882 29.2617 11.7898 29.7823 11.4148 30.4551C11.0398 31.128 10.9118 31.9107 11.053 32.6679C11.1943 33.4252 11.5957 34.1092 12.188 34.6016L20.298 41.3596C21.02 41.9576 21.926 42.2856 22.86 42.2856H31.88C32.8552 42.2859 33.7968 41.9299 34.5279 41.2846C35.2589 40.6393 35.7291 39.7492 35.85 38.7816L36.936 30.0956C37.0642 29.0709 36.791 28.0363 36.1737 27.2083C35.5564 26.3804 34.6428 25.8233 33.624 25.6536L25.412 24.2856Z" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.4199 14.2856H12.4199" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M34.4199 14.2856H32.4199" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M30.8995 5.80566L29.4795 7.20566" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.9199 5.80566L15.3399 7.20566" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M22.4199 2.28564V4.28564" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$home['whyChoose_4']?></h3>
            <div class="desc-content"><?=$home['why-choose_desc4']?></div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.412 24.2856V15.2856C25.412 14.49 25.096 13.7269 24.5334 13.1643C23.9708 12.6017 23.2077 12.2856 22.412 12.2856C21.6164 12.2856 20.8533 12.6017 20.2907 13.1643C19.7281 13.7269 19.412 14.49 19.412 15.2856V30.2856L15.348 28.9316C14.6177 28.6869 13.8247 28.7053 13.1065 28.9835C12.3882 29.2617 11.7898 29.7823 11.4148 30.4551C11.0398 31.128 10.9118 31.9107 11.053 32.6679C11.1943 33.4252 11.5957 34.1092 12.188 34.6016L20.298 41.3596C21.02 41.9576 21.926 42.2856 22.86 42.2856H31.88C32.8552 42.2859 33.7968 41.9299 34.5279 41.2846C35.2589 40.6393 35.7291 39.7492 35.85 38.7816L36.936 30.0956C37.0642 29.0709 36.791 28.0363 36.1737 27.2083C35.5564 26.3804 34.6428 25.8233 33.624 25.6536L25.412 24.2856Z" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.4199 14.2856H12.4199" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M34.4199 14.2856H32.4199" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M30.8995 5.80566L29.4795 7.20566" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.9199 5.80566L15.3399 7.20566" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M22.4199 2.28564V4.28564" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$home['whyChoose_5']?></h3>
            <div class="desc-content"><?=$home['why-choose_desc5']?></div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-icon"><svg width="40" height="40" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.3948 28.1818H4.57662C4.19085 28.1818 3.82088 28.0285 3.5481 27.7557C3.27532 27.4829 3.12207 27.113 3.12207 26.7272V25.2727C3.12207 24.8869 3.27532 24.5169 3.5481 24.2441C3.82088 23.9714 4.19085 23.8181 4.57662 23.8181H20.3948" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M29.3034 7.81803C29.3034 7.04649 28.997 6.30655 28.4514 5.76099C27.9058 5.21543 27.1659 4.90894 26.3944 4.90894H7.48526C6.71372 4.90894 5.97379 5.21543 5.42822 5.76099C4.88266 6.30655 4.57617 7.04649 4.57617 7.81803V23.818" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M23.3036 12.1816H29.3036C30.0752 12.1816 30.8151 12.4881 31.3607 13.0337C31.9062 13.5793 32.2127 14.3192 32.2127 15.0907V28.1816C32.2127 28.9532 31.9062 29.6931 31.3607 30.2387C30.8151 30.7842 30.0752 31.0907 29.3036 31.0907H23.3036C22.5321 31.0907 21.7921 30.7842 21.2466 30.2387C20.701 29.6931 20.3945 28.9532 20.3945 28.1816V15.0907C20.3945 14.3192 20.701 13.5793 21.2466 13.0337C21.7921 12.4881 22.5321 12.1816 23.3036 12.1816V12.1816Z" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M29.3037 12.1818V7.81812" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M25.0273 27.8179H27.5728" stroke="#6D18DC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <div class="why-content">
            <h3 class="title-h3"><?=$home['whyChoose_6']?></h3>
            <div class="desc-content"><?=$home['why-choose_desc6']?></div>
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
        <div>
            <div class="container">
                <div class="convert-wrapper" id="convert-wrapper">
                        <div class="title-wrapper">
                            <div class="title-page">
                                <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.38892 14.4348C1.38892 12.2126 3.16669 10.4126 5.36136 10.4126H16.9791C19.1738 10.4126 20.9525 12.2135 20.9525 14.4348V26.2002C20.9525 28.4215 19.1738 30.2224 16.9791 30.2224H5.36225C3.16669 30.2224 1.38892 28.4215 1.38892 26.2002V14.4348Z" fill="#05A85C"/><path d="M7.65112 19.7521L5.37201 22.7708C5.33681 22.8172 5.31517 22.8724 5.30949 22.9303C5.3038 22.9883 5.3143 23.0467 5.33982 23.099C5.36534 23.1513 5.40488 23.1955 5.45403 23.2267C5.50318 23.2579 5.56002 23.2749 5.61824 23.2757H16.7525C17.0111 23.2757 17.156 22.9735 16.996 22.7672L13.0431 17.6739C13.0147 17.637 12.9782 17.6071 12.9365 17.5864C12.8948 17.5656 12.849 17.5546 12.8024 17.5542C12.7559 17.5538 12.7098 17.5639 12.6677 17.5839C12.6257 17.6039 12.5887 17.6331 12.5596 17.6695L9.80579 21.0801C9.77778 21.1152 9.74241 21.1438 9.70218 21.1638C9.66195 21.1837 9.61783 21.1947 9.57293 21.1958C9.52803 21.1969 9.48343 21.1881 9.44227 21.1701C9.40111 21.1522 9.36438 21.1254 9.33468 21.0917L8.12935 19.7335C8.09914 19.6991 8.06165 19.6719 8.01959 19.6538C7.97753 19.6357 7.93197 19.6273 7.88623 19.6291C7.8405 19.6309 7.79574 19.6428 7.75522 19.6641C7.7147 19.6854 7.67944 19.7155 7.65201 19.7521H7.65112Z" fill="white"/><path fill-rule="evenodd" clip-rule="evenodd" d="M15.0413 2.39712H26.8013C28.1436 2.39712 29.2324 3.49934 29.2324 4.85845V16.7678C29.2324 18.1278 28.1444 19.23 26.8022 19.23H21.9836V20.7376H26.8013C28.9667 20.7376 30.7222 18.9598 30.7222 16.7678V4.85845C30.7222 2.66645 28.9667 0.888672 26.8022 0.888672H15.0413C12.876 0.888672 11.1213 2.66645 11.1213 4.85845V9.53667H12.6102V4.85845C12.6102 3.49845 13.6982 2.39623 15.0413 2.39623V2.39712Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M16.1853 6.97253C16.1853 6.55653 16.5187 6.21875 16.9302 6.21875H24.9738C25.3853 6.21875 25.7187 6.55653 25.7187 6.97253C25.7194 7.07101 25.7006 7.16866 25.6636 7.2599C25.6265 7.35114 25.5718 7.43418 25.5026 7.50427C25.4335 7.57436 25.3511 7.63012 25.2604 7.66837C25.1696 7.70662 25.0722 7.72661 24.9738 7.72719H16.9293C16.8309 7.7265 16.7336 7.70642 16.643 7.66812C16.5523 7.62982 16.4701 7.57403 16.401 7.50395C16.3319 7.43388 16.2773 7.35088 16.2403 7.25969C16.2033 7.16851 16.1846 7.07093 16.1853 6.97253Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M26.8023 0.888672C28.9667 0.888672 30.7223 2.66645 30.7223 4.85845V16.7678C30.7223 18.9607 28.9667 20.7376 26.8023 20.7376H21.9836V19.2291H26.8014C28.1436 19.2291 29.2325 18.1269 29.2325 16.7678V4.85845C29.2325 3.49845 28.1445 2.39623 26.8023 2.39623H15.0414C13.6992 2.39623 12.6103 3.49845 12.6103 4.85845V9.53667H11.1205V4.85845C11.1205 2.66645 12.876 0.888672 15.0405 0.888672H26.8023Z" fill="#05A85C"/><path fill-rule="evenodd" clip-rule="evenodd" d="M22.1436 10.6931C22.1436 10.2763 22.3933 9.93848 22.7018 9.93848H25.1596C25.4689 9.93848 25.7187 10.2763 25.7187 10.6931C25.7187 11.11 25.4689 11.4469 25.1596 11.4469H22.7018C22.3933 11.4469 22.1436 11.1091 22.1436 10.6931ZM22.1436 14.414C22.1436 13.9971 22.4769 13.6594 22.8885 13.6594H24.9738C25.3853 13.6594 25.7187 13.9971 25.7187 14.414C25.7193 14.5124 25.7005 14.61 25.6633 14.7011C25.6262 14.7923 25.5715 14.8752 25.5023 14.9452C25.4332 15.0152 25.3509 15.0709 25.2602 15.1091C25.1695 15.1473 25.0722 15.1672 24.9738 15.1678H22.8885C22.7901 15.1672 22.6927 15.1473 22.602 15.1091C22.5113 15.0709 22.4291 15.0152 22.3599 14.9452C22.2907 14.8752 22.236 14.7923 22.1989 14.7011C22.1618 14.61 22.143 14.5124 22.1436 14.414Z" fill="#05A85C"/></svg>
                                <div class="page-title">PDF to JPG</div>
                            </div>
                        </div>
                        <div class="row handle-upload" id="handle-upload">
                            <div class="col-12">
                                <div class="ready-convert">
                                    <div class="pdf-items" id="pdfItems"></div>
                                    <div class="upload-more"><label for="file" class="btn-upload-more"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 4.5C12.4142 4.5 12.75 4.83579 12.75 5.25V11.25H18.75C19.1642 11.25 19.5 11.5858 19.5 12C19.5 12.4142 19.1642 12.75 18.75 12.75H12.75V18.75C12.75 19.1642 12.4142 19.5 12 19.5C11.5858 19.5 11.25 19.1642 11.25 18.75V12.75H5.25C4.83579 12.75 4.5 12.4142 4.5 12C4.5 11.5858 4.83579 11.25 5.25 11.25H11.25V5.25C11.25 4.83579 11.5858 4.5 12 4.5Z" fill="#363539"/></svg></label></div>
                                    <div class="only-pc">
                                        <div class="upload-more convert-now">
                                        <button type="button" class="btn btn-convert only-pc" onclick="handleConvert()">Convert now<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_58_608)"><path d="M12.5 4L11.09 5.41L16.67 11H4.5V13H16.67L11.09 18.59L12.5 20L20.5 12L12.5 4Z" fill="white"/></g><defs><clipPath id="clip0_58_608"><rect width="24" height="24" fill="white" transform="translate(0.5)"/></clipPath></defs></svg></button>
                                        </div>
                                    </div>  
                                </div>

                            </div>
                        </div>
                        <div class="task-processing" id="task-process">
                            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                            <div class="processing-title">Your task is processing</div>
                            <span>Please wait...</span>
                        </div>
                    </div>
                    <div class="download-wrapper" id="download-final">
                        <div class="title-wrapper">
                            <div class="title-page">
                            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5 3.5C9.33187 3.5 3.5 9.33187 3.5 16.5C3.5 23.6681 9.33187 29.5 16.5 29.5C23.6681 29.5 29.5 23.6681 29.5 16.5C29.5 9.33187 23.6681 3.5 16.5 3.5ZM23.2656 12.1431L14.8656 22.1431C14.7735 22.2529 14.6588 22.3415 14.5294 22.4031C14.4 22.4647 14.2589 22.4977 14.1156 22.5H14.0988C13.9586 22.4999 13.82 22.4704 13.692 22.4134C13.564 22.3563 13.4494 22.273 13.3556 22.1688L9.75562 18.1688C9.6642 18.0718 9.59308 17.9575 9.54644 17.8327C9.49981 17.7078 9.4786 17.5749 9.48407 17.4417C9.48953 17.3086 9.52156 17.1778 9.57827 17.0572C9.63498 16.9366 9.71523 16.8286 9.81429 16.7394C9.91336 16.6503 10.0293 16.5818 10.1551 16.5381C10.281 16.4944 10.4144 16.4763 10.5474 16.4848C10.6804 16.4934 10.8104 16.5284 10.9296 16.5879C11.0489 16.6474 11.155 16.7301 11.2419 16.8312L14.0725 19.9762L21.7344 10.8569C21.9062 10.6582 22.1494 10.5351 22.4113 10.5142C22.6732 10.4934 22.9327 10.5764 23.1339 10.7454C23.3351 10.9143 23.4617 11.1557 23.4863 11.4172C23.5109 11.6788 23.4317 11.9395 23.2656 12.1431Z" fill="#05A85C"/></svg>
                            <div class="page-title">PDF has been converted!</div>
                            </div>
                        </div>
                        <div class="preview-download">
                            <div class="preview-file">
                                <div class="file-info">
                                    <div id="download-icon">
                                    <svg width="73" height="72" viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_400_3994)"><path d="M12.4998 58.6667V65.3333C12.4998 65.687 12.6403 66.0261 12.8904 66.2761C13.1404 66.5262 13.4796 66.6667 13.8332 66.6667H59.1665C59.5201 66.6667 59.8593 66.5262 60.1093 66.2761C60.3594 66.0261 60.4998 65.687 60.4998 65.3333V16.8293V17.3333H48.4998V5.33333H49.1092H13.8332C13.4796 5.33333 13.1404 5.47381 12.8904 5.72386C12.6403 5.97391 12.4998 6.31304 12.4998 6.66667V41.3333H39.1705C40.6412 41.3333 41.8332 42.5253 41.8332 44.004V55.996C41.8337 56.3462 41.7652 56.6931 41.6317 57.0168C41.4982 57.3405 41.3022 57.6348 41.055 57.8828C40.8077 58.1308 40.514 58.3277 40.1907 58.4622C39.8674 58.5966 39.5207 58.6661 39.1705 58.6667H12.4998ZM11.1665 58.6667H9.82918C9.47889 58.6665 9.13207 58.5972 8.80858 58.4629C8.48509 58.3285 8.19127 58.1316 7.94395 57.8836C7.69663 57.6355 7.50066 57.3411 7.36725 57.0172C7.23385 56.6933 7.16564 56.3463 7.16651 55.996V44.004C7.16599 43.6538 7.23444 43.3069 7.36797 42.9832C7.5015 42.6595 7.69748 42.3652 7.94473 42.1172C8.19198 41.8692 8.48566 41.6724 8.80899 41.5379C9.13233 41.4034 9.47899 41.3339 9.82918 41.3333H11.1665V6.66667C11.1665 5.95942 11.4475 5.28115 11.9476 4.78105C12.4477 4.28095 13.1259 4 13.8332 4H49.1092C49.4618 3.99989 49.8109 4.06972 50.1364 4.20544C50.4618 4.34115 50.7571 4.54007 51.0052 4.79067L61.0625 14.9547C61.5561 15.4538 61.833 16.1274 61.8332 16.8293V65.3333C61.8332 66.0406 61.5522 66.7189 61.0521 67.219C60.552 67.7191 59.8738 68 59.1665 68H13.8332C13.1259 68 12.4477 67.7191 11.9476 67.219C11.4475 66.7189 11.1665 66.0406 11.1665 65.3333V58.6667ZM60.2105 16C60.1805 15.9623 60.1484 15.9262 60.1145 15.892L50.0572 5.72933C49.9894 5.66051 49.9142 5.59926 49.8332 5.54667V16H60.2105ZM23.1665 36H51.1665V37.3333H23.1665V36ZM23.1665 29.3333H51.1665V30.6667H23.1665V29.3333ZM44.4998 42.6667H51.1665V44H44.4998V42.6667ZM44.4998 49.3333H51.1665V50.6667H44.4998V49.3333ZM44.4998 56H51.1665V57.3333H44.4998V56ZM19.4932 48.1173C19.4932 47.132 19.1932 46.3907 18.5918 45.8933C17.9905 45.3973 17.1118 45.148 15.9585 45.148H12.9185V54.6667H14.9358V51.28H15.8025C16.9825 51.28 17.8932 51.0093 18.5332 50.4667C19.1732 49.9253 19.4932 49.1413 19.4932 48.1173ZM14.9358 49.6267V46.8H15.8545C16.4052 46.8 16.8105 46.9133 17.0678 47.1387C17.3265 47.3653 17.4545 47.7147 17.4545 48.188C17.4545 48.656 17.3012 49.0133 16.9932 49.2587C16.6852 49.504 16.2198 49.6267 15.5998 49.6267H14.9358ZM29.1878 49.8147C29.1878 48.344 28.7572 47.1973 27.8985 46.3773C27.0385 45.5573 25.8318 45.1467 24.2785 45.1467H21.2905V54.6667H23.9852C25.6692 54.6667 26.9585 54.2507 27.8492 53.416C28.7425 52.5827 29.1878 51.3827 29.1878 49.816V49.8147ZM27.0905 49.868C27.0905 51.9547 26.1185 52.9987 24.1745 52.9987H23.3078V46.8013H24.3825C26.1878 46.8013 27.0905 47.8227 27.0905 49.868ZM33.1452 54.6667V50.904H36.3745V49.256H33.1452V46.8027H36.6158V45.1493H31.1598V54.6667H33.1465H33.1452Z" fill="#D71919"/></g><defs><clipPath id="clip0_400_3994"><rect width="64" height="64" fill="white" transform="translate(4.5 4)"/></clipPath></defs></svg>
                                    </div>
                                    <div class="pdf-filename" id="downloadFilename"></div>
                                    <div class="pdf-file-size" id="dlFileSize"></div></div>
                                </div>
                        </div>
                        <div class="mt-4 justify-center">
                            <a type="button" class="btn btn-primary btn-convert" href="#" id="download-btn">Download now<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 9H15.5V3H9.5V9H5.5L12.5 16L19.5 9ZM5.5 18V20H19.5V18H5.5Z" fill="white"/></svg></a>
                        </div>
                        
                    </div>
                </div>
        </div>
            
        </div>
        
        <div class="converter-footer">
            <div class="upload-more convert-now">
                <button type="button" class="btn btn-convert" onclick="handleConvert()">Convert now<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_58_608)"><path d="M12.5 4L11.09 5.41L16.67 11H4.5V13H16.67L11.09 18.59L12.5 20L20.5 12L12.5 4Z" fill="white"/></g><defs><clipPath id="clip0_58_608"><rect width="24" height="24" fill="white" transform="translate(0.5)"/></clipPath></defs></svg></button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script>
<script src="/assets/js/all.js?v=9.2"></script>
<script>
Sortable.create(pdfItems, { /* options */ });
var pdfs = [];

$("#drop-area").dmUploader({
    url: '/upload.php',
    headers: {
    'Access-Control-Allow-Origin': "*"
    },
    onNewFile: function(id, file){
      showPreview(id, file);
    },
    onUploadProgress: function(id, percent) {
        // Updating file progress
        update_file_progress(id, percent);
    },
    onUploadSuccess: function(id, data) {
        // A file was successfully uploaded
        update_file_status(id, data);
        update_file_progress(id, 100, 'progress-success', false);
    },
    onUploadError: function(id, xhr, status, message) {
        // update_file_status(id, 'danger', message);
        update_file_progress(id, 0, 'progress-success', false);
        updateError(id, 0);
    },
    onInit: function() {
        console.log('Callback: Plugin initialized');
    },
});

function updateError () {
    console.log(0);
}

function showPreview(id, file) {
    $('#pdfItems').append('<div class="pdf-item" id="' + id + '" data-filename="' + file.name.replace(/\.[^/.]+$/, "") + '"><button class="btn btn-drag" type="button"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_9_891)"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.9995 0.439331L16.2798 4.71966L15.2192 5.78032L12.7486 3.30979L12.749 11.25H20.6888L18.2192 8.78032L19.2798 7.71966L23.5602 12L19.2798 16.2803L18.2192 15.2197L20.6888 12.75H12.7491L12.7494 20.6894L15.2192 18.2197L16.2798 19.2803L11.9995 23.5606L7.71917 19.2803L8.77983 18.2197L11.2494 20.6892L11.2491 12.75H3.31016L5.77983 15.2197L4.71917 16.2803L0.438843 12L4.71917 7.71966L5.77983 8.78032L3.31016 11.25H11.249L11.2486 3.31151L8.77983 5.78032L7.71917 4.71966L11.9995 0.439331Z" fill="#373737"></path></g><defs><clipPath id="clip0_9_891"><rect width="24" height="24" fill="white"></rect></clipPath></defs></svg></button><div class="file-info uploading"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00005 47.8333V53.6667C7.00005 53.9761 7.12296 54.2728 7.34176 54.4916C7.56055 54.7104 7.8573 54.8333 8.16671 54.8333H47.8334C48.1428 54.8333 48.4396 54.7104 48.6583 54.4916C48.8771 54.2728 49.0001 53.9761 49.0001 53.6667V11.2257V11.6667H38.5V1.16667H39.0332H8.16671C7.8573 1.16667 7.56055 1.28958 7.34176 1.50838C7.12296 1.72717 7.00005 2.02391 7.00005 2.33333V32.6667H30.3369C31.6237 32.6667 32.6667 33.7097 32.6667 35.0035V45.4965C32.6672 45.8029 32.6073 46.1064 32.4904 46.3897C32.3736 46.673 32.2021 46.9304 31.9858 47.1474C31.7694 47.3644 31.5125 47.5367 31.2295 47.6544C30.9466 47.7721 30.6433 47.8329 30.3369 47.8333H7.00005ZM5.83338 47.8333H4.66321C4.35671 47.8332 4.05324 47.7726 3.77019 47.655C3.48713 47.5374 3.23004 47.3652 3.01364 47.1481C2.79723 46.9311 2.62576 46.6735 2.50903 46.3901C2.3923 46.1066 2.33261 45.803 2.33338 45.4965V35.0035C2.33292 34.6971 2.39282 34.3936 2.50966 34.1103C2.62649 33.827 2.79798 33.5696 3.01432 33.3526C3.23067 33.1356 3.48764 32.9633 3.77055 32.8456C4.05347 32.7279 4.3568 32.6671 4.66321 32.6667H5.83338V2.33333C5.83338 1.71449 6.07921 1.121 6.5168 0.683418C6.95438 0.245833 7.54788 1.08323e-07 8.16671 1.08323e-07H39.0332C39.3418 -9.39011e-05 39.6472 0.0610034 39.932 0.179756C40.2168 0.298509 40.4752 0.472559 40.6922 0.691833L49.4924 9.58533C49.9243 10.022 50.1666 10.6114 50.1667 11.2257V53.6667C50.1667 54.2855 49.9209 54.879 49.4833 55.3166C49.0457 55.7542 48.4522 56 47.8334 56H8.16671C7.54788 56 6.95438 55.7542 6.5168 55.3166C6.07921 54.879 5.83338 54.2855 5.83338 53.6667V47.8333ZM48.7469 10.5C48.7206 10.467 48.6926 10.4355 48.6629 10.4055L39.8627 1.51317C39.8034 1.45294 39.7377 1.39935 39.6667 1.35333V10.5H48.7469ZM16.3334 28H40.8334V29.1667H16.3334V28ZM16.3334 22.1667H40.8334V23.3333H16.3334V22.1667ZM35 33.8333H40.8334V35H35V33.8333ZM35 39.6667H40.8334V40.8333H35V39.6667ZM35 45.5H40.8334V46.6667H35V45.5ZM13.1192 38.6027C13.1192 37.7405 12.8567 37.0918 12.3305 36.6567C11.8044 36.2227 11.0355 36.0045 10.0264 36.0045H7.36638V44.3333H9.13155V41.37H9.88988C10.9224 41.37 11.7192 41.1332 12.2792 40.6583C12.8392 40.1847 13.1192 39.4987 13.1192 38.6027V38.6027ZM9.13155 39.9233V37.45H9.93538C10.4172 37.45 10.7719 37.5492 10.997 37.7463C11.2234 37.9447 11.3354 38.2503 11.3354 38.6645C11.3354 39.074 11.2012 39.3867 10.9317 39.6013C10.6622 39.816 10.255 39.9233 9.71255 39.9233H9.13155V39.9233ZM21.602 40.0878C21.602 38.801 21.2252 37.7977 20.4739 37.0802C19.7214 36.3627 18.6655 36.0033 17.3064 36.0033H14.6919V44.3333H17.0497C18.5232 44.3333 19.6514 43.9693 20.4307 43.239C21.2124 42.5098 21.602 41.4598 21.602 40.089V40.0878ZM19.7669 40.1345C19.7669 41.9603 18.9164 42.8738 17.2154 42.8738H16.457V37.4512H17.3974C18.977 37.4512 19.7669 38.3448 19.7669 40.1345ZM25.0647 44.3333V41.041H27.8904V39.599H25.0647V37.4523H28.1015V36.0057H23.3275V44.3333H25.0659H25.0647Z" fill="#D71919"/></svg><div class="pdf-filename">' + file.name + '</div><div class="pdf-file-size">' + formatBytes(file.size) + '</div></div><div class="progress-bar"></div><div class="item-del" onclick="removeItem(\'' + id + '\')"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.3268 6.00028L11.0377 2.28935C11.2139 2.11354 11.3129 1.87496 11.3131 1.62611C11.3134 1.37726 11.2147 1.13851 11.0389 0.962393C10.8631 0.786273 10.6245 0.687206 10.3757 0.686986C10.1268 0.686766 9.88807 0.785412 9.71195 0.961221L6.00102 4.67216L2.29008 0.961221C2.11396 0.785101 1.87509 0.686157 1.62602 0.686157C1.37694 0.686157 1.13807 0.785101 0.961953 0.961221C0.785833 1.13734 0.68689 1.37621 0.68689 1.62528C0.68689 1.87436 0.785833 2.11323 0.961953 2.28935L4.67289 6.00028L0.961953 9.71122C0.785833 9.88734 0.68689 10.1262 0.68689 10.3753C0.68689 10.6244 0.785833 10.8632 0.961953 11.0393C1.13807 11.2155 1.37694 11.3144 1.62602 11.3144C1.87509 11.3144 2.11396 11.2155 2.29008 11.0393L6.00102 7.32841L9.71195 11.0393C9.88807 11.2155 10.1269 11.3144 10.376 11.3144C10.6251 11.3144 10.864 11.2155 11.0401 11.0393C11.2162 10.8632 11.3151 10.6244 11.3151 10.3753C11.3151 10.1262 11.2162 9.88734 11.0401 9.71122L7.3268 6.00028Z" fill="#5C5D6B"></path></svg></div></div>');
    $('#upload').addClass('disabled');
    $('#converter').addClass('d-block');
    $('#convert-wrapper').removeClass('disabled');
    $('#handle-upload').addClass('active');
    $('body').addClass('d-scroll');
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

function update_file_status(id, data) {
    const obj = JSON.parse(data);
    if (!obj.data.id) {
        console.log('Alert error');
    } else {
        pdfs.push({
            'id_upload': id,
            'id_be': obj.data.id
        });

    }

}


// UI 
function update_file_progress(id, percent, addclasss, active) {
    color = (typeof color === 'undefined' ? false : color);
    active = (typeof active === 'undefined' ? true : active);

    var bar = $('#' + id).find('div.progress-bar');

    bar.width(percent + '%').attr('aria-valuenow', percent);
    bar.toggleClass('progress-bar-striped progress-bar-animated', active);

    if (addclasss !== false) {
        bar.removeClass('progress-bar-striped progress-bar-animated');
        bar.addClass(addclasss);
        if (addclasss === 'progress-success') {
            $('#' + id).find('.file-info').removeClass('uploading');
        }
    }
}

function handleConvert() {
    $('#handle-upload').removeClass('active');
    $('#task-process').addClass('active');
    $('.settings').removeClass('show');
    $('.converter-footer').addClass('disabled');
	countPDF = $(".pdf-item").length;

    var isMode = $('input[name=mode]:checked').val();
    var isDensity = $('input[name=density]:checked').val();
    var items = [];
    var fileNames = [];

	for (var i = 0; i < countPDF; i++) {
        countPdfArr = pdfs.length;
        for (var j = 0; j < countPdfArr; j++) {
            if ($(".pdf-item")[i].id === pdfs[j]['id_upload']) {
                items.push(pdfs[j]['id_be']);
                filename = $("#" + pdfs[j]['id_upload']).data("filename");
                fileNames.push(filename);
            }
        }
	}

	$.ajax({
		url: "/tasks.php",
		method: "POST", //First change type to method here

		data: {
			"task": 'merge',
            "files": items
		},
		success: function(response) {
            showResponse(response);
		},
		error: function() {
			alert("error");
		}

	});
}

function showResponse(response) {
    
    var obj = jQuery.parseJSON(response);
    
    if (typeof response) {
        console.log(typeof response);
    } else {
        console.log('Error');
    }
    if (response.indexOf("error") === -1) {
        $('#convert-wrapper').addClass('disabled');
        $('#download-final').addClass('active');
        $("#download-btn").attr("href", obj.data.url);
        $("#downloadFilename").text('SnapPDF_c78099b30df94bb4999c3731acdadbd6.docx');
        $("#dlFileSize").text(formatBytes(obj.data.file_size));
        $('.settings').html('<div class="adload"><img src="https://place-hold.it/300x500?text=ADS" alt="" width="100%"></div>');
        $('.btn-settings').addClass('disabled');
        
        if (obj.data.output_file === 'zip') {
            $('#download-icon').html('<svg width="73" height="72" viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_274_14146)"><path d="M12.3335 58.6667V65.3333C12.3335 65.687 12.4739 66.0261 12.724 66.2761C12.974 66.5262 13.3132 66.6667 13.6668 66.6667H59.0001C59.3538 66.6667 59.6929 66.5262 59.9429 66.2761C60.193 66.0261 60.3335 65.687 60.3335 65.3333V16.8293V17.3333H48.3335V5.33333H48.9428H13.6668C13.3132 5.33333 12.974 5.47381 12.724 5.72386C12.4739 5.97391 12.3335 6.31304 12.3335 6.66667V41.3333H35.0067C36.4774 41.3333 37.6694 42.5253 37.6694 44.004V55.996C37.6699 56.3462 37.6014 56.6931 37.4679 57.0168C37.3344 57.3405 37.1384 57.6348 36.8911 57.8828C36.6439 58.1308 36.3502 58.3277 36.0269 58.4622C35.7035 58.5966 35.3569 58.6661 35.0067 58.6667H12.3335ZM11.0001 58.6667H9.6628C9.31251 58.6665 8.96569 58.5972 8.6422 58.4629C8.3187 58.3285 8.02489 58.1316 7.77757 57.8836C7.53024 57.6355 7.33427 57.3411 7.20087 57.0172C7.06747 56.6933 6.99925 56.3463 7.00013 55.996V44.004C6.9996 43.6538 7.06806 43.3069 7.20159 42.9832C7.33511 42.6595 7.5311 42.3652 7.77835 42.1172C8.0256 41.8692 8.31928 41.6724 8.64261 41.5379C8.96595 41.4034 9.31261 41.3339 9.6628 41.3333H11.0001V6.66667C11.0001 5.95942 11.2811 5.28115 11.7812 4.78105C12.2813 4.28095 12.9596 4 13.6668 4H48.9428C49.2954 3.99989 49.6445 4.06972 49.97 4.20544C50.2954 4.34115 50.5907 4.54007 50.8388 4.79067L60.8961 14.9547C61.3898 15.4538 61.6667 16.1274 61.6668 16.8293V65.3333C61.6668 66.0406 61.3858 66.7189 60.8858 67.219C60.3857 67.7191 59.7074 68 59.0001 68H13.6668C12.9596 68 12.2813 67.7191 11.7812 67.219C11.2811 66.7189 11.0001 66.0406 11.0001 65.3333V58.6667ZM60.0441 16C60.0141 15.9623 59.9821 15.9262 59.9481 15.892L49.8908 5.72933C49.823 5.66051 49.7479 5.59926 49.6668 5.54667V16H60.0441Z" fill="#095A94"/><path d="M10.5105 55.7838V54.0723L16.2845 45.7871H10.8464V43.8678H19.0516V45.5792L13.2936 53.8644H19.2115V55.7838H10.5105Z" fill="white"/><path d="M20.5757 55.7838V43.8678H22.751V55.7838H20.5757Z" fill="white"/><path d="M25.0429 55.7838V43.8678H29.4894C30.2998 43.8678 31.0142 44.0171 31.6327 44.3156C32.2618 44.6035 32.7523 45.0301 33.1042 45.5952C33.4561 46.1497 33.632 46.8268 33.632 47.6265C33.632 48.4156 33.4507 49.0927 33.0882 49.6578C32.7363 50.2123 32.2512 50.6388 31.6327 50.9374C31.0142 51.236 30.2998 51.3852 29.4894 51.3852H27.2182V55.7838H25.0429ZM27.2182 49.4659H29.5214C29.9159 49.4659 30.2572 49.3913 30.5451 49.242C30.833 49.082 31.0569 48.8634 31.2168 48.5862C31.3768 48.309 31.4568 47.9891 31.4568 47.6265C31.4568 47.2533 31.3768 46.9334 31.2168 46.6668C31.0569 46.3896 30.833 46.1763 30.5451 46.0271C30.2572 45.8671 29.9159 45.7871 29.5214 45.7871H27.2182V49.4659Z" fill="white"/><path d="M23.676 5.24841H30.6273V11.2672C30.6273 11.8194 30.1796 12.2672 29.6273 12.2672H24.676C24.1237 12.2672 23.676 11.8194 23.676 11.2672V5.24841Z" fill="#095A94"/><rect x="26.3925" y="14.7443" width="1.51855" height="3.4" rx="0.759277" fill="#095A94"/><rect x="26.3925" y="21.1443" width="1.51855" height="3.4" rx="0.759277" fill="#095A94"/><rect x="26.3925" y="27.5444" width="1.51855" height="3.4" rx="0.759277" fill="#095A94"/><rect x="26.3925" y="33.9444" width="1.51855" height="3.4" rx="0.759277" fill="#095A94"/></g><defs><clipPath id="clip0_274_14146"><rect width="64" height="64" fill="white" transform="translate(4.33337 4)"/></clipPath></defs></svg>');
        }

    } else {
        $('#handle-upload').addClass('active');
        $('#task-process').removeClass('active');
        $('.converter-footer').removeClass('disabled');
        alert(obj.error.message);
    }
}

</script>

<?php
include '../inc/footer.php';
?>