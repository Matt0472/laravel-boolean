require('./bootstrap');

const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function() {
  
  
  $('#filter').change(function () {
    $.ajax({
      'url': window.location.protocol + '//' + window.location.host + '/api/students/genders',
      'data': {
        'gender': $(this).val()
      },
      'method' : 'POST',
      success: function (data) {
        
        if (data.response.length > 0) {
          var source = $('#entry-template').html();
          var template = Handlebars.compile(source);
          reset();
          for (var i = 0; i < data.response.length; i++) {
            var thisStudent = data.response[i];
            var context = {
                img: thisStudent.img,
                name: thisStudent.name,
                eta: thisStudent.eta,
                azienda: thisStudent.azienda,
                ruolo: thisStudent.ruolo,
                descrizione: thisStudent.descrizione,
                gender: thisStudent.gender,
                slug: thisStudent.slug
            };
            var html = template(context);
            $('.all-students').append(html);
          }
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


// ------------------------------------FUNCTIONS-------------------------------------

// funzione per il reset
function reset() {
   $('.all-students').html('');
}

