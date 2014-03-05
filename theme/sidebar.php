<?php 
/**
 * SQLParty 页面侧边栏
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */
?>
<h4><i class="icon-tags"></i> 标签云</h4>
<div>
<?php 
if ( function_exists('wp_tag_cloud') ) 
{
    //wp_tag_cloud('smallest=8&largest=22&exclude=2,3,5,6');
    wp_tag_cloud('smallest=8&largest=22&number=60&order=RAND');
}
?>
</div>
<hr>
<div>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-8350353148206752";
/* 侧边栏top */
google_ad_slot = "7814810620";
google_ad_width = 250;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<hr>
<h4><i class='icon-fire'></i> 热门文章</h4>
<div>
<?php echo do_shortcode('[most_view number="10" ul_class="unstyled" li_class="hotclass"]'); ?>
</div>
    <hr>
    <h4><i class='icon-folder-close'></i> 文章归档</h4>
    <div>
        <ul class="unstyled">
        <?php
            wp_get_archives( "before=&show_post_count='true'" ); 
        ?>
        </ul>
    </div>