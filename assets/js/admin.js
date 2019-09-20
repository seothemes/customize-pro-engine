(function (document, $) {

    $(document).ready(function () {

        $('.typekit-custom-fonts-wrap .meta-box-sortables:nth-of-type(2) .panel-inner p:first-of-type').html('1) Once you get the Kit Details, all the fonts will be available in Customizer typography settings.');

        $(window).on('load', function () {
            var button = $('.theme.active .button-link, #upgrade-themes');

            button.attr('data-confirm', 'Warning: Updating this theme will lose any customizations you have made. \'Cancel\' to stop, \'OK\' to update.');

            button.on('click', function (e) {
                if (!confirm($(this).data('confirm'))) {
                    e.stopImmediatePropagation();
                    e.preventDefault();
                }
            });
        });

    });

})(document, jQuery);
