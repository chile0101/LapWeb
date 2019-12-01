$(document).ready(function() {

    $("#display").click(function() {       
        
      debugger;         

        $.ajax({    //create an ajax request to display.php
          type: "GET",
          url: "display.php",             
          dataType: "html",   //expect html to be returned                
          success: function(response){                    
              $("#responsecontainer").html(response); 
              //alert(response);
          }
  
      });
    });

  
    $("#form_create").submit(function(event){
       
        // get form data
    
        var formData={
            'name':$('input[name=name]').val(),
            'year':$('input[name=year]').val()
        };

        // process the form
        $.ajax({
            type:       'POST',
            url:        'process.php',
            data:       formData,
            dataType:   'json',
            encode:     true
        })
            // using the done promise callback
            .done(function(data){
            
            $('.form-group').removeClass('has-error'); // remove the error class
            $('.form-text').remove(); // remove the error text  
    
            // here we will handle errors and validation messages
            if(!data.success){

                if(data.errors.name){
                    $('#name-group').addClass('has-error');
                    $('#name-group').append('<div class="form-text">' +'<p class="text-danger"> ' + data.errors.name +  '</p>' +'</div>');
                }
                if(data.errors.year){
                    $('#year-group').addClass('has-error');
                    $('#year-group').append('<div class="form-text">' +'<p class="text-danger"> ' + data.errors.year +  '</p>' +'</div>');                       
                }
            }else {
    
                $('#form_create').append('<div class="alert alert-success">' + data.message + '</div>');
                // usually after form submission, you'll want to redirect
                // window.location = '/thank-you'; // redirect a user to another page
    
                alert('success'); // for now we'll just alert the user
                }
               
    
            });
    
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
        
    });
});