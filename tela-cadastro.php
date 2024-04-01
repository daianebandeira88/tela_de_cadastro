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
    <title>Document</title>
    <style>
     
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
  /* Estilos para campos preenchidos automaticamente */
  .autofill {
    background-color: #f0f0f0 !important; /* Cor de fundo desejada para campos preenchidos automaticamente */
    /* Outros estilos personalizados, se necessário */
}


        /* Estilos para o modo escuro */
        body.dark-mode {
            background-color: #333333; /* Cor de fundo para o modo escuro */
            color: #ffffff; /* Cor do texto para o modo escuro */
        }
        /* styles.css */

body {
   
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    color: #000000;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

button {
    background-color: #007bff;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
}
.text{
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px; 
}
.volta{
    background-color: #007bff; 
}
.envia{
    background-color: green;
}

.but{
    width: 300px; /* Defina a largura desejada */
    margin: 0 auto;
}
button:hover {
    background-color: #0056b3;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="tel"] {
   
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}
.data{
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc; 
}

.dark-mode-toggle {
    position: absolute;
    top: 20px;
    right: 20px;
}

.dark-mode-toggle:hover {
    background-color: #0056b3;
}

.dark-mode .container {
    background-color: #333333;
    color: #ffffff;
}

.dark-mode input[type="text"],
.dark-mode input[type="password"],
.dark-mode input[type="email"],
.dark-mode input[type="date"],
.dark-mode select[type="text"],.dark-mode input[type="tel"] {
    background-color: #555555;
    color: #ffffff;
    border-color: #999999;
}
.dark-mode option{
    background-color: #555555;
    color: #ffffff;
    border-color: #999999;
}

.dark-mode select.sel select {
    background-color: #555555;
    color: #ffffff;
}
.dark-mode select#estado select {
    background-color: #555555;
    color: #ffffff;
}

.icone{
    float: right;
}
/* Estilos para todos os fieldsets */
fieldset {
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
    padding: 20px;
    margin: 0 auto; /* Define as margens laterais automáticas */
    width: 50%;
    
}label {
    display: inline-block; /* Permite definir largura e espaçamento */
    width: 150px; /* Define a largura dos rótulos */
    margin-right: 10px; /* Adiciona margem à direita dos rótulos */
    
  }
  select{
    padding: 8px; /* Adiciona espaçamento interno */
            font-size: 16px; /* Tamanho da fonte */
            border: 1px solid #ccc; /* Adiciona uma borda */
            border-radius: 5px; /* Adiciona cantos arredondados */
            width: 200px; /* Largura do select */
            appearance: none; /* Remove os estilos padrão do sistema operacional */
            background-color: #fff; /* Cor de fundo */
            color: #333; /* Cor do texto */
        }
  h2{width: 300px; /* Defina a largura desejada */
    margin: 0 auto;

  }
        /* Estilo para as opções */
        
  /* Estilo para os campos de entrada */
  input[type="text"],
  input[type="date"],
  input[type="password"],
  input[type="tel"] {
    width: 200px; /* Defina a largura desejada para os inputs */
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc; 
}
select {
    padding: 10px; /* Adiciona espaçamento interno */
    font-size: 16px; /* Tamanho da fonte */
    border: 1px solid #ccc; /* Adiciona uma borda */
    border-radius: 5px; /* Adiciona cantos arredondados */
    width: calc(100% - 60px); /* Define a largura do select de acordo com a largura dos outros campos */
    appearance: none; /* Remove os estilos padrão do sistema operacional */
    background-color: #fff; /* Cor de fundo */
    color: #333; /* Cor do texto */
}
.dark-mode select {
    background-color: #555555; /* Cor de fundo para o modo escuro */
    color: #ffffff; /* Cor do texto para o modo escuro */
    border-color: #999999; /* Cor da borda para o modo escuro */
}






    </style>
