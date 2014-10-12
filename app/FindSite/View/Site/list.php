<?php
include(VIEW_SHARED_PATH . 'header.php');
?>
<div class="content">
    <div class="container-fluid horizontal-search">
        <div class="container horizontal-search-bar">
            <div class="row">
                <form class="form-inline" role="form">

                    <input class="form-control" type="text" placeholder="ENTER POST CODE">

                    <select class="form-control">
                        <option value="">DA Status</option>
                        <option value="">Approved</option>
                        <option value="">Pending</option>
                        <option value="">Raw Site</option>
                    </select>

                    <select class="form-control">
                        <option value="">Scale</option>
                        <option value="">Small</option>
                        <option value="">Medium</option>
                        <option value="">Large</option>
                    </select>

                    <select class="form-control">
                        <option value="">Price</option>
                        <option value="">Small</option>
                        <option value="">Medium</option>
                        <option value="">Large</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-horizontal-search-bar-search">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </form>
                <div class="map-list-switch">
                    <button type="submit" class="btn btn-primary btn-horizontal-search-bar-map-list">
                        <span class="glyphicon glyphicon-map-marker"></span> MAP
                    </button>
                    <button type="submit" class="btn btn-primary btn-horizontal-search-bar-map-list">
                        <span class="glyphicon glyphicon-list"></span> LIST
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container list-sites">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <label class="sort-label">SORT BY:</label>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle btn-list-site-dropdown" type="button" id="listSitesdropdownMenu1" data-toggle="dropdown">
                        Dropdown
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu listsites-dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a class="item-listsites-dropdown-menu" role="menuitem" tabindex="-1" href="#">PRICE-HIGHEST FIRST</a></li>
                        <li role="presentation"><a class="item-listsites-dropdown-menu" role="menuitem" tabindex="-1" href="#">PRICE-LOWEST FIRST</a></li>
                        <li role="presentation"><a class="item-listsites-dropdown-menu" role="menuitem" tabindex="-1" href="#">DA APPROVED ONLY</a></li>
                    </ul>
                </div>
                <div class="site-list-table">
                    <table class="table list-table">
                        <tbody>
                        <tr>
                            <td>
                                <div class="one-site-on-listsites">
                                    <img class="site-type-img" id="daapproved" src="/images/da-approved.png" />
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

                                    </div>
                                    <div class="one-site-buttons">
                                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">SAVE</button>
                                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">ENQUIRE</button>
                                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="view">VIEW FULL LISTING</button>
                                    </div>
                                    <div class="listed-time">Listed for 5 months</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="one-site-on-listsites">
                                    <img class="site-type-img" id="daapproved" src="/images/da-rawsite.png" />
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
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="one-site-on-listsites">
                                    <img class="site-type-img" id="daapproved" src="/images/da-pending.png" />
                                    <div class="site-info">
                                        <div class="suburb-name">SURRY HILLS</div>
                                        <div class="col-left">
                                            <div class="site-total-price">PRICE: $50,000,000</div>
                                            <div class="site-unit-price">COST/UNIT: $1,000,000</div>
                                        </div>
                                        <div class="col-right">
                                            <div class="nof-unit">Units: 15 | Retail: 5</div>
                                            <div class="da-status">DA STATUS: <span class="color-pending">pending</span></div>
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
                                <div class="one-site-on-listsites">
                                    <img class="site-type-img" id="daapproved" src="/images/da-approved.png" />
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
                                <div class="one-site-on-listsites">
                                    <img class="site-type-img" id="daapproved" src="/images/da-approved.png" />
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
                                <div class="one-site-on-listsites">
                                    <img class="site-type-img" id="daapproved" src="/images/da-approved.png" />
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
                        </tbody>
                    </table>
                </div>
                <div class="list-pagination">
                    <label class="page-indicator">
                        1-6 of 500 listings
                    </label>
                    <ul class="pagination custom-pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">500</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include(VIEW_SHARED_PATH . 'footer.php');
?>