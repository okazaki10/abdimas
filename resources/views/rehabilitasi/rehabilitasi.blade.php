<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Styles -->

</head>

<body>

    <div id="app">
        <navbar></navbar>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        <div class="w-full">
            <form class="bg-white px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{action('RehabilitasiController@store')}}">
                {{csrf_field()}}
        <form_rehabilitasi></form_rehabilitasi>
            </form>
        <script src="{{asset('js/app.js')}}"></script>
    </div>
</body>

</html>