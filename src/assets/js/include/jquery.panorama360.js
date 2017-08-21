!function (a) {
    a.fn.panorama360 = function (b) {
        function c(a) {
            return a.preventDefault(), !1
        }

        function d(a, b, c) {
            var d = parseInt(a.css("marginLeft")) + c;
            d > 0 && (d = -b), d < -b && (d = 0), a.css("marginLeft", d + "px")
        }

        function e(b, c, d, e) {
            var f = d / c;
            b.each(function () {
                switch (area_coord = a(this).data("coords"), stitch = a(this).data("stitch"), stitch) {
                    case 1:
                        a(this).css({
                            left: area_coord[0] * f + "px",
                            top: area_coord[1] * f + "px",
                            width: (area_coord[2] - area_coord[0]) * f + "px",
                            height: (area_coord[3] - area_coord[1]) * f + "px"
                        });
                        break;
                    case 2:
                        a(this).css({
                            left: e + parseInt(area_coord[0]) * f + "px",
                            top: area_coord[1] * f + "px",
                            width: (area_coord[2] - area_coord[0]) * f + "px",
                            height: (area_coord[3] - area_coord[1]) * f + "px"
                        })
                }
            })
        }

        this.each(function () {
            var f = {start_position: 0, image_width: 0, image_height: 0, mouse_wheel_multiplier: 20, bind_resize: !0};
            b && a.extend(f, b);
            var g = a(this), h = g.children(".panorama-container"), i = h.children("img:first");
            if (!(f.image_width <= 0 && f.image_height <= 0) || (f.image_width = parseInt(i.data("width")), f.image_height = parseInt(i.data("height")), f.image_width && f.image_height)) {
                var j, k = f.image_height / f.image_width, l = parseInt(g.height()), m = parseInt(l / k),
                    n = i.attr("usemap"), o = !1, p = 0, q = 0;
                i.removeAttr("usemap").css("left", 0).clone().css("left", m + "px").insertAfter(i), h.css({
                    "margin-left": "-" + f.start_position + "px",
                    width: 2 * m + "px",
                    height: l + "px"
                }), setInterval(function () {
                    return !o && (q *= .98, Math.abs(q) <= 2 && (q = 0), void d(h, m, q))
                }, 1), g.mousedown(function (b) {
                    return !o && (a(this).addClass("grab"), o = !0, p = b.clientX, scrollOffset = 0, !1)
                }).mouseup(function () {
                    return a(this).removeClass("grab"), o = !1, q *= .45, !1
                }).mousemove(function (a) {
                    return !!o && (q = parseInt(a.clientX - p), p = a.clientX, d(h, m, q), !1)
                }).bind("contextmenu", c).bind("touchstart", function (a) {
                    return !o && (o = !0, p = a.originalEvent.touches[0].pageX, void(scrollOffset = 0))
                }).bind("touchmove", function (a) {
                    if (a.preventDefault(), !o) return !1;
                    var b = a.originalEvent.touches[0].pageX;
                    q = parseInt(b - p), p = b, d(h, m, q)
                }).bind("touchend", function (a) {
                    o = !1, q *= .45
                }), n && (a("map[name=" + n + "]").children("area").each(function () {
                    switch (a(this).attr("shape").toLowerCase()) {
                        case"rect":
                            var b = a(this).attr("coords").split(",");
                            $area1 = a("<a class='area' href='" + a(this).attr("href") + "' title='" + a(this).attr("alt") + "'</a>"), h.append($area1.data("stitch", 1).data("coords", b)), h.append($area1.clone().data("stitch", 2).data("coords", b))
                    }
                }), a("map[name=" + n + "]").remove(), j = h.children(".area"), j.mouseup(c).mousemove(c).mousedown(c), e(j, f.image_height, l, m)), f.bind_resize && a(window).resize(function () {
                    l = parseInt(g.height()), m = parseInt(l / k), h.css({
                        width: 2 * m + "px",
                        height: l + "px"
                    }), i.css("left", 0).next().css("left", m + "px"), n && e(j, f.image_height, l, m)
                })
            }
        })
    }
}(jQuery);