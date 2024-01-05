@extends('layouts.layout')

@section('content')
@section('page-name', 'Single Task')
<h2 class="text-center">{{ $task->title }}</h2>
<br>
<div class="container">
    <table class="table  table-striped" style="font-size: 0.7rem;">
        <thead>
            <tr>


                <th>Description</th>
                <th>Long Description</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
 
            <tr>


                <td>{{ $task->description }}</td>
                @if ($task->long_description)
                    <td>{{ $task->long_description }}</td>
                @else
                    <td>No Description</td>
                @endif



                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
            </tr>


    </table>
</div>
@endsection
