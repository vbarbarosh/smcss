# smcss

A way to organize and write CSS

## Installation

    $ npm i vbarbarosh/smcss

## Before begin

    $ bin/configure
    $ bin/build
    $ bin/test

## A few examples

    <div class="container">
        <div class="container-left">
            left
        </div>
        <div class="container-middle">
            middle
        </div>
        <div class="container-right">
            right
        </div>
    </div>

    .container
        @include sm('fix-c flex-row w800 h200 bs10 rainbow')
    .container-left
        @include sm('flex-noshrink w200')
    .container-middle
        @include sm('flex-fluid')
    .container-right
        @include sm('flex-noshrink w200')
