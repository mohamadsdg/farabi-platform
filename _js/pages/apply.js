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


    });
})(jQuery);