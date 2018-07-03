<!DOCTYPE html>
<html>
<head>
    <title>
        @section('title')
            Tixy ::
        @show
    </title>

    @include('Shared.Layouts.ViewJavascript')

    <!--Meta-->
    @include('Shared.Partials.GlobalMeta')
   <!--/Meta-->

    <!--JS-->
    {!! HTML::script(config('attendize.cdn_url_static_assets').'/vendor/jquery/dist/jquery.min.js') !!}
    <!--/JS-->

    <!--Style-->
    {!! HTML::style(config('attendize.cdn_url_static_assets').'/assets/stylesheet/application.css') !!}
    <!--/Style-->

    @yield('head')

    <style>
    
    body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

body {
  color: color: #8E8C89;
  background-color: #F5F3F0;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    color: #514E4B
}

#header.navbar>.navbar-toolbar {
    background-color: #EDEBE8;
    min-height: 60px;
    padding-left: 10px;
    padding-right: 10px;
}

.page-title .title {
    color: #514E4B;
    font-size: 28px;
    line-height: 38px;
    font-weight: 400;
    margin-top: 20px;
    transform: translateX(-20px);
}

.page-title {
    padding: 10px 15px 10px 15px;
    margin: -15px;
    background-color: #F5F3F0;
    border-bottom: none;
    border-top: none;
    margin-bottom: 0;
    position: relative;
}

.nav li.nav-button a span {
    padding: 10px;
    color: #514E4B;
    font-size: 16px;
}

#header.navbar>.navbar-toolbar>.navbar-nav>li>a>.meta, .nav-section>li>a, .nav-section>li>.section {
  color: #514E4B;
}

#header.navbar>.navbar-toolbar>.navbar-nav>li>a>.meta>.arrow, .nav-section>li>a i {
    color: #0E50E9;
}

.nav li.nav-button a span i {
    color: #0E50E9;
}

.stat-box {
 border-radius: 4px;
}

.stat-box span {
    text-transform: none;
    font-weight: 400;
    color: #8E8C89;
    font-size: 16px;
}



.stat-box h3 {
    margin-bottom: 5px;
    margin-top: 0;
    font-weight: 500;
    font-size: 28px;
    color: #3B3935
}

#calendar {
    border: 1px solid #ddd;
    background: #fff;
    margin-top: -13px;
    border-radius: 4px;
}

tr {
    border-color: #EDEBE8;
    border-left: 0px
}

.fc th, .fc td {
  color: #8E8C89;
  border-right: none;
}

.list-group {
  margin-top: -13px
}

.list-group-item:first-child {
    border-top-right-radius: 4px;
    border-top-left-radius: 4px;
}

.list-group-item:last-child {
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}

.ellipsis a {
    color: #B5B2AF
}

.list-group-text a b, .list-group-text a {
  color: #514E4B;
}

.list-group-text {
  color: #8E8C89;
}

h6 {
  color: #8E8C89;
}

.event.panel {
    margin-top: -13px;
    margin-bottom: 40px;
}

.panel-success>.panel-heading {
    color: #514E4B;
    background-color: white;
    border-color: #454b7f;
    border-color: #EDEBE8;
    border-top: 4px solid #0E50E9;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    padding-left: 8px;
}

.event .event-meta li a {
    color: #514E4B;
    font-weight: 500
}

.event .event-meta li {
    color: #8E8C89;
}

.event .event-meta li.event-organiser a {
    font-weight: normal;
    color: #8E8C89
}

.event .event-date {
    border: none;
    text-shadow: none;
    background-color: #E6EDFC;
    top: 10;
    border-color: #404675;
    color: #0E50E9;
}

.event .event-date .month, .event .event-date .day {
  font-weight: 600;
}

.nm {
    font-size: 28px;
    color: #3B3935;
}

.nm.text-muted {
  font-size: 16px
}

.nav-section>li>a:after, .nav-section>li>.section:after {
    display: none;
}

.nav-section>li>a, .nav-section>li>.section {
    position: relative;
    padding: 8px 13px;
    margin: 0px;
    text-align: center;
}

