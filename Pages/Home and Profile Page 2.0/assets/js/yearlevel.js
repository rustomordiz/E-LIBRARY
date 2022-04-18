/* $("input[name='yearfilter']").change(function () {
    var classes = [];

    $("input[name='filterStatus']").each(function () {
        if ($(this).is(":checked")) { classes.push('.' + $(this).val()); }
    });

    if (classes == "") { // if no filters selected, show all items
        $("#booktable tbody tr").show();
    } else { // otherwise, hide everything...
        $("#booktable tbody tr").hide();

        $("#booktable tr").each(function () {
            var show = true;
            var row = $(this);
            classes.forEach(function (className) {
                if (row.find('td' + className).html() == 'vdcvfd') { show = false; }
            });
            if (show) { row.show(); }
        });
    }
});
*/


$(document).ready(function(){
    $(".name").on("click", function() {
    name_list = []

    
    $("#booktable tr").hide()
    var flag = 1
    $("input:checkbox[name=name]:checked").each(function(){
            flag = 0;
          var value = $(this).val().toLowerCase();
            $("#booktable tr").filter(function() {
              if($(this).text().toLowerCase().indexOf(value) > -1)
                  $(this).show()
          });
        });


      if(flag == 1)
          $("#booktable tr").show()
    });

    
  });

