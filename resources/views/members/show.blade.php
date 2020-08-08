<!-- @extends('layouts.layouts')
@section('title', 'Update Validation')
@section('content') -->

<div class="page-wrapper">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                <h2 class="title">Participant Update Form</h2>
                </div>
              
                <div class="card-body">
                    <form method="post" action="#">
                   @csrf
                  @method('PATCH')
                  <div class="form-row">
                            <div class="name">First Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="firstname" placeholder="Enter New Firstname" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="lastname"  placeholder="Enter New Lastname" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Department</div>
                            <div class="value">
                            <div class="input-group">
                            <select class="custom-select" name="department" id="departmentsOption" >
                            <option selected value="">Choose Department:</option>
                                <option value="HR">Human Resource</option>
                                <option value="IT">Information Technology</option>
                                <option value="SA">Sales</option>
                                <option value="MRKT">Marketing</option>
                                <option value="EDS">Eds</option>
                                <option value="APMG">Apmg</option>
                                <option value="BUS">Businness Dev</option>
                            </select>
                            </div>
                            </div>
                        </div>
                 
                      
                        
                        <div>
                            <button class="btn btn-success" onclick="validate()" type="submit">Update</button>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/forms/vendor/jquery/jquery.min.js"></script>
    <!-- forms/Vendor JS-->
    <script src="/forms/vendor/select2/select2.min.js"></script>
    <script src="/forms/vendor/datepicker/moment.min.js"></script>
    <script src="/forms/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/forms/js/global.js"></script>
       
 <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }

    function validate(){
        if ($("#departmentsOption").val() === "") {
            alert('Please Choose Department');
        }
    }
  </script>

<!-- @endsection --> 