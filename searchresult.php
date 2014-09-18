<?php
/**
 * Created by PhpStorm.
 * User: xxfei
 * Date: 18/09/14
 * Time: 4:21 PM
 */
require_once("includes/header.php");
?>
<div class="content">
    <div class="container list-sites">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="backtosearch">
                    <a class="backtosearch-link" herf="#"><span class="glyphicon glyphicon-chevron-left"></span>back to search</a>
                </div>
                <div class="site-details">
                    <div class="site-address">
                        255 West End Avenue, Unit 4A
                        SURRY HILLS 2110
                    </div>
                    <div class="site-location-on-google-map">
                        <img src="images/mapsample.jpg" />
                    </div>
                    <div class="site-info">
                        <div class="col-left">
                            <div class="site-total-price">PRICE: $50,000,000</div>
                            <div class="site-unit-price">COST/UNIT: $1,000,000</div>
                        </div>
                        <div class="col-right">
                            <div class="nof-unit">Units: 15 | Retail: 5</div>
                            <div class="da-status">DA STATUS: <span class="color-approved">APPROVED</span></div>
                        </div>
                    </div>
                    <div class="separator"><hr class="site-details-hr"></div>
                    <div class="about-the-site">
                        <div class="about-title">
                            About the project
                        </div>
                        <div class="about-content">
                        Located in a Charming Prewar Co-op on Picturesque West End in the West 70s comes ther
                        perfect, renovated and completely gorgeous 2 bedroom Home. Upon entering the the large
                        foyer which has a custom bookcase and a large closet you are immediately transported
                        back to an age when size, comfort and details mattered! The well proportioned Greatroom
                        has 9+ foot ceilings and is large enough to entertain 25 of your closet friends yet cozy
                        enough to simply cuddle up with yourself.
                        </div>
                    </div>
                    <div class="separator"><hr class="site-details-hr"></div>
                    <div class="site-features">
                        <div class="features-title">
                            FEATURES
                        </div>
                        <div class="features-content">
                            <table class="table features-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="one-feature"><span class="glyphicon glyphicon-ok-sign"></span>Total renovation</div>
                                        </td>
                                        <td>
                                            <div class="one-feature"><span class="glyphicon glyphicon-ok-sign"></span>Car space</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="one-feature"><span class="glyphicon glyphicon-ok-sign"></span>Crown mouldings</div>
                                        </td>
                                        <td>
                                            <div class="one-feature"><span class="glyphicon glyphicon-ok-sign"></span>Hardwood floors</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="one-feature"><span class="glyphicon glyphicon-ok-sign"></span>Foyer</div>
                                        </td>
                                        <td>
                                            <div class="one-feature"><span class="glyphicon glyphicon-ok-sign"></span>Common area</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="separator"><hr class="site-details-hr"></div>
                    <div class="site-details-buttons">
                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">SAVE</button>
                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">ENQUIRE</button>
                    </div>
                </div>
                <div class="site-list-table">
                    <table class="table list-table">
                        <tbody>
                        <tr>
                            <td>
                                <div class="one-site-on-listsites">
                                    <img class="site-type-img" id="daapproved" src="images/da-approved.png" />
                                    <div class="site-info">
                                        <div class="suburb-name">SURRY HILLS</div>
                                        <div class="col-left">
                                            <div class="site-total-price">PRICE: $50,000,000</div>
                                            <div class="site-unit-price">COST/UNIT: $1,000,000</div>
                                        </div>
                                        <div class="col-right">
                                            <div class="nof-unit">Units: 15 | Retail: 5</div>
                                            <div class="da-status">DA STATUS: <span class="color-approved">APPROVED</span></div>
                                        </div>
                                        <div class="one-site-buttons">
                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">SAVE</button>
                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">ENQUIRE</button>
                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="view">VIEW FULL LISTING</button>
                                        </div>
                                        <div class="listed-time">Listed for 5 months</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="one-site-on-listsites bottom-site-on-listsites">
                                    <img class="site-type-img" id="daapproved" src="images/da-rawsite.png" />
                                    <div class="site-info">
                                        <div class="suburb-name">SURRY HILLS</div>
                                        <div class="col-left">
                                            <div class="site-total-price">PRICE: $50,000,000</div>
                                            <div class="site-unit-price">COST/UNIT: $1,000,000</div>
                                        </div>
                                        <div class="col-right">
                                            <div class="nof-unit">Units: 15 | Retail: 5</div>
                                            <div class="da-status">DA STATUS: <span class="color-rawsite">rawsite</span></div>
                                        </div>
                                        <div class="one-site-buttons">
                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">SAVE</button>
                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">ENQUIRE</button>
                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="view">VIEW FULL LISTING</button>
                                        </div>
                                        <div class="listed-time">Listed for 5 months</div>
                                        <div class="get-more-button-div">
                                            <a class="get-more-button" herf="#"><span class="glyphicon glyphicon-chevron-down"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once("includes/footer.php");
?>