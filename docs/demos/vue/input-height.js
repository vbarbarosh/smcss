Vue.component('input-height', {
    props: ['value'],
    template: '<input v-on="listeners" v-bind:value="value" type="range" min="0" max="1000" />',
    computed: {
        listeners: function () {
            return {
                ...this.$listeners,
                input: event => this.$emit('input', event.currentTarget.value),
            };
        },
    },
});
