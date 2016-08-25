var map, draggable;
$(document).ready(function () {
	google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {
	if( $('#googleMap').attr('position') == 'dynamo' ) {
		var $lat = 28.749181,
			$long = -106.159923,
			$title = 'Dynamo Fletes';
	}
	
	var map_canvas = document.getElementById('googleMap');

	var map_options = {
		center: new google.maps.LatLng($lat, $long),
		zoom: 18,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
        streetViewControl: false,
		//draggable: !("ontouchend" in document)
	};

	map = new google.maps.Map(map_canvas, map_options);

	var marker = new google.maps.Marker({
		position: new google.maps.LatLng($lat, $long),
		map: map,
		title: $title,
		url: 'http://maps.google.com/maps?q=loc:'+String($lat)+','+String($long)
	});

	var markerJuarez = new google.maps.Marker({
		position: new google.maps.LatLng(31.638057, -106.409870),
		map: map,
		title: $title,
		url: 'http://maps.google.com/maps?q=loc:31.638057,-106.409870'
	});
	
	google.maps.event.addListener(marker, 'click', function() {
		window.open(this.url,'_blank');
	});
    
	google.maps.event.addListener(markerJuarez, 'click', function() {
		window.open(this.url,'_blank');
	});
}

function moveToChihuahua() {
	map.panTo(new google.maps.LatLng(28.749181, -106.159923));
}

function moveToJuarez() {
	map.panTo(new google.maps.LatLng(31.638057, -106.409870));
}