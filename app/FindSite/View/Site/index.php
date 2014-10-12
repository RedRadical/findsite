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
    </div>
<?php
include(VIEW_SHARED_PATH . 'footer.php');
?>