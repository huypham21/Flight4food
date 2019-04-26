

$(document).ready(function () {
   populateAwesomplete("field1");

   var next = 1;
   $(".add-more").click(function (e) {
      e.preventDefault();
      var addto = "#field" + next;
      var addRemove = "#field" + (next);
      next = next + 1;
      var newIn = '<div class = "field-container"><input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text"></div>';
      var newInput = $(newIn);
      var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button>';
      var removeButton = $(removeBtn);
      $(addto).parent().parent().after(newInput);
      $(addRemove).parent().after(removeButton);
      populateAwesomplete("field" + next);
      $(".field-container").last().append($("#b1"));
      //$("#field" + next).attr('data-source', $(addto).attr('data-source'));
      $("#count").val(next);

      $('.remove-me').click(function (e) {
         e.preventDefault();
         var fieldNum = this.id.charAt(this.id.length - 1);
         var fieldID = "#field" + fieldNum;
         $(this).remove();
         $(fieldID).parent().parent().remove();
      });
   });

   $('body').keypress(function(e){
      if(e.keyCode == 13)
      {
         e.preventDefault();
         var addto = "#field" + next;
         var addRemove = "#field" + (next);
         next = next + 1;
         var newIn = '<div class = "field-container"><input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text"></div>';
         var newInput = $(newIn);
         var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button>';
         var removeButton = $(removeBtn);
         $(addto).parent().parent().after(newInput);
         $(addRemove).parent().after(removeButton);
         populateAwesomplete("field" + next);
         $(".field-container").last().append($("#b1"));
         //$("#field" + next).attr('data-source', $(addto).attr('data-source'));
         $("#count").val(next);
         $('#field' + next).select();
      }
    });



});