<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>work</title>
  <!--Vue.js CDN-->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
  <!--tailwind CDN-->
  <!--
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  -->
  <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
</head>

<body>

  @include('home/header')
  <article class="View_container__a1">
    @yield('content')
  </article>
  @include('home/footer')


  <hr>
  <hr>

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

  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    button
  </button>
  <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
    outline
  </button>

  <script>
  </script>
  <script src="{{ asset('js/home/script.js') }}" defer></script>
</body>

</html>