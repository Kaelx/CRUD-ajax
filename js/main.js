function add() {
    var formData = new FormData();

    formData.append('fname', $('#fname').val());
    formData.append('mname', $('#mname').val());
    formData.append('lname', $('#lname').val());
    formData.append('bday', $('#bday').val());
    formData.append('age', $('#age').val());
    formData.append('address', $('#address').val());
    formData.append('phonenum', $('#phonenum').val());
    formData.append('profile', $('#profile')[0].files[0]);

    $.ajax({
        url: 'controller/add.php',
        method: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function (response) {
            alert(response);
            location.reload();
        }
    });
}


function viewProfile(id) {
    window.location.href = 'page/profile.php?id=' + id;
}