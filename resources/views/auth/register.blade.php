<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
</head>
<body>
<div class="container-fluid p-5">
  <h1>Register Hare</h1>
   
   <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="mb-3">
        <label for="name" class="form-label">{{ __('Name') }}</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Email Address -->
    <div class="mb-3">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="username">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>

    <!-- Link to Login -->
    <div class="mb-3 text-end">
        <a class="text-decoration-none text-primary" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
    </div>

    <!-- Register Button -->
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</form>

 
</div>
</body>
</html>