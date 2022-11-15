<?php
/**
 * Config
 */
$multiLanguage = true;
$slug = 'watermark-pdf';
$privateLanguage = 'watermark/';
// include 
include '../inc/config.php';

$isTitle = $merge['title'];
$isDesc = $merge['desc'];
$isCanonical = $isHomeUrl . (isset($_GET['lang']) ? '/' . $_GET['lang'] : '')  '/' . $slug;

include '../inc/header.php';
?>
<link href="/assets/css/app.css?v=1.65" rel="stylesheet">
<style>
.form-range[type=range]{-webkit-appearance:none;height:6px;background:0 0/60% 100% no-repeat #eaeaed;border-radius:5px;background-image:linear-gradient(#252638,#252638)}.form-range[type=range]::-webkit-slider-thumb{-webkit-appearance:none;width:24px;height:24px;position:relative;top:-4px;border-radius:50%;background:#252638;cursor:ew-resize;box-shadow:0 1px 4px rgba(32,52,89,.16),0 4px 16px 2px rgba(32,52,89,.16);transition:background .3s ease-in-out}.form-range[type=range]::-moz-range-thumb{-webkit-appearance:none;height:24px;width:24px;position:relative;top:-4px;border-radius:50%;background:#252638;cursor:ew-resize;box-shadow:0 1px 4px rgba(32,52,89,.16),0 4px 16px 2px rgba(32,52,89,.16);transition:background .3s ease-in-out}.form-range[type=range]::-ms-thumb{-webkit-appearance:none;height:24px;width:24px;position:relative;top:-4px;border-radius:50%;background:#252638;cursor:ew-resize;box-shadow:0 1px 4px rgba(32,52,89,.16),0 4px 16px 2px rgba(32,52,89,.16);transition:background .3s ease-in-out}.form-range[type=range]::-webkit-slider-thumb:hover{background:#252638}.form-range[type=range]::-moz-range-thumb:hover{background:#252638}.form-range[type=range]::-ms-thumb:hover{background:#252638}.form-range[type=range]::-webkit-slider-runnable-track{-webkit-appearance:none;box-shadow:none;border:none;background:0 0}.form-range[type=range]::-moz-range-track{-webkit-appearance:none;box-shadow:none;border:none;background:0 0}.form-range[type=range]::-ms-track{-webkit-appearance:none;box-shadow:none;border:none;background:0 0}
option.font-times{font-family:"Times New Roman",Times,serif}option.font-courier{font-family:courier,courier new,serif}option.font-helvetica{font-family:Helvetica Neue,Helvetica,Arial,sans-serif}
</style>
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

<?php
include '../apps/templates/content.php';
include '../inc/products.php';
?>
<!-- Convert  -->
<div class="converter" id="converter">
    <div class="converter-content">
        <div class="converter-body">
            <?php
            include '../apps/templates/onepdf.php';
            ?>
            <div class="settings">
                <div class="setting-header border-none">
                    <div class="settings-title"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9999 8.25C11.2582 8.25 10.5332 8.46993 9.9165 8.88199C9.29981 9.29404 8.81916 9.87971 8.53534 10.5649C8.25151 11.2502 8.17724 12.0042 8.32194 12.7316C8.46663 13.459 8.82379 14.1272 9.34823 14.6517C9.87268 15.1761 10.5409 15.5333 11.2683 15.6779C11.9957 15.8226 12.7497 15.7484 13.4349 15.4645C14.1202 15.1807 14.7058 14.7001 15.1179 14.0834C15.53 13.4667 15.7499 12.7417 15.7499 12C15.7469 11.0064 15.3509 10.0542 14.6483 9.35163C13.9456 8.64901 12.9935 8.25297 11.9999 8.25ZM20.0961 12C20.0942 12.3504 20.0685 12.7003 20.0193 13.0472L22.3016 14.8341C22.401 14.9161 22.468 15.0309 22.4906 15.1578C22.5132 15.2847 22.4899 15.4155 22.4249 15.5269L20.2658 19.2544C20.2002 19.3647 20.0977 19.4484 19.9765 19.4907C19.8553 19.5329 19.723 19.5311 19.603 19.4855L16.9194 18.4073C16.3606 18.8377 15.7491 19.1948 15.0997 19.47L14.6985 22.3191C14.676 22.4467 14.6099 22.5625 14.5115 22.6468C14.4131 22.7311 14.2885 22.7786 14.1589 22.7812H9.84082C9.71363 22.7788 9.59103 22.7333 9.49304 22.6521C9.39504 22.571 9.32745 22.459 9.30129 22.3345L8.90004 19.4855C8.24889 19.2134 7.63693 18.8557 7.08035 18.4219L4.39676 19.5C4.2768 19.5457 4.14458 19.5476 4.02336 19.5054C3.90213 19.4632 3.79965 19.3796 3.73395 19.2694L1.57488 15.5423C1.5099 15.431 1.48661 15.3002 1.5092 15.1733C1.53178 15.0464 1.59876 14.9316 1.69816 14.8495L3.98051 13.0627C3.93183 12.7105 3.90615 12.3555 3.90363 12C3.90558 11.6496 3.93127 11.2997 3.98051 10.9528L1.69816 9.16594C1.59876 9.08386 1.53178 8.96911 1.5092 8.84219C1.48661 8.71527 1.5099 8.58446 1.57488 8.47312L3.73395 4.74563C3.79958 4.63528 3.90202 4.55161 4.02326 4.50934C4.14449 4.46707 4.27675 4.46891 4.39676 4.51453L7.08035 5.59266C7.63916 5.16235 8.25068 4.80524 8.90004 4.53L9.30129 1.68094C9.32375 1.55332 9.38983 1.43746 9.48823 1.35316C9.58664 1.26886 9.71127 1.22135 9.84082 1.21875H14.1589C14.2861 1.22123 14.4087 1.26675 14.5067 1.34788C14.6047 1.42901 14.6723 1.54097 14.6985 1.66547L15.0997 4.51453C15.7517 4.78639 16.3645 5.14408 16.9218 5.57812L19.603 4.5C19.723 4.45434 19.8552 4.45243 19.9764 4.49461C20.0976 4.53679 20.2001 4.62036 20.2658 4.73062L22.4249 8.45813C22.4899 8.56946 22.5132 8.70027 22.4906 8.82719C22.468 8.95411 22.401 9.06886 22.3016 9.15094L20.0193 10.9378C20.0679 11.2898 20.0936 11.6446 20.0961 12Z" fill="#363539"/></svg>Watermark setting</div>
                    <button type="button" class="btn-close" onclick="$('.settings').removeClass('show');$('.converter').css('z-index', 1000)"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.59216 7.00049L13.0453 2.54736C13.2566 2.33639 13.3755 2.0501 13.3758 1.75148C13.376 1.45286 13.2577 1.16636 13.0467 0.955018C12.8357 0.743674 12.5494 0.624793 12.2508 0.62453C11.9522 0.624266 11.6657 0.74264 11.4543 0.953612L7.00122 5.40674L2.54809 0.953612C2.33675 0.742267 2.05011 0.623535 1.75122 0.623535C1.45233 0.623535 1.16569 0.742267 0.954344 0.953612C0.743 1.16496 0.624268 1.4516 0.624268 1.75049C0.624268 2.04937 0.743 2.33602 0.954344 2.54736L5.40747 7.00049L0.954344 11.4536C0.743 11.665 0.624268 11.9516 0.624268 12.2505C0.624268 12.5494 0.743 12.836 0.954344 13.0474C1.16569 13.2587 1.45233 13.3774 1.75122 13.3774C2.05011 13.3774 2.33675 13.2587 2.54809 13.0474L7.00122 8.59424L11.4543 13.0474C11.6657 13.2587 11.9523 13.3774 12.2512 13.3774C12.5501 13.3774 12.8367 13.2587 13.0481 13.0474C13.2594 12.836 13.3782 12.5494 13.3782 12.2505C13.3782 11.9516 13.2594 11.665 13.0481 11.4536L8.59216 7.00049Z" fill="#5C5D6B"/></svg></button>
                </div>
                <div class="setting-main">
                    <div class="radio-toggle mt-3 p-c border-none">
                        <div class="row">
                            <div class="col-6">
                                <input class="hide-input" type="radio" name="mode" value="text" id="modeText" checked="checked">
                                <label for="modeText">Watermark text</label>
                            </div>
                            <div class="col-6">
                                <input class="hide-input" type="radio" name="mode" value="image" id="modeImage">
                                <label for="modeImage">Add image</label>
                            </div>
                        </div>
                        <div class="row mt-3 watermark-tabs">
                            <div class="col-12 add-text">
                                <div class="setting-title">Watermark text</div>
                                <input type="text" name="text" class="form-control" placeholder="SnapPDF" id="watermark-text">
                                <div class="font-settings">
                                    <div class="row">
                                        <div class="col-7 font-family">
                                            <span>Font</span>
                                            <select name="font_family" class="form-select" aria-label="fontFamily" id="isFontFamily">
                                                <option value="Times" class="font-times" selected>Times New Roman</option>
                                                <option value="Courier" class="font-courier">Courier</option>
                                                <option value="Helvetica" class="font-helvetica">Helvetica</option>
                                            </select>
                                        </div>
                                        <div class="col-5 font-size">
                                            <div class="svg"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 6C16 5.73478 15.8946 5.48043 15.7071 5.29289C15.5196 5.10536 15.2652 5 15 5H3C2.73478 5 2.48043 5.10536 2.29289 5.29289C2.10536 5.48043 2 5.73478 2 6C2 6.26522 2.10536 6.51957 2.29289 6.70711C2.48043 6.89464 2.73478 7 3 7H8V18C8 18.2652 8.10536 18.5196 8.29289 18.7071C8.48043 18.8946 8.73478 19 9 19C9.26522 19 9.51957 18.8946 9.70711 18.7071C9.89464 18.5196 10 18.2652 10 18V7H15C15.2652 7 15.5196 6.89464 15.7071 6.70711C15.8946 6.51957 16 6.26522 16 6ZM21 11H15C14.7348 11 14.4804 11.1054 14.2929 11.2929C14.1054 11.4804 14 11.7348 14 12C14 12.2652 14.1054 12.5196 14.2929 12.7071C14.4804 12.8946 14.7348 13 15 13H17V18C17 18.2652 17.1054 18.5196 17.2929 18.7071C17.4804 18.8946 17.7348 19 18 19C18.2652 19 18.5196 18.8946 18.7071 18.7071C18.8946 18.5196 19 18.2652 19 18V13H21C21.2652 13 21.5196 12.8946 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C22 11.7348 21.8946 11.4804 21.7071 11.2929C21.5196 11.1054 21.2652 11 21 11Z" fill="#1D1C21"/></svg></div>
                                            <select name="font_size" class="form-select" aria-label="Font Size" id="isFontSize">
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="14">14</option>
                                                <option value="16" selected="">16</option>
                                                <option value="18">18</option>
                                                <option value="20">20</option>
                                                <option value="22">22</option>
                                                <option value="24">24</option>
                                                <option value="26">26</option>
                                                <option value="28">28</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="72">72</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="font-style">
                                        <div class="fontstyle-item">
                                            <input class="hide-input" type="checkbox" name="font_style" value="Bold" id="fontstyle-1">
                                            <label for="fontstyle-1">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.25 11.0833C19.25 10.5471 19.1444 10.0161 18.9392 9.52071C18.734 9.0253 18.4332 8.57515 18.054 8.19598C17.6748 7.81681 17.2247 7.51603 16.7293 7.31083C16.2339 7.10562 15.7029 7 15.1667 7H9.91667C9.60725 7 9.3105 7.12292 9.09171 7.34171C8.87292 7.5605 8.75 7.85725 8.75 8.16667V19.8333C8.75 20.1428 8.87292 20.4395 9.09171 20.6583C9.3105 20.8771 9.60725 21 9.91667 21H15.1667C15.9795 21.0035 16.7747 20.7637 17.45 20.3114C18.1254 19.8592 18.6499 19.2151 18.9561 18.4622C19.2623 17.7093 19.3361 16.882 19.1681 16.0867C19.0001 15.2915 18.5979 14.5647 18.0133 14C18.4034 13.6207 18.7137 13.1674 18.9261 12.6665C19.1384 12.1656 19.2486 11.6274 19.25 11.0833ZM15.1667 18.6667H11.0833V15.1667H15.1667C15.6308 15.1667 16.0759 15.351 16.4041 15.6792C16.7323 16.0074 16.9167 16.4525 16.9167 16.9167C16.9167 17.3808 16.7323 17.8259 16.4041 18.1541C16.0759 18.4823 15.6308 18.6667 15.1667 18.6667ZM15.1667 12.8333H11.0833V9.33333H15.1667C15.6308 9.33333 16.0759 9.51771 16.4041 9.8459C16.7323 10.1741 16.9167 10.6192 16.9167 11.0833C16.9167 11.5475 16.7323 11.9926 16.4041 12.3208C16.0759 12.649 15.6308 12.8333 15.1667 12.8333Z" fill="#939294"/></svg>
                                             </label>
                                        </div>
                                        <div class="fontstyle-item">
                                            <input class="hide-input" type="checkbox" name="font_style" value="Italic" id="fontstyle-2">
                                            <label for="fontstyle-2">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.8333 7H12.8333C12.5239 7 12.2272 7.12292 12.0084 7.34171C11.7896 7.5605 11.6667 7.85725 11.6667 8.16667C11.6667 8.47609 11.7896 8.77283 12.0084 8.99162C12.2272 9.21042 12.5239 9.33333 12.8333 9.33333H14.6067L10.8733 18.6667H8.16667C7.85725 18.6667 7.5605 18.7896 7.34171 19.0084C7.12292 19.2272 7 19.5239 7 19.8333C7 20.1428 7.12292 20.4395 7.34171 20.6583C7.5605 20.8771 7.85725 21 8.16667 21H15.1667C15.4761 21 15.7728 20.8771 15.9916 20.6583C16.2104 20.4395 16.3333 20.1428 16.3333 19.8333C16.3333 19.5239 16.2104 19.2272 15.9916 19.0084C15.7728 18.7896 15.4761 18.6667 15.1667 18.6667H13.3933L17.1267 9.33333H19.8333C20.1428 9.33333 20.4395 9.21042 20.6583 8.99162C20.8771 8.77283 21 8.47609 21 8.16667C21 7.85725 20.8771 7.5605 20.6583 7.34171C20.4395 7.12292 20.1428 7 19.8333 7Z" fill="#939294"/></svg>
                                            </label>
                                        </div>
                                        <div class="fontstyle-item">
                                            <input class="hide-input" type="checkbox" name="font_style" value="ItalicBold" id="fontstyle-3">
                                            <label for="fontstyle-3">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 18.0833C15.5471 18.0833 17.0308 17.4688 18.1248 16.3748C19.2188 15.2808 19.8333 13.7971 19.8333 12.25V6.41667C19.8333 6.10725 19.7104 5.8105 19.4916 5.59171C19.2728 5.37292 18.9761 5.25 18.6667 5.25C18.3572 5.25 18.0605 5.37292 17.8417 5.59171C17.6229 5.8105 17.5 6.10725 17.5 6.41667V12.25C17.5 13.1783 17.1313 14.0685 16.4749 14.7249C15.8185 15.3813 14.9283 15.75 14 15.75C13.0717 15.75 12.1815 15.3813 11.5251 14.7249C10.8687 14.0685 10.5 13.1783 10.5 12.25V6.41667C10.5 6.10725 10.3771 5.8105 10.1583 5.59171C9.9395 5.37292 9.64275 5.25 9.33333 5.25C9.02391 5.25 8.72717 5.37292 8.50838 5.59171C8.28958 5.8105 8.16667 6.10725 8.16667 6.41667V12.25C8.16667 13.7971 8.78125 15.2808 9.87521 16.3748C10.9692 17.4688 12.4529 18.0833 14 18.0833ZM19.8333 20.4167H8.16667C7.85725 20.4167 7.5605 20.5396 7.34171 20.7584C7.12292 20.9772 7 21.2739 7 21.5833C7 21.8928 7.12292 22.1895 7.34171 22.4083C7.5605 22.6271 7.85725 22.75 8.16667 22.75H19.8333C20.1428 22.75 20.4395 22.6271 20.6583 22.4083C20.8771 22.1895 21 21.8928 21 21.5833C21 21.2739 20.8771 20.9772 20.6583 20.7584C20.4395 20.5396 20.1428 20.4167 19.8333 20.4167Z" fill="#939294"/></svg>
                                            </label>
                                        </div>
                                        <div class="fontstyle-item select-color">
                                            <input class="hide-input" type="color" name="font_color" value="#bdc1c6" id="colorPicker">
                                            <label for="colorPicker">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.11111 19.7781H22.8889V23.3337H5.11111V19.7781ZM8.21334 17.1114H10.3644L11.4933 13.9292H16.5156L17.6356 17.1114H19.7867L15.1111 4.66699H12.8889L8.21334 17.1114ZM12.1422 12.1248L13.9467 6.9781H14.0533L15.8578 12.1248H12.1422Z" fill="#939294"/></svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 add-image">
                                <div id="drop-image" class="drop-area">
                                    <label for="img-watermark" class="label-upload"><svg width="16" height="16" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 11H13.5V5C13.5 4.73478 13.3946 4.48043 13.2071 4.29289C13.0196 4.10536 12.7652 4 12.5 4C12.2348 4 11.9804 4.10536 11.7929 4.29289C11.6054 4.48043 11.5 4.73478 11.5 5V11H5.5C5.23478 11 4.98043 11.1054 4.79289 11.2929C4.60536 11.4804 4.5 11.7348 4.5 12C4.5 12.2652 4.60536 12.5196 4.79289 12.7071C4.98043 12.8946 5.23478 13 5.5 13H11.5V19C11.5 19.2652 11.6054 19.5196 11.7929 19.7071C11.9804 19.8946 12.2348 20 12.5 20C12.7652 20 13.0196 19.8946 13.2071 19.7071C13.3946 19.5196 13.5 19.2652 13.5 19V13H19.5C19.7652 13 20.0196 12.8946 20.2071 12.7071C20.3946 12.5196 20.5 12.2652 20.5 12C20.5 11.7348 20.3946 11.4804 20.2071 11.2929C20.0196 11.1054 19.7652 11 19.5 11Z" fill="white"/></svg>Add image</label>
                                    <input type="file" accept="image/png, image/gif, image/jpeg" id="img-watermark">
                                </div>
                                <input type="hidden" id="watermarkimageid" name="imageid">
                                <div id="watermark-previewimg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="setting-box p-c border-none add-number">
                        
                        <div class="position">
                            <div class="setting-title">Position</div>
                            <div class="page-radio">
                                <div class="row page-radio-input">
                                    <div class="col-4 input-checkbox">
                                        <input class="hide-input" type="radio" name="position" value="topleft" id="topLeft">
                                        <label for="topLeft"><div class="circle"></div></label>
                                    </div>
                                    <div class="col-4 input-checkbox">
                                        <input class="hide-input" type="radio" name="position" value="top" id="topCenter">
                                        <label for="topCenter"><div class="circle"></div></label>
                                    </div>
                                    <div class="col-4 input-checkbox">
                                        <input class="hide-input" type="radio" name="position" value="topright" id="topRight">
                                        <label for="topRight"><div class="circle"></div></label>
                                    </div>
                                </div>
                                <div class="position-line">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="row page-radio-input">
                                    <div class="col-4 input-checkbox">
                                        <input class="hide-input" type="radio" name="position" value="bottomleft" id="bottomLeft">
                                        <label for="bottomLeft"><div class="circle"></div></label>
                                    </div>
                                    <div class="col-4 input-checkbox">
                                        <input class="hide-input" type="radio" name="position" value="bottom" id="bottomCenter">
                                        <label for="bottomCenter"><div class="circle"></div></label>
                                    </div>
                                    <div class="col-4 input-checkbox">
                                        <input class="hide-input" type="radio" name="position" value="bottomright" id="bottomRight" checked="checked">
                                        <label for="bottomRight"><div class="circle"></div></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-margin">
                            <div class="setting-title">Layer</div>
                            <select name="layer" class="form-select" aria-label="Layer" id="isLayer">
                                <option value="above" selected>Over the PDF content</option>
                                <option value="below">Below the PDF content</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="setting-box p-c">
                            <div class="setting-title">Opacity</div>
                            <div class="opacity-setting">
                                <input type="range" class="form-range" id="customOpacity" name="rangeOpacity" value="60" min="0" max="100" onchange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)">
                                <div class="input-group">
                                    <input type="number" name="opacity" id="opacity-input" pattern="\d*" inputmode="numeric" class="form-control opacity-input" placeholder="1" value="60" min="1">
                                    <span class="input-group-text">%</span>
                                </div>
                                
                            </div>
                    </div>
                    <div class="setting-box mt-3 p-c">
                        <div class="setting-title">Rotation</div>
                        <select class="form-select" id="rotate-select" name="rotation">
                            <option value="0" selected="">0</option>
                            <option value="90">90°</option>
                            <option value="180">180°</option>
                            <option value="270">270°</option>
                        </select>
                        <div class="row">
                            <div class="col-6">
                                <div class="setting-title mt-3">Start from page</div>
                                <input type="number" name="start-from" pattern="\d*" inputmode="numeric" class="form-control" placeholder="1" value="1" min="1">
                            </div>
                            <div class="col-6">
                                <div class="setting-title mt-3">to page</div>
                                <input type="number" id="to-page" name="topage" pattern="\d*" inputmode="numeric" class="form-control" placeholder="1" value="1" min="1">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="setting-footer">
                    <button type="button" class="btn btn-convert" onclick="handleConvert()">Add page numbers<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_58_608)"><path d="M12.5 4L11.09 5.41L16.67 11H4.5V13H16.67L11.09 18.59L12.5 20L20.5 12L12.5 4Z" fill="white"/></g><defs><clipPath id="clip0_58_608"><rect width="24" height="24" fill="white" transform="translate(0.5)"/></clipPath></defs></svg></button>

                </div>
            </div>
        </div>
        
        <div class="converter-footer">
            <div class="upload-more convert-now">
                <button type="button" class="btn btn-convert" onclick="handleConvert()">Add page numbers<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_58_608)"><path d="M12.5 4L11.09 5.41L16.67 11H4.5V13H16.67L11.09 18.59L12.5 20L20.5 12L12.5 4Z" fill="white"/></g><defs><clipPath id="clip0_58_608"><rect width="24" height="24" fill="white" transform="translate(0.5)"/></clipPath></defs></svg></button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script>
