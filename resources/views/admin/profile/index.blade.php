@extends('admin.layout.master')


@section('content')
<section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">{{ Auth::user()->name }}</h2>
      <p class="section-lead">
        Change information about yourself on this page.
      </p>

      <div class="row mt-sm-4">
       
        <div class="col-md-12">
          <div class="card">
            <form method="POST" action="{{route('admin.profile.update')}}" class="needs-validation" enctype="multipart/form-data" novalidate="">
                @csrf
                {{-- @method('PUT') --}}
              <div class="card-header">
                <h4>Edit Profile</h4>
              </div>
              <div class="card-body">
                  <div class="row">    
                    <div class="form-group col-md-6 col-12">
                        <div style="">
                            <img style="object-fit: cover;width:100px; height: 100px;border-radius: 50%" src="{{ asset(Auth::user()->image) }}" alt="">
                        </div>
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                        <div class="invalid-feedback">
                          Please fill in the first name
                        </div>
                      </div>                           
                    <div class="form-group col-md-6 col-12">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required="">
                      <div class="invalid-feedback">
                        Please fill in the first name
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" required="">
                      
                    </div>
                  </div>
                  
                  
              </div>

              
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>


        <div class="col-md-12">
            <div class="card">
               
                {{-- @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif --}}
        
                <form method="post" action="" class="needs-validation" novalidate="">
                    @csrf
                    <div class="card-header">
                        <h4>Update Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">    
                            <div class="form-group col-12">
                                <label>Current Password</label>
                                <input type="text" class="form-control" name="current_password">
                            </div>
                            <div class="form-group col-12">
                                <label>New Password</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                            <div class="form-group col-12">
                                <label>Confirm New Password</label>
                                <input type="text" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
        
      </div>
    </div>
  </section>
@endsection