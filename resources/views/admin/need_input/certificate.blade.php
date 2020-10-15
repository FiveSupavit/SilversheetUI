@extends('layouts.admin.main')
@section('page.title','Certificate | Silversheet')
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
                            <h3 class="panel-title">Postgraduate Training</h3>
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
                                                    <label class="form-control-label" for="inputBasicFirstName">Postgraduate Status</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Specialty</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Institution name
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Institution Department</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="form-control-label" for="inputBasicFirstName">Start year</label>
                                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-control-label" for="inputBasicFirstName">End year
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Address line 1</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Address line 2</label>
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
            <div class="col-md-3 col-sm-3 col-3">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm btn-1 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultOne"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultOne" onclick="ClickExampleCollapse(1)">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultTwo" role="tab">
                            <h3 class="panel-title">Board Certification</h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
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
                                                           placeholder="Enter board name" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration Date</label><br>
                                                    <small class="blue-grey-400">Leave blank if it doesn't expire</small>
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
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
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
                                                           placeholder="Enter Education" autocomplete="off"/>
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
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
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
                                                        <input class="form-control" type="text" name="right" placeholder="right" value="CT" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">License number
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                                                           placeholder="ex: 1234567" autocomplete="off"/>
                                                    <small class="blue-grey-400">license format: 1234567</small>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration date
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-4 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultFour"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultFour" onclick="ClickExampleCollapse(4)">INPUT LICENSE</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultFive" role="tab">
                            <h3 class="panel-title">
                                State Medical License
                                <span class="panel-desc">Oregon</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultFive" aria-labelledby="exampleHeadingDefaultFive" role="tabpanel">
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
                                                        <input class="form-control" type="text" name="right" placeholder="right" value="OR" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">License number
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                                                           placeholder="ex: 1234567" autocomplete="off"/>
                                                    <small class="blue-grey-400">license format: 1234567</small>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration date
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-5 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultFive"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultFive" onclick="ClickExampleCollapse(5)">INPUT LICENSE</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultSix" role="tab">
                            <h3 class="panel-title">DEA Licence</h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
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
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                    <small class="red-700">can't be blank</small>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Issue Date</label>
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-6 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultSix"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultSix" onclick="ClickExampleCollapse(6)">INPUT DEA</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultSeven" role="tab">
                            <h3 class="panel-title">
                                Malpractice
                                <span class="panel-desc">Limits: -- / --</span>
                            </h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultSeven" aria-labelledby="exampleHeadingDefaultSeven" role="tabpanel">
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
                                                    <label class="form-control-label" for="inputBasicFirstName">Insurance Provider
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Policy number</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Claim Limit
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Aggregate Limit
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off" value="$ 0"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Retroactive</label>
                                                    <input type="text" class="form-control w-50" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Effective Date</label>
                                                    <input type="text" class="form-control w-50" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration Date
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control w-50" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Department</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Address line 1</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Address line 2</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">City</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">State</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Zip</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Phone</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Fax</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Email</label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">URL</label>
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
            <div class="col-md-3 col-sm-3 col-3">
                <div class="panel btn-direction btn-left mb-0 w-100">
                    <div class="panel-body p-2">
                        <button type="button" class="btn btn-block btn-default btn-sm btn-7 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultSeven"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultSeven" onclick="ClickExampleCollapse(7)">UPLOAD COPY</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultEight" role="tab">
                            <h3 class="panel-title">
                                CDS License
                                <span class="panel-desc">Oregon</span></h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultEight" aria-labelledby="exampleHeadingDefaultEight" role="tabpanel">
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
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration Date
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-8 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultEight"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultEight" onclick="ClickExampleCollapse(8)">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultNine" role="tab">
                            <h3 class="panel-title">Fluoroscopy Certification</h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultNine" aria-labelledby="exampleHeadingDefaultNine" role="tabpanel">
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
                                                    <label class="form-control-label" for="inputBasicFirstName">License Number
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration Date
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-9 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultNine"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultNine" onclick="ClickExampleCollapse(9)">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultTen" role="tab">
                            <h3 class="panel-title">ACLS Certification</h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultTen" aria-labelledby="exampleHeadingDefaultTen" role="tabpanel">
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
                                                    <label class="form-control-label" for="inputBasicFirstName">Issue Date
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control w-50" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration Date
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-10 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTen"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultTen" onclick="ClickExampleCollapse(10)">UPLOAD COPY</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultEleven" role="tab">
                            <h3 class="panel-title">BLS Certification</h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultEleven" aria-labelledby="exampleHeadingDefaultEleven" role="tabpanel">
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
                                                    <label class="form-control-label" for="inputBasicFirstName">Issue Date
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control w-50" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration Date
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-11 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultEleven"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultEleven" onclick="ClickExampleCollapse(11)">UPLOAD COPY</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultTwelve" role="tab">
                            <h3 class="panel-title">PALS Certification</h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultTwelve" aria-labelledby="exampleHeadingDefaultTwelve" role="tabpanel">
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
                                                    <label class="form-control-label" for="inputBasicFirstName">Issue Date
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" class="form-control w-50" id="inputBasicFirstName" name="inputFirstName" autocomplete="off"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label" for="inputBasicFirstName">Expiration Date
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-12 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTwelve"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultTwelve" onclick="ClickExampleCollapse(12)">UPLOAD COPY</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultThirteen" role="tab">
                            <h3 class="panel-title">Driver License</h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultThirteen" aria-labelledby="exampleHeadingDefaultThirteen" role="tabpanel">
                            <div class="panel-body bg-blue-grey-100 border timeline-center mb-0 form-icons">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <h5>Attachments</h5>
                                        <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-13 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultThirteen"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultThirteen" onclick="ClickExampleCollapse(13)">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultFourteen" role="tab">
                            <h3 class="panel-title">Curriculum Vitae</h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultFourteen" aria-labelledby="exampleHeadingDefaultFourteen" role="tabpanel">
                            <div class="panel-body bg-blue-grey-100 border timeline-center mb-0 form-icons">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <h5>Attachments</h5>
                                        <input type="file" id="input-file-now" data-plugin="dropify" data-default-file=""/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-6">
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-14 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultFourteen"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultFourteen" onclick="ClickExampleCollapse(14)">INPUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-9 col-9">
                <div class="examle-wrap">
                    <div class="panel">
                        <div class="panel-heading" id="exampleHeadingDefaultFiveteen" role="tab">
                            <h3 class="panel-title">CCS Panel</h3>
                            <div class="panel-actions panel-actions-keep">
                                <a href=""><i class="wb-settings btn btn-icon btn-default btn-outline" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="panel-collapse collapse panel-bordered" id="exampleCollapseDefaultFiveteen" aria-labelledby="exampleHeadingDefaultFiveteen" role="tabpanel">
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
                        <button type="button" class="btn btn-block btn-default btn-sm btn-15 collapsed" data-toggle="collapse" href="#exampleCollapseDefaultFiveteen"
                                aria-expanded="false" aria-controls="exampleCollapseDefaultFiveteen" onclick="ClickExampleCollapse(15)">INPUT</button>
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
