<?php get_header();?>

<div class="hero-image">
  <div class="hero-text">
    <h1>I am Colby Emann</h1>
    <p>And I'm a pretty good web dev</p>
    <a href="https://colbyemann.com/" class="btn btn-success"> Find Out More </a>
  </div>
</div>



<div class="container pt-5 pb-5">

        <h1><?php the_title();?></h1>
        <div class="card mb-4"> 
        <div class="card-body">
        <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
        </div>
        <div class="card-body">
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <?php the_content();?>
        <?php endwhile; endif;?>
        </div>
    </div>
</div>
</div>

<?php get_footer();?>