@extends('layouts.app')

@section('content')

<h1>Agregar un usuario</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
  
    <div class="row">
        <div class="mb-3">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="user" class="form-control" placeholder="Enter name" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <strong>Status:</strong>
                <input class="form-control" type="number" name="status" required>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <strong>Rol:</strong>
                <select  name="rol">
                    <option value="admin"> admin </option>
                    <option value="user"> user </option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <strong>Active:</strong>
                <input type="checkbox" name="active">
            </div>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary"> Guardar </button>
            <a href="/users" class="btn btn-secondary"> Cancelar </a>
        </div>
    </div>
   
</form>

@endsection