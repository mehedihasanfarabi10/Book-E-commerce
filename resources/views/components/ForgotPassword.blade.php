<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Forgot Password</h3>
                        </div>
                        <form method="post">
                            <div class="form-group mb-3">
                                <input type="text" required="" class="form-control" name="email" placeholder="Your Email">
                            </div>
                            {{-- <div class="form-group mb-3">
                                <input class="form-control" required="" type="password" name="password" placeholder="Password">
                            </div> --}}
                            <div class="login_footer form-group mb-3">
                                <div class="chek-form">
                                    {{-- <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                    </div> --}}
                                </div>
                                {{-- <a href="#">Forgot password?</a> --}}
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Submit</button>
                            </div>
                        </form>
                        <div class="different_login">
                            <span> or</span>
                        </div>
                        
                        <div class="form-note text-center">Already Have An Account ? <a href="{{route('login')}}">Log in</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->

