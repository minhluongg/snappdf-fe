function formatBytes(a,b=2){if(!+a)return"0 Bytes";const c=0>b?0:b,d=Math.floor(Math.log(a)/Math.log(1024));return`${parseFloat((a/Math.pow(1024,d)).toFixed(c))} ${["Bytes","KB","MB","GB","TB","PB","EB","ZB","YB"][d]}`}

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