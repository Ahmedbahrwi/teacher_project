@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Add User</div>
                  <div class="card-body">
  
                      <form action="{{ route('user.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="student_name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="student_name" class="form-control" name="student_name" required autofocus>
                                  @if ($errors->has('student_name'))
                                      <span class="text-danger">{{ $errors->first('student_name') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                          <select class="form-select" aria-label="Default select example" name="student_year">
                          <option selected name="student_year">السنة الدراسية</option>
                          <option value=1 name="student_year">1</option>
                          <option value=2 name="student_year">2</option>
                          <option value=3 name="student_year">3</option>
                          </select>
                          
  
  
                          <div class="form-group row">
                              <label for="student_phone" class="col-md-4 col-form-label text-md-right">Student Phone</label>
                              <div class="col-md-6">
                                  <input type="text" id="student_phone" class="form-control" name="student_phone" required autofocus>
                                  @if ($errors->has('student_phone'))
                                      <span class="text-danger">{{ $errors->first('student_phone') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="student_par_phone" class="col-md-4 col-form-label text-md-right">Parant Phone</label>
                              <div class="col-md-6">
                                  <input type="text" id="student_par_phone" class="form-control" name="student_par_phone" required>
                                  @if ($errors->has('student_par_phone'))
                                      <span class="text-danger">{{ $errors->first('student_par_phone') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="student_gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                              <div class="col-md-6">
                                  <input type="text" id="student_gender" class="form-control" name="student_gender" required autofocus>
                                  @if ($errors->has('student_gender'))
                                      <span class="text-danger">{{ $errors->first('student_gender') }}</span>
                                  @endif
                              </div>
                          </div>
  
                         
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Submit
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection