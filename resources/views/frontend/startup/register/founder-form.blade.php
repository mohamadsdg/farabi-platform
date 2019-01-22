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
                    <form action="{{ route('frontend.startup.register.founder') }}" method="POST">
                        @csrf
                        <div class="form_group_style1">
                            <div class="fg1_inner">
                                <div class="form_style1">
                                    <ul data-uk-grid>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="p0">نام </label>
                                            <input name="first_name" type="text" id="p0" autocomplete="off"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="p00">نام خانوادگی</label>
                                            <input name="last_name" type="text" id="p00" autocomplete="off"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-3">
                                            <label class="fs1_label" for="p9">مقطع تحصیلی</label>
                                            <select name="grade_id" id="p9">
                                                <option disabled selected>-- انتخاب نمایید --</option>
                                                @if(isset($data['grade']))
                                                    @foreach($data['grade'] as $grade)
                                                        <option value="{{ $grade->id }}">{{ $grade->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </li>
                                        <li class="fs1_item uk-width-1-3">
                                            <label class="fs1_label" for="p2">دانشگاه</label>
                                            <select name="university_id" id="p2">
                                                <option disabled selected>-- انتخاب نمایید --</option>
                                                @if(isset($data['university']))
                                                    @foreach($data['university'] as $university)
                                                        <option
                                                            value="{{ $university->id }}">{{ $university->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </li>
                                        <li class="fs1_item uk-width-1-3">
                                            <label class="fs1_label" for="p1">رشته تحصیلی</label>
                                            <input name="major" type="text" id="p1" autocomplete="off"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="p5">نشانی ایمیل</label>
                                            <input name="email" type="text" id="p5" autocomplete="off"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="p4">شماره همراه</label>
                                            <input name="mobile" type="text" id="p4" autocomplete="off"/>
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
                                                               value="male"
                                                               data-target-input="#p33" data-action-input="show"/>
                                                        مرد
                                                    </label>
                                                </div>
                                                <div class="uk-display-inline-block check_style1 uk-margin-small-right">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="gender"
                                                               value="female"
                                                               data-target-input="#p33" data-action-input="hidden"/>
                                                        زن
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="p33" style="display:none">
                                                <label class="fs1_label" for="p3">وضعیت نظام وظیفه</label>
                                                <select name="soldiership_status" id="p3">
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
                                                @if(isset($data['skill']))
                                                    @foreach($data['skill'] as $skillGroup)
                                                        <li>
                                                            @foreach($skillGroup as $skill)
                                                                <div class="check_style1">
                                                                    <label>
                                                                        <input name="skills[]" value="{{ $skill->id }}"
                                                                               class="uk-checkbox"
                                                                               type="checkbox">{{ $skill->title }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label opt" for="p6">مهمترین دستاورد شما تا حالا چه چیزی
                                                بوده ؟ </label>
                                            <textarea name="achievement" id="p6" data-autosize></textarea>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-medium uk-margin-remove-bottom uk-flex uk-flex-row-reverse">
                            <button class="btn_style1 bg_purple">تائید و ادامه</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
