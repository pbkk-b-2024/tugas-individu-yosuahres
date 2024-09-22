@extends('layouts.master')

@section('title', '404 Not Found')

@section('content')
<!-- Main Content -->
<div id="content">
      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found</p>
            <p class="text-gray-500 mb-0">NOT YET</p>

            <!-- Back to Dashboard -->
            <a href="#">&larr; Back to Dashboard</a>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection