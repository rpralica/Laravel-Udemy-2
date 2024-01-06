@extends('layouts.layout')
@section('title','Add Task')
@section('stiles')
<style>
    .error-msg{
        color: red;
        font-size: 0.9rem;
        font-weight: bold;
    }
    </style>
@endsection
@section('page-name','Add Task')
@section('content')

<form action="{{ route('tasks.store')	}}" method="POST">
@csrf
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
<input type="text" class="form-control" placeholder="Title" name="title" id="title"> <br>
@error('title')
<p class="text-center error-msg">{{$message}}</p>
@enderror
<textarea class="form-control" name="description" id="description" cols="10" rows="5" placeholder="Description"></textarea> <br> @error('description')
<p class="text-center error-msg">{{$message='Opis je obavezan'}}</p>
@enderror

<textarea class="form-control" name="long_description" id="long_description" cols="10" rows="5" placeholder="Long description"></textarea> <br>@error('long_description')
<p class="text-center error-msg">{{$message='Detaljan opis je obavezan'}}</p>
@enderror
 <button class="btn btn-info offset-3 text-light" type="submit">Add Task</button>
        </div>
    </div>
</div>
</form>
@endsection
