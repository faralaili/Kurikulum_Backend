@extends('student')

@section('main')
<div class="row">  
    <div class="col-md-8 offset-sm-1">  
    <h1 class="display-6">Tambah Data</h1>
</div>
</div>
    <div class="row">
       <div class="col-md-8 offset-sm-1">
            <form action="{{url('/student')}}" method="post">
                @csrf   
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input class="form-control" type="text" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="class">Class:</label>
                        <input class="form-control" type="text" name="class" placeholder="class">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input class="form-control" type="text" name="phone" placeholder="Phone">
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
            </form>    
       </div>
    </div>
@endsection