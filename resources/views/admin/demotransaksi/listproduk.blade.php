<!DOCTYPE html>
<html>
<head>
	<title>List Porduk</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<h3 class="text-center">List Produk yang dijual</a></h3>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nama Produk</th>
							<th>Jenis Produk</th>
							<th>SKU</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th width="1%">Stock</th>
						</tr>
					</thead>
					<tbody>
						@foreach($produk as $p)
						<tr>
							<td>{{ $p->nama_produk }}</td>
							<td>{{ $p->jenis_produk }}</td>
							<td>
								<ul>
									@foreach($a->hadiah as $h)
									<li> {{ $h->nama_hadiah }} </li>
									@endforeach
								</ul>
							</td>
							<td class="text-center">{{ $a->hadiah->count() }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>