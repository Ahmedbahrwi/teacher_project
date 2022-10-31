@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Login</div>
                  <div class="card-body">
  
                      <form action="{{ route('attend.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="attendence_student_uid" class="col-md-4 col-form-label text-md-right">student id</label>
                              <div class="col-md-6">
                                  <input type="number" id="attendence_student_uid" class="form-control" name="attendence_student_uid" required autofocus>
                                  
                              </div>
                          </div>
                          <div class="form-group row">
                          <select class="form-select" aria-label="Default select example" name="attendence_course_name">
                          <option selected name="attendence_course_name">اختار المنطقة</option>
                          <option value="شبرا" name="attendence_course_name">شبرا</option>
                          <option value="القاهرة"name="attendence_course_name">القاهرة</option>
                          <option value="زايد"name="attendence_course_name">زايد</option>
                          </select>
                          
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
                                  Submit
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