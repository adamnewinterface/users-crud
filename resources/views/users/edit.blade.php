@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card">
                        <div class="card-header">
                            Edit User
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
                            <form method="post" action="{{ route('users.update', $user->id) }}">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') ? old('name') : $user->name }}"/>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="name">Job Title</label>
                                    <input type="text" class="form-control" name="job_title" value="{{ old('job_title') ? old('job_title') : $user->job_title }}"/>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="name">Contact Number</label>
                                    <input type="text" class="form-control" name="contact_number" value="{{ old('contact_number') ? old('contact_number') : $user->contact_number }}"/>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') ? old('email') : $user->email }}"/>
                                </div>

                                <button type="submit" class="btn btn-block btn-primary mt-3">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
