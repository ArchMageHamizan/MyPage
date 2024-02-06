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
    button,a {
        margin:5px;
    }
    </style>
    <body>
     
         <form action="addGame"  method="POST">
         @csrf
            <input type="text" name="names" placeholder="Please enter your the game title"><br>
            <input type="text" name="date" placeholder="Please tell me released date"><br>
            <input type="text" name="star" placeholder="Please tell me what your rating about the game "><br>
            <input type="text" name="category" placeholder="Please give the category of the game (1=PC,2=PlayStation,3=Xbox) "><br>
            <button type="submit">Add Game </button>
         </form>

         <a href='/home'>home</a>
    </body>
</html>