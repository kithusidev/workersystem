!@extends('workers.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit workers</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary"  href="{{route('workers.index')}}">Back</a>
        </div>     
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>something went wrong with your input</strong><br><br>
    <ul>
        @foreach($errors-all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('workers.update',$worker->id)}}" method="POST" >
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name</strong>
                <input type="text" name='name' class="form-group" value="{{$worker->name}}" paceholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>position</strong>
                <input type="text" name='position' class="form-group" value="{{$worker->position}}"
                placeholder="position">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            
                <button type="submit" class="btn btn-primary">submit</button>
</div>
            
    </div>

</form>
@endsection