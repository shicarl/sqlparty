<?php
/**
 * SQLParty 单篇文章的展示页面
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
                <div id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <?php 
                        echo "<i class='icon-calendar'></i>  <span>".get_the_date("Y年m月d日")."</span> | <i class='icon-gift'></i>  "; 
                        the_category(' ');
                        echo " | <i class='icon-tags'></i>  ";
                        the_tags(""," • ","");
                    ?>
                    | <i class="icon-eye-open"></i> 阅读次数[ <?php $view=do_shortcode('[post_view]'); echo str_replace(')','',str_replace('(','',$view)); ?> ]
                    | <i class="icon-comment"></i> <?php comments_popup_link( '<span class="leave-reply">发表评论</span>', "1 条评论", "% 条评论"); ?>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                </div>
                <div style="margin-top: 15px; font-style: italic">
                    <p>
                    <i class="icon-info-sign"></i> <strong>原创文章，转载请注明：</strong>
                    文章地址
                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                    </p>
                </div>
                <div>
                <script type="text/javascript"><!--
                google_ad_client = "ca-pub-8350353148206752";
                /* 单篇文章底 */
                google_ad_slot = "4582142625";
                google_ad_width = 728;
                google_ad_height = 90;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
                </div>
                <hr>
                <div class="well" style="white-space:inherit">
                    <?php comments_template( '', true ); ?>
                </div>
            </div>
            <div class="span3 well">
                <?php get_sidebar(); ?>
            </div>
        </div>
	</div><!-- #container -->    
<?php get_footer(); ?>