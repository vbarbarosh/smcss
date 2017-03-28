Unfortunatelly, buttons are more than span plus appearance.

In general *button* can be treated as a special type of element which
_always_ have non-standard *display* property without the possibility
to change it. It will align vertically (not horizontally) any content
put inside.

In general it should have only one _container_ element:

    <button class="xbutton">
        <span class="flex-col-center">
            <svg></svg>
        </span>
    </button>

Align *svg* vertically (default) and horizontally:

    <button class="c xbutton">
        <svg></svg>
    </button>

## Links

* [Firefox forms.css](resource://gre-resources/forms.css)
* [Why `display` doesn't do what you expect on `<button>` in Firefox (and for similar things that don't work in Firefox or Webkit/Blink, for similar reasons)](https://bugzilla.mozilla.org/show_bug.cgi?id=984869#c2)
