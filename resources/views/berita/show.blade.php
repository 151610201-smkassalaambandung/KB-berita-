@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Lihat Berita</h2>
					</div>
					<div class="panel-body">
					<div class="form-group">
						<label class="control-label">Judul</label>
						<input type="text" name="" class="form-control" readonly="" value="{{$berita->judul}}">
					</div>
					<div class="form-group">
						<label class="control-label">Kategori Berita</label>
						<input type="text" name="" class="form-control" readonly="" value="{{$berita->kategori->name}}">
					</div>
					<div class="form-group">
						<label class="control-label">Isi Berita</label>
						<textarea class="form-control" name="" readonly="" rows="50" >{{$berita->isi_berita}}</textarea>
					</div>
					<div class="form-group">
					<a href="{{route('berita.index')}}" class="btn btn-warning pull-right">Back</a>
				</div>
					</div>
				</div>
		</div>
	</div>
</div>
@endsection
