@extends('frontend.startup.register.container.layout')

@section('content')
    <section id="apply">
        <div class="uk-container">
            <div class="inner">
                <div class="form_all_group">
                    @include('frontend.startup.register.component.progress-tracker')
                    <form data-valid-form action="{{ route('frontend.startup.register.founder.update') }}"
                          method="POST">
                        @csrf
                        <div class="form_group_style1">
                            <div class="fg1_inner">
                                <div class="form_style1">
                                    <ul data-uk-grid>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="first_name">نام </label>
                                            <input name="first_name" value="{{ $data['founder']->first_name }}"
                                                   type="text"
                                                   id="first_name" autocomplete="off"
                                                   data-valid-required/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="last_name">نام خانوادگی</label>
                                            <input name="last_name" value="{{ $data['founder']->last_name }}"
                                                   type="text"
                                                   id="last_name" autocomplete="off"
                                                   data-valid-required/>
                                        </li>
                                        <li class="fs1_item uk-width-1-3">
                                            <label class="fs1_label" for="grade_id">مقطع تحصیلی</label>
                                            <select name="grade_id"
                                                    id="grade_id"
                                                    data-valid-required>
                                                <option disabled selected>-- انتخاب نمایید --</option>
                                                @if(isset($data['grade']))
                                                    @foreach($data['grade'] as $grade)
                                                        <option
                                                            {{ $data['founder']->grade_id == $grade->id ? 'selected' : '' }} value="{{ $grade->id }}">{{ $grade->title }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </li>
                                        <li class="fs1_item uk-width-1-3">
                                            <label class="fs1_label" for="university_id">دانشگاه</label>
                                            <select name="university_id" id="university_id">
                                                <option disabled selected>-- انتخاب نمایید --</option>
                                                @if(isset($data['university']))
                                                    @foreach($data['university'] as $university)
                                                        <option
                                                            {{ $data['founder']->university_id == $university->id ? 'selected' : '' }}
                                                            value="{{ $university->id }}">{{ $university->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </li>
                                        <li class="fs1_item uk-width-1-3">
                                            <label class="fs1_label" for="major">رشته تحصیلی</label>
                                            <input name="major" value="{{ $data['founder']->major }}" type="text"
                                                   id="major"
                                                   autocomplete="off"
                                                   data-valid-required/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="email">نشانی ایمیل</label>
                                            <input name="email" value="{{ $data['user']->email }}" type="text"
                                                   id="email"
                                                   autocomplete="off"
                                                   data-valid-required data-valid-email/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="mobile">شماره همراه</label>
                                            <input name="mobile" value="{{ $data['user']->mobile }}" type="text"
                                                   id="mobile"
                                                   autocomplete="off"
                                                   data-valid-required
                                                   data-valid-regex="09[0|1|2|3|9]([ ]|,|-|[()]){0,2}(?:[0-9]([ ]|,|-|[()]){0,2}){8}"/>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label" for="gender">
                                                جنسیت
                                            </label>
                                            <div class="uk-display-inline-block uk-margin-small-right">
                                                <div class="uk-display-inline-block check_style1">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="gender"
                                                               value="male"
                                                               {{ $data['user']->gender == 'male' ? 'checked' : '' }}
                                                               id="has_male"
                                                               data-valid-depend="#soldiership_status"
                                                               data-target-input="#soldiership_holder"
                                                               data-action-input="show"/>
                                                        مرد
                                                    </label>
                                                </div>
                                                <div class="uk-display-inline-block check_style1 uk-margin-small-right">
                                                    <label>
                                                        <input class="uk-radio"
                                                               type="radio"
                                                               name="gender"
                                                               value="female"
                                                               {{ $data['user']->gender == 'female' ? 'checked' : '' }}
                                                               data-target-input="#soldiership_holder"
                                                               data-action-input="hidden"/>
                                                        زن
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="soldiership_holder"
                                                 style="{{ $data['user']->gender == 'female' ? 'display: none;' : '' }}">
                                                <label class="fs1_label" for="soldiership_status">وضعیت نظام
                                                    وظیفه</label>
                                                <select name="soldiership_status" id="soldiership_status">
                                                    <option disabled selected>-- انتخاب نمایید --</option>
                                                    <option
                                                        {{ $data['user']->soldiership_status == 0 ? 'selected' : '' }} value="0">
                                                        معافیت دائم
                                                    </option>
                                                    <option
                                                        {{ $data['user']->soldiership_status == 1 ? 'selected' : '' }} value="1">
                                                        معافیت موقت
                                                    </option>
                                                    <option
                                                        {{ $data['user']->soldiership_status == 2 ? 'selected' : '' }} value="2">
                                                        مشمول
                                                    </option>
                                                    <option
                                                        {{ $data['user']->soldiership_status == 3 ? 'selected' : '' }} value="3">
                                                        اتمام خدمت
                                                    </option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="fs1_item uk-width-1-2">
                                            <label class="fs1_label">تخصص شما در کدام حوزه است ؟</label>
                                            <ul class="uk-flex uk-flex-around" data-wrapper-group>
                                                @if(isset($data['skill']))
                                                    @foreach($data['skill'] as $skillGroup)
                                                        <li>
                                                            @foreach($skillGroup as $skill)
                                                                <div class="check_style1">
                                                                    <label>
                                                                        <input name="skills[]" value="{{ $skill->id }}"
                                                                               {{ (in_array($skill->id, $data['skills']) ? 'checked' : '' ) }}
                                                                               class="uk-checkbox"
                                                                               type="checkbox"
                                                                               data-valid-min="3"
                                                                               data-valid-max="5"
                                                                        >{{ $skill->title }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label opt" for="achievement">
                                                مهمترین دستاورد شما تا حالا چه چیزی بوده ؟
                                            </label>
                                            <textarea name="achievement" id="achievement"
                                                      data-autosize>{{ $data['founder']->achievement }}</textarea>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-medium uk-margin-remove-bottom uk-flex uk-flex-row-reverse">
                            <button type="submit" class="btn_style1 bg_purple">ویرایش اطلاعات</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
