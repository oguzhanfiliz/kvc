<?php include "function.php";
$table="user";
$id= $_GET['id'];
$conn = connect();
$data = updatelist($id);
$firm = listFirm("firm")

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
            <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ad soyad giriniz" value="<?php echo $data['id'];?>">
           
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Ad Soyadı</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ad soyad giriniz" value="<?php echo $data['username'];?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email adresini giriniz" value="<?php echo $data['email'];?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Şifreyi giriniz" value="<?php echo $data['pas'];?>">
        </div>
        <div class="form-group">
            <label for="firm_id" name="firm_id">Firma Seç:</label>
            <select class="form-control" id="firm_id" name="firm_id">
                <?php foreach ($firm as $item) {?>
                    <option value="<?php echo $item['firm_id'] ?>" <?php if($data['firma_id']==$item['firm_id']){echo "selected";}else{echo "";} ?>><?php echo $item['firm_name'] ?></option>
                <?php } ?>
            </select>
        </div>
<br>
        <button type="submit" class="btn btn-primary">Güncelle</button>
       
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>