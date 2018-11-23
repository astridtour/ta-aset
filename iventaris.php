<div>
  <a href="beranda.php?page=t-iventaris"><button type="button" class="btn btn-success">Tambah</button></a>
  <button style="float: right;" class="btn btn-warning"><--Print--></button><hr>
  <h3>Data Iventaris</h3>
  <table class="table table-bordered table-sm" id="tabel">
    <thead>
      <tr>
        <th>No.</th>
        <th>Kode Aset</th>
        <th>Nama Aset</th>
        <th>Merk</th>
        <th>Type</th>
        <th>Tahun</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include_once 'modul/connection.php';
        $no = 1;
        $data = mysqli_query($konek, "SELECT * FROM aset");
        while ($d = mysqli_fetch_array($data)){
      ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['kode_barang']; ?></td>
            <td><?php echo $d['nm_barang']; ?></td>
            <td><?php echo $d['merk']; ?></td>
            <td><?php echo $d['tipe']; ?></td>
            <td><?php echo $d['tahun']; ?></td>
            <td>
              <a href="beranda.php?page=edit-iventaris">Edit</a>
              <a href="#">Hapus</a>
            </td>
          </tr>
    </tbody>
    <?php
    }
    ?>
  </table>
</div>

