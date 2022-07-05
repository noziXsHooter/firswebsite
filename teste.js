

if(localStorage.nome){

    document.getElementById('nome').value = localStorage.nome;
}

document.getElementById("submit").addEventListener("click", function(event){
    event.preventDefault()

    var nome = document.getElementById('nome').value;

    var user ={
        nome: nome,
    };

    var json = JSON.stringify(user);
    localStorage.setItem('nome', json);

});