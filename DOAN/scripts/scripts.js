/For total/;
$(document).ready(function () {
  $(".checkout").on("input", "#sl", function () {
    var $quantity = +$(this).val();
  });

  var $buttonPlus = $(".increase-btn");
  var $buttonMin = $(".decrease-btn");
  var $quantity = $("#sl");

  /For plus and minus buttons/;
  $buttonPlus.click(function () {
    $quantity.val(parseInt($quantity.val()) + 1).trigger("input");
  });

  $buttonMin.click(function () {
    $quantity.val(Math.max(parseInt($quantity.val()) - 1, 0)).trigger("input");
  });
});

function queryToggle(){
  $(".sort-filter").toggleClass("d-none");
}
