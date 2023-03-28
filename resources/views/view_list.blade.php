@extends('layout.app')


@section('content')
       


    

        <div class="text-right" id="btn1">
            <a href="create" class="btn btn-success">Create New List</a>
        </div>

        
       
<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        {{-- <th>Created At</th> --}}
        <th>Action</th>
    </tr>

   
        @foreach ($todo_arr as $td)
            
        <tr>
            <td> {{ $td->id}} </td>
            <td> {{ $td->name}} </td>
            {{-- <td> {{ $td->created_at}} </td> --}}
            <td> <a href="delete/{{$td->id}}" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</a> ||  <a href="edit/{{$td->id}}">Edit</a> </td>
        </tr>

            @endforeach

</table>
@endsection

