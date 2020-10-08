@extends('layouts.main')
@section('page.title','Member | Silversheet')
@section('style')

@endsection
@section('content')
    <div class="page-header">
        <div class="row row-lg">
            <div class="col-md-6 col-lg-4">
                <input type="text" class="form-control" id="inputFocus" placeholder="Search by name or NPI">
            </div>
        </div>
    </div>

    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-8">
                <!-- Panel Static Labels -->
                <div class="panel">
                    <ul class="list-group list-group-bordered">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/1.jpg"
                                             alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5">Herman Beck</h5>
                                    <small>NPI 1255421467</small><br>
                                    <small>Pain Medicine</small><br>
                                </div>
                                <div class="panel-actions">
                                    <a href="{{ url('admin/member/edit') }}"><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/2.jpg"
                                             alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5">Mary Adams</h5>
                                    <small>NPI 1346583820</small><br>
                                    <small>Pain Management/Anesthesia</small><br>
                                </div>
                                <div class="panel-actions">
                                    <a href="{{ url('admin/member/edit') }}"><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/3.jpg"
                                             alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5">Caleb Richards</h5>
                                    <small>NPI 1023063989</small><br>
                                    <small>Surgery - Orthopaedic</small><br>
                                    <small class="yellow-800 font-weight-bold">Expiring Soon</small>
                                </div>
                                <div class="panel-actions">
                                    <a href="{{ url('admin/member/edit') }}"><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media">
                                <div class="pr-20">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-fluid" src="../../../global/portraits/4.jpg"
                                             alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5">June Lane</h5>
                                    <small>NPI 1932312766</small><br>
                                    <small>Pain Medicine</small><br>
                                </div>
                                <div class="panel-actions">
                                    <a href="{{ url('admin/member/edit') }}"><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Panel Static Labels -->
            </div>

            <div class="col-md-4">
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Doctor
                            <a href="{{ url('admin/member/create') }}">
                                <button type="button" class="btn btn-floating btn-success btn-sm">
                                    <i class="icon wb-plus" aria-hidden="true"></i>
                                </button>
                            </a>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <select type="text" class="form-control" placeholder="Search by name or NPI">
                                <option value="" disabled selected>Select Licence Type</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputDisabled" placeholder="Search by name or NPI" disabled="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
