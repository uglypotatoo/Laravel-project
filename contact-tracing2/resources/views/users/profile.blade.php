@extends('layouts.master')

@section('title')
    KONEK | Profile
@endsection

@section('content')


        <!--------------------------- ESTABLISHMENTS --------------------------->
        {{-- <div class="account_information">
            <h1>Profile</h1>
            <div class="account_layout">
                <span class="material-symbols-rounded">badge</span>
                <h3>Account Information</h3>

                    <div class="tab">
                        <div class="icon">
                <span class="material-symbols-rounded">key</span>
                <h3>Account Information</h3>
                    </div>
                </div>
            </div>
        </div> --}}
        
        
        <div class="account_information">
            <h1>Profile</h1>
            <div>
                <span class="material-symbols-rounded">badge</span>
                <h3>Account Information</h3>

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">Title</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">Admin</p>
                          </div>
                        </div>
                        <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Username</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">SuperAdmin</p>
                        </div>
                      </div>
                      <hr>
                <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">Johnatan Smith</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">example@example.com</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Phone</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">63+ (974) 242-5678</p>
                        </div>
                      </div>

                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                          <p class="text-muted mb-0">San Francisco, CA</p>
                        </div>
                      </div>
                    </div>
                  </div>


                <span class="material-symbols-rounded" >key</span>
                <h3>Account Information</h3>
                <div class="card mb-4" >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Current Password</p>
                        </div>
                        <div class="col-sm-9">
                            <input type="password" value="Password" class="form-control text-muted" id="exampleInputPassword1" placeholder="Password" readonly="readonly">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">New Password</p>
                        </div>
                        <div class="col-sm-9">
                          <input type="password"  class="form-control text-muted" id="exampleInputPassword1" placeholder="Password">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <p class="mb-0">Password Confirmation</p>
                        </div>
                        <div class="col-sm-9">
                            <input type="password" class="form-control text-muted" id="exampleInputPassword1" placeholder="Password">
                        </div>
                      </div>
                      <hr>
                      <div class="container justify-content-center">

                        <div class="d-grid gap-2 d-md-flex justify-content-center">
                            <button class="btn btn-primary me-md-3" type="button" style="width:100px;"> Save</button>
                            <button class="btn btn-danger" type="button" style="width:100px;">Cancel</button>
                          </div>
                      </div>
                      </div>
                    </div>
                  </div>

            </div>
        </div>






       

        
            
       
        
        
        
        
@endsection

    @section('scripts')
    
@endsection

