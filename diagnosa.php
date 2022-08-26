<?php 
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>DIAGNOSA | DIABSIS</title>
</head>

<body>

  <head>
    <?php include "header.php" ?>
  </head>
  <main class="container">
    <!--  -->
    <div class="row mt-5">
      <div class="col-lg-12">
        <h2 class="heading-title display-5 fw-bold blue-text text-center my-5">Diagnosa Diabetes</h2>
        <?php if (isset($_GET['error'])) {echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        <strong>Ups! </strong> $_GET[error]
        </div>";
        } else { echo "";} ?>
        <form method="POST" action="hasil.php" name="diagnosa" enctype="form-data/multipart">
          <div class="form-group">
            <strong><label for="nama">Nama</label></strong>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama" name="nama"
                placeholder="Masukkan nama anda antara 3-30 karakter" onkeydown="return /[a-z ]/i.test(event.key)"
                minlength="3" maxlength="30" required>
            </div>
          </div>
          <br>
          <?php 
        $query = mysqli_query($koneksi,"SELECT * FROM input ORDER BY no ASC");
        $no=0;
        while ($data=mysqli_fetch_array($query)) {
        $no++;
        ?>
          <div class="form-group">
            <strong><label
                for="<?php echo $data['kode']; ?>"><?php echo $no . ". " . $data['deskripsi']; ?></label></strong>
            <div class="col-sm-8">
              <input id="<?php echo $data['kode']; ?>" class="form-control" type="number"
                name="<?php echo $data['kode']; ?>" <?php
              if ($data['kode'] == "OGTT") {
                echo "step='1' placeholder='masukkan jumlah nilai antara 44-199' min='44' max='199'";
              } elseif ($data['kode'] == "DBP") {
                echo "step='1' placeholder='masukkan jumlah nilai antara 20-122' min='20' max='122'";
              } elseif ($data['kode'] == "INS") {
                echo "step='1' placeholder='masukkan jumlah nilai antara 0-850' min='0' max='850'";
              } elseif ($data['kode'] == "BMI") {
                echo "step='0.1' placeholder='masukkan jumlah nilai antara 18.0-68.0' min='18.0' max='68.0'";
              } elseif ($data['kode'] == "AGE") {
                echo "step='1' placeholder='masukkan umur antara 21-81 tahun' min='21' max='81'";
              }
              ?> required>
            </div>
          </div><br>
          <?php }?></br>
          <button type="submit" class="btn btn-success" name="proses">Cek Diagnosa</button>
        </form>
      </div>
    </div>
    <!--  -->
  </main>
  <footer class="footer py-4">
    <?php include "footer.php" ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
</body>

</html>