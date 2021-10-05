@extends('workers.layout')
@section('content')
<div class="row">
    <div class="">
        <a href="{{route('workers.index')}}" class='btn btn-primary'> back</a>
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>something was wromg with your input</strong>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif
<form action="{{route('workers.store')}}" method="post">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>name</strong>
        <input type="text" class="from-group" name="name" placeholder="name">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>position</strong>
        <input type="text" class="from-group" name="position" placeholder="position">
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <button type="submit" class="btn btn-primary">submit</button>
</div>
</div>
</form>
@endsection