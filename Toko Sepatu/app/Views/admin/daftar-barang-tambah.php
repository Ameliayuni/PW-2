<?= $this->extend('admin/template')?>

<?= $this->section('main')?>
<h2 class="mb-5">Tambah barang</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-barang/create') ?>" enctype="multipart/form-data" method="post">
        <div class="mb-3">
            <label for="ukuran">Ukuran</label>
            <input type="text" class="form-control" name="ukuran" id="ukuran">
        </div>
        <div class="mb-3">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control" name="jenis" id="jenis">
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="stok">Stok Sepatu</label>
            <input type="text" class="form-control" name="stok" id="stok">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-barang') ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection()?>
