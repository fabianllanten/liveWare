<h1>lista de usuarios</h1>

<a href="{{route('usuario.create')}}">Nuevo usuario</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>

   @foreach ($usuarios as $user) 
   
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td></td>
        </tr>
    @endforeach    
    </tbody>

</table>