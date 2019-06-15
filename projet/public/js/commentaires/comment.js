/*
public\js\commentaires\comment.js
*/
  $(function(){

    var baseURL = $('body').attr('data-baseURL') + "/";

    $("#contact").submit(function(event){
/*      alert("!!!! submit !!!!");  */
      event.preventDefault();

      var contenu = $(this).find('#message').val();
      var idressource = $('#id-ressource').attr('data-ress');
      var idutil = $('#id-ressource').attr('data-util');

      $.ajax({
          url: baseURL + 'ajax/ajaxAddComment',
          data: {
            contenu: contenu,
            idressource: idressource,
            idutil: idutil
          },
          method: 'get',
          success: function(reponsePHP){
            if (reponsePHP == 1){
              $('#commentaires').append('<div class="post-reply"><div class="image-reply-post"></div><div class="name-reply-post">ID Utilisateur: '+idutil+'</div><div class="text-reply-post">'+contenu+'</div></div>')
                                .children().last().hide().slideDown();
            }
            else{
              alert("Problème ADD");
            }
          },
          error: function(){
            alert("Problème durant la transaction...");
          }
      });

    });

  });
