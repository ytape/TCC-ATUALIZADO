// Função para alternar entre as abas de login e cadastro
function showTab(tab) {
  // Seleciona os elementos dos formulários e abas
  const loginForm = document.getElementById('loginForm');
  const registerForm = document.getElementById('registerForm');
  const loginTab = document.getElementById('loginTab');
  const registerTab = document.getElementById('registerTab');

  // Se a aba selecionada for 'login', exibe o formulário de login e oculta o de cadastro
  if (tab === 'login') {
    loginForm.classList.remove('hidden');
    registerForm.classList.add('hidden');
    loginTab.classList.add('active');
    registerTab.classList.remove('active');
  } else {
    // Se for 'register', exibe o formulário de cadastro e oculta o de login
    registerForm.classList.remove('hidden');
    loginForm.classList.add('hidden');
    registerTab.classList.add('active');
    loginTab.classList.remove('active');
  }
}