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




            var fname = document.getElementById('fname').value;
            var mname = document.getElementById('mname').value;
            var lname = document.getElementById('lname').value;
            var age = document.getElementById('age').value;
            var address = document.getElementById('address').value;
            var phonenum = document.getElementById('phonenum').value;

            var nameRegex = /^[a-zA-Z\s]*$/;
            var ageRegex = /^\d{1,3}$/;
            var phoneRegex = /^\d{1,11}$/;

            if (!nameRegex.test(fname) || !nameRegex.test(mname) || !nameRegex.test(lname)) {
                alert('Name fields can only contain letters and spaces.');
                return false;
            }

            if (!ageRegex.test(age)) {
                alert('Age must be a number between 1 and 999.');
                return false;
            }

            if (!phoneRegex.test(phonenum)) {
                alert('Phone number must be a number up to 11 digits.');
                return false;
            }

            return true;


}


function viewProfile(id) {
    window.location.href = 'page/profile.php?id=' + id;
}