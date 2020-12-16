@extends('layouts.admin', ['title' => __('Admin Announcement Post')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Admin Announcement Post')
    ])

    <div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Create new Annoucement</h3>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form action="{{ route('post.post.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="content" class="form-control-label">Content</label>
                                <textarea type="text" class="form-control" id="content" name="content" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                </div>

                
                </div>

            </div>
        </div>
    </div>



        @include('layouts.footers.auth')
    </div>
@endsection