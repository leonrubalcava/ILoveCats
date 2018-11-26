@extends('layouts.app')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
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
            margin-bottom: 15px;
        }

        #image img {
            max-height: 350px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form label {
            margin-bottom: 10px;
        }

        form button {
            padding: 15px 30px;
            background-color: darkslategrey;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }

        .response-data {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cat-button {
            padding: 15px 30px;
            background-color: darkslategrey;
            color: white;
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
@section('content')
<div class="content">
        <div class="title m-b-md">
            Conrad's Cat Litter
        </div>

        <div class="cat-api-example">
            @if(isset($response))
                <div class="response-data">
                    <div class="message">{{ $response->message }}</div>
                    <div class="vote-id">Your vote ID: {{ $response->id }}</div>
                    <a class="cat-button" href="/home">Load Another Cat</a>
                </div>
            @endif

            @if(!isset($response))
                <div id="id"></div>
                <div id="url"></div>
                <div id="image"></div>
                <form action="/cat-votes" method="GET">
                    @csrf
                    <label for="imageId">Image ID
                        <input type="text" id="imageId" name="imageId">
                    </label>
                    <label for="up">Vote Up
                        <input type="radio" name="vote" id="up" value="1" checked>
                    </label>
                    <label for="down">Vote Down
                        <input type="radio" name="vote" id="down" value="0">
                    </label>
                    <button type="submit">Submit Vote</button>
                </form>
            @endif

        </div>
</div>
@endsection
