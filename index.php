<?php
if (isset($_GET["key"])) {
    $URLDATA = $_GET["key"];
    if ($URLDATA) {
        $s = '<html><head> <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" /><meta name="twitter:card" content="player" /><meta name="twitter:site" content="@harry" /><meta name="twitter:title" content="Name Here" /><meta name="twitter:description" content="Description" /> /><meta name="twitter:player:width" content="320" /><meta name="twitter:player:height" content="180" /><meta name="twitter:player:stream:content_type" content="video/mp4" />';
        
        $x = '<meta property="og:image" content="https://ss.donka.ga/' . $URLDATA . '.png" /><meta name="twitter:card" content="summary_large_image">';
        echo $s . $x;
    };
};
?>
