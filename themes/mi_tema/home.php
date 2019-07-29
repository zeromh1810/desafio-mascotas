<?php get_header() ?>

<body>
  <div class="container my-5">
    <h1 class="text-center display-2 my-3"><i class="fas fa-paw"></i> Mascotas <i class="fas fa-paw"></i></h1>

    <div class="card-columns">

      <?php
      $arg = array(
        'post_type'         => 'post',
        'posts_per_page' => 10,
        'orderby'         => 'rand'
      );

      $get_arg = new WP_Query($arg);

      while ($get_arg->have_posts()) {
        $get_arg->the_post();
        ?>
        <div class="card p-2 mb-3">
          <div class="row no-gutters">
            <div class="col-md-4 text-center">
              <!-- <img src="assets/images/post02.png" class="card-img w-100 h-auto rounded-circle" alt="Perro"> -->
              <?php the_post_thumbnail('square', array('class' => 'card-img w-100 h-auto rounded-circle')) ?>
              <a href="<?php the_permalink() ?>" class="btn btn-info btn-sm my-3">¡Conóceme!</a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title"><?php the_title() ?></h3>
                <p class="card-text"><?php the_excerpt() ?></p>
                <p class="card-text">
                  <small class="text-muted">
                    <i <?php
                        if (has_category('perro')) { 
                          ?> class="fas fa-dog" 
                        <?php }
                        else { ?> class="fas fa-cat" <?php 
                        } ?>>
                    </i>
                    <a class="post-categories"><?php the_category('') ?></a>
                  </small>
                </p>
              </div>
            </div>
          </div>
        </div>

      <?php }
      wp_reset_postdata();
      ?>

</body>



<!-- <div class="card p-2 mb-3">
        <div class="row no-gutters">
          <div class="col-md-4 text-center">
            <img src="assets/images/post02.png" class="card-img w-100 h-auto rounded-circle" alt="Gato">
            <a href="plantilla-single-mascota.html" class="btn btn-info btn-sm my-3">¡Conóceme!</a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Nombre</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="card-text"><small class="text-muted"><i class="fas fa-cat"></i> <a href="#" class="text-info">Gato</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card p-2 mb-3">
        <div class="row no-gutters">
          <div class="col-md-4 text-center">
            <img src="assets/images/post03.png" class="card-img w-100 h-auto rounded-circle" alt="Perro">
            <a href="plantilla-single-mascota.html" class="btn btn-info btn-sm my-3">¡Conóceme!</a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Nombre</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="card-text"><small class="text-muted"><i class="fas fa-dog"></i> <a href="#" class="text-info">Perro</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card p-2 mb-3">
        <div class="row no-gutters">
          <div class="col-md-4 text-center">
            <img src="assets/images/post04.png" class="card-img w-100 h-auto rounded-circle" alt="Perro">
            <a href="plantilla-single-mascota.html" class="btn btn-info btn-sm my-3">¡Conóceme!</a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Nombre</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="card-text"><small class="text-muted"><i class="fas fa-dog"></i> <a href="#" class="text-info">Perro</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card p-2 mb-3">
        <div class="row no-gutters">
          <div class="col-md-4 text-center">
            <img src="assets/images/post05.png" class="card-img w-100 h-auto rounded-circle" alt="Gato">
            <a href="plantilla-single-mascota.html" class="btn btn-info btn-sm my-3">¡Conóceme!</a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Nombre</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="card-text"><small class="text-muted"><i class="fas fa-cat"></i> <a href="#" class="text-info">Gato</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card p-2 mb-3">
        <div class="row no-gutters">
          <div class="col-md-4 text-center">
            <img src="assets/images/post06.png" class="card-img w-100 h-auto rounded-circle" alt="Gato">
            <a href="plantilla-single-mascota.html" class="btn btn-info btn-sm my-3">¡Conóceme!</a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Nombre</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="card-text"><small class="text-muted"><i class="fas fa-cat"></i> <a href="#" class="text-info">Gato</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card p-2 mb-3">
        <div class="row no-gutters">
          <div class="col-md-4 text-center">
            <img src="assets/images/post07.png" class="card-img w-100 h-auto rounded-circle" alt="Perro">
            <a href="plantilla-single-mascota.html" class="btn btn-info btn-sm my-3">¡Conóceme!</a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Nombre</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="card-text"><small class="text-muted"><i class="fas fa-dog"></i> <a href="#" class="text-info">Perro</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card p-2 mb-3">
        <div class="row no-gutters">
          <div class="col-md-4 text-center">
            <img src="assets/images/post08.png" class="card-img w-100 h-auto rounded-circle" alt="Gato">
            <a href="plantilla-single-mascota.html" class="btn btn-info btn-sm my-3">¡Conóceme!</a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Nombre</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="card-text"><small class="text-muted"><i class="fas fa-cat"></i> <a href="#" class="text-info">Gato</a></small></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card p-2 mb-3">
        <div class="row no-gutters">
          <div class="col-md-4 text-center">
            <img src="assets/images/post09.png" class="card-img w-100 h-auto rounded-circle" alt="Perro">
            <a href="plantilla-single-mascota.html" class="btn btn-info btn-sm my-3">¡Conóceme!</a>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Nombre</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="card-text"><small class="text-muted"><i class="fas fa-dog"></i> <a href="#" class="text-info">Perro</a></small></p>
            </div>
          </div>
        </div>
      </div> -->

</div>
</div>

<?php get_footer() ?>