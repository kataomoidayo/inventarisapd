<?php

function kedaluwarsa ($tgl_kedaluwarsa, $tgl_sekarang){

$tgl_kedaluwarsa_lewat = explode("-", $tgl_kedaluwarsa);
$tgl_kedaluwarsa_lewat = $tgl_kedaluwarsa_lewat[2]."-".$tgl_kedaluwarsa_lewat[1]."-".$tgl_kedaluwarsa_lewat[0];

$tgl_sekarang_toujitsu = explode("-", $tgl_sekarang);
$tgl_sekarang_toujitsu = $tgl_sekarang_toujitsu[2]."-".$tgl_sekarang_toujitsu[1]."-".$tgl_sekarang_toujitsu[0];

$selisih = strtotime($tgl_sekarang_toujitsu)-strtotime($tgl_kedaluwarsa_lewat);

$selisih = $selisih/86400;

if ($selisih>=1) {
	$hari_tgl = floor($selisih);
}else{
	$hari_tgl = 0;
}
return $hari_tgl;
}

?>