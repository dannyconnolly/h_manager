<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        @section('title')
        <title>{{{$title}}}</title>
        @show
        {{ HTML::style('bower_components/bootstrap-css/css/bootstrap.min.css') }}
        {{ HTML::style('bower_components/bootstrap-css/css/bootstrap-theme.min.css') }}
        {{ HTML::style('assets/css/ui-lightness/jquery-ui-1.10.4.min.css') }}
        {{ HTML::style('assets/css/app.css') }}

        <style>
            body{
                background: #cdeb8e; /* Old browsers */
                background: -moz-linear-gradient(top,  #cdeb8e 0%, #a5c956 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#cdeb8e), color-stop(100%,#a5c956)); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top,  #cdeb8e 0%,#a5c956 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top,  #cdeb8e 0%,#a5c956 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top,  #cdeb8e 0%,#a5c956 100%); /* IE10+ */
                background: linear-gradient(to bottom,  #cdeb8e 0%,#a5c956 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cdeb8e', endColorstr='#a5c956',GradientType=0 ); /* IE6-9 */
                padding-top: 60px;
                height: 100%;
            }
            .table>thead>tr>th, .table>tbody>tr>td{ 
                vertical-align: middle;
            }
            .container{
                background: #fff;
                margin-top: 10px;
                padding: 10px;
                min-height: 600px;
            }
            .container> .row{
                margin: 0;
            }
            footer{
                text-align: center;
                padding: 40px 0;
            }
        </style>
    </head>
    <body>


        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ URL::to('/') }}">H Manager</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        @if(Auth::check())
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Users<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ URL::to('users') }}">Users</a></li>
                                <li><a href="{{ URL::to('users/create') }}">Create a User</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Members<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ URL::to('members') }}">Members</a></li>
                                <li><a href="{{ URL::to('members/create') }}">Create a Member</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ URL::to('membertypes') }}">Member Types</a></li>
                                <li><a href="{{ URL::to('membertypes/create') }}">Create a Member Type</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hostels<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ URL::to('hostels') }}">Hostels</a></li>
                                <li><a href="{{ URL::to('hostels/create') }}">Create a Hostel</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ URL::to('events') }}">Events</a></li>
                                <li><a href="{{ URL::to('events/create') }}">Create an Event</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ URL::to('eventtypes') }}">Event Types</a></li>
                                <li><a href="{{ URL::to('eventtypes/create') }}">Create an Event Type</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                        @else 
                        <li><a href="{{ URL::to('login') }}">Login</a></li>
                        @endif
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ URL::to('cart') }}">{{ $basket }} items in your basket | View Cart</a></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                {{$main}}
            </div>

            <footer>
                <p><a href="http://www.dannysouthern.com" target="_blank" title="Software Development by Danny Southern">Software Development</a> by Danny Southern</p>
            </footer>

        </div>
        {{ HTML::script('assets/js/vendor/jquery-2.1.1.min.js') }}
        {{ HTML::script('assets/js/vendor/jquery-migrate-1.2.1.min.js') }}
        {{ HTML::script('assets/js/vendor/jquery-ui-1.10.4.min.js') }}
        {{ HTML::script('bower_components/bootstrap-css/js/bootstrap.min.js') }}
        {{ HTML::script('inc/ckeditor/ckeditor.js') }}

        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            var description = document.getElementById('description');
            var details = document.getElementById('details');
            if (description !== null) {
                CKEDITOR.replace('description');
            }
            if (details !== null) {
                CKEDITOR.replace('details');
            }
        </script>

        <script>
            $(document).ready(function($) {
                $(".date-input").datepicker({dateFormat: "yy-mm-dd"});
            });
        </script>
    </body>
</html>