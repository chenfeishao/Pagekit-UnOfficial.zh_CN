require(['jquery', 'uikit', 'rowselect', 'gravatar', 'domReady!'], function($, uikit, RowSelect, gravatar) {
    // show avatar
    $('img[data-avatar]', ".uk-article-meta").each(function() {
        $(this).attr('src', gravatar.url($(this).data('avatar'), {s: 80, d: 'mm', r: 'g'}));
    });

});