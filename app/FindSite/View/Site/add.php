<?php
include(VIEW_SHARED_PATH . 'header.php');
?>
<div id="main" class="content" data-controller="add-site">
    <div class="container list-a-site">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-title">LIST A SITE</div>
                <form id="form-addsite" class="form-horizontal" role="form">
                    <div class="form-group">
                            <select data-bind="value: siteType" class="form-control">
                                <option value="">Type</option>
                                <option value="1">House</option>
                                <option value="2">Unit</option>
                                <option value="3">Apartment</option>
                            </select>
                    </div>
                    <div class="form-group">
                            <input type="suburb" data-bind="value: suburb" name="suburb" class="form-control" id="suburb" placeholder="Suburb">
                    </div>
                    <div class="form-group">

                            <textarea type="address" data-bind="value: address" name="address" class="form-control" id="address" rows="2" placeholder="Address"></textarea>

                    </div>
                    <div class="form-group">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Undisclosed
                                </label>
                            </div>

                    </div>
                    <div class="form-group">
                        <select data-bind="value: daStatus" class="form-control">
                            <option value="">DA status</option>
                            <option value="1">Raw</option>
                            <option value="2">Approved</option>
                            <option value="3">Pending</option>
                        </select>
                    </div>
                    <div class="form-group">

                            <input type="price" data-bind="value: price" name="price" class="form-control" id="price" placeholder="Price">

                    </div>
                    <div class="form-group">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Undisclosed/POA
                                </label>
                            </div>

                    </div>
                    <div class="form-group">
                        <label>SCALE</label>
                        <div class="scale">
                            <div class="col-sm-6 left-col">
                                <input type="unit" class="form-control" id="unit" placeholder="Units/House">
                            </div>
                            <div class="col-sm-6 right-col">
                                <input type="retail" class="form-control" id="retail" placeholder="Retail/Unknown">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <textarea type="description" data-bind="value: description" name="description" class="form-control" id="description" rows="3" placeholder="Description"></textarea>

                    </div>
                    <div class="form-group">

                        <p class="declear-section">By submitting your listing you confirm that you accept the <a href="#">Terms of services</a> and <a href="#">Privacy Policy</a></p>

                    </div>
                    <div class="form-group">
                        <div class="">
                            <button data-bind="click: addSite" type="submit" class="btn btn-default blubtn-long">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include(VIEW_SHARED_PATH . 'footer.php');
?>