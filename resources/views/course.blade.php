@php
    $course = App\Course::all();

@endphp
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<ul>
  <li><a href="/">Home</a></li>
  <li><a href="/course">course</a></li>
  <li><a href="/instructor">instructor</a></li>
  
</ul>
<br>
<table id="customers">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Instructor</th>
    </tr>
    @foreach($course as $courses)

    <tr>
        <td>{{$courses->id}}</td>
        <td>{{$courses->name}}</td>
@foreach($courses->instructors as $key)
        <td>{{$key->name}}</td>
    @endforeach
    </tr>
    @endforeach
</table>

</body>
</html>