document.getElementById("getLocationBtn").addEventListener("click", getLocation);

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(sendLocation);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function sendLocation(position) {
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "send_location.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      alert("Location sent successfully!");
    }
  };
  xhr.send("latitude=" + latitude + "&longitude=" + longitude);
    }
