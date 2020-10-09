@extends('layouts.admin.main')
@section('page.title','Setting | Silversheet')
@section('style')
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/examples/css/tables/datatable.css')}}">

    <link rel="stylesheet" href="{{asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <!-- Panel Table Expired Certificate -->
                    <header class="panel-heading">
                        <h3 class="panel-title">
                            Certificate
                        </h3>
                    </header>
                    <div class="panel">
                        <div class="panel-body">
                            <button type="button" class="btn btn-primary" style="float: right;" data-target="#ModalAdd" data-toggle="modal">Add new</button>
                            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position Required</th>
                                    <th>Priority</th>
                                    <th>End date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Board Certification</td>
                                    <td>Doctor , PA , Nurse , CRNA/Anesthesiologist , RT , ST , MA</td>
                                    <td>1</td>
                                    <td>01/01/2021</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalEdit"
                                           data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Driver's License / ID Card</td>
                                    <td>All Position</td>
                                    <td>1</td>
                                    <td>Along Certificate</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalEdit"
                                           data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Resume</td>
                                    <td>All Position</td>
                                    <td>1</td>
                                    <td>Not Expired</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalEdit"
                                           data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Panel Table Expired Certificate -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Modal Add-->
    <div class="modal fade" id="ModalAdd" aria-hidden="true" aria-labelledby="ModalAdd"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple modal-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Add Certificate</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Name: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Name Certificate" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Position Required: </label>
                            <div class="col-md-9">
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddDoctor" />
                                            <label for="inputAddDoctor">Doctor</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddDoctorOptional" disabled />
                                            <label for="inputAddDoctorOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddPA" />
                                            <label for="inputAddPA">PA</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddPAOptional" disabled />
                                            <label for="inputAddPAOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddNurse" />
                                            <label for="inputAddNurse">Nurse</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddNurseOptional" disabled />
                                            <label for="inputAddNurseOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddCRNA" />
                                            <label for="inputAddCRNA">CRNA/Anesthesiologist</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddCRNAOptional" disabled />
                                            <label for="inputAddCRNAOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddRT" />
                                            <label for="inputAddRT">RT</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddRTOptional" disabled />
                                            <label for="inputAddRTOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddST" />
                                            <label for="inputAddST">ST</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddSTOptional" disabled />
                                            <label for="inputAddSTOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddMA" />
                                            <label for="inputAddMA">MA</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddMAOptional" disabled />
                                            <label for="inputAddMAOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddStaff" />
                                            <label for="inputAddStaff">Staff</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputAddStaffOptional" disabled />
                                            <label for="inputAddStaffOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Priority: </label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="priority" placeholder="" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">End Date Type: </label>
                            <div class="col-md-9">
                                <select type="text" class="form-control" id="add_end_date_type">
                                    <option value="" disabled selected>Select End Date Type</option>
                                    <option value="date">Date</option>
                                    <option value="along_certificate">Along Certificate</option>
                                    <option value="not_expired">Not Expired</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="add_row_end_date">
                            <label class="col-md-3 form-control-label" for="end_date">End Date:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="end_date"
                                           data-plugin="datepicker" autocomplete="off"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                          <i class="icon wb-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Add-->
    <!-- Modal Edit -->
    <div class="modal fade" id="ModalEdit" aria-hidden="true" aria-labelledby="ModalEdit"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple modal-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Edit Certificate</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Name: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Name Certificate" value="Board Certification" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Position Required: </label>
                            <div class="col-md-9">
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditDoctor" checked/>
                                            <label for="inputEditDoctor">Doctor</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditDoctorOptional" />
                                            <label for="inputEditDoctorOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditPA" checked/>
                                            <label for="inputEditPA">PA</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditPAOptional" />
                                            <label for="inputEditPAOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditNurse" checked/>
                                            <label for="inputEditNurse">Nurse</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditNurseOptional" />
                                            <label for="inputEditNurseOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditCRNA" checked/>
                                            <label for="inputEditCRNA">CRNA/Anesthesiologist</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditCRNAOptional" />
                                            <label for="inputEditCRNAOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditRT" checked/>
                                            <label for="inputEditRT">RT</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditRTOptional" />
                                            <label for="inputEditRTOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditST" checked/>
                                            <label for="inputEditST">ST</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditSTOptional" />
                                            <label for="inputEditSTOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditMA" checked/>
                                            <label for="inputEditMA">MA</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditMAOptional" />
                                            <label for="inputEditMAOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditStaff" />
                                            <label for="inputEditStaff">Staff</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="checkbox" id="inputEditStaffOptional" disabled/>
                                            <label for="inputEditStaffOptional">(Optional)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Priority: </label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="priority" placeholder="" value="1" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">End Date Type: </label>
                            <div class="col-md-9">
                                <select type="text" class="form-control" id="edit_end_date_type">
                                    <option value="" disabled selected>Select End Date Type</option>
                                    <option value="date" selected>Date</option>
                                    <option value="along_certificate">Along Certificate</option>
                                    <option value="not_expired">Not Expired</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="edit_row_end_date">
                            <label class="col-md-3 form-control-label" for="end_date">End Date:</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="end_date"
                                           data-plugin="datepicker" value="01/01/2021" autocomplete="off"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                          <i class="icon wb-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Edit -->
