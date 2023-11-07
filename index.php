<?php
include 'config.php';

$result = mysqli_query($konek, "SELECT * FROM cv WHERE id ='4'");
if ($result) {
    $data = mysqli_fetch_array($result);
} else {
    echo "Gagal mengambil data dari database";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand">Curriculum Vitae</a>
        <a class="btn btn-outline-success" href="update.php">Update</a>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
        
                <img src="<?php echo $data['foto_path'] ?>" class="img-fluid rounded-circle" alt="Foto" width="250" height="250">
                <div class="bg-primary p-2 mt-3">
                    <h1><?php echo $data['nama'] ?></h1>
                    <p><?php echo $data['pendidikan'] ?></p>
                </div>
          
        </div>
        <div class="col-md-9">
      
                <h3>PENGALAMAN KERJA</h3>
                <p><?php echo $data['pengalaman_kerja'] ?></p>

                <div class="bg-warning p-3 mt-4">
                    <h3>KONTAK</h3>
                    <p><img src="mail.png" alt=""> <?php echo $data['email'] ?></p>
                    <p><img src="lok.png" alt=""> <?php echo $data['alamat'] ?></p>
                    <p><img src="pon.png" alt=""> <?php echo $data['telepon'] ?></p>
                    <p><img src="pon.png" alt=""> <?php echo $data['web'] ?></p>
                </div>

                <div class="bg-primary p-3 mt-3">
                    <h3>KETERAMPILAN</h3>
                    <p><?php echo $data['keterampilan'] ?></p>
                </div>
           
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
