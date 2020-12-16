@extends('layouts.app', ['title' => __('My Stores Management')])

@section('content')
    @include('users.partials.header', [
        'title' => __('My Store Management')
    ])


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">
                                    @if(empty($store))
                                        You don't have any valid service subscription
                                    @else
                                        Store Name Information
                                    @endif
                                </h3>
                            </div>

                        </div>
                    </div>

                    <form method="post" action="{{route('stores.management.update')}}" autocomplete="off">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show m-2" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        @foreach ($store as $info)
                            <div>
                                <div class="row m-2">
                                    <div class="col-4">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#name_en" role="tab" aria-controls="English">English</a>
                                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#name_zh" role="tab" aria-controls="Chinese">Chinese</a>
                                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#name_fr" role="tab" aria-controls="French">French</a>
                                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#name_jp" role="tab" aria-controls="Japaneses">Japaneses</a>
                                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#name_kr" role="tab" aria-controls="Korean">Korean</a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="name_en" role="tabpanel" aria-labelledby="list-home-list">
                                                <div class="alert alert-default" role="alert">
                                                    When your client are using English, system will automatically display your English store name.
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="nm-en" class="form-control" placeholder="Your English store name" value="{{$info->name_en}}">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="name_zh" role="tabpanel" aria-labelledby="list-profile-list">
                                                <div class="alert alert-default" role="alert">
                                                    When your client are using Chinese, system will automatically display your Chinese store name.
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="nm-zh" class="form-control" placeholder="Your Chinese store name" value="{{$info->name_zh}}">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="name_fr" role="tabpanel" aria-labelledby="list-messages-list">
                                                <div class="alert alert-default" role="alert">
                                                    When your client are using French, system will automatically display your French store name.
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="nm-fr" class="form-control" placeholder="Your French store name" value="{{$info->name_fr}}">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="name_jp" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="alert alert-default" role="alert">
                                                    When your client are using Japanese, system will automatically display your Japanese store name.
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="nm-jp" class="form-control" placeholder="Your Japanese store name" value="{{$info->name_jp}}">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="name_kr" role="tabpanel" aria-labelledby="list-settings-list">
                                                <div class="alert alert-default" role="alert">
                                                    When your client are using Korean, system will automatically display your Korean store name.
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="nm-kr" class="form-control" placeholder="Your Korean store name" value="{{$info->name_kr}}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mb-2">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Update') }}</button>
                            </div>
                        @endforeach

                    </form>
                </div>

            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
