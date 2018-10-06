function getStudents(prof_id) {
    $.ajax({
        type: "get",
        url: "utils/getStudents.php",
        data: {
            id: prof_id
        },
        success: function(response) {
            var student_marks = JSON.parse(response);

            callCluster(student_marks);

        }
    });
}

function callCluster(student_marks) {
    allStudents = []
    student_marks.forEach(marks => {
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:5000/data",
            headers: {
                'Access-Control-Allow-Origin': '*'
            },
            data: {
                ut1: marks.ut1_marks,
                ut2: marks.ut2_marks
            },
            success: function(response) {
                var temp = {
                    roll_no: marks.roll_no,
                    category: response,
                    id: marks.subject_id
                }

                updateCat(temp);
            }
        });
    });


}


function updateCat(data) {

    $.ajax({
        type: "POST",
        url: "utils/updateCat.php",
        data: {
            roll: data.roll_no,
            cat: data.category,
            id: data.id
        },
        success: function(response) {
            console.log(response);
        }
    });



}