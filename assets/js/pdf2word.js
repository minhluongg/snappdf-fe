function formatBytes(a,b=2){if(!+a)return"0 Bytes";const c=0>b?0:b,d=Math.floor(Math.log(a)/Math.log(1024));return`${parseFloat((a/Math.pow(1024,d)).toFixed(c))} ${["Bytes","KB","MB","GB","TB","PB","EB","ZB","YB"][d]}`}
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
    },
    onUploadError: function(id, xhr, status, message) {
        update_file_progress(id, 0, 'danger', false);
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

function showPreview(id, file) {
    $('#pdfItems').append('<div class="pdf-item" id="' + id + '"><div class="file-info"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.00005 47.8333V53.6667C7.00005 53.9761 7.12296 54.2728 7.34176 54.4916C7.56055 54.7104 7.8573 54.8333 8.16671 54.8333H47.8334C48.1428 54.8333 48.4396 54.7104 48.6583 54.4916C48.8771 54.2728 49.0001 53.9761 49.0001 53.6667V11.2257V11.6667H38.5V1.16667H39.0332H8.16671C7.8573 1.16667 7.56055 1.28958 7.34176 1.50838C7.12296 1.72717 7.00005 2.02391 7.00005 2.33333V32.6667H30.3369C31.6237 32.6667 32.6667 33.7097 32.6667 35.0035V45.4965C32.6672 45.8029 32.6073 46.1064 32.4904 46.3897C32.3736 46.673 32.2021 46.9304 31.9858 47.1474C31.7694 47.3644 31.5125 47.5367 31.2295 47.6544C30.9466 47.7721 30.6433 47.8329 30.3369 47.8333H7.00005ZM5.83338 47.8333H4.66321C4.35671 47.8332 4.05324 47.7726 3.77019 47.655C3.48713 47.5374 3.23004 47.3652 3.01364 47.1481C2.79723 46.9311 2.62576 46.6735 2.50903 46.3901C2.3923 46.1066 2.33261 45.803 2.33338 45.4965V35.0035C2.33292 34.6971 2.39282 34.3936 2.50966 34.1103C2.62649 33.827 2.79798 33.5696 3.01432 33.3526C3.23067 33.1356 3.48764 32.9633 3.77055 32.8456C4.05347 32.7279 4.3568 32.6671 4.66321 32.6667H5.83338V2.33333C5.83338 1.71449 6.07921 1.121 6.5168 0.683418C6.95438 0.245833 7.54788 1.08323e-07 8.16671 1.08323e-07H39.0332C39.3418 -9.39011e-05 39.6472 0.0610034 39.932 0.179756C40.2168 0.298509 40.4752 0.472559 40.6922 0.691833L49.4924 9.58533C49.9243 10.022 50.1666 10.6114 50.1667 11.2257V53.6667C50.1667 54.2855 49.9209 54.879 49.4833 55.3166C49.0457 55.7542 48.4522 56 47.8334 56H8.16671C7.54788 56 6.95438 55.7542 6.5168 55.3166C6.07921 54.879 5.83338 54.2855 5.83338 53.6667V47.8333ZM48.7469 10.5C48.7206 10.467 48.6926 10.4355 48.6629 10.4055L39.8627 1.51317C39.8034 1.45294 39.7377 1.39935 39.6667 1.35333V10.5H48.7469ZM16.3334 28H40.8334V29.1667H16.3334V28ZM16.3334 22.1667H40.8334V23.3333H16.3334V22.1667ZM35 33.8333H40.8334V35H35V33.8333ZM35 39.6667H40.8334V40.8333H35V39.6667ZM35 45.5H40.8334V46.6667H35V45.5ZM13.1192 38.6027C13.1192 37.7405 12.8567 37.0918 12.3305 36.6567C11.8044 36.2227 11.0355 36.0045 10.0264 36.0045H7.36638V44.3333H9.13155V41.37H9.88988C10.9224 41.37 11.7192 41.1332 12.2792 40.6583C12.8392 40.1847 13.1192 39.4987 13.1192 38.6027V38.6027ZM9.13155 39.9233V37.45H9.93538C10.4172 37.45 10.7719 37.5492 10.997 37.7463C11.2234 37.9447 11.3354 38.2503 11.3354 38.6645C11.3354 39.074 11.2012 39.3867 10.9317 39.6013C10.6622 39.816 10.255 39.9233 9.71255 39.9233H9.13155V39.9233ZM21.602 40.0878C21.602 38.801 21.2252 37.7977 20.4739 37.0802C19.7214 36.3627 18.6655 36.0033 17.3064 36.0033H14.6919V44.3333H17.0497C18.5232 44.3333 19.6514 43.9693 20.4307 43.239C21.2124 42.5098 21.602 41.4598 21.602 40.089V40.0878ZM19.7669 40.1345C19.7669 41.9603 18.9164 42.8738 17.2154 42.8738H16.457V37.4512H17.3974C18.977 37.4512 19.7669 38.3448 19.7669 40.1345ZM25.0647 44.3333V41.041H27.8904V39.599H25.0647V37.4523H28.1015V36.0057H23.3275V44.3333H25.0659H25.0647Z" fill="#D71919"/></svg><div class="pdf-filename">' + file.name + '</div><div class="pdf-file-size">' + formatBytes(file.size) + '</div></div><div class="progress-bar"></div><div class="item-del" onclick="removeItem(\'' + id + '\')"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.3268 6.00028L11.0377 2.28935C11.2139 2.11354 11.3129 1.87496 11.3131 1.62611C11.3134 1.37726 11.2147 1.13851 11.0389 0.962393C10.8631 0.786273 10.6245 0.687206 10.3757 0.686986C10.1268 0.686766 9.88807 0.785412 9.71195 0.961221L6.00102 4.67216L2.29008 0.961221C2.11396 0.785101 1.87509 0.686157 1.62602 0.686157C1.37694 0.686157 1.13807 0.785101 0.961953 0.961221C0.785833 1.13734 0.68689 1.37621 0.68689 1.62528C0.68689 1.87436 0.785833 2.11323 0.961953 2.28935L4.67289 6.00028L0.961953 9.71122C0.785833 9.88734 0.68689 10.1262 0.68689 10.3753C0.68689 10.6244 0.785833 10.8632 0.961953 11.0393C1.13807 11.2155 1.37694 11.3144 1.62602 11.3144C1.87509 11.3144 2.11396 11.2155 2.29008 11.0393L6.00102 7.32841L9.71195 11.0393C9.88807 11.2155 10.1269 11.3144 10.376 11.3144C10.6251 11.3144 10.864 11.2155 11.0401 11.0393C11.2162 10.8632 11.3151 10.6244 11.3151 10.3753C11.3151 10.1262 11.2162 9.88734 11.0401 9.71122L7.3268 6.00028Z" fill="#5C5D6B"></path></svg></div></div>');
    $('#upload').addClass('disabled');
    $('#converter').addClass('d-block');
    $('#convert-wrapper').removeClass('disabled');
    $('#handle-upload').addClass('active');
    $('body').addClass('d-scroll');
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
        console.log(pdfs);

    }

}


