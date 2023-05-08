//連結
const fullpages = document.querySelectorAll('.caselist');
const fullpaginationLinks = document.querySelectorAll('.disablever');

// 點擊 and 跳轉
fullpaginationLinks.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();

        // get ID
        const targetFullPageId = link.getAttribute('href').substring(1);

        // hide all
        fullpages.forEach(fullpage => {
            fullpage.classList.remove('active');
        });

        // show ID
        document.getElementById(targetFullPageId).classList.add('active');
    });
});