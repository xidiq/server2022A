jQuery(function($){
  var d = $.datepicker.regional[''];
  d.buttonText = 'Open the calendar';
  d.resetButtonText = 'Reset the date';
  $.datepicker.setDefaults($.datepicker.regional['']);
});
