@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Semua Berat</h2>
                        <div class="ml-auto">
                            <a href="{{ route('weights.create') }}" class="btn btn-outline-secondary">Buat Berat</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include ('layouts.messages')
                    <table class="table table-striped">
                        <tr>
                            <th>Tanggal</th>
                            <th>Max</th>
                            <th>Min</th>
                            <th>Perbedaan</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($weights as $weight)
                        <tr>
                            <td>{{ $weight->tanggal }}</td>
                            <td>{{ number_format($weight->max) }}</td>
                            <td>{{ number_format($weight->min) }}</td>
                            <td>{{ (number_format($weight->max - $weight->min)) }}</td>
                            <td>
                                <a href="{{ route('weights.show', $weight->id) }}" class="btn btn-sm btn-outline-primary float-left">Lihat</a>
                                <a href="{{ route('weights.edit', $weight->id) }}" class="btn btn-sm btn-outline-info float-left ml-1">Ubah</a>
                                <form class="float-left ml-1" method="post" action="{{ route('weights.destroy', $weight->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td><strong>Rata-rata</strong></td>
                            <td><strong>{{ number_format($max, 2) }}</strong></td>
                            <td><strong>{{ number_format($min, 2) }}</strong></td>
                            <td colspan="2"><strong>{{ (number_format($max - $min, 2)) }}</strong></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
