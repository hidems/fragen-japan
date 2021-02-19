// Check if '#post-panel-textarea' element exist
if ($('#post-panel-textarea').length) {
    // Get rest of length of textarea of post
    var postPanel = new Vue({
        el: '#post-panel',
        data: {
            // Get old value in Laravel
            // postPanelText: ''
            postPanelText: document.getElementById('post-panel-textarea').value
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
// Check if '#comment-panel-textarea' element exist
} else if ($('#comment-panel-textarea').length) {
    // Get rest of length of textarea of comment
    var commentPanel = new Vue({
        el: '#comment-panel',
        data: {
            // Get old value in Laravel
            // commentPanelText: ''
            commentPanelText: document.getElementById('comment-panel-textarea').value
        },
        computed: {
            // Get rest of length of textarea
            leftTextLength: function () {
                return 255 - this.commentPanelText.length
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
}
