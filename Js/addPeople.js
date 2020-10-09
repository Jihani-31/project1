$(function(){
  var $addPeopleForm = $("#addPeopleForm");
  if($addPeopleForm.length){
    $addPeopleForm.validate({
      rules: {
        officerId: "required",
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        officerId: "Please enter user officer id",
        email: {
          required: "Please enter user email",
          email: "Your email address must be in the format of name@domain.com"
        }
      },
      errorplacement: function(error, element){
        error.appendTo(element.parent("div"));
      }
    });
  }
});
