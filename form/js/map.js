var map = L.map("map").setView([0, 0], 12); // 初始地圖的中心位置和縮放級別

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: "Map data © <a href='https://openstreetmap.org'>OpenStreetMap</a> contributors",
  maxZoom: 19,
}).addTo(map);

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
      var userLocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude,
      };

      map.setView(userLocation, 12); // 將地圖視圖設置為使用者的位置

      var marker = L.marker(userLocation).addTo(map); // 在地圖上添加標記
    });
  } else {
    console.log("Geolocation is not supported by this browser.");
  }
}

getLocation();
