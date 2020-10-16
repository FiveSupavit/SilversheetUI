@extends('layouts.admin.main')
@section('page.title','Add Member | Silversheet')
@section('style')
    <link rel="stylesheet" href="{{asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/dropify/dropify.css')}}">
    <style>
        .panel-title {
            padding-left: 0;
        }

        .panel-actions {
            right: 0;
        }
    </style>
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content">
        <div class="panel">
            <form>
                <div class="panel-body container-fluid">
                    <!-- Example Horizontal Form -->
                    <div class="row row-lg justify-content-center">
                        <div class="col-md-8 col-lg-8">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">First Name: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="firstname" placeholder="First Name" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Middle Name: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="middlename" placeholder="Middle Name" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Last Name: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Gender: </label>
                                        <div class="col-md-8">
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
                                        <label class="col-md-4 col-form-label">Role: </label>
                                        <div class="col-md-8">
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
                                        <label class="col-md-4 col-form-label">Email: </label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" name="email" placeholder="@email.com"
                                                   autocomplete="off" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Start User Detail -->
                                <div id="user_detail">
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label" for="birthdate">Birth Date:</label>
                                        <div class="col-md-8">
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
                                        <label class="col-md-4 col-form-label" for="active_since">Active Since:</label>
                                        <div class="col-md-8">
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
                                        <label class="col-md-4 col-form-label" for="expired_date">Expired Date:</label>
                                        <div class="col-md-8">
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
                                        <label class="col-md-4 col-form-label">Status: </label>
                                        <div class="col-md-8">
                                            <select type="text" class="form-control" placeholder="Search by name or NPI">
                                                <option value="" disabled selected>Select Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <header class="panel-heading">
                                        <h6 class="panel-title">
                                            Company
                                            <div class="panel-actions panel-actions-keep">
                                                <button type="button" id="add_field_company" class="btn btn-floating btn-success btn-sm shadow-none"><i class="wb-plus" aria-hidden="true"></i></button>
                                            </div>
                                        </h6>
                                    </header>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Company: </label>
                                        <div class="col-md-8">
                                            <select type="text" class="form-control" id="company1">
                                                <option value="" disabled selected>Select Company</option>
                                                <option value="Company A">Company A</option>
                                                <option value="Company B">Company B</option>
                                                <option value="Company C">Company C</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Position: </label>
                                        <div class="col-md-8">
                                            <select type="text" class="form-control" id="input_position_1">
                                                <option value="" disabled selected>Select Position</option>
                                                <option value="doctor">Doctor</option>
                                                <option value="pa">PA</option>
                                                <option value="nurse">Nurse</option>
                                                <option value="CRNA">CRNA/Anesthesiologist</option>
                                                <option value="rt">RT</option>
                                                <option value="st">ST</option>
                                                <option value="ma">MA</option>
                                                <option value="staff">Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Start Doctor Detail1 --> <!-- PA , CRNA/Anesthesiologist ใช้ด้วย -->
                                    <div id="doctor_detail_1">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">License Type: </label>
                                            <div class="col-md-8">
                                                <select type="text" class="form-control" id="license_type_doctor1">
                                                    <option value="" disabled selected>Select License Type</option>
                                                    <option value="Type1">Type1</option>
                                                    <option value="Type2">Type2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">NPI Number: </label>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="npi_number_doctor1" placeholder=""
                                                       autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Primary Specialty: </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="primary_specialty_doctor1" placeholder=""
                                                       autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Doctor Detail1 -->
                                    <!-- Start Nurse Detail1 -->
                                    <div id="nurse_detail_1">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Nurse Type: </label>
                                            <div class="col-md-8">
                                                <select type="text" class="form-control" id="nurse_type1">
                                                    <option value="" disabled selected>Select Nurse Type</option>
                                                    <option value="Registered Nurse(RN)">Registered Nurse(RN)</option>
                                                    <option value="Licensed Practical Nurse(LPN)">Licensed Practical Nurse(LPN)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">License Number: </label>
                                            <div class="col-md-8">
                                                <input type="number" class="form-control" id="license_number_nurse1" placeholder=""
                                                       autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label"></label>
                                            <div class="col-md-8">
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="radio_nurse_practice1" name="inputRadioNurse1" />
                                                    <label for="radio_nurse_practice1">Nurse Practitioner</label>
                                                </div>
                                                <div class="radio-custom radio-default radio-inline">
                                                    <input type="radio" id="radio_nurse1" name="inputRadioNurse1" checked />
                                                    <label for="radio_nurse1">Nurse</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Nurse Detail1 -->
                                    <!-- Start RT Detail1 --> <!-- ST ใช้ด้วย -->
                                    <div id="rt_detail_1">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">License Type: </label>
                                            <div class="col-md-8">
                                                <select type="text" class="form-control" id="license_type_rt1">
                                                    <option value="" disabled selected>Select License Type</option>
                                                    <option value="Type1">Type1</option>
                                                    <option value="Type2">Type2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End RT Detail1 -->
                                    <!-- Start MA Detail1 -->
                                    <div id="ma_detail_1">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">MA Certificate: </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="ma_certificate1" placeholder=""
                                                       autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End MA Detail1 -->
                                    <!-- Start Staff Detail1 -->
                                    <div id="staff_detail_1">
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Staff Type: </label>
                                            <div class="col-md-8">
                                                <select type="text" class="form-control" id="staff_type1">
                                                    <option value="" disabled selected>Select Staff Type</option>
                                                    <option value="Type1">Type1</option>
                                                    <option value="Type2">Type2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Job Title: </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="job_title_staff1" placeholder=""
                                                       autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Staff Detail1 -->
                                    <div id="company_detail_2">
                                        <hr>
                                        <div class="example">
                                            <header class="panel-heading">
                                                <h6 class="panel-title">
                                                    <div class="panel-actions panel-actions-keep">
                                                        <button type="button" id="remove_field_company_2" class="btn btn-floating btn-danger btn-sm shadow-none"><i class="wb-close" aria-hidden="true"></i></button>
                                                    </div>
                                                </h6>
                                            </header>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Company: </label>
                                            <div class="col-md-8">
                                                <select type="text" class="form-control" id="company2">
                                                    <option value="" disabled selected>Select Company</option>
                                                    <option value="Company A">Company A</option>
                                                    <option value="Company B">Company B</option>
                                                    <option value="Company C">Company C</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Position: </label>
                                            <div class="col-md-8">
                                                <select type="text" class="form-control" id="input_position_2">
                                                    <option value="" disabled selected>Select Position</option>
                                                    <option value="doctor">Doctor</option>
                                                    <option value="pa">PA</option>
                                                    <option value="nurse">Nurse</option>
                                                    <option value="CRNA">CRNA/Anesthesiologist</option>
                                                    <option value="rt">RT</option>
                                                    <option value="st">ST</option>
                                                    <option value="ma">MA</option>
                                                    <option value="staff">Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Start Doctor Detail2 --> <!-- PA , CRNA/Anesthesiologist ใช้ด้วย -->
                                        <div id="doctor_detail_2">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">License Type: </label>
                                                <div class="col-md-8">
                                                    <select type="text" class="form-control" id="license_type_doctor2">
                                                        <option value="" disabled selected>Select License Type</option>
                                                        <option value="Type1">Type1</option>
                                                        <option value="Type2">Type2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">NPI Number: </label>
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control" id="npi_number_doctor2" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Primary Specialty: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="primary_specialty_doctor2" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Doctor Detail2 -->
                                        <!-- Start Nurse Detail2 -->
                                        <div id="nurse_detail_2">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Nurse Type: </label>
                                                <div class="col-md-8">
                                                    <select type="text" class="form-control" id="nurse_type2">
                                                        <option value="" disabled selected>Select Nurse Type</option>
                                                        <option value="Registered Nurse(RN)">Registered Nurse(RN)</option>
                                                        <option value="Licensed Practical Nurse(LPN)">Licensed Practical Nurse(LPN)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">License Number: </label>
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control" id="license_number_nurse2" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label"></label>
                                                <div class="col-md-8">
                                                    <div class="radio-custom radio-default radio-inline">
                                                        <input type="radio" id="radio_nurse_practice2" name="inputRadioNurse2" />
                                                        <label for="radio_nurse_practice2">Nurse Practitioner</label>
                                                    </div>
                                                    <div class="radio-custom radio-default radio-inline">
                                                        <input type="radio" id="radio_nurse2" name="inputRadioNurse2" checked />
                                                        <label for="radio_nurse2">Nurse</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Nurse Detail2 -->
                                        <!-- Start RT Detail2 --> <!-- ST ใช้ด้วย -->
                                        <div id="rt_detail_2">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">License Type: </label>
                                                <div class="col-md-8">
                                                    <select type="text" class="form-control" id="license_type_rt2">
                                                        <option value="" disabled selected>Select License Type</option>
                                                        <option value="Type1">Type1</option>
                                                        <option value="Type2">Type2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End RT Detail2 -->
                                        <!-- Start MA Detail2 -->
                                        <div id="ma_detail_2">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">MA Certificate: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="ma_certificate2" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End MA Detail2 -->
                                        <!-- Start Staff Detail2 -->
                                        <div id="staff_detail_2">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Staff Type: </label>
                                                <div class="col-md-8">
                                                    <select type="text" class="form-control" id="staff_type2">
                                                        <option value="" disabled selected>Select Staff Type</option>
                                                        <option value="Type1">Type1</option>
                                                        <option value="Type2">Type2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Job Title: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="job_title_staff1" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Staff Detail2 -->
                                    </div>
                                    <div id="company_detail_3">
                                        <hr>
                                        <div class="example">
                                            <header class="panel-heading">
                                                <h6 class="panel-title">
                                                    <div class="panel-actions panel-actions-keep">
                                                        <button type="button" id="remove_field_company_3" class="btn btn-floating btn-danger btn-sm shadow-none"><i class="wb-close" aria-hidden="true"></i></button>
                                                    </div>
                                                </h6>
                                            </header>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Company: </label>
                                            <div class="col-md-8">
                                                <select type="text" class="form-control" id="company3">
                                                    <option value="" disabled selected>Select Company</option>
                                                    <option value="Company A">Company A</option>
                                                    <option value="Company B">Company B</option>
                                                    <option value="Company C">Company C</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label">Position: </label>
                                            <div class="col-md-8">
                                                <select type="text" class="form-control" id="input_position_3">
                                                    <option value="" disabled selected>Select Position</option>
                                                    <option value="doctor">Doctor</option>
                                                    <option value="pa">PA</option>
                                                    <option value="nurse">Nurse</option>
                                                    <option value="CRNA">CRNA/Anesthesiologist</option>
                                                    <option value="rt">RT</option>
                                                    <option value="st">ST</option>
                                                    <option value="ma">MA</option>
                                                    <option value="staff">Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Start Doctor Detail3 --> <!-- PA , CRNA/Anesthesiologist ใช้ด้วย -->
                                        <div id="doctor_detail_3">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">License Type: </label>
                                                <div class="col-md-8">
                                                    <select type="text" class="form-control" id="license_type_doctor3">
                                                        <option value="" disabled selected>Select License Type</option>
                                                        <option value="Type1">Type1</option>
                                                        <option value="Type2">Type2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">NPI Number: </label>
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control" id="npi_number_doctor3" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Primary Specialty: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="primary_specialty_doctor3" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Doctor Detail3 -->
                                        <!-- Start Nurse Detail3 -->
                                        <div id="nurse_detail_3">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Nurse Type: </label>
                                                <div class="col-md-8">
                                                    <select type="text" class="form-control" id="nurse_type3">
                                                        <option value="" disabled selected>Select Nurse Type</option>
                                                        <option value="Registered Nurse(RN)">Registered Nurse(RN)</option>
                                                        <option value="Licensed Practical Nurse(LPN)">Licensed Practical Nurse(LPN)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">License Number: </label>
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control" id="license_number_nurse2" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label"></label>
                                                <div class="col-md-8">
                                                    <div class="radio-custom radio-default radio-inline">
                                                        <input type="radio" id="radio_nurse_practice2" name="inputRadioNurse2" />
                                                        <label for="radio_nurse_practice2">Nurse Practitioner</label>
                                                    </div>
                                                    <div class="radio-custom radio-default radio-inline">
                                                        <input type="radio" id="radio_nurse2" name="inputRadioNurse2" checked />
                                                        <label for="radio_nurse2">Nurse</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Nurse Detail3 -->
                                        <!-- Start RT Detail3 --> <!-- ST ใช้ด้วย -->
                                        <div id="rt_detail_3">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">License Type: </label>
                                                <div class="col-md-8">
                                                    <select type="text" class="form-control" id="license_type_rt3">
                                                        <option value="" disabled selected>Select License Type</option>
                                                        <option value="Type1">Type1</option>
                                                        <option value="Type2">Type2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End RT Detail3 -->
                                        <!-- Start MA Detail3 -->
                                        <div id="ma_detail_3">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">MA Certificate: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="ma_certificate3" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End MA Detail3 -->
                                        <!-- Start Staff Detail3 -->
                                        <div id="staff_detail_3">
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Staff Type: </label>
                                                <div class="col-md-8">
                                                    <select type="text" class="form-control" id="staff_type3">
                                                        <option value="" disabled selected>Select Staff Type</option>
                                                        <option value="Type1">Type1</option>
                                                        <option value="Type2">Type2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label">Job Title: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="job_title_staff1" placeholder=""
                                                           autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Staff Detail3 -->
                                    </div>

                                    <header class="panel-heading">
                                        <h6 class="panel-title">
                                            Other Legal Name
                                        </h6>
                                    </header>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Other Legal First Name: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="other_firstname" placeholder="Other Legal First Name" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Other Legal Middle Name: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="other_middlename" placeholder="Other Legal Middle Name" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Other Legal Last Name: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="other_lastname" placeholder="Other Legal Last Name" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Other Legal Suf Name: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="other_sufname" placeholder="Other Legal Suf Name" autocomplete="off"/>
                                        </div>
                                    </div>

                                    <header class="panel-heading">
                                        <h6 class="panel-title">
                                            Personal Contact Info
                                        </h6>
                                    </header>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Phone: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="phone" placeholder="" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Personal Email: </label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" name="personal_email" placeholder="@email.com"
                                                   autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Pager: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="pager" placeholder="" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Fax: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="fax" placeholder="" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Address: </label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" name="address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Image: </label>
                                        <div class="col-md-8">
                                            <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""/>
                                        </div>
                                    </div>
                                </div>
                                <!-- End User Detail -->
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="button" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-default btn-outline">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Example Horizontal Form -->
                </div>
            </form>
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

            $('#doctor_detail_1').css('display','none');
            $('#nurse_detail_1').css('display','none');
            $('#rt_detail_1').css('display','none');
            $('#ma_detail_1').css('display','none');
            $('#staff_detail_1').css('display','none');

            $('#company_detail_2').css('display','none');
            $('#doctor_detail_2').css('display','none');
            $('#nurse_detail_2').css('display','none');
            $('#rt_detail_2').css('display','none');
            $('#ma_detail_2').css('display','none');
            $('#staff_detail_2').css('display','none');

            $('#company_detail_3').css('display','none');
            $('#doctor_detail_3').css('display','none');
            $('#nurse_detail_3').css('display','none');
            $('#rt_detail_3').css('display','none');
            $('#ma_detail_3').css('display','none');
            $('#staff_detail_3').css('display','none');
        });

        $("#role").change(function () {
            if($(this).val() == "user") {
                $('#user_detail').css('display','block');
            } else  {
                $('#user_detail').css('display','none');
            }
        });

        $("#input_position_1").change(function () {
            if($(this).val() == "doctor" || $(this).val() == "pa" || $(this).val() == "CRNA") {
                $('#doctor_detail_1').css('display','block');
                $('#nurse_detail_1').css('display','none');
                $('#rt_detail_1').css('display','none');
                $('#ma_detail_1').css('display','none');
                $('#staff_detail_1').css('display','none');
            } else  if($(this).val() == "nurse") {
                $('#doctor_detail_1').css('display','none');
                $('#nurse_detail_1').css('display','block');
                $('#rt_detail_1').css('display','none');
                $('#ma_detail_1').css('display','none');
                $('#staff_detail_1').css('display','none');
            } else  if($(this).val() == "rt" || $(this).val() == "st") {
                $('#doctor_detail_1').css('display','none');
                $('#nurse_detail_1').css('display','none');
                $('#rt_detail_1').css('display','block');
                $('#ma_detail_1').css('display','none');
                $('#staff_detail_1').css('display','none');
            } else  if($(this).val() == "ma") {
                $('#doctor_detail_1').css('display','none');
                $('#nurse_detail_1').css('display','none');
                $('#rt_detail_1').css('display','none');
                $('#ma_detail_1').css('display','block');
                $('#staff_detail_1').css('display','none');
            } else  if($(this).val() == "staff") {
                $('#doctor_detail_1').css('display','none');
                $('#nurse_detail_1').css('display','none');
                $('#rt_detail_1').css('display','none');
                $('#ma_detail_1').css('display','none');
                $('#staff_detail_1').css('display','block');
            }
        });

        $("#input_position_2").change(function () {
            if($(this).val() == "doctor" || $(this).val() == "pa" || $(this).val() == "CRNA") {
                $('#doctor_detail_2').css('display','block');
                $('#nurse_detail_2').css('display','none');
                $('#rt_detail_2').css('display','none');
                $('#ma_detail_2').css('display','none');
                $('#staff_detail_2').css('display','none');
            } else  if($(this).val() == "nurse") {
                $('#doctor_detail_2').css('display','none');
                $('#nurse_detail_2').css('display','block');
                $('#rt_detail_2').css('display','none');
                $('#ma_detail_2').css('display','none');
                $('#staff_detail_2').css('display','none');
            } else  if($(this).val() == "rt" || $(this).val() == "st") {
                $('#doctor_detail_2').css('display','none');
                $('#nurse_detail_2').css('display','none');
                $('#rt_detail_2').css('display','block');
                $('#ma_detail_2').css('display','none');
                $('#staff_detail_2').css('display','none');
            } else  if($(this).val() == "ma") {
                $('#doctor_detail_2').css('display','none');
                $('#nurse_detail_2').css('display','none');
                $('#rt_detail_2').css('display','none');
                $('#ma_detail_2').css('display','block');
                $('#staff_detail_2').css('display','none');
            } else  if($(this).val() == "staff") {
                $('#doctor_detail_2').css('display','none');
                $('#nurse_detail_2').css('display','none');
                $('#rt_detail_2').css('display','none');
                $('#ma_detail_2').css('display','none');
                $('#staff_detail_2').css('display','block');
            }
        });

        $("#input_position_3").change(function () {
            if($(this).val() == "doctor" || $(this).val() == "pa" || $(this).val() == "CRNA") {
                $('#doctor_detail_3').css('display','block');
                $('#nurse_detail_3').css('display','none');
                $('#rt_detail_3').css('display','none');
                $('#ma_detail_3').css('display','none');
                $('#staff_detail_3').css('display','none');
            } else  if($(this).val() == "nurse") {
                $('#doctor_detail_3').css('display','none');
                $('#nurse_detail_3').css('display','block');
                $('#rt_detail_3').css('display','none');
                $('#ma_detail_3').css('display','none');
                $('#staff_detail_3').css('display','none');
            } else  if($(this).val() == "rt" || $(this).val() == "st") {
                $('#doctor_detail_3').css('display','none');
                $('#nurse_detail_3').css('display','none');
                $('#rt_detail_3').css('display','block');
                $('#ma_detail_3').css('display','none');
                $('#staff_detail_3').css('display','none');
            } else  if($(this).val() == "ma") {
                $('#doctor_detail_3').css('display','none');
                $('#nurse_detail_3').css('display','none');
                $('#rt_detail_3').css('display','none');
                $('#ma_detail_3').css('display','block');
                $('#staff_detail_3').css('display','none');
            } else  if($(this).val() == "staff") {
                $('#doctor_detail_3').css('display','none');
                $('#nurse_detail_3').css('display','none');
                $('#rt_detail_3').css('display','none');
                $('#ma_detail_3').css('display','none');
                $('#staff_detail_3').css('display','block');
            }
        });

        $("#add_field_company").click(function () {
            if($('#company_detail_2:visible').length == 0) {
                $('#company_detail_2').css('display','block');
            }
            else if ($('#company_detail_3:visible').length == 0) {
                $('#company_detail_3').css('display','block');
                if($('#company_detail_3:visible').length == 1) {
                    $("#add_field_company").css('display','none');
                }
            }
        });

        $("#remove_field_company_2").click(function () {
            $('#company_detail_2').css('display','none');
            $('#company_detail_2').find("input,select").val('');
            $('#doctor_detail_2').css('display','none');
            $('#nurse_detail_2').css('display','none');
            $('#rt_detail_2').css('display','none');
            $('#ma_detail_2').css('display','none');
            $('#staff_detail_2').css('display','none');
            if($('#company_detail_2:visible').length == 0) {
                $("#add_field_company").css('display','block');
            }
        });

        $("#remove_field_company_3").click(function () {
            $('#company_detail_3').css('display','none');
            $('#company_detail_3').find("input,select").val('');
            $('#doctor_detail_3').css('display','none');
            $('#nurse_detail_3').css('display','none');
            $('#rt_detail_3').css('display','none');
            $('#ma_detail_3').css('display','none');
            $('#staff_detail_3').css('display','none');
            if($('#company_detail_3:visible').length == 0) {
                $("#add_field_company").css('display','block');
            }
        });
    </script>
@endsection
