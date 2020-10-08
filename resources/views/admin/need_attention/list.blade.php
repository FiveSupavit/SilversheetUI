@extends('layouts.main')
@section('page.title','Need Attention | Silversheet')
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
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Panel Basic -->
                <div class="panel">
                    <div class="panel-body">
                        <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>License</th>
                                <th>Request Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Damon</td>
                                <td>Doctor</td>
                                <td>Postgraduate Training</td>
                                <td>2014/06/13</td>
                                <td class="actions">
                                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
                                       data-toggle="modal"><i class="icon wb-search" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Torrey</td>
                                <td>PA</td>
                                <td>Board Certification</td>
                                <td>2014/09/12</td>
                                <td class="actions">
                                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
                                       data-toggle="modal"><i class="icon wb-search" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Miracle</td>
                                <td>Nurse</td>
                                <td>Medical Education</td>
                                <td>2013/09/27</td>
                                <td class="actions">
                                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
                                       data-toggle="modal"><i class="icon wb-search" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Wilhelmine</td>
                                <td>CRNA/Anesthesiologist</td>
                                <td>DEA License</td>
                                <td>2013/06/28</td>
                                <td class="actions">
                                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
                                       data-toggle="modal"><i class="icon wb-search" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hubert</td>
                                <td>RT</td>
                                <td>BLS Certification</td>
                                <td>2013/05/28</td>
                                <td class="actions">
                                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
                                       data-toggle="modal"><i class="icon wb-search" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Myrtie.Gerhold</td>
                                <td>ST</td>
                                <td>State Medical License (Connecticut)</td>
                                <td>2014/12/12</td>
                                <td class="actions">
                                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
                                       data-toggle="modal"><i class="icon wb-search" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Chester</td>
                                <td>MA</td>
                                <td>Driver's License / ID Card</td>
                                <td>2014/09/27</td>
                                <td class="actions">
                                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
                                       data-toggle="modal"><i class="icon wb-search" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Melany_Gerhold</td>
                                <td>Staff</td>
                                <td>Curriculum Vitae</td>
                                <td>2014/06/28</td>
                                <td class="actions">
                                    <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalCheck"
                                       data-toggle="modal"><i class="icon wb-search" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Panel Basic -->
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Modal -->
    <div class="modal fade" id="ModalCheck" aria-hidden="true"
         aria-labelledby="ModalCheck" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Approve / Reject ?</h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="{{asset('images/ex_certificate.png')}}" alt="" width="560" height="344">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Approve</button>
                    <button type="button" class="btn btn-danger">Reject</button>
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
@endsection
