<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Startex-Dashboard</title>

    <link rel="icon" href="{{asset('dashboard/assets/images/favicon-32x32.png')}}" type="image/png">

  <!-- loader-->

	<link href="{{asset('dashboard/assets/css/pace.min.css')}}" rel="stylesheet">

	<script src="{{asset('dashboard/assets/js/pace.min.js')}}"></script>



  <!--plugins-->

  <link href="{{asset('dashboard/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/plugins/metismenu/metisMenu.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/plugins/metismenu/mm-vertical.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/plugins/simplebar/css/simplebar.css')}}">

  <!--bootstrap css-->

  <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

  <!--main css-->

  <link href="{{asset('dashboard/assets/css/bootstrap-extended.css')}}" rel="stylesheet">

  <link href="{{asset('dashboard/sass/main.css')}}" rel="stylesheet">

  <link href="{{asset('dashboard/sass/dark-theme.css')}}" rel="stylesheet">

  <link href="{{asset('dashboard/sass/blue-theme.css')}}" rel="stylesheet">

  <link href="{{asset('dashboard/sass/semi-dark.css')}}" rel="stylesheet">

  <link href="{{asset('dashboard/sass/bordered-theme.css')}}" rel="stylesheet">

  <link href="{{asset('dashboard/sass/responsive.css')}}" rel="stylesheet">

</head>
<body>
    

    @include('dashboard.layout.header')
     @include('dashboard.layout.asides')
      <main class="main-wrapper">
    <div class="main-content">

    @yield('content')
    </main>
  </div>
   @include('dashboard.layout.footer')
    
    {{-- <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">

    <i class="material-icons-outlined">tune</i>Customize

    </button> --}}

  

  {{-- <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">

    <div class="offcanvas-header border-bottom h-70">

      <div class="">

        <h5 class="mb-0">Theme Customizer</h5>

        <p class="mb-0">Customize your theme</p>

      </div>

      <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">

        <i class="material-icons-outlined">close</i>

      </a>

    </div>

    <div class="offcanvas-body">

      <div>

        <p>Theme variation</p>



        <div class="row g-3">

          <div class="col-12 col-xl-6">

            <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>

            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BlueTheme">

              <span class="material-icons-outlined">contactless</span>

              <span>Blue</span>

            </label>

          </div>

          <div class="col-12 col-xl-6">

            <input type="radio" class="btn-check" name="theme-options" id="LightTheme">

            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="LightTheme">

              <span class="material-icons-outlined">light_mode</span>

              <span>Light</span>

            </label>

          </div>

          <div class="col-12 col-xl-6">

            <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">

            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="DarkTheme">

              <span class="material-icons-outlined">dark_mode</span>

              <span>Dark</span>

            </label>

          </div>

          <div class="col-12 col-xl-6">

            <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">

            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="SemiDarkTheme">

              <span class="material-icons-outlined">contrast</span>

              <span>Semi Dark</span>

            </label>

          </div>

          <div class="col-12 col-xl-6">

            <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">

            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BoderedTheme">

              <span class="material-icons-outlined">border_style</span>

              <span>Bordered</span>

            </label>

          </div>

        </div><!--end row-->



      </div>

    </div>

  </div> --}}

    
    <script src="{{asset('dashboard/assets/js/bootstrap.bundle.min.js')}}"></script>



  <!--plugins-->

  <script src="{{asset('dashboard/assets/js/jquery.min.js')}}"></script>

  <!--plugins-->

  <script src="{{asset('dashboard/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>

  <script src="{{asset('dashboard/assets/plugins/metismenu/metisMenu.min.js')}}"></script>

  <script src="{{asset('dashboard/assets/plugins/apexchart/apexcharts.min.js')}}"></script>

  <script src="{{asset('dashboard/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>

  <script src="{{asset('dashboard/assets/plugins/peity/jquery.peity.min.js')}}"></script>

  <script>

    $(".data-attributes span").peity("donut")

  </script>

  <script src="{{asset('dashboard/assets/js/main.js')}}"></script>

  <script src="{{asset('dashboard/assets/js/dashboard1.js')}}"></script>

  <script>

	   new PerfectScrollbar(".user-list")

  </script>

 <script src="{{asset('dashboard/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>

	<script src="{{asset('dashboard/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>

	<script>

		$(document).ready(function() {

			$('#example').DataTable();

		  } );

	</script>

	<script>

		$(document).ready(function() {

			var table = $('#example2').DataTable( {

				lengthChange: false,

				buttons: [ 'copy', 'excel', 'pdf', 'print']

			} );

		 

			table.buttons().container()

				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );

		} );

	</script>

</body>
</html>