/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== HOME SWIPER ===============*/
let homeSwiper = new Swiper(".home-swiper", {
    spaceBetween: 30,
    loop: 'true',
    
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
})

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 50) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*=============== NEW SWIPER ===============*/
let newSwiper = new Swiper(".new-swiper", {
    centeredSlides: true,
    slidesPerView: "auto",
    loop: 'true',
    spaceBetween: 16,
});

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 58,
              sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*=============== SHOW SCROLL UP ===============*/ 
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 460 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 460) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    // reset: true
})

sr.reveal(`.home-swiper, .new-swiper, .newsletter__container`)
sr.reveal(`.category__data, .trick__content, .footer__content`,{interval: 100})
sr.reveal(`.about__data, .discount__img`,{origin: 'left'})
sr.reveal(`.about__img, .discount__data`,{origin: 'right'})


const cardsContainer = document.querySelector(".card-carousel");
const cardsController = document.querySelector(".card-carousel + .card-controller")

class DraggingEvent {
  constructor(target = undefined) {
    this.target = target;
  }
  
  event(callback) {
    let handler;
    
    this.target.addEventListener("mousedown", e => {
      e.preventDefault()
      
      handler = callback(e)
      
      window.addEventListener("mousemove", handler)
      
      document.addEventListener("mouseleave", clearDraggingEvent)
      
      window.addEventListener("mouseup", clearDraggingEvent)
      
      function clearDraggingEvent() {
        window.removeEventListener("mousemove", handler)
        window.removeEventListener("mouseup", clearDraggingEvent)
      
        document.removeEventListener("mouseleave", clearDraggingEvent)
        
        handler(null)
      }
    })
    
    this.target.addEventListener("touchstart", e => {
      handler = callback(e)
      
      window.addEventListener("touchmove", handler)
      
      window.addEventListener("touchend", clearDraggingEvent)
      
      document.body.addEventListener("mouseleave", clearDraggingEvent)
      
      function clearDraggingEvent() {
        window.removeEventListener("touchmove", handler)
        window.removeEventListener("touchend", clearDraggingEvent)
        
        handler(null)
      }
    })
  }
  
  // Get the distance that the user has dragged
  getDistance(callback) {
    function distanceInit(e1) {
      let startingX, startingY;
      
      if ("touches" in e1) {
        startingX = e1.touches[0].clientX
        startingY = e1.touches[0].clientY
      } else {
        startingX = e1.clientX
        startingY = e1.clientY
      }
      

      return function(e2) {
        if (e2 === null) {
          return callback(null)
        } else {
          
          if ("touches" in e2) {
            return callback({
              x: e2.touches[0].clientX - startingX,
              y: e2.touches[0].clientY - startingY
            })
          } else {
            return callback({
              x: e2.clientX - startingX,
              y: e2.clientY - startingY
            })
          }
        }
      }
    }
    
    this.event(distanceInit)
  }
}


class CardCarousel extends DraggingEvent {
  constructor(container, controller = undefined) {
    super(container)
    
    // DOM elements
    this.container = container
    this.controllerElement = controller
    this.cards = container.querySelectorAll(".card")
    
    // Carousel data
    this.centerIndex = (this.cards.length - 1) / 2;
    this.cardWidth = this.cards[0].offsetWidth / this.container.offsetWidth * 100
    this.xScale = {};
    
    // Resizing
    window.addEventListener("resize", this.updateCardWidth.bind(this))
    
    if (this.controllerElement) {
      this.controllerElement.addEventListener("keydown", this.controller.bind(this))      
    }

    
    // Initializers
    this.build()
    
    // Bind dragging event
    super.getDistance(this.moveCards.bind(this))
  }
  
  updateCardWidth() {
    this.cardWidth = this.cards[0].offsetWidth / this.container.offsetWidth * 100
    
    this.build()
  }
  
