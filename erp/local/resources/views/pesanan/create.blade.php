@extends('app')
@section('content')
    <form id = "creationForm" class="form-horizontal" role="form" method="post">
        <div class="form-group">
            <label class="col-sm-2 control-label">Nama Pemesan</label>
            <div class="col-sm-10">
                <input type="text" name="customer_name" required placeholder="Nama Pemesan" value="{{$pesanan->customer_name}}">
                <!-- <textarea name="nama" id="" rows="1" placeholder="Nama Pemesan" class="form-control">{{$pesanan->customer_name}}</textarea> -->
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="number" min="1" name="amount" value="{{$pesanan->amount}}" required />
                <!-- <textarea name="alamat" id="" rows="1" placeholder="Alamat Pemesan" class="form-control">{{$pesanan->jumlah}}</textarea> -->
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-sm-2 control-label">Kata-kata</label>
            <div class="col-sm-10">
<!--                 <input type="text" name="word" required placeholder="Kata" value="{{$pesanan->word}}"> -->
                <textarea name="word" id="" rows="5" placeholder="Kata-kata" class="form-control">{{$pesanan->word}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Due Date</label>
            <div class="col-sm-10">
                <input type="date" name="due_date"  value="{{$pesanan->due_date}}" required />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Assign To</label>
            <div class="col-sm-10">
                <input type="text" name="assign_to" required placeholder="Assign To" value="{{$pesanan->assign_to}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Paid</label>
            <div class="col-sm-10">
                {!!Form::checkbox('paid', true, $pesanan->paid)!!}
                <!-- <textarea name="paid" id="" rows="1" placeholder="Paid" class="form-control">{{$pesanan->paid}}</textarea> -->
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Sudah dibuat?</label>
            <div class="col-sm-10">
                {!!Form::checkbox('done', true, $pesanan->done)!!}
                <!-- <textarea name="done" id="" rows="1" placeholder="Done" class="form-control">{{$pesanan->done}}</textarea> -->
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Sudah diterima pelanggan?</label>
            <div class="col-sm-10">
                {!!Form::checkbox('delivered', true, $pesanan->delivered)!!}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Keterangan tambahan</label>
            <div class="col-sm-10">
                <textarea name="additional_information" id="" rows="5" placeholder="Keterangan tambahan" class="form-control">{{$pesanan->additional_information}}</textarea>
                <!-- <input type="text" name="additional_information" required placeholder="Keterangan tambahan" value="{{$pesanan->additional_information}}"> -->
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>

        </div>
    </form>
@endsection

@section('script')
<script type="text/javascript">
    addPesanan();

    function addPesanan() {
        var table = document.getElementById('pesanan');
        var tr = document.createElement('tr');
        var td1 = document.createElement('td');
        td1.setAttribute('class', 'col-sm-8');
        td1.innerHTML = document.getElementById('isiproduk').innerHTML;

        var td2 = document.createElement('td');
        td2.setAttribute('class', 'col-sm-8');
        td2.innerHTML = '<textarea name="jumlah[]" rows="1" placeholder="" class="form-control"></textarea>';
        tr.appendChild(td1);
        tr.appendChild(td2);
        table.appendChild(tr);
    }
</script>
@endsection
