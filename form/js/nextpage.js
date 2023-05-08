function goToNextPage() {
    // 取得當前頁碼
    var currentPage = getCurrentPage();
    
    // 計算下一頁頁碼
    var nextPage = currentPage + 1;
    
    // 執行頁面導航
    navigateToPage(nextPage);
  }
  
  function goToPreviousPage() {

    var currentPage = getCurrentPage();

    var previousPage = currentPage - 1;
    
    navigateToPage(previousPage);
  }
  
  function getCurrentPage() {
    var currentPageElement = document.querySelector('.current');
    var currentPageId = currentPageElement.id;
    var prefix = currentPageId.substring(0, 7); // 獲取 "current"
    var currentPage = parseInt(currentPageId.substring(7));
    
    return currentPage;
  }
  
  function navigateToPage(page) {

    // 假設頁面連結的 href 是 "#page-{page}"，並且每個頁面都有一個 id 為 "page-{page}"
    var pageLink = document.querySelector(`a[href="#pager${page}"]`);
    if (pageLink) {
      pageLink.click(); // 執行頁面導航
    }
  }