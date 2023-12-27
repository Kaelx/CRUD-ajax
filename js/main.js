function add(){
    $.ajax({
        url:'controller/add.php',
        method:'post',
        data:{name:$('#name').val(), email:$('#email').val(), password:$('#password').val()},
        success: function(e){
            alert(e);
            location.reload();
        }
    });
}
function update(id){
    var name=prompt("Enter new name");

    $.ajax({
        url:'controller/update.php',
        method:'post',
        data:{name:name,id:id},
        success: function(e){
            alert(e);
        }
    });
}
function deleteme(id){
    
    $.ajax({
        url:'controller/delete.php',
        method:'post',
        data:{id:id},
        success: function(e){
            alert(e);
        }
    });
}