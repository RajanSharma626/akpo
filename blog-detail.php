<!doctype html>
<html lang="en">

<?php

if (isset($_GET['slug']) && $_GET['slug'] != '') {
    @include("admin/includes/conn.php");
    $slug = $_GET['slug'];

    // Prepare and execute query
    $stmt = $conn->prepare("SELECT * FROM blogs WHERE slug = ?");
    $stmt->bind_param("s", $slug);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $blog = $result->fetch_assoc();
    } else {
        // Blog not found, redirect to blogs page
        header("Location: blogs");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: blogs");
    exit();
}


$title = $blog['title'] . " | Acculedger KPO";
@include 'includes/head.php';
?>

<body>

    <?php
    @include 'includes/navbar.php';
    ?>

    <section class="blog-detail py-5">
        <div class="container">
            <div class="heading">
                <h1 class="mb-3"><?php echo $blog['title'] ?></h1>
            </div>

            <div class="banner-img border mb-3">
                <img src="admin/<?php echo $blog['banner_img'] ?>" class="img-fluid" alt="">
            </div>

            <div class="blog-content">
                <?php echo $blog['content'] ?>
            </div>
        </div>
    </section>

    <?php
    @include 'includes/blogs.php';
    @include 'includes/contact.php';
    @include 'includes/footer.php';
    ?>

</body>

</html>