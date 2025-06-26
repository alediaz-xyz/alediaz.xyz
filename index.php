<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>


	<div id="primary" <?php astra_primary_class(); ?> >
		<div class="container">
			<div class="container py-5">
    <div class="row align-items-center">
      
      <!-- Columna izquierda -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h2>
          Un sitio web para entusiastas<br>
          de la tecnología.
        </h2>
        <p>
          Aquí encontrarás proyectos de electrónica avanzada, tutoriales <br>
          y recursos para aprender y experimentar con tecnología.
        </p>
        <div class="d-flex gap-2">
          <a class="btn btn-primary" href="https://alediaz-xyz.github.io"target="_blank">Proyectos</a>
          <button class="btn btn-success">Contacto</button>
        </div>
      </div>

      <!-- Columna derecha (terminal animada) -->
      <div class="col-md-6">
        <div class="fondo w-100">
          <div class="barra">
            <span class="circulo rojo"></span>
            <span class="circulo amarillo"></span>
            <span class="circulo verde"></span>
          </div>
          <div class="contenido px-3">
            <span class="escritura">¡Bienvenidx a alediaz.xyz! 👋</span>
            <br>
            <span style="color:white;">Proyectos electrónicos avanzados 🤖</span>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container py-5 ">
    <p class="d-flex justify-content-center align-items-center fs-5">
      ¡Sígueme en mis redes sociales para no perderte nada!
    </p>
    <!-- Carrusel tipo marquesina -->
<div class="carousel-marcas py-5 ">
  <div class="slider">
    <div class="slide-track">

      <a href="https://www.instagram.com/alediaz.xyz" target="_blank" class="slide">
        <i class="bi bi-instagram fs-2"></i>
      </a>

      <a href="https://www.linkedin.com/in/alejandro-d%C3%ADaz-sastre-0b0a3b213/" target="_blank" class="slide">
        <i class="bi bi-linkedin fs-2"></i>
      </a>

      <a href="https://youtube.com/@alediaz-xyz?si=v-C8IqQq1ccgI-zs" target="_blank" class="slide">
        <i class="bi bi-youtube fs-2"></i>
      </a>

      <a href="https://github.com/alediaz-xyz" target="_blank" class="slide">
        <i class="bi bi-github fs-2"></i>
      </a>

      <a href="https://www.facebook.com/alediaz.xyz" target="_blank" class="slide">
        <i class="bi bi-facebook fs-2"></i>
      </a>

      <!-- Duplicamos para efecto continuo -->
      <a href="https://www.instagram.com/alediaz.xyz" target="_blank" class="slide">
        <i class="bi bi-instagram fs-2"></i>
      </a>

      <a href="https://www.linkedin.com/in/alejandro-d%C3%ADaz-sastre-0b0a3b213/" target="_blank" class="slide">
        <i class="bi bi-linkedin fs-2"></i>
      </a>

      <a href="https://youtube.com/@alediaz-xyz?si=v-C8IqQq1ccgI-zs" target="_blank" class="slide">
        <i class="bi bi-youtube fs-2"></i>
      </a>

      <a href="https://github.com/alediaz-xyz" target="_blank" class="slide">
        <i class="bi bi-github fs-2"></i>
      </a>

      <a href="https://www.facebook.com/alediaz.xyz" target="_blank" class="slide">
        <i class="bi bi-facebook fs-2"></i>
      </a>

    </div>
  </div>
</div>
<div class="col-md-8 mx-auto fondo-excel w-100">
  <div class="barra">
    <span class="circulo rojo"></span>
    <span class="circulo amarillo"></span>
    <span class="circulo verde"></span>
  </div>
  <div class="pt-3 d-flex justify-content-center align-items-center gap-2">
        <div class="px-3 py-1 bg-light border">A1</div>
        <div class="px-3 py-1 bg-light border d-flex gap-2 align-items-center">
  <i class="bi bi-x"></i>
  <i class="bi bi-caret-down-fill"></i>
  <span>ƒx</span>
