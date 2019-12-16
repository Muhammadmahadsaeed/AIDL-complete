!function(i){"use strict";var a=i(".control-sidebar"),e=i("<div />",{class:"p-3 control-sidebar-content"});a.append(e);var n=["navbar-primary","navbar-secondary","navbar-info","navbar-success","navbar-danger","navbar-indigo","navbar-purple","navbar-pink","navbar-teal","navbar-cyan","navbar-dark","navbar-gray-dark","navbar-gray"];e.append('<h5>Customize AdminLTE</h5><hr class="mb-2"/>');var s=i("<input />",{type:"checkbox",value:1,checked:i(".main-header").hasClass("border-bottom-0"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i(".main-header").addClass("border-bottom-0"):i(".main-header").removeClass("border-bottom-0")}),d=i("<div />",{class:"mb-1"}).append(s).append("<span>No Navbar border</span>");e.append(d);var r=i("<input />",{type:"checkbox",value:1,checked:i("body").hasClass("text-sm"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i("body").addClass("text-sm"):i("body").removeClass("text-sm")}),c=i("<div />",{class:"mb-1"}).append(r).append("<span>Body small text</span>");e.append(c);var t=i("<input />",{type:"checkbox",value:1,checked:i(".main-header").hasClass("text-sm"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i(".main-header").addClass("text-sm"):i(".main-header").removeClass("text-sm")}),l=i("<div />",{class:"mb-1"}).append(t).append("<span>Navbar small text</span>");e.append(l);var p=i("<input />",{type:"checkbox",value:1,checked:i(".nav-sidebar").hasClass("text-sm"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i(".nav-sidebar").addClass("text-sm"):i(".nav-sidebar").removeClass("text-sm")}),o=i("<div />",{class:"mb-1"}).append(p).append("<span>Sidebar nav small text</span>");e.append(o);var v=i("<input />",{type:"checkbox",value:1,checked:i(".main-footer").hasClass("text-sm"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i(".main-footer").addClass("text-sm"):i(".main-footer").removeClass("text-sm")}),b=i("<div />",{class:"mb-1"}).append(v).append("<span>Footer small text</span>");e.append(b);var h=i("<input />",{type:"checkbox",value:1,checked:i(".nav-sidebar").hasClass("nav-flat"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i(".nav-sidebar").addClass("nav-flat"):i(".nav-sidebar").removeClass("nav-flat")}),m=i("<div />",{class:"mb-1"}).append(h).append("<span>Sidebar nav flat style</span>");e.append(m);var k=i("<input />",{type:"checkbox",value:1,checked:i(".nav-sidebar").hasClass("nav-legacy"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i(".nav-sidebar").addClass("nav-legacy"):i(".nav-sidebar").removeClass("nav-legacy")}),u=i("<div />",{class:"mb-1"}).append(k).append("<span>Sidebar nav legacy style</span>");e.append(u);var g=i("<input />",{type:"checkbox",value:1,checked:i(".nav-sidebar").hasClass("nav-compact"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i(".nav-sidebar").addClass("nav-compact"):i(".nav-sidebar").removeClass("nav-compact")}),f=i("<div />",{class:"mb-1"}).append(g).append("<span>Sidebar nav compact</span>");e.append(f);var C=i("<input />",{type:"checkbox",value:1,checked:i(".nav-sidebar").hasClass("nav-child-indent"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i(".nav-sidebar").addClass("nav-child-indent"):i(".nav-sidebar").removeClass("nav-child-indent")}),x=i("<div />",{class:"mb-1"}).append(C).append("<span>Sidebar nav child indent</span>");e.append(x);var y=i("<input />",{type:"checkbox",value:1,checked:i(".main-sidebar").hasClass("sidebar-no-expand"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i(".main-sidebar").addClass("sidebar-no-expand"):i(".main-sidebar").removeClass("sidebar-no-expand")}),w=i("<div />",{class:"mb-1"}).append(y).append("<span>Main Sidebar disable hover/focus auto expand</span>");e.append(w);var S=i("<input />",{type:"checkbox",value:1,checked:i(".brand-link").hasClass("text-sm"),class:"mr-1"}).on("click",function(){i(this).is(":checked")?i(".brand-link").addClass("text-sm"):i(".brand-link").removeClass("text-sm")}),V=i("<div />",{class:"mb-4"}).append(S).append("<span>Brand small text</span>");e.append(V),e.append("<h6>Navbar Variants</h6>");var j=i("<div />",{class:"d-flex"}),B=n.concat(["navbar-light","navbar-warning","navbar-white","navbar-orange"]),N=O(B,function(a){var e=i(this).data("color"),s=i(".main-header");s.removeClass("navbar-dark").removeClass("navbar-light"),B.map(function(a){s.removeClass(a)}),-1<n.indexOf(e)?s.addClass("navbar-dark"):s.addClass("navbar-light"),s.addClass(e)});j.append(N),e.append(j);var L=["bg-primary","bg-warning","bg-info","bg-danger","bg-success","bg-indigo","bg-navy","bg-purple","bg-fuchsia","bg-pink","bg-maroon","bg-orange","bg-lime","bg-teal","bg-olive"],A=["accent-primary","accent-warning","accent-info","accent-danger","accent-success","accent-indigo","accent-navy","accent-purple","accent-fuchsia","accent-pink","accent-maroon","accent-orange","accent-lime","accent-teal","accent-olive"],R=["sidebar-dark-primary","sidebar-dark-warning","sidebar-dark-info","sidebar-dark-danger","sidebar-dark-success","sidebar-dark-indigo","sidebar-dark-navy","sidebar-dark-purple","sidebar-dark-fuchsia","sidebar-dark-pink","sidebar-dark-maroon","sidebar-dark-orange","sidebar-dark-lime","sidebar-dark-teal","sidebar-dark-olive","sidebar-light-primary","sidebar-light-warning","sidebar-light-info","sidebar-light-danger","sidebar-light-success","sidebar-light-indigo","sidebar-light-navy","sidebar-light-purple","sidebar-light-fuchsia","sidebar-light-pink","sidebar-light-maroon","sidebar-light-orange","sidebar-light-lime","sidebar-light-teal","sidebar-light-olive"];e.append("<h6>Accent Color Variants</h6>");var z=i("<div />",{class:"d-flex"});e.append(z),e.append(O(A,function(){var a=i(this).data("color"),e=i("body");A.map(function(a){e.removeClass(a)}),e.addClass(a)})),e.append("<h6>Dark Sidebar Variants</h6>");var D=i("<div />",{class:"d-flex"});e.append(D),e.append(O(L,function(){var a="sidebar-dark-"+i(this).data("color").replace("bg-",""),e=i(".main-sidebar");R.map(function(a){e.removeClass(a)}),e.addClass(a)})),e.append("<h6>Light Sidebar Variants</h6>");D=i("<div />",{class:"d-flex"});e.append(D),e.append(O(L,function(){var a="sidebar-light-"+i(this).data("color").replace("bg-",""),e=i(".main-sidebar");R.map(function(a){e.removeClass(a)}),e.addClass(a)}));var E=B;e.append("<h6>Brand Logo Variants</h6>");var F=i("<div />",{class:"d-flex"});e.append(F);var M=i("<a />",{href:"javascript:void(0)"}).text("clear").on("click",function(){var e=i(".brand-link");E.map(function(a){e.removeClass(a)})});function O(a,s){var n=i("<div />",{class:"d-flex flex-wrap mb-3"});return a.map(function(a){var e=i("<div />",{class:("object"==typeof a?a.join(" "):a).replace("navbar-","bg-").replace("accent-","bg-")+" elevation-2"});n.append(e),e.data("color",a),e.css({width:"40px",height:"20px",borderRadius:"25px",marginRight:10,marginBottom:10,opacity:.8,cursor:"pointer"}),e.hover(function(){i(this).css({opacity:1}).removeClass("elevation-2").addClass("elevation-4")},function(){i(this).css({opacity:.8}).removeClass("elevation-4").addClass("elevation-2")}),s&&e.on("click",s)}),n}e.append(O(E,function(){var a=i(this).data("color"),e=i(".brand-link");E.map(function(a){e.removeClass(a)}),e.addClass(a)}).append(M))}(jQuery);