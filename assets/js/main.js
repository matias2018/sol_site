
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    console.log(el)
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 20
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */

  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
    this.classList.add('overflow-hidden')
    select('body').classList.toggle('overflow-hidden')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)


  ///////////////////////////////////////////////////
  ///  A11Y
  ///////////////////////////////////////////////////

  // Reading LocalStorage preferences
  const useDevicePreferences = localStorage.getItem('useDevicePreferences');
  const useHighContrast = localStorage.getItem('useHighContrast');
  const useAnimation = localStorage.getItem('useAnimation');
 

  // use device preferences
  on('click', '.useDevicePreferences', function(e) {
    localStorage.getItem('useDevicePreferences');
    if(!useDevicePreferences || useDevicePreferences == 'false'){
      localStorage.setItem('useDevicePreferences', 'true');
      select('body').classList.toggle('reducedMotion');
    } else {
      localStorage.setItem('useDevicePreferences', 'false');
      select('body').classList.toggle('reducedMotion');
    }
  })
 
  // use high contrast
  on('click', '.useHighContrast', function(e) {
    select('*').classList.toggle('highContrast');
    select('header').classList.toggle('highContrast');
    select('section').classList.toggle('highContrast');
    if(useHighContrast){
      localStorage.setItem('useHighContrast', 'false');
    } else {
      localStorage.setItem('useHighContrast', 'true');
    }
  })

  // use toggle animations
  on('click', '.useAnimation', function(e) {
    AOS.init({
      disable: true
    });
    // select('.hero-img').classList.toggle('zIndex-2');
    select('.hero-waves').classList.toggle('hidden-true');
    select('.animated').classList.toggle('paused');
    if(useAnimation){
      localStorage.setItem('useAnimation', 'true')
    } else {
      localStorage.setItem('useAnimation', 'false');
    }
  })
  // use toggle animations
  on('touchend', '.useAnimation', function(e) {
    // select('.hero-img').classList.toggle('zIndex-2');
    select('.hero-img').style.border = "3px solid #FF0000";
  })

  ///////////////////////////////////////////////////
  ///  End of A11Y
  ///////////////////////////////////////////////////

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
        let bodyToggle = select('body')
        bodyToggle.classList.toggle('overflow-hidden')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Initiate gallery lightbox 
   */
  const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 700,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
    resetForms();
  });

})()