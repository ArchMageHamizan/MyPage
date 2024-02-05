<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>About Me</title>
    </head>
    <body>
         <h1>hello {{session('user')}}</h1>
         @if(session('email'))
            <h4>email from {{session('email')}} has been submit</h4>
         @endif
         <form action="addComplain"  method="POST">
         @csrf
            <input type="text" name="email" placeholder="Please enter your email"><br>
            <input type="text" name="complain" placeholder="Please tell me what your complain"><br>
            <button>Submit</button>
         </form>

         <a href='/logout'>logout</a>
    </body>
</html>


<!-- <h1>About Me</h1>
<h3>
    <ol>
        <li>curent url: {{URL::current()}}</li>
        <li>previous url : {{URL::previous()}}</li>
    </ol>
    
    <a href='/logout'>logout</a>
</h3> -->
  