<a href="beranda.php?page=adniven"><button type="button" class="btn btn-dark">Back</button></a>
<h3>Form Tambah Pengadaan Iventaris</h3>
<form action="" method="post">
    <div class="form-group">
        <fieldset>
        <p>
        <legend>Pengadaan</legend>
        <div>
        <div class="col-sm-6">
            <label for="kode_pengadaan">kode pengadaan</label><br>
            <input  type="text" name="" id="kode_pengadaan">
        </div>
        <div class="col-sm-6">
            <label for="tgl_beli">Tgl Beli</label><br>
            <input  type="text" name="" id="tgl_beli"><br>
        </div>
        </div>
        <div class="col-sm-6">
            <label for="suplier">Suplier</label><br>
            <select name="" id="">
            <option value="">--Pilih Jenis--</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="tgl_beli">Tgl Beli</label><br>
            <input  type="text" name="" id="tgl_beli">
        </div>
        </p>
        </fieldset>
    </div>

    <div class="form-group">
        <fieldset>
        <p>
        <legend>Iventaris</legend>
        <div>
        <div class="col-md-12">
            <label for="kode_iventaris">kode Iventaris</label><br>
            <input  type="text" name="" id="kode_iventaris">
            <p>*Klik pada kolom untuk memilih kode</p>
        </div>
        </div>
        <div class="col-sm-6">
            <label for="nm_iventaris">Nama Iventaris</label><br>
            <input type="text" name="" id="nm_iventaris">
        </div>
        <div class="col-sm-6">
            <label for="merk">Merk</label><br>
            <input  type="text" name="" id="merk">
        </div>
        <div class=col-sm-4>
            <label for="type">Type</label>
            <input type="text" name="" id="type">
        </div>
        <div class="col-sm-4">
            <label for="police">No. Police</label>
            <input type="text" name="" id="Police">
        </div>
        <div class="col-sm-4">
            <label for="bpkb">No. BPKB</label>
            <input type="text" name="" id="bpkb">
        </div>
        <div class="col-sm-4">
            <label for="sertifikat">No. Sertifikat</label>
            <input type="text" name="" id="sertifikat">
        </div>
        <div class="col-sm-4">
            <label for="luas">Luas</label>
            <input type="text" name="" id="luas">
        </div>
        </p>
        </fieldset>
        <fieldset>
        <p>
        <legend>Detail</legend>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="jumlah_beli">Jumlah Beli</label>
                <input type="text" name="" id="jumlah_beli">
                <p>Unit.</p>
            </div>
            <div class="col-sm-4">
                <label for="harga@unit">Harga Per Unit</label>
                <input type="text" name="" id="harga@unit">
            </div>
            <div class="col-sm-4">
                <label for="sub_total">Sub Total Beli</label>
                <input type="text" name="" id="sub_total">
            </div>
        </div>
        </p>
        </fieldset>
        <div class="form-group col-md-6">
        <a href="beranda.php?page=adniven"><button type="button" class="btn btn-danger">Cancel</button></a>
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-success">Save</button>
        </div>
    </div>
</form>