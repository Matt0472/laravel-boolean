require('./bootstrap');

const $ = require('jquery');

$(document).ready(function() {
  
  
  $('#filter').change(function () {
    console.log($(this).val());
    $.ajax({
      'url': window.location.protocol + '//' + window.location.host + '/api/students/genders',
      'data': {
        'gender': $(this).val()
      },
      'method' : 'POST',
      success: function (data) {
        if (data.response.length > 0) {
          console.log(data.response);
        }else{
          console.log('no students');
          
        }
      },
      error: function () {
        console.log('error');
      }
    });
  });

});
