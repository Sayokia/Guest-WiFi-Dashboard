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





                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                                </ol>
                                @foreach (App\Models\Slide::all()->sortByDesc('updated_at') as $slide)
                                    @if ($slide->sid = auth()->user()->sid)
                                        <div class="carousel-inner">
                                            <div class="carousel-item  @if ($loop->first) active @endif"
                                            @if ($loop->first)
                                            data-bs-interval="10000" @endif
                                            @if ($loop -> iteration == 2)
                                            data-bs-interval="2000" @endif >
                                    <img src={{ $slide->img }} class="d-block w-100" alt="slides">

                            </div>
                        </div>
                        @endif

                        @if ($loop ->last)
                        @if ($loop -> count <3 )
                            <div class="carousel-inner">
                                            <div class="carousel-item">
                                    <img src= "../../../public/argon/img/brand/blue.png"class="d-block w-100" alt="slides">

                            </div>
                            </div>
                        @endif
                        @endif
                            
                        



                        @endforeach
                        <a  class="carousel-control-prev" href=" #carouselExampleDark" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a  class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>

                    @if ($slides_count < 3)
                    <div class="text-center">
                    <form action="{{ route('slide.store') }}" method="POST" accept-charset="UTF-8"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="img" id="img">
                        <input type="text" name="sid" id="sid" hidden value="{{ auth()->user()->sid }}">
                        <button class="btn btn-primary" type="submit">upload</button>

                    </form>

                    @else 
                    <h3 >You have reached maximum slide limit! Only 3 slides are allowed!</h3>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        </div>
        

        


        @include('layouts.footers.auth')
        </div>
    @endsection
