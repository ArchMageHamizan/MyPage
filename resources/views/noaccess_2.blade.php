<h1>Sorry you are not patrion member</h1>
<h1>Do you want to be our patrion member?</h1>
<ul>
        <!-- Link with mem=true -->
        <li><a href="{{ route('noaccess_2', ['mem' => 'true']) }}">Yes</a></li>
                
        <!-- Link with mem=false -->
        <li><a href="{{ route('noaccess_2', ['mem' => 'false']) }}">No</a></li>
</ul>
