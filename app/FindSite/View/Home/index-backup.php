<?php
include(VIEW_SHARED_PATH . 'header.php');
?>
    <div id="main" data-controller="home" class="content">
        <div class="container-fluid" id="home-map">
            <div id="home-map-canvas">

            </div>
            <div class="row">
                <div id="home-map-box">
                    <div class="home-browse-search">
                        <label>BROWSE</label>
                        <div class="map-list-switch">
                            <a href="#" class="btn btn-default blubtn-short">MAP</a>
                            <a href="#" class="btn btn-default blubtn-short">LIST</a>
                        </div>
                    </div>
                    <div class="home-browse-search">
                        <label>FIND</label>
                        <form role="form">
                            <input class="form-control" type="text" placeholder="POST CODE">
                            <select class="form-control">
                                <option value="">DA Status</option>
                                <option value="">Approved</option>
                                <option value="">Pending</option>
                                <option value="">Raw Site</option>
                            </select>
                            <select class="form-control">
                                <option value="">SCALE</option>
                                <option value="1">&lt; 50</option>
                                <option value="2">50 - 100</option>
                                <option value="3">100 and above</option>
                            </select>
                            <select class="form-control">
                                <option value="">PRICE</option>
                                <option>&lt; 5 millions</option>
                                <option>5 - 20 millions</option>
                                <option>20 millions and above</option>
                            </select>
                            <button type="submit" class="btn btn-default blubtn-long">Search Now</button>
                        </form>
                    </div>
                </div>
                <div id="expend-button">
                    <button class="btn btn-primary btn-expend" type="submit">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div id="home-carousel">
                    <div class="carousel-box">
                        <div class="inner clearfix">
                            <a href="#"><img src="images/image1.jpg" alt/></a>
                            <div class="carousel-info">
                                <div class="status color-approved">Approved</div>
                                <div class="description"><a href="#">$5,000,000 40 Units 10 Retails</a></div>
                                <div class="location"><span class="glyphicon glyphicon-map-marker"></span> Surry Hill</div>
                                <div class="agent">
                                    <img src="images/sample10.jpg" class="img-circle"/> <span>Listed By <a href="#">Agent A</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="inner clearfix">
                            <a href="#"><img src="images/image1.jpg" alt/></a>
                            <div class="carousel-info">
                                <div class="status color-approved">Approved</div>
                                <div class="description"><a href="#">$5,000,000 40 Units 10 Retails</a></div>
                                <div class="location"><span class="glyphicon glyphicon-map-marker"></span> Surry Hill</div>
                                <div class="agent">
                                    <img src="images/sample10.jpg" class="img-circle"/> <span>Listed By <a href="#">Agent A</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="inner clearfix">
                            <a href="#"><img src="images/image1.jpg" alt/></a>
                            <div class="carousel-info">
                                <div class="status color-approved">Approved</div>
                                <div class="description"><a href="#">$5,000,000 40 Units 10 Retails</a></div>
                                <div class="location"><span class="glyphicon glyphicon-map-marker"></span> Surry Hill</div>
                                <div class="agent">
                                    <img src="images/sample10.jpg" class="img-circle"/> <span>Listed By <a href="#">Agent A</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="inner clearfix">
                            <a href="#"><img src="images/image1.jpg" alt/></a>
                            <div class="carousel-info">
                                <div class="status color-approved">Approved</div>
                                <div class="description"><a href="#">$5,000,000 40 Units 10 Retails</a></div>
                                <div class="location"><span class="glyphicon glyphicon-map-marker"></span> Surry Hill</div>
                                <div class="agent">
                                    <img src="images/sample10.jpg" class="img-circle"/> <span>Listed By <a href="#">Agent A</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="inner clearfix">
                            <a href="#"><img src="images/image1.jpg" alt/></a>
                            <div class="carousel-info">
                                <div class="status color-approved">Approved</div>
                                <div class="description"><a href="#">$5,000,000 40 Units 10 Retails</a></div>
                                <div class="location"><span class="glyphicon glyphicon-map-marker"></span> Surry Hill</div>
                                <div class="agent">
                                    <img src="images/sample10.jpg" class="img-circle"/> <span>Listed By <a href="#">Agent A</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid custom-links">
            <div class="container custom-links-inner-row-1">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/sample10.jpg" alt="pic1" class="img-circle">
                        <div class="custom-links-title">An agent that works for your</div>
                        <div class="custom-links-content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/sample11.jpg" alt="pic1" class="img-circle">
                        <div class="custom-links-title">An agent that works for your</div>
                        <div class="custom-links-content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/sample12.jpg" alt="pic1" class="img-circle">
                        <div class="custom-links-title">An agent that works for your</div>
                        <div class="custom-links-content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container custom-links-inner-row-2">
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
    </div>
<?php
include(VIEW_SHARED_PATH . 'footer.php');
?>