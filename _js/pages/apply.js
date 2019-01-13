(function ($) {
    $(document).ready(function () {
        /*
        *
        * auto height
        *
        * */
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

        /*
        *
        * add remove field
        *
        * */
        var $max = 5;
        var $i = 1;
        function AddInput() {
            var $target = $('[data-wrapper-member]');
            var $formInput =  "<div class='uk-grid uk-child-width-1-2 uk-position-relative'><div><label class='fs1_label' for='name_member[" +$i+ "]'>نام و نام خانوادگی</label><input type='text' id='name_member[" +$i+ "]' autocomplete='off'/></div><div><label class='fs1_label ' for='role_member[" +$i+ "]'>سمت در تیم</label><input type='text' id='role_member[" +$i+ "]' autocomplete='off'/></div><a class='uk-button uk-button-text fs1_action remove' data-action-member='remove'>حذف</a></div>";
            $target.append($formInput);
            $i ++;
        }
        function RemoveInput(elmThis) {
            var $target = elmThis.parent();
            $target.remove();
            $i --;
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

        var $TargetRadio = $('input[data-active]');
        $.each($TargetRadio,function () {
            $TargetRadio.on('change',function () {
                console.log(this);
            })
        })

    });
})(jQuery);