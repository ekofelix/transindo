@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tes Transindo</h2>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Kota</th>
            <th>Nama Kota Tujuan</th>
            <th>Kendaraan</th>
            <th>Harga</th>
            <th>Berat</th>
            <th>Tanggal</th>
        </tr>
        @foreach ($order as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_kota }}</td>
            <td>{{ $item->nama_kota_tujuan }}</td>
            <td>{{ $item->kendaraan}}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->berat }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
        @endforeach
    </table>
    {!! $order->links() !!}
</div>

@endsection