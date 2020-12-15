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
                                            <div class="form-group{{ $errors->has('name_zh') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Store Name in Chinese') }}</label>
                                                <input type="text" name="name_zh" id="input-name_zh" class="form-control form-control-alternative{{ $errors->has('name_zh') ? ' is-invalid' : '' }}" placeholder="{{ __('Your Store Name in Chinese') }}" value="{{ old('name_en', $info->name_zh) }}" required autofocus>

                                                @if ($errors->has('name_zh'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_zh') }}</strong>
                                        </span>
                                                @endif
                                            </div>                            </div>
                                        <div class="tab-pane fade" id="fr" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                            <div class="form-group{{ $errors->has('name_fr') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Store Name in French') }}</label>
                                                <input type="text" name="name_fr" id="input-name_fr" class="form-control form-control-alternative{{ $errors->has('name_fr') ? ' is-invalid' : '' }}" placeholder="{{ __('Your Store Name in French') }}" value="{{ old('name_en', $info->name_fr) }}" required autofocus>

                                                @if ($errors->has('name_fr'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_fr') }}</strong>
                                        </span>
                                                @endif
                                            </div>                            </div>
                                        <div class="tab-pane fade" id="jp" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                            <div class="form-group{{ $errors->has('name_jp') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Store Name in Japanese') }}</label>
                                                <input type="text" name="name_jp" id="input-name_jp" class="form-control form-control-alternative{{ $errors->has('name_jp') ? ' is-invalid' : '' }}" placeholder="{{ __('Your Store Name in Japaneses') }}" value="{{ old('name_jp', $info->name_jp) }}" required autofocus>

                                                @if ($errors->has('name_jp'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_jp') }}</strong>
                                        </span>
                                                @endif
                                            </div>                            </div>
                                        <div class="tab-pane fade" id="kr" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                            <div class="form-group{{ $errors->has('name_kr') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Store Name in Korean') }}</label>
                                                <input type="text" name="name_kr" id="input-name_kr" class="form-control form-control-alternative{{ $errors->has('name_kr') ? ' is-invalid' : '' }}" placeholder="{{ __('Your Store Name in Korean') }}" value="{{ old('name_kr', $info->name_kr) }}" required autofocus>

                                                @if ($errors->has('name_en'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_en') }}</strong>
                                        </span>
                                                @endif
                                            </div>                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Store Announcement Information</h3>
                                </div>

                            </div>
                        </div>

                        <div class="table-responsive">
                            <div class="nav-wrapper">
                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-en" data-toggle="tab" href="#ance_en" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">English</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-zh" data-toggle="tab" href="#ance_zh" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Chinese</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-fr" data-toggle="tab" href="#ance_fr" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">French</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-jp" data-toggle="tab" href="#ance_jp" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Japanese</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-kr" data-toggle="tab" href="#ance_kr" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Korean</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="ance_en" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                            <div class="form-group{{ $errors->has('ance_en') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Store Announcement in English') }}</label>
                                                <input type="text" name="ance_en" id="input-name_en" class="form-control form-control-alternative{{ $errors->has('ance_en') ? ' is-invalid' : '' }}" placeholder="{{ __('Your Store Announcement in English') }}" value="{{ old('ance_en', $info->ance_en) }}" required autofocus>

                                                @if ($errors->has('ance_en'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ance_en') }}</strong>
                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ance_zh" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                            <div class="form-group{{ $errors->has('ance_zh') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Store Announcement in Chinese') }}</label>
                                                <input type="text" name="name_zh" id="input-name_zh" class="form-control form-control-alternative{{ $errors->has('ance_zh') ? ' is-invalid' : '' }}" placeholder="{{ __('Your Store Announcement in Chinese') }}" value="{{ old('ance_zh', $info->ance_zh) }}" required autofocus>

                                                @if ($errors->has('ance_zh'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ance_zh') }}</strong>
                                        </span>
                                                @endif
                                            </div>                            </div>
                                        <div class="tab-pane fade" id="ance_fr" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                            <div class="form-group{{ $errors->has('ance_fr') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Store Announcement in French') }}</label>
                                                <input type="text" name="ance_fr" id="input-name_fr" class="form-control form-control-alternative{{ $errors->has('ance_fr') ? ' is-invalid' : '' }}" placeholder="{{ __('Your Store Announcement in French') }}" value="{{ old('ance_fr', $info->ance_fr) }}" required autofocus>

                                                @if ($errors->has('name_fr'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_fr') }}</strong>
                                        </span>
                                                @endif
                                            </div>                            </div>
                                        <div class="tab-pane fade" id="ance_jp" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                            <div class="form-group{{ $errors->has('ance_jp') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Store Announcement in Japanese') }}</label>
                                                <input type="text" name="ance_jp" id="input-ance_jp" class="form-control form-control-alternative{{ $errors->has('ance_jp') ? ' is-invalid' : '' }}" placeholder="{{ __('Your Store Announcement in Japaneses') }}" value="{{ old('ance_jp', $info->ance_jp) }}" required autofocus>

                                                @if ($errors->has('name_jp'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_jp') }}</strong>
                                        </span>
                                                @endif
                                            </div>                            </div>
                                        <div class="tab-pane fade" id="ance_kr" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                            <div class="form-group{{ $errors->has('ance_kr') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-name">{{ __('Store Announcement in Korean') }}</label>
                                                <input type="text" name="ance_kr" id="input-ance_kr" class="form-control form-control-alternative{{ $errors->has('ance_kr') ? ' is-invalid' : '' }}" placeholder="{{ __('Your Store Announcement in Korean') }}" value="{{ old('ance_kr', $info->ance_kr) }}" required autofocus>

                                                @if ($errors->has('name_en'))
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_en') }}</strong>
                                        </span>
                                                @endif
                                            </div>                            </div>
                                    </div>
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
