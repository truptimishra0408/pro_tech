@extends('layouts.format')
@extends('menu.menu')
@section('content')
<div class="">
    <div class="row ">
        <div class="col-md-9 offset-md-1">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __(Auth::user()->name .' you are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('foot')
<script>
$('a.smx').addClass('text-white');
$('a.smx').removeClass('active');
$('a[href="/home"].smx').removeClass('text-white');
$('a[href="/home"].smx').addClass('active');
</script>
@endsection