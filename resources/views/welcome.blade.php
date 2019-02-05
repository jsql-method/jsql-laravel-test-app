<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JSQL Laravel Plugin</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   JSQL Laravel Plugin Test App
                </div>
                <div class="container">
                    <form action="/query" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="">Query</label>
                                <input type="text"  name="query" value="{{ $query }}" class="form-control">
                                <button class="btn btn-primary">Hash Query</button>
                            </div>
                        </div>
                    </form>
                    <div id="hashForm">
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="">Hash</label>
                                <label>{{ $hash }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
