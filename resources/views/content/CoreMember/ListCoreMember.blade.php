@extends('adminlte::page')

@section('title', 'MOZAIC Minimarket')

@section('content_header')
    
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page">Daftar Anggota</li>
    </ol>
  </nav>

@stop

@section('content')

<h3 class="page-title">
    <b>Daftar Anggota</b> <small>Kelola Anggota </small>
</h3>
<br/>

@if(session('msg'))
<div class="alert alert-info" role="alert">
    {{session('msg')}}
</div>
@endif 
<div class="card border border-dark">
  <div class="card-header bg-dark clearfix">
    <h5 class="mb-0 float-left">
        Daftar
    </h5>
  </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered table-hover table-full-width">
                <thead>
                    <tr>
                        <th style='text-align:center'>No</th>
                        <th style='text-align:center'>No. NIK</th>
                        <th style='text-align:center'>Devisi</th>
                        <th style='text-align:center'>Nama Anggota</th>
                        <th style='text-align:center'>Total Simpanan Wajib</th>
                        <th style='text-align:center'>Total Piutang</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $no = 1;?>
                    @foreach ($data as $row)
                        <tr>
                          <td style="text-align: center">{{ $no++ }}.</td>
                          <td>{{ $row['member_no'] }}</td>
                          <td>{{ $row['division_name'] }}</td>
                          <td>{{ $row['member_name'] }}</td>
                          <td>{{ number_format($row['member_mandatory_savings'],2,',','.') }}</td>
                          <td>{{ number_format($row['member_account_receivable_amount'],2,',','.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>

@stop

@section('footer')
    
@stop

@section('css')
    
@stop

@section('js')
    
@stop