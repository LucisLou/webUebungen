$('#comp-data').hide();
$('#edit-form').hide();
$('#delete-form').hide();

function showComp(cid, uid) {

    if (window.screen.width > 900) {
        $('#comp-list').animate({
            width: "30%"
            }, 500 );  
    }
    $('#comp-data').hide('slow');
    $('#comp-data').toggle('slow');
    $('#comp-data')[0].scrollIntoView({ behavior: 'smooth'});

    $.ajax({
        method: "POST",                         
        url: "../auth/getCompData.php",           
        data: { cid : cid }     //association and value                  
    })
    .done(function (response) {                 
        let data = response.split(";");
        //Puts response into an array

        //index:
        //0 - CID
        //2 - Company Name
        //4 - Company Contact Person
        //6 - Company Telephone
        //8 - Company Address
        //10 - Company ZIP-Code
        //12 - UID (Foreign Key)
        //14 - Created Date
        //16 - Edited Date

        //for comp data display
        $('#comp-name').html(data[2]);
        $('#comp-contact').html("<strong>Contact Person:</strong>" + data[4]);
        $('#comp-tel').html("<strong>Telephone:</strong> " + data[6]);
        $('#comp-adr').html("<strong>Address:</strong>" + data[8]);
        $('#comp-zip').html("<strong>ZIP-Code:</strong>" + data[10]);


        if (uid == data[12]) {
            //sensitive data only the creator has access to by checking if the uid matches with the uid of the data viewed
            $('#comp-created').html("<strong>Created:</strong> " + data[14]);
            $('#comp-edited').html("<strong>Edited:</strong> " + data[16]);
            $('#buttons').html("<button onclick='edit()'>EDIT</button><button class='button-styled-red' onclick='deleteCustomer()'>DELETE</button>"); 
            
            //for the edit form
            $('#e-cid').val(data[0]);
            $('#e-compname').val(data[2]);
            $('#e-compcon').val(data[4]);
            $('#e-comptel').val(data[6]);
            $('#e-compadr').val(data[8]);
            $('#e-compzip').val(data[10]);

            //for the delete form
            $('#d-compname').text(data[2]);
            $('#d-cid').val(data[0]);

        } else {
            $('#comp-created').text("");
            $('#comp-edited').text("");
            $('#buttons').html("");
        }

    });
}

function edit() {
    $('#edit-form').show('slow');
    $('#edit-form')[0].scrollIntoView({ behavior: 'smooth'});
}

function cancelEdit() {
    $('#edit-form').hide('slow');
    $('#comp-list')[0].scrollIntoView({ behavior: 'smooth'}); 
}

function deleteCustomer() {
    $('#delete-form').show('slow');
    $('#delete-form')[0].scrollIntoView({ behavior: 'smooth'});
}

function cancelDelete() {
    $('#delete-form').hide('slow');
    $('#comp-list')[0].scrollIntoView({ behavior: 'smooth'}); 
}