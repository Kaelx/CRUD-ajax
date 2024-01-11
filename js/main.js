function add(event) {
    event.preventDefault();

    var formData = new FormData($('form')[0]);
    $.ajax({
        url: 'controller/add.php',
        method: 'post',
        data: formData,
        processData: false, 
        contentType: false,
        success: function (response) {
            alert(response);
            location.reload();
        }
    });
}


function viewProfile(id) {
    window.location.href = 'page/profile.php?id=' + id;
}