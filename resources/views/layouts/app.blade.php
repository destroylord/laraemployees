@extends('layouts.base')

@section('app')

<!-- Page Wrapper -->
<div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.components.sidebar')
        <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include('layouts.components.navigation')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
          </div>

            @yield('body')
          
        </div>
    </div>
    <!-- End of Main Content -->
        
        @include('layouts.components.footer')

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


@endsection