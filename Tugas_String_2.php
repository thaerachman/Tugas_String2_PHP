<?php
$nama ="Torich Haerachman";

function Nama_dpn($nama){
	return substr($nama, 0,6);
}
function ren_data($nama){
	return strlen($nama);
}
function Nama_blkg($nama){
	return substr($nama, 6);
}
echo Nama_dpn($nama);
echo ren_data($nama);
echo Nama_blkg($nama);

?>