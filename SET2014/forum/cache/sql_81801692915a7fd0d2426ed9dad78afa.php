<?php exit; ?>
1415632688
SELECT s.style_id, c.theme_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path FROM phpbb_styles s, phpbb_styles_template t, phpbb_styles_theme c, phpbb_styles_imageset i WHERE s.style_id = 3 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
89071
a:1:{i:0;a:11:{s:8:"style_id";s:1:"3";s:8:"theme_id";s:1:"3";s:10:"theme_data";s:88661:"/*  phpBB3 Style Sheet
    --------------------------------------------------------------
	Style name:			Absolution
	Based on style:	    prosilver (the default phpBB 3.0.x style)		
	Original author:	Tom Beddard ( http://www.subblue.com/ )
	Modified by:		Christian Bullock ( http://www.ChristianBullock.com/ )
    --------------------------------------------------------------
*/

/* General Markup Styles
---------------------------------------- */

* {
	/* Reset browsers default margin, padding and font sizes */
	margin: 0;
	padding: 0;
}

html {
	font-size: 100%;
	/* Always show a scrollbar for short pages - stops the jump when the scrollbar appears. non-IE browsers */
	height: 101%;
}

body {
	/* Text-Sizing with ems: http://www.clagnut.com/blog/348/ */
	font-family: Verdana, Helvetica, Arial, sans-serif;
	color: #828282;
	background-color: #FFFFFF;
	/*font-size: 62.5%;			 This sets the default font size to be equivalent to 10px */
	font-size: 12px;
	margin: 0;
}

h1 {
	/* Forum name */
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	margin-right: 20px;
	color: #FFFFFF;
	margin-top: 15px;
	font-weight: bold;
	font-size: 2em;
}

h2 {
	/* Forum header titles */
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: normal;
	color: #3f3f3f;
	font-size: 2em;
	margin: 0.8em 0 0.2em 0;
}

h2.solo {
	margin-bottom: 1em;
}

h3 {
	/* Sub-headers (also used as post headers, but defined later) */
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-transform: uppercase;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 3px;
	padding-bottom: 2px;
	font-size: 1.05em;
	color: #989898;
	margin-top: 20px;
}

h4 {
	/* Forum and topic list titles */
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, Sans-serif;
	font-size: 1.3em;
}

p {
	line-height: 1.3em;
	font-size: 1.1em;
	margin-bottom: 1.5em;
}

img {
	border-width: 0;
}

hr {
	/* Also see tweaks.css */
	border: 0 none #FFFFFF;
	border-top: 1px solid #CCCCCC;
	height: 1px;
	margin: 5px 0;
	display: block;
	clear: both;
}

hr.dashed {
	border-top: 1px dashed #CCCCCC;
	margin: 10px 0;
}

hr.divider {
	display: none;
}

p.right {
	text-align: right;
}

/* Main blocks
---------------------------------------- */

#wrap {
	margin: 0 auto;
	padding: 0;
	min-width: 650px;
}

#simple-wrap {
	padding: 6px 10px;
}

#page-body {
	margin: 4px 0;
	clear: both;
}

#page-footer {
	clear: both;
}

#page-footer h3 {
	margin-top: 20px;
}

/*#logo {
	float: left;
	width: auto;
	padding: 10px 13px 0 10px;
}*/
#logo {
	float:left;
	margin-left: 45%;
	padding: 10px 10px 10px 10px;
	text-align: center;
}

a#logo:hover {
	text-decoration: none;
}

/* Search box
--------------------------------------------- */
#search-box {
	color: #FFFFFF;
	position: relative;
	margin-top: 30px;
	margin-right: 5px;
	display: block;
	float: right;
	text-align: right;
	white-space: nowrap; /* For Opera */
}

#search-box #keywords {
	width: 95px;
	background-color: #FFF;
}

#search-box input {
	border: 1px solid #b0b0b0;
}

/* .button1 style defined later, just a few tweaks for the search button version */
#search-box input.button1 {
	padding: 1px 5px;
}

#search-box li {
	text-align: right;
	margin-top: 4px;
}

#search-box img {
	vertical-align: middle;
	margin-right: 3px;
}

/* Site description and logo */
/*#site-description {
	float: left;
	width: 70%;
}*/
#site-description {
	float: left;
	width: 100%;
}

#site-description h1 {
	margin-right: 0;
}

/* Round cornered boxes and backgrounds
---------------------------------------- */
.headerbar {
	background: #ebebeb none repeat-x 0 0;
	color: #FFFFFF;
	margin-bottom: 4px;
	padding: 0 5px;
}

.navbar {
	background-color: #ebebeb;
	padding: 0 10px;
}

.forabg {
	background: #b1b1b1 none repeat-x 0 0;
	margin-bottom: 4px;
	padding: 0 5px;
	clear: both;
}

.forumbg {
	background: #ebebeb none repeat-x 0 0;
	margin-bottom: 4px;
	padding: 0 5px;
	clear: both;
}

.panel {
	margin-bottom: 4px;
	padding: 0 10px;
	background-color: #f3f3f3;
	color: #3f3f3f;
}

.post {
	padding: 0 10px;
	margin-bottom: 4px;
	background-repeat: no-repeat;
	background-position: 100% 0;
}

.post:target .content {
	color: #000000;
}

.post:target h3 a {
	color: #000000;
}

.bg1	{ background-color: #f7f7f7;}
.bg2	{ background-color: #f2f2f2; }
.bg3	{ background-color: #ebebeb; }

.rowbg {
	margin: 5px 5px 2px 5px;
}

.ucprowbg {
	background-color: #e2e2e2;
}

.fieldsbg {
	/*border: 1px #e1e8ef solid;*/
	background-color: #eaeaea;
}

span.corners-top, span.corners-bottom, span.corners-top span, span.corners-bottom span {
	font-size: 1px;
	line-height: 1px;
	display: block;
	height: 5px;
	background-repeat: no-repeat;
}

span.corners-top {
	background-image: none;
	background-position: 0 0;
	margin: 0 -5px;
}

span.corners-top span {
	background-image: none;
	background-position: 100% 0;
}

span.corners-bottom {
	background-image: none;
	background-position: 0 100%;
	margin: 0 -5px;
	clear: both;
}

span.corners-bottom span {
	background-image: none;
	background-position: 100% 100%;
}

.headbg span.corners-bottom {
	margin-bottom: -1px;
}

.post span.corners-top, .post span.corners-bottom, .panel span.corners-top, .panel span.corners-bottom, .navbar span.corners-top, .navbar span.corners-bottom {
	margin: 0 -10px;
}

.rules span.corners-top {
	margin: 0 -10px 5px -10px;
}

.rules span.corners-bottom {
	margin: 5px -10px 0 -10px;
}

/* Horizontal lists
----------------------------------------*/
ul.linklist {
	display: block;
	margin: 0;
}

ul.linklist li {
	display: block;
	list-style-type: none;
	float: left;
	width: auto;
	margin-right: 5px;
	font-size: 1.1em;
	line-height: 2.2em;
}

ul.linklist li.rightside, p.rightside {
	float: right;
	margin-right: 0;
	margin-left: 5px;
	text-align: right;
}

ul.navlinks {
	padding-bottom: 1px;
	margin-bottom: 1px;
	border-bottom: 1px solid #FFFFFF;
	font-weight: bold;
}

ul.leftside {
	float: left;
	margin-left: 0;
	margin-right: 5px;
	text-align: left;
}

ul.rightside {
	float: right;
	margin-left: 5px;
	margin-right: -5px;
	text-align: right;
}

/* Table styles
----------------------------------------*/
table.table1 {
	/* See tweaks.css */
}

#ucp-main table.table1 {
	padding: 2px;
}

table.table1 thead th {
	font-weight: normal;
	text-transform: uppercase;
	color: #FFFFFF;
	line-height: 1.3em;
	font-size: 1em;
	padding: 0 0 4px 3px;
}

table.table1 thead th span {
	padding-left: 7px;
}

table.table1 tbody tr {
	border: 1px solid #cfcfcf;
}

table.table1 tbody tr:hover, table.table1 tbody tr.hover {
	background-color: #f6f6f6;
	color: #000;
}

table.table1 td {
	color: #6a6a6a;
	font-size: 1.1em;
}

table.table1 tbody td {
	padding: 5px;
	border-top: 1px solid #FAFAFA;
}

table.table1 tbody th {
	padding: 5px;
	border-bottom: 1px solid #000000;
	text-align: left;
	color: #333333;
	background-color: #FFFFFF;
}

/* Specific column styles */
table.table1 .name		{ text-align: left; }
table.table1 .posts		{ text-align: center !important; width: 7%; }
table.table1 .joined	{ text-align: left; width: 15%; }
table.table1 .active	{ text-align: left; width: 15%; }
table.table1 .mark		{ text-align: center; width: 7%; }
table.table1 .info		{ text-align: left; width: 30%; }
table.table1 .info div	{ width: 100%; white-space: normal; overflow: hidden; }
table.table1 .autocol	{ line-height: 2em; white-space: nowrap; }
table.table1 thead .autocol { padding-left: 1em; }

table.table1 span.rank-img {
	float: right;
	width: auto;
}

table.info td {
	padding: 3px;
}

table.info tbody th {
	padding: 3px;
	text-align: right;
	vertical-align: top;
	color: #000000;
	font-weight: normal;
}

.forumbg table.table1 {
		margin: 0;
}

.forumbg-table > .inner {
	margin: 0 -1px;
}

.forumbg-table > .inner > span.corners-top {
	margin: 0 -4px -1px -4px;
}

.forumbg-table > .inner > span.corners-bottom {
	margin: -1px -4px 0 -4px;
}

/* Misc layout styles
---------------------------------------- */
/* column[1-2] styles are containers for two column layouts 
   Also see tweaks.css */
.column1 {
	float: left;
	clear: left;
	width: 49%;
}

.column2 {
	float: right;
	clear: right;
	width: 49%;
}

/* General classes for placing floating blocks */
.left-box {
	float: left;
	width: auto;
	text-align: left;
}

.right-box {
	float: right;
	width: auto;
	text-align: right;
}

dl.details {
	/*font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;*/
	font-size: 1.1em;
}

dl.details dt {
	float: left;
	clear: left;
	width: 30%;
	text-align: right;
	color: #000000;
	display: block;
}

dl.details dd {
	margin-left: 0;
	padding-left: 5px;
	margin-bottom: 5px;
	color: #828282;
	float: left;
	width: 65%;
}

/* Pagination
---------------------------------------- */
.pagination {
	height: 1%; /* IE tweak (holly hack) */
	width: auto;
	text-align: right;
	margin-top: 5px;
	float: right;
}

.pagination span.page-sep {
	display: none;
}

li.pagination {
	margin-top: 0;
}

.pagination strong, .pagination b {
	font-weight: normal;
}

.pagination span strong {
	padding: 0 2px;
	margin: 0 2px;
	font-weight: normal;
	color: #FFFFFF;
	background-color: #bfbfbf;
	border: 1px solid #bfbfbf;
	font-size: 0.9em;
}

.pagination span a, .pagination span a:link, .pagination span a:visited, .pagination span a:active {
	font-weight: normal;
	text-decoration: none;
	color: #747474;
	margin: 0 2px;
	padding: 0 2px;
	background-color: #eeeeee;
	border: 1px solid #bababa;
	font-size: 0.9em;
	line-height: 1.5em;
}

.pagination span a:hover {
	border-color: #d2d2d2;
	background-color: #d2d2d2;
	color: #FFF;
	text-decoration: none;
}

.pagination img {
	vertical-align: middle;
}

/* Pagination in viewforum for multipage topics */
.row .pagination {
	display: block;
	float: right;
	width: auto;
	margin-top: 0;
	padding: 1px 0 1px 15px;
	font-size: 0.9em;
	background: none 0 50% no-repeat;
}

.row .pagination span a, li.pagination span a {
	background-color: #FFFFFF;
}

.row .pagination span a:hover, li.pagination span a:hover {
	background-color: #d2d2d2;
}

/* Miscellaneous styles
---------------------------------------- */
#forum-permissions {
	float: right;
	width: auto;
	padding-left: 5px;
	margin-left: 5px;
	margin-top: 10px;
	text-align: right;
}

.copyright {
	padding: 5px;
	text-align: center;
	color: #555555;
}

.small {
	font-size: 0.9em !important;
}

.titlespace {
	margin-bottom: 15px;
}

.headerspace {
	margin-top: 20px;
}

.error {
	color: #bcbcbc;
	font-weight: bold;
	font-size: 1em;
}

.reported {
	background-color: #f7f7f7;
}

li.reported:hover {
	background-color: #ececec;
}

div.rules {
	background-color: #ececec;
	color: #bcbcbc;
	padding: 0 10px;
	margin: 10px 0;
	font-size: 1.1em;
}

div.rules ul, div.rules ol {
	margin-left: 20px;
}

p.rules {
	background-color: #ececec;
	background-image: none;
	padding: 5px;
}

p.rules img {
	vertical-align: middle;
	padding-top: 5px;
}

p.rules a {
	vertical-align: middle;
	clear: both;
}

#top {
	position: absolute;
	top: -20px;
}

