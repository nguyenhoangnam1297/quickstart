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
                <a class="navbar-brand" href="{{route('task')}}">{{ trans('messages.title') }}</a>
                <div  style="float: right;">
                    <form action="{{ route('switchLang') }}" class="form-lang" method="post">
                        {{ csrf_field()}}
                        <select name="locale" onchange='this.form.submit();'>
                            <option value="en">{{ trans('messages.lang.en') }}</option>
                            <option value="vn" {{ Lang::locale() === 'vn' ? 'selected' : '' }}>{{ trans('messages.lang.vn') }}</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        @yield('content')
    </body>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</html>
