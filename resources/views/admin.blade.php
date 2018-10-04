@extends('layouts.master')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand"
            href="#">Navbar</a>
        <div class="collapse navbar-collapse justify-content-center"
            id="navbarNav">
          <ul class="navbar-nav pull-right">
            <li class="nav-item active">
              <a class="nav-link"
                  href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                  href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                  href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled"
                  href="#">Disabled</a>
            </li>
          </ul>
        </div>
        <div class="form-inline">
          <a href="#"></a>
        </div>
      </nav>{{--<nav class="navigate">
                    <ul class="nav justify-content-center">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Settings</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                    </ul>
            </nav>--}}
      <section>
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Hello, Kwame!</h1>
            <p class="lead">This is your workspace for handling all administration in the Hospital.</p>
            <hr class="my-4">
            <p>Below is a recap on your recent interractions. Here you can monitor what goes in and out of your database</p>
          </div>{{--container--}}
        </div>{{--jumbotron [opening title]--}}
      </section>
      <div class="card text-center news">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer text-muted">
          7 days ago
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer text-muted">
          14 days ago
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer text-muted">
          21 days ago
        </div>
      </div>
      <nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand"
            href="#">Navbar</a>
        <div class="collapse navbar-collapse justify-content-center"
            id="navbarNav">
          <ul class="navbar-nav nav-fill pull-right">
            <li class="nav-item active">
              <a class="nav-link" data-toggle="modal" href="#register">Register <i class="fas fa-plus-circle"></i><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                  href="#">Update <i class="fas fa-pen-square"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                  href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled"
                  href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
      
      {{--Modal Section--}}
      {{--Register Form--}}
      <div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="register" role="dialog"
          tabindex="-1">
        <div class="modal-dialog modal-dialog-centered"
            role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Register</h5>
              <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-patient-tab" data-toggle="tab" href="#nav-patient" role="tab" aria-controls="nav-patient" aria-selected="true">Patient</a>
                      <a class="nav-item nav-link" id="nav-doctor-tab" data-toggle="tab" href="#nav-doctor" role="tab" aria-controls="nav-doctor" aria-selected="false">Doctor</a>
                      <a class="nav-item nav-link" id="nav-pharmacy-tab" data-toggle="tab" href="#nav-pharmacy" role="tab" aria-controls="nav-pharmacy" aria-selected="false">Pharmacy</a>
                    </div>
                  </nav>
                  {{--Patient Form--}}
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-patient" role="tabpanel" aria-labelledby="nav-patient-tab">
                        <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Username</label>
                                <input type="text" class="form-control" id="inputusername" placeholder="Username">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <div class="input-group mb-3" id="show_hide_password">
                                    <input type="password" class="form-control" id="pass" placeholder="Password">
                                    <div class="input-group-append">
                                        <a href="" class="btn btn-outline-secondary"><i class="fas fa-eye-slash" aria-hidden="true"></i></i></a>
                                        
                                    </div>
                                  </div>
                                 
                                <button type="button"onClick="generate()" class="btn btn-outline-success">Gen Password</button>
                              </div>
                            </div>
                            
                          </form>
                    </div>
  
                    {{--Doctor form--}}
                    <div class="tab-pane fade" id="nav-doctor" role="tabpanel" aria-labelledby="nav-doctor-tab">
                        <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputAddress">Address</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                              <label for="inputAddress2">Address 2</label>
                              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                  Check me out
                                </label>
                              </div>
                            </div>
                            
                          </form>
                    </div>
  
                    {{--pharmacy form--}}
                    <div class="tab-pane fade" id="nav-pharmacy" role="tabpanel" aria-labelledby="nav-pharmacy-tab">
                        {{--<form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <div class="input-group mb-3" id="show_hide_password">
                                    <input type="password" class="form-control" id="pass" placeholder="Password">
                                    <div class="input-group-append">
                                        <a href=""><i class="fas fa-eye" aria-hidden="true"></i></i></a>
                                        
                                    </div>
                                  </div>
                                 
                                <button type="button"onClick="generate()" class="btn btn-outline-success">Gen Password</button>
                              </div>
                            </div>
                           
                          </form>--}}
                    </div>
                  </div>
             
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal" type="button">Close</button> 
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>
        </div>
      </div>
@endsection