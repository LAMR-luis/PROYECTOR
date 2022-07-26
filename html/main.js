function iniMap(){

	const ubicacion = new Localizacion (() =>{

		const options ={
			center: {
				lat :ubicacion.latitude,
				lng :ubicacion.longitude
			},
			zoom:15
		}
		var map = document.getElementById('map');
		const mapa  = new google.map.Map(map, options);
	});
}