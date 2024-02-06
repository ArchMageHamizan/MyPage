<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Add Game</title>
    </head>
    <style>
       input[type="text"] {
        width: 40%; /* Set the width to 100% of its container */
        box-sizing: border-box;
        margin:5px; /* Include padding and border in the element's total width */
    }
    button,a,span {
        margin:5px;
    }
    </style>
    <body>
     
         <form action="addGame"  method="POST">
         @csrf
            <input type="text" name="names" placeholder="Please enter your the game title"><br>
            <span>@error('names'){{$message}}@enderror</span><br>
            <input type="text" name="date" placeholder="Please tell me released date"><br>
            <span>@error('date'){{$message}}@enderror</span><br>
            <input type="text" name="star" placeholder="Please tell me what your rating about the game "><br>
            <span>@error('star'){{$message}}@enderror</span><br>
            <input type="text" name="category" placeholder="Please give the category of the game (1=PC,2=PlayStation,3=Xbox) "><br>
            <span>@error('category'){{$message}}@enderror</span><br>
            <button type="submit">Add Game </button>
         </form>
         @if(session('game_name'))
            <h4>game : {{session('game_name')}} has been submit</h4>
         @endif
         <a href='/home'>home</a>
    </body>
</html>