<form action="{{ route('register_post') }}" method="POST">
    @csrf
    Nome: <input type="text" name="name">
    Email: <input type="text" name="email">
    Senha: <input type="text" name="password">

    <button type="submit">Cadastrar</button>
</form>
