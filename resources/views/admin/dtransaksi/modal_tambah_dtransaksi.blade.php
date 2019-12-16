<form method="post" action="{{ route('simpan_tambah_dtransaksi') }}">
    {{ csrf_field() }}
    
        <div class="form-group">
                <b>ID Transaksi</b><br>
                <select class="form-control" name="transaksi_id" id="transaksi_id">
                    @foreach ($data_transaksi as $r)
                <option value="{{$r->id}}">{{$r->nomor_transaksi}}</option>
                    @endforeach
                </select>
            </div>
    <div class="form-group">
            <b>ID Produk</b><br>
            <select class="form-control" name="produk_id" id="produk_id">
                @foreach ($data_produk as $r)
            <option value="{{$r->id}}" >{{$r->nama_produk}}</option>
                @endforeach
            </select>

    



    <div class="form-group">
        <label>Satuan Barang</label>
        <input type="text" name="satuan_barang" class="form-control" placeholder="Nama Promo ..">
    </div><div class="form-group">
        <label>Sub Harga</label>
        <input type="text" name="sub_harga" class="form-control" placeholder="Nama Promo ..">
    </div><div class="form-group">
        <label>Alamat Kirim</label>
        <input type="text" name="alamat_kirim" class="form-control" placeholder="Nama Promo ..">
    </div><div class="form-group">
        <label>Tanggal Transaksi</label>
        <input type="date" name="tanggal_transaksi" class="form-control" placeholder="Nama Promo ..">
    </div><div class="form-group">
        <label>Poin Transaksi</label>
        <input type="text" name="poin_transaksi" class="form-control" placeholder="Nama Promo ..">
    </div><div class="form-group">
        <label>Invoice</label>
        <input type="text" name="invoice" class="form-control" placeholder="Nama Promo ..">

    
        </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>

</form>
