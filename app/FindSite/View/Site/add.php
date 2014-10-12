<?php
include(VIEW_SHARED_PATH . 'header.php');
?>
<div class="content">
    <div class="container list-a-site">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-title">LIST A SITE</div>
                <form class="form-horizontal" role="form">
                    <div class="form-group">

                            <input type="name" class="form-control" id="firstname" placeholder="First name">

                    </div>
                    <div class="form-group">

                            <select class="form-control">
                                <option value="">Type</option>
                                <option value="">House</option>
                                <option value="">Unit</option>
                                <option value="">Apartment</option>
                            </select>

                    </div>
                    <div class="form-group">

                            <input type="suburb" class="form-control" id="suburb" placeholder="Suburb">

                    </div>
                    <div class="form-group">
                        <div class="">
                            <textarea type="address" class="form-control" id="address" rows="2" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Undisclosed
                                </label>
                            </div>

                    </div>
                    <div class="form-group">

                            <select class="form-control">
                                <option value="">DA status</option>
                                <option value="">Raw</option>
                                <option value="">Approved</option>
                                <option value="">Pending</option>
                            </select>

                    </div>
                    <div class="form-group">

                            <input type="price" class="form-control" id="price" placeholder="Price">

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

                        <textarea type="description" class="form-control" id="description" rows="3" placeholder="Description"></textarea>

                    </div>
                    <div class="form-group">

                        <p class="declear-section">By submitting your listing you confirm that you accept the <a href="#">Terms of services</a> and <a href="#">Privacy Policy</a></p>

                    </div>
                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="btn btn-default blubtn-long">Submit</button>
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