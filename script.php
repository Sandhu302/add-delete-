<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script>
    alert ("hello world");
</script> -->

<script type="text/javascript">
function submit(action){
    $(document).ready(function(){
        var date = {
            action: action,
            id: $("#id").val(),
            name: $("#name").val(),
            email: $("#email").val(),
            gender: $("#gender").val(),
        };

        $.ajax({
            url: 'function.php',
            type:'post',
            data: data,
            success: function(response){
                alert(response);
                if(response == "Deleted Successfully"){
                    $("#"+action).css("display","none");
                }
            }
        }); 

    });
}
</script>