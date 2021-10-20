<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

    <title>Pendataan Produksi Pelabuhan Perikanan</title>
    <style>
  table{
    border: 1px solid black;
    border-collapse: collapse;
    width:100%;
    text-align:center;    
    }
    th, td
    {
    border: 1px solid black;
    border-collapse: collapse;   
    }
    </style>

  </head>
  <body>
<header>
<div class="container-fluid">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <b>Dokumen</b>
      </div>
      <div class="col-4 text-center">
      <img src ="https://kkp.go.id/an-component/media/upload-gambar-pendukung/kkp/DATA%20KKP/2019/Logo%20KKP/KKP%20eng.png" width="80px" height="80px"></img>
      <br>
        <h4>Form Pendataan Produksi Pelabuhan Perikanan</h4>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      <b> Rahasia </b>
      </div>
    </div>
  </header>
    <div class="text-center"  style="background-color:Gray;">
      <hr>
      <h5> Identitas </h5>
      <hr>
    </div>
    <div class="container-fluid">
    <form action="simpan_get_form.php" method="get">
         <div class="form-group">
            <label>Nomor SIPI:</label>
            <input type="number" name="no_sipi" class="form-control" placeholder="Masukan Nomor SIPI" />
         </div>
	    <div class="form-group">
            <label>Nama Pemilik:</label>
            <input type="text" name="nama_pemilik" class="form-control" placeholder="Masukan Nama Pemilik" />
         </div>
         <div class="form-group">
            <label>Nama Kapal:</label>
            <input type="text" name="nama_kapal" class="form-control" placeholder="Masukan Nama Kapal" />
        </div>
         <div class="form-group">
            <label>Nama Pelabuhan:</label>
            <input type="text" name="nama_pelabuhan" class="form-control" placeholder="Masukan Nama Pelabuhan" />
        </div>
         <div class="form-group">
	     <label>Daerah Asal:</label>
	     <textarea name="daerah_asal" class="form-control" rows="5"placeholder="Masukan Daerah Asal" ></textarea>
        </div> 
        <div class="form-group">
            <label>Jenis Alat Tangkap:</label>
            <input type="text" name="alat_tangkap" class="form-control" placeholder="Masukan Nama Pelabuhan" />
        </div>
        <div class="form-group">
            <label>Tanggal Keberangkatan:</label>
            <input type="date" name="tgl_berangkat" class="form-control" />
        </div>
        <div class="form-group">
            <label>Tanggal Kedatangan:</label>
            <input type="date" name="tgl_datang" class="form-control" />
        </div>        
        <div class="form-group">
            <label>Tanggal Bongkar:</label>
            <input type="date" name="tgl_bongkar" class="form-control" />
         </div> 
     
    
        <div class="text-center"  style="background-color:Gray;">
      <hr>
      <h5> Produksi </h5>
      <hr>    
     </div>

    <table>
  <tr>
    <th> 
        <label>Jenis ikan</label>
    </th>
    <th> 
        <label>Volume yang dijual (kg)</label>
    </th>
    <th>
        <label>Volume yang tidak dijual (kg)</label>
    </th>
    <th>
        <label>Harga Produsen/kg (Rp)</label>
    </th>
  </tr>
  <tr>
    <td>
        <div class="form-group">
        <input type="text" name="jenis_ikan" class="form-control"/>   
        </div>
    </td>
    <td>
        <div class="form-group">
        <input type="number" name="volume_jual" class="form-control"/>   
        </div>
    </td>
    <td>
        <div class="form-group">
        <input type="number" name="volume_tidakjual" class="form-control"/>   
        </div>
    </td>
    <td>
        <div class="form-group">
        <input type="number" name="harga" class="form-control"/>   
        </div>
    </td>
    </table>

    <br>
    <br>

    <button type="submit" name="submit" class="btn btn-primary" text-align="center">Submit</button>

    </form>
  </body>
</html>