<?php include "function.php";
$table="firm";
$conn = connect();
?>
<!doctype html>
<html lang="tr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>Kuvarssoft || Crm Yazılımı ön gösterimi</title>

</head>
<body>
<?php include "header.php" ?>
<div class="container">

    <form action="datasuccess.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Firma Adı</label>
            <input type="text" name="firm_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Firma Adını Giriniz.">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Firma Takma Adı</label>
            <input type="text" name="firm_username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Firma Takma Adını Giriniz.">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Firma Açıklaması</label>
            <input type="text" name="firm_description" class="form-control" id="exampleInputPassword1" placeholder="Firma Açıklamasını Giriniz">
        </div>




        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>