<form method="post" action="{{ route('simpan_ubah_promo', $data_promo->id) }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama Promo</label>
        <input type="text" name="nama_promo" value="{{ $data_promo->nama_promo }}" class="form-control" placeholder="Nama Promo ..">
    </div>
    <div class="form-group">
        <label>Jenis Promo</label>
        <select name="jenis_promo" class="form-control" value="{{ $data_promo->jenis_promo }}" >
                <option>Diskon</option>
                <option>Potongan Langsung</option>
        </select>
    </div>
    <div class="form-group">
        <label>Nominal Promo</label>
        <input type="text" name="nominal_promo"value="{{ $data_promo->nominal_promo }}" class="form-control" placeholder=" Nominal Promo ..">
    </div>
    <div class="form-group">
        <label>expired date</label>
        <input type="text" name="expired_date"value="{{ $data_promo->expired_date }}" class="form-control" placeholder="Expired Date ..">
    </div>
    <div class="form-group">
                <b>Atribut ID</b><br>
                <select class="form-control" name="produkatt_id" id="produkatt_id">
                    @foreach ($data_produkatt as $r)
                <option value="{{$r->id}}">{{$r->SKU}}</option>
                    @endforeach
                </select>
            </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>

</form>
