@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			
			<div class="panel panel-primary" >
				<div class="panel-heading" >
					<h2 class="panel-title">Kategori Berita</h2>
				</div>
				<div class="panel-body">
				<p><a class="btn btn-primary" href="{{route('kategoris.create')}}">Tambah</a></p>
					
                <table class="table table-bordered">
                <tr class="success">
                  <th>Nama Kategori</th>
                  <th width="200px">Actions</th>
                </tr>

                @foreach ($kategoris as $data)
                <tr>
                  <td>{{ $data->name }}</td>
                  <td>
                    <a class="btn btn-xs btn-primary" href="{{ route('kategoris.edit', $data->id) }}">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route'=>['kategoris.destroy', $data->id], 'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
                    {!! Form::close() !!}
                  </td>
                </tr>
                @endforeach
              </table>
              {!! $kategoris->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

