
function toggleDropdown() {
const dropdown = document.getElementById('profile-dropdown');
if (dropdown.classList.contains('invisible')) {
dropdown.classList.remove('invisible', 'opacity-0');
dropdown.classList.add('opacity-100', 'visible');
} else {
dropdown.classList.remove('opacity-100', 'visible');
dropdown.classList.add('invisible', 'opacity-0');
}
}
document.addEventListener('click', function(event) {
const profileDiv = document.getElementById('profile-trigger');
const dropdown = document.getElementById('profile-dropdown');
if (!profileDiv.contains(event.target) && !dropdown.contains(event.target)) {
dropdown.classList.remove('opacity-100', 'visible');
dropdown.classList.add('invisible', 'opacity-0');
}
});

// function toggleDropdown() {
//   const dropdown = document.getElementById("profile-dropdown");
//   const trigger = document.getElementById("profile-trigger");

//   const isOpen = dropdown.classList.contains("opacity-100");

//   dropdown.classList.toggle("opacity-100");
//   dropdown.classList.toggle("visible");
//   dropdown.classList.toggle("opacity-0");
//   dropdown.classList.toggle("invisible");

//   trigger.setAttribute("aria-expanded", !isOpen);
// }

// // Close dropdown on ESC
// document.addEventListener("keydown", (e) => {
//   if (e.key === "Escape") {
//     const dropdown = document.getElementById("profile-dropdown");
//     const trigger = document.getElementById("profile-trigger");

//     dropdown.classList.remove("opacity-100", "visible");
//     dropdown.classList.add("opacity-0", "invisible");
//     trigger.setAttribute("aria-expanded", "false");
//   }
// });




    // counter js
    document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter-animation');
    
    const animateCounter = (counter) => {
        const target = parseFloat(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                // Check if target has decimal places
                const decimals = (target.toString().split('.')[1] || '').length;
                counter.textContent = current.toFixed(decimals);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        updateCounter();
    };
    
    // Intersection Observer for animating when element comes into view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => observer.observe(counter));
});
    


function openMenu() {
  const sidebar = document.getElementById("sidebar");
    const asidebar = document.querySelector("aside");
let hideLable=document.querySelectorAll(".hide-label");
let logoFull=document.querySelector('.logo-full')
let logoHalf=document.querySelector('.logo-half')

  if(window.innerWidth<1024){
    sidebar.classList.toggle("left-0");
    sidebar.classList.toggle("-left-full");
  }else{
    asidebar.classList.toggle("lg:!basis-[4%]");
    logoFull.classList.toggle("hidden")
        logoHalf.classList.toggle("!block")

        // logoFull.classList.toggle("hidden")

    hideLable.forEach(element => {
      element.classList.toggle("hidden");
    });
    // asidebar.classList.toggle("-left-full");
    
  }
}
    