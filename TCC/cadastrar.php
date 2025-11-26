<?php
session_start();
// Onde o usuário se cadastra
$nome = $_POST['nome'] ?? '';
$usuario = $_POST['usuario'] ?? '';
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// Carrega usuários existentes
$usuarios = [];
if (file_exists('usuarios.json')) {
    $usuarios = json_decode(file_get_contents('usuarios.json'), true);
}

// Verifica se o usuário já existe
foreach ($usuarios as $u) {
    if ($u['usuario'] === $usuario) {
        echo "<script>alert('Usuário já cadastrado!'); window.location.href='conta.html';</script>";
        exit;
    }
}

// Adiciona novo usuário
$usuarios[] = [
    'nome' => $nome,
    'usuario' => $usuario,
    'email' => $email,
    'senha' => $senha
];

// Salva no arquivo
file_put_contents('usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT));

// Salva nome na sessão e mostra mensagem
$_SESSION['usuario'] = $usuario;
$_SESSION['nome'] = $nome;
echo "<script>alert('Olá, $nome!'); window.location.href='index.html';</script>";
?>