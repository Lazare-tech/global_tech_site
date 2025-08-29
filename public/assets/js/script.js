document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.counter');
  const speed = 200;

  const animateCounters = () => {
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const suffix = counter.getAttribute('data-suffix') || "";
        const count = +counter.innerText;
        const increment = Math.ceil(target / speed);

        if (count < target) {
          counter.innerText = count + increment;
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = target + suffix;
        }
      };
      updateCount();
    });
  };

  let triggered = false;
  window.addEventListener('scroll', () => {
    const section = document.querySelector('#chiffres-cles');
    const sectionTop = section.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (sectionTop < windowHeight && !triggered) {
      animateCounters();
      triggered = true;
    }
  });
});
// Faire apparaître le bouton quand on scrolle
let mybutton = document.getElementById("myBtn");

window.onscroll = function() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
};

function topFunction() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

//
function scrollToForm(id) {
  const form = document.getElementById(id);
  if(form) {
    form.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}
//
document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("toggleProjects");
  const extraProjects = document.querySelectorAll(".extra-project");
  let expanded = false;

  toggleBtn.addEventListener("click", function () {
    expanded = !expanded;

    extraProjects.forEach(project => {
      if (expanded) {
        project.classList.remove("d-none");   // on l’affiche
        project.classList.add("fade-in");     // préparation animation

        // petit délai pour déclencher le show
        setTimeout(() => {
          project.classList.add("show");
        }, 50);
      } else {
        project.classList.remove("show"); // fade-out
        
        // attendre la fin de la transition avant de cacher
        setTimeout(() => {
          project.classList.add("d-none");
          project.classList.remove("fade-in");
        }, 400);
      }
    });

    toggleBtn.textContent = expanded 
      ? "Voir moins de réalisations" 
      : "Voir tous nos réalisations";
  });
}); 