.clear {
	display: block;
	clear: both;
	font-size: 1px;
	line-height: 1px;
	background: transparent;
}
/* Link Styles
---------------------------------------- */

/* Links adjustment to correctly display an order of rtl/ltr mixed content */
a {
	direction: ltr;
	unicode-bidi: embed;
}

a:link	{ color: #898989; text-decoration: none; }
a:visited	{ color: #898989; text-decoration: none; }
a:hover	{ color: #d3d3d3; text-decoration: underline; }
a:active	{ color: #d2d2d2; text-decoration: none; }

/* Coloured usernames */
.username-coloured {
	font-weight: bold;
	display: inline !important;
	padding: 0 !important;
}

/* Links on gradient backgrounds */
#search-box a:link, .navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {
	color: #FFFFFF;
	text-decoration: none;
}

#search-box a:visited, .navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {
	color: #FFFFFF;
	text-decoration: none;
}

#search-box a:hover, .navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {
	color: #ffffff;
	text-decoration: underline;
}

#search-box a:active, .navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {
	color: #ffffff;
	text-decoration: none;
}

/* Links for forum/topic lists */
a.forumtitle {
	font-family: "Trebuchet MS", Helvetica, Arial, Sans-serif;
	font-size: 1.2em;
	font-weight: bold;
	color: #898989;
	text-decoration: none;
}

/* a.forumtitle:visited { color: #898989; } */

a.forumtitle:hover {
	color: #bcbcbc;
	text-decoration: underline;
}

a.forumtitle:active {
	color: #898989;
}

a.topictitle {
	font-family: "Trebuchet MS", Helvetica, Arial, Sans-serif;
	font-size: 1.2em;
	font-weight: bold;
	color: #898989;
	text-decoration: none;
}

/* a.topictitle:visited { color: #d2d2d2; } */

a.topictitle:hover {
	color: #bcbcbc;
	text-decoration: underline;
}

a.topictitle:active {
	color: #898989;
}

/* Post body links */
.postlink {
	text-decoration: none;
	color: #d2d2d2;
	border-bottom: 1px solid #d2d2d2;
	padding-bottom: 0;
}

/* .postlink:visited { color: #bdbdbd; } */

.postlink:active {
	color: #d2d2d2;
}

.postlink:hover {
	background-color: #f6f6f6;
	text-decoration: none;
	color: #404040;
}

.signature a, .signature a:visited, .signature a:hover, .signature a:active {
	border: none;
	text-decoration: underline;
	background-color: transparent;
}

/* Profile links */
.postprofile a:link, .postprofile a:visited, .postprofile dt.author a {
	font-weight: bold;
	color: #898989;
	text-decoration: none;
}

.postprofile a:hover, .postprofile dt.author a:hover {
	text-decoration: underline;
	color: #d3d3d3;
}


/* CSS spec requires a:link, a:visited, a:hover and a:active rules to be specified in this order. */
/* See http://www.phpbb.com/bugs/phpbb3/59685 */
.postprofile a:active {
	font-weight: bold;
	color: #898989;
	text-decoration: none;
}


/* Profile searchresults */	
.search .postprofile a {
	color: #898989;
	text-decoration: none; 
	font-weight: normal;
}

.search .postprofile a:hover {
	color: #d3d3d3;
	text-decoration: underline; 
}

/* Back to top of page */
.back2top {
	clear: both;
	height: 11px;
	text-align: right;
}

a.top {
	background: none no-repeat top left;
	text-decoration: none;
	width: {IMG_ICON_BACK_TOP_WIDTH}px;
	height: {IMG_ICON_BACK_TOP_HEIGHT}px;
	display: block;
	float: right;
	overflow: hidden;
	letter-spacing: 1000px;
	text-indent: 11px;
}

a.top2 {
	background: none no-repeat 0 50%;
	text-decoration: none;
	padding-left: 15px;
}

/* Arrow links  */
a.up		{ background: none no-repeat left center; }
a.down		{ background: none no-repeat right center; }
a.left		{ background: none no-repeat 3px 60%; }
a.right		{ background: none no-repeat 95% 60%; }

a.up, a.up:link, a.up:active, a.up:visited {
	padding-left: 10px;
	text-decoration: none;
	border-bottom-width: 0;
}

a.up:hover {
	background-position: left top;
	background-color: transparent;
}

a.down, a.down:link, a.down:active, a.down:visited {
	padding-right: 10px;
}

a.down:hover {
	background-position: right bottom;
	text-decoration: none;
}

a.left, a.left:active, a.left:visited {
	padding-left: 12px;
}

a.left:hover {
	color: #d2d2d2;
	text-decoration: none;
	background-position: 0 60%;
}

a.right, a.right:active, a.right:visited {
	padding-right: 12px;
}

a.right:hover {
	color: #d2d2d2;
	text-decoration: none;
	background-position: 100% 60%;
}

/* invisible skip link, used for accessibility  */
.skiplink {
	position: absolute;
	left: -999px;
	width: 990px;
}

/* Feed icon in forumlist_body.html */
a.feed-icon-forum {
	float: right;
	margin: 3px;
}
/* Content Styles
---------------------------------------- */

ul.topiclist {
	display: block;
	list-style-type: none;
	margin: 0;
}

ul.forums {
	background: #f9f9f9 none repeat-x 0 0;
}

ul.topiclist li {
	display: block;
	list-style-type: none;
	color: #777777;
	margin: 0;
}

ul.topiclist dl {
	position: relative;
}

ul.topiclist li.row dl {
	padding: 2px 0;
}

ul.topiclist dt {
	display: block;
	float: left;
	width: 50%;
	font-size: 1.1em;
	padding-left: 5px;
	padding-right: 5px;
}

ul.topiclist dd {
	display: block;
	float: left;
	border-left: 1px solid #FFFFFF;
	padding: 4px 0;
}

ul.topiclist dfn {
	/* Labels for post/view counts */
	position: absolute;
	left: -999px;
	width: 990px;
}

ul.topiclist li.row dt a.subforum {
	background-image: none;
	background-position: 0 50%;
	background-repeat: no-repeat;
	position: relative;
	white-space: nowrap;
	padding: 0 0 0 12px;
}

.forum-image {
	float: left;
	padding-top: 5px;
	margin-right: 5px;
}

li.row {
	border-top: 1px solid #FFFFFF;
	border-bottom: 1px solid #8f8f8f;
}

li.row strong {
	font-weight: normal;
	color: #000000;
}

li.row:hover dd {
	border-left-color: #CCCCCC;
}

li.header dt, li.header dd {
	line-height: 1em;
	border-left-width: 0;
	margin: 2px 0 4px 0;
	color: #FFFFFF;
	padding-top: 11px;
	padding-bottom: 10px;
	font-size: 1em;
	font-family: Arial, Helvetica, sans-serif;
	text-transform: uppercase;
}

li.header dt {
	font-weight: bold;
}

li.header dd {
	margin-left: 1px;
}

li.header dl.icon {
	min-height: 0;
}

li.header dl.icon dt {
	/* Tweak for headers alignment when folder icon used */
	padding-left: 0;
	padding-right: 50px;
}

/* Forum list column styles */
dl.icon {
	min-height: 35px;
	background-position: 10px 50%;		/* Position of folder icon */
	background-repeat: no-repeat;
}

dl.icon dt {
	padding-left: 55px;					/* Space for folder icon */
	background-repeat: no-repeat;
	background-position: 5px 95%;		/* Position of topic icon */
}

dd.posts, dd.topics, dd.views {
	width: 8%;
	text-align: center;
	line-height: 2.2em;
	font-size: 1.2em;
}

/* List in forum description */
dl.icon dt ol,
dl.icon dt ul {
	list-style-position: inside;
	margin-left: 1em;
}

dl.icon dt li {
	display: list-item;
	list-style-type: inherit;
}

dd.lastpost {
	width: 25%;
	font-size: 1.1em;
}

dd.redirect {
	font-size: 1.1em;
	line-height: 2.5em;
}

dd.moderation {
	font-size: 1.1em;
}

dd.lastpost span, ul.topiclist dd.searchby span, ul.topiclist dd.info span, ul.topiclist dd.time span, dd.redirect span, dd.moderation span {
	display: block;
	padding-left: 5px;
}

dd.time {
	width: auto;
	line-height: 200%;
	font-size: 1.1em;
}

dd.extra {
	width: 12%;
	line-height: 200%;
	text-align: center;
	font-size: 1.1em;
}

dd.mark {
	float: right !important;
	width: 9%;
	text-align: center;
	line-height: 200%;
	font-size: 1.2em;
}

dd.info {
	width: 30%;
}

dd.option {
	width: 15%;
	line-height: 200%;
	text-align: center;
	font-size: 1.1em;
}

dd.searchby {
	width: 47%;
	font-size: 1.1em;
	line-height: 1em;
}

ul.topiclist dd.searchextra {
	margin-left: 5px;
	padding: 0.2em 0;
	font-size: 1.1em;
	color: #333333;
	border-left: none;
	clear: both;
	width: 98%;
	overflow: hidden;
}

/* Container for post/reply buttons and pagination */
.topic-actions {
	margin-bottom: 3px;
	font-size: 1.1em;
	height: 28px;
	min-height: 28px;
}
div[class].topic-actions {
	height: auto;
}

/* Post body styles
----------------------------------------*/
.postbody {
	padding: 0;
	line-height: 1.48em;
	color: #333333;
	width: 76%;
	float: right;
	clear: both;
}

.postbody .ignore {
	font-size: 1.1em;
}

.postbody h3.first {
	/* The first post on the page uses this */
	font-size: 1.7em;
}

.postbody h3 {
	/* Postbody requires a different h3 format - so change it here */
	font-size: 1.5em;
	padding: 2px 0 0 0;
	margin: 0 0 0.3em 0 !important;
	text-transform: none;
	border: none;
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	line-height: 125%;
}

.postbody h3 img {
	/* Also see tweaks.css */
	vertical-align: bottom;
}

.postbody .content {
	font-size: 1.1em;
}

.search .postbody {
	width: 68%
}

/* Topic review panel
----------------------------------------*/
#review {
	margin-top: 2em;
}

#topicreview {
	padding-right: 5px;
	overflow: auto;
	height: 300px;
}

#topicreview .postbody {
	width: auto;
	float: none;
	margin: 0;
	height: auto;
}

#topicreview .post {
	height: auto;
}

#topicreview h2 {
	border-bottom-width: 0;
}

.post-ignore .postbody {
	display: none;
}

/* MCP Post details
----------------------------------------*/
#post_details
{
	/* This will only work in IE7+, plus the others */
	overflow: auto;
	max-height: 300px;
}

#expand
{
	clear: both;
}

/* Content container styles
----------------------------------------*/
.content {
	min-height: 3em;
	overflow: hidden;
	line-height: 1.4em;
	color: #333333;
	padding-bottom: 1px;
}

.content h2, .panel h2 {
	font-weight: normal;
	color: #989898;
	border-bottom: 1px solid #CCCCCC;
	font-size: 1.6em;
	margin-top: 0.5em;
	margin-bottom: 0.5em;
	padding-bottom: 0.5em;
}

.panel h3 {
	margin: 0.5em 0;
}

.panel p {
	margin-bottom: 1em;
	line-height: 1.4em;
}

.content p {
	margin-bottom: 1em;
	line-height: 1.4em;
}

dl.faq {
	font-size: 1.1em;
	margin-top: 1em;
	margin-bottom: 2em;
	line-height: 1.4em;
}

dl.faq dt {
	font-weight: bold;
	color: #333333;
}

.content dl.faq {
	font-size: 1.2em;
	margin-bottom: 0.5em;
}

.content li {
	list-style-type: inherit;
}

.content ul, .content ol {
	margin-bottom: 1em;
	margin-left: 3em;
}

