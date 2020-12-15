@extends('layouts.app', ['title' => __('My Stores Management')])

@section('content')
    @include('users.partials.header', [
        'title' => __('My Stores Service')
    ])


<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Store Information</h3>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Store Name</th>
                            <th scope="col">Store Address</th>
                            <th scope="col">Store Logo</th>
                            <th scope="col">logo Operation</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($store as $info)
                            <tr>
                            <td>{{$info->storename}}</td>
                                <td>{{$info->address}}</td>
                                <td><img src="{{$info->logo}}" height="300">
                                    </td>
                                <td>
                                        <a href="" class="btn btn-md btn-primary">Update Logo</a>
                                </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Store Service Pack</h3>
                    </div>

                </div>
            </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Service Pack</th>
                            <th scope="col">Description</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$info->planname}}</td>
                                <td>{{$info->desc}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">AD-Free</th>
                            <th scope="col">Devices Lease Allowed</th>
                            <th scope="col">Sliders Upload Allowed</th>
                            <th scope="col">Slider Time Allowed</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$info->ad ? "No":"Yes"}}</td>
                            <td>{{$info->max_device}} Devices</td>
                            <td>{{$info->max_ad}} Sliders</td>
                            <td>{{$info->max_ad_time}} second</td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
@endsection
