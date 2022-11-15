<?php
/**
 * Config
 */
$multiLanguage = true;
$slug = 'rotate-pdf';
$privateLanguage = 'rotate/';

include '../inc/config.php';

$isTitle = $merge['title'];
$isDesc = $merge['desc'];
$isCanonical = $isHomeUrl . $slug;

include '../inc/header.php';
?>
<link href="/assets/css/app.css?v=1.65" rel="stylesheet">
<style>

    .canvas-box {
        aspect-ratio: 1 / 1;
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 100%;
        overflow: hidden;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .file_canvas {
        position: absolute;
        top: 0;
        bottom: 0;
        border: 1px solid #5555555c;
    }
    .pdf-item canvas {
        max-width: 100%;
        max-height: 100%;
    }
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
            $hiddenBtnSettings = 1;
            include '../apps/templates/onepdf.php';
            ?>
            <div class="settings settings-show show">
                <div class="setting-header border-none">
                    <div class="settings-title"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.9999 8.25C11.2582 8.25 10.5332 8.46993 9.9165 8.88199C9.29981 9.29404 8.81916 9.87971 8.53534 10.5649C8.25151 11.2502 8.17724 12.0042 8.32194 12.7316C8.46663 13.459 8.82379 14.1272 9.34823 14.6517C9.87268 15.1761 10.5409 15.5333 11.2683 15.6779C11.9957 15.8226 12.7497 15.7484 13.4349 15.4645C14.1202 15.1807 14.7058 14.7001 15.1179 14.0834C15.53 13.4667 15.7499 12.7417 15.7499 12C15.7469 11.0064 15.3509 10.0542 14.6483 9.35163C13.9456 8.64901 12.9935 8.25297 11.9999 8.25ZM20.0961 12C20.0942 12.3504 20.0685 12.7003 20.0193 13.0472L22.3016 14.8341C22.401 14.9161 22.468 15.0309 22.4906 15.1578C22.5132 15.2847 22.4899 15.4155 22.4249 15.5269L20.2658 19.2544C20.2002 19.3647 20.0977 19.4484 19.9765 19.4907C19.8553 19.5329 19.723 19.5311 19.603 19.4855L16.9194 18.4073C16.3606 18.8377 15.7491 19.1948 15.0997 19.47L14.6985 22.3191C14.676 22.4467 14.6099 22.5625 14.5115 22.6468C14.4131 22.7311 14.2885 22.7786 14.1589 22.7812H9.84082C9.71363 22.7788 9.59103 22.7333 9.49304 22.6521C9.39504 22.571 9.32745 22.459 9.30129 22.3345L8.90004 19.4855C8.24889 19.2134 7.63693 18.8557 7.08035 18.4219L4.39676 19.5C4.2768 19.5457 4.14458 19.5476 4.02336 19.5054C3.90213 19.4632 3.79965 19.3796 3.73395 19.2694L1.57488 15.5423C1.5099 15.431 1.48661 15.3002 1.5092 15.1733C1.53178 15.0464 1.59876 14.9316 1.69816 14.8495L3.98051 13.0627C3.93183 12.7105 3.90615 12.3555 3.90363 12C3.90558 11.6496 3.93127 11.2997 3.98051 10.9528L1.69816 9.16594C1.59876 9.08386 1.53178 8.96911 1.5092 8.84219C1.48661 8.71527 1.5099 8.58446 1.57488 8.47312L3.73395 4.74563C3.79958 4.63528 3.90202 4.55161 4.02326 4.50934C4.14449 4.46707 4.27675 4.46891 4.39676 4.51453L7.08035 5.59266C7.63916 5.16235 8.25068 4.80524 8.90004 4.53L9.30129 1.68094C9.32375 1.55332 9.38983 1.43746 9.48823 1.35316C9.58664 1.26886 9.71127 1.22135 9.84082 1.21875H14.1589C14.2861 1.22123 14.4087 1.26675 14.5067 1.34788C14.6047 1.42901 14.6723 1.54097 14.6985 1.66547L15.0997 4.51453C15.7517 4.78639 16.3645 5.14408 16.9218 5.57812L19.603 4.5C19.723 4.45434 19.8552 4.45243 19.9764 4.49461C20.0976 4.53679 20.2001 4.62036 20.2658 4.73062L22.4249 8.45813C22.4899 8.56946 22.5132 8.70027 22.4906 8.82719C22.468 8.95411 22.401 9.06886 22.3016 9.15094L20.0193 10.9378C20.0679 11.2898 20.0936 11.6446 20.0961 12Z" fill="#363539"/></svg>Output Setting</div>
                    <button type="button" class="btn-close" onclick="$('.settings').removeClass('show');$('.converter').css('z-index', 1000)"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.59216 7.00049L13.0453 2.54736C13.2566 2.33639 13.3755 2.0501 13.3758 1.75148C13.376 1.45286 13.2577 1.16636 13.0467 0.955018C12.8357 0.743674 12.5494 0.624793 12.2508 0.62453C11.9522 0.624266 11.6657 0.74264 11.4543 0.953612L7.00122 5.40674L2.54809 0.953612C2.33675 0.742267 2.05011 0.623535 1.75122 0.623535C1.45233 0.623535 1.16569 0.742267 0.954344 0.953612C0.743 1.16496 0.624268 1.4516 0.624268 1.75049C0.624268 2.04937 0.743 2.33602 0.954344 2.54736L5.40747 7.00049L0.954344 11.4536C0.743 11.665 0.624268 11.9516 0.624268 12.2505C0.624268 12.5494 0.743 12.836 0.954344 13.0474C1.16569 13.2587 1.45233 13.3774 1.75122 13.3774C2.05011 13.3774 2.33675 13.2587 2.54809 13.0474L7.00122 8.59424L11.4543 13.0474C11.6657 13.2587 11.9523 13.3774 12.2512 13.3774C12.5501 13.3774 12.8367 13.2587 13.0481 13.0474C13.2594 12.836 13.3782 12.5494 13.3782 12.2505C13.3782 11.9516 13.2594 11.665 13.0481 11.4536L8.59216 7.00049Z" fill="#5C5D6B"/></svg></button>
                </div>
                <div class="setting-main">
                    <div class="setting-title p-c mt-3">Rotation</div>
                    <div class="setting-box p-c rotate-setting">
                        <button class="btn btn-rotate" onclick="rotatePDF(1)"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_589_6501)"><path d="M8.53 16.8897L7.11 18.2997C8.27 19.1997 9.61 19.7597 11 19.9297V17.9097C10.13 17.7697 9.28 17.4197 8.53 16.8897ZM13 17.9097V19.9297C14.39 19.7597 15.73 19.2097 16.89 18.3097L15.47 16.8997C14.72 17.4197 13.88 17.7697 13 17.9097ZM18.32 16.8997C19.22 15.7397 19.76 14.3897 19.93 12.9997H17.9C17.75 13.8697 17.41 14.7097 16.87 15.4597L18.32 16.8997ZM4.07 10.9997H1L5.55 15.5497L10 10.9997H6.09C6.57 8.15969 9.03 5.99969 12 5.99969C14.97 5.99969 17.43 8.15969 17.91 10.9997H19.93C19.44 7.04969 16.08 3.99969 12 3.99969C7.92 3.99969 4.56 7.04969 4.07 10.9997Z" fill="#4C119A"/></g><defs><clipPath id="clip0_589_6501"><rect width="24" height="24" fill="white" transform="translate(0 24) rotate(-90)"/></clipPath></defs></svg><?=$merge['left']?></button>
                        <button class="btn btn-rotate" onclick="rotatePDF(0)"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_589_6504)"><path d="M18.45 15.55L23 11H19.93C19.44 7.06 16.08 4 12 4C7.92 4 4.56 7.05 4.07 11H6.09C6.57 8.16 9.03 6 12 6C14.97 6 17.43 8.16 17.91 11H14L18.45 15.55ZM13 19.93C14.39 19.76 15.73 19.21 16.89 18.31L15.47 16.89C14.72 17.43 13.87 17.77 13 17.91L13 19.93ZM6.1 13H4.08C4.25 14.39 4.79 15.74 5.69 16.9L7.13 15.46C6.59 14.71 6.24 13.87 6.1 13ZM8.52 16.89L7.11 18.31C8.27 19.21 9.61 19.76 11 19.93L11 17.91C10.13 17.77 9.28 17.43 8.52 16.89Z" fill="#4C119A"/></g><defs><clipPath id="clip0_589_6504"><rect width="24" height="24" fill="white" transform="translate(24) rotate(90)"/></clipPath></defs></svg><?=$merge['right']?></button>
                        <select class="form-select" id="rotate-select">
                            <option name="mode" value="90">90°</option>
                            <option name="mode" value="180">180°</option>
                            <option name="mode" value="270">270°</option>
                            <option name="mode" value="0" selected="">Default / 00</option>
                            <option name="mode" value="-90">-90°</option>
                            <option name="mode" value="-180">-180°</option>
                            <option name="mode" value="-270">-270°</option>
                        </select>
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
<script src="/assets/js/all.js?v=1.27"></script>
<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>

