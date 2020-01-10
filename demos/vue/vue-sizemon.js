Vue.component('vue-sizemon', {
    props: ['value'],
    template: '<iframe v-on:load="on_iframe_load" src="about:blank" style="position: absolute; top: -999999px; left: -999999px; width: 100%; height: 100%;" />',
    data: function () {
        return {
            size: null,
        };
    },
    watch: {
        size: 'emit_input',
    },
    methods: {
        on_iframe_load: function () {
            this.$el.contentWindow.onresize = this.update;
            this.update();
        },
        update: function () {
            if (!this.$el) {
                return;
            }
            // Sometimes reading sizes directly from iframe
            // produces wrong numbers: 299.2x150.4 instead of 300x150
            // Screen size: 1920x1080
            // Screen scale: 125%
            // Container size: 300x150
            try {
                const bcr = this.$el.offsetParent.getBoundingClientRect();
                this.size = {width: bcr.right - bcr.left, height: bcr.bottom - bcr.top};
            }
            catch (error) {
                const bcr = this.$el.getBoundingClientRect();
                this.size = {width: bcr.right - bcr.left, height: bcr.bottom - bcr.top};
            }
        },
    },
});
