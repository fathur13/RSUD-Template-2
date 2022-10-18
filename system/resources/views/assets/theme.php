<?php
// if ($nama_website) {
    $header = 'http://127.0.0.1:8000/api/theme/header';
    $dheader = file_get_contents($header);
    $resulthe1 = json_decode($dheader, true);

    $favicon = $resulthe1['data'][0]['favicon'];
    $nama_website = $resulthe1['data'][0]['nama_website'];
    $singkatan_website = $resulthe1['data'][0]['singkatan_website'];
    $tag_line_website = $resulthe1['data'][0]['tag_line_website'];
    $alamat = $resulthe1['data'][0]['alamat'];
    $phone = $resulthe1['data'][0]['phone'];
    $deskripsi_singkat = $resulthe1['data'][0]['deskripsi_singkat'];
    $logo = $resulthe1['data'][0]['logo'];
    $img_background_utama = $resulthe1['data'][0]['img_background_utama'];
    $img_background_1 = $resulthe1['data'][0]['img_background_1'];
    $img_background_2 = $resulthe1['data'][0]['img_background_2'];
    $img_background_3 = $resulthe1['data'][0]['img_background_3'];
    $text_utama = $resulthe1['data'][0]['text_utama'];

    $content = 'http://127.0.0.1:8000/api/theme/content';
    $dcontent = file_get_contents($content);
    $resulthe2 = json_decode($dcontent, true);

    $judul = $resulthe2['data'][0]['judul'];
    $tentang = $resulthe2['data'][0]['tentang'];
    $maklumat = $resulthe2['data'][0]['maklumat'];
    $layanan = $resulthe2['data'][0]['layanan'];
    $selayang = $resulthe2['data'][0]['selayang'];

    $footer = 'http://127.0.0.1:8000/api/theme/footer';
    $dfooter = file_get_contents($footer);
    $resulthe3 = json_decode($dfooter, true);

    $falamat = $resulthe3['data'][0]['alamat'];
    $ftelepon = $resulthe3['data'][0]['telepon'];
    $posisi = $resulthe3['data'][0]['posisi'];
    $femail = $resulthe3['data'][0]['email'];