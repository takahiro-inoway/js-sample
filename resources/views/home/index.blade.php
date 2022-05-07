<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
  <title>Room</title>
</head>

<body>

  <header class="AppHeader_header__0obie">
    <div class="Container_wide__i6D5f Container_common__bSTKj">
      <div class="AppHeader_inner__Nqogt">
        <a class="AppHeader_homeLink__sgij0" href="https://zenn.dev/">
          🍎 Apple
        </a>
        <div class="FadeIn_fadeIn__O8JSZ ">
          <div class="AppHeader_actionsArea__XPo58"><a class="AppHeader_searchLink__z70oa" aria-label="検索" id="header-search" href="https://zenn.dev/search"><svg viewBox="0 0 27 27" width="23" height="23">
                <path d="M11.56 3.43a8.26 8.26 0 000 16.52 8.18 8.18 0 005-1.72l4.7 4.7a1.1 1.1 0 001.56 0 1.09 1.09 0 000-1.55l-4.7-4.7a8.18 8.18 0 001.72-5 8.28 8.28 0 00-8.28-8.25zm0 2.2a6.06 6.06 0 11-6.06 6.06 6 6 0 016.06-6.06z" fill="currentColor"></path>
              </svg></a>
            <div style="display: flex; align-items: center;"><span style="display: block; width: 16px; height: 1px; flex-shrink: 0;"></span>
              <div class="UserNotifications_container__U6Kyu"><button class="UserNotifications_buttonOpen__UFamN" aria-label="通知"><svg viewBox="0 0 27 27" width="23" height="23">
                    <path fill="currentColor" d="M23.7 18.3a4.79 4.79 0 01-2-4v-3.1a8.2 8.2 0 00-16.4 0v3.1a5.21 5.21 0 01-2.1 4.1 1.09 1.09 0 00-.4 1.3 1.17 1.17 0 001.1.8h5.2a4.5 4.5 0 004.4 3.7 4.42 4.42 0 004.4-3.7h5.2a1.22 1.22 0 001.2-1.2 1.1 1.1 0 00-.6-1zm-10.2 3.88a2.5 2.5 0 01-2.29-1.78h4.58a2.36 2.36 0 01-2.29 1.78zm-7.29-3.72a7.72 7.72 0 001.15-4.07v-3.23A6.16 6.16 0 0113.51 5a6.22 6.22 0 016.15 6.15v3.23a8 8 0 001.15 4.07z">
                    </path>
                  </svg></button></div><span style="display: block; width: 20px; height: 1px; flex-shrink: 0;"></span><button class="UserMenu_buttonOpen__MinVs"><img src="./JavaScriptを大きく変えうる Dataflow Proposals の概要と論点(Call-this, Pipe Operator)_files/unnamed.png" alt="メニューを開く" class="AvatarImage_border__33_UE AvatarImage_plain__BCJNs" width="40" height="40" referrerpolicy="no-referrer"></button>
              <div class="AddNewMenu_buttonContainer__vVfFw"><button class="AddNewMenu_buttonAddNew__6CMn3">Add
                  new</button></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <article class="View_container__Tv3f8">


    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
      </h2>
    </x-slot>

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


    room/index.php
    <br><br>
    @guest
    ゲストユーザーです。
    @endguest
    @auth
    ログイン済ユーザーです。
    @endauth
    <br><br>


    @foreach ($users as $user)
    <table>
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
      </tr>
    </table>
    @endforeach

    @include('home/tempcard')
    @include('home/search')
    @include('home/master')

  </article>

  <script>
  </script>
  <script src="{{ asset('js/home/script.js') }}" defer></script>
</body>

</html>