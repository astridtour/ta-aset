<div>
  <a href="beranda.php?page=t-adniven"><button type="button" class="btn btn-success">Tambah</button></a>
  <button style="float: right;" class="btn btn-warning"><--Print--></button><hr>
  <h3>Pengadaan Iventaris</h3>
  <table id="tabel" class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>No.</th>
        <th>Kode Pengadaan</th>
        <th>Barang</th>
        <th>Suplier</th>
        <th>Jumlah</th>
        <th>Tgl Beli</th>
        <th>User Posting</th>
        <th>Aksi</th>
      </tr>
    </thead> 
    <tbody>
      <?php
        include_once 'modul/connection.php';
        $no = 1;
        $data = mysqli_query($konek, "SELECT * FROM pengadaan");
        while ($d = mysqli_fetch_array($data)){
      ?> 
       <tr>
       <td><?php echo $no++; ?></td>
       <td><?php echo $d['kode_pengadaan']; ?></td>
       <td><?php echo $d['kode_barang']; ?></td>
       <td><?php echo $d['kode_suplier']; ?></td>
       <td><?php echo $d['jumlah']; ?></td>
       <td><?php echo $d['tgl_beli']; ?></td>
       <td><?php echo $d['user_posting']; ?></td>
       <td>
       <a href="#">Search</a>
       <a href="#">Delete</a>
       </td>
       </tr> 
    </tbody>
    <?php
    }
    ?>
  </table>
</div>

