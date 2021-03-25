<form action="{{ route('login_post') }}" METHOD="POST">
    @csrf
    Email: <input type="text" name="email">
    Senha: <input type="text" name="password">

    <button type="submit">Entrar</button>
</form>
