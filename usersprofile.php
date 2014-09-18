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
                <div class="user-profile">
                    <div class="user-name-greeting">
                        Hi<span> Amy Jones</span>
                    </div>

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a class="user-profile-tab" href="#savedsites" role="tab" data-toggle="tab">Saved Sites</a></li>
                            <li><a class="user-profile-tab" href="#listedsites" role="tab" data-toggle="tab">Listed Sites</a></li>
                            <li><a class="user-profile-tab" href="#editprofile" role="tab" data-toggle="tab">Edit Profile</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="savedsites">
                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search your saved sites">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                            </span>
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

                                                    </div>
                                                    <div class="one-site-buttons">
                                                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
                                                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="view">VIEW FULL LISTING</button>
                                                    </div>
                                                    <div class="listed-time">Listed for 5 months</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="one-site-on-listsites">
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
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
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
                                                    <img class="site-type-img" id="daapproved" src="images/da-pending.png" />
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
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
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
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
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
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
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
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
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
                            </div>
                            <div class="tab-pane" id="listedsites">
                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search your listed sites">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                            </span>
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

                                                    </div>
                                                    <div class="one-site-buttons">
                                                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
                                                        <button type="button" class="btn btn-default blueroundcornerbtn-short" id="view">VIEW FULL LISTING</button>
                                                    </div>
                                                    <div class="listed-time">Listed for 5 months</div>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="one-site-on-listsites">
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
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
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
                                                    <img class="site-type-img" id="daapproved" src="images/da-pending.png" />
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
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
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
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
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
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
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
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="save">Email</button>
                                                            <button type="button" class="btn btn-default blueroundcornerbtn-short" id="enquire">delete</button>
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
                            </div>
                            <div class="tab-pane" id="editprofile">c</div>
                        </div>

                </div>
            </div>
        </div>
   </div>
</div>
<?php
require_once("includes/footer.php");
?>