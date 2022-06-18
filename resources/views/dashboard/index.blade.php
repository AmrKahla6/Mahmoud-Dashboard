      <?php $active_links = ['', '']; ?>
      @extends('layouts.admin')
      @section('content')

          <div class="app-content content">
              <div class="content-wrapper">
                  <div class="content-header row">
                    @if(Session::has('success'))
                    <div class="col-md-12">
                        <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                            <span class="text-white" style="font-weight: bold;">{{Session::get('success')}}</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                    @endif
                  </div>
                  <div class="content-body">
                      <!-- eCommerce statistic -->
                      <div class="row">
                          <div class="col-xl-3 col-lg-6 col-12">
                              <div class="card pull-up">
                                  <div class="card-content">
                                      <div class="card-body">
                                          <div class="media d-flex">
                                              <div class="media-body text-left">
                                                  <h3 class="info">5</h3>
                                                  <h6>الاقسام</h6>
                                              </div>
                                              <div>
                                                  <i class="icon-basket-loaded info font-large-2 float-right"></i>
                                              </div>
                                          </div>
                                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                              <div class="progress-bar bg-gradient-x-info" role="progressbar"
                                                  style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                  aria-valuemax="100"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-lg-6 col-12">
                              <div class="card pull-up">
                                  <div class="card-content">
                                      <div class="card-body">
                                          <div class="media d-flex">
                                              <div class="media-body text-left">
                                                  <h3 class="warning">3</h3>
                                                  <h6>الاعلانات</h6>
                                              </div>
                                              <div>
                                                  <i class="la la-dollar warning font-large-2 float-right"></i>
                                              </div>
                                          </div>
                                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                              <div class="progress-bar bg-gradient-x-warning" role="progressbar"
                                                  style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                  aria-valuemax="100"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-lg-6 col-12">
                              <div class="card pull-up">
                                  <div class="card-content">
                                      <div class="card-body">
                                          <div class="media d-flex">
                                              <div class="media-body text-left">
                                                  <h3 class="success">7</h3>
                                                  <h6>العملاء</h6>
                                              </div>
                                              <div>
                                                  <i class="ft-users success font-large-2 float-right"></i>
                                              </div>
                                          </div>
                                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                              <div class="progress-bar bg-gradient-x-success" role="progressbar"
                                                  style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                  aria-valuemax="100"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-lg-6 col-12">
                              <div class="card pull-up">
                                  <div class="card-content">
                                      <div class="card-body">
                                          <div class="media d-flex">
                                              <div class="media-body text-left">
                                                  <h3 class="danger">2</h3>
                                                  <h6>الافكار</h6>
                                              </div>
                                              <div>
                                                  <i class="icon-heart danger font-large-2 float-right"></i>
                                              </div>
                                          </div>
                                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                              <div class="progress-bar bg-gradient-x-danger" role="progressbar"
                                                  style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                                  aria-valuemax="100"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--/ eCommerce statistic -->
                      <!-- Candlestick Multi Level Control Chart -->

                      <!-- Sell Orders & Buy Order -->
                      <div class="row match-height">
                          
                          <div class="col-12 col-xl-8">
                              <div class="card">
                                  <div class="card-header">
                                      <h4 class="card-title">أحدث الاعلانات </h4>
                                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                      <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                      </div>
                                  </div>
                                  <div class="card-content collapse show">
                                      <div class="table-responsive">
                                          <table class="table table-de mb-0">
                                              <thead>
                                                  <tr>
                                                      <th>رقم الطلب</th>
                                                      <th>العميل</th>
                                                      <th>السعر</th>
                                                      <th>حاله الطلب</th>
                                                      <th>الاجمالي</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr class="bg-success bg-lighten-5">
                                                      <td>105000</td>
                                                      <td>رمضان</td>
                                                      <td>$ 4762.53</td>
                                                      <td>مكتمل</td>
                                                      <td>$ 4762.53</td>
                                                  </tr>

                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-xl-4">
                              <div class="card">
                                  <div class="card-header">
                                      <h4 class="card-title">اخر الافكار</h4>
                                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                      <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                      </div>
                                  </div>
                                  <div class="card-content collapse show">
                                      <div class="table-responsive">
                                          <table class="table table-de mb-0">
                                              <thead>
                                                  <tr>
                                                      <th> العميل</th>
                                                      <th>المنتج</th>
                                                      <th>التقييم </th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr class="bg-danger bg-lighten-5">
                                                      <td>رمضان</td>
                                                      <td><i class="cc BTC-alt"></i> ساعه يد</td>
                                                      <td> 5 </td>
                                                  </tr>

                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <!--/ Sell Orders & Buy Order -->

                  </div>







                  <!-- Line Chart 
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Line Chart</h4>
                          <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                          <div class="heading-elements">
                            <ul class="list-inline mb-0">
                              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                              <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="card-body">
                            <p class="card-text">A line chart that is rendered within the browser using SVG or
                              VML. Displays tooltips when hovering over points.</p>
                            <div id="line-chart">
                                xmskclmskcm
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   /Line Chart -->





              </div>









          </div>

      @stop
