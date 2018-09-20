@if (isset($buku))
    {!! Form::hidden('this_id', $buku->id) !!}
@endif
@if ($errors->any())
    <div class="form-group {{ $errors->has('title') ? 'has-error': 'has-success' }}">
@else
    <div class="form-group">
@endif
{!! Form::label('title', 'Title:', ['class'=>'control-label']) !!}
{!! Form::text('title', null, ['class'=>'form-control']) !!}
    @if ($errors->has('title'))
    <span class="help-block">{{ $errors->first('title') }}</span>
    @endif
</div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('author') ? 'has-error': 'has-success' }}">
@else
    <div class="form-group">
@endif
{!! Form::label('author', 'Author:',['class'=>'control-label']) !!}
{!! Form::text('author', null, ['class'=>'form-control']) !!}
    @if ($errors->has('author'))
    <span class="help-block">{{ $errors->first('author') }}</span>
    @endif
</div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('date_published') ? 'has-error': 'has-success' }}">
@else
    <div class="form-group">
@endif
{!! Form::label('date_published', 'Date Published:', ['class'=>'control-label']) !!}
{!! Form::date('date_published', !empty($buku)?$buku->date_published->format('Y-m-d'):null, ['class'=>'form-control', 'id'=>'tanggal_lahir']) !!}
    @if ($errors->has('date_published'))
    <span class="help-block">{{ $errors->first('date_published') }}</span>
    @endif
</div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('number_of_pages') ? 'has-error': 'has-success' }}">
@else
    <div class="form-group">
@endif
{!! Form::label('number_of_pages', 'Number of Pages:',['class'=>'control-label']) !!}
{!! Form::text('number_of_pages', null, ['class'=>'form-control']) !!}
    @if ($errors->has('number_of_pages'))
    <span class="help-block">{{ $errors->first('number_of_pages') }}</span>
    @endif
</div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('type_of_book') ? 'has-error': 'has-success' }}">
@else
    <div class="form-group">
@endif
{!! Form::label('type_of_book', 'Type Of Book:',['class'=>'control-label']) !!}
    <div class="radio">
        <label>{!! Form::radio('type_of_book','Novel') !!} Novel</label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('type_of_book','Documentation') !!} Documentation</label>
    </div>
	<div class="radio">
        <label>{!! Form::radio('type_of_book','Other') !!} Others</label>
    </div>
    @if ($errors->has('type_of_book'))
    <span class="help-block">{{ $errors->first('type_of_book') }}</span>
    @endif 
</div>
<div class="form-group">
{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>