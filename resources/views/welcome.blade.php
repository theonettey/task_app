@extends('layouts.parent')
<!--Content to serve-->
@section('killer')
<div class="jumbotron">
    Welcome to the simplest but most effecient task app that will blow you mind away
    <br>
    <button class="btn btn-succes"><a href="{{route('add_task.create')}}">Add New Task!</a></button>
</div>


@endsection