</div>

        <span class="px-2 py-1 flex-grow-1 bg-light border">=blog(A2:C3)</span>
      </div>
    <div class="tabla pt-3">
      <table class="w-100 text-center">
        <tr class="cabecera-excel">
          <td></td>
          <td>A</td>
          <td>B</td>
          <td>C</td>
        </tr>
        <tr>
          <td class=""><strong>1</strong></td>
          <td colspan="3" class="celda-titulo">¿Qué vas a encontrar en este blog?</td>
        </tr>
        <tr>
          <td class=""><strong>2</strong></td>
          <td class="herramientas"><div><a href="#analisis-de-datos" style="text-decoration: none;">
			  <div class=" h-100">
        <div class="d-flex justify-content-center">
          <i class="bi bi-bar-chart fs-2 text-black"></i>
        </div>
        <div class="card-body movil">
          <h5 class="d-flex justify-content-center text-black">Análisis de datos</h5>
          <p class="text-center text-black">Aprende a programar en Python desde cero con ejemplos prácticos y proyectos interesantes.</p>
        </div>
      </div>
	</a>
      
    </div></td>
          <td class="herramientas"><div><a href="#electronica" style="text-decoration: none;">
      <div class=" h-100">
        <div class="d-flex justify-content-center">
          <i class="bi bi-cpu fs-2 text-black"></i>
        </div>
        <div class="card-body movil">
          <h5 class="d-flex justify-content-center text-black">Electrónica</h5>
          <p class="text-center text-black">Aprende a programar en Python desde cero con ejemplos prácticos y proyectos interesantes.</p>
        </div>
      </div>
	</a>
    </div></td>
          <td class="herramientas"><div class=""><a href="#front-end" style="text-decoration: none;">
      <div class=" h-100">
        <div class="d-flex justify-content-center">
          <i class="bi bi-window-stack fs-2 text-black"></i>
        </div>
        <div class="card-body movil">
          <h5 class="d-flex justify-content-center text-black">Front-end</h5>
          <p class="text-center text-black">Aprende a programar en Python desde cero con ejemplos prácticos y proyectos interesantes.</p>
        </div>
      </div>
    </div>
	</a>
  </div></td>
        </tr>
        <tr>
          <td class=""><strong>3</strong></td>
          <td class="herramientas"><div class=""><a href="#inteligencia-artificial" style="text-decoration: none;">
      <div class=" h-100">
        <div class="d-flex justify-content-center">
          <i class="bi bi-robot fs-2 text-black"></i>
        </div>
        <div class="card-body movil">
          <h5 class="d-flex justify-content-center text-black">Inteligencia Artificial</h5>
          <p class="text-center text-black">Aprende a programar en Python desde cero con ejemplos prácticos y proyectos interesantes.</p>
        </div>
      </div>
	</a>
    </div></td>
          <td class="herramientas"><div class=""><a href="#back-end" style="text-decoration: none;">
      <div class="h-100">
        <div class="d-flex justify-content-center">
          <i class="bi bi-database fs-2 text-black"></i>
        </div>
        <div class="card-body movil">
          <h5 class="d-flex justify-content-center text-black">Back-end</h5>
          <p class="text-center text-black">Aprende a programar en Python desde cero con ejemplos prácticos y proyectos interesantes.</p>
        </div>
      </div>
	</a>
    </div></td>
          <td class="herramientas"><div class=""><a href="#industria-4" style="text-decoration: none;"> 
      <div class="h-100">
        <div class="d-flex justify-content-center">
          <i class="bi bi-buildings fs-2 text-black"></i>
        </div>
        
        <div class="card-body movil">
          <h5 class="d-flex justify-content-center text-black">Industria 4.0</h5>
          <p class="text-center text-black">Aprende a programar en Python desde cero con ejemplos prácticos y proyectos interesantes.</p>
        </div>
      </div>
	</a>
    </div></td>
        </tr>
      </table>
    </div>
  </div>
</div>
		

<h3>Mis últimas publicaciones👇</h3>
<hr>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<?php
		astra_primary_content_top();

		astra_content_loop();

		astra_primary_content_bottom();
		?>

<div class="container my-5">
  <?php
    // Obtener todas las categorías
    $categorias = get_categories();

    // Asignar emojis personalizados (puedes editar según tus categorías)
    $emojis = [
      'Industria 4.0' => '🏭',
      'Back-End' => '💻',
      'Inteligencia Artificial' => '🤖',
      'Electrónica' => '🔋',
      'Análisis de datos' => '📊',
      'Front-End' => '🎨'
    ];
	$navs=['Industria 4.0' => 'industria-4',
      'Back-End' => 'back-end',
      'Inteligencia Artificial' => 'inteligencia-artificial',
      'Electrónica' => 'electronica',
      'Análisis de datos' => 'analisis-de-datos',
      'Front-End' => 'front-end'
		
		];

    foreach ($categorias as $categoria):
      // Obtener los últimos 3 posts de cada categoría
      $args = array(
        'category__in' => array($categoria->term_id),
        'posts_per_page' => 3
      );
      $posts = new WP_Query($args);

      if ($posts->have_posts()):
        $emoji = isset($emojis[$categoria->name]) ? $emojis[$categoria->name] : '';
		$nav = isset($navs[$categoria->name]) ? $navs[$categoria->name] : '';
  ?>
        <section class="mb-5">
          <h2 class="mb-3" id="<?php echo esc_html($nav); ?>">
            <?php echo esc_html($categoria->name); ?> <?php echo esc_html($emoji); ?>
          </h2>
          <hr>
          <div class="row">
            <?php while ($posts->have_posts()): $posts->the_post(); ?>
              <div class="col-md-4 mb-4">
                <div class="card h-100">
                  <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                    </a>
                  <?php endif; ?>
                  <div class="card-body">
                    <h5 class="card-title text-black">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h5>
                    
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </section>
  <?php
      endif;
      wp_reset_postdata();
    endforeach;
  ?>
</div>

	</div><!-- #primary -->
  
<?php
get_footer();