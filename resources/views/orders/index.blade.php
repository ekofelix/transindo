@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tes Transindo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Create New Product</a>
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
            <th width="280px">Action</th>
        </tr>
        @foreach ($order as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_kota }}</td>
            <td>{{ $item->nama_kota_tujuan }}</td>
            <td>{{ $item->kendaraan}}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->berat }}</td>
            <td>
                <form action="{{ route('orders.destroy',$item->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('orders.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('orders.edit',$item->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $order->links() !!}
</div>

@endsection