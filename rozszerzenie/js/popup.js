// $(document).ready(function(){
//     $("#main").load("../menu.html");
//   })
//   $(document).ready(function(){
//     $("#main").load("http://192.168.20.27:8000/test");
//   })
// // $(document).ready(function(){
//     $("#theFrame").load("http://localhost/rozszerzenie/php/baza.php");
//  })
// function logStores(cookieStores) {
//   for (let store of cookieStores) {
//     print(`Cookie store: ${store.id}\n Tab IDs: ${store.tabIds}`);
//   }
// }

// var getting = chrome.cookies.getAllCookieStores();
// getting.then(logStores);

chrome.tabs.query({currentWindow: true, active: true}, function(tabsArray) {
  console.log(tabsArray);
  var url = (tabsArray[0].url).substring((tabsArray[0].url).lastIndexOf("://", (tabsArray[0].url).lastIndexOf("/") - 1) + 3);
  console.log(url);
  console.log(chrome.cookies.getAll({domain: url}, (c) => console.log(c)));
});
chrome.cookies.getAll({}, (c) => console.log(c))

