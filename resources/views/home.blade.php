<h1>Home Page</h1>
<div>
    <h3>curent url: {{URL::current()}}</h3> 
    <h3>previous url: {{URL::previous()}}</h3> 
</div>
<ol>
    <li><a href="/about">About Me</a></li>
    <li><a href="/donate">Donation</a></li>
    <li><a href="/chronicle">My Story</a></li>
    <li><a href="/login">Login</a></li>
    <li><a href="/patrion">Patrion Member</a></li>
    <li><a href="/users">Data</a></li>
    <li><a href="/ban">Banlist</a></li>

</ol>
<!-- <form action="{{URL::to('/donate')}}" method="post">
    <input type="text"/>
    <br/>
    <button>Submit</button>    
</form> -->
<x-buss-card data="home"/>

