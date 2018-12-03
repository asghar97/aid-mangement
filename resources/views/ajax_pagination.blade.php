<script>
    
$(document).ready(function() {
    $(document).on('click', '.pagination a', function (e) {
        getPosts($(this).attr('href').split('page=')[1]);
        e.preventDefault();
    });
});


    function getPosts(page) {

        if(window.location.search == ''){
            var seperator = "?";
        }else{
            var seperator = "&";
        }

        $.ajax({
            url : window.location.search+seperator+'page=' + page,
            //dataType: 'json',
        }).done(function (data) {
        	//alert(data);
            $('.ajax_content').html(data);
            location.hash = page;
        }).fail(function () {
            alert('Posts could not be loaded.');
        });
    }
</script>