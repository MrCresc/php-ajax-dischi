var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function () {

// Funzioni iniziali per popolare la select e popolare la homepage
  ajaxCallForSelect()
  ajaxCall()

// Funzione che al click di una option della select mostra le canzoni dell'artista selezionato
  $('#artists').change(function () {
    var thisArtist = $(this).val()
    $('.wrapperSongs').html('')
    ajaxCall(thisArtist)
  })

// Funzioni per popolare la select
  function ajaxCallForSelect() {
    $.ajax(
      {
        url: 'http://localhost:8888/php-ajax-dischi/server.php',
        method: 'GET',
        data: {
          authorList: 'true'
        },
        success: function (database) {
          printSelect(database)
        },
        error: function () {
          alert('Errore, si prega di riprovare più tardi')
        }
      }
    )
  }

  function printSelect(authors) {
    var source = $('#select-template').html();
    var template = Handlebars.compile(source);
    for (var i = 0; i < authors.length; i++) {
      var thisAuthor = authors[i]
      var context = { author: thisAuthor };
      var html = template(context);
      $('#artists').append(html);
    }
  }

// Funzioni per le chiamate AJAX
  function ajaxCall(author) {
    $.ajax(
      {
        url: 'http://localhost:8888/php-ajax-dischi/server.php',
        method: 'GET',
        data: {
          author: author
        },
        success: function (database) {
          printSongs(database)
        },
        error: function () {
          alert('Errore, si prega di riprovare più tardi')
        }
      }
    )
  }

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
