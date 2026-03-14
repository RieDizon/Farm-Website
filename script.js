const navToggle = document.querySelector(".nav-toggle");
const nav = document.querySelector(".nav");

if (navToggle && nav) {
  navToggle.addEventListener("click", () => {
    const isOpen = nav.classList.toggle("open");
    navToggle.setAttribute("aria-expanded", String(isOpen));
  });
}

const heroImages = document.querySelectorAll(".hero-slider img");
let heroIndex = 0;

function rotateHero() {
  heroImages.forEach((img, index) => {
    img.style.opacity = index === heroIndex ? "1" : "0.2";
    img.style.transform = index === heroIndex ? "scale(1)" : "scale(0.96)";
  });
  heroIndex = (heroIndex + 1) % heroImages.length;
}

if (heroImages.length > 0) {
  heroImages.forEach((img) => {
    img.style.transition = "opacity 0.6s ease, transform 0.6s ease";
  });
  rotateHero();
  setInterval(rotateHero, 4500);
}

const searchInput = document.getElementById("product-search");
const filterButtons = document.querySelectorAll(".filter-btn");
const productCards = document.querySelectorAll(".product-card");

function filterProducts() {
  const query = searchInput ? searchInput.value.toLowerCase() : "";
  const activeButton = document.querySelector(".filter-btn.active");
  const activeFilter = activeButton ? activeButton.dataset.filter : "all";

  productCards.forEach((card) => {
    const name = card.dataset.name.toLowerCase();
    const category = card.dataset.category;
    const matchesQuery = name.includes(query);
    const matchesFilter = activeFilter === "all" || category === activeFilter;
    card.style.display = matchesQuery && matchesFilter ? "block" : "none";
  });
}

filterButtons.forEach((button) => {
  button.addEventListener("click", () => {
    filterButtons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");
    filterProducts();
  });
});

if (searchInput) {
  searchInput.addEventListener("input", filterProducts);
}

const orderModal = document.getElementById("order-modal");
const orderForm = document.getElementById("order-form");
const orderNote = document.getElementById("order-note");
const orderButtons = document.querySelectorAll(".order-btn");
const modalClose = document.querySelector(".modal-close");

function openModal(product) {
  if (!orderModal || !orderForm) return;
  orderForm.product.value = product;
  orderModal.classList.add("open");
  orderModal.setAttribute("aria-hidden", "false");
}

function closeModal() {
  if (!orderModal) return;
  orderModal.classList.remove("open");
  orderModal.setAttribute("aria-hidden", "true");
  if (orderNote) orderNote.textContent = "";
}

orderButtons.forEach((button) => {
  button.addEventListener("click", () => openModal(button.dataset.product));
});

if (modalClose) {
  modalClose.addEventListener("click", closeModal);
}

if (orderModal) {
  orderModal.addEventListener("click", (event) => {
    if (event.target === orderModal) {
      closeModal();
    }
  });
}

if (orderForm) {
  orderForm.addEventListener("submit", async (event) => {
    event.preventDefault();
    const formData = new FormData(orderForm);
    const response = await fetch("order.php", {
      method: "POST",
      body: formData,
    });
    const result = await response.json();
    if (orderNote) {
      orderNote.textContent = result.message;
    }
    if (result.success) {
      orderForm.reset();
    }
  });
}

const contactForm = document.getElementById("contact-form");
const contactNote = document.getElementById("contact-note");

if (contactForm) {
  contactForm.addEventListener("submit", async (event) => {
    event.preventDefault();
    const formData = new FormData(contactForm);
    const response = await fetch("contact.php", {
      method: "POST",
      body: formData,
    });
    const result = await response.json();
    if (contactNote) {
      contactNote.textContent = result.message;
    }
    if (result.success) {
      contactForm.reset();
    }
  });
}

const newsletterForm = document.getElementById("newsletter-form");
const newsletterNote = document.getElementById("newsletter-note");

if (newsletterForm) {
  newsletterForm.addEventListener("submit", async (event) => {
    event.preventDefault();
    const formData = new FormData(newsletterForm);
    const response = await fetch("newsletter.php", {
      method: "POST",
      body: formData,
    });
    const result = await response.json();
    if (newsletterNote) {
      newsletterNote.textContent = result.message;
    }
    if (result.success) {
      newsletterForm.reset();
    }
  });
}
