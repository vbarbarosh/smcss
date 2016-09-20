var fs = require('fs'),
    path = require('path'),
    htmlparser2 = require('htmlparser2'),
    escapeHtml = require('escape-html'),
    handler = new htmlparser2.DomHandler(parserComplete);

function start()
{
    var parser = new htmlparser2.Parser(handler, {decodeEntities: true});
    parser.write(fs.readFileSync(path.resolve(__dirname, 'input.html'), {encoding: 'utf8'}));
    parser.end();
}

function parserComplete(error, dom)
{
    var out = process_children(dom);
    console.log(out);
}

function process(node, meta = {})
{
    var attr, grow = false;
    switch (node.type) {
    case 'comment':
        return '';
    case 'tag':
        attr = Object.assign({}, node.attribs);
        if (attr.grow !== undefined) {
            grow = true;
            attr.class = 'flex-grow ' + (attr.class || '');
            delete attr.grow;
        }
        if (attr['grid-wrap'] !== undefined) {
            attr.class = 'grid' + attr['grid-wrap'] + ' ' + (attr.class || '');
            delete attr['grid-wrap'];
            return html(node.name, attr, wrap_grid(node.children));
        }
        if (attr.grid !== undefined) {
            attr.class = 'grid' + attr.grid + ' ' + (attr.class || '');
            delete attr.grid;
            return html(node.name, attr, process_children(node.children));
        }
        if (attr.hsplit !== undefined) {
            delete attr.hsplit;
            attr.class = 'flex-rows flex-nowrap ' + (attr.class || '');
            return html(node.name, attr, wrap(node.children));
        }
        else if (attr.vsplit !== undefined) {
            delete attr.vsplit;
            attr.class = 'flex-cols flex-nowrap ' + (attr.class || '');
            return html(node.name, attr, wrap(node.children));
        }
        else {
            return html(node.name, attr, process_children(node.children));
        }
        break;
    case 'text':
        return html.q(node.data);
    default:
        console.log('-->', node.type);
        throw new Error('Invalid type');
    }
}

function process_children(children)
{
    var out = '';
    children.forEach(function (child) {
        out += process(child);
    });
    return out;
}

function wrap(children)
{
    return process_children(children);
    var out = '';
    children.forEach(function (child) {
        var meta = {},
            tmp;
        switch (child.type) {
        case 'tag':
            tmp = process(child, meta);
            if (meta.grow) {
                out += html('div', {class: 'flex-grow'}, tmp) + '\n';
            }
            else {
                out += html('div', {}, tmp) + '\n';
            }
            break;
        }
    });
    return out;
}

function wrap_grid(children)
{
    var out = '';
    children.forEach(function (child) {
        var tmp;
        switch (child.type) {
        case 'tag':
            out += html('div', {class: 'col1'}, process(child)) + '\n';
            break;
        }
    });
    return out;
}

/**
 * Examples
 * --------
 *
 * https://github.com/vbarbarosh/php_render_elem_attr_html/blob/master/src/elem.php
 *
 * @param {string} tagName
 * @param {object} attributes
 * @param {boolean|string|Array.<string>} children
 * @returns {string}
 */
function html(tagName, attributes = {}, children = true)
{
    var inner = [tagName],
        body,
        close;

    for (let i = 0, keys = Object.keys(attributes || {}), end = keys.length; i < end; ++i) {
        const attrName = keys[i];
        const attrValue = attributes[attrName];
        switch (attrValue) {
        case true:
            inner.push(html.q(attrName) + '="' + html.q(attrName) + '"');
            break;
        case null:
        case false:
            // ignore
            break;
        default:
            inner.push(html.q(attrName) + '="' + html.q(attrValue) + '"');
            break;
        }
    }

    if (children === false) {
        // leave it open
        body = '';
        close = '';
    }
    else if (children === true) {
        // close it as xml
        inner.push('/');
        body = '';
        close = '';
    }
    else {
        // close it with </tagName>
        body = Array.isArray(children) ? children.join('') : String(children);
        close = '</' + tagName + '>';
    }

    return '<' + inner.join(' ') + '>' + body + close;
}

html.q = escapeHtml;

start();
