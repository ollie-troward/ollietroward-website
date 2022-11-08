$('#myonoffswitch1').click(function() {
    if ($('#myonoffswitch1').is(':checked')) {
        $('.section-inner').css('color', 'red');
    } else {
      $('.section-inner').css('color', '#434343');
    }
});
