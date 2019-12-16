<form method="post" action="{{ route('simpan_ubah_produkatt', $data_produkatt->id) }}">
    {{ csrf_field() }}
    <div class="form-group">
            <label>SKU</label>
            <input type="text" name="SKU" value="{{ $data_produkatt->SKU }}" class="form-control" placeholder="SKU ..">
    </div>
    <div class="form-group">
            <label>Warna Produk</label>
            <input type="text" name="warna_produk" value="{{ $data_produkatt->warna_produk }}" class="form-control" placeholder="warna produk ..">
    </div>
    <div class="form-group">
            <label>Jumlah Produk</label>
            <input type="text" name="jumlah_produk" value="{{ $data_produkatt->jumlah_produk }}" class="form-control" placeholder="jumlah produk ..">
    </div>
    <div class="form-group">
            <label>Stock Produk</label>
            <input type="text" name="stock_produk" value="{{ $data_produkatt->stock_produk }}" class="form-control" placeholder="Stock Produk ..">
    </div>
    <div class="form-group">
            <label>Size Produk</label>
            <input type="text" name="size_produk" value="{{ $data_produkatt->size_produk }}" class="form-control" placeholder="size produk ..">
    </div>
    <div class="form-group">
            <label>Harga Produk</label>
            <input type="text" name="harga_produk" value="{{ $data_produkatt->harga_produk }}" class="form-control" placeholder="Harga Produk ..">
    </div>

    <div class="form-group">
        <b>Nama produk</b><br>
        <select class="form-control" name="produk_id">
                @foreach ($data_produk as $r)
    <option value="{{$r->id}}">{{$r->nama_produk}}</option>
        @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>

</form>


