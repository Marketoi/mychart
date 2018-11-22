</body>
</html>


<script>
$(document).ready(function() {
  $('#multiselect').multiselect({
    buttonWidth : '160px',
    includeSelectAllOption : true,
    nonSelectedText: 'Select an Option'
  });
  $('#multiselect').on('change', function() {
    console.log("hi");
    drawChart();
  });

  function getSelectedValues() {
    var selectedVal = $("#multiselect").val();
    for(var i=0; i<selectedVal.length; i++){
      function innerFunc(i) {
        setTimeout(function() {
          location.href = selectedVal[i];
        }, i*2000);
      }
      innerFunc(i);
    }
  }
});
</script>
