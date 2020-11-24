<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Quera Custom Database Driver </title>

    <style>
        div {
            color: black;
            margin: 0 auto;
            width: 50%;
            background-color: #b4b4b4;
            border-radius: 8px;
            font-family: system-ui;
            border-top: 4px solid #007bff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }

        .text-center {
            text-align: center;
        }

        ul {
            margin: 0;
            padding: 0 20px 20px;
        }

        li {
            font-size: 22px;
            list-style: none;
        }
    </style>
</head>
<body>
    <div class="text-center">
        <h2> List </h2>
        <ul>
            @foreach($users as $user)
                <li>
                    {{ $user->name }} {{ $user->family }} - {{ $user->username }} - {{ $user->password }}
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
