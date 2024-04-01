<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="https://kit.fontawesome.com/e437aa63eb.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>cadastre-se</title>
   
</head>

<body class="bg-blue-100 text-gray-600">
    <div class="container mx-auto p-4 lg:w-1/2">
        <h1 class="text-4xl font-bold mb-8">Formul&aacuterio de cadastro</h1>
        <button onclick="toggleDarkMode()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ativar/Desativar Modo Escuro</button>
        <form action="Script_do_Formulario" method="post">
            <fieldset class="bg-white rounded-lg shadow-md p-4 border-solid border-2 border-gray-100 mb-2">
                <legend class="text-xl font-bold mb-4 text-gray-600">Dados Pessoais</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 font-bold">
                    <div>
                        <label for="nome" class="block mb-2 ">Nome:</label>
                        <input required type="text" name="nome" placeholder="Nome" class="w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                    <div>
                        <label for="sobrenome" class="block mb-2">Sobrenome:</label>
                        <input required type="text" name="sobrenome" placeholder="Sobrenome" class="w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                    <div>
                        <label for="data" class="block mb-2">Nascimento:</label>
                        <input required type="date" class="date w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                    <div>
                        <label for="cpf" class="block mb-2">CPF:</label>
                        <input class="cpf w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100" type="text" name="cpf" inputmode="numeric" minlength="11" maxlength="11" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required autocomplete="off">
                    </div>
                </div>
            </fieldset>
            <fieldset class="bg-white rounded-lg shadow-md p-4 border-solid border-2 border-gray-100 mb-4 text-gray-600">
                <legend class="text-xl font-semibold mb-4">Dados de Endereço</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 font-bold">
                    <div>
                        <label for="rua" class="block mb-2">Rua:</label>
                        <input type="text"required  name="rua" placeholder="rua"placeholder="rua" class="w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                     </div>
                    <div>
                        <label for="numero" class="block mb-2">Número:</label>
                        <input required  type="text" name="numero" size="4" placeholder="n" class="w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                    <div>
                        <label for="bairro" class="block mb-2">Bairro:</label>
                        <input required  type="text" name="bairro" placeholder="bairro" class="date w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                    <div>
                        <label class="block mb-2"for="estado">Estado:</label>
                       
                        
                        <select name="estado" placeholder="estado"class="bg-blue-100 sel w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100"> 
                            <option value="" disabled selected hidden >Selecione um estado</option>
                            <option value="ac" >Acre</option> 
                            <option value="al">Alagoas</option> 
                            <option value="am">Amazonas</option> 
                            <option value="ap">Amap&aacute</option> 
                            <option value="ba">Bahia</option> 
                            <option value="ce">Cear&aacute</option> 
                            <option value="df">Distrito Federal</option> 
                            <option value="es">Esp&iacuterito Santo</option> 
                            <option value="go">Goi&aacutes</option> 
                            <option value="ma">Maranh&atildeo</option> 
                            <option value="mt">Mato Grosso</option> 
                            <option value="ms">Mato Grosso do Sul</option> 
                            <option value="mg">Minas Gerais</option> 
                            <option value="pa">Par&aacute</option> 
                            <option value="pb">Para&iacuteba</option> 
                            <option value="pr">Paran&aacute</option> 
                            <option value="pe">Pernambuco</option> 
                            <option value="pi">Piau&iacute</option> 
                            <option value="rj">Rio de Janeiro</option> 
                            <option value="rn">Rio Grande do Norte</option> 
                            <option value="ro">Rond&ocircnia</option> 
                            <option value="rs">Rio Grande do Sul</option> 
                            <option value="rr">Roraima</option> 
                            <option value="sc">Santa Catarina</option> 
                            <option value="se">Sergipe</option> 
                            <option value="sp">S&atildeo Paulo</option> 
                            <option value="to">Tocantins</option> 
                         </select>
                    </div>
                    <div>
                        <label  class="block mb-2"for="cidade">Cidade:</label>
                        <input required id="cidade" type="text"  name="cidade"  placeholder="cidade" class=" w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                    <div>
                        <label  class="block mb-2"for="cep">CEP:</label>
                        <input required type="text"  name="cep" placeholder="00000-000" class="cep w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                </div>
            </fieldset>
            <fieldset class="bg-white rounded-lg shadow-md p-4  border-solid border-2 border-gray-100 mb-4 text-gray-600">
                <legend class="text-xl font-semibold mb-4">Dados de login</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 font-bold">
                    <div>
                        <label for="email" class="block mb-2">Email:</label>
                        <input required  type="text" name="email" placeholder="email" class="w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                    <div>
                        <label for="login" class="block mb-2">confirme e-mail:</label>
                        <input required type="text" name="login" placeholder="confirme email" class="w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                    <div>
                        <label  class="block mb-2"for="pass">Senha:</label>
                        <input required type="password" name="pass" id="senha" placeholder="senha" class=" w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                    <div>
                        <label  class="block mb-2" for="passconfirm">Confirme a senha:</label>
                        <input type="password" name="passconfirm" id="confsenha" placeholder="confirme senha" class=" w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100" type="text" name="cpf" inputmode="numeric" minlength="11" maxlength="11" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required autocomplete="off">
                    </div>
                    <td colspan="2"> <!-- Colspan define quantas células a linha deve abranger -->
                        <input type="checkbox" onclick="mostra()" onKeyUp="verifica()">
                        <b>Mostrar senha</b>
                    </td>
                </div>
            </fieldset>
            <fieldset class="bg-white rounded-lg shadow-md p-4  border-solid border-2 border-gray-100 mb-4 text-gray-600">
                <legend class="text-xl font-semibold mb-4">dados para recuperação de senha</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 font-bold">
                    <div>
                        <label  class="block mb-2" for="telefone">Telefone:</label>
                        <input required type="tel"  name="telefone" placeholder="(xx)xxxxxxxx" maxlength="11" class="phone w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                    <div>
                        <label  class="block mb-2" for="palavra">Email secundário:</label>
                        <input required type="text" name="pchave"  placeholder="email secundario" class="w-full px-4 py-2 rounded-md border-solid border-2 border-gray-100">
                    </div>
                   
                </div>
            </fieldset>
        </form>
    </div>

