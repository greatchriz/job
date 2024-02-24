@extends('normal-layout')

@section('content')

<!-- Order Confirmation -->
<section class="order-confirmation">
    <div class="auto-container">
        <div class="upper-box">
            <span class="icon fa fa-check"></span>
            <h4>Your order is completed!</h4>
            <div class="text">Thank you. Your order has been received.</div>
        </div>

        <ul class="order-info">
            <li>
                <span>Order Number</span>
                <strong>13119</strong>
            </li>

            <li>
                <span>Date</span>
                <strong>27/07/2021</strong>
            </li>

            <li>
                <span>Total</span>
                <strong>$40.10</strong>
            </li>

            <li>
                <span>Payment Method</span>
                <strong>Direct Bank Transfer</strong>
            </li>
        </ul>

        <!--Order Box-->
        <div class="order-box">
            <h3>Order details</h3>
            <table>
                <thead>
                    <tr>
                        <th><strong>Product</strong></th>
                        <th><strong>Subtotal</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart-item">
                        <td class="product-name">Hoodie x2</td>
                        <td class="product-total">59.00</td>
                    </tr>

                    <tr class="cart-item">
                        <td class="product-name">Seo Books x 1</td>
                        <td class="product-total">67.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="cart-subtotal">
                        <td>Subtotal</td>
                        <td><span class="amount">$178.00</span></td>
                    </tr>
                    <tr class="cart-subtotal">
                        <td>Shipping</td>
                        <td><span class="amount">$178.00</span></td>
                    </tr>
                    <tr class="order-total">
                        <td>Total</td>
                        <td><span class="amount">$9,218.00</span></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!--End Order Box-->
    </div>
</section>
<!-- End Order Confirmation -->
@endsection
