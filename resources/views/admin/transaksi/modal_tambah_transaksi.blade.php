<form method="post" action="{{ route('simpan_tambah_transaksi') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nomor Transaksi</label>
        <input type="text" name="nomor_transaksi" class="form-control" placeholder="NO Transaksi ..">
    </div>
    <div class="form-group">
        <label>Total Harga</label>
        <input type="text" name="total_harga" class="form-control" placeholder="Total Harga ..">
    </div>
    <div class="form-group">
        <label> Alamat Kirim</label>
        <input type="text" name="alamat_kirim" class="form-control" placeholder="Alamat Krim ..">
    </div>
    <div class="form-group">
        <label>status</label>
        <input type="bolean" name="status" class="form-control" placeholder="User ..">
    </div>
     
    <div class="form-group">
        <label>User</label>
        <input type="text" name="user_id" class="form-control" placeholder="User ..">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>

</form>
