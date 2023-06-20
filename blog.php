<!DOCTYPE html>
<html lang="en">
    <?php require_once('./vendor/autoload.php') ?>
    <?php require_once('./src/head.php') ?>
    <body>
        <?php require_once('./src/header.php') ?>
        
        <main>
            <section class="post-section">
            <?php 
                /* Short and sweet */
                define('WP_USE_THEMES', false);
                require('./blog-wordpress/wp-blog-header.php');
            ?>
            <?php
                $posts_number = (int)(wp_count_posts('post','')->publish);
                $posts_perpage_number = 4;

                $pagination = new Zebra_Pagination();
                $pagination->records($posts_number);
                $pagination->records_per_page($posts_perpage_number);
                $offset = ($pagination->get_page()-1) * $posts_perpage_number;

                $arguments = array('posts_per_page='. $posts_perpage_number .'&offset='. $offset .'&order=ASC&orderby=post_date');
                $posts = (array)get_posts($arguments);
               
                $count =0;
                for($i = $offset; $i<$posts_number && $count < $posts_perpage_number;$i++){
                    echo "<article id=\"postsarticleid\" class=\"post-article\">";
                    echo "<span>";
                    echo "<h3>" . $posts[$i]->post_title . "</h3>";
                    echo $posts[$i]->post_content;
                    echo "</span>";
                    echo "<span><a href=\"/post.php?postid=".$posts[$i]->ID."\">Read</a></span>";
                    echo "</article>";
                    $count++;
                }
            ?>
            </section>
            <?php if($posts_number > $posts_perpage_number) :?>
                <section id="section-pagination">
                    <?php $pagination->render(); ?>
                </section>
            <?php endif ?>
        </main>
        <?php require_once('./src/footer.php') ?>
    </body>
</html>