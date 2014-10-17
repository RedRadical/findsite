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
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="one-site">
                                    <img class="site-type-img" id="daapproved" src="/images/da-approved.png" />
                                    <div class="site-info">
                                        <div class="site-total-price">$50,000,000</div>
                                        <div class="nof-unit">Units: 15 | Retail: 5</div>
                                        <div class="site-unit-price">COST/UNIT: $1,000,000</div>
                                        <div class="da-status">DA STATUS: <span class="color-approved">APPROVED</span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="one-site">
                                    <img class="site-type-img" id="rawsite" src="/images/da-rawsite.png" />
                                    <div class="site-info">
                                        <div class="site-total-price">$50,000,000</div>
                                        <div class="nof-unit">Units: 15 | Retail: 5</div>
                                        <div class="site-unit-price">COST/UNIT: $1,000,000</div>
                                        <div class="da-status">DA STATUS: <span class="color-rawsite">Raw Site</span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="one-site">
                                    <img class="site-type-img" id="pending" src="/images/da-pending.png" />
                                    <div class="site-info">
                                        <div class="site-total-price">$50,000,000</div>
                                        <div class="nof-unit">Units: 15 | Retail: 5</div>
                                        <div class="site-unit-price">COST/UNIT: $1,000,000</div>
                                        <div class="da-status">DA STATUS: <span class="color-pending">Pending</span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="one-site">
                                    <img class="site-type-img" id="daapproved" src="/images/da-approved.png" />
                                    <div class="site-info">
                                        <div class="site-total-price">$50,000,000</div>
                                        <div class="nof-unit">Units: 15 | Retail: 5</div>
                                        <div class="site-unit-price">COST/UNIT: $1,000,000</div>
                                        <div class="da-status">DA STATUS: <span class="color-approved">APPROVED</span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="one-site">
                                    <img class="site-type-img" id="daapproved" src="/images/da-approved.png" />
                                    <div class="site-info">
                                        <div class="site-total-price">$50,000,000</div>
                                        <div class="nof-unit">Units: 15 | Retail: 5</div>
                                        <div class="site-unit-price">COST/UNIT: $1,000,000</div>
                                        <div class="da-status">DA STATUS: <span class="color-approved">APPROVED</span></div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
include(VIEW_SHARED_PATH . 'footer.php');
?>