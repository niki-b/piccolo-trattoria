window.onload = init;

function init(){
	var piccolo = new google.maps.LatLng(-41.295511,174.776763);
		
	var panoramaOptions = {
		position: piccolo,
		pov: {
			heading: 160,
			pitch: 0,
			zoom: 0.5
		},
		addressControl: false,
		zoomControl: false,
		linksControl: false,
		panControl: true,
		panControlOptions: {
			position: google.maps.ControlPosition.TOP_RIGHT
		}
	};
	
	var panorama = new google.maps.StreetViewPanorama(document.getElementById("map"), panoramaOptions);
	panorama.setPano('1v7mo52WNa3kNB1asQZUXA');
}