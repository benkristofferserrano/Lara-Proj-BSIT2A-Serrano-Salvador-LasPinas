document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.nav-toggle');
  const nav = document.querySelector('.main-nav');
  if (toggle && nav) toggle.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('open');
    toggle.setAttribute('aria-expanded', String(isOpen));
    toggle.textContent = isOpen ? '×' : '☰';
  });


  const themeButton = document.querySelector('.theme-toggle');
  const themeIcon = document.querySelector('.theme-icon');
  const themeLabel = document.querySelector('.theme-label');
  const applyTheme = (theme) => {
    document.body.dataset.theme = theme;
    const dark = theme === 'dark';
    if (themeIcon) themeIcon.textContent = dark ? '☀' : '☾';
    if (themeLabel) themeLabel.textContent = dark ? 'Light mode' : 'Dark mode';
    if (themeButton) {
      themeButton.setAttribute('aria-label', dark ? 'Switch to light mode' : 'Switch to dark mode');
      themeButton.title = dark ? 'Switch to light mode' : 'Switch to dark mode';
    }
  };
  let savedTheme = 'light';
  try { savedTheme = localStorage.getItem('bb-cafe-theme') || 'light'; } catch (error) {}
  applyTheme(savedTheme);
  if (themeButton) themeButton.addEventListener('click', () => {
    const nextTheme = document.body.dataset.theme === 'dark' ? 'light' : 'dark';
    applyTheme(nextTheme);
    try { localStorage.setItem('bb-cafe-theme', nextTheme); } catch (error) {}
  });
});
