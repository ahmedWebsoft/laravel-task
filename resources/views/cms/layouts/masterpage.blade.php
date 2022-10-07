<!DOCTYPE html><html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A Content Management System designed by horizontech.biz">
  <meta name="author" content="Designed &amp; Developed by horizontech.biz">

  <link rel="shortcut icon" href="{{ url('') }}/assets/images/favicon.ico">
  <title>{{getConfig('site_name')}} - @yield('title')</title>

  <link href="{{ url('') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ url('') }}/assets/css/icons.css" rel="stylesheet" type="text/css">
  <link href="{{ url('') }}/assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="{{ url('') }}/assets/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="{{ url('').mix('css/custom.css') }}" rel="stylesheet" type="text/css">

  <script src="{{ url('') }}/assets/js/modernizr.min.js"></script>

  <meta content="{{csrf_token()}}" id="csrf-token">
<meta content="{{config('mediagallery.media.fetch_url')}}" id="file-url">
<meta content="{{url('')}}" id="app-url">
</head><body class="fixed-left">{{-- <link href="{{url('').mix('css/custom.css')}}" type="text/css" rel="stylesheet"> --}}


@yield('top-styles')








  <!-- Begin page -->
  <div id="wrapper">

    @section('header')
    @include('cms.layouts.header')
    @show

    @section('leftsidebar')
    @include('cms.layouts.leftsidebar')
    @show



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">

      @yield('content')


      <footer class="footer text-right">
        © 2016 - {{Date('Y')}} <a href="#" target="_blank">Task Technologies</a>. All rights
        reserved.
      </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    @section('rightsidebar')
    @include('cms.layouts.rightsidebar')
    @show

  </div>
  <!-- END wrapper -->


  <script>
    const PARENT_URL = '{{url('')}}';
    const FILE_PATH = '{{config('armour.media_fetch_url')}}'
    const X_CSRF_TOKEN = '{{ csrf_token() }}';
  </script>
  <script src="{{url('').mix('/js/manifest.js') }}"></script>
  <script src="{{url('').mix('/js/vendor.js') }}"></script>
  <script src="{{url('').mix('/js/app.js') }}"></script>

  <script>
    var resizefunc = [];
  </script>
  <!-- axios -->
  <script src="{{url('')}}/assets/js/sweetalert2.min.js"></script>
  <script src="{{url('')}}/assets/js/axios.min.js"></script>
  <!-- jQuery  -->
  <script src="{{ url('') }}/assets/js/jquery.min.js"></script>
  <script src="{{ url('') }}/assets/js/popper.min.js"></script>
  <!-- Popper for Bootstrap -->
  <script src="{{ url('') }}/assets/js/bootstrap.min.js"></script>
  <script src="{{ url('') }}/assets/js/detect.js"></script>
  <script src="{{ url('') }}/assets/js/fastclick.js"></script>
  <script src="{{ url('') }}/assets/js/jquery.slimscroll.js"></script>
  <script src="{{ url('') }}/assets/js/jquery.blockUI.js"></script>
  <script src="{{ url('') }}/assets/js/waves.js"></script>
  <script src="{{ url('') }}/assets/js/wow.min.js"></script>
  <script src="{{ url('') }}/assets/js/jquery.nicescroll.js"></script>
  <script src="{{ url('') }}/assets/js/jquery.scrollTo.min.js"></script> @yield('bottom-mid-scripts')

  <script src="{{ url('') }}/assets/js/jquery.core.js"></script>
  <script src="{{ url('') }}/assets/js/jquery.app.js"></script> @yield('bottom-bot-scripts')


 


</body></html>