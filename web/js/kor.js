document.addEventListener("DOMContentLoaded", function() {
  (function quantityProducts() {
  var quantityArrowMinus = document.querySelectorAll(".quantity-arrow-minus");
  var quantityArrowPlus = document.querySelectorAll(".quantity-arrow-plus");
  var quantityNum = document.querySelectorAll(".quantity-num");
  
      quantityArrowMinus.forEach(function(arrow) {
          arrow.addEventListener("click", quantityMinus);
      });
  
      quantityArrowPlus.forEach(function(arrow) {
          arrow.addEventListener("click", quantityPlus);
      });
  
      function quantityMinus(event) {
          var input = event.target.closest(".quantity-arrow-minus").nextElementSibling;
          if (input.value > 1) {
              input.value = parseInt(input.value) - 1;
          }
      }
  
      function quantityPlus(event) {
          var input = event.target.closest(".quantity-arrow-plus").previousElementSibling;
          if (parseInt(input.value) < 100) {
              input.value = parseInt(input.value) + 1;
          }
      }
  })();
});