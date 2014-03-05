<?php
/**
 * SQLParty SQL汇页面代码
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */

get_header(); 
?>
<div class="container">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- SQL汇上部 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-8350353148206752"
     data-ad-slot="7535609029"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="container">
      <ul class="breadcrumb">
        <li><a href="/"><i class="icon-home"></i> 首页</a> <span class="divider">/</span></li>
        <?php
            global $page;
            $output="<li class='active'>".get_the_title()."</li>";
            $p=get_post(get_the_ID());
            $parent_id = $p->post_parent;
            if(get_the_ID() <> SQLPARTY_ID)
            {
                while($parent_id)
                {
                    if(SQLPARTY_ID == $parent_id)
                        break;
                    $parent=get_post($parent_id);
                    $output="<li><a href='".get_permalink($parent->ID)  . "'>".$parent->post_title."</a><span class='divider'>/</span></li>".$output;
                    $parent_id=$parent->post_parent;
                }     
                if($parent_id == SQLPARTY_ID)
                {
                    $parent=get_post($parent_id);
                    $output="<li><a href='".get_permalink($parent->ID)  . "'>".$parent->post_title."</a><span class='divider'>/</span></li>".$output;
                    
                }
            }            
            echo $output;

        ?>
      </ul>
      <div class="row-fluid">
        <div class="span3">
          <div class="sidebar-nav leftsidebarnav">
              <ul class="nav nav-list">
              <?php             
                $path_array = explode("/", $_SERVER["REQUEST_URI"] );
                $parent_path= "/".$path_array[1]."/".$path_array[2]."/";
                $ppage = get_page_by_path($parent_path,"ARRAY_A");              
                  $args = array(
                            'child_of'     => $ppage["ID"],
                            'title_li'     => ''
                        ); 
                  //print_r($ppage);
                  echo "<li class='nav-header'><h4>".$ppage["post_title"]."</h4></li>";
                  wp_list_pages($args);
              ?>
              </ul>
           </div><!--/.well -->
        </div><!--/span3-->
        <div class="span9 " id="content">
            <?php
            if(have_posts())
            {
                the_post();
            ?>
            <div class="page-header">
            <h1><?php the_title(); ?></h1>
            </div>
            <div id="page-content">
                   <?php the_content(); ?>
            </div>
                   <ul>
                    <?php
                        $args = array(
                                    'child_of'     => get_the_ID(),
                                    'title_li'     => '',
                                    'link_before'  => '',
                                    'depth'        => 1
                                ); 
                      wp_list_pages($args);
                    ?>
                    </ul>
                <hr>
            <?php
            }
            ?>
            <?php comments_template( '', true ); ?>
        </div><!--/span6-->
      </div>
</div>

        <script>
            $(document).ready(function(){
                $(".current_page_item").addClass("active");
                $(".children").addClass("nav nav-list");
            });
        </script>

<?php get_footer(); ?>