<div>
  <a href="beranda.php?page=t-penempatan"><button type="button" class="btn btn-success">Tambah</button></a>
  <button style="float: right;" class="btn btn-warning"><--Print--></button><hr>
  <h3>Data Penempatan</h3>
  <table class="table table-bordered table-sm" id="tabel">
    <thead>
      <tr>
        <th>No.</th>
        <th>Kode Pengadaan</th>
        <th>Barang</th>
        <th>Cabang</th>
        <th>Unit</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
        <th>Status</th>
        <th>Tgl Posting</th>
        <th>User Posting</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include_once 'modul/connection.php';

        $no = 1 ;
        $data = mysqli_query($konek, "SELECT * FROM inventarisasi");
        while ($d = mysqli_fetch_array($data)){
         ?> 
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['kode_inventarisasi']; ?></td>
        <td><?php echo $d['kode_barang']; ?></td>
        <td><?php echo $d['kode_cabang']; ?></td>
        <td><?php echo $d['kode_unit']; ?></td>
        <td><?php echo $d['jumlah']; ?></td>
        <td><?php echo $d['kondisi']; ?></td>
        <td><?php echo $d['status']; ?></td>
        <td><?php echo $d['tgl_posting']; ?></td>
        <td><?php echo $d['user_posting']; ?></td>
        <td>
        <a href="#">Delete</a>
        </td>
    </tbody>
    <?php
    }
    ?>
  </table>
</div>

