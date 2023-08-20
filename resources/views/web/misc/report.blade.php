@extends('layouts.format')
@extends('menu.menu')
@section('content')
<div class="">
    <div class="row ">
        <div class="col-md-9 offset-md-1">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body overflow-auto">
                    <div>
                        <div id="table">

                        </div>
                        <div id="foot">
                            <div class="mt-3 col-md-5 offset-md-7">
                                <nav aria-label="Page navigation example">
                                    <ul id="table-page-1" class="pagination">
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
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
    $('a[href="/report"].smx').removeClass('text-white');
    $('a[href="/report"].smx').addClass('active');
    
$(document).ready((event) => {
    var page = 1;
    var pageSize = 30;
    var url = "/api/json?page=" + page + "&pageSize=" + pageSize;
    call_tabulator(url,"#table",pageSize,"#table-page-1");
       
})
</script>
@endsection