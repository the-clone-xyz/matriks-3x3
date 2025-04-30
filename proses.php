<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hasil Determinan Matriks 3x3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url("assets/bg.gif");
      background-size: cover;
      padding: 2rem;
    }
    .table-matrix td {
      width: 60px;
      height: 60px;
      vertical-align: middle;
      font-weight: bold;
      text-align: center;
    }
    .result-box {
      background: white;
      border-radius: 1rem;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      padding: 2rem;
    }
    h1 {
      font-size: 1.5rem;
      font-weight: 600;
    }
    .math-expression {
      font-family: "Courier New", Courier, monospace;
      background-color: #eef;
      padding: 1rem;
      border-radius: 8px;
      white-space: pre-line;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="result-box mx-auto col-lg-8">
    <?php
    if (isset($_POST['input-matriks'])) {
        $a11 = $_POST["a11"]; $a12 = $_POST["a12"]; $a13 = $_POST["a13"];
        $a21 = $_POST["a21"]; $a22 = $_POST["a22"]; $a23 = $_POST["a23"];
        $a31 = $_POST["a31"]; $a32 = $_POST["a32"]; $a33 = $_POST["a33"];

        // Perhitungan determinan
        $plus1 = $a11 * $a22 * $a33;
        $plus2 = $a12 * $a23 * $a31;
        $plus3 = $a13 * $a21 * $a32;

        $min1  = $a13 * $a22 * $a31;
        $min2  = $a11 * $a23 * $a32;
        $min3  = $a12 * $a21 * $a33;

        $hasil_plus = $plus1 + $plus2 + $plus3;
        $hasil_min  = $min1 + $min2 + $min3;
        $hasil_akhir = $hasil_plus - $hasil_min;

        echo "<h1 class='text-center mb-4'>Determinan Matriks Ordo 3x3</h1>";

        // Tampilan Matriks
        echo "<table class='table table-bordered table-matrix mb-4'>
                <tr>
                    <td>{$a11}</td><td>{$a12}</td><td>{$a13}</td>
                    <td class='table-light'>{$a11}</td><td class='table-light'>{$a12}</td>
                </tr>
                <tr>
                    <td>{$a21}</td><td>{$a22}</td><td>{$a23}</td>
                    <td class='table-light'>{$a21}</td><td class='table-light'>{$a22}</td>
                </tr>
                <tr>
                    <td>{$a31}</td><td>{$a32}</td><td>{$a33}</td>
                    <td class='table-light'>{$a31}</td><td class='table-light'>{$a32}</td>
                </tr>
              </table>";

        // Tampilan rumus dan proses perhitungan
        echo "<div class='math-expression'>
|A| = ({$a11}×{$a22}×{$a33}) + ({$a12}×{$a23}×{$a31}) + ({$a13}×{$a21}×{$a32}) <span class='text-danger fw-bold'>-</span> ({$a13}×{$a22}×{$a31}) - ({$a11}×{$a23}×{$a32}) - ({$a12}×{$a21}×{$a33})<br>
     = ({$plus1} + {$plus2} + {$plus3}) - ({$min1} + {$min2} + {$min3}) <br>
     = {$hasil_plus} - {$hasil_min}<br>
     = {$hasil_akhir}
        </div>";
    } else {
        echo "<div class='alert alert-warning'>Silakan input matriks terlebih dahulu dari halaman utama.</div>";
    }
    ?>
    <div class="text-center mt-4">
      <a href="index.php" class="btn btn-primary">← Kembali</a>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
