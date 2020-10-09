@extends('layouts.admin.main')
@section('page.title','Edit Member | Silversheet')
@section('style')
    <style>
        .panel-body .form-group.row {
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <div class="page-content container-fluid">
        <div class="panel">
            <div class="row no-gutters">
                <div class="col-md border">
                    <div class="panel-body form-icons">
                        <div class="media">
                            <div class="pr-20">
                                <a class="avatar" href="javascript:void(0)">
                                    <img class="img-fluid" src="../../../global/portraits/9.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="form-group">
                                    <label class="form-control-label mb-0">Title</label>
                                    <div class="input-group">
                                        <i class="form-control-icon form-control-icon-right wb-lock"></i>
                                        <input class="form-control" type="text" name="name" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label mb-0">Name</label>
                                    <div class="input-group">
                                        <i class="form-control-icon form-control-icon-right wb-lock"></i>
                                        <input class="form-control" type="text" name="name" value="Poly Chen" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label mb-0">Primary Specialty</label>
                                    <input type="text" class="form-control" name="name" autocomplete="off" value="Pain Medicine">
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label" for="inputBasicFirstName">Active since</label>
                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName"
                                               placeholder="mm/dd/yy" autocomplete="off"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label" for="inputBasicFirstName">Active</label><br>
                                        <input type="checkbox" data-plugin="switchery" data-color="#17b3a3" checked />&emsp;Active
                                    </div>
                                </div>
                                <div class="form-group">
                                        <button type="reset" class="btn btn-danger">CANCEL </button>
                                        <button type="button" class="btn btn-success">SAVE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md border">
                    <div class="example-wrap">
                        <div class="panel-body">
                            <h4>Other Legal Names</h4>
                            <div class="panel-actions panel-actions-keep">
                                <button type="button" class="btn btn-icon btn-default btn-outline"><i class="icon wb-pencil" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md border">
                    <div class="example-wrap">
                        <div class="panel-body">
                            <p>NPI 1255421467</p>
                            <p>Salem, OR</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-heading border-left border-right px-20">
                <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                    <li class="nav-item" role="presentation"><a class="active nav-link" data-toggle="tab" href="#all_contacts"
                                                                aria-controls="all_contacts" role="tab">All Contacts</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#my_contacts" aria-controls="my_contacts"
                                                                role="tab">My Contacts</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#google_contacts" aria-controls="google_contacts"
                                                                role="tab">Google Contacts</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="panel-body border bg-blue-grey-100">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <h4>Please invite Poly Chen to connect on Silversheet</h4>
                    <p>Connecting will help streamline tedious credentialing task.</p>
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-4 mr-2">
                            <input type="text" class="form-control" id="inputPlaceholder" placeholder="provider's email address">
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <button type="button" class="btn btn-success">INVITE TO CONNECT</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="panel panel-bordered border">
                            <div class="panel-heading">
                                <h3 class="panel-title">Summary</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <h5>Appoinment</h5>
                                    <p class="cyan-600">January 01, 2020 - December 31, 2021</p>
                                </div>
                                <div class="form-group">
                                    <div class="row no-gutters">
                                        <div class="col-md-5">
                                            <h5>Sanctions Checks</h5>
                                            <div>OIG Clear</div>
                                            <div class="red-700">NPDB: 2 report</div>
                                            <p>SAM Clear</p>
                                        </div>
                                        <div class="col-md-5">
                                            <h5>Connection Status</h5>
                                            <p class="red-700">Not Connected</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Needs Input / Incomplete Sections</h5>
                                    <div class="cyan-600">Appointment & Privileges</div>
                                    <p class="cyan-600">Peer References</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-bordered border">
                            <div class="panel-heading">
                                <h3 class="panel-title">Current Privileges</h3>
                            </div>
                            <div class="panel-body">
                                <p class="cyan-600">Pain Medicine</p>
                                <p class="cyan-600">Anesthesiology</p>
                            </div>
                        </div>

                        <div class="panel panel-bordered border">
                            <h3 class="panel-title">Activity & Note</h3>
                            <div class="panel-actions">
                                <button type="button" class="btn btn-success">ADD NOTE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-bordered border">
                            <div class="panel-heading">
                                <h3 class="panel-title">Parsonal Contact Info</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Phone</label>
                                    <div class="col-md-9">
                                        <label class="form-control-label" name="standard_fullName">- -</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Email</label>
                                    <div class="col-md-9">
                                        <label class="form-control-label" name="standard_fullName">- -</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Pager</label>
                                    <div class="col-md-9">
                                        <label class="form-control-label" name="standard_fullName">- -</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Fax</label>
                                    <div class="col-md-9">
                                        <label class="form-control-label" name="standard_fullName">- -</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Address</label>
                                    <div class="col-md-9">
                                        <label class="form-control-label" name="standard_fullName">2345 Crestmont Cir SSalem, OR 97302</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-bordered border">
                            <div class="panel-heading">
                                <h3 class="panel-title">Office Contact Info</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Group Name</label>
                                    <div class="col-md-9">
                                        <label class="form-control-label" name="standard_fullName">- -</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Manager</label>
                                    <div class="col-md-9">
                                        <label class="form-control-label" name="standard_fullName">- -</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Phone</label>
                                    <div class="col-md-9">
                                        <label class="form-control-label" name="standard_fullName">- -</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Email</label>
                                    <div class="col-md-9">
                                        <label class="form-control-label" name="standard_fullName">- -</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Fax</label>
                                    <div class="col-md-9">
                                        <label class="form-control-label" name="standard_fullName">- -</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label">Address</label>
                                    <div class="col-md-9">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-bordered border">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tools</h3>
                            </div>
                            <div class="panel-body">
                                <h4>Body Heading</h4>
                                <p>Easily add a heading container to your panel with <code>.panel-heading</code>.
                                    You may also include any <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code>                  with a <code>.panel-title</code> class to add a pre-styled heading.</p>
                                <p>For proper link coloring, be sure to place links in headings within
                                    <code>.panel-title</code>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
