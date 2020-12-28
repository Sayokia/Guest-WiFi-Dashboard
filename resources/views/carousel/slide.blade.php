@extends('layouts.app', ['title' => __('Carousel Management')])

@section('content')
    @include('users.partials.header', [
    'title' => __('Carousel Management')
    ])



        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Slides Preview</h3>

                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            @if($slides_count < 1)
                                <div class="text-center">
                                    <h3> You have not uploaded any pictures yet, please select and upload your pictures below.</h3>
                                </div>

                                @endif
                            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    @foreach (App\Models\Slide::all()->sortByDesc('updated_at') as $slide)
                                        @if ($slide->sid == auth()->user()->sid)
                                                <div class="carousel-item text-center @if ($loop->first) active @endif"  >
                                                    <img src="{{ $slide->img }}" class="d-block w-100" alt="slides">
                                                    <form action="{{ route('slide.destroy') }}" method="post">
                                                        
                                                        @csrf
                                                        @method('delete')
                                                        <input type="text" hidden value="{{ $slide->id }}" name="slide_id" id="slide_id">
                                                        <input type="text" hidden value="{{ $slide->img }}" name="delete_img" id="delete_img">
                                                        <button type="submit" style="margin:18px" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this slider?')">Delete</button>
                                                    </form>
                                                    

                                                </div>

                                                
                                        @endif

                                    @endforeach

                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>





                    @if ($slides_count < 3)
                                    <div class="jumbotron jumbotron-fluid">
                                        <div class="container text-center">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>
                                                                {{ $error }}
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>


                                            @endif

                    <form action="{{ route('slide.store') }}" method="POST" accept-charset="UTF-8"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="img" id="img">
                        <input type="text" name="sid" id="sid" hidden value="{{ auth()->user()->sid }}">
                        <button class="btn btn-primary" type="submit">upload</button>

                    </form>
                    </div>
                                    </div>

                    @else 
                    <div class="jumbotron jumbotron-fluid">
                                        <div class="container text-center">
                    <h3 >You have reached maximum slide limit! Only 3 slides are allowed!</h3>
                                        </div>
                                    </div>
                                @endif
                </div>
            </div>
        </div>
        </div>
        

        


        @include('layouts.footers.auth')
        </div>
    @endsection
