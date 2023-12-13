@props(['icon', 'odometer'])

<div class="col-lg-3 col-sm-6">
    <div class="counter-single">
        <div class="counter-icon">
            <img
                src="/assets/images/icon/{{ $icon }}.svg"
                alt="image"
            >
        </div>
        <div class="coundown">
            <p>Live Jobs</p>
            <div class="d-flex align-items-center gap-2">
                <h3 class="odometer">
                    {{ $odometer }}
                </h3>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
