<div>
  <a href="beranda.php?page=t-aset"><button type="button" class="btn btn-success">Tambah</button></a>
  <button style="float: right;" class="btn btn-warning"><--Print--></button><hr>
  <h3>Data Jenis Aset iventaris</h3>
  <table class="table table-bordered table-sm" id="tabel">
    <thead>
      <tr>
        <th>No.</th>
        <th>Kode Harta</th>
        <th>Nama Harta</th>
        <th>Ket</th>
        <th>Tanggal Post</th>
        <th>User Post</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include_once 'modul/connection.php';
        $no = 1;
        $data = mysqli_query($konek, "SELECT * FROM harta_berwujud");
        while ($d = mysqli_fetch_array($data)){
        ?>
       <tr>
       <td><?php echo $no++; ?></td>
       <td><?php echo $d['kode_harta']; ?></td>
       <td><?php echo $d['nm_harta']; ?></td>
       <td><?php echo $d['ket']; ?></td>
       <td><?php echo $d['tgl_posting']; ?></td>
       <td><?php echo $d['user_posting']; ?></td>
       <td>
       <a href="beranda.php?page=edit-aset">Edit</a>
       <a href="#">Delete</a>
       </td>
       </tr>
    </tbody>
    <?php
     }
     ?>
  </table>
</div>

