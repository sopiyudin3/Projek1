@extends('layouts.user')
@extends('layouts.app')
@section('main')
 
 <ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <h1 style="color:#1E90FF;">Create User</h1>
	</li>
</ol>

{{ Form::open(array('route' => 'users.store')) }}
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
				{{ Form::text( 'email', null, array( 'class'=>'form-control', 'placeholder'=>'Email'))}}
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
				{{ Form::text( 'password', null, array( 'class'=>'form-control', 'placeholder'=>'Password'))}}
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
@stop

