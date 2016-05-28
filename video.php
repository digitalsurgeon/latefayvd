<?php
//error_reporting(0);
const OK = 1;
const NO_INPUT_URL =  2;
const NO_VIDEO_DOWNLOAD_URL = 3;

const DB_NAME = "greenso1_videodownload";
const DB_USER = "greenso1_videodo";
const DB_PD = "UYTG3882gkgrwio%7/(9";

$response = array();
$result = OK;

$url = escapeshellarg($_GET['url']);
if (empty($url)) {
    $result = NO_INPUT_URL;
}
else {
    $videoUrl = json_decode(exec("/home1/greenso1/public_html/video_download/youtube-dl -g -j $url"));
    if ($videoUrl != TRUE) {
        $result = NO_VIDEO_DOWNLOAD_URL;
    }
}

$response["result"] = $result;
$response["video"] = $videoUrl;

$userAgent = $_SERVER['HTTP_USER_AGENT'];
if (stristr($userAgent, "curl") || stristr($userAgent, "wget")) {
    header("Location: " . $videoUrl->url);
}
else {
    header("Content-Type: application/json");
    echo json_encode($response);
}

if ($result == OK ) {
    $sql = "INSERT INTO `greenso1_videodownload`.`recent_url` (`id`, `url`, `time`, `ip`) VALUES (NULL, " . $url . ", CURRENT_TIMESTAMP, '" . $_SERVER['REMOTE_ADDR']  ."');";
    $dbCon = mysql_connect("localhost",DB_USER,DB_PD);
    if($dbCon) {
        $r = mysql_db_query(DB_NAME, $sql, $dbCon);
        mysql_close($dbCon);
    }
}
?>
