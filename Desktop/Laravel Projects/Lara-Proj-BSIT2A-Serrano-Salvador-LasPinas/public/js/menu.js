document.addEventListener('DOMContentLoaded', () => {
    const search = document.getElementById('menuSearch');
    const categories = Array.from(document.querySelectorAll('.menu-category'));
    const items = categories.flatMap(category => Array.from(category.querySelectorAll('.menu-item')));
    const noResults = document.querySelector('.no-results');

    if (!search || !noResults || items.length === 0) return;

    const normalize = value => String(value || '')
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '')
        .toLocaleLowerCase()
        .trim();

    // Cache searchable text once so filtering stays fast and predictable.
    const searchableItems = items.map(item => ({
        element: item,
        text: normalize([
            item.dataset.search,
            item.querySelector('h4')?.textContent,
            item.querySelector('.item-kicker')?.textContent,
            item.querySelector('p')?.textContent,
            item.querySelector('strong')?.textContent
        ].filter(Boolean).join(' '))
    }));

    const filterMenu = () => {
        const query = normalize(search.value);
        let visibleCount = 0;

        searchableItems.forEach(({ element, text }) => {
            const matches = query === '' || text.includes(query);
            element.hidden = !matches;
            if (matches) visibleCount += 1;
        });

        categories.forEach(category => {
            const hasVisibleItems = category.querySelector('.menu-item:not([hidden])') !== null;
            category.hidden = !hasVisibleItems;
        });

        noResults.hidden = visibleCount > 0;
        noResults.textContent = query
            ? `No menu items match “${search.value.trim()}”. Try another drink or treat.`
            : 'No menu items are available right now.';
    };

    search.addEventListener('input', filterMenu);
    search.addEventListener('search', filterMenu);
    filterMenu();
});
