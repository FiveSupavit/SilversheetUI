@extends('layouts.main')
@section('page.title','Add Member | Silversheet')
@section('style')
    <link rel="stylesheet" href="{{asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/dropify/dropify.css')}}">
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
{{--                    <header class="panel-heading">--}}
{{--                        <h3 class="panel-title">--}}
{{--                            Add Member--}}
{{--                        </h3>--}}
{{--                    </header>--}}
                    <form class="form-horizontal">
                        <div class="panel-body container-fluid">
                            <div class="row row-lg">
                                <div class="col-md-12 col-lg-6">
                                    <!-- Example Horizontal Form -->
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">First Name: </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="firstname" placeholder="First Name" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Middle Name: </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Last Name: </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Gender: </label>
                                        <div class="col-md-9">
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputHorizontalMale" name="inputRadioGender" />
                                                <label for="inputHorizontalMale">Male</label>
                                            </div>
                                            <div class="radio-custom radio-default radio-inline">
                                                <input type="radio" id="inputHorizontalFemale" name="inputRadioGender" checked
                                                />
                                                <label for="inputHorizontalFemale">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Role: </label>
                                        <div class="col-md-9">
                                            <select type="text" class="form-control" id="role">
                                                <option value="" disabled selected>Select Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="manager">Manager</option>
                                                <option value="staff">Staff</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-control-label">Email: </label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" name="email" placeholder="@email.com"
                                                   autocomplete="off" />
                                        </div>
                                    </div>

                                    <!-- Start User Detail -->
                                    <div id="user_detail">
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Company: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="company" placeholder="Company"
                                                       autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Position: </label>
                                            <div class="col-md-9">
                                                <select type="text" class="form-control" id="input_position">
                                                    <option value="" disabled selected>Select Position</option>
                                                    <option value="doctor">Doctor</option>
                                                    <option value="nurse">Nurse</option>
                                                    <option value="staff">Other Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Start Doctor Detail -->
                                        <div id="doctor_detail">
                                            <div class="form-group row">
                                                <label class="col-md-3 form-control-label">License Type: </label>
                                                <div class="col-md-9">
                                                    <select type="text" class="form-control">
                                                        <option value="" disabled selected>Select License Type</option>
                                                        <option value="Type1">Type1</option>
                                                        <option value="Type2">Type2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 form-control-label">NPI Number: </label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" name="npi_number" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 form-control-label">Primary Specialty: </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="primary_specialty" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="birthdate">Birth Date:</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="birthdate"
                                                           data-plugin="datepicker">
                                                    <div class="input-group-append">
                                                    <span class="input-group-text">
                                                      <i class="icon wb-calendar" aria-hidden="true"></i>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="active_since">Active Since:</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="active_since"
                                                           data-plugin="datepicker">
                                                    <div class="input-group-append">
                                                    <span class="input-group-text">
                                                      <i class="icon wb-calendar" aria-hidden="true"></i>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="expired_date">Expired Date:</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="expired_date"
                                                           data-plugin="datepicker">
                                                    <div class="input-group-append">
                                                    <span class="input-group-text">
                                                      <i class="icon wb-calendar" aria-hidden="true"></i>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Status: </label>
                                            <div class="col-md-9">
                                                <select type="text" class="form-control" placeholder="Search by name or NPI">
                                                    <option value="" disabled selected>Select Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <header class="panel-heading">
                                            <h6 class="panel-title">
                                                Other Legal Name
                                            </h6>
                                        </header>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Other Legal First Name: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="other_firstname" placeholder="Other Legal First Name" autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Other Legal Middle Name: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="other_middlename" placeholder="Other Legal Middle Name" autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Other Legal Last Name: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="other_lastname" placeholder="Other Legal Last Name" autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Other Legal Suf Name: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="other_sufname" placeholder="Other Legal Suf Name" autocomplete="off"/>
                                            </div>
                                        </div>
                                        <header class="panel-heading">
                                            <h6 class="panel-title">
                                                Personal Contact Info
                                            </h6>
                                        </header>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Phone: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="phone" placeholder="" autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Personal Email: </label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" name="personal_email" placeholder="@email.com"
                                                       autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Pager: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="pager" placeholder="" autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Fax: </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="fax" placeholder="" autocomplete="off"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Address: </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Image: </label>
                                            <div class="col-md-9">
                                                <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End User Detail -->

                                    <div class="form-group row">
                                        <div class="col-md-9 offset-md-3">
                                            <button type="button" class="btn btn-primary">Submit </button>
                                            <button type="reset" class="btn btn-default btn-outline">Reset</button>
                                        </div>
                                    </div>
                                    <!-- End Example Horizontal Form -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection
@section('script')
    <script src="{{asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('global/js/Plugin/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('global/vendor/dropify/dropify.min.js')}}"></script>

    <script>
        $( document ).ready(function() {
            $('#user_detail').css('display','none');
            $('#doctor_detail').css('display','none');
        });

        $("#role").change(function () {
            if($(this).val() == "user") {
                $('#user_detail').css('display','block');
            } else  {
                $('#user_detail').css('display','none');
            }
        });

        $("#input_position").change(function () {
            if($(this).val() == "doctor") {
                $('#doctor_detail').css('display','block');
            } else  {
                $('#doctor_detail').css('display','none');
            }
        });

    </script>
@endsection
