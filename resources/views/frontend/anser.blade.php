@extends('frontend.master')

@section('content')

<section class="main-header">
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">

        <h1 class="header">Get Examination</h1>


    </div>
</section>

<!----Question Area Start----->
<section class="questions ">

    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        
        <h3 class="h-title">Test 1</h3>
        <p class="h-pera">Anser the follwing questions.</p>

          {{-- Success message --}}
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        @endif


      <form class="form-horizontal" role="form" action="{{url('post-anser')}}" method="post">
      @csrf
        <div class="all-que">
            <div class="row justify-content-center">
                <?php
                     $count=1;
                ?>
                 
                    @foreach($question_ans as $key => $que)
                        <div class="col-md-5">
                    <div class="questions-item">

                            <div class="form-group">
                                <h6 class="que">{{ $que->id }}. {{ $que->question }}</h6>
                                <input type="hidden" name="question_id[{{$count}}]" value="{{ $que->id }}">
                               

                                <label class="radio-inline">
                                     <input type="radio" name="answer[{{$count}}]" value="{{ $que->option_a }}">(A){{ $que->option_a }}
                                </label><br>

                                <label class="radio-inline">
                                     <input type="radio" name="answer[{{$count}}]" value="{{ $que->option_b }}">(B){{ $que->option_b }}
                                </label><br>
                            
                        
                                <label class="radio-inline">
                                     <input type="radio" name="answer[{{$count}}]" value="{{ $que->option_c }}">(C){{ $que->option_c }}
                                </label><br>
                                
                                <label class="radio-inline">
                                     <input type="radio" name="answer[{{$count}}]" value="{{ $que->option_d }}">(D){{ $que->option_d }}
                                </label><br>
                        </div>
                        
                    </div>
                </div>


            
                        
                    <?php $count++; ?>
                    @endforeach
            



            </div>

            <div class="form-group mb-0 justify-content-end row text-center">
                <div class="col-12">
                    <button type="submit" class="btn my-btn waves-effect waves-light">Sumbit</button>
                </div>
            </div>
        </div>

        </form>
    </div>
</section>
<!----Question Area End----->



@endsection
