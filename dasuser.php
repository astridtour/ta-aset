<div>
  <a href="beranda.php?page=t-user"><button type="button" class="btn btn-success">Tambah</button></a>
  <button style="float: right;" class="btn btn-warning"><--Print--></button><hr>
  <h3>Data User</h3>
  <table class="table table-bordered table-sm" id="tabel">
    <thead>
      <tr>
        <th>No.</th>
        <th>ID</th>
        <th>User Name</th>
        <th>Level</th>
        <th>Kode Cabang</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      include_once 'modul/connection.php';
      $no = 1 ;
      $data = mysqli_query($konek, "SELECT * FROM  user_login");
      while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['user_id']; ?></td>
          <td><?php echo $d['user_name']; ?></td>
          <td><?php echo $d['level']; ?></td>
          <td><?php echo $d['password']; ?></td>
          <td>
          <a href="#">Edit</a>
          <a href="#">Delete</a>
          </td>
        </tr>
    </tbody>
    <?php
    }
    ?>
    </table>
</div>