@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-1">
			<ul class="breadcrumb">
				<li><a href="{{url('/home')}}">Dasboard</a></li>
				<li class="active">Berita</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Berita</h2>
				</div>
				<div class="panel-body">
					<p><a class="btn btn-primary" href="{{url('/admin/berita/create')}}"><i class="fa fa-plus"></i>Tambah</a></p>
					<table class="table table-bordered">
                <tr class="success">
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Isi Berita</th>
                  <th>Kategori Berita</th>
                  <th>Jumlah yg Melihat</th>
                  <th width="120px">Actions</th>
                </tr>

                @foreach ($berita as $data)
                <tr>
                  <td><img src="{{asset('img/'.$data->cover . '')}}" width="100px" height="100px"></td>
                  <td>{{ $data->judul }}</td>
                  <td>{!!str_limit($data->isi_berita,100)!!}</td>
                  <td>{{ $data->kategori->name }}</td>
                  <td>{{ $data->view }}</td>
                  <td>
                    <a class="btn btn-xs btn-primary" href="{{ route('berita.edit', $data->id) }}"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-xs btn-info" href="{{ route('berita.show', $data->id) }}"><i class="fa fa-list"></i></a>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['berita.destroy', $data->id], 'style'=>'display:inline']) !!}
                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                    {!! Form::close() !!}
                  </td>
                </tr>
                @endforeach
                </table>
              {!! $berita->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

