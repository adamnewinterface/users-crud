@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card">
                        <div class="card-header">
                            Create User
                        </div>

                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" action="{{ route('users.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"/>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="name">Job Title</label>
                                    <input type="text" class="form-control" name="job_title" value="{{ old('job_title') }}"/>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="name">Contact Number</label>
                                    <input type="text" class="form-control" name="contact_number" value="{{ old('contact_number') }}"/>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"/>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password_confirmation">Password Confirmation</label>
                                    <input type="password" class="form-control" name="password_confirmation"/>
                                </div>

                                <button type="submit" class="btn btn-block btn-primary mt-3">Create</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
