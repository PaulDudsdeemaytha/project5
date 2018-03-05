
(function($){

    $('#new-quote-button').on('click', function(event) {
      event.preventDefault();

      $.ajax({
         method: 'get',
         url: api_vars.root_url + 'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1'
         
      }).done( function(data) {
        $('.source').text('');
   
        data = data.shift();
  
        history.pushState(null, null, data.slug);
  
  
        $('.entry-content').children().html(data.content.rendered);
        $('.entry-title').text(data.title.rendered).prepend('&mdash;');
        
  
        if (data._qod_quote_source_url && data._qod_quote_source){
          $('.source').append(', <a href="'+ data._qod_quote_source_url + '">' + data._qod_quote_source + '</a>');
        }
        else if (data._qod_quote_source){
          $('.source').append(', '+ data._qod_quote_source);
        }
        
      })
      .fail(function(){
        console.log('your request can not be processed!');
      });
  
});

$('.submit-quote').on('click', function (event) {
         event.preventDefault();
          $.ajax({
              method: 'post',
              url: api_vars.root_url + 'wp/v2/posts/',
              data: {
                  title: $('#quote-author').val(),
                  content: $('#quote-the-quote').val(),
                  _qod_quote_source: $('#quote-source').val(),
                  _qod_quote_source_url: $('#quote-source-url').val(),
              },
              beforeSend: function(xhr) {
                  xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce );
              }
          }).done( function(data) {
              console.log(api_vars.success);
              $('#quote-submission-form').hide({duration:300});
              $('.quote-submit-wrapper .entry-title').append('<p>' + api_vars.success + '</p>');
          });
      }); 

  })(jQuery);