@extends('backend.master')

@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <!-- end col -->
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 style="float:left" class="header-title mb-4">View Questions</h4>
                        <a href="{{ url('add-que')}}" style="float:right"><i class="fa fa-plus"></i>Add</a>
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
      <th scope="col">No</th>
      <th scope="col">Questions</th>
      <th scope="col">Option A</th>
      <th scope="col">Option B</th>
      <th scope="col">Option C</th>
      <th scope="col">Option D</th>
      <th scope="col">Ans</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($questions as $key => $que)
        <tr>
      <th scope="row"> {{ $questions->firstItem() + $key }}</th>
      <td> {{$que->question}} </td>
      <td> {{$que->option_a}} </td>
      <td>{{$que->option_b}}</td>
      <td>{{$que->option_c}}</td>
      <td>{{$que->option_d}}</td>
      <td>{{$que->Ans}}</td>
      <td>
         <a class="btn btn-outline-primary" href="{{url('/edit-que')}}/{{$que->id}}">Edit</a>
        <a class="btn btn-outline-danger" href="{{url('/delete-que')}}/{{$que->id}}">Delete</a>
     </td>
    </tr>
    @endforeach
  </tbody>
   
</table>
          {{ $questions->links() }}              
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end container-fluid -->
    </div>
@endsection
