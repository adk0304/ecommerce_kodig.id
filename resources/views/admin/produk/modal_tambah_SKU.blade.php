<form method="post" action="{{ route('simpan_tambah_SKU') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id_produkatt" id="id_sku" value="">
        <div class="form-group">
                <label>SKU </label>
                <input type="text" name="SKU" class="form-control" placeholder="SKU ..">
        </div>
        <div class="form-group">
                <label>Warna </label>
                <input type="text" name="warna_produk" class="form-control" placeholder=" Warna ..">
        </div>
        <div class="form-group">
                <label>Stock </label>
                <input type="text" name="jumlah_produk" class="form-control" placeholder=" Stock ..">
        </div>
        <div class="form-group">
                <label>Size </label>
                <input type="text" name="size_produk" class="form-control" placeholder="Size">
        <div class="form-group">
                <label>Harga </label>
                <input type="text" name="harga_produk" class="form-control" placeholder=" Harga ..">
        </div>
        <div class="form-group">
                <b>File Gambar</b><br/>
                <input type="file" name="gambar_produk">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
    </form>
