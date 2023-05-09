
const paginationLinksup = document.querySelectorAll('.pager .nextpppppage ');

paginationLinksup.forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    
    goToNextPage();
    
  });
});
function goToNextPage() {
    // 取得當前頁碼
    let currentPage = getCurrentPage();
    
    // 計算下一頁頁碼
    let nextPage = currentPage + 1;
    
    // 執行頁面導航
    navigateToPage(nextPage);
  }
  
  function goToPreviousPage() {

    let currentPage = getCurrentPage();

    let previousPage = currentPage - 1;
    
    navigateToPage(previousPage);
  }
  
  function getCurrentPage() {
    let currentPageElement = document.querySelector(`.current`);
    let currentPageId = currentPageElement.id;
    // var prefix = currentPageId.substring(0, 4); // 獲取 "cur?"
    return parseInt(currentPageId.substring(4));
  }
  
  function navigateToPage(page) {

    // 假設id 是 "#cur{page}"
    let pageLink = document.querySelector(`a#cur${page}`);
    if (pageLink) {
      pageLink.click(); // 執行頁面導航
    }
  }

