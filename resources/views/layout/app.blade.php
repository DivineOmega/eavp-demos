<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Eloquent Attribute Value Prediction Demoes')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <livewire:styles />
</head>
<body>
<div class="container pt-4">
    <h1 class="mb-4">@yield('title', 'Eloquent Attribute Value Prediction Demoes')</h1>
    @yield('content')
    <livewire:scripts />
</div>
</body>
</html>
