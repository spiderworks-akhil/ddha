@extends('admin._layouts.default')
@section('content')
<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">
        @include('admin._partials.profile_menu')

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile">
                    <i data-feather="menu" class="align-self-center topbar-icon"></i>
                </button>
            </li>

        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->

<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">All Widgets</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin')}}">Admin</a></li>
                                <li class="breadcrumb-item active">All Widgets</li>
                            </ol>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!-- end page title end breadcrumb -->
        @include('admin._partials.notifications')
        <div class="row">
            <div class="col-6">
                <form method="POST" action="{{ route('admin.widgets.save') }}" class="p-t-15" id="InputFrm"
                    data-validate=true>
                    @csrf
                    <input type="hidden" name="id" value="1">
                    <div class="card">
                        <div class="card-header">
                            Mail
                        </div>
                        <div class="card-body row">
                            <div class="form-group col-md-12">
                                <label>To Address</label>
                                <input type="text" name="section[to_address]" class="form-control"
                                    value="{{$data['mail']['to_address']}}">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Cc : ( Eg - test@gmail.com,test2@gmail.com,... )</label>
                                <textarea name="section[cc_address]"
                                    class="form-control">{{$data['mail']['cc_address']}}</textarea>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-sm btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div><!-- container -->

    @include('admin._partials.footer')
</div>
<!-- end page content -->
@endsection
@section('footer')

@endsection