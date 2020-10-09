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
                    <!-- Panel Table Notification -->
                    <header class="panel-heading">
                        <h3 class="panel-title">
                            Notifications
                        </h3>
                    </header>
                    <div class="panel">
                        <div class="panel-body">
                            <!-- filter -->
                            <div class="row no-gutters">
                                <div class="form-group col-md-2">
                                    <select type="text" class="form-control" name="filter_type" id="filter_type">
                                        <option value="" disabled selected>Filter By</option>
                                        <option value="Position">Position</option>
                                        <option value="Person" selected>Person</option>
                                    </select>
                                </div>
                                &nbsp
                                <div class="form-group col-md-2">
                                    <select type="text" class="form-control" id="filter_position">
                                        <option value="" disabled selected>Filter Position</option>
                                        <option value="doctor">Doctor</option>
                                        <option value="nurse">Nurse</option>
                                    </select>
                                </div>
                                &nbsp
                                <div class="form-group col-md-2">
                                    <select type="text" class="form-control" id="filter_day">
                                        <option value="" disabled selected>Filter Important Day</option>
                                        <option value="Birth Day">Birth Day</option>
                                        <option value="Work Anniversary">Work Anniversary</option>
                                        <option value="Work Review">Work Review</option>
                                    </select>
                                </div>
                            </div>

                            <table class="table table-bordered table-hover table-striped" cellspacing="0" data-plugin="dataTable">
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
                                    <td>7 , 14</td>
                                    <td class="actions">
                                        <div class="icon-edit"></div>
                                    </td>
                                </tr>
                                <tr class="gradeA row2">
                                    <td class="person">Alex</td>
                                    <td>Doctor</td>
                                    <td>Work Anniversary</td>
                                    <td>7 , 14</td>
                                    <td class="actions">
                                        <div class="icon-edit"></div>
                                    </td>
                                </tr>
                                <tr class="gradeA row3">
                                    <td class="person">Alex</td>
                                    <td>Doctor</td>
                                    <td>Work Review</td>
                                    <td>7 , 14</td>
                                    <td class="actions">
                                        <div class="icon-edit"></div>
                                    </td>
                                </tr>
                                <tr class="gradeA row4">
                                    <td class="person">Sara</td>
                                    <td>Nurse</td>
                                    <td>Birth Day</td>
                                    <td>7 , 14</td>
                                    <td class="actions">
                                        <div class="icon-edit"></div>
                                    </td>
                                </tr>
                                <tr class="gradeA row5">
                                    <td class="person">Sara</td>
                                    <td>Nurse</td>
                                    <td>Work Anniversary</td>
                                    <td>7 , 14</td>
                                    <td class="actions">
                                        <div class="icon-edit"></div>
                                    </td>
                                </tr>
                                <tr class="gradeA row6">
                                    <td class="person">Sara</td>
                                    <td>Nurse</td>
                                    <td>Work Review</td>
                                    <td>7 , 14</td>
                                    <td class="actions">
                                        <div class="icon-edit"></div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Panel Table Notification -->

                    <!-- Panel Table Expired Certificate -->
                    <header class="panel-heading">
                        <h3 class="panel-title">
                            Certificates
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
                                    <input type="checkbox" id="inputDoctor" />
                                    <label for="inputDoctor">Doctor</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputPA" />
                                    <label for="inputPA">PA</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputNurse" />
                                    <label for="inputNurse">Nurse</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputCRNA" />
                                    <label for="inputCRNA">CRNA/Anesthesiologist</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputRT" />
                                    <label for="inputRT">RT</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputST" />
                                    <label for="inputST">ST</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputMA" />
                                    <label for="inputMA">MA</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputStaff" />
                                    <label for="inputStaff">Staff</label>
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
                                <select type="text" class="form-control" id="end_date_type">
                                    <option value="" disabled selected>Select End Date Type</option>
                                    <option value="date" selected>Date</option>
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
                                    <input type="checkbox" id="inputDoctor" checked/>
                                    <label for="inputDoctor">Doctor</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputPA" checked/>
                                    <label for="inputPA">PA</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputNurse" checked/>
                                    <label for="inputNurse">Nurse</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputCRNA" checked/>
                                    <label for="inputCRNA">CRNA/Anesthesiologist</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputRT" checked/>
                                    <label for="inputRT">RT</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputST" checked/>
                                    <label for="inputST">ST</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputMA" checked/>
                                    <label for="inputMA">MA</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary">
                                    <input type="checkbox" id="inputStaff" />
                                    <label for="inputStaff">Staff</label>
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
                                <select type="text" class="form-control" id="end_date_type">
                                    <option value="" disabled selected>Select End Date Type</option>
                                    <option value="date" selected>Date</option>
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

    <!-- Modal Filter Position -->
    <div class="modal fade" id="ModalFilterPosition" aria-hidden="true" aria-labelledby="ModalFilterPosition"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple modal-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Edit Notification</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Position: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Position" value="Doctor" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Important Day: </label>
                            <div class="col-md-9">
                                <select type="text" class="form-control">
                                    <option value="" disabled selected>Select Important Day</option>
                                    <option value="Birth Day" selected>Birth Day</option>
                                    <option value="Work Anniversary">Work Anniversary</option>
                                    <option value="Work Review">Work Review</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Notify ฺ Before the Important Day(Day): </label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="name" placeholder="" value="7" autocomplete="off"/>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="name" placeholder="" value="14" autocomplete="off"/>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="name" placeholder="" value="" autocomplete="off"/>
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
    <!-- End Modal Filter Position -->
    <!-- Modal Filter Person -->
    <div class="modal fade" id="ModalFilterPerson" aria-hidden="true" aria-labelledby="ModalFilterPerson"
         role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple modal-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Edit Notification</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Name: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="Alex" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Position: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="position" placeholder="Position" value="Doctor" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Important Day: </label>
                            <div class="col-md-9">
                                <select type="text" class="form-control">
                                    <option value="" disabled selected>Select Important Day</option>
                                    <option value="Birth Day" selected>Birth Day</option>
                                    <option value="Work Anniversary">Work Anniversary</option>
                                    <option value="Work Review">Work Review</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Notify ฺ Before the Important Day(Day): </label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="name" placeholder="" value="7" autocomplete="off"/>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="name" placeholder="" value="14" autocomplete="off"/>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="name" placeholder="" value="" autocomplete="off"/>
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
    <!-- End Modal Filter Person -->
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
                $( ".icon-edit" ).html( "<a href=\"#\" class=\"btn btn-sm btn-icon btn-pure btn-default on-default\" data-target=\"#ModalFilterPosition\"\n" +
                                          "data-toggle=\"modal\"><i class=\"icon wb-edit\" aria-hidden=\"true\"></i></a>" );
            } else  {
                $('.person').css('display','block');
                $( ".icon-edit" ).html( "<a href=\"#\" class=\"btn btn-sm btn-icon btn-pure btn-default on-default\" data-target=\"#ModalFilterPerson\"\n" +
                                          "data-toggle=\"modal\"><i class=\"icon wb-edit\" aria-hidden=\"true\"></i></a>" );
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
            $('#row_end_date').css('display','flex');

            $( ".icon-edit" ).html( "<a href=\"#\" class=\"btn btn-sm btn-icon btn-pure btn-default on-default\" data-target=\"#ModalFilterPerson\"\n" +
                "data-toggle=\"modal\"><i class=\"icon wb-edit\" aria-hidden=\"true\"></i></a>" );
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
