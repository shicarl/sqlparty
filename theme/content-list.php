<?php
/**
 * SQLParty
 * 循环生成多篇文章，以及分页。
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */
                if ( have_posts() )
                {
                ?>
                <div>
                
                <?php
                    while ( have_posts() )
                    {
                        the_post();
                ?>
                
                        <div id="post-<?php the_ID(); ?>">
                            <h1><a href="<?php the_permalink() ?>" title="链接至 <?php the_title(); ?>"><?php the_title(); ?></a></h1>
                            <?php 
                                echo "<span><i class='icon-calendar'></i>  ".get_the_date("Y年m月d日")."</span>  <i class='icon-gift'></i>  ";
                                the_category(' ');
                                echo "  <i class='icon-tags'></i>  ";                                 
                                the_tags(""," • ","");
                            ?>
                            <i class="icon-comment"></i> <?php comments_popup_link( '<span class="leave-reply">发表评论</span>', "1 条评论", "% 条评论"); ?>
                            <div class="entry-content">
                            <?php 
                                the_content("<span class='more'>...更多 ".get_the_title()."</span>"); 
                            ?>
                            </div>
                        </div>
                        <hr >
                <?php
                    }
                ?>
                </div> 
                <?php
                }
                else
                {
                ?>
                <div>
                <h3>抱歉，没有找到文章</h3>
                <?php get_search_form(); ?>
                </div>
                <?php
                }
                ?>
                
                <?php
                if($wp_query->max_num_pages != 1)
                {               
                    global $wp_query, $wp_rewrite;
                    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

                    $pagination = array(
                        'base' => @add_query_arg('paged','%#%'),
                        'format' => ”,
                        'total' => $wp_query->max_num_pages,
                        'current' => $current,
                        'show_all' => false,
                        'type' => 'array', //原为plain
                        'prev_text' => '上一页',
                        'next_text' => '下一页'
                    );

                    if( $wp_rewrite->using_permalinks() )
                    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

                    if( !empty($wp_query->query_vars['s']) )
                    $pagination['add_args'] = array('s'=>get_query_var('s'));

                    $pagination_array = paginate_links($pagination);
                ?>
                <div class="pagination">
                  <ul >
                <?php
                $size=count($pagination_array);
                for($i=0;$i<$size;$i++)
                {
                    //if($pagination_array[$i]=="...")
                    //    echo ""
                    echo "<li>".$pagination_array[$i]."</li>";
                }
                ?>
                  </ul>
                </div>   
                <?php
                }
                ?> 