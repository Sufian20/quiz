@extends('backend.master')

@section('content')

    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <!-- end col -->
                <div class="col-md-10 offset-1">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Add Question</h4>
                       
                        {{-- Success message --}}
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        @endif

                       
                        <form class="form-horizontal" role="form" action="{{url('post-que')}}" method="post">
                        @csrf
                            <div class="form-group row">
                                <label for="question" class="col-3 col-form-label">Question</label>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('question') is-invalid @enderror" value="{{ old('question') }}"    name="question" id="question" placeholder="Enter Your Question">
                                    @error('question')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="option_a" class="col-3 col-form-label">Option A</label>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('option_a') is-invalid @enderror" value="{{ old('option_a') }}"    name="option_a" id="option_a" placeholder="Enter Option A">
                                    @error('option_a')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="option_b" class="col-3 col-form-label">Option B</label>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('option_b') is-invalid @enderror" value="{{ old('option_b') }}"    name="option_b" id="option_b" placeholder="Enter Option B">
                                    @error('option_b')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="option_c" class="col-3 col-form-label">Option C</label>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('option_c') is-invalid @enderror" value="{{ old('option_c') }}"    name="option_c" id="option_c" placeholder="Enter Option C">
                                    @error('option_c')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="option_d" class="col-3 col-form-label">Option D</label>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('option_d') is-invalid @enderror" value="{{ old('option_d') }}"    name="option_d" id="option_d" placeholder="Enter Option D">
                                    @error('option_d')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="Ans" class="col-3 col-form-label">Anser</label>
                                <div class="col-9">
                                    <input type="text" class="form-control @error('Ans') is-invalid @enderror" value="{{ old('Ans') }}"    name="Ans" id="Ans" placeholder="Enter the right anser">
                                    @error('Ans')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                </div>
                            </div>
                            <div class="form-group mb-0 justify-content-end row text-center">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end container-fluid -->
    </div>
    
@endsection















































