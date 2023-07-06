

  $(document).ready(function(){
    $("#buttonAdd").click(function(){
      var amount = $("#amount").val();
      if(amount == ''){
        $('#erroramount').text('amount error');
        alert(amount);
      }
      
    });
  });