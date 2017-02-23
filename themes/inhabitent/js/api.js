// //iiffe jquery

// (function($){
// //do something when the close comment button is clicked

//     $('#close-comments').on('click', function(event){
//     event.preventDefault();
//      $.ajax({
//          method: 'post',
//          url: red_vars.rest_url + 'wp/v2/posts/' + red_vars.post_id,
//          data: {
//           comment_status: 'open'
//          },
//          //xml hdp request
//          beforeSend: function(xhr){
//              xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);

//          }
//       }).done( function(response) {
//          alert('Success! Comments are closed for this post.');
//       });
// });

// })(jQuery);