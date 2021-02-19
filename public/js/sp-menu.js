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
        textAreaLength: function () {
            return this.postPanelText.length;
        }
    }
})