<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
<script src="/assets/js/all.js?v=1.27"></script>
<script>
var pdfjsLib = window['pdfjs-dist/build/pdf'];
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';
var pdfs = [];

$("#drop-area").dmUploader({
    url: '/upload.php',
    multiple: false,
    headers: {
    'Access-Control-Allow-Origin': "*"
    },
    onNewFile: function(id, file){
        uiShowPreview(id, file, 'pdf');
        print_numOfPages(file);
    },
    onUploadProgress: function(id, percent) {
        // Updating file progress
        uiUpdatePdfProgress(id, percent);
    },
    onUploadSuccess: function(id, data) {
        // A file was successfully uploaded
        updateFileStatus(id, data);
        uiUpdatePdfProgress(id, 100, 'progress-success', false);
    },
    onUploadError: function(id, xhr, status, message) {
        // updateFileStatus(id, 'danger', message);
        uiUpdatePdfProgress(id, 0, 'progress-success', false);
        updateError(id, 0);
    },
    onInit: function() {
        console.log('Callback: Plugin initialized');
    },
});

// drop-image
$("#drop-image").dmUploader({
    url: '/upload.php',
    multiple: false,
    allowedTypes: 'image/*',
    extFilter: ['jpg', 'jpeg','png','gif'],
    headers: {
    'Access-Control-Allow-Origin': "*"
    },
    onNewFile: function(id, file){
        // showPreviewJPG(id, file);
        showPreviewWatermark(id, file);
    },
    onUploadProgress: function(id, percent) {
        // Updating file progress
        // uiUpdatePdfProgress(id, percent);
    },
    onUploadSuccess: function(id, data) {
        // A file was successfully uploaded
        update_imgwatermark_status(id, data);
        // uiUpdatePdfProgress(id, 100, 'progress-success', false);
    },
    onUploadError: function(id, xhr, status, message) {
        // updateFileStatus(id, 'danger', message);
        // uiUpdatePdfProgress(id, 0, 'progress-success', false);
        // updateError(id, 0);
    },
    onInit: function() {
        console.log('Callback: Plugin initialized');
    },
});

$('input[type=radio][name=mode]').change(function() {
    if (this.value == 'text') {
        $('.watermark-tabs').removeClass('logoimg-tabs');
    }
    else if (this.value == 'image') {
        $('.watermark-tabs').addClass('logoimg-tabs');
    }
});

$('#colorPicker').on('input', function(){
    $('.fontstyle-item.select-color').addClass('is-active');

});
$('#colorPicker').change(function() {
    $('#watermark-text').css({ color: $('#colorPicker').val() });
});

function updateError () {
    console.log(0);
}
function print_numOfPages(file) {
    if(file.type == "application/pdf"){
		var fileReader = new FileReader();  
		fileReader.onload = function() {
        var pdfData = new Uint8Array(this.result);
        pdfjsLib.getDocument({data: pdfData}).promise.then(function(pdf) {
            $("#to-page").val(pdf.numPages);
        });
			
		};
		fileReader.readAsArrayBuffer(file);
	}
}

function update_imgwatermark_status(id, data) {
    const obj = JSON.parse(data);
    if (!obj.data.id) {
        console.log('Alert error');
    } else {
        $('#watermarkimageid').val(obj.data.id);

    }
}

function rangeSlide(value) {
    $('#opacity-input').val(value);
    $("#customOpacity").css("background-size", $('#customOpacity').val() + '% 100%');
}

