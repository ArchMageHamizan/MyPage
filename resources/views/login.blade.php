<h1>Login</h1>
<!-- action attribute tell where the form data will be sent when the form is submitted. -->
<div class="container">
    <div class="form">
        <form  action="userLogin" method="POST">
        <!-- token will used to avoid cross out request? -->
            @csrf
            <input type="text" name="username" placeholder="Enter username"/>
            <span>@error('username'){{$message}}@enderror</span>
            <br/>            
            <input type="password" name="password" placeholder="Enter password"/>
            <span>@error('password'){{$message}}@enderror</span>
            <br/>
            <button type="submit">Login</buton>
        </form>
        
    </di>
    
</div>
<a href='/home'>home</a>
<!-- @if($errors->any())
    @foreach($errors->all() as $err)
        <li>{{$err}}</li>
    @endforeach
@endif -->

<style>
    .form{
        background:blue;     
        padding:10px;
        border-radius:10px;
        text-align:center;
  
    }
    .container{
        display: flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }
      .form input[type="text"],
      .form input[type="password"],
      .form button {
            display: block;
            margin: 10px auto; /* Center horizontally within the form */
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #fff; /* Add border for better visibility */
       }

</style>    