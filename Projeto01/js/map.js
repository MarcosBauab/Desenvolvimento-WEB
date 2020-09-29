function initMap(){
	//Opções do mapa
	var options = {
		zoom: 8,
		center: {lat: -23.241120,lng: -45.916830}
	}
	//Criando um objeto novo do mapa
	var map = new google.maps.Map(document.getElementById('map'), options)

	//Adicionando marcadores ao mapa:
	var marcador = new google.maps.Marker({
		position: options.center,
		//Em que mapa adicionar:
		map: map
	})

	//Janela de informação para aparecer quando clicar:
	var infoWindow = new google.maps.InfoWindow({
		content: '<h1>Minha casa</h1>'
	})

	marcador.addListener('click', function(){
		infoWindow.open(map, marcador)
	})
}
