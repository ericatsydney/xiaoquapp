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
          $('#user_register').slideDown();
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

} );

