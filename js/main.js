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
                if (response == 1) {
                    alert('Data added successfully');
                    window.location.reload();
                }else if(response == 0){
                    alert('Something went wrong');
                }else{
                    alert("Fill all the fields");
                }
            }
        });
    }

function viewProfile(id) {
    window.location.href = 'page/profile.php?id=' + id;
}

function delProfile(id) {
    var formData = new FormData();
    formData.append('id', id);

    $.ajax({
        url: '../controller/delete.php',
        method: 'post',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response == 1) {
                alert('Data deleted successfully');
                window.location.href = '../index.php';
            } else {
                alert('Something went wrong');
            }
        }
    });
}

function updateProfile() {
    alert("Update profile function is not available yet.");
}