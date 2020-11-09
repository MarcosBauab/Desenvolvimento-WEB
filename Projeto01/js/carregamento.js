var forms = document.getElementsByTagName("form")
forms[0].addEventListener("submit", function(er){
    er.preventDefault()
    var formData = new FormData(this)
    var init = {
        method: 'POST',
        body: formData
    } 
    fetch("http://localhost/Dev%20Web/Projeto01/ajax/formularios.php", init)
        .then((body) => body.json())
        .then((data) => {
            console.log(data)
        })
        .catch((error) => console.error('Erro:', error.message || error))

    return false
})

