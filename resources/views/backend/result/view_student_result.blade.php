@extends('backend.master')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <!-- end col -->
            <div class="col-md-10 offset-1">
                <div class="card-box">
                    <h4 style="float:left" class="header-title mb-4">View Students Result</h4>
                    <a href="{{ url('add-category')}}" style="float:right"><i class="fa fa-plus"></i>Add</a>
                    {{-- Success message --}}
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Posetive Anser</th>
                                <th scope="col">Negetive Anser</th>
                                <th scope="col">Total</th>
                                <th scope="col">View</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        @php
                        $sl = 1;
                        @endphp
                        <tbody>
                          
                                @foreach($students as $key => $stu)
                            <tr>
                                <th scope="row">{{ $sl++ }}</th>
                                <td> {{ $stu->name }} </td>
                                <td> 15 </td>
                                <td> 5 </td>
                                <td> 15 </td>
                                <td><a class="btn btn-sm btn-success" href="{{ url('view-detail_result') }}/{{ $stu->id }}">view</a></td>

                                <td>
                                    
                                    <a class="btn btn-sm btn-danger" href="{{ url('#') }}/{{ $stu->id }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                       
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>
@endsection
