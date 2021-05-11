const init = function() {

    // ciblage du lien
    let images = document.querySelectorAll('.image');
    console.log(images);
    for (const image of images){
    // on surveille le click sur le lien
    image.addEventListener('click', countClick);
    }
}
  
  const countClick = function(e) {    
    // en empeche le comportement du click sur lien  
    e.preventDefault();
    console.log('click');

    let currentImage = event.currentTarget;    

    if (currentImage.classList.contains("current")){
        currentImage.classList.remove("current");
    }else{
        currentImage.classList.add("current");
    }
    
    
    console.log(currentImage);
  
  }
  
  init();