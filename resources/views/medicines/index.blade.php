@extends('layouts.app')

@section('content')

<div class="row">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
        
    @endif
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5" style="">
        <!-- create from -->
            @if(isset($medicine))
                @include('medicines.edit')    
            @else
                @include('medicines.create')    
            @endif
        
        <!--end create from -->
    </div>
    
    
    <!-- Data table for medicine -->
    <div class="col-md-6">
        <div style="margin-top: 20px;">
            <div class="float-left">
                <h2>Medicine List</h2>
            </div>
        </div>
        <div class="table-responsive col-md-10" >
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicines as $medicine)
                            <tr>
                                <td>{{ $medicine->id}}</td>
                                <td>{{ $medicine->name}}</td>
                                <td>
                                    <form action="{{route('medicines.destroy',$medicine->id)}}" method="post" role="form">
                                        <a href="{{route('medicines.edit',$medicine->id)}}" class="btn btn-outline-primary"><i class="fas fa-pen-square"></i></a>                                                        
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="hov btn btn-outline-danger"><i class="fas fa-trash"></i></button>
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