<?php
include(VIEW_SHARED_PATH . 'header.php');
?>
    <div id="main" class="content" data-controller="site">
        <?php
        include(VIEW_SHARED_PATH . 'search-bar.php');
        ?>
        <div id="map-canvas"></div>
        <div id="site-infobox">
            <div class="popup-header">
                SURRY HILLS
            </div>
            <div class="popup-list">

            </div>
        </div>
    </div>
<?php
include(VIEW_SHARED_PATH . 'footer.php');
?>