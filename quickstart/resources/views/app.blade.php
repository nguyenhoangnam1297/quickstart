    <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
      <head>
        <meta charset="UTF-8">
        <title>Quick Start</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      </head>
    <body>
          
          <div class="navbar navbar-default">
            <div class="container">
           <a class="navbar-brand" href="{{route('task')}}">Task</a>
          </div>
          </div>
            @yield('content')
          </body>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </html>
