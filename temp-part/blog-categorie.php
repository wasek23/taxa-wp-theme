<section class="blog_categorie_area">
    <div class="container">
        <div class="row">
            <?php 
                $categories =  get_categories();
                foreach($categories as $category){
                $category_id = get_cat_ID($category->cat_name);
                $category_link = get_category_link($category_id);
                $category_img = get_term_meta($category->term_taxonomy_id, 'category_img', true);
            ?>
                <div class="col-lg-4 mb-4">
                    <div class="categories_post">
                        <img src="<?php echo $category_img; ?>" alt="Category Image">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="<?php echo esc_url($category_link); ?>">
                                    <h5><?php echo $category->cat_name; ?></h5>
                                </a>
                                <div class="border_line"></div>
                                <p><?php echo $category->category_description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>