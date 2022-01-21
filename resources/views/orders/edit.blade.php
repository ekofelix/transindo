@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Orders</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('orders.update',$order->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Kota : </strong>
                    <input type="text" name="nama_kota" value="{{ $order->nama_kota }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Kota Tujuan : </strong>
                    <input type="text" name="nama_kota_tujuan" value="{{ $order->nama_kota_tujuan }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kendaraan : </strong>
                    <input type="text" name="kendaraan" value="{{ $order->kendaraan }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga : </strong>
                    <input type="number" name="harga" value="{{ $order->harga }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Berat : </strong>
                    <input type="number" id="berat" onkeyup="sum();" name="berat" value="{{ $order->berat }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
    
@endsection
<script>
    function sum(){
        var brt = document.getElementById('berat').value;
        if(100<brt && brt<125){
            document.getElementById('berat').value = 100;
        }
        else if(125<brt && brt<150){
            document.getElementById('berat').value = 150;
        }
    }
</script>