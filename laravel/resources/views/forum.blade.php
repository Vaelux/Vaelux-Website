@extends('layouts.app')

@section('title')
- Forum
@endsection

@section('css')
    <style>
        .content p
        {
            text-indent : 20px;
        }

        .content .tab-pane li
        {
            padding-left   : 20px;
            text-indent    : -20px;
            padding-bottom : 10px;
        }

        .col-md-2
        {
            margin-left:0px;
            padding-left:0px;
        }

        #content-container
        {
            overflow:hidden !important;
        }
    </style>
@endsection

@section('js')
@endsection

@section('breadcrumbs')
    <div id="#breadcrumbs-wrapper">
        &nbsp;> Forum
    </div>
@endsection

@section('content')

    <div class="content">
        <iframe src="./forum_real/" style="width:100%;height:calc(100vh - 91px - 40px);border:none;"></iframe>
    </div>

@endsection
