

!(function (t, e) {
    "object" == typeof exports && "undefined" != typeof module
      ? e(exports, require("jquery"), require("popper.js"))
      : "function" == typeof define && define.amd
      ? define(["exports", "jquery", "popper.js"], e)
      : e(
          ((t =
            "undefined" != typeof globalThis ? globalThis : t || self).bootstrap =
            {}),
          t.jQuery,
          t.Popper
        );
  })(this, function (t, e, n) {
    "use strict";
    function i(t) {
      return t && "object" == typeof t && "default" in t ? t : { default: t };
    }
    var o = i(e),
      a = i(n);
    function s(t, e) {
      for (var n = 0; n < e.length; n++) {
        var i = e[n];
        (i.enumerable = i.enumerable || !1),
          (i.configurable = !0),
          "value" in i && (i.writable = !0),
          Object.defineProperty(t, i.key, i);
      }
    }
    function l(t, e, n) {
      return e && s(t.prototype, e), n && s(t, n), t;
    }
    function r() {
      return (r =
        Object.assign ||
        function (t) {
          for (var e = 1; e < arguments.length; e++) {
            var n = arguments[e];
            for (var i in n)
              Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i]);
          }
          return t;
        }).apply(this, arguments);
    }
    function u(t) {
      var e = this,
        n = !1;
      return (
        o.default(this).one(d.TRANSITION_END, function () {
          n = !0;
        }),
        setTimeout(function () {
          n || d.triggerTransitionEnd(e);
        }, t),
        this
      );
    }
    var d = {
      TRANSITION_END: "bsTransitionEnd",
      getUID: function (t) {
        do {
          t += ~~(1e6 * Math.random());
        } while (document.getElementById(t));
        return t;
      },
      getSelectorFromElement: function (t) {
        var e = t.getAttribute("data-target");
        if (!e || "#" === e) {
          var n = t.getAttribute("href");
          e = n && "#" !== n ? n.trim() : "";
        }
        try {
          return document.querySelector(e) ? e : null;
        } catch (t) {
          return null;
        }
      },
      getTransitionDurationFromElement: function (t) {
        if (!t) return 0;
        var e = o.default(t).css("transition-duration"),
          n = o.default(t).css("transition-delay"),
          i = parseFloat(e),
          a = parseFloat(n);
        return i || a
          ? ((e = e.split(",")[0]),
            (n = n.split(",")[0]),
            1e3 * (parseFloat(e) + parseFloat(n)))
          : 0;
      },
      reflow: function (t) {
        return t.offsetHeight;
      },
      triggerTransitionEnd: function (t) {
        o.default(t).trigger("transitionend");
      },
      supportsTransitionEnd: function () {
        return Boolean("transitionend");
      },
      isElement: function (t) {
        return (t[0] || t).nodeType;
      },
      typeCheckConfig: function (t, e, n) {
        for (var i in n)
          if (Object.prototype.hasOwnProperty.call(n, i)) {
            var o = n[i],
              a = e[i],
              s =
                a && d.isElement(a)
                  ? "element"
                  : null === (l = a) || "undefined" == typeof l
                  ? "" + l
                  : {}.toString
                      .call(l)
                      .match(/\s([a-z]+)/i)[1]
                      .toLowerCase();
            if (!new RegExp(o).test(s))
              throw new Error(
                t.toUpperCase() +
                  ': Option "' +
                  i +
                  '" provided type "' +
                  s +
                  '" but expected type "' +
                  o +
                  '".'
              );
          }
        var l;
      },
      findShadowRoot: function (t) {
        if (!document.documentElement.attachShadow) return null;
        if ("function" == typeof t.getRootNode) {
          var e = t.getRootNode();
          return e instanceof ShadowRoot ? e : null;
        }
        return t instanceof ShadowRoot
          ? t
          : t.parentNode
          ? d.findShadowRoot(t.parentNode)
          : null;
      },
      jQueryDetection: function () {
        if ("undefined" == typeof o.default)
          throw new TypeError(
            "Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript."
          );
        var t = o.default.fn.jquery.split(" ")[0].split(".");
        if (
          (t[0] < 2 && t[1] < 9) ||
          (1 === t[0] && 9 === t[1] && t[2] < 1) ||
          t[0] >= 4
        )
          throw new Error(
            "Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0"
          );
      },
    };
    d.jQueryDetection(),
      (o.default.fn.emulateTransitionEnd = u),
      (o.default.event.special[d.TRANSITION_END] = {
        bindType: "transitionend",
        delegateType: "transitionend",
        handle: function (t) {
          if (o.default(t.target).is(this))
            return t.handleObj.handler.apply(this, arguments);
        },
      });
    var f = "alert",
      c = o.default.fn[f],
      h = (function () {
        function t(t) {
          this._element = t;
        }
        var e = t.prototype;
        return (
          (e.close = function (t) {
            var e = this._element;
            t && (e = this._getRootElement(t)),
              this._triggerCloseEvent(e).isDefaultPrevented() ||
                this._removeElement(e);
          }),
          (e.dispose = function () {
            o.default.removeData(this._element, "bs.alert"),
              (this._element = null);
          }),
          (e._getRootElement = function (t) {
            var e = d.getSelectorFromElement(t),
              n = !1;
            return (
              e && (n = document.querySelector(e)),
              n || (n = o.default(t).closest(".alert")[0]),
              n
            );
          }),
          (e._triggerCloseEvent = function (t) {
            var e = o.default.Event("close.bs.alert");
            return o.default(t).trigger(e), e;
          }),
          (e._removeElement = function (t) {
            var e = this;
            if (
              (o.default(t).removeClass("show"), o.default(t).hasClass("fade"))
            ) {
              var n = d.getTransitionDurationFromElement(t);
              o.default(t)
                .one(d.TRANSITION_END, function (n) {
                  return e._destroyElement(t, n);
                })
                .emulateTransitionEnd(n);
            } else this._destroyElement(t);
          }),
          (e._destroyElement = function (t) {
            o.default(t).detach().trigger("closed.bs.alert").remove();
          }),
          (t._jQueryInterface = function (e) {
            return this.each(function () {
              var n = o.default(this),
                i = n.data("bs.alert");
              i || ((i = new t(this)), n.data("bs.alert", i)),
                "close" === e && i[e](this);
            });
          }),
          (t._handleDismiss = function (t) {
            return function (e) {
              e && e.preventDefault(), t.close(this);
            };
          }),
          l(t, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.6.0";
              },
            },
          ]),
          t
        );
      })();
    o
      .default(document)
      .on(
        "click.bs.alert.data-api",
        '[data-dismiss="alert"]',
        h._handleDismiss(new h())
      ),
      (o.default.fn[f] = h._jQueryInterface),
      (o.default.fn[f].Constructor = h),
      (o.default.fn[f].noConflict = function () {
        return (o.default.fn[f] = c), h._jQueryInterface;
      });


    var P = o.default.fn.modal,
      R = { backdrop: !0, keyboard: !0, focus: !0, show: !0 },
      L = {
        backdrop: "(boolean|string)",
        keyboard: "boolean",
        focus: "boolean",
        show: "boolean",
      },
      q = (function () {
        function t(t, e) {
          (this._config = this._getConfig(e)),
            (this._element = t),
            (this._dialog = t.querySelector(".modal-dialog")),
            (this._backdrop = null),
            (this._isShown = !1),
            (this._isBodyOverflowing = !1),
            (this._ignoreBackdropClick = !1),
            (this._isTransitioning = !1),
            (this._scrollbarWidth = 0);
        }
        var e = t.prototype;
        return (
          (e.toggle = function (t) {
            return this._isShown ? this.hide() : this.show(t);
          }),
          (e.show = function (t) {
            var e = this;
            if (!this._isShown && !this._isTransitioning) {
              o.default(this._element).hasClass("fade") &&
                (this._isTransitioning = !0);
              var n = o.default.Event("show.bs.modal", { relatedTarget: t });
              o.default(this._element).trigger(n),
                this._isShown ||
                  n.isDefaultPrevented() ||
                  ((this._isShown = !0),
                  this._checkScrollbar(),
                  this._setScrollbar(),
                  this._adjustDialog(),
                  this._setEscapeEvent(),
                  this._setResizeEvent(),
                  o
                    .default(this._element)
                    .on(
                      "click.dismiss.bs.modal",
                      '[data-dismiss="modal"]',
                      function (t) {
                        return e.hide(t);
                      }
                    ),
                  o
                    .default(this._dialog)
                    .on("mousedown.dismiss.bs.modal", function () {
                      o.default(e._element).one(
                        "mouseup.dismiss.bs.modal",
                        function (t) {
                          o.default(t.target).is(e._element) &&
                            (e._ignoreBackdropClick = !0);
                        }
                      );
                    }),
                  this._showBackdrop(function () {
                    return e._showElement(t);
                  }));
            }
          }),
          (e.hide = function (t) {
            var e = this;
            if (
              (t && t.preventDefault(), this._isShown && !this._isTransitioning)
            ) {
              var n = o.default.Event("hide.bs.modal");
              if (
                (o.default(this._element).trigger(n),
                this._isShown && !n.isDefaultPrevented())
              ) {
                this._isShown = !1;
                var i = o.default(this._element).hasClass("fade");
                if (
                  (i && (this._isTransitioning = !0),
                  this._setEscapeEvent(),
                  this._setResizeEvent(),
                  o.default(document).off("focusin.bs.modal"),
                  o.default(this._element).removeClass("show"),
                  o.default(this._element).off("click.dismiss.bs.modal"),
                  o.default(this._dialog).off("mousedown.dismiss.bs.modal"),
                  i)
                ) {
                  var a = d.getTransitionDurationFromElement(this._element);
                  o.default(this._element)
                    .one(d.TRANSITION_END, function (t) {
                      return e._hideModal(t);
                    })
                    .emulateTransitionEnd(a);
                } else this._hideModal();
              }
            }
          }),
          (e.dispose = function () {
            [window, this._element, this._dialog].forEach(function (t) {
              return o.default(t).off(".bs.modal");
            }),
              o.default(document).off("focusin.bs.modal"),
              o.default.removeData(this._element, "bs.modal"),
              (this._config = null),
              (this._element = null),
              (this._dialog = null),
              (this._backdrop = null),
              (this._isShown = null),
              (this._isBodyOverflowing = null),
              (this._ignoreBackdropClick = null),
              (this._isTransitioning = null),
              (this._scrollbarWidth = null);
          }),
          (e.handleUpdate = function () {
            this._adjustDialog();
          }),
          (e._getConfig = function (t) {
            return (t = r({}, R, t)), d.typeCheckConfig("modal", t, L), t;
          }),
          (e._triggerBackdropTransition = function () {
            var t = this,
              e = o.default.Event("hidePrevented.bs.modal");
            if ((o.default(this._element).trigger(e), !e.isDefaultPrevented())) {
              var n =
                this._element.scrollHeight >
                document.documentElement.clientHeight;
              n || (this._element.style.overflowY = "hidden"),
                this._element.classList.add("modal-static");
              var i = d.getTransitionDurationFromElement(this._dialog);
              o.default(this._element).off(d.TRANSITION_END),
                o
                  .default(this._element)
                  .one(d.TRANSITION_END, function () {
                    t._element.classList.remove("modal-static"),
                      n ||
                        o
                          .default(t._element)
                          .one(d.TRANSITION_END, function () {
                            t._element.style.overflowY = "";
                          })
                          .emulateTransitionEnd(t._element, i);
                  })
                  .emulateTransitionEnd(i),
                this._element.focus();
            }
          }),
          (e._showElement = function (t) {
            var e = this,
              n = o.default(this._element).hasClass("fade"),
              i = this._dialog ? this._dialog.querySelector(".modal-body") : null;
            (this._element.parentNode &&
              this._element.parentNode.nodeType === Node.ELEMENT_NODE) ||
              document.body.appendChild(this._element),
              (this._element.style.display = "block"),
              this._element.removeAttribute("aria-hidden"),
              this._element.setAttribute("aria-modal", !0),
              this._element.setAttribute("role", "dialog"),
              o.default(this._dialog).hasClass("modal-dialog-scrollable") && i
                ? (i.scrollTop = 0)
                : (this._element.scrollTop = 0),
              n && d.reflow(this._element),
              o.default(this._element).addClass("show"),
              this._config.focus && this._enforceFocus();
            var a = o.default.Event("shown.bs.modal", { relatedTarget: t }),
              s = function () {
                e._config.focus && e._element.focus(),
                  (e._isTransitioning = !1),
                  o.default(e._element).trigger(a);
              };
            if (n) {
              var l = d.getTransitionDurationFromElement(this._dialog);
              o.default(this._dialog)
                .one(d.TRANSITION_END, s)
                .emulateTransitionEnd(l);
            } else s();
          }),
          (e._enforceFocus = function () {
            var t = this;
            o.default(document)
              .off("focusin.bs.modal")
              .on("focusin.bs.modal", function (e) {
                document !== e.target &&
                  t._element !== e.target &&
                  0 === o.default(t._element).has(e.target).length &&
                  t._element.focus();
              });
          }),
          (e._setEscapeEvent = function () {
            var t = this;
            this._isShown
              ? o
                  .default(this._element)
                  .on("keydown.dismiss.bs.modal", function (e) {
                    t._config.keyboard && 27 === e.which
                      ? (e.preventDefault(), t.hide())
                      : t._config.keyboard ||
                        27 !== e.which ||
                        t._triggerBackdropTransition();
                  })
              : this._isShown ||
                o.default(this._element).off("keydown.dismiss.bs.modal");
          }),
          (e._setResizeEvent = function () {
            var t = this;
            this._isShown
              ? o.default(window).on("resize.bs.modal", function (e) {
                  return t.handleUpdate(e);
                })
              : o.default(window).off("resize.bs.modal");
          }),
          (e._hideModal = function () {
            var t = this;
            (this._element.style.display = "none"),
              this._element.setAttribute("aria-hidden", !0),
              this._element.removeAttribute("aria-modal"),
              this._element.removeAttribute("role"),
              (this._isTransitioning = !1),
              this._showBackdrop(function () {
                o.default(document.body).removeClass("modal-open"),
                  t._resetAdjustments(),
                  t._resetScrollbar(),
                  o.default(t._element).trigger("hidden.bs.modal");
              });
          }),
          (e._removeBackdrop = function () {
            this._backdrop &&
              (o.default(this._backdrop).remove(), (this._backdrop = null));
          }),
          (e._showBackdrop = function (t) {
            var e = this,
              n = o.default(this._element).hasClass("fade") ? "fade" : "";
            if (this._isShown && this._config.backdrop) {
              if (
                ((this._backdrop = document.createElement("div")),
                (this._backdrop.className = "modal-backdrop"),
                n && this._backdrop.classList.add(n),
                o.default(this._backdrop).appendTo(document.body),
                o
                  .default(this._element)
                  .on("click.dismiss.bs.modal", function (t) {
                    e._ignoreBackdropClick
                      ? (e._ignoreBackdropClick = !1)
                      : t.target === t.currentTarget &&
                        ("static" === e._config.backdrop
                          ? e._triggerBackdropTransition()
                          : e.hide());
                  }),
                n && d.reflow(this._backdrop),
                o.default(this._backdrop).addClass("show"),
                !t)
              )
                return;
              if (!n) return void t();
              var i = d.getTransitionDurationFromElement(this._backdrop);
              o.default(this._backdrop)
                .one(d.TRANSITION_END, t)
                .emulateTransitionEnd(i);
            } else if (!this._isShown && this._backdrop) {
              o.default(this._backdrop).removeClass("show");
              var a = function () {
                e._removeBackdrop(), t && t();
              };
              if (o.default(this._element).hasClass("fade")) {
                var s = d.getTransitionDurationFromElement(this._backdrop);
                o.default(this._backdrop)
                  .one(d.TRANSITION_END, a)
                  .emulateTransitionEnd(s);
              } else a();
            } else t && t();
          }),
          (e._adjustDialog = function () {
            var t =
              this._element.scrollHeight > document.documentElement.clientHeight;
            !this._isBodyOverflowing &&
              t &&
              (this._element.style.paddingLeft = this._scrollbarWidth + "px"),
              this._isBodyOverflowing &&
                !t &&
                (this._element.style.paddingRight = this._scrollbarWidth + "px");
          }),
          (e._resetAdjustments = function () {
            (this._element.style.paddingLeft = ""),
              (this._element.style.paddingRight = "");
          }),
          (e._checkScrollbar = function () {
            var t = document.body.getBoundingClientRect();
            (this._isBodyOverflowing =
              Math.round(t.left + t.right) < window.innerWidth),
              (this._scrollbarWidth = this._getScrollbarWidth());
          }),
          (e._setScrollbar = function () {
            var t = this;
            if (this._isBodyOverflowing) {
              var e = [].slice.call(
                  document.querySelectorAll(
                    ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top"
                  )
                ),
                n = [].slice.call(document.querySelectorAll(".sticky-top"));
              o.default(e).each(function (e, n) {
                var i = n.style.paddingRight,
                  a = o.default(n).css("padding-right");
                o.default(n)
                  .data("padding-right", i)
                  .css("padding-right", parseFloat(a) + t._scrollbarWidth + "px");
              }),
                o.default(n).each(function (e, n) {
                  var i = n.style.marginRight,
                    a = o.default(n).css("margin-right");
                  o.default(n)
                    .data("margin-right", i)
                    .css(
                      "margin-right",
                      parseFloat(a) - t._scrollbarWidth + "px"
                    );
                });
              var i = document.body.style.paddingRight,
                a = o.default(document.body).css("padding-right");
              o.default(document.body)
                .data("padding-right", i)
                .css(
                  "padding-right",
                  parseFloat(a) + this._scrollbarWidth + "px"
                );
            }
            o.default(document.body).addClass("modal-open");
          }),
          (e._resetScrollbar = function () {
            var t = [].slice.call(
              document.querySelectorAll(
                ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top"
              )
            );
            o.default(t).each(function (t, e) {
              var n = o.default(e).data("padding-right");
              o.default(e).removeData("padding-right"),
                (e.style.paddingRight = n || "");
            });
            var e = [].slice.call(document.querySelectorAll(".sticky-top"));
            o.default(e).each(function (t, e) {
              var n = o.default(e).data("margin-right");
              "undefined" != typeof n &&
                o.default(e).css("margin-right", n).removeData("margin-right");
            });
            var n = o.default(document.body).data("padding-right");
            o.default(document.body).removeData("padding-right"),
              (document.body.style.paddingRight = n || "");
          }),
          (e._getScrollbarWidth = function () {
            var t = document.createElement("div");
            (t.className = "modal-scrollbar-measure"),
              document.body.appendChild(t);
            var e = t.getBoundingClientRect().width - t.clientWidth;
            return document.body.removeChild(t), e;
          }),
          (t._jQueryInterface = function (e, n) {
            return this.each(function () {
              var i = o.default(this).data("bs.modal"),
                a = r(
                  {},
                  R,
                  o.default(this).data(),
                  "object" == typeof e && e ? e : {}
                );
              if (
                (i || ((i = new t(this, a)), o.default(this).data("bs.modal", i)),
                "string" == typeof e)
              ) {
                if ("undefined" == typeof i[e])
                  throw new TypeError('No method named "' + e + '"');
                i[e](n);
              } else a.show && i.show(n);
            });
          }),
          l(t, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.6.0";
              },
            },
            {
              key: "Default",
              get: function () {
                return R;
              },
            },
          ]),
          t
        );
      })();
    o
      .default(document)
      .on("click.bs.modal.data-api", '[data-toggle="modal"]', function (t) {
        var e,
          n = this,
          i = d.getSelectorFromElement(this);
        i && (e = document.querySelector(i));
        var a = o.default(e).data("bs.modal")
          ? "toggle"
          : r({}, o.default(e).data(), o.default(this).data());
        ("A" !== this.tagName && "AREA" !== this.tagName) || t.preventDefault();
        var s = o.default(e).one("show.bs.modal", function (t) {
          t.isDefaultPrevented() ||
            s.one("hidden.bs.modal", function () {
              o.default(n).is(":visible") && n.focus();
            });
        });
        q._jQueryInterface.call(o.default(e), a, this);
      }),
      (o.default.fn.modal = q._jQueryInterface),
      (o.default.fn.modal.Constructor = q),
      (o.default.fn.modal.noConflict = function () {
        return (o.default.fn.modal = P), q._jQueryInterface;
      });

      (t.Alert = h),
      (t.Button = m),
      (t.Carousel = w),
      (t.Collapse = D),
      (t.Dropdown = x),
      (t.Modal = q),
      (t.Popover = ot),
      (t.Scrollspy = ut),
      (t.Tab = ft),
      (t.Toast = mt),
      (t.Tooltip = J),
      (t.Util = d),
      Object.defineProperty(t, "__esModule", { value: !0 });
  });
  
  
  