@endsection
@section('script')
    <!-- Plugins -->
    <script src="{{asset('global/vendor/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-scroller/dataTables.scroller.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-buttons/dataTables.buttons.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-buttons/buttons.html5.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-buttons/buttons.flash.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-buttons/buttons.print.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-buttons/buttons.colVis.js')}}"></script>
    <script src="{{asset('global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js')}}"></script>

    <!-- Page -->
    <script src="{{asset('global/js/Plugin/datatables.js')}}"></script>
    <script src="{{asset('assets/examples/js/tables/datatable.js')}}"></script>

    <script src="{{asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('global/js/Plugin/bootstrap-datepicker.js')}}"></script>

    <script>
        $( document ).ready(function() {
            $('#add_row_end_date').css('display','none');
            $('#edit_row_end_date').css('display','flex');
        });
        $("#add_end_date_type").change(function () {
            if($(this).val() == "date") {
                $('#add_row_end_date').css('display','flex');
            } else  {
                $('#add_row_end_date').css('display','none');
            }
        });
        $("#edit_end_date_type").change(function () {
            if($(this).val() == "date") {
                $('#edit_row_end_date').css('display','flex');
            } else  {
                $('#edit_row_end_date').css('display','none');
            }
        });

        //Check Value Checkbox (Optional , Add Modal)
        $("#inputAddDoctor").click(function () {
            if($(this).is(":checked")) {
                $('#inputAddDoctorOptional').prop( "disabled", false );
            } else  {
                $('#inputAddDoctorOptional').prop( "disabled", true );
            }
        });
        $("#inputAddPA").click(function () {
            if($(this).is(":checked")) {
                $('#inputAddPAOptional').prop( "disabled", false );
            } else  {
                $('#inputAddPAOptional').prop( "disabled", true );
            }
        });
        $("#inputAddNurse").click(function () {
            if($(this).is(":checked")) {
                $('#inputAddNurseOptional').prop( "disabled", false );
            } else  {
                $('#inputAddNurseOptional').prop( "disabled", true );
            }
        });
        $("#inputAddCRNA").click(function () {
            if($(this).is(":checked")) {
                $('#inputAddCRNAOptional').prop( "disabled", false );
            } else  {
                $('#inputAddCRNAOptional').prop( "disabled", true );
            }
        });
        $("#inputAddDoctor").click(function () {
            if($(this).is(":checked")) {
                $('#inputAddDoctorOptional').prop( "disabled", false );
            } else  {
                $('#inputAddDoctorOptional').prop( "disabled", true );
            }
        });
        $("#inputAddRT").click(function () {
            if($(this).is(":checked")) {
                $('#inputAddRTOptional').prop( "disabled", false );
            } else  {
                $('#inputAddRTOptional').prop( "disabled", true );
            }
        });
        $("#inputAddST").click(function () {
            if($(this).is(":checked")) {
                $('#inputAddSTOptional').prop( "disabled", false );
            } else  {
                $('#inputAddSTOptional').prop( "disabled", true );
            }
        });
        $("#inputAddMA").click(function () {
            if($(this).is(":checked")) {
                $('#inputAddMAOptional').prop( "disabled", false );
            } else  {
                $('#inputAddMAOptional').prop( "disabled", true );
            }
        });
        $("#inputAddStaff").click(function () {
            if($(this).is(":checked")) {
                $('#inputAddStaffOptional').prop( "disabled", false );
            } else  {
                $('#inputAddStaffOptional').prop( "disabled", true );
            }
        });

        //Check Value Checkbox (Optional , Edit Modal)
        $("#inputEditDoctor").click(function () {
            if($(this).is(":checked")) {
                $('#inputEditDoctorOptional').prop( "disabled", false );
            } else  {
                $('#inputEditDoctorOptional').prop( "disabled", true );
            }
        });
        $("#inputEditPA").click(function () {
            if($(this).is(":checked")) {
                $('#inputEditPAOptional').prop( "disabled", false );
            } else  {
                $('#inputEditPAOptional').prop( "disabled", true );
            }
        });
        $("#inputEditNurse").click(function () {
            if($(this).is(":checked")) {
                $('#inputEditNurseOptional').prop( "disabled", false );
            } else  {
                $('#inputEditNurseOptional').prop( "disabled", true );
            }
        });
        $("#inputEditCRNA").click(function () {
            if($(this).is(":checked")) {
                $('#inputEditCRNAOptional').prop( "disabled", false );
            } else  {
                $('#inputEditCRNAOptional').prop( "disabled", true );
            }
        });
        $("#inputEditDoctor").click(function () {
            if($(this).is(":checked")) {
                $('#inputEditDoctorOptional').prop( "disabled", false );
            } else  {
                $('#inputEditDoctorOptional').prop( "disabled", true );
            }
        });
        $("#inputEditRT").click(function () {
            if($(this).is(":checked")) {
                $('#inputEditRTOptional').prop( "disabled", false );
            } else  {
                $('#inputEditRTOptional').prop( "disabled", true );
            }
        });
        $("#inputEditST").click(function () {
            if($(this).is(":checked")) {
                $('#inputEditSTOptional').prop( "disabled", false );
            } else  {
                $('#inputEditSTOptional').prop( "disabled", true );
            }
        });
        $("#inputEditMA").click(function () {
            if($(this).is(":checked")) {
                $('#inputEditMAOptional').prop( "disabled", false );
            } else  {
                $('#inputEditMAOptional').prop( "disabled", true );
            }
        });
        $("#inputEditStaff").click(function () {
            if($(this).is(":checked")) {
                $('#inputEditStaffOptional').prop( "disabled", false );
            } else  {
                $('#inputEditStaffOptional').prop( "disabled", true );
            }
        });

    </script>
@endsection
