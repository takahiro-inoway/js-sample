<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
  <title>work</title>
  <!--Vue.js CDN-->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

</head>

<body>

  @include('home/header')
  <article class="View_container__a1">
    @yield('content')
  </article>
  @include('home/footer')


  
  @foreach ($users as $user)
  <table>
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->password }}</td>
    </tr>
  </table>
  @endforeach

  room/index.php
  <br><br>
  @guest
  ゲストユーザーです。
  @endguest
  @auth
  ログイン済ユーザーです。
  @endauth
  <br><br>


  <script>
  </script>
  <script src="{{ asset('js/home/script.js') }}" defer></script>
</body>

</html>