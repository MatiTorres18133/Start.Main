window.addEventListener("scroll", function(){

    let animacion =this.document.getElementById("animado");
    let posticionObj1= animacion.getBoundingClientRect().top;
    console.log(posticionObj1);
    let tamañoDePantalla= window.innerHeight;


    if(posticionObj1 < tamañoDePantalla){
        animacion.style.animation="mover 1s ease-out"
    }

})





window.addEventListener("scroll", function(){

    let animacion =this.document.getElementById("animado2");
    let posticionObj1= animacion.getBoundingClientRect().top;
    console.log(posticionObj1);
    let tamañoDePantalla= window.innerHeight;


    if(posticionObj1 < tamañoDePantalla){
        animacion.style.animation="mover2 1s ease-out"
    }

})


window.addEventListener("scroll", function(){

    let animacion =this.document.getElementById("animado3");
    let posticionObj1= animacion.getBoundingClientRect().top;
    console.log(posticionObj1);
    let tamañoDePantalla= window.innerHeight;


    if(posticionObj1 < tamañoDePantalla){
        animacion.style.animation="mover3 1s ease-out"
    }

})


window.addEventListener("scroll", function(){

    let animacion =this.document.getElementById("animado4");
    let posticionObj1= animacion.getBoundingClientRect().top;
    console.log(posticionObj1);
    let tamañoDePantalla= window.innerHeight;


    if(posticionObj1 < tamañoDePantalla){
        animacion.style.animation="mover4 1s ease-out"
    }

})



window.addEventListener("scroll", function(){

    let animacion =this.document.getElementById("About");
    let posticionObj1= animacion.getBoundingClientRect().top;
    console.log(posticionObj1);
    let tamañoDePantalla= window.innerHeight;


    if(posticionObj1 < tamañoDePantalla){
        animacion.style.animation="moverABOUT  1s ease-out"
    }

})



window.addEventListener("scroll", function(){

    let animacion =this.document.getElementById("About2");
    let posticionObj1= animacion.getBoundingClientRect().top;
    console.log(posticionObj1);
    let tamañoDePantalla= window.innerHeight;


    if(posticionObj1 < tamañoDePantalla){
        animacion.style.animation="moverIMG  1s ease-out"
    }

})








