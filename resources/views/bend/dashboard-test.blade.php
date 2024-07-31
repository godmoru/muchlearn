@extends('layouts.bend.portials.base')
@section('content')
<!-- ROW-1 -->
<div class="row">
    <div class="col-md-12">
        <div class="card  banner">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 text-center mb-3 mb-lg-0">
                        <img src="{{asset ('bend/images/pngs/dash4.png')}}" alt="img" class="w-95">
                    </div>
                    <div class="col-xl-9 col-lg-9 ps-lg-0">
                        <div class="row">
                            <div class="col-xl-7 col-lg-6">
                                <div class="text-start text-white mt-xl-4">
                                    <h3 class="font-weight-semibold">Congratulations Steven</h3>
                                    <h4 class="font-weight-normal">You Cources Reached your targeted milestone</h4>
                                    <p class="mb-lg-0 text-white-50">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 text-lg-center mt-xl-4">
                                <h5 class="font-weight-semibold mb-1 text-white">Students Subscribed</h5>
                                <h2 class="display-2 mb-3 number-font text-white">50M</h2>
                                <div class="btn-list mb-xl-0">
                                    <a href="javascript:void(0);" class="btn btn-pink mb-xl-0">Check Details</a>
                                    <a href="javascript:void(0);" class="btn btn-white mb-xl-0" id="skip">No, Thanks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-1 End-->

<!-- ROW-2 OPEN -->
<div class="row">
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="dash1">
                            <p class="mb-1">Total Students</p>
                            <h3 class="mb-1 number-font">479</h3>
                            <span class="fs-12 text-muted">
                                <span class="text-success me-1"><i class="fe fe-trending-up"></i> <strong> 2.6%</strong></span>
                                <span class="ms-0 mt-1">than last week</span>
                            </span>
                        </div>
                    </div>
                    <div class="col col-auto">
                        <p class="data-attributes mb-0 mt-3">
                            <span data-peity='{ "fill": ["#ec5444", "#e3e8f7"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="dash1">
                            <p class="mb-1">Total Instructors</p>
                            <h3 class="mb-1 number-font">534</h3>
                            <span class="fs-12 text-muted">
                                <span class="text-danger me-1"><i class="fe fe-trending-down"></i> <strong> 0.5%</strong></span>
                                <span class="ms-0 mt-1">than last week</span>
                            </span>
                        </div>
                    </div>
                    <div class="col col-auto">
                        <p class="data-attributes mb-0 mt-3">
                            <span data-peity='{ "fill": ["#1cc5ef", "#e3e8f7"],   "innerRadius": 20, "radius": 24 }'>4/7</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="dash1">
                            <p class="mb-1">Total Courses</p>
                            <h3 class="mb-1 number-font">487</h3>
                            <span class="fs-12 text-muted">
                                <span class="text-success me-1"><i class="fe fe-trending-up"></i> <strong> 1.5%</strong> </span>
                                <span class="ms-0 mt-1">than last week</span>
                            </span>
                        </div>
                    </div>
                    <div class="col col-auto">
                        <p class="data-attributes mb-0 mt-3">
                            <span data-peity='{ "fill": ["#24e4ac", "#e3e8f7"],   "innerRadius": 20, "radius": 24 }'>6/7</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="dash1">
                            <p class="mb-1">Total Assignments</p>
                            <h3 class="mb-1 number-font">84</h3>
                            <span class="fs-12 text-muted">
                                <span class="text-danger me-1"><i class="fe fe-trending-down"></i> <strong> 0.6%</strong></span>
                                <span class="ms-0 mt-1">than last week</span>
                            </span>
                        </div>
                    </div>
                    <div class="col col-auto">
                        <p class="data-attributes mb-0 mt-3">
                            <span data-peity='{ "fill": ["#f18238", "#e3e8f7"],   "innerRadius": 20, "radius": 24 }'>3/7</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-2 CLOSED -->

<!-- ROW-3 OPEN -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xl-8">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h3 class="card-title">Learners with Time Sent Monthlywise</h3>
            </div>
            <div class="card-body">
                <div id="learners"></div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Course Progress</h3>
            </div>
            <div class="card-body">
                <div id="morrisBarchart1" class="h-250 morris-donut-charts"></div>
                <div class="row mt-2">
                    <div class="col-md-6 col-6 text-center mb-5">
                        <div class="task-box mb-0">
                            <p class="text-muted mb-2"><span class="dot-label bg-lightblue me-2"></span>Completed</p>
                            <h5 class="mt-1 mb-0 number-font1 font-weight-semibold">3,567</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 text-center mb-5">
                        <div class="task-box mb-0">
                            <p  class="text-muted mb-2"><span class="dot-label bg-primary me-2"></span>In Progress</p>
                            <h5 class="mt-1 mb-0 number-font1 font-weight-semibold">1,456</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 text-center mb-4 mb-lg-0">
                        <div class="task-box mb-0">
                            <p  class="text-muted mb-2"><span class="dot-label bg-secondary1 me-2"></span>Not Completed</p>
                            <h5 class="mt-1 mb-0 number-font1 font-weight-semibold">456</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 text-center">
                        <div class="task-box mb-0">
                            <p  class="text-muted mb-2"><span class="dot-label bg-pink me-2"></span>Not Started</p>
                            <h5 class="mt-1 mb-0 number-font1 font-weight-semibold">133</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-3 CLOSED -->

