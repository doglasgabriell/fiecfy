const LoginForm = () => {
  
    function handleSubmit(e) {
        e.preventDefault(); // Bloqueia o reload da página
        console.log('Enviando dados do formulário');
    }

    return (
        <form onSubmit={handleSubmit}>
            <input type="text" placeholder="E-mail"/>
            <input type="text" placeholder="Senha"/>
            <button type="button">Entrar</button>
        </form>
  )
}

export default LoginForm
