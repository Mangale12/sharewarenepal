@extends('frontend.app')
@section('title')
Happy to shop
@endsection
@section('content')
<div id="nt_wrapper">

  <div id="nt_content">
    <!-- Hot deals-->
    <div class="kalles-section nt_section type_featured_collection tp_se_cdt">
      <div class="kalles-electronic-vertical__bestseller container">
        <div class="row al_center fl_center title_10">
          <div class="col-auto col-md">
            <h3 class="dib tc section-title fs__24">{{ session()->get('language') === 'bangla' ? 'হট ডেয়ালস' : 'Hot Deals' }}</h3>

          </div>
          {{-- <div class="col-auto"><a href="{{ route('categoryproductsen', $category->category_slug_en) }}">all product</a></div> --}}
        </div>
        <div class="products nt_products_holder row  row_pr_2 cdt_des_1 round_cd_false nt_cover ratio1_1 position_8 space_30 equal_nt">
          @forelse ($data['rows'] as $product)
          <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
            <div class="product-inner pr">
              <div class="product-image pr oh lazyload">
                <span class="tc nt_labels pa pe_none cw"><span class="nt_label new {{ isset($product->discount) ? 'bg-danger' : '' }}">{{ isset($product->discount) ? '- '.$product->discount . ' %' : 'New' }}</span></span>
                <a class="d-block" href="{{ route('frontend.detailsen',['category'=>$product->category->category_slug_en,'slug'=>$product->product_slug_en]) }}">
                  <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload" data-bgset="{{ asset($product->image) }}"></div>
                </a>
                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                  <div class="pr_lazy_img back-img pa nt_bg_lz lazyload" data-bgset="{{ asset($product->image) }}"></div>
                </div>

                <div class="hover_button op__0 tc pa flex column ts__03">

                  <a  class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left productView add-to-card" product_id={{ $product->id }} data-product-id="{{$product->id}}"><span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                      cart</span></a>
                </div>
              </div>
              <div class="product-info mt__15">
                <div class="product-brand"><a class="cg chp" href="#">{{ $product->brand->brand_name_en }}</a></div>
                <h3 class="product-title pr fs__14 mg__0 fwm">
                  <a class="cd chp" href="{{ route('frontend.detailsen',['category'=>$product->category->category_slug_en,'slug'=>$product->product_slug_en]) }}">{{ Str::limit($product->product_name_en, 20, '...') }}</a>
                </h3>
                @if (isset($product->discount))
                <p class="price_range" id="price_qv">
                  <del> ${{ $product->price }}</del>
                  <ins> ${{ round($product->price - (($product->discount * $product->price) / 100)) }}</ins>
                </p>
                @else
                <span class="price dib mb__5"> $ {{ $product->price }} <span class="text-danger"></span></span>
                @endif
              </div>
            </div>
          </div>
          @empty
          @endforelse

        </div>
        <div class="products-footer tc mt__40">
            
            {{-- <a class="se_cat_lm pr  button button_dark br_rd_false btn_icon_false" href="{{ route('categoryproductsen', $category->category_slug_en) }}">Load --}}
                More</a>
        </div>
      </div>
    </div>
    <!-- end Hot deals-->
  </div>
</div>
@endsection

@section('js')
<script>
  $(document).ready(function () {
      $('.add-to-cart').on('click', function (e) {
          e.preventDefault();
          
          // Get product ID from data attribute
          var productId = $(this).data('product-id');
  
          // AJAX request to add product to cart
          $.ajax({
              url: "{{ route('cart.add') }}", // Laravel route
              method: "POST",
              data: {
                  product_id: productId,
                  _token: "{{ csrf_token() }}" // CSRF token for security
              },
              success: function (response) {
                  if (response.status === 'success') {
                      // Show toast message
                      toastr.success(response.message);
  
                      // Optionally update cart count
                      $('.cart-count').text(response.cart_count);
                  } else {
                      toastr.error("Something went wrong!");
                  }
              },
              error: function () {
                  toastr.error("Failed to add product to cart.");
              }
          });
      });
  });
  </script>
  @endsection
