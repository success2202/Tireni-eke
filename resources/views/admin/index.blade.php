@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">

  <div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-7">
            
            <div class="card shadow-sm border-0" style="background-color: green; border-radius: 12px;">
                <div class="card-body py-4 px-4">
                    
                    <div class="row align-items-center">
                        
                        <div class="col-md-7 text-white">
                            <h4 class="fw-bold mb-2">Welcome Back, Admin!</h4>
                            <p class="mb-3">Easily manage your Tireni Agriculture website.</p>

                            <a href="{{ route('admin.index') }}" 
                               class="btn btn-light btn-sm px-3 rounded-pill shadow-sm">
                               Go to Dashboard
                            </a>
                        </div>

                        <div class="col-md-5 text-center">
                            <div style="background: white; padding: 12px; border-radius: 10px; display: inline-block;">
                                <img src="/images/logo/logo.jpeg" 
                                     alt="Logo" 
                                     class="img-fluid" 
                                     style="max-height: 120px;">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<div style="height:400px">

</div>
@endsection