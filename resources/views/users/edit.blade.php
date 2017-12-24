@extends('layouts.user')
@extends('layouts.app')
@section('main')
 
 <ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <h1 style="color:#1E90FF;">Edit User</h1>
	</li>
</ol>
 
{{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) }}
     <div class="form-group">
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				{{ Form::label('name', 'Name:') }}
				{{ Form::text( 'name', null, array( 'class'=>'form-control', 'placeholder'=>'Nama'))}}
			</div>
        </div>  
			@if ($errors->has('name'))
				<span class="help-block">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
			@endif	
        <div class="form-group">
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				{{ Form::label('email', 'Email:') }}
				{{ Form::text( 'email', null, array( 'class'=>'form-control', 'placeholder'=>'Nama'))}}
			</div>
        </div>  
			@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
			@endif	
        <div class="form-group">
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				{{ Form::label('password', 'Password:') }}
				{{ Form::text( 'password', null, array( 'class'=>'form-control', 'placeholder'=>'Nama'))}}
			</div>
        </div>  
        <div class="form-group">
			@if ($errors->has('password'))
				<span class="help-block">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
			@endif
        </div>  
        <div class="form-group">
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </div>  
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop

