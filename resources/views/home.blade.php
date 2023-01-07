@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            <div class="text-center align-self-md-center">
                @include('graphic')

                <div class="col-md-12  dashboard-title-container">
                    <h3>Ações</h3>
                </div>

                @include('table')

            </div>
             </div>
        </div>
    </div>
</div>
@endsection
