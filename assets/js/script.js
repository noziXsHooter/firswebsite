

let registra = document.getElementById('registra');
let form= document.getElementById('form');


form.addEventListener('submit', (e) => {
    e.preventDefault();
});

registra.addEventListener('click', (e) => {
    let emailc = document.getElementById('emailc').value;
    let senhac = document.getElementById('senhac').value;
    let nomec = document.getElementById('nomec').value;
    let sobrenomec = document.getElementById('sobrenomec').value;

    emailc = emailc.value;
    localStorage.setItem('emailc', emailc);

    senhac = senhac.value;
    localStorage.setItem('senhac', senhac);

    nomec = nomec.value;
    localStorage.setItem('nomec', telefonec);

    sobrenomec= sobrenomec.value;
    localStorage.setItem('sobrenomec', sobrenomec);

});
 


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
    e.preventDefault();

    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var result = document.getElementById('result');

    var user = localStorage.getItem(email);
    var data = JSON.parse(user);
    console.log(data);

 }
/* 
function logar(e){
    let email = document.getElementById("email");
    let senha = document.getElementById("senha");


    if(email.value == "exemplo@exemplo.com" && senha.value == "Rbm12345"){
        localStorage.setItem(email.value, true);
        window.location.href = "formulario.html";

    }else{

        alert("Dados inválidos!");
    }

}
 

$("#cadastrar").on("click",function (e) {
    //VARIAVEIS

    let login = $("#login");
    let email = $("#email");
    let emailc = $("#emailc");
    let senha = $("#senha");
    let senhac = $("#senhac");
    let telefonec = $("#telefonec");
    let telefone = $("#telefone"); */


/*     //BORDA PRETA
    login.css("border", "1px solid black");
    email.css("border", "1px solid black");
    senha.css("border", "1px solid black");
    telefone.css("border", "1px solid black");
    emailc.css("border", "1px solid black");
    senhac.css("border", "1px solid black");
    telefonec.css("border", "1px solid black");
 */
/*     //SUMIR COM P
    $("p.erro-login").hide()
    $("p.erro-email").hide()
    $("p.erro-emailc").hide()
    $("p.erro-senha").hide()
    $("p.erro-senhac").hide()
    $("p.erro-telefone").hide()
    $("p.erro-telefonec").hide()

    // BORDA VERMELHA
    if (login.val() == "") {
        e.preventDefault();
        login.css("border", "1px solid red");
        $("p.erro-login").show()
    }
    if (email.val() == "") {
        e.preventDefault();
        email.css("border", "1px solid red");
        $("p.erro-sobrenome").show()
    }
    if (senha.val() == "") {
        e.preventDefault();
        email.css("border", "1px solid red");
        $("p.erro-senha").show()
    }
    if (telefone.val() == "") {
        e.preventDefault();
        email.css("border", "1px solid red");
        $("p.erro-telefone").show()
    }
    if (emailc.val() == "") {
        e.preventDefault();
        email.css("border", "1px solid red");
        $("p.erro-emailc").show()
    }
    if (senhac.val() == "") {
        e.preventDefault();
        email.css("border", "1px solid red");
        $("p.erro-senhac").show()
    }
    if (telefonec.val() == "") {
        e.preventDefault();
        telefonec.css("border", "1px solid red");
        $("p.erro-telefonec").show()
    }
})
 */


// let clique = document.getElementById('clique')
// clique.addEventListener("click", function(e){
//     //window.location.assign("aula2.html")
//     clique.classList.add("vermelho")
// },false)

/* 
 $("#btn-submit").on("click",function (e) {
    //VARIAVEIS


    let email = $("#email");
    let senha = $("#login");


 } */