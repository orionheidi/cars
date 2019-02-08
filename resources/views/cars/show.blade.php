@extends('layouts.master')

@section('title',$car->title)


@section('content')
<div>{{ $car->title }}</div>  
<div>{{ $car->producer}}</div>
@endsection