</body>

</html>

        
<br />

</div>
  
</div>
<div class="flex justify-center sm:m-6">
    <input type="submit" id="recsenha" onClick="voltapag()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer mb-2 lg:mb-0 lg:mr-2" value="Voltar">
    <input type="submit" value="Enviar" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded cursor-pointer mb-2 lg:mb-0 lg:ml-2">
</div>
  
  </form>
  
   </body>
<script>
   
    function mostra() {
            var temp = document.getElementById("senha");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
      $(document).ready(function(){
            $('.date1').mask('00/00/0000' , {reverse: true});
            $('.cep').mask('00000-000');
            $('.phone').mask('(00) 00000-0000');
            $('.cpf').mask('000.000.000-00');
            });
    
         function voltapag(){
                window.location="login.html";
        }
            // Valida e envia o formulário
            function validateAndSubmit() {
            // Validação do formulário
            if (validateForm()) {
                // Envio do formulário (exemplo com AJAX)
                $.ajax({
                    url: "Script_do_Formulario",
                    type: "POST",
                    data: $("#registrationForm").serialize(),
                    success: function(response) {
                        alert("Formulário enviado com sucesso!");
                    },
                    error: function(xhr, status, error) {
                        alert("Ocorreu um erro ao enviar o formulário.");
                    }
                });
            }
        }

        // Validação do formulário
        function validateForm() {
            var form = document.getElementById("registrationForm");
            var email = form.querySelector("input[name='email']").value;
            var login = form.querySelector("input[name='login']").value;
            var senha = form.querySelector("input[name='pass']").value;
            var confSenha = form.querySelector("input[name='passconfirm']").value;

            // Validação de e-mail
            if (!validateEmail(email)) {
                alert("Por favor, insira um e-mail válido.");
                return false;
            }

            // Confirmação de e-mail
            if (email !== login) {
                alert("Os campos de e-mail e confirmação de e-mail devem ser iguais.");
                return false;
            }

            // Validação de senha
            if (senha.length < 8) {
                alert("A senha deve ter pelo menos 8 caracteres.");
                return false;
            }

            // Confirmação de senha
            if (senha !== confSenha) {
                alert("Os campos de senha e confirmação de senha devem ser iguais.");
                return false;
            }

            // Se a validação passar, o formulário será enviado
            return true;
        }

        // Validação de e-mail
        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
   
        function toggleDarkMode() {
    const body = document.body;
    const inputs = document.querySelectorAll('input');
    const divs = document.querySelectorAll('div');
    const fild = document.querySelectorAll('fieldset');

    body.classList.toggle("bg-gray-900");
    body.classList.toggle("text-white");
    body.classList.toggle("bg-white");
    body.classList.toggle("text-gray-900");

    inputs.forEach(input => {
        input.classList.toggle("bg-blue-100");
        input.classList.toggle("text-black");
        input.classList.toggle("placeholder-black");

    });

    divs.forEach(div => {
        div.classList.toggle("bg-gray-900");
        div.classList.toggle("text-white");
        
    });
    fild.forEach(fieldset => {
        fieldset.classList.toggle("bg-gray-900");
        fieldset.classList.toggle("text-white");
        fieldset.classList.toggle("placeholder-gray-400");
    });
}

</script>

</body>
</html>
