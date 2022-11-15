<?php
/**
 * Config
 */
$multiLanguage = true;
$slug = 'pdf-to-excel';
$privateLanguage = 'pdf2excel/';

include '../inc/config.php';

$isTitle = $merge['title'];
$isDesc = $merge['desc'];
$isCanonical = $isHomeUrl . (isset($_GET['lang']) ? '/' . $_GET['lang'] : '') .  '/' . $slug;

include '../inc/header.php';
?>
<link href="/assets/css/app.css?v=1.65" rel="stylesheet">

<div class="main-cover">
    <div class="container mt-3">
        <div class="upload" id="upload">
            <div class="title-wrapper">
                <div class="title-page">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6538 10.4176H4.24682C3.96437 10.4176 3.68468 10.4732 3.42372 10.5813C3.16277 10.6894 2.92566 10.8479 2.72593 11.0476C2.52621 11.2473 2.36777 11.4844 2.25968 11.7454C2.15159 12.0063 2.09596 12.286 2.09596 12.5685V22.9755C2.09596 23.5458 2.32249 24.0928 2.72573 24.4961C3.12897 24.8995 3.67591 25.1262 4.24625 25.1263H14.6538C15.224 25.1262 15.7709 24.8996 16.1741 24.4964C16.5774 24.0931 16.8039 23.5463 16.8041 22.976V12.5679C16.8039 11.9977 16.5774 11.4508 16.1741 11.0476C15.7709 10.6444 15.224 10.4178 14.6538 10.4176ZM4.24682 9.10006C3.32699 9.10006 2.44481 9.46538 1.79428 10.1157C1.14375 10.766 0.778135 11.6481 0.777832 12.5679L0.777832 22.9749C0.777757 23.4305 0.86743 23.8816 1.04173 24.3026C1.21603 24.7235 1.47154 25.106 1.79367 25.4282C2.11581 25.7504 2.49825 26.006 2.91917 26.1803C3.34008 26.3547 3.79122 26.4445 4.24682 26.4445H14.6538C15.5738 26.4445 16.4562 26.079 17.1068 25.4284C17.7573 24.7778 18.1228 23.8955 18.1228 22.9755V12.5685C18.1228 12.1129 18.0331 11.6618 17.8587 11.241C17.6844 10.8201 17.4289 10.4377 17.1068 10.1155C16.7846 9.79341 16.4022 9.53788 15.9813 9.36355C15.5605 9.18922 15.1094 9.09949 14.6538 9.09949H4.24682V9.10006Z" fill="#005EEB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9.43031 4.35401C9.43031 3.42197 9.80052 2.5281 10.4595 1.869C11.1185 1.20989 12.0123 0.839537 12.9444 0.839386H23.2253C24.1574 0.839386 25.0514 1.20968 25.7105 1.8688C26.3696 2.52791 26.7399 3.42187 26.7399 4.35401V14.6349C26.74 15.0965 26.6491 15.5536 26.4725 15.9801C26.2959 16.4066 26.0371 16.7941 25.7107 17.1205C25.3843 17.4469 24.9969 17.7059 24.5704 17.8825C24.144 18.0592 23.6869 18.1501 23.2253 18.1501H19.0696V11.7791C19.0696 11.5509 19.0479 11.3285 19.0068 11.1129H19.6702C19.746 11.1129 19.7882 11.1431 19.7957 11.2042L20.252 12.7099C20.3089 12.889 20.4214 13.0453 20.5732 13.1561C20.725 13.2669 20.9082 13.3264 21.0961 13.3259H21.1417C21.3014 13.3259 21.4269 13.2615 21.5182 13.132C21.5659 13.074 21.5973 13.0044 21.6094 12.9302C21.6214 12.8561 21.6135 12.7801 21.5866 12.7099L19.1454 5.61453C19.0844 5.43201 18.9743 5.28371 18.8146 5.16964C18.6623 5.05556 18.4878 4.99853 18.2899 4.99853H18.2214C18.0315 4.99853 17.8564 5.05556 17.6967 5.16964C17.537 5.28371 17.4269 5.43201 17.3659 5.61453L16.4179 8.37056C16.1358 8.29948 15.8459 8.26366 15.555 8.2639H9.42917V4.35401H9.43031ZM18.6606 10.1319C18.3685 9.58251 17.9364 9.12011 17.4081 8.79149L18.2214 6.15068C18.2214 6.14326 18.2254 6.13927 18.2328 6.13927C18.2403 6.13927 18.2442 6.14326 18.2442 6.15068L19.442 10.0406C19.4494 10.0634 19.446 10.0862 19.4306 10.109C19.4232 10.1165 19.4143 10.1224 19.4045 10.1263C19.3946 10.1303 19.3841 10.1321 19.3736 10.1319H18.6606ZM5.19588 14.3229C5.19588 13.959 5.49076 13.6636 5.85466 13.6636H12.9729C13.1477 13.6636 13.3153 13.733 13.4389 13.8566C13.5625 13.9802 13.6319 14.1479 13.6319 14.3227C13.6319 14.4975 13.5625 14.6651 13.4389 14.7887C13.3153 14.9123 13.1477 14.9817 12.9729 14.9817H5.85409C5.76758 14.9817 5.68191 14.9647 5.60199 14.9316C5.52206 14.8985 5.44944 14.8499 5.38826 14.7888C5.32709 14.7276 5.27857 14.655 5.24546 14.575C5.21235 14.4951 5.19531 14.4095 5.19531 14.3229H5.19588ZM5.19588 17.8205C5.19588 17.4566 5.49076 17.1617 5.85466 17.1617H12.9729C13.1476 17.1617 13.3152 17.2311 13.4387 17.3546C13.5623 17.4782 13.6317 17.6457 13.6317 17.8205C13.6317 17.9952 13.5623 18.1627 13.4387 18.2863C13.3152 18.4098 13.1476 18.4792 12.9729 18.4792H5.85409C5.67942 18.4791 5.51194 18.4096 5.38843 18.2861C5.26492 18.1626 5.19546 17.9951 5.19531 17.8205H5.19588ZM5.19588 21.318C5.19588 20.9541 5.49076 20.6592 5.85466 20.6592H12.9729C13.1476 20.6592 13.3152 20.7286 13.4387 20.8521C13.5623 20.9757 13.6317 21.1432 13.6317 21.318C13.6317 21.4927 13.5623 21.6602 13.4387 21.7838C13.3152 21.9073 13.1476 21.9767 12.9729 21.9767H5.85409C5.76758 21.9767 5.68191 21.9597 5.60199 21.9266C5.52206 21.8935 5.44944 21.845 5.38826 21.7838C5.32709 21.7226 5.27857 21.65 5.24546 21.5701C5.21235 21.4901 5.19531 21.4045 5.19531 21.318H5.19588Z" fill="#005EEB"/></svg>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/assets/js/all.js?v=1.27"></script>
<script>
function formatBytes(a,b=2){if(!+a)return"0 Bytes";const c=0>b?0:b,d=Math.floor(Math.log(a)/Math.log(1024));return`${parseFloat((a/Math.pow(1024,d)).toFixed(c))} ${["Bytes","KB","MB","GB","TB","PB","EB","ZB","YB"][d]}`}
var pdfs = [];

$("#drop-area").dmUploader({
    url: '/upload.php',
    headers: {
    'Access-Control-Allow-Origin': "*"
    },
    onNewFile: function(id, file){
        uiShowPreview(id, file, 'pdf');
    },
    onUploadProgress: function(id, percent) {
        uiUpdatePdfProgress(id, percent);
    },
    onUploadSuccess: function(id, data) {
        updateFileStatus(id, data);
        uiUpdatePdfProgress(id, 100, 'progress-success', false);
    },
    onUploadError: function(id, xhr, status, message) {
        uiUpdatePdfProgress(id, 0, 'danger', false);
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
        $('body').removeClass('d-scroll');
    }
}

function showPreview(id, file) {
    
    $filename = file.name.replace(/\.[^/.]+$/, "");
    $filename = fixFilename($filename);
    if(file.type == "application/pdf"){
        $('#pdfItems').append('<div class="pdf-item" id="' + id + '" data-filename="' + $filename + '"><div class="file-info uploading"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00005 47.8333V53.6667C7.00005 53.9761 7.12296 54.2728 7.34176 54.4916C7.56055 54.7104 7.8573 54.8333 8.16671 54.8333H47.8334C48.1428 54.8333 48.4396 54.7104 48.6583 54.4916C48.8771 54.2728 49.0001 53.9761 49.0001 53.6667V11.2257V11.6667H38.5V1.16667H39.0332H8.16671C7.8573 1.16667 7.56055 1.28958 7.34176 1.50838C7.12296 1.72717 7.00005 2.02391 7.00005 2.33333V32.6667H30.3369C31.6237 32.6667 32.6667 33.7097 32.6667 35.0035V45.4965C32.6672 45.8029 32.6073 46.1064 32.4904 46.3897C32.3736 46.673 32.2021 46.9304 31.9858 47.1474C31.7694 47.3644 31.5125 47.5367 31.2295 47.6544C30.9466 47.7721 30.6433 47.8329 30.3369 47.8333H7.00005ZM5.83338 47.8333H4.66321C4.35671 47.8332 4.05324 47.7726 3.77019 47.655C3.48713 47.5374 3.23004 47.3652 3.01364 47.1481C2.79723 46.9311 2.62576 46.6735 2.50903 46.3901C2.3923 46.1066 2.33261 45.803 2.33338 45.4965V35.0035C2.33292 34.6971 2.39282 34.3936 2.50966 34.1103C2.62649 33.827 2.79798 33.5696 3.01432 33.3526C3.23067 33.1356 3.48764 32.9633 3.77055 32.8456C4.05347 32.7279 4.3568 32.6671 4.66321 32.6667H5.83338V2.33333C5.83338 1.71449 6.07921 1.121 6.5168 0.683418C6.95438 0.245833 7.54788 1.08323e-07 8.16671 1.08323e-07H39.0332C39.3418 -9.39011e-05 39.6472 0.0610034 39.932 0.179756C40.2168 0.298509 40.4752 0.472559 40.6922 0.691833L49.4924 9.58533C49.9243 10.022 50.1666 10.6114 50.1667 11.2257V53.6667C50.1667 54.2855 49.9209 54.879 49.4833 55.3166C49.0457 55.7542 48.4522 56 47.8334 56H8.16671C7.54788 56 6.95438 55.7542 6.5168 55.3166C6.07921 54.879 5.83338 54.2855 5.83338 53.6667V47.8333ZM48.7469 10.5C48.7206 10.467 48.6926 10.4355 48.6629 10.4055L39.8627 1.51317C39.8034 1.45294 39.7377 1.39935 39.6667 1.35333V10.5H48.7469ZM16.3334 28H40.8334V29.1667H16.3334V28ZM16.3334 22.1667H40.8334V23.3333H16.3334V22.1667ZM35 33.8333H40.8334V35H35V33.8333ZM35 39.6667H40.8334V40.8333H35V39.6667ZM35 45.5H40.8334V46.6667H35V45.5ZM13.1192 38.6027C13.1192 37.7405 12.8567 37.0918 12.3305 36.6567C11.8044 36.2227 11.0355 36.0045 10.0264 36.0045H7.36638V44.3333H9.13155V41.37H9.88988C10.9224 41.37 11.7192 41.1332 12.2792 40.6583C12.8392 40.1847 13.1192 39.4987 13.1192 38.6027V38.6027ZM9.13155 39.9233V37.45H9.93538C10.4172 37.45 10.7719 37.5492 10.997 37.7463C11.2234 37.9447 11.3354 38.2503 11.3354 38.6645C11.3354 39.074 11.2012 39.3867 10.9317 39.6013C10.6622 39.816 10.255 39.9233 9.71255 39.9233H9.13155V39.9233ZM21.602 40.0878C21.602 38.801 21.2252 37.7977 20.4739 37.0802C19.7214 36.3627 18.6655 36.0033 17.3064 36.0033H14.6919V44.3333H17.0497C18.5232 44.3333 19.6514 43.9693 20.4307 43.239C21.2124 42.5098 21.602 41.4598 21.602 40.089V40.0878ZM19.7669 40.1345C19.7669 41.9603 18.9164 42.8738 17.2154 42.8738H16.457V37.4512H17.3974C18.977 37.4512 19.7669 38.3448 19.7669 40.1345ZM25.0647 44.3333V41.041H27.8904V39.599H25.0647V37.4523H28.1015V36.0057H23.3275V44.3333H25.0659H25.0647Z" fill="#D71919"/></svg><div class="pdf-filename">' + file.name + '</div><div class="pdf-file-size">' + formatBytes(file.size) + '</div></div><div class="progress-bar"></div><div class="item-del" onclick="removeItem(\'' + id + '\')"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.3268 6.00028L11.0377 2.28935C11.2139 2.11354 11.3129 1.87496 11.3131 1.62611C11.3134 1.37726 11.2147 1.13851 11.0389 0.962393C10.8631 0.786273 10.6245 0.687206 10.3757 0.686986C10.1268 0.686766 9.88807 0.785412 9.71195 0.961221L6.00102 4.67216L2.29008 0.961221C2.11396 0.785101 1.87509 0.686157 1.62602 0.686157C1.37694 0.686157 1.13807 0.785101 0.961953 0.961221C0.785833 1.13734 0.68689 1.37621 0.68689 1.62528C0.68689 1.87436 0.785833 2.11323 0.961953 2.28935L4.67289 6.00028L0.961953 9.71122C0.785833 9.88734 0.68689 10.1262 0.68689 10.3753C0.68689 10.6244 0.785833 10.8632 0.961953 11.0393C1.13807 11.2155 1.37694 11.3144 1.62602 11.3144C1.87509 11.3144 2.11396 11.2155 2.29008 11.0393L6.00102 7.32841L9.71195 11.0393C9.88807 11.2155 10.1269 11.3144 10.376 11.3144C10.6251 11.3144 10.864 11.2155 11.0401 11.0393C11.2162 10.8632 11.3151 10.6244 11.3151 10.3753C11.3151 10.1262 11.2162 9.88734 11.0401 9.71122L7.3268 6.00028Z" fill="#5C5D6B"></path></svg></div></div>');
        $('#upload').addClass('disabled');
        $('#converter').addClass('d-block');
        $('#convert-wrapper').removeClass('disabled');
        $('#handle-upload').addClass('active');
        $('body').addClass('d-scroll');
    }
}





function handleConvert() {
    uiConverting();
    var items = getItems();
    var dataSend = {
			task: 'pdf2excel',
            files: items
		};
    getTaskId(dataSend);
}
</script>

<?php
include '../inc/footer.php';
?>