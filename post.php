<?php
    $post_id = $_GET['postid'];

    if(isset($post_id)){
        define('WP_USE_THEMES', false);
        require('./blog-wordpress/wp-blog-header.php');

    }else {
        header("Location: /blog.php");
        exit();
    }
    $post_id = (int)$post_id;
    $post = get_post((int)$post_id);
?>
<?php  if(isset($post)) :?>
    <!DOCTYPE html>
    <html lang="en">
    <?php require_once('./src/head.php') ?>
    <body>
        <?php require_once('./src/header.php') ?>
        <main>
            <section id="postsectionid">
            <?php
                echo "<article id=\"postarticleid\">";
                echo "<h1>" . $post->post_title . "</h1>";
                echo $post->post_content;
                echo "</article>";                
            ?>
            </section>
        </main>
        <?php require_once('./src/footer.php') ?>
    </body>
    </html>
<?php else:
        header("Location: /blog.php");
        exit();
?>
<?php endif ?>