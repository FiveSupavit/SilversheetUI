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
                                &nbsp
                                <div class="form-group col-md-2">
                                    <button type="button" class="btn btn-primary" onclick="resetFilter()">Reset</button>
                                </div>
                            </div>

                            <table class="table table-bordered table-hover table-striped" cellspacing="0" data-plugin="dataTable">
                                <thead>
                                <tr>
                                    <th class="person">Name</th>
                                    <th>Position</th>
                                    <th>Important Day</th>
                                    <th>Notify Before the Important Day(Day)</th>
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

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
                                <input type="text" class="form-control" name="name" placeholder="Position" value="Doctor" autocomplete="off" disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Important Day: </label>
                            <div class="col-md-9">
                                <select type="text" class="form-control" disabled>
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
                                <input type="text" class="form-control" name="name" placeholder="Name" value="Alex" autocomplete="off" disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Position: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="position" placeholder="Position" value="Doctor" autocomplete="off" disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Important Day: </label>
                            <div class="col-md-9">
                                <select type="text" class="form-control" disabled>
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
                if($("#filter_day").val()=="Birth Day"){
                    $('.row1').css('display','');
                    $('.row2,.row3,.row4,.row5,.row6').css('display','none');
                }else if($("#filter_day").val()=="Work Anniversary"){
                    $('.row2').css('display','');
                    $('.row1,.row3,.row4,.row5,.row6').css('display','none');
                }else if($("#filter_day").val()=="Work Review"){
                    $('.row3').css('display','');
                    $('.row1,.row2,.row4,.row5,.row6').css('display','none');
                }
            } else  {
                $('.row1').css('display','none');
                $('.row2').css('display','none');
                $('.row3').css('display','none');
                $('.row4').css('display','');
                $('.row5').css('display','');
                $('.row6').css('display','');
                if($("#filter_day").val()=="Birth Day"){
                    $('.row4').css('display','');
                    $('.row2,.row3,.row1,.row5,.row6').css('display','none');
                }else if($("#filter_day").val()=="Work Anniversary"){
                    $('.row5').css('display','');
                    $('.row2,.row3,.row4,.row1,.row6').css('display','none');
                }else if($("#filter_day").val()=="Work Review"){
                    $('.row6').css('display','');
                    $('.row2,.row3,.row4,.row5,.row1').css('display','none');
                }
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
                if($("#filter_position").val()=="doctor"){
                    $('.row1').css('display','');
                    $('.row2,.row3,.row4,.row5,.row6').css('display','none');
                }else if($("#filter_position").val()=="nurse") {
                    $('.row4').css('display', '');
                    $('.row2,.row3,.row1,.row5,.row6').css('display', 'none');
                }
            } else if ($(this).val() == "Work Anniversary"){
                $('.row1').css('display','none');
                $('.row2').css('display','');
                $('.row3').css('display','none');
                $('.row4').css('display','none');
                $('.row5').css('display','');
                $('.row6').css('display','none');
                if($("#filter_position").val()=="doctor"){
                    $('.row2').css('display','');
                    $('.row1,.row3,.row4,.row5,.row6').css('display','none');
                }else if($("#filter_position").val()=="nurse"){
                    $('.row4').css('display','');
                    $('.row1,.row2,.row3,.row5,.row6').css('display','none');
                }
            }else  {
                $('.row1').css('display','none');
                $('.row2').css('display','none');
                $('.row3').css('display','');
                $('.row4').css('display','none');
                $('.row5').css('display','none');
                $('.row6').css('display','');
                if($("#filter_position").val()=="doctor"){
                    $('.row3').css('display','');
                    $('.row1,.row2,.row4,.row5,.row6').css('display','none');
                }else if($("#filter_position").val()=="nurse"){
                    $('.row6').css('display','');
                    $('.row1,.row2,.row3,.row4,.row5').css('display','none');
                }
            }
        });

        $( document ).ready(function() {
            $( ".icon-edit" ).html( "<a href=\"#\" class=\"btn btn-sm btn-icon btn-pure btn-default on-default\" data-target=\"#ModalFilterPerson\"\n" +
                "data-toggle=\"modal\"><i class=\"icon wb-edit\" aria-hidden=\"true\"></i></a>" );
        });

        function resetFilter(){
            $('.row1').css('display','');
            $('.row2').css('display','');
            $('.row3').css('display','');
            $('.row4').css('display','');
            $('.row5').css('display','');
            $('.row6').css('display','');
            $('#filter_position').val('');
            $('#filter_day').val('');
        }
    </script>
@endsection
