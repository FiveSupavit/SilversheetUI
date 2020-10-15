@extends('layouts.admin.main')
@section('page.title','Certificate Other Staff | Silversheet')
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
            <div class="example-buttons w-100">
                <div class="col-md-9 col-sm-9 col-9">
                    <button type="button" class="btn btn-direction btn-bottom btn-primary text-left w-100" style="padding-left: 30px">Needs Input</button>
                </div>
            </div>
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultOne" role="tab">
                            <h3 class="panel-title">CCS Panel</h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultOne" aria-labelledby="exampleHeadingDefaultOne"
                             role="tabpanel">
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
                                                    <label class="form-control-label" for="inputBasicFirstName">Primary Specialty / Subspecialty
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Status
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Effective date
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control w-50" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="padding-top: 20px">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                                <button type="button" class="btn btn-success">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-3">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm btn-1 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultOne"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultOne" onclick="ClickExampleCollapse(1)">INPUT</button>
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