.posthilit {
	background-color: #f3f3f3;
	color: #BCBCBC;
	padding: 0 2px 1px 2px;
}

.announce, .unreadpost {
	/* Highlight the announcements & unread posts box */
	border-left-color: #BCBCBC;
	border-right-color: #BCBCBC;
}

/* Post author */
p.author {
	margin: 0 15em 0.6em 0;
	padding: 0 0 5px 0;
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-size: 1em;
	line-height: 1.2em;
}

/* Post signature */
.signature {
	margin-top: 1.5em;
	padding-top: 0.2em;
	font-size: 1.1em;
	border-top: 1px solid #CCCCCC;
	clear: left;
	line-height: 140%;
	overflow: hidden;
	width: 100%;
}

dd .signature {
	margin: 0;
	padding: 0;
	clear: none;
	border: none;
}

.signature li {
	list-style-type: inherit;
}

.signature ul, .signature ol {
	margin-bottom: 1em;
	margin-left: 3em;
}

/* Post noticies */
.notice {
	width: auto;
	margin-top: 1.5em;
	padding-top: 0.2em;
	font-size: 1em;
	border-top: 1px dashed #CCCCCC;
	clear: left;
	line-height: 130%;
}

/* Jump to post link for now */
ul.searchresults {
	list-style: none;
	text-align: right;
	clear: both;
}

/* BB Code styles
----------------------------------------*/
/* Quote block */
blockquote {
	background: #ebebeb none 6px 8px no-repeat;
	border: 1px solid #dbdbdb;
	font-size: 0.95em;
	margin: 0.5em 1px 0 9px;
	overflow: hidden;
	padding: 5px;
}

blockquote blockquote {
	/* Nested quotes */
	background-color: #bababa;
	font-size: 1em;
	margin: 0.5em 1px 0 15px;	
}

blockquote blockquote blockquote {
	/* Nested quotes */
	background-color: #e4e4e4;
}

blockquote cite {
	/* Username/source of quoter */
	font-style: normal;
	font-weight: bold;
	margin-left: 20px;
	display: block;
	font-size: 0.9em;
}

blockquote cite cite {
	font-size: 1em;
}

blockquote.uncited {
	padding-top: 25px;
}

/* Code block */
dl.codebox {
	padding: 3px;
	background-color: #FFFFFF;
	border: 1px solid #d8d8d8;
	font-size: 1em;
}

dl.codebox dt {
	text-transform: uppercase;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 3px;
	font-size: 0.8em;
	font-weight: bold;
	display: block;
}

blockquote dl.codebox {
	margin-left: 0;
}

dl.codebox code {
	/* Also see tweaks.css */
	overflow: auto;
	display: block;
	height: auto;
	max-height: 200px;
	white-space: normal;
	padding-top: 5px;
	font: 0.9em Monaco, "Andale Mono","Courier New", Courier, mono;
	line-height: 1.3em;
	color: #8b8b8b;
	margin: 2px 0;
}

.syntaxbg		{ color: #FFFFFF; }
.syntaxcomment	{ color: #000000; }
.syntaxdefault	{ color: #bcbcbc; }
.syntaxhtml		{ color: #000000; }
.syntaxkeyword	{ color: #585858; }
.syntaxstring	{ color: #a7a7a7; }

/* Attachments
----------------------------------------*/
.attachbox {
	float: left;
	width: auto; 
	margin: 5px 5px 5px 0;
	padding: 6px;
	background-color: #FFFFFF;
	border: 1px dashed #d8d8d8;
	clear: left;
}

.pm-message .attachbox {
	background-color: #f3f3f3;
}

.attachbox dt {
	font-family: Arial, Helvetica, sans-serif;
	text-transform: uppercase;
}

.attachbox dd {
	margin-top: 4px;
	padding-top: 4px;
	clear: left;
	border-top: 1px solid #d8d8d8;
}

.attachbox dd dd {
	border: none;
}

.attachbox p {
	line-height: 110%;
	color: #666666;
	font-weight: normal;
	clear: left;
}

.attachbox p.stats
{
	line-height: 110%;
	color: #666666;
	font-weight: normal;
	clear: left;
}

.attach-image {
	margin: 3px 0;
	width: 100%;
	max-height: 350px;
	overflow: auto;
}

.attach-image img {
	border: 1px solid #999999;
/*	cursor: move; */
	cursor: default;
}

/* Inline image thumbnails */
div.inline-attachment dl.thumbnail, div.inline-attachment dl.file {
	display: block;
	margin-bottom: 4px;
}

div.inline-attachment p {
	font-size: 100%;
}

dl.file {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	display: block;
}

dl.file dt {
	text-transform: none;
	margin: 0;
	padding: 0;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

dl.file dd {
	color: #666666;
	margin: 0;
	padding: 0;	
}

dl.thumbnail img {
	padding: 3px;
	border: 1px solid #666666;
	background-color: #FFF;
}

dl.thumbnail dd {
	color: #666666;
	font-style: italic;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}

.attachbox dl.thumbnail dd {
	font-size: 100%;
}

dl.thumbnail dt a:hover {
	background-color: #EEEEEE;
}

dl.thumbnail dt a:hover img {
	border: 1px solid #d2d2d2;
}

/* Post poll styles
----------------------------------------*/
fieldset.polls {
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
}

fieldset.polls dl {
	margin-top: 5px;
	border-top: 1px solid #e2e2e2;
	padding: 5px 0 0 0;
	line-height: 120%;
	color: #666666;
}

fieldset.polls dl.voted {
	font-weight: bold;
	color: #000000;
}

fieldset.polls dt {
	text-align: left;
	float: left;
	display: block;
	width: 30%;
	border-right: none;
	padding: 0;
	margin: 0;
	font-size: 1.1em;
}

fieldset.polls dd {
	float: left;
	width: 10%;
	border-left: none;
	padding: 0 5px;
	margin-left: 0;
	font-size: 1.1em;
}

fieldset.polls dd.resultbar {
	width: 50%;
}

fieldset.polls dd input {
	margin: 2px 0;
}

fieldset.polls dd div {
	text-align: right;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
	padding: 0 2px;
	overflow: visible;
	min-width: 2%;
}

.pollbar1 {
	background-color: #aaaaaa;
	border-bottom: 1px solid #747474;
	border-right: 1px solid #747474;
}

.pollbar2 {
	background-color: #bebebe;
	border-bottom: 1px solid #8c8c8c;
	border-right: 1px solid #8c8c8c;
}

.pollbar3 {
	background-color: #D1D1D1;
	border-bottom: 1px solid #aaaaaa;
	border-right: 1px solid #aaaaaa;
}

.pollbar4 {
	background-color: #e4e4e4;
	border-bottom: 1px solid #bebebe;
	border-right: 1px solid #bebebe;
}

.pollbar5 {
	background-color: #f8f8f8;
	border-bottom: 1px solid #D1D1D1;
	border-right: 1px solid #D1D1D1;
}

/* Poster profile block
----------------------------------------*/
.postprofile {
	/* Also see tweaks.css */
	margin: 5px 0 10px 0;
	min-height: 80px;
	color: #666666;
	border-right: 1px solid #FFFFFF;
	width: 22%;
	float: left;
	display: inline;
}
.pm .postprofile {
	border-right: 1px solid #DDDDDD;
}

.postprofile dd, .postprofile dt {
	line-height: 1.2em;
	margin-left: 8px;
}

.postprofile strong {
	font-weight: normal;
	color: #000000;
}

.avatar {
	border: none;
	margin-bottom: 3px;
}

.online {
	background-image: none;
	background-position: 100% 0;
	background-repeat: no-repeat;
}

/* Poster profile used by search*/
.search .postprofile {
	width: 30%;
}

/* pm list in compose message if mass pm is enabled */
dl.pmlist dt {
	width: 60% !important;
}

dl.pmlist dt textarea {
	width: 95%;
}

dl.pmlist dd {
	margin-left: 61% !important;
	margin-bottom: 2px;
}
/* Button Styles
---------------------------------------- */

/* Rollover buttons
   Based on: http://wellstyled.com/css-nopreload-rollovers.html
----------------------------------------*/
.buttons {
	float: left;
	width: auto;
	height: auto;
}

/* Rollover state */
.buttons div {
	float: left;
	margin: 0 5px 0 0;
	background-position: 0 100%;
}

/* Rolloff state */
.buttons div a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
	position: relative;
	overflow: hidden;
}

/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
/*.buttons div span		{ display: none; }*/
/*.buttons div a:hover	{ background-image: none; }*/
.buttons div span			{ position: absolute; width: 100%; height: 100%; cursor: pointer;}
.buttons div a:hover span	{ background-position: 0 100%; }

/* Big button images */
.reply-icon span	{ background: transparent none 0 0 no-repeat; }
.post-icon span		{ background: transparent none 0 0 no-repeat; }
.locked-icon span	{ background: transparent none 0 0 no-repeat; }
.pmreply-icon span	{ background: none 0 0 no-repeat; }
.newpm-icon span 	{ background: none 0 0 no-repeat; }
.forwardpm-icon span 	{ background: none 0 0 no-repeat; }

/* Set big button dimensions */
.buttons div.reply-icon		{ width: {IMG_BUTTON_TOPIC_REPLY_WIDTH}px; height: {IMG_BUTTON_TOPIC_REPLY_HEIGHT}px; }
.buttons div.post-icon		{ width: {IMG_BUTTON_TOPIC_NEW_WIDTH}px; height: {IMG_BUTTON_TOPIC_NEW_HEIGHT}px; }
.buttons div.locked-icon	{ width: {IMG_BUTTON_TOPIC_LOCKED_WIDTH}px; height: {IMG_BUTTON_TOPIC_LOCKED_HEIGHT}px; }
.buttons div.pmreply-icon	{ width: {IMG_BUTTON_PM_REPLY_WIDTH}px; height: {IMG_BUTTON_PM_REPLY_HEIGHT}px; }
.buttons div.newpm-icon		{ width: {IMG_BUTTON_PM_NEW_WIDTH}px; height: {IMG_BUTTON_PM_NEW_HEIGHT}px; }
.buttons div.forwardpm-icon	{ width: {IMG_BUTTON_PM_FORWARD_WIDTH}px; height: {IMG_BUTTON_PM_FORWARD_HEIGHT}px; }

/* Sub-header (navigation bar)
--------------------------------------------- */
a.print, a.sendemail, a.fontsize {
	display: block;
	overflow: hidden;
	height: 18px;
	text-indent: -5000px;
	text-align: left;
	background-repeat: no-repeat;
}

a.print {
	background-image: none;
	width: 22px;
}

a.sendemail {
	background-image: none;
	width: 22px;
}

a.fontsize {
	background-image: none;
	background-position: 0 -1px;
	width: 29px;
}

a.fontsize:hover {
	background-position: 0 -20px;
	text-decoration: none;
}

/* Icon images
---------------------------------------- */
.sitehome, .icon-faq, .icon-members, .icon-home, .icon-ucp, .icon-register, .icon-logout,
.icon-bookmark, .icon-bump, .icon-subscribe, .icon-unsubscribe, .icon-pages, .icon-search {
	background-position: 0 50%;
	background-repeat: no-repeat;
	background-image: none;
	padding: 1px 0 0 17px;
}

/* Poster profile icons
----------------------------------------*/
ul.profile-icons {
	padding-top: 10px;
	list-style: none;
}

/* Rollover state */
ul.profile-icons li {
	float: left;
	margin: 0 6px 3px 0;
	background-position: 0 100%;
}

/* Rolloff state */
ul.profile-icons li a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
}

/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */
ul.profile-icons li span { display:none; }
ul.profile-icons li a:hover { background: none; }

/* Positioning of moderator icons */
.postbody ul.profile-icons {
	float: right;
	width: auto;
	padding: 0;
}

.postbody ul.profile-icons li {
	margin: 0 3px;
}

/* Profile & navigation icons */
.email-icon, .email-icon a		{ background: none top left no-repeat; }
.aim-icon, .aim-icon a			{ background: none top left no-repeat; }
.yahoo-icon, .yahoo-icon a		{ background: none top left no-repeat; }
.web-icon, .web-icon a			{ background: none top left no-repeat; }
.msnm-icon, .msnm-icon a			{ background: none top left no-repeat; }
.icq-icon, .icq-icon a			{ background: none top left no-repeat; }
.jabber-icon, .jabber-icon a		{ background: none top left no-repeat; }
.pm-icon, .pm-icon a				{ background: none top left no-repeat; }
.quote-icon, .quote-icon a		{ background: none top left no-repeat; }

/* Moderator icons */
.report-icon, .report-icon a		{ background: none top left no-repeat; }
.warn-icon, .warn-icon a			{ background: none top left no-repeat; }
.edit-icon, .edit-icon a			{ background: none top left no-repeat; }
.delete-icon, .delete-icon a		{ background: none top left no-repeat; }
.info-icon, .info-icon a			{ background: none top left no-repeat; }

/* Set profile icon dimensions */
ul.profile-icons li.email-icon		{ width: {IMG_ICON_CONTACT_EMAIL_WIDTH}px; height: {IMG_ICON_CONTACT_EMAIL_HEIGHT}px; }
ul.profile-icons li.aim-icon	{ width: {IMG_ICON_CONTACT_AIM_WIDTH}px; height: {IMG_ICON_CONTACT_AIM_HEIGHT}px; }
ul.profile-icons li.yahoo-icon	{ width: {IMG_ICON_CONTACT_YAHOO_WIDTH}px; height: {IMG_ICON_CONTACT_YAHOO_HEIGHT}px; }
ul.profile-icons li.web-icon	{ width: {IMG_ICON_CONTACT_WWW_WIDTH}px; height: {IMG_ICON_CONTACT_WWW_HEIGHT}px; }
ul.profile-icons li.msnm-icon	{ width: {IMG_ICON_CONTACT_MSNM_WIDTH}px; height: {IMG_ICON_CONTACT_MSNM_HEIGHT}px; }
ul.profile-icons li.icq-icon	{ width: {IMG_ICON_CONTACT_ICQ_WIDTH}px; height: {IMG_ICON_CONTACT_ICQ_HEIGHT}px; }
ul.profile-icons li.jabber-icon	{ width: {IMG_ICON_CONTACT_JABBER_WIDTH}px; height: {IMG_ICON_CONTACT_JABBER_HEIGHT}px; }
ul.profile-icons li.pm-icon		{ width: {IMG_ICON_CONTACT_PM_WIDTH}px; height: {IMG_ICON_CONTACT_PM_HEIGHT}px; }
ul.profile-icons li.quote-icon	{ width: {IMG_ICON_POST_QUOTE_WIDTH}px; height: {IMG_ICON_POST_QUOTE_HEIGHT}px; }
ul.profile-icons li.report-icon	{ width: {IMG_ICON_POST_REPORT_WIDTH}px; height: {IMG_ICON_POST_REPORT_HEIGHT}px; }
ul.profile-icons li.edit-icon	{ width: {IMG_ICON_POST_EDIT_WIDTH}px; height: {IMG_ICON_POST_EDIT_HEIGHT}px; }
ul.profile-icons li.delete-icon	{ width: {IMG_ICON_POST_DELETE_WIDTH}px; height: {IMG_ICON_POST_DELETE_HEIGHT}px; }
ul.profile-icons li.info-icon	{ width: {IMG_ICON_POST_INFO_WIDTH}px; height: {IMG_ICON_POST_INFO_HEIGHT}px; }
ul.profile-icons li.warn-icon	{ width: {IMG_ICON_USER_WARN_WIDTH}px; height: {IMG_ICON_USER_WARN_HEIGHT}px; }

/* Fix profile icon default margins */
ul.profile-icons li.edit-icon	{ margin: 0 3px 0 3px; }
ul.profile-icons li.quote-icon	{ margin: 0 0 0 10px; }
ul.profile-icons li.info-icon, ul.profile-icons li.report-icon	{ margin: 0 3px 0 0; }
/* Control Panel Styles
---------------------------------------- */


/* Main CP box
----------------------------------------*/
#cp-menu {
	float:left;
	width: 19%;
	margin-top: 1em;
	margin-bottom: 5px;
}

#cp-main {
	float: left;
	width: 81%;
}

#cp-main .content {
	padding: 0;
}

#cp-main h3, #cp-main hr, #cp-menu hr {
	border-color: #bfbfbf;
}

#cp-main .panel p {
	font-size: 1.1em;
}