</head>
<body>
    <i class="fa-solid fa-circle-half-stroke  icone">
   <button onclick="toggleDarkMode()">Ativar/Desativar Modo Escuro</button></i>

  
    <h2> Formul&aacuterio de cadastro</h2><br />
  
  <form action="Script_do_Formulario" method="post">
  
  
    <fieldset>
        <legend>Dados Pessoais</legend>
        <table cellspacing="10">
            <tr>
                <td>
                    <label for="nome">Nome:</label>
                    <input required type="text" name="nome" placeholder="Nome">
                </td>
                <td>
                    <label for="sobrenome">Sobrenome:</label>
                    <input required type="text" name="sobrenome" placeholder="Sobrenome">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="data">Nascimento:</label>
                    <input required type="date" class="date" name="data" placeholder="dd/mm/aaaa">
                </td>
                <td>
                    <label for="cpf">CPF:</label>
                    <input class="cpf" type="text" name="cpf" inputmode="numeric" minlength="11" maxlength="11" placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required autocomplete="off">
                </td>
            </tr>
        </table>
    </fieldset>
    
  
  <br />
  
  <fieldset>
    <legend>Dados de Endereço</legend>
    <table cellspacing="10">
   
     <tr>
         <td>
             <label for="rua">Rua:</label>
             <input type="text" name="rua" placeholder="rua">
         </td>
         <td>
             <label for="numero">Número:</label>
             <input type="text" name="numero" size="4" placeholder="n">
         </td>
     </tr>
     <tr>
         <td>
             <label for="bairro">Bairro:</label>
             <input type="text" name="bairro" placeholder="bairro">
         </td>
         <td>
             <label for="estado">Estado:</label>
             <select name="estado" class="sel" placeholder="estado"> 
                <option value="" disabled selected hidden >Selecione um estado</option>
                <option value="ac">Acre</option> 
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
         </td>
     </tr>
     <tr>
         <td>
             <label for="cidade">Cidade:</label>
             <input id="cidade" type="text"  name="cidade"  placeholder="cidade">
         </td>
         <td>
             <label for="cep">CEP:</label>
             <input type="text" class="cep" name="cep" placeholder="00000-000"> 
         </td>
     </tr>
    </table>
 </fieldset>
 
  <br />
  
  
  <fieldset>
   <legend>Dados de login</legend>
   <table cellspacing="10">
    <tr>
        <td>
            <label for="email">E-mail: </label>
            <input type="text" name="email" placeholder="email">
        </td>
        <td>
        <label for="login">confirme e-mail </label>
        <input required type="text" name="login" placeholder="confirme email">
        </td>
    </tr>
    <tr>
        <td>
            <label for="pass">Senha: </label>
            <input required type="password" name="pass" id="senha" placeholder="senha">
        </td>
        <td>
            <label for="passconfirm">Confirme a senha: </label>
            <input required type="password" name="passconfirm" id="confsenha" placeholder="confirme senha">
        </td>
    </tr>
    <tr>
        <td colspan="2"> <!-- Colspan define quantas células a linha deve abranger -->
            <input type="checkbox" onclick="mostra()" onKeyUp="verifica()">
            <b>Mostrar senha</b>
        </td>
    </tr>
    
    
       </table>
</fieldset>
<br />
<fieldset>
    <legend>dados para recuperação de senha</legend>
    <table cellspacing="10">
        <tr>
            <td>
                <label for="telefone">Telefone:</label>
            
                <input required type="tel" class="phone" name="telefone" placeholder="(xx)xxxxxxxx" maxlength="11">
            </td>
       
            <td>
                <label for="palavra">Email secundário:</label> 
                <input required type="text" name="pchave"  placeholder="email secundario">
            </td>
        </tr>
    </table>
</fieldset>


<br />
<div class="but"> 
  <input type="submit" id="recsenha" onClick="voltapag()" class="text volta" value="voltar">    
  <input type="submit" value="enviar" class="text envia">
  
</div>

  
  </form>
  
   </body>
<script>
    function toggleDarkMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
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
        function validateForm() {
        var form = document.getElementById("registrationForm");
        var email = form.querySelector("input[name='email']").value;
        var login = form.querySelector("input[name='login']").value;
        var senha = form.querySelector("input[name='pass']").value;
        var confSenha = form.querySelector("input[name='passconfirm']").value;

        // Validar e-mail
        if (!validateEmail(email)) {
            alert("Por favor, insira um e-mail válido.");
            return false;
        }

        // Confirmar e-mail
        if (email !== login) {
            alert("Os campos de e-mail e confirmação de e-mail devem ser iguais.");
            return false;
        }

        // Validar senha
        if (senha.length < 8) {
            alert("A senha deve ter pelo menos 8 caracteres.");
            return false;
        }

        // Confirmar senha
        if (senha !== confSenha) {
            alert("Os campos de senha e confirmação de senha devem ser iguais.");
            return false;
        }

        // Se a validação passar, o formulário será enviado
        return true;
    }

    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
    document.addEventListener('DOMContentLoaded', function() {
    var inputFields = document.querySelectorAll('input:-webkit-autofill');

    inputFields.forEach(function(field) {
        field.classList.add('autofill');
    });
});

</script>

</body>
</html>