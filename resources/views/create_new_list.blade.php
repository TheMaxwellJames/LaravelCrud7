@extends('layout.app')

    
@section('content')

      


    <div class="text-center">

        <div class="text-right" id="btn1">
            <a href="/" class="btn btn-success">Back</a>
        </div>

        <form action="save_new_list">
            <input type="text" name="name" placeholder="Enter New List" class="form-control">
            <input type="submit" value="Save" class="btn btn-success">

        </form>
       

</div>
@endsection
