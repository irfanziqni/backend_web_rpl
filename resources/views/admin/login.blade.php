@extends('admin.layout.main')
@section('title', 'Admin')
@section('content')
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            @if ($errors->all())
                <span class="help-block">
                  @foreach ($errors->all() as $key)
                    <strong>{{ $key }}</strong>

                  @endforeach
                </span>
            @endif
            <form action="{{ route('login') }}" method="post">
              {{ csrf_field() }}
              <fieldset class="form-group">
                <label for="username">Email address or Username</label>
                <input type="text" class="form-control" id="username" value="{{ old('username') }}" name="username">
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </fieldset>
              <fieldset class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" value="{{ old('password') }}" name="password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </fieldset>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
