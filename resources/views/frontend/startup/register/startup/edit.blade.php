@extends('frontend.startup.register.container.layout')

@section('content')
    <section id="apply">
        <div class="uk-container">
            <div class="inner">
                <div class="form_all_group">
                    @include('frontend.startup.register.component.progress-tracker')
                    <form data-valid-form action="{{ route('frontend.startup.register.startup.update') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form_group_style1">
                            <div class="fg1_inner">
                                <div class="form_style1">
                                    <ul data-uk-grid>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="name">نام استارتاپ</label>
                                            <input name="name" value="{{ $data['startup']->name }}" type="text"
                                                   id="name"
                                                   autocomplete="off"
                                                   data-valid-required/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="start_date">تاریخ شروع فعالیت</label>
                                            <div data-wrapper-start>
                                                <input name="start_date"
                                                       type="text"
                                                       class="uk-text-center"
                                                       value="{{ $data['startup']->start_date }}"
                                                       readOnly id="start_date"
                                                       data-valid-required
                                                       autocomplete="off"/>
                                            </div>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="introduction">معرفی استارتاپ</label>
                                            <textarea name="introduction"
                                                      id="introduction" data-autosize
                                                      data-valid-required>{{ $data['startup']->introduction }}</textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">حوزه فعالیت استارتاپ ؟</label>
                                            <ul class="uk-flex uk-child-width-1-4 wrapper_check" data-wrapper-group>
                                                @if(isset($data['domain']))
                                                    @foreach($data['domain'] as $domainGroup)
                                                        <li>
                                                            @foreach($domainGroup as $domain)
                                                                <div class="check_style1">
                                                                    <label class="en_word">
                                                                        <input name="domains[]"
                                                                               {{ (in_array($domain->id, $data['domains']) ? 'checked' : '' ) }}                                                                               value="{{ $domain->id }}"
                                                                               class="uk-checkbox" type="checkbox"
                                                                               data-valid-min="7"
                                                                               data-valid-max="12">
                                                                        {{ $domain->title }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">كدام يك از موارد زير در استارتاپ شما وجود دارد
                                                ؟</label>
                                            <ul class="uk-flex uk-child-width-1-4 wrapper_check" data-wrapper-group>
                                                @if(isset($data['prop']))
                                                    @foreach($data['prop'] as $propGroup)
                                                        <li>
                                                            @foreach($propGroup as $prop)
                                                                <div class="check_style1">
                                                                    <label class="en_word">
                                                                        <input name="props[]"
                                                                               value="{{ $prop->id }}"
                                                                               {{ (in_array($prop->id, $data['props']) ? 'checked' : '' ) }}
                                                                               class="uk-checkbox" type="checkbox"
                                                                               data-valid-min="3" data-valid-max="5">
                                                                        {{ $prop->title }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">
                                                نوع كسب و كار شما
                                            </label>
                                            <ul class="uk-flex uk-flex-middle uk-child-width-1-5 wrapper_check">
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type"
                                                               value="B2B"
                                                               data-valid-required
                                                               {{ $data['startup']->type == 'B2B' ? 'checked' : '' }}
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        B2B
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type"
                                                               value="B2B2C"
                                                               data-valid-required
                                                               {{ $data['startup']->type == 'B2B2C' ? 'checked' : '' }}
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        B2B2C
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type"
                                                               value="B2C"
                                                               data-valid-required
                                                               {{ $data['startup']->type == 'B2C' ? 'checked' : '' }}
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        B2C
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type"
                                                               value="C2C"
                                                               data-valid-required
                                                               {{ $data['startup']->type == 'C2C' ? 'checked' : '' }}
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        C2C
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type"
                                                               value="C2G"
                                                               data-valid-required
                                                               {{ $data['startup']->type == 'C2G' ? 'checked' : '' }}
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        C2G
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label>
                                                        <input class="uk-radio" type="radio" name="type"
                                                               data-valid-required
                                                               {{ $data['startup']->type == 'Other' ? 'checked' : '' }}
                                                               data-target-input="#s13" data-action-input="show">
                                                        دیگر
                                                    </label>
                                                </li>
                                            </ul>
                                            <input type="text" id="s13" placeholder="نوع کسب و کار خود را بنویسید ..."
                                                   autocomplete="off" style="display: none"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">كدام يك از موارد زير در استارتاپ شما وجود دارد
                                                ؟</label>
                                            <ul class="uk-flex wrapper_check uk-child-width-1-4">
                                                <li>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   value="JAI"
                                                                   {{ $data['startup']->stage == 'JAI' ? 'checked' : '' }}
                                                                   data-valid-required>
                                                            فقط يك ايده
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   value="DAP"
                                                                   {{ $data['startup']->stage == 'DAP' ? 'checked' : '' }}
                                                                   data-valid-required>
                                                            در حال ساخت محصول
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   value="MVP"
                                                                   {{ $data['startup']->stage == 'MVP' ? 'checked' : '' }}
                                                                   data-valid-required>
                                                            كمينه مجصول پذيرفتني(MVP)
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   value="HJETM"
                                                                   {{ $data['startup']->stage == 'HJETM' ? 'checked' : '' }}
                                                                   data-valid-required>
                                                            به تازگي وارد بازار شده
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   value="CPWPC"
                                                                   {{ $data['startup']->stage == 'CPWPC' ? 'checked' : '' }}
                                                                   data-valid-required>
                                                            محصول كامل با مشتريان اوليه
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   value="CPWNC"
                                                                   {{ $data['startup']->stage == 'CPWNC' ? 'checked' : '' }}
                                                                   data-valid-required>
                                                            محصول كامل با مشتريان متعدد
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   value="FG"
                                                                   {{ $data['startup']->stage == 'FG' ? 'checked' : '' }}
                                                                   data-valid-required>
                                                            در حال رشد سريع
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   value="ITFMS"
                                                                   {{ $data['startup']->stage == 'ITFMS' ? 'checked' : '' }}
                                                                   data-valid-required>
                                                            در مرحله بلوغ نهايي
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">آیا نسخه نمایشی/وبسایت/ نمونه آزمایشی
                                                وجود
                                                دارد ؟</label>
                                            <div class="uk-display-inline-block uk-margin-small-right">
                                                <div class="uk-display-inline-block check_style1">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="is_mvp_ready"
                                                               value="1"
                                                               {{ $data['startup']->is_mvp_ready ? 'checked' : '' }}
                                                               id="has_mvp"
                                                               data-valid-depend="#mvp_address"
                                                               data-target-input="#mvp_address"
                                                               data-action-input="show"/>
                                                        بله
                                                    </label>
                                                </div>
                                                <div class="uk-display-inline-block check_style1 uk-margin-small-right">
                                                    <label>
                                                        <input class="uk-radio" type="radio"
                                                               name="is_mvp_ready"
                                                               value="0"
                                                               {{ $data['startup']->is_mvp_ready ? '' : 'checked' }}
                                                               data-target-input="#mvp_address"
                                                               data-action-input="hidden"/>
                                                        خیر
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="text"
                                                   placeholder="لینک آن را وارد نمایید "
                                                   id="mvp_address"
                                                   name="mvp_address"
                                                   value="{{ $data['startup']->mvp_address }}"
                                                   autocomplete="off" style="display: none"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="working">
                                                چه مدت بر روی ایده خود کار کرده اید و تا کنون چه کارهایی انجام داده اید؟
                                            </label>
                                            <textarea name="working" id="working" data-autosize
                                                      data-valid-required>{{ $data['startup']->working }}</textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="similar_startup">
                                                مشابه استارتاپ شما در داخل يا خارج؟
                                            </label>
                                            <textarea name="similar_startup" id="similar_startup" data-autosize
                                                      data-valid-required>{{ $data['startup']->similar_startup }}</textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">
                                                آیا تا کنون شرکتی برای ایده ثبت شده است؟
                                            </label>
                                            <div class="uk-display-inline-block uk-margin-small-right">
                                                <div class="uk-display-inline-block check_style1">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="is_idea_submitted"
                                                               {{ $data['startup']->is_idea_submitted ? 'checked' : '' }}
                                                               value="1"
                                                               id="has_company"
                                                               data-valid-depend="#company_rn"
                                                               data-target-input="#company_status"
                                                               data-action-input="show"/>
                                                        بله
                                                    </label>
                                                </div>
                                                <div class="uk-display-inline-block check_style1 uk-margin-small-right">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="is_idea_submitted"
                                                               {{ $data['startup']->is_idea_submitted ? '' : 'checked' }}
                                                               value="0"
                                                               data-target-input="#company_status"
                                                               data-action-input="hidden"/>
                                                        خیر
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="company_status" style="display: none">
                                                <div data-uk-grid>
                                                    <div class="fs1_item uk-width-1-2">
                                                        <label class="fs1_label" for="company_name">نام شرکت</label>
                                                        <input name="company_name" type="text" id="company_name"
                                                               value="{{ $data['startup']->company_name }}"
                                                               autocomplete="off"/>
                                                    </div>
                                                    <div class="fs1_item uk-width-1-2">
                                                        <label class="fs1_label" for="company_rn">شماره ثبت</label>
                                                        <input name="company_rn" type="text" id="company_rn"
                                                               value="{{ $data['startup']->company_rn }}"
                                                               autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<textarea id="s10" data-autosize></textarea>-->
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label opt" for="market_research">
                                                آیا تا کنون با مشتریان احتمالی خود صحبت کرده اید یا هیچ گونه مطالعات
                                                بازاری انجام داده اید؟
                                            </label>
                                            <textarea name="market_research" id="market_research"
                                                      data-autosize>{{ $data['startup']->market_research }}</textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label opt" for="description">
                                                اگر توضیح بیشتری وجود دارد که لازم است ما بدانیم در زیر بنویسید.
                                            </label>
                                            <textarea name="description" id="description"
                                                      data-autosize>{{ $data['startup']->description }}</textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">
                                                آپلود فایل های ضمیمه
                                            </label>
                                            <div class="uk-flex uk-flex-around uk-margin-small-top">
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l uk-margin-small-left">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i><h4 class="text uk-margin-remove">business
                                                            model</h4></div>
                                                    <input type="file" data-max-files="1" name="business_model"
                                                           value="{{ $data['startup']->business_model }}">
                                                </div>
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l uk-margin-small-left">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i><h4 class="text uk-margin-remove">business
                                                            plan</h4></div>
                                                    <input type="file" data-max-files="1" name="business_plan"
                                                           value="{{ $data['startup']->business_plan }}">
                                                </div>
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l uk-margin-small-left">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i><h4 class="text uk-margin-remove">finance
                                                            model</h4></div>
                                                    <input type="file" data-max-files="1" name="finance_model"
                                                           value="{{ $data['startup']->finance_model }}">
                                                </div>
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i><h4 class="text uk-margin-remove">
                                                            pitchdeck</h4></div>
                                                    <input type="file" data-max-files="1" name="pitchdeck"
                                                           value="{{ $data['startup']->pitchdeck }}">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-medium uk-margin-remove-bottom uk-flex uk-flex-between">
                            <a href="{{ route('frontend.startup.register.team.edit') }}" class="btn_style1 bg_gray">بازگشت</a>
                            <button type="submit" data-check-submit class="btn_style1 bg_purple">ثبت</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('modal')
    <div id="modal-policy" data-uk-modal class="modal_style1">
        <div class="uk-modal-dialog uk-modal-body">
            <h2 class="ms1_title">قوانین و شرایط</h2>
            <p class="ms1_body">
                اینجانب
                با مطالعه ی کامل قوانین و شرایط شتابدهنده ستارگان فارابی نسبت به ثبت نام اولیه شتابدهنده اقدام نموده
                ایم.
                این ثبت نام هیچ گونه حق یا حقوقی برای بنده ایجاد نمی نماید و در حین انجام پروسه های اداری و عقد قرار داد
                نسبت به حقوق خود مطلع خواهم شد.
            </p>
            <div class="ms1_footer uk-text-left uk-margin-medium-top">
                <div class="check_style1">
                    <label>
                        <input class="uk-checkbox" type="checkbox" name="policy">
                        با این شرایط موافقم
                    </label>
                </div>
                <button class="btn_style1 bg_purple" data-btn-submit type="button" disabled data-target="policy">ثبت و
                    تایید
                    نهایی
                </button>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/frontend/_plugin/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/_plugin/moment-jalaali/moment-jalaali.js') }}"></script>
    <script src="{{ asset('assets/frontend/_plugin/persian_datepicker/daterangepicker-fa-ex.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/frontend/_plugin/persian_datepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets/frontend/_plugin/persian_datepicker/date_rangepicker_persian.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/_plugin/filepond-master/dist/filepond.min.css') }}">
    <script type="text/javascript"
            src="{{ asset('assets/frontend/_plugin/filepond-master/dist/filepond.min.js') }}"></script>
    <script>
        const inputElement = $('input[type="file"]');
        inputElement.map(function (index, elem) {
            let pond = FilePond.create(elem);
            pond.setOptions({
                server: '/startup/upload',
                labelIdle: 'فایل خود را بکشید و یا <span class="filepond--label-action"> انتخاب کنید </span>',
                labelButtonRemoveItem: 'پاک کنید',
                labelFileLoading: 'در حال بارگذاری',
                labelFileProcessing: 'در حال آپلود',
                labelFileProcessingComplete: 'آپلود کامل شد'
            });
        });
    </script>
@endsection
