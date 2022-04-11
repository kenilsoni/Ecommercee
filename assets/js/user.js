$(document).ready(function(){
    function onload() {
        $.ajax({
            type: "GET",
            url: "?controller=User&function=getuser",
            datatype: "json",
            success: function (data) {
                obj = JSON.parse(data);
                console.log(obj);
                if (typeof obj === "object") {
                    var len = obj.length;
                    var mytable = $('#user_table').DataTable();
                    mytable.clear().draw();
                    for (var i = 0; i < len; i++) {
                        mytable.row.add($(`
                     <tr>
                     <td>${obj[i][0].Fullname}</td>
                     <td>${obj[i][0].Phone}</td>
                     <td >${obj[i][0].Email} </td>
                     <td >${obj[i][1].Street} ${obj[i][1].City} ${obj[i][1].State} ${obj[i][1].Country}</td>
                     
                 </tr>
                     `)).draw();

                    }

                }

            }
        })

    }
    onload();
})