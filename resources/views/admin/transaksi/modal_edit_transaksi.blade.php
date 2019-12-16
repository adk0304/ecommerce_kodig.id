<form method="post" action="{{ route('simpan_ubah_transaksi', $data_transaksi->id) }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label> Status </label>
        <select type="text" name="status" value="{{ $data_transaksi->status }}" class="form-control">
            <option value="0" >Belum Verif</option>
            <option value="1" >Verifikasi</option>
        </select>
    </div>

    {{-- <div>
        <div class="onoffswitch">
    <input type="checkbox" name="sta1tus" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner" value="1"></span>
        <span class="onoffswitch-switch" value="0"></span>
    </label>
        </div>
    </div> --}}
    
    <div class="form-group">
        <label> Keterangan</label>
        <input type="text" name="keterangan" value="{{ $data_transaksi->keterangan }}" class="form-control" placeholder="Jenis Produk ..">
    </div>

    <div class="form-group">
        <label> tanggal Verif</label>
        <input type="date" name="tgl_verif"value="{{ $data_transaksi->tgl_verif }}" class="form-control" placeholder="..">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>

</form>
