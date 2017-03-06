<?php
header('content-type:text/css');

$imagen = $_GET['imagen'];
 
echo <<<FINCSS
/* --------------------------------------------------------------------------
 * jThemes Studio : im Event - One Page HTML Event Conference Template
 *
 * file           : theme.css
 * Desc           : im Event Template - Stylesheet
 * Version        : 1.4
 * Date           : 12/12/2014
 * Author         : jThemes Studio
 * Author URI     : http://jakjim.com
 * Email          : jakjim@gmail.com
 *
 * jThemes Studio. Copyright 2014. All Rights Reserved.
 * -------------------------------------------------------------------------- */



/* --------------------------------------------------------------------------
 *  im Event Stylesheet - Table of Content

    1 - General
    1.1 - Google fonts
    1.2 - Preloader
    1.3 - Global properties (body, common classes, structure etc)
    1.4 - Page section block
    1.5 - Typography (section title, links, page dividers)
    1.6 - Buttons
    1.7 - Form / Input / Textarea

    2 - Header
    2.1 - Logo
    2.2 - Logo hexagon icon
    2.3 - Navigation
    2.4 - Fixed menu
    2.5 - Mobile menu

    3 - Content
    3.1 - Main slider / Owl carousel
    3.2 - Event description
    3.3 - Image carousel / Owl carousel
    3.4 - Partners carousel / Owl carousel
    3.5 - Breadcrumbs
    3.6 - Schedule
    3.7 - FAQ
    3.8 - Blog / Post
    3.9 - Comments
    3.10 - Pagination / Pager
    3.11 - Project / Portfolio
    3.12 - Thumbnails / Features
    3.13 - Media / Testimonials

    4 - Footer

    5 - Widgets / Shortcodes / Components
    5.1 - prettyPhoto
    5.2 - Contact form / af-form
    5.3 - Social line
    5.4 - Price table
    5.5 - Google map
    5.6 - Parallax
    5.7 - Error page
    5.8 - Back to top button
    5.9 - Coming soon page

    6 - Helper Classes

 * -------------------------------------------------------------------------- */





/* --------------------------------------------------------------------------
 * 1 - General
 * -------------------------------------------------------------------------- */

/* 1.1  - Google fonts
/* ========================================================================== */

/* font-family: 'Raleway', sans-serif; */
@import url('http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900');
/* font-family: 'Roboto', sans-serif; */
@import url('http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300,100,100italic,300italic');
/* font-family: 'Roboto Slab', serif; */
@import url('http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700');

/* 1.2 - Preloader
/* ========================================================================== */

