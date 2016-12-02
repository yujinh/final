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

function collapse(targetclass) {
	$('.' + targetclass).slideToggle();
}