<?php
/**
 * SQLParty主题 标签页面
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */
get_header();

global $more;
$more = 0;
?>
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <h4><i class='icon-gift'></i>  分类: <?php echo single_tag_title( '', false ); ?></h4>
                <?php require_once("archive_ad_front.php"); ?>
                <hr>
                <?php get_template_part( 'content', 'list' ); ?>
                <?php require_once("archive_ad.php"); ?>
            </div>
            <div class="span3 well">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div> <!-- /container -->

<?php
get_footer();
?>

