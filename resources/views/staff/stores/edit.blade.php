@extends('layouts.admin', ['title' => __('Store Management')])
@foreach($store as $info)
@section('content')
    @include('users.partials.header', [
        'title' => __('Edit Store Information') . ': '. $info->name
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Edit Store Information') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('stores.update') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Store information') }}</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('sid') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Store ID') }}</label>
                                    <input type="text" name="sid" id="input-sid" class="form-control form-control-alternative{{ $errors->has('sid') ? ' is-invalid' : '' }}" placeholder="{{ __('Store ID (Not Modifiable)') }}" value="{{ old('name', $info->sid) }}" required readonly>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Store Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Store Name') }}" value="{{ old('email', $info->name) }}" required>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('Store Address') }}</label>
                                    <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="{{ __('Store Address') }}" value="{{ old('address', $info->address) }}" required>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('logo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-address">{{ __('Store Logo URL') }}</label>
                                    <input type="text" name="logo" id="input-logo" class="form-control form-control-alternative{{ $errors->has('logo') ? ' is-invalid' : '' }}" placeholder="{{ __('Store Logo URL Address') }}" value="{{ old('logo', $info->logo) }}" >

                                    @if ($errors->has('logo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('logo') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('wifi') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-admin">{{ __('Wi-Fi Status') }}</label>
                                    <select name="wifi" id="input-wifi"  class="form-control form-control-alternative{{ $errors->has('wifi') ? ' is-invalid' : '' }}">
                                        <option value="{{ old('wifi', $info->wifi) }}">Current: {{$info->wifi?"Wi-Fi is turning on":"Wi-Fi is Disabled"}}</option>
                                        <option value="1">Turn on the Wi-Fi</option>
                                        <option value="0">Disable the Wi-Fi</option>
                                    </select>
                                    @if ($errors->has('wifi'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('wifi') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('ad') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-admin">{{ __('Ad-Free Status') }}</label>
                                    <select name="ad" id="input-ad"  class="form-control form-control-alternative{{ $errors->has('ad') ? ' is-invalid' : '' }}">
                                        <option value="{{ old('ad', $info->ad) }}">Current: {{$info->ad?"Store will have the AD":"Store will not have any AD"}}</option>
                                        <option value="1">Show Ad on the Store Portal</option>
                                        <option value="0">No Ad on the Store Portal</option>
                                    </select>
                                    @if ($errors->has('ad'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ad') }}</strong>
                                        </span>
                                    @endif
                                </div>



                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />

                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
@endforeach
