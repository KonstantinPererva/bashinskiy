window.addEventListener('DOMContentLoaded', function () {
    MorphSVGPlugin.convertToPath("path");
    var tl = new TimelineLite({onComplete:function() {
        this.restart(true,false);}
    });

    tl.to("#m4",.6,{opacity:1})
        .to("#m4",.3,{morphSVG:{shape:"#m5",shapeIndex:5}},"+=2")
        .to("#m4",.3,{morphSVG:{shape:"#m6",shapeIndex:5}},"+=2")
        .to("#m4",.3,{morphSVG:{shape:"#m7",shapeIndex:5}},"+=2")
        .to("#m4",.3,{morphSVG:{shape:"#m8",shapeIndex:5}},"+=2")
        .to("#m4",.3,{opacity:0},"+=2")
    ;
});