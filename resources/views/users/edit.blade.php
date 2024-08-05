@extends('layouts.app')

@section('content') 

<h1>Editar un usuario</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
            <div class="mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="user" value="{{ $user->user }}" class="form-control" placeholder="Name" required>
                </div>
            </div>
            <div class="mb-3">
	            <div class="form-group">
	                <strong>Status:</strong>
	                <input class="form-control" type="number" name="status" value="{{ $user->status }}" required>
	            </div>
	        </div>
	        <div class="mb-3">
	            <div class="form-group">
	                <strong>Rol:</strong>
	                <select value="{{ $user->rol[0] }}" name="rol">
	                	@if($user->rol == 'admin')
	                    	<option selected value="admin"> admin </option>
	                    @else
	                    	<option value="admin"> admin </option>
	                    @endif
	                    @if($user->rol == 'user')
	                    	<option selected value="user"> user </option>
	                    @else
	                    	<option value="user"> user </option>
	                    @endif
	                   
	                </select>
	            </div>
	        </div>
	        <div class="mb-3">
	            <div class="form-group">
	                <strong>Active:</strong>
	                
	                	<input type="checkbox"  
	                	name="active" 
	                	value="1" {{ $user->active ? 'checked' : ''}} >
	              
	            </div>
	        </div>
	        <div class="mb-3">
	            <button type="submit" class="btn btn-primary"> Guardar </button>
	            <a href="/users" class="btn btn-secondary"> Cancelar </a>
	        </div>
	    </div>
   
</form>

@endsection

