<?php
include(VIEW_SHARED_PATH . 'header.php');
?>
    <div id="main" data-controller="home" class="content home">
        <div class="home-warp">

        </div>
        <div class="home-search">
            <div class="home-search-bar">
                <div class="title">Find the Right Development Site</div>
                <form class="home-search-form" role="form">
                    <div id="home-search-main">
                        <input class="form-control home-search-input" type="text" placeholder="Search by suburb or postcode">
                        <button type="submit" class="btn btn-primary blubtn-long">
                            Search
                        </button>
                    </div>
                    <div id="home-search-optional" data-bind="visible: optionsIsShown()">
                        <div class="form-group">
                            <label for="propertytype">Property Type</label>
                            <select class="form-control">
                                <option value="">Any</option>
                                <option value="">House</option>
                                <option value="">Unit</option>
                                <option value="">Apartment</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Price Range</label>
                            <select class="form-control">
                                <option value="">Any</option>
                                <option value="">&lt; 50</option>
                                <option value="">50 - 100</option>
                                <option value="">100 and above</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="scale">Scale</label>
                            <select class="form-control">
                                <option value="">Any</option>
                                <option value="">&lt; 50</option>
                                <option value="">50 - 100</option>
                                <option value="">100 and above</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dastatus">DA Status</label>
                            <select class="form-control">
                                <option value="">Any</option>
                                <option value="">Approved</option>
                                <option value="">Pending</option>
                                <option value="">Raw</option>
                            </select>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Include surrounding suburbs
                            </label>
                        </div>
                    </div>
                </form>
                <div class="map-list-switch">
                    <button type="submit" class="btn btn-primary blubtn-short active">
                        MAP
                    </button>
                    <button type="submit" class="btn btn-primary blubtn-short">
                        LIST
                    </button>
                </div>
                <div class="btn-option">
                    <a href="javascript:;" data-bind="click: toggleOptions, visible: optionsIsShown()">Less options <span class="glyphicon glyphicon-chevron-up" data-bind=""></span></a>
                    <a href="javascript:;" data-bind="click: toggleOptions, visible: !optionsIsShown()" style="display:none;">More options <span class="glyphicon glyphicon-chevron-down" data-bind=""></span></a>
                </div>
            </div>
        </div>
        <div class="container home-second-part">
            <div class="row rowfour">
                <div class="col-md-8 custom-col">
                    <div class="col-combined">
                        <div class="description">
                            <div class="address">8-10 Park Road, Homebush NSW</div>
                            <ul>
                                <li>DA Approved residential development site</li>
                                <li>32 Apartments</li>
                                <li>Located 320M from the station</li>
                                <li>20KM from the CBD</li>
                            </ul>
                            <div class="feature-sale">
                                <p>For sale by EOI</p>
                                <p>Closing Tuesday 18 November at 4PM</p>
                            </div>
                        </div>
                        <img src="images/image1.jpg" class="featured-img">
                    </div>
                </div>
                <div class="col-md-4 custom-col">
                    <div class="col-three">
                        <img src="images/image1.jpg" class="featured-img">
                    </div>
                </div>
            </div>
            <div class="row rowtwo">
                <div class="col-md-4 custom-col">
                    <div class="col-three">
                        <img src="images/image1.jpg">
                        <div class="description">
                            <div class="address">8-10 Park Road, Homebush NSW</div>

                            <div class="feature-sale">
                                <p>DA Pending, 25 Units, $108,000 Per Unit</p>
                                <p>Listed by Regency Real Estate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 custom-col">
                    <div class="col-three">
                        <img src="images/image1.jpg">
                        <div class="description">
                            <div class="address">8-10 Park Road, Homebush NSW</div>

                            <div class="feature-sale">
                                <p>DA Pending, 25 Units, $108,000 Per Unit</p>
                                <p>Listed by Regency Real Estate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 custom-col">
                    <div class="col-three">
                        <img src="images/image1.jpg">
                        <div class="description">
                            <div class="address">8-10 Park Road, Homebush NSW</div>

                            <div class="feature-sale">
                                <p>DA Pending, 25 Units, $108,000 Per Unit</p>
                                <p>Listed by Regency Real Estate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rowtwo">
                <div class="col-md-4 custom-col">
                    <div class="col-three">
                        <img src="images/image1.jpg">
                        <div class="description">
                            <div class="address">8-10 Park Road, Homebush NSW</div>

                            <div class="feature-sale">
                                <p>DA Pending, 25 Units, $108,000 Per Unit</p>
                                <p>Listed by Regency Real Estate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 custom-col">
                    <div class="col-three">
                        <img src="images/image1.jpg">
                        <div class="description">
                            <div class="address">8-10 Park Road, Homebush NSW</div>

                            <div class="feature-sale">
                                <p>DA Pending, 25 Units, $108,000 Per Unit</p>
                                <p>Listed by Regency Real Estate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 custom-col">
                    <div class="col-three">
                        <img src="images/image1.jpg">
                        <div class="description">
                            <div class="address">8-10 Park Road, Homebush NSW</div>

                            <div class="feature-sale">
                                <p>DA Pending, 25 Units, $108,000 Per Unit</p>
                                <p>Listed by Regency Real Estate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid custom-links-inner-row-2">
            <div class="row">
                <ul>
                    <li><a href="#"><img src="images/4.jpg" alt="pic4"></a></li>
                    <li><a href="#"><img src="images/5.jpg" alt="pic4"></a></li>
                    <li><a href="#"><img src="images/4.jpg" alt="pic4"></a></li>
                    <li><a href="#"><img src="images/5.jpg" alt="pic4"></a></li>
                    <li><a href="#"><img src="images/4.jpg" alt="pic4"></a></li>
                    <li><a href="#"><img src="images/5.jpg" alt="pic4"></a></li>
                </ul>
            </div>
        </div>
    </div>
<?php
include(VIEW_SHARED_PATH . 'footer.php');
?>