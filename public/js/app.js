(()=>{var e={80:()=>{$(".menu-wrapper").on("click",(function(){$(".hamburger-menu").toggleClass("animate"),$(".mobile-nav").toggleClass("active"),$("body").toggleClass("scroll"),$("nav").toggleClass("transparent"),$("#mobile-nav").addClass("opened")})),window.onscroll=function(){document.body.scrollTop>20||document.documentElement.scrollTop>20?$("nav.main").addClass("scroll"):$("nav.main").removeClass("scroll")};var e=new Date,a=new Date;function o(e){for(var a=e+"=",o=document.cookie.split(";"),s=0;s<o.length;s++){for(var r=o[s];" "==r.charAt(0);)r=r.substring(1);if(0==r.indexOf(a))return r.substring(a.length,r.length)}return""}e.setDate(e.getDate()+14),a.setDate(a.getDate()+1),$("#cookieAccept").on("click",(function(){document.cookie="cookieAccept=true;",$(".cookies-popup").addClass("hide")})),$("#cookieDecline").on("click",(function(){document.cookie="cookieAccept=false; expires="+a+";",$(".cookies-popup").addClass("hide")}));var s=o("cookieAccept");"true"===s&&$(".cookies-popup").addClass("hide"),"false"===s&&$(".cookies-popup").addClass("hide"),$(document).ready((function(){$("#close-popup").click((function(){$(".popup").fadeOut("slow"),$("body").removeClass("scroll"),"true"===s&&(document.cookie="popupClosed=true; expires="+e+";")}))})),"true"==o("popupClosed")&&($("body").removeClass("scroll"),$(".popup").addClass("hide")),1==(0===performance.getEntriesByType("navigation")[0].transferSize)&&$(".loader-wrapper").addClass("hide"),$("#member-jelle").click((function(){$("#member-jelle").addClass("active"),$("#member-marco").removeClass("active"),$("#member-tin").removeClass("active"),$("#member-yeno").removeClass("active"),$(".member-jelle").removeClass("hidden"),$(".member-marco").addClass("hidden"),$(".member-tin").addClass("hidden"),$(".member-yeno").addClass("hidden")})),$("#member-marco").click((function(){$("#member-jelle").removeClass("active"),$("#member-marco").addClass("active"),$("#member-tin").removeClass("active"),$("#member-yeno").removeClass("active"),$(".member-jelle").addClass("hidden"),$(".member-marco").removeClass("hidden"),$(".member-tin").addClass("hidden"),$(".member-yeno").addClass("hidden")})),$("#member-tin").click((function(){$("#member-jelle").removeClass("active"),$("#member-marco").removeClass("active"),$("#member-tin").addClass("active"),$("#member-yeno").removeClass("active"),$(".member-jelle").addClass("hidden"),$(".member-marco").addClass("hidden"),$(".member-tin").removeClass("hidden"),$(".member-yeno").addClass("hidden")})),$("#member-yeno").click((function(){$("#member-jelle").removeClass("active"),$("#member-marco").removeClass("active"),$("#member-tin").removeClass("active"),$("#member-yeno").addClass("active"),$(".member-jelle").addClass("hidden"),$(".member-marco").addClass("hidden"),$(".member-tin").addClass("hidden"),$(".member-yeno").removeClass("hidden")}))},823:()=>{},603:()=>{}},a={};function o(s){if(a[s])return a[s].exports;var r=a[s]={exports:{}};return e[s](r,r.exports,o),r.exports}o.m=e,o.x=e=>{},o.o=(e,a)=>Object.prototype.hasOwnProperty.call(e,a),(()=>{var e={773:0},a=[[80],[823],[603]],s=e=>{},r=(r,l)=>{for(var n,m,[d,i,t,c]=l,p=0,$=[];p<d.length;p++)m=d[p],o.o(e,m)&&e[m]&&$.push(e[m][0]),e[m]=0;for(n in i)o.o(i,n)&&(o.m[n]=i[n]);for(t&&t(o),r&&r(l);$.length;)$.shift()();return c&&a.push.apply(a,c),s()},l=self.webpackChunk=self.webpackChunk||[];function n(){for(var s,r=0;r<a.length;r++){for(var l=a[r],n=!0,m=1;m<l.length;m++){var d=l[m];0!==e[d]&&(n=!1)}n&&(a.splice(r--,1),s=o(o.s=l[0]))}return 0===a.length&&(o.x(),o.x=e=>{}),s}l.forEach(r.bind(null,0)),l.push=r.bind(null,l.push.bind(l));var m=o.x;o.x=()=>(o.x=m||(e=>{}),(s=n)())})(),o.x()})();