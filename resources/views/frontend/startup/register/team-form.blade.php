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
                                <div class="pts1_step active">
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
                    <form action="{{ route('frontend.startup.register.team') }}" method="POST">
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
                                                    <input name="name[]" type="text" id="t0" autocomplete="off"/>
                                                </div>
                                                <div>
                                                    <label class="fs1_label " for="t7">سمت در تیم</label>
                                                    <input name="position[]" type="text" id="t7" autocomplete="off"/>
                                                </div>
                                                <a class="uk-button uk-button-text fs1_action add"
                                                   data-action-member='add'>افزودن</a>
                                            </div>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <div data-uk-grid class="uk-child-width-1-1">
                                                <div>
                                                    <label class="fs1_label req" for="t11">
                                                        سابقه فعالیت تیمی به غیر از استارتاپ فعلی ومدت زمان شناخت موسس
                                                        از
                                                        تیم ؟
                                                    </label>
                                                    <textarea name="background" id="t11" data-autosize></textarea>
                                                </div>
                                                <div>
                                                    <label class="fs1_label req" for="t12">تعداد افراد شاغل در
                                                        استارتاپ</label>
                                                    <input name="employees_count" type="text" id="t12"
                                                           autocomplete="off"/>
                                                </div>
                                                <div>
                                                    <label class="fs1_label req" for="t13">
                                                        نقش و شرح فعالیت هریك از اعضای تیم چیست و دلیل صلاحیت این فرد
                                                        برای
                                                        نقش خود را توضیح دهید ؟
                                                    </label>
                                                    <textarea name="introduction" id="t13" data-autosize></textarea>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="t14">
                                                نحوه فعالیت اعضای تیم شما چطونه است ؟
                                                <small style="font-size: 75%">( تمام وقت / پاره وقت / از راه دور و...
                                                    نام
                                                    هریک از اعضا - نوع فعالیت - توضیح كوتاهی از دلیل آن)
                                                </small>
                                            </label>
                                            <textarea name="teamwork" id="t14" data-autosize></textarea>
                                        </li>
                                        <li class="fs1_item uk-width-1-1">
                                            <label class="fs1_label req" for="t15">
                                                تیم خود را چگونه توصیف میکنید؟
                                                <small>
                                                    (ویژگی بارز و یا تفاوت عمده شما با تیم هاي دیگر)
                                                </small>
                                            </label>
                                            <textarea name="description" id="t15" data-autosize></textarea>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin-medium uk-margin-remove-bottom uk-flex uk-flex-between">
                            <a href="{{ route('frontend.startup.register.founder') }}"
                               class="btn_style1 bg_gray">بازگشت</a>
                            <button class="btn_style1 bg_purple">تائید و ادامه</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
