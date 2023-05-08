//連結
const pages = document.querySelectorAll('.caselist');
const paginationLinks = document.querySelectorAll('.disablever');

// 點擊 and 跳轉
paginationLinks.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();

        // get ID
        const targetPageId = link.getAttribute('href').substring(1);

        // hide all
        pages.forEach(page => {
            page.classList.remove('active');
        });

        // show ID
        document.getElementById(targetPageId).classList.add('active');
    });
});