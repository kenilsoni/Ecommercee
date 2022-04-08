$(document).ready(function(){
    function onload() {
        $.ajax({
            type: "GET",
            url: "?controller=User&function=getuser",
            datatype: "json",
            success: function (data) {
                obj = JSON.parse(data);
                if (typeof obj === "object") {
                    var len = obj.length;
                    var mytable = $('#user_table').DataTable();
                    mytable.clear().draw();
                    for (var i = 0; i < len; i++) {
                        mytable.row.add($(`
                     <tr>
                     <td>${obj[i].Fullname}</td>
                     <td>${obj[i].Phone}</td>
                     <td >${obj[i].Email} </td>
                     <td >${obj[i].Street} </td>
                     
                 </tr>
                     `)).draw();

                    }

                }

            }
        })

    }
    onload();
})