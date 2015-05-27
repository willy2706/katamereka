@extends('app')

@section('content')
<div class="form-horizontal"> 
    <div class="form-group">
        <label class="col-sm-2">Nama Pemesan</label>
            <div class="col-sm-10">
                {{$pesanan->customer_name}}
            </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 ">Jumlah</label>
        <div class="col-sm-10">
            {{$pesanan->amount}}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2">Kata-kata</label>
        <div class="col-sm-10">
            {{$pesanan->word}}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2">Due Date</label>
        <div class="col-sm-10">
            {{$pesanan->due_date}}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2">Status Pembayaran</label>
        <div class="col-sm-10">
            {{$pesanan->paid ? 'sudah bayar' : 'belum bayar'}}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2">Sudah dibuat?</label>
        <div class="col-sm-10">
            {{$pesanan->paid ? 'sudah' : 'belum'}}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2">Sudah diterima pelanggan?</label>
        <div class="col-sm-10">
            {{$pesanan->paid ? 'sudah' : 'belum'}}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2">Keterangan Tambahan</label>
        <div class="col-sm-10">
            {{$pesanan->additional_information}}
        </div>
    </div>

</div>

@stop