document.querySelectorAll('.lang-tab').forEach(tab => {
    tab.addEventListener('click', (e) => {
        const selectedLang = e.target.dataset.lang;
        fetch(`lang.php?lang=${selectedLang}`)
            .then(res => res.json())
            .then(data => {
                document.getElementById('page-title').innerText = data.title;
                document.getElementById('greeting').innerText = data.greeting;
                document.getElementById('msg01').innerText = data.message01;
                document.getElementById('msg02').innerText = data.message02;
                document.getElementById('msg03').innerText = data.message03;
                document.getElementById('main-image').src = data.image;

                // タブのアクティブ切り替え
                document.querySelectorAll('.lang-tab').forEach(t => t.classList.remove('active'));
                e.target.classList.add('active');
            })
            .catch(err => {
                alert('言語切り替えに失敗しました');
                console.error(err);
            });
    });
});