@props(['uiColor' => '', 'uiIcon' => 'la-file-invoice', 'uiTitle' => 'Applications', 'uiValue' => ''])
    <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="ui-item {{ $uiColor }}">
            <div class="left">
                <i class="icon icon la {{ $uiIcon }}"></i>
            </div>
            <div class="right">
                <h4>22</h4>
                <p>Posted Jobs</p>
            </div>
        </div>
    </div>



    <div {{ $attributes->merge(['class' => 'bg-red-500 text-white']) }}>
        <!-- Content here -->
    </div>


</div>
