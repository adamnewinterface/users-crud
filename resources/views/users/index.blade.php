@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <h5 class="float-start mt-1">{{ __('All Users') }}</h5>
                        <a href="{{ route('users.create')}}" class="btn btn-success btn-sm float-end">Create</a>
                    </div>

                    <div class="card-body">
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                            <tr>
                                <td># ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Job Title</td>
                                <td>Contact Number</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $employee)
                                <tr>
                                    <td>{{$employee->id}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->job_title}}</td>
                                    <td>{{$employee->contact_number}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('users.show', $employee->id)}}" class="btn btn-primary btn-sm">view</a>
                                        <a href="{{ route('users.edit', $employee->id)}}" class="btn btn-success btn-sm">Edit</a>
                                        <form action="{{ route('users.destroy', $employee->id)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    <div>

                </div>
            </div>
        </div>
    </div>
@endsection