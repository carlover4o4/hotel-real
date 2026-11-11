<section class="hotel-panel">
    <div class="hotel-panel-title">Temukan kamar untuk perjalananmu</div>
    <form action="{{ route('home') }}" method="GET">
        <div class="row g-3 align-items-end">
            <div class="col-md-4">
                <label for="checkin" class="form-label">Check-in</label>
                <input id="checkin" type="date" name="checkin" class="form-control" value="{{ request('checkin') }}" required>
            </div>
            <div class="col-md-4">
                <label for="checkout" class="form-label">Check-out</label>
                <input id="checkout" type="date" name="checkout" class="form-control" value="{{ request('checkout') }}" required>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary w-100">Cari Kamar</button>
            </div>
        </div>
    </form>
</section>