<form method="post" action="{{ route('simpan_ubah_transaksi2', $data_transaksi->id) }}">
    {{ csrf_field() }} 
    {{-- <div class="form-group">
        <label> Nomor Transaksi </label>
        <label class="form-control"> {{ $data_transaksi->nomor_transaksi }} </label>
    </div> 
    <div class="Alamat-group">
        <label> Alamat Kirim </label>
        <label class="form-control"> {{ $data_transaksi->alamat_kirim }} </label>
    </div> 

    <div class="form-group">
        <label> Total Harga </label>
    <label class="form-control"> {{ $data_transaksi->total_harga }} </label>
    </div> 

    <div>
    <label>Produk</label>
    @foreach ($data_transaksi->dtransaksi as $q)
    <label class="form-control" value="">{{$q->nama_produk}}</label>
     

    @endforeach
    </div> --}}

    <div class="row">
 <div class="col-lg-12">
  <table class="table table-bordered table-hover">
   <thead>
    <tr>
     <th>Nama Produk</th>
     <th>jumlah</th>
     <th>harga</th>
    </tr>
    <tr>
    @foreach ($data_transaksi->dtransaksi as $q)
        {{-- @foreach ($q->produk as $p)
        <td>{{$p->nama_produk}}</td>
        @endforeach --}}
        <td>{{$q->produk['nama_produk']}}</td>
        <td>{{$q->satuan_barang}}</td>
        <td>{{$q->sub_harga}}</td>
    </tr>
    @endforeach
    <tr>
        <td>jumlah </td>
        <td></td>
        <td>{{$data_transaksi->total_harga}}</td>
    </tr>
   </thead>
  </table>
 </div>
</div>
    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
</form>
