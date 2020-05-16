@extends('layouts.home')

@section('content')
<div class="container">
    
    
</div>

    <h1>Welcome Manager Home</h1>
    <h3>Name:
        @if(Session::has('uname'))
        {{ Session::get('uname') }}
    
        </h3>
@endsection