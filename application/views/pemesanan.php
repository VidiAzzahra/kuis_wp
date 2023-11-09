<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .carousel-text {
            position: absolute;
            top: -5%;
            left: -10%;
            transform: translate(100%, 100%);
            color: white;
            text-align: center;
        }
        .card{
            position: absolute;
            top: -20%;
            left: -25%;
            transform: translate(100%, 100%);
        }
        .card-body h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url()?>assets/img/2.jpg" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-text">
            <h1>PEMESANAN TIKET ONLINE</h1>
            <p>Pemesanan tiket pesawat jadi lebih mudah </p>
    </div>
</div>
    <div class="card" style="width: 50%;">
  <div class="card-body">
    <h3 class="card-title">TIKET ONLINE JAKARTA - MALAYSIA</h3>
    <hr>
    <table>
        <tr>
            <form action="<?= base_url(). 'pesawat/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
            <table style="margin:20px auto;">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" class="form-control" name="nama" id="nama"></td>
            </tr>
            <tr> 
                <td><label for="kode_pesawat">Pilih Kode Pesawat</label></td>
                <td><select class="form-select" aria-label="Default select example" name="kode_pesawat">
                    <option selected>Pilih</option>
                    <option value="Garuda">GRD</option>
                    <option value="Merpati">MPT</option>
                    <option value="Batavia">BTV</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pilih Kelas</td>
                <td><div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="kelas" id="inlineRadio1" value="Eksekutif">
  <label class="form-check-label" for="inlineRadio1">Eksekutif</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="kelas" id="inlineRadio2" value="Bisnis">
  <label class="form-check-label" for="inlineRadio2">Bisnis</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="kelas" id="inlineRadio2" value="Ekonomi">
  <label class="form-check-label" for="inlineRadio2">Ekonomi</label>
</div> </td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td><select class="form-select" aria-label="Default select example" name="jml_tiket">
                    <?php
                    $data = array(1,2,3,4,5,6,7,8,9,10);
                    foreach($data as $jml_tiket){
                        echo"<option value='$jml_tiket'>$jml_tiket</option>";
                    }
                    ?>
                </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"> <input type="reset" value="Batal"> <?php echo anchor('pesawat/index','<input type=button value=Kembali>'); ?></td>
            </tr>
        </table>
            </form>
        </tr>
    </table>
  </div>
</div>
<!-- JavaScript untuk mengatur carousel -->
<script>
        $('.carousel').carousel();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>