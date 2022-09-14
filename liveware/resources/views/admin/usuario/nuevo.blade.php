<h1> Nuevo usuario</h1>

<form action="{{route('usuario.store')}}" method="POST">
    @csrf
    <label for="">Ingrese Nombre</label>
    <input type="text" name="name">
    <br>
    <label for="">Ingrese Correo</label>
    <input type="email" name="email">
    <br>
    <label for="">Ingrese Password</label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Guardar Usuario"> 

</form>