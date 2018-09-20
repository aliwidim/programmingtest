@extends('template')

@section('main')
    <div id="edit_buku">
        <h2>Edit Buku</h2>
        {!! Form::model($buku,['method'=>'PATCH','action'=>['BukuController@update',$buku->id]]) !!}
        @include('buku.form',['submitButtonText'=>'Update Buku'])
        {!! Form::close() !!}
    </div>
@stop 

@section('footer')
    @include('footer')
@stop 