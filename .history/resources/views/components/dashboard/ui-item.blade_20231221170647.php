@props(['uiColor' => '', 'uiIcon' => 'la-file-invoice', 'uiTitle' => 'Applications', 'uiValue' => ''])
    <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12" style="cursor: pointer" onclick="window.location='{{ route($link) }}'">
        <div class="ui-item {{ $uiColor }}">
            <div class="left">
                <i class="icon icon la {{ $uiIcon }}"></i>
            </div>
            <div class="right">
                <h4>{{ $uiValue }}</h4>
                <p>{{ $uiTitle }}</p>
            </div>
        </div>
    </div>

