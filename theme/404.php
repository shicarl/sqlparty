<?php 
/**
 * SQLParty 404页面，另外也是"最新文章"页面
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */
get_header(); 
?>

<div class="container">
        <div class="row-fluid">
            <div class="span9">
            <?php
                echo "<h1>404 ".UNKNOWN_POST."</h1>";
                get_search_form();
            ?>
            </div>
            <div class="span3 well">
                <?php get_sidebar(); ?>
            </div>
        </div>
</div> <!-- container -->

<?php get_footer(); ?>