  build(fix = 0) {
    for (let i = 0; i < this.cards.length; i++) {
      const x = i - this.centerIndex;
      const scale = this.calcScale(x)
      const scale2 = this.calcScale2(x)
      const zIndex = -(Math.abs(i - this.centerIndex))
      
      const leftPos = this.calcPos(x, scale2)
     
      
      this.xScale[x] = this.cards[i]
      
      this.updateCards(this.cards[i], {
        x: x,
        scale: scale,
        leftPos: leftPos,
        zIndex: zIndex
      })
    }
  }
  
  
  controller(e) {
    const temp = {...this.xScale};
      
      if (e.keyCode === 39) {
        // Left arrow
        for (let x in this.xScale) {
          const newX = (parseInt(x) - 1 < -this.centerIndex) ? this.centerIndex : parseInt(x) - 1;

          temp[newX] = this.xScale[x]
        }
      }
      
      if (e.keyCode == 37) {
        // Right arrow
        for (let x in this.xScale) {
          const newX = (parseInt(x) + 1 > this.centerIndex) ? -this.centerIndex : parseInt(x) + 1;

          temp[newX] = this.xScale[x]
        }
      }
      
      this.xScale = temp;
      
      for (let x in temp) {
        const scale = this.calcScale(x),
              scale2 = this.calcScale2(x),
              leftPos = this.calcPos(x, scale2),
              zIndex = -Math.abs(x)

        this.updateCards(this.xScale[x], {
          x: x,
          scale: scale,
          leftPos: leftPos,
          zIndex: zIndex
        })
      }
  }
  
  calcPos(x, scale) {
    let formula;
    
    if (x < 0) {
      formula = (scale * 100 - this.cardWidth) / 2
      
      return formula

    } else if (x > 0) {
      formula = 100 - (scale * 100 + this.cardWidth) / 2
      
      return formula
    } else {
      formula = 100 - (scale * 100 + this.cardWidth) / 2
      
      return formula
    }
  }
  
  updateCards(card, data) {
    if (data.x || data.x == 0) {
      card.setAttribute("data-x", data.x)
    }
    
    if (data.scale || data.scale == 0) {
      card.style.transform = `scale(${data.scale})`

      if (data.scale == 0) {
        card.style.opacity = data.scale
      } else {
        card.style.opacity = 1;
      }
    }
   
    if (data.leftPos) {
      card.style.left = `${data.leftPos}%`        
    }
    
    if (data.zIndex || data.zIndex == 0) {
      if (data.zIndex == 0) {
        card.classList.add("highlight")
      } else {
        card.classList.remove("highlight")
      }
      
      card.style.zIndex = data.zIndex  
    }
  }
  
  calcScale2(x) {
    let formula;
   
    if (x <= 0) {
      formula = 1 - -1 / 5 * x
      
      return formula
    } else if (x > 0) {
      formula = 1 - 1 / 5 * x
      
      return formula
    }
  }
  
  calcScale(x) {
    const formula = 1 - 1 / 5 * Math.pow(x, 2)
    
    if (formula <= 0) {
      return 0 
    } else {
      return formula      
    }
  }
  
  checkOrdering(card, x, xDist) {    
    const original = parseInt(card.dataset.x)
    const rounded = Math.round(xDist)
    let newX = x
    
    if (x !== x + rounded) {
      if (x + rounded > original) {
        if (x + rounded > this.centerIndex) {
          
          newX = ((x + rounded - 1) - this.centerIndex) - rounded + -this.centerIndex
        }
      } else if (x + rounded < original) {
        if (x + rounded < -this.centerIndex) {
          
          newX = ((x + rounded + 1) + this.centerIndex) - rounded + this.centerIndex
        }
      }
      
      this.xScale[newX + rounded] = card;
    }
    
    const temp = -Math.abs(newX + rounded)
    
    this.updateCards(card, {zIndex: temp})

    return newX;
  }
  
  moveCards(data) {
    let xDist;
    
    if (data != null) {
      this.container.classList.remove("smooth-return")
      xDist = data.x / 250;
    } else {

      
      this.container.classList.add("smooth-return")
      xDist = 0;

      for (let x in this.xScale) {
        this.updateCards(this.xScale[x], {
          x: x,
          zIndex: Math.abs(Math.abs(x) - this.centerIndex)
        })
      }
    }

    for (let i = 0; i < this.cards.length; i++) {
      const x = this.checkOrdering(this.cards[i], parseInt(this.cards[i].dataset.x), xDist),
            scale = this.calcScale(x + xDist),
            scale2 = this.calcScale2(x + xDist),
            leftPos = this.calcPos(x + xDist, scale2)
      
      
      this.updateCards(this.cards[i], {
        scale: scale,
        leftPos: leftPos
      })
    }
  }
}

const carousel = new CardCarousel(cardsContainer)