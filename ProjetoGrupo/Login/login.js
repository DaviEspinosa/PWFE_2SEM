function mostrarCadastro() {
    document.getElementById("loginForm").style.display = "none"; //chamando o meu form do HTML
    
    document.getElementById("cadastroForm").style.display = "block";
}




//===================================================================
//=                      Validação EMAIL e SENHA                    =
//===================================================================

function validateForm() {
    var emailInput = document.getElementById("email");
    var passwordInput = document.getElementById("password");
    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");

    // Limpar mensagens de erro anteriores
    passwordError.textContent = "";
    emailError.textContent = "";


    //validando EMAIL
    if (emailInput.value === "") {
        emailError.textContent = "O campo é obrigatório"
        return;
    }
    else if (emailInput.value.indexOf("@gmail.com") === -1) {
        emailError.textContent = "Email incorreto,  EX: user@gmail.com"
        return;
    }

    //validando SENHA
    if (passwordInput.value === "") {
        passwordError.textContent = "Este campo é obrigatório"
        return;
    }
     else if (passwordInput.value.length < 8 || !/[a-zA-Z]/.test(passwordInput.value) || !/\d/.test(passwordInput.value)) {
    passwordError.textContent = "A senha deve ter pelo menos 8 caracteres, incluindo letras e números.";
    return;
    }

    // Enviar o formulário se tudo estiver correto
    document.getElementById("myForm").submit();
    
}

