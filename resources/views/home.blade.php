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
                <div class="col-md-12  dashboard-title-container">
                    <h2>Ações</h2>
                </div>
                
                @include('table')

            </div>
             </div>
        </div>
    </div>
</div>
@endsection
