<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to Data Science</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Integrasi REST API</h1>
        <hr>

        <h2>Prediksi Harga Rumah</h2>
        <form action="proses.php" method="post" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="predict_mode" value="regresi">
            <input class="form-input" type="number" id="ruangan" name="ruangan" placeholder="Banyaknya kamar">
            <input class="button" type="submit" value="Prediksi">
        </form>

        <hr>
        <h2>Prediksi Anjing atau Kucing</h2>
        <form action="proses.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="predict_mode" value="klasifikasi">
            <input type="file" name="file" id="file">
            <input class="button" type="submit" value="Prediksi">
        </form>
    </div>
</body>

</html>