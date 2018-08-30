@extends('layouts.app')
@section('stylesheet')

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet">

    <!-- Chart -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bower_components/morrisjs/morris.css')}}" />

    <!-- color CSS -->
    <link href="{{ asset('css/colors/default.css')}}" id="theme" rel="stylesheet')}}">

@endsection

@section('content')
@include('inc.topnav')
<!-- Preloader -->
        <!-- ============================================================== -->
        <!-- <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div> -->
        <!-- ============================================================== -->
        <!-- Wrapper -->
        <!-- ============================================================== -->
        <div id="wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
        @include('inc.sidebar')
           
            <!-- ============================================================== -->
            <!-- Page Content -->
            <!-- ============================================================== -->
            <div id="page-wrapper">
                    <div class="row bg-title container">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Create Project</h4>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/home">Dashboard</a>
                                </li>
                                <li class="active"></li>
                            </ol>
                        </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                       
                            <div class="white-box middle-box">
                                <h2 class="box-title text-center" style="font-size:20px !important;">New Project</h2>
                                
                                <div class="form container">
                                    @csrf
                                    <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                                <input type="text" name="name" class="input-field" placeholder="Project Name">
                                        </div>
                                        <div class="form-group row">
                                                <textarea type="text" name="description" class="input-field" placeholder="Short Description"></textarea>
                                        </div>
                                        <div class="form-group row">
                                                <input type="text" name="language" class="input-field" placeholder="Preferred Language">
                                        </div>
                                        <div class="form-group row">
                                                <input type="date" name="deadline" class="input-field" placeholder="Expected Deadline">
                                        </div>
                                        <label for="" class="label">Specifications:</label><br>

                                        <div class="form-group row">
                                                <input type="file" class="input-field" name="specification" placeholder="Specification Document">
                                        </div>
                                        <br>
                                        <div class="center">
                                            <input type="submit" class="btn-mol" value="Create">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2018 &copy; Molecule </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
</div>
  <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}/script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/custom.min.js')}}"></script>

    <!-- Chart -->
    <script src="{{ asset('plugins/bower_components/raphael/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('plugins/bower_components/morrisjs/morris.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/morris-data.js')}}" type="text/javascript"></script>
@endsection