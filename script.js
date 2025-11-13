$(document).ready(function(){
  $("#regForm").submit(function(e){
    e.preventDefault(); // Prevent form reload

    $.ajax({
      url: "submit.php",
      type: "POST",
      data: $(this).serialize(),
      success: function(response){
        $("#output").html(response).removeClass("hidden");
        $("#regForm")[0].reset();
      },
      error: function(){
        $("#output").html("<p style='color:red;'>Error submitting form.</p>");
      }
    });
  });
});
