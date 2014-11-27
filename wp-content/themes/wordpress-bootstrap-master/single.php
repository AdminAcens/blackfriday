<?php get_header(); ?>
			
	<div class="container">
		<div class="row">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $id = get_the_ID(); ?>
			<?php $quantid = (int) simple_fields_get_post_value($id, "quantidade", true); ?>
			<?php $pedido = (int) simple_fields_get_post_value($id, "pedidos", true); ?>
			<div class="azul-color"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>						

			<?php /*Pega URL da image destacada*/ 
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				$src = $image[0];
			?>
			<img src="<?php echo $src; ?>" alt="" width="450" class="img-responsive float-left well-nocolor" />

			<?php the_content(); ?>
			
			<div class="col-md-12 well text-center cinza-color">
				<?php if($quantid > $pedido): ?>	
					<h2 class="page-header azul-color"><i class="glyphicon glyphicon-shopping-cart"></i> Formulário de pedido</h2>
					<?php echo do_shortcode(simple_fields_get_post_value($id, "formulario", true)); ?>
				<?php elseif($quantid <= $pedido): ?>
					<h2 class="page-header azul-color"><i class="glyphicon glyphicon-time"></i> Lista de espera</h2>
					<?php echo do_shortcode(simple_fields_get_post_value($id, "espera", true)); ?>
				<?php endif; ?>
			</div>

			<?php if( $user_level > 0 ): ?>
				<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","bonestheme"); ?></a>
			<?php endif; ?>

			<?php bf_social_share() ?>

			<?php endwhile; ?>			
					
			<?php else : ?>
				<h1><?php _e("Página não encontrada", "bonestheme"); ?></h1>
				<p><?php _e("Desculpe, mas essa página não foi encontrada ou não existe", "bonestheme"); ?></p>		
			<?php endif; ?>
		</div>	
	</div>	

<!-- Modal do regulamento -->
<?php $regulamento = get_page(60); ?> 
<div class="modal fade" id="regulamentoModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title"><b><?php echo $regulamento->post_title; ?></b></h3>
      </div>
      <div class="modal-body">  
        <?php 
            echo apply_filters( 'the_content', $regulamento->post_content ); 
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Ok, entendi!</button>
      </div>
    </div>
  </div>
</div>
<!-- FIM Modal do regulamento -->

<?php get_footer(); ?>