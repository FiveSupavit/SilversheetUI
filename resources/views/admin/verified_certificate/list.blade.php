@extends('layouts.admin.main')
@section('page.title','Verified Certificate | Silversheet')
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
                                    <a  href="{{ url('admin/verified_certificate/certificate') }}"><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
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
                                    <a  href="{{ url('admin/verified_certificate/certificate') }}"><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Panel Static Labels -->
            </div>

        </div>
    </div>
@endsection
@section('script')

@endsection
