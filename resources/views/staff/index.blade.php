@extends('layouts.admin', ['title' => __('Admin Announcement Post')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Admin Announcement Post')
    ])

    <div class="container-fluid mt--7">
    <div class="row">
        <div class="col-12">
            @foreach (App\Models\Post::all()->sortByDesc('updated_at') as $post) 

            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <h3 class="mb-0">Admin ID</h3>
                        </div>
                        <div class="col-4">
                            <h3 class="mb-0">Title</h3>
                        </div>
                        <div class="col-4">
                            <h3 class="mb-0">Time</h3>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-4">
                            <h3 class="mb-0">{{ $post->user_id }}</h3>
                        </div>
                        <div class="col-4">
                            <h3 class="mb-0">{{ $post->title }}</h3>
                        </div>
                        <div class="col-4">
                            <h3 class="mb-0">{{ $post->updated_at }}</h3>
                        </div>
                    </div>
                </div>

                <div class="card body">
                    <h3 class="mx-4">Content</h3>                                     
                    <p class="mx-4"> {!! $post->content !!}</p>
                    </h3>
                </div>
            </div>

            @endforeach

        </div>
    </div>
    </div>



        @include('layouts.footers.auth')
    </div>
@endsection