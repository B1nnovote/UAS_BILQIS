<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>UAS XI BILQIS</title>
  </head>
  <body>
    <!-- Jumbotron -->
    <div class="jumbotron text-center mt-5 pt-5">
      <img src="image/yayasanlogo.jpeg" class="img-thumbnail rounded-circle" alt="..."  >
      <h1 style="color:black;" class="lead pt-3"><b>PENGGAJIHAN</b>
      <p class="lead"><b>GURU KARYAWAN YAYASAN ASSALAAM</b></p></h1>
    </div>
    <!-- Akhir jumbotron -->

     <!-- data penggajian -->
     
    <section>
       <div class="container mt-5">
      <div class="row">
    </div>
 <div class="row">
 <div class="col">
 <div class="card">
  <h4  style=' background-color: #008000; color: white;' class="card-header">Data Penggajian</h4>
  <div class="card-body">
     <form method="post">
  <div class="mb-2">
    <label class="form-label"><h6>No</h6></label>
    <input required placeholder="No" name="no" type="number" class="form-control" >
  </div>
  <div class="mb-2">
    <label class="form-label"><h6>Nama</h6></label>
    <input required placeholder="Nama" name="nama" type="text" class="form-control">
  </div>
  <div class="mb-2">
    <label  class="form-label"><h6>Unit Pendidikan</h6></label>
    <select required name="unit" class="form-control">
    <option value="" disabled selected>Pilih Unit Pendidikan</option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="MI">MI</option>
                        <option value="SMP">SMP</option>
                        <option value="MTS">MTS</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                        <option value="MA">MA</option>
                        
                    </select>
  </div>
  <div class="mb-5">
    <label class="form-label"><h6>Tanggal Gajian</h6></label>
    <input required name="tglgaji" type="date" class="form-control">
  </div>
         <!-- gaji-->
         <table align="left" width="48%">
          <tr>
          <td><h3><center>Gaji</center></h3></td>
          </tr>
          <tr>
            <td>
    <div class="mb-2">
    <label class="form-label"><h6>Jabatan</h6></label>
    <select required  placeholder="Pilih Jabatan" name="jabatan" class="form-control">
    <option value="" disabled selected>Pilih Jabatan</option>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                        <option value="Wakasek">Wakasek</option>
                        <option value="Guru">Guru</option>
                        <option value="Karyawan">Karyawan</option>                       
                    </select>
  </div>
  <div class="mb-2">
    <label class="form-label"><h6>Lama Kerja</h6></label>
    <input required  placeholder="Lama Kerja" name="lamakerja" type="text" class="form-control">
  </div>
  <div class="mb-2">
    <label class="form-label"><h6>Status Kerja</h6></label>
    <select required placeholder="Pilih Status Kerja" name="statuskerja" class="form-control">
    <option value="" disabled selected>Pilih Status Kerja</option>
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>                  
                    </select>
  </div>
          </td>
          </tr>
         </table>

            <!-- gaji-->
            <table align="right" width="48%">
          <tr>
          <td><h3><center>Potongan</center></h3></td>
          </tr>
          <tr>
            <td>
    <div class="mb-2">
    <label class="form-label"><h6>BPJS</h6></label>
    <input required  placeholder="BPJS" name="bpjs" type="text" class="form-control">

  </div>
  <div class="mb-2">
    <label class="form-label"><h6>Pinjaman</h6></label>
    <input required placeholder="Pinjaman" name="pinjaman" type="text" class="form-control">
  </div>
  <div class="mb-2">
    <label class="form-label"><h6>Cicilan</h6></label>
    <input required placeholder="Tabungan" name="cicilan" type="text" class="form-control">
  </div>                              
  <div class="mb-2">
    <label class="form-label"><h6>Infaq</h6></label>
    <input required placeholder="Lainnya" name="infaq" type="text" class="form-control">
  </div>
          </td>
          </tr>  
         </table>
         
<table width="100%" align="center">
  <tr>
    <td><center><button type="submit" name="proses" class="btn btn-success">Proses</button></center></td>
  </tr>
</table>
   </form>
           </div>
          </div>
         </div>
        </div>
      </div>
    </section>
<br><br><br>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
    

<?php