#cp-main .panel ol {
	margin-left: 2em;
	font-size: 1.1em;
}

#cp-main .panel li.row {
	border-bottom: 1px solid #cbcbcb;
	border-top: 1px solid #F9F9F9;
}

ul.cplist {
	margin-bottom: 5px;
	border-top: 1px solid #cbcbcb;
}

#cp-main .panel li.header dd, #cp-main .panel li.header dt {
	color: #000000;
	margin-bottom: 2px;
}

#cp-main table.table1 {
	margin-bottom: 1em;
}

#cp-main table.table1 thead th {
	color: #333333;
	font-weight: bold;
	border-bottom: 1px solid #333333;
	padding: 5px;
}

#cp-main table.table1 tbody th {
	font-style: italic;
	background-color: transparent !important;
	border-bottom: none;
}

#cp-main .pagination {
	float: right;
	width: auto;
	padding-top: 1px;
}

#cp-main .postbody p {
	font-size: 1.1em;
}

#cp-main .pm-message {
	border: 1px solid #e2e2e2;
	margin: 10px 0;
	background-color: #FFFFFF;
	width: auto;
	float: none;
}

.pm-message h2 {
	padding-bottom: 5px;
}

#cp-main .postbody h3, #cp-main .box2 h3 {
	margin-top: 0;
}

#cp-main .buttons {
	margin-left: 0;
}

#cp-main ul.linklist {
	margin: 0;
}

/* MCP Specific tweaks */
.mcp-main .postbody {
	width: 100%;
}

.tabs-container h2 {
	float: left;
	margin-bottom: 0px;
}

.tabs-container #minitabs {
	float: right;
	margin-top: 19px;
}

.tabs-container:after {
	display: block;
	clear: both;
	content: '';
}

/* CP tabbed menu
----------------------------------------*/
#tabs {
	line-height: normal;
	margin: 20px 0 -1px 7px;
	min-width: 570px;
}

#tabs ul {
	margin:0;
	padding: 0;
	list-style: none;
}

#tabs li {
	display: inline;
	margin: 0;
	padding: 0;
	font-size: 1em;
	font-weight: bold;
}

#tabs a {
	float: left;
	background: none no-repeat 0% -35px;
	margin: 0 1px 0 0;
	padding: 0 0 0 5px;
	text-decoration: none;
	position: relative;
	cursor: pointer;
}

#tabs a span {
	float: left;
	display: block;
	background: none no-repeat 100% -35px;
	padding: 6px 10px 6px 5px;
	color: #828282;
	white-space: nowrap;
}

#tabs a:hover span {
	color: #bcbcbc;
}

#tabs .activetab a {
	background-position: 0 0;
	border-bottom: 1px solid #ebebeb;
}

#tabs .activetab a span {
	background-position: 100% 0;
	padding-bottom: 7px;
	color: #333333;
}

#tabs a:hover {
	background-position: 0 -70px;
}

#tabs a:hover span {
	background-position:100% -70px;
}

#tabs .activetab a:hover {
	background-position: 0 0;
}

#tabs .activetab a:hover span {
	color: #000000;
	background-position: 100% 0;
}

/* Mini tabbed menu used in MCP
----------------------------------------*/
#minitabs {
	line-height: normal;
	margin: -20px 7px 0 0;
}

#minitabs ul {
	margin:0;
	padding: 0;
	list-style: none;
}

#minitabs li {
	display: block;
	float: right;
	padding: 0 10px 4px 10px;
	font-size: 1em;
	font-weight: bold;
	background-color: #f2f2f2;
	margin-left: 2px;
}

#minitabs a {
}

#minitabs a:hover {
	text-decoration: none;
}

#minitabs li.activetab {
	background-color: #F9F9F9;
}

#minitabs li.activetab a, #minitabs li.activetab a:hover {
	color: #333333;
}

/* UCP navigation menu
----------------------------------------*/
/* Container for sub-navigation list */
#navigation {
	width: 100%;
	padding-top: 36px;
}

#navigation ul {
	list-style:none;
}

/* Default list state */
#navigation li {
	margin: 1px 0;
	padding: 0;
	font-weight: bold;
	display: inline;
}

/* Link styles for the sub-section links */
#navigation a {
	display: block;
	padding: 5px;
	margin: 1px 0;
	text-decoration: none;
	font-weight: bold;
	color: #333;
	background: #cfcfcf none repeat-y 100% 0;
}

#navigation a:hover {
	text-decoration: none;
	background-color: #c6c6c6;
	color: #bcbcbc;
	background-image: none;
}

#navigation #active-subsection a {
	display: block;
	color: #d3d3d3;
	background-color: #F9F9F9;
	background-image: none;
}

#navigation #active-subsection a:hover {
	color: #d3d3d3;
}

/* Preferences pane layout
----------------------------------------*/
#cp-main h2 {
	border-bottom: none;
	padding: 0;
	margin-left: 10px;
	color: #333333;
}

#cp-main .panel {
	background-color: #F9F9F9;
}

#cp-main .pm {
	background-color: #FFFFFF;
}

#cp-main span.corners-top, #cp-menu span.corners-top {
	background-image: none;
}

#cp-main span.corners-top span, #cp-menu span.corners-top span {
	background-image: none;
}

#cp-main span.corners-bottom, #cp-menu span.corners-bottom {
	background-image: none;
}

#cp-main span.corners-bottom span, #cp-menu span.corners-bottom span {
	background-image: none;
}

/* Topicreview */
#cp-main .panel #topicreview span.corners-top, #cp-menu .panel #topicreview span.corners-top {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-top span, #cp-menu .panel #topicreview span.corners-top span {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-bottom, #cp-menu .panel #topicreview span.corners-bottom {
	background-image: none;
}

#cp-main .panel #topicreview span.corners-bottom span, #cp-menu .panel #topicreview span.corners-bottom span {
	background-image: none;
}

/* Friends list */
.cp-mini {
	background-color: #f9f9f9;
	padding: 0 5px;
	margin: 10px 15px 10px 5px;
}

.cp-mini span.corners-top, .cp-mini span.corners-bottom {
	margin: 0 -5px;
}

dl.mini dt {
	font-weight: bold;
	color: #676767;
}

dl.mini dd {
	padding-top: 4px;
}

.friend-online {
	font-weight: bold;
}

.friend-offline {
	font-style: italic;
}

/* PM Styles
----------------------------------------*/
#pm-menu {
	line-height: 2.5em;
}

/* PM panel adjustments */
.reply-all a.left {
	background-position: 3px 60%;
}

.reply-all a.left:hover {
	background-position: 0px 60%;
}

.reply-all {
	font-size: 11px;
	padding-top: 5px;
}

/* PM Message history */
.current {
	color: #999999;
}

/* Defined rules list for PM options */
ol.def-rules {
	padding-left: 0;
}

ol.def-rules li {
	line-height: 180%;
	padding: 1px;
}

/* PM marking colours */
.pmlist li.bg1 {
	padding: 0 3px;
}

.pmlist li.bg2 {
	padding: 0 3px;
}

.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {
	border-left-color: #bcbcbc;
	border-right-color: #bcbcbc;
}

.pmlist li.pm_marked_colour, .pm_marked_colour {
	padding: 0;
	border: solid 3px #ffffff;
	border-width: 0 3px;
}

.pmlist li.pm_replied_colour, .pm_replied_colour {
	padding: 0;
	border: solid 3px #c2c2c2;
	border-width: 0 3px;	
}

.pmlist li.pm_friend_colour, .pm_friend_colour {
	padding: 0;
	border: solid 3px #bdbdbd;
	border-width: 0 3px;
}

.pmlist li.pm_foe_colour, .pm_foe_colour {
	padding: 0;
	border: solid 3px #000000;
	border-width: 0 3px;
}

.pm-legend {
	border-left-width: 10px;
	border-left-style: solid;
	border-right-width: 0;
	margin-bottom: 3px;
	padding-left: 3px;
}

/* Avatar gallery */
#gallery label {
	position: relative;
	float: left;
	margin: 10px;
	padding: 5px;
	width: auto;
	background: #FFFFFF;
	border: 1px solid #CCC;
	text-align: center;
}

#gallery label:hover {
	background-color: #EEE;
}
/* Form Styles
---------------------------------------- */

/* General form styles
----------------------------------------*/
fieldset {
	border-width: 0;
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-size: 1.1em;
}

input {
	font-weight: normal;
	cursor: pointer;
	vertical-align: middle;
	padding: 0 3px;
	font-family: Verdana, Helvetica, Arial, sans-serif;
}

