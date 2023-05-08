//連結
const pages = document.querySelectorAll('.pagersetting');
const paginationLinks = document.querySelectorAll('.pager a');

// 點擊 and 跳轉
paginationLinks.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
 

        // get ID
        const targetPageId = link.getAttribute('href').substring(1);
        const targetPageLink = link.getAttribute('id').substring(1);

        // hide all
        pages.forEach(page => {
            page.classList.remove('active');
        });
        paginationLinks.forEach(links => {
            links.classList.remove('current');
        });


        // show ID
        document.getElementById(targetPageId).classList.add('active');
        document.getElementById(targetPageLink).classList.add('current');
        

    });
});