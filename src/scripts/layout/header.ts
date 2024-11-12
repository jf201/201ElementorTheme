export default {
    init() {
        const header = document.querySelector<HTMLDivElement>('.header');
        const popupMenu = document.querySelector<HTMLDivElement>('.component-popup-menu');
        const toggleButton = document.querySelector<HTMLButtonElement>('.component-popup-menu-open-button');

        if (!header || !popupMenu || !toggleButton) {
            return;
        }

        toggleButton.addEventListener('click', () => {
            popupMenu.classList.toggle('popup-menu-active');
            header.classList.toggle('header-component-popup-menu-active');
        });

        document.addEventListener('click', (event) => {
            if (!popupMenu.contains(event.target as Node) && !toggleButton.contains(event.target as Node)) {
                popupMenu.classList.remove('popup-menu-active');
                header.classList.remove('header-component-popup-menu-active');
            }
        });
    }
};
