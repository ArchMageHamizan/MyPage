<h1>Hello my special subscriber {{$nameSubsq}}</h1>
<!-- This recieve data from controller file (SubsController.php) -->

@if($nameSubsq=='Hamizan')
    <h3>I like Ice Cream</h3>
@elseif($nameSubsq=='mizan')
    <h3>I like Cake</h3>
@else
    <h3>I like Chocalate</h3>
@endif

@foreach($tickets as $ticket)
<h3>{{$ticket}}</h3>
@endforeach
<!-- process in blade template -->