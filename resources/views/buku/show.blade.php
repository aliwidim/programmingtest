@extends('template')

@section('main')
<div id="detail_buku">
    <h2>Detail Buku</h2>

    <table class="table table-striped">
        <tr>
            <th>Title</th>
            <td>{{ $buku->title }}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{ $buku->author }}</td>
        </tr>
        <tr>
            <th>Date Published</th>
            <td>{{ $buku->date_published->format('d-M-Y') }}</td>
        </tr>
		<tr>
            <th>Number of Pages</th>
            <td>{{ $buku->number_of_pages }}</td>
        </tr>
        <tr>
            <th>Type of Book</th>
            <td>{{ $buku->type_of_book }}</td>
        </tr>
    </table>
</div>
@stop

@section('footer')
	@include('footer')
@stop