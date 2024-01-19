<h1>Donate to Me, please😍</h1>

<x-buss-card data="donate"/>

@foreach($donation as $donate)
  <h3>{{$donate}}</h3>
@endforeach
<!-- display into template -->

@csrf
<script>
    var data=@json($donation);
    console.warn(data);
</script>
<!-- display into console -->

<h3>{{$html}}</h3>
<!-- display into template -->