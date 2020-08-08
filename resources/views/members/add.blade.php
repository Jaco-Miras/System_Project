@extends('layouts.layouts')
@section('title', 'Participant Validation')
@section('content')

<div class="page-wrapper">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                <h2 class="title">Participant Registration Form</h2>
                </div>
              
                <div class="card-body">
                    <form method="post" action="/members">
                   @csrf
                    <div class="form-row">
                            <div class="name">ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="id">
                                </div>
                            </div>
                        </div>
                    <div class="form-row">
                            <div class="name">First Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="firstname" placeholder="Enter Firstname">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Last Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="firstname" placeholder="Enter Lastname">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="department">Department</label>
                            <select name="departments" id="department">
                                <option selected>Choose Department:</option>
                                <option value="HR">Human Resource</option>
                                <option value="IT">Information Technology</option>
                                <option value="ACC">Accounting</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="name">Head</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="head" placeholder="Enter Head">
                                </div>
                            </div>
                        </div>
                      
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red btn success" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="forms/vendor/jquery/jquery.min.js"></script>
    <!-- forms/Vendor JS-->
    <script src="forms/vendor/select2/select2.min.js"></script>
    <script src="forms/vendor/datepicker/moment.min.js"></script>
    <script src="forms/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="forms/js/global.js"></script>

@endsection