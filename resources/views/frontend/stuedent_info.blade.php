@extends('frontend.master')

@section('content')



<section class="e-head">
    @auth
    @if(auth()->user()->user_status == 1)
    <li><a href="{{ route('home') }}"> Dashboard </a></li>
    @else
    <li><a href="#"> Profile </a></li>
    @endif
    @else
    <li><a href="{{ route('register') }}"> Login/Register </a></li>
    @endauth
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        <h1 class="exam-header">WelCome To Window Of Exam</h1>
    </div>
</section>




<section class="exam-paper ">
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        <div class="form-group mb-0 justify-content-end row text-center">
            <div class="col-12">
                <a class=" text-center" href="{{ route('Ans') }}"> <button type="submit" class="btn btn-sub waves-effect waves-light">Now let's start your exam >>></button> </a>
            </div>
        </div>
    </div>
</section>
@endsection
