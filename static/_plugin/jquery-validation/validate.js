(function ($) {
    $('document').ready(function () {
        ///////////////// Additional Method Setup
        // regex
        $.validator.addMethod("regex", function (value, element, regexpr) {
            return regexpr.test(value);
        }, "Provide a valid regex");

        // image min_width
        $.validator.addMethod("min_width", function (value, element, min_width) {

            let width = $(element).attr('data-width');
            if (width === 0) {
                return true;
            } else if (width >= min_width) {
                return true;
            } else if (width < min_width) {
                return false;
            }
        }, "error");

        // image min_height
        $.validator.addMethod("min_height", function (value, element, min_height) {

            let height = $(element).attr('data-height');
            if (height === 0) {
                return true;
            } else if (height >= min_height) {
                return true;
            } else if (height < min_height) {
                return false;
            }
        }, "error");

        // image max_size
        $.validator.addMethod("max_size", function (value, element, max_size) {
            if (typeof element.files[0] === 'undefined') {
                return true;
            } else {
                let size = Math.round(element.files[0].size / 1024);
                return (size <= max_size) ? true : false;
            }
        }, "error");

        // checkNationalCode
        $.validator.addMethod('national_code', function (value) {
            switch (value) {
                case '1111111111':
                    return;
                case '2222222222':
                    return;
                case '3333333333':
                    return;
                case '4444444444':
                    return;
                case '5555555555':
                    return;
                case '6666666666':
                    return;
                case '7777777777':
                    return;
                case '8888888888':
                    return;
                case '9999999999':
                    return;
                case '1234567891':
                    return;
            }
            let L = value.length;
            if (L < 8 || parseInt(value, 10) === 0) return false;
            value = ('0000' + value).substr(L + 4 - 10);
            if (parseInt(value.substr(3, 6), 10) === 0) return false;
            let c = parseInt(value.substr(9, 1), 10);
            let s = 0;
            for (let i = 0; i < 9; i++)
                s += parseInt(value.substr(i, 1), 10) * (10 - i);
            s = s % 11;
            return (s < 2 && c === s) || (s >= 2 && c === (11 - s));
            // return true;
        }, "error");

        // checkDebitCard
        $.validator.addMethod('debit_card', function (value) {
            let L = value.length;
            if (L < 16 || parseInt(value.substr(1, 10), 10) === 0 || parseInt(value.substr(10, 6), 10) === 0) return false;
            let c = parseInt(value.substr(15, 1), 10);
            let s = 0;
            let k, d;
            for (let i = 0; i < 16; i++) {
                k = (i % 2 === 0) ? 2 : 1;
                d = parseInt(value.substr(i, 1), 10) * k;
                s += (d > 9) ? d - 9 : d;
            }
            return ((s % 10) === 0);
        }, "error");

        // minimum check checkbox
        $.validator.addMethod("min_check", function (value, element, min_check) {
            var $count_check = $(element).closest('[data-wrapper-group]').find('[data-valid-min]:checked').length;
            return $count_check >= min_check ? true : !(true);
        }, "error");

        // maximum check checkbox
        $.validator.addMethod("max_check", function (value, element, max_check) {
            var $count_check = $(element).closest('[data-wrapper-group]').find('[data-valid-max]:checked').length;
            return $count_check <= max_check ? true : !(true);
        }, "error");
        ///////////////// Config Validate
        //valid form
        $("[data-valid-form]").each(function () {
            $(this).validate({
                errorClass: "error_style1 error",
                ignore: '',
            });
        });

        /* required */
        $("[data-valid-form] [data-valid-required]").each(function () {
            $(this).rules('add', {
                required: true,
                messages: {
                    required: "الزامی است",
                }
            });
        });

        /* email format */
        $("[data-valid-form] [data-valid-email]").each(function () {
            $(this).rules('add', {
                email: true,
                messages: {
                    email: "معتبر نیست",
                }
            });
        });

        /* extension */
        $("[data-valid-form] [data-valid-ext]").each(function () {
            let ext = $(this).attr("data-valid-ext");
            $(this).rules('add', {
                extension: ext,
                messages: {
                    extension: "فرمت های مجاز: " + ext,
                }
            });
        });
        /*"gif|png|jpg|jpeg|rar|zip"*/

        /* repeat / confirm */
        $("[data-valid-form] [data-valid-repeat]").each(function () {
            let id = $(this).attr("data-valid-repeat");
            $(this).rules('add', {
                equalTo: '#' + id,
                messages: {
                    equalTo: "با مقدار اولیه مغایرت دارد",
                }
            });
        });

        /* regex */
        $("[data-valid-form] [data-valid-regex]").each(function () {
            let regex = $(this).attr("data-valid-regex");
            $(this).rules('add', {
                regex: new RegExp(regex, "i"),
                messages: {
                    regex: "معتبر نیست",
                }
            });
        });
        /*
         ^[0-9]*$ ===> number
         09[0|1|2|3|9]([ ]|,|-|[()]){0,2}(?:[0-9]([ ]|,|-|[()]){0,2}){8} ===> phone number iran
         ((0[1-9])|(1[0-2]))[\/-]((0[1-9])|(1[0-9])|(2[0-9])|(3[0-1]))[\/-](\d{4}) ==> accept birthday
        ^[\u0600-\u06FF\s]+$ ===> persian ascii character
        [\x00-\x80]+ ===> latin ascii character
        ^[A-Za-z][A-Za-z]*$ ===> latin character

         */

        /* size_img */
        $("[data-valid-form] [data-valid-size]").each(function () {
            let maxSize = $(this).attr("data-valid-size");
            $(this).rules('add', {
                max_size: maxSize, /*kb*/
                messages: {
                    max_size: "حجم تصویر بیشتر از " + maxSize + " کیلو بایت نباشد",
                }
            });
        });

        /* persian character */
        $("[data-valid-form] [data-valid-fachar]").each(function () {
            let regex = "^[\u0600-\u06FF\\s]+$";
            $(this).rules('add', {
                regex: new RegExp(regex, "i"),
                messages: {
                    regex: "لطفا از حروف فارسی استفاده نمایید",
                }
            });
        });

        /* latin character */
        $("[data-valid-form] [data-valid-enchar]").each(function () {
            let regex = "^[A-Za-z][A-Za-z]*$";
            $(this).rules('add', {
                regex: new RegExp(regex, "i"),
                messages: {
                    regex: "لطفا از حروف لاتین استفاده نمایید",
                }
            });
        });

        /* format date persian */
        $("[data-valid-form] [data-valid-persianDate]").each(function () {
            let regex = "^$|(1[3-5][0-9][0-9](/)(0[1-9]|1[0-2])(/)(0[1-9]|1[0-9]|2[0-9]|3[0-1]))$";
            $(this).rules('add', {
                regex: new RegExp(regex, "i"),
                messages: {
                    regex: "فرمت تاریخ صحیح نیست . مثال : 1300/01/01"
                }
            });
        });

        /* format date persian */
        $("[data-valid-form] [data-valid-nationalcode]").each(function () {
            $(this).rules('add', {
                national_code: true,
                messages: {
                    national_code: "کد ملی وارد شده صحیح نمیباشد"
                }
            });
        });

        /* validate for count MIN*/
        $("[data-valid-form] [data-valid-min]").each(function () {
            let $count = $(this).attr("data-valid-min");
            $(this).rules('add', {
                min_check: $count,
                messages: {
                    min_check: "حداقل انتخاب " + $count + " مورد الزامی است"
                }
            });
        });

        /* validate for count MAX*/
        $("[data-valid-form] [data-valid-max]").each(function () {
            let $count = $(this).attr("data-valid-max");
            $(this).rules('add', {
                max_check: $count,
                messages: {
                    max_check: "حداکثر انتخاب " + $count + " میباشد"
                }
            });
        });

        /* validate for dependency*/
        $("[data-valid-form] [data-valid-depend]").each(function () {
            $(this).on('click', function () {
                var $valElm = $(this).attr("data-valid-depend");
                var $selElm = $(this);
                // console.log($selElm);
                $($valElm).rules('add', {
                    required: "#" + $selElm[0].id + ":checked",
                    messages: {
                        required: "الزامی است",
                    }
                });
            });
        });

    })// End domReady
})(jQuery);