<script>
var pdfjsLib = window['pdfjs-dist/build/pdf'];

pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

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
        uiUpdatePdfProgress(id, percent);
    },
    onUploadSuccess: function(id, data) {
        updateFileStatus(id, data);
        uiUpdatePdfProgress(id, 100, 'progress-success', false);
    },
    onUploadError: function(id, xhr, status, message) {
        uiUpdatePdfProgress(id, 0, 'progress-success', false);
        updateError(id, 0);
    },
    onInit: function() {
        console.log('Callback: Plugin initialized');
    },
});

function updateError () {
    console.log(0);
}

function rotatePDF(side) {
    var numSide =  (side === 0) ? 90 : -90;
    var angle = getCurrentRotation('.pdf-item .file_canvas');
    angle = angle + numSide;
    $('.pdf-item .file_canvas').css("transform","rotate(" + angle + "deg)");
    setSelectRotate(angle);
    $('#degNumber').text(angle);
}

function setSelectRotate(num) {
    $("select#rotate-select").val(num).change();
}
$("select#rotate-select").change(function() {
    $('.pdf-item .file_canvas').css("transform","rotate(" + $(this).val() + "deg)");
});

function getCurrentRotation( el ) {
  var el = document.querySelector(el);
  var st = window.getComputedStyle(el, null);
  var tr = st.getPropertyValue("-webkit-transform") ||
       st.getPropertyValue("-moz-transform") ||
       st.getPropertyValue("-ms-transform") ||
       st.getPropertyValue("-o-transform") ||
       st.getPropertyValue("transform") ||
       "fail...";

  if( tr !== "none") {

    var values = tr.split('(')[1];
      values = values.split(')')[0];
      values = values.split(',');
    var a = values[0];
    var b = values[1];
    var c = values[2];
    var d = values[3];

    var scale = Math.sqrt(a*a + b*b);

    var radians = Math.atan2(b, a);
    var angle = Math.round( radians * (180/Math.PI));
    
  } else {
    var angle = 0;
  }

  return angle;
}

