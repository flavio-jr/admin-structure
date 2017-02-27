<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('usr_email') ? ' has-error' : '' }}">
                    <label for="usr_email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="usr_email" type="usr_email" class="form-control" name="usr_email" value="{{ old('usr_email') }}" required autofocus>

                        @if ($errors->has('usr_email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('usr_email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('usr_password') ? ' has-error' : '' }}">
                    <label for="usr_password" class="col-md-4 control-label">usr_Password</label>

                    <div class="col-md-6">
                        <input id="usr_password" type="usr_password" class="form-control" name="usr_password" required>

                        @if ($errors->has('usr_password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('usr_password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-5 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-5 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>

                        <a class="btn btn-link" href="{{ route('usr_password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
            