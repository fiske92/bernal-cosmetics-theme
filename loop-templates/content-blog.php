<article>
    <div class="blog-single-container mb-3 d-flex align-items-center flex-column flex-md-row"> 
        <a href="<?php the_permalink() ?>">
            <div class="image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
            </div>
            <div class="content ms-3">
                <h4 class="fw-bold"><?php the_title(); ?></h4>
                <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
            </div>
        </a>
    </div>
</article>