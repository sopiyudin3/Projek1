@extends('layouts.user')
@extends('layouts.app')
@section('main')
 
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <h1 style="color:#1E90FF;">All Users</h1>
	</li>
</ol>

<div class="form-group">
	{{ link_to_route('users.create', 'Add new user')}}
</div>

<div class="panel panel-default">
	{{Form::open(['method'=>'GET', 'url'=>'cari', 'role'=>'search'])}}
        <div class="input-group custom-search-form">
			<input type="text" class="form-control" name="go" placeholder="Search name here">
			<span class="input-group-btn">
			<button class="btn btn-default" type="submit" ><i class="fa fa-search"></i>Cari</button>
			</span>
		</div>
	{{Form::close()}}
</div>

@if($users->count()>0)

        <div class="panel panel-default">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						 <th>Nama</th>
						 <th>Email</th>
						 <th>Alamat</th>
						 <th>Data Keluarga</th>
						 <th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
				
					@foreach ($users as $data_user)
					
					<tr>
						<td>{{ $data_user->name }}</td>
						<td>{{ $data_user->email }}</td>
						<td>Rumah: # {{ $data_user->alamat_rumah }} <br>Kantor: # {{ $data_user->alamat_kantor }} <br>Tpt. Lahir: # {{ $data_user->alamat_lahir }}</td>
						<td>Nama Ibu: # <br>Nama Ayah: # <br>Nama Anak: # </td>
						<td>{{ link_to_route('users.edit', 'Edit', array($data_user->id), array('class' => 'btn btn-info')) }}</td>
						<td>
							{{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $data_user->id))) }}
							{{ Form::submit('Delete', array('class' => 'btn btn-danger', 'onClick' => 'return confirm("Apakah anda yakin ingin menghapus data ini? \r\nPerintah ini tidak dapat di-undo.")')) }}
							{{ Form::close() }}
						</td>
					</tr>
					@endforeach
					
				</tbody>
			 </table>
		</div>
	{{ $users->links() }}
	@else
		There are no users
	@endif
@stop