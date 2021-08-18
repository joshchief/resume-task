<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title> Home | Nnamani </title>
</head>
<body>
     {{-- nav bar  --}}
        <nav class="nav">
            <header class="logo">
                <a href=""><img src="/img/zuri-logo.jpg" alt="zuri logo"></a>
             </header>

            <ul class="nav-items">
                <li><a href="/" class="home">Home</a></li>
                <li><a href="/create">contact</a></li>
            </ul>
        </nav>        
    </div>

    
    <div class="form">
        <form action="/create" method="post">
            @csrf
           <div class="mb-3">
               @include('messages.alert')
            <label for="email" class="form-label">Email address:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
            <label for="body" class="form-label">Body:</label>
            <textarea class="form-control" 
            name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-primary mb-3">submit</button>
            </div>
        </form>
    </div>
   

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>