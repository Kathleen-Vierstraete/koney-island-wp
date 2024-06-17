// console.log("test slider enqueued");

const slider = {
    //defining the current image to 0
    currentImageNumber: 0,
    //creating an empty array
    imgElemsList: [],
    // init
    init: function() {
    //calling the method
    slider.createImagesElements();
    //selecting the buttons
    const btnArray = document.querySelectorAll(".slider__btn");
    //event listeners on the proper buttons (previous or next image)
    btnArray[0].addEventListener('click', slider.handlePreviousImg);
    btnArray[1].addEventListener('click', slider.handleNextImg);

    },
  
  //methode to show the previous image
  handlePreviousImg: function() {
    //defining the current image
    const currentImg = slider.imgElemsList[slider.currentImageNumber];
    //removing the class 
    currentImg.classList.remove('slider__img--current');
    //on soustrait 1 à currentImageNumber pour passer à l'image précédente
    //minus one to get to the previous image
    slider.currentImageNumber--;
    //what to do when it is below 0?
    if (slider.currentImageNumber < 0) {
      //getting back to the last image in the list
      slider.currentImageNumber = slider.imgElemsList.length-1;
    }

    //defining the current image
    const newCurrentImg = slider.imgElemsList[slider.currentImageNumber];
    //adding the class to display the image
    newCurrentImg.classList.add('slider__img--current');
  },

  //roughly same method for the next button handler
  handleNextImg: function() {

    const currentImg = slider.imgElemsList[slider.currentImageNumber];
    currentImg.classList.remove('slider__img--current');
    //adding one to current image to get to the next image
    slider.currentImageNumber++;
    //what to do when we run out of images
    if (slider.currentImageNumber > slider.imgElemsList.length-1) {
      //getting back to the first image
      slider.currentImageNumber = 0;
    }
    
    //adding the proper class to display the image
    const newCurrentImg = slider.imgElemsList[slider.currentImageNumber];
    newCurrentImg.classList.add('slider__img--current');
  },

  //methode to add the images into the slider (since in the html part, it is no longer there)
  createImagesElements: function() {
    //selecting the element
    const parentSliderElem = document.querySelector('.slider');
    //defining an array of images
    const urlImages = [
      "4112.jpg",
      "2151445703.jpg",
      "devil-wheel-attraction-port.jpg",
    ];
    //looping on the array
    for (const url of urlImages) {
        // creating an img tag
        const imgElem = document.createElement('img');
        //adding the source of the image
        imgElem.src = './slider/' + url;
        //adding the proper class to the img
        imgElem.classList.add('slider__img');
        //adding img in parent in DOM
        parentSliderElem.appendChild(imgElem);
        //pushing the array
        slider.imgElemsList.push(imgElem);
      }
      //selecting the current image
      const currentImg = document.querySelector(".slider__img");
      //adding the proper class to the element
      currentImg.classList.add("slider__img--current");
    }
  }
//init
slider.init();