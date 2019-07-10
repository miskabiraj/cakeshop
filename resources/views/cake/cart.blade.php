@extends('cake.layout.master')
<!-- End Page title area -->

@section('title')
    Shopping Cart
@endsection


@section('content')

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">


            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-remove">
                                        <a title="Remove this item" class="remove" href="#">×</a>
                                    </td>

                                    <td class="product-thumbnail">
                                        <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product-2.jpg"></a>
                                    </td>

                                    <td class="product-name">
                                        <a href="single-product.html">Ship Your Idea</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="amount">£15.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="quantity buttons_added">
                                            <input type="button" class="minus" value="-">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                            <input type="button" class="plus" value="+">
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="amount">£15.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="actions" colspan="6">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label>
                                            <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                            <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                        </div>
                                        <input type="submit" value="Update Cart" name="update_cart" class="button">
                                        <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2>You may be interested in...</h2>
                                <ul class="products">
                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-2.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>

                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-4.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount">£15.00</span></td>
                                    </tr>

                                    <tr class="shipping">
                                        <th>Shipping and Handling</th>
                                        <td>Free Shipping</td>
                                    </tr>

                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount">£15.00</span></strong> </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


{{--                            <form method="post" action="#" class="shipping_calculator">--}}
{{--                                <h2><a class="shipping-calculator-button" data-toggle="collapse" href="#calcalute-shipping-wrap" aria-expanded="false" aria-controls="calcalute-shipping-wrap">Calculate Shipping</a></h2>--}}

{{--                                <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">--}}

{{--                                    <p class="form-row form-row-wide">--}}
{{--                                        <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">--}}
{{--                                            <option value="">Select a country…</option>--}}
{{--                                            <option value="AX">Åland Islands</option>--}}
{{--                                            <option value="AF">Afghanistan</option>--}}
{{--                                            <option value="AL">Albania</option>--}}
{{--                                            <option value="BO">Bolivia</option>--}}
{{--                                            <option value="BQ">Bonaire, Saint Eustatius and Saba</option>--}}
{{--                                            <option value="BA">Bosnia and Herzegovina</option>--}}
{{--                                            <option value="BW">Botswana</option>--}}
{{--                                            <option value="BV">Bouvet Island</option>--}}
{{--                                            <option value="BR">Brazil</option>--}}
{{--                                            <option value="IO">British Indian Ocean Territory</option>--}}
{{--                                            <option value="VG">British Virgin Islands</option>--}}
{{--                                            <option value="BN">Brunei</option>--}}
{{--                                            <option value="BG">Bulgaria</option>--}}
{{--                                            <option value="BF">Burkina Faso</option>--}}
{{--                                            <option value="BI">Burundi</option>--}}
{{--                                            <option value="KH">Cambodia</option>--}}
{{--                                            <option value="CM">Cameroon</option>--}}
{{--                                            <option value="CA">Canada</option>--}}
{{--                                            <option value="CV">Cape Verde</option>--}}
{{--                                            <option value="KY">Cayman Islands</option>--}}
{{--                                            <option value="CF">Central African Republic</option>--}}
{{--                                            <option value="TD">Chad</option>--}}
{{--                                            <option value="CL">Chile</option>--}}

{{--                                            <option value="MM">Myanmar</option>--}}
{{--                                            <option value="NA">Namibia</option>--}}

{{--                                        </select>--}}
{{--                                    </p>--}}

{{--                                    <p class="form-row form-row-wide"><input type="text" id="calc_shipping_state" name="calc_shipping_state" placeholder="State / county" value="" class="input-text"> </p>--}}

{{--                                    <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / Zip" value="" class="input-text"></p>--}}


{{--                                    <p><button class="button" value="1" name="calc_shipping" type="submit">Update Totals</button></p>--}}

{{--                                </section>--}}
{{--                            </form>--}}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