.sidebar {
  background-color: transparent;
  color: #3B3935;
  border-right: 1px solid #E3E1DD;
}

#header.navbar>.navbar-header {
    height: auto;
    padding: 20px;
    background-color: transparent;
}

img.logo {
  transform: scale(0.8);
  float: left;
}

.sidebar .content>.heading {
    color: #B5B2AF;
}

.sidebar .topmenu li a>.text {
    color: #3B3935;
    text-transform: none;
    font-size: 16px;
    font-weight: 400;
}

.sidebar .topmenu li.active {
    background-color: white;
    border-left: 4px solid #FCC419;
}

.sidebar .topmenu li.active a {
  padding-left: 8px;
}

.sidebar .topmenu li.active a>.figure>[class^="ico-"], .sidebar .topmenu li.active a>.figure>[class*=" ico-"] {
    color: #8E8C89;
}

.sidebar .topmenu li a>.figure [class^="ico-"] {
    color: #8E8C89
}

.btn-success {
    background-color: #0E50E9;
    border: none;
    border-radius: 4px;
}

.btn-success [class^="ico-"], .input-group-btn>.btn [class^="ico-"] {
  color: #FBC435;
}

.page-header.page-header-block {
    width: auto;
    margin-left: 30px;
    padding: 28px 15px 20px 0;
    background-color: transparent;
    border-bottom-color: #eaeaea;
}

.container-fluid .page-header.page-header-block {
    margin-left: 0px;
    margin-bottom: 40px;
}

.input-group .form-control, .form-control, input[type="text"], input[type="search"], input[type="email"], input[type="password"], textarea {
    border: none;
    background-color: #E3E1DE;
    border-radius: 4px;
    color: #3B3936;
}

::placeholder {
    color: #514F4C;
}

.input-group-btn>.btn {
  background-color: #0E50E9;
  border: none;
  border-radius: 4px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0
}

.order_options {
  transform: translateY(-12px);
}

.input-group .form-control:not(:first-child):not(:last-child) {
    border: 1px solid #E3E1DE;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px
  }

  .nav-tabs {
      background-color: transparent;
  }

  .nav-tabs>li>a {
      color: #8E8C89;
      text-transform: none;
      font-size: 16px;
  }

  .control-label {
      font-weight: 500;
      color: #514E4B;
      font-size: 14px;
      margin-top: 12px;
      text-transform: none;
  }

.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    border: none;
    border-bottom: 2px solid #0E50E9;
    color: #093AAD;
    background: transparent
}

.sidebar .topmenu li a>.figure i.ico-arrow-left {
    color: #0E50E9;
}

.panel-heading>.panel-title{
  font-weight: 400;
  color: #8E8C89;
  font-size: 14px;
}

#countdown {
  color: #514E4B
}

.panel {
    border-bottom-width: 1px;
    border-bottom-color: ##E3E1DE;
    border-color: ##E3E1DE;
}

.mr5 {
    margin-right: 5px !important;
    color: #8E8C89
}

div.row.sortable {
  transform: translateY(-12px);
}

h4.nm {
  font-size: 18px;
}

.section h4, .section p {
  text-align: left;
}

.section h4 sub {
  display: none
}

i.ico-paragraph-justify {
  color: #B5B3B0;
}

.panel-title .ico-ticket {
  color: #0E50E9
}

.label-info, .badge-info, .hasnotification-info {
    background-color: #CFDCFB;
    color: #093AAD;
    font-weight: 400;
    font-size: 14px;
    height: 20px;
    border-radius: 2px;
}

.panel .table-responsive {
  margin-top: -42px
}

.table>thead>tr>th, .table tr>th {
    color: #8E8C89;
    background-color: #EDEBE8;
    text-transform: none;
    font-size: 12px;
}

.col-sort {
    color: #514F4B;
}

.col-sort i {
  margin-left: 5px;
}

.table>thead>tr>th {
    border-bottom: 1px solid #B5B3AF !important;
}

