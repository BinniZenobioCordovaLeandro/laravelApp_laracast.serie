<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','laracast')</title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <style media="screen">
      .is-complete{
        text-decoration: line-through;
      }
    </style>
  </head>
  <body>
    @yield('projects')

    <a href="/">home</a>
    <a href="/about">about</a>
    <a href="/contact">contact</a>
    <a href="/projects">projects</a>
    <a href="/projects/create">projects/creates</a>

    @yield('content')
  </body>
</html>
