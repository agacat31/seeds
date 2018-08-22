<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- Section About -->
<div id="section-about" class="section text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h4 class="about-heading wow fadeInUp" >Lorem  Ipsum</h4>
        <p class="wow fadeInUp">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a odio dui. Donec in libero vitae turpis elementum malesuada. Mauris quis pharetra eros, eu egestas lorem. Cras faucibus tempus porttitor. Duis non lacinia arcu. Integer iaculis nec ipsum eget molestie. Morbi ac porta mauris, at egestas dui. Maecenas et rhoncus est. Vestibulum aliquet varius pulvinar.
        </p>
        <br>
      </div>
      <div class="col-sm-3 offset-sm-1">
        <div class="img-container wow fadeIn" data-wow-delay=".2s">
          <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/img-about.png" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Section Team -->
<div id="section-team" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 text-center">
        <h3 class="section-heading text-uppercase wow fadeInUp">Team</h3>
        <br>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-8 offset-md-2 text-center">
        <p class="wow fadeInUp" data-wow-delay="0.2s">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a odio dui. Donec in libero vitae turpis elementum malesuada. Mauris quis pharetra eros, eu egestas lorem. Cras faucibus tempus porttitor. Duis non lacinia arcu. Integer iaculis nec ipsum eget molestie. Morbi ac porta mauris, at egestas dui. Maecenas et rhoncus est. Vestibulum aliquet varius pulvinar.
        </p>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <div class="view">
            <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/team-1.jpg" class="img-fluid rounded-circle mx-auto wow fadeInUp" />
            <div class="caption">
                <h4 class="wow fadeInUp" data-wow-delay="0.3s">Lorem Ipsum</h4>
                <span class="wow fadeInUp" data-wow-delay="0.4s">Magna Aquila</span>
                <p class="no-padding mt-2 wow fadeInUp" data-wow-delay="0.5s">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="view">
            <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/team-2.jpg" class="img-fluid rounded-circle mx-auto wow fadeInUp" />
            <div class="caption">
                <h4 class="wow fadeInUp" data-wow-delay="0.3s">Lorem Ipsum</h4>
                <span class="wow fadeInUp" data-wow-delay="0.4s">Magna Aquila</span>
                <p class="no-padding mt-2 wow fadeInUp" data-wow-delay="0.5s">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="view">
            <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/team-3.jpg" class="img-fluid rounded-circle mx-auto wow fadeInUp" />
            <div class="caption">
                <h4 class="wow fadeInUp" data-wow-delay="0.3s">Lorem Ipsum</h4>
                <span class="wow fadeInUp" data-wow-delay="0.4s">Magna Aquila</span>
                <p class="no-padding mt-2 wow fadeInUp" data-wow-delay="0.5s">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <hr>
      </div>
    </div>
  </div>
</div>

<!-- Section Additional -->
<div id="section-additional" class="section text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 offset-md-1">
        <div class="img-container">
          <img src="" />
        </div>
      </div>
      <div class="col-sm-6">
        <h4 class="about-heading wow fadeInUp">Lorem  Ipsum</h4>
        <p class="wow fadeInUp" data-wow-delay="0.3s">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a odio dui. Donec in libero vitae turpis elementum malesuada. Mauris quis pharetra eros, eu egestas lorem. Cras faucibus tempus porttitor. Duis non lacinia arcu. Integer iaculis nec ipsum eget molestie. Morbi ac porta mauris, at egestas dui. Maecenas et rhoncus est. Vestibulum aliquet varius pulvinar.
        </p>
        <br>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <hr>
      </div>
    </div>
  </div>
</div>

<!-- Section Gallery -->
<div id="section-gallery" class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="section-heading text-uppercase wow fadeInUp">Gallery</h3>
        <!-- <h3 class="section-subheading text-muted">Only with one click you can finish your work faster.</h3> -->
      </div>
    </div>
    <!-- <div class="row text-center">
      <div class="col-md-4">
        <div class="view view-first wow fadeInUp" data-wow-delay="0.2s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/coffe-1.jpg" class="img-fluid" />
            <div class="mask">
                <h2>Image Title</h2>
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                <a class="info" data-toggle="modal" href="#portfolioModal">Read More</a>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="view view-first wow fadeInUp" data-wow-delay="0.3s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/coffe-2.jpg" class="img-fluid" />
            <div class="mask">
                <h2>Image Title</h2>
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                <a class="info" data-toggle="modal" href="#portfolioModal">Read More</a>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="view view-first wow fadeInUp" data-wow-delay="0.4s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/coffe-3.jpg" class="img-fluid" />
            <div class="mask">
                <h2>Image Title</h2>
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                <a class="info" data-toggle="modal" href="#portfolioModal">Read More</a>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="view view-first wow fadeInUp" data-wow-delay="0.5s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/coffe-1.jpg" class="img-fluid" />
            <div class="mask">
                <h2>Image Title</h2>
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                <a class="info" data-toggle="modal" href="#portfolioModal">Read More</a>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="view view-first wow fadeInUp" data-wow-delay="0.6s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/coffe-2.jpg" class="img-fluid" />
            <div class="mask">
                <h2>Image Title</h2>
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                <a class="info" data-toggle="modal" href="#portfolioModal">Read More</a>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="view view-first wow fadeInUp" data-wow-delay="0.7s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/coffe-3.jpg" class="img-fluid" />
            <div class="mask">
                <h2>Image Title</h2>
                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                <a class="info" data-toggle="modal" href="#portfolioModal">Read More</a>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <br><br>
        <a class="btn btn-primary btn-xs text-uppercase btn-main wow fadeInUp" data-wow-delay="0.5s" href="#">Browse For More</a>
      </div>
    </div> -->
    <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/page/content', 'page' );

      endwhile; // End of the loop.
      ?>
  </div>
</div>

<!-- Section FAQ -->
<div id="section-faq" class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="section-heading text-uppercase wow fadeInUp">FAQ</h3>
        <br>
        <br>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="panel-group" id="accordion">
          <div class="panel panel-info">
              <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">
                <h4 class="panel-title accordion-toggle">
                  Collapsible FAQ #1
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                </div>
              </div>
          </div>
          <div class="panel panel-info">
              <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo">
                <h4 class="panel-title accordion-toggle">
                  Collapsible FAQ #2
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                </div>
              </div>
          </div>
          <div class="panel panel-info">
              <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree">
                <h4 class="panel-title accordion-toggle">
                  Collapsible FAQ #3
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                </div>
              </div>
          </div>
          <div class="panel panel-info">
              <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour">
                <h4 class="panel-title accordion-toggle">
                  Collapsible FAQ #4
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                </div>
              </div>
          </div>
          <div class="panel panel-info">
              <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapseFive">
                <h4 class="panel-title accordion-toggle">
                  Collapsible FAQ #5
                </h4>
              </div>
              <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                </div>
              </div>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- Subscribe -->
<div id="section-subscribe" class="section">
  <div class="container">
    <div class="row wow fadeInUp">
      <div class="col-sm-4 text-center">
        <h5 class="pt-2 mb-3">You are just one click away!</h5>
      </div>
      <div class="col-sm-6">
        <div class="input-group">
          <input type="text" name="getstarted" class="form-control" placeholder="Your email" />
          <button class="btn input-group-addon text-uppercase" style="z-index: 3">Get Started</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();
