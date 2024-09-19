@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="pt-30">
        <div class="card-style text-center">
            <div class="error-box">
              <img class="mx-auto mb-20 w-25 img-fluid" src="{{ asset('storage/image/ZYlNSyaNDOHfdmPOFBkCwT98FwwWQsYZNksE60bg.png') }}" alt="error img">
              <h1 class="fw-700 mb-15">Page Not Found</h1>
              <p class="text-sm mb-25">
                The page you are looking for was moved removed.
                rename or might never existed.
              </p>

              <div class="d-flex align-items-center justify-content-center gap-3">
                <a href="{{ route('home') }}" class="main-btn primary-btn btn-hover">Go Home</a>
              </div>
            </div>
          </div>
    </div>
@endsection