$('#opacity-input').on('input', function() {
    var opacityVal = $('#opacity-input').val();
    $('#customOpacity').val(opacityVal);
    $("#customOpacity").css("background-size", $('#customOpacity').val() + '% 100%');
});


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
function showPreviewWatermark(id, file) {
    $filename = file.name.replace(/\.[^/.]+$/, "");
    $filename = fixFilename($filename);
    if (typeof FileReader !== 'undefined'){
      var reader = new FileReader();
      var img = $('<img />');
        
      reader.onload = function (e) {
        img.attr('src', e.target.result);
        $('#watermark-previewimg').html('<img src="' + e.target.result + '" alt="Photo">');
      }
      /* ToDo: do something with the img! */
      reader.readAsDataURL(file);
    }
}

function handleConvert() {
    uiConverting();
    $('.settings').removeClass('show');
    var errorCode = 0;
    var isMode = $('input[name=mode]:checked').val();
    var isStartFrom = $('input[name=start-from]').val();
    var isToPage = $('input[name=topage]').val();
    var isPageRange = isStartFrom + '-' + isToPage; 
    var isPosition = $('input[name="position"]:checked').val()
    var isLayer = $('#isLayer').find(":selected").val();
    var isOpacity = $('input[name=opacity]').val();
    var isRotation = $('#rotate-select').find(":selected").val();

    var items = getItems();

    if (isMode === 'image') {
        var isImageId = $('input[name=imageid]').val();
        if (isImageId != '' && isStartFrom && isToPage && isPosition && isLayer && isOpacity && isRotation) {
            var dataSend = {
                "task": 'watermark',
                "files": items,
                "config": {
                    "mode": "image",
                    "image": isImageId,
                    "page_range": isPageRange,
                    "position": isPosition,
                    "transparency": isOpacity,
                    "rotation": isRotation,
                    "layer": isLayer
                }
            };
        } else {
            errorCode = 1;
        }
    } else {
        var isText = $('input[name=text]').val();
        var isFontFamily = $('#isFontFamily').find(":selected").val();
        var isFontStyle = $('input[name="font_style"]:checked').val()
        var isFontColor = $('input[name=font_color]').val();
        var isFontColor = isFontColor.replace('#', '');;
        var isFontSize = $('#isFontSize').find(":selected").val();

        if (isText != '' && isStartFrom && isToPage && isPosition && isLayer && isOpacity && isRotation && isFontFamily && isFontColor && isFontSize) {
            if (isFontStyle === undefined) {
                isFontStyle = 'Regular';
            }
            var dataSend = {
                "task": 'watermark',
                "files": items,
                "config": {
                    "mode": "text",
                    "text": isText,
                    "page_range": isPageRange,
                    "font_family": isFontFamily,
                    "font_style": isFontStyle,
                    "font_color": isFontColor,
                    "isFontSize": isFontSize,
                    "position": isPosition,
                    "transparency": isOpacity,
                    "rotation": isRotation,
                    "layer": isLayer
                }
            };
        } else {
            errorCode = 1;
        }

        
    }
    if (errorCode === 1) {
        return showAlertError('Please fill in all the information');
    } else {
        getTaskId(dataSend);
    }
}

</script>

<?php
include '../inc/footer.php';
?>