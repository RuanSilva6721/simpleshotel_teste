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
            <div class="text-center">
                <div class="col-md-12   dashboard-title-container">
                    <h1>Listar de Carros</h1>
                </div>
                
                @include('table')

            </div>
             </div>
        </div>
    </div>
</div>
@endsection
