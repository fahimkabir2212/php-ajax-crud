async function createStudent() {
    // Get the student data from the form
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const id = document.getElementById('deleteBtn').value;
    $.ajax({
        type: 'post',
        data: {
            name: name,
            email: email
        },
        url: "saveStudent.php",
        success: function (data) {
            var response = JSON.parse(data);
            alert(response.message);
        }
    })
    $.ajax({
        type: 'post',
        data: {
            name: name,
            email: email,
            id:id
        },
        url: "updateStudent.php",
        success: function (data) {
            var response = JSON.parse(data);
            alert(response.message);
        }
    })

    $.ajax({
        type: 'get',
        data: {
            id:id
        },
        url: "deleteStudent.php",
        success: function (data) {
            var response = JSON.parse(data);
            alert(response.message);
        }
    })
  }