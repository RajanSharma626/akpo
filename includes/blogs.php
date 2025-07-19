<section class="blog-section py-5 bg-light">
    <div class="container content-wrapper">
        <div class="section-title">
            <div class="section-subtitle mb-0 primary-color">Latest</div>
            <h2 class="section-main-title text-black">Blogs</h2>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="blog-slider-container">
                    <div class="blog-slider">
                        <?php
                        // Fetch member
                        $sql2 = "SELECT * FROM blogs";
                        $result2 = mysqli_query($conn, $sql2);
                        while ($blog = mysqli_fetch_assoc($result2)):
                        ?>
                            <div class="blog-card">
                                <img src="admin/<?php echo $blog['cover_img'] ?>"
                                    alt="IRS Tax Forms" class="blog-card-image img-fluid">
                                <div class="blog-card-content">
                                    <div class="blog-card-date"><?php echo $blog['timestamp'] ?></div>
                                    <h4 class="blog-card-title"><?php echo $blog['title'] ?>
                                    </h4>
                                    <p class="blog-card-excerpt"><?php echo $blog['short_desc'] ?></p>
                                    <a href="blog/<?php echo $blog['slug'] ?>" class="blog-card-link">Read More</a>
                                </div>
                            </div>
                        <?php endwhile ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>