@extends('layouts.arpas-home')
@section('main_content')


@foreach($prace as $praca)
{{ $praca->name }}
@endforeach

@endsection
