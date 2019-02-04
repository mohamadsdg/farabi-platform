@extends('frontend.startup.register.container.layout')

@section('content')
    <section id="apply">
        <div class="uk-container">
            <div class="inner">
                <div class="form_all_group">
                    @include('frontend.startup.register.component.progress-tracker')
                    <form data-valid-form action="{{ route('frontend.startup.register.team.store') }}" method="POST">
                        @csrf
                        <div class="form_group_style1">
                            <div class="fg1_inner">
                                <div class="form_style1">
                                    <ul data-uk-grid>
                                        <li class="fs1_item uk-width-1-1" data-wrapper-member>
                                            <div class="uk-grid uk-child-width-1-2 uk-position-relative"
                                                 data-item-member>
                                                <div>
                                                    <label class="fs1_label" for="t0">نام و نام خانوادگی</label>
                                                    <input name="members[0][name]" value="{{ old('members.0.name') }}"
                                                           type="text" id="t0" autocomplete="off"/>
                                                </div>
                                                <div>
                                                    <label class="fs1_label " for="t7">سمت در تیم</label>
                                                    <input name="members[0][position]"
                                                           value="{{ old('members.0.position') }}" type="text" id="t7"
                                                           autocomplete="off"/>
                                                </div>
                                                <a class="uk-button uk-button-text fs1_action add"
                                                   data-action-member='add'>افزودن</a>
                                            </div>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <div data-uk-grid class="uk-child-width-1-1">
                                                <div class="uk-position-relative">
                                                    <label class="fs1_label" for="background">
                                                        سابقه فعالیت تیمی به غیر از استارتاپ فعلی ومدت زمان شناخت موسس
                                                        از
                                                        تیم ؟
                                                    </label>
                                                    <textarea name="background" id="background" data-autosize
                                                              data-valid-required>{{ old('background') }}</textarea>
                                                </div>
                                                <div class="uk-position-relative">
                                                    <label class="fs1_label" for="employees_count">تعداد افراد شاغل در
                                                        استارتاپ</label>
                                                    <input name="employees_count" value="{{ old('employees_count') }}"
                                                           type="text" id="employees_count"
                                                           autocomplete="off" data-valid-required/>
                                                </div>
                                                <div class="uk-position-relative">
                                                    <label class="fs1_label" for="introduction">
                                                        نقش و شرح فعالیت هریك از اعضای تیم چیست و دلیل صلاحیت این فرد
                                                        برای
                                                        نقش خود را توضیح دهید ؟
                                                    </label>
                                                    <textarea name="introduction" id="introduction" data-autosize
                                                              data-valid-required>{{ old('introduction') }}</textarea>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="teamwork">
                                                نحوه فعالیت اعضای تیم شما چگونه است ؟
                                                <small style="font-size: 75%">( تمام وقت / پاره وقت / از راه دور و...
                                                    نام
                                                    هریک از اعضا - نوع فعالیت - توضیح كوتاهی از دلیل آن)
                                                </small>
                                            </label>
                                            <textarea name="teamwork" id="teamwork" data-autosize
                                                      data-valid-required>{{ old('teamwork') }}</textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label" for="description">
                                                تیم خود را چگونه توصیف میکنید؟
                                                <small>
                                                    (ویژگی بارز و یا تفاوت عمده شما با تیم هاي دیگر)
                                                </small>
                                            </label>
                                            <textarea name="description" id="description" data-autosize
                                                      data-valid-required>{{ old('description') }}</textarea>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-medium uk-margin-remove-bottom uk-flex uk-flex-between">
                            <a href="apply.html" class="btn_style1 bg_gray">بازگشت</a>
                            <button type="submit" class="btn_style1 bg_purple">تائید و ادامه</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
