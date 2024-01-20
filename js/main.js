function add(event) {
    event.preventDefault();

    var formData = new FormData($('form')[0]);

    var fname = document.getElementById('fname').value;
    var mname = document.getElementById('mname').value;
    var lname = document.getElementById('lname').value;
    var age = document.getElementById('age').value;
    var bday = document.getElementById('bday').value;
    var address = document.getElementById('address').value;
    var phonenum = document.getElementById('phonenum').value;
    var profile = document.getElementById('profile').value;

    var nameRegex = /^[a-zA-Z\s]*$/;
    var phoneRegex = /^\d{11}$/;


    if (fname == '' || mname == '' || lname == '' || phonenum == '' || address == '' || age == '' || bday == '' || profile == '') {
        alert('Please fill up all the fields.');
        return false;
    }
    else if (!nameRegex.test(fname) || !nameRegex.test(mname) || !nameRegex.test(lname)) {
        alert('Name fields can only contain letters and spaces.');
        return false;
    }
    else if (!phoneRegex.test(phonenum)) {
        alert('Phone number must be exactly 11 digits.');
        return false;
    }
    else{
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
}

function viewProfile(id) {
    window.location.href = 'page/profile.php?id=' + id;
}