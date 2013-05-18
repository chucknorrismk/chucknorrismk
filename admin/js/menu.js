$(function() {
  $('a[href]').each(function() {
    var href = $(this).attr('href');
    if (
            (location.href == href)
            || (location.search == href)
            || ((location.pathname + location.search) == href)
            || ((location.pathname + location.search) == (href + "/"))
            ) {
      $(this).parent().addClass('active');
    }
  });
});