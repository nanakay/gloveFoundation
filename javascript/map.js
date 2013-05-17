	
function mapInit() {
	var map,myPosition;
	
	map = new google.maps.Map(document.getElementById('google-map'), {
		   
        mapTypeId: google.maps.MapTypeId.ROADMAP	
    });
   
    var directionsRenderer = new google.maps.DirectionsRenderer({
        map: map,
       
    });

    if (navigator.geolocation) {
	    
        navigator.geolocation.getCurrentPosition(function(position){
            myPosition = new google.maps.LatLng(5.585310600000000000, -0.240884599999958480);
                                                
			map.setCenter(myPosition)
			map.setZoom(17)
			var options = {
			  position: myPosition
			};
			var marker = new google.maps.Marker(options);
			marker.setMap(map);
			marker.setAnimation(google.maps.Animation.BOUNCE);	
		
        });
        
    }
}
	