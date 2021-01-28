@extends('layout.main')
@section('content')
    <style>
        .w-5
        {
            width: 19px;
        }
    </style>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employees</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Employees</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Employees</h3>
                            </div>
                            @if(Session::has('success'))
                                <p class="alert alert-success">{{ Session::get('success') }}</p>

                        @endif
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>

                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Company</th>

                                        <th>Image</th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>{{$employee->id}}</td>
                                            <td>{{$employee->first_name}}</td>
                                            <td>{{$employee->last_name}}</td>

                                            <td>{{$employee->email}}</td>
                                            <td>{{$employee->phone}}</td>
                                            <td>{{$employee->company->name}}</td>


                                        @if($employee->image)
                                            <td>
                                                <img style="width: 100px; height: 100px;" src="{{$employee->image->image}}">
                                            </td>
                                            @else
                                                <td></td>
                                                @endif
                                            <td>
                                                <a href="{{(route('employee.edit',$employee->id))}}" class="btn btn-success a-btn-slide-text">
                                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                    <span><strong>Edit</strong></span>
                                                </a>
                                                <a href="{{(route('employee.deactivate',$employee->id))}}" class="btn btn-info a-btn-slide-text">
                                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                    <span><strong>DeActivate</strong></span>
                                                </a>
                                                <form class="myform"  id="{{$employee->id}}"  method="post"  action="{{(route('employee.destroy',$employee->id))}}">
                                                    @csrf

                                                    {!! method_field('Delete') !!} <button class="btn btn-icon btn-sm btn-danger" style="float: none;">
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                        <span><strong>Delete</strong></span>
                                                    </button></form>
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody>

                                </table>
                                {{$employees->links()}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection
