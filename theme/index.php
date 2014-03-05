<?php
/**
 * SQLParty 首页
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */
get_header();
?>

    <div class="container">
        <div class="row">
          <div class="span9">
            <div  id="home_newest">
                <p>本站以SQL知识的分享和传播为中心，延伸至SQL方言、数据库、系统、NOSQL等各方面内容的研究和分享。</p>
                <p><strong>让我们以数据之名，分享之义，齐聚SQLParty！</strong></p>
                <div>
                <script type="text/javascript"><!--
                    google_ad_client = "ca-pub-8350353148206752";
                    /* 首页横幅 */
                    google_ad_slot = "3384611027";
                    google_ad_width = 728;
                    google_ad_height = 90;
                    //-->
                    </script>
                    <script type="text/javascript"
                    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                </div>
                <hr>
                <?php get_template_part( 'content', 'list' ); ?>
            </div>
          </div>
          <div class="span3">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail"> <img alt="SQL汇" src="/wp-content/themes/party/img/party.jpg" />
                    <div class="caption" >
                        <h3>SQL汇</h3>
                        <p class="pindent">            精细讲解SQL语言。基于简单博客系统的示例数据库，详细讲解MySQL、SQLServer、Oracle、DB2下使用的SQL的异同，以及各RDBMS下SQL方言的特色用法。</p>
                        <p class="pindent">
                        这里各RDBMS的测试版本：
                        <ul style="margin-left:60px;">
                        <li>MySQL 5.5</li>
                        <li>SQLServer 2008</li>
                        <li>Oracle 11g</li>
                        <li>DB2 9.5</li>
                        </ul>
                        </p>
                        <p><a class="btn btn-success" href="/sqlparty/">更多 &raquo;</a></p>
                    </div>
                </div>
              </li>
              <li  class="span3">
                <div class="thumbnail"> <img alt="技术精华" src="/wp-content/themes/party/img/im2.jpg">
                    <div class="caption" >
                        <h3>技术精华</h3>
                        <p class="pindent">原创IT文章以及精选转载文章，以标签化的形式进行分类，大致包括：
                        <ol style="margin-left:60px;">
                            <li><strong>题炼</strong>——精选典型SQL相关问答，积累与分享SQL使用技巧</li>
                            <li><strong>数据库</strong>——RDBMS的细节关注，如搭建，调优</li>
                            <li><strong>系统</strong>——操作系统、网络、运维等IT基础系统相关内容，如搭建、使用、配置等</li>
                            <li><strong>大数据</strong>——NOSQL，Not Only SQL，大数据时代，SQL的有力补充</li>
                            <li><strong>其他</strong>——更多分类标签</li>
                        </ol>
                        </p>
                        <p><a class="btn btn-success" href="/morenav/">更多 &raquo;</a></p>
                    </div>
                </div>
              </li>
              <li class="span3">
              <div class="thumbnail">
                    <div class="caption" >
                        <h3><i class="icon-tags"></i> 标签云</h3>
                        <div>
                        <?php 
                        if ( function_exists('wp_tag_cloud') ) 
                        {
                            //wp_tag_cloud('smallest=8&largest=22&exclude=2,3,5,6');
                            wp_tag_cloud('smallest=8&largest=22&number=0');
                        }
                        ?>
                        </div>
                    </div>
                </div>
              </li>
              <li class="span3">
              <div class="thumbnail">
                    <div class="caption" >
                        <script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 首页右侧底 -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:250px;height:250px"
                             data-ad-client="ca-pub-8350353148206752"
                             data-ad-slot="9291543828"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
              </li>
            </ul>
          </div>          
        </div>

                
    </div> <!-- /container -->
      
<?php
get_footer();
?>
