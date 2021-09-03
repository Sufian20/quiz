@extends('backend.master')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-12">
                <div class="card-box">
                    <h4 style="float:left" class="header-title mb-4">View Answers</h4>
                    <br>
                    <div id="accordion">
                        <div class="card">
                            @foreach($info as $key => $value)
                               <div class="row">
                                     <div class="col-md-4">
                                        <a href="{{ route('InduAns') }}"><h5>{{ $value->name }}</h5></a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><h5>{{ $value->created_at }}</h5></a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><h5>{{ $value->email }}</h5></a>
                                    </div>
                                </div>
                            @endforeach



                 



                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>
@endsection
