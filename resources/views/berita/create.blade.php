@section('js')
<script type="text/javascript">
	function readURL(input){
		if (input.files && input.files[0]){
			var reader = new FileReader();
			reader.onload = function (e){
				$('#showgambar').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

		$("#inputgambar").change(function () {
			readURL(this);
		});
	
</script>

@stop

@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />

  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
  
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{url('/home')}}">Dasboard</a></li>
				<li><a href="{{url('/admin/berita')}}">Berita</a></li>
				<li class="active">Tambah Berita</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="panel-title">Tambah Berita</h2>
					</div>
					<div class="panel-body">
						{!! Form::open(['url'=>route('berita.store'),
						'method'=>'post','files'=>'true','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
					<div class="form-group{{$errors->has('judul') ? 'has-error' : ''}}">
						{!! Form::label('judul','judul',['class'=>'col-md-2 control-label']) !!}
						<div class="col-md-8">
						{!! Form::text('judul', null,['class'=>'form-control']) !!}
						{!! $errors->first('judul','<p class="help-block">:message</p>') !!}
						</div>
					</div>

					<div class="form-group{!! $errors->has('kategori_id') ? 'has-error' : '' !!}">
						{!! Form::label('kategori_id','Kategori Berita',['class'=>'col-md-2 control-label']) !!}
						<div class="col-md-8">
						{!! Form::select('kategori_id',[''=>'']+App\Kategori::pluck('name','id')->all(), null,[
						'class'=>'js-selectize',
						'placeholder'=>'Pilih Kategori']) !!}
						{!! $errors->first('kategori_id','<p class="help-block">:message</p>') !!}
						</div>
					</div>

					<div class="form-group{{$errors->has('isi_berita') ? 'has-error' : ''}}">
						{!! Form::label('isi_berita','Isi Berita',['class'=>'col-md-2 control-label']) !!}
						<div class="col-md-8">
						{!! Form::textarea('isi_berita', null,['class'=>'ckeditor','id'=>'ckedtor']) !!}
						{!! $errors->first('isi_berita','<p class="help-block">:message</p>') !!}
						</div>
					</div>

					<div class="form-group{{$errors->has('cover') ? 'has-error' : ''}}">
						{!! Form::label('cover','Gambar',['class'=>'col-md-2 control-label']) !!}
						<div class="col-md-8">
	 					<img id="showgambar" style="max-width:250px;max-height:250px;float:left;" />
						<input type="file" name="cover" id="inputgambar" class="form-group"></div>
					</div>

					<!-- {!! Form::label('tags','Tags *',['class'=>'col-md-2']) !!}
                                <div class="col-md-8">
                                  <input data-role="tagsinput" type="text" name="tags" class="form-control">
                                </div> -->

					<div class="form-group">
						<div class="col-md-4 col-md-offset-2">
						{!! Form::submit('Simpan',['class'=>'btn btn-primary']) !!}
						</div>
					</div>
						{!! Form::close() !!}
					</div>
				</div>
				</div>
				</div>
				</div>
@endsection