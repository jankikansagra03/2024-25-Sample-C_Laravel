@extends('guest_header')

@section('dynamic_section')
    <script>
        $("#form1").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
        },
        messages: {

            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address",
            },
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            error.addClass("invalid-feedback");
            error.insertAfter(element);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).addClass('is-valid').removeClass('is-invalid');
        }
        });
        });
    </script>
    <div class="conatiner">
        <div class="row text-center">
            <div class="col-12 bg-dark text-white p-4 align-center">
                <h1>Forgot Password</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-2"></div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8 col-xs-12 col-sm-12">
                <br>
                <form action="{{ URL::to('/') }}/SendOTP" method="post" id="form1">
                    @csrf
                    <div class="form-group">
                        <label for="email"><b>Email:</b></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <br>

                    <input type="submit" class="btn btn-success " value="Submit" name="lgn_btn" />


                </form>
            </div>
        </div>
        <br>

    </div>
@endsection
