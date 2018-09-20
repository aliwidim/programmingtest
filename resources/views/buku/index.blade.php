@extends('template')

@section('title','- Programming Test CRUD')

@section('main')
<div id="list_buku">
	<h2>Daftar Buku</h2>
	
	@include('_partial.flash_message')
	
	@if (!empty($buku_list))	
		<table class="table">
			<thead>
				<tr>
					<th>Title</th>
					<th>Author</th>
					<th>Date Published</th>
					<th>Num. of Pages</th>
					<th>Type of Book</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($buku_list as $buku)
				<tr>
					<td>{{ $buku->title }}</td>
					<td>{{ $buku->author }}</td>
					<td>{{ $buku->date_published->format('d-M-Y') }}</td>
					<td>{{ $buku->number_of_pages }}</td>
					<td>{{ $buku->type_of_book }}</td>
					<td>
						<div class="box-button">
						{{ link_to('buku/'.$buku->id, 'Detail', ['class'=>'btn btn-success btn-sm']) }}
						{{ link_to('buku/'.$buku->id.'/edit', 'Edit', ['class'=>'btn btn-warning btn-sm']) }}
						</div>
						<div style="display:inline-block">
						{!! Form::open(['method'=>'DELETE', 'action'=>['BukuController@destroy', $buku->id]]) !!}
						{!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
						{!! Form::close() !!}
						</div>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	@else
		<p>Tidak ada data Buku</p>
	@endif

	<div class="table-nav">
		<div class="jumlah-data">
			<strong>Jumlah Buku: {{ $jumlah_buku }}</strong>
		</div>
		<div class="paging">
			{{ $buku_list->links() }}
		</div>
	</div>

	<div class="bottom-nav">
		<div>
			{{ link_to('buku/create', 'Tambah Buku', ['class'=>'btn btn-primary']) }}
		</div>
	</div>

</div>
@stop

@section('footer')
	@include('footer')
@stop