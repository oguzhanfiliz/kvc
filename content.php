<div class="page-content-wrapper">
  <div class="container-fluid">

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
      }

      <tbody>
        <!--  --><?php // var_dump(count($listData)); ?>
        <?php while($listData = mysqli_fetch_assoc($data) ){ ?>
        <tr>
          <th scope="row"><?php echo $listData['id']; ?></th>
          <td><?php echo $listData['username']; ?></td>
          <td><?php echo $listData['password']; ?></td>
          <td><?php echo $listData['email']; ?></td>
          <td>
            <a href="#"><button type="button" class="btn btn-success">Düzenle</button></a>
            <a href="#"> <button type="button" class="btn btn-danger">sil</button></a>

          </td>
        </tr>
        <!--  --><?php } ?>
      </tbody>
    </table>
  </div>
</div>