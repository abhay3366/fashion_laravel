@extends('frontend.dashboard.layouts.master')

@section('content')
<section class="py-4">
    <div class="container-fluid">
        <div class="row">
            {{-- Sidebar --}}
            @include('frontend.dashboard.layouts.sidebar')

            <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                <div class="mb-4">
                    <h3><i class="far fa-user me-2"></i>Profile</h3>
                </div>

                {{-- Basic Information --}}
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        Basic Information
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('user.profile.update')}}" enctype="multipart/form-data">
                            @csrf
                            

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="username" class="form-label">First Name</label>
                                    <input type="text" id="username" name="username" class="form-control" value="{{old('username')}}" placeholder="First Name">
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Email">
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Profile Image</label>
                                    <img src="{{asset(Auth()->user()->image)}}" style="height: 100px;width: 100px;" class="img-fluid rounded mb-2" alt="Profile Image">
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Change Password --}}
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        Change Password
                    </div>
                    <div class="card-body">
                        <form method="POST"  action="{{route('user.update.password')}}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="current_password" class="form-label">Current Password</label>
                                    <input type="password" id="current_password" name="current_password" class="form-control" placeholder="Current Password">
                                </div>

                                <div class="col-md-4">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="password" id="new_password" name="password" class="form-control" placeholder="New Password">
                                </div>

                                <div class="col-md-4">
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div> {{-- End col --}}
        </div> {{-- End row --}}
    </div> {{-- End container --}}
</section>
@endsection
