@extends('main')

@section('content')

{!! Form::open(array('route'=>'gallery.store', 'files'=>'true','enctype'=>'multipart/form-data')) !!}
{{Form::file('image[]',['multiple'=>'multiple'])}}
{{Form::submit('upload file')}}
{!! Form::close() !!}


@endsection
