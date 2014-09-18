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
    <div class="container agent-list">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <table class="table table-bordered agent-table">
                    <thead>
                        <tr>
                            <th colspan="3">
                                <div class="agent-table-head">
                                    <div class="title">AGENTS</div>
                                    <div class="description"> Findsite Agents partner with you throughout your apartment search, providing their
                                    expertise and deep knowledge of the Sydney rental and sales market to help you
                                    find a home you love. <span>Click an agent to view their profile.</span>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                            <td>
                                <img src="images/sample10.jpg" class="img-circle agent-photo" />
                                <div class="agent-name">Angel Yang</div>
                                <div class="agent-company-name">Knight Frank</div>
                                <button class="btn btn-default blueroundcornerbtn-short">view listing</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require_once("includes/footer.php");
?>