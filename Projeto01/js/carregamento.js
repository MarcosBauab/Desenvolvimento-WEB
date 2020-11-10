var forms = document.getElementsByTagName("form")
forms[0].addEventListener("submit", function(er){
    er.preventDefault()
    var formData = new FormData(this)
    var init = {
        method: 'POST',
        body: formData
    } 
    function myFetch() {
        const loading = document.querySelector(".loading")
        loading.style.display = "flex"
        return fetch.apply(this, arguments);
    }
    
    myFetch("http://localhost/Dev%20Web/Projeto01/ajax/formularios.php", init)
        .then((body) => body.json())
        .then((data) => {
            console.log(data)
            if(data.sucesso == true){
                //Tudo certo
                console.log("enviado")
                document.querySelector(".loading").style.display = "none"
                document.querySelector(".feito").style.display = "flex"
                setTimeout(() => {
                    document.querySelector(".feito").style.display = "none"   
                }, 2000);
            } else {
                //Deu ruim
            }
        })
        .catch((error) => console.error('Erro:', error.message || error))


        /*
    fetch("http://localhost/Dev%20Web/Projeto01/ajax/formularios.php", init)
        .then((body) => body.json())
        .then((data) => {
            console.log(data)
            if(data.sucesso == true){
                //Tudo certo
            } else {
                //Deu ruim
            }
        })
        .catch((error) => console.error('Erro:', error.message || error))
*/
    return false
})

