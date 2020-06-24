<?php get_header(); ?>
    <div id="main" class="container">
        <!-- posts -->
        <div id="posts">
            <!--  -->
            <div class="post">
                <div class="post-header">
                    <h2>
                        <a href="">title</a>
                    </h2>
                    <div class="post-meta">
                        24/6/2020 [category]
                    </div>
                    <div class="post-content">
                        <div class="post-image">
                            <img src="img/noimage.png" alt="" width="100" height="100">
                        </div>
                        <div class="post-body">
                            <p>
                                paragraph
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <div class="prev">prev</div>
                <div class="next">next</div>
            </div>
        </div>
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>
    <!-- footer -->
<?php get_footer(); ?>