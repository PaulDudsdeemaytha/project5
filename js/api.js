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
//SECOND PART





})(jQuery);