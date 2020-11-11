animatedcollapse.addDiv('jason', 'fade=1,height=80px')
animatedcollapse.addDiv('kelly', 'fade=1,height=100px')
animatedcollapse.addDiv('michael', 'fade=1,height=120px')

animatedcollapse.addDiv('sitemap', 'fade=0,speed=400,group=pets')
animatedcollapse.addDiv('contactus', 'fade=0,speed=400,group=pets,persist=1,hide=1')
animatedcollapse.addDiv('rabbit', 'fade=0,speed=400,group=pets,hide=1')

animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}
jQuery(document).ready(function($){
var btn, n, toggleButtons = {
'sitemapbtn': {
open: 'images/sitemap.gif',
closed: 'images/sitemap_pressed.png'
},
'contactusbtn': {
open: 'images/contactus.gif',
closed: 'images/contactus_pressed.png'
}
}
for (btn in toggleButtons) {
n = document.getElementById(btn);
n.setAttribute('data-openimage', toggleButtons[btn].open);
n.setAttribute('data-closedimage', toggleButtons[btn].closed);
}

});
animatedcollapse.init()