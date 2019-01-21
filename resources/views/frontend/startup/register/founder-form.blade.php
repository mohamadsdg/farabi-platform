@extends('frontend.startup.register.layout')

@section('content')
    <section id="apply">
        <div class="uk-container">
            <div class="inner">
                <div class="form_all_group">
                    <div class="progress_tracker_style1">
                        <ul class="uk-flex uk-flex-around uk-margin-remove">
                            <li>
                                <div class="pts1_step active">
                                    <span class="pts1_shape"></span>
                                    <span class="pts1_text">
                                        مشخصات موسس تیم
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="pts1_step">
                                    <span class="pts1_shape"></span>
                                    <span class="pts1_text">
                                        اطلاعات تیم
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="pts1_step">
                                    <span class="pts1_shape"></span>
                                    <span class="pts1_text">
                                        اطلاعات استارتاپ
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <form>
                        <div class="form_group_style1">
                            <div class="fg1_inner">
                                <div class="form_style1">
                                    <ul data-uk-grid>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="p0">نام </label>
                                            <input type="text" id="p0" autocomplete="off"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="p00">نام خانوادگی</label>
                                            <input type="text" id="p00" autocomplete="off"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-3">
                                            <label class="fs1_label" for="p9">مقطع تحصیلی</label>
                                            <select name="" id="p9">
                                                <option disabled selected>-- انتخاب نمایید --</option>
                                                <option value="0">دیپلم</option>
                                                <option value="1">کارشناسی</option>
                                                <option value="2">کارشناسی ارشد</option>
                                                <option value="3">دکتری</option>
                                                <option value="5">سایر ...</option>
                                            </select>
                                        </li>
                                        <li class="fs1_item uk-width-1-3">
                                            <label class="fs1_label" for="p2">دانشگاه</label>
                                            <select name="" id="p2">
                                                <option disabled selected>-- انتخاب نمایید --</option>
                                                <option value="0">تهران</option>
                                                <option value="1">شهید بهشتی</option>
                                                <option value="2">شریف</option>
                                                <option value="3">امیر کبیر</option>
                                                <option value="4">خواجه نصیر</option>
                                                <option value="5">علامه طباطبایی</option>
                                                <option value="6">آزاد</option>
                                                <option value="7">سایر ...</option>
                                            </select>
                                        </li>
                                        <li class="fs1_item uk-width-1-3">
                                            <label class="fs1_label" for="p1">رشته تحصیلی</label>
                                            <input type="text" id="p1" autocomplete="off"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="p5">نشانی ایمیل</label>
                                            <input type="text" id="p5" autocomplete="off"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="p4">شماره همراه</label>
                                            <input type="text" id="p4" autocomplete="off"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="p33">
                                                جنسیت
                                            </label>
                                            <div class="uk-display-inline-block uk-margin-small-right">
                                                <div class="uk-display-inline-block check_style1">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="gender"
                                                               data-target-input="#p33" data-action-input="show"/>
                                                        مرد
                                                    </label>
                                                </div>
                                                <div class="uk-display-inline-block check_style1 uk-margin-small-right">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="gender"
                                                               data-target-input="#p33" data-action-input="hidden"/>
                                                        زن
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="p33" style="display:none">
                                                <label class="fs1_label" for="p3">وضعیت نظام وظیفه</label>
                                                <select name="" id="p3">
                                                    <option disabled selected>-- انتخاب نمایید --</option>
                                                    <option value="0">معافیت دائم</option>
                                                    <option value="1">معافیت موقت</option>
                                                    <option value="2">مشمول</option>
                                                    <option value="3">اتمام خدمت</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label">تخصص شما در کدام حوزه است ؟</label>
                                            <ul class="uk-flex  uk-flex-around">
                                                <li>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox"> توسعه
                                                            استارتاپ </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox">طراحی</label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox">فنی </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox">مالی </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox"> سرمایه گذاري
                                                            و
                                                            جذب منابع </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox">ماركتینگ
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox">اجراي
                                                            عملیات</label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox">مدیریت
                                                            محصول</label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox">فروش </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox">استراتژي
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox">ساخت تجربه
                                                            كاربري
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label><input class="uk-checkbox" type="checkbox">حقوقی</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label opt" for="p6">مهمترین دستاورد شما تا حالا چه چیزی
                                                بوده ؟ </label>
                                            <textarea id="p6" data-autosize></textarea>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-medium uk-margin-remove-bottom uk-flex uk-flex-row-reverse">
                            <a href="apply-step2.html" class="btn_style1 bg_purple">تائید و ادامه</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
