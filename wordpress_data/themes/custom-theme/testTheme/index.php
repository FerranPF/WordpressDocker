<?php 
    get_header();
?>

<html>
<body>
    <h1>This is a test webpage</h1>
    <?php 

    if(have_posts()){
        foreach (get_posts() as $post){
    ?>
            <div id= "post">
                <?php 
                echo "<h2>$post->post_title</h2>";
                echo "<p>$post->post_content</p>";
                ?>
            </div>
    <?php 
        }
    }
    ?>

</body>
</html>

<?php
get_footer();
?>