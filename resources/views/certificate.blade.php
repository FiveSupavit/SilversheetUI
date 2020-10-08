@extends('layouts.main')
@section('page.title','Dashboard | Remark Admin Template')
@section('style')
    <link rel="stylesheet" href="{{asset('global/vendor/dropify/dropify.css')}}">
    <style>
        .btn-left::before {
            top: 30%;
            border-right-color: #ffffff;
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
    </style>
@endsection
@section('content')
    <div class="page-header">
        <div class="row row-lg">
            <div class="col-md-6 col-lg-4">
                <h4 class="example-title">Default</h4>
            </div>
        </div>
    </div>

    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6">
                <div class="examle-wrap">
                    <div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true"
                         role="tablist">
                        <div class="panel">
                            <div class="panel-heading" id="exampleHeadingDefaultOne" role="tab">
                                <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultOne"
                                   data-parent="#exampleAccordionDefault" aria-expanded="false"
                                   aria-controls="exampleCollapseDefaultOne">
                                    Postgraduate Training
                                </a>
                            </div>
                            <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultOne" aria-labelledby="exampleHeadingDefaultOne"
                                 role="tabpanel">
                                <div class="panel-body timeline-center mb-0 border-top">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-top" style="padding-top: 20px">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                                    <button type="button" class="btn btn-success">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6">
                <div class="examle-wrap">
                    <div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true"
                         role="tablist">
                        <div class="panel">
                            <div class="panel-heading" id="exampleHeadingDefaultTwo" role="tab">
                                <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTwo" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultTwo">
                                    Board Certification
                                </a>
                            </div>
                            <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultTwo" aria-labelledby="exampleHeadingDefaultTwo" role="tabpanel">
                                <div class="panel-body timeline-center mb-0 border-top">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-top" style="padding-top: 20px">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                                    <button type="button" class="btn btn-success">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6">
                <div class="examle-wrap">
                    <div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true"
                         role="tablist">
                        <div class="panel">
                            <div class="panel-heading" id="exampleHeadingDefaultThree" role="tab">
                                <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultThree" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultThree">
                                    Medical Education
                                </a>
                            </div>
                            <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultThree" aria-labelledby="exampleHeadingDefaultThree" role="tabpanel">
                                <div class="panel-body timeline-center mb-0 border-top">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-top" style="padding-top: 20px">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                                    <button type="button" class="btn btn-success">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('global/vendor/dropify/dropify.min.js')}}"></script>
@endsection