.table>tbody>tr>td, .table>tfoot>tr>td {
    font-size: 14px;
    color: #514E4B;
}

td a {
    color: #3B3936;
    font-weight: 500;
}

.label-warning, .badge-warning, .hasnotification-warning {
    background-color: #ffd8a8;
    font-weight: 400;
    color: #3B3835;
    border-radius: 20px;
}

td .btn-danger, .label-danger {
    background-color: #ffe3e3;
    color: #e03131;
    border: none;
    border-radius: 2px;
    font-weight: 400;
}

td .btn-primary {
    background-color: transparent;
    background-color: #CFDCFB;
    color: #093AAD;
    border: none;
    border-radius: 2px;
    font-weight: 400;
}

.label-success, .badge-success, .hasnotification-success {
    background-color: #CFDCFB;
    color: #093AAD;
    font-weight: 400;
    border-radius: 20px;
}

.pagination li.active span {
  background-color: #1756E5;
  color: #093AAD;
}

.at.arrived {
    background-color: #ebfbee;
}

.at.arrived .ci {
    background-color: #51cf66;
}

.at.list-group-item {
  color: #3B3835
}


    </style>
</head>
<body class="attendize">
@yield('pre_header')
<header id="header" class="navbar">

    <div class="navbar-header">
        <a class="navbar-brand" href="javascript:void(0);">
            <img style="width: 150px;" class="logo" alt="Attendize" src="{{asset('assets/images/tixy.png')}}"/>
        </a>
    </div>

    <div class="navbar-toolbar clearfix">
        @yield('top_nav')

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown profile">

                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="meta">
                        <span class="text ">{{isset($organiser->name) ? $organiser->name : $event->organiser->name}}</span>
                        <span class="arrow"></span>
                    </span>
                </a>


                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{route('showCreateOrganiser')}}">
                            <i class="ico ico-plus"></i>
                            Create Organiser
                        </a>
                    </li>
                    @foreach($organisers as $org)
                        <li>
                            <a href="{{route('showOrganiserDashboard', ['organiser_id' => $org->id])}}">
                                <i class="ico ico-building"></i> &nbsp;
                                {{$org->name}}
                            </a>

                        </li>
                    @endforeach
                    <li class="divider"></li>

                    <li>
                        <a data-href="{{route('showEditUser')}}" data-modal-id="EditUser"
                           class="loadModal editUserModal" href="javascript:void(0);"><span class="icon ico-user"></span>My Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a data-href="{{route('showEditAccount')}}" data-modal-id="EditAccount" class="loadModal"
                           href="javascript:void(0);"><span class="icon ico-cog"></span>Account Settings</a></li>


                    <li class="divider"></li>
                    <li><a target="_blank" href="https://www.attendize.com/feedback.php?v={{ config('attendize.version') }}"><span class="icon ico-megaphone"></span>Feedback / Bug Report</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('logout')}}"><span class="icon ico-exit"></span>Sign Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>

@yield('menu')

<!--Main Content-->
<section id="main" role="main">
    <div class="container-fluid">
        <div class="page-title">
            <h1 class="title">@yield('page_title')</h1>
        </div>
        @if(array_key_exists('page_header', View::getSections()))
        <!--  header -->
        <div class="page-header page-header-block row">
            <div class="row">
                @yield('page_header')
            </div>
        </div>
        <!--/  header -->
        @endif

        <!--Content-->
        @yield('content')
        <!--/Content-->
    </div>

    <!--To The Top-->
    <a href="#" style="display:none;" class="totop"><i class="ico-angle-up"></i></a>
    <!--/To The Top-->

</section>
<!--/Main Content-->

<!--JS-->
{!! HTML::script('assets/javascript/backend.js') !!}
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': "<?php echo csrf_token() ?>"
            }
        });
    });

    @if(!Auth::user()->first_name)
      setTimeout(function () {
        $('.editUserModal').click();
    }, 1000);
    @endif

</script>
<!--/JS-->
@yield('foot')

@include('Shared.Partials.GlobalFooterJS')

</body>
</html>