define(['require', 'jquery', 'elgg'], function(require, $, elgg) {

    $(document).on('click', "#yourls-submit", function(e) {

        e.preventDefault();

        var url = encodeURI($("#yourls-url").val());
        var api_key = $('#yourls-url').attr('data-apikey');
        var api_url  = $('#yourls-url').attr('data-server');

        var response = $.get( api_url, {
            signature: "05e2685fc7",
            action:   "shorturl",
            format:   "json",
            url:      url
            },
            // callback function that will deal with the server response
            function( data) {
                // for instance, return short URL
                $("#yourls-url").val(data.shorturl);
                $("#yourls-url").focus();
                $("#yourls-url").select();

            }
        );

    });
});
