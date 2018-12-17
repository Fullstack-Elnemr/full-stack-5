$(function () {
    getAllUsers();
});

$('#users-body').on('click', '.delete', function () {
    var userId = $(this).attr('user-id');
    Swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
            }).then(
                function (result) {
                    if (result.value) {
                        $.ajax({
                            url: AJAX_URL + 'user.php?action=deleteUserById&id=' + userId,
                            type: 'get',
                            success: function (res) {
                                var res = JSON.parse(res);
                                if (res.code === 200) {
                                    Swal(
                                        'Deleted!',
                                        res.message,
                                        'success'
                                    )
                                    getAllUsers();
                                } else if(res.code === 201) {
                                    alert(res.message);
                                }
                            }
                        });
                    }
                });


});
$(document).on('click', '.edit', function () {
    var userId = $(this).attr('user-id');
    $.ajax({
        url: AJAX_URL + 'user.php?action=getUserById&id=' + userId,
        type: 'get',
        success: function (user) {
            var user = JSON.parse(user);
            if (user.code === 200) {
                $('#username').val(user.data.username);
                $('#name').val(user.data.name);
                $('#email').val(user.data.email);
            } else if(user.code === 201) {
                alert(user.message);
            }
        }
    });
});

function getAllUsers() {
    $.ajax({
        url: AJAX_URL + 'user.php?action=getUsers',
        type: 'get',
        success: function (res) {
            $('#users-body').html(res)
            // console.log(res);
        }
    })
}