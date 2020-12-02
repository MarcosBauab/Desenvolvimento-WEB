var windowSize = window.innerWidth

var size = 'big'

const sidebar = document.querySelector("aside")
const content = document.querySelector("section.content")
const header = document.querySelector("header")
const hamburger = document.querySelector(".menu-btn")
if(windowSize <= 768){
    size = 'small'
    hamburger.classList.add("clicado")
}
hamburger.addEventListener("click", function(){
    hamburger.classList.toggle("clicado")
    if(hamburger.className == "menu-btn" && size == 'big'){
        sidebar.animate([
            // keyframes
            //{ width: '0', padding: '0' },
  
            { width: '20%', padding: '10px 0' }
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
            //{ width: '100%',
            //  left : '0%' },
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
            //{ width: '100%',
            //  left : '0%' },
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
    } else if(size == 'big') {
        sidebar.animate([
            // keyframes
           // { width: '20%' },
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
            //{ width: '80%',
             // left : '20%' },
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
           // { width: '80%',
            //  left : '20%' },
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
    if(hamburger.className == "menu-btn" && size == 'small'){
      sidebar.animate([
          // keyframes
          //{ width: '0', padding: '0' },

          { width: '50%', padding: '10px 0' }
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
          //{ width: '100%',
          //  left : '0%' },
          { width: '50%',
            left: '50%' }
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
          //{ width: '100%',
          //  left : '0%' },
          { width: '50%',
            left: '50%' }
        ], 
        { 
          // timing options
          duration: 1000,
          iterations: 1,
          easing: 'ease',
          fill: 'forwards'
        })
    } else if(size == 'small') {
        sidebar.animate([
            // keyframes
          // { width: '20%' },
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
            //{ width: '80%',
            // left : '20%' },
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
          // { width: '80%',
            //  left : '20%' },
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