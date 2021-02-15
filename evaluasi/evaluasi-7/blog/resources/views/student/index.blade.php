@extends('student')

@section('main')
<a href="{{url('/student/create')}}" class="btn btn-primary mb-2">Tambah data</a>
    <div class="row">
        <div class="col-md-12">
           <table class="table table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Phone</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student as $student )
                        <tr>
                        <td> {{ $student->id }} </td>
                        <td> {{ $student->name }} </td>
                        <td> {{ $student->class }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>
                        <a class="btn btn-info" href="{{url("student/{$student->id}/edit")}}">Edit</a>    
                        </th>
                        <th>
                        <form action="{{url("student/{$student->id}")}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        {{-- <a class="btn btn-danger" >Delete</a> --}}
                        </td>
                        </tr>
                    @endforeach
                 </tbody>       
            </table>
        </div>
    </div>
@endsection