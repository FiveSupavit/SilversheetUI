@extends('layouts.main')
@section('page.title','Need Input | Silversheet')
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
                                    <div class="dropdown">
                                        <a class="panel-action" href="{{ url('certificate') }}"><i class="icon wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                                    </div>
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
                                    <div class="dropdown">
                                        <a class="panel-action" href="{{ url('certificate') }}" aria-expanded="false"><i class="icon wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                                    </div>
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
