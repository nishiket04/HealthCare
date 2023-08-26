"use strict";
$(document).ready(function () {
    var i = 1;
    $("#add_row").click(function () {
        $('#addr' + i).html("<td>" + (i + 1) + "</td><td><input name='treatment" + i + "' type='text' placeholder='' class='form-control input-md'  /> </td><td><input  name='payment" + i + "' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='doc" + i + "' type='text' placeholder=''  class='form-control input-md'></td><td><input  name='note" + i + "' type='text' placeholder=''  class='form-control input-md'></td>");
        $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
        i++;
    });
    $("#delete_row").click(function () {
        if (i > 1) {
            $("#addr" + (i - 1)).html('');
            i--;
        }
    });
});
$(".s2").select2({
    closeOnSelect: false
});