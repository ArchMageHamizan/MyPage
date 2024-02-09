<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Update Game</title>
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
    
    <body>
     
         <form action="/updateGame"  method="POST">
         @csrf
            <input type="hidden" name="id" value="{{$gameUpdateList['id']}}">
            <input type="text" name="names" value="{{$gameUpdateList['names']}}"><br>            
            <input type="text" name="date" value="{{$gameUpdateList['date']}}"><br>           
            <input type="text" name="star" value="{{$gameUpdateList['star']}}"><br>          
            <input type="text" name="category" value="{{$gameUpdateList['category_id']}}"><br>
         
            <button type="submit">Update</button>
         </form>
         <a href='/home'>home</a>
    </body>
</html>