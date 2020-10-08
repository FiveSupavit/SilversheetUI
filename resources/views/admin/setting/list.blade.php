@extends('layouts.main')
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
                    <header class="panel-heading">
                        <h3 class="panel-title">
                            Notifications
                        </h3>
                    </header>

                    <!-- Panel Table Notification -->
                    <div class="panel">
                        <div class="panel-body">
                            <!-- filter -->
                            <div class="row no-gutters">
                                <div class="form-group col-md-2">
                                    <select type="text" class="form-control" id="filter_type">
                                        <option value="" disabled selected>Filter By</option>
                                        <option value="Position">Position</option>
                                        <option value="Person">Person</option>
                                    </select>
                                </div>
                                &nbsp
                                <div class="form-group col-md-2">
                                    <select type="text" class="form-control" id="filter_position">
                                        <option value="" disabled selected>Select Position</option>
                                        <option value="doctor">Doctor</option>
                                        <option value="nurse">Nurse</option>
                                    </select>
                                </div>
                                &nbsp
                                <div class="form-group col-md-2">
                                    <select type="text" class="form-control" id="filter_day">
                                        <option value="" disabled selected>Select Important Day</option>
                                        <option value="Birth Day">Birth Day</option>
                                        <option value="Work Anniversary">Work Anniversary</option>
                                        <option value="Work Review">Work Review</option>
                                    </select>
                                </div>
                            </div>

                            <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
                                <thead>
                                <tr>
                                    <th class="person">Name</th>
                                    <th>Position</th>
                                    <th>Important Day</th>
                                    <th>Notify ฺ Before the Important Day(Day)</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeA row1">
                                    <td class="person">Alex</td>
                                    <td>Doctor</td>
                                    <td>Birth Day</td>
                                    <td>14 , 7</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                           data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                           data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                           data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr class="gradeA row2">
                                    <td class="person">Alex</td>
                                    <td>Doctor</td>
                                    <td>Work Anniversary</td>
                                    <td>14 , 7</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                           data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                           data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                           data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr class="gradeA row3">
                                    <td class="person">Alex</td>
                                    <td>Doctor</td>
                                    <td>Work Review</td>
                                    <td>14 , 7</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                           data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                           data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                           data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr class="gradeA row4">
                                    <td class="person">Sara</td>
                                    <td>Nurse</td>
                                    <td>Birth Day</td>
                                    <td>14 , 7</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                           data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                           data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                           data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr class="gradeA row5">
                                    <td class="person">Sara</td>
                                    <td>Nurse</td>
                                    <td>Work Anniversary</td>
                                    <td>14 , 7</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                           data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                           data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                           data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr class="gradeA row6">
                                    <td class="person">Sara</td>
                                    <td>Nurse</td>
                                    <td>Work Review</td>
                                    <td>14 , 7</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row"
                                           data-toggle="tooltip" data-original-title="Save" hidden><i class="icon wb-wrench" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row"
                                           data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon wb-close" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                                           data-toggle="tooltip" data-original-title="Edit"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Panel Table Notification -->

                    <header class="panel-heading">
                        <h3 class="panel-title">
                            Expired Certificate
                        </h3>
                    </header>

                    <!-- Panel Table Expired Certificate -->
                    <div class="panel">
                        <div class="panel-body">
                            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>End date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Board Certification</td>
                                    <td>2022-01-01</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
                                           data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Driver's License / ID Card</td>
                                    <td>Along Certificate</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
                                           data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Resume</td>
                                    <td>Not Expired</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
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

    <!-- Modal -->
    <div class="modal fade" id="ModalCheck" aria-hidden="true" aria-labelledby="ModalCheck"
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
                                <input type="text" class="form-control" name="firstname" placeholder="Name Certificate" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">End Date Type: </label>
                            <div class="col-md-9">
                                <select type="text" class="form-control" id="end_date_type">
                                    <option value="" disabled selected>Select End Date Type</option>
                                    <option value="date">Date</option>
                                    <option value="along_certificate">Along Certificate</option>
                                    <option value="not_expired">Not Expired</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="row_end_date">
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
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
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
        $("#filter_type").change(function () {
            if($(this).val() == "Position") {
                $('.person').css('display','none');
            } else  {
                // person
                $('.person').css('display','block');
            }
        });

        $("#filter_position").change(function () {
            if($(this).val() == "doctor") {
                $('.row1').css('display','');
                $('.row2').css('display','');
                $('.row3').css('display','');
                $('.row4').css('display','none');
                $('.row5').css('display','none');
                $('.row6').css('display','none');
            } else  {
                $('.row1').css('display','none');
                $('.row2').css('display','none');
                $('.row3').css('display','none');
                $('.row4').css('display','');
                $('.row5').css('display','');
                $('.row6').css('display','');
            }
        });

        $("#filter_day").change(function () {
            if($(this).val() == "Birth Day") {
                $('.row1').css('display','');
                $('.row2').css('display','none');
                $('.row3').css('display','none');
                $('.row4').css('display','');
                $('.row5').css('display','none');
                $('.row6').css('display','none');
            } else if ($(this).val() == "Work Anniversary"){
                $('.row1').css('display','none');
                $('.row2').css('display','');
                $('.row3').css('display','none');
                $('.row4').css('display','none');
                $('.row5').css('display','');
                $('.row6').css('display','none');
            }else  {
                $('.row1').css('display','none');
                $('.row2').css('display','none');
                $('.row3').css('display','');
                $('.row4').css('display','none');
                $('.row5').css('display','none');
                $('.row6').css('display','');
            }
        });

        $( document ).ready(function() {
            $('#row_end_date').css('display','none');
        });
        $("#end_date_type").change(function () {
            if($(this).val() == "date") {
                $('#row_end_date').css('display','flex');
            } else  {
                // person
                $('#row_end_date').css('display','none');
            }
        });
    </script>
@endsection
