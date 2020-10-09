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
                <h5>Provider Specialty: <span class="font-weight-bold">Specialist</span>&emsp;<a href="/">change</a></h5>
            </div>
        </div>
    </div>

    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true"
                         role="tablist">
                        <div class="panel">
                            <div class="panel-heading" id="exampleHeadingDefaultTwo" role="tab">
                                <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTwo" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultTwo">
                                    TB Screen Read
                                </a>
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
                                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" value="surgery"
                                                               placeholder="Enter board name" autocomplete="off"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="inputBasicFirstName">Expiration Date</label><br>
                                                        <small class="blue-grey-400">Leave blank if it doesn't expire</small>
                                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
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
            </div>
            <div class="col-md-3 col-sm-3 col-3">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true"
                         role="tablist">
                        <div class="panel">
                            <div class="panel-heading" id="exampleHeadingDefaultFour" role="tab">
                                <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultFour" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultFour">
                                    Hospital Privileges
                                    <span class="panel-desc">New York</span>
                                </a>
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
                                                            <input class="form-control" type="text" name="right" placeholder="right" value="NY" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="inputBasicFirstName">License number
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" value="7654321"
                                                               placeholder="ex: 1234567" autocomplete="off"/>
                                                        <small class="blue-grey-400">license format: 1234567</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="inputBasicFirstName">Expiration date
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" value="01/01/2030" autocomplete="off"/>
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
            </div>
            <div class="col-md-3 col-sm-3 col-3">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true"
                         role="tablist">
                        <div class="panel">
                            <div class="panel-heading" id="exampleHeadingDefaultSix" role="tab">
                                <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultSix" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultSix">
                                    Medical License Verification
                                </a>
                            </div>
                            <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultSix" aria-labelledby="exampleHeadingDefaultSix" role="tabpanel">
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
                                                        <label class="form-control-label" for="inputBasicFirstName">DEA License number
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" value="12345678" autocomplete="off"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="inputBasicFirstName">Issue Date</label>
                                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" value="16/05/2018" autocomplete="off"/>
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
            </div>
            <div class="col-md-3 col-sm-3 col-3">
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