select {
	font-family: Verdana, Helvetica, Arial, sans-serif;
	font-weight: normal;
	cursor: pointer;
	vertical-align: middle;
	border: 1px solid #666666;
	padding: 1px;
	background-color: #FAFAFA;
	font-size: 1em;
}

option {
	padding-right: 1em;
}

option.disabled-option {
	color: graytext;
}

textarea {
	font-family: "Lucida Grande", Verdana, Helvetica, Arial, sans-serif;
	width: 60%;
	padding: 2px;
	font-size: 1em;
	line-height: 1.4em;
}

label {
	cursor: default;
	padding-right: 5px;
}

label input {
	vertical-align: middle;
}

label img {
	vertical-align: middle;
}

/* Definition list layout for forms
---------------------------------------- */
fieldset dl {
	padding: 4px 0;
}

fieldset dt {
	float: left;	
	width: 40%;
	text-align: left;
	display: block;
}

fieldset dd {
	margin-left: 41%;
	vertical-align: top;
	margin-bottom: 3px;
}

/* Specific layout 1 */
fieldset.fields1 dt {
	width: 15em;
	border-right-width: 0;
}

fieldset.fields1 dd {
	margin-left: 15em;
	border-left-width: 0;
}

fieldset.fields1 {
	background-color: transparent;
}

fieldset.fields1 div {
	margin-bottom: 3px;
}

/* Set it back to 0px for the reCaptcha divs: PHPBB3-9587 */
fieldset.fields1 #recaptcha_widget_div div {
	margin-bottom: 0;
}

/* Specific layout 2 */
fieldset.fields2 dt {
	width: 15em;
	border-right-width: 0;
}

fieldset.fields2 dd {
	margin-left: 16em;
	border-left-width: 0;
}

/* Form elements */
dt label {
	font-weight: bold;
	text-align: left;
}

dd label {
	white-space: nowrap;
	color: #333;
}

dd input, dd textarea {
	margin-right: 3px;
}

dd select {
	width: auto;
}

dd textarea {
	width: 85%;
}

/* Hover effects */
fieldset dl:hover dt label {
	color: #000000;
}

fieldset.fields2 dl:hover dt label {
	color: inherit;
}

#timezone {
	width: 95%;
}

* html #timezone {
	width: 50%;
}

/* Quick-login on index page */
fieldset.quick-login {
	margin-top: 5px;
}

fieldset.quick-login input {
	width: auto;
}

fieldset.quick-login input.inputbox {
	width: 15%;
	vertical-align: middle;
	margin-right: 5px;
	background-color: #f3f3f3;
}

fieldset.quick-login label {
	white-space: nowrap;
	padding-right: 2px;
}

/* Display options on viewtopic/viewforum pages  */
fieldset.display-options {
	text-align: center;
	margin: 3px 0 5px 0;
}

fieldset.display-options label {
	white-space: nowrap;
	padding-right: 2px;
}

fieldset.display-options a {
	margin-top: 3px;
}

/* Display actions for ucp and mcp pages */
fieldset.display-actions {
	text-align: right;
	line-height: 2em;
	white-space: nowrap;
	padding-right: 1em;
}

fieldset.display-actions label {
	white-space: nowrap;
	padding-right: 2px;
}

fieldset.sort-options {
	line-height: 2em;
}

/* MCP forum selection*/
fieldset.forum-selection {
	margin: 5px 0 3px 0;
	float: right;
}

fieldset.forum-selection2 {
	margin: 13px 0 3px 0;
	float: right;
}

/* Jumpbox */
fieldset.jumpbox {
	text-align: right;
	margin-top: 15px;
	height: 2.5em;
}

fieldset.quickmod {
	width: 50%;
	float: right;
	text-align: right;
	height: 2.5em;
}

/* Submit button fieldset */
fieldset.submit-buttons {
	text-align: center;
	vertical-align: middle;
	margin: 5px 0;
}

fieldset.submit-buttons input {
	vertical-align: middle;
	padding-top: 3px;
	padding-bottom: 3px;
}

/* Posting page styles
----------------------------------------*/

/* Buttons used in the editor */
#format-buttons {
	margin: 15px 0 2px 0;
}

#format-buttons input, #format-buttons select {
	vertical-align: middle;
}

/* Main message box */
#message-box {
	width: 80%;
}

#message-box textarea {
	font-family: "Trebuchet MS", Verdana, Helvetica, Arial, sans-serif;
	width: 450px;
	height: 270px;
	min-width: 100%;
	max-width: 100%;
	font-size: 1.2em;
	color: #333333;
}

/* Emoticons panel */
#smiley-box {
	width: 18%;
	float: right;
}

#smiley-box img {
	margin: 3px;
}

/* Input field styles
---------------------------------------- */
.inputbox {
	background-color: #FFFFFF;
	border: 1px solid #c0c0c0;
	color: #333333;
	padding: 2px;
	cursor: text;
}

input.inputbox	{ width: 85%; }
input.medium	{ width: 50%; }
input.narrow	{ width: 25%; }
input.tiny		{ width: 125px; }

textarea.inputbox {
	width: 85%;
}

.autowidth {
	width: auto !important;
}

/* Form button styles
---------------------------------------- */

input.disabled {
	font-weight: normal;
	color: #666666;
}

/* Topic and forum Search */
.search-box {
	margin-top: 3px;
	margin-left: 5px;
	float: left;
}

.search-box input {
}

input.search {
	background-image: none;
	background-repeat: no-repeat;
	background-position: left 1px;
	padding-left: 17px;
}

.full { width: 95%; }
.medium { width: 50%;}
.narrow { width: 25%;}
.tiny { width: 10%;}
/* Style Sheet Tweaks

These style definitions are mainly IE specific 
tweaks required due to its poor CSS support.
-------------------------------------------------*/

* html table, * html select, * html input { font-size: 100%; }
* html hr { margin: 0; }
* html span.corners-top, * html span.corners-bottom { background-image: url("{T_THEME_PATH}/images/corners_left.gif"); }
* html span.corners-top span, * html span.corners-bottom span { background-image: url("{T_THEME_PATH}/images/corners_right.gif"); }

table.table1 {
	width: 99%;		/* IE < 6 browsers */
	/* Tantek hack */
	voice-family: "\"}\"";
	voice-family: inherit;
	width: 100%;
}
html>body table.table1 { width: 100%; }	/* Reset 100% for opera */

* html ul.topiclist li { position: relative; }
* html .postbody h3 img { vertical-align: middle; }

/* Form styles */
html>body dd label input { vertical-align: text-bottom; }	/* Align checkboxes/radio buttons nicely */

* html input.button1, * html input.button2 {
	padding-bottom: 0;
	margin-bottom: 1px;
}

/* Misc layout styles */
* html .column1, * html .column2 { width: 45%; }

/* Nice method for clearing floated blocks without having to insert any extra markup (like spacer above)
   From http://www.positioniseverything.net/easyclearing.html 
#tabs:after, #minitabs:after, .post:after, .navbar:after, fieldset dl:after, ul.topiclist dl:after, ul.linklist:after, dl.polls:after {
	content: "."; 
	display: block; 
	height: 0; 
	clear: both; 
	visibility: hidden;
}*/

.clearfix, #tabs, #minitabs, fieldset dl, ul.topiclist dl, dl.polls {
	height: 1%;
	overflow: hidden;
}

/* viewtopic fix */
* html .post {
	height: 25%;
	overflow: hidden;
}

/* navbar fix */
* html .clearfix, * html .navbar, ul.linklist {
	height: 4%;
	overflow: hidden;
}

/* Simple fix so forum and topic lists always have a min-height set, even in IE6
	From http://www.dustindiaz.com/min-height-fast-hack */
dl.icon {
	min-height: 35px;
	height: auto !important;
	height: 35px;
}

* html li.row dl.icon dt {
	height: 35px;
	overflow: visible;
}

* html #search-box {
	width: 25%;
}

/* Correctly clear floating for details on profile view */
*:first-child+html dl.details dd {
	margin-left: 30%;
	float: none;
}

* html dl.details dd {
	margin-left: 30%;
	float: none;
}

/* Headerbar height fix for IE7 and below */
* html #site-description p {
	margin-bottom: 1.0em;
}

*:first-child+html #site-description p {
	margin-bottom: 1.0em;
}

/* #minitabs fix for IE */
.tabs-container {
	zoom: 1;
}

#minitabs {
	white-space: nowrap;
	*min-width: 50%;
}
/*  	
--------------------------------------------------------------
Colours and backgrounds for common.css
-------------------------------------------------------------- */

html, body {
	color: #127bd2;
	background: url("{T_THEME_PATH}/images/bodybg.gif") repeat-x left top #0079d9;
	font-family: "Verdana", Tahoma, Geneva, sans-serif;
	height: 100% !important;
}

h1 {
	color: #FFFFFF;
}

h2 {
	color: #3f6a9e;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	font-weight: bold;
}

h3 {
	border-bottom-color: #c8e6fb;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: normal;
	text-transform: none;
	color: #0d8eff;
}

hr {
	border-color: #FFFFFF;
	border-top-color: #c8e6fb;
}

hr.dashed {
	border-top-color: #CCCCCC;
}

/* Search box
--------------------------------------------- */

#search-box {
	color: #FFFFFF;
}

#search-box #keywords {
	background-color: #FFF;
}

#search-box input {
	border-color: #12bfff;
}

/* Round cornered boxes and backgrounds
---------------------------------------- */
.headerbar {
	background-color: #49cfff;
	background-image: url("{T_THEME_PATH}/images/bg_header.gif");
	color: #FFFFFF;
}

.navbar {
	background-color: #d4e9f6;
}

.forabg, .forumbg {
	background-color: #0f7eb3;
	background-image: url("{T_THEME_PATH}/images/cathead.gif");
	background-repeat: no-repeat;
}

.panel {
	background-color: #f4fbff;
	color: #3f6a9e;
}

.post:target .content {
	color: #000000;
}

.post:target h3 a {
	color: #000000;
}

