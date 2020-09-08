@php
//$student = App\Student::find(1);
//$student->courses()->attach([1,2,3])
//$student = App\Student::courses();
$student = App\Student::all();
//$student = DB::table('students')->get();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
  <link href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css" rel="stylesheet"/>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<header>

</header>
    <body>
    <br>
    <ul>
  <li><a href="/">Home</a></li>
  <li><a href="/course">course</a></li>
  <li><a href="/instructor">instructor</a></li>
  
</ul>
 <div class="flex justify-center" id="cars" v-cloak>
    <!-- RELEVANT MARKUP BEGINS HERE -->
    <div class="container mh0 w-100">
        
        <div class="container pa0 flex justify-center">
            <div class="listings card-columns">
            @foreach ($student as $students)
                <div class="card mv2">
                    <img src="../storage/images/{{ $students->image }}" class="card-img-top"
                        alt="">
                    <div class="card-body">
                        <h5 class="card-title">student Name: {{$students->name}}</h5>
                        <p class="card-text">student ID :{{$students->id}}
                        </p>
                        
                    </div>
                    
                </div>
                @endforeach
               
                
                
            </div>
        </div>
    </div>
</div>
    </body>
</html>
