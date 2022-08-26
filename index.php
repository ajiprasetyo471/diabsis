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
  <title>BERANDA | DIABSIS</title>
</head>

<body>

  <head>
    <?php include "header.php" ?>
  </head>
  <main>
    <section class="jumbotron container-fluid">
      <div class="row jumbo-container">
        <div class="jumbo-1-cont container col-sm">
          <div class="jumbo-1">
            <h1 class="heading-title display-5 fw-bold text-light">
              Diagnosa diabetes mudah untuk semua orang
            </h1>
            <p class="col-md-8 fs-4 text-light">
              Cara baru untuk mengubah perawatan diagnosis diabetes Anda
              menjadi yang paling mudah dan efektif
            </p>
            <button onclick="location.href='diagnosa.php'" class="btn btn-success btn-lg" type="button">
              Coba Gratis <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </div>
        <div class="col-sm jumbo-2"></div>
      </div>
    </section>
    <div class="container">
      <section class="desc container-fluid">
        <h1 class="heading-title desc-title display-5 fw-bold blue-text">
          Merubah cara untuk diagnosa dan perawatan diabetes anda
        </h1>
        <div class="row desc-cont">
          <div class="col desc-item">
            <i class="fa-solid fa-stethoscope text-success desc-icon"></i>
            <p class="fs-4 blue-text">Diagnosa penyakit diabetes</p>
            <button type="button" onclick="location.href='diagnosa.php'" class="btn btn-light p-0 blue-text">
              Selengkapnya
              <i class="fa-solid fa-circle-arrow-right text-success"></i>
            </button>
          </div>
          <div class="col desc-item">
            <i class="fa-solid fa-clock-rotate-left text-success desc-icon"></i>
            <p class="fs-4 blue-text">Histori diagnosa diabetes</p>
            <button type="button" onclick="location.href='histori.php'" class="btn btn-light p-0 blue-text">
              Selengkapnya
              <i class="fa-solid fa-circle-arrow-right text-success"></i>
            </button>
          </div>
          <div class="col desc-item">
            <i class="fa-solid fa-file-lines text-success desc-icon"></i>
            <p class="fs-4 blue-text">Informasi data diabetes</p>
            <button type="button" onclick="location.href='data.php'" class="btn btn-light p-0 blue-text">
              Selengkapnya
              <i class="fa-solid fa-circle-arrow-right text-success"></i>
            </button>
          </div>
        </div>
      </section>
    </div>
  </main>
  <footer class="footer py-4">
    <?php include "footer.php" ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
</body>

</html>