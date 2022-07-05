function alerta(){
    alert("Você me clicou!")
}

function alertaComTexto(texto = '', maisUm='tentei'){
    alert(texto+maisUm)
}

// let clique = document.getElementById('clique')
// clique.addEventListener("click", function(e){
//     //window.location.assign("aula2.html")
//     clique.classList.add("vermelho")
// },false)

$("#clique").click(function(){
    // $(this).addClass("vermelho");
    $(this).css("color", "red");
})

$("#btn-submit").on("click",function (e) {
    //VARIAVEIS

    let login = $("#login");
    let email = $("#email");
    let nome = $("#nome");


    //BORDA PRETA
    nome.css("border", "1px solid black");
    sobrenome.css("border", "1px solid black");
    email.css("border", "1px solid black");

    //SUMIR COM P
    $("p.erro-nome").hide()
    $("p.erro-sobrenome").hide()
    $("p.erro-email").hide()

    // BORDA VERMELHA
    if (nome.val() == "") {
        e.preventDefault();
        nome.css("border", "1px solid red");
        $("p.erro-nome").show()
    }
    if (sobrenome.val() == "") {
        e.preventDefault();
        sobrenome.css("border", "1px solid red");
        $("p.erro-sobrenome").show()
    }
    if (email.val() == "") {
        e.preventDefault();
        email.css("border", "1px solid red");
        $("p.erro-email").show()
    }
})

$("#sumir").on("click",function (e) {
    $("p").hide()
})


$("#aparecer").on("click",function (e) {
    $("p").show()
})