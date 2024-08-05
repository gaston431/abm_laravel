@extends('layouts.app')

@section('css')
  <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')

        <div class="row mb-3 mt-3" >
          <div class="col-lg-12 margin-tb">
              
              <div class="pull-left">
                  <a class="btn btn-info" href="{{ route('users.create') }}"> Agregar un Usuario</a>
              </div>
          </div>
        </div>

        @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
        @endif

        <table id="users" class="table table-bordered">
          <thead>
            <th>User</th>
            <th>Status</th>
            <th>Rol</th>
            <th>Active</th>
            <th>Created_at</th>
            <th>Actions</th>
          </thead>
          <tbody>
            
          </tbody>
          
        </table>
        
    

    @section('js')
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

      <script>
      
        $(document).ready(function() {
            $('#users').DataTable({
              "ajax": "{{route('users.getUsers')}}",
              "columns": [
                {data: 'user'},
                {data: 'status'},
                {data: 'rol'},
                {data: 'active'},
                {data: 'created_at'},
                {render: function ( data, type, row, meta ) {
                  
                  return '<form action={{ url("/users") }}/'+row.id+' method="POST">' 
                         
                        +'<a class="btn btn-primary" href={{ url("/users") }}/'+row.id+'/edit >Edit</a>'  
                        
                        +'@csrf'
                        +'@method("DELETE")'   
                        +'<button type="submit" class="btn btn-danger" onclick="return confirm('+"'Esta seguro?'"+')">Delete</button>'
                      +'</form>';
                }}
              ]
            });
        } );

      </script>

    @endsection

    
@endsection
