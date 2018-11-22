<!-- Navbar -->
<div id="navbar" class="navbar">
    <?php echo $top_bar; ?>
</div>
<!-- /navbar -->
<!-- Page container -->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar responsive">
        <?php echo $side_bar_left; ?>
    </div>
    <!-- /sidebar -->
    <!-- Page content -->
    <div class="main-content  full-remain">
        <div class="main-content-inner full-remain">
            <!-- Breadcrumbs line -->
            <?php // echo $breadcrumb; ?>
            <!-- /breadcrumbs line -->
            <!-- Content line -->
            <?php echo $content; ?>
            <!-- /Content line -->
        </div>
    </div>
    <!-- /page content -->
    <!-- Sidebar - right -->
    <?php echo $side_bar_right; ?>
    <!-- /sidebar - right -->
    <!-- absolutebar -->
    <div class="side-bar-absolute ace-settings-container">
<!--        --><?php //echo $side_bar_absolute; ?>
    </div>
    <!-- /absolutebar -->
    <div class="footer">
        <!-- Footer -->
        <?php echo $footer; ?>
        <!-- /footer -->
    </div>
</div>
<div class="message-loading-overlay customer-overlay" id="loading-overlay" style="display: none;">
    <i class="fa-spin ace-icon fa fa-refresh big-spin"></i>
</div>
<!-- /container -->