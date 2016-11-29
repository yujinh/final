function initMap() {
	//https://developers.google.com/maps/documentation/javascript/adding-a-google-map#key
	var commons = {lat:42.4395928, lng:-76.4991818};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
		center: commons
	});
    var marker = new google.maps.Marker({
        position: commons,
        map: map
    });
}
function initAddToCalendar() {
	if (window.addtocalendar) {
		if(typeof window.addtocalendar.start == "function") {
			return;
		}
	}
    if (window.ifaddtocalendar == undefined) { 
		window.ifaddtocalendar = 1;
      	var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
        s.type = 'text/javascript';
		s.charset = 'UTF-8';
		s.async = true;
        s.src = 'https://addtocalendar.com/atc/1.5/atc.min.js';
        var h = d[g]('body')[0];h.appendChild(s); 
	}
}