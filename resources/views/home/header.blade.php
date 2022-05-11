<header class="AppHeader_header__0obie">
  <div class="Container_wide__i6D5f Container_common__bSTKj">
    <div class="AppHeader_inner__Nqogt">
      <a class="AppHeader_homeLink__sgij0" href="https://zenn.dev/">
        🍎 Apple
      </a>

      <a class="AppHeader_homeLink__sgij0" href="{{ url('/work') }}">work</a>
      <a class="AppHeader_homeLink__sgij0" href="{{ url('/about') }}">about</a>
      <a class="AppHeader_homeLink__sgij0" href="{{ url('/prototype') }}">prototype</a>

      @if (Route::has('login'))
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
      </div>
      @endif

    </div>
  </div>
</header>