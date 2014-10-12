<?php
/**
 * Created by PhpStorm.
 * User: xxfei
 * Date: 18/09/14
 * Time: 4:21 PM
 */
require_once("includes/header.php");
?>
<div id="main" data-controller="home" class="content">
    <div class="home">
        <div class="home-warp">
            <img class="img-home" src="images/homebg.jpg">
            <div class="inner-warp">
                <h1> find the right development site</h1>
                <p>we have over 20000 sites to choose from</p>
            </div>
        </div>
        <div class="home-search">
            <div class="home-search-bar">
                <form class="home-search-form" role="form">
                    <div class="line1">
                        <input class="form-control home-search-input" type="text" placeholder="Search by suburb or postcode">
                        <button type="submit" class="btn btn-primary blubtn-long">
                            Search
                        </button>
                    </div>
                    <div class="line2">
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
                <div class="btn-option">
                    <a href="#">Less options <span class="glyphicon glyphicon-chevron-up"></span></a>
                </div>
            </div>
    </div>
        <div class="container-fluid home-second-part">

                <div class="sec-wrap">
                    <div class="row">
                        <div class="rowone">
                            <div class="col-md-12">
                                <div class="col-one">
                                    <img class="rowone-img" src="images/homepic1.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="rowtwo">
                            <div class="col-md-4">
                                <div class="col-three">
                                    <img src="images/image1.jpg">
                                    <p class="for-sale">For Sale</p>
                                    <p class="description"><span>$50,000,000</span> 6 Bed at Forvead Street</p>
                                    <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Surry Hills</p>
                                    <p class="agent-info">Listed by <a href="#">Jodie Smith</a></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-three">
                                    <img  src="images/image2.jpg">
                                    <p class="introduction">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    <div class="navigation">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-split">
                                    <p class="description">senectus et netus et malesuada fames ac turpis egestas. Vestibulum</p>
                                    <div class="btn-check-blog"><button class="btn btn-primary blubtn-long">Check out our blog <span class="glyphicon glyphicon-chevron-right"></span></button></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="rowthree">
                            <div class="col-md-4">
                                <div class="col-three">
                                    <img class="img-circle" src="images/sample10.jpg">
                                    <div class="custom-links-title">An agent that works for your</div>
                                    <div class="custom-links-content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</div>
                                    <a href="#" class="custom-link">Meet our agents<span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-three">
                                    <img class="img-circle" src="images/sample11.jpg">
                                    <div class="custom-links-title">An agent that works for your</div>
                                    <div class="custom-links-content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</div>
                                    <div>Search <a href="#" class="custom-link">Rentals</a> or <a href="#" class="custom-link">Sales</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-three">
                                    <img class="img-circle" src="images/sample12.jpg">
                                    <div class="custom-links-title">An agent that works for your</div>
                                    <div class="custom-links-content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</div>
                                    <a href="#" class="custom-link">Download our app <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="rowfour">
                            <div class="col-md-8">
                                <div class="col-combined">
                                    <div class="video-content">
                                        <iframe width="430" height="215" src="//www.youtube.com/embed/vp5bVdXOLs4" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <div class="title">Accus. Ataero</div>
                                        <div class="content">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-three">
                                    <table class="social-network">
                                        <tr>
                                            <td>
                                                <img src="images/icon-fb.png">
                                            </td>
                                            <td>
                                                <img src="images/icon-youtube.png">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="images/icon-wechat.png">
                                            </td>
                                            <td>
                                                <img src="images/icon-linkedin.png">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
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
require_once("includes/footer.php");
?>