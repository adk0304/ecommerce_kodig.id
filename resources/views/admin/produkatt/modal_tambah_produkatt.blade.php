<form method="post" action="{{ route('simpan_tambah_produkatt') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <b>Nama produk</b><br>
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="produk_id" id="produk_id">
        {{-- <select data-live-search="true" class="selectpicker form-control "  > --}}
            @foreach ($data_produk as $r)
        <option value="{{$r->id}}">{{$r->nama_produk}}</option>
            @endforeach
        </select>
    </div>
        <label>SKU</label>
        <input type="text" name="SKU" class="form-control" placeholder="SKU ..">
    </div><div class="form-group">
        <label>warna produk</label>
        <input type="text" name="warna_produk" class="form-control" placeholder="warna Produk ..">
    </div>
    {{-- <div class="form-group">
        <label>warna produk</label>
        <input type="color" name="hexawarna" class="form-control" placeholder="warna Produk ..">
    </div> --}}
    <div class="form-group">
        <label>jumlah produk</label>
        <input type="text" name="jumlah_produk" class="form-control" placeholder=" jumlah Produk ..">
    </div><div class="form-group">
        <label>stock produk</label>
        <input type="text" name="stock_produk" class="form-control" placeholder="stock Produk ..">
    </div><div class="form-group">
        <label>size produk</label>
        <input type="text" name="size_produk" class="form-control" placeholder="size Produk ..">
    </div><div class="form-group">
        <label>harga produk</label>
        <input type="text" name="harga_produk" class="form-control" placeholder="harga Produk ..">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>

</form>
