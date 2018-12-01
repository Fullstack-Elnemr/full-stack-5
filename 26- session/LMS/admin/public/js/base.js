$(function () {
    $('.edit').click(function () {
        var userId = $(this).attr('user-id');
        $.ajax({
            url: AJAX_URL + 'user.php?id=' + userId,
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
})