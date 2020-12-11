<?php include "function.php";
$table="firm";
$id= $_GET['firm_id'];
$conn = connect();
$data = updatelist($id,$table);

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

    <form action="updatesuccess.php" method="post">
    <div class="mb-3" style="display:none" >
            <label for="exampleInputEmail1" class="form-label">Ad Soyadı</label>
            <input type="text" name="firm_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ad soyad giriniz" value="<?php echo $data['firm_id'];?>">
           
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ad Soyadı</label>
            <input type="text" name="firm_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ad soyad giriniz" value="<?php echo $data['firm_name'];?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" name="firm_username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email adresini giriniz" value="<?php echo $data['firm_username'];?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" name="firm_description" class="form-control" id="exampleInputPassword1" placeholder="Şifreyi giriniz" value="<?php echo $data['firm_description'];?>">
        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
       
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>