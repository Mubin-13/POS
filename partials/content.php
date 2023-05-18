<div class="content">
        <!-- Main charts -->
        <div class="row">
          <div class="col-xl-7">
            <!-- Traffic sources -->
            <div class="card">


              <div class="dropdown-center">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Select Shop Location
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">ONE</a></li>
                  <li><a class="dropdown-item" href="#">TWO two</a></li>
                  <li><a class="dropdown-item" href="#">TREEE three</a></li>
                </ul>
              </div>

              <div class="card-header header-elements-inline">
                <h6 class="card-title">Sales statistics Daily</h6>
                <div class="header-elements">
                  <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                    <label class="form-check-label">
                      Live update:
                      <input type="checkbox" class="form-input-switchery" checked data-fouc />
                    </label>
                  </div>
                </div>
              </div>

              <div class="card-body py-0">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                        <i class="icon-plus3"></i>
                      </a>
                      <div>
                        <div class="font-weight-semibold"> Today Total Sale</div>
                        <span class="text-muted">2,349 avg</span>
                      </div>
                    </div>
                    <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                  </div>

                  <div class="col-sm-3">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <a href="#"
                        class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
                        <i class="icon-watch2"></i>
                      </a>
                      <div>
                        <div class="font-weight-semibold">Total received (sales)</div>
                        <span class="text-muted">08:20 avg</span>
                      </div>
                    </div>
                    <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                  </div>

                  <div class="col-sm-3">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <a href="#"
                        class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
                        <i class="icon-people"></i>
                      </a>
                      <div>
                        <div class="font-weight-semibold">Today total Purchase</div>
                        <span class="text-muted"><span class="badge badge-mark border-success mr-2"></span>
                          5,378 avg</span>
                      </div>
                    </div>
                    <div class="w-75 mx-auto mb-3" id="total-online"></div>
                  </div>

                  <div class="col-sm-3">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                        <i class="icon-plus3"></i>
                      </a>
                      <div>
                        <div class="font-weight-semibold">Today Total Expense</div>
                        <span class="text-muted"><span class="badge badge-mark border-danger mr-2"></span>
                          5,378 avg</span>
                      </div>
                    </div>
                    <div class="w-75 mx-auto mb-3" id="server-load2"></div>
                  </div>
                </div>
              </div>

              <div class="chart position-relative" id="traffic-sources"></div>
            </div>
            <!-- /traffic sources -->
          </div>

          <div class="col-xl-5">
            <!-- Sales stats -->
            <div class="card">

              <div class="dropdown-center">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Select Shop Location
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">All</a></li>
                  <li><a class="dropdown-item" href="#">Shop ONE</a></li>
                  <li><a class="dropdown-item" href="#">Shop TWO</a></li>
                </ul>
              </div>

              <div class="card-header header-elements-inline">
                <h6 class="card-title">Sales statistics</h6>
                <div class="header-elements">
                  <select class="form-control custom-select" id="select_date">
                    <option value="val1">June, 29 - July, 28</option>
                    <option value="val2">July, 29 - August 28</option>
                    <option value="val3" selected>August, 29 - September, 28</option>
                    <option value="val4">September, 29 - October, 28 </option>
                  </select>
                </div>
              </div>




              <div class="card-body py-0">
                <div class="row text-center">
                  <div class="col-3">
                    <div class="mb-3">
                      <span class="text-muted font-size-lg">Sales</span>
                      <h5 class="font-weight-semibold mb-0">5,689</h5>
                    </div>
                  </div>

                  <div class="col-3">
                    <div class="mb-3">
                      <span class="text-muted font-size-lg">Purchase</span>
                      <h5 class="font-weight-semibold mb-0">32,568</h5>
                    </div>
                  </div>

                  <div class="col-3">
                    <div class="mb-3">
                      <span class="text-muted font-size-lg">Sales Return</span>
                      <h5 class="font-weight-semibold mb-0">$23,464</h5>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="mb-3">
                      <span class="text-muted font-size-lg">Purchase Return</span>
                      <h5 class="font-weight-semibold mb-0">$23,464</h5>
                    </div>
                  </div>
                </div>
              </div>

              <div class="chart mb-2" id="app_sales"></div>
              <div class="chart" id="monthly-sales-stats"></div>
            </div>
            <!-- /sales stats -->
          </div>
        </div>
        <!-- /main charts -->

        <!-- Dashboard content -->
        <div class="row">
          <div class="col-xl-8">
            <!-- Marketing campaigns -->
            <div class="card">
              <div class="card-header header-elements-sm-inline">
                <h6 class="card-title">This Week Sales & Purchase</h6>
                <div class="header-elements">
                  <span class="badge bg-success badge-pill">28 active</span>
                  <div class="list-icons ml-3">
                    <div class="dropdown">
                      <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i
                          class="icon-menu7"></i></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                        <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
                        <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-header header-elements-inline">
                <h5 class="card-title ">Chart transforms</h5>
                <div class="header-elements">
                  <button type="button" class="btn btn-info btn-sm" id="btn-transform" data-animation="tada">Transform</button>
                  <div class="list-icons ml-3">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container">
                  <div class="chart" id="c3-transform"></div>
                </div>
              </div>


              <!-- <div
                  class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap"
                >
                  
                <div class="d-flex align-items-center mb-3 mb-sm-0">
                    <div id="campaigns-donut"></div>
                    <div class="ml-3">
                      <h5 class="font-weight-semibold mb-0">
                        38,289
                        <span
                          class="text-success font-size-sm font-weight-normal"
                          ><i class="icon-arrow-up12"></i> (+16.2%)</span
                        >
                      </h5>
                      <span class="badge badge-mark border-success mr-1"></span>
                      <span class="text-muted">May 12, 12:30 am</span>
                    </div>
                  </div>

                  <div class="d-flex align-items-center mb-3 mb-sm-0">
                    <div id="campaign-status-pie"></div>
                    <div class="ml-3">
                      <h5 class="font-weight-semibold mb-0">
                        2,458
                        <span
                          class="text-danger font-size-sm font-weight-normal"
                          ><i class="icon-arrow-down12"></i> (-4.9%)</span
                        >
                      </h5>
                      <span class="badge badge-mark border-danger mr-1"></span>
                      <span class="text-muted">Jun 4, 4:00 am</span>
                    </div>
                  </div>

                  <div>
                    <a href="#" class="btn bg-indigo-300"
                      ><i class="icon-statistics mr-2"></i> View report</a
                    >
                  </div>
                </div> -->

              <div class="table-responsive">
                <table class="table text-nowrap">
                  <thead>
                    <tr class="table-active table-border-double">
                      <td colspan="5">Today</td>
                      <td class="text-right">
                        <span class="progress-meter" id="today-progress" data-progress="40">
                          <a href="#" class="btn bg-blue-400"><i class="icon-statistics mr-2"></i> Report</a>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <th class="">Product</th>
                      <th>SKU</th>
                      <th>Quantity</th>
                      <th>Grand Total</th>
                      <th>Catagory</th>
                      <th class="text-center" style="width: 20px">
                        <i class="icon-arrow-down12"></i>
                      </th>
                    </tr>
                    
                  </thead>
                  <tbody>

                    <td>
                      <div class="d-flex align-items-center">
                        <div class="mr-3">
                          <a href="#">
                            <img src="../../../../global_assets/images/New Arrivals/01.webp" class="rounded-circle"
                              width="80" height="80" alt="" />
                          </a>
                        </div>
                        <div>
                          <a href="#" class="text-default font-weight-semibold">Facebook</a>
                          <div class="text-muted font-size-sm">
                            <span class="badge badge-mark border-blue mr-1"></span>
                            02:00 - 03:00
                          </div>
                        </div>
                      </div>
                    </td>
                    <td><span class="text-muted">Mintlime</span></td>
                    <td>
                      <span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.43%</span>
                    </td>
                    <td>
                      <h6 class="font-weight-semibold mb-0">$5,489</h6>
                    </td>
                    <td><span class="badge bg-blue">Sports</span></td>
                    <td class="text-center">
                      <div class="list-icons">
                        <div class="dropdown">
                          <a href="#" class="list-icons-item" data-toggle="dropdown">
                            <i class="icon-menu9"></i>
                          </a>
    
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                            <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                          </div>
                        </div>
                      </div>
                    </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/03.webp" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Youtube videos</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-danger mr-1"></span>
                              13:00 - 14:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">CDsoft</span></td>
                      <td>
                        <span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 3.12%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$2,592</h6>
                      </td>
                      <td><span class="badge bg-danger">Mens</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/04.png" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Spotify ads</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-grey-400 mr-1"></span>
                              10:00 - 11:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">Diligence</span></td>
                      <td>
                        <span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> -
                          8.02%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$1,268</h6>
                      </td>
                      <td><span class="badge bg-grey-400">Bagpack</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/05.webp" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Twitter ads</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-grey-400 mr-1"></span>
                              04:00 - 05:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">Deluxe</span></td>
                      <td>
                        <span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 2.78%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$7,467</h6>
                      </td>
                      <td><span class="badge bg-grey-400">Kids</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>

                    <tr class="table-active table-border-double">
                      <td colspan="5">Yesterday</td>
                      <td class="text-right">
                        <span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/06.webp" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Bing campaign</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-success mr-1"></span>
                              15:00 - 16:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">Metrics</span></td>
                      <td>
                        <span class="text-danger"><i class="icon-stats-decline2 mr-2"></i> -
                          5.78%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$970</h6>
                      </td>
                      <td>
                        <span class="badge bg-success-400">Pending</span>
                      </td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/07.webp" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Amazon ads</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-danger mr-1"></span>
                              18:00 - 19:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">Blueish</span></td>
                      <td>
                        <span class="text-success-600"><i class="icon-stats-growth2 mr-2"></i> 6.79%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$1,540</h6>
                      </td>
                      <td><span class="badge bg-blue">Active</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#">
                              <img src="../../../../global_assets/images/New Arrivals/08.jpg" class="rounded-circle"
                                width="80" height="80" alt="" />
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold">Dribbble ads</a>
                            <div class="text-muted font-size-sm">
                              <span class="badge badge-mark border-blue mr-1"></span>
                              20:00 - 21:00
                            </div>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-muted">Teamable</span></td>
                      <td>
                        <span class="text-danger"><i class="icon-stats-decline2 mr-2"></i>
                          9.83%</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$8,350</h6>
                      </td>
                      <td><span class="badge bg-danger">Closed</span></td>
                      <td class="text-center">
                        <div class="list-icons">
                          <div class="dropdown">
                            <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i
                                class="icon-menu7"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="#" class="dropdown-item"><i class="icon-file-stats"></i> View
                                statement</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Edit
                                campaign</a>
                              <a href="#" class="dropdown-item"><i class="icon-file-locked"></i> Disable
                                campaign</a>
                              <div class="dropdown-divider"></div>
                              <a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /marketing campaigns -->

            <!-- Quick stats boxes -->
            <div class="row">
              <div class="col-lg-4">
                <!-- Members online -->
                <div class="card bg-teal-400">
                  <div class="card-body">
                    <div class="d-flex">
                      <h3 class="font-weight-semibold mb-0">3,450</h3>
                      <span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
                    </div>

                    <div>
                      Members online
                      <div class="font-size-sm opacity-75">489 avg</div>
                    </div>
                  </div>

                  <div class="container-fluid">
                    <div id="members-online"></div>
                  </div>
                </div>
                <!-- /members online -->
              </div>

              <div class="col-lg-4">
                <!-- Current server load -->
                <div class="card bg-pink-400">
                  <div class="card-body">
                    <div class="d-flex">
                      <h3 class="font-weight-semibold mb-0">49.4%</h3>
                      <div class="list-icons ml-auto">
                        <div class="dropdown">
                          <a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i
                              class="icon-cog3"></i></a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
                            <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed
                              log</a>
                            <a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
                            <a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div>
                      Current server load
                      <div class="font-size-sm opacity-75">34.6% avg</div>
                    </div>
                  </div>

                  <div id="server-load"></div>
                </div>
                <!-- /current server load -->
              </div>

              <div class="col-lg-4">
                <!-- Today's revenue -->
                <div class="card bg-blue-400">
                  <div class="card-body">
                    <div class="d-flex">
                      <h3 class="font-weight-semibold mb-0">$18,390</h3>
                      <div class="list-icons ml-auto">
                        <a class="list-icons-item" data-action="reload"></a>
                      </div>
                    </div>

                    <div>
                      Today's revenue
                      <div class="font-size-sm opacity-75">$37,578 avg</div>
                    </div>
                  </div>

                  <div id="today-revenue"></div>
                </div>
                <!-- /today's revenue -->
              </div>
            </div>
            <!-- /quick stats boxes -->

            <!-- Support tickets -->
            <div class="card">
              <div class="card-header header-elements-sm-inline">
                <h6 class="card-title">Support tickets</h6>
                <div class="header-elements">
                  <a class="text-default daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
                    <i class="icon-calendar3 mr-2"></i>
                    <span></span>
                  </a>
                </div>
              </div>

              <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
                <div class="d-flex align-items-center mb-3 mb-md-0">
                  <div id="tickets-status"></div>
                  <div class="ml-3">
                    <h5 class="font-weight-semibold mb-0">
                      14,327
                      <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i>
                        (+2.9%)</span>
                    </h5>
                    <span class="badge badge-mark border-success mr-1"></span>
                    <span class="text-muted">Jun 16, 10:00 am</span>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                  <a href="#"
                    class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                    <i class="icon-alarm-add"></i>
                  </a>
                  <div class="ml-3">
                    <h5 class="font-weight-semibold mb-0">1,132</h5>
                    <span class="text-muted">total tickets</span>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                  <a href="#"
                    class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                    <i class="icon-spinner11"></i>
                  </a>
                  <div class="ml-3">
                    <h5 class="font-weight-semibold mb-0">06:25:00</h5>
                    <span class="text-muted">response time</span>
                  </div>
                </div>

                <div>
                  <a href="#" class="btn bg-teal-400" ><i class="icon-statistics mr-2"></i> Report</a>
                </div>
              </div>

              
            </div>
            <!-- /support tickets -->

            <!-- Latest posts -->
            <div class="card">
              <div class="card-header header-elements-inline">
                <h6 class="card-title">Latest posts</h6>
                <div class="header-elements">
                  <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                  </div>
                </div>
              </div>

              <div class="card-body pb-0">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                      <div class="mr-sm-3 mb-2 mb-sm-0">
                        <div class="card-img-actions">
                          <a href="#">
                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                              class="img-fluid img-preview rounded" alt="" />
                            <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                          </a>
                        </div>
                      </div>

                      <div class="media-body">
                        <h6 class="media-title">
                          <a href="#">Up unpacked friendly</a>
                        </h6>
                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                          <li class="list-inline-item">
                            <i class="icon-book-play mr-2"></i> Video
                            tutorials
                          </li>
                        </ul>
                        The him father parish looked has sooner. Attachment
                        frequently terminated son hello...
                      </div>
                    </div>

                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                      <div class="mr-sm-3 mb-2 mb-sm-0">
                        <div class="card-img-actions">
                          <a href="#">
                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                              class="img-fluid img-preview rounded" alt="" />
                            <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                          </a>
                        </div>
                      </div>

                      <div class="media-body">
                        <h6 class="media-title">
                          <a href="#">It allowance prevailed</a>
                        </h6>
                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                          <li class="list-inline-item">
                            <i class="icon-book-play mr-2"></i> Video
                            tutorials
                          </li>
                        </ul>
                        Alteration literature to or an sympathize mr
                        imprudence. Of is ferrars subject enjoyed...
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-6">
                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                      <div class="mr-sm-3 mb-2 mb-sm-0">
                        <div class="card-img-actions">
                          <a href="#">
                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                              class="img-fluid img-preview rounded" alt="" />
                            <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                          </a>
                        </div>
                      </div>

                      <div class="media-body">
                        <h6 class="media-title">
                          <a href="#">Case read they must</a>
                        </h6>
                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                          <li class="list-inline-item">
                            <i class="icon-book-play mr-2"></i> Video
                            tutorials
                          </li>
                        </ul>
                        On it differed repeated wandered required in. Then
                        girl neat why yet knew rose spot...
                      </div>
                    </div>

                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                      <div class="mr-sm-3 mb-2 mb-sm-0">
                        <div class="card-img-actions">
                          <a href="#">
                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                              class="img-fluid img-preview rounded" alt="" />
                            <span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
                          </a>
                        </div>
                      </div>

                      <div class="media-body">
                        <h6 class="media-title">
                          <a href="#">Too carriage attended</a>
                        </h6>
                        <ul class="list-inline list-inline-dotted text-muted mb-2">
                          <li class="list-inline-item">
                            <i class="icon-book-play mr-2"></i> FAQ section
                          </li>
                        </ul>
                        Marianne or husbands if at stronger ye. Considered is
                        as middletons uncommonly...
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /latest posts -->
          </div>

          <div class="col-xl-4">
            <!-- Progress counters -->
            <div class="row">
              <div class="col-sm-6">
                <!-- Available hours -->

                <!-- /available hours -->
              </div>

              <div class="col-sm-6">
                <!-- Productivity goal -->


                <!-- /productivity goal -->
              </div>
            </div>
            <!-- /progress counters -->

            <!-- Daily sales -->
            <div class="card">
              <div class="card-header header-elements-inline">
                <h5 class="card-title">Monthly Catagories Sales</h5>
                <div class="header-elements">
                  <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container text-center">
                  <div class="d-inline-block" id="c3-donut-chart"></div>
                </div>
              </div>


              <div class="table-responsive">
                <table class="table text-nowrap">
                  <thead>
                    <tr>
                      <th class="w-100">Application</th>
                      <th>Time</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-primary-400 rounded-round btn-icon btn-sm">
                              <span class="letter-icon"></span>
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Sigma
                              application</a>
                            <div class="text-muted font-size-sm">
                              <i class="icon-checkmark3 font-size-sm mr-1"></i>
                              New order
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-muted font-size-sm">06:28 pm</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$49.90</h6>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm">
                              <span class="letter-icon"></span>
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Alpha
                              application</a>
                            <div class="text-muted font-size-sm">
                              <i class="icon-spinner11 font-size-sm mr-1"></i>
                              Renewal
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-muted font-size-sm">04:52 pm</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$90.50</h6>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-indigo-400 rounded-round btn-icon btn-sm">
                              <span class="letter-icon"></span>
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Delta
                              application</a>
                            <div class="text-muted font-size-sm">
                              <i class="icon-lifebuoy font-size-sm mr-1"></i>
                              Support
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-muted font-size-sm">01:26 pm</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$60.00</h6>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm">
                              <span class="letter-icon"></span>
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Omega
                              application</a>
                            <div class="text-muted font-size-sm">
                              <i class="icon-lifebuoy font-size-sm mr-1"></i>
                              Support
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-muted font-size-sm">11:46 am</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$55.00</h6>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="mr-3">
                            <a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm">
                              <span class="letter-icon"></span>
                            </a>
                          </div>
                          <div>
                            <a href="#" class="text-default font-weight-semibold letter-icon-title">Alpha
                              application</a>
                            <div class="text-muted font-size-sm">
                              <i class="icon-spinner11 font-size-sm mr-2"></i>
                              Renewal
                            </div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="text-muted font-size-sm">10:29 am</span>
                      </td>
                      <td>
                        <h6 class="font-weight-semibold mb-0">$90.50</h6>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /daily sales -->

            <!-- My messages -->
            
            <!-- /my messages -->

            <!-- Daily financials -->
            <div class="card">
              <div class="card-header header-elements-inline">
                <h6 class="card-title">Daily financials</h6>
                <div class="header-elements">
                  <div
                    class="form-check form-check-inline form-check-right form-check-switchery form-check-switchery-sm">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-input-switchery" id="realtime" checked data-fouc />
                      Realtime
                    </label>
                  </div>
                  <span class="badge bg-danger-400 badge-pill">+86</span>
                </div>
              </div>

              <div class="card-body">
                <div class="chart mb-3" id="bullets"></div>

                <ul class="media-list">
                  <li class="media">
                    <div class="mr-3">
                      <a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i
                          class="icon-statistics"></i></a>
                    </div>

                    <div class="media-body">
                      Stats for July, 6:
                      <span class="font-weight-semibold">1938</span> orders,
                      <span class="font-weight-semibold text-danger">$4220</span>
                      revenue
                      <div class="text-muted">2 hours ago</div>
                    </div>

                    <div class="ml-3 align-self-center">
                      <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                    </div>
                  </li>

                  <li class="media">
                    <div class="mr-3">
                      <a href="#"
                        class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i
                          class="icon-checkmark3"></i></a>
                    </div>

                    <div class="media-body">
                      Invoices <a href="#">#4732</a> and
                      <a href="#">#4734</a> have been paid
                      <div class="text-muted">Dec 18, 18:36</div>
                    </div>

                    <div class="ml-3 align-self-center">
                      <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                    </div>
                  </li>

                  <li class="media">
                    <div class="mr-3">
                      <a href="#"
                        class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i
                          class="icon-alignment-unalign"></i></a>
                    </div>

                    <div class="media-body">
                      Affiliate commission for June has been paid
                      <div class="text-muted">36 minutes ago</div>
                    </div>

                    <div class="ml-3 align-self-center">
                      <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                    </div>
                  </li>

                  <li class="media">
                    <div class="mr-3">
                      <a href="#"
                        class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon"><i
                          class="icon-spinner11"></i></a>
                    </div>

                    <div class="media-body">
                      Order <a href="#">#37745</a> from July, 1st has been
                      refunded
                      <div class="text-muted">4 minutes ago</div>
                    </div>

                    <div class="ml-3 align-self-center">
                      <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                    </div>
                  </li>

                  <li class="media">
                    <div class="mr-3">
                      <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i
                          class="icon-redo2"></i></a>
                    </div>

                    <div class="media-body">
                      Invoice <a href="#">#4769</a> has been sent to
                      <a href="#">Robert Smith</a>
                      <div class="text-muted">Dec 12, 05:46</div>
                    </div>

                    <div class="ml-3 align-self-center">
                      <a href="#" class="list-icons-item"><i class="icon-more"></i></a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /daily financials -->
          </div>
        </div>
        <!-- /dashboard content -->
      </div>