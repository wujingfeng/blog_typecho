<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y');?> <a href="<?php  print_r($this->options->row['siteUrl'])?>"><?php print_r($this->options->row['title']);?></a>.
    <?php _e(' <a href="https://beian.miit.gov.cn">蜀ICP备19017545号</a> '); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
