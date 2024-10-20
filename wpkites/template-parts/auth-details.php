<?php if( !is_attachment() ): ?>
   <article class="blog-author media">
      <figure class="avatar">
         <?php echo get_avatar( $post->post_author , 250 ); ?>
   	</figure>
   	<div class="media-body align-self-center">
         <h5 class="post-by"><?php esc_html_e('Written by','wpkites'); echo ':'; ?></h5>
      	<h4 class="name"><?php wpkites_get_author_name( $post );?></h4>
      	<p class="mb-2">
            <?php 
				$wpkites_user_data = get_user_meta( $post->post_author );
				echo esc_html( $wpkites_user_data['description'][0] );
				?>
         </p>
      	<p><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="text-default"><?php esc_html_e('View All Posts','wpkites' );?> <i class="fa fa-long-arrow-right pl-2"></i></a></p>
   	</div>
   </article>
<?php endif;?>