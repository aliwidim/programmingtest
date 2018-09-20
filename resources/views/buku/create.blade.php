@extends('template')

@section('main')
@if(isset($error))
<p>Error</p>
@endif
<div id="list_buku">
    <h2>Tambah Buku</h2>
    {!! Form::open(['url'=>'buku']) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
       @include('buku.form',['submitButtonText'=>'Tambah Buku'])
    {!! Form::close() !!}
</div>
@stop

@section('footer')
	@include('footer')
@stop 