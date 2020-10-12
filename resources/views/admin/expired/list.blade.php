@extends('layouts.admin.main')
@section('page.title','Expired | Silversheet')
@section('style')

@endsection
@section('content')
    <div class="page-header">
        <div class="row row-lg">
            <div class="col-md-6 col-lg-4">
                <input type="text" class="form-control" id="inputFocus" placeholder="Search by name or NPI">
            </div>
            <div class="col-md-4 col-lg-2">
                <select type="text" class="form-control" id="filter_position">
                    <option value="" disabled selected>Filter Position</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Nurse">Nurse</option>
                    <option value="Staff">Staff</option>
                </select>
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
                                        <img class="img-fluid" src="../../../global/portraits/7.jpg"
                                             alt="...">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-5">Edward Fletcher</h5>
                                    <small>NPI 1732354821</small><br>
                                    <small>Pain Medicine</small><br>
                                    <small class="red-700 font-weight-bold">Expired</small>
                                </div>
                                <div class="panel-actions">
{{--                                    <a href="{{ url('admin/member/edit') }}"><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>--}}
                                    <a  href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
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
