  <!-- Start section product -->
  <section class="product-section section-padding pt-0">
      <div class="my-container">
        <div class="section-heading text-center">
          <h2 class="section-heading-title">Sản phẩm mới</h2>
        </div>
        <!-- Nav tabs -->
        <ul class="product-tab nav justify-content-center">
          <li>
            <button class="product-tab-primary active" data-bs-toggle="tab" data-bs-target="#featured"
              type="button">Đặc sắc</button>
          </li>
          <li>
            <button class="product-tab-primary" data-bs-toggle="tab" data-bs-target="#trending"
              type="button">Xu hướng</button>
          </li>
          <li>
            <button class="product-tab-primary" data-bs-toggle="tab" data-bs-target="#newarrival" type="button">Hàng mới về</button>
          </li>
        </ul>

        <!-- Tab panes -->

        <div class="tab-content">
          
        <!-- Featured Tab -->

          <div class="tab-pane fade active show" id="featured">
            <div class="product-section-inner">
              <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                @foreach($products['featured'] as $product)
                <div class="col mb-30">
                  @include('customer.component.product_items')
                </div>
                @endforeach
              </div>
            </div>
          </div>

        <!-- Trending Tab -->

          <div class="tab-pane fade" id="trending">
            <div class="product-section-inner">
              <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                @foreach($products['trending'] as $product)
                <div class="col mb-30">
                  @include('customer.component.product_items')
                </div>
                @endforeach
              </div>
            </div>
          </div>

        <!-- New Arrival Tab -->

          <div class="tab-pane fade" id="newarrival">
            <div class="product-section-inner">
              <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                @foreach($products['newarrival'] as $product)
                <div class="col mb-30">
                  @include('customer.component.product_items')
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End section product -->

    <!-- Start section banner -->
    <section class="banner-section section-padding pt-0">
      <div class="my-container">
        <div class="row row-cols-md-2 row-cols-1">
          <div class="col-6">
            <div class="banner-items">
              <a href="#" class="banner-items-thumbnail position-relative">
                <img alt="" src="./customer/assets/img/banner5.png" />
                <div class="banner-items-content position-absolute">
                  <span class="banner-items-content-subtitle">Chọn mặt hàng của bạn</span>
                  <h2 class="banner-items-content-title">
                  Ưu đãi lên tới 25% Đặt hàng ngay
                  </h2>
                  <span class="banner-items-content-link text-decoration-underline">Mua ngay</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="banner-items">
              <a href="#" class="banner-items-thumbnail position-relative">
                <img alt="" src="./customer/assets/img/banner6.png" />
                <div class="banner-items-content position-absolute">
                  <span class="banner-items-content-subtitle">Chọn mặt hàng của bạn</span>
                  <h2 class="banner-items-content-title">
                  Ưu đãi lên tới 25% Đặt hàng ngay
                  </h2>
                  <span class="banner-items-content-link text-decoration-underline">Mua ngay</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End section banner -->