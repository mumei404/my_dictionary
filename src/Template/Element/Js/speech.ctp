<script>
$(function(){
    $('.words').each(function(){
        $(this).click(function(){
            var synthes = new SpeechSynthesisUtterance();
            synthes.lang = 'en-GB';
            synthes.voiceURI = 'native';
            synthes.text = $(this).text();
            speechSynthesis.speak(synthes);
        });
    });
});
</script>
