let drop_btn = document.getElementById("drop-btn")
let drop_down = document.querySelector(".drop-down")
let close_btn = document.getElementById("close-btn")

drop_btn.addEventListener("click", () => {
  drop_down.style.hidden = "false"
  drop_down.classList.toggle("show");
  drop_btn.style.display = "none"
  close_btn.style.display = "block"
})

close_btn.addEventListener("click", () => {
  drop_btn.style.display = "block"
  close_btn.style.display = "none"
})

window.addEventListener("click", function (event) {
  if (!event.target.matches("#drop-btn")) {
    if (drop_down.classList.contains("show")) {
      drop_down.classList.remove("show");
    }
  }
})


// Sign-In Button Redirect to login
let sign_in_btn = document.getElementById('sign-in-btn');
sign_in_btn.addEventListener('click', () => {
  window.location.href = 'Before-Login/Login_&_Register/login.php';
})


// Explore-more Button Redirect to Dashboard
let exp_btn = document.getElementById('exp-btn');
exp_btn.addEventListener('click', () => {
  window.location.href = 'After-Login/Code/code-index.php';
})


// Make nav elements active on scroll
document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".nav-link");

  function setActiveLink() {
    let index = sections.length;

    while (--index && window.scrollY + 50 < sections[index].offsetTop) { }

    navLinks.forEach((link) => link.classList.remove("activeSection"));
    navLinks[index].classList.add("activeSection");
  }

  window.addEventListener("scroll", setActiveLink);
});


// Redirect from Cards to Code Section
let learn_btn = document.querySelectorAll('.card-container button')

learn_btn.forEach((btn) => {
  btn.addEventListener('click', () => {
    window.location.href = 'After-Login/Code/code-index.php';
  })
})






// Function computer device
function desktop() {

  let cont = document.getElementById('navbar');
  cont.firstElementChild.classList.add('activeSection')

  let cards = document.querySelectorAll(".cards")

  // Function for rolling cards in Computer device
  window.onload = () => {
    let value = 10
    let count = 0
    let interval = setInterval(() => {
      if (count == 5) {
        cards.forEach((e) => {
          e.style.transform = `translateX(40vw)`
          // e.style.transition = "transform 0.5s ease"
          count = 0
          value = 10
        })
      }
      else {
        cards.forEach((e) => {
          e.style.transform = `translateX(${value}vw)`
          // e.style.transition = "transform 0.3s ease"
        })
        value = value - 30
        count += 1
      }
    }, 5000)
  }


  // Function to scroll to section
  let navSection = document.querySelectorAll(".nav-main a")
  navSection.forEach((a) => {
    a.addEventListener("click", (e) => {

      // To make a section active
      if (e.target.tagName === 'A') {
        const selectedSection = e.target.id;

        // const activeSection = document.querySelector('.activeSection');
        // if (activeSection) {
        //   activeSection.classList.remove('activeSection');
        // }
        // document.getElementById(selectedSection).classList.add('activeSection');
      }

      // To Scroll to the section
      let targetId = this.getAttribute('href')  // Getting the target ID
      let targetSection = document.getElementById(targetId) // Getting target section
      if (targetSection) {
        targetSection.scrollIntoView({ behavior: "smooth", block: "start" })
      }

    })
  })

}


// Function for rolling cards in mobile device
function mobile() {
  let cards = document.querySelectorAll(".cards")


  // Scrolling cards in mobile
  window.onload = () => {
    let value = -45
    let count = 0
    let interval = setInterval(() => {
      if (count == 5) {
        cards.forEach((e) => {
          e.style.transform = `translateX(25vw)`
          // e.style.transition = "transform 0.5s ease"
          count = 0
          value = -45
        })
      }
      else {
        cards.forEach((e) => {
          e.style.transform = `translateX(${value}vw)`
          // e.style.transition = "transform 0.3s ease"
        })
        value = value - 65
        count += 1
      }
    }, 5000)
  }


  // Function to scroll to section
  let navSection = document.querySelectorAll(".nav-main a")
  navSection.forEach((a) => {
    a.addEventListener("click", (e) => {
      drop_btn.style.display = "block"
      close_btn.style.display = "none"
      let targetId = this.getAttribute('href')  // Getting the target ID
      let targetSection = document.getElementById(targetId) // Getting target section

      if (targetSection) {
        targetSection.scrollIntoView({ behavior: "smooth", block: "start" })
      }

    })
  })


  // Hiding the close button
  window.addEventListener("click", function (event) {
    if (!event.target.matches("#drop-btn")) {
      close_btn.style.display = "none"
      drop_btn.style.display = "block"
    }
  })


}

if (window.innerWidth > 600) {
  desktop()
}
else {
  mobile()
}



// Code for testing
