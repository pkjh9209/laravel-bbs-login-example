
{{-- index.blade.php --}}

@section('title')
    Welcome
@endsection

@section('content')
<ul>
    @foreach ($foods as $food)
        <li>{{$food}}</li>
    @endforeach
</ul>
@endsection


<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>@yield('title')</h1>
    @yield('content')
</body>
</html>