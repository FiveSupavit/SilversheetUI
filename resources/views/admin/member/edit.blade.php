@extends('layouts.main')
@section('page.title','Dashboard | Remark Admin Template')
@section('style')

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
        </div>
    </div>
@endsection
@section('script')

@endsection
