jQuery(document).ready(function($) {
    $('#cat-image').click(function() {
        var catTime = $('#cat-time').text();
        
        if (catTime) {
            var utterance = new SpeechSynthesisUtterance(catTime);
            utterance.voiceURI = 'Google UK English Female';
            
            // Add class to start the animation
            $('#cat-image').addClass('speaking');
            
            window.speechSynthesis.speak(utterance);
            
            utterance.onend = function() {
                // Remove class to stop the animation
                $('#cat-image').removeClass('speaking');
            };
        }
    });
});
