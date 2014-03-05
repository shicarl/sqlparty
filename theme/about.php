<?php
/*
Template Name: about
 * SQLParty 关于页面
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
*/
get_header();
?>      
    <div class="container">
            <ul class="thumbnails">
                <li  class="span4">
                <div class="thumbnail"> <img alt="我们" src="/wp-content/themes/party/img/daily.jpg" />
                    <div class="caption" >
                        <h3>我们</h3>
                        <p>一个DBA和一个前端。</p>
                        <p>联系我们:<img alt="email" src="/wp-content/themes/party/img/mail.png" /></p>
                        <p>Logo：</p>
                        <p><img alt="SQLPartyLogo" src="/wp-content/themes/party/img/logo.png" /><p>
                        <p style="text-align:right">@杭州</p>
                    </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail"> <img alt="站点愿景" src="/wp-content/themes/party/img/party.jpg" />
                    <div class="caption" >
                        <h3>站点愿景</h3>
                        <p class="pindent">SQLParty 旨在以SQL知识为中心，收集与分享IT实践过程中的最佳实践。</p>
                        <p class="pindent">SQL汇：提供不同SQL方言之间使用特点以及对比。为不了解SQL语言使用学习SQL以及了解某种环境（如Oracle)SQL方言的人快速学习和查询另一种环境（如MySQL）SQL方言。</p>
                        <p class="pindent">题炼：精选典型SQL相关问答，积累与分享SQL使用技巧。</p>
                        <p class="pindent">技术精华：原创IT文章，关于系统、数据库、NOSQL等各个方面，为攻城师、DBA提供有效参考。</p>
                        <p class="pindent">SQLParty以专业态度为SQL知识的横向与纵向扩展提供精品分享。</p>
                        <p class="pindent">欢迎关注与投稿!</p>
                    </div>
                </div>
              </li>              
              <li  class="span4">
                <div class="thumbnail"> <img alt="站点日志" src="/wp-content/themes/party/img/im2.jpg">
                    <div class="caption" >
                        <h3>站点日志</h3>
                        <ol>
                            <li><strong>起步</strong>——2013年5月19日注册域名sqlparty.com，基于WordPress搭建系统，采用Twenty Twelve主题，Just Another Blog~</li>
                            <img alt="版本1" src="/wp-content/themes/party/img/version1.png">
                            <li><strong>新版本</strong>——2013年7月23日开发完成自定义主题SQLParty，前端框架采用bootstrap。上线！</li>
                            <img alt="版本2" src="/wp-content/themes/party/img/version2.png">
                        </ol>
                    </div>
                </div>
              </li>
            </ul>
      </div> <!-- /container-fluid -->

<?php
get_footer();
?>
