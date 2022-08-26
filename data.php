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
  <title>GEJALA | DIABSIS</title>
</head>

<body>

  <head>
    <?php include "header.php" ?>
  </head>
  <main class="container">
    <!--  -->
    <div class="row mt-5">
      <div class="col-lg-12">
        <h2 class="heading-title display-5 fw-bold blue-text text-center my-5">Daftar Gejala Penyakit Diabetes</h2>
        <table class="table table-bordered table-hover">
          <tr>
            <th>
              <center>NO</center>
            </th>
            <th>
              <center>KODE</center>
            </th>
            <th>
              <center>VARIABEL</center>
            </th>
            <th>
              <center>DESKRIPSI</center>
            </th>
            <th>
              <center>SATUAN</center>
            </th>
          </tr>
          <?php 
          include "connect.php";
            $query = mysqli_query($koneksi,"SELECT * FROM input ORDER BY no ASC");
            $no=0;
          while ($data=mysqli_fetch_array($query)) {
                $no++;
          ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['kode']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['deskripsi']; ?></td>
            <td><?php echo $data['satuan']; ?></td>
            <?php } ?>
          </tr>
        </table>
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