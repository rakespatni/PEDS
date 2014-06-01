function initialize() {
  var myLatlng = new google.maps.LatLng(11.321368,75.934632);
  var mapOptions = {
    zoom: 16,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Physical Education Department NIT Calicut'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
