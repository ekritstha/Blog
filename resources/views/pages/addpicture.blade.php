@extends('layout.apps')
@section('content')
{!! Form::open(['action' => 'PhotosController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('image','Image')}}
    {{Form::file('image')}}
</div>
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection