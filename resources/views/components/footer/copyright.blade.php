<!-- Footer Copyright-->
<div class="rn-footer-copyright">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p>Copyright &copy; Veloce Rentals {{ \Carbon\Carbon::now()->year }}. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-right">
                <span class="rn-pyament-methods">
                    <span>We Accept</span>
                    <img src="{{ asset('images/payments.png') }}" alt="payments" srcset="{{ asset('images/payments.png') }} 1x, {{ asset('images/payments@2x.png') }} 2x">
                </span>
            </div>
        </div>
    </div>
</div>
