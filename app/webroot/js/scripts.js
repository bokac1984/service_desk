$(document).ready(function () {    
    $(document).on('click', '#request-add', function (e) {
        //e.preventDefault();
        
        var data = $('#ServiceRequestAddForm').serialize();
        var numberOfCats = $('#ServiceRequestChildrenCategory option').size();
        var selected = $('#ServiceRequestChildrenCategory').val();
        
        var numberOfTypes = $('#ServiceRequestType option').size();
        var selectedType = $('#ServiceRequestType').val();
        
        if (numberOfTypes > 1 && selectedType) {
            alert("Nije odabrana tip");
        }
        else if (numberOfTypes > 1 && selectedType) {
            alert("Nije odabrana tip");
        }
        else {
            $(this).click();
        }
        console.log(numberOfCats);
        
    });
    
    disableDropdowns();

    $(document).on('change', '#ServiceRequestParentCategory', function (e) {
        e.preventDefault();
        $('#ServiceRequestChildrenCategory').find('option:gt(0)').remove();
        $('#ServiceRequestType').find('option:gt(0)').remove();
        disableDropdowns();
        var id =  $(this).val();
        console.log(id);
        if (id === '-1') {
            return;
        }
        var dataObj = {id: id};
        $.ajax({
            type: 'POST',
            url: '/Categories/listChildCategories',
            data: dataObj,
            dataType: "html",
            success: function (data) {
                console.log(data);
                if (data) {
                    $('#ServiceRequestChildrenCategory').append(data);
                    $('#ServiceRequestChildrenCategory').removeAttr('disabled');
                }
            }
        });
    });

    $(document).on('change', '#ServiceRequestChildrenCategory', function (e) {
        e.preventDefault();
        $('#ServiceRequestType').find('option:gt(0)').remove();
        
        $('#ServiceRequestType').attr('disabled','disabled');
        
        var id =  $(this).val();
        
        if (id === '-1') {
            return;
        }
        var dataObj = {id: id};
        $.ajax({
            type: 'POST',
            url: '/Categories/listChildCategories',
            data: dataObj,
            dataType: "html",
            success: function (data) {  
                if (data) {
                    $('#ServiceRequestType').append(data);
                    $('#ServiceRequestType').removeAttr('disabled');
                }

            }
        });
    });
});

function disableDropdowns() {
    if (!$('#ServiceRequestParentCategory').val()) {
        $('#ServiceRequestChildrenCategory').attr('disabled','disabled'); 
    }   
    
    if (!$('#ServiceRequestChildrenCategory').val()) {
        $('#ServiceRequestType').attr('disabled','disabled');
    }
}