

  @if (Route::has('login'))
        <div class="mb-3">
            @auth
                <span>Welcome, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
            @endauth
        </div>
    @endif