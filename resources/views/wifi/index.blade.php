@extends('layouts.app', ['title' => __('Wi-Fi Status Management')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Wi-Fi Status Management')
    ])


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">
                                    @if(empty($wifi))
                                        You don't have any valid service subscription
                                    @else
                                        Wi-Fi Status Switch
                                    @endif
                                </h3>
                            </div>

                        </div>
                    </div>

                    @if(!empty($wifi))
                    <form method="POST" action="{{route('wifi.update')}}" autocomplete="off">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show m-2" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="m-4">
                            <select class="custom-select" name="wifi">
                                <option selected>Current Status: {{$wifi?"Wi-Fi Service is On":"Wi-Fi Service is Disabled"}}</option>
                                <option value="0">Disabled Wi-Fi Service</option>
                                <option value="1">Turn on Wi-Fi Service</option>
                            </select>
                        </div>
                        <div class="text-center mb-2">
                            <button type="submit" class="btn btn-primary mt-4">{{ __('Update') }}</button>
                        </div>

                    </form>
                    @endif
                </div>

            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
