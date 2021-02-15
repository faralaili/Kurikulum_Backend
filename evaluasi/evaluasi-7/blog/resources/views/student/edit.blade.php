@extends('student')

@section('main')
<div class="row">  
    <div class="col-md-8 offset-sm-1">  
    <h1 class="display-6">Edit Data</h1>
</div>
</div>
    <div class="row">
       <div class="col-md-8 offset-sm-1">
            <form action="{{url("/student/{$student->id}") }}" method="post">
                @method('PATCH')
                @csrf   
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input value="{{ $student->name}}" class="form-control" type="text" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="class">Class:</label>
                        <input value="{{ $student->class }}" class="form-control" type="text" name="class" >
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input value="{{ $student->phone }}" class="form-control" type="text" name="phone" >
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
            </form>    
       </div>
    </div>
@endsection