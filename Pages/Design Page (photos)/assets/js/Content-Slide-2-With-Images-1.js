// typelink.jquery.min.js plugin code

!function($,t,i,e){function s(t,e){this.$element=$(t),this.$document=$(i),this.settings=$.extend({},a,e),this._defaults=a,this._name=n,this._animationInterval=$.noop(),this._charIndex=0,this._currentPage=this.settings.pages[this.settings.startPage],this._fullstring="",this._fullstringLength=0,this._tagTypes={LINK:"link",EXTERNAL:"external",INPUT:"input"},this._stringTag={start:"[s]",end:"[/s]"},this._inputTag={start:"[i]",end:"[/i]"},this._tagWrapStart=0,this._linkIndex=0,this._inputIndex=0,this._tagType=this._tagTypes.LINK,this._externalWrapper=$('<a href="#" />'),this._inputWrapper=$("<input />"),this.init()}var n="typelink",a={pages:{},startPage:0,textDelay:50,$wrapper:$("<span>"),wrapperClass:"highlight",externalClass:"highlight",defaultLinkTarget:"_blank",defaultInputType:"text",deleteDelay:15};$.extend(s.prototype,{init:function(){this.settings.$wrapper=this.buildWordWrap(),this.settings.$wrapper.css("white-space","pre"),this.createEvents(),this.animateText(this.settings.startPage)},buildWordWrap:function(){return this.settings.$wrapper.addClass(this.settings.wrapperClass)},animateText:function(t){this.resetValues(t),this._animationInterval=setInterval($.proxy(this.animationCycle,this),this.settings.textDelay)},animationCycle:function(){var t=this._fullstring.substring(this._charIndex-1,this._charIndex),i=this._fullstring.substring(this._charIndex-1,this._charIndex+2),e=this._fullstring.substring(this._charIndex-1,this._charIndex+3);0===i.indexOf(this._stringTag.start)?(this._tagWrapStart=this._charIndex,this._tagType=this._tagTypes.LINK,this._charIndex+=2):0===e.indexOf(this._stringTag.end)?(this.wrapWord(this._tagWrapStart,this._charIndex),this._charIndex+=3):0===i.indexOf(this._inputTag.start)?(this._tagWrapStart=this._charIndex,this._tagType=this._tagTypes.INPUT,this._charIndex+=2):0===e.indexOf(this._inputTag.end)?(this.wrapWord(this._tagWrapStart,this._charIndex),this._charIndex+=3):this.$element.append(t),this._charIndex>=this._fullstringLength&&this.stopTyping(),this._charIndex++},wrapWord:function(t,i){var s=t,n=i,a=this._fullstring.slice(s+2,n-1),h=this.$element.html(),r=h.length,l=h.slice(0,r-a.length),g=null;if(this._tagType==this._tagTypes.LINK){var p=this._currentPage.links[this._linkIndex];p.toText!=e?(g=this.settings.$wrapper.text(a),g.attr("data-page",p.toText)):(g=this._externalWrapper.text(a),g.addClass(this.settings.externalClass),g.attr({href:p.link,target:p.target||this.settings.defaultLinkTarget})),this._linkIndex++}else if(this._tagType==this._tagTypes.INPUT){var _=this._currentPage.inputs[this._inputIndex];g=this._inputWrapper,g.attr({placeholder:a,type:_.type||this.settings.defaultInputType,name:_.name||a.replace(" ","_")}),this._inputIndex++}0==s&&(l=""),this.$element.html(l+" ").append(g)},stopTyping:function(){clearInterval(this._animationInterval)},resetValues:function(t){this._charIndex=0,this._linkIndex=0,this._inputIndex=0,this._currentPage=this.settings.pages[t],this._fullstring=this._currentPage.text,this._fullstringLength=this._fullstring.length},createEvents:function(){var t="."+this.settings.wrapperClass,i=t+":not('a')";this.$document.on("click",i,this,this.changePage)},changePage:function(t){var i=t.data,e=$(this).data("page");clearInterval(i._animationInterval),i.textResetHideAnimation(function(){i.animateText(e)})},textResetHideAnimation:function(t){var i=this.settings.$wrapper.parent();i.html(i.text());var e=i.text(),s=e.length;this._animationInterval=setInterval($.proxy(function(){var n=e.substring(0,s);i.text(n),0>=s&&(clearInterval(this._animationInterval),t()),s--},this),this.settings.deleteDelay)}}),$.fn[n]=function(t){return this.each(function(){$.data(this,"plugin_"+n)||$.data(this,"plugin_"+n,new s(this,t))}),this}}(jQuery,window,document);

// typelink.jquery.min.js file ends here


var slider1 = [
  {
    text: "We all have that one friend that makes us laugh with their stupidity.",
  }
]
var slider2 = [
  {
    text: "I don't have an attitude! just apersonality that you can't handle!",
  }
]
var slider3 = [
  {
    text: "I will love you until i catches you and has you for dinner! ;-)",
  }
]
var slider4 = [
  {
    text: "I offer you my friendship will you be my friend?",
  }
]
var slider5 = [
  {
    text: "A person who irritates you always is the one who loves you very much but fails to express it.",
  }
]

$(function() {
  $('#slider-1-content').typelink({
    pages: slider1
  });
});

$('.arrow.a2').on('click', function() {
  $('#slider-2-content').typelink({
    pages: slider2
  });
});

$('.arrow.a3').on('click', function() {
  $('#slider-3-content').typelink({
    pages: slider3
  });
});
$('.arrow.a4').on('click', function() {
  $('#slider-4-content').typelink({
    pages: slider4
  });
});
$('.arrow.a5').on('click', function() {
  $('#slider-5-content').typelink({
    pages: slider5
  });
});