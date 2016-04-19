$(document).ready(function(){

    //confirm all destroys
    $('form').submit(function(event){
        var method = $(this).children(':hidden[name=_method]').val();
        if ($.type(method) !== 'undefined' && method == 'DELETE'){
            if (!confirm('Are You Sure?')){
                event.preventDefault();
            }
        }
    });

    $('#groupselect').change(function() {
        var x = $(this).val();
        $('#group_id_input').val(x);
    });
    
    $('#categoryselect').change(function() {
        var x = $(this).val();
        $('#categoryinput').val(x);
    });
    
    

});