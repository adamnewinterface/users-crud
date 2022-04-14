@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card">
                        <div class="card-header">
                            Show User
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}" disabled/>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Job Title</label>
                                <input type="text" class="form-control" name="job_title" value="{{ $user->job_title }}" disabled/>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Contact Number</label>
                                <input type="text" class="form-control" name="contact_number" value="{{ $user->contact_number }}" disabled/>
                            </div>
                            <div class="form-group mt-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled/>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
