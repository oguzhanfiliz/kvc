<?php include "function.php";
$table="user";
$conn = connect();
$data= listView($table);
$firm = listFirm("firm");
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
            <label for="email" class="form-label">Ad Soyad</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email adresini giriniz">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="formGroupExampleInput" aria-describedby="formGroupExampleInput" placeholder="Ad soyad giriniz">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Şifreyi giriniz">
        </div>


        <div class="form-group">
            <label for="firma_id" name="firm_id">Firma Seç:</label>
            <select class="form-control" id="firm_id" name="firm_id">
                <?php foreach ($firm as $item) {?>
                    <option value="<?php echo $item['firm_id'] ?>"><?php echo $item['firm_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Ekle</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>