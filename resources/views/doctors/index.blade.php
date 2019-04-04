@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
        
    @endif
    <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="float-left">
                <h2>Doctors List</h2>
            </div>
            <div class="float-right">
                <a href="{{route('doctors.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Add New</a>
            </div>
    </div>
    <div class="table-responsive" >
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Phone</th>
                    <th>Work Area</th>
                    <th>Number Of Patients</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($doctor as $doctor)
                <tr>
                    <td>{{ $doctor->id}}</td>
                    <td>{{ $doctor->name}}</td>
                    <td>{{ $doctor->email}}</td>
                    <td>{{ $doctor->salary}}</td>
                    <td>{{ $doctor->phone}}</td>
                    <td>{{ $doctor->workarea}}</td>
                    <td><a href="{{route('patients.index',['doctor_id'=>$doctor->id])}}">{{ $doctor->patients->where('date', date('Y-m-d'))->count() }}</a></td>
                    <td>
                    <form action="{{route('doctors.destroy',$doctor->id)}}" method="post" role="form">
                            <a href="{{route('doctors.show',$doctor->id)}}" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                            <a href="{{route('doctors.edit',$doctor->id)}}" class="btn btn-outline-primary"><i class="fas fa-pen-square"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>


@endsection