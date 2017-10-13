@extends('main')

@section('content')

{!! Form::open(array('route'=>'gallery.store', 'files'=>'true')) !!}
{{Form::file('image')}}
{{Form::submit('upload file')}}
{!! Form::close() !!}


@endsection
