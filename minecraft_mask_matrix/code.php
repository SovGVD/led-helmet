<?php

$url = $argv[1];
$tmpfname = tempnam("img", time().".png");
file_put_contents($tmpfname, file_get_contents($url));

$img = imagecreatefrompng($tmpfname);
//imagefilter($img, IMG_FILTER_BRIGHTNESS, -30);
imagefilter($img, IMG_FILTER_CONTRAST, -10);

$face = [
    'offset' => [8,8],
    'size'   => [8,8]
];


function getCode(&$img, $p) {
    $r = [];
    for ($y = 0; $y < $p['size'][1]; $y++) {
        for ($x = 0; $x < $p['size'][0]; $x++) {
            $rgb = imagecolorat($img, $x + $p['offset'][0], $y + $p['offset'][1]);
            $r[] = [($rgb >> 16) & 0xFF, ($rgb >> 8) & 0xFF, $b = $rgb & 0xFF];
        }
    }
    return $r;
}

function h($d) {
    return "0x".substr("0000".dechex($d), -2);
}

function arduinoArray($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        //print $arr[$i][0].", ".$arr[$i][1].", ".$arr[$i][2].", ";
        print h($arr[$i][0]).", ".h($arr[$i][1]).", ".h($arr[$i][2]).", ";
    }
    print "\n";
}

arduinoArray(
    getCode($img, $face)
);

//imagepng($img, $tmpfname."_done_.png");
unlink($tmpfname);
