<form method="post" action="{{ route('simpan_tambah_galery') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <b>File Gambar</b><br/>
        <input type="file" name="gambar_produk" accept=".jpg,.jpeg,.png">
    </div>
    <div class="form-group">
        <b>SKU</b><br>
        <select class="form-control" name="produkatt_id" id="produkatt_id">
            @foreach ($data_produkatt as $r)
        <option value="{{$r->id}}">{{$r->SKU}}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" value="Upload" class="btn btn-primary">
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
    </form>
