document.addEventListener('DOMContentLoaded', () => {
    const langTabs = document.querySelectorAll('.lang-tab');

    langTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const selectedLang = tab.getAttribute('data-lang');
            // URLのパラメータに言語を設定してページをリロード
            window.location.search = `?lang=${selectedLang}`;
        });
    });
});
