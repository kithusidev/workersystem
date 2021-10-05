@extends('workers.layout')
@section('content')
<div class='pull-left'>
    <h2>workers details </h>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('workers.create')}}"> add new customer</a>

        </div>
         
    </div>

</div>
@if($messsage=Session::get('success'))
<div class="alert alert-success">
    <p>{{$messsage}}</p>
</div>
@endif
<table class="table table-borderded">
    <tr>
        <td>name</td>
        <td>position</td>
    </tr>
    @foreach($workers as $worker)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$worker->name}}</td>
        <td>{{$worker->position}}</td>
        <td><form action="{{route('workers.destroy',$worker->id)}}" method="POST">
            <a href="{{route('workers.edit',$worker->id)}}" class="btn btn-primary">edit</a>
            @csrf
            @method('delete')
            <button class="btn btn-primary" type="submit"> delete</button>
        </form>
        </td>
    </tr>
    @endforeach


</table>