#preloader {
    position: fixed;
    top: 0; bottom: 0;
    left: 0; right: 0;
    background-color: #ffffff;
    z-index: 999999;
}
#status {
    width: 200px;
    height: 200px;
    position: absolute;
    left: 50%;
    top: 50%;
    /*You can use animated gif for preloader */
    /*background-image: url(../img/preloader.gif);*/
    /*background-repeat: no-repeat;*/
    /*background-position: center;*/
    margin: -100px 0 0 -100px;
    text-align: center;
    font-size: 50px;
}
#preloader-title {
    margin-top: 47px;
}
.spinner {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    font-size: 100px;
    width: 2em;
    height: 2em;
    margin: 0 auto;
    border-radius: 50%;
    background: #ffffff;
    box-shadow: inset 0 0 0 .12em rgba(0,0,0,0.2);
    background:-webkit-linear-gradient(#ea032d 50%, #353535 50%), -webkit-linear-gradient(#353535 50%, #ea032d 50%);
    background:-webkit-linear-gradient(#ea032d 50%, #353535 50%), -webkit-linear-gradient(#353535 50%, #ea032d 50%);
    background:linear-gradient(#ea032d 50%, #353535 50%), linear-gradient(#353535 50%, #ea032d 50%);
    background-size: 50% 100%, 50% 100%;
    background-position: 0 0, 100% 0;
    background-repeat: no-repeat;
    -webkit-animation: mask 3s infinite alternate;
    animation: mask 3s infinite alternate;
}
.spinner:after {
    content: '';
    position: absolute;
    border: .90em solid rgba(255,255,255,1);
    top: 5%;
    left: 5%;
    width: 90%;
    height: 90%;
    border-radius: inherit;
}
@-webkit-keyframes mask {
    0% { }
    25%  { -webkit-transform: rotate(270deg); }
    50%  { -webkit-transform: rotate( 90deg); }
    75%  { -webkit-transform: rotate(360deg); }
    100% { -webkit-transform: rotate(180deg); }
}
@keyframes mask {
    0% { }
    25%  { -webkit-transform: rotate(270deg); transform: rotate(270deg); }
    50%  { -webkit-transform: rotate( 90deg); transform: rotate( 90deg); }
    75%  { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
    100% { -webkit-transform: rotate(180deg); transform: rotate(180deg); }
}

/* 1.3  - Global properties (body, common classes, structure etc)
/* ========================================================================== */

body {
    font-family: 'Raleway', sans-serif;
    font-size: 18px;
    line-height: 1.33;
    background: #fbfbfb;
    color: #6d7a83;

    -webkit-font-kerning: auto;
    -webkit-font-smoothing: antialiased;
    -webkit-backface-visibility: visible !important; /* reset animate.css / if hidden parallax buggy */
    position:relative;

    /*overflow-x: hidden;*/
}
body.boxed {
    background: #6d7a83;
}

/* overflow the content area
 * -------------------------------------------------------------------------- */

* {
    -ms-word-wrap: break-word;
    word-wrap: break-word;
    /* Prevent Long URL’s From Breaking Out of Container
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto; */
}

.page {}
.content {}
.sidebar {
    font-size: 14px;
    line-height: 1.3;
}
.content .widget + .widget,
.sidebar .widget + .widget,
.footer .widget + .widget {
    margin-top: 50px;
}
.container {}
.wide .container.full-width {
    width: 100%;
    max-width: 100%;
    padding-left: 0;
    padding-right: 0;
    /*margin-top: -70px;*/
    /*margin-bottom: -70px;*/
}
.boxed .container.full-width {
    padding-left: 0;
    padding-right: 0;
}

/* 1.4 - Page section block
/* ========================================================================== */

.wide .page-section,
.boxed .page-section > .container {
    padding-top: 70px;
    padding-bottom: 70px;
    position: relative;
    /*overflow: hidden; /* small devices */
    background-color: #fbfbfb;
}
.boxed .page-section > .container {
    padding-left: 30px;
    padding-right: 30px;
}
.wide .page-section.dark,
.boxed .page-section.dark > .container {
    background-color: #435469;
    color: #f5f5f5;
}
.wide .page-section.light,
.boxed .page-section.light > .container {
    background-color: #f5f5f5;
    color: #435469;
}
.wide .page-section.color,
.boxed .page-section.color > .container {
    background-color: #dc143c;
    color: #ffffff;
}
.wide .page-section.image,
.boxed .page-section.image > .container {
    padding-top: 100px;
    padding-bottom: 100px;
    background-attachment: fixed;
    background-image: url('$imagen');
    background-size: cover !important;
    background-position: 50% 0 !important;
    background-repeat: no-repeat;
}
.wide .page-section.image > .container,
.boxed .page-section.image {
    position: relative;
}
.wide .page-section.image:before,
.boxed .page-section.image > .container:before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    width: 100%; height: 100%;
    background: transparent url("../img/overlay.png") 50% 0 repeat;
}
.page-section.background-img-slider {position: relative;}
.wide .page-section.background-img-slider,
.boxed .page-section.background-img-slider > .container {
    background: transparent url("$imagen") 50% 0 repeat !important;
    background-position: 50% 0 !important;
    background-size: cover !important;
}
.wide .page-section.background-img-slider > .container {
    width: 100%;
    padding-left: 0;
    padding-right: 0;
}
.boxed .page-section.background-img-slider > .container {
    padding: 0 !important;
}
.page-section.no-padding {padding: 0;}
.page-section.no-padding-top {padding-top: 0;}
.page-section.no-padding-bottom {padding-bottom: 0;}
.page-section.sub-page {padding-top: 150px !important;}
.page-section.with-sidebar {padding-top: 150px;}
.page-section.first-section {padding-top: 50px;}

.wide .page-section.breadcrumbs,
.boxed .page-section.breadcrumbs > .container {
    padding-top: 110px;
    padding-bottom: 15px;
}

.wide .page-section.overlay:before,
.boxed .page-section.overlay > .container:before {
    content: '';
    display: block;
    position: absolute;
    top: 0; left: 0;
    bottom: 0; right: 0;
    background-color: rgba(0, 0, 0, 0.30);
}

.block-title {}
.block-text {}
.block-readmore {
    margin-top: 40px;
    margin-bottom: 40px;
}

/* 1.5 - Typography (section title, links, page dividers)
/* ========================================================================== */

h1, h2, h3, h4, h5, h6 {
    font-weight: normal;
    color: #141f23;
}
h1 .fa, h2 .fa, h3 .fa, h4 .fa, h5 .fa, h6 .fa,
h1 .glyphicon, h2 .glyphicon, h3 .glyphicon,
h4 .glyphicon, h5 .glyphicon, h6 .glyphicon {
    color: #ea032d;
}

/* Section title
 * -------------------------------------------------------------------------- */

.section-title {
    position: relative;
    font-size: 24px;
    font-weight: 900;
    line-height: 1;
    margin: 0 0 40px 0;
    z-index: 0;
    text-transform: uppercase;
    color: #0d1d31;
    display: table;
    width: 100%;
}
.section-title small {
    font-size: 24px;
    font-weight: 300;
    line-height: 1;
    text-transform: none;
    color: #374146;
}
.section-title .icon-inner {
    display: table-cell;
    width: 70px;
}
.section-title .title-inner {
    display: table-cell;
    padding-bottom: 2px;
    vertical-align: middle;
}

.image .section-title,
.image .section-title small,
.dark .section-title,
.dark .section-title small,
.color .section-title,
.color .section-title small {
    color: #ffffff;
}
.color .section-title:after {
    color: #141f23;
}

.section-title .fa-stack {
    width: 50px;
    height: 57px;
    line-height: 57px;
    margin-right: 20px;
}
.section-title .fa-stack .fa {color: #ffffff;}
.color .section-title .fa-stack .fa {color: #dc143c;}
.section-title .rhex {background-color: #dc143c;}
.color .section-title .rhex {background-color: #ffffff;}
.color .section-title .crcle {background-color: #ffffff;}
.color .section-title .wohex {background-color: #ffffff;}

/* Hexagon icon
 * -------------------------------------------------------------------------- */

.rhex {
    background-color: #dc143c;
    margin-top: 14px;
    width: 50px;
    height: 28px;
    border-radius: 2px;
}
.rhex:before,
.rhex:after {
    position: absolute;
    top: 0; left: 0;
    width: inherit;
    height: inherit;
    border-radius: inherit;
    background-color: inherit;
    content: '';
}
.rhex:before {
    -webkit-transform: rotate(60deg);
    -moz-transform:    rotate(60deg);
    -ms-transform:     rotate(60deg);
    -o-transform:      rotate(60deg);
    transform:         rotate(60deg);
}
.rhex:after {
    -webkit-transform: rotate(-60deg);
    -moz-transform:    rotate(-60deg);
    -ms-transform:     rotate(-60deg);
    -o-transform:      rotate(-60deg);
    transform:         rotate(-60deg);
}

/* Circle icon
 * -------------------------------------------------------------------------- */

.crcle {
    background-color: #dc143c;
    margin-top: 3px;
    width: 50px;
    height: 50px;
    border-radius: 25px;
    line-height: 48px;
}

/* Without hexagon icon
 * -------------------------------------------------------------------------- */

.wohex {
    background-color: #dc143c;
    margin-top: 3px;
    width: 50px;
    height: 50px;
    border-radius: 10px;
    line-height: 48px;
}

/* Links, Link color
 * -------------------------------------------------------------------------- */

a,
a .fa,
a .glyphicon,
a:hover,
a:hover .fa,
a:hover .glyphicon,
a:active,
a:focus {
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    text-decoration: none;
}

a {color: #ea032d;}
a:hover,
a:active,
a:focus {color: #000000;}

.color a {color: #ffffff;}
.color a:hover,
.color a:active,
.color a:focus {color: #000000;}

p {
    /*-moz-hyphens: auto;*/
    /*-webkit-hyphens: auto;*/
    /*-ms-hyphens: auto;*/
    /*hyphens: auto;*/
    margin-bottom: 20px;
}
ul, ol {
    padding-left: 0;
    list-style: none;
    margin-bottom: 20px;
}
ul ul, ol ol,
ul ol, ol ul {
    padding-left: 20px;
}

.dropcap {
    display: block;
    float: left;
    font-size: 49px;
    line-height: 48px;
    margin: 0 10px 0 0;
    color: #ea032d;
}
.text-lg {
    text-transform: uppercase;
    font-size: 24px;
    line-height: 1.2;
    color: #141f23;
}

/* Page header /* bs3
 * -------------------------------------------------------------------------- */

.page-header {
    margin-top: 20px;
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
    font-size: 36px;
    font-weight: 300;
    color: #515151;
}
.page-header h1 {
    margin: 0;
    font-size: 36px;
    font-weight: 300;
    color: #515151;
}
.page-header h1 small {
    display: block;
    font-size: 16px;
    font-weight: 300;
    color: #6f6f6f;
}

/* Page dividers
 * -------------------------------------------------------------------------- */

hr {}
hr.page-divider {
    margin-top: 40px;
    margin-bottom: 40px;
    clear: both;
    border-color: #eeeeee;
}
hr.page-divider:after {
    content: '';
    display: block;
    margin-top: 1px;
    border-bottom: solid 1px #eeeeee;
}
hr.transparent,
hr.page-divider.transparent {
    border-color: transparent;
}
hr.page-divider.half {
    border-color: transparent;
    margin-top: 0;
}
hr.page-divider.small {
    border-color: transparent;
    margin-top: 0;
    margin-bottom: 20px;
}
hr.page-divider.single {
    border-color: #646464;
}
hr.page-divider.single:after {
    display: none;
}
hr.page-divider.transparent:after,
hr.page-divider.half:after,
hr.page-divider.small:after {
    display: none;
}

.alert {border-radius: 10px;}

/* 1.6 - Buttons
/* ========================================================================== */

.btn,
.btn:hover,
.btn:active,
.btn.active {
    box-shadow: none;
    border-radius: 0;
}
.btn-theme,
.btn-theme:hover,
.btn-theme:active,
.btn-theme.active {
    border-radius: 10px;
}
.btn-theme {
    color: #ffffff;
    background-color: #dc143c;
    border-color: #dc143c;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 700;
    line-height: 1;
    padding: 15px 35px;

    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.btn-theme:hover {
    background-color: #435469;
    border-color: #435469;
    color: #ffffff;
}
.color .btn-theme {
    color: #dc143c;
    background-color: #ffffff;
    border-color: #ffffff;
}
.color .btn-theme:hover {
    background-color: #435469;
    border-color: #435469;
    color: #ffffff;
}
.btn-theme-transparent,
.btn-theme-transparent:focus,
.btn-theme-transparent:active{
    background-color: transparent;
    border-color: #dc143c;
    color: #dc143c;
}
.btn-theme-transparent:hover {
    background-color: #435469;
    border-color: #435469;
    color: #ffffff;
}
.btn-theme-transparent-grey,
.btn-theme-transparent-grey:focus,
.btn-theme-transparent-grey:active{
    background-color: transparent;
    border-color: #435469;
    color: #435469;
}
.btn-theme-transparent-grey:hover {
    background-color: #435469;
    border-color: #435469;
    color: #ffffff;
}
.btn-theme-transparent-white,
.btn-theme-transparent-white:focus,
.btn-theme-transparent-white:active{
    background-color: transparent;
    border-color: #ffffff;
    color: #ffffff;
}
.btn-theme-transparent-white:hover {
    background-color: #435469;
    border-color: #435469;
    color: #ffffff;
}
.btn-theme-grey {
    background-color: #f5f5f5;
    border-color: #e8e8e8;
    color: #ea032d;
}
.btn-theme-grey:hover,
.btn-theme-grey:focus,
.btn-theme-grey:active {
    background-color: #435469;
    border-color: #435469;
    color: #ffffff;
}
.btn-theme-xs {}
.btn-theme-sm {
    font-size: 14px;
    padding: 10px 25px;
}
.btn-theme-lg {
    font-size: 18px;
    padding: 20px 35px;
}
.btn-theme-xl {
    font-size: 24px;
    padding: 25px 35px;
}

p.btn-row {margin-top: -10px;}
p.btn-row .btn {margin-top: 10px; margin-right: 10px;}

/* 1.7 - Form / Input / Textarea / Select
/* ========================================================================== */

.form-control {
    height: 60px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 10px;
    border: 1px solid #c8cdd2;
    font-size: 18px;
    color: #6d7a83;
    -webkit-appearance: none; /* ios */
    -webkit-box-shadow: none;
    box-shadow: none;
}
.form-control:focus {
    border-color: #ea032d;
    -webkit-appearance: none; /* ios */
    -webkit-box-shadow: none;
    box-shadow: none;
}
textarea {
    resize: none;
}

.bootstrap-select {}
.bootstrap-select > .selectpicker {
    height: 60px;
    border: 1px solid #c8cdd2;
    border-radius: 10px;
    font-size: 18px;
    color: #6d7a83 !important;
    -webkit-appearance: none; /* ios */
    -webkit-box-shadow: none;
    box-shadow: none;
    padding-left: 20px;
    padding-right: 20px;
    background-color: #ffffff !important;
    box-shadow: none !important;
}
.bootstrap-select > .selectpicker:focus {border-color: #ea032d;}
.bootstrap-select-searchbox .form-control {
    height: 40px;
    font-size: 14px;
    border-radius: 0;
    padding-left: inherit;
    padding-right: inherit;
}

.registration-form {margin-top: -15px;}
.registration-form .form-group {margin-top: 15px; margin-bottom: 0;}
.registration-form .form-group.selectpicker-wrapper {z-index: 1; position: relative;}
.registration-form .bootstrap-select.btn-group:not(.input-group-btn),
.registration-form .bootstrap-select.btn-group[class*="span"] {margin-bottom: 0;}
.registration-form .tooltip {left: 15px !important;}
.registration-form .selectpicker-wrapper .tooltip {top: -47px !important;}
.registration-form .tooltip-inner {background-color: #ea032d; padding: 10px 20px;}
.registration-form .tooltip-arrow {border-top-color: #ea032d;}
.registration-form .tooltip.top .tooltip-arrow {border-top-color: #ea032d;}
.registration-form .form-alert {margin-bottom: 0;}

.registration-form.alt {margin-top: 0;}
.registration-form.alt .form-group {margin-top: 0; margin-bottom: 10px;}
.registration-form.alt .form-alert .alert {margin-bottom: 10px;}



/* --------------------------------------------------------------------------
 * 2 - Header
 * -------------------------------------------------------------------------- */

.wide .header,
.boxed .header > .container {
    background-color: transparent;
    position: relative;
    padding-top: 40px;
    padding-bottom: 40px;
}
.sub-page .header {
    background-color: rgba(129, 134, 140, 1);
}
.header.header-mp {
    padding-top: 30px;
    padding-bottom: 15px;
    border-bottom: solid 1px rgba(255, 255, 255, 0.5);
}
.header.fixed {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 99999;
}
.header.shrink-off {
    padding-top: 2px;
    padding-bottom: 2px;
    /*background-image: linear-gradient(rgba(129, 134, 140, 1), rgba(129, 134, 140, .0));*/
    background-color: rgba(129, 134, 140, .8);
}
.wide .header.shrink,
.boxed .header.shrink > .container {
    padding-top: 2px;
    padding-bottom: 2px;
    background-color: rgba(129, 134, 140, .8);
}
.header .header-wrapper {
    position: relative;
}
.header,
.header.fixed,
.header.shrink,
.header > .container {
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

/* 2.1 - Logo
/* ========================================================================== */

.logo {
    float: left;
    font-size: 30px;
    font-weight: bold;
    margin-top: -12px;
}
.logo a {color: #ffffff; display: inline-block; line-height: 2em;}
.logo a:hover {color: #dc143c;}
.logo a .logo-hex {background-color: #dc143c;}
.logo a:hover .logo-hex {background-color: #ffffff;}
.logo a .logo-fa {color: #ffffff;}
.logo a:hover .logo-fa {color: #dc143c;}
.logo .fa-stack {width: 54px; height: 62px; line-height: 62px;}

.shrink .logo {margin-top: 0;}
.shrink .logo a {line-height: 1em;}
.shrink .logo a .logo-fa {font-size: 15px;}
.shrink .logo .fa-stack {width: 27px; height: 31px; line-height: 31px;}

.logo .fa-stack,
.shrink .logo .fa-stack {
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.logo a .logo-fa,
.shrink .logo a .logo-fa {
    -webkit-transition: none;
    transition: none;
}

/* 2.2 - Logo hexagon icon
/* ========================================================================== */

.logo-hex {
    margin-top: 14px;
    width: 54px;
    height: 31px;
    border-radius: 3px;
    cursor: pointer;
}
.logo-hex:before,
.logo-hex:after {
    position: absolute;
    top: 0; left: 0;
    width: inherit;
    height: inherit;
    border-radius: inherit;
    background-color: inherit;
    content: '';
}
.logo-hex:before {
    -webkit-transform: rotate(60deg);
    -moz-transform:    rotate(60deg);
    -ms-transform:     rotate(60deg);
    -o-transform:      rotate(60deg);
    transform:         rotate(60deg);
}
.logo-hex:after {
    -webkit-transform: rotate(-60deg);
    -moz-transform:    rotate(-60deg);
    -ms-transform:     rotate(-60deg);
    -o-transform:      rotate(-60deg);
    transform:         rotate(-60deg);
}
.shrink .logo-hex {
    margin-top: 7px;
    width: 27px;
    height: 15px;
    border-radius: 1px;
}

/* 2.3 - Navigation / superfish skin
/* ========================================================================== */

.navigation {float: right;}

/* SUPERFISH ESSENTIAL STYLES */

.sf-menu,
.sf-menu * {margin: 0; padding: 0;}
.sf-menu li {position: relative;}
.sf-menu ul {position: absolute; display: none; top: 100%; left: 0; z-index: 99;}
.sf-menu > li {float: left; border-radius: 10px;}
.sf-menu li:hover > ul,
.sf-menu li.sfHover > ul {display: block;}
.sf-menu a {display: block; position: relative;}
.sf-menu ul ul {top: 0; left: 100%;}
.sf-menu ul {min-width: 12em; /* submenu width */}

/* SUPERFISH THEME SKIN */

.sf-menu {margin-right: -1em; font-size: 14px; font-weight: 300; text-transform: uppercase;}
.sf-menu.nav > li > a:hover, /* bs3 reset */
.sf-menu.nav > li > a:focus /* bs3 reset */ {background-color: transparent;}
.sf-menu.nav > li > a, /*bs3 reset */ .sf-menu a {padding: 10px 15px;}

.sf-menu a {color: #ffffff;}
.sf-menu a:hover {color: #ffffff;}
.sf-menu li:hover,
.sf-menu li.sfHover {}
.sf-menu li.active {background-color: rgba(13, 29, 49, 0.30);}
.sf-menu li.active > a {color: #ffffff; }
.sf-menu ul {margin-left: 1em;}
.sf-menu ul ul {margin-left: 0;}
.sf-menu ul li {background: #f2f2f2;}

/* ARROW DOWN */

.sf-menu.nav > li > a.sf-with-ul, /* bs3 reset */
.sf-arrows .sf-with-ul {padding-right: 2.5em;}
.sf-arrows .sf-with-ul:after {
    content: '';
    position: absolute;
    top: 50%;
    right: 1em;
    margin-top: -1px;
    height: 0;
    width: 0;
    border: 3px solid transparent;
    border-top-color: #9e9e9e;
}
.sf-arrows > li > .sf-with-ul:focus:after,
.sf-arrows > li:hover > .sf-with-ul:after,
.sf-arrows > .sfHover > .sf-with-ul:after {
    border-top-color: #dc143c;
}

/* ARROW RIGHT */

.sf-arrows ul .sf-with-ul:after {
    margin-top: -5px;
    margin-right: -3px;
    border-color: transparent;
    border-left-color: #9e9e9e;
}
.sf-arrows ul li > .sf-with-ul:focus:after,
.sf-arrows ul li:hover > .sf-with-ul:after,
.sf-arrows ul .sfHover > .sf-with-ul:after {
    border-left-color: #dc143c;
}

/* 2.4 - Fixed menu
/* ========================================================================== */

.menu-toggle {
    display: none;
    position: fixed;
    padding: 0; margin: 0;
    right: 280px; top: 43px;
    font-size: 30px;
    line-height: 30px;
    border: none;
    color: #ffffff !important;
}
.shrink .menu-toggle {
    top: 7px;
}

@media (max-width: 991px) {
    .navigation {
        position: fixed;
        right: 0;
        top: 0;
        height: 100%;
        width: 250px;
        background-color: rgba(13, 29, 49, 0.95);
    }
    .navigation.closed {right: -250px;}
    .navigation.opened {right: 0;}
    .sf-menu {margin-right: 0; padding: 15px 15px 0 15px;}
    .sf-menu > li {float: none;}
    .sf-menu ul {display: block !important; position: relative;}
    .sf-menu ul li {background-color: transparent;}
    .menu-toggle {display: block; z-index: 1;}
    .navigation.closed .menu-toggle {right: 15px;}
    .navigation.opened .menu-toggle {right: 15px; top: 7px;}
}

.header-mp .menu-toggle{
    top: 33px;
}

/* 2.5 - Mobile menu
/* ========================================================================== */

#mobile-menu {
    display: none;
    position: absolute;
    top: 30px; right: 0;
    width: 200px;
    z-index: 0;
}
.mobile-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 0;
    cursor: pointer;
    height: 40px;
    /* Required for IE 5, 6, 7 */
    /* ...or something to trigger hasLayout, like zoom: 1; */
    width: 100%;
    /* Theoretically for IE 8 & 9 (more valid) */
    /* ...but not required as filter works too */
    /* should come BEFORE filter */
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    /* This works in IE 8 & 9 too */
    /* ... but also 5, 6, 7 */
    filter: alpha(opacity=0);
    /* Older than Firefox 0.9 */
    -moz-opacity: 0;
    /* Safari 1.x (pre WebKit!) */
    -khtml-opacity: 0;
    /* Modern!
    /* Firefox 0.9+, Safari 2?, Chrome any?
    /* Opera 9+, IE 9+ */
    opacity: 0;
}
.mobile-menu-title {
    line-height: 40px;
    font-size: 12px;
    text-transform: uppercase;
    text-align: right;
}
.mobile-menu-title .fa {
    font-size: 30px;
}
@media (max-width: 991px) {
    #mobile-menu {
        display: block;
        float: right;
    }
    .mobile-menu {
        display: block;
    }

}
.mobile-submenu {display: none;}
@media (max-width: 991px) {
    .mobile-submenu {
        display: block;
        opacity: .5;
        background-color: #dc143c;
        height: 30px;
        width: 30px;
        position: absolute;
        top: 5px;
        right: 2px;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        cursor: pointer;
    }
    .sf-menu li {
        float: none!important;
        display: block!important;
        width: 100%!important;
    }
    .sf-menu li a {
        float: none!important;
    }
    .sf-menu ul {
        position:static!important;
        display: none!important;
    }
    .mobile-submenu-open ul {
        display: block!important;
        opacity: 1 !important;
    }
}



/* --------------------------------------------------------------------------
 * 3 - Content
 * -------------------------------------------------------------------------- */



/* 3.1 - Slider / Owl sliders
/* ========================================================================== */

#main-slider .item {min-height: 660px;}
#main-slider .owl-wrapper {/*margin-top*/}
#main-slider.owl-theme .owl-item {position: relative;}
#main-slider.owl-carousel .owl-item {-webkit-backface-visibility: visible;}

#main-slider.owl-theme .owl-controls {margin: 0;}
#main-slider.owl-theme .owl-controls .owl-page span,
#main-slider.owl-theme .owl-controls .owl-buttons div {background-color: transparent;}
#main-slider.owl-theme .owl-controls .owl-pagination {position: absolute; bottom: 20px; width: 100%;}

#main-slider.owl-theme .owl-controls .owl-buttons {position: absolute; top: 50%; margin-top: -40px; width: 100%;}
#main-slider.owl-theme .owl-controls .owl-buttons .owl-prev,
#main-slider.owl-theme .owl-controls .owl-buttons .owl-next {
    position: relative;
    border-radius: 0;
    font-size: 55px;
    line-height: 20px;
    margin: 0;
    opacity: 1;
    color: #ffffff;
    text-shadow: 1px 1px 0 #141f23;
}
#main-slider.owl-theme .owl-controls .owl-buttons .owl-prev:hover,
#main-slider.owl-theme .owl-controls .owl-buttons .owl-next:hover {color: #dc143c;}
#main-slider.owl-theme .owl-controls .owl-buttons .owl-prev {float: left; margin-left: 90px;}
#main-slider.owl-theme .owl-controls .owl-buttons .owl-next {float: right; margin-right: 90px;}

#main-slider.owl-carousel .owl-item .item {
    overflow: hidden;
    /*max-height: 660px;*/
}
#main-slider.owl-carousel .owl-item .item img {/*max-width: 100%;*/}

.owl-carousel .owl-item {-webkit-transform: translateZ(0) scale(1.0, 1.0);}

/* Main slider controls
 * -------------------------------------------------------------------------- */

#main-slider.owl-theme .owl-controls {
    margin: 0 !important;
}

@media (max-width: 639px) {
    #main-slider.owl-theme .owl-controls {
        display: none;
    }
}

#main-slider.owl-theme .owl-controls .owl-nav [class*=owl-] {
    position: absolute;
    top: 50%;
    margin: -25px 0 0 0;
    padding: 0;
    width: 50px;
    height: 50px;
    font-size: 30px;
    line-height: 48px;
    border: solid 1px #ffffff;
    border-radius: 10px;
    background: transparent;
    color: #ffffff;
}

#main-slider.owl-theme .owl-controls .owl-nav [class*=owl-]:hover {
    border-color: #dc143c;
    background: #dc143c;
    color: #ffffff;
}

#main-slider.owl-theme .owl-controls .owl-nav .owl-prev {
    left: 30px;
}

#main-slider.owl-theme .owl-controls .owl-nav .owl-next {
    right: 30px;
}

#main-slider.owl-theme .owl-controls .owl-dots {
    position: absolute;
    width: 100%;
    bottom: 70px;
}

@media (min-width: 768px) and (max-width: 991px) {
    #main-slider.owl-theme .owl-controls .owl-dots {
        bottom: 115px;
    }
}

#main-slider.owl-theme .owl-controls .owl-dots .owl-dot span {
    background-color: #ffffff;
    width: 14px;
    height: 14px;
}

#main-slider.owl-theme .owl-controls .owl-dots .owl-dot:hover span,
#main-slider.owl-theme .owl-controls .owl-dots .owl-dot.active span {
    background-color: #dc143c;
    border: solid 2px #ffffff;
}

/* Slider Caption
 * -------------------------------------------------------------------------- */

#main-slider .caption {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
}
#main-slider .caption > .container {
    position: relative;
    min-height: 100%;
    height: 100%;
    padding-top: 100px;
    padding-bottom: 60px;
}
#main-slider .caption .div-table {
    width: 100%;
}
#main-slider .caption-title {
    font-family: 'Roboto Slab', serif;
    font-size: 60px;
    line-height: 60px;
    font-weight: 300;
    color: #ffffff;
    text-shadow: 1px 1px #000000;
    clear: both;
    display: inline-block;
    text-transform: uppercase;
    margin: 0 0 0 0;

    display: block;
    position: relative;
    overflow: hidden;
}
#main-slider .caption-title span {
    display: inline-block;
    position: relative;
    padding-left: 20px;
    padding-right: 20px;
}
#main-slider .caption-title span:before,
#main-slider .caption-title span:after {
    content: ''; display: block;
    position: absolute;
    top: 25px; left: -100%;
    height: 5px;
    width: 100%;
    border-top: solid 1px #ffffff;
    border-bottom: solid 1px #ffffff;
}
#main-slider .caption-title span:after {
    left: auto;
    right: -100%;
}

#main-slider .caption-subtitle {
    font-family: 'Raleway', sans-serif;
    font-size: 50px;
    font-weight: 900;
    color: #ffffff;
    text-shadow: 1px 1px #000000;
    text-transform: uppercase;
    margin: 30px 0 0 0;
}
#main-slider .caption-subtitle .fa {color: #ffffff;}
#main-slider .caption-subtitle span {
    color: #253239;
}
#main-slider .caption-text {
    color: #8c8e93;
    font-size: 14px;
    margin: 30px 0 0 0;
}
#main-slider .caption-text .btn:first-child {margin-right: 30px;}
@media (max-width: 1024px) {
    #main-slider .caption-subtitle {
        font-size: 50px;
    }
}
@media (max-width: 991px) {
    #main-slider .caption-subtitle,
    #main-slider .caption-text {
        margin-top: 20px;
    }
    #main-slider .caption-title {font-size: 60px;}
    #main-slider .caption-subtitle {font-size: 22px;}
    #main-slider .caption-text {font-size: 12px;}
}
@media (max-width: 767px) {
    #main-slider .caption {
        right: 0;
        padding: 0 80px;
        max-width: 100%;
        background-color: transparent;
    }
    #main-slider .caption-title {font-size: 30px; line-height: 30px;}
    #main-slider .caption-title span:before,
    #main-slider .caption-title span:after {
        top: 15px;
    }
    #main-slider .caption-subtitle {font-size: 20px;}
    #main-slider .caption-text {font-size: 12px;}

    #main-slider .caption-text .btn:first-child,
    #main-slider .caption-text .btn {
        display: block;
        width: 200px;
        margin-top: 15px;
        margin-left: auto;
        margin-right: auto;
        padding: 8px 20px;
        font-size: 13px;
    }
    #main-slider .caption-text .btn:first-child {
        margin-top: 50px;
    }
}
@media (max-width: 479px) {
    #main-slider .caption {
        /*display: none;*/
        padding-left: 0;
        padding-right: 0;
    }
    #main-slider .caption-title {}
    #main-slider .caption-title span {padding: 0;}
    #main-slider .caption-title span:before,
    #main-slider .caption-title span:after {
        display: none;
    }
    #main-slider .caption-subtitle {}
    #main-slider .caption-text .btn {
        display: block;
        margin-top: 10px;
    }
    .event-description {}
}

