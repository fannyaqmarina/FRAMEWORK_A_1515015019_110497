@extends('master')
@section('container')
<div class="panel panel-warning">
<div class="panel-heading">
	<strong><a href="{{url('matakuliah') }}"><i style="color: tomato" class="fa text-default fa-chevron-left"></i></a>Detail Data matakuliah</strong>
</div>
<table class="table">
	<tr>
		<td>matakuliah</td>
		<td>:</td>
		<td>{{ $matakuliah->title }}</td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td>:</td>
		<td>{{ $matakuliah->Keterangan }}</td>
	</tr>
	<tr>
		<td class="col-xs-4">Dibuat Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $matakuliah-> created_at}}</td>	
	</tr>
	<tr>
		<td class="col-xs-4">Diperbarui Tanggal</td>
		<td class="col-xs-1">:</td>
		<td>{{ $matakuliah-> update_at}}</td>	
	</tr>
</table>
</div>
@stop