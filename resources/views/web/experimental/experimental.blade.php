@extends('layouts.format')
@extends('menu.menu')
@section('content')
<h3>experimental page test your features here</h3>

@endsection
@section('foot')
<script>
$('a.smx').addClass('text-white');
$('a.smx').removeClass('active');
$('a[href="/home"].smx').removeClass('text-white');
$('a[href="/home"].smx').addClass('active');
</script>
@endsection