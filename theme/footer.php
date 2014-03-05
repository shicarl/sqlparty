<?php
/**
 * SQLParty 所有页面底部的代码
 *
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */
?>
    <hr>
    <div class="container ">
        <div class="row">
            <div class="span3">
                <h6><i class="icon-leaf"></i>  友情链接</h6>
                <ul class="unstyled">
                    <li><a href="http://dev.mysql.com/doc/" title="MySQL" target="_blank">MySQL</a></li>
                    <li><a href="http://msdn.microsoft.com/en-us/library/bb545450.aspx" title="SQL Server" target="_blank">SQLServer</a></li>
                    <li><a href="http://www.oracle.com/technetwork/indexes/documentation/index.html" title="Oracle" target="_blank">Oracle</a></li>
                    <li><a href="http://pic.dhe.ibm.com/infocenter/db2luw/v10r1/index.jsp" title="DB2" target="_blank">DB2</a></li>
                </ul>
            </div>
            <div class="span3">
                <h6><i class="icon-leaf"></i>  SQL汇</h6>
                <ul class="unstyled">
                  <?php
                  $args = array(
                        'depth'        => 1,
                        'child_of'     => SQLPARTY_ID,
                        'title_li'     => ''
                    ); 
                    wp_list_pages($args);
                  ?>
                </ul>
            </div>
            <div class="span3">
                <h6><i class="icon-leaf"></i>  SQLParty</h6>
                <ul class="unstyled">
                    <li><a href="/about/" title="">关于</a></li>
                </ul>
            </div>
            <div class="span3">
                <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/3.0/deed.zh"><img alt="知识共享许可协议" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a><br />本站作品采用<a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.zh">知识共享署名 3.0 未本地化版本许可协议</a>进行许可，转载请注明出处。
            </div>
        </div>
    </div>
    
    <hr>
    
    <p style="text-align:center;">
<span style="font-family:Arial;font-size:13px;font-weight:bold;font-style:normal;text-decoration:none;color:#333333;">2013@SQLParty.com</span>
</p>

    <a id="scrollUp" href="#top" title="" style="position: fixed; z-index: 2147483647;"></a>
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="/wp-content/themes/party/js/bootstrap.min.js"></script>
    <script src="/wp-content/themes/party/js/bootstrap-datetimepicker.js"></script>
    <script src="/wp-content/themes/party/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
    <script src="/wp-content/themes/party/js/jquery.scrollUp.min.js"></script>
    <script>
    $(function(){
            $.scrollUp({
                  scrollName: 'scrollUp', // Element ID
                  topDistance: '300', // Distance from top before showing element (px)
                  topSpeed: 300, // Speed back to top (ms)
                  animation: 'fade', // Fade, slide, none
                  animationInSpeed: 200, // Animation in speed (ms)
                  animationOutSpeed: 200, // Animation out speed (ms)
                  scrollText: '', // Text for element
                  activeOverlay: false  // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            });
            $('.partysidebar').affix();
            $("#searchsubmit").addClass("btn btn-primary");
        });
    </script>
    <?php wp_footer(); ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-41193136-1', 'sqlparty.com');
      ga('send', 'pageview');

    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=26191530" charset="UTF-8"></script>
  </body>
</html>