var botaoMenu = document.querySelector(".botao-menu")
var botaoMenuUl = document.querySelector("nav.mobile ul")

botaoMenu.addEventListener('click', function(){
    if(botaoMenuUl.style.display == "block"){
        botaoMenuUl.style.display = "none"
    } else {
        botaoMenuUl.style.display = "block"
    }
    botaoMenu.classList.toggle("giro")
})
var target = document.querySelector("target")
if(target != null){
    //O elemento existe então:
    var elemento = '#'+target.getAttribute('target')
    
}
