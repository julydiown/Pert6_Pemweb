<?php

//menerima nilai dari kiriman form 
$no_sipi=$_GET["no_sipi"];
$nama_pemilik=$_GET["nama_pemilik"];
$nama_kapal=$_GET["nama_kapal"];
$tgl_berangkat=$_GET["tgl_berangkat"];
$tgl_datang=$_GET["tgl_datang"];
$tgl_bongkar=$_GET["tgl_bongkar"];
$alat_tangkap=$_GET["alat_tangkap"];
$nama_pelabuhan=$_GET["nama_pelabuhan"];
$daerah_asal=$_GET["daerah_asal"];
$jenis_ikan=$_GET["jenis_ikan"];
$volume_jual=$_GET["volume_jual"];
$volume_tidakjual=$_GET["volume_tidakjual"];
$harga=$_GET["harga"];

//menampilkan nilai 
echo "<h2>Informasi anda</h2>";
echo "<hr><h4>Identitas:</h4><hr>";
echo "Nomor SIPI: $no_sipi <br>";
echo "Nama Pemilik: $nama_pemilik <br>";
echo "Nama Kapal: $nama_kapal <br>";
echo "Nama Pelabuhan: $nama_pelabuhan <br>";
echo "Daerah Asal: $daerah_asal <br>";
echo "Jenis Alat Tangkap: $alat_tangkap <br>";
echo "Tanggal Keberangkatan: $tgl_berangkat <br>";
echo "Tanggal Kedatangan: $tgl_datang <br>";
echo "Tanggal Bongkar: $tgl_bongkar <br>";
echo "<hr><h4>Produksi:</h4><hr>";
echo "Jenis ikan: $jenis_ikan <br>";
echo "Volume yang dijual (kg): $volume_jual <br>";
echo "Volume yang tidak dijual (kg): $volume_tidakjual <br>";
echo "Harga Produsen/kg (Rp) : $harga <br>";


    
?>