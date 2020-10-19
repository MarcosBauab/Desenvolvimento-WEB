function slider(){
    var slideAtual = 0
    var delay = 5
    var slide = document.querySelectorAll("div.banner-single")
    var maxSlider = slide.length - 1



    let conteudo = document.querySelector(".bullets")
    for(var i = 0; i < maxSlider +1; i++){
        let span = document.createElement("span")
        span.setAttribute("id", i)
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
            spans.forEach(function(entry){
                entry.classList.remove("bolinha-ativa")
            })
            slideAtual++
            slide.forEach(function(entry){
                entry.classList.add("sumido")
            })
            slide[slideAtual].classList.remove("sumido")
        } else {
            spans.forEach(function(entry){
                entry.classList.remove("bolinha-ativa")
            })
            slideAtual = 0
            slide.forEach(function(entry){
                entry.classList.add("sumido")
            })
            slide[slideAtual].classList.remove("sumido")
        }
    }
    spans.forEach(function(entry){
        entry.addEventListener('click', function(){
            
            spans.forEach(function(entry){
                entry.classList.remove("bolinha-ativa")
                
            })
            this.classList.add("bolinha-ativa")
            spans.forEach(function(entry){
                if(entry.classList.contains("bolinha-ativa")){
                    let id = entry.getAttribute("id")
                    slideAtual = id
                    slide.forEach(function(entry){
                        entry.classList.add("sumido")
                    })
                    slide[slideAtual].classList.remove("sumido")
                }
            })
        })
    })
}
slider()