/* -------------------------------------------------------------------------- */
/*video css strats*/
.video-warp{
    width: 100%;
}
#bgvid {
    position: absolute;
    top: 0;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    left: 0;
    right: 0;
    background-size: cover;
    transition: 1s opacity;
}
/*video css ends*/

.countdown-wrapper {
    margin-top: 30px;
}
.defaultCountdown {
    background-color: transparent;
    border-color: transparent;
}
.countdown-amount {
    font-family: 'Raleway', sans-serif;
    font-size: 65px;
    font-weight: 900;
    color: #ffffff;
    text-shadow: 1px 1px #000000;
    text-transform: uppercase;
    margin: 30px 0 0 0;
}
.countdown-period {
    font-family: 'Roboto Slab', serif;
    font-size: 18px;
    line-height: 20px;
    font-weight: 300;
    color: #ffffff;
    text-shadow: 1px 1px #000000;
    clear: both;
    text-transform: uppercase;
    margin: 0 0 0 0;
    display: block;
    position: relative;
    overflow: hidden;
}
@media (max-width: 767px) {
    .countdown-amount {font-size: 33px;}
    .countdown-period {font-size: 13px;}
}

/* -------------------------------------------------------------------------- */

.form-background {
    background-color: #0d1d31;
    border-radius: 10px;
    padding: 10px;
}
.form-background .form-control {
    margin-bottom: 10px;
}
.form-header {
    background-color: #dc143c;
    border-radius: 10px;
    margin-bottom: 20px;
    padding: 30px 20px 10px 20px;
}
.form-header .section-title {
    margin-bottom: 20px;
}
.text-holder {
    position: relative;
    padding: 30px 0;
    overflow: hidden;
}
.text-holder:before,
.text-holder:after {
    content: ''; display: block;
    position: absolute;
    top: 0; left: 0;
    height: 5px;
    width: 100%;
    border-top: solid 1px #ffffff;
    border-bottom: solid 1px #ffffff;
}
.text-holder:after {
    top: auto; bottom: 0;
}

