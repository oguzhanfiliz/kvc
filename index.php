<?php include "function.php";
$table="user";
$conn = connect();
$data = listView("user");
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

  <div class="row">

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">İşlem</th>
        <th> <a href="register.php"> <button type="button" class="btn btn-success">Yeni ekle</button></th></a>
    </tr>
  </thead>

  <tbody>
<!--  --><?php // var_dump(count($listData)); ?>
<?php /*while($listData = mysqli_fetch_assoc($data) ){ */?>
<?php foreach($data as $item){ ?>
    <tr>
      <th scope="row"><?php echo $item['id']; ?></th>
      <td><?php echo $item['username']; ?></td>
      <td><?php echo $item['pas']; ?></td>
      <td><?php echo $item['email']; ?></td>
        <td>
            <a href=""><button type="button" class="btn btn-success">Düzenle</button></a>
            <a href="<?php  echo "delete.php?id=".$item['id'] ?>"> <button type="button" class="btn btn-danger">sil</button></a>

        </td>
    </tr>
  <?php } ?>
  </tbody>
  </table>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  
  </body>
</html>