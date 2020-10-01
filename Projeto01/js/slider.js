function slider(){
    var slideAtual = 0
    var delay = 3
    var slide = document.querySelectorAll("div.banner-single")
    var maxSlider = slide.length - 1
    setInterval(function(){
        addSlide()  
    }, delay * 1000)
    
      
    function addSlide(){
        if(slideAtual < maxSlider){
            slide[slideAtual + 1].classList.remove("sumido")
            slide[slideAtual].classList.add("sumido")
            slideAtual++
        } else {
            slide[0].classList.remove("sumido")
            slide[1].classList.add("sumido")
            slide[2].classList.add("sumido")
            slideAtual = 0
        }
    }
    
}
slider()