.bg1	{ background-color: #eff8fb;}
.bg2	{ background-color: #f4fbff;}
.bg3	{ background-color: #d4e9f6;}

.ucprowbg {
	background-color: #e1e7ef;
}

.fieldsbg {
	background-color: #ebeef3;
}

span.corners-top {
	background-image: url("{T_THEME_PATH}/images/corners_left.png");
}

span.corners-top span {
	background-image: url("{T_THEME_PATH}/images/corners_right.png");
}

span.corners-bottom {
	background-image: url("{T_THEME_PATH}/images/corners_left.png");
}

span.corners-bottom span {
	background-image: url("{T_THEME_PATH}/images/corners_right.png");
}

/* Horizontal lists
----------------------------------------*/

ul.navlinks {
	border-bottom-color: #FFFFFF;
}

/* Table styles
----------------------------------------*/
table.table1 thead th {
	color: #FFFFFF;
}

table.table1 tbody tr {
	border-color: #c6cade;
}

table.table1 tbody tr:hover, table.table1 tbody tr.hover {
	background-color: #d9ecfd;
	color: #000;
}

table.table1 td {
	color: #688fc3;
}

table.table1 tbody td {
	border-top-color: #FAFAFA;
}

table.table1 tbody th {
	border-bottom-color: #000000;
	color: #333333;
	background-color: #FFFFFF;
}

table.info tbody th {
	color: #000000;
}

/* Misc layout styles
---------------------------------------- */
dl.details dt {
	color: #000000;
}

dl.details dd {
	color: #688fc3;
}

.sep {
	color: #3bccff;
}

/* Pagination

---------------------------------------- */



.pagination span a, .pagination span a:link, .pagination span a:visited, .pagination span a:active {

	color: #09a5ff;

	background-color: #f4fafe;

	border-color: #c7e3f1;

	padding:  3px 7px;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 11px;

	font-weight: bold;

}



.pagination span strong, .pagination span a:hover  {

	color: #09a5ff;

	background-color: #ddf0fd;

	border-color: #c7e3f1;

	padding: 3px 7px;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 11px;

	font-weight: bold;

}



/* Pagination in viewforum for multipage topics */

.row .pagination {

	background-image: url("{T_THEME_PATH}/images/icon_pages.gif");

}



.row .pagination span a, li.pagination span a {

	background-color: #FFFFFF;

}



.row .pagination span a:hover, li.pagination span a:hover {

	background-color: #ddf0fd;

}




/* Miscellaneous styles
---------------------------------------- */

.copyright {
	color: #555555;
}

.error {
	color: #BC2A4D;
}

.reported {
	background-color: #F7ECEF;
}

li.reported:hover {
	background-color: #ECD5D8 !important;
}
.sticky, .announce {
	/* you can add a background for stickies and announcements*/
}

div.rules {
	background-color: #ffffcc;
	color: #000000; font-size: 14px;
	background-image: url("{T_THEME_PATH}/images/warning-icon.png");
	background-repeat: no-repeat;
	background-position: 10px 5px;
	min-height: 50px;
	padding-left: 70px; padding-top: 10px;
	border: 1px solid #ffde5b;
	border-bottom: 4px solid #ffde5b;
}

div.mini-rules {
	background-color: #ffffcc;
	color: #000000; font-size: 12px;
	background-image: url("{T_THEME_PATH}/images/warning-icon-mini.png");
	background-repeat: no-repeat;
	background-position: 7px 7px;
	min-height: 20px;
	padding-left: 30px; padding-top: 8px;
	border: 1px solid #ffde5b;
	font-weight: bold;
	margin-top: 3px;
}

div.rules h3 {font-size: 14px; padding: 0; margin: 0; text-decoration: underline; border: none; text-transform: none; color: #000000; margin-bottom: 3px;}

p.rules {
	background-color: #ECD5D8;
	background-image: none;
}

/*  	
--------------------------------------------------------------
Colours and backgrounds for links.css
-------------------------------------------------------------- */

a:link	{ color: #029dff; }
a:visited	{ color: #029dff; }
a:hover	{ color: #3cb4ff; }
a:active	{ color: #0b7aab; }

/* Links on gradient backgrounds */
#search-box a:link, .navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {
	color: #FFFFFF;
}

#search-box a:visited, .navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {
	color: #FFFFFF;
}

#search-box a:hover, .navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {
	color: #c1e7ff;
}

#search-box a:active, .navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {
	color: #d8f0ff;
}

/* Links for forum/topic lists */
a.forumtitle, a.forumtitle:active, a.topictitle, a.topictitle:active {
	color: #1696ff;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}

a.forumtitle:hover, a.topictitle:hover {
	text-decoration: none;
	color: #3cb4ff;
}




/* Post body links */
.postlink {
	color: #5eb7f1;
	border-bottom-color: #5eb7f1;
}

.postlink:visited {
	color: #7bb7e1;
	border-bottom-color: #7bb7e1;
}

.postlink:active {
	color: #5eb7f1;
}

.postlink:hover {
	color: #0091ef;
	text-decoration: none !important;
	border: none;
	background: none !important;
}

.signature a, .signature a:visited, .signature a:hover, .signature a:active {
	background-color: transparent;
}

/* Profile links */
.postprofile a:link, .postprofile a:visited, .postprofile dt.author a {
	color: #029dff;
}

.postprofile a:hover, .postprofile a:active, .postprofile dt.author a:hover, .postprofile dt.author a:active {
	color: #D31141;
}

/* Profile searchresults */	
.search .postprofile a {
	color: #029dff;
}

.search .postprofile a:hover, .search .postprofile a:active {
	color: #D31141;
}

/* Back to top of page */
a.top {
	background-image: url("{IMG_ICON_BACK_TOP_SRC}");
}

a.top2 {
	background-image: url("{IMG_ICON_BACK_TOP_SRC}");
}

/* Arrow links  */
a.up		{ background-image: url("{T_THEME_PATH}/images/arrow_up.gif") }
a.down		{ background-image: url("{T_THEME_PATH}/images/arrow_down.gif") }
a.left		{ background-image: url("{T_THEME_PATH}/images/arrow_left.gif") }
a.right		{ background-image: url("{T_THEME_PATH}/images/arrow_right.gif") }

a.up:hover {
	background-color: transparent;
}

a.left:hover {
	color: #5eb7f1;
}

a.right:hover {
	color: #5eb7f1;
}


/*  	
--------------------------------------------------------------
Colours and backgrounds for content.css
-------------------------------------------------------------- */

ul.forums {
	background-color: #f1f9fc;
}

ul.topiclist li {
	color: #5f8cbf;
}

ul.topiclist dd {
	border-left: none;
}

.rtl ul.topiclist dd {
	border-right-color: #fff;
	border-left-color: transparent;
}

ul.topiclist li.row dt a.subforum.read {
	background-image: url("{IMG_SUBFORUM_READ_SRC}");
}

ul.topiclist li.row dt a.subforum.unread {
	background-image: url("{IMG_SUBFORUM_UNREAD_SRC}");
}

li.row {
	border-top: none;
	border-bottom-color: #deedff;
	background-color: #fcfeff;
	background-image: url("{T_THEME_PATH}/images/row.gif");
	background-repeat: repeat-x;
	background-position: bottom;
}

li.row strong {
	color: #000000;
}

li.header dt, li.header dd {
	color: #FFFFFF;
}

/* Forum list column styles */
ul.topiclist dd.searchextra {
	color: #333333;
}

/* Post body styles
----------------------------------------*/
.postbody {
	color: #333333;
}

/* Content container styles
----------------------------------------*/
.content {
	color: #333333;
}

.content h2, .panel h2 {
	color: #0d8eff;
	border-bottom-color: #c8e6fb;
}

dl.faq dt {
	color: #333333;
}

.posthilit {
	background-color: #F3BFCC;
	color: #BC2A4D;
}

/* Post signature */
.signature {
	border-top-color: #CCCCCC;
	margin-top: 10px !important;
	padding-bottom: 5px;
	font-family: "Segoe UI", Tahoma, Geneva, sans-serif;
	font-size: 12px;
	color: #2c97d0;
}

/* Post noticies */
.notice {
	border-top-color:  #CCCCCC;
	font-size: 10px;
}

/* BB Code styles
----------------------------------------*/
/* Quote block */
blockquote {
	background-color: #f4fbff;
	background-image: url("{T_THEME_PATH}/images/quote_icon.png");
	border-color:#91c9ea;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
}

.rtl blockquote {
	background-image: url("{T_THEME_PATH}/images/quote_rtl.gif");
}

blockquote blockquote {
	/* Nested quotes */
	background-color:#edf8ff;
}

blockquote blockquote blockquote {
	/* Nested quotes */
	background-color: #e0f4ff;
}

/* Code block */
dl.codebox {
	background-color: #f4fbff;
	border-color: #91c9ea;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
}

dl.codebox dt {
	border-bottom-color:  #CCCCCC;
}

dl.codebox code {
	color: #0091e8;
}

.syntaxbg		{ color: #FFFFFF; }
.syntaxcomment	{ color: #FF8000; }
.syntaxdefault	{ color: #0b11d7; }
.syntaxhtml		{ color: #000000; }
.syntaxkeyword	{ color: #007700; }
.syntaxstring	{ color: #DD0000; }

/* Attachments
----------------------------------------*/
.attachbox {
	background-color: #FFFFFF;
	border-color:  #d2e2ea;
	font-size: 10px;
}

.pm-message .attachbox {
	background-color: #f3f6f6;
}

.attachbox dd {
	border-top-color: #d2e2ea;
}

.attachbox p {
	color: #666666;
}

.attachbox p.stats {
	color: #666666;
}

.attach-image img {
	border-color: #999999;
}

/* Inline image thumbnails */

dl.file dd {
	color: #666666;
}

dl.thumbnail img {
	border-color: #666666;
	background-color: #FFFFFF;
}

dl.thumbnail dd {
	color: #666666;
}

dl.thumbnail dt a:hover {
	background-color: #EEEEEE;
}

dl.thumbnail dt a:hover img {
	border-color: #5eb7f1;
}

/* Post poll styles
----------------------------------------*/

fieldset.polls dl {
	border-top-color: #e1e7ef;
	color: #666666;
}

fieldset.polls dl.voted {
	color: #000000;
}

fieldset.polls dd div {
	color: #FFFFFF;
}

.rtl .pollbar1, .rtl .pollbar2, .rtl .pollbar3, .rtl .pollbar4, .rtl .pollbar5 {
	border-right-color: transparent;
}

.pollbar5 {
	background-color: #46ceff;
	border: none;
	-moz-border-radius: 3px;
	-webkit-border-radius: 5px;
	text-shadow: 1px 1px 2px #000000;
}

.pollbar4 {
	background-color: #20c4ff;
	border: none;
	-moz-border-radius: 3px;
	-webkit-border-radius: 5px;
	text-shadow: 1px 1px 2px #000000;
}

.pollbar3 {
	background-color: #00b6f6;
	border: none;
	-moz-border-radius: 3px;
	-webkit-border-radius: 5px;
	text-shadow: 1px 1px 2px #000000;
}

.pollbar2 {
	background-color: #009fd7;
	border: none;
	-moz-border-radius: 3px;
	-webkit-border-radius: 5px;
	text-shadow: 1px 1px 2px #000000;
}

.pollbar1 {
	background-color: #0089bc;
	border: none;
	-moz-border-radius: 3px;
	-webkit-border-radius: 5px;
	text-shadow: 1px 1px 2px #000000;
}

/* Poster profile block
----------------------------------------*/
.postprofile {
	color: #666666;
	border-left-color: #FFFFFF;
	font-size: 11px;
}

.rtl .postprofile {
	border-right-color: #FFFFFF;
	border-left-color: transparent;
}

.pm .postprofile {
	border-left-color: #DDDDDD;
}

.rtl .pm .postprofile {
	border-right-color: #DDDDDD;
	border-left-color: transparent;
}

.postprofile strong {
	color: #000000;
}

.online {
	background-image: url("{IMG_ICON_USER_ONLINE_SRC}");
	background-repeat: no-repeat;
	margin-top: -5px;
}

.online dt {
   margin-top: 5px;
}

/*  	
--------------------------------------------------------------
Colours and backgrounds for buttons.css
-------------------------------------------------------------- */

/* Big button images */
.reply-icon span	{ background-image: url("{IMG_BUTTON_TOPIC_REPLY_SRC}"); }
.post-icon span		{ background-image: url("{IMG_BUTTON_TOPIC_NEW_SRC}"); }
.locked-icon span	{ background-image: url("{IMG_BUTTON_TOPIC_LOCKED_SRC}"); }
.pmreply-icon span	{ background-image: url("{IMG_BUTTON_PM_REPLY_SRC}") ;}
.newpm-icon span 	{ background-image: url("{IMG_BUTTON_PM_NEW_SRC}") ;}
.forwardpm-icon span	{ background-image: url("{IMG_BUTTON_PM_FORWARD_SRC}") ;}

a.print {
	background-image: url("{T_THEME_PATH}/images/icon_print.gif");
}

a.sendemail {
	background-image: url("{T_THEME_PATH}/images/icon_sendemail.gif");
}

a.fontsize {
	background-image: url("{T_THEME_PATH}/images/icon_fontsize.gif");
}

/* Icon images
---------------------------------------- */
.sitehome						{ background-image: url("{T_THEME_PATH}/images/icon_home.gif"); }
.icon-faq						{ background-image: url("{T_THEME_PATH}/images/icon_faq.gif"); }
.icon-members					{ background-image: url("{T_THEME_PATH}/images/icon_members.gif"); }
.icon-home						{ background-image: url("{T_THEME_PATH}/images/icon_home.gif"); }
.icon-ucp						{ background-image: url("{T_THEME_PATH}/images/icon_ucp.gif"); }
.icon-register					{ background-image: url("{T_THEME_PATH}/images/icon_register.gif"); }
.icon-logout					{ background-image: url("{T_THEME_PATH}/images/icon_logout.gif"); }
.icon-bookmark					{ background-image: url("{T_THEME_PATH}/images/icon_bookmark.gif"); }
.icon-bump						{ background-image: url("{T_THEME_PATH}/images/icon_bump.gif"); }
.icon-subscribe					{ background-image: url("{T_THEME_PATH}/images/icon_subscribe.gif"); }
.icon-unsubscribe				{ background-image: url("{T_THEME_PATH}/images/icon_unsubscribe.gif"); }
.icon-pages						{ background-image: url("{T_THEME_PATH}/images/icon_pages.gif"); }
.icon-search					{ background-image: url("{T_THEME_PATH}/images/icon_search.gif"); }

/* Profile & navigation icons */
.email-icon, .email-icon a		{ background-image: url("{IMG_ICON_CONTACT_EMAIL_SRC}"); }
.aim-icon, .aim-icon a			{ background-image: url("{IMG_ICON_CONTACT_AIM_SRC}"); }
.yahoo-icon, .yahoo-icon a		{ background-image: url("{IMG_ICON_CONTACT_YAHOO_SRC}"); }
.web-icon, .web-icon a			{ background-image: url("{IMG_ICON_CONTACT_WWW_SRC}"); }
.msnm-icon, .msnm-icon a			{ background-image: url("{IMG_ICON_CONTACT_MSNM_SRC}"); }
.icq-icon, .icq-icon a			{ background-image: url("{IMG_ICON_CONTACT_ICQ_SRC}"); }
.jabber-icon, .jabber-icon a		{ background-image: url("{IMG_ICON_CONTACT_JABBER_SRC}"); }
.pm-icon, .pm-icon a				{ background-image: url("{IMG_ICON_CONTACT_PM_SRC}"); }
.quote-icon, .quote-icon a		{ background-image: url("{IMG_ICON_POST_QUOTE_SRC}"); }

/* Moderator icons */
.report-icon, .report-icon a		{ background-image: url("{IMG_ICON_POST_REPORT_SRC}"); }
.edit-icon, .edit-icon a			{ background-image: url("{IMG_ICON_POST_EDIT_SRC}"); }
.delete-icon, .delete-icon a		{ background-image: url("{IMG_ICON_POST_DELETE_SRC}"); }
.info-icon, .info-icon a			{ background-image: url("{IMG_ICON_POST_INFO_SRC}"); }
.warn-icon, .warn-icon a			{ background-image: url("{IMG_ICON_USER_WARN_SRC}"); } /* Need updated warn icon */

/*  	
--------------------------------------------------------------
Colours and backgrounds for cp.css
-------------------------------------------------------------- */

/* Main CP box
----------------------------------------*/

#cp-main h3, #cp-main hr, #cp-menu hr {
	border-color: #b3cddd;
}

#cp-main .panel li.row {
	border-bottom-color: #c1d6e3;
	border-top-color: #F9F9F9;
}

ul.cplist {
	border-top-color: #c1d6e3;
}

#cp-main .panel li.header dd, #cp-main .panel li.header dt {
	color: #000000;
}

#cp-main table.table1 thead th {
	color: #333333;
	border-bottom-color: #333333;
}

#cp-main .pm-message {
	border-color: #e1e8ef;
	background-color: #FFFFFF;
}

/* CP tabbed menu
----------------------------------------*/
#tabs a {
	background-image: url("{T_THEME_PATH}/images/bg_tabs1.gif");
	font-size: 12px;
}

#tabs a span {
	background-image: url("{T_THEME_PATH}/images/bg_tabs2.gif");
	color: #688fc3;
}

#tabs a:hover span {
	color: #BC2A4D;
}

#tabs .activetab a {
	border-bottom-color: #d4e9f6;
}

#tabs .activetab a span {
	color: #333333;
}

#tabs .activetab a:hover span {
	color: #000000;
}

