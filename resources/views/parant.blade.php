@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Login</div>
                  <div class="card-body">
  
                      <form action="{{ route('atttend.pst') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="attendence_student_uid" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="number"id="attendence_student_uid" class="form-control" name="attendence_student_uid" required autofocus>
                            
                              </div>
                          </div>
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Check
                              </button>
                          </div>
                      </form>