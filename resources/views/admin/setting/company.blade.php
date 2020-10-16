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
                            Company
                        </h3>
                    </header>
                    <div class="panel">
                        <div class="panel-body">
                            <button type="button" class="btn btn-primary" style="float: right;" data-target="#ModalAdd" data-toggle="modal">Add new</button>
                            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Tel.</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Company A</td>
                                    <td>2126  Robinson Court, Saginaw, Michigan, 48607</td>
                                    <td>303-292-6370</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalEdit"
                                           data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Company B</td>
                                    <td>4206  Derek Drive, Wooster, Ohio, 44691</td>
                                    <td>703-790-8954</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default" data-target="#ModalEdit"
                                           data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Company C</td>
                                    <td>379  Roguski Road, Natchitoches, Louisiana, 71457</td>
                                    <td>215-789-3632</td>
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
                    <h4 class="modal-title">Add Company</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Name: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Name Company" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Address: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="address" placeholder="Address" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">City: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="city" placeholder="City" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">State: </label>
                            <div class="col-md-9">
                                <select type="text" class="form-control">
                                    <option value="" disabled selected>Select State</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Louisiana">Louisiana</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Zip Code: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="zip_code" placeholder="Zip Code" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Tel.: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="tel" placeholder="Tel" autocomplete="off"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Submit</button>
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
                    <h4 class="modal-title">Edit Company</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Name: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Name Company" value="Company A" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Address: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="address" placeholder="Address" value="2126 Robinson Court" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">City: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="city" placeholder="City" value="Saginaw" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">State: </label>
                            <div class="col-md-9">
                                <select type="text" class="form-control">
                                    <option value="" disabled selected>Select State</option>
                                    <option value="Michigan" selected>Michigan</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Louisiana">Louisiana</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Zip Code: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="zip_code" placeholder="Zip Code" value="48607" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Tel.: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="tel" placeholder="Tel" value="303-292-6370" autocomplete="off"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Submit</button>
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
@endsection
