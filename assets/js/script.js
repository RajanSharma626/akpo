$(document).ready(function () {
  $(".service-slick").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });
});

// Counter animation function
function animateCounters() {
  const counters = document.querySelectorAll(".counter");

  counters.forEach((counter) => {
    const target = parseInt(counter.getAttribute("data-target"));
    const increment = target / 100;
    let current = 0;

    const updateCounter = () => {
      if (current < target) {
        current += increment;
        if (current > target) current = target;

        // Add + or % suffix based on the target value
        let displayValue = Math.floor(current);
        if (target === 70 || target === 100 || target === 80) {
          counter.textContent = displayValue + "%";
        } else {
          counter.textContent = displayValue + "+";
        }

        requestAnimationFrame(updateCounter);
      }
    };

    updateCounter();
  });
}

// Intersection Observer for scroll-triggered animation
const observerOptions = {
  threshold: 0.5,
  rootMargin: "0px 0px -50px 0px",
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const counters = entry.target.querySelectorAll(".counter");
      counters.forEach((counter, index) => {
        setTimeout(() => {
          counter.classList.add("animate");
        }, index * 100);
      });

      // Start counter animation after a short delay
      setTimeout(() => {
        animateCounters();
      }, 300);

      observer.unobserve(entry.target);
    }
  });
}, observerOptions);

// Start observing when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
  const statsSection = document.querySelector(".stats-section");
  observer.observe(statsSection);
});

// Add hover effects
document.addEventListener("DOMContentLoaded", () => {
  const statItems = document.querySelectorAll(".stat-item");

  statItems.forEach((item) => {
    item.addEventListener("mouseenter", () => {
      item.style.transform = "translateY(-5px) scale(1.02)";
    });

    item.addEventListener("mouseleave", () => {
      item.style.transform = "translateY(0) scale(1)";
    });
  });
});

$(document).ready(function () {
  $(".testimonials-slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        },
      },
    ],
  });
});

$(document).ready(function () {
  $(".blog-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    dots: true,
    infinite: true,
    speed: 500,
    cssEase: "ease-in-out",
    pauseOnHover: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        },
      },
    ],
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper", {
    slidesPerView: 6,
    spaceBetween: 30,
    loop: true,
    speed: 2000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 6,
        spaceBetween: 30,
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 8,
        spaceBetween: 30,
      },
    },
  });

  // Pause on hover
  const swiperContainer = document.querySelector(".swiper");

  swiperContainer.addEventListener("mouseenter", function () {
    swiper.autoplay.stop();
  });

  swiperContainer.addEventListener("mouseleave", function () {
    swiper.autoplay.start();
  });
});

// Category filtering
const acculedgerCategoryBtns = document.querySelectorAll(
  ".acculedger-category-btn"
);

acculedgerCategoryBtns.forEach((btn) => {
  btn.addEventListener("click", function () {
    // Remove active class from all buttons
    acculedgerCategoryBtns.forEach((b) =>
      b.classList.remove("acculedger-active")
    );
    // Add active class to clicked button
    this.classList.add("acculedger-active");

    const category = this.getAttribute("data-category");

    acculedgerFaqItems.forEach((item) => {
      if (
        category === "all" ||
        item.getAttribute("data-category") === category
      ) {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });

    // Clear search when filtering by category
    acculedgerSearchInput.value = "";
    acculedgerNoResults.style.display = "none";

    // Remove any highlights
    acculedgerFaqItems.forEach((item) => acculedgerRemoveHighlight(item));
  });
});

// Highlight function
function acculedgerHighlightText(element, searchTerm) {
  const question = element.querySelector(".acculedger-faq-question");
  const answer = element.querySelector(".acculedger-faq-answer");

  [question, answer].forEach((el) => {
    const text = el.innerHTML;
    const regex = new RegExp(`(${searchTerm})`, "gi");
    el.innerHTML = text.replace(
      regex,
      '<span class="acculedger-highlight">$1</span>'
    );
  });
}

// Remove highlight function
function acculedgerRemoveHighlight(element) {
  const highlighted = element.querySelectorAll(".acculedger-highlight");
  highlighted.forEach((span) => {
    span.outerHTML = span.innerHTML;
  });
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});

function updateClocks() {
  // USA - New York (Eastern Time)
  document.getElementById("clock-usa").textContent =
    new Date().toLocaleTimeString("en-US", {
      timeZone: "America/New_York",
      hour: "2-digit",
      minute: "2-digit",
      hour12: false,
    });

  // UK - London
  document.getElementById("clock-uk").textContent =
    new Date().toLocaleTimeString("en-GB", {
      timeZone: "Europe/London",
      hour: "2-digit",
      minute: "2-digit",
      hour12: false,
    });

  // Canada - Toronto (Eastern Time)
  document.getElementById("clock-canada").textContent =
    new Date().toLocaleTimeString("en-CA", {
      timeZone: "America/Toronto",
      hour: "2-digit",
      minute: "2-digit",
      hour12: false,
    });

  // Australia - Sydney
  document.getElementById("clock-australia").textContent =
    new Date().toLocaleTimeString("en-AU", {
      timeZone: "Australia/Sydney",
      hour: "2-digit",
      minute: "2-digit",
      hour12: false,
    });
}
setInterval(updateClocks, 1000);
updateClocks();
