@extends('layouts.admin', ['title' => __('Stores Management')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Stores Management')
    ])


<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Cooperated Stores</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="" class="btn btn-sm btn-primary">Add New Store</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Store ID</th>
                            <th scope="col">Store Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Service Plan</th>
                            <th ></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($storeData as $store)
                            <tr>
                            <td>{{$store->sid}}</td>
                            <td>{{$store->storename}}</td>
                                <td>{{$store->address}}</td>
                                <td>{{$store->planname}}</td>

                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v">Edit</i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="{{ route('users.edit',$store->sid)}}">Edit</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
@endsection