// UI 
function update_file_progress(id, percent, color, active) {
    console.log('id: ' + id + ' - ' + percent);
    color = (typeof color === 'undefined' ? false : color);
    active = (typeof active === 'undefined' ? true : active);

    var bar = $('#' + id).find('div.progress-bar');

    bar.width(percent + '%').attr('aria-valuenow', percent);
    bar.toggleClass('progress-bar-striped progress-bar-animated', active);

    // if (percent === 0){
    //   bar.html('');
    // } else {
    //   bar.html(percent + '%');
    // }

    if (color !== false) {
        bar.removeClass('bg-success bg-info bg-warning bg-danger');
        bar.addClass('bg-' + color);
    }
}

function handleConvert() {
    $('#handle-upload').removeClass('active');
    $('#task-process').addClass('active');
    $('.converter-footer').addClass('disabled');
	countPDF = $(".pdf-item").length;
    var items = [];

	for (var i = 0; i < countPDF; i++) {
        countPdfArr = pdfs.length;
        for (var j = 0; j < countPdfArr; j++) {
            if ($(".pdf-item")[i].id === pdfs[j]['id_upload']) {
                items.push(pdfs[j]['id_be']);
            }
        }
	}
    console.log(items);

	$.ajax({
		url: "/tasks.php",
		method: "POST",

		data: {
			task: 'pdf2word',
            files: items
		},
		success: function(response) {
            obj = jQuery.parseJSON(response);
            $('#convert-wrapper').addClass('disabled');
            $('#download-final').addClass('active');
            $("#download-btn").attr("href", obj.data.url);
            $("#downloadFilename").text('SnapPDF_c78099b30df94bb4999c3731acdadbd6.docx');
            $("#dlFileSize").text(formatBytes(obj.data.file_size));

		},
		error: function() {
			alert("error");
		}

	});
}