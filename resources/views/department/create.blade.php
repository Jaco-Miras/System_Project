<!-- @extends('layouts.layouts')
@section('title', 'Add Department')
@section('content') -->

<div class="page-wrapper">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                <h2 class="title">Department Registration Form</h2>
                </div>
              
                <div class="card-body">
                    <form method="post" action="/department2">
                   @csrf
                    <div class="form-row">
                            <div class="name">Department Name:</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="department" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    
                        
                        <div>
                            <button class=" btn btn-success" type="submit">Register</button>
                     
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

<!-- 
@endsection -->