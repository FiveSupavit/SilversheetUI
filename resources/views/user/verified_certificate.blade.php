@extends('layouts.user.main')
@section('page.title','Verified Certificate | Silversheet')
@section('style')
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('global/vendor/dropify/dropify.css')}}">

    <style>
        .btn-left::before {
            top: 30%;
            border-right-color: #ffffff;
        }

        .btn-bottom::before {
            left: 10%;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .panel-body.timeline-center::before {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 2px;
            margin-left: -1px;
            content: "";
            background-color: #e4eaec;
        }

        .panel-title {
            font-size: 14px;
        }
    </style>
@endsection
@section('content')
    <div class="page-header">
        <div class="row row-lg">
            <div class="col-md-6 col-lg-4">
                <h5>Provider Specialty: <span class="font-weight-bold">Specialist</span>&emsp;<a href="/">change</a></h5>
            </div>
        </div>
    </div>

    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultTwo" role="tab">
                            <h3 class="panel-title">Board Certification</h3>
                            <div class="panel-actions">
                                <a href="{{ url('admin/member/edit') }}"><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultTwo" aria-labelledby="exampleHeadingDefaultTwo" role="tabpanel">
                            <div class="panel-body bg-blue-grey-100 border timeline-center mb-0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <h5>Attachments</h5>
                                        <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <div class="example">
                                            <form autocomplete="off">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Board Name</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                                                           value="Surgery" autocomplete="off" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration Date</label><br>
                                                    <small class="blue-grey-400">Leave blank if it doesn't expire</small>
                                                    <input type="text" class="form-control w-50" id="inputBasicFirstName" name="inputFirstName" value="01/01/2020" autocomplete="off"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-3">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm btn-2 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTwo"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultTwo" onclick="ClickExampleCollapse(2)">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultThree" role="tab">
                            <h3 class="panel-title">Medical Education</h3>
                            <div class="panel-actions">
                                <a href="{{ url('admin/member/edit') }}"><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultThree" aria-labelledby="exampleHeadingDefaultThree" role="tabpanel">
                            <div class="panel-body bg-blue-grey-100 border timeline-center mb-0">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <h5>Attachments</h5>
                                        <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <div class="example">
                                            <form autocomplete="off">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Education</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                                                           value="Bachelor of Science" autocomplete="off"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-3">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm btn-3 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultThree"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultThree" onclick="ClickExampleCollapse(3)">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultFour" role="tab">
                            <h3 class="panel-title">
                                State Medical License
                                <span class="panel-desc">Connecticut</span>
                            </h3>
                            <div class="panel-actions">
                                <a href="{{ url('admin/member/edit') }}"><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultFour" aria-labelledby="exampleHeadingDefaultFour" role="tabpanel">
                            <div class="panel-body bg-blue-grey-100 border timeline-center mb-0 form-icons">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <h5>Attachments</h5>
                                        <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <div class="example">
                                            <form autocomplete="off">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">State
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <i class="form-control-icon form-control-icon-right wb-lock"></i>
                                                        <input class="form-control" type="text" name="right" value="CT" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">License number
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                                                           value="1234567" autocomplete="off"/>
                                                    <small class="blue-grey-400">license format: 1234567</small>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration date
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control w-50" id="inputBasicFirstName" name="inputFirstName" value="01/01/2020" autocomplete="off"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-3">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm btn-4 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultFour"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultFour" onclick="ClickExampleCollapse(4)">INPUT LICENSE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('global/vendor/dropify/dropify.min.js')}}"></script>
    <script>
        function ClickExampleCollapse(num) {
            if ($('.btn-'+ num).attr('aria-expanded') == "false") {
                $('.btn-'+ num).addClass('btn-success');
                $('.btn-'+ num).removeClass('btn-default');
            } else {
                $('.btn-'+ num).addClass('btn-default');
                $('.btn-'+ num).removeClass('btn-success');
            }
        }
    </script>
@endsection
