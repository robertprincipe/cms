<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{--  --}}
  <meta name="routeName" content="{{ Route::currentRouteName() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin.css?v='.time()) }}">
  <script>
    $(document).ready(function() {
      $('[data-toggle]="tooltip"').tooltip();
    });
  </script>
</head>
<body>
    <div class="wrapper">
      <div class="col1">
        @include('admin.sidebar')
      </div>
      <div class="col2">
        <nav class="navbar navbar-expand-lg shadow">
          <div class="collapse navbar-collapse">
            <div class="navbar-nav">
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-home"></i> Dashboard</a>
              </li>
            </div>
          </div>
        </nav>
        <div class="page">
          <div class="container-fluid">
            <nav aria-label="breadcrumb shadow">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i> Dashboard</a></li>
                @section('breadcrumb')
                @show
              </ul>
            </nav>
          </div>

          @if (Session::has('message'))
            <div class="container-fluid">
                <div class="alert alert-{{ Session::get('typealert') }} mtop16" style="display: none; margin-bottom: 16px;">
                  {{ Session::get('message') }}
                  @if ($errors->any())
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  @endif
                  <script>
                      $('.alert').slideDown();
                      setTimeout(() => {
                          $('.alert').slideUp();
                      }, 10000)
                  </script>
                </div>
            </div>
          @endif

          @section('content')
          @show
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
