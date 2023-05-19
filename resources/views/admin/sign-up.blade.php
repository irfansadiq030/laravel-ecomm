@extends('admin.auth-layout')
@section('auth_title', 'Sign up')


@section('auth_content')

<div class="card-body p-5">
  <h4 class="text-dark mb-5">Sign Up</h4>

  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="row">
      <div class="form-group col-md-12 mb-4">
        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
      </div>

      <div class="form-group col-md-12 mb-4">
        <input type="email" name="email" class="form-control" id="email" placeholder="Username">
      </div>

      <div class="form-group col-md-12 ">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>

      <div class="form-group col-md-12 ">
        <input type="password" class="form-control" id="cpassword" name="password_confirmation" placeholder="Confirm Password">
      </div>

      <div class="col-md-12">
        <div class="d-inline-block mr-3">
          <div class="control control-checkbox">
            <input name="terms" type="checkbox" />
            <div class="control-indicator"></div>
            I Agree the terms and conditions
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

        <p class="sign-upp">Already have an account?
          <a class="text-blue" href="/admin/login">Sign in</a>
        </p>
      </div>
    </div>
  </form>
</div>

@endsection