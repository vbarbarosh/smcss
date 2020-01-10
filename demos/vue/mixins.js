Vue.mixin({
    methods: {
        px: function (v) {
            return v ? `${v}px` : 0;
        },
        emit_input: function (v) {
            this.$emit('input', v);
        },
    },
});
