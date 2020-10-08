@extends('layouts.main')
@section('page.title','Dashboard | Remark Admin Template')
@section('style')
    <link rel="stylesheet" href="{{asset('global/vendor/tasklist/tasklist.css')}}">
@endsection
@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <header class="panel-heading">
                        <h3 class="panel-title">
                            Herman Beck (Pain Medicine)
                        </h3>
                    </header>

                    <form class="form-horizontal">
                        <div class="col-lg-12">
                            <!-- Example Task -->
                            <div class="example-wrap m-md-0">
                                <ul class="list-task list-group sortable" data-plugin="sortable">
                                    <li class="list-group-item border" >
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                            <label for="inputSchedule">
                                                <span>Postgraduate Training</span>
                                            </label>
                                            <div class="panel-body">
                                                <div class="form-group row">
                                                    <span class="col-md-3">Received from: </span>
                                                    <div class="col-md-9">
                                                        <p>Hogwarts School of Witchcraft and Wizardry</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <span class="col-md-3">Received date: </span>
                                                    <div class="col-md-9">
                                                        <p>30/03/2019</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <span class="col-md-3">Image: </span>
                                                    <div class="col-md-9">
                                                        <img src="{{asset('images/ex_certificate.png')}}" alt="" width="560" height="344">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border">
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                            <label for="inputCall">
                                                <span>Board Certification</span>
                                            </label>
                                            <div class="panel-body">
                                                <div class="form-group row">
                                                    <span class="col-md-3">Received from: </span>
                                                    <div class="col-md-9">
                                                        <p>Hogwarts School of Witchcraft and Wizardry</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <span class="col-md-3">Received date: </span>
                                                    <div class="col-md-9">
                                                        <p>30/03/2019</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <span class="col-md-3">Image: </span>
                                                    <div class="col-md-9">
                                                        <img src="{{asset('images/ex_certificate.png')}}" alt="" width="560" height="344">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item border" >
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                            <label for="inputBook">
                                                <span>Medical Education</span>
                                            </label>
                                            <div class="panel-body">
                                                <div class="form-group row">
                                                    <span class="col-md-3">Received from: </span>
                                                    <div class="col-md-9">
                                                        <p>Hogwarts School of Witchcraft and Wizardry</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <span class="col-md-3">Received date: </span>
                                                    <div class="col-md-9">
                                                        <p>30/03/2019</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <span class="col-md-3">Image: </span>
                                                    <div class="col-md-9">
                                                        <img src="{{asset('images/ex_certificate.png')}}" alt="" width="560" height="344">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item mt-1 text-right">
                                        <button type="button" class="btn btn-primary">Aprrove</button>
                                        <button type="button" class="btn btn-danger">Reject</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Example Task -->
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('global/js/Plugin/tasklist.js')}}"></script>
@endsection
