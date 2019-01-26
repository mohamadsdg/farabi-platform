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
                    <form data-valid-form action="{{ route('frontend.startup.register.complete') }}" method="POST">
                        @csrf
                        <div class="form_group_style1">
                            <div class="fg1_inner">
                                <div class="form_style1">
                                    <ul data-uk-grid>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="name">نام استارتاپ</label>
                                            <input name="name" type="text" id="name" autocomplete="off"
                                                   data-valid-required/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="start_date">تاریخ شروع فعالیت</label>
                                            <div data-wrapper-start>
                                                <input name="start_date"
                                                       type="text"
                                                       class="uk-text-center"
                                                       readOnly id="start_date"
                                                       data-valid-required
                                                       autocomplete="off"/>
                                            </div>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="introduction">معرفی استارتاپ</label>
                                            <textarea name="introduction" id="introduction" data-autosize
                                                      data-valid-required></textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">حوزه فعالیت استارتاپ ؟</label>
                                            <ul class="uk-flex uk-child-width-1-4 wrapper_check" data-wrapper-group>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            CRM
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Game
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Valu Added Services
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Consultant
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Media
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Mobile
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Real State
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Managemen_wordt Tool
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Banking
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            M-Health
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Smart Home
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Infrasructure
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            User Gen_worderate
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            e-commerce
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Retail
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Travel
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Home Services
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Paymen_wordt
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Hardware & Devices
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Education & edutech
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            en_wordtertainmen_wordt
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Printing Tech
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Fintech
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            en_wordergy
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Public Transportation
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Market Place
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Social Media
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Insurance
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Online Store
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Clean
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Sports
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Legal Services
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Security
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Non-Profit
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Fashion
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Marketing
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Tourism
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Delivery
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            3D Printing
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Agriculture
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            E-Health
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Human Recourse
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Conten_wordt
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Green_word Tech
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Hospitality
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Food Tech
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Art
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Bio Technology
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Classification
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Data Analysis
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Advertismen_wordt
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Nano Technology
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Logistics
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="domain" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="7" data-valid-max="12">
                                                            Other…
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label">كدام يك از موارد زير در استارتاپ شما وجود دارد
                                                ؟</label>
                                            <ul class="uk-flex uk-child-width-1-4 wrapper_check">
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Augmented Reality
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Telecom
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Block Chain
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            IoT
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Machine Learning
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Cloud
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Big Data
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Artificial Intelligent
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Mobile app
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Robotics
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Virtual Reality
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            SaaS
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            Data Science
                                                        </label>
                                                    </div>
                                                    <div class="check_style1">
                                                        <label class="en_word">
                                                            <input name="props" class="uk-checkbox" type="checkbox"
                                                                   data-valid-min="3" data-valid-max="5">
                                                            New Technologies
                                                        </label>
                                                    </div>
                                                </li>
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
                                                        <i class="icon"></i><h4 class="text uk-margin-remove">آپلود فایل
                                                            شماره یک</h4></div>
                                                    <input type="file" data-max-files="1">
                                                </div>
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l uk-margin-small-left">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i><h4 class="text uk-margin-remove">آپلود فایل
                                                            شماره دوم</h4></div>
                                                    <input type="file" data-max-files="1">
                                                </div>
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l uk-margin-small-left">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i><h4 class="text uk-margin-remove">آپلود فایل
                                                            شماره سوم</h4></div>
                                                    <input type="file" data-max-files="1">
                                                </div>
                                                <div class="js-upload uk-width-1-1 uk-width-1-4@l">
                                                    <div
                                                        class="file-label uk-flex uk-flex-middle uk-flex-center uk-margin-small-bottom">
                                                        <i class="icon"></i><h4 class="text uk-margin-remove">آپلود فایل
                                                            شماره چهارم</h4></div>
                                                    <input type="file" data-max-files="1">
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
                labelIdle: 'فایل خود را بکشید و یا <span class="filepond--label-action"> انتخاب کنید </span>',
                labelButtonRemoveItem: 'پاک کنید',
                labelFileLoading: 'در حال بارگذاری',
                labelFileProcessing: 'در حال آپلود',
                labelFileProcessingComplete: 'آپلود کامل شد'
            });
        });
    </script>
@endsection
