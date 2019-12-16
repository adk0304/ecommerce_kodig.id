<form method="post" action="{{ route('simpan_ubah_SKU', $data_produk->id) }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama </label>
        <input type="text" name="nama_produk" value="{{ $data_produk->nama_produk }}" class="form-control" placeholder="Nama Produk ..">
    </div>
    <div class="form-group">
        <label>Jenis </label>
        <input type="text" name="jenis_produk"value="{{ $data_produk->jenis_produk }}" class="form-control" placeholder="Jenis Produk ..">
    </div>

    <div class="form-group">
        <label>Warna </label>
        <input type="text" name="nama_produk" value="{{ $data_produkatt->warna_produk }}" class="form-control" placeholder="Nama Produk ..">
    </div>
    <div class="form-group">
        <label>Stock </label>
        <input type="text" name="nama_produk" value="{{ $data_produkatt->stock_produk }}" class="form-control" placeholder="Nama Produk ..">
    </div>
    <div class="form-group">
        <label>Size </label>
        <input type="text" name="nama_produk" value="{{ $data_produkatt->size_produk }}" class="form-control" placeholder="Nama Produk ..">
    </div>
    <div class="form-group">
        <label>Harga </label>
        <input type="text" name="nama_produk" value="{{ $data_produkatt->harga_produk }}" class="form-control" placeholder="Nama Produk ..">
    </div>
    <div class="form-group">
        <label>Jumlah promo </label>
        <input type="text" name="nama_produk" value="{{ $data_promo->nama_promo }}" class="form-control" placeholder="Nama Produk ..">
    </div>

    <td><img width="150px" src="{{ url('/data_file/'.$p->gambar_produk) }}"></td>

    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>

</form>
