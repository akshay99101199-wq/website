document.addEventListener('DOMContentLoaded', () => {
    const filters = Array.from(document.querySelectorAll('.portfolio-filter'));
    const cards = Array.from(document.querySelectorAll('.portfolio-card'));
    const resultCount = document.querySelector('.portfolio-result-count');
    const dialog = document.querySelector('.portfolio-dialog');

    if (!filters.length || !cards.length || !resultCount || !dialog) return;

    const updateResults = (filter) => {
        let visibleCount = 0;

        cards.forEach((card) => {
            const categories = card.dataset.categories.split(' ');
            const isVisible = filter === 'all' || categories.includes(filter);
            card.hidden = !isVisible;
            visibleCount += Number(isVisible);
        });

        resultCount.textContent = `Showing ${visibleCount} ${visibleCount === 1 ? 'project' : 'projects'}`;
    };

    filters.forEach((button) => {
        button.addEventListener('click', () => {
            filters.forEach((filterButton) => {
                const isActive = filterButton === button;
                filterButton.classList.toggle('is-active', isActive);
                filterButton.setAttribute('aria-pressed', String(isActive));
            });

            updateResults(button.dataset.filter);
        });
    });

    cards.forEach((card) => {
        card.querySelector('[data-project-open]').addEventListener('click', () => {
            dialog.querySelector('#portfolio-dialog-title').textContent = card.dataset.projectTitle;
            dialog.querySelector('.portfolio-dialog-description').textContent = card.dataset.projectDescription;
            dialog.querySelector('.portfolio-dialog-tags').innerHTML = '';

            [card.dataset.projectProduct, card.dataset.projectCategory].forEach((label) => {
                const tag = document.createElement('span');
                tag.textContent = label;
                dialog.querySelector('.portfolio-dialog-tags').append(tag);
            });

            dialog.showModal();
        });
    });

    dialog.querySelector('.portfolio-dialog-close').addEventListener('click', () => dialog.close());
    dialog.addEventListener('click', (event) => {
        if (event.target === dialog) dialog.close();
    });

    updateResults('all');
});