function showPreview(id, file) {
    $filename = file.name.replace(/\.[^/.]+$/, "");
    $filename = fixFilename($filename);
    $('#pdfItems').append('<div class="pdf-item" id="' + id + '" data-filename="' + $filename + '"><div class="file-info uploading"><div class="canvas-box"><div class="file_canvas"><canvas></canvas></div></div></div><div class="progress-bar"></div><div class="item-del" onclick="removeItem(\'' + id + '\')"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.3268 6.00028L11.0377 2.28935C11.2139 2.11354 11.3129 1.87496 11.3131 1.62611C11.3134 1.37726 11.2147 1.13851 11.0389 0.962393C10.8631 0.786273 10.6245 0.687206 10.3757 0.686986C10.1268 0.686766 9.88807 0.785412 9.71195 0.961221L6.00102 4.67216L2.29008 0.961221C2.11396 0.785101 1.87509 0.686157 1.62602 0.686157C1.37694 0.686157 1.13807 0.785101 0.961953 0.961221C0.785833 1.13734 0.68689 1.37621 0.68689 1.62528C0.68689 1.87436 0.785833 2.11323 0.961953 2.28935L4.67289 6.00028L0.961953 9.71122C0.785833 9.88734 0.68689 10.1262 0.68689 10.3753C0.68689 10.6244 0.785833 10.8632 0.961953 11.0393C1.13807 11.2155 1.37694 11.3144 1.62602 11.3144C1.87509 11.3144 2.11396 11.2155 2.29008 11.0393L6.00102 7.32841L9.71195 11.0393C9.88807 11.2155 10.1269 11.3144 10.376 11.3144C10.6251 11.3144 10.864 11.2155 11.0401 11.0393C11.2162 10.8632 11.3151 10.6244 11.3151 10.3753C11.3151 10.1262 11.2162 9.88734 11.0401 9.71122L7.3268 6.00028Z" fill="#5C5D6B"></path></svg></div></div>');
    printPreview(file, id);
    $('#upload').addClass('disabled');
    $('#converter').addClass('d-block');
    $('#convert-wrapper').removeClass('disabled');
    $('#handle-upload').addClass('active');
    $('body').addClass('d-scroll');
}
function printPreview(file, id) {
    
	if(file.type == "application/pdf"){
		var fileReader = new FileReader();  
		fileReader.onload = function() {
			var pdfData = new Uint8Array(this.result);
			// Using DocumentInitParameters object to load binary data.
			var loadingTask = pdfjsLib.getDocument({data: pdfData});
			loadingTask.promise.then(function(pdf) {
			  console.log(pdf.numPages);
			  
			  // Fetch the first page
			  var pageNumber = 1;
			  pdf.getPage(pageNumber).then(function(page) {
				
				var scale = .5;
				var viewport = page.getViewport({scale: scale});

				// Prepare canvas using PDF page dimensions
				var canvas = $("#"+id + ' canvas')[0];
				var context = canvas.getContext('2d');
				canvas.height = viewport.height;
				canvas.width = viewport.width;

				// Render PDF page into canvas context
				var renderContext = {
				  canvasContext: context,
				  viewport: viewport
				};
				var renderTask = page.render(renderContext);
				renderTask.promise.then(function () {
				});
			  });
			}, function (reason) {
			  // PDF loading error
			  console.error(reason);
			});
		};
		fileReader.readAsArrayBuffer(file);
	}
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

function handleConvert() {
    var degNumber = $('#rotate-select').find(":selected").val();
    if (degNumber === '0') {
        return showAlertError('Bạn chưa chọn độ xoay, độ xoay hiện tại là 0 vì vậy nó sẽ trả về file gốc');
    }
    uiConverting();
    $('.settings').removeClass('show');
    var items = getItems();

    var dataSend = {
			"task": 'rotate',
            "files": items,
            "config": {
                "rotation": degNumber
            }
		};
    getTaskId(dataSend);
}

</script>

<?php
include '../inc/footer.php';
?>