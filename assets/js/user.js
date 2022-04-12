$(document).ready(function () {
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
                     <input type="hidden" value="${obj[i][0].ID}" class="user_id">
                     <td>${obj[i][0].Fullname}</td>
                     <td>${obj[i][0].Phone}</td>
                     <td >${obj[i][0].Email} </td>
                     <td >${obj[i][1].Street} ${obj[i][1].City} ${obj[i][1].State} ${obj[i][1].Country}</td>
                     <td><button type="button" class="btn btn-rounded btn-primary view_user">View Detail</button></td>
                 </tr>
                     `)).draw();

                    }

                }

            }
        })

    }
    onload();
    $(document).on('click', '.view_user', function () {
        var id = $(this).closest("tr").find('.user_id').val();
        $("#view_detail").css("display", "block");
        $("#all_detail").css("display", "none");

        $.ajax({
            type: "POST",
            url: "?controller=User&function=getuserdetail",
            datatype: "json",
            data: { id: id },
            success: function (data) {
                obj = JSON.parse(data);
                if (typeof obj === "object") {
                    var len = obj.length; console.log(obj);
                    for (var i = 0; i < len; i++) {
                        $(".username").text(obj[i][0].UserName);
                        $(".fullname").text(obj[i][0].Fullname);
                        $(".email").text(obj[i][0].Email);
                        $(".phone").text(obj[i][0].Phone);
                        $(".address").text(obj[i][1].Street + ' ' + obj[i][1].City + ' ' + obj[i][1].State + ' ' + obj[i][1].Country);
                        $(".gender").text(obj[i][0].Gender == 'M' ? "MALE" : "FEMALE");

                    }

                }

            }
        })

    })
})