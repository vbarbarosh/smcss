function dd(context)
{
    const listeners = {mousemove, mouseup};

    begin();

    function begin() {
        jQuery(document).on(listeners);
        context.event.preventDefault();
        translate();
        context.x0 = context.x;
        context.y0 = context.y;
        context.dx = 0;
        context.dy = 0;
        if (typeof context.begin == 'function') {
            context.begin(context);
        }
    }

    function end() {
        jQuery(document).off(listeners);
        if (typeof context.end == 'function') {
            context.end(context);
        }
    }

    function translate() {
        if (typeof context.translate == 'function') {
            context.translate(context);
        }
        else {
            context.x = context.event.clientX;
            context.y = context.event.clientY;
        }
    }

    function mousemove(event) {
        context.event = event;
        translate();
        context.dx = context.x - context.x0;
        context.dy = context.y - context.y0;
        if (typeof context.move == 'function') {
            context.move(context);
        }
    }

    function mouseup(event) {
        context.event = event;
        end();
    }
}
