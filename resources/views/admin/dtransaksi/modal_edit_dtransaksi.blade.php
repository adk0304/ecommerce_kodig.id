<form method="get" action="{{ route('simpan_ubah_dtransaksi', $data_transaksi->id) }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" value="{{ $data_dtransaksi->nama_barang }}" class="form-control" placeholder="SKU ..">
</div><div class="form-group">
    <label>Satuan Barang</label>
    <input type="text" name="satuan_barang" value="{{ $data_dtransaksi->satuan_barang }}" class="form-control" placeholder="SKU ..">
</div><div class="form-group">
    <label>Sub harga</label>
    <input type="text" name="sub_harga" value="{{ $data_dtransaksi->sub_harga }}" class="form-control" placeholder="SKU ..">
</div>
    <label>Tanggal Transaksi</label>
    <input type="date" name="tanggal_transaksi" value="{{ $data_dtransaksi->tanggal_transaksi }}" class="form-control" placeholder="SKU ..">
</div><div class="form-group">
    <label>Poin Transaksi</label>
    <input type="text" name="poin_transaksi" value="{{ $data_dtransaksi->poin_transaksi }}" class="form-control" placeholder="SKU ..">
</div><div class="form-group">
    <label>Invoice</label>
    <input type="text" name="invoice" value="{{ $data_dtransaksi->invoice }}" class="form-control" placeholder="SKU ..">
</div><div class="form-group">
    <label>id Transaksi</label>
    <input type="text" name="produk_id" value="{{ $data_dtransaksi->produk_id }}" class="form-control" placeholder="SKU ..">
</div><div class="form-group">
    <label>id Produkatt</label>
    <input type="text" name="transaksi_id" value="{{ $data_dtransaksi->transaksi_id }}" class="form-control" placeholder="SKU ..">
</div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>

</form>


