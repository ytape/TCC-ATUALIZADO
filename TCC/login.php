<?php
session_start();

// Carrega os usuários cadastrados
$usuarios = [];
if (file_exists('usuarios.json')) {
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);
}

// Recebe dados do formulário
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

$login_sucesso = false;
$nome_usuario = '';

foreach ($usuarios as $u) {
    if ($u['usuario'] === $usuario && $u['senha'] === $senha) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nome'] = $u['nome'];
        $login_sucesso = true;
        $nome_usuario = $u['nome'];
        break;
    }
}

if ($login_sucesso) {
    echo "<script>alert('Olá, $nome_usuario!'); window.location.href='index.html';</script>";
    exit;
} else {
    echo "<script>alert('Usuário ou senha inválidos!'); window.location.href='conta.html';</script>";
}
?>