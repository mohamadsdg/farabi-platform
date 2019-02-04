@extends('frontend.startup.register.layout')

@section('css')
    <style>
        .file-label {
            font-size: 0.8rem;
            text-align: center;
        }

        .file-label .icon {
            background: transparent url("{{ asset('assets/frontend/images/icon/upload.svg') }}") no-repeat right / contain;
            display: block;
            width: 20px;
            height: 20px;
            margin: 0 3px;
        }
    </style>
@endsection

@section('content')
    <section id="apply">
        <div class="uk-container">
            <div class="inner">
                <div class="form_all_group">
                    @include('frontend.startup.register.component.progress-tracker')
                    <form data-valid-form action="{{ route('frontend.startup.register.complete') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form_group_style1">
                            <div class="fg1_inner">
                                <div class="form_style1">
                                    <ul data-uk-grid>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="name">نام استارتاپ</label>
                                            <input name="name" value="{{ old('name') }}" type="text" id="name" autocomplete="off"
                                                   data-valid-required/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="start_date">تاریخ شروع فعالیت</label>
                                            <div data-wrapper-start>
                                                <input name="start_date"
                                                       type="text"
                                                       value="{{ old('start_date') }}"
                                                       class="uk-text-center"
                                                       readOnly id="start_date"
                                                       data-valid-required
                                                       autocomplete="off"/>
                                            </div>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="introduction">معرفی استارتاپ</label>
                                            <textarea name="introduction" id="introduction" data-autosize
                                                      data-valid-required>{{ old('introduction') }}</textarea>
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
                                                                               {{ (old('domains')) ? (in_array($domain->id, old('domains')) ? 'checked' : '' ): '' }}                                                                               value="{{ $domain->id }}"
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
                                            <ul class="uk-flex uk-child-width-1-4 wrapper_check">
                                                @if(isset($data['prop']))
                                                    @foreach($data['prop'] as $propGroup)
                                                        <li>
                                                            @foreach($propGroup as $prop)
                                                                <div class="check_style1">
                                                                    <label class="en_word">
                                                                        <input name="props[]"
                                                                               value="{{ $prop->id }}"
                                                                               {{ (old('props')) ? (in_array($prop->id, old('props')) ? 'checked' : '' ): '' }}
                                                                               class="uk-checkbox" type="checkbox"
                                                                               data-valid-min="7"
                                                                               data-valid-max="12">
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
                                                               data-valid-required
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        B2B
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type"
                                                               data-valid-required
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        B2B2C
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type"
                                                               data-valid-required
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        B2C
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type"
                                                               data-valid-required
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        C2C
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type"
                                                               data-valid-required
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        C2G
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label>
                                                        <input class="uk-radio" type="radio" name="type"
                                                               data-valid-required
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
                                                                   data-valid-required>
                                                            فقط يك ايده
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   data-valid-required>
                                                            در حال ساخت محصول
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   data-valid-required>
                                                            كمينه مجصول پذيرفتني(MVP)
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   data-valid-required>
                                                            به تازگي وارد بازار شده
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   data-valid-required>
                                                            محصول كامل با مشتريان اوليه
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   data-valid-required>
                                                            محصول كامل با مشتريان متعدد
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   data-valid-required>
                                                            در حال رشد سريع
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage"
                                                                   data-valid-required>
                                                            در مرحله بلوغ نهايي
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="s3">آیا نسخه نمایشی/وبسایت/ نمونه آزمایشی
                                                وجود
                                                دارد ؟</label>
                                            <div class="uk-display-inline-block uk-margin-small-right">
                                                <div class="uk-display-inline-block check_style1">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="is_mvp_ready"
                                                               value="1"
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
                                                               data-target-input="#mvp_address"
                                                               data-action-input="hidden"/>
                                                        خیر
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="text"
                                                   placeholder="لینک آن را وارد نمایید "
                                                   id="mvp_address"
                                                   autocomplete="off" style="display: none"/>
                                        </li>
                                        <!--<li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="s4">توضیح دهید که چرا این ایده را انتخاب
                                                کرده
                                                اید؟ </label>
                                            <textarea id="s4" data-autosize></textarea>
                                        </li>-->
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="working">
                                                چه مدت بر روی ایده خود کار کرده اید و تا کنون چه کارهایی انجام داده اید؟
                                            </label>
                                            <textarea name="working" id="working" data-autosize
                                                      data-valid-required></textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="similar_startup">
                                                مشابه استارتاپ شما در داخل يا خارج؟
                                            </label>
                                            <textarea name="similar_startup" id="similar_startup" data-autosize
                                                      data-valid-required></textarea>
                                        </li>
                                        <!--<li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="s7">
                                                آیا تا کنون شرکتی برای ایده ثبت شده است؟ اگر بله سهام هر کدام از اعضای
                                                تیم به چه شکل است؟ آیا دفتر کاری در حال حاضر دارید؟
                                            </label>
                                            <textarea id="s7" data-autosize></textarea>
                                        </li>-->
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="s10">
                                                آیا تا کنون شرکتی برای ایده ثبت شده است؟
                                            </label>
                                            <div class="uk-display-inline-block uk-margin-small-right">
                                                <div class="uk-display-inline-block check_style1">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="is_idea_submitted"
                                                               value="1"
                                                               data-target-input="#s10"
                                                               data-action-input="show"/>
                                                        بله
                                                    </label>
                                                </div>
                                                <div class="uk-display-inline-block check_style1 uk-margin-small-right">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="is_idea_submitted"
                                                               value="0"
                                                               data-target-input="#s10"
                                                               data-action-input="hidden"/>
                                                        خیر
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="s10" style="display: none">
                                                <div data-uk-grid>
                                                    <div class="fs1_item uk-width-1-2">
                                                        <label class="fs1_label" for="company_name">نام شرکت</label>
                                                        <input name="company_name" type="text" id="company_name"
                                                               autocomplete="off"/>
                                                    </div>
                                                    <div class="fs1_item uk-width-1-2">
                                                        <label class="fs1_label" for="company_rn">شماره ثبت</label>
                                                        <input name="company_rn" type="text" id="company_rn"
                                                               autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<textarea id="s10" data-autosize></textarea>-->
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="market_research">
                                                آیا تا کنون با مشتریان احتمالی خود صحبت کرده اید یا هیچ گونه مطالعات
                                                بازاری انجام داده اید؟
                                            </label>
                                            <textarea name="market_research" id="market_research"
                                                      data-autosize></textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="description">
                                                اگر توضیح بیشتری وجود دارد که لازم است ما بدانیم در زیر بنویسید.
                                            </label>
                                            <textarea name="description" id="description" data-autosize></textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">
                                                آپلود فایل های ضمیمه
                                            </label>
                                            <div class="uk-flex uk-flex-around">
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l uk-margin-small-left">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i>
                                                        <h4 class="text uk-margin-remove">آپلود فایل شماره یک</h4>
                                                    </div>
                                                    <input name="file" type="file" data-max-files="1">
                                                </div>
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l uk-margin-small-left">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i>
                                                        <h4 class="text uk-margin-remove">آپلود فایل شماره دوم</h4>
                                                    </div>
                                                    <input name="file" type="file" data-max-files="1">
                                                </div>
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l uk-margin-small-left">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i>
                                                        <h4 class="text uk-margin-remove">آپلود فایل شماره سوم</h4>
                                                    </div>
                                                    <input name="file" type="file" data-max-files="1">
                                                </div>
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i>
                                                        <h4 class="text uk-margin-remove">آپلود فایل شماره چهارم</h4>
                                                    </div>
                                                    <input name="file" type="file" data-max-files="1">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-medium uk-margin-remove-bottom uk-flex uk-flex-between">
                            <a href="apply-step2.html" class="btn_style1 bg_gray">بازگشت</a>
                            <!--<a href="#modal-policy" data-uk-toggle class="btn_style1 bg_purple">ثبت</a>-->
                            <button type="submit" class="btn_style1 bg_purple">ثبت</button>
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
                اینجانب <span>--------</span>
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
                <button class="btn_style1 bg_purple" type="button" disabled data-target="policy">ثبت و تایید نهایی
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