/* Mini tabbed menu used in MCP
----------------------------------------*/
#minitabs li {
	background-color: #e6f3f9;
}

#minitabs li.activetab {
	background-color: #F9F9F9;
}

#minitabs li.activetab a, #minitabs li.activetab a:hover {
	color: #333333;
}

/* UCP navigation menu
----------------------------------------*/

/* Link styles for the sub-section links */
#navigation a {
	color: #333;
	background-color: #bfd7e6;
	background-image: url("{T_THEME_PATH}/images/bg_menu.gif");
}

.rtl #navigation a {
	background-image: url("{T_THEME_PATH}/images/bg_menu_rtl.gif");
	background-position: 0 100%;
}

#navigation a:hover {
	background-image: none;
	background-color: #b8d2e1;
	color: #BC2A4D;
}

#navigation #active-subsection a {
	color: #D31141;
	background-color: #F9F9F9;
	background-image: none;
}

#navigation #active-subsection a:hover {
	color: #D31141;
}

/* Preferences pane layout
----------------------------------------*/
#cp-main h2 {
	color: #333333;
}

#cp-main .panel {
	background-color: #F9F9F9;
}

#cp-main .pm {
	background-color: #FFFFFF;
}

#cp-main span.corners-top, #cp-menu span.corners-top {
	background-image: url("{T_THEME_PATH}/images/corners_left2.gif");
}

#cp-main span.corners-top span, #cp-menu span.corners-top span {
	background-image: url("{T_THEME_PATH}/images/corners_right2.gif");
}

#cp-main span.corners-bottom, #cp-menu span.corners-bottom {
	background-image: url("{T_THEME_PATH}/images/corners_left2.gif");
}

#cp-main span.corners-bottom span, #cp-menu span.corners-bottom span {
	background-image: url("{T_THEME_PATH}/images/corners_right2.gif");
}

/* Topicreview */
#cp-main .panel #topicreview span.corners-top, #cp-menu .panel #topicreview span.corners-top {
	background-image: url("{T_THEME_PATH}/images/corners_left.gif");
}

#cp-main .panel #topicreview span.corners-top span, #cp-menu .panel #topicreview span.corners-top span {
	background-image: url("{T_THEME_PATH}/images/corners_right.gif");
}

#cp-main .panel #topicreview span.corners-bottom, #cp-menu .panel #topicreview span.corners-bottom {
	background-image: url("{T_THEME_PATH}/images/corners_left.gif");
}

#cp-main .panel #topicreview span.corners-bottom span, #cp-menu .panel #topicreview span.corners-bottom span {
	background-image: url("{T_THEME_PATH}/images/corners_right.gif");
}

/* Friends list */
.cp-mini {
	background-color: #f1f9fc;
}

dl.mini dt {
	color: #5280ba;
}

/* PM Styles
----------------------------------------*/
/* PM Message history */
.current {
	color: #000000 !important;
}

/* PM marking colours */
.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {
	border-left-color: #BC2A4D;
	border-right-color: #BC2A4D;
}

.pmlist li.pm_marked_colour, .pm_marked_colour {
	border-color: #FF6600;
}

.pmlist li.pm_replied_colour, .pm_replied_colour {
	border-color: #b7d1df;
}

.pmlist li.pm_friend_colour, .pm_friend_colour {
	border-color: #7bb7e1;
}

.pmlist li.pm_foe_colour, .pm_foe_colour {
	border-color: #000000;
}

/* Avatar gallery */
#gallery label {
	background-color: #FFFFFF;
	border-color: #CCC;
}

#gallery label:hover {
	background-color: #EEE;
}

/*  	
--------------------------------------------------------------
Colours and backgrounds for forms.css
-------------------------------------------------------------- */

/* General form styles
----------------------------------------*/
select {
	border-color: #666666;
	background-color: #FAFAFA;
	color: #000;
}

option.disabled-option {
	color: graytext;
}

/* Definition list layout for forms
---------------------------------------- */
dd label {
	color: #333;
}

/* Hover effects */
fieldset dl:hover dt label {
	color: #000000;
}

fieldset.fields2 dl:hover dt label {
	color: inherit;
}

/* Quick-login on index page */
fieldset.quick-login input.inputbox {
	background-color: #f3f6f6;
}

/* Posting page styles
----------------------------------------*/

#message-box textarea {
	color: #333333;
	font-size: 12px;
	font-family: Verdana, Geneva, sans-serif
}

/* Input field styles
---------------------------------------- */
.inputbox {
	background-color: #FFFFFF; 
	border-color: #bfd0dd;
	color: #333333;
}


input.disabled {
	color: #666666;
}
/* Custom CSS Styles for Absolution
--------------------------------------------- */
/*#header {
	width: 100%;
	background: url("{T_THEME_PATH}/images/header.gif") repeat-x left top #0078c1;
	-moz-box-shadow: 0 0 8px #005dad;
	-webkit-box-shadow: 0 0 8px #005dad;
	box-shadow: 0 0 8px #005dad;	
}*/

#header {
	width: 100%;
	background: url("{T_THEME_PATH}/images/header.gif") repeat-x left top #0078c1;
	-moz-box-shadow: 0 0 8px #005dad;
	-webkit-box-shadow: 0 0 8px #005dad;
	box-shadow: 0 0 8px #005dad;
}

@font-face {
	font-family: "Harabara";
	src: url("{T_TEMPLATE_PATH}/harabara.ttf");
}

#header h1 {
	padding: 33px;
	margin: 0;
	font-family: "Harabara", Arial, Helvetica, sans-serif;
	font-size: 36px;
	display: block;
	background: url("{T_THEME_PATH}/images/logo-text-bg.png") no-repeat top left;
	text-shadow: 0 3px 3px #0047b6;
	min-width: 377px;
	height: 40px;
}

.noise {
	background-image: url("{T_THEME_PATH}/images/noise.png");
	min-height: 100% !important;
}

#wrap {
	-moz-box-shadow: 0 0 8px #006dc0;
	-webkit-box-shadow: 0 0 8px #006dc0;
	box-shadow: 0 0 8px #006dc0;
}

.contentpadding {
	padding: 10px 15px;
}

.quicksearch {
	margin: 40px 35px 35px 0;
}

.quicksearch form {
	float: left;
}

.quicksearch a {
	float: right;
	padding: 8px 0 0 8px;
}

.quicksearch input {
	width: 70px;
	height: 30px;
	padding: 0 10px 0 35px;
	background: url("{T_THEME_PATH}/images/quicksearch.gif") no-repeat 10px 50% #0063b6;
	border: none;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	letter-spacing: -0.5px;
	color: #FFFFFF;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-box-shadow: inset 0 1px 0 #007fe6;
	-webkit-box-shadow: inset 0 1px 0 #007fe6;
	box-shadow: inset 0 1px 0 #007fe6;
	-webkit-transition-duration: 400ms;
	-webkit-transition-property: width, background;
	-webkit-transition-timing-function: ease;
	-moz-transition-duration: 400ms;
	-moz-transition-property: width, background;
	-moz-transition-timing-function: ease;
	-o-transition-duration: 400ms;
	-o-transition-property: width, background;
	-o-transition-timing-function: ease;	
}

.quicksearch input:focus {
	width: 170px;
}

#nav {
	width: 100%;
	height: 52px;
	background: url("{T_THEME_PATH}/images/nav-m.gif") repeat-x left top;
	position: relative;
}

#nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	width: 100%;
}

#nav ul li {
	float: left;
}

#nav ul li.divider {
	width: 2px;
	height: 45px;
	background: url("{T_THEME_PATH}/images/divider.gif") no-repeat left top;
	margin-top: 5px;
}

#nav ul li a {
	background: url("{T_THEME_PATH}/images/navbg.gif") repeat-x left top;
	padding: 20px 16px 15px;
	float: left;
	display: block;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
	letter-spacing: -0.5px;
	color: #0076d3;
	text-shadow: 0 1px 0 #FFFFFF;
	-webkit-transition: color 0.2s ease-in;
 	-o-transition: color 0.2s ease-in;
	-moz-transition: color 0.2s ease-in;
	transition: color 0.2s ease-in;
}

#nav ul li a img {
	vertical-align: middle;
	margin-top: -3px;
	margin-right: 7px;
}

#nav ul li.logout {
	padding-left: 0px;
	padding-right: 0px;
}

#nav ul li.logout a img {
	margin: 0;
}

#nav ul li a:hover, #nav ul li.active a {
	text-decoration: none;
	background-position: bottom;
	color: #1699ff;
}

#nav-wrap-left {
	width: 6px;
	height: 69px;
	background: url("{T_THEME_PATH}/images/nav-wrappers.png") no-repeat left top;
	float: left;
	margin: -9px 0 0 -6px;
}

#nav-wrap-right {
	width: 6px;
	height: 69px;
	background: url("{T_THEME_PATH}/images/nav-wrappers.png") no-repeat -6px top;
	float: right;
	margin: -9px -6px 0 0;
}

#nav ul li ul.drop {
	background: #eff8ff;
	padding: 5px;
	position: absolute;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border: 1px solid #d8ecfb;
	display: none;
	z-index: 9999;
	width: 200px;
	margin-top: -5px;
}

#nav ul li ul.drop li {
	float: none;
}

#nav ul li ul.drop li a {
	background: none;
	padding: 5px;
	font-weight: normal;
	font-size: 13px;
	margin: 3px 0;
	display: block;
	border: 1px solid #ecfbfe;
	font-family: Tahoma, Geneva, sans-serif;
	letter-spacing: normal;
}

#nav ul li ul.drop li a:hover {
	border: 1px solid #d2f2fe;
	background: #FFFFFF;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	text-decoration: none;
}

