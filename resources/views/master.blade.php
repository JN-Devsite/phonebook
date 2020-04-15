<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phonebook</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap');

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Ubuntu', sans-serif;
                font-weight: 400;
                height: 100vh;
                margin: 0;
                font-size: 16px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
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

            }

            .title {
                font-size: 50px;
                font-weight: 700;
                text-align: center;
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

            .phonelist {
                display: grid;
                grid-template-columns: auto auto auto;
                grid-gap: 1;
                grid-template-areas: "name phone addr";

            }

            .phonelist div {
                padding: 2px 5px;
                margin: 1px;
            }

            .list-head {
                background-color: #000;
                color: #fff;
            }

            .list-head a {
                color: #fff;
                text-decoration: underline;
            }

            .list-head a:hover {
                color: #f5b942;
                text-decoration: none;
            }

            .list-color {
                background-color: #efefef;
            }

            .search-box {
                display: inline-flex;
                flex-direction: row;

            }

            .search-box div {
                margin: 15px 3px;
            }

            .search-box input, .search-box select {
                border: #000 1px solid;
            }

            .search-box button {
                background-color: #f5b942;
                border-radius: 10px;
                border: #000 2px solid;
                padding: 2px 10px;
                font-weight: 700;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    @yield('title')
                </div>
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
