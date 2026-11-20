document.addEventListener('DOMContentLoaded', () => {
  const search = document.getElementById('menuSearch');
  const items = [...document.querySelectorAll('.menu-item')];
  const noResults = document.querySelector('.no-results');
  if (!search) return;
  search.addEventListener('input', () => {
    const query = search.value.trim().toLowerCase();
    let visible = 0;
    items.forEach(item => {
      const matches = (item.dataset.search + ' ' + item.textContent).toLowerCase().includes(query);
      item.hidden = !matches;
      if (matches) visible++;
    });
    document.querySelectorAll('.menu-category').forEach(category => {
      category.hidden = !category.querySelector('.menu-item:not([hidden])');
    });
    noResults.hidden = visible !== 0;
  });
});