<!-- ROW-4 OPEN -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
        <div class="card border-bottom-0 overflow-hidden">
            <div class="card-header">
                <h3 class="card-title">Popular Courses</h3>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table  mb-0 text-nowrap">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="software-cat">
                                        <img src="{{asset ('bend/images/pngs/0-2.png')}}" alt="img" class="ang-bg br-5">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1 font-weight-semibold">AngularJs</h6>
                                    <small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>9 Months</small>
                                    <small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>2 Hours</small>
                                </td>
                                <td class="text-center">
                                    <h6 class="mb-0 fw-600">$34</h6>
                                    <span class="fs-12 text-yellow">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="software-cat">
                                        <img src="{{asset ('bend/images/pngs/0-1.png')}}" alt="img" class="wd-bg br-5">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1 font-weight-semibold">Wordpress</h6>
                                    <small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>3 Months</small>
                                    <small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>1 Hours</small>
                                </td>
                                <td class="text-center">
                                    <h6 class="mb-0 fw-600">$16</h6>
                                    <span class="fs-12 text-yellow">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="software-cat">
                                        <img src="{{asset ('bend/images/pngs/0-3.png')}}" alt="img" class="re-bg br-5">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1 font-weight-semibold">React</h6>
                                    <small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>4 Months</small>
                                    <small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>4 Hours</small>
                                </td>
                                <td class="text-center">
                                    <h6 class="mb-0 fw-600">$25</h6>
                                    <span class="fs-12 text-yellow">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="software-cat">
                                        <img src="{{asset ('bend/images/pngs/0-4.png')}}" alt="img" class="vue-bg br-5">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1 font-weight-semibold">Vuejs</h6>
                                    <small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>5 Months</small>
                                    <small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>2 Hours</small>
                                </td>
                                <td class="text-center">
                                    <h6 class="mb-0 fw-600">$18</h6>
                                    <span class="fs-12 text-yellow">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="software-cat">
                                        <img src="{{asset ('bend/images/pngs/0-5.png')}}" alt="img" class="lar-bg br-5">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1 font-weight-semibold">Laravel</h6>
                                    <small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>3 Months</small>
                                    <small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>3 Hours</small>
                                </td>
                                <td class="text-center">
                                    <h6 class="mb-0 fw-600">$22</h6>
                                    <span class="fs-12 text-yellow">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="software-cat">
                                        <img src="{{asset ('bend/images/pngs/0-6.png')}}" alt="img" class="node-bg br-5">
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1 font-weight-semibold">Nodejs</h6>
                                    <small class="fs-12 text-muted me-2"><i class="fa fa-calendar me-1"></i>2 Months</small>
                                    <small class="fs-12 text-muted "><i class="fa fa-clock-o me-1"></i>1 Hours</small>
                                </td>
                                <td class="text-center">
                                    <h6 class="mb-0 fw-600">$28</h6>
                                    <span class="fs-12 text-yellow">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Students Overview</h3>
            </div>
            <div class="card-body">
                <div class="mb-5">
                    <p class="mb-2">Good<span class="float-end"><b>80%</b></span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-primary" role="progressbar" style="width:80%"></div>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="mb-2">Satisfied<span class="float-end"><b>75%</b></span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width:75%"></div>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="mb-2">Excellent<span class="float-end"><b>72%</b></span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-secondary1" role="progressbar" style="width:70%"></div>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="mb-2">Average<span class="float-end"><b>65%</b></span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-warning" role="progressbar" style="width:65%"></div>
                    </div>
                </div>
                <div class="mb-5">
                    <p class="mb-2">Below Average<span class="float-end"><b>50%</b></span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width:50%"></div>
                    </div>
                </div>
                <div class="mb-0">
                    <p class="mb-2">Unsatisfied<span class="float-end"><b>40%</b></span></p>
                    <div class="progress h-2">
                        <div class="progress-bar bg-orange" role="progressbar" style="width:40%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Top 5 Instructors</h3>
            </div>
            <div class="card-body p-0">
                <div class="p-0 br-5">
                    <div class="list d-flex align-items-center border-bottom px-5 py-3">
                        <span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/1.jpg"></span>
                        <div class="w-100 ms-3">
                            <div class="mb-0 d-flex">
                                <div>
                                    <h6 class="mb-1">Lillian Blake</h6>
                                    <p class="mb-0 fs-12 text-muted">Web Designer</p>
                                </div>
                                <div class="ms-auto">
                                    <p class="fs-12 text-muted mb-0">Daily:2 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom px-5 py-3">
                        <span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/10.jpg"></span>
                        <div class="w-100 ms-3">
                            <div class="mb-0 d-flex">
                                <div>
                                    <h6 class="mb-1 font-weight-normal">Tim Gray</h6>
                                    <p class="mb-0 fs-12 text-muted">Data Science</p>
                                </div>
                                <div class="ms-auto">
                                    <p class="fs-12 text-muted mb-0">Daily:1 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom px-5 py-3">
                        <span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/12.jpg"></span>
                        <div class="w-100 ms-3">
                            <div class="mb-0 d-flex">
                                <div>
                                    <h6 class="mb-1 font-weight-normal">Carley Murrer</h6>
                                    <p class="mb-0 fs-12 text-muted">Data Science</p>
                                </div>
                                <div class="ms-auto">
                                    <p class="fs-12 text-muted mb-0">Daily:2 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center border-bottom px-5 py-3">
                        <span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/3.jpg"></span>
                        <div class="w-100 ms-3">
                            <div class="mb-0 d-flex mt-2">
                                <div>
                                    <h6 class="mb-1 font-weight-normal">Rose Nash</h6>
                                    <p class="mb-0 fs-12 text-muted">Law</p>
                                </div>
                                <div class="ms-auto">
                                    <p class="fs-12 text-muted mb-0">Daily:3 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center  border-bottom px-5 py-3">
                        <span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/9.jpg"></span>
                        <div class="w-100 ms-3">
                            <div class="mb-0 d-flex">
                                <div>
                                    <h6 class="mb-1 font-weight-normal">Justin Parr</h6>
                                    <p class="mb-0 fs-12 text-muted">Photography</p>
                                </div>
                                <div class="ms-auto">
                                    <p class="fs-12 text-muted mb-0">Daily:2 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list d-flex align-items-center px-5 py-3">
                        <span class="avatar avatar-md brround cover-image p-4" data-image-src="{{asset ('bend/images/users/8.jpg"></span>
                        <div class="w-100 ms-3">
                            <div class="mb-0 d-flex">
                                <div>
                                    <h6 class="mb-1 font-weight-normal">Justin Parr</h6>
                                    <p class="mb-0 fs-12 text-muted">Digital Marketing</p>
                                </div>
                                <div class="ms-auto">
                                    <p class="fs-12 text-muted mb-0">Daily:3 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-4 CLOSED -->

