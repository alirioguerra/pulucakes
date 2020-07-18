<?php 
// Template Name: Home
?>

<?php get_header(); ?>
<!-- intro -->

<!-- loop inicio -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<style type="text/css">
	
	.intro {
		background: url("<?php the_field('imagem_slide') ?>") no-repeat center center;
		background-size: cover;
		padding: 150px 0;
	}

</style>
<!-- slider -->
<section class="intro" id="home">
	<div class="intro-conteudo">
		<h1><?php the_field('texto_slide') ?></h1>
		<a href="#fotos" class="btn">Conheça</a>
	</div>
</section>

<!-- sobre -->
<section class="sobre-bg" id="sobre">
	<h1 class="titulo">Sobre mim</h1>
	<div class="profile-foto">
		<img src="<?php the_field('foto_perfil') ?>" alt="Foto de perfil" class="profile">
	</div>
	<div class="paragrafo">
		<?php the_field('texto_sobre'); ?>
	</div>
</section>

<!-- fotos -->
<section class="fotos-bg" id="fotos">
	<h1 class="titulo">Fotos</h1>
	<div class="fotos-container owl-carousel owl-theme owl-loaded">

		<?php if(have_rows('foto_galeria')): while(have_rows('foto_galeria')) : the_row(); ?>

			<div class="fotos-item owl-stage">
				<a href="<?php the_sub_field('foto_item') ?>"  data-lightbox='fotos'>
					<img src="<?php the_sub_field('foto_item') ?>">
				</a>
			</div>
		<?php endwhile; else : endif; ?>

	</div>
</section>

<!-- preços -->
<section id="precos">
	<h1 class="titulo">Preços</h1>
	<div class="preco-content">
		<?php if(have_rows('preco_item')): while(have_rows('preco_item')) : the_row(); ?>
			<div class="preco-item">
				<h2><?php the_sub_field('preco_titulo'); ?></h2>
				<ul>
					<li><?php the_sub_field('item1'); ?></li>
					<li><?php the_sub_field('item2'); ?></li>
					<li><?php the_sub_field('item3'); ?></li>
					<li><?php the_sub_field('item4'); ?></li>
				</ul>
				<p><em>a partir de</em></p>
				<span><sup>R$</sup><?php the_sub_field('preco') ?></span>
			</div>
		<?php endwhile; else : endif; ?>	
	</div>
</section>



<!-- contato -->
<section class="contato" id="contato">
	<h1 class="titulo">Contato</h1>
	<div  class="contato-form">
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
	</div>		
</section>

<?php endwhile; else: endif; ?>
<!-- loop final -->

<?php get_footer(); ?>