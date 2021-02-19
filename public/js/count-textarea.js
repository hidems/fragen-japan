// Get rest of length of textarea of post
var postPanel = new Vue({
    el: '#post-panel',
    data: {
        // Get old value in Laravel
        postPanelText: document.getElementById('post-panel-textarea').value,
    },
    computed: {
        // Get rest of length of textarea
        leftTextLength: function () {
            return 255 - this.postPanelText.length
        },
        computedColor: function () {
            // Not display in case of no input
            if (this.leftTextLength === 255) {
                return 'hidden'
            // Change red color over 255 letters
            } else if(this.leftTextLength < 0) {
                return 'bg-red-500'
            // Change green color less than rest of 20 letters
            } else if (this.leftTextLength < 20) {
                return 'bg-green-500'
            }
        }
    }
})
