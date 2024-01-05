@extends('layouts.layout')
@section('page-name','Tasks')
@section('content')
    <div>
      @forelse ($tasks as $task )

     <div class="container offset-3">
      <li class="list-group-item"> <a href="{{route('tasks.task',['id'=>$task->id])}}"><strong>

       {{ $task->title}}</strong></a></li>
    </div>
    @empty
    <div class="container"> Nema zadataka</div>
      @endforelse
    </div>
@endsection
