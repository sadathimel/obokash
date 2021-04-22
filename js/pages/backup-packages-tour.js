$(document).ready(function() {
    "use strict";



    $(".continent-country").length > 0 && $(".continent-country").each(function(i) {
        var n = $(this).data("code"),
            t = !1,
            c = !1;
        if(n == 'multi') {
            //alert(n);
            $(".tcontinent-country-" + n).length > 0 && (t = !0), $(".bcontinent-country-" + n).length > 0 && (c = !0), setTimeout(function() {
                $.getJSON(BASEURL + "ajax/?datatype=json&type=tour&task=getmulticountriespackages&code=" + n, function(i, s, a) {
                    var l, o, e, d,price,countries, r = [],
                        u = [];
                    $.each(i, function(i, n) {
                        l = n.img, o = n.link, e = n.name, price = n.price, countries = n.countries, t && r.push("<div class='col-sm-12 col-md-6 col-lg-6'><a href='" + o + "' class='object-link' target='_blank'><div class='multi-countries_padding'><img src='" + l + "' alt=''>" + e + "<br><span class='multi-no-decoration'>Countries: " + countries + "<br>"+price+"</span></div></a></div>"), c && u.push('<div class="col-sm-6 col-md-4 col-lg-4"><div class="grid-block main-block t-grid-block"><div class="main-img t-grid-img multi-tour-img"><a href="' + o + '"><img src="' + l + '" class="img-responsive" alt="hotel-img" /></a><div class="main-mask"><ul class="list-unstyled list-inline offer-price-1"><li class="price"><a href="' + o + '">' + e + "</a><br><span class='multi-tour-list-countries'>"+countries+"<br>"+price+"</span></li></ul></div></div></div></div>")
                    }), r.push('<div class="cl"></div>'), t && $(".tcontinent-country-" + n).html(r.join("")), c && $(".bcontinent-country-" + n).html(u.join(""))
                })
            }, 1000)
        } else {
            $(".tcontinent-country-" + n).length > 0 && (t = !0), $(".bcontinent-country-" + n).length > 0 && (c = !0), setTimeout(function() {
                $.getJSON(BASEURL + "ajax/?datatype=json&type=tour&task=countriesbycontinent&code=" + n, function(i, s, a) {
                    var l, o, e, d, r = [],
                        u = [];
                    $.each(i, function(i, n) {
                        l = FLAGURL + n.code.toLowerCase() + ".jpg", o = 'holiday-packages-from-bangladesh/?destination='+n.alias, e = n.name, d = BASEURL + o, t && r.push("<div class='col-sm-12 col-md-4 col-lg-4'><a href='" + d + "' class='object-link' target='_blank'><div class='flags_padding'><img src='" + l + "' alt=''>" + e + "</div></a></div>"), c && u.push('<div class="col-sm-6 col-md-3 col-lg-3"><div class="grid-block main-block t-grid-block"><div class="main-img t-grid-img visa-img"><a href="' + d + '"><img src="' + l + '" class="img-responsive" alt="hotel-img" /></a><div class="main-mask gotolink" data-link="'+d+'"><ul class="list-unstyled list-inline offer-price-1"><li class="price"><a href="' + d + '">' + e + "</a></li></ul></div></div></div></div>")
                    }), r.push('<div class="cl"></div>'), t && $(".tcontinent-country-" + n).html(r.join("")), c && $(".bcontinent-country-" + n).html(u.join(""))
                })
            }, 1000)
        }
    });
});