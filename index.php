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
    <div class="container home-row1">
        <div class="row">
            <div class="col-md-3">
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
                            <option value="">Scale</option>
                            <option value="">Small</option>
                            <option value="">Medium</option>
                            <option value="">Large</option>
                        </select>
                        <button type="submit" class="btn btn-default blubtn-long">Search Now</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-6">
                <div class="expend-button">
                    <button class="btn btn-primary btn-expend" type="submit">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                    </button>
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
require_once("includes/footer.php");
?>