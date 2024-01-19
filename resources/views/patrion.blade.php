<h1>Patrion Member Page</h1>
<br/>
<div>
    <p>Are you a member? :</p>
    <ul>
        <!-- Link with pat=true -->
        <li><a href="{{ route('patrion', ['pat' => 'true']) }}">Yes</a></li>
                
        <!-- Link with pat=false -->
        <li><a href="{{ route('patrion', ['pat' => 'false']) }}">No</a></li>
    </ul>
</div>
<x-buss-card data="patrion"/>
