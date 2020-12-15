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
                            <h3 class="mb-0">Store Name</h3>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                </div>
                @foreach ($store as $info)
                <div class="table-responsive">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-en" data-toggle="tab" href="#en" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">English</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-zh" data-toggle="tab" href="#zh" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Chinese</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-fr" data-toggle="tab" href="#fr" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">French</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-jp" data-toggle="tab" href="#jp" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Japanese</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-kr" data-toggle="tab" href="#kr" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Korean</a>
                        </li>

                    </ul>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="en" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                <div class="form-group{{ $errors->has('name_en') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Store Name in English') }}</label>
                                    <input type="text" name="name_en" id="input-name_en" class="form-control form-control-alternative{{ $errors->has('name_en') ? ' is-invalid' : '' }}" placeholder="{{ __('Your Store Name in English') }}" value="{{ old('name_en', $info->name_en) }}" required autofocus>

                                    @if ($errors->has('name_en'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_en') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="zh" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </div>
                            <div class="tab-pane fade" id="fr" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                            </div>
                            <div class="tab-pane fade" id="jp" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                            </div>
                            <div class="tab-pane fade" id="kr" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Store Information</h3>
                        </div>

                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
@endsection
