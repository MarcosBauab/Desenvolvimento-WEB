var windowSize = window.innerWidth



const sidebar = document.querySelector("aside")
const content = document.querySelector("section.content")
const header = document.querySelector("header")
const hamburger = document.querySelector(".menu-btn")
if(windowSize <= 768){
    hamburger.classList.add("clicado")
}
hamburger.addEventListener("click", function(){
    hamburger.classList.toggle("clicado")
    if(hamburger.className == "menu-btn"){
        sidebar.animate([
            // keyframes
            { width: '0', padding: '0' },
            { width: '20%', padding: '10px' }
          ], 
          { 
            // timing options
            duration: 1000,
            iterations: 1,
            easing: 'ease',
            fill: 'forwards'
          })
        header.animate([
            // keyframes
            { width: '100%',
              left : '0%' },
            { width: '80%',
              left: '20%' }
          ], 
          { 
            // timing options
            duration: 1000,
            iterations: 1,
            easing: 'ease',
            fill: 'forwards'
          })
        content.animate([
            // keyframes
            { width: '100%',
              left : '0%' },
            { width: '80%',
              left: '20%' }
          ], 
          { 
            // timing options
            duration: 1000,
            iterations: 1,
            easing: 'ease',
            fill: 'forwards'
          })
    } else {
        sidebar.animate([
            // keyframes
            { width: '20%' },
            { width: '0',
              padding: '0' }
          ], 
          { 
            // timing options
            duration: 1000,
            iterations: 1,
            easing: 'ease',
            fill: 'forwards'
          })
        header.animate([
            // keyframes
            { width: '80%',
              left : '20%' },
            { width: '100%',
              left: '0%' }
          ], 
          { 
            // timing options
            duration: 1000,
            iterations: 1,
            easing: 'ease',
            fill: 'forwards'
          })
        content.animate([
            // keyframes
            { width: '80%',
              left : '20%' },
            { width: '100%',
              left: '0%' }
          ], 
          { 
            // timing options
            duration: 1000,
            iterations: 1,
            easing: 'ease',
            fill: 'forwards'
          })
    }
})