const faqItems = document.querySelectorAll(".js-faq-item");
const faqQuestions = document.querySelectorAll(".p-faq__question");

console.log('test');

faqQuestions.forEach((q) => {
  q.addEventListener("click", function () {
    const next = q.nextElementSibling;
    if (next.classList.contains("open")) {
      next.classList.remove("open");
			q.classList.remove("open");
    } else {
      next.classList.add("open");
      q.classList.add("open");
    }
  });
});

const header = document.querySelector(".l-header");

const navOpen = () => {
  if (header.classList.contains("nav-open")) {
    header.classList.remove("nav-open");
    document.body.style.overflow = "";
  } else {
    header.classList.add("nav-open");
    document.body.style.overflow = "hidden";
  }
};
