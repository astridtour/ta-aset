<a href="beranda.php?page=iventaris"><button type="button" class="btn btn-dark">Back</button></a><hr>
<form action="" method="post">
<h3>Form Edit Data Iventaris</h3>
<div class="form-group">
    <label for="kd_barang">Kode Barang</label><br>
    <input class="col-sm-4" type="text" name="" id="kd_barang"><br>
</div>
<div class="form-group">
    <label for="nm_barang">Nama Barang</label><br>
    <input class="col-sm-12" type="text" name="" id="nm_barang">
</div><br>
<div class="form-group col-md-6">
    <label for="golongan">Golongan</label>
    <select name="" id="golongan" class="form-control col-sm-4">
    <option value=""></option>
    </select>
</div>
<div class="form-group col-md-6">
    <label for="sub-golongan" class="col-sm-4">Sub Golongan</label>
    <select name="" id="sub-golongan" class="form-control col-sm-4">
    <option value=""></option>
    </select>
</div><br>
<div class="form-group">
<label for="merk">Merk</label>
<input type="text" id="merk" class="col-md-12">
</div><br>
<div class="form-group col-md-8">
    <label for="type">Type</label><br>
    <input class="col-sm-8" type="text" name="" id="type"><br>
</div>
<div class="form-group col-md-4">
    <label for="tahun">Tahun</label><br>
    <input class="col-sm-4" type="text" name="" id="tahun"><br>
</div><br>
<div class="form-group col-md-8">
    <label for="unit">Jumlah Unit</label><br>
    <input class="col-sm-8" type="text" name="" id="unit"><br>
</div>
<div class="form-group col-md-4">
    <label for="service">Massa Service</label><br>
    <input class="col-sm-4" type="text" name="" id="service">
</div><br>
<div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" class="form-control-file" id="gambar">
</div>
<hr>
<div class="form-group col-md-6">
    <a href="beranda.php?page=iventaris"><button type="button" class="btn btn-danger">Cancel</button></a>
</div>
<div class="form-group col-md-6">
    <button class="btn btn-success">Save</button>
</div>
</form>