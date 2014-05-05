<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        @section('title')
        <title>{{{$title}}}</title>
        @show
        {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css') }}
        <!-- {{ HTML::style('assets/css/custom.css') }}
         {{ HTML::script('./assets/js/vendor/custom.modernizr.js') }} -->
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('/') }}">H Manager</a>
                </div>
                <ul class="nav navbar-nav">
                    @if(Auth::check())
                    <li><a href="#">Users</a>
                        <ul>
                            <li><a href="{{ URL::to('users') }}">View All Users</a>
                            <li><a href="{{ URL::to('users/create') }}">Create a User</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Events</a>
                        <ul>
                            <li><a href="{{ URL::to('eventtypes') }}">View All Event Types</a>
                            <li><a href="{{ URL::to('eventtypes/create') }}">Create a Event Type</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                    @else 
                    <li><a href="{{ URL::to('login') }}">Login</a></li>
                    @endif
                </ul>
            </nav>
            <div class="">
                {{$main}}
            </div>

            <footer>
                <p><a href="http://www.dannysouthern.com" target="_blank" title="Software Development by Danny Southern">Software Development</a> by Danny Southern</p>
            </footer>

        </div>
    </body>
</html>