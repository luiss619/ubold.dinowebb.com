@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')
@endsection

@section('content')
    @include('layouts.partials/page-title', ['title' => 'Dashboard'])

    <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
        <!-- Total Sales Widget -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                            <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                <i class="ti ti-credit-card"></i>
                            </span>
                        </div>
                        <div class="text-end">
                            <h3 class="mb-2 fw-normal">$<span data-target="124.7">0</span>K</h3>
                            <p class="mb-0 text-muted"><span>Total Sales</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
        <!-- Orders Placed Widget -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                            <span class="avatar-title bg-success-subtle text-success rounded-circle fs-24">
                                <i class="ti ti-shopping-cart"></i>
                            </span>
                        </div>
                        <div class="text-end">
                            <h3 class="mb-2 fw-normal"><span data-target="2358">0</span></h3>
                            <p class="mb-0 text-muted"><span>Orders Placed</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
        <!-- Active Customers Widget -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                            <span class="avatar-title bg-info-subtle text-info rounded-circle fs-24">
                                <i class="ti ti-users"></i>
                            </span>
                        </div>
                        <div class="text-end">
                            <h3 class="mb-2 fw-normal"><span data-target="839">0</span></h3>
                            <p class="mb-0 text-muted"><span>Active Customers</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
        <!-- Refund Requests Widget -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                            <span class="avatar-title bg-warning-subtle text-warning rounded-circle fs-24">
                                <i class="ti ti-rotate-clockwise-2"></i>
                            </span>
                        </div>
                        <div class="text-end">
                            <h3 class="mb-2 fw-normal"><span data-target="41">0</span></h3>
                            <p class="mb-0 text-muted"><span>Refund Requests</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-xxl-3 col-xl-6 order-xl-1 order-xxl-0">
                            <div class="p-3 border-end border-dashed">
                                <h4 class="card-title mb-0">Total Sales</h4>
                                <p class="text-muted fs-xs">
                                    You have 21 pending orders awaiting fulfillment.
                                </p>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div style="height: 300px;">
                                            <canvas id="multi-pie-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end .p-4-->
                            <hr class="d-xxl-none border-light m-0" />
                        </div> <!-- end col-->
                        <div class="col-xxl-9 order-xl-3 order-xxl-1">
                            <div class="px-4 py-3">
                                <div class="d-flex justify-content-between mb-3">
                                    <h4 class="card-title">Sales Analytics</h4>
                                    <a class="link-reset text-decoration-underline fw-semibold link-offset-3"
                                        href="#!">View Reports <i class="ti ti-arrow-right"></i></a>
                                </div>
                                <div dir="ltr">
                                    <div class="mt-3" style="height: 330px;">
                                        <canvas id="sales-analytics-chart"></canvas>
                                    </div>
                                </div>
                            </div> <!-- end .px-4-->
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- end row-->
    <div class="row">
        <div class="col-xxl-6">
            <div class="card" data-table="" data-table-rows-per-page="7">
                <div class="card-header justify-content-between align-items-center border-dashed">
                    <h4 class="card-title mb-0">Product Inventory</h4>
                    <div class="d-flex gap-2">
                        <a class="btn btn-sm btn-soft-secondary" href="{{ route('second', ['ecommerce', 'add-product']) }}">
                            <i class="ti ti-plus me-1"></i> Add Product
                        </a>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0);">
                            <i class="ti ti-file-export me-1"></i> Export CSV
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-centered table-custom table-sm table-nowrap table-hover mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/products/1.png" />
                                            <div>
                                                <span class="text-muted fs-xs">Audio</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'product-details']) }}">Wireless
                                                        Earbuds</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Stock</span>
                                        <h5 class="fs-base fw-normal mb-0">180 units</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Price</span>
                                        <h5 class="fs-base fw-normal mb-0">$59.90</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Ratings</span>
                                        <h5 class="fs-base fw-normal mb-0">
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a class="link-reset fw-semibold"
                                                    href="{{ route('second', ['ecommerce', 'reviews']) }}">(52)</a></span>
                                        </h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base fw-normal mb-0"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Active</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Edit Product</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/products/2.png" />
                                            <div>
                                                <span class="text-muted fs-xs">Accessories</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'product-details']) }}">Laptop
                                                        Stand</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Stock</span>
                                        <h5 class="fs-base fw-normal mb-0">45 units</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Price</span>
                                        <h5 class="fs-base fw-normal mb-0">$29.00</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Ratings</span>
                                        <h5 class="fs-base fw-normal mb-0">
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a class="link-reset fw-semibold"
                                                    href="{{ route('second', ['ecommerce', 'reviews']) }}">(11)</a></span>
                                        </h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base fw-normal mb-0"><i
                                                class="ti ti-circle-filled fs-xs text-warning"></i> Low Stock</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Edit Product</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/products/3.png" />
                                            <div>
                                                <span class="text-muted fs-xs">Gadgets</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'product-details']) }}">Drone
                                                        Camera</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Stock</span>
                                        <h5 class="fs-base fw-normal mb-0">0 units</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Price</span>
                                        <h5 class="fs-base fw-normal mb-0">$199.99</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Ratings</span>
                                        <h5 class="fs-base fw-normal mb-0">
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-half-filled"></span>
                                            </span>
                                            <span class="ms-1"><a class="link-reset fw-semibold"
                                                    href="{{ route('second', ['ecommerce', 'reviews']) }}">(8)</a></span>
                                        </h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base fw-normal mb-0"><i
                                                class="ti ti-circle-filled fs-xs text-danger"></i> Out of Stock</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Edit Product</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/products/4.png" />
                                            <div>
                                                <span class="text-muted fs-xs">Electronics</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'product-details']) }}">Portable
                                                        Projector</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Stock</span>
                                        <h5 class="fs-base fw-normal mb-0">32 units</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Price</span>
                                        <h5 class="fs-base fw-normal mb-0">$120.00</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Ratings</span>
                                        <h5 class="fs-base fw-normal mb-0">
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a class="link-reset fw-semibold"
                                                    href="{{ route('second', ['ecommerce', 'reviews']) }}">(16)</a></span>
                                        </h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base fw-normal mb-0"><i
                                                class="ti ti-circle-filled fs-xs text-warning"></i> Limited</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Edit Product</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/products/5.png" />
                                            <div>
                                                <span class="text-muted fs-xs">Mobiles</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'product-details']) }}">Smartphone
                                                        G12</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Stock</span>
                                        <h5 class="fs-base fw-normal mb-0">85 units</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Price</span>
                                        <h5 class="fs-base fw-normal mb-0">$499.00</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Ratings</span>
                                        <h5 class="fs-base fw-normal mb-0">
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a class="link-reset fw-semibold"
                                                    href="{{ route('second', ['ecommerce', 'reviews']) }}">(112)</a></span>
                                        </h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base fw-normal mb-0"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Active</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Edit Product</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/products/6.png" />
                                            <div>
                                                <span class="text-muted fs-xs">Audio</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'product-details']) }}">Noise
                                                        Cancelling Headphones</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Stock</span>
                                        <h5 class="fs-base fw-normal mb-0">25 units</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Price</span>
                                        <h5 class="fs-base fw-normal mb-0">$129.99</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Ratings</span>
                                        <h5 class="fs-base fw-normal mb-0">
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-half-filled"></span>
                                            </span>
                                            <span class="ms-1"><a class="link-reset fw-semibold"
                                                    href="{{ route('second', ['ecommerce', 'reviews']) }}">(78)</a></span>
                                        </h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base fw-normal mb-0"><i
                                                class="ti ti-circle-filled fs-xs text-warning"></i> Low Stock</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Edit Product</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/products/7.png" />
                                            <div>
                                                <span class="text-muted fs-xs">Home Tech</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'product-details']) }}">Mini
                                                        Air Purifier</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Stock</span>
                                        <h5 class="fs-base fw-normal mb-0">0 units</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Price</span>
                                        <h5 class="fs-base fw-normal mb-0">$49.99</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Ratings</span>
                                        <h5 class="fs-base fw-normal mb-0">
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-half-filled"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a class="link-reset fw-semibold"
                                                    href="{{ route('second', ['ecommerce', 'reviews']) }}">(34)</a></span>
                                        </h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base fw-normal mb-0"><i
                                                class="ti ti-circle-filled fs-xs text-danger"></i> Out of Stock</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Edit Product</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/products/8.png" />
                                            <div>
                                                <span class="text-muted fs-xs">Accessories</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'product-details']) }}">USB-C
                                                        Docking Station</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Stock</span>
                                        <h5 class="fs-base fw-normal mb-0">142 units</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Price</span>
                                        <h5 class="fs-base fw-normal mb-0">$89.00</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Ratings</span>
                                        <h5 class="fs-base fw-normal mb-0">
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                            </span>
                                            <span class="ms-1"><a class="link-reset fw-semibold"
                                                    href="{{ route('second', ['ecommerce', 'reviews']) }}">(64)</a></span>
                                        </h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base fw-normal mb-0"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Active</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Edit Product</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/products/9.png" />
                                            <div>
                                                <span class="text-muted fs-xs">Gadgets</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'product-details']) }}">Digital
                                                        Photo Frame</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Stock</span>
                                        <h5 class="fs-base fw-normal mb-0">58 units</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Price</span>
                                        <h5 class="fs-base fw-normal mb-0">$74.95</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Ratings</span>
                                        <h5 class="fs-base fw-normal mb-0">
                                            <span class="text-warning">
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star-filled"></span>
                                                <span class="ti ti-star"></span>
                                            </span>
                                            <span class="ms-1"><a class="link-reset fw-semibold"
                                                    href="{{ route('second', ['ecommerce', 'reviews']) }}">(40)</a></span>
                                        </h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base fw-normal mb-0"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Active</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Edit Product</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
                <div class="card-footer border-0">
                    <div class="align-items-center justify-content-between row text-center text-sm-start">
                        <div class="col-sm">
                            <div data-table-pagination-info="products"></div>
                        </div>
                        <div class="col-sm-auto mt-3 mt-sm-0">
                            <div data-table-pagination=""></div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- end card-footer-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-xxl-6">
            <div class="card" data-table="" data-table-rows-per-page="7">
                <div class="card-header justify-content-between align-items-center border-dashed">
                    <h4 class="card-title mb-0">Recent Orders</h4>
                    <div class="d-flex gap-2">
                        <a class="btn btn-sm btn-soft-secondary" href="javascript:void(0);">
                            <i class="ti ti-plus me-1"></i> Add Order
                        </a>
                        <a class="btn btn-sm btn-primary" href="javascript:void(0);">
                            <i class="ti ti-file-export me-1"></i> Export CSV
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-centered table-custom table-sm table-nowrap table-hover mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/users/user-1.jpg" />
                                            <div>
                                                <span class="text-muted fs-xs">Alice Cooper</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'order-details']) }}">#ORD-2001</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Product</span>
                                        <h5 class="fs-base mb-0 fw-normal">Noise Cancelling Headphones</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Date</span>
                                        <h5 class="fs-base mb-0 fw-normal">2025-05-01</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Amount</span>
                                        <h5 class="fs-base mb-0 fw-normal">$199.99</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base mb-0 fw-normal"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Delivered</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/users/user-2.jpg" />
                                            <div>
                                                <span class="text-muted fs-xs">David Lee</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'order-details']) }}">#ORD-2002</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Product</span>
                                        <h5 class="fs-base mb-0 fw-normal">4K Monitor</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Date</span>
                                        <h5 class="fs-base mb-0 fw-normal">2025-04-30</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Amount</span>
                                        <h5 class="fs-base mb-0 fw-normal">$349.00</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base mb-0 fw-normal"><i
                                                class="ti ti-circle-filled fs-xs text-warning"></i> Pending</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/users/user-3.jpg" />
                                            <div>
                                                <span class="text-muted fs-xs">Sophia Turner</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'order-details']) }}">#ORD-2003</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Product</span>
                                        <h5 class="fs-base mb-0 fw-normal">Mechanical Keyboard</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Date</span>
                                        <h5 class="fs-base mb-0 fw-normal">2025-04-29</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Amount</span>
                                        <h5 class="fs-base mb-0 fw-normal">$89.49</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base mb-0 fw-normal"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Completed</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/users/user-4.jpg" />
                                            <div>
                                                <span class="text-muted fs-xs">James Wilson</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'order-details']) }}">#ORD-2004</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Product</span>
                                        <h5 class="fs-base mb-0 fw-normal">Drone Camera</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Date</span>
                                        <h5 class="fs-base mb-0 fw-normal">2025-04-28</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Amount</span>
                                        <h5 class="fs-base mb-0 fw-normal">$450.00</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base mb-0 fw-normal"><i
                                                class="ti ti-circle-filled fs-xs text-danger"></i> Cancelled</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/users/user-5.jpg" />
                                            <div>
                                                <span class="text-muted fs-xs">Ava Carter</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'order-details']) }}">#ORD-2005</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Product</span>
                                        <h5 class="fs-base mb-0 fw-normal">Wireless Earbuds</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Date</span>
                                        <h5 class="fs-base mb-0 fw-normal">2025-04-27</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Amount</span>
                                        <h5 class="fs-base mb-0 fw-normal">$129.99</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base mb-0 fw-normal"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Completed</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/users/user-6.jpg" />
                                            <div>
                                                <span class="text-muted fs-xs">Ethan Brooks</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'order-details']) }}">#ORD-2011</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Product</span>
                                        <h5 class="fs-base mb-0 fw-normal">VR Headset</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Date</span>
                                        <h5 class="fs-base mb-0 fw-normal">2025-05-02</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Amount</span>
                                        <h5 class="fs-base mb-0 fw-normal">$299.00</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base mb-0 fw-normal"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Completed</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/users/user-7.jpg" />
                                            <div>
                                                <span class="text-muted fs-xs">Mia Clarke</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'order-details']) }}">#ORD-2012</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Product</span>
                                        <h5 class="fs-base mb-0 fw-normal">Portable Charger</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Date</span>
                                        <h5 class="fs-base mb-0 fw-normal">2025-05-01</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Amount</span>
                                        <h5 class="fs-base mb-0 fw-normal">$59.99</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base mb-0 fw-normal"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Completed</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/users/user-8.jpg" />
                                            <div>
                                                <span class="text-muted fs-xs">Lucas Perry</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'order-details']) }}">#ORD-2013</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Product</span>
                                        <h5 class="fs-base mb-0 fw-normal">Smartphone Gimbal</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Date</span>
                                        <h5 class="fs-base mb-0 fw-normal">2025-04-30</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Amount</span>
                                        <h5 class="fs-base mb-0 fw-normal">$149.99</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base mb-0 fw-normal"><i
                                                class="ti ti-circle-filled fs-xs text-warning"></i> Pending</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/users/user-9.jpg" />
                                            <div>
                                                <span class="text-muted fs-xs">Chloe Adams</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'order-details']) }}">#ORD-2014</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Product</span>
                                        <h5 class="fs-base mb-0 fw-normal">LED Desk Lamp</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Date</span>
                                        <h5 class="fs-base mb-0 fw-normal">2025-04-29</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Amount</span>
                                        <h5 class="fs-base mb-0 fw-normal">$45.00</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base mb-0 fw-normal"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Delivered</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img alt="" class="avatar-sm rounded-circle me-2"
                                                src="/images/users/user-10.jpg" />
                                            <div>
                                                <span class="text-muted fs-xs">Benjamin Gray</span>
                                                <h5 class="fs-base mb-0"><a class="text-body"
                                                        href="{{ route('second', ['ecommerce', 'order-details']) }}">#ORD-2015</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Product</span>
                                        <h5 class="fs-base mb-0 fw-normal">Noise Meter</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Date</span>
                                        <h5 class="fs-base mb-0 fw-normal">2025-04-28</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Amount</span>
                                        <h5 class="fs-base mb-0 fw-normal">$75.49</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted fs-xs">Status</span>
                                        <h5 class="fs-base mb-0 fw-normal"><i
                                                class="ti ti-circle-filled fs-xs text-success"></i> Delivered</h5>
                                    </td>
                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                data-bs-toggle="dropdown" href="#">
                                                <i class="ti ti-dots-vertical fs-lg"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">View Details</a>
                                                <a class="dropdown-item" href="#">Cancel Order</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end card-body-->
                <div class="card-footer border-0">
                    <div class="align-items-center justify-content-between row text-center text-sm-start">
                        <div class="col-sm">
                            <div data-table-pagination-info="orders"></div>
                        </div>
                        <div class="col-sm-auto mt-3 mt-sm-0">
                            <div data-table-pagination=""></div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- end card-footer-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div> <!-- end row-->
@endsection

@section('scripts')
    @vite(['resources/js/pages/custom-table.js'])
    @vite(['resources/js/pages/dashboard.js'])
@endsection
