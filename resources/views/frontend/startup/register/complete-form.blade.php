@extends('frontend.startup.register.layout')

@section('content')
    <section id="apply">
        <div class="uk-container">
            <div class="inner">
                <div class="form_all_group">
                    <div class="progress_tracker_style1">
                        <ul class="uk-flex uk-flex-around uk-margin-remove">
                            <li>
                                <div class="pts1_step pass">
                                    <span class="pts1_shape"></span>
                                    <span class="pts1_text">
                                        مشخصات موسس تیم
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="pts1_step pass">
                                    <span class="pts1_shape"></span>
                                    <span class="pts1_text">
                                        اطلاعات تیم
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="pts1_step active">
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
                                            <label class="fs1_label req" for="s0">نام استارتاپ</label>
                                            <input type="text" id="s0" autocomplete="off"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label req" for="s1">تاریخ شروع فعالیت</label>
                                            <div data-wrapper-start>
                                                <input type="text" class="uk-text-center" readOnly id="s1"
                                                       autocomplete="off"/>
                                            </div>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="s2">معرفی استارتاپ</label>
                                            <textarea id="s2" data-autosize></textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req">حوزه فعالیت استارتاپ ؟</label>
                                            <ul class="uk-flex uk-child-width-1-4 wrapper_check">
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox" checked>
                                                            CRM
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Game
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Valu Added Services
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Consultant
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Media
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Mobile
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Real State
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Managemen_wordt Tool
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Banking
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            M-Health
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Smart Home
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Infrasructure
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            User Gen_worderate
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            e-commerce
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Retail
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Travel
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Home Services
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Paymen_wordt
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Hardware & Devices
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Education & edutech
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            en_wordtertainmen_wordt
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Printing Tech
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Fintech
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            en_wordergy
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Public Transportation
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Market Place
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Social Media
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Insurance
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Online Store
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Clean
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Sports
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Legal Services
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Security
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Non-Profit
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Fashion
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Marketing
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Tourism
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Delivery
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            3D Printing
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Agriculture
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            E-Health
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Human Recourse
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Conten_wordt
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Green_word Tech
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Hospitality
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Food Tech
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Art
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Bio Technology
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Classification
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Data Analysis
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Advertismen_wordt
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Nano Technology
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Logistics
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Other…
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req">كدام يك از موارد زير در استارتاپ شما وجود دارد
                                                ؟</label>
                                            <ul class="uk-flex uk-child-width-1-4 wrapper_check">
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox" checked>
                                                            Augmented Reality
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Telecom
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Block Chain
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            IoT
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Machine Learning
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Cloud
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Big Data
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Artificial Intelligent
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Mobile app
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Robotics
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Virtual Reality
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            SaaS
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            Data Science
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input class="uk-checkbox" type="checkbox">
                                                            New Technologies
                                                        </label>
                                                    </div>

                                                </li>
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req">
                                                نوع كسب و كار شما
                                            </label>
                                            <ul class="uk-flex uk-flex-middle uk-child-width-1-5 wrapper_check">
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type_business"
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        B2B
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type_business"
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        B2B2C
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type_business"
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        B2C
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type_business"
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        C2C
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label class="en_word">
                                                        <input class="uk-radio" type="radio" name="type_business"
                                                               data-target-input="#s13" data-action-input="hidden">
                                                        C2G
                                                    </label>
                                                </li>
                                                <li class="check_style1">
                                                    <label>
                                                        <input class="uk-radio" type="radio" name="type_business"
                                                               data-target-input="#s13" data-action-input="show">
                                                        دیگر
                                                    </label>
                                                </li>
                                            </ul>
                                            <input type="text" id="s13" placeholder="نوع کسب و کار خود را بنویسید ..."
                                                   autocomplete="off" style="display: none"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req">كدام يك از موارد زير در استارتاپ شما وجود دارد
                                                ؟</label>
                                            <ul class="uk-flex wrapper_check uk-child-width-1-4">
                                                <li>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage">
                                                            فقط يك ايده
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage">
                                                            در حال ساخت محصول
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage">
                                                            كمينه مجصول پذيرفتني(MVP)
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage">
                                                            به تازگي وارد بازار شده
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage">
                                                            محصول كامل با مشتريان اوليه
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage">
                                                            محصول كامل با مشتريان متعدد
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage">
                                                            در حال رشد سريع
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label>
                                                            <input class="uk-radio" type="radio" name="stage">
                                                            در مرحله بلوغ نهايي
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="s3">آیا نسخه نمایشی/وبسایت/ نمونه آزمایشی
                                                وجود
                                                دارد ؟</label>
                                            <div class="uk-display-inline-block uk-margin-small-right">
                                                <div class="uk-display-inline-block check_style1">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio" name="trial_v" value="1"
                                                               data-target-input="#s3"
                                                               data-action-input="show"/>
                                                        بله
                                                    </label>
                                                </div>
                                                <div class="uk-display-inline-block check_style1 uk-margin-small-right">
                                                    <label>
                                                        <input class="uk-radio" type="radio" name="trial_v" value="0"
                                                               data-target-input="#s3"
                                                               data-action-input="hidden"/>
                                                        خیر
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="text" placeholder="لینک آن را وارد نمایید " id="s3"
                                                   autocomplete="off" style="display: none"/>
                                        </li>
                                        <!--<li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="s4">توضیح دهید که چرا این ایده را انتخاب
                                                کرده
                                                اید؟ </label>
                                            <textarea id="s4" data-autosize></textarea>
                                        </li>-->
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="s5">
                                                چه مدت بر روی ایده خود کار کرده اید و تا کنون چه کارهایی انجام داده اید؟
                                            </label>
                                            <textarea id="s5" data-autosize></textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="s6">
                                                مشابه استارتاپ شما در داخل يا خارج؟
                                            </label>
                                            <textarea id="s6" data-autosize></textarea>
                                        </li>
                                        <!--<li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="s7">
                                                آیا تا کنون شرکتی برای ایده ثبت شده است؟ اگر بله سهام هر کدام از اعضای
                                                تیم به چه شکل است؟ آیا دفتر کاری در حال حاضر دارید؟
                                            </label>
                                            <textarea id="s7" data-autosize></textarea>
                                        </li>-->
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="s10">
                                                آیا تا کنون شرکتی برای ایده ثبت شده است؟
                                            </label>
                                            <div class="uk-display-inline-block uk-margin-small-right">
                                                <div class="uk-display-inline-block check_style1">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="has_company" value="1"
                                                               data-target-input="#s10" data-action-input="show"/>
                                                        بله
                                                    </label>
                                                </div>
                                                <div class="uk-display-inline-block check_style1 uk-margin-small-right">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="has_company" value="0"
                                                               data-target-input="#s10" data-action-input="hidden"/>
                                                        خیر
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="s10" style="display: none">
                                                <div data-uk-grid>
                                                    <div class="fs1_item uk-width-1-2">
                                                        <label class="fs1_label" for="s11">نام شرکت</label>
                                                        <input type="text" id="s11" autocomplete="off"/>
                                                    </div>
                                                    <div class="fs1_item uk-width-1-2">
                                                        <label class="fs1_label" for="s12">شماره ثبت</label>
                                                        <input type="text" id="s12" autocomplete="off"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<textarea id="s10" data-autosize></textarea>-->
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="s8">
                                                آیا تا کنون با مشتریان احتمالی خود صحبت کرده اید یا هیچ گونه مطالعات
                                                بازاری انجام داده اید؟
                                            </label>
                                            <textarea id="s8" data-autosize></textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="s9">
                                                اگر توضیح بیشتری وجود دارد که لازم است ما بدانیم در زیر بنویسید.
                                            </label>
                                            <textarea id="s9" data-autosize></textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">
                                                آپلود فایل های ضمیمه
                                            </label>
                                            <div class="uk-flex uk-flex-around">
                                                <div class="js-upload" data-uk-form-custom>
                                                    <input type="file" multiple>
                                                    <button class="uk-button uk-button-default" type="button"
                                                            tabindex="-1">
                                                        <span class="en">business model</span>
                                                    </button>
                                                </div>
                                                <div class="js-upload" data-uk-form-custom>
                                                    <input type="file" multiple>
                                                    <button class="uk-button uk-button-default" type="button"
                                                            tabindex="-1">
                                                        <span class="en">business plane</span>
                                                    </button>
                                                </div>
                                                <div class="js-upload" data-uk-form-custom>
                                                    <input type="file" multiple>
                                                    <button class="uk-button uk-button-default" type="button"
                                                            tabindex="-1">
                                                        <span class="en">finance model</span>
                                                    </button>
                                                </div>
                                                <div class="js-upload" data-uk-form-custom>
                                                    <input type="file" multiple>
                                                    <button class="uk-button uk-button-default" type="button"
                                                            tabindex="-1">
                                                        <span class="en">peachtech</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-medium uk-margin-remove-bottom uk-flex uk-flex-between">
                            <a href="apply-step2.html" class="btn_style1 bg_gray">بازگشت</a>
                            <a href="#modal-policy" data-uk-toggle class="btn_style1 bg_purple">ثبت</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
