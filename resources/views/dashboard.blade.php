@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h1>New Announcement</h1>
                    </div>

                    <div class="card-body">
                        {!! DB::table('posts')->orderBy('updated_at', 'DESC')->first()->content !!}
                    </div>
                </div>

            </div>
        </div>
    

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush