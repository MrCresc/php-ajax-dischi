var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function () {
  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',
      success: function (database) {
        console.log(database)
        printSongs(database)
      },
      error: function () {
        alert('Errore, si prega di riprovare più tardi')
      }
    }
  )

  function printSongs(serverDataBase) {
    var source = $('#template').html();
    var template = Handlebars.compile(source);
    for (var i = 0; i < serverDataBase.length; i++) {
      var thisSong = serverDataBase[i]
      var html = template(thisSong);
      $('.wrapperSongs').append(html);
    }
  }
})
