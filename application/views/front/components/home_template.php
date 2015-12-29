<!-- TOP AREA -->
  <div class="top-area show-onload">
    <div class="bg-holder full">
      <div class="bg-parallax" style="background-image:url(<?php echo site_url();?>common/frontend/img/banner/bg1.png);"></div>
      <div class="bg-content">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="search-tabs search-tabs-bg mt50">
                <!-- <h1>Find Your Perfect Trip</h1>-->
                <div class="tabbable">
                  <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab"> <span >Flights</span></a> </li>
                    <li><a href="#tab-2" data-toggle="tab"><span >Hotels</span></a> </li>
                    <li><a href="#tab-3" data-toggle="tab"><span >Car</span></a> </li>
                    <li><a href="#tab-4" data-toggle="tab"> <span >Bus</span></a> </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-1">
                      <h4>Воок Domestic & International Flight tickets</h4>
                      <hr>
                      <form>
                        <div class="form-group form-group-lg form-group-icon-left">
                          <div class="bs-example">
                            <div class="btn-group btn-group-justified"> <a href="#" class="btn btn-primary active">Domestric</a> <a href="#" class="btn btn-primary">International</a> </div>
                          </div>
                        </div>
                        <div class="form-group form-group-lg form-group-icon-left">
                          <div class="btn-group">
                            <label class="btn " data-bind="css: { 'active': selectedOption() === 'Option 1' }"  style="font-size:11px;  padding:3px">
                              <input type="radio" name="options" id="option1" data-bind="checked: selectedOption, checkedValue: 'Option 1'">
                              ONE WAY </label>
                            <label class="btn" data-bind="css: { 'active': selectedOption() === 'Option 2' }" style="font-size:11px;  padding:3px">
                              <input type="radio" name="options" id="option2" data-bind="checked: selectedOption, checkedValue: 'Option 2'">
                              ROUND TRIP </label>
                            <label class="btn" data-bind="css: { 'active': selectedOption() === 'Option 3' }" style="font-size:11px; padding:3px">
                              <input type="radio" name="options" id="option3" data-bind="checked: selectedOption, checkedValue: 'Option 3'">
                              MULTY CITY / STOP OVER </label>
                          </div>
                        </div>
                        <div class="form-group form-group-lg form-group-icon-left">
                          <label>From</label>
                          <input class="typeahead form-control" placeholder="Type Departure City" type="text" />
                        </div>
                        <div class="form-group form-group-lg form-group-icon-left">
                          <label>To</label>
                          <input class="typeahead form-control" placeholder="Type Destination City" type="text" />
                        </div>
                        <div class="input-daterange" data-date-format="M d, D">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>Departure</label>
                                <input class="form-control" name="start" type="text" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>Return</label>
                                <input class="form-control" name="end" type="text" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group form-group-lg form-group-icon-left">
                          <div class="col-md-4" style="padding:8px 4px;" >
                            <div class="form-group">
                              <label class="control-label">Adult:(12+ yrs)</label>
                              <input class="form-control" type="number" value="1" min="1" max="10" />
                            </div>
                          </div>
                          <div class="col-md-4" style="padding:8px 4px;">
                            <div class="form-group">
                              <label class="control-label">Child(2-11 yrs)</label>
                              <input class="form-control" type="number" value="1" min="1" max="10" />
                            </div>
                          </div>
                          <div class="col-md-4" style="padding:8px 4px;">
                            <div class="form-group">
                              <label class="control-label">Infant:(0-2 yrs)</label>
                              <input class="form-control" type="number" value="1" min="1" max="10" />
                            </div>
                          </div>
                        </div>
                        <div class="form-group form-group-lg form-group-icon-left center-block">
                          <label>Class:</label>
                          <input class="typeahead form-control" placeholder="Economy" type="text" />
                        </div>
                        <button class="btn  btn-danger btn-md" type="submit">Search Flights</button>
                      </form>
                    </div>
                    <div class="tab-pane fade" >
                      <!-- id="tab-2"-->
                      <h2>Search for Cheap Flights</h2>
                      <form>
                        <div class="tabbable">
                          <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                            <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a> </li>
                            <li><a href="#flight-search-2" data-toggle="tab">One Way</a> </li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane fade in active" id="flight-search-1">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                    <label>From</label>
                                    <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                    <label>To</label>
                                    <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                  </div>
                                </div>
                              </div>
                              <div class="input-daterange" data-date-format="M d, D">
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                      <label>Departing</label>
                                      <input class="form-control" name="start" type="text" />
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                      <label>Returning</label>
                                      <input class="form-control" name="end" type="text" />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group form-group-lg form-group-select-plus">
                                      <label>Passngers</label>
                                      <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                          <input type="radio" name="options" />
                                          1</label>
                                        <label class="btn btn-primary">
                                          <input type="radio" name="options" />
                                          2</label>
                                        <label class="btn btn-primary">
                                          <input type="radio" name="options" />
                                          3</label>
                                        <label class="btn btn-primary">
                                          <input type="radio" name="options" />
                                          3+</label>
                                      </div>
                                      <select class="form-control hidden">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option selected="selected">4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="flight-search-2">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                    <label>From</label>
                                    <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                    <label>To</label>
                                    <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-3">
                                  <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                    <label>Departing</label>
                                    <input class="date-pick form-control" data-date-format="M d, D" type="text" />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-group-lg form-group-select-plus">
                                    <label>Passngers</label>
                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                      <label class="btn btn-primary active">
                                        <input type="radio" name="options" />
                                        1</label>
                                      <label class="btn btn-primary">
                                        <input type="radio" name="options" />
                                        2</label>
                                      <label class="btn btn-primary">
                                        <input type="radio" name="options" />
                                        3</label>
                                      <label class="btn btn-primary">
                                        <input type="radio" name="options" />
                                        3+</label>
                                    </div>
                                    <select class="form-control hidden">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option selected="selected">4</option>
                                      <option>5</option>
                                      <option>6</option>
                                      <option>7</option>
                                      <option>8</option>
                                      <option>9</option>
                                      <option>10</option>
                                      <option>11</option>
                                      <option>12</option>
                                      <option>13</option>
                                      <option>14</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Search for Flights</button>
                      </form>
                    </div>
                    <div class="tab-pane fade" >
                      <!--id="tab-3"-->
                      <h2>Find Your Perfect Home</h2>
                      <form>
                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                          <label>Where are you going?</label>
                          <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                        </div>
                        <div class="input-daterange" data-date-format="M d, D">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>Check-in</label>
                                <input class="form-control" name="start" type="text" />
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>Check-out</label>
                                <input class="form-control" name="end" type="text" />
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group form-group-lg form-group-select-plus">
                                <label>Rooms</label>
                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                  <label class="btn btn-primary active">
                                    <input type="radio" name="options" />
                                    1</label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="options" />
                                    2</label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="options" />
                                    3</label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="options" />
                                    3+</label>
                                </div>
                                <select class="form-control hidden">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option selected="selected">4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                  <option>13</option>
                                  <option>14</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group form-group-lg form-group-select-plus">
                                <label>Guests</label>
                                <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                  <label class="btn btn-primary active">
                                    <input type="radio" name="options" />
                                    1</label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="options" />
                                    2</label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="options" />
                                    3</label>
                                  <label class="btn btn-primary">
                                    <input type="radio" name="options" />
                                    3+</label>
                                </div>
                                <select class="form-control hidden">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option selected="selected">4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                  <option>13</option>
                                  <option>14</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Search for Vacation Rentals</button>
                      </form>
                    </div>
                    <div class="tab-pane fade">
                      <!-- id="tab-4"-->
                      <h2>Search for Cheap Rental Cars</h2>
                      <form>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                              <label>Pick-up Location</label>
                              <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                              <label>Drop-off Location</label>
                              <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                            </div>
                          </div>
                        </div>
                        <div class="input-daterange" data-date-format="M d, D">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>Pick-up Date</label>
                                <input class="form-control" name="start" type="text" />
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                <label>Pick-up Time</label>
                                <input class="time-pick form-control" value="12:00 AM" type="text" />
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>Drop-off Date</label>
                                <input class="form-control" name="end" type="text" />
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                <label>Drop-off Time</label>
                                <input class="time-pick form-control" value="12:00 AM" type="text" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Search for Rental Cars</button>
                      </form>
                    </div>
                    <div class="tab-pane fade" >
                      <!--id="tab-5"-->
                      <h2>Search for Activities</h2>
                      <form>
                        <div class="input-daterange" data-date-format="M d, D">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                <label>Where are you going?</label>
                                <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>From</label>
                                <input class="form-control" name="start" type="text" />
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>To</label>
                                <input class="form-control" name="end" type="text" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">Search for Activities</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--<div class="col-md-4">
                                <div class="loc-info text-right hidden-xs hidden-sm">
                                    <h3 class="loc-info-title"><img src="img/flags/32/fr.png" alt="Image Alternative text" title="Image Title" />Paris</h3>
                                    <p class="loc-info-weather"><span class="loc-info-weather-num">+31</span><i class="im im-rain loc-info-weather-icon"></i>
                                    </p>
                                    <ul class="loc-info-list">
                                        <li><a href="#"><i class="fa fa-building-o"></i> 277 Hotels from $36/night</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-home"></i> 130 Rentals from $44/night</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-car"></i> 294 Car Offers from $45/day</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-bolt"></i> 200 Activities this Week</a>
                                        </li>
                                    </ul><a class="btn btn-white btn-ghost mt10" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                                </div>
                            </div>-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END TOP AREA  -->
  <!-- <div class="gap"></div>-->
  <!--<div class="container">
            <div class="row row-wrap" data-gutter="60">
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header"><i class="fa fa-dollar box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title"><a class="text-darken" href="#">Best Price Guarantee</a></h5>
                            <p class="thumb-desc">Eu lectus non vivamus ornare lacinia elementum faucibus natoque parturient ullamcorper placerat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header"><i class="fa fa-lock box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title"><a class="text-darken" href="#">Trust & Safety</a></h5>
                            <p class="thumb-desc">Imperdiet nisi potenti fermentum vehicula eleifend elementum varius netus adipiscing neque quisque</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header"><i class="fa fa-thumbs-o-up box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                        </header>
                        <div class="thumb-caption">
                            <h5 class="thumb-title"><a class="text-darken" href="#">Best Travel Agent</a></h5>
                            <p class="thumb-desc">Curae urna fusce massa a lacus nisl id velit magnis venenatis consequat</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>-->
  <div class="clearfix" style="background:#ead6ba ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="divider-line">
            <div class="hot-price col-xs-offset-12"><img src="<?php echo site_url();?>common/frontend/img/hot-price.png" align="texttop"></div>
          </div>
        </div>
      </div>
			<div class="row">
					<?php
						$rows = $this->bimpra->GetFeaturedTours();
								foreach($rows as $row) { ?>
									<div class="col-md-6">
										<div class="thumb">
											<header class="thumb-header"> <a href="<?php echo site_url() .  'tours/' . $row->region . '/' . $row->state . '/'.$row->titleUrl; ?>" class="hover-img curved" href="#"> <img src="<?php echo site_url() . $row->thumb ?>" alt="Image Alternative text" title="<?php echo $row->title ?>" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
											<div class="thumb-caption">
												<h4 class="thumb-title"><?php echo $row->title ?></h4>
												<p class="thumb-desc"><?php echo $row->slug ?></p>
											</div>
										</div>
									</div><?php
								}
					?>
					<!--
          <div class="col-md-6">
            <div class="thumb">
              <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/assam.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
              <div class="thumb-caption">
                <h4 class="thumb-title">Assam</h4>
                <p class="thumb-desc">9 NIGHTS / 10 DAYS</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumb">
              <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/goa.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
              <div class="thumb-caption">
                <h4 class="thumb-title">Goa</h4>
                <p class="thumb-desc">3 NIGHTS / 4 DAYS</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumb">
              <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/golden-triangle.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
              <div class="thumb-caption">
                <h4 class="thumb-title">Golden Triangle</h4>
                <p class="thumb-desc">4 NIGHTS / 5 DAYS</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumb">
              <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/kerala.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
              <div class="thumb-caption">
                <h4 class="thumb-title">Kerala</h4>
                <p class="thumb-desc">6 NIGHTS / 7 DAYS</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumb">
              <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/rajasthan.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
              <div class="thumb-caption">
                <h4 class="thumb-title">Rajasthan</h4>
                <p class="thumb-desc">7 NIGHTS / 8 DAYS</p>
              </div>
            </div>
          </div> -->
					</div> <!-- end row-->
        </div> <!-- end container -->
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="divider-line ">
              <div class="hot-price"><img src="<?php echo site_url();?>common/frontend/img/domestri-toure.png" align="texttop"></div>
            </div>
          </div>
        </div>
      </div>
  <!--    <div class="container">
        <div class="gap">
          <div class="row row-wrap">
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/australia.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Australia</h4>
                  <p class="thumb-desc">10 NIGHTS / 11 DAYS</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/maldives.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Maldives</h4>
                  <p class="thumb-desc">3 NIGHTS / 4 DAYS</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/mauritius.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Mauritius</h4>
                  <p class="thumb-desc">4 NIGHTS / 5 DAYS</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/nepal.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Nepal</h4>
                  <p class="thumb-desc">5 NIGHTS / 6 DAYS</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/newzealand.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Newzealand</h4>
                  <p class="thumb-desc">9 NIGHTS / 10 DAYS</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="<?php echo site_url();?>common/frontend/img/southamerica.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Southamerica</h4>
                  <p class="thumb-desc">8 NIGHTS / 9 DAYS</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pagination pagination-centered">
          <ul>
            <li><a href="#">←</a></li>
            <li class="active"><a href="#">1</a></li>
            <li class="disabled"><a href="#">...</a></li>
            <li><a href="#">10</a></li>
            <li><a href="#">→</a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="divider-line"> </div>
          </div>
        </div>
      </div> -->
			
			<div class="container clearfix">
						<form action="" method="POST" role="form">
							<div class="row">
							
								<div class="col-md-6 form-group">
								
									<select name="selCountry" id="selCountry" name="selCountry" class="form-control back-normal">
										<option value="AF">Afghanistan</option>
										<option value="AX">Åland Islands</option>
										<option value="AL">Albania</option>
										<option value="DZ">Algeria</option>
										<option value="AS">American Samoa</option>
										<option value="AD">Andorra</option>
										<option value="AO">Angola</option>
										<option value="AI">Anguilla</option>
										<option value="AQ">Antarctica</option>
										<option value="AG">Antigua and Barbuda</option>
										<option value="AR">Argentina</option>
										<option value="AM">Armenia</option>
										<option value="AW">Aruba</option>
										<option value="AU">Australia</option>
										<option value="AT">Austria</option>
										<option value="AZ">Azerbaijan</option>
										<option value="BS">Bahamas</option>
										<option value="BH">Bahrain</option>
										<option value="BD">Bangladesh</option>
										<option value="BB">Barbados</option>
										<option value="BY">Belarus</option>
										<option value="BE">Belgium</option>
										<option value="BZ">Belize</option>
										<option value="BJ">Benin</option>
										<option value="BM">Bermuda</option>
										<option value="BT">Bhutan</option>
										<option value="BO">Bolivia, Plurinational State of</option>
										<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
										<option value="BA">Bosnia and Herzegovina</option>
										<option value="BW">Botswana</option>
										<option value="BV">Bouvet Island</option>
										<option value="BR">Brazil</option>
										<option value="IO">British Indian Ocean Territory</option>
										<option value="BN">Brunei Darussalam</option>
										<option value="BG">Bulgaria</option>
										<option value="BF">Burkina Faso</option>
										<option value="BI">Burundi</option>
										<option value="KH">Cambodia</option>
										<option value="CM">Cameroon</option>
										<option value="CA">Canada</option>
										<option value="CV">Cape Verde</option>
										<option value="KY">Cayman Islands</option>
										<option value="CF">Central African Republic</option>
										<option value="TD">Chad</option>
										<option value="CL">Chile</option>
										<option value="CN">China</option>
										<option value="CX">Christmas Island</option>
										<option value="CC">Cocos (Keeling) Islands</option>
										<option value="CO">Colombia</option>
										<option value="KM">Comoros</option>
										<option value="CG">Congo</option>
										<option value="CD">Congo, the Democratic Republic of the</option>
										<option value="CK">Cook Islands</option>
										<option value="CR">Costa Rica</option>
										<option value="CI">Côte d'Ivoire</option>
										<option value="HR">Croatia</option>
										<option value="CU">Cuba</option>
										<option value="CW">Curaçao</option>
										<option value="CY">Cyprus</option>
										<option value="CZ">Czech Republic</option>
										<option value="DK">Denmark</option>
										<option value="DJ">Djibouti</option>
										<option value="DM">Dominica</option>
										<option value="DO">Dominican Republic</option>
										<option value="EC">Ecuador</option>
										<option value="EG">Egypt</option>
										<option value="SV">El Salvador</option>
										<option value="GQ">Equatorial Guinea</option>
										<option value="ER">Eritrea</option>
										<option value="EE">Estonia</option>
										<option value="ET">Ethiopia</option>
										<option value="FK">Falkland Islands (Malvinas)</option>
										<option value="FO">Faroe Islands</option>
										<option value="FJ">Fiji</option>
										<option value="FI">Finland</option>
										<option value="FR">France</option>
										<option value="GF">French Guiana</option>
										<option value="PF">French Polynesia</option>
										<option value="TF">French Southern Territories</option>
										<option value="GA">Gabon</option>
										<option value="GM">Gambia</option>
										<option value="GE">Georgia</option>
										<option value="DE">Germany</option>
										<option value="GH">Ghana</option>
										<option value="GI">Gibraltar</option>
										<option value="GR">Greece</option>
										<option value="GL">Greenland</option>
										<option value="GD">Grenada</option>
										<option value="GP">Guadeloupe</option>
										<option value="GU">Guam</option>
										<option value="GT">Guatemala</option>
										<option value="GG">Guernsey</option>
										<option value="GN">Guinea</option>
										<option value="GW">Guinea-Bissau</option>
										<option value="GY">Guyana</option>
										<option value="HT">Haiti</option>
										<option value="HM">Heard Island and McDonald Islands</option>
										<option value="VA">Holy See (Vatican City State)</option>
										<option value="HN">Honduras</option>
										<option value="HK">Hong Kong</option>
										<option value="HU">Hungary</option>
										<option value="IS">Iceland</option>
										<option value="IN">India</option>
										<option value="ID">Indonesia</option>
										<option value="IR">Iran, Islamic Republic of</option>
										<option value="IQ">Iraq</option>
										<option value="IE">Ireland</option>
										<option value="IM">Isle of Man</option>
										<option value="IL">Israel</option>
										<option value="IT">Italy</option>
										<option value="JM">Jamaica</option>
										<option value="JP">Japan</option>
										<option value="JE">Jersey</option>
										<option value="JO">Jordan</option>
										<option value="KZ">Kazakhstan</option>
										<option value="KE">Kenya</option>
										<option value="KI">Kiribati</option>
										<option value="KP">Korea, Democratic People's Republic of</option>
										<option value="KR">Korea, Republic of</option>
										<option value="KW">Kuwait</option>
										<option value="KG">Kyrgyzstan</option>
										<option value="LA">Lao People's Democratic Republic</option>
										<option value="LV">Latvia</option>
										<option value="LB">Lebanon</option>
										<option value="LS">Lesotho</option>
										<option value="LR">Liberia</option>
										<option value="LY">Libya</option>
										<option value="LI">Liechtenstein</option>
										<option value="LT">Lithuania</option>
										<option value="LU">Luxembourg</option>
										<option value="MO">Macao</option>
										<option value="MK">Macedonia, the former Yugoslav Republic of</option>
										<option value="MG">Madagascar</option>
										<option value="MW">Malawi</option>
										<option value="MY">Malaysia</option>
										<option value="MV">Maldives</option>
										<option value="ML">Mali</option>
										<option value="MT">Malta</option>
										<option value="MH">Marshall Islands</option>
										<option value="MQ">Martinique</option>
										<option value="MR">Mauritania</option>
										<option value="MU">Mauritius</option>
										<option value="YT">Mayotte</option>
										<option value="MX">Mexico</option>
										<option value="FM">Micronesia, Federated States of</option>
										<option value="MD">Moldova, Republic of</option>
										<option value="MC">Monaco</option>
										<option value="MN">Mongolia</option>
										<option value="ME">Montenegro</option>
										<option value="MS">Montserrat</option>
										<option value="MA">Morocco</option>
										<option value="MZ">Mozambique</option>
										<option value="MM">Myanmar</option>
										<option value="NA">Namibia</option>
										<option value="NR">Nauru</option>
										<option value="NP">Nepal</option>
										<option value="NL">Netherlands</option>
										<option value="NC">New Caledonia</option>
										<option value="NZ">New Zealand</option>
										<option value="NI">Nicaragua</option>
										<option value="NE">Niger</option>
										<option value="NG">Nigeria</option>
										<option value="NU">Niue</option>
										<option value="NF">Norfolk Island</option>
										<option value="MP">Northern Mariana Islands</option>
										<option value="NO">Norway</option>
										<option value="OM">Oman</option>
										<option value="PK">Pakistan</option>
										<option value="PW">Palau</option>
										<option value="PS">Palestinian Territory, Occupied</option>
										<option value="PA">Panama</option>
										<option value="PG">Papua New Guinea</option>
										<option value="PY">Paraguay</option>
										<option value="PE">Peru</option>
										<option value="PH">Philippines</option>
										<option value="PN">Pitcairn</option>
										<option value="PL">Poland</option>
										<option value="PT">Portugal</option>
										<option value="PR">Puerto Rico</option>
										<option value="QA">Qatar</option>
										<option value="RE">Réunion</option>
										<option value="RO">Romania</option>
										<option value="RU">Russian Federation</option>
										<option value="RW">Rwanda</option>
										<option value="BL">Saint Barthélemy</option>
										<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
										<option value="KN">Saint Kitts and Nevis</option>
										<option value="LC">Saint Lucia</option>
										<option value="MF">Saint Martin (French part)</option>
										<option value="PM">Saint Pierre and Miquelon</option>
										<option value="VC">Saint Vincent and the Grenadines</option>
										<option value="WS">Samoa</option>
										<option value="SM">San Marino</option>
										<option value="ST">Sao Tome and Principe</option>
										<option value="SA">Saudi Arabia</option>
										<option value="SN">Senegal</option>
										<option value="RS">Serbia</option>
										<option value="SC">Seychelles</option>
										<option value="SL">Sierra Leone</option>
										<option value="SG">Singapore</option>
										<option value="SX">Sint Maarten (Dutch part)</option>
										<option value="SK">Slovakia</option>
										<option value="SI">Slovenia</option>
										<option value="SB">Solomon Islands</option>
										<option value="SO">Somalia</option>
										<option value="ZA">South Africa</option>
										<option value="GS">South Georgia and the South Sandwich Islands</option>
										<option value="SS">South Sudan</option>
										<option value="ES">Spain</option>
										<option value="LK">Sri Lanka</option>
										<option value="SD">Sudan</option>
										<option value="SR">Suriname</option>
										<option value="SJ">Svalbard and Jan Mayen</option>
										<option value="SZ">Swaziland</option>
										<option value="SE">Sweden</option>
										<option value="CH">Switzerland</option>
										<option value="SY">Syrian Arab Republic</option>
										<option value="TW">Taiwan, Province of China</option>
										<option value="TJ">Tajikistan</option>
										<option value="TZ">Tanzania, United Republic of</option>
										<option value="TH">Thailand</option>
										<option value="TL">Timor-Leste</option>
										<option value="TG">Togo</option>
										<option value="TK">Tokelau</option>
										<option value="TO">Tonga</option>
										<option value="TT">Trinidad and Tobago</option>
										<option value="TN">Tunisia</option>
										<option value="TR">Turkey</option>
										<option value="TM">Turkmenistan</option>
										<option value="TC">Turks and Caicos Islands</option>
										<option value="TV">Tuvalu</option>
										<option value="UG">Uganda</option>
										<option value="UA">Ukraine</option>
										<option value="AE">United Arab Emirates</option>
										<option value="GB">United Kingdom</option>
										<option value="US">United States</option>
										<option value="UM">United States Minor Outlying Islands</option>
										<option value="UY">Uruguay</option>
										<option value="UZ">Uzbekistan</option>
										<option value="VU">Vanuatu</option>
										<option value="VE">Venezuela, Bolivarian Republic of</option>
										<option value="VN">Viet Nam</option>
										<option value="VG">Virgin Islands, British</option>
										<option value="VI">Virgin Islands, U.S.</option>
										<option value="WF">Wallis and Futuna</option>
										<option value="EH">Western Sahara</option>
										<option value="YE">Yemen</option>
										<option value="ZM">Zambia</option>
										<option value="ZW">Zimbabwe</option>
									</select>
								</div>
							
								<div class="col-md-6 form-group">
								
									<select name="" id="selDuration" name="selDuration" class="form-control back-normal">
										<option value="7">7 Days</option>
										<option value="15">15 Days</option>
										<option value="21">21 Days</option>
										<option value="30">30 Days</option>
										<option value="60">2 Month</option>
									</select>
								</div>
							
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<input type="text" id="travelDate" name="travelDate" placeholder="Travel Date" class="form-control back-normal"/>
								</div>
								
								<div class="col-md-6 form-group">
									<input type="text" id="locationIndia" name="locationIndia" placeholder="Where in India" class="form-control back-normal"/>
								</div>
							</div>
							<div class="row">
								
								<div class="col-md-3 form-group">
									<select name="" id="selCountPerson" name="selCountPerson" class="form-control back-normal">
										<option value="1">1 person</option>
										<option value="2">2 people</option>
										<option value="3">3 people</option>
										<option value="4">4 people</option>
										<option value="5">5 people</option>
										<option value="6">6 people</option>
										<option value="7">7 people</option>
										<option value="8">8 people</option>
										<option value="9">9 people</option>
										<option value="10">10 people</option>
									</select>
								</div>
								
								<div class="col-md-3 form-group">
									<select name="" id="selCountChildren" name="selCountChildren" class="form-control back-normal">
										<option value="0">0 kid</option>
										<option value="1">1 kid</option>
										<option value="2">2 kid</option>
										<option value="3">3 kid</option>
										<option value="4">4 kid</option>
										<option value="5">5 kid</option>
									</select>
								</div>
								
								<div class="col-md-6 form-group">
									<select name="selBudget" id="selBudget" class="form-control back-normal">
										<option value="0">5,000 - 15,000</option>
										<option value="1">15,000 - 25,000</option>
										<option value="2">25,000 - 40,000</option>
										<option value="3">40,000 - 60,000</option>
										<option value="4">60,000 - 1,00,000</option>
										<option value="5">1,00,000 and above</option>
									</select> 
								</div>
							
							</div>
							
							<div class="row">
								<div class="col-md-12 form-group">
									<textarea name="tourReuqirements" id="tourReuqirements" rows="5" cols="12" class="form-control"></textarea>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<p><b>Contact details:</b></p>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 form-group">
									<input type="text" id="departureCity" name="departureCity" class="form-control" placeholder="Departure City">
								</div>
								
								<div class="col-md-6 form-group">
									<input type="text" id="departureCountry" name="departureCountry" class="form-control" placeholder="Departure Country">
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 form-group">
									<input type="text" id="contactName" name="contactName" class="form-control" placeholder="Name">
								</div>
								
								<div class="col-md-6 form-group">
									<input type="text" id="contactEmail" name="contactEmail" class="form-control" placeholder="Email">
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-1 form-group">
									<input type="text" id="contactCountryCode" name="contactCountryCode" class="form-control" placeholder="+91" value="+91">
								</div>
								
								<div class="col-md-11 form-group">
									<input type="text" id="contactPhoneNumber" name="contactPhoneNumber" class="form-control" placeholder="Mobile Number">
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-warning btn-block" id="btnGetTourQuote">
										Get Your Quote	
									</button>
								</div>
							</div>
							
							<div class="row"><br></div>
						</form>
			</div>
