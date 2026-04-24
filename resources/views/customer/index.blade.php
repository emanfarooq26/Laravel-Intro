@extends('layout.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Cuaomers</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{ $dataTable->scripts() }}
@endsection