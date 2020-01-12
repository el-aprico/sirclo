@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Tambah Berat</h2>
                        <div class="ml-auto">
                            <a href="{{ route('weights.index') }}" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('weights.store') }}" method="post">
                        @include('weights.form', ['buttonText' => 'Buat Berat'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
