({
    data: {
        first: false,
        second: false
    },
    methods: {
        toggleFirst: function () {
            this.first = !this.first;
            this.second = this.second && this.first;
        },
        toggleSecond: function () {
            this.second = !this.second;
        }
    }
})
