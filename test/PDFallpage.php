<style>
    #the-canvas {
  border: 1px solid black;
  direction: ltr;
}
</style>
<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
<div id="drop-area">
  <h3>Drag and Drop Files Here<h3/>
  <input type="file" accept="application/pdf,.pdf" id="pdfInp" title="Click to add Files">
  <input type="submit">
</div>
<div id="preview"></div>
<canvas id="pdfViewer"></canvas>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>

var url = 'https://raw.githubusercontent.com/mozilla/pdf.js/ba2edeae/web/compressed.tracemonkey-pldi-09.pdf';

var pdfjsLib = window['pdfjs-dist/build/pdf'];

pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

var currPage = 1;
var numPages = 0;
var thePDF = null;
var pdfData = [];

pdfjsLib.getDocument(url).promise.then(function(pdf) {

        thePDF = pdf;
        numPages = pdf.numPages;
        pdf.getPage( 1 ).then( handlePages );
});


function handlePages(page)
{
    //This gives us the page's dimensions at full scale
    var viewport = page.getViewport( {scale: .5} );
    console.log(page);
    numPage = page['_pageIndex'] + 1;
    $('#preview').append('<div id="page-num' + numPage + '" data-id="' + numPage + '" class="page-item" onclick="clickPage(' + pdfData.length + ', ' + numPage + ')"></div>');
    //We'll create a canvas for each page to draw it on
    var canvas = document.createElement( "canvas" );
    canvas.className = 'pdf-page-canvas';
    var context = canvas.getContext('2d');
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    page.render({canvasContext: context, viewport: viewport});

    document.getElementById('page-num' + numPage).appendChild( canvas );

    currPage++;
    if ( thePDF !== null && currPage <= numPages )
    {
        thePDF.getPage( currPage ).then( handlePages );
    }
}
function clickPage (idDoc, numPage) {
    console.log (idDoc, numPage);
}

//
//
// Preview one page 
//
//

// $("#pdfInp").on("change", function(e){
// 	var file = e.target.files[0]
// 	if(file.type == "application/pdf"){
// 		var fileReader = new FileReader();  
// 		fileReader.onload = function() {
// 			var pdfData = new Uint8Array(this.result);
// 			// Using DocumentInitParameters object to load binary data.
// 			var loadingTask = pdfjsLib.getDocument({data: pdfData});
// 			loadingTask.promise.then(function(pdf) {
// 			  console.log(pdf.numPages);
			  
// 			  // Fetch the first page
// 			  var pageNumber = 1;
// 			  pdf.getPage(pageNumber).then(function(page) {
// 				console.log('Page loaded');
				
// 				var scale = 1.5;
// 				var viewport = page.getViewport({scale: scale});

// 				// Prepare canvas using PDF page dimensions
// 				var canvas = $("#pdfViewer")[0];
// 				var context = canvas.getContext('2d');
// 				canvas.height = viewport.height;
// 				canvas.width = viewport.width;

// 				// Render PDF page into canvas context
// 				var renderContext = {
// 				  canvasContext: context,
// 				  viewport: viewport
// 				};
// 				var renderTask = page.render(renderContext);
// 				renderTask.promise.then(function () {
// 				  console.log('Page rendered');
// 				});
// 			  });
// 			}, function (reason) {
// 			  // PDF loading error
// 			  console.error(reason);
// 			});
// 		};
// 		fileReader.readAsArrayBuffer(file);
// 	}
// });




$(document).ready(function() {
    $('.page-item').click(function() {
        $('selector.active').removeClass("active");
        $(this).addClass("active");
        console.log('ok');
    });
});
</script>