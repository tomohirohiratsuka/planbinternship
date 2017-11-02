function postComment(text){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "/memos",
    data: {
      'text': text,
    },
  }).done(function(responseData){
    $('.lists').append('<li>' + responseData.text + '</li>');
  }).fail(function(error) {
    console.log(error);
  });
}