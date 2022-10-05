<?php

$allowUpload = true;
$allowed = ["pdf" => "application/pdf"];
// Cỡ lớn nhất được upload
$maxfilesize = 5 * 1048576; // 5MB

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode([
        "status" => "error",
        "message" => "Must Post Data",
    ]);
    die();
}

if (!isset($_FILES["file"])) {
    echo json_encode([
        "status" => "error",
        "message" => "Unstructured data",
    ]);
    die();
}

if ($_FILES["file"]["error"] != 0) {
    echo json_encode([
        "status" => "error",
        "message" => "Upload data error",
    ]);
    die();
}

// $target_dir = "uploads/" . date("Y") . "/" . date("m") . "/" . date("d") . "/";

// if (!file_exists($target_dir)) {
//     mkdir($target_dir, 0777, true);
// }

// $target_file = $target_dir . basename($_FILES["file"]["name"]);

// $ext = pathinfo($target_file, PATHINFO_EXTENSION);

// if (!array_key_exists($ext, $allowed)) {
//     echo json_encode([
//         "status" => "error",
//         "message" => "The data is not in PDF format.",
//     ]);
//     die();
//     $allowUpload = false;
// }

// if (file_exists($target_file)) {
//     $baseName = basename($target_file, ".pdf");
//     for ($i = 1; $i < 200; $i++) {
//         if (!file_exists($target_dir . $baseName . "-" . $i . "." . $ext)) {
//             $target_file = $target_dir . $baseName . "-" . $i . "." . $ext;
//             break;
//         }
//     }
// }

// if ($_FILES["file"]["size"] > $maxfilesize) {
//     echo json_encode([
//         "status" => "error",
//         "message" => "Do not upload images larger than" . ($maxfilesize * 0.001) . " (kb).",
//     ]);
//     die();
//     $allowUpload = false;
// }

// if ($allowUpload) {
//     if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
//         echo json_encode([
//             "status" => "ok",
//             "name" => basename($_FILES["file"]["name"]),
//             "path" => $target_file,
//         ]);
//     } else {
//         echo json_encode([
//             "status" => "error",
//             "message" => "An error occurred while uploading the file.",
//         ]);
//     }
// }


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://34.143.135.203:8000/api/v1/uploads',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new CURLFILE($_FILES["file"]["tmp_name"])),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