.btn-play {
    display: inline-block !important;
    padding: 0 !important;
    border: solid 1px #ffffff;
    background-color: rgba(255, 255, 255, 0.3);
    width: 170px !important;
    height: 170px !important;
    border-radius: 50% !important;
    text-align: center;
}
.btn-play .fa {
    width: 145px;
    height: 145px;
    border-radius: 50%;
    font-size: 65px;
    line-height: 150px;
    margin-top: 12px;
    background-color: #ffffff;
    color: #dc143c;
}
.btn-play:hover {border-color: #dc143c;}
.btn-play:hover .fa {background-color: #dc143c;}
.btn-play:hover .fa {color: #ffffff;}

@media (max-height: 615px) {
    #main-slider .form-background {}
    #main-slider .bootstrap-select > .selectpicker,
    #main-slider .form-control {
        border-radius: 10px;
        font-size: 13px;
        height: 40px;
    }
}

@media (max-width: 991px) {
    #main-slider .form-background {
        display: none !important;
    }
}

@media (max-width: 479px) {
    .btn-play {
        width: 90px !important;
        height: 90px !important;
    }
    .btn-play .fa {
        width: 80px;
        height: 80px;
        font-size: 50px;
        line-height: 80px;
        padding-left: 10px;
        margin-top: 4px;
    }
}

.slide3:before {
    content: '';
    display: block;
    position: absolute;
    top: 0; left: 0;
    bottom: 0; right: 0;
    background-color: rgba(220, 20, 60, .7);
}

/* 3.2 - Event description
/* ========================================================================== */

.event-description {
    position: absolute;
    width: 100%;
    left: 0; bottom: 0;
    z-index: 11;
}
@media (max-width: 767px) {
    .event-description {
        display: none;
        position: relative;
        margin-top: 50px;
    }
}
.event-background {
    border-radius: 30px 30px 0 0;
    background-color: #0d1d31;
    margin: 0 15px;
    padding-bottom: 10px;
}
@media (max-width: 767px) {
    .event-background {
        border-radius: 30px 30px 30px 30px;
        padding-bottom: 15px;
    }
}
.event-description {
    font-size: 14px;
    font-weight: 700;
    line-height: 18px;
    text-align: left;
    color: #ffffff;
}
.event-description .row > div {}
.event-description .row > div + div {}
.event-description .media-heading {
    font-size: 14px;
    font-weight: 700;
    line-height: 18px;
    text-transform: uppercase;
    color: #ff0033;
    margin: 15px 0 0 0;
}
.event-description .media-body span {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block;
}
.event-description .fa {
    margin-top: 15px;
}

.boxed .event-description > .container {
    padding-left: 0;
    padding-right: 0;
}
.boxed .event-background {
    border-radius: 0;
}

/* 3.3 - Image carousel / Owl carousel
/* ========================================================================== */

.img-carousel {}
.img-carousel .owl-controls {margin: 0 auto;}
.img-carousel .owl-pagination {
    position: absolute;
    width: 100%;
    bottom: 0;
}
.img-carousel .owl-prev,
.img-carousel .owl-next {
    position: absolute;
    padding: 5px !important;
    top: 50%;
    left: 10px;
    font-size: 20px;
    text-align: center;
}
.img-carousel .owl-next {
    left: auto;
    right: 10px;
}
.img-carousel .owl-prev .fa,
.img-carousel .owl-next .fa {
    width: 20px;
    line-height: 20px;
    height: 20px;
    text-align: center;
}
.img-carousel .owl-controls .owl-page span,
.img-carousel .owl-controls .owl-buttons div {background-color: #dc143c;}

/* 3.4 - Partners carousel / Owl carousel
/* ========================================================================== */

.partners-carousel .owl-carousel div a {display: block; text-align: center; background-color: #f3f4f5; border-radius: 10px; padding: 10px;}
.partners-carousel .owl-carousel div a img {display: inline-block; max-width: 100%; }
.partners-carousel .owl-carousel .owl-item img {width: auto;}
.partners-carousel .owl-theme .owl-controls {}
.partners-carousel .owl-theme .owl-controls .owl-nav {position: absolute; right: 0; top: -80px;}
@media (max-width: 767px) {
    .partners-carousel .owl-theme .owl-controls .owl-nav {position: inherit !important; margin-top: 30px;}
}
.partners-carousel .owl-theme .owl-controls .owl-nav [class*="owl-"] {
    background-color: transparent;
    border-radius: 0;
    margin: 0;
    padding: 0;
    line-height: 1;
}
.partners-carousel .owl-prev,
.partners-carousel .owl-next {
    border: solid 1px #435469;
    border-radius: 10px !important;
    color: #435469;
    height: 50px;
    width: 50px;
    line-height: 50px;
    text-align: center;
}
.partners-carousel .owl-next {margin-left: 10px !important;}
.partners-carousel .owl-prev .fa,
.partners-carousel .owl-next .fa {
    color: #435469;
    font-size: 33px !important;
    line-height: 50px;
}
.partners-carousel .owl-prev:hover ,
.partners-carousel .owl-next:hover  {
    border-color: #dc143c;
    color: #dc143c;
}
.partners-carousel .owl-prev:hover .fa,
.partners-carousel .owl-next:hover  .fa {
    color: #dc143c;
}

/* 3.5 - Breadcrumbs
/* ========================================================================== */

.breadcrumbs .breadcrumb {
    position: relative;
}
.breadcrumbs .breadcrumb {
    padding: 0; margin: 0;
    font-size: 14px;
    line-height: 30px;
    background-color: transparent;
}
.breadcrumbs .breadcrumb li {color: #eeeeee;}
.breadcrumbs .breadcrumb a {color: #ffffff;}
.breadcrumbs .breadcrumb a:hover {border-bottom: solid 1px #ffffff;}
.breadcrumbs .breadcrumb > li + li:before {
    font-family: 'FontAwesome';
    content: '\f105  ';
}

/* 3.6 - Schedule
/* ========================================================================== */

.schedule-wrapper {
    margin-top: 30px;
    border: solid 1px #435469;
    border-top: none;
    border-bottom-width: 10px;
    border-radius: 30px 30px 10px 10px;
    overflow: hidden;
}
.schedule-tabs.lv1 {
    background-color: #435469;
    color: #ffffff;
}
.schedule-tabs.lv2 {
    border: solid 1px #8598b0;
    border-top: none;
    background-color: #ffffff;
}
.tab-content.lv1 {}
.tab-content.lv2 {}
.tab-content.lv2 .tab-pane {padding: 30px 70px;}
@media (max-width: 1024px) {
    .tab-content.lv2 .tab-pane {padding: 30px 50px;}
}
@media (max-width: 992px) {
    .tab-content.lv2 .tab-pane {padding: 30px 30px;}
}
@media (max-width: 767px) {
    .tab-content.lv2 .tab-pane {padding: 15px 15px;}
}
.schedule-wrapper .nav > li > a {
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
}
.schedule-wrapper .nav > li > a:hover,
.schedule-wrapper .nav > li > a:focus {
    background-color: transparent;
}
.schedule-wrapper .schedule-tabs.lv1 .nav > li > a {
    min-height: 70px;
    text-transform: uppercase;
    color: #ffffff;
}
.schedule-wrapper .schedule-tabs.lv1 .nav > li.active:before {
    content: '';
    position: absolute; z-index: 1;
    top: 100%; right: 50%;
    width: 0; height: 0;
    margin-left: -7px;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-top: 7px solid #435469;
}
.schedule-wrapper .schedule-tabs.lv2 .nav > li > a {
    color: #293239;
}
.schedule-wrapper .schedule-tabs.lv1 .nav > li.active > a {}
.schedule-wrapper .schedule-tabs.lv2 .nav > li.active > a {
    color: #dc143c;
}
.schedule-wrapper .schedule-tabs.lv2 .nav > li.active:before {
    content: '';
    display: block;
    height: 2px;
    width: 100%;
    position: absolute;
    bottom: -1px; left: 0;
    background-color: #dc143c;
}

/* 3.7 - FAQ
/* ========================================================================== */

.row.faq {}
.row.faq .tab-content {
    font-size: 14px;
    line-height: 24px;
    border: solid 1px #435469;
    border-radius: 2px;
    background-color: #fdfdfd;
    padding: 30px 30px 10px 30px;
    position: relative;
}
@media (max-width: 767px) {
    .row.faq .tab-content {
        margin-top: 20px;
        border-radius: 0 0 10px 10px;
    }
}
@media (min-width: 768px) {
    .row.faq .nav li.active:before { content: ''; position: absolute; top: 15px; right: -31px; width: 0; height: 0; border-top: 10px solid transparent; border-right: 10px solid #435469; border-bottom: 10px solid transparent; z-index: 1;}
    .row.faq .nav li.active:after { content: ''; position: absolute; top: 15px; right: -32px; width: 0; height: 0; border-top: 10px solid transparent; border-right: 10px solid #fdfdfd; border-bottom: 10px solid transparent; z-index: 2;}
}
@media (max-width: 767px) {
    .row.faq > .pull-left,
    .row.faq > .pull-right {float: none !important;}
}

.row.faq .tab-content .fa {
    font-size: 18px;
}
.row.faq .nav {}
.row.faq .nav li + li {
    margin-top: 20px;
}
.row.faq .nav li a {
    padding-top: 13px;
    padding-bottom: 13px;
    padding-left: 20px;
    border-radius: 10px;
    border: solid 1px #435469;
    background-color: #fdfdfd;
    color: #374146;
}
.row.faq .nav li.active a,
.row.faq .nav li a:hover {
    background-color: #dc143c;
    border-color: #dc143c;
    color: #ffffff;
}
.row.faq .nav li a .fa {
    width: 20px;
    text-align: center;
    margin-right: 15px;
    margin-top: 3px;
    float: left;
}
.row.faq .nav li a .faq-inner {
    display: block;
    overflow: hidden;
}

/* 3.8 - Blog / Post
/* ========================================================================== */

.content .post-wrap {position: relative;}
.content .post-wrap + .post-wrap {
    margin-top: 50px;
    position: relative;
}
.row.post-row {}
.row.post-row .post-wrap {margin-top: 30px;}
.post {}
.post-header {margin-bottom: 20px; position: relative;}
.post-title {color: #0d1d31; font-weight: 700; margin-top: 0; margin-bottom: 25px; font-size: 18px;}
.post-title a {color: #0d1d31; line-height: 1;}
.post-title a:hover {color: #dc143c;}
.post-header .post-meta {color: #dc143c; line-height: 1; font-size: 14px;}
.post-header .post-meta a,
.post-header .post-meta .fa {color: #435469;}
.post-header .post-meta a:hover {color: #dc143c;}
.post-header .social-line {margin-top: -2px;}
.post-header .social-line li {padding-top: 2px; padding-right: 2px;}
.post-header .social-line a {height: 20px; width: 20px; line-height: 20px; font-size: 14px;}
.post-header .post-meta-author {display: block; margin-bottom: 20px;}

.post-footer {}
.post-readmore {display: block; text-align: right;}
.post-readmore .btn {
    font-size: 14px;
    padding: 12px 15px;
    border-color: #435469;
    color: #435469;
}
.post-readmore .btn:hover,
.post-readmore .btn:focus {
    background-color: #435469;
    border-color: #435469;
    color: #ffffff;
}

.post-excerpt {font-size: 14px;}

.post-meta-author,
.post-meta-category,
.post-meta-comment {}
.post-meta-author a {color: #464c4e; font-size: 14px;}
.post-meta-author a:hover {color: #000000;}
.post-media {
    margin-bottom: 20px;
    border-radius: 10px;
    overflow: hidden;
}
.post-media img {max-width: 100%; width: 100%;}
.post-type {
    position: absolute;
    top: 10px; right: 25px;
    width: 40px; height: 40px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    text-align: center;
    line-height: 40px;
}
.post-type .fa {}
.content .post-type {right: 12px;}
.post-content {text-align: justify;}
footer.post-meta {margin-top: 40px;}
footer.post-meta .post-tags {display: block;}
footer.post-meta .post-categories {display: block;}
.post + .post {
    border-top: solid 1px #efefef;
    margin-top: 50px;
    padding-top: 50px;
}

.about-the-author {
    margin-top: 30px;
    padding-top: 30px;
    border-top: solid 1px #efefef;
}

.about-the-author .media-heading {
    color: #dc143c;
}

.timeline .post-header {margin-bottom: 15px;}
.timeline .media-body {padding: 25px; background-color: #ffffff; border-radius: 10px;}
.timeline .post-media {
    border: solid 8px #afb4ba;
    border-radius: 50%;
}
.timeline .post-media.pull-left {margin-right: 60px;}
@media (max-width: 1024px) {
    .timeline .post-media.pull-left {margin-right: 30px;}
}
@media (max-width: 767px) {
    .timeline .post-media {
        float: none !important;
        width: 110px !important;
        margin-left: auto !important;
        margin-right: auto !important ;
    }
}
.timeline .post-wrap + .post-wrap {margin-top: 30px;}
.timeline .post-title {
    font-size: 30px;
    font-weight: 700;
    color: #dc143c;
    border-bottom: solid 1px #d2d2dc;
    padding-bottom: 12px;
    margin-bottom: 12px;
}
.timeline .post-title a {color: #dc143c;}
.timeline .post-title a:hover {color: #000000;}
.timeline .post-meta {
    font-family: 'Roboto', sans-serif;
    font-size: 24px;
    font-weight: 300;
    color: #293239;
    margin-bottom: 10px;
}
.timeline .post-meta a .fa {color: #dc143c;}
.timeline .post-meta a:hover .fa {color: #293239;}
.timeline .post-meta .fa-stack {line-height: 32px; height: 32px; width: 32px;}
.timeline .post-meta .fa-stack-2x {line-height: 32px; font-size: 32px;}
.timeline .post-meta .fa-stack-1x {line-height: 32px; font-size: 16px;}
.timeline .post-excerpt {
    line-height: 24px;
}
.timeline .post-readmore {
    color: #293239;
    text-align: left;
}
.timeline .post-readmore a {color: #293239;}
.timeline .post-readmore a:hover {color: #dc143c;}
.timeline .post-readmore .fa {
    /*width: 18px;*/
    /*text-align: center;*/
}

/* 3.9 - Comments
/* ========================================================================== */

.comments {
    margin-top: 30px;
    padding-top: 30px;
    border-top: solid 1px #f5f5f5;
}
.comments > .comment:last-child .comment-reply {
    border: none;
    padding-bottom: 0;
    margin-bottom: 0;
}
.comment {}
.comment-avatar {}
@media (max-width: 479px) {
    .comment-avatar img {width: 24px; height: auto;}
}
.comment-meta {margin-bottom: 5px;}
.comment-author {}
.comment-date {font-size: 11px; line-height: 11px; color: #b0afaf;}
.comment-text {margin-bottom: 20px;}
.comment-reply {font-size: 11px; line-height: 11px; margin-bottom: 20px; border-bottom: solid 1px #efefef; padding-bottom: 20px;}
.comments-form {
    margin-top: 40px;
    padding-top: 40px;
    border-top: solid 1px #efefef;
}
.comments-form .block-title {
    color: #dc143c !important;
}
.comments-form > .block-title {
    margin-top: 0;
    margin-bottom: 30px;
}

/* 3.10 - Pagination / Pager
/* ========================================================================== */

.pagination-wrapper {
    border-top: solid 1px #f5f5f5;
    margin-top: 50px;
    padding-top: 50px;
}
.pagination {
    margin: 0;
}
.pagination > li > a {
    background-color: #f5f5f5;
    color: #253239;
    border-radius: 17px;
    margin: 0 10px 0 0;
    padding: 4px 13px 5px 13px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
    border-radius: 20px;
    background-color: transparent;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
    border-radius: 20px;
    background-color: transparent;
}
.pagination > li > a,
.pagination > li > span {
    border: none;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
    background-color: #dc143c;
    color: #ffffff;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
    background-color: #dc143c;
    border-color: #dc143c;
}
.pager {margin: 0;}
.pager li > a, .pager li > span {
    border-radius: 0;
}

.sidebar .form-control {
    height: 40px;
    font-size: 14px;
    line-height: 40px;
    padding: 10px 12px;
}

/* Categories
/* ========================================================================== */

.widget.categories ul {}
.widget.categories li {
    line-height: 30px;
}
.widget.categories li + li {
    margin-top: 10px;
}
.widget.categories li a {
    display: block;
    padding: 6px 12px;
    background-color: #f5f5f5;
    color: #435469;
    border-radius: 8px;
}
.widget.categories li.active a,
.widget.categories li a:hover {
    background-color: #dc143c;
    color: #ffffff;
}
.widget.categories li a small {
    float: right;
}

/* flickr feed
/* ========================================================================== */

.widget.flickr-feed ul {
    overflow: hidden;
    margin-left: -10px;
    margin-bottom: -10px;
}
.widget.flickr-feed li {
    float: left;
    margin: 0 0 10px 10px;
}
.widget.flickr-feed li a {
    display: block;
    border: solid 1px transparent;
    border-radius: 8px;
    overflow: hidden;
}
.widget.flickr-feed li a:hover {
    border-color: #dc143c;
}

.widget.flickr-feed li a img {
    width: 78px;
    height: auto;
}
@media (max-width: 1199px) {
    .widget.flickr-feed li a img {
        width: 62px;
    }
}
@media (max-width: 991px) {
    .widget.flickr-feed li a img {
        width: 64px;
    }
}
@media (max-width: 767px) {
    .widget.flickr-feed li a img {
        width: 70px;
    }
}

/* Tag-cloud
/* ========================================================================== */

.tag-cloud {
    overflow: hidden;
}

.tag-cloud li {
    float: left;
    margin: 0 10px 10px 0;
}

.tag-cloud a {
    display: block;
    padding: 5px 10px;
    background-color: transparent;
    border-radius: 8px;
    border: solid 1px #435469;
    color: #435469;
}

.tag-cloud a:hover {
    color: #ffffff;
    background-color: #dc143c;
    border-color: #dc143c;
}


/* 3.11 - Project / Portfolio
/* ========================================================================== */

.project-single {}
.project-media {}
.project-overview {}
.project-details {}
.project-details .dl-horizontal dt {
    text-align: left;
}
.project-details .dl-horizontal dt {
    color: #3c4547;
    width: 90px;
}
.project-details .dl-horizontal dd {
    position: relative;
    margin-left: 110px;
}
@media (max-width: 767px) {
    .project-details .dl-horizontal dt {
        float: left;
    }
}

/* 3.12 - Thumbnails / Features
/* ========================================================================== */

.thumbnail {
    position: relative;
    background-color: transparent;
    border-radius: 0;
    margin: 0;
}
.thumbnail.hover,
.thumbnail:hover {
    border: solid 1px #dc143c;
}
.thumbnail.no-border,
.thumbnail.no-border.hover,
.thumbnail.no-border:hover {
    border: none;
}
.thumbnail.no-padding {
    padding: 0;
}
.thumbnail.no-radius {
    border-radius: 0;
}

.row.thumbnails {margin-top: -30px;}
.row.thumbnails .thumbnail {margin-top: 30px;}

.row.thumbnails.no-padding {margin-top: 0; margin-left: 0; margin-right: 0;}
.row.thumbnails.no-padding [class*='col-'] {padding: 0;}
.row.thumbnails.no-padding .thumbnail {margin-top: 0;}

/* Thumbnail Media/Image
 * -------------------------------------------------------------------------- */

.thumbnail .media {
    overflow: hidden;
    position: relative;
    border-radius: 10px;
    -webkit-transform: translateZ(0) scale(1.0, 1.0);

    /*-webkit-backface-visibility: hidden;*/
    /*-webkit-transform: translateZ(0) scale(1.0, 1.0);*/
    /*outline:1px solid transparent;*/
}
.thumbnail .media:after {
    content: '';
    position: absolute;
    top: 0; right: 0; bottom: 0; left: 0;
    /*background: url('../img/overlay-media.png') repeat 50% 50%;*/
}
.thumbnail.hover .media:after,
.thumbnail:hover .media:after {
    opacity: 0.1;
}
.thumbnail .media img {
    max-width: 100%;
    width: 100%;

    /*display: block;*/
	/*transform-style: initial !important;*/
    /*-webkit-backface-visibility: hidden !important;*/
}
.thumbnail.hover .media img,
.thumbnail:hover .media img {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
}
/* fix animation bug */
.thumbnail .media.img-circle,
.thumbnail.hover .media.img-circle,
.thumbnail:hover .media.img-circle {
    -webkit-transform: scale(1) !important;
    -ms-transform: scale(1) !important;
    transform: scale(1) !important;
}

/* Thumbnail caption
 * -------------------------------------------------------------------------- */

.thumbnail {
    border-radius: 10px;
    overflow: hidden;
}
.thumbnail .caption {
    padding: 20px 0 0 0;
    overflow: hidden;
    font-size: 14px;
}
.thumbnail .caption + .caption {padding-top: 10px;}
.thumbnail .caption.no-padding-top {padding-top: 0;}
.thumbnail .caption.no-padding-bottom {padding-bottom: 0;}

.thumbnail .caption.before-media {}
.thumbnail .caption.hovered {
    position: absolute;
    top: 0; right: 0;
    left: 0; bottom: 0;
    height: 100%;
    width: 100%;
    text-align: center;
    overflow: hidden;
    padding: 15px;
    background-color: transparent; /*dc143c*/
    background-color: rgba(220, 20, 60, 0.60);
    color: #ffffff;
    opacity: 0;
    z-index: 10;
}
.thumbnail.hover .caption.hovered,
.thumbnail:hover .caption.hovered {
    opacity: 1;
}
.caption-wrapper {width: 100%;}
.caption-inner {}

/* Caption elements
 * -------------------------------------------------------------------------- */

.caption-title {
    font-size: 18px;
    font-weight: 700;
    line-height: 24px;
    text-transform: uppercase;
    margin: 0 0 0 0;
    color: #0d1d31;
}
.hovered .caption-title {color: #ffffff;}
.caption-buttons {margin-bottom: 0;}
.caption-buttons .btn {
    /*background-color: #dc143c;*/
    color: #ffffff;
    font-size: 30px;
}
.caption-buttons .btn:hover {
    /*background-color: #000000;*/
}
.caption-category {
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 0;
    text-transform: uppercase;
    line-height: 14px;
    color: #dc143c;
}
.caption-link {}
.caption-zoom {}
.caption-zoom.theone {}
.caption-social {}
.caption-redmore {
    font-size: 12px;
    color: #c4334b;
    text-decoration: underline;
}
.caption-redmore:hover {
    color: #000000;
}

/* --------------------------------------------------------------------------
 * Thumbnail type
 * -------------------------------------------------------------------------- */

/* Thumbnail transition
 * -------------------------------------------------------------------------- */

.thumbnail .media,
.thumbnail .media:after,
.thumbnail .media:before,
.thumbnail.hover .media,
.thumbnail:hover .media,
.thumbnail.hover .media:after,
.thumbnail:hover .media:after,
.thumbnail.hover .media:before,
.thumbnail:hover .media:before,
.thumbnail .media img,
.thumbnail.hover .media img,
.thumbnail:hover .media img,
.thumbnail .media .fa,
.thumbnail.hover .media .fa,
.thumbnail:hover .media .fa,
.thumbnail .caption-title,
.thumbnail.hover .caption-title,
.thumbnail:hover .caption-title,
.thumbnail .caption-zoom,
.thumbnail.hover .caption-zoom,
.thumbnail:hover .caption-zoom,
.thumbnail .caption-link,
.thumbnail.hover .caption-link,
.thumbnail:hover .caption-link,
.thumbnail .caption-category,
.thumbnail.hover .caption-category,
.thumbnail:hover .caption-category,
.thumbnail .caption,
.thumbnail.hover .caption,
.thumbnail:hover .caption {
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

/* 3.13 - Media / Testimonials
/* ========================================================================== */

.testimonial .media-body {padding-right: 15px;}
.testimonial .media-heading {font-weight: 700; color: #0d1d31; font-size: 16px; margin-bottom: 0;}
.testimonial .media-heading small {}
.testimonials.owl-carousel .owl-item img {width: auto;}
.testimonials.owl-theme .owl-dots .owl-dot span {
    height: 15px; width: 15px;
}
.color .testimonials.owl-theme .owl-dots .owl-dot span {
    background-color: #dc143c;
    border: solid 2px #ffffff;
}
.color .testimonials.owl-theme .owl-dots .owl-dot.active span,
.color .testimonials.owl-theme .owl-dots .owl-dot:hover span {
    background-color: #ffffff;
}
@media (min-width: 1024px) {
    .testimonials .owl-dots {
        position: absolute;
        top: -65px;
        right: 0;
    }
}

/* HEXAGONS */

.hex {
    position: relative;
    /*height: ;*/ /*width: 170px;*/
    width: 165px;
    margin: 0 auto;
}
.hex .hex-inner {
    margin: 0 auto;
    height: 190px; width: 170px;
    text-align: center;
    -webkit-transform: none;
    -moz-transform: none;
    -o-transform: none;
    -ms-transform: none;
    transform: none;
}
.hex-deg {
    overflow: hidden;
    width: 100%; height: 100%;
    -webkit-transform: rotate(120deg);
    -moz-transform: rotate(120deg);
    -o-transform: rotate(120deg);
    -ms-transform: rotate(120deg);
    transform: rotate(120deg);
}
.hex-deg .hex-deg {
    width: 100%; height: 100%;
    -webkit-transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -o-transform: rotate(-60deg);
    -ms-transform: rotate(-60deg);
    transform: rotate(-60deg);
}
.hex-deg .hex-deg .hex-deg {}

.hex.testimonial-avatar {width: 100px;}
.hex.testimonial-avatar .hex-inner {height: 115px; width: 100px;}
.wohexagon.testimonial-avatar {width: 100px; border-radius: 10px; overflow: hidden;}
.wohexagon.testimonial-avatar .wohexagon-inner {height: 115px; width: 100px;}
.hex.speaker-avatar {}
.hex.speaker-avatar .hex-inner {}

/* CIRCLE */

.circle {
    width: 165px;
    margin: 0 auto;
}
.circle .circle-inner {
    border: 8px solid #AFB4BA;
}
.circle .circle-inner,
.circle .media,
.circle .media > img,
.circle .caption.hovered {
    overflow: hidden;
    border-radius: 50%;
}
.circle .media,
.circle .media > img,
.circle .caption.hovered {
    -webkit-transform: translateZ(0) !important;
    -moz-transform: translateZ(0) !important;
    -o-transform: translateZ(0) !important;
    -ms-transform: translateZ(0) !important;
    transform: translateZ(0) !important;
}

/* 4 - Footer
/* ========================================================================== */

.footer-widgets {}
.wide .footer-meta,
.boxed .footer-meta > .container {
    padding: 40px 0 40px 0;
    background-color: #f5f5f5;
    color: #414650;
    font-size: 18px;
}

/* 5 - Widgets / Shortcodes
/* ========================================================================== */

.sidebar .widget {}
.sidebar .widget > *:last-child {
    margin-bottom: 0;
}
.widget-title {
    position: relative;
    margin-bottom: 30px;
    margin-top: 0;
    font-size: 24px;
}
.sidebar .widget-title {
    color: #dc143c;
}
.sidebar .widget-title .fa {
    font-size: 24px;
    margin-right: 10px;
    vertical-align: middle;
}
.footer .widget-title {color: #ffffff;}
.widget-title small {
    display: block;
    margin-top: 4px;
    font-size: 12px;
    text-transform: none;
}
.sidebar .widget-title small {color: #999999;}
.footer .widget-title small {color: #818181;}

.widget-title:before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    height: 2px;
    width: 20px;
    background-color: #dc143c;
}
.sidebar .widget-title:before {
    display: none;
}

/* 5.1 - prettyPhoto
/* ========================================================================== */

div.dark_square .pp_left,div.dark_square .pp_middle,
div.dark_square .pp_right,div.dark_square .pp_content {
    background:transparent;
}
div.pp_overlay {
    height: 100% !important;
    width: 100% !important;
    display: block !important;
    opacity: 0.8 !important;
}

/* 5.2 - Contact form / af-form
/* ========================================================================== */

#af-form .form-control {
    height: 60px;
    background-color: #ffffff;
    border-color: #ffffff;
    color: #ffffff;
}
#af-form .form-control:focus {
    border-color: #dc143c;
}
#af-form .form-control,
#af-form .form-control:focus,
#af-form .form-control:hover {
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
#af-form textarea.form-control {
    height: 180px;
}
#af-form .alert {
    margin-left: 15px;
    margin-right: 15px;
    padding: 10px 15px;
    border-color: #dc143c;
    background-color: #dc143c;
    color: #ffffff;
}
#af-form .tooltip {
    left: 15px !important;
}
#af-form .tooltip-inner {
    border-radius: 0;
    padding: 10px 20px;
    background-color: #000000;
}
#af-form .tooltip-arrow {
    border-top-color: #000000;
}
.form-button-reset {
    margin-left: 15px;
    color: #253239;
    background-color: #f5f5f5;
    border-color: #e8e8e8;
}
.form-button-reset:focus,
.form-button-reset:hover {
    color: #ffffff;
    background-color: #999999;
    border-color: #999999;
}
#af-form > div:last-child .form-group:last-child {
    margin-bottom: 0;
}
.color #af-form .form-control {
    border-color: #ffffff;
    background-color: transparent;
    background-color: rgba(2, 2, 2, .2);
}
.color #af-form .form-control:focus {
    background-color: rgba(2, 2, 2, .5);
}

/* 5.3 - Social line
/* ========================================================================= */

.social-line {
    margin: -15px 0 0 0;
    line-height: 33px;
}
.social-line li {
    padding: 20px 5px 15px 0;
}
.social-line a {
    display: block;
    width: 30px;
    height: 15px;
    line-height: 15px;
    background-color: #c3c3c3;
    color: #ffffff;
    text-align: center;
    position: relative;
}
.social-line a:before {
    content: '';
    position: absolute;
    top: -10px; left: 0;
    width: 0; height: 0;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    border-bottom: 10px solid #c3c3c3;
}
.social-line a:after {
    content: '';
    position: absolute;
    bottom: -10px; left: 0;
    width: 0; height: 0;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    border-top: 10px solid #c3c3c3;
}
.social-line a.twitter {background-color: #2daae1;}
.social-line a.twitter:before {border-bottom-color: #2daae1;}
.social-line a.twitter:after {border-top-color: #2daae1;}
.social-line a.facebook {background-color: #3c5b9b;}
.social-line a.facebook:before {border-bottom-color: #3c5b9b;}
.social-line a.facebook:after {border-top-color: #3c5b9b;}
.social-line a.google,
.social-line a[title*='Google+'] {background-color: #f63f29;}
.social-line a.google:before {border-bottom-color: #f63f29;}
.social-line a.google:after {border-top-color: #f63f29;}
.social-line a.flickr {background-color: #216BD4;}
.social-line a.flickr:before {border-bottom-color: #216BD4;}
.social-line a.flickr:after {border-top-color: #216BD4;}
.social-line a.dribbble {background-color: #F46899;}
.social-line a.dribbble:before {border-bottom-color: #F46899;}
.social-line a.dribbble:after {border-top-color: #F46899;}
.social-line a.linkedin {background-color: #0085AE;}
.social-line a.linkedin:before {border-bottom-color: #0085AE;}
.social-line a.linkedin:after {border-top-color: #0085AE;}
.social-line a.forrst {background-color: #729A68;}
.social-line a.forrst:before {border-bottom-color: #729A68;}
.social-line a.forrst:after {border-top-color: #729A68;}
.social-line a.tumblr {background-color: #2C4762;}
.social-line a.tumblr:before {border-bottom-color: #2C4762;}
.social-line a.tumblr:after {border-top-color: #2C4762;}
.social-line a.instagram {background-color: #517fa4;}
.social-line a.instagram:before {border-bottom-color: #517fa4;}
.social-line a.instagram:after {border-top-color: #517fa4;}
.social-line a.pinterest {background-color: #cb2027;}
.social-line a.pinterest:before {border-bottom-color: #cb2027;}
.social-line a.pinterest:after {border-top-color: #cb2027;}
.social-line a.skype {background-color: #00aaf1;}
.social-line a.skype:before {border-bottom-color: #00aaf1;}
.social-line a.skype:after {border-top-color: #00aaf1;}
.social-line a.vimeo {background-color: #5BC8FF;}
.social-line a.vimeo:before {border-bottom-color: #5BC8FF;}
.social-line a.vimeo:after {border-top-color: #5BC8FF;}
.social-line a:hover {background-color: #dc143c;}
.social-line a:hover:before {border-bottom-color: #dc143c;}
.social-line a:hover:after {border-top-color: #dc143c;}
.social-line a,
.social-line a:hover {
    -webkit-transition: none;
    -moz-transition: none;
    -ms-transition: none;
    -o-transition: none;
    transition: none;
}
.footer .social-line {
    margin: 0 0 20px 0;
    line-height: 70px;
}
.footer .social-line li {
    padding: 20px 5px 15px 0;
}
.footer .social-line a {
    width: 60px;
    height: 35px;
    line-height: 35px;
    font-size: 30px;
}
.footer .social-line a:before {
    top: -15px;
    border-left-width: 30px;
    border-right-width: 30px;
    border-bottom-width: 15px;
}
.footer .social-line a:after {
    bottom: -15px;
    border-left-width: 30px;
    border-right-width: 30px;
    border-top-width: 15px;
}

.social-line.social-circle a {
    height: 30px;
    border-radius: 15px;
    line-height: 28px;
}
.social-line.social-circle a:before,
.social-line.social-circle a:after {
    display: none;
}
.footer .social-line.social-circle a {
    height: 60px;
    border-radius: 30px;
    line-height: 58px;
}
.footer .social-line.social-circle a:before,
.footer .social-line.social-circle a:after {
    display: none;
}

.social-line.social-wohex a {
    height: 30px;
    border-radius: 4px;
    line-height: 28px;
}
.social-line.social-wohex a:before,
.social-line.social-wohex a:after {
    display: none;
}
.footer .social-line.social-wohex a {
    height: 60px;
    border-radius: 10px;
    line-height: 58px;
}
.footer .social-line.social-wohex a:before,
.footer .social-line.social-wohex a:after {
    display: none;
}

/* 5.4 - Price table
/* ========================================================================== */

.row.price-tables {
    margin-top: -30px;
    overflow: hidden;
}
.row.price-tables > div {}
.price-table {
    text-align: center;
    margin: 30px auto 0 auto;
    border: solid 1px #0d1d31;
    border-radius: 10px;
    padding: 8px;
}
@media (max-width: 767px) {
    .price-table {
        max-width: 480px;
    }
}
.price-table-header {}
.price-label {
    font-size: 24px;
    padding: 25px 15px;
    background-color: #f5f5f5;
    color: #475056;
    border-radius: 10px;
}
.price-label-title {
    margin: 0;
    color: #475056;
    font-weight: 700;
    text-transform: uppercase;
}
.price-value {
    font-size: 90px;
    font-weight: 200;
    padding: 20px 15px;
    color: #dc143c;
}
.price-number {}
.price-unit {font-size: 60px;}
.price-per {}
.price-description {}
.price-table-row {
    color: #6d7a83;
    font-size: 18px;
    padding: 25px 15px;
    border-top: solid 1px #c5c7c9;
}
.price-table-row + .price-table-row {}
.price-table-row.even {}
.price-table-row.odd {}
.price-table-row-bottom {
    border-top: solid 1px #c5c7c9;
    padding: 25px 15px;
}
.price-table-rows {}
.price-table.featured {
    border-color: #dc143c;
}
.price-table.featured .price-table-row-bottom {}
.price-table.featured .price-number {font-weight: 700;}
.price-table.featured .price-value {}
.price-table.featured .btn-theme {}
.price-table.featured .btn-theme:hover {}
.price-table.featured {
    overflow: hidden;
    position: relative;
}
.price-table.featured:before {
    content: 'Best';
    position: absolute;
    top: 15px; right: -65px;
    display: block;
    width: 200px;
    padding: 10px;
    text-transform: uppercase;
    background-color: #dc143c;
    font-size: 15px;
    line-height: 15px;
    font-weight: 700;
    color: #ffffff;
    -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
    -ms-transform: rotate(45deg); /* IE 9 */
    transform: rotate(45deg);
}

/* 5.5 - Google map
/* ========================================================================== */

.google-map,
#map-canvas{
    min-height: 390px;
    max-height: 390px;
}
@media (max-height: 600px) {
    .google-map,
    #map-canvas {
        min-height: 390px;
        max-height: 390px;
    }
}
@media (max-height: 400px) {
    .google-map,
    #map-canvas {
        min-height: 200px;
        max-height: 200px;
    }
}
.container.gmap-background {
    margin-top: 0;
    margin-bottom: 0;
}
.container.gmap-background .on-gmap {
    position: relative; z-index: 1;
    min-height: 200px;
    width: 350px;
}
@media (max-width: 767px) {
    .container.gmap-background .on-gmap {
        width: 290px;
    }
}
.container.gmap-background .google-map,
.container.gmap-background #map-canvas {
    max-height: 100%;
    min-height: 100%;
}
.container.gmap-background .google-map {
    position: absolute;
    left: 0; top: 0; right: 0; bottom: 0;
    width: 100%; height: 100%;
}
.container.gmap-background #map-canvas {
    width: 100%; height: 100%;
}

.container.gmap-background .on-gmap {
    border-radius: 10px;
    padding: 55px 25px 45px 25px;
    line-height: 30px;
}
.container.gmap-background .on-gmap.color {
    background-color: #dc143c;
    color: #fefefe;
}

/* 5.6 - Parallax
/* ========================================================================== */

.parallax {
    position: relative;
    z-index: 1;
}
.parallax h1, .parallax h2, .parallax h3,
.parallax h4, .parallax h5, .parallax h6 {
    color: #ffffff;
}
.parallax .block-title {
    margin-top: 0;
    margin-bottom: 20px;
    font-size: 90px;
    font-weight: bold;
    line-height: 1;
    text-transform: uppercase;
}
@media (max-width: 767px) {
    .parallax .block-title {font-size: 70px;}
}
.parallax .block-text {
    font-size: 24px;
    line-height: 1;
    color: #ffffff;
    opacity: 0.5;
}

.parallax .block-readmore {
    margin-top: 40px;
    margin-bottom: 40px;
}
.parallax-bg {
    position: absolute; top: 0; left: 0; right: 0;
    width: 100%; height: 100%;
    /*background-attachment: fixed !important;*/
    /*background-attachment: scroll !important;*/
    background-repeat: repeat;
    z-index: 2;
}
@media (max-width: 991px) {
    .parallax-bg {background-size: cover !important; background-position: 50% 0 !important;}
}
.parallax-overlay {
    position: absolute; top: 0; left: 0; right: 0;
    width: 100%; height: 100%;
    background-position: 50% 0;
    background-repeat: repeat;
    background-image: url("../img/overlay.png");
    z-index: 3;
}
.parallax-inner {
    position: relative;
    color: #ffffff;
    z-index: 4;
    min-height: 400px;
}

/* 5.7 - Error page
/* ========================================================================== */

.page-section.error-section {
    padding-top: 170px;
}
.error-number {
    display: block;
    font-size: 250px;
    font-weight: bold;
    line-height: 250px;
    text-align: center;
    color: #0d1d31;
}
@media (max-width: 480px) {
    .error-number {
        font-size: 150px;
        line-height: 200px;
    }
}

/* 5.8 - Back to top button
/* ========================================================================== */

.to-top {
    background-color: #373737;
    color: #9f9197;
    z-index: 9999;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    font-size: 25px;
    line-height: 35px;
    text-align: center;
    position: fixed;
    bottom: -100px;
    left: 50%;
    margin-left: -20px;
    cursor: pointer;
    overflow: hidden;
    -webkit-transition: all .4s ease-in-out;
    -moz-transition: all .4s ease-in-out;
    -ms-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}
.to-top:hover {
    background-color: #dc143c;
    color: #ffffff;
}

/* --------------------------------------------------------------------------
 * 5.9 - Coming soon / Error page
 * -------------------------------------------------------------------------- */

.coming-soon .page-section > .container {
    width: 100%;
}
.coming-soon #main-slider {
    display: block;
}
.coming-soon .form-background {
    max-width: 400px;
    margin: 0 auto;
}

.error-page .page-section > .container {
    width: 100%;
}

.error-page .header {
    border-bottom: solid 1px #ffffff;
}
.error-page .header > .container {
    background-color: transparent !important;
}
.error-page .logo a,
.error-page .logo a:hover {color: #ffffff;}
.error-page .logo a .logo-hex,
.error-page .logo a:hover .logo-hex {background-color: #ffffff;}
.error-page .logo a .logo-fa,
.error-page .logo a:hover .logo-fa {color: #dc143c;}

/* --------------------------------------------------------------------------
 * 7 -
 * -------------------------------------------------------------------------- */

.row-event + .row-event {margin-top: 50px;}
@media (max-width: 767px) {
    .row-event-media {margin-bottom: 15px;}
}
.row-event-grid {margin-top: -30px;}
.row-event-grid .row-event-media {margin-top: 30px;}
.row-event-media .date-block {
    z-index: 11;
    position: absolute;
    top: 15px; right: 15px;
    padding: 8px 16px;
    border-radius: 4px;
    text-align: center;
    background-color: rgba(0,0,0,.7);
    color: #f5f5f5;
}
.row-event-media .hover .date-block {
    background-color: rgba(245, 245, 245, 0.90);
    color: #000000;
}
.row-event-media .date-block .month {display: block; font-size: 12px;}
.row-event-media .date-block .day {display: block; font-size: 16px; font-weight: bold;}
.row-event-media .thumbnail > .caption {
    padding: 15px;
    background-color: #f5f5f5;
}
.row-event-media .thumbnail {
    -webkit-transform: translateZ(0);
}
.row-event-body .event-title {
    margin-top: 0;
    padding-bottom: 10px;
    margin-bottom: 15px;
    font-weight: bold;
    color: #dc143c;
    border-bottom: solid 1px #d2d2dc;
}
.row-event-body .event-meta {color: #293239; font-size: 13px; font-weight: 600;}
.row-event-body .event-time {display: block;}
.row-event-body .event-detail {margin-bottom: 30px;}
.row-event-body .event-detail .row-speakers .media{margin-bottom: 20px;}
.row-event-body .event-detail .row-speakers .media-heading {font-size: 16px; line-height: 20px; font-weight: 600;}
.row-event-body .event-detail .media-object {width: 60px;}

.row-related {margin-top: -15px;}
.row-related .media {margin-top: 30px;}

.quantity-group {}
.quantity-group .btn {border-radius: 8px !important; padding: 7px 12px;}
.quantity-group .form-control {background-color: transparent; border-color: transparent; text-align: center; display: inline-block; width: 30px; padding: 0;}

.wide .page-section.single-event-hero,
.boxed .page-section.single-event-hero > .container {
    background-position: 50% 50% !important;
    min-height: 380px;
}
.single-event-hero {color: #ffffff;}
.single-event-hero h1 {max-width: 450px; margin: 0 auto; margin-bottom: 30px;}
.single-event-hero p {max-width: 320px; margin: 0 auto;}

.event-carousel {position: relative;}
.event-carousel .owl-theme .owl-controls .owl-nav [class*=owl-] {padding: 7px 15px; position: absolute;}
.event-carousel .owl-theme .owl-controls .owl-nav .owl-prev {top: 50%; left: 5px;}
.event-carousel .owl-theme .owl-controls .owl-nav .owl-next {top: 50%; right: 5px;}


/* --------------------------------------------------------------------------
 * 6 - Helper Classes
 * -------------------------------------------------------------------------- */

.btn-preview-light,
.btn-preview-light:hover {
    width: 170px;
    border-width: 5px;
    border-color: #f5f5f5;
    background-color: #dc143c;
    margin-right: 9px;
}
.btn-preview-dark,
.btn-preview-dark:hover {
    width: 170px;
    border-width: 5px;
    border-color: #f5f5f5;
    background-color: #0d1d31;
}
@media (max-width: 400px) {
    .btn-preview-light {margin-right: 0 !important;}
}

@media (min-width: 480px) and (max-width: 767px) {
    .col-xsp-4, .col-xsp-6, .col-xsp-8 {float: left;}
    .col-xsp-4 {width: 33.33333333%;}
    .col-xsp-6 {width: 50%;}
    .col-xsp-8 {width: 66.66666667%;}
    .col-xsp-offset-3 {margin-left: 25%;}
}
@media (min-width: 992px) {
    .text-left-md {text-align: left;}
    .text-right-md {text-align: right;}
    .text-center-md {text-align: center;}
}

.text-uppercase {text-transform: uppercase;}

.margin-top {margin-top: 50px;}
.margin-bottom {margin-bottom: 50px;}

.clear {clear: both;}
.vhidden {visibility: hidden;}
.visible {visibility: visible;}
.overflowed {
    overflow: hidden;
    position: relative;
}

.vertical-align {
    position: relative; top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

/*[data-animation],*/
.animated {
    visibility: hidden;
    -webkit-animation-duration: .65s;
    animation-duration: .65s;
    /*-webkit-animation-fill-mode: both;
    animation-fill-mode: both;*/
}
.animated .fa {visibility: hidden;}
.animated .animated .fa {visibility: hidden;}
@media (max-width: 991px) {
    .animated,
    .animated .animated,
    .animated .fa,
    .animated .animated .fa {
        /* Disable animation on small devices */
        visibility: visible;
        -webkit-animation-name: animation-off;
        animation-name: animation-off;
    }

}

.vhidden {visibility: hidden;}
.visible {visibility: visible;}
.visible .fa {visibility: visible;}
.visible .visible .fa {visibility: visible;}

.div-table,
.div-cell {
    height: 100% !important;
    display: table !important;
}
.div-cell {
    display: table-cell !important;
    vertical-align: middle !important;
    float: none !important;
}
.row.div-table {margin: 0;}
@media (max-width: 767px) {
    .row.div-table .div-cell {display: block !important;}
}
.div-cell.dark {}
.div-cell.light {}
.div-cell.color {}
.div-cell.va-top {vertical-align: top !important;}
.div-cell.padding-top {padding-top: 15px;}
.div-cell.padding-bottom {padding-top: 15px;}
.inline-block {
    display: inline-block !important;
}

/* Remove firefox dotted line
 * -------------------------------------------------------------------------- */

a,
a:active,
a:focus,
input,
input:active,
input:focus,
button,
button:active,
button:focus,
select,
select:active,
select:focus,
.bootstrap-select .btn,
.bootstrap-select .btn:active,
.bootstrap-select .btn:focus {
    outline: 0 !important;
}

/* Remove webkit outline glow
 * -------------------------------------------------------------------------- */

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Dark version css
 * -------------------------------------------------------------------------- */

body.body-dark {
    background: #0c1629;
    color: #eff6ff;
}

.body-dark #preloader {
    background: #0d1d31;
}

.body-dark .spinner:after {
    border: .90em solid rgb(13, 29, 49);
}

.body-dark.wide .page-section,
.body-dark.boxed .page-section > .container {
    background: #0d1d31;
    color: #eff6ff;
}

.body-dark.wide .page-section.light,
.body-dark.boxed .page-section.light > .container {
    background-color: #122135;
    color: #eff6ff;
}

.body-dark.wide .page-section.color,
.body-dark.boxed .page-section.color > .container {
    background-color: #122135;
    color: #eff6ff;
}

.body-dark h1, h2, h3, h4, h5, h6 {
    color: #ffffff;
}

.body-dark .section-title {
    color: #ffffff;
}

.body-dark .section-title small {
    color: #435469;
}

.body-dark .section-title .fa-stack .fa {
    color: #ffffff;
}

.body-dark .color .section-title .fa-stack .fa {
    color: #ffffff;
}

.body-dark .section-title .rhex {
    background-color: #dc143c;
}

.body-dark .color .section-title .rhex {
    background-color: #dc143c;
}

.body-dark .color .btn-theme {
    color: #ffffff;
    background-color: #dc143c;
    border-color: #dc143c;
}

.body-dark .color .btn-theme:hover {
    background-color: #000000;
    border-color: #000000;
    color: #ffffff;
}

.body-dark .form-control {
    border-color: #435469;
    background-color: #1c2b3d;
    color: #eff6ff;
}

.body-dark .form-control:focus {
    border-color: #ea032d;
}

.body-dark .bootstrap-select > .selectpicker {
    border-color: #435469;
    background-color: #1c2b3d !important;
    color: #eff6ff !important;
}

.body-dark .bootstrap-select .dropdown-menu {
    background-color: #1c2b3d !important;

}

.body-dark .bootstrap-select .dropdown-menu > li > a {
    color: #eff6ff;
}

.body-dark .event-background {
    background-color: #dc143c;
}

.body-dark .event-description .media-heading {
    color: #0d1d31;
}

.body-dark .timeline .media-body {
    background-color: #1e2c3f;
}

.body-dark .timeline .post-media {
    border-color: #556172;
}

.body-dark .timeline .post-meta,
.body-dark .timeline .post-meta .fa {
    color: #ffffff !important;
}

.body-dark .timeline .post-readmore,
.body-dark .timeline .post-readmore .fa {
    color: #435469;
}

.body-dark .partners-carousel .owl-carousel div a {
    background-color: #16263a;
}

.body-dark .testimonials.owl-theme .owl-dots .owl-dot span {
    background-color: #122135 !important;
    border: solid 2px #435469 !important;
}

.body-dark .testimonials.owl-theme .owl-dots .owl-dot.active span,
.body-dark .testimonials.owl-theme .owl-dots .owl-dot:hover span {
    background-color: #435469 !important;
}

.body-dark .testimonials .media-heading {
    color: #435468;
}

.body-dark .thumbnail .caption {
    color: #435469;
}

.body-dark .caption-title {
    color: #eff6ff;
}

.body-dark .price-table {
    border-color: #435469;
}

.body-dark .price-table-row {
    color: #eff6ff;
    border-top-color: #1f2c3c;
}

.body-dark .price-table-row-bottom {
    border-top-color: #1f2c3c;
}

@media (min-width: 768px) {
    .body-dark .row.faq .nav li.active:before { content: ''; position: absolute; top: 15px; right: -31px; width: 0; height: 0; border-top: 10px solid transparent; border-right: 10px solid #435469; border-bottom: 10px solid transparent; z-index: 1;}
    .body-dark .row.faq .nav li.active:after { content: ''; position: absolute; top: 15px; right: -32px; width: 0; height: 0; border-top: 10px solid transparent; border-right: 10px solid #102033; border-bottom: 10px solid transparent; z-index: 2;}
}

.body-dark .row.faq .tab-content {
    border-color: #435469;
    background-color: #102033;
    color: #ffffff;
}

.body-dark .row.faq .tab-content:before {
    border-right-color: #435469;
}

.body-dark .row.faq .tab-content:after {
    border-right-color: #102033;
}

.body-dark .row.faq .nav li a {
    border-color: #435469;
    background-color: #1c2b3d;
    color: #eff6ff;
}

.body-dark .post-title,
.body-dark .post-title a {
    color: #ffffff;
}

.body-dark .post-header .post-meta {
    color: #ff4e00;
}

.body-dark .post-type .fa {
    color: #878c92;
}

.body-dark .container.gmap-background .on-gmap.color {
    background-color: #0d1d31;
}

.body-dark.wide .footer-meta,
.body-dark.boxed .footer-meta > .container {
    background-color: #0d1d31;
    color: #435469;
}

.body-dark .pagination-wrapper {
    border-top: solid 1px #435469;
}
.body-dark .pagination > li > a {
    background-color: #435469 ;
    color: #f5f5f5;
}
.body-dark .pagination > li > a:hover,
.body-dark .pagination > li > span:hover,
.body-dark .pagination > li > a:focus,
.body-dark .pagination > li > span:focus {
    background-color: #dc143c;
    color: #ffffff;
}
.body-dark .pagination > .active > a,
.body-dark .pagination > .active > span,
.body-dark .pagination > .active > a:hover,
.body-dark .pagination > .active > span:hover,
.body-dark .pagination > .active > a:focus,
.body-dark .pagination > .active > span:focus {
    background-color: #dc143c;
    border-color: #dc143c;
}

.body-dark .widget.categories li a {
    background-color: #435469;
    color: #f5f5f5;
}
.body-dark .widget.categories li.active a,
.body-dark .widget.categories li a:hover {
    background-color: #dc143c;
    color: #ffffff;
}
.body-dark .about-the-author {
    border-top: solid 1px #435469;
}
.body-dark .comments {
    border-top: solid 1px #435469;
}
.body-dark .comment-reply {
    border-bottom: solid 1px #435469;
}
.body-dark .comments-form {
    border-top: solid 1px #435469;
}

/* RTL
/* ========================================================================== */

body.rtl {direction: rtl;}
body.rtl #themeConfig {direction: ltr;}
body.rtl .pull-left {float: right !important;}
body.rtl .pull-right {float: left !important;}
body.rtl .media > .pull-left {margin-right: 0; margin-left: 10px;}
body.rtl .media > .pull-right {margin-left: 0; margin-right: 10px;}
body.rtl .logo {float: right;}
body.rtl .navigation {float: left;}
body.rtl .sf-menu {margin-right: 0; margin-left: -1em;}
body.rtl .sf-menu > li {float: right;}

body.rtl .owl-carousel {direction: ltr;}
body.rtl #main-slider .caption {direction: rtl;}
body.rtl #main-slider .caption-text .btn:first-child {margin-right: 0; margin-left: 30px;}
body.rtl .dropdown-menu {right: 0; left: auto; float: left; text-align: right;}
body.rtl .event-background {text-align: right;}

body.rtl .section-title .fa-stack {margin-right: 0; margin-left: 20px;}
/*body.rtl .section-title .title-inner {display: inline-block;}*/
/*body.rtl .section-title .title-inner small {float: left; margin-right: 10px;}*/
body.rtl p.btn-row .btn {margin-right: 0; margin-left: 10px;}
body.rtl .timeline .post-media.pull-left {margin-left: 60px;}
body.rtl .timeline .post-media.pull-right {margin-right: 60px;}
body.rtl .timeline .post-readmore {text-align: right;}

body.rtl .partners-carousel .owl-theme .owl-controls .owl-nav {right: auto; left: 0;}
@media (min-width: 1024px) {body.rtl .testimonials .owl-dots {right: auto; left: 0;}}
body.rtl .testimonial .media-body {padding-right: 0; padding-left: 15px; direction: rtl;}

body.rtl ul {padding-right: 0;}
body.rtl .social-line li {padding: 20px 0 15px 5px;}

body.rtl .price-table.featured:before {
    right: auto; left: -65px;
    -webkit-transform: rotate(-45deg); /* Chrome, Safari, Opera */
    -ms-transform: rotate(-45deg); /* IE 9 */
    transform: rotate(-45deg);
}

body.rtl .bootstrap-select.btn-group .btn .filter-option {text-align: right;}
body.rtl .bootstrap-select.btn-group .btn .caret {right: auto; left: 12px;}
body.rtl .row.faq .nav li a .fa {float: right; margin-right: 0; margin-left: 15px;}
@media (min-width: 768px) {
    body.rtl .row.faq .nav li.active:before {content: ''; position: absolute; top: 15px; right: auto; left: -31px; width: 0; height: 0; border-top: 10px solid transparent; border-right: none; border-left: 10px solid #435469; border-bottom: 10px solid transparent; z-index: 1;}
    body.rtl .row.faq .nav li.active:after {content: ''; position: absolute; top: 15px; right: auto; left: -32px; width: 0; height: 0; border-top: 10px solid transparent; border-right: none; border-left: 10px solid #fdfdfd; border-bottom: 10px solid transparent; z-index: 2;}
    body.rtl.body-dark .row.faq .nav li.active:before {content: ''; position: absolute; top: 15px; right: auto; left: -31px; width: 0; height: 0; border-top: 10px solid transparent; border-right: none; border-left: 10px solid #435469; border-bottom: 10px solid transparent; z-index: 1;}
    body.rtl.body-dark .row.faq .nav li.active:after {content: ''; position: absolute; top: 15px; right: auto; left: -32px; width: 0; height: 0; border-top: 10px solid transparent; border-right: none; border-left: 10px solid #102033; border-bottom: 10px solid transparent; z-index: 2;}
}
@media (max-width: 767px) {
    body.rtl .row.faq > .pull-left,
    body.rtl .row.faq > .pull-right {float: none !important;}
}
body.rtl .post-type {right: auto; left: 25px;}
body.rtl .post-readmore {text-align: left;}
body.rtl #af-form .tooltip,
body.rtl .registration-form .tooltip {left: auto !important; right: 15px !important;}

body.rtl .tag-cloud li {float: right; margin: 0 0 10px 10px;}
body.rtl .widget.flickr-feed ul {margin-left: 0; margin-right: -10px;}
body.rtl .widget.flickr-feed li {float: right; margin: 0 10px 10px 0;}

body.rtl .pagination > li > a,
body.rtl .pagination > li > span {float: right;}
body.rtl .pagination > li > a {margin: 0 0 0 10px;}

@media (max-width: 991px) {
    body.rtl .navigation.closed {right: auto; left: -250px;}
    body.rtl .navigation.opened {right: auto; left: 0;}
    body.rtl .navigation.closed .menu-toggle {right: auto; left: 15px;}
    body.rtl .navigation.opened .menu-toggle {right: auto; left: 15px;}
}
FINCSS;
?>