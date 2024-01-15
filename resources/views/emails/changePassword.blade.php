<!DOCTYPE html>
<html>
<head>
    <title>Solicitação de Troca de Senha</title>
</head>
<body>
    <p>Olá, {{ $user->name }}</p>
    <p>Você solicitou a troca de senha. Para redefinir sua senha, clique no link abaixo:</p>
    <p>ATENÇÃO - Sua senha deve conter:
        <br>
        Ao menos uma letra maiúscula,
        <br>
        Mínimo de 10 digitos,
        <br>
        Ao menos um número.
    </p>
    <a href="{{ route('reset.password', ['id' => $user->id, 'token' => $user->token_pass]) }}">Redefinir Senha</a>
    <p>Se você não solicitou a troca de senha, ignore este e-mail.</p>
</body>
</html>