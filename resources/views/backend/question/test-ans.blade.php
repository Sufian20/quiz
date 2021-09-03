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
                           


                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
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
                                                <th scope="col">Sumited Anwser</th>
                                                <th scope="col">Right Anwser</th>
                                                <th scope="col">Result</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($answers as $key => $ans)
                                            <tr>
                                                <td> {{$ans->question_id}} </td>
                                                <td> {{$ans->question->question}} </td>
                                                <td> {{$ans->answer}} </td>
                                                <td> {{$ans->question->Ans}} </td>
                                                <td>
                                                    @switch($ans->question->Ans)
                                                    @case($ans->answer)
                                                    <i style="font-size: 25px;
                                            color: #41a941a6; " class="fa fa-check"></i>
                                                                                    @break


                                                                                    @default
                                                                                    <i style="font-size: 25px;
                                                    color: #f35353" class="fa fa-times"></i>
                                                                                    @endswitch
                                                                                </td>
                                                                            </tr>

                                                                            @endforeach
                                                                            <tr>
                                                                                <th>Total Right Answers</th>
                                                                                <th>
                                                
                                                    {{$t->count()}}
                                                 
                                                </th>

                                            </tr>
                                        </tbody>

                                    </table>
                                    {{ $answers->links() }}
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>
@endsection
