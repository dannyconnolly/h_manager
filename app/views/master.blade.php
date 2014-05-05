<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        @section('title')
        <title>{{{$title}}}</title>
        @show
        {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
        {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css') }}
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('/') }}">H Manager</a>
                </div>
                <ul class="nav navbar-nav">
                    @if(Auth::check())
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Users<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::to('users') }}">View All Users</a>
                            <li><a href="{{ URL::to('users/create') }}">Create a User</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Members<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::to('members/create') }}">Create a Members</a></li>
                            <li><a href="{{ URL::to('membertypes') }}">Member Types</a>
                            <li><a href="{{ URL::to('membertypes/create') }}">Create a Member Type</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hostels<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::to('hostels') }}">Hostels</a>
                            <li><a href="{{ URL::to('hostels/create') }}">Create a Hostel</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                    @else 
                    <li><a href="{{ URL::to('login') }}">Login</a></li>
                    @endif
                </ul>
            </nav>
            <div class="row">
                {{$main}}
            </div>

            <footer>
                <p><a href="http://www.dannysouthern.com" target="_blank" title="Software Development by Danny Southern">Software Development</a> by Danny Southern</p>
            </footer>

        </div>
        {{ HTML::script('//code.jquery.com/jquery-2.1.1.min.js') }}
        {{ HTML::script('//code.jquery.com/jquery-migrate-1.2.1.min.js') }}
        {{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js') }}
    </body>
</html>