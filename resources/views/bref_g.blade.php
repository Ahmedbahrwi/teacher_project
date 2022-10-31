@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Login</div>
                  <div class="card-body">
  
                      <form action="{{ route('bref.pst') }}" method="POST">
                          @csrf
                          
                          
                          
                          <div class="form-group row" lang="en">
                          <label name="attendance_date">Enter your birthday:
                          <input type="date" name="attendance_date" id="attendance_date">
                          
                          </label>
    
    
  
                          </div>
                          </div>
                          <div class="form-group row">
                              <label for="attendance_time" class="col-md-4 col-form-label text-md-right">Time Of Course</label>
                              <div class="col-md-6">
                                  <input type="number" id="attendance_time" class="form-control" name="attendance_time" required autofocus>
                                  
                              </div>
                          </div>
  
                                  
                        
                          

  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Bref
                              </button>
                          </div>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection