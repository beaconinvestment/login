<li class="{{ Request::is('admin/payments*') ? 'active' : '' }}">
    <a href="{!! route('admin.payments.index') !!}">
    <i class="livicon" data-c="#6CC66C" data-hc="#6CC66C" data-name="edit" data-size="18"
               data-loop="true"></i>
               Payments
    </a>
</li>

<li class="{{ Request::is('admin/bookings*') ? 'active' : '' }}">
    <a href="{!! route('admin.bookings.index') !!}">
    <i class="livicon" data-c="#6CC66C" data-hc="#6CC66C" data-name="edit" data-size="18"
               data-loop="true"></i>
               Bookings
    </a>
</li>

