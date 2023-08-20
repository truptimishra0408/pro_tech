@extends('layouts.format')
@extends('menu.menu')
@section('content')
<div class="">
    <div class="row ">
        <div class="col-md-9 offset-md-1">
            <div class="card">
                <div class="card-header">{{ __('Form') }}</div>

                <div class="card-body">
                    <form id="upload">
                        @csrf
                        <div class="row">
                            <div>
                                <label>File</label> <input name="file" type="file">
                            </div>
                            <div>
                            </div>
                        </div>
                    </form>
                    <button id="submit" class="btn btn-primary" type="submit">submit</button>
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
$('a[href="/import"].smx').removeClass('text-white');
$('a[href="/import"].smx').addClass('active');
$(document).ready((event) => {
    $('#submit').click((e) => {
        var formdata = new FormData(document.getElementById('upload'));
        $.ajax({
            url: "/import",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success:(e)=>{

            }
        })
    })
})
</script>
@endsection