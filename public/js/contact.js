document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contactForm');
  const success = document.getElementById('formSuccess');
  if (!form) return;
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
  form.addEventListener('submit', event => {
    event.preventDefault();
    success.hidden = true;
    let valid = true;
    form.querySelectorAll('.form-row').forEach(row => {
      const input = row.querySelector('input, textarea');
      const error = row.querySelector('.field-error');
      const value = input.value.trim();
      let message = '';
      if (!value) message = 'This field is required.';
      else if (input.type === 'email' && !emailPattern.test(value)) message = 'Please enter a valid email address.';
      row.classList.toggle('invalid', Boolean(message));
      error.textContent = message;
      if (message) valid = false;
    });
    if (valid) {
      success.hidden = false;
      form.reset();
    }
  });
  form.querySelectorAll('input, textarea').forEach(input => input.addEventListener('input', () => {
    const row = input.closest('.form-row');
    row.classList.remove('invalid');
    row.querySelector('.field-error').textContent = '';
  }));
});
