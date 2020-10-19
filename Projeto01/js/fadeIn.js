window.onload = function(){
    var atual = -1
    var maximo = document.querySelectorAll(".box-especialidade").length - 1
    

    setInterval(function(){
        atual++
        if(atual > maximo){
            clearInterval()
            return false
        } 
        
        let box = document.querySelectorAll(".box-especialidade")
        box[atual].classList.remove("sumido")

    }, 1000)
}