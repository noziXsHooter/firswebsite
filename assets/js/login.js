















/* function valida(){
    let valid = 

} */

/*  function logar(){
    let email = document.getElementById("email");
    let senha = document.getElementById("senha");
    let validlogin = false;

    if(email.value == "nozixco@gmail.com" && senha.value == "12345678"){
        validlogin = true;

            if(validlogin == true){
                var listalogin = JSON.parse(localStorage.getItem('listalogin') || '[]');

                listalogin.push(
                {
                user: email.value,
                senha: senha.value
                }
                )
                localStorage.setItem('listalogin', JSON.stringify(listaUser));
            }else{

            }

       /*  window.location.href = "formulario.html"; 

    }else{
        
        alert("Dados inválidos!");
    }
 
} 

function registra(e){
    e.preventDefault();

    var user ={
        email: "exemplo@exemplo.com",
        senha: "senha",
    };

    var json = JSON.stringify(user);
    localStorage.setItem(senha, json);
}

 function login(e){
    event.preventDefault();

    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var result = document.getElementById('result');

    var user = localStorage.getItem(email);
    var data = JSON.parse(user);
    console.log(data);

    if(email == data.email && senha == data.senha){
        result.innerHTML = 'Logado';
    }else{
        result.innerHTML = 'Erro';
    }

} */