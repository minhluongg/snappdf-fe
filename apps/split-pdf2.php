<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/assets/css/style.css" rel="stylesheet">

</head>
<body>
    <style>
        .dm-uploader{cursor:default;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.dm-uploader .btn{position:relative;overflow:hidden}.dm-uploader .btn input[type=file]{position:absolute;top:0;right:0;margin:0;border:solid transparent;width:100%;opacity:0;cursor:pointer}
        
    </style>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="ready-convert">
                <div class="ready-convert-title">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6538 10.4176H4.24682C3.96437 10.4176 3.68468 10.4732 3.42372 10.5813C3.16277 10.6894 2.92566 10.8479 2.72593 11.0476C2.52621 11.2473 2.36777 11.4844 2.25968 11.7454C2.15159 12.0063 2.09596 12.286 2.09596 12.5685V22.9755C2.09596 23.5458 2.32249 24.0928 2.72573 24.4961C3.12897 24.8995 3.67591 25.1262 4.24625 25.1263H14.6538C15.224 25.1262 15.7709 24.8996 16.1741 24.4964C16.5774 24.0931 16.8039 23.5463 16.8041 22.976V12.5679C16.8039 11.9977 16.5774 11.4508 16.1741 11.0476C15.7709 10.6444 15.224 10.4178 14.6538 10.4176ZM4.24682 9.10006C3.32699 9.10006 2.44481 9.46538 1.79428 10.1157C1.14375 10.766 0.778135 11.6481 0.777832 12.5679L0.777832 22.9749C0.777757 23.4305 0.86743 23.8816 1.04173 24.3026C1.21603 24.7235 1.47154 25.106 1.79367 25.4282C2.11581 25.7504 2.49825 26.006 2.91917 26.1803C3.34008 26.3547 3.79122 26.4445 4.24682 26.4445H14.6538C15.5738 26.4445 16.4562 26.079 17.1068 25.4284C17.7573 24.7778 18.1228 23.8955 18.1228 22.9755V12.5685C18.1228 12.1129 18.0331 11.6618 17.8587 11.241C17.6844 10.8201 17.4289 10.4377 17.1068 10.1155C16.7846 9.79341 16.4022 9.53788 15.9813 9.36355C15.5605 9.18922 15.1094 9.09949 14.6538 9.09949H4.24682V9.10006Z" fill="#005EEB"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9.43031 4.35401C9.43031 3.42197 9.80052 2.5281 10.4595 1.869C11.1185 1.20989 12.0123 0.839537 12.9444 0.839386H23.2253C24.1574 0.839386 25.0514 1.20968 25.7105 1.8688C26.3696 2.52791 26.7399 3.42187 26.7399 4.35401V14.6349C26.74 15.0965 26.6491 15.5536 26.4725 15.9801C26.2959 16.4066 26.0371 16.7941 25.7107 17.1205C25.3843 17.4469 24.9969 17.7059 24.5704 17.8825C24.144 18.0592 23.6869 18.1501 23.2253 18.1501H19.0696V11.7791C19.0696 11.5509 19.0479 11.3285 19.0068 11.1129H19.6702C19.746 11.1129 19.7882 11.1431 19.7957 11.2042L20.252 12.7099C20.3089 12.889 20.4214 13.0453 20.5732 13.1561C20.725 13.2669 20.9082 13.3264 21.0961 13.3259H21.1417C21.3014 13.3259 21.4269 13.2615 21.5182 13.132C21.5659 13.074 21.5973 13.0044 21.6094 12.9302C21.6214 12.8561 21.6135 12.7801 21.5866 12.7099L19.1454 5.61453C19.0844 5.43201 18.9743 5.28371 18.8146 5.16964C18.6623 5.05556 18.4878 4.99853 18.2899 4.99853H18.2214C18.0315 4.99853 17.8564 5.05556 17.6967 5.16964C17.537 5.28371 17.4269 5.43201 17.3659 5.61453L16.4179 8.37056C16.1358 8.29948 15.8459 8.26366 15.555 8.2639H9.42917V4.35401H9.43031ZM18.6606 10.1319C18.3685 9.58251 17.9364 9.12011 17.4081 8.79149L18.2214 6.15068C18.2214 6.14326 18.2254 6.13927 18.2328 6.13927C18.2403 6.13927 18.2442 6.14326 18.2442 6.15068L19.442 10.0406C19.4494 10.0634 19.446 10.0862 19.4306 10.109C19.4232 10.1165 19.4143 10.1224 19.4045 10.1263C19.3946 10.1303 19.3841 10.1321 19.3736 10.1319H18.6606ZM5.19588 14.3229C5.19588 13.959 5.49076 13.6636 5.85466 13.6636H12.9729C13.1477 13.6636 13.3153 13.733 13.4389 13.8566C13.5625 13.9802 13.6319 14.1479 13.6319 14.3227C13.6319 14.4975 13.5625 14.6651 13.4389 14.7887C13.3153 14.9123 13.1477 14.9817 12.9729 14.9817H5.85409C5.76758 14.9817 5.68191 14.9647 5.60199 14.9316C5.52206 14.8985 5.44944 14.8499 5.38826 14.7888C5.32709 14.7276 5.27857 14.655 5.24546 14.575C5.21235 14.4951 5.19531 14.4095 5.19531 14.3229H5.19588ZM5.19588 17.8205C5.19588 17.4566 5.49076 17.1617 5.85466 17.1617H12.9729C13.1476 17.1617 13.3152 17.2311 13.4387 17.3546C13.5623 17.4782 13.6317 17.6457 13.6317 17.8205C13.6317 17.9952 13.5623 18.1627 13.4387 18.2863C13.3152 18.4098 13.1476 18.4792 12.9729 18.4792H5.85409C5.67942 18.4791 5.51194 18.4096 5.38843 18.2861C5.26492 18.1626 5.19546 17.9951 5.19531 17.8205H5.19588ZM5.19588 21.318C5.19588 20.9541 5.49076 20.6592 5.85466 20.6592H12.9729C13.1476 20.6592 13.3152 20.7286 13.4387 20.8521C13.5623 20.9757 13.6317 21.1432 13.6317 21.318C13.6317 21.4927 13.5623 21.6602 13.4387 21.7838C13.3152 21.9073 13.1476 21.9767 12.9729 21.9767H5.85409C5.76758 21.9767 5.68191 21.9597 5.60199 21.9266C5.52206 21.8935 5.44944 21.845 5.38826 21.7838C5.32709 21.7226 5.27857 21.65 5.24546 21.5701C5.21235 21.4901 5.19531 21.4045 5.19531 21.318H5.19588Z" fill="#005EEB"/></svg>
                    <span>PDF to Word</span>
                </div>
                <div class="pdf-items" id="pdfItems">
                           </div>
                <button type="button" class="btn btn-primary btn-convert" onclick="handleConvert()">Primary</button>
            </div>

        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div id="drop-area" class="drop-area">
            <h3>Drag and Drop Files Here<h3/>
            <input type="file" class="form-control" accept="application/pdf,.pdf" title="Click to add Files">
            </div>

        </div>
    </div>
</div>
<canvas id="pdfViewer"></canvas>
<div id="preview">

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/assets/js/all.js?v=1.11"></script>
<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>

<script>
function formatBytes(a,b=2){if(!+a)return"0 Bytes";const c=0>b?0:b,d=Math.floor(Math.log(a)/Math.log(1024));return`${parseFloat((a/Math.pow(1024,d)).toFixed(c))} ${["Bytes","KB","MB","GB","TB","PB","EB","ZB","YB"][d]}`}

var pdfjsLib = window['pdfjs-dist/build/pdf'];

pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

var currPage = 1;
var numPages = 0;
var thePDF = null;
var pdfData = [];




function handlePages(page)
{
    console.log('ok');
    //This gives us the page's dimensions at full scale
    var viewport = page.getViewport( {scale: .5} );
    console.log(page);
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
        console.log({data: pdfData});

        pdfjsLib.getDocument({data: pdfData}).promise.then(function(pdf) {

        thePDF = pdf;
        numPages = pdf.numPages;
        pdf.getPage( 1 ).then( handlePages );
        });
			
		};
		fileReader.readAsArrayBuffer(file);
	}
}


var pdfs = [];

$("#drop-area").dmUploader({
    url: '/upload.php',
    headers: {
    'Access-Control-Allow-Origin': "*"
    },
    onNewFile: function(id, file){
      handlePrint(file);
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
        ui_update_pdf_progress(id, 0, 'danger', false);
    },
    onInit: function() {
        console.log('Callback: Plugin initialized');
    },
});

// function findID(idUpload) {

//     var pdf = pdfs.find(function(item) {
//         console.log(item);
//         return  item.id_upload === idUpload;
//     });


// }

function handleConvert() {
    var items = getItems();

	// $.ajax({
	// 	url: "/tasks.php",
	// 	method: "POST", //First change type to method here

	// 	data: {
	// 		task: 'pdf2word',
    //         files: items
	// 	},
	// 	success: function(response) {
	// 		console.log(response);
	// 	},
	// 	error: function() {
	// 		alert("error");
	// 	}

	// });
}
</script>
</body>
</html>