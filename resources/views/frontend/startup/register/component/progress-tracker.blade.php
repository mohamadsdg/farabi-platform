<div class="progress_tracker_style1">
    <ul class="uk-flex uk-flex-around uk-margin-remove">
        <li>
            <div class="pts1_step {{ (session('current-step') == 1) ? 'active' : '' }} {{ (session('current-step') > 1) ? 'pass' : '' }}">
                <span class="pts1_shape"></span>
                <span class="pts1_text">
                    مشخصات موسس تیم
                </span>
            </div>
        </li>
        <li>
            <div class="pts1_step {{ (session('current-step') == 2) ? 'active' : '' }} {{ (session('current-step') > 2) ? 'pass' : '' }}">
                <span class="pts1_shape"></span>
                <span class="pts1_text">
                    اطلاعات تیم
                </span>
            </div>
        </li>
        <li>
            <div class="pts1_step {{ (session('current-step') == 3) ? 'active' : '' }} {{ (session('current-step') > 3) ? 'pass' : '' }}">
                <span class="pts1_shape"></span>
                <span class="pts1_text">
                    اطلاعات استارتاپ
                </span>
            </div>
        </li>
    </ul>
</div>
