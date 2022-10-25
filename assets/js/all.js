!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):"undefined"!=typeof exports?module.exports=e(require("jquery")):e(window.jQuery)}(function(e){"use strict";var t="dmUploader",n=0,i=1,s=2,o=3,r=4,u={auto:!0,queue:!0,dnd:!0,hookDocument:!0,multiple:!0,url:document.URL,method:"POST",extraData:{},headers:{},dataType:null,fieldName:"file",maxFileSize:0,allowedTypes:"*",extFilter:null,onInit:function(){},onComplete:function(){},onFallbackMode:function(){},onNewFile:function(){},onBeforeUpload:function(){},onUploadProgress:function(){},onUploadSuccess:function(){},onUploadCanceled:function(){},onUploadError:function(){},onUploadComplete:function(){},onFileTypeError:function(){},onFileSizeError:function(){},onFileExtError:function(){},onDragEnter:function(){},onDragLeave:function(){},onDocumentDragEnter:function(){},onDocumentDragLeave:function(){}},a=function(e,t){this.data=e,this.widget=t,this.jqXHR=null,this.status=n,this.id=Math.random().toString(36).substr(2)};a.prototype.upload=function(){var t=this;if(!t.canUpload())return t.widget.queueRunning&&t.status!==i&&t.widget.processQueue(),!1;var n=new FormData;n.append(t.widget.settings.fieldName,t.data);var s=t.widget.settings.extraData;return"function"==typeof s&&(s=s.call(t.widget.element,t.id)),e.each(s,function(e,t){n.append(e,t)}),t.status=i,t.widget.activeFiles++,t.widget.settings.onBeforeUpload.call(t.widget.element,t.id),t.jqXHR=e.ajax({url:t.widget.settings.url,type:t.widget.settings.method,dataType:t.widget.settings.dataType,data:n,headers:t.widget.settings.headers,cache:!1,contentType:!1,processData:!1,forceSync:!1,xhr:function(){return t.getXhr()},success:function(e){t.onSuccess(e)},error:function(e,n,i){t.onError(e,n,i)},complete:function(){t.onComplete()}}),!0},a.prototype.onSuccess=function(e){this.status=s,this.widget.settings.onUploadSuccess.call(this.widget.element,this.id,e)},a.prototype.onError=function(e,t,n){this.status!==r&&(this.status=o,this.widget.settings.onUploadError.call(this.widget.element,this.id,e,t,n))},a.prototype.onComplete=function(){this.widget.activeFiles--,this.status!==r&&this.widget.settings.onUploadComplete.call(this.widget.element,this.id),this.widget.queueRunning?this.widget.processQueue():this.widget.settings.queue&&0===this.widget.activeFiles&&this.widget.settings.onComplete.call(this.element)},a.prototype.getXhr=function(){var t=this,n=e.ajaxSettings.xhr();return n.upload&&n.upload.addEventListener("progress",function(e){var n=0,i=e.loaded||e.position,s=e.total||e.totalSize;e.lengthComputable&&(n=Math.ceil(i/s*100)),t.widget.settings.onUploadProgress.call(t.widget.element,t.id,n)},!1),n},a.prototype.cancel=function(e){e=void 0!==e&&e;var t=this.status;return!!(t===i||e&&t===n)&&(this.status=r,this.widget.settings.onUploadCanceled.call(this.widget.element,this.id),t===i&&this.jqXHR.abort(),!0)},a.prototype.canUpload=function(){return this.status===n||this.status===o};var l=function(t,n){return this.element=e(t),this.settings=e.extend({},u,n),this.checkSupport()?(this.init(),this):(e.error("Browser not supported by jQuery.dmUploader"),this.settings.onFallbackMode.call(this.element),!1)};l.prototype.checkSupport=function(){if(void 0===window.FormData)return!1;return!new RegExp("/(Android (1.0|1.1|1.5|1.6|2.0|2.1))|(Windows Phone (OS 7|8.0))|(XBLWP)|(ZuneWP)|(w(eb)?OSBrowser)|(webOS)|(Kindle/(1.0|2.0|2.5|3.0))/").test(window.navigator.userAgent)&&!e('<input type="file" />').prop("disabled")},l.prototype.init=function(){var n=this;this.queue=[],this.queuePos=-1,this.queueRunning=!1,this.activeFiles=0,this.draggingOver=0,this.draggingOverDoc=0;var i=n.element.is("input[type=file]")?n.element:n.element.find("input[type=file]");return i.length>0&&(i.prop("multiple",this.settings.multiple),i.on("change."+t,function(t){var i=t.target&&t.target.files;i&&i.length&&(n.addFiles(i),e(this).val(""))})),this.settings.dnd&&this.initDnD(),0!==i.length||this.settings.dnd?(this.settings.onInit.call(this.element),this):(e.error("Markup error found by jQuery.dmUploader"),null)},l.prototype.initDnD=function(){var n=this;n.element.on("drop."+t,function(e){e.preventDefault(),n.draggingOver>0&&(n.draggingOver=0,n.settings.onDragLeave.call(n.element));var t=e.originalEvent&&e.originalEvent.dataTransfer;if(t&&t.files&&t.files.length){var i=[];n.settings.multiple?i=t.files:i.push(t.files[0]),n.addFiles(i)}}),n.element.on("dragenter."+t,function(e){e.preventDefault(),0===n.draggingOver&&n.settings.onDragEnter.call(n.element),n.draggingOver++}),n.element.on("dragleave."+t,function(e){e.preventDefault(),n.draggingOver--,0===n.draggingOver&&n.settings.onDragLeave.call(n.element)}),n.settings.hookDocument&&(e(document).off("drop."+t).on("drop."+t,function(e){e.preventDefault(),n.draggingOverDoc>0&&(n.draggingOverDoc=0,n.settings.onDocumentDragLeave.call(n.element))}),e(document).off("dragenter."+t).on("dragenter."+t,function(e){e.preventDefault(),0===n.draggingOverDoc&&n.settings.onDocumentDragEnter.call(n.element),n.draggingOverDoc++}),e(document).off("dragleave."+t).on("dragleave."+t,function(e){e.preventDefault(),n.draggingOverDoc--,0===n.draggingOverDoc&&n.settings.onDocumentDragLeave.call(n.element)}),e(document).off("dragover."+t).on("dragover."+t,function(e){e.preventDefault()}))},l.prototype.releaseEvents=function(){this.element.off("."+t),this.element.find("input[type=file]").off("."+t),this.settings.hookDocument&&e(document).off("."+t)},l.prototype.validateFile=function(t){if(this.settings.maxFileSize>0&&t.size>this.settings.maxFileSize)return this.settings.onFileSizeError.call(this.element,t),!1;if("*"!==this.settings.allowedTypes&&!t.type.match(this.settings.allowedTypes))return this.settings.onFileTypeError.call(this.element,t),!1;if(null!==this.settings.extFilter){var n=t.name.toLowerCase().split(".").pop();if(e.inArray(n,this.settings.extFilter)<0)return this.settings.onFileExtError.call(this.element,t),!1}return new a(t,this)},l.prototype.addFiles=function(e){for(var t=0,n=0;n<e.length;n++){var i=this.validateFile(e[n]);if(i){!1!==this.settings.onNewFile.call(this.element,i.id,i.data)&&(this.settings.auto&&!this.settings.queue&&i.upload(),this.queue.push(i),t++)}}return 0===t?this:(this.settings.auto&&this.settings.queue&&!this.queueRunning&&this.processQueue(),this)},l.prototype.processQueue=function(){return this.queuePos++,this.queuePos>=this.queue.length?(0===this.activeFiles&&this.settings.onComplete.call(this.element),this.queuePos=this.queue.length-1,this.queueRunning=!1,!1):(this.queueRunning=!0,this.queue[this.queuePos].upload())},l.prototype.restartQueue=function(){this.queuePos=-1,this.queueRunning=!1,this.processQueue()},l.prototype.findById=function(e){for(var t=!1,n=0;n<this.queue.length;n++)if(this.queue[n].id===e){t=this.queue[n];break}return t},l.prototype.cancelAll=function(){var e=this.queueRunning;this.queueRunning=!1;for(var t=0;t<this.queue.length;t++)this.queue[t].cancel();e&&this.settings.onComplete.call(this.element)},l.prototype.startAll=function(){if(this.settings.queue)this.restartQueue();else for(var e=0;e<this.queue.length;e++)this.queue[e].upload()},l.prototype.methods={start:function(t){if(this.queueRunning)return!1;var i=!1;return void 0===t||(i=this.findById(t))?i?(i.status===r&&(i.status=n),i.upload()):(this.startAll(),!0):(e.error("File not found in jQuery.dmUploader"),!1)},cancel:function(t){var n=!1;return void 0===t||(n=this.findById(t))?n?n.cancel(!0):(this.cancelAll(),!0):(e.error("File not found in jQuery.dmUploader"),!1)},reset:function(){return this.cancelAll(),this.queue=[],this.queuePos=-1,this.activeFiles=0,!0},destroy:function(){this.cancelAll(),this.releaseEvents(),this.element.removeData(t)}},e.fn.dmUploader=function(n){var i=arguments;if("string"!=typeof n)return this.each(function(){e.data(this,t)||e.data(this,t,new l(this,n))});this.each(function(){var s=e.data(this,t);s instanceof l?"function"==typeof s.methods[n]?s.methods[n].apply(s,Array.prototype.slice.call(i,1)):e.error("Method "+n+" does not exist in jQuery.dmUploader"):e.error("Unknown plugin data found by jQuery.dmUploader")})}});
function formatBytes(a,b=2){if(!+a)return"0 Bytes";const c=0>b?0:b,d=Math.floor(Math.log(a)/Math.log(1024));return`${parseFloat((a/Math.pow(1024,d)).toFixed(c))} ${["Bytes","KB","MB","GB","TB","PB","EB","ZB","YB"][d]}`}
function fixFilename(e){return e=(e=(e=(e=(e=(e=(e=(e=(e=(e=(e=(e=(e=e.toLowerCase()).replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a")).replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e")).replace(/ì|í|ị|ỉ|ĩ/g,"i")).replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o")).replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u")).replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y")).replace(/đ/g,"d")).replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g,"")).replace(/\u02C6|\u0306|\u031B/g,"")).replace(/ + /g,"_")).trim()).replace(/!|@|%|\^|\*|\(|\)|\+|\=| |\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g,"_")}
function update_file_status(id, data) {
    const obj = JSON.parse(data);
    console.log(data);
    if (!obj.data.id) {
        console.log('Alert error');
    } else {
        pdfs.push({
            'id_upload': id,
            'id_be': obj.data.id
        });

    }

}

function ui_converting() {
    $('#handle-upload').removeClass('active');
    $('#task-process').addClass('active');
    $('.converter-footer').addClass('disabled');
}

function ui_show_preview(id, file, fileType) {
    
    var filename = file.name.replace(/\.[^/.]+$/, "");
    filename = fixFilename(filename);
    
    if(file.type == "application/pdf" && (fileType === 'pdf' || fileType === '1')) {
        $('#pdfItems').append('<div class="pdf-item" id="' + id + '" data-filename="' + filename + '"><div class="file-info uploading"><div class="preview-icon"></div><div class="pdf-filename">' + file.name + '</div><div class="pdf-file-size">' + formatBytes(file.size) + '</div></div><div class="progress-bar"></div><div class="item-del" onclick="removeItem(\'' + id + '\')"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.3268 6.00028L11.0377 2.28935C11.2139 2.11354 11.3129 1.87496 11.3131 1.62611C11.3134 1.37726 11.2147 1.13851 11.0389 0.962393C10.8631 0.786273 10.6245 0.687206 10.3757 0.686986C10.1268 0.686766 9.88807 0.785412 9.71195 0.961221L6.00102 4.67216L2.29008 0.961221C2.11396 0.785101 1.87509 0.686157 1.62602 0.686157C1.37694 0.686157 1.13807 0.785101 0.961953 0.961221C0.785833 1.13734 0.68689 1.37621 0.68689 1.62528C0.68689 1.87436 0.785833 2.11323 0.961953 2.28935L4.67289 6.00028L0.961953 9.71122C0.785833 9.88734 0.68689 10.1262 0.68689 10.3753C0.68689 10.6244 0.785833 10.8632 0.961953 11.0393C1.13807 11.2155 1.37694 11.3144 1.62602 11.3144C1.87509 11.3144 2.11396 11.2155 2.29008 11.0393L6.00102 7.32841L9.71195 11.0393C9.88807 11.2155 10.1269 11.3144 10.376 11.3144C10.6251 11.3144 10.864 11.2155 11.0401 11.0393C11.2162 10.8632 11.3151 10.6244 11.3151 10.3753C11.3151 10.1262 11.2162 9.88734 11.0401 9.71122L7.3268 6.00028Z" fill="#5C5D6B"></path></svg></div></div>');
        $('#upload').addClass('disabled');
        $('#converter').addClass('d-block');
        $('#convert-wrapper').removeClass('disabled');
        $('#handle-upload').addClass('active');
        $('body').addClass('d-scroll');
    } else if ((file.type === "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || file.type === "application/msword") && (fileType === 'word' || fileType === '1')) {
        $('#pdfItems').append('<div class="pdf-item" id="' + id + '" data-filename="' + filename + '"><div class="file-info uploading"><div class="preview-icon preview-icon--word"></div><div class="pdf-filename">' + file.name + '</div><div class="pdf-file-size">' + formatBytes(file.size) + '</div></div><div class="progress-bar"></div><div class="item-del" onclick="removeItem(\'' + id + '\')"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.3268 6.00028L11.0377 2.28935C11.2139 2.11354 11.3129 1.87496 11.3131 1.62611C11.3134 1.37726 11.2147 1.13851 11.0389 0.962393C10.8631 0.786273 10.6245 0.687206 10.3757 0.686986C10.1268 0.686766 9.88807 0.785412 9.71195 0.961221L6.00102 4.67216L2.29008 0.961221C2.11396 0.785101 1.87509 0.686157 1.62602 0.686157C1.37694 0.686157 1.13807 0.785101 0.961953 0.961221C0.785833 1.13734 0.68689 1.37621 0.68689 1.62528C0.68689 1.87436 0.785833 2.11323 0.961953 2.28935L4.67289 6.00028L0.961953 9.71122C0.785833 9.88734 0.68689 10.1262 0.68689 10.3753C0.68689 10.6244 0.785833 10.8632 0.961953 11.0393C1.13807 11.2155 1.37694 11.3144 1.62602 11.3144C1.87509 11.3144 2.11396 11.2155 2.29008 11.0393L6.00102 7.32841L9.71195 11.0393C9.88807 11.2155 10.1269 11.3144 10.376 11.3144C10.6251 11.3144 10.864 11.2155 11.0401 11.0393C11.2162 10.8632 11.3151 10.6244 11.3151 10.3753C11.3151 10.1262 11.2162 9.88734 11.0401 9.71122L7.3268 6.00028Z" fill="#5C5D6B"></path></svg></div></div>');
        $('#upload').addClass('disabled');
        $('#converter').addClass('d-block');
        $('#convert-wrapper').removeClass('disabled');
        $('#handle-upload').addClass('active');
        $('body').addClass('d-scroll');
    } else {
        alert('Unsupported format');
    }
}

// UI 
function ui_update_pdf_progress(id, percent, addclasss, active) {
    console.log('id: ' + id + ' - ' + percent);
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


function getItems() {
    countPDF = $(".pdf-item").length;
    var items = [];
	for (var i = 0; i < countPDF; i++) {
        countPdfArr = pdfs.length;
        for (var j = 0; j < countPdfArr; j++) {
            if ($(".pdf-item")[i].id === pdfs[j]['id_upload']) {
                items.push({"id": pdfs[j]['id_be'], "name": $("#" + pdfs[j]['id_upload']).data("filename")});
            }
        }
	}
    return items;
}

function getTaskId(datasend) {
    $.ajax({
		url: "/tasks.php",
		method: "POST",
		data: datasend,
		success: function(response) {
            obj = jQuery.parseJSON(response);
            getTaskResult(obj.task_id);
		},
		error: function() {
			showAlertError("Can't connect to api, please try again");
		}

	});
}


function getTaskResult (id) {
    $.ajax({
		url: "/tasks.php?id=" + id,
		method: "get",
		success: function(response) {
            obj = jQuery.parseJSON(response);
            if (obj.task_status === "PENDING" || obj.task_status === "STARTED") {
                setTimeout(function() {getTaskResult (id)}, 200);
            } else if (obj.task_status === "SUCCESS") {
                var dataResult = obj.task_result.data;
                showResult(obj.task_result.data);
            } else {
                showAlertError(obj.task_result.error);
            }
		},
		error: function() {
			showAlertError("Can't connect to api, please try again");
		}

	});

}


function showAlertError(content) {
    alert(content);
    $('#handle-upload').addClass('active');
    $('#task-process').removeClass('active');
    $('.converter-footer').removeClass('disabled');
}

function showResult(data_result) {
    $('#convert-wrapper').addClass('disabled');
    $('#download-final').addClass('active');
    $("#download-btn").attr("href", data_result.url);
    $("#downloadFilename").text(data_result.file_name + '.' + data_result.output_file);
    if (data_result.output_file === 'pdf') {
        $('#download-icon').html('<div class="preview-icon"></div>');
    } else if (data_result.output_file === 'docx') {
        $('#download-icon').html('<div class="preview-icon preview-icon--word"></div>');
    } else if (data_result.output_file === 'zip') {
        $('#download-icon').html('<div class="preview-icon preview-icon--zip"></div>');
    }
    $("#dlFileSize").text(formatBytes(data_result.file_size));
    if($('.settings')){
        $('.settings').html('<div class="adload"><img src="https://place-hold.it/300x500?text=ADS" alt="" width="100%"></div>');
        $('.btn-settings').addClass('disabled');
    } else {
        console.log('khong ton tai');
    }
}

