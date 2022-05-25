<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veri Tabanına ürün Ekleme</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="col-md-3 mx-auto mb-6">
    <form action="eklekontrol.php" method="post">
        <input type="text" placeholder="Ürün Cinsi Ekle ..." name="cinsi"><br><br>
        <input type="text" placeholder="Ürün Marka Ekle ..." name="marka"><br><br>
        <input type="text" placeholder="Ürün Beden Ekle ..." name="beden"><br><br>
        <input type="text" placeholder="Ürün Renk Ekle ..." name="renk"><br><br>
        <input type="text" placeholder="Ürün Fiyat Ekle ..." name="fiyat"><br><br>
        <button>EKLE</button>
    </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>