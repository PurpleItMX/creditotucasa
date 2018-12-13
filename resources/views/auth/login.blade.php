@extends('layouts.app')

@section('content')
<div class="secc_log">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 col-xl-4">
              <div class="card">
                  <div class="card-body">
                      <form method="POST" action="{{ route('login') }}">
                          @csrf
                          <div class="col-lg-12 col-xl-12">
                            <div class="col-lg-4 col-xl-4 offset-lg-4 offset-xl-4">
                              <div class="icon-user"></div>
                            </div>
                              <label for="email" class="col-form-label text-md-right label-form">{{ __('Usuario') }}</label>


                                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>

                          <div class="col-lg-12 col-xl-12">
                              <label for="password" class="col-form-label text-md-right label-form">{{ __('Contraseña') }}</label>

                                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                          </div>

                          <div class="col-lg-12 col-xl-12">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                      <label class="form-check-label" for="remember">
                                          {{ __('Recordar usuario') }}
                                      </label>
                                  </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-8 col-lg-12 col-xl-12">
                                  <button type="submit" class="btnSubmit">
                                      {{ __('INGRESAR') }}
                                  </button>

                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      {{ __('Olvidaste tu contraseña') }}
                                  </a>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
