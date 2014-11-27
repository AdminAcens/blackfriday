<?php get_header(); ?>


<!-- INFORMAÇÕES -->
<div class="container">
	<!-- O QUE É -->
	<div class="text-center" id="oque">
		<?php $oque = get_page(58); ?> 
		<h2 class="azul-color"><?php echo $oque->post_title; ?></h2>
		<?php 
            echo apply_filters( 'the_content', $oque->post_content ); 
        ?>
	</div>

	<hr class="dotted">
	
	<!-- Promoção -->
	<div id="promocao" class="clearfix">
		<?php $promo = get_page(62); ?> 
		<h2 class="azul-color text-center"><?php echo $promo->post_title; ?></h2>
		<?php 
            echo apply_filters( 'the_content', $promo->post_content ); 
        ?>
	</div>
	
	<!-- Botão regulamento -->
	<div class="text-center">
		<a href="#" class="btn btn-exlg btn-primary" data-toggle="modal" data-target="#regulamentoModal"><i class="glyphicon glyphicon-book"></i> Conheça o regulamento</a>
	</div>
</div>		
<!-- FIM INFORMAÇÕES -->

<div class="container text-center" id="pacotes">
	<hr class="dotted">
	<h2 class="azul-color">Os pacotes:</h2>
</div>

<!-- Loop dos pacotes -->
<div class="well-nocolor container-color-dark text-center">
	<?php query_posts('category_name=combos&showposts=3&order=ASC');?>
	<?php if(have_posts()): while ( have_posts() ): the_post(); ?>
	<?php $id = get_the_ID(); ?>
	<?php $quantid = (int) simple_fields_get_post_value($id, "quantidade", true); ?>
	<?php $pedido = (int) simple_fields_get_post_value($id, "pedidos", true); ?>
	<div class="row-fluid clearfix">
	<?php if($quantid > $pedido): ?>	
		<div class="col-md-4">
			<div class="col-md-12 well well-no-radius">	
				<?php /*Pega URL da image destacada*/ 
				    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				    $src = $image[0];
				?>
				<h3 class="inline"><a href="<?php the_permalink() ?>"><i class="glyphicon glyphicon-certificate"></i> <?php the_title()?></a></h3> 

				<img src="<?php echo $src; ?>" alt="" class="img-responsive img-thumbnail">
				
				<?php the_content(__('<button class="btn btn-primary btn-lg btn-block"><i class="glyphicon glyphicon-shopping-cart"></i> Saiba mais e peça o seu!</button>')); ?>
				<hr class="dotted">
				<div class="row">
					
					<div class="col-md-6">
						<h4 class="azul-color"><b>Quantidade:</b> <?php echo $quantid; ?></h4>
					</div>
					<div class="col-md-6">
						<h4 class="verde-color"><b>Pedidos:</b> <?php echo $pedido ?></h4>
					</div>
				</div>
			</div>
		</div>		
	<?php elseif($quantid <= $pedido): ?>
		<div class="col-md-4">
			<div class="col-md-12 well well-no-radius">	
				<?php /*Pega URL da image destacada*/ 
				    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				    $src = $image[0];
				?>
				<h3 class="inline"><a href="<?php the_permalink() ?>"><i class="glyphicon glyphicon-certificate"></i> <?php the_title()?></a></h3> 

				<img src="<?php echo $src; ?>" alt="" class="img-responsive img-thumbnail">

				<?php the_content(_(" ")); ?>
				<div class="alert alert-danger">
					<h4>Pedidos esgotados</h4>
				  	<a href="<?php the_permalink() ?>" class="alert-link"><i class="glyphicon glyphicon-time"></i> Subscreva à lista de espera</a>
				</div>
				<hr class="dotted">

				<div class="row">
					
					<div class="col-md-6">
						<h4 class="azul-color"><b>Quantidade:</b> <?php echo $quantid; ?></h4>
					</div>
					<div class="col-md-6">
						<h4 class="vermelho-color"><b>Pedidos:</b> <?php echo $pedido ?></h4>
					</div>
				</div>
			</div>
		</div>		
	<?php endif; ?>			
	<?php endwhile; ?>
	</div>
	<?php else: ?>
		<h3 class="text-center"><?php _e("Não há pacotes promocionais"); ?></h3>
	<?php endif; ?>
</div>	
<!-- FIM Loop dos pacotes -->


<!-- COMPARTILHAMENTOS -->
<div class="row-fluid text-center" id="compartilhe">
	<?php _e('<h2 class="azul-color">Siga a Acens nas redes sociais <i class="glyphicon glyphicon-thumbs-up"></i></h2>', 'acensbf' ); ?>
	<div class="container social-wraper">
		<div class="row">
			<a href="https://www.facebook.com/acensjunior" class="col-md-1 col-md-offset-4" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/fb-icon.png" class="fb-ico" alt="Siga nossa página no Facebook" /></a>
			<a href="https://www.twitter.com/acensjr" class="col-md-1 col-md-offset-2" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/tw-icon.png" class="tw-ico" alt="Siga-nos no twitter" /></a>	
		</div>
	</div>
</div>

<!-- FIM COMPARTILHAMENTOS -->

<!-- Modal do regulamento -->
<?php $regulamento = get_page(60); ?> 
<div class="modal fade" id="regulamentoModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title"><b><?php echo $regulamento->post_title; ?></b></h3>
      </div>
      <div class="modal-body text-left">  
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
