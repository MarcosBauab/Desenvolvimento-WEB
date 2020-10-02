function slider(){
    var slideAtual = 0
    var delay = 3
    var slide = document.querySelectorAll("div.banner-single")
    var maxSlider = slide.length - 1



    let conteudo = document.querySelector(".bullets")
    for(var i = 0; i < maxSlider +1; i++){
        let span = document.createElement("span")
        conteudo.appendChild(span)
    }
    var spans = document.querySelectorAll(".bullets span")
    spans[slideAtual].classList.add("bolinha-ativa")


    setInterval(function(){
        addSlide()
        spans[slideAtual].classList.add("bolinha-ativa")
    }, delay * 1000)
    
    
    
    function addSlide(){
        if(slideAtual < maxSlider){
            slide[slideAtual + 1].classList.remove("sumido")
            slide[slideAtual].classList.add("sumido")
            spans.forEach(function(entry){
                entry.classList.remove("bolinha-ativa")
            })
            slideAtual++
            
        } else {
            slide[0].classList.remove("sumido")
            slide[1].classList.add("sumido")
            slide[2].classList.add("sumido")
            spans.forEach(function(entry){
                entry.classList.remove("bolinha-ativa")
            })
            slideAtual = 0
        }
    }
    spans.forEach(function(entry){
        entry.addEventListener('click', function(){
            
            console.log(this)
            spans.forEach(function(entry){
                entry.classList.remove("bolinha-ativa")
            })
            this.classList.add("bolinha-ativa")
        })
    })
}
slider()