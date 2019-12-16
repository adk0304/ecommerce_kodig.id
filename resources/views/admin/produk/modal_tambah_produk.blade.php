<form method="post" action="{{ route('simpan_tambah_produk') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk ..">
    </div>
    <div class="form-group">
        <label>Jenis Produk</label>
        <input type="text" name="jenis_produk" class="form-control" placeholder="Jenis Produk ..">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
</form>
