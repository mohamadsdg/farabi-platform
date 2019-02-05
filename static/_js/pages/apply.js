(function ($) {
    $(document).ready(function () {
        /*
        *
        * auto height
        *
        * */
        (function () {
            var $target = $('textarea[data-autosize]');
            $.each($target, function () {
                $target.blur(function () {
                    var offset = this.offsetHeight - this.clientHeight;
                    var total = this.scrollHeight + offset;
                    if (total <= 150) {
                        $(this).css('height', 'auto').css('height', this.scrollHeight + offset);
                    }
                });
                $target.on('focus', function () {
                    $(this).css('height', '150px');
                });
            });
        })();

        /*
        *
        * add remove field
        *
        * */
        var $max = 5;
        var $i = 1;

        function AddInput() {
            var $target = $('[data-wrapper-member]');
            var $formInput = "<div class='uk-grid uk-child-width-1-2 uk-position-relative'><div><label class='fs1_label' for='name_member[" + $i + "]'>نام و نام خانوادگی</label><input type='text' id='name_member[" + $i + "]' autocomplete='off'/></div><div><label class='fs1_label ' for='role_member[" + $i + "]'>سمت در تیم</label><input type='text' id='role_member[" + $i + "]' autocomplete='off'/></div><a class='uk-button uk-button-text fs1_action remove' data-action-member='remove'>حذف</a></div>";
            $target.append($formInput);
            $i++;
        }

        function RemoveInput(elmThis) {
            var $target = elmThis.parent();
            $target.remove();
            $i--;
        }

        (function RunModuleField() {
            $('body').on('click', '[data-action-member]', function () {
                var $this = $(this);
                var $ValAction = $this.data('actionMember');
                switch ($ValAction) {
                    case 'add':
                        $i < $max ? AddInput() : window.alert('تعداد مجاز افزودن عضو' + $max + '');
                        break;
                    case 'remove':
                        RemoveInput($this);
                        break;
                    default:
                        return 'not found val';
                }
            });

        })();

        /*
       *
       * show hidden field input
       *
       * */
        (function () {
            var $TargetRadio = $('input[data-target-input]');
            $TargetRadio.on('change', function () {
                var $targetInput = $(this).data('target-input');
                var $targetAction = $(this).data('action-input');
                // var $targetInput ;
                if ($targetAction === 'show') {
                    $($targetInput).show();
                } else if ($targetAction === 'hidden') {
                    $($targetInput).hide();
                }
            });
        })();

        /*
       *
       * setup Calender
       *
       * */
        if ($('[data-wrapper-start]').length !== 0) {
            (function () {
                //element`s
                var _parentElm = $('[data-wrapper-start]');
                var _selectDatePicker = _parentElm.find('input');
                //dynamic setup option
                var isRtl = true; //$thisClass.props.gregorian; // data from store
                var dateFormat = isRtl ? 'jYYYY/jMM/jDD' : 'YYYY/MM/DD';
                var dir = isRtl ? 'rtl' : 'ltr';
                var isSingle = true;
                _selectDatePicker.daterangepicker({
                    singleDatePicker: isSingle,
                    timePicker: false,
                    showDropdowns: true,
                    autoUpdateInput: true,
                    minDate: moment().subtract(100, 'years'),
                    maxDate: moment(),
                    opens: 'center',
                    locale: {
                        direction: dir,
                        format: dateFormat
                    },
                    jalaali: isRtl,

                });
                // Method
                _selectDatePicker.on('apply.daterangepicker', function (ev, picker) {
                    //-- formation
                    var birthdate = picker.startDate.format(dateFormat);
                    _selectDatePicker.val(birthdate);

                });
            })();
        }

        /*
        *
        * setup policy
        *
        * */
        (function () {
            var $resultPolicy, $targetBtn, $nameInput;
            var $target = $('input[name=policy]');
            $target.on('change', function () {
                $resultPolicy = this.checked;
                $nameInput = this.name;
                $targetBtn = $('button[data-target = ' + $nameInput + ']');
                $resultPolicy ? $targetBtn.removeAttr("disabled") : $targetBtn.attr('disabled', 'disabled');
            });


        })();

        /*
        *
        * handle submit faker
        *
        * */

        (function () {
            // handle modal before submit
            $('[data-check-submit]').on('click', function (ev) {
                if ( $("[data-valid-form]").valid() ) {   // test for validity
                    // do stuff if form is valid
                    ev.preventDefault();
                    UIkit.modal('#modal-policy').show();
                } else {
                    // do stuff if form is not valid
                }
            });

            // handle submit after accept rules
            $('[data-btn-submit]').on('click',function () {
                $("[data-valid-form]").submit();
            })
        })();

    });
})(jQuery);