if (isset($_POST['proses'])) {
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $unitpendidikan = $_POST['unit'];
  $tglgaji = $_POST['tglgaji'];
  $jabatan = $_POST['jabatan'];
  $gaji = $_POST['jabatan'];
  $lamakerja = $_POST['lamakerja'];
  $statuskerja = $_POST['statuskerja'];
  $bpjs = $_POST['bpjs'];
  $pinjaman = $_POST['pinjaman'];
  $cicilan = $_POST['cicilan'];
  $infaq = $_POST['infaq'];

    
switch ($gaji) {
  case 'Kepala Sekolah': $gaji = 10000000;
      break;
   case 'Wakasek': $gaji = 7000000;
      break;
   case 'Guru': $gaji = 5000000;
      break; 
  case 'Karyawan': $gaji = 2500000;
      break; 
  default :
  $gaji = 0;
}

if($statuskerja == "Tetap" ){
  $bonus = 1000000;
  }else{
   $bonus = 0;
  }

  
// total pembayaran
$gajibersih = ($gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq);


class penggajihan{
    
  function strukgaji($no,$nama,$unitpendidikan,$tglgaji,$jabatan,$gaji,$lamakerja,
  $statuskerja,$bonus,$bpjs,$pinjaman,$cicilan,$infaq,$gajibersih){
    echo "<br><br><br>
    <center> 
    <section class='d-flex justify-content-center'>
    <div class='card ' style='width: 30%;'>
    <div style='font-size: 13px; background-color: #008000; color: white; padding: 10px;' class='card-header text-center '>
    <b>YAYASAN ASSALAAM <p>Gaji Bulan: $tglgaji <br> diberikan kepada $nama</b>
    <p>create with 🤍 by <a href='https://www.instagram.com/rofflly/' class='text-white '>Bilqis</a></p>
    </div>
    <div style=' border: 1px solid #008000;' class='card-body'>
      <table>
        <tr>
        <td>No</td>
            <td>:</td>
            <td>$no </td>
        </tr>
        <tr>
        <td>Nama</td>
            <td>:</td>
            <td>$nama</td>
        </tr>
        <tr>
        <td>Unit Pendidikan</td>
            <td>:</td>
            <td>$unitpendidikan </td>
        </tr>
        <tr>
        <td>Tanggal Gaji</td>
            <td>:</td>
            <td>$tglgaji</td>
        </tr>
        <tr>
        <td>Jabatan</td>
            <td>:</td>
            <td>$jabatan</td>
        </tr>
        <tr>
        <td>Gaji</td>
            <td>:</td>
            <td>Rp." . number_format($gaji, 0, ',', '.') . "</td>
        </tr>
        <tr>
        <td>Lama Kerja</td>
            <td>:</td>
            <td>$lamakerja</td>
        </tr>
        <td>Status Kerja</td>
            <td>:</td>
            <td>$statuskerja</td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td>:</td>
            <td>Rp." . number_format($bonus, 0, ',', '.') . "</td>
        </tr>
        <tr>
        <td>BPJS</td>
            <td>:</td>
            <td>Rp." . number_format($bpjs, 0, ',', '.') . "</td>
        </tr>
        <tr>
        <td>Pinjaman</td>
            <td>:</td>
            <td>Rp." . number_format($pinjaman, 0, ',', '.') . "</td>
        </tr>
        <tr>
            <td>Cicilan</td>
            <td>:</td>
            <td>Rp." . number_format($cicilan, 0, ',', '.') . "</td>
        </tr>
         <tr>
        <td>Infaq</td>
            <td>:</td>
            <td>Rp." . number_format($infaq, 0, ',', '.') . "</td>
        </tr>
        </table>
         <table>
          <tr><td><b>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</b></td></tr>
            </table>
        <table>
        <tr>
            <td>Gaji Bersih</td>
            <td></td>            
            <td></td> 
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            <td></td> 
            <td></td>
            <td></td>
            <td></td><td></td><td></td><td></td><td></td><td></td><td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            <td></td> 
            <td></td>
            <td></td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td>:</td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>  
            <td></td>  
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td>
            <td>Rp." . number_format($gajibersih, 0, ',', '.') . "</td>
             <td></td>
            <td></td> 
            <td></td>
            <td></td>
            <td></td> 
            <td></td>
        </tr>
    </table>  
    </center>
    <br><br><br>"; 

                              }
}


$cetak = new penggajihan();
echo $cetak-> strukgaji($no,$nama,$unitpendidikan,$tglgaji,$jabatan,$gaji,$lamakerja,
$statuskerja,$bonus,$bpjs,$pinjaman,$cicilan,$infaq,$gajibersih);
}
 