<!-- ROW-5 OPEN -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Courses Overview</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-0 text-nowrap">
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Faculty Name</th>
                                <th>Duration</th>
                                <th>Amount</th>
                                <th>Course Type</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HTML Classes</td>
                                <td>Vanessa</td>
                                <td>3 Months</td>
                                <td class="font-weight-semibold fs-15">$89</td>
                                <td>Online</td>
                                <td>
                                    <a class="btn btn-success btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Active</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3D Animation Trainig</td>
                                <td>Rutherford</td>
                                <td>6 Months</td>
                                <td class="font-weight-semibold fs-15">$14,276</td>
                                <td>Online</td>
                                <td>
                                    <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Closed</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Digital Marketing</td>
                                <td>Elizabeth</td>
                                <td>4 Months</td>
                                <td class="font-weight-semibold fs-15">$25,000</td>
                                <td>Offline</td>
                                <td>
                                    <a class="btn btn-success btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Active</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Guitar classes</td>
                                <td>Anthony</td>
                                <td>3 Months</td>
                                <td class="font-weight-semibold fs-15">$50.00</td>
                                <td>Online</td>
                                <td>
                                    <a class="btn btn-danger btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Expired</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Beautician Classes</td>
                                <td>Lambert</td>
                                <td>2 Months</td>
                                <td class="font-weight-semibold fs-15">$99.99</td>
                                <td>Offline</td>
                                <td>
                                    <a class="btn btn-primary btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Closed</a>
                                </td>
                            </tr>
                            <tr>
                                <td>PhotoShop Designing</td>
                                <td>Lilly</td>
                                <td>6 Months</td>
                                <td class="font-weight-semibold fs-15">$145</td>
                                <td>Offline</td>
                                <td>
                                    <a class="btn btn-success btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Active</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3D Animation Trainig</td>
                                <td>Marry cott</td>
                                <td>8 Months</td>
                                <td class="font-weight-semibold fs-15">$378</td>
                                <td>Online</td>
                                <td>
                                    <a class="btn btn-success btn-sm text-white mb-1" data-bs-toggle="tooltip" data-bs-original-title="View">Active</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-5 CLOSED -->
@endsection

@section('scripts')

@endsection