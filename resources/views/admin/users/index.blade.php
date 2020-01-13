@extends('admin.master')

@section('title')
  Usuarios
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
  <a href="{{ url('/admin/users') }}"><i class="fas fa-user-friends"></i> Usuarios</a>
</li>
@endsection

@section('content')
    <div class="container-fluid">
    <div class="panel shadow">
      <div class="header">
        <h2 class="title"><i class="fas fa-user-friends"></i> Usuarios</h2>
      </div>
      <div class="inside">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Email</th>
              <th>Modificar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <a href="{{ url('/admin/users/'.$user->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar">Editar</a>
                  <a href="{{ url('/admin/users/'.$user->id.'/delete') }}" data-toggle="tooltip" data-placement="top" title="Eliminar">Eliminar</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
