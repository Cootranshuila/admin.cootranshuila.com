$('input:radio[name="check-obs"]').change( function(){

    if ($(this).val() == 'Si') {
      $('.display-obs').removeClass('d-none');
    }
    else {
      $('.display-obs').addClass('d-none');
    }

});
