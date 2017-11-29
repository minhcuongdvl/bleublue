



<div id="bg"><img width="100%" height="100%" src="{{ asset('public/image/background.png')}}" /></div>  
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
                                     @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    <ul> 
                                    @foreach($errors->all() as $error)
                                     <li>{!! $error !!}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                                                             @if(Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_message') !!}
                            </div>
                            @endif
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
                                    
								{!! Form::open(['route'=>'home','method'=>'POST','files'=>true, 'enctype' => 'multipart/form-data','id'=>'login-form']) !!}
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div> 
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								 {!! Form::close() !!}
                                                                 <script>
                                                                        $("#login-form").validate({
                                                                            rules:{
                                                                                username:{
                                                                                    required:true,
                                                                                    minlength:3
                                                                                },
                                                                                password:{
                                                                                    required:true,
                                                                                    minlength:6
                                                                                }
                                                                               
                                                                            },
                                                                            messages:{
                                                                                username:{
                                                                                    required:"Please enter a username",
                                                                                    minlength:"Please enter more than 3 characters"
                                                                                },
                                                                                password:{
                                                                                    required:"Please enter a password",
                                                                                    minlength:"Please enter more than 6 characters"
                                                                                }
                                                                            }
                                                                        })
                                                                </script>
								{!! Form::open(['route'=>'registered','method'=>'POST','files'=>true, 'enctype' => 'multipart/form-data','id'=>'register-form','style'=>'display:none']) !!}
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="2" class="form-control" placeholder="Username" value="">
									</div>
									
									<div class="form-group">
										<input type="password" name="password" id="passwords" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm_password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
                                                                        <div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
                                                                        <div class="form-group">
										<input type="number" name="phone" id="confirm-password" tabindex="2" class="form-control" placeholder="Phone Number">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								{!! Form::close() !!}
                                                                
                                                                <script>
                                                                        $("#register-form").validate({
                                                                            rules:{
                                                                                username:{
                                                                                    required:true,
                                                                                    minlength:3
                                                                                },
                                                                                password:{
                                                                                    required:true,
                                                                                    minlength:6
                                                                                },
                                                                                confirm_password:{
                                                                                    equalTo:"#passwords"
                                                                                },
                                                                                email:{
                                                                                    required:true,
                                                                                    email:true
                                                                                }
                                                                            },
                                                                            messages:{
                                                                                username:{
                                                                                    required:"Please enter a username",
                                                                                    minlength:"Please enter more than 3 characters"
                                                                                },
                                                                                password:{
                                                                                    required:"Please enter a password",
                                                                                    minlength:"Please enter more than 6 characters"
                                                                                },
                                                                                confirm_password:{
                                                                                    equalTo:"Password incorrectly confirmed"
                                                                                },
                                                                                email:{
                                                                                    required:"Please enter a Email",
                                                                                    email:"Email invalidate"
                                                                                }
                                                                            }
                                                                        })
                                                                </script>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>