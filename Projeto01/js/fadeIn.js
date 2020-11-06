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
        box[atual].animate([
            // keyframes
            { opacity: '0' }, 
            { opacity: '100%' }
          ], { 
            // timing options
            duration: 1000,
            iterations: 1,
            easing: 'cubic-bezier(.59,.12,.35,1.3)',
            fill: 'forwards'
          })

    }, 1000)
}