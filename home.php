<div class="row">
   <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
    
   <!--  <a href="https://casioevoce.appspot.com/novidades/casio-a-pioneira-em-tecnologia-de-calculos-conheca-um-pouquinho-dessa/">
        <img src="https://casioevoce.storage.googleapis.com/ree.jpg" width="1024" height="500" alt="">
    </a> -->

    <!--  bloco 1 -->
    <div class="thumbnail col-md-4" style="background-color: #066990;">
        <div class="caption">
            <h3><i class="fa fa-book"></i> Institucional</h3>
            <ul class="list-unstyled">
                <?php
                $my_query = new WP_Query('category_name=institucional&showposts=3'); ?>
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'institucional' );
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
                <?php if($my_query->have_posts()): ?>
                <li><a href="<?php echo $category_link; ?>" style="position:absolute;left:20px;bottom:5px;font-size:12px;">Ver todas as postagens</a></li>
                <?php else : ?>
                <li>Nenhum item por enquanto.</li>
                <?php endif; ?>
                <?php
                while ($my_query->have_posts()):
                $my_query->the_post(); ?>
                <li><a href="<?php
                    the_permalink() ?>" rel="bookmark" title="<?php
                    the_title(); ?>"><i class="fa fa-angle-right"></i> <?php
                the_title(); ?></a></li>
                <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="thumbnail col-md-4" style="background-color: #004d40;">
        <div class="caption">
            <h3><i class="fa fa-globe"></i> Últimas Notícias</h3>
            <ul class="list-unstyled">
                <?php
                $my_query = new WP_Query('category_name=novidades&showposts=3'); ?>
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'novidades' );
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
                <?php if($my_query->have_posts()): ?>
                <li><a href="<?php echo $category_link; ?>" style="position:absolute;left:20px;bottom:5px;font-size:12px;">Ver todas as postagens</a></li>
                <?php else : ?>
                <li>Nenhum item por enquanto.</li>
                <?php endif; ?>
                <?php
                while ($my_query->have_posts()):
                $my_query->the_post(); ?>
                <li><a href="<?php
                    the_permalink() ?>" rel="bookmark" title="<?php
                    the_title(); ?>"><i class="fa fa-angle-right"></i> <?php
                the_title(); ?></a></li>
                <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="thumbnail col-md-4" style="background-color: #494949;">
        <div class="caption">
            <div style="width:285px;border:1px solid #55A516;text-align:left;">
                <div style="text-align:left;background-color:#55A516;width:100%;border-bottom:0px;font-size:12px;font-weight:bold;padding:5px 0px;">
                    <span style="margin-left:2px;background-image:url(https://www.exchangeratewidget.com/flag.png); background-position: 0 -128px; width:100%; height:15px; background-repeat:no-repeat;padding-left:25px;">
                        Taxa de Câmbio
                    </span>
                </div>
                <script type="text/javascript" src="https://www.exchangeratewidget.com/converter.php?l=pt&f=BRL&t=USD,EUR,GBP,JPY,CLP,&a=1&d=F0F0F0&n=FFFFFF&o=000000&v=5">
                </script>
            </div>
        </div>
    </div>
    <!-- fim do bloco 1 -->
    <!-- bloco 2 -->
    <div class="thumbnail col-md-4" style="background-color: #1ba39c;">
        <div class="caption">
            <h3><i class="fa fa-tags"></i> Produtos</h3>
            <ul class="list-unstyled">
                <?php
                $my_query = new WP_Query('category_name=produtos&showposts=3'); ?>
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'produtos' );
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
                <?php if($my_query->have_posts()): ?>
                <li><a href="<?php echo $category_link; ?>" style="position:absolute;left:20px;bottom:5px;font-size:12px;">Ver todas as postagens</a></li>
                <?php else : ?>
                <li>Nenhum item por enquanto.</li>
                <?php endif; ?>
                <?php
                while ($my_query->have_posts()):
                $my_query->the_post(); ?>
                <li><a href="<?php
                    the_permalink() ?>" rel="bookmark" title="<?php
                    the_title(); ?>"><i class="fa fa-angle-right"></i> <?php
                the_title(); ?></a></li>
                <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="thumbnail col-md-4" style="background-color: #880e4f;">
        <div class="caption">
            <h3><i class="fa fa-calendar"></i> Eventos</h3>
            <ul class="list-unstyled">
                <?php
                $my_query = new WP_Query('category_name=eventos&showposts=3'); ?>
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'eventos' );
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
                <?php if($my_query->have_posts()): ?>
                <li><a href="<?php echo $category_link; ?>" style="position:absolute;left:20px;bottom:5px;font-size:12px;">Ver todas as postagens</a></li>
                <?php else : ?>
                <li>Nenhum item por enquanto.</li>
                <?php endif; ?>
                <?php
                while ($my_query->have_posts()):
                $my_query->the_post(); ?>
                <li><a href="<?php
                    the_permalink() ?>" rel="bookmark" title="<?php
                    the_title(); ?>"><i class="fa fa-angle-right"></i> <?php
                the_title(); ?></a></li>
                <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="thumbnail col-md-4" style="background-color: #496049;">
        <a class="twitter-timeline" href="https://twitter.com/_ecovias" data-widget-id="571330198139076608">Tweets de @_ecovias</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <!-- fim do bloco 2 -->
    <!-- bloco 3 -->
    <div class="thumbnail col-md-4" style="background-color: #124156;">
        <div class="caption">
            <h3><i class="fa fa-file-image-o"></i> Galeria de Fotos</h3>
            <ul class="list-unstyled">
                <?php
                $my_query = new WP_Query('category_name=galeria-de-fotos&showposts=3'); ?>
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'galeria-de-fotos' );
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
                <?php if($my_query->have_posts()): ?>
                <li><a href="<?php echo $category_link; ?>" style="position:absolute;left:20px;bottom:5px;font-size:12px;">Ver todas as postagens</a></li>
                <?php else : ?>
                <li>Nenhum item por enquanto.</li>
                <?php endif; ?>
                <?php
                while ($my_query->have_posts()):
                $my_query->the_post(); ?>
                <li><a href="<?php
                    the_permalink() ?>" rel="bookmark" title="<?php
                    the_title(); ?>"><i class="fa fa-angle-right"></i> <?php
                the_title(); ?></a></li>
                <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="thumbnail col-md-4" style="background-color: #4a148c;">
        <div class="caption">
            <h3><i class="fa fa-list"></i> Enquete</h3>
            <ul class="list-unstyled">
                <?php
                $my_query = new WP_Query('category_name=enquete&showposts=3'); ?>
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'enquete' );
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
                <?php if($my_query->have_posts()): ?>
                <li><a href="<?php echo $category_link; ?>" style="position:absolute;left:20px;bottom:5px;font-size:12px;">Ver todas as postagens</a></li>
                <?php else : ?>
                <li>Nenhum item por enquanto.</li>
                <?php endif; ?>
                <?php
                while ($my_query->have_posts()):
                $my_query->the_post(); ?>
                <li><a href="<?php
                    the_permalink() ?>" rel="bookmark" title="<?php
                    the_title(); ?>"><i class="fa fa-angle-right"></i> <?php
                the_title(); ?></a></li>
                <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="thumbnail col-md-4" style="background-color: #263238;">
        <div class="caption">
            <h3><i class="fa fa-bullhorn"></i> Entrevistas</h3>
            <ul class="list-unstyled">
                <?php
                $my_query = new WP_Query('category_name=entrevistas&showposts=3'); ?>
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'entrevistas' );
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
                <?php if($my_query->have_posts()): ?>
                <li><a href="<?php echo $category_link; ?>" style="position:absolute;left:20px;bottom:5px;font-size:12px;">Ver todas as postagens</a></li>
                <?php else : ?>
                <li>Nenhum item por enquanto.</li>
                <?php endif; ?>
                <?php
                while ($my_query->have_posts()):
                $my_query->the_post(); ?>
                <li><a href="<?php
                    the_permalink() ?>" rel="bookmark" title="<?php
                    the_title(); ?>"><i class="fa fa-angle-right"></i> <?php
                the_title(); ?></a></li>
                <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
     <!-- fim do bloco 3 -->
     <!-- bloco 4 -->
    <div class="thumbnail col-md-4" style="background-color: #b44c4c;">
        <div class="caption">
            <h3><i class="fa fa-users"></i> Funcionários</h3>
            <ul class="list-unstyled">
                <?php
                $my_query = new WP_Query('category_name=funcionarios&showposts=3'); ?>
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'funcionarios' );
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
                <?php if($my_query->have_posts()): ?>
                <li><a href="<?php echo $category_link; ?>" style="position:absolute;left:20px;bottom:5px;font-size:12px;">Ver todas as postagens</a></li>
                <?php else : ?>
                <li>Nenhum item por enquanto.</li>
                <?php endif; ?>
                <?php
                while ($my_query->have_posts()):
                $my_query->the_post(); ?>
                <li><a href="<?php
                    the_permalink() ?>" rel="bookmark" title="<?php
                    the_title(); ?>"><i class="fa fa-angle-right"></i> <?php
                the_title(); ?></a></li>
                <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="thumbnail col-md-4" style="background-color: #0288d1;">
        <div class="caption">
            <h3><i class="fa fa-birthday-cake"></i> Aniversariantes</h3>
            <ul class="list-unstyled">
                <?php
                $my_query = new WP_Query('category_name=aniversariantes&showposts=3'); ?>
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'aniversariantes' );
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
                <?php if($my_query->have_posts()): ?>
                <li><a href="<?php echo $category_link; ?>" style="position:absolute;left:20px;bottom:5px;font-size:12px;">Ver todas as postagens</a></li>
                <?php else : ?>
                <li>Nenhum item por enquanto.</li>
                <?php endif; ?>
                <?php
                while ($my_query->have_posts()):
                $my_query->the_post(); ?>
                <li><a href="<?php
                    the_permalink() ?>" rel="bookmark" title="<?php
                    the_title(); ?>"><i class="fa fa-angle-right"></i> <?php
                the_title(); ?></a></li>
                <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="thumbnail col-md-4" style="background-color: #c03f0b;">
        <div class="caption">
            <h3><i class="fa fa-user"></i> Oportunidades</h3>
            <ul class="list-unstyled">
                <?php
                $my_query = new WP_Query('category_name=oportunidades&showposts=3'); ?>
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'oportunidades' );
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
                <?php if($my_query->have_posts()): ?>
                <li><a href="<?php echo $category_link; ?>" style="position:absolute;left:20px;bottom:5px;font-size:12px;">Ver todas as postagens</a></li>
                <?php else : ?>
                <li>Nenhum item por enquanto.</li>
                <?php endif; ?>
                <?php
                while ($my_query->have_posts()):
                $my_query->the_post(); ?>
                <li><a href="<?php
                    the_permalink() ?>" rel="bookmark" title="<?php
                    the_title(); ?>"><i class="fa fa-angle-right"></i> <?php
                the_title(); ?></a></li>
                <?php
                endwhile; ?>
            </ul>
        </div>
    </div>
</div>



