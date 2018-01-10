<script>
$(function() {
    // var words = [];
    // $('.words').each(function(i){
    //     words[i] = $(this).text();
    // })
    // console.log(words);
    $('#search').keyup(function(){
        var keyWord = $(this).val();
        $('.words').each(function(i){
            if ($(this).text().indexOf(keyWord) === 0) {
                $(this).parent().show();
            } else {
                $(this).parent().hide();
            }
        })
    });
});
</script>
