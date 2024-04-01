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