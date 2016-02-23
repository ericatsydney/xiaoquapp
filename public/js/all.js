/**
 * Created by Yan on 3/01/2016.
 */
jQuery( document ).ready( function( $ ) {

  $( '#verify_resident' ).on( 'submit', function(event) {
    event.preventDefault();
    //$form.find('button [type=submit]').unbind('click');
    /**
     *
     * show some spinner etc to indicate operation in progress
     */

    $form = $( '#verify_resident' );
    $.post(
      $form.prop( 'action' ),
      {
        "_token": $form.find( 'input[name=_token]' ).val(),
        "unit_number": $form.find( 'input[name=unit_number]' ).val(),
        "identity": $form.find( 'input[name=identity]' ).val()
      },
      function( data ) {
        //do something with data/response returned by server
        if (data.found) {
          $('#verify_resident button[type=submit]').fadeOut();
          $('#user_register').slideDown();
        }
        else {
          $(".ajax-message").append('<span>'+ data.errors +'</span>').addClass('in')
        }
      },
      'json'
    );

    /**
     *  Do anything else you might want to do
     */

    // Prevent the form from actually submitting in browser.
    return false;
  } );

  //$('#sendMessageForm').on('submit', function(e) {
  //  e.preventDefault();
  //  $.ajax({
  //    type: "POST",
  //    url: "https://api.weixin.qq.com/cgi-bin/media/uploadnews?access_token=qGZmAG_pkWeJfS6I44WTLvT-tmAqM2dH360Yap--kyru2HC-M_Lgk99B5BlKeJHAIeVUeFe4QBxi_rb2JwiDOl9RV87T70RYpHQy-m9znNR4RoXapMoKDmRJ7US9NADkUNWhAFAOHQ",
  //    data: {
  //    "articles": [
  //      {
  //        "thumb_media_id":"qI6_Ze_6PtV7svjolgs-rN6stStuHIjs9_DidOHaj0Q-mwvBelOXCFZiq2OsIU-p",
  //        "author":"xxx",
  //        "title":"Happy Day",
  //        "content_source_url":"www.qq.com",
  //        "content":"content",
  //        "digest":"digest",
  //        "show_cover_pic":1
  //      }
  //    ]
  //  },
  //    success: function(result){
  //      console.log(result);
  //    },
  //    dataType: "json",
  //    contentType : "application/json",
  //    crossDomain: true,
  //  });
  //});
} );

