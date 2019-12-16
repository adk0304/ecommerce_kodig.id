    <form method="post" action="{{ route('simpan_tambah_promo') }}">
        {{ csrf_field()}}
        <div class="form-group">
            <label>Nama Promo</label>
            <input type="text" name="nama_promo" class="form-control" placeholder="Nama Promo ..">
        </div>
        <div class="form-group">
            <label>Jenis Promo</label>
            <select name="jenis_promo" class="form-control" >
                <option>Diskon</option>
                <option>Potongan Langsung</option>
            </select>

        </div>
        <div class="form-group">
            <label>Nominal Promo</label>
            <input type="text" name="nominal_promo" class="form-control" placeholder="nominal Promo ..">

        </div>
        <div class="form-group">
            <label>Expired Promo</label>
            <input class="form-control" type="date" name="expired_date"  id="expired_date">
        </div>

        <div class="form-group">
                <b>Atribut ID</b><br>
                <select class="form-control" name="produkatt_id" id="produkatt_id">
                    @foreach ($data_produkatt as $r)
                <option value="{{$r->id}}">{{$r->SKU}}</option>
                    @endforeach
                </select>
            </div>
        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
        <button type="submit" class="btn btn-success ">Simpan</button>

    </form>
