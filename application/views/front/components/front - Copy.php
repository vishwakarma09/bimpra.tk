  <!-- TOP AREA -->
  <div class="top-area show-onload">
    <div class="bg-holder full">
      <div class="bg-parallax" style="background-image:url(img/banner/bg1.png);"></div>
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
            <div class="hot-price col-xs-offset-12"><img src="img/hot-price.png" align="texttop"></div>
          </div>
        </div>
      </div>			
					<?php
						$rows = $bimpra->GetFeaturedTours();
								foreach($rows as $row) { ?>
									<div class="col-md-6">
										<div class="thumb">
											<header class="thumb-header"> <a href="<?php echo $row['region'].'/'.$row['titleurl'] ?>" class="hover-img curved" href="#"> <img src="<?php echo 'img/'.$row['thumb'] ?>" alt="Image Alternative text" title="<?php echo $row['title'] ?>" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
											<div class="thumb-caption">
												<h4 class="thumb-title"><?php echo $row['title'] ?></h4>
												<p class="thumb-desc"><?php echo $row['slug'] ?></p>
											</div>
										</div>
									</div><?php
								}
					?>
          <div class="col-md-6">
            <div class="thumb">
              <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/assam.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
              <div class="thumb-caption">
                <h4 class="thumb-title">Assam</h4>
                <p class="thumb-desc">9 NIGHTS / 10 DAYS</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumb">
              <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/goa.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
              <div class="thumb-caption">
                <h4 class="thumb-title">Goa</h4>
                <p class="thumb-desc">3 NIGHTS / 4 DAYS</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumb">
              <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/golden-triangle.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
              <div class="thumb-caption">
                <h4 class="thumb-title">Golden Triangle</h4>
                <p class="thumb-desc">4 NIGHTS / 5 DAYS</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumb">
              <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/kerala.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
              <div class="thumb-caption">
                <h4 class="thumb-title">Kerala</h4>
                <p class="thumb-desc">6 NIGHTS / 7 DAYS</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="thumb">
              <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/rajasthan.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
              <div class="thumb-caption">
                <h4 class="thumb-title">Rajasthan</h4>
                <p class="thumb-desc">7 NIGHTS / 8 DAYS</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="divider-line ">
              <div class="hot-price"><img src="img/domestri-toure.png" align="texttop"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!--  <h2 class="text-center">Top Destinations</h2>-->
        <div class="gap">
          <div class="row row-wrap">
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/australia.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Australia</h4>
                  <p class="thumb-desc">10 NIGHTS / 11 DAYS</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/maldives.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Maldives</h4>
                  <p class="thumb-desc">3 NIGHTS / 4 DAYS</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/mauritius.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Mauritius</h4>
                  <p class="thumb-desc">4 NIGHTS / 5 DAYS</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/nepal.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Nepal</h4>
                  <p class="thumb-desc">5 NIGHTS / 6 DAYS</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/newzealand.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
                <div class="thumb-caption">
                  <h4 class="thumb-title">Newzealand</h4>
                  <p class="thumb-desc">9 NIGHTS / 10 DAYS</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumb">
                <header class="thumb-header"> <a class="hover-img curved" href="#"> <img src="img/southamerica.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i> </a> </header>
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
      </div>
    </div>
  </div>