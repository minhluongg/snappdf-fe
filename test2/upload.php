<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <style>
        .dm-uploader{cursor:default;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.dm-uploader .btn{position:relative;overflow:hidden}.dm-uploader .btn input[type=file]{position:absolute;top:0;right:0;margin:0;border:solid transparent;width:100%;opacity:0;cursor:pointer}
        .progress-bar {
          height: 2px;
          width: 0;
          background-color: #007bff;
          transition: width .6s ease;
        }
        .progress-bar-animated {
            -webkit-animation: progress-bar-stripes 1s linear infinite;
            animation: progress-bar-stripes 1s linear infinite;
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-delay: 0s;
            animation-iteration-count: infinite;
            animation-direction: normal;
            animation-fill-mode: none;
            animation-play-state: running;
            animation-name: progress-bar-stripes;
        }
        @keyframes progress-bar-stripes {
          from { background-position: $progress-height 0; }
          to { background-position: 0 0; }
        }
    </style>
<div id="drop-area">
  <h3>Drag and Drop Files Here<h3/>
  <input type="file" accept="application/pdf,.pdf" title="Click to add Files">
</div>
<div id="uploaderFile">
  <div class="progress-bar bg-primary"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/jquery.dm-uploader.min.js"></script>
<script src="/assets/js/ui.js?v=1.11"></script>
<script>
  var pdfs = [];
// $("#drop-area").dmUploader({
//     url:"upload.php",
//     fileName:"myfile",
//     acceptFiles:"image/*"
// }); 
$("#drop-area").dmUploader({
  url: '/upload.php',
  maxFileSize: 3000000,
  onUploadProgress: function(id, percent){
      // Updating file progress
      update_file_progress(id, percent);
  },
  onUploadSuccess: function(id, data){
    // A file was successfully uploaded
    update_file_status(id, data);
    // ui_multi_update_file_progress(id, 100, 'success', false);
  },
  onUploadError: function(id, xhr, status, message){
    // update_file_status(id, 'danger', message);
    update_file_progress(id, 0, 'danger', false);  
  },
  onFileSizeError: function(file){
    console.log('File \'' + file.name + '\' cannot be added: size excess limit', 'danger');
  },
  
  onInit: function(){
    console.log('Callback: Plugin initialized');
  },
});

// function update_file_progress(id, percent) {
//   console.log('id: ' + id + ' - ' + percent);
// }

function update_file_status(id, data) {
  const obj = JSON.parse(data);
  if (obj.status != "ok") {
    console.log('Alert error');
  } else {
      pdfs.push({'id': id,'link': obj.path, 'filename': obj.name});
      console.log(pdfs);

  }

}


// UI 
function update_file_progress(id, percent, color, active)
{
  console.log('id: ' + id + ' - ' + percent);
  color = (typeof color === 'undefined' ? false : color);
  active = (typeof active === 'undefined' ? true : active);



  var bar = $('#uploaderFile').find('div.progress-bar');


  bar.width(percent + '%').attr('aria-valuenow', percent);
  bar.toggleClass('progress-bar-striped progress-bar-animated', active);

  // if (percent === 0){
  //   bar.html('');
  // } else {
  //   bar.html(percent + '%');
  // }

  if (color !== false){
    bar.removeClass('bg-success bg-info bg-warning bg-danger');
    bar.addClass('bg-' + color);
  }
}
</script>
</body>
</html>