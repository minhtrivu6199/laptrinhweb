<?php

$url='https://192.168.1.100';

$ch=curl_init();

$timeout=5; // thời gian đợi để lấy dữ liệu

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

$lines_string=curl_exec($ch); // lấy nội dung theo URL

curl_close($ch); // giải phóng tài liệu sau khi lấy dữ liệu

echo $lines_string; // hiển thị dữ liệu

?>