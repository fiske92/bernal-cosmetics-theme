<?php
$category = get_the_category();
$categoryName = $category[0]->name;
$categoryID = $category[0]->term_id;
$categoryPermalink = get_category_link($categoryID);
?>

<article class="mb-2 p-2 rounded bg-white">
    <div class="blog-single-container d-flex align-items-center"> 
        <a href="<?php the_permalink() ?>" class="d-flex align-items-center">
            <div class="image-container" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
            </div>
            <div class="content ms-3">
                    <a 
                        href="<?php echo $categoryPermalink; ?>"
                        class="text-uppercase post-category fs-8 d-inline-block mb-2 rounded bg-primary text-white"
                    >
                        <?php echo $categoryName; ?>
                    </a>
                <h2 class="fw-bold fs-5">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h2>
                <small>Objavljeno dana <?php echo get_the_date('d/m/Y') ?></small>
            </div>
        </a>
    </div>
</article>