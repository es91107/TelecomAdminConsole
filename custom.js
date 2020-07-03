function fetch_data(){
    if($("#name").val()!=""){
        //  $.get("data.php?name="+$("#name").val()+"&submit2="+$("#submit2").val(), function(){
        
        $.ajax({
            url: "data.php?name="+$("#name").val(),
            dataType: "json",
            async: false,

            // url: "data.php",
            // method: "POST",
            // data: {name: $("#name").val()},
            // dataType: "json",
            // async: false,

            success: function(data) {
                console.log(data);
                for (x in data) {
                    if (x == 0) {
                        user = data[x]
                        $('#user_name').text(user['name']);
                        $('#user_gender').text(user['gender']);
                        $('#user_age').text(user['birthdate']);
                        $('#user_phone').text(user['phone']);
                        $('#user_address').text(user['address']);
                        $('#user_id').text(user['ID']);
                        $('#id_update').val(user['ID']);
                    }
                    break;
                };
            },

            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });            


        $.ajax({
            url: "transaction_operate.php?name="+$("#name").val(),
            dataType: "json",
            async: false,

            success: function(data) {
                console.log(data);
                for (x in data) {
                    if (x == 0) {
                        user = data[x]
                        $('#TransNum').text(user['TransNum']);
                        $('#transactionMounth').text(user['transactionMounth']);
                        $('#SN').text(user['SN']);
                        $('#TotalAmount').text(user['TotalAmount']+' 元');
                        $('#DueDate').text(user['DueDate']);
                        $('#paymentMethod').text(user['paymentMethod']);
                        $('#contract').text(user['contract']);
                        $('#transactionMonth').text(user['transactionMonth']+'月');
                    }
                    break;
                };
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }

        })
    };
}




$("#submit2").click(function(event){
    
    event.preventDefault;
    
    fetch_data();

    
});

$("#update_btn").click(function(event){
    event.preventDefault;
    var formdata = new FormData($("#update_form")[0]);
    console.log(formdata)

        $.ajax({
            url: "update.php",
            type: "POST",
            cache: false,
            data: formdata,
            // dataType: "json",
            processData: false,
            contentType: false,

            success: function(data) {
                console.log(data);
                fetch_data();
                $('#tab-0').tab('show')
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }

        })
})
   
