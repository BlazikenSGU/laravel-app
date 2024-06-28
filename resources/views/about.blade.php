@extends('layouts.app')

@section('content')
<h1>THIS IS ABOUT PAGE</h1>

{{-- @if ()
    
@endif --}}
@switch($name)
    @case('Henry')
        <h3>THIS IS HENRY</h3>
        @break
    @case('Nam')
        <h3>THIS IS HOANG NAM</h3>
        @break
    @default
        <h3>NO ONE SELECTED</h3>
      
@endswitch

@for ($i = 0; $i < 5; $i++)
    <h3>i = {{ $i}} </h3>
@endfor
@endsection

   