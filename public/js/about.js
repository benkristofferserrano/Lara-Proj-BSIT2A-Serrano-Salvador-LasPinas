document.addEventListener('DOMContentLoaded', () => {
    const readBtn = document.getElementById('readBtn');
    const extraText = document.getElementById('extraText');

    if (!readBtn || !extraText) return;

    readBtn.addEventListener('click', () => {
        const isHidden = extraText.hidden;

        extraText.hidden = !isHidden;
        readBtn.textContent = isHidden ? 'Read Less' : 'Read More';
        readBtn.setAttribute('aria-expanded', String(isHidden));
    });
});
