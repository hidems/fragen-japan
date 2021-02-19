// jQuery
// $(function(){
//     $('.menu-btn').on('click', function(){
//         $('.menu').toggleClass('active');
//     });
// }());

var spMenu = new Vue({
    el: '#sp-menu',
	data: {
		isActive: false,
	}
})

var postPanel = new Vue({
    el: '#post-panel',
    data: {
        postPanelText: '',
    },
    computed: {
        leftTextLength: function () {
            return 255 - this.postPanelText.length
        },
        computedColor: function () {
            if (this.leftTextLength === 255) {
                return 'hidden'
            } else if(this.leftTextLength < 0) {
                return 'bg-red-500'
            } else if (this.leftTextLength < 20) {
                return 'bg-green-500'
            }
        }
    }
})