body.nojs #nav ul li:hover > ul {
	display: block;
}

.tipsy { padding: 5px; font-size: 12px; position: absolute; z-index: 100000; margin-top: 5px; }
.tipsy-inner { padding: 5px 8px 4px 8px; background-color: black; color: white; max-width: 200px; text-align: center; }
.tipsy-inner { border-radius: 3px; -moz-border-radius:3px; -webkit-border-radius:3px; }
.tipsy-arrow { position: absolute; background: url("{T_THEME_PATH}/images/tipsy.gif") no-repeat top left; width: 9px; height: 5px; }
.tipsy-n .tipsy-arrow { top: 0; left: 50%; margin-left: -4px; }
.tipsy-nw .tipsy-arrow { top: 0; left: 10px; }
.tipsy-ne .tipsy-arrow { top: 0; right: 10px; }
.tipsy-s .tipsy-arrow { bottom: 0; left: 50%; margin-left: -4px; background-position: bottom left; }
.tipsy-sw .tipsy-arrow { bottom: 0; left: 10px; background-position: bottom left; }
.tipsy-se .tipsy-arrow { bottom: 0; right: 10px; background-position: bottom left; }
.tipsy-e .tipsy-arrow { top: 50%; margin-top: -4px; right: 0; width: 5px; height: 9px; background-position: top right; }
.tipsy-w .tipsy-arrow { top: 50%; margin-top: -4px; left: 0; width: 5px; height: 9px; }

.red-notice {
	background: #fcebeb;
	border: 2px dashed #ffc5c5;
	text-align: center;
	padding: 10px;
	margin: 10px 0;
	font-size: 12px;
	font-family: Verdana, Geneva, sans-serif;
	color: #bb0000;
}

.red-notice a {
	color: #bb0000;
	border-bottom: 1px dotted;
}

.red-notice a:hover {
	text-decoration: none;
	border: none;
}
  
.indexlinks {
	line-height: 20px;
	text-align: center;
	color: #bfbfbf;
}

.cathead-m {
	width: 100%;
	height: 44px;
	background: url("{T_THEME_PATH}/images/cathead-m.gif") repeat-x left top;
	border-top-left-radius: 5px 5px;
	border-top-right-radius: 5px 5px;
	-moz-border-radius-topleft: 5px 5px;
	-moz-border-radius-topright: 5px 5px;
	-webkit-border-top-left-radius: 5px 5px;
	-webkit-border-top-right-radius: 5px 5px;
}

.cathead-l {
	height: 32px;
	min-width: 272px;
	background: url("{T_THEME_PATH}/images/cathead-l.png") no-repeat left top;
	padding: 12px 0 0 15px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFFFFF;
	text-shadow: 0 -1px 0 #0075d4;
}

.cathead-l a {
	color: #FFFFFF;
}

.cathead-l a:hover {
	text-decoration: none;
}

.cathead-r {
	background: url("{T_THEME_PATH}/images/cathead-r.png") no-repeat right top;
}

.catglow {
	box-shadow: 0 0 4px #9ad3fe;
	-moz-box-shadow: 0 0 4px #9ad3fe;
	-webkit-box-shadow: 0 0 4px #9ad3fe;
	background: #eff8ff;
	border-radius: 5px 5px 3px 3px; 
	-moz-border-radius: 5px 5px 3px 3px; 
	-webkit-border-radius: 5px 5px 3px 3px; 
}

.collapsethis {
	padding: 10px;
}

table.cat {
	border: 1px solid #dfeefa;
	border-bottom: none;
	background: #FFFFFF;
}

table.cat td {
	border-bottom: 1px solid #dfeefa;
	padding: 10px 6px 6px 6px;
	vertical-align: top;
}

td.forumicon {
	text-align: center;
	width: 5%;
}

td.forumdetails {
	padding-right: 30px !important;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
}

td.forumlink {
	vertical-align: middle !important;
}

td.forumlastpost {
	width: 20%;
	padding-top: 9px !important;
}

td.forumclicks {
	padding-top: 9px !important;
}

td.forumtopics, td.forumposts {
	width: 8%;
}

span.fade {
	color: #BFBFBF;
}

span.forummods, span.subforums {
	display: block;
	margin: 4px 0;
}

span.forumimage {
	float: left;
	display: block;
	margin: 0 15px 15px 0;
}

.statbubble {
	width: 64px;
	height: 36px;
	background: url("{T_THEME_PATH}/images/statbubble.png") no-repeat left top;
	text-align: center;
	padding: 6px 0 0 7px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 11px;
	color: #1696ff;
}

.statbubble span {
	font-size: 16px;
	font-weight: bold;
	color: #1b83c5;
	font-family: Arial, Helvetica, sans-serif;
	line-height: 15px;
}

.statspanel {
	border: 1px solid #dfeefa;
	padding: 15px 15px 15px 55px;
	background: no-repeat 10px 50% #FFFFFF;
	margin: 2px 0;
}

.footer {
	min-height: 70px;
	margin: -4px auto 0;
	background: url("{T_THEME_PATH}/images/footerlight.gif") no-repeat 50% top;
	text-align: center;
	padding: 20px 0;
	color: #d9eeff;
	text-shadow: 0 5px 5px #000000;
	line-height: 20px;
}

.footer a {
	color: #63c2ff;
}

.trigger {
    background: url("{T_THEME_PATH}/images/trigger.png") no-repeat;
    width: 19px;
    height: 20px;
    cursor: pointer;
    float: right;
    position: relative;
    z-index: 9998;
    margin-top: -33px;
	margin-right: 15px;
}
.active {background-position: right top;}
.inactive {background-position: left bottom;}

body.nojs .trigger {
	display: none;
}

input.inputbox, select, textarea, #message-box textarea {
	border: 1px solid #d7ecfa !important;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	background: url("{T_THEME_PATH}/images/formbg.gif") repeat-x left top #FFFFFF;
	padding: 7px;
	font-size: 12px;
	color: #0071cf;
}

input.inputbox:hover, select:hover, textarea:hover, #message-box textarea:hover {
	border-color: #c8e6fb;
}

input.inputbox:focus, select:focus, textarea:focus, #message-box textarea:focus {
	border-color: #b3ddfb;
}

a.button1, input.button1, input.button2, input.button3 {
	background: url("{T_THEME_PATH}/images/buttonbg.png") repeat-x left bottom #FFFFFF;
	padding: 6px;
	font-family: Verdana, Geneva, sans-serif;
	border: 1px solid #d7ecfa;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	color: #77b9e5;
}

a.button1:hover, input.button1:hover, input.button2:hover, input.button3:hover {
	background: url("{T_THEME_PATH}/images/buttonbghover.png") repeat-x left bottom;
	border: 1px solid #b6defa;
	color: #20a4ff;
}

a.button1:active, input.button1:active, input.button2:active, input.button3:active {
	background: url("{T_THEME_PATH}/images/buttonbgactive.png") repeat-x left top;
}

.float-left {float: left !important;}
.float-right {float: right !important;}
.centrado {
	float: center;
}

.clear-both {
	clear: both;
}


.forum-descriptions {
	color: #6a9db7;
	margin-top: 2px;
	display: block;
}

dd.lastpost {
	font-family: Tahoma, Geneva, sans-serif;
	color: #6e9cb6;
}

dd.topics, dd.posts, dd.views {
	font-family: Tahoma, Geneva, sans-serif;
	font-weight: bold; color: #0b7aab;
	line-height: 13px;
}

dd.topics span, dd.posts span, dd.views span {
	font-size: 11px;
	color: #6a9ab7;
}

#wrap {
	background: #FFFFFF;
	min-width: 960px !important;
	border-radius: 0px 0px 5px 5px; 
	-moz-border-radius: 0px 0px 5px 5px; 
	-webkit-border-radius: 0px 0px 5px 5px; 
}

.vtouter {
	background-color: #ebf6fd;
	border: 1px solid #cfe9fa;
	padding: 5px;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
}

.vtinner {
	background-color: #f3f9fe;
	border: 1px solid #c7e7fb;
	border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;	
}

.vtdatebar {
	width: 100%;
	height: 35px;
	line-height: 33px;
	background: url("{T_THEME_PATH}/images/vtdatebar.png") repeat-x left top;
}

.floatleft {
	float: left;
}

.floatright {
	float: right;
}

h3.vtsubject {
	margin: 0;
	padding: 0 0 0 74px;
	border: none;
	text-transform: none;
	font-size: 14px !important;
}

.vtdate {
	color: #91bff0;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 11px;
	padding-right: 15px;
}

.user-online {
	background: url("{T_THEME_PATH}/images/useronline.png") no-repeat 15px 14px;
}

.user-offline {
	background: url("{T_THEME_PATH}/images/useroffline.png") no-repeat 15px 14px;
}

.vtprofilepanel {
	width: 191px;
	margin-bottom: 10px;
	float: left;
	width: 15%;
	padding: 15px 9px 9px;
	background-color: #edf6fd;
	border-right: 1px solid #d9eefc;
	border-bottom: 1px solid #d9eefc;
	border-radius: 0px 0px 5px 0px; 
	-moz-border-radius: 0px 0px 5px 0px; 
	-webkit-border-radius: 0px 0px 5px 0px; 
}

.vtcontent {
	float: right;
	width: 79%;
	padding: 14px;
}

.vtcontent .content {
	margin-top: 0;
}

.vtcontrolbuttons {
	margin-bottom: 18px;
	float: right;
}

ul.profile-icons {
	padding-top: 0;
}

.vtcodebox {
	background-color: #ebf6fd;
	border: 1px solid #cce8fa;
	border-radius: 1px;
	-moz-border-radius: 1px;
	-webkit-border-radius: 3px;
	padding: 3px;
	margin-top: 8px;
}

.vtcodeselect {
	padding: 5px 2px 7px;
	background: url("{T_THEME_PATH}/images/codetitle.png") no-repeat right bottom;
	font-weight: bold;
}

.vtcodeinner {
	border: 1px solid #cfe9fa;
	background-color: #FFFFFF;
	padding: 6px;
	color: #03a2ff;
	font-weight: bold;
	max-height: 300px;
    overflow: auto;

}

.vtquote, .vtquote .vtquote .vtquote {
	background-color: #edf7fe;
	border: 1px solid #b9dcf2;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	padding: 6px;
	color: #03a2ff;
	font-style: italic;
	margin-left: 10px;
	margin-bottom: 4px;
	margin-top: 8px;
}

.vtquote .nib {
	width: 10px;
	height: 13px;
	position: relative;
	float: left;
	background: url("{T_THEME_PATH}/images/nib1.png") no-repeat left top;
	margin-left: -15px;
}

.vtquotecite {
	height: 15px;
	padding-left: 20px;
	background: url("{T_THEME_PATH}/images/cite.png") no-repeat left 2px;
	margin: 4px 0;
	font-weight: bold;
	font-style: normal;
}

.vtquote .vtquote {
	color: #21adff;
	background-color: #f3f9fe;
	border: 1px solid #b9dcf2;
}

.vtquote .vtquote .nib {
	background-image: url("{T_THEME_PATH}/images/nib2.png");
}

.vtquote .vtquote .vtquote .nib {
	background: url("{T_THEME_PATH}/images/nib1.png") no-repeat left top;
}

.vtprofileinfo {
	color: #009af2;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 11px;
	line-height: 14px;
}

span.vtusername {
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	letter-spacing: -1px;
	display: block;
	margin: 3px 0;
}

.vtprofilepadding {
	padding-right: 20px;
}

.postprofile dd, .postprofile strong {
	color: #009af2;
}

.postprofile dd {
	font-size: 11px;
	margin-bottom: 2px;
}

.postprofile strong {
	font-weight: bold;
}

span.ranktitle {
	color: #2a2323;
	font-weight: bold;
	font-size: 11px;
}

.content img {
	max-width: 100%;
}

.clear { /* generic container (i.e. div) for floating buttons */
    overflow: hidden;
    width: 100%;
}

.stat-info {
	background: none !important;
	padding: 0px;
}";s:10:"theme_path";s:10:"absolution";s:10:"theme_name";s:10:"Absolution";s:11:"theme_mtime";s:10:"1330732298";s:11:"imageset_id";s:1:"3";s:13:"imageset_name";s:10:"Absolution";s:18:"imageset_copyright";s:31:"&copy; www.ChristianBullock.com";s:13:"imageset_path";s:10:"absolution";s:13:"template_path";s:10:"absolution";}}