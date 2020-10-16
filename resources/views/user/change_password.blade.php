@extends('layouts.user.main')
@section('page.title','Change Password | Silversheet')
@section('style')

@endsection
@section('content')
    <!-- Content -->
    <div class="page-content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">Change Password</h3>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group row">
                                <label for="oldpassword" class="col-md-4 col-form-label text-md-right">Current Password</label>
                                <div class="col-md-6">
                                    <input id="oldpassword" type="password" class="form-control" name="oldpassword" autocomplete="oldpassword">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control " name="password" autocomplete="current-password">
                                    <span id="divCheckPasswordMatch" class="registrationFormAlert">
                                </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm New Password</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" onchange="checkPasswordMatch();" autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button id="btn-reset" type="submit" class="btn btn-success">
                                        Change Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection
@section('script')
    <script type="text/javascript">
        function checkPasswordMatch() {
            let password = $("#password").val();
            let confirmPassword = $("#password-confirm").val();

            if (password != confirmPassword) {
                $("#divCheckPasswordMatch").html("Password confirmation does not match.");
                $("#password").addClass("is-invalid");
                $("#divCheckPasswordMatch").addClass("invalid-feedback");
                $("#btn-reset").prop('disabled', true);
                $("#btn-reset").css('filter', 'grayscale(100%)');
            }
            else {
                $("#password").removeClass("is-invalid");
                $("#btn-reset").prop('disabled', false);
                $("#btn-reset").css('filter', 'grayscale(0%)');
            }
        }

        $(document).ready(function () {
            $("#txtConfirmPassword").keyup(checkPasswordMatch);
        });
    </script>
@endsection
