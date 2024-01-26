<h1>About Me</h1>
<h3>
    <ol>
        <li>curent url: {{URL::current()}}</li>
        <li>previous url : {{URL::previous()}}</li>
    </ol>
    <h1>{{session('username')}}</h1>
    <a href='logout'></a>
</h3>
<x-buss-card data="about"/>     