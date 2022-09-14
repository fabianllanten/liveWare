<h1>Lista de Usuarios</h1>

<table>
    <thead>
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>CORREO</td>
            <td>ACIONES</td>
        </tr> 
    </thead>
    <tbody>
        @foreach ($usuario as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>