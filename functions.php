function indices_dinamicos($atts, $content = null){
	ob_start();
	?>
	<div id="indice-dinamico"></div>
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		const contenedorIndice = document.getElementById('indice-dinamico');
		const encabezados = document.querySelectorAll('h2, h3');
		let indice = '<div class="indice-contenido"><strong>Índice:</strong><ul>';

		encabezados.forEach((encabezado) => {
			//eliminamos espacios al principio y al final del contenido de los encabezados
			let texto = encabezado.textContent.trim();
			
			//sustituimos espacios entre palabras del encabezado por guiones 
			let id = encabezado.id || texto.toLowerCase().replace(/\s+/g, '-').replace(/[^\w\-]/g, '');
			
			if (!encabezado.id) {
				encabezado.id = id;
				}

			let sangria = encabezado.tagName === 'H3' ? ' style="margin-left:2rem;"' : '';
			indice += `<li${sangria}><a href="#${id}">${texto}</a></li>`;
		});

		indice += '</ul></div>';
		contenedorIndice.innerHTML = indice;
	});
	</script>
	<?php
	return ob_get_clean();
}
add_shortcode('indices_dinamicos','indices_dinamicos');