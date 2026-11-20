document.addEventListener('DOMContentLoaded', () => {
  const slides = [...document.querySelectorAll('.hero-slide')];
  const dots = [...document.querySelectorAll('.hero-dots button')];
  if (!slides.length) return;
  let current = 0;
  const show = (index) => {
    current = (index + slides.length) % slides.length;
    slides.forEach((slide, i) => slide.classList.toggle('active', i === current));
    dots.forEach((dot, i) => dot.classList.toggle('active', i === current));
  };
  document.querySelector('.hero-prev')?.addEventListener('click', () => show(current - 1));
  document.querySelector('.hero-next')?.addEventListener('click', () => show(current + 1));
  dots.forEach((dot, i) => dot.addEventListener('click', () => show(i)));
  window.setInterval(() => show(current + 1), 6000);
});
