let nextDom = document.getElementById('next');
let prevtDom = document.getElementById('prev');
let carouselDom = document.querySelector('.carousel2');
let listItemDom = document.querySelector('.carousel2 .list');
let thumbnailDom = document.querySelector('.carousel2 .thumbnail');

nextDom.onclick = function(){
    showSlider('next');
}
prevtDom.onclick = function(){
    showSlider('prev');
}
let timeRunning = 3000;
let timeAutoNext = 7000;
let runTimeOut;
let runAutoRun = setTimeout(()=>{
    nextDom.click();
}, timeAutoNext);
function showSlider(type){
    let itemSlider = document.querySelectorAll('.carousel2 .list .item');
    let itemThumbnail = document.querySelectorAll('.carousel2 .thumbnail .item');

    if(type == 'next'){
        listItemDom.appendChild(itemSlider[0]);
        thumbnailDom.appendChild(itemThumbnail[0]);
        carouselDom.classList.add('next');
    }else{
        let positionLastItem = itemSlider.length - 1;
        listItemDom.prepend(itemSlider[positionLastItem]);
        thumbnailDom.prepend(itemThumbnail[positionLastItem]);
        carouselDom.classList.add('prev');
    }

    clearTimeout(runTimeOut);
    runTimeOut = setTimeout (() =>{
        carouselDom.classList.remove('next');
        carouselDom.classList.remove('prev');
    }, timeRunning);

    clearTimeout(runAutoRun);
    runAutoRun = setTimeout(()=>{
        nextDom.click();
    }, timeAutoNext);
}

// Esperar a que el DOM esté cargado
document.addEventListener("DOMContentLoaded", function() {
    // Configuración de botones y sus destinos
    const botones = [
        { id: "startTest", url: "cuestionario.php" },
        { id: "btnTest", url: "cuestionario.php" },
        { id: "btnTest2", url: "cuestionario.php" },
        { id: "btnTest3", url: "cuestionario.php" }
    ];

    // Agregar eventos a cada botón
    botones.forEach(boton => {
        const btnElement = document.getElementById(boton.id);

        if (btnElement) { // Verificar que el botón exista
            btnElement.addEventListener("click", function() {
                const confirmacion = confirm(`¿Estás seguro de que deseas ir a ${boton.url}?`);
                if (confirmacion) {
                    window.location.href = boton.url;
                } else {
                    alert("Has cancelado la acción.");
                }
            });
        } else {
            console.warn(`El botón con ID '${boton.id}' no se encontró.`);
        }
    });
});
