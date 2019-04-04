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
                <h2>Patients List</h2>
            </div>
            <div class="float-right">
                <a href="{{route('patients.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Add New</a>
            </div>
    </div>
    <div class="table-responsive" >
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Contact</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($patient as $patient)
                <tr>
                    <td>{{ $patient->id}}</td>
                    <td>{{ $patient->name}}</td>
                    <td>{{ $patient->age}}</td>
                    <td>{{ $patient->contact}}</td>
                    <td>{{ $patient->doctor->name}}</td>
                    <td>{{ $patient->date}}</td>
                    <td>
                        <form action="{{route('patients.destroy',$patient->id)}}" method="post" role="form">
                            <a href="{{route('patients.show',$patient->id)}}" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>
                            <a href="{{route('patients.edit',$patient->id)}}" class="btn btn-outline-primary"><i class="fas fa-pen-square"></i></a>
                            <a href="{{url('prescriptions/'.$patient->id)}}" class="btn btn-outline-primary"><i class="fas fa-prescription"></i></a>
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