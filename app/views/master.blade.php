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
        {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') }}
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

        @include('partials.navigation')

        <div class="container">
            <div class="row">
                {{$main}}
            </div>

            <footer>
                <p><a href="http://www.dannysouthern.com" target="_blank" title="Software Development by Danny Southern">Software Development</a> by Danny Southern</p>
            </footer>

        </div>

        {{ HTML::script('assets/js/scripts.js') }}
        {{ HTML::script('assets/js/app.js') }}

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