<!-- @extends('layouts.layouts')
@section('title', 'Update Validation')
@section('content') -->

<div class="page-wrapper">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                <h2 class="title">Event Update Form</h2>
                </div>
              
                <div class="card-body">
                    <form method="post" action="#">
                   @csrf
                  @method('PATCH')
                  <div class="form-row">
                            <div class="name">Event Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="event_name"  placeholder="Enter New Event Name" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Location</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="location"   placeholder="Enter New Location" autocomplete="off" required> 
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="date"   placeholder="Enter New Date" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                 
                      
                        
                        <div>
                            <button class="btn btn-success">Update</button>
                       
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
  </script>
<!-- 
@endsection -->