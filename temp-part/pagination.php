<nav class="blog-pagination justify-content-center d-flex">
    <?php 
        echo paginate_links(array(
            'prev_text'          => __('<span aria-hidden="true"><span class="lnr lnr-chevron-left"></span></span>'),

            'next_text'          => __('<span aria-hidden="true"><span class="lnr lnr-chevron-right"></span></span>'),

            'type'               => 'list',
        ));
    ?>
</nav>