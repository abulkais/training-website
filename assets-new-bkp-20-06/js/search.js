!(function (a, b) {
    "object" == typeof module && "object" == typeof module.exports
      ? (module.exports = a.document
          ? b(a, !0)
          : function (a) {
              if (!a.document)
                throw new Error("jQuery requires a window with a document");
              return b(a);
            })
      : b(a);
  })
  // ("" != typeof window ? window : this, function (a, b) {
  //   var c = [],
  //     d = c.slice,
  //     e = c.concat,
  //     f = c.push,
  //     g = c.indexOf,
  //     h = {},
  //     i = h.toString,
  //     j = h.hasOwnProperty,
  //     k = {},
  //     l = "1.11.2",
  //     m = function (a, b) {
  //       return new m.fn.init(a, b);
  //     },
  //     n = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
  //     o = /^-ms-/,
  //     p = /-([\da-z])/gi,
  //     q = function (a, b) {
  //       return b.toUpperCase();
  //     };
  //   (m.fn = m.prototype =
  //     {
  //       jquery: l,
  //       constructor: m,
  //       selector: "",
  //       length: 0,
  //       toArray: function () {
  //         return d.call(this);
  //       },
  //       get: function (a) {
  //         return null != a
  //           ? 0 > a
  //             ? this[a + this.length]
  //             : this[a]
  //           : d.call(this);
  //       },
  //       pushStack: function (a) {
  //         var b = m.merge(this.constructor(), a);
  //         return (b.prevObject = this), (b.context = this.context), b;
  //       },
  //       each: function (a, b) {
  //         return m.each(this, a, b);
  //       },
  //       map: function (a) {
  //         return this.pushStack(
  //           m.map(this, function (b, c) {
  //             return a.call(b, c, b);
  //           })
  //         );
  //       },
  //       slice: function () {
  //         return this.pushStack(d.apply(this, arguments));
  //       },
  //       first: function () {
  //         return this.eq(0);
  //       },
  //       last: function () {
  //         return this.eq(-1);
  //       },
  //       eq: function (a) {
  //         var b = this.length,
  //           c = +a + (0 > a ? b : 0);
  //         return this.pushStack(c >= 0 && b > c ? [this[c]] : []);
  //       },
  //       end: function () {
  //         return this.prevObject || this.constructor(null);
  //       },
  //       push: f,
  //       sort: c.sort,
  //       splice: c.splice,
  //     }),
  //     (m.extend = m.fn.extend =
  //       function () {
  //         var a,
  //           b,
  //           c,
  //           d,
  //           e,
  //           f,
  //           g = arguments[0] || {},
  //           h = 1,
  //           i = arguments.length,
  //           j = !1;
  //         for (
  //           "boolean" == typeof g && ((j = g), (g = arguments[h] || {}), h++),
  //             "object" == typeof g || m.isFunction(g) || (g = {}),
  //             h === i && ((g = this), h--);
  //           i > h;
  //           h++
  //         )
  //           if (null != (e = arguments[h]))
  //             for (d in e)
  //               (a = g[d]),
  //                 (c = e[d]),
  //                 g !== c &&
  //                   (j && c && (m.isPlainObject(c) || (b = m.isArray(c)))
  //                     ? (b
  //                         ? ((b = !1), (f = a && m.isArray(a) ? a : []))
  //                         : (f = a && m.isPlainObject(a) ? a : {}),
  //                       (g[d] = m.extend(j, f, c)))
  //                     : void 0 !== c && (g[d] = c));
  //         return g;
  //       }),
  //     m.extend({
  //       expando: "jQuery" + (l + Math.random()).replace(/\D/g, ""),
  //       isReady: !0,
  //       error: function (a) {
  //         throw new Error(a);
  //       },
  //       noop: function () {},
  //       isFunction: function (a) {
  //         return "function" === m.type(a);
  //       },
  //       isArray:
  //         Array.isArray ||
  //         function (a) {
  //           return "array" === m.type(a);
  //         },
  //       isWindow: function (a) {
  //         return null != a && a == a.window;
  //       },
  //       isNumeric: function (a) {
  //         return !m.isArray(a) && a - parseFloat(a) + 1 >= 0;
  //       },
  //       isEmptyObject: function (a) {
  //         var b;
  //         for (b in a) return !1;
  //         return !0;
  //       },
  //       isPlainObject: function (a) {
  //         var b;
  //         if (!a || "object" !== m.type(a) || a.nodeType || m.isWindow(a))
  //           return !1;
  //         try {
  //           if (
  //             a.constructor &&
  //             !j.call(a, "constructor") &&
  //             !j.call(a.constructor.prototype, "isPrototypeOf")
  //           )
  //             return !1;
  //         } catch (c) {
  //           return !1;
  //         }
  //         if (k.ownLast) for (b in a) return j.call(a, b);
  //         for (b in a);
  //         return void 0 === b || j.call(a, b);
  //       },
  //       type: function (a) {
  //         return null == a
  //           ? a + ""
  //           : "object" == typeof a || "function" == typeof a
  //           ? h[i.call(a)] || "object"
  //           : typeof a;
  //       },
  //       globalEval: function (b) {
  //         b &&
  //           m.trim(b) &&
  //           (
  //             a.execScript ||
  //             function (b) {
  //               a.eval.call(a, b);
  //             }
  //           )(b);
  //       },
  //       camelCase: function (a) {
  //         return a.replace(o, "ms-").replace(p, q);
  //       },
  //       nodeName: function (a, b) {
  //         return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase();
  //       },
  //       each: function (a, b, c) {
  //         var d,
  //           e = 0,
  //           f = a.length,
  //           g = r(a);
  //         if (c) {
  //           if (g) {
  //             for (; f > e; e++) if (((d = b.apply(a[e], c)), d === !1)) break;
  //           } else for (e in a) if (((d = b.apply(a[e], c)), d === !1)) break;
  //         } else if (g) {
  //           for (; f > e; e++) if (((d = b.call(a[e], e, a[e])), d === !1)) break;
  //         } else for (e in a) if (((d = b.call(a[e], e, a[e])), d === !1)) break;
  //         return a;
  //       },
  //       trim: function (a) {
  //         return null == a ? "" : (a + "").replace(n, "");
  //       },
  //       makeArray: function (a, b) {
  //         var c = b || [];
  //         return (
  //           null != a &&
  //             (r(Object(a))
  //               ? m.merge(c, "string" == typeof a ? [a] : a)
  //               : f.call(c, a)),
  //           c
  //         );
  //       },
  //       inArray: function (a, b, c) {
  //         var d;
  //         if (b) {
  //           if (g) return g.call(b, a, c);
  //           for (
  //             d = b.length, c = c ? (0 > c ? Math.max(0, d + c) : c) : 0;
  //             d > c;
  //             c++
  //           )
  //             if (c in b && b[c] === a) return c;
  //         }
  //         return -1;
  //       },
  //       merge: function (a, b) {
  //         var c = +b.length,
  //           d = 0,
  //           e = a.length;
  //         while (c > d) a[e++] = b[d++];
  //         if (c !== c) while (void 0 !== b[d]) a[e++] = b[d++];
  //         return (a.length = e), a;
  //       },
  //       grep: function (a, b, c) {
  //         for (var d, e = [], f = 0, g = a.length, h = !c; g > f; f++)
  //           (d = !b(a[f], f)), d !== h && e.push(a[f]);
  //         return e;
  //       },
  //       map: function (a, b, c) {
  //         var d,
  //           f = 0,
  //           g = a.length,
  //           h = r(a),
  //           i = [];
  //         if (h) for (; g > f; f++) (d = b(a[f], f, c)), null != d && i.push(d);
  //         else for (f in a) (d = b(a[f], f, c)), null != d && i.push(d);
  //         return e.apply([], i);
  //       },
  //       guid: 1,
  //       proxy: function (a, b) {
  //         var c, e, f;
  //         return (
  //           "string" == typeof b && ((f = a[b]), (b = a), (a = f)),
  //           m.isFunction(a)
  //             ? ((c = d.call(arguments, 2)),
  //               (e = function () {
  //                 return a.apply(b || this, c.concat(d.call(arguments)));
  //               }),
  //               (e.guid = a.guid = a.guid || m.guid++),
  //               e)
  //             : void 0
  //         );
  //       },
  //       now: function () {
  //         return +new Date();
  //       },
  //       support: k,
  //     }),
  //     m.each(
  //       "Boolean Number String Function Array Date RegExp Object Error".split(
  //         " "
  //       ),
  //       function (a, b) {
  //         h["[object " + b + "]"] = b.toLowerCase();
  //       }
  //     );
  //   function r(a) {
  //     var b = a.length,
  //       c = m.type(a);
  //     return "function" === c || m.isWindow(a)
  //       ? !1
  //       : 1 === a.nodeType && b
  //       ? !0
  //       : "array" === c ||
  //         0 === b ||
  //         ("number" == typeof b && b > 0 && b - 1 in a);
  //   }
  //   var s = (function (a) {
  //     var b,
  //       c,
  //       d,
  //       e,
  //       f,
  //       g,
  //       h,
  //       i,
  //       j,
  //       k,
  //       l,
  //       m,
  //       n,
  //       o,
  //       p,
  //       q,
  //       r,
  //       s,
  //       t,
  //       u = "sizzle" + 1 * new Date(),
  //       v = a.document,
  //       w = 0,
  //       x = 0,
  //       y = hb(),
  //       z = hb(),
  //       A = hb(),
  //       B = function (a, b) {
  //         return a === b && (l = !0), 0;
  //       },
  //       C = 1 << 31,
  //       D = {}.hasOwnProperty,
  //       E = [],
  //       F = E.pop,
  //       G = E.push,
  //       H = E.push,
  //       I = E.slice,
  //       J = function (a, b) {
  //         for (var c = 0, d = a.length; d > c; c++) if (a[c] === b) return c;
  //         return -1;
  //       },
  //       K =
  //         "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
  //       L = "[\\x20\\t\\r\\n\\f]",
  //       M = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
  //       N = M.replace("w", "w#"),
  //       O =
  //         "\\[" +
  //         L +
  //         "*(" +
  //         M +
  //         ")(?:" +
  //         L +
  //         "*([*^$|!~]?=)" +
  //         L +
  //         "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" +
  //         N +
  //         "))|)" +
  //         L +
  //         "*\\]",
  //       P =
  //         ":(" +
  //         M +
  //         ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" +
  //         O +
  //         ")*)|.*)\\)|)",
  //       Q = new RegExp(L + "+", "g"),
  //       R = new RegExp("^" + L + "+|((?:^|[^\\\\])(?:\\\\.)*)" + L + "+$", "g"),
  //       S = new RegExp("^" + L + "*," + L + "*"),
  //       T = new RegExp("^" + L + "*([>+~]|" + L + ")" + L + "*"),
  //       U = new RegExp("=" + L + "*([^\\]'\"]*?)" + L + "*\\]", "g"),
  //       V = new RegExp(P),
  //       W = new RegExp("^" + N + "$"),
  //       X = {
  //         ID: new RegExp("^#(" + M + ")"),
  //         CLASS: new RegExp("^\\.(" + M + ")"),
  //         TAG: new RegExp("^(" + M.replace("w", "w*") + ")"),
  //         ATTR: new RegExp("^" + O),
  //         PSEUDO: new RegExp("^" + P),
  //         CHILD: new RegExp(
  //           "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" +
  //             L +
  //             "*(even|odd|(([+-]|)(\\d*)n|)" +
  //             L +
  //             "*(?:([+-]|)" +
  //             L +
  //             "*(\\d+)|))" +
  //             L +
  //             "*\\)|)",
  //           "i"
  //         ),
  //         bool: new RegExp("^(?:" + K + ")$", "i"),
  //         needsContext: new RegExp(
  //           "^" +
  //             L +
  //             "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +
  //             L +
  //             "*((?:-\\d)?\\d*)" +
  //             L +
  //             "*\\)|)(?=[^-]|$)",
  //           "i"
  //         ),
  //       },
  //       Y = /^(?:input|select|textarea|button)$/i,
  //       Z = /^h\d$/i,
  //       $ = /^[^{]+\{\s*\[native \w/,
  //       _ = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
  //       ab = /[+~]/,
  //       bb = /'|\\/g,
  //       cb = new RegExp("\\\\([\\da-f]{1,6}" + L + "?|(" + L + ")|.)", "ig"),
  //       db = function (a, b, c) {
  //         var d = "0x" + b - 65536;
  //         return d !== d || c
  //           ? b
  //           : 0 > d
  //           ? String.fromCharCode(d + 65536)
  //           : String.fromCharCode((d >> 10) | 55296, (1023 & d) | 56320);
  //       },
  //       eb = function () {
  //         m();
  //       };
  //     try {
  //       H.apply((E = I.call(v.childNodes)), v.childNodes),
  //         E[v.childNodes.length].nodeType;
  //     } catch (fb) {
  //       H = {
  //         apply: E.length
  //           ? function (a, b) {
  //               G.apply(a, I.call(b));
  //             }
  //           : function (a, b) {
  //               var c = a.length,
  //                 d = 0;
  //               while ((a[c++] = b[d++]));
  //               a.length = c - 1;
  //             },
  //       };
  //     }
  //     function gb(a, b, d, e) {
  //       var f, h, j, k, l, o, r, s, w, x;
  //       if (
  //         ((b ? b.ownerDocument || b : v) !== n && m(b),
  //         (b = b || n),
  //         (d = d || []),
  //         (k = b.nodeType),
  //         "string" != typeof a || !a || (1 !== k && 9 !== k && 11 !== k))
  //       )
  //         return d;
  //       if (!e && p) {
  //         if (11 !== k && (f = _.exec(a)))
  //           if ((j = f[1])) {
  //             if (9 === k) {
  //               if (((h = b.getElementById(j)), !h || !h.parentNode)) return d;
  //               if (h.id === j) return d.push(h), d;
  //             } else if (
  //               b.ownerDocument &&
  //               (h = b.ownerDocument.getElementById(j)) &&
  //               t(b, h) &&
  //               h.id === j
  //             )
  //               return d.push(h), d;
  //           } else {
  //             if (f[2]) return H.apply(d, b.getElementsByTagName(a)), d;
  //             if ((j = f[3]) && c.getElementsByClassName)
  //               return H.apply(d, b.getElementsByClassName(j)), d;
  //           }
  //         if (c.qsa && (!q || !q.test(a))) {
  //           if (
  //             ((s = r = u),
  //             (w = b),
  //             (x = 1 !== k && a),
  //             1 === k && "object" !== b.nodeName.toLowerCase())
  //           ) {
  //             (o = g(a)),
  //               (r = b.getAttribute("id"))
  //                 ? (s = r.replace(bb, "\\$&"))
  //                 : b.setAttribute("id", s),
  //               (s = "[id='" + s + "'] "),
  //               (l = o.length);
  //             while (l--) o[l] = s + rb(o[l]);
  //             (w = (ab.test(a) && pb(b.parentNode)) || b), (x = o.join(","));
  //           }
  //           if (x)
  //             try {
  //               return H.apply(d, w.querySelectorAll(x)), d;
  //             } catch (y) {
  //             } finally {
  //               r || b.removeAttribute("id");
  //             }
  //         }
  //       }
  //       return i(a.replace(R, "$1"), b, d, e);
  //     }
  //     function hb() {
  //       var a = [];
  //       function b(c, e) {
  //         return (
  //           a.push(c + " ") > d.cacheLength && delete b[a.shift()],
  //           (b[c + " "] = e)
  //         );
  //       }
  //       return b;
  //     }
  //     function ib(a) {
  //       return (a[u] = !0), a;
  //     }
  //     function jb(a) {
  //       var b = n.createElement("div");
  //       try {
  //         return !!a(b);
  //       } catch (c) {
  //         return !1;
  //       } finally {
  //         b.parentNode && b.parentNode.removeChild(b), (b = null);
  //       }
  //     }
  //     function kb(a, b) {
  //       var c = a.split("|"),
  //         e = a.length;
  //       while (e--) d.attrHandle[c[e]] = b;
  //     }
  //     function lb(a, b) {
  //       var c = b && a,
  //         d =
  //           c &&
  //           1 === a.nodeType &&
  //           1 === b.nodeType &&
  //           (~b.sourceIndex || C) - (~a.sourceIndex || C);
  //       if (d) return d;
  //       if (c) while ((c = c.nextSibling)) if (c === b) return -1;
  //       return a ? 1 : -1;
  //     }
  //     function mb(a) {
  //       return function (b) {
  //         var c = b.nodeName.toLowerCase();
  //         return "input" === c && b.type === a;
  //       };
  //     }
  //     function nb(a) {
  //       return function (b) {
  //         var c = b.nodeName.toLowerCase();
  //         return ("input" === c || "button" === c) && b.type === a;
  //       };
  //     }
  //     function ob(a) {
  //       return ib(function (b) {
  //         return (
  //           (b = +b),
  //           ib(function (c, d) {
  //             var e,
  //               f = a([], c.length, b),
  //               g = f.length;
  //             while (g--) c[(e = f[g])] && (c[e] = !(d[e] = c[e]));
  //           })
  //         );
  //       });
  //     }
  //     function pb(a) {
  //       return a && "undefined" != typeof a.getElementsByTagName && a;
  //     }
  //     (c = gb.support = {}),
  //       (f = gb.isXML =
  //         function (a) {
  //           var b = a && (a.ownerDocument || a).documentElement;
  //           return b ? "HTML" !== b.nodeName : !1;
  //         }),
  //       (m = gb.setDocument =
  //         function (a) {
  //           var b,
  //             e,
  //             g = a ? a.ownerDocument || a : v;
  //           return g !== n && 9 === g.nodeType && g.documentElement
  //             ? ((n = g),
  //               (o = g.documentElement),
  //               (e = g.defaultView),
  //               e &&
  //                 e !== e.top &&
  //                 (e.addEventListener
  //                   ? e.addEventListener("unload", eb, !1)
  //                   : e.attachEvent && e.attachEvent("onunload", eb)),
  //               (p = !f(g)),
  //               (c.attributes = jb(function (a) {
  //                 return (a.className = "i"), !a.getAttribute("className");
  //               })),
  //               (c.getElementsByTagName = jb(function (a) {
  //                 return (
  //                   a.appendChild(g.createComment("")),
  //                   !a.getElementsByTagName("*").length
  //                 );
  //               })),
  //               (c.getElementsByClassName = $.test(g.getElementsByClassName)),
  //               (c.getById = jb(function (a) {
  //                 return (
  //                   (o.appendChild(a).id = u),
  //                   !g.getElementsByName || !g.getElementsByName(u).length
  //                 );
  //               })),
  //               c.getById
  //                 ? ((d.find.ID = function (a, b) {
  //                     if ("undefined" != typeof b.getElementById && p) {
  //                       var c = b.getElementById(a);
  //                       return c && c.parentNode ? [c] : [];
  //                     }
  //                   }),
  //                   (d.filter.ID = function (a) {
  //                     var b = a.replace(cb, db);
  //                     return function (a) {
  //                       return a.getAttribute("id") === b;
  //                     };
  //                   }))
  //                 : (delete d.find.ID,
  //                   (d.filter.ID = function (a) {
  //                     var b = a.replace(cb, db);
  //                     return function (a) {
  //                       var c =
  //                         "undefined" != typeof a.getAttributeNode &&
  //                         a.getAttributeNode("id");
  //                       return c && c.value === b;
  //                     };
  //                   })),
  //               (d.find.TAG = c.getElementsByTagName
  //                 ? function (a, b) {
  //                     return "undefined" != typeof b.getElementsByTagName
  //                       ? b.getElementsByTagName(a)
  //                       : c.qsa
  //                       ? b.querySelectorAll(a)
  //                       : void 0;
  //                   }
  //                 : function (a, b) {
  //                     var c,
  //                       d = [],
  //                       e = 0,
  //                       f = b.getElementsByTagName(a);
  //                     if ("*" === a) {
  //                       while ((c = f[e++])) 1 === c.nodeType && d.push(c);
  //                       return d;
  //                     }
  //                     return f;
  //                   }),
  //               (d.find.CLASS =
  //                 c.getElementsByClassName &&
  //                 function (a, b) {
  //                   return p ? b.getElementsByClassName(a) : void 0;
  //                 }),
  //               (r = []),
  //               (q = []),
  //               (c.qsa = $.test(g.querySelectorAll)) &&
  //                 (jb(function (a) {
  //                   (o.appendChild(a).innerHTML =
  //                     "<a id='" +
  //                     u +
  //                     "'></a><select id='" +
  //                     u +
  //                     "-\f]' msallowcapture=''><option selected=''></option></select>"),
  //                     a.querySelectorAll("[msallowcapture^='']").length &&
  //                       q.push("[*^$]=" + L + "*(?:''|\"\")"),
  //                     a.querySelectorAll("[selected]").length ||
  //                       q.push("\\[" + L + "*(?:value|" + K + ")"),
  //                     a.querySelectorAll("[id~=" + u + "-]").length ||
  //                       q.push("~="),
  //                     a.querySelectorAll(":checked").length || q.push(":checked"),
  //                     a.querySelectorAll("a#" + u + "+*").length ||
  //                       q.push(".#.+[+~]");
  //                 }),
  //                 jb(function (a) {
  //                   var b = g.createElement("input");
  //                   b.setAttribute("type", "hidden"),
  //                     a.appendChild(b).setAttribute("name", "D"),
  //                     a.querySelectorAll("[name=d]").length &&
  //                       q.push("name" + L + "*[*^$|!~]?="),
  //                     a.querySelectorAll(":enabled").length ||
  //                       q.push(":enabled", ":disabled"),
  //                     a.querySelectorAll("*,:x"),
  //                     q.push(",.*:");
  //                 })),
  //               (c.matchesSelector = $.test(
  //                 (s =
  //                   o.matches ||
  //                   o.webkitMatchesSelector ||
  //                   o.mozMatchesSelector ||
  //                   o.oMatchesSelector ||
  //                   o.msMatchesSelector)
  //               )) &&
  //                 jb(function (a) {
  //                   (c.disconnectedMatch = s.call(a, "div")),
  //                     s.call(a, "[s!='']:x"),
  //                     r.push("!=", P);
  //                 }),
  //               (q = q.length && new RegExp(q.join("|"))),
  //               (r = r.length && new RegExp(r.join("|"))),
  //               (b = $.test(o.compareDocumentPosition)),
  //               (t =
  //                 b || $.test(o.contains)
  //                   ? function (a, b) {
  //                       var c = 9 === a.nodeType ? a.documentElement : a,
  //                         d = b && b.parentNode;
  //                       return (
  //                         a === d ||
  //                         !(
  //                           !d ||
  //                           1 !== d.nodeType ||
  //                           !(c.contains
  //                             ? c.contains(d)
  //                             : a.compareDocumentPosition &&
  //                               16 & a.compareDocumentPosition(d))
  //                         )
  //                       );
  //                     }
  //                   : function (a, b) {
  //                       if (b) while ((b = b.parentNode)) if (b === a) return !0;
  //                       return !1;
  //                     }),
  //               (B = b
  //                 ? function (a, b) {
  //                     if (a === b) return (l = !0), 0;
  //                     var d =
  //                       !a.compareDocumentPosition - !b.compareDocumentPosition;
  //                     return d
  //                       ? d
  //                       : ((d =
  //                           (a.ownerDocument || a) === (b.ownerDocument || b)
  //                             ? a.compareDocumentPosition(b)
  //                             : 1),
  //                         1 & d ||
  //                         (!c.sortDetached && b.compareDocumentPosition(a) === d)
  //                           ? a === g || (a.ownerDocument === v && t(v, a))
  //                             ? -1
  //                             : b === g || (b.ownerDocument === v && t(v, b))
  //                             ? 1
  //                             : k
  //                             ? J(k, a) - J(k, b)
  //                             : 0
  //                           : 4 & d
  //                           ? -1
  //                           : 1);
  //                   }
  //                 : function (a, b) {
  //                     if (a === b) return (l = !0), 0;
  //                     var c,
  //                       d = 0,
  //                       e = a.parentNode,
  //                       f = b.parentNode,
  //                       h = [a],
  //                       i = [b];
  //                     if (!e || !f)
  //                       return a === g
  //                         ? -1
  //                         : b === g
  //                         ? 1
  //                         : e
  //                         ? -1
  //                         : f
  //                         ? 1
  //                         : k
  //                         ? J(k, a) - J(k, b)
  //                         : 0;
  //                     if (e === f) return lb(a, b);
  //                     c = a;
  //                     while ((c = c.parentNode)) h.unshift(c);
  //                     c = b;
  //                     while ((c = c.parentNode)) i.unshift(c);
  //                     while (h[d] === i[d]) d++;
  //                     return d
  //                       ? lb(h[d], i[d])
  //                       : h[d] === v
  //                       ? -1
  //                       : i[d] === v
  //                       ? 1
  //                       : 0;
  //                   }),
  //               g)
  //             : n;
  //         }),
  //       (gb.matches = function (a, b) {
  //         return gb(a, null, null, b);
  //       }),
  //       (gb.matchesSelector = function (a, b) {
  //         if (
  //           ((a.ownerDocument || a) !== n && m(a),
  //           (b = b.replace(U, "='$1']")),
  //           !(!c.matchesSelector || !p || (r && r.test(b)) || (q && q.test(b))))
  //         )
  //           try {
  //             var d = s.call(a, b);
  //             if (
  //               d ||
  //               c.disconnectedMatch ||
  //               (a.document && 11 !== a.document.nodeType)
  //             )
  //               return d;
  //           } catch (e) {}
  //         return gb(b, n, null, [a]).length > 0;
  //       }),
  //       (gb.contains = function (a, b) {
  //         return (a.ownerDocument || a) !== n && m(a), t(a, b);
  //       }),
  //       (gb.attr = function (a, b) {
  //         (a.ownerDocument || a) !== n && m(a);
  //         var e = d.attrHandle[b.toLowerCase()],
  //           f = e && D.call(d.attrHandle, b.toLowerCase()) ? e(a, b, !p) : void 0;
  //         return void 0 !== f
  //           ? f
  //           : c.attributes || !p
  //           ? a.getAttribute(b)
  //           : (f = a.getAttributeNode(b)) && f.specified
  //           ? f.value
  //           : null;
  //       }),
  //       (gb.error = function (a) {
  //         throw new Error("Syntax error, unrecognized expression: " + a);
  //       }),
  //       (gb.uniqueSort = function (a) {
  //         var b,
  //           d = [],
  //           e = 0,
  //           f = 0;
  //         if (
  //           ((l = !c.detectDuplicates),
  //           (k = !c.sortStable && a.slice(0)),
  //           a.sort(B),
  //           l)
  //         ) {
  //           while ((b = a[f++])) b === a[f] && (e = d.push(f));
  //           while (e--) a.splice(d[e], 1);
  //         }
  //         return (k = null), a;
  //       }),
  //       (e = gb.getText =
  //         function (a) {
  //           var b,
  //             c = "",
  //             d = 0,
  //             f = a.nodeType;
  //           if (f) {
  //             if (1 === f || 9 === f || 11 === f) {
  //               if ("string" == typeof a.textContent) return a.textContent;
  //               for (a = a.firstChild; a; a = a.nextSibling) c += e(a);
  //             } else if (3 === f || 4 === f) return a.nodeValue;
  //           } else while ((b = a[d++])) c += e(b);
  //           return c;
  //         }),
  //       (d = gb.selectors =
  //         {
  //           cacheLength: 50,
  //           createPseudo: ib,
  //           match: X,
  //           attrHandle: {},
  //           find: {},
  //           relative: {
  //             ">": { dir: "parentNode", first: !0 },
  //             " ": { dir: "parentNode" },
  //             "+": { dir: "previousSibling", first: !0 },
  //             "~": { dir: "previousSibling" },
  //           },
  //           preFilter: {
  //             ATTR: function (a) {
  //               return (
  //                 (a[1] = a[1].replace(cb, db)),
  //                 (a[3] = (a[3] || a[4] || a[5] || "").replace(cb, db)),
  //                 "~=" === a[2] && (a[3] = " " + a[3] + " "),
  //                 a.slice(0, 4)
  //               );
  //             },
  //             CHILD: function (a) {
  //               return (
  //                 (a[1] = a[1].toLowerCase()),
  //                 "nth" === a[1].slice(0, 3)
  //                   ? (a[3] || gb.error(a[0]),
  //                     (a[4] = +(a[4]
  //                       ? a[5] + (a[6] || 1)
  //                       : 2 * ("even" === a[3] || "odd" === a[3]))),
  //                     (a[5] = +(a[7] + a[8] || "odd" === a[3])))
  //                   : a[3] && gb.error(a[0]),
  //                 a
  //               );
  //             },
  //             PSEUDO: function (a) {
  //               var b,
  //                 c = !a[6] && a[2];
  //               return X.CHILD.test(a[0])
  //                 ? null
  //                 : (a[3]
  //                     ? (a[2] = a[4] || a[5] || "")
  //                     : c &&
  //                       V.test(c) &&
  //                       (b = g(c, !0)) &&
  //                       (b = c.indexOf(")", c.length - b) - c.length) &&
  //                       ((a[0] = a[0].slice(0, b)), (a[2] = c.slice(0, b))),
  //                   a.slice(0, 3));
  //             },
  //           },
  //           filter: {
  //             TAG: function (a) {
  //               var b = a.replace(cb, db).toLowerCase();
  //               return "*" === a
  //                 ? function () {
  //                     return !0;
  //                   }
  //                 : function (a) {
  //                     return a.nodeName && a.nodeName.toLowerCase() === b;
  //                   };
  //             },
  //             CLASS: function (a) {
  //               var b = y[a + " "];
  //               return (
  //                 b ||
  //                 ((b = new RegExp("(^|" + L + ")" + a + "(" + L + "|$)")) &&
  //                   y(a, function (a) {
  //                     return b.test(
  //                       ("string" == typeof a.className && a.className) ||
  //                         ("undefined" != typeof a.getAttribute &&
  //                           a.getAttribute("class")) ||
  //                         ""
  //                     );
  //                   }))
  //               );
  //             },
  //             ATTR: function (a, b, c) {
  //               return function (d) {
  //                 var e = gb.attr(d, a);
  //                 return null == e
  //                   ? "!=" === b
  //                   : b
  //                   ? ((e += ""),
  //                     "=" === b
  //                       ? e === c
  //                       : "!=" === b
  //                       ? e !== c
  //                       : "^=" === b
  //                       ? c && 0 === e.indexOf(c)
  //                       : "*=" === b
  //                       ? c && e.indexOf(c) > -1
  //                       : "$=" === b
  //                       ? c && e.slice(-c.length) === c
  //                       : "~=" === b
  //                       ? (" " + e.replace(Q, " ") + " ").indexOf(c) > -1
  //                       : "|=" === b
  //                       ? e === c || e.slice(0, c.length + 1) === c + "-"
  //                       : !1)
  //                   : !0;
  //               };
  //             },
  //             CHILD: function (a, b, c, d, e) {
  //               var f = "nth" !== a.slice(0, 3),
  //                 g = "last" !== a.slice(-4),
  //                 h = "of-type" === b;
  //               return 1 === d && 0 === e
  //                 ? function (a) {
  //                     return !!a.parentNode;
  //                   }
  //                 : function (b, c, i) {
  //                     var j,
  //                       k,
  //                       l,
  //                       m,
  //                       n,
  //                       o,
  //                       p = f !== g ? "nextSibling" : "previousSibling",
  //                       q = b.parentNode,
  //                       r = h && b.nodeName.toLowerCase(),
  //                       s = !i && !h;
  //                     if (q) {
  //                       if (f) {
  //                         while (p) {
  //                           l = b;
  //                           while ((l = l[p]))
  //                             if (
  //                               h
  //                                 ? l.nodeName.toLowerCase() === r
  //                                 : 1 === l.nodeType
  //                             )
  //                               return !1;
  //                           o = p = "only" === a && !o && "nextSibling";
  //                         }
  //                         return !0;
  //                       }
  //                       if (((o = [g ? q.firstChild : q.lastChild]), g && s)) {
  //                         (k = q[u] || (q[u] = {})),
  //                           (j = k[a] || []),
  //                           (n = j[0] === w && j[1]),
  //                           (m = j[0] === w && j[2]),
  //                           (l = n && q.childNodes[n]);
  //                         while (
  //                           (l = (++n && l && l[p]) || (m = n = 0) || o.pop())
  //                         )
  //                           if (1 === l.nodeType && ++m && l === b) {
  //                             k[a] = [w, n, m];
  //                             break;
  //                           }
  //                       } else if (
  //                         s &&
  //                         (j = (b[u] || (b[u] = {}))[a]) &&
  //                         j[0] === w
  //                       )
  //                         m = j[1];
  //                       else
  //                         while (
  //                           (l = (++n && l && l[p]) || (m = n = 0) || o.pop())
  //                         )
  //                           if (
  //                             (h
  //                               ? l.nodeName.toLowerCase() === r
  //                               : 1 === l.nodeType) &&
  //                             ++m &&
  //                             (s && ((l[u] || (l[u] = {}))[a] = [w, m]), l === b)
  //                           )
  //                             break;
  //                       return (m -= e), m === d || (m % d === 0 && m / d >= 0);
  //                     }
  //                   };
  //             },
  //             PSEUDO: function (a, b) {
  //               var c,
  //                 e =
  //                   d.pseudos[a] ||
  //                   d.setFilters[a.toLowerCase()] ||
  //                   gb.error("unsupported pseudo: " + a);
  //               return e[u]
  //                 ? e(b)
  //                 : e.length > 1
  //                 ? ((c = [a, a, "", b]),
  //                   d.setFilters.hasOwnProperty(a.toLowerCase())
  //                     ? ib(function (a, c) {
  //                         var d,
  //                           f = e(a, b),
  //                           g = f.length;
  //                         while (g--) (d = J(a, f[g])), (a[d] = !(c[d] = f[g]));
  //                       })
  //                     : function (a) {
  //                         return e(a, 0, c);
  //                       })
  //                 : e;
  //             },
  //           },
  //           pseudos: {
  //             not: ib(function (a) {
  //               var b = [],
  //                 c = [],
  //                 d = h(a.replace(R, "$1"));
  //               return d[u]
  //                 ? ib(function (a, b, c, e) {
  //                     var f,
  //                       g = d(a, null, e, []),
  //                       h = a.length;
  //                     while (h--) (f = g[h]) && (a[h] = !(b[h] = f));
  //                   })
  //                 : function (a, e, f) {
  //                     return (
  //                       (b[0] = a), d(b, null, f, c), (b[0] = null), !c.pop()
  //                     );
  //                   };
  //             }),
  //             has: ib(function (a) {
  //               return function (b) {
  //                 return gb(a, b).length > 0;
  //               };
  //             }),
  //             contains: ib(function (a) {
  //               return (
  //                 (a = a.replace(cb, db)),
  //                 function (b) {
  //                   return (b.textContent || b.innerText || e(b)).indexOf(a) > -1;
  //                 }
  //               );
  //             }),
  //             lang: ib(function (a) {
  //               return (
  //                 W.test(a || "") || gb.error("unsupported lang: " + a),
  //                 (a = a.replace(cb, db).toLowerCase()),
  //                 function (b) {
  //                   var c;
  //                   do
  //                     if (
  //                       (c = p
  //                         ? b.lang
  //                         : b.getAttribute("xml:lang") || b.getAttribute("lang"))
  //                     )
  //                       return (
  //                         (c = c.toLowerCase()),
  //                         c === a || 0 === c.indexOf(a + "-")
  //                       );
  //                   while ((b = b.parentNode) && 1 === b.nodeType);
  //                   return !1;
  //                 }
  //               );
  //             }),
  //             target: function (b) {
  //               var c = a.location && a.location.hash;
  //               return c && c.slice(1) === b.id;
  //             },
  //             root: function (a) {
  //               return a === o;
  //             },
  //             focus: function (a) {
  //               return (
  //                 a === n.activeElement &&
  //                 (!n.hasFocus || n.hasFocus()) &&
  //                 !!(a.type || a.href || ~a.tabIndex)
  //               );
  //             },
  //             enabled: function (a) {
  //               return a.disabled === !1;
  //             },
  //             disabled: function (a) {
  //               return a.disabled === !0;
  //             },
  //             checked: function (a) {
  //               var b = a.nodeName.toLowerCase();
  //               return (
  //                 ("input" === b && !!a.checked) ||
  //                 ("option" === b && !!a.selected)
  //               );
  //             },
  //             selected: function (a) {
  //               return (
  //                 a.parentNode && a.parentNode.selectedIndex, a.selected === !0
  //               );
  //             },
  //             empty: function (a) {
  //               for (a = a.firstChild; a; a = a.nextSibling)
  //                 if (a.nodeType < 6) return !1;
  //               return !0;
  //             },
  //             parent: function (a) {
  //               return !d.pseudos.empty(a);
  //             },
  //             header: function (a) {
  //               return Z.test(a.nodeName);
  //             },
  //             input: function (a) {
  //               return Y.test(a.nodeName);
  //             },
  //             button: function (a) {
  //               var b = a.nodeName.toLowerCase();
  //               return ("input" === b && "button" === a.type) || "button" === b;
  //             },
  //             text: function (a) {
  //               var b;
  //               return (
  //                 "input" === a.nodeName.toLowerCase() &&
  //                 "text" === a.type &&
  //                 (null == (b = a.getAttribute("type")) ||
  //                   "text" === b.toLowerCase())
  //               );
  //             },
  //             first: ob(function () {
  //               return [0];
  //             }),
  //             last: ob(function (a, b) {
  //               return [b - 1];
  //             }),
  //             eq: ob(function (a, b, c) {
  //               return [0 > c ? c + b : c];
  //             }),
  //             even: ob(function (a, b) {
  //               for (var c = 0; b > c; c += 2) a.push(c);
  //               return a;
  //             }),
  //             odd: ob(function (a, b) {
  //               for (var c = 1; b > c; c += 2) a.push(c);
  //               return a;
  //             }),
  //             lt: ob(function (a, b, c) {
  //               for (var d = 0 > c ? c + b : c; --d >= 0; ) a.push(d);
  //               return a;
  //             }),
  //             gt: ob(function (a, b, c) {
  //               for (var d = 0 > c ? c + b : c; ++d < b; ) a.push(d);
  //               return a;
  //             }),
  //           },
  //         }),
  //       (d.pseudos.nth = d.pseudos.eq);
  //     for (b in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 })
  //       d.pseudos[b] = mb(b);
  //     for (b in { submit: !0, reset: !0 }) d.pseudos[b] = nb(b);
  //     function qb() {}
  //     (qb.prototype = d.filters = d.pseudos),
  //       (d.setFilters = new qb()),
  //       (g = gb.tokenize =
  //         function (a, b) {
  //           var c,
  //             e,
  //             f,
  //             g,
  //             h,
  //             i,
  //             j,
  //             k = z[a + " "];
  //           if (k) return b ? 0 : k.slice(0);
  //           (h = a), (i = []), (j = d.preFilter);
  //           while (h) {
  //             (!c || (e = S.exec(h))) &&
  //               (e && (h = h.slice(e[0].length) || h), i.push((f = []))),
  //               (c = !1),
  //               (e = T.exec(h)) &&
  //                 ((c = e.shift()),
  //                 f.push({ value: c, type: e[0].replace(R, " ") }),
  //                 (h = h.slice(c.length)));
  //             for (g in d.filter)
  //               !(e = X[g].exec(h)) ||
  //                 (j[g] && !(e = j[g](e))) ||
  //                 ((c = e.shift()),
  //                 f.push({ value: c, type: g, matches: e }),
  //                 (h = h.slice(c.length)));
  //             if (!c) break;
  //           }
  //           return b ? h.length : h ? gb.error(a) : z(a, i).slice(0);
  //         });
  //     function rb(a) {
  //       for (var b = 0, c = a.length, d = ""; c > b; b++) d += a[b].value;
  //       return d;
  //     }
  //     function sb(a, b, c) {
  //       var d = b.dir,
  //         e = c && "parentNode" === d,
  //         f = x++;
  //       return b.first
  //         ? function (b, c, f) {
  //             while ((b = b[d])) if (1 === b.nodeType || e) return a(b, c, f);
  //           }
  //         : function (b, c, g) {
  //             var h,
  //               i,
  //               j = [w, f];
  //             if (g) {
  //               while ((b = b[d]))
  //                 if ((1 === b.nodeType || e) && a(b, c, g)) return !0;
  //             } else
  //               while ((b = b[d]))
  //                 if (1 === b.nodeType || e) {
  //                   if (
  //                     ((i = b[u] || (b[u] = {})),
  //                     (h = i[d]) && h[0] === w && h[1] === f)
  //                   )
  //                     return (j[2] = h[2]);
  //                   if (((i[d] = j), (j[2] = a(b, c, g)))) return !0;
  //                 }
  //           };
  //     }
  //     function tb(a) {
  //       return a.length > 1
  //         ? function (b, c, d) {
  //             var e = a.length;
  //             while (e--) if (!a[e](b, c, d)) return !1;
  //             return !0;
  //           }
  //         : a[0];
  //     }
  //     function ub(a, b, c) {
  //       for (var d = 0, e = b.length; e > d; d++) gb(a, b[d], c);
  //       return c;
  //     }
  //     function vb(a, b, c, d, e) {
  //       for (var f, g = [], h = 0, i = a.length, j = null != b; i > h; h++)
  //         (f = a[h]) && (!c || c(f, d, e)) && (g.push(f), j && b.push(h));
  //       return g;
  //     }
  //     function wb(a, b, c, d, e, f) {
  //       return (
  //         d && !d[u] && (d = wb(d)),
  //         e && !e[u] && (e = wb(e, f)),
  //         ib(function (f, g, h, i) {
  //           var j,
  //             k,
  //             l,
  //             m = [],
  //             n = [],
  //             o = g.length,
  //             p = f || ub(b || "*", h.nodeType ? [h] : h, []),
  //             q = !a || (!f && b) ? p : vb(p, m, a, h, i),
  //             r = c ? (e || (f ? a : o || d) ? [] : g) : q;
  //           if ((c && c(q, r, h, i), d)) {
  //             (j = vb(r, n)), d(j, [], h, i), (k = j.length);
  //             while (k--) (l = j[k]) && (r[n[k]] = !(q[n[k]] = l));
  //           }
  //           if (f) {
  //             if (e || a) {
  //               if (e) {
  //                 (j = []), (k = r.length);
  //                 while (k--) (l = r[k]) && j.push((q[k] = l));
  //                 e(null, (r = []), j, i);
  //               }
  //               k = r.length;
  //               while (k--)
  //                 (l = r[k]) &&
  //                   (j = e ? J(f, l) : m[k]) > -1 &&
  //                   (f[j] = !(g[j] = l));
  //             }
  //           } else (r = vb(r === g ? r.splice(o, r.length) : r)), e ? e(null, g, r, i) : H.apply(g, r);
  //         })
  //       );
  //     }
  //     function xb(a) {
  //       for (
  //         var b,
  //           c,
  //           e,
  //           f = a.length,
  //           g = d.relative[a[0].type],
  //           h = g || d.relative[" "],
  //           i = g ? 1 : 0,
  //           k = sb(
  //             function (a) {
  //               return a === b;
  //             },
  //             h,
  //             !0
  //           ),
  //           l = sb(
  //             function (a) {
  //               return J(b, a) > -1;
  //             },
  //             h,
  //             !0
  //           ),
  //           m = [
  //             function (a, c, d) {
  //               var e =
  //                 (!g && (d || c !== j)) ||
  //                 ((b = c).nodeType ? k(a, c, d) : l(a, c, d));
  //               return (b = null), e;
  //             },
  //           ];
  //         f > i;
  //         i++
  //       )
  //         if ((c = d.relative[a[i].type])) m = [sb(tb(m), c)];
  //         else {
  //           if (((c = d.filter[a[i].type].apply(null, a[i].matches)), c[u])) {
  //             for (e = ++i; f > e; e++) if (d.relative[a[e].type]) break;
  //             return wb(
  //               i > 1 && tb(m),
  //               i > 1 &&
  //                 rb(
  //                   a
  //                     .slice(0, i - 1)
  //                     .concat({ value: " " === a[i - 2].type ? "*" : "" })
  //                 ).replace(R, "$1"),
  //               c,
  //               e > i && xb(a.slice(i, e)),
  //               f > e && xb((a = a.slice(e))),
  //               f > e && rb(a)
  //             );
  //           }
  //           m.push(c);
  //         }
  //       return tb(m);
  //     }
  //     function yb(a, b) {
  //       var c = b.length > 0,
  //         e = a.length > 0,
  //         f = function (f, g, h, i, k) {
  //           var l,
  //             m,
  //             o,
  //             p = 0,
  //             q = "0",
  //             r = f && [],
  //             s = [],
  //             t = j,
  //             u = f || (e && d.find.TAG("*", k)),
  //             v = (w += null == t ? 1 : Math.random() || 0.1),
  //             x = u.length;
  //           for (k && (j = g !== n && g); q !== x && null != (l = u[q]); q++) {
  //             if (e && l) {
  //               m = 0;
  //               while ((o = a[m++]))
  //                 if (o(l, g, h)) {
  //                   i.push(l);
  //                   break;
  //                 }
  //               k && (w = v);
  //             }
  //             c && ((l = !o && l) && p--, f && r.push(l));
  //           }
  //           if (((p += q), c && q !== p)) {
  //             m = 0;
  //             while ((o = b[m++])) o(r, s, g, h);
  //             if (f) {
  //               if (p > 0) while (q--) r[q] || s[q] || (s[q] = F.call(i));
  //               s = vb(s);
  //             }
  //             H.apply(i, s),
  //               k && !f && s.length > 0 && p + b.length > 1 && gb.uniqueSort(i);
  //           }
  //           return k && ((w = v), (j = t)), r;
  //         };
  //       return c ? ib(f) : f;
  //     }
  //     return (
  //       (h = gb.compile =
  //         function (a, b) {
  //           var c,
  //             d = [],
  //             e = [],
  //             f = A[a + " "];
  //           if (!f) {
  //             b || (b = g(a)), (c = b.length);
  //             while (c--) (f = xb(b[c])), f[u] ? d.push(f) : e.push(f);
  //             (f = A(a, yb(e, d))), (f.selector = a);
  //           }
  //           return f;
  //         }),
  //       (i = gb.select =
  //         function (a, b, e, f) {
  //           var i,
  //             j,
  //             k,
  //             l,
  //             m,
  //             n = "function" == typeof a && a,
  //             o = !f && g((a = n.selector || a));
  //           if (((e = e || []), 1 === o.length)) {
  //             if (
  //               ((j = o[0] = o[0].slice(0)),
  //               j.length > 2 &&
  //                 "ID" === (k = j[0]).type &&
  //                 c.getById &&
  //                 9 === b.nodeType &&
  //                 p &&
  //                 d.relative[j[1].type])
  //             ) {
  //               if (
  //                 ((b = (d.find.ID(k.matches[0].replace(cb, db), b) || [])[0]),
  //                 !b)
  //               )
  //                 return e;
  //               n && (b = b.parentNode), (a = a.slice(j.shift().value.length));
  //             }
  //             i = X.needsContext.test(a) ? 0 : j.length;
  //             while (i--) {
  //               if (((k = j[i]), d.relative[(l = k.type)])) break;
  //               if (
  //                 (m = d.find[l]) &&
  //                 (f = m(
  //                   k.matches[0].replace(cb, db),
  //                   (ab.test(j[0].type) && pb(b.parentNode)) || b
  //                 ))
  //               ) {
  //                 if ((j.splice(i, 1), (a = f.length && rb(j)), !a))
  //                   return H.apply(e, f), e;
  //                 break;
  //               }
  //             }
  //           }
  //           return (
  //             (n || h(a, o))(f, b, !p, e, (ab.test(a) && pb(b.parentNode)) || b),
  //             e
  //           );
  //         }),
  //       (c.sortStable = u.split("").sort(B).join("") === u),
  //       (c.detectDuplicates = !!l),
  //       m(),
  //       (c.sortDetached = jb(function (a) {
  //         return 1 & a.compareDocumentPosition(n.createElement("div"));
  //       })),
  //       jb(function (a) {
  //         return (
  //           (a.innerHTML = "<a href='#'></a>"),
  //           "#" === a.firstChild.getAttribute("href")
  //         );
  //       }) ||
  //         kb("type|href|height|width", function (a, b, c) {
  //           return c
  //             ? void 0
  //             : a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2);
  //         }),
  //       (c.attributes &&
  //         jb(function (a) {
  //           return (
  //             (a.innerHTML = "<input/>"),
  //             a.firstChild.setAttribute("value", ""),
  //             "" === a.firstChild.getAttribute("value")
  //           );
  //         })) ||
  //         kb("value", function (a, b, c) {
  //           return c || "input" !== a.nodeName.toLowerCase()
  //             ? void 0
  //             : a.defaultValue;
  //         }),
  //       jb(function (a) {
  //         return null == a.getAttribute("disabled");
  //       }) ||
  //         kb(K, function (a, b, c) {
  //           var d;
  //           return c
  //             ? void 0
  //             : a[b] === !0
  //             ? b.toLowerCase()
  //             : (d = a.getAttributeNode(b)) && d.specified
  //             ? d.value
  //             : null;
  //         }),
  //       gb
  //     );
  //   })(a);
  //   (m.find = s),
  //     (m.expr = s.selectors),
  //     (m.expr[":"] = m.expr.pseudos),
  //     (m.unique = s.uniqueSort),
  //     (m.text = s.getText),
  //     (m.isXMLDoc = s.isXML),
  //     (m.contains = s.contains);
  //   var t = m.expr.match.needsContext,
  //     u = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
  //     v = /^.[^:#\[\.,]*$/;
  //   function w(a, b, c) {
  //     if (m.isFunction(b))
  //       return m.grep(a, function (a, d) {
  //         return !!b.call(a, d, a) !== c;
  //       });
  //     if (b.nodeType)
  //       return m.grep(a, function (a) {
  //         return (a === b) !== c;
  //       });
  //     if ("string" == typeof b) {
  //       if (v.test(b)) return m.filter(b, a, c);
  //       b = m.filter(b, a);
  //     }
  //     return m.grep(a, function (a) {
  //       return m.inArray(a, b) >= 0 !== c;
  //     });
  //   }
  //   (m.filter = function (a, b, c) {
  //     var d = b[0];
  //     return (
  //       c && (a = ":not(" + a + ")"),
  //       1 === b.length && 1 === d.nodeType
  //         ? m.find.matchesSelector(d, a)
  //           ? [d]
  //           : []
  //         : m.find.matches(
  //             a,
  //             m.grep(b, function (a) {
  //               return 1 === a.nodeType;
  //             })
  //           )
  //     );
  //   }),
  //     m.fn.extend({
  //       find: function (a) {
  //         var b,
  //           c = [],
  //           d = this,
  //           e = d.length;
  //         if ("string" != typeof a)
  //           return this.pushStack(
  //             m(a).filter(function () {
  //               for (b = 0; e > b; b++) if (m.contains(d[b], this)) return !0;
  //             })
  //           );
  //         for (b = 0; e > b; b++) m.find(a, d[b], c);
  //         return (
  //           (c = this.pushStack(e > 1 ? m.unique(c) : c)),
  //           (c.selector = this.selector ? this.selector + " " + a : a),
  //           c
  //         );
  //       },
  //       filter: function (a) {
  //         return this.pushStack(w(this, a || [], !1));
  //       },
  //       not: function (a) {
  //         return this.pushStack(w(this, a || [], !0));
  //       },
  //       is: function (a) {
  //         return !!w(this, "string" == typeof a && t.test(a) ? m(a) : a || [], !1)
  //           .length;
  //       },
  //     });
  //   var x,
  //     y = a.document,
  //     z = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,
  //     A = (m.fn.init = function (a, b) {
  //       var c, d;
  //       if (!a) return this;
  //       if ("string" == typeof a) {
  //         if (
  //           ((c =
  //             "<" === a.charAt(0) &&
  //             ">" === a.charAt(a.length - 1) &&
  //             a.length >= 3
  //               ? [null, a, null]
  //               : z.exec(a)),
  //           !c || (!c[1] && b))
  //         )
  //           return !b || b.jquery
  //             ? (b || x).find(a)
  //             : this.constructor(b).find(a);
  //         if (c[1]) {
  //           if (
  //             ((b = b instanceof m ? b[0] : b),
  //             m.merge(
  //               this,
  //               m.parseHTML(c[1], b && b.nodeType ? b.ownerDocument || b : y, !0)
  //             ),
  //             u.test(c[1]) && m.isPlainObject(b))
  //           )
  //             for (c in b)
  //               m.isFunction(this[c]) ? this[c](b[c]) : this.attr(c, b[c]);
  //           return this;
  //         }
  //         if (((d = y.getElementById(c[2])), d && d.parentNode)) {
  //           if (d.id !== c[2]) return x.find(a);
  //           (this.length = 1), (this[0] = d);
  //         }
  //         return (this.context = y), (this.selector = a), this;
  //       }
  //       return a.nodeType
  //         ? ((this.context = this[0] = a), (this.length = 1), this)
  //         : m.isFunction(a)
  //         ? "undefined" != typeof x.ready
  //           ? x.ready(a)
  //           : a(m)
  //         : (void 0 !== a.selector &&
  //             ((this.selector = a.selector), (this.context = a.context)),
  //           m.makeArray(a, this));
  //     });
  //   (A.prototype = m.fn), (x = m(y));
  //   var B = /^(?:parents|prev(?:Until|All))/,
  //     C = { children: !0, contents: !0, next: !0, prev: !0 };
  //   m.extend({
  //     dir: function (a, b, c) {
  //       var d = [],
  //         e = a[b];
  //       while (
  //         e &&
  //         9 !== e.nodeType &&
  //         (void 0 === c || 1 !== e.nodeType || !m(e).is(c))
  //       )
  //         1 === e.nodeType && d.push(e), (e = e[b]);
  //       return d;
  //     },
  //     sibling: function (a, b) {
  //       for (var c = []; a; a = a.nextSibling)
  //         1 === a.nodeType && a !== b && c.push(a);
  //       return c;
  //     },
  //   }),
  //     m.fn.extend({
  //       has: function (a) {
  //         var b,
  //           c = m(a, this),
  //           d = c.length;
  //         return this.filter(function () {
  //           for (b = 0; d > b; b++) if (m.contains(this, c[b])) return !0;
  //         });
  //       },
  //       closest: function (a, b) {
  //         for (
  //           var c,
  //             d = 0,
  //             e = this.length,
  //             f = [],
  //             g = t.test(a) || "string" != typeof a ? m(a, b || this.context) : 0;
  //           e > d;
  //           d++
  //         )
  //           for (c = this[d]; c && c !== b; c = c.parentNode)
  //             if (
  //               c.nodeType < 11 &&
  //               (g
  //                 ? g.index(c) > -1
  //                 : 1 === c.nodeType && m.find.matchesSelector(c, a))
  //             ) {
  //               f.push(c);
  //               break;
  //             }
  //         return this.pushStack(f.length > 1 ? m.unique(f) : f);
  //       },
  //       index: function (a) {
  //         return a
  //           ? "string" == typeof a
  //             ? m.inArray(this[0], m(a))
  //             : m.inArray(a.jquery ? a[0] : a, this)
  //           : this[0] && this[0].parentNode
  //           ? this.first().prevAll().length
  //           : -1;
  //       },
  //       add: function (a, b) {
  //         return this.pushStack(m.unique(m.merge(this.get(), m(a, b))));
  //       },
  //       addBack: function (a) {
  //         return this.add(
  //           null == a ? this.prevObject : this.prevObject.filter(a)
  //         );
  //       },
  //     });
  //   function D(a, b) {
  //     do a = a[b];
  //     while (a && 1 !== a.nodeType);
  //     return a;
  //   }
  //   m.each(
  //     {
  //       parent: function (a) {
  //         var b = a.parentNode;
  //         return b && 11 !== b.nodeType ? b : null;
  //       },
  //       parents: function (a) {
  //         return m.dir(a, "parentNode");
  //       },
  //       parentsUntil: function (a, b, c) {
  //         return m.dir(a, "parentNode", c);
  //       },
  //       next: function (a) {
  //         return D(a, "nextSibling");
  //       },
  //       prev: function (a) {
  //         return D(a, "previousSibling");
  //       },
  //       nextAll: function (a) {
  //         return m.dir(a, "nextSibling");
  //       },
  //       prevAll: function (a) {
  //         return m.dir(a, "previousSibling");
  //       },
  //       nextUntil: function (a, b, c) {
  //         return m.dir(a, "nextSibling", c);
  //       },
  //       prevUntil: function (a, b, c) {
  //         return m.dir(a, "previousSibling", c);
  //       },
  //       siblings: function (a) {
  //         return m.sibling((a.parentNode || {}).firstChild, a);
  //       },
  //       children: function (a) {
  //         return m.sibling(a.firstChild);
  //       },
  //       contents: function (a) {
  //         return m.nodeName(a, "iframe")
  //           ? a.contentDocument || a.contentWindow.document
  //           : m.merge([], a.childNodes);
  //       },
  //     },
  //     function (a, b) {
  //       m.fn[a] = function (c, d) {
  //         var e = m.map(this, b, c);
  //         return (
  //           "Until" !== a.slice(-5) && (d = c),
  //           d && "string" == typeof d && (e = m.filter(d, e)),
  //           this.length > 1 &&
  //             (C[a] || (e = m.unique(e)), B.test(a) && (e = e.reverse())),
  //           this.pushStack(e)
  //         );
  //       };
  //     }
  //   );
  //   var E = /\S+/g,
  //     F = {};
  //   function G(a) {
  //     var b = (F[a] = {});
  //     return (
  //       m.each(a.match(E) || [], function (a, c) {
  //         b[c] = !0;
  //       }),
  //       b
  //     );
  //   }
  //   (m.Callbacks = function (a) {
  //     a = "string" == typeof a ? F[a] || G(a) : m.extend({}, a);
  //     var b,
  //       c,
  //       d,
  //       e,
  //       f,
  //       g,
  //       h = [],
  //       i = !a.once && [],
  //       j = function (l) {
  //         for (
  //           c = a.memory && l, d = !0, f = g || 0, g = 0, e = h.length, b = !0;
  //           h && e > f;
  //           f++
  //         )
  //           if (h[f].apply(l[0], l[1]) === !1 && a.stopOnFalse) {
  //             c = !1;
  //             break;
  //           }
  //         (b = !1),
  //           h && (i ? i.length && j(i.shift()) : c ? (h = []) : k.disable());
  //       },
  //       k = {
  //         add: function () {
  //           if (h) {
  //             var d = h.length;
  //             !(function f(b) {
  //               m.each(b, function (b, c) {
  //                 var d = m.type(c);
  //                 "function" === d
  //                   ? (a.unique && k.has(c)) || h.push(c)
  //                   : c && c.length && "string" !== d && f(c);
  //               });
  //             })(arguments),
  //               b ? (e = h.length) : c && ((g = d), j(c));
  //           }
  //           return this;
  //         },
  //         remove: function () {
  //           return (
  //             h &&
  //               m.each(arguments, function (a, c) {
  //                 var d;
  //                 while ((d = m.inArray(c, h, d)) > -1)
  //                   h.splice(d, 1), b && (e >= d && e--, f >= d && f--);
  //               }),
  //             this
  //           );
  //         },
  //         has: function (a) {
  //           return a ? m.inArray(a, h) > -1 : !(!h || !h.length);
  //         },
  //         empty: function () {
  //           return (h = []), (e = 0), this;
  //         },
  //         disable: function () {
  //           return (h = i = c = void 0), this;
  //         },
  //         disabled: function () {
  //           return !h;
  //         },
  //         lock: function () {
  //           return (i = void 0), c || k.disable(), this;
  //         },
  //         locked: function () {
  //           return !i;
  //         },
  //         fireWith: function (a, c) {
  //           return (
  //             !h ||
  //               (d && !i) ||
  //               ((c = c || []),
  //               (c = [a, c.slice ? c.slice() : c]),
  //               b ? i.push(c) : j(c)),
  //             this
  //           );
  //         },
  //         fire: function () {
  //           return k.fireWith(this, arguments), this;
  //         },
  //         fired: function () {
  //           return !!d;
  //         },
  //       };
  //     return k;
  //   }),
  //     m.extend({
  //       Deferred: function (a) {
  //         var b = [
  //             ["resolve", "done", m.Callbacks("once memory"), "resolved"],
  //             ["reject", "fail", m.Callbacks("once memory"), "rejected"],
  //             ["notify", "progress", m.Callbacks("memory")],
  //           ],
  //           c = "pending",
  //           d = {
  //             state: function () {
  //               return c;
  //             },
  //             always: function () {
  //               return e.done(arguments).fail(arguments), this;
  //             },
  //             then: function () {
  //               var a = arguments;
  //               return m
  //                 .Deferred(function (c) {
  //                   m.each(b, function (b, f) {
  //                     var g = m.isFunction(a[b]) && a[b];
  //                     e[f[1]](function () {
  //                       var a = g && g.apply(this, arguments);
  //                       a && m.isFunction(a.promise)
  //                         ? a
  //                             .promise()
  //                             .done(c.resolve)
  //                             .fail(c.reject)
  //                             .progress(c.notify)
  //                         : c[f[0] + "With"](
  //                             this === d ? c.promise() : this,
  //                             g ? [a] : arguments
  //                           );
  //                     });
  //                   }),
  //                     (a = null);
  //                 })
  //                 .promise();
  //             },
  //             promise: function (a) {
  //               return null != a ? m.extend(a, d) : d;
  //             },
  //           },
  //           e = {};
  //         return (
  //           (d.pipe = d.then),
  //           m.each(b, function (a, f) {
  //             var g = f[2],
  //               h = f[3];
  //             (d[f[1]] = g.add),
  //               h &&
  //                 g.add(
  //                   function () {
  //                     c = h;
  //                   },
  //                   b[1 ^ a][2].disable,
  //                   b[2][2].lock
  //                 ),
  //               (e[f[0]] = function () {
  //                 return e[f[0] + "With"](this === e ? d : this, arguments), this;
  //               }),
  //               (e[f[0] + "With"] = g.fireWith);
  //           }),
  //           d.promise(e),
  //           a && a.call(e, e),
  //           e
  //         );
  //       },
  //       when: function (a) {
  //         var b = 0,
  //           c = d.call(arguments),
  //           e = c.length,
  //           f = 1 !== e || (a && m.isFunction(a.promise)) ? e : 0,
  //           g = 1 === f ? a : m.Deferred(),
  //           h = function (a, b, c) {
  //             return function (e) {
  //               (b[a] = this),
  //                 (c[a] = arguments.length > 1 ? d.call(arguments) : e),
  //                 c === i ? g.notifyWith(b, c) : --f || g.resolveWith(b, c);
  //             };
  //           },
  //           i,
  //           j,
  //           k;
  //         if (e > 1)
  //           for (i = new Array(e), j = new Array(e), k = new Array(e); e > b; b++)
  //             c[b] && m.isFunction(c[b].promise)
  //               ? c[b]
  //                   .promise()
  //                   .done(h(b, k, c))
  //                   .fail(g.reject)
  //                   .progress(h(b, j, i))
  //               : --f;
  //         return f || g.resolveWith(k, c), g.promise();
  //       },
  //     });
  //   var H;
  //   (m.fn.ready = function (a) {
  //     return m.ready.promise().done(a), this;
  //   }),
  //     m.extend({
  //       isReady: !1,
  //       readyWait: 1,
  //       holdReady: function (a) {
  //         a ? m.readyWait++ : m.ready(!0);
  //       },
  //       ready: function (a) {
  //         if (a === !0 ? !--m.readyWait : !m.isReady) {
  //           if (!y.body) return setTimeout(m.ready);
  //           (m.isReady = !0),
  //             (a !== !0 && --m.readyWait > 0) ||
  //               (H.resolveWith(y, [m]),
  //               m.fn.triggerHandler &&
  //                 (m(y).triggerHandler("ready"), m(y).off("ready")));
  //         }
  //       },
  //     });
  //   function I() {
  //     y.addEventListener
  //       ? (y.removeEventListener("DOMContentLoaded", J, !1),
  //         a.removeEventListener("load", J, !1))
  //       : (y.detachEvent("onreadystatechange", J), a.detachEvent("onload", J));
  //   }
  //   function J() {
  //     (y.addEventListener ||
  //       "load" === event.type ||
  //       "complete" === y.readyState) &&
  //       (I(), m.ready());
  //   }
  //   m.ready.promise = function (b) {
  //     if (!H)
  //       if (((H = m.Deferred()), "complete" === y.readyState))
  //         setTimeout(m.ready);
  //       else if (y.addEventListener)
  //         y.addEventListener("DOMContentLoaded", J, !1),
  //           a.addEventListener("load", J, !1);
  //       else {
  //         y.attachEvent("onreadystatechange", J), a.attachEvent("onload", J);
  //         var c = !1;
  //         try {
  //           c = null == a.frameElement && y.documentElement;
  //         } catch (d) {}
  //         c &&
  //           c.doScroll &&
  //           !(function e() {
  //             if (!m.isReady) {
  //               try {
  //                 c.doScroll("left");
  //               } catch (a) {
  //                 return setTimeout(e, 50);
  //               }
  //               I(), m.ready();
  //             }
  //           })();
  //       }
  //     return H.promise(b);
  //   };
  //   var K = "undefined",
  //     L;
  //   for (L in m(k)) break;
  //   (k.ownLast = "0" !== L),
  //     (k.inlineBlockNeedsLayout = !1),
  //     m(function () {
  //       var a, b, c, d;
  //       (c = y.getElementsByTagName("body")[0]),
  //         c &&
  //           c.style &&
  //           ((b = y.createElement("div")),
  //           (d = y.createElement("div")),
  //           (d.style.cssText =
  //             "position:absolute;border:0;width:0;height:0;top:0;left:-9999px"),
  //           c.appendChild(d).appendChild(b),
  //           typeof b.style.zoom !== K &&
  //             ((b.style.cssText =
  //               "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1"),
  //             (k.inlineBlockNeedsLayout = a = 3 === b.offsetWidth),
  //             a && (c.style.zoom = 1)),
  //           c.removeChild(d));
  //     }),
  //     (function () {
  //       var a = y.createElement("div");
  //       if (null == k.deleteExpando) {
  //         k.deleteExpando = !0;
  //         try {
  //           delete a.test;
  //         } catch (b) {
  //           k.deleteExpando = !1;
  //         }
  //       }
  //       a = null;
  //     })(),
  //     (m.acceptData = function (a) {
  //       var b = m.noData[(a.nodeName + " ").toLowerCase()],
  //         c = +a.nodeType || 1;
  //       return 1 !== c && 9 !== c
  //         ? !1
  //         : !b || (b !== !0 && a.getAttribute("classid") === b);
  //     });
  //   var M = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
  //     N = /([A-Z])/g;
  //   function O(a, b, c) {
  //     if (void 0 === c && 1 === a.nodeType) {
  //       var d = "data-" + b.replace(N, "-$1").toLowerCase();
  //       if (((c = a.getAttribute(d)), "string" == typeof c)) {
  //         try {
  //           c =
  //             "true" === c
  //               ? !0
  //               : "false" === c
  //               ? !1
  //               : "null" === c
  //               ? null
  //               : +c + "" === c
  //               ? +c
  //               : M.test(c)
  //               ? m.parseJSON(c)
  //               : c;
  //         } catch (e) {}
  //         m.data(a, b, c);
  //       } else c = void 0;
  //     }
  //     return c;
  //   }
  //   function P(a) {
  //     var b;
  //     for (b in a)
  //       if (("data" !== b || !m.isEmptyObject(a[b])) && "toJSON" !== b) return !1;
  //     return !0;
  //   }
  //   function Q(a, b, d, e) {
  //     if (m.acceptData(a)) {
  //       var f,
  //         g,
  //         h = m.expando,
  //         i = a.nodeType,
  //         j = i ? m.cache : a,
  //         k = i ? a[h] : a[h] && h;
  //       if (
  //         (k && j[k] && (e || j[k].data)) ||
  //         void 0 !== d ||
  //         "string" != typeof b
  //       )
  //         return (
  //           k || (k = i ? (a[h] = c.pop() || m.guid++) : h),
  //           j[k] || (j[k] = i ? {} : { toJSON: m.noop }),
  //           ("object" == typeof b || "function" == typeof b) &&
  //             (e
  //               ? (j[k] = m.extend(j[k], b))
  //               : (j[k].data = m.extend(j[k].data, b))),
  //           (g = j[k]),
  //           e || (g.data || (g.data = {}), (g = g.data)),
  //           void 0 !== d && (g[m.camelCase(b)] = d),
  //           "string" == typeof b
  //             ? ((f = g[b]), null == f && (f = g[m.camelCase(b)]))
  //             : (f = g),
  //           f
  //         );
  //     }
  //   }
  //   function R(a, b, c) {
  //     if (m.acceptData(a)) {
  //       var d,
  //         e,
  //         f = a.nodeType,
  //         g = f ? m.cache : a,
  //         h = f ? a[m.expando] : m.expando;
  //       if (g[h]) {
  //         if (b && (d = c ? g[h] : g[h].data)) {
  //           m.isArray(b)
  //             ? (b = b.concat(m.map(b, m.camelCase)))
  //             : b in d
  //             ? (b = [b])
  //             : ((b = m.camelCase(b)), (b = b in d ? [b] : b.split(" "))),
  //             (e = b.length);
  //           while (e--) delete d[b[e]];
  //           if (c ? !P(d) : !m.isEmptyObject(d)) return;
  //         }
  //         (c || (delete g[h].data, P(g[h]))) &&
  //           (f
  //             ? m.cleanData([a], !0)
  //             : k.deleteExpando || g != g.window
  //             ? delete g[h]
  //             : (g[h] = null));
  //       }
  //     }
  //   }
  //   m.extend({
  //     cache: {},
  //     noData: {
  //       "applet ": !0,
  //       "embed ": !0,
  //       "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",
  //     },
  //     hasData: function (a) {
  //       return (
  //         (a = a.nodeType ? m.cache[a[m.expando]] : a[m.expando]), !!a && !P(a)
  //       );
  //     },
  //     data: function (a, b, c) {
  //       return Q(a, b, c);
  //     },
  //     removeData: function (a, b) {
  //       return R(a, b);
  //     },
  //     _data: function (a, b, c) {
  //       return Q(a, b, c, !0);
  //     },
  //     _removeData: function (a, b) {
  //       return R(a, b, !0);
  //     },
  //   }),
  //     m.fn.extend({
  //       data: function (a, b) {
  //         var c,
  //           d,
  //           e,
  //           f = this[0],
  //           g = f && f.attributes;
  //         if (void 0 === a) {
  //           if (
  //             this.length &&
  //             ((e = m.data(f)), 1 === f.nodeType && !m._data(f, "parsedAttrs"))
  //           ) {
  //             c = g.length;
  //             while (c--)
  //               g[c] &&
  //                 ((d = g[c].name),
  //                 0 === d.indexOf("data-") &&
  //                   ((d = m.camelCase(d.slice(5))), O(f, d, e[d])));
  //             m._data(f, "parsedAttrs", !0);
  //           }
  //           return e;
  //         }
  //         return "object" == typeof a
  //           ? this.each(function () {
  //               m.data(this, a);
  //             })
  //           : arguments.length > 1
  //           ? this.each(function () {
  //               m.data(this, a, b);
  //             })
  //           : f
  //           ? O(f, a, m.data(f, a))
  //           : void 0;
  //       },
  //       removeData: function (a) {
  //         return this.each(function () {
  //           m.removeData(this, a);
  //         });
  //       },
  //     }),
  //     m.extend({
  //       queue: function (a, b, c) {
  //         var d;
  //         return a
  //           ? ((b = (b || "fx") + "queue"),
  //             (d = m._data(a, b)),
  //             c &&
  //               (!d || m.isArray(c)
  //                 ? (d = m._data(a, b, m.makeArray(c)))
  //                 : d.push(c)),
  //             d || [])
  //           : void 0;
  //       },
  //       dequeue: function (a, b) {
  //         b = b || "fx";
  //         var c = m.queue(a, b),
  //           d = c.length,
  //           e = c.shift(),
  //           f = m._queueHooks(a, b),
  //           g = function () {
  //             m.dequeue(a, b);
  //           };
  //         "inprogress" === e && ((e = c.shift()), d--),
  //           e &&
  //             ("fx" === b && c.unshift("inprogress"),
  //             delete f.stop,
  //             e.call(a, g, f)),
  //           !d && f && f.empty.fire();
  //       },
  //       _queueHooks: function (a, b) {
  //         var c = b + "queueHooks";
  //         return (
  //           m._data(a, c) ||
  //           m._data(a, c, {
  //             empty: m.Callbacks("once memory").add(function () {
  //               m._removeData(a, b + "queue"), m._removeData(a, c);
  //             }),
  //           })
  //         );
  //       },
  //     }),
  //     m.fn.extend({
  //       queue: function (a, b) {
  //         var c = 2;
  //         return (
  //           "string" != typeof a && ((b = a), (a = "fx"), c--),
  //           arguments.length < c
  //             ? m.queue(this[0], a)
  //             : void 0 === b
  //             ? this
  //             : this.each(function () {
  //                 var c = m.queue(this, a, b);
  //                 m._queueHooks(this, a),
  //                   "fx" === a && "inprogress" !== c[0] && m.dequeue(this, a);
  //               })
  //         );
  //       },
  //       dequeue: function (a) {
  //         return this.each(function () {
  //           m.dequeue(this, a);
  //         });
  //       },
  //       clearQueue: function (a) {
  //         return this.queue(a || "fx", []);
  //       },
  //       promise: function (a, b) {
  //         var c,
  //           d = 1,
  //           e = m.Deferred(),
  //           f = this,
  //           g = this.length,
  //           h = function () {
  //             --d || e.resolveWith(f, [f]);
  //           };
  //         "string" != typeof a && ((b = a), (a = void 0)), (a = a || "fx");
  //         while (g--)
  //           (c = m._data(f[g], a + "queueHooks")),
  //             c && c.empty && (d++, c.empty.add(h));
  //         return h(), e.promise(b);
  //       },
  //     });
  //   var S = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
  //     T = ["Top", "Right", "Bottom", "Left"],
  //     U = function (a, b) {
  //       return (
  //         (a = b || a),
  //         "none" === m.css(a, "display") || !m.contains(a.ownerDocument, a)
  //       );
  //     },
  //     V = (m.access = function (a, b, c, d, e, f, g) {
  //       var h = 0,
  //         i = a.length,
  //         j = null == c;
  //       if ("object" === m.type(c)) {
  //         e = !0;
  //         for (h in c) m.access(a, b, h, c[h], !0, f, g);
  //       } else if (
  //         void 0 !== d &&
  //         ((e = !0),
  //         m.isFunction(d) || (g = !0),
  //         j &&
  //           (g
  //             ? (b.call(a, d), (b = null))
  //             : ((j = b),
  //               (b = function (a, b, c) {
  //                 return j.call(m(a), c);
  //               }))),
  //         b)
  //       )
  //         for (; i > h; h++) b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)));
  //       return e ? a : j ? b.call(a) : i ? b(a[0], c) : f;
  //     }),
  //     W = /^(?:checkbox|radio)$/i;
  //   !(function () {
  //     var a = y.createElement("input"),
  //       b = y.createElement("div"),
  //       c = y.createDocumentFragment();
  //     if (
  //       ((b.innerHTML =
  //         "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>"),
  //       (k.leadingWhitespace = 3 === b.firstChild.nodeType),
  //       (k.tbody = !b.getElementsByTagName("tbody").length),
  //       (k.htmlSerialize = !!b.getElementsByTagName("link").length),
  //       (k.html5Clone =
  //         "<:nav></:nav>" !== y.createElement("nav").cloneNode(!0).outerHTML),
  //       (a.type = "checkbox"),
  //       (a.checked = !0),
  //       c.appendChild(a),
  //       (k.appendChecked = a.checked),
  //       (b.innerHTML = "<textarea>x</textarea>"),
  //       (k.noCloneChecked = !!b.cloneNode(!0).lastChild.defaultValue),
  //       c.appendChild(b),
  //       (b.innerHTML = "<input type='radio' checked='checked' name='t'/>"),
  //       (k.checkClone = b.cloneNode(!0).cloneNode(!0).lastChild.checked),
  //       (k.noCloneEvent = !0),
  //       b.attachEvent &&
  //         (b.attachEvent("onclick", function () {
  //           k.noCloneEvent = !1;
  //         }),
  //         b.cloneNode(!0).click()),
  //       null == k.deleteExpando)
  //     ) {
  //       k.deleteExpando = !0;
  //       try {
  //         delete b.test;
  //       } catch (d) {
  //         k.deleteExpando = !1;
  //       }
  //     }
  //   })(),
  //     (function () {
  //       var b,
  //         c,
  //         d = y.createElement("div");
  //       for (b in { submit: !0, change: !0, focusin: !0 })
  //         (c = "on" + b),
  //           (k[b + "Bubbles"] = c in a) ||
  //             (d.setAttribute(c, "t"),
  //             (k[b + "Bubbles"] = d.attributes[c].expando === !1));
  //       d = null;
  //     })();
  //   var X = /^(?:input|select|textarea)$/i,
  //     Y = /^key/,
  //     Z = /^(?:mouse|pointer|contextmenu)|click/,
  //     $ = /^(?:focusinfocus|focusoutblur)$/,
  //     _ = /^([^.]*)(?:\.(.+)|)$/;
  //   function ab() {
  //     return !0;
  //   }
  //   function bb() {
  //     return !1;
  //   }
  //   function cb() {
  //     try {
  //       return y.activeElement;
  //     } catch (a) {}
  //   }
  //   (m.event = {
  //     global: {},
  //     add: function (a, b, c, d, e) {
  //       var f,
  //         g,
  //         h,
  //         i,
  //         j,
  //         k,
  //         l,
  //         n,
  //         o,
  //         p,
  //         q,
  //         r = m._data(a);
  //       if (r) {
  //         c.handler && ((i = c), (c = i.handler), (e = i.selector)),
  //           c.guid || (c.guid = m.guid++),
  //           (g = r.events) || (g = r.events = {}),
  //           (k = r.handle) ||
  //             ((k = r.handle =
  //               function (a) {
  //                 return typeof m === K || (a && m.event.triggered === a.type)
  //                   ? void 0
  //                   : m.event.dispatch.apply(k.elem, arguments);
  //               }),
  //             (k.elem = a)),
  //           (b = (b || "").match(E) || [""]),
  //           (h = b.length);
  //         while (h--)
  //           (f = _.exec(b[h]) || []),
  //             (o = q = f[1]),
  //             (p = (f[2] || "").split(".").sort()),
  //             o &&
  //               ((j = m.event.special[o] || {}),
  //               (o = (e ? j.delegateType : j.bindType) || o),
  //               (j = m.event.special[o] || {}),
  //               (l = m.extend(
  //                 {
  //                   type: o,
  //                   origType: q,
  //                   data: d,
  //                   handler: c,
  //                   guid: c.guid,
  //                   selector: e,
  //                   needsContext: e && m.expr.match.needsContext.test(e),
  //                   namespace: p.join("."),
  //                 },
  //                 i
  //               )),
  //               (n = g[o]) ||
  //                 ((n = g[o] = []),
  //                 (n.delegateCount = 0),
  //                 (j.setup && j.setup.call(a, d, p, k) !== !1) ||
  //                   (a.addEventListener
  //                     ? a.addEventListener(o, k, !1)
  //                     : a.attachEvent && a.attachEvent("on" + o, k))),
  //               j.add &&
  //                 (j.add.call(a, l), l.handler.guid || (l.handler.guid = c.guid)),
  //               e ? n.splice(n.delegateCount++, 0, l) : n.push(l),
  //               (m.event.global[o] = !0));
  //         a = null;
  //       }
  //     },
  //     remove: function (a, b, c, d, e) {
  //       var f,
  //         g,
  //         h,
  //         i,
  //         j,
  //         k,
  //         l,
  //         n,
  //         o,
  //         p,
  //         q,
  //         r = m.hasData(a) && m._data(a);
  //       if (r && (k = r.events)) {
  //         (b = (b || "").match(E) || [""]), (j = b.length);
  //         while (j--)
  //           if (
  //             ((h = _.exec(b[j]) || []),
  //             (o = q = h[1]),
  //             (p = (h[2] || "").split(".").sort()),
  //             o)
  //           ) {
  //             (l = m.event.special[o] || {}),
  //               (o = (d ? l.delegateType : l.bindType) || o),
  //               (n = k[o] || []),
  //               (h =
  //                 h[2] &&
  //                 new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)")),
  //               (i = f = n.length);
  //             while (f--)
  //               (g = n[f]),
  //                 (!e && q !== g.origType) ||
  //                   (c && c.guid !== g.guid) ||
  //                   (h && !h.test(g.namespace)) ||
  //                   (d && d !== g.selector && ("**" !== d || !g.selector)) ||
  //                   (n.splice(f, 1),
  //                   g.selector && n.delegateCount--,
  //                   l.remove && l.remove.call(a, g));
  //             i &&
  //               !n.length &&
  //               ((l.teardown && l.teardown.call(a, p, r.handle) !== !1) ||
  //                 m.removeEvent(a, o, r.handle),
  //               delete k[o]);
  //           } else for (o in k) m.event.remove(a, o + b[j], c, d, !0);
  //         m.isEmptyObject(k) && (delete r.handle, m._removeData(a, "events"));
  //       }
  //     },
  //     trigger: function (b, c, d, e) {
  //       var f,
  //         g,
  //         h,
  //         i,
  //         k,
  //         l,
  //         n,
  //         o = [d || y],
  //         p = j.call(b, "type") ? b.type : b,
  //         q = j.call(b, "namespace") ? b.namespace.split(".") : [];
  //       if (
  //         ((h = l = d = d || y),
  //         3 !== d.nodeType &&
  //           8 !== d.nodeType &&
  //           !$.test(p + m.event.triggered) &&
  //           (p.indexOf(".") >= 0 &&
  //             ((q = p.split(".")), (p = q.shift()), q.sort()),
  //           (g = p.indexOf(":") < 0 && "on" + p),
  //           (b = b[m.expando] ? b : new m.Event(p, "object" == typeof b && b)),
  //           (b.isTrigger = e ? 2 : 3),
  //           (b.namespace = q.join(".")),
  //           (b.namespace_re = b.namespace
  //             ? new RegExp("(^|\\.)" + q.join("\\.(?:.*\\.|)") + "(\\.|$)")
  //             : null),
  //           (b.result = void 0),
  //           b.target || (b.target = d),
  //           (c = null == c ? [b] : m.makeArray(c, [b])),
  //           (k = m.event.special[p] || {}),
  //           e || !k.trigger || k.trigger.apply(d, c) !== !1))
  //       ) {
  //         if (!e && !k.noBubble && !m.isWindow(d)) {
  //           for (
  //             i = k.delegateType || p, $.test(i + p) || (h = h.parentNode);
  //             h;
  //             h = h.parentNode
  //           )
  //             o.push(h), (l = h);
  //           l === (d.ownerDocument || y) &&
  //             o.push(l.defaultView || l.parentWindow || a);
  //         }
  //         n = 0;
  //         while ((h = o[n++]) && !b.isPropagationStopped())
  //           (b.type = n > 1 ? i : k.bindType || p),
  //             (f = (m._data(h, "events") || {})[b.type] && m._data(h, "handle")),
  //             f && f.apply(h, c),
  //             (f = g && h[g]),
  //             f &&
  //               f.apply &&
  //               m.acceptData(h) &&
  //               ((b.result = f.apply(h, c)),
  //               b.result === !1 && b.preventDefault());
  //         if (
  //           ((b.type = p),
  //           !e &&
  //             !b.isDefaultPrevented() &&
  //             (!k._default || k._default.apply(o.pop(), c) === !1) &&
  //             m.acceptData(d) &&
  //             g &&
  //             d[p] &&
  //             !m.isWindow(d))
  //         ) {
  //           (l = d[g]), l && (d[g] = null), (m.event.triggered = p);
  //           try {
  //             d[p]();
  //           } catch (r) {}
  //           (m.event.triggered = void 0), l && (d[g] = l);
  //         }
  //         return b.result;
  //       }
  //     },
  //     dispatch: function (a) {
  //       a = m.event.fix(a);
  //       var b,
  //         c,
  //         e,
  //         f,
  //         g,
  //         h = [],
  //         i = d.call(arguments),
  //         j = (m._data(this, "events") || {})[a.type] || [],
  //         k = m.event.special[a.type] || {};
  //       if (
  //         ((i[0] = a),
  //         (a.delegateTarget = this),
  //         !k.preDispatch || k.preDispatch.call(this, a) !== !1)
  //       ) {
  //         (h = m.event.handlers.call(this, a, j)), (b = 0);
  //         while ((f = h[b++]) && !a.isPropagationStopped()) {
  //           (a.currentTarget = f.elem), (g = 0);
  //           while ((e = f.handlers[g++]) && !a.isImmediatePropagationStopped())
  //             (!a.namespace_re || a.namespace_re.test(e.namespace)) &&
  //               ((a.handleObj = e),
  //               (a.data = e.data),
  //               (c = (
  //                 (m.event.special[e.origType] || {}).handle || e.handler
  //               ).apply(f.elem, i)),
  //               void 0 !== c &&
  //                 (a.result = c) === !1 &&
  //                 (a.preventDefault(), a.stopPropagation()));
  //         }
  //         return k.postDispatch && k.postDispatch.call(this, a), a.result;
  //       }
  //     },
  //     handlers: function (a, b) {
  //       var c,
  //         d,
  //         e,
  //         f,
  //         g = [],
  //         h = b.delegateCount,
  //         i = a.target;
  //       if (h && i.nodeType && (!a.button || "click" !== a.type))
  //         for (; i != this; i = i.parentNode || this)
  //           if (1 === i.nodeType && (i.disabled !== !0 || "click" !== a.type)) {
  //             for (e = [], f = 0; h > f; f++)
  //               (d = b[f]),
  //                 (c = d.selector + " "),
  //                 void 0 === e[c] &&
  //                   (e[c] = d.needsContext
  //                     ? m(c, this).index(i) >= 0
  //                     : m.find(c, this, null, [i]).length),
  //                 e[c] && e.push(d);
  //             e.length && g.push({ elem: i, handlers: e });
  //           }
  //       return h < b.length && g.push({ elem: this, handlers: b.slice(h) }), g;
  //     },
  //     fix: function (a) {
  //       if (a[m.expando]) return a;
  //       var b,
  //         c,
  //         d,
  //         e = a.type,
  //         f = a,
  //         g = this.fixHooks[e];
  //       g ||
  //         (this.fixHooks[e] = g =
  //           Z.test(e) ? this.mouseHooks : Y.test(e) ? this.keyHooks : {}),
  //         (d = g.props ? this.props.concat(g.props) : this.props),
  //         (a = new m.Event(f)),
  //         (b = d.length);
  //       while (b--) (c = d[b]), (a[c] = f[c]);
  //       return (
  //         a.target || (a.target = f.srcElement || y),
  //         3 === a.target.nodeType && (a.target = a.target.parentNode),
  //         (a.metaKey = !!a.metaKey),
  //         g.filter ? g.filter(a, f) : a
  //       );
  //     },
  //     props:
  //       "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(
  //         " "
  //       ),
  //     fixHooks: {},
  //     keyHooks: {
  //       props: "char charCode key keyCode".split(" "),
  //       filter: function (a, b) {
  //         return (
  //           null == a.which &&
  //             (a.which = null != b.charCode ? b.charCode : b.keyCode),
  //           a
  //         );
  //       },
  //     },
  //     mouseHooks: {
  //       props:
  //         "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(
  //           " "
  //         ),
  //       filter: function (a, b) {
  //         var c,
  //           d,
  //           e,
  //           f = b.button,
  //           g = b.fromElement;
  //         return (
  //           null == a.pageX &&
  //             null != b.clientX &&
  //             ((d = a.target.ownerDocument || y),
  //             (e = d.documentElement),
  //             (c = d.body),
  //             (a.pageX =
  //               b.clientX +
  //               ((e && e.scrollLeft) || (c && c.scrollLeft) || 0) -
  //               ((e && e.clientLeft) || (c && c.clientLeft) || 0)),
  //             (a.pageY =
  //               b.clientY +
  //               ((e && e.scrollTop) || (c && c.scrollTop) || 0) -
  //               ((e && e.clientTop) || (c && c.clientTop) || 0))),
  //           !a.relatedTarget &&
  //             g &&
  //             (a.relatedTarget = g === a.target ? b.toElement : g),
  //           a.which ||
  //             void 0 === f ||
  //             (a.which = 1 & f ? 1 : 2 & f ? 3 : 4 & f ? 2 : 0),
  //           a
  //         );
  //       },
  //     },
  //     special: {
  //       load: { noBubble: !0 },
  //       focus: {
  //         trigger: function () {
  //           if (this !== cb() && this.focus)
  //             try {
  //               return this.focus(), !1;
  //             } catch (a) {}
  //         },
  //         delegateType: "focusin",
  //       },
  //       blur: {
  //         trigger: function () {
  //           return this === cb() && this.blur ? (this.blur(), !1) : void 0;
  //         },
  //         delegateType: "focusout",
  //       },
  //       click: {
  //         trigger: function () {
  //           return m.nodeName(this, "input") &&
  //             "checkbox" === this.type &&
  //             this.click
  //             ? (this.click(), !1)
  //             : void 0;
  //         },
  //         _default: function (a) {
  //           return m.nodeName(a.target, "a");
  //         },
  //       },
  //       beforeunload: {
  //         postDispatch: function (a) {
  //           void 0 !== a.result &&
  //             a.originalEvent &&
  //             (a.originalEvent.returnValue = a.result);
  //         },
  //       },
  //     },
  //     simulate: function (a, b, c, d) {
  //       var e = m.extend(new m.Event(), c, {
  //         type: a,
  //         isSimulated: !0,
  //         originalEvent: {},
  //       });
  //       d ? m.event.trigger(e, null, b) : m.event.dispatch.call(b, e),
  //         e.isDefaultPrevented() && c.preventDefault();
  //     },
  //   }),
  //     (m.removeEvent = y.removeEventListener
  //       ? function (a, b, c) {
  //           a.removeEventListener && a.removeEventListener(b, c, !1);
  //         }
  //       : function (a, b, c) {
  //           var d = "on" + b;
  //           a.detachEvent &&
  //             (typeof a[d] === K && (a[d] = null), a.detachEvent(d, c));
  //         }),
  //     (m.Event = function (a, b) {
  //       return this instanceof m.Event
  //         ? (a && a.type
  //             ? ((this.originalEvent = a),
  //               (this.type = a.type),
  //               (this.isDefaultPrevented =
  //                 a.defaultPrevented ||
  //                 (void 0 === a.defaultPrevented && a.returnValue === !1)
  //                   ? ab
  //                   : bb))
  //             : (this.type = a),
  //           b && m.extend(this, b),
  //           (this.timeStamp = (a && a.timeStamp) || m.now()),
  //           void (this[m.expando] = !0))
  //         : new m.Event(a, b);
  //     }),
  //     (m.Event.prototype = {
  //       isDefaultPrevented: bb,
  //       isPropagationStopped: bb,
  //       isImmediatePropagationStopped: bb,
  //       preventDefault: function () {
  //         var a = this.originalEvent;
  //         (this.isDefaultPrevented = ab),
  //           a && (a.preventDefault ? a.preventDefault() : (a.returnValue = !1));
  //       },
  //       stopPropagation: function () {
  //         var a = this.originalEvent;
  //         (this.isPropagationStopped = ab),
  //           a &&
  //             (a.stopPropagation && a.stopPropagation(), (a.cancelBubble = !0));
  //       },
  //       stopImmediatePropagation: function () {
  //         var a = this.originalEvent;
  //         (this.isImmediatePropagationStopped = ab),
  //           a && a.stopImmediatePropagation && a.stopImmediatePropagation(),
  //           this.stopPropagation();
  //       },
  //     }),
  //     m.each(
  //       {
  //         mouseenter: "mouseover",
  //         mouseleave: "mouseout",
  //         pointerenter: "pointerover",
  //         pointerleave: "pointerout",
  //       },
  //       function (a, b) {
  //         m.event.special[a] = {
  //           delegateType: b,
  //           bindType: b,
  //           handle: function (a) {
  //             var c,
  //               d = this,
  //               e = a.relatedTarget,
  //               f = a.handleObj;
  //             return (
  //               (!e || (e !== d && !m.contains(d, e))) &&
  //                 ((a.type = f.origType),
  //                 (c = f.handler.apply(this, arguments)),
  //                 (a.type = b)),
  //               c
  //             );
  //           },
  //         };
  //       }
  //     ),
  //     k.submitBubbles ||
  //       (m.event.special.submit = {
  //         setup: function () {
  //           return m.nodeName(this, "form")
  //             ? !1
  //             : void m.event.add(
  //                 this,
  //                 "click._submit keypress._submit",
  //                 function (a) {
  //                   var b = a.target,
  //                     c =
  //                       m.nodeName(b, "input") || m.nodeName(b, "button")
  //                         ? b.form
  //                         : void 0;
  //                   c &&
  //                     !m._data(c, "submitBubbles") &&
  //                     (m.event.add(c, "submit._submit", function (a) {
  //                       a._submit_bubble = !0;
  //                     }),
  //                     m._data(c, "submitBubbles", !0));
  //                 }
  //               );
  //         },
  //         postDispatch: function (a) {
  //           a._submit_bubble &&
  //             (delete a._submit_bubble,
  //             this.parentNode &&
  //               !a.isTrigger &&
  //               m.event.simulate("submit", this.parentNode, a, !0));
  //         },
  //         teardown: function () {
  //           return m.nodeName(this, "form")
  //             ? !1
  //             : void m.event.remove(this, "._submit");
  //         },
  //       }),
  //     k.changeBubbles ||
  //       (m.event.special.change = {
  //         setup: function () {
  //           return X.test(this.nodeName)
  //             ? (("checkbox" === this.type || "radio" === this.type) &&
  //                 (m.event.add(this, "propertychange._change", function (a) {
  //                   "checked" === a.originalEvent.propertyName &&
  //                     (this._just_changed = !0);
  //                 }),
  //                 m.event.add(this, "click._change", function (a) {
  //                   this._just_changed &&
  //                     !a.isTrigger &&
  //                     (this._just_changed = !1),
  //                     m.event.simulate("change", this, a, !0);
  //                 })),
  //               !1)
  //             : void m.event.add(this, "beforeactivate._change", function (a) {
  //                 var b = a.target;
  //                 X.test(b.nodeName) &&
  //                   !m._data(b, "changeBubbles") &&
  //                   (m.event.add(b, "change._change", function (a) {
  //                     !this.parentNode ||
  //                       a.isSimulated ||
  //                       a.isTrigger ||
  //                       m.event.simulate("change", this.parentNode, a, !0);
  //                   }),
  //                   m._data(b, "changeBubbles", !0));
  //               });
  //         },
  //         handle: function (a) {
  //           var b = a.target;
  //           return this !== b ||
  //             a.isSimulated ||
  //             a.isTrigger ||
  //             ("radio" !== b.type && "checkbox" !== b.type)
  //             ? a.handleObj.handler.apply(this, arguments)
  //             : void 0;
  //         },
  //         teardown: function () {
  //           return m.event.remove(this, "._change"), !X.test(this.nodeName);
  //         },
  //       }),
  //     k.focusinBubbles ||
  //       m.each({ focus: "focusin", blur: "focusout" }, function (a, b) {
  //         var c = function (a) {
  //           m.event.simulate(b, a.target, m.event.fix(a), !0);
  //         };
  //         m.event.special[b] = {
  //           setup: function () {
  //             var d = this.ownerDocument || this,
  //               e = m._data(d, b);
  //             e || d.addEventListener(a, c, !0), m._data(d, b, (e || 0) + 1);
  //           },
  //           teardown: function () {
  //             var d = this.ownerDocument || this,
  //               e = m._data(d, b) - 1;
  //             e
  //               ? m._data(d, b, e)
  //               : (d.removeEventListener(a, c, !0), m._removeData(d, b));
  //           },
  //         };
  //       }),
  //     m.fn.extend({
  //       on: function (a, b, c, d, e) {
  //         var f, g;
  //         if ("object" == typeof a) {
  //           "string" != typeof b && ((c = c || b), (b = void 0));
  //           for (f in a) this.on(f, b, c, a[f], e);
  //           return this;
  //         }
  //         if (
  //           (null == c && null == d
  //             ? ((d = b), (c = b = void 0))
  //             : null == d &&
  //               ("string" == typeof b
  //                 ? ((d = c), (c = void 0))
  //                 : ((d = c), (c = b), (b = void 0))),
  //           d === !1)
  //         )
  //           d = bb;
  //         else if (!d) return this;
  //         return (
  //           1 === e &&
  //             ((g = d),
  //             (d = function (a) {
  //               return m().off(a), g.apply(this, arguments);
  //             }),
  //             (d.guid = g.guid || (g.guid = m.guid++))),
  //           this.each(function () {
  //             m.event.add(this, a, d, c, b);
  //           })
  //         );
  //       },
  //       one: function (a, b, c, d) {
  //         return this.on(a, b, c, d, 1);
  //       },
  //       off: function (a, b, c) {
  //         var d, e;
  //         if (a && a.preventDefault && a.handleObj)
  //           return (
  //             (d = a.handleObj),
  //             m(a.delegateTarget).off(
  //               d.namespace ? d.origType + "." + d.namespace : d.origType,
  //               d.selector,
  //               d.handler
  //             ),
  //             this
  //           );
  //         if ("object" == typeof a) {
  //           for (e in a) this.off(e, b, a[e]);
  //           return this;
  //         }
  //         return (
  //           (b === !1 || "function" == typeof b) && ((c = b), (b = void 0)),
  //           c === !1 && (c = bb),
  //           this.each(function () {
  //             m.event.remove(this, a, c, b);
  //           })
  //         );
  //       },
  //       trigger: function (a, b) {
  //         return this.each(function () {
  //           m.event.trigger(a, b, this);
  //         });
  //       },
  //       triggerHandler: function (a, b) {
  //         var c = this[0];
  //         return c ? m.event.trigger(a, b, c, !0) : void 0;
  //       },
  //     });
  //   function db(a) {
  //     var b = eb.split("|"),
  //       c = a.createDocumentFragment();
  //     if (c.createElement) while (b.length) c.createElement(b.pop());
  //     return c;
  //   }
  //   var eb =
  //       "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
  //     fb = / jQuery\d+="(?:null|\d+)"/g,
  //     gb = new RegExp("<(?:" + eb + ")[\\s/>]", "i"),
  //     hb = /^\s+/,
  //     ib =
  //       /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
  //     jb = /<([\w:]+)/,
  //     kb = /<tbody/i,
  //     lb = /<|&#?\w+;/,
  //     mb = /<(?:script|style|link)/i,
  //     nb = /checked\s*(?:[^=]|=\s*.checked.)/i,
  //     ob = /^$|\/(?:java|ecma)script/i,
  //     pb = /^true\/(.*)/,
  //     qb = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
  //     rb = {
  //       option: [1, "<select multiple='multiple'>", "</select>"],
  //       legend: [1, "<fieldset>", "</fieldset>"],
  //       area: [1, "<map>", "</map>"],
  //       param: [1, "<object>", "</object>"],
  //       thead: [1, "<table>", "</table>"],
  //       tr: [2, "<table><tbody>", "</tbody></table>"],
  //       col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
  //       td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
  //       _default: k.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"],
  //     },
  //     sb = db(y),
  //     tb = sb.appendChild(y.createElement("div"));
  //   (rb.optgroup = rb.option),
  //     (rb.tbody = rb.tfoot = rb.colgroup = rb.caption = rb.thead),
  //     (rb.th = rb.td);
  //   function ub(a, b) {
  //     var c,
  //       d,
  //       e = 0,
  //       f =
  //         typeof a.getElementsByTagName !== K
  //           ? a.getElementsByTagName(b || "*")
  //           : typeof a.querySelectorAll !== K
  //           ? a.querySelectorAll(b || "*")
  //           : void 0;
  //     if (!f)
  //       for (f = [], c = a.childNodes || a; null != (d = c[e]); e++)
  //         !b || m.nodeName(d, b) ? f.push(d) : m.merge(f, ub(d, b));
  //     return void 0 === b || (b && m.nodeName(a, b)) ? m.merge([a], f) : f;
  //   }
  //   function vb(a) {
  //     W.test(a.type) && (a.defaultChecked = a.checked);
  //   }
  //   function wb(a, b) {
  //     return m.nodeName(a, "table") &&
  //       m.nodeName(11 !== b.nodeType ? b : b.firstChild, "tr")
  //       ? a.getElementsByTagName("tbody")[0] ||
  //           a.appendChild(a.ownerDocument.createElement("tbody"))
  //       : a;
  //   }
  //   function xb(a) {
  //     return (a.type = (null !== m.find.attr(a, "type")) + "/" + a.type), a;
  //   }
  //   function yb(a) {
  //     var b = pb.exec(a.type);
  //     return b ? (a.type = b[1]) : a.removeAttribute("type"), a;
  //   }
  //   function zb(a, b) {
  //     for (var c, d = 0; null != (c = a[d]); d++)
  //       m._data(c, "globalEval", !b || m._data(b[d], "globalEval"));
  //   }
  //   function Ab(a, b) {
  //     if (1 === b.nodeType && m.hasData(a)) {
  //       var c,
  //         d,
  //         e,
  //         f = m._data(a),
  //         g = m._data(b, f),
  //         h = f.events;
  //       if (h) {
  //         delete g.handle, (g.events = {});
  //         for (c in h)
  //           for (d = 0, e = h[c].length; e > d; d++) m.event.add(b, c, h[c][d]);
  //       }
  //       g.data && (g.data = m.extend({}, g.data));
  //     }
  //   }
  //   function Bb(a, b) {
  //     var c, d, e;
  //     if (1 === b.nodeType) {
  //       if (((c = b.nodeName.toLowerCase()), !k.noCloneEvent && b[m.expando])) {
  //         e = m._data(b);
  //         for (d in e.events) m.removeEvent(b, d, e.handle);
  //         b.removeAttribute(m.expando);
  //       }
  //       "script" === c && b.text !== a.text
  //         ? ((xb(b).text = a.text), yb(b))
  //         : "object" === c
  //         ? (b.parentNode && (b.outerHTML = a.outerHTML),
  //           k.html5Clone &&
  //             a.innerHTML &&
  //             !m.trim(b.innerHTML) &&
  //             (b.innerHTML = a.innerHTML))
  //         : "input" === c && W.test(a.type)
  //         ? ((b.defaultChecked = b.checked = a.checked),
  //           b.value !== a.value && (b.value = a.value))
  //         : "option" === c
  //         ? (b.defaultSelected = b.selected = a.defaultSelected)
  //         : ("input" === c || "textarea" === c) &&
  //           (b.defaultValue = a.defaultValue);
  //     }
  //   }
  //   m.extend({
  //     clone: function (a, b, c) {
  //       var d,
  //         e,
  //         f,
  //         g,
  //         h,
  //         i = m.contains(a.ownerDocument, a);
  //       if (
  //         (k.html5Clone || m.isXMLDoc(a) || !gb.test("<" + a.nodeName + ">")
  //           ? (f = a.cloneNode(!0))
  //           : ((tb.innerHTML = a.outerHTML), tb.removeChild((f = tb.firstChild))),
  //         !(
  //           (k.noCloneEvent && k.noCloneChecked) ||
  //           (1 !== a.nodeType && 11 !== a.nodeType) ||
  //           m.isXMLDoc(a)
  //         ))
  //       )
  //         for (d = ub(f), h = ub(a), g = 0; null != (e = h[g]); ++g)
  //           d[g] && Bb(e, d[g]);
  //       if (b)
  //         if (c)
  //           for (h = h || ub(a), d = d || ub(f), g = 0; null != (e = h[g]); g++)
  //             Ab(e, d[g]);
  //         else Ab(a, f);
  //       return (
  //         (d = ub(f, "script")),
  //         d.length > 0 && zb(d, !i && ub(a, "script")),
  //         (d = h = e = null),
  //         f
  //       );
  //     },
  //     buildFragment: function (a, b, c, d) {
  //       for (
  //         var e, f, g, h, i, j, l, n = a.length, o = db(b), p = [], q = 0;
  //         n > q;
  //         q++
  //       )
  //         if (((f = a[q]), f || 0 === f))
  //           if ("object" === m.type(f)) m.merge(p, f.nodeType ? [f] : f);
  //           else if (lb.test(f)) {
  //             (h = h || o.appendChild(b.createElement("div"))),
  //               (i = (jb.exec(f) || ["", ""])[1].toLowerCase()),
  //               (l = rb[i] || rb._default),
  //               (h.innerHTML = l[1] + f.replace(ib, "<$1></$2>") + l[2]),
  //               (e = l[0]);
  //             while (e--) h = h.lastChild;
  //             if (
  //               (!k.leadingWhitespace &&
  //                 hb.test(f) &&
  //                 p.push(b.createTextNode(hb.exec(f)[0])),
  //               !k.tbody)
  //             ) {
  //               (f =
  //                 "table" !== i || kb.test(f)
  //                   ? "<table>" !== l[1] || kb.test(f)
  //                     ? 0
  //                     : h
  //                   : h.firstChild),
  //                 (e = f && f.childNodes.length);
  //               while (e--)
  //                 m.nodeName((j = f.childNodes[e]), "tbody") &&
  //                   !j.childNodes.length &&
  //                   f.removeChild(j);
  //             }
  //             m.merge(p, h.childNodes), (h.textContent = "");
  //             while (h.firstChild) h.removeChild(h.firstChild);
  //             h = o.lastChild;
  //           } else p.push(b.createTextNode(f));
  //       h && o.removeChild(h),
  //         k.appendChecked || m.grep(ub(p, "input"), vb),
  //         (q = 0);
  //       while ((f = p[q++]))
  //         if (
  //           (!d || -1 === m.inArray(f, d)) &&
  //           ((g = m.contains(f.ownerDocument, f)),
  //           (h = ub(o.appendChild(f), "script")),
  //           g && zb(h),
  //           c)
  //         ) {
  //           e = 0;
  //           while ((f = h[e++])) ob.test(f.type || "") && c.push(f);
  //         }
  //       return (h = null), o;
  //     },
  //     cleanData: function (a, b) {
  //       for (
  //         var d,
  //           e,
  //           f,
  //           g,
  //           h = 0,
  //           i = m.expando,
  //           j = m.cache,
  //           l = k.deleteExpando,
  //           n = m.event.special;
  //         null != (d = a[h]);
  //         h++
  //       )
  //         if ((b || m.acceptData(d)) && ((f = d[i]), (g = f && j[f]))) {
  //           if (g.events)
  //             for (e in g.events)
  //               n[e] ? m.event.remove(d, e) : m.removeEvent(d, e, g.handle);
  //           j[f] &&
  //             (delete j[f],
  //             l
  //               ? delete d[i]
  //               : typeof d.removeAttribute !== K
  //               ? d.removeAttribute(i)
  //               : (d[i] = null),
  //             c.push(f));
  //         }
  //     },
  //   }),
  //     m.fn.extend({
  //       text: function (a) {
  //         return V(
  //           this,
  //           function (a) {
  //             return void 0 === a
  //               ? m.text(this)
  //               : this.empty().append(
  //                   ((this[0] && this[0].ownerDocument) || y).createTextNode(a)
  //                 );
  //           },
  //           null,
  //           a,
  //           arguments.length
  //         );
  //       },
  //       append: function () {
  //         return this.domManip(arguments, function (a) {
  //           if (
  //             1 === this.nodeType ||
  //             11 === this.nodeType ||
  //             9 === this.nodeType
  //           ) {
  //             var b = wb(this, a);
  //             b.appendChild(a);
  //           }
  //         });
  //       },
  //       prepend: function () {
  //         return this.domManip(arguments, function (a) {
  //           if (
  //             1 === this.nodeType ||
  //             11 === this.nodeType ||
  //             9 === this.nodeType
  //           ) {
  //             var b = wb(this, a);
  //             b.insertBefore(a, b.firstChild);
  //           }
  //         });
  //       },
  //       before: function () {
  //         return this.domManip(arguments, function (a) {
  //           this.parentNode && this.parentNode.insertBefore(a, this);
  //         });
  //       },
  //       after: function () {
  //         return this.domManip(arguments, function (a) {
  //           this.parentNode && this.parentNode.insertBefore(a, this.nextSibling);
  //         });
  //       },
  //       remove: function (a, b) {
  //         for (
  //           var c, d = a ? m.filter(a, this) : this, e = 0;
  //           null != (c = d[e]);
  //           e++
  //         )
  //           b || 1 !== c.nodeType || m.cleanData(ub(c)),
  //             c.parentNode &&
  //               (b && m.contains(c.ownerDocument, c) && zb(ub(c, "script")),
  //               c.parentNode.removeChild(c));
  //         return this;
  //       },
  //       empty: function () {
  //         for (var a, b = 0; null != (a = this[b]); b++) {
  //           1 === a.nodeType && m.cleanData(ub(a, !1));
  //           while (a.firstChild) a.removeChild(a.firstChild);
  //           a.options && m.nodeName(a, "select") && (a.options.length = 0);
  //         }
  //         return this;
  //       },
  //       clone: function (a, b) {
  //         return (
  //           (a = null == a ? !1 : a),
  //           (b = null == b ? a : b),
  //           this.map(function () {
  //             return m.clone(this, a, b);
  //           })
  //         );
  //       },
  //       html: function (a) {
  //         return V(
  //           this,
  //           function (a) {
  //             var b = this[0] || {},
  //               c = 0,
  //               d = this.length;
  //             if (void 0 === a)
  //               return 1 === b.nodeType ? b.innerHTML.replace(fb, "") : void 0;
  //             if (
  //               !(
  //                 "string" != typeof a ||
  //                 mb.test(a) ||
  //                 (!k.htmlSerialize && gb.test(a)) ||
  //                 (!k.leadingWhitespace && hb.test(a)) ||
  //                 rb[(jb.exec(a) || ["", ""])[1].toLowerCase()]
  //               )
  //             ) {
  //               a = a.replace(ib, "<$1></$2>");
  //               try {
  //                 for (; d > c; c++)
  //                   (b = this[c] || {}),
  //                     1 === b.nodeType &&
  //                       (m.cleanData(ub(b, !1)), (b.innerHTML = a));
  //                 b = 0;
  //               } catch (e) {}
  //             }
  //             b && this.empty().append(a);
  //           },
  //           null,
  //           a,
  //           arguments.length
  //         );
  //       },
  //       replaceWith: function () {
  //         var a = arguments[0];
  //         return (
  //           this.domManip(arguments, function (b) {
  //             (a = this.parentNode),
  //               m.cleanData(ub(this)),
  //               a && a.replaceChild(b, this);
  //           }),
  //           a && (a.length || a.nodeType) ? this : this.remove()
  //         );
  //       },
  //       detach: function (a) {
  //         return this.remove(a, !0);
  //       },
  //       domManip: function (a, b) {
  //         a = e.apply([], a);
  //         var c,
  //           d,
  //           f,
  //           g,
  //           h,
  //           i,
  //           j = 0,
  //           l = this.length,
  //           n = this,
  //           o = l - 1,
  //           p = a[0],
  //           q = m.isFunction(p);
  //         if (q || (l > 1 && "string" == typeof p && !k.checkClone && nb.test(p)))
  //           return this.each(function (c) {
  //             var d = n.eq(c);
  //             q && (a[0] = p.call(this, c, d.html())), d.domManip(a, b);
  //           });
  //         if (
  //           l &&
  //           ((i = m.buildFragment(a, this[0].ownerDocument, !1, this)),
  //           (c = i.firstChild),
  //           1 === i.childNodes.length && (i = c),
  //           c)
  //         ) {
  //           for (g = m.map(ub(i, "script"), xb), f = g.length; l > j; j++)
  //             (d = i),
  //               j !== o &&
  //                 ((d = m.clone(d, !0, !0)), f && m.merge(g, ub(d, "script"))),
  //               b.call(this[j], d, j);
  //           if (f)
  //             for (
  //               h = g[g.length - 1].ownerDocument, m.map(g, yb), j = 0;
  //               f > j;
  //               j++
  //             )
  //               (d = g[j]),
  //                 ob.test(d.type || "") &&
  //                   !m._data(d, "globalEval") &&
  //                   m.contains(h, d) &&
  //                   (d.src
  //                     ? m._evalUrl && m._evalUrl(d.src)
  //                     : m.globalEval(
  //                         (d.text || d.textContent || d.innerHTML || "").replace(
  //                           qb,
  //                           ""
  //                         )
  //                       ));
  //           i = c = null;
  //         }
  //         return this;
  //       },
  //     }),
  //     m.each(
  //       {
  //         appendTo: "append",
  //         prependTo: "prepend",
  //         insertBefore: "before",
  //         insertAfter: "after",
  //         replaceAll: "replaceWith",
  //       },
  //       function (a, b) {
  //         m.fn[a] = function (a) {
  //           for (var c, d = 0, e = [], g = m(a), h = g.length - 1; h >= d; d++)
  //             (c = d === h ? this : this.clone(!0)),
  //               m(g[d])[b](c),
  //               f.apply(e, c.get());
  //           return this.pushStack(e);
  //         };
  //       }
  //     );
  //   var Cb,
  //     Db = {};
  //   function Eb(b, c) {
  //     var d,
  //       e = m(c.createElement(b)).appendTo(c.body),
  //       f =
  //         a.getDefaultComputedStyle && (d = a.getDefaultComputedStyle(e[0]))
  //           ? d.display
  //           : m.css(e[0], "display");
  //     return e.detach(), f;
  //   }
  //   function Fb(a) {
  //     var b = y,
  //       c = Db[a];
  //     return (
  //       c ||
  //         ((c = Eb(a, b)),
  //         ("none" !== c && c) ||
  //           ((Cb = (
  //             Cb || m("<iframe frameborder='0' width='0' height='0'/>")
  //           ).appendTo(b.documentElement)),
  //           (b = (Cb[0].contentWindow || Cb[0].contentDocument).document),
  //           b.write(),
  //           b.close(),
  //           (c = Eb(a, b)),
  //           Cb.detach()),
  //         (Db[a] = c)),
  //       c
  //     );
  //   }
  //   !(function () {
  //     var a;
  //     k.shrinkWrapBlocks = function () {
  //       if (null != a) return a;
  //       a = !1;
  //       var b, c, d;
  //       return (
  //         (c = y.getElementsByTagName("body")[0]),
  //         c && c.style
  //           ? ((b = y.createElement("div")),
  //             (d = y.createElement("div")),
  //             (d.style.cssText =
  //               "position:absolute;border:0;width:0;height:0;top:0;left:-9999px"),
  //             c.appendChild(d).appendChild(b),
  //             typeof b.style.zoom !== K &&
  //               ((b.style.cssText =
  //                 "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1"),
  //               (b.appendChild(y.createElement("div")).style.width = "5px"),
  //               (a = 3 !== b.offsetWidth)),
  //             c.removeChild(d),
  //             a)
  //           : void 0
  //       );
  //     };
  //   })();
  //   var Gb = /^margin/,
  //     Hb = new RegExp("^(" + S + ")(?!px)[a-z%]+$", "i"),
  //     Ib,
  //     Jb,
  //     Kb = /^(top|right|bottom|left)$/;
  //   a.getComputedStyle
  //     ? ((Ib = function (b) {
  //         return b.ownerDocument.defaultView.opener
  //           ? b.ownerDocument.defaultView.getComputedStyle(b, null)
  //           : a.getComputedStyle(b, null);
  //       }),
  //       (Jb = function (a, b, c) {
  //         var d,
  //           e,
  //           f,
  //           g,
  //           h = a.style;
  //         return (
  //           (c = c || Ib(a)),
  //           (g = c ? c.getPropertyValue(b) || c[b] : void 0),
  //           c &&
  //             ("" !== g || m.contains(a.ownerDocument, a) || (g = m.style(a, b)),
  //             Hb.test(g) &&
  //               Gb.test(b) &&
  //               ((d = h.width),
  //               (e = h.minWidth),
  //               (f = h.maxWidth),
  //               (h.minWidth = h.maxWidth = h.width = g),
  //               (g = c.width),
  //               (h.width = d),
  //               (h.minWidth = e),
  //               (h.maxWidth = f))),
  //           void 0 === g ? g : g + ""
  //         );
  //       }))
  //     : y.documentElement.currentStyle &&
  //       ((Ib = function (a) {
  //         return a.currentStyle;
  //       }),
  //       (Jb = function (a, b, c) {
  //         var d,
  //           e,
  //           f,
  //           g,
  //           h = a.style;
  //         return (
  //           (c = c || Ib(a)),
  //           (g = c ? c[b] : void 0),
  //           null == g && h && h[b] && (g = h[b]),
  //           Hb.test(g) &&
  //             !Kb.test(b) &&
  //             ((d = h.left),
  //             (e = a.runtimeStyle),
  //             (f = e && e.left),
  //             f && (e.left = a.currentStyle.left),
  //             (h.left = "fontSize" === b ? "1em" : g),
  //             (g = h.pixelLeft + "px"),
  //             (h.left = d),
  //             f && (e.left = f)),
  //           void 0 === g ? g : g + "" || "auto"
  //         );
  //       }));
  //   function Lb(a, b) {
  //     return {
  //       get: function () {
  //         var c = a();
  //         if (null != c)
  //           return c
  //             ? void delete this.get
  //             : (this.get = b).apply(this, arguments);
  //       },
  //     };
  //   }
  //   !(function () {
  //     var b, c, d, e, f, g, h;
  //     if (
  //       ((b = y.createElement("div")),
  //       (b.innerHTML =
  //         "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>"),
  //       (d = b.getElementsByTagName("a")[0]),
  //       (c = d && d.style))
  //     ) {
  //       (c.cssText = "float:left;opacity:.5"),
  //         (k.opacity = "0.5" === c.opacity),
  //         (k.cssFloat = !!c.cssFloat),
  //         (b.style.backgroundClip = "content-box"),
  //         (b.cloneNode(!0).style.backgroundClip = ""),
  //         (k.clearCloneStyle = "content-box" === b.style.backgroundClip),
  //         (k.boxSizing =
  //           "" === c.boxSizing ||
  //           "" === c.MozBoxSizing ||
  //           "" === c.WebkitBoxSizing),
  //         m.extend(k, {
  //           reliableHiddenOffsets: function () {
  //             return null == g && i(), g;
  //           },
  //           boxSizingReliable: function () {
  //             return null == f && i(), f;
  //           },
  //           pixelPosition: function () {
  //             return null == e && i(), e;
  //           },
  //           reliableMarginRight: function () {
  //             return null == h && i(), h;
  //           },
  //         });
  //       function i() {
  //         var b, c, d, i;
  //         (c = y.getElementsByTagName("body")[0]),
  //           c &&
  //             c.style &&
  //             ((b = y.createElement("div")),
  //             (d = y.createElement("div")),
  //             (d.style.cssText =
  //               "position:absolute;border:0;width:0;height:0;top:0;left:-9999px"),
  //             c.appendChild(d).appendChild(b),
  //             (b.style.cssText =
  //               "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute"),
  //             (e = f = !1),
  //             (h = !0),
  //             a.getComputedStyle &&
  //               ((e = "1%" !== (a.getComputedStyle(b, null) || {}).top),
  //               (f =
  //                 "4px" ===
  //                 (a.getComputedStyle(b, null) || { width: "4px" }).width),
  //               (i = b.appendChild(y.createElement("div"))),
  //               (i.style.cssText = b.style.cssText =
  //                 "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0"),
  //               (i.style.marginRight = i.style.width = "0"),
  //               (b.style.width = "1px"),
  //               (h = !parseFloat(
  //                 (a.getComputedStyle(i, null) || {}).marginRight
  //               )),
  //               b.removeChild(i)),
  //             (b.innerHTML = "<table><tr><td></td><td>t</td></tr></table>"),
  //             (i = b.getElementsByTagName("td")),
  //             (i[0].style.cssText = "margin:0;border:0;padding:0;display:none"),
  //             (g = 0 === i[0].offsetHeight),
  //             g &&
  //               ((i[0].style.display = ""),
  //               (i[1].style.display = "none"),
  //               (g = 0 === i[0].offsetHeight)),
  //             c.removeChild(d));
  //       }
  //     }
  //   })(),
  //     (m.swap = function (a, b, c, d) {
  //       var e,
  //         f,
  //         g = {};
  //       for (f in b) (g[f] = a.style[f]), (a.style[f] = b[f]);
  //       e = c.apply(a, d || []);
  //       for (f in b) a.style[f] = g[f];
  //       return e;
  //     });
  //   var Mb = /alpha\([^)]*\)/i,
  //     Nb = /opacity\s*=\s*([^)]*)/,
  //     Ob = /^(none|table(?!-c[ea]).+)/,
  //     Pb = new RegExp("^(" + S + ")(.*)$", "i"),
  //     Qb = new RegExp("^([+-])=(" + S + ")", "i"),
  //     Rb = { position: "absolute", visibility: "hidden", display: "block" },
  //     Sb = { letterSpacing: "0", fontWeight: "400" },
  //     Tb = ["Webkit", "O", "Moz", "ms"];
  //   function Ub(a, b) {
  //     if (b in a) return b;
  //     var c = b.charAt(0).toUpperCase() + b.slice(1),
  //       d = b,
  //       e = Tb.length;
  //     while (e--) if (((b = Tb[e] + c), b in a)) return b;
  //     return d;
  //   }
  //   function Vb(a, b) {
  //     for (var c, d, e, f = [], g = 0, h = a.length; h > g; g++)
  //       (d = a[g]),
  //         d.style &&
  //           ((f[g] = m._data(d, "olddisplay")),
  //           (c = d.style.display),
  //           b
  //             ? (f[g] || "none" !== c || (d.style.display = ""),
  //               "" === d.style.display &&
  //                 U(d) &&
  //                 (f[g] = m._data(d, "olddisplay", Fb(d.nodeName))))
  //             : ((e = U(d)),
  //               ((c && "none" !== c) || !e) &&
  //                 m._data(d, "olddisplay", e ? c : m.css(d, "display"))));
  //     for (g = 0; h > g; g++)
  //       (d = a[g]),
  //         d.style &&
  //           ((b && "none" !== d.style.display && "" !== d.style.display) ||
  //             (d.style.display = b ? f[g] || "" : "none"));
  //     return a;
  //   }
  //   function Wb(a, b, c) {
  //     var d = Pb.exec(b);
  //     return d ? Math.max(0, d[1] - (c || 0)) + (d[2] || "px") : b;
  //   }
  //   function Xb(a, b, c, d, e) {
  //     for (
  //       var f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0,
  //         g = 0;
  //       4 > f;
  //       f += 2
  //     )
  //       "margin" === c && (g += m.css(a, c + T[f], !0, e)),
  //         d
  //           ? ("content" === c && (g -= m.css(a, "padding" + T[f], !0, e)),
  //             "margin" !== c && (g -= m.css(a, "border" + T[f] + "Width", !0, e)))
  //           : ((g += m.css(a, "padding" + T[f], !0, e)),
  //             "padding" !== c &&
  //               (g += m.css(a, "border" + T[f] + "Width", !0, e)));
  //     return g;
  //   }
  //   function Yb(a, b, c) {
  //     var d = !0,
  //       e = "width" === b ? a.offsetWidth : a.offsetHeight,
  //       f = Ib(a),
  //       g = k.boxSizing && "border-box" === m.css(a, "boxSizing", !1, f);
  //     if (0 >= e || null == e) {
  //       if (
  //         ((e = Jb(a, b, f)),
  //         (0 > e || null == e) && (e = a.style[b]),
  //         Hb.test(e))
  //       )
  //         return e;
  //       (d = g && (k.boxSizingReliable() || e === a.style[b])),
  //         (e = parseFloat(e) || 0);
  //     }
  //     return e + Xb(a, b, c || (g ? "border" : "content"), d, f) + "px";
  //   }
  //   m.extend({
  //     cssHooks: {
  //       opacity: {
  //         get: function (a, b) {
  //           if (b) {
  //             var c = Jb(a, "opacity");
  //             return "" === c ? "1" : c;
  //           }
  //         },
  //       },
  //     },
  //     cssNumber: {
  //       columnCount: !0,
  //       fillOpacity: !0,
  //       flexGrow: !0,
  //       flexShrink: !0,
  //       fontWeight: !0,
  //       lineHeight: !0,
  //       opacity: !0,
  //       order: !0,
  //       orphans: !0,
  //       widows: !0,
  //       zIndex: !0,
  //       zoom: !0,
  //     },
  //     cssProps: { float: k.cssFloat ? "cssFloat" : "styleFloat" },
  //     style: function (a, b, c, d) {
  //       if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
  //         var e,
  //           f,
  //           g,
  //           h = m.camelCase(b),
  //           i = a.style;
  //         if (
  //           ((b = m.cssProps[h] || (m.cssProps[h] = Ub(i, h))),
  //           (g = m.cssHooks[b] || m.cssHooks[h]),
  //           void 0 === c)
  //         )
  //           return g && "get" in g && void 0 !== (e = g.get(a, !1, d)) ? e : i[b];
  //         if (
  //           ((f = typeof c),
  //           "string" === f &&
  //             (e = Qb.exec(c)) &&
  //             ((c = (e[1] + 1) * e[2] + parseFloat(m.css(a, b))), (f = "number")),
  //           null != c &&
  //             c === c &&
  //             ("number" !== f || m.cssNumber[h] || (c += "px"),
  //             k.clearCloneStyle ||
  //               "" !== c ||
  //               0 !== b.indexOf("background") ||
  //               (i[b] = "inherit"),
  //             !(g && "set" in g && void 0 === (c = g.set(a, c, d)))))
  //         )
  //           try {
  //             i[b] = c;
  //           } catch (j) {}
  //       }
  //     },
  //     css: function (a, b, c, d) {
  //       var e,
  //         f,
  //         g,
  //         h = m.camelCase(b);
  //       return (
  //         (b = m.cssProps[h] || (m.cssProps[h] = Ub(a.style, h))),
  //         (g = m.cssHooks[b] || m.cssHooks[h]),
  //         g && "get" in g && (f = g.get(a, !0, c)),
  //         void 0 === f && (f = Jb(a, b, d)),
  //         "normal" === f && b in Sb && (f = Sb[b]),
  //         "" === c || c
  //           ? ((e = parseFloat(f)), c === !0 || m.isNumeric(e) ? e || 0 : f)
  //           : f
  //       );
  //     },
  //   }),
  //     m.each(["height", "width"], function (a, b) {
  //       m.cssHooks[b] = {
  //         get: function (a, c, d) {
  //           return c
  //             ? Ob.test(m.css(a, "display")) && 0 === a.offsetWidth
  //               ? m.swap(a, Rb, function () {
  //                   return Yb(a, b, d);
  //                 })
  //               : Yb(a, b, d)
  //             : void 0;
  //         },
  //         set: function (a, c, d) {
  //           var e = d && Ib(a);
  //           return Wb(
  //             a,
  //             c,
  //             d
  //               ? Xb(
  //                   a,
  //                   b,
  //                   d,
  //                   k.boxSizing && "border-box" === m.css(a, "boxSizing", !1, e),
  //                   e
  //                 )
  //               : 0
  //           );
  //         },
  //       };
  //     }),
  //     k.opacity ||
  //       (m.cssHooks.opacity = {
  //         get: function (a, b) {
  //           return Nb.test(
  //             (b && a.currentStyle ? a.currentStyle.filter : a.style.filter) || ""
  //           )
  //             ? 0.01 * parseFloat(RegExp.$1) + ""
  //             : b
  //             ? "1"
  //             : "";
  //         },
  //         set: function (a, b) {
  //           var c = a.style,
  //             d = a.currentStyle,
  //             e = m.isNumeric(b) ? "alpha(opacity=" + 100 * b + ")" : "",
  //             f = (d && d.filter) || c.filter || "";
  //           (c.zoom = 1),
  //             ((b >= 1 || "" === b) &&
  //               "" === m.trim(f.replace(Mb, "")) &&
  //               c.removeAttribute &&
  //               (c.removeAttribute("filter"), "" === b || (d && !d.filter))) ||
  //               (c.filter = Mb.test(f) ? f.replace(Mb, e) : f + " " + e);
  //         },
  //       }),
  //     (m.cssHooks.marginRight = Lb(k.reliableMarginRight, function (a, b) {
  //       return b
  //         ? m.swap(a, { display: "inline-block" }, Jb, [a, "marginRight"])
  //         : void 0;
  //     })),
  //     m.each({ margin: "", padding: "", border: "Width" }, function (a, b) {
  //       (m.cssHooks[a + b] = {
  //         expand: function (c) {
  //           for (
  //             var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c];
  //             4 > d;
  //             d++
  //           )
  //             e[a + T[d] + b] = f[d] || f[d - 2] || f[0];
  //           return e;
  //         },
  //       }),
  //         Gb.test(a) || (m.cssHooks[a + b].set = Wb);
  //     }),
  //     m.fn.extend({
  //       css: function (a, b) {
  //         return V(
  //           this,
  //           function (a, b, c) {
  //             var d,
  //               e,
  //               f = {},
  //               g = 0;
  //             if (m.isArray(b)) {
  //               for (d = Ib(a), e = b.length; e > g; g++)
  //                 f[b[g]] = m.css(a, b[g], !1, d);
  //               return f;
  //             }
  //             return void 0 !== c ? m.style(a, b, c) : m.css(a, b);
  //           },
  //           a,
  //           b,
  //           arguments.length > 1
  //         );
  //       },
  //       show: function () {
  //         return Vb(this, !0);
  //       },
  //       hide: function () {
  //         return Vb(this);
  //       },
  //       toggle: function (a) {
  //         return "boolean" == typeof a
  //           ? a
  //             ? this.show()
  //             : this.hide()
  //           : this.each(function () {
  //               U(this) ? m(this).show() : m(this).hide();
  //             });
  //       },
  //     });
  //   function Zb(a, b, c, d, e) {
  //     return new Zb.prototype.init(a, b, c, d, e);
  //   }
  //   (m.Tween = Zb),
  //     (Zb.prototype = {
  //       constructor: Zb,
  //       init: function (a, b, c, d, e, f) {
  //         (this.elem = a),
  //           (this.prop = c),
  //           (this.easing = e || "swing"),
  //           (this.options = b),
  //           (this.start = this.now = this.cur()),
  //           (this.end = d),
  //           (this.unit = f || (m.cssNumber[c] ? "" : "px"));
  //       },
  //       cur: function () {
  //         var a = Zb.propHooks[this.prop];
  //         return a && a.get ? a.get(this) : Zb.propHooks._default.get(this);
  //       },
  //       run: function (a) {
  //         var b,
  //           c = Zb.propHooks[this.prop];
  //         return (
  //           (this.pos = b =
  //             this.options.duration
  //               ? m.easing[this.easing](
  //                   a,
  //                   this.options.duration * a,
  //                   0,
  //                   1,
  //                   this.options.duration
  //                 )
  //               : a),
  //           (this.now = (this.end - this.start) * b + this.start),
  //           this.options.step &&
  //             this.options.step.call(this.elem, this.now, this),
  //           c && c.set ? c.set(this) : Zb.propHooks._default.set(this),
  //           this
  //         );
  //       },
  //     }),
  //     (Zb.prototype.init.prototype = Zb.prototype),
  //     (Zb.propHooks = {
  //       _default: {
  //         get: function (a) {
  //           var b;
  //           return null == a.elem[a.prop] ||
  //             (a.elem.style && null != a.elem.style[a.prop])
  //             ? ((b = m.css(a.elem, a.prop, "")), b && "auto" !== b ? b : 0)
  //             : a.elem[a.prop];
  //         },
  //         set: function (a) {
  //           m.fx.step[a.prop]
  //             ? m.fx.step[a.prop](a)
  //             : a.elem.style &&
  //               (null != a.elem.style[m.cssProps[a.prop]] || m.cssHooks[a.prop])
  //             ? m.style(a.elem, a.prop, a.now + a.unit)
  //             : (a.elem[a.prop] = a.now);
  //         },
  //       },
  //     }),
  //     (Zb.propHooks.scrollTop = Zb.propHooks.scrollLeft =
  //       {
  //         set: function (a) {
  //           a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now);
  //         },
  //       }),
  //     (m.easing = {
  //       linear: function (a) {
  //         return a;
  //       },
  //       swing: function (a) {
  //         return 0.5 - Math.cos(a * Math.PI) / 2;
  //       },
  //     }),
  //     (m.fx = Zb.prototype.init),
  //     (m.fx.step = {});
  //   var $b,
  //     _b,
  //     ac = /^(?:toggle|show|hide)$/,
  //     bc = new RegExp("^(?:([+-])=|)(" + S + ")([a-z%]*)$", "i"),
  //     cc = /queueHooks$/,
  //     dc = [ic],
  //     ec = {
  //       "*": [
  //         function (a, b) {
  //           var c = this.createTween(a, b),
  //             d = c.cur(),
  //             e = bc.exec(b),
  //             f = (e && e[3]) || (m.cssNumber[a] ? "" : "px"),
  //             g =
  //               (m.cssNumber[a] || ("px" !== f && +d)) &&
  //               bc.exec(m.css(c.elem, a)),
  //             h = 1,
  //             i = 20;
  //           if (g && g[3] !== f) {
  //             (f = f || g[3]), (e = e || []), (g = +d || 1);
  //             do (h = h || ".5"), (g /= h), m.style(c.elem, a, g + f);
  //             while (h !== (h = c.cur() / d) && 1 !== h && --i);
  //           }
  //           return (
  //             e &&
  //               ((g = c.start = +g || +d || 0),
  //               (c.unit = f),
  //               (c.end = e[1] ? g + (e[1] + 1) * e[2] : +e[2])),
  //             c
  //           );
  //         },
  //       ],
  //     };
  //   function fc() {
  //     return (
  //       setTimeout(function () {
  //         $b = void 0;
  //       }),
  //       ($b = m.now())
  //     );
  //   }
  //   function gc(a, b) {
  //     var c,
  //       d = { height: a },
  //       e = 0;
  //     for (b = b ? 1 : 0; 4 > e; e += 2 - b)
  //       (c = T[e]), (d["margin" + c] = d["padding" + c] = a);
  //     return b && (d.opacity = d.width = a), d;
  //   }
  //   function hc(a, b, c) {
  //     for (
  //       var d, e = (ec[b] || []).concat(ec["*"]), f = 0, g = e.length;
  //       g > f;
  //       f++
  //     )
  //       if ((d = e[f].call(c, b, a))) return d;
  //   }
  //   function ic(a, b, c) {
  //     var d,
  //       e,
  //       f,
  //       g,
  //       h,
  //       i,
  //       j,
  //       l,
  //       n = this,
  //       o = {},
  //       p = a.style,
  //       q = a.nodeType && U(a),
  //       r = m._data(a, "fxshow");
  //     c.queue ||
  //       ((h = m._queueHooks(a, "fx")),
  //       null == h.unqueued &&
  //         ((h.unqueued = 0),
  //         (i = h.empty.fire),
  //         (h.empty.fire = function () {
  //           h.unqueued || i();
  //         })),
  //       h.unqueued++,
  //       n.always(function () {
  //         n.always(function () {
  //           h.unqueued--, m.queue(a, "fx").length || h.empty.fire();
  //         });
  //       })),
  //       1 === a.nodeType &&
  //         ("height" in b || "width" in b) &&
  //         ((c.overflow = [p.overflow, p.overflowX, p.overflowY]),
  //         (j = m.css(a, "display")),
  //         (l = "none" === j ? m._data(a, "olddisplay") || Fb(a.nodeName) : j),
  //         "inline" === l &&
  //           "none" === m.css(a, "float") &&
  //           (k.inlineBlockNeedsLayout && "inline" !== Fb(a.nodeName)
  //             ? (p.zoom = 1)
  //             : (p.display = "inline-block"))),
  //       c.overflow &&
  //         ((p.overflow = "hidden"),
  //         k.shrinkWrapBlocks() ||
  //           n.always(function () {
  //             (p.overflow = c.overflow[0]),
  //               (p.overflowX = c.overflow[1]),
  //               (p.overflowY = c.overflow[2]);
  //           }));
  //     for (d in b)
  //       if (((e = b[d]), ac.exec(e))) {
  //         if (
  //           (delete b[d], (f = f || "toggle" === e), e === (q ? "hide" : "show"))
  //         ) {
  //           if ("show" !== e || !r || void 0 === r[d]) continue;
  //           q = !0;
  //         }
  //         o[d] = (r && r[d]) || m.style(a, d);
  //       } else j = void 0;
  //     if (m.isEmptyObject(o))
  //       "inline" === ("none" === j ? Fb(a.nodeName) : j) && (p.display = j);
  //     else {
  //       r ? "hidden" in r && (q = r.hidden) : (r = m._data(a, "fxshow", {})),
  //         f && (r.hidden = !q),
  //         q
  //           ? m(a).show()
  //           : n.done(function () {
  //               m(a).hide();
  //             }),
  //         n.done(function () {
  //           var b;
  //           m._removeData(a, "fxshow");
  //           for (b in o) m.style(a, b, o[b]);
  //         });
  //       for (d in o)
  //         (g = hc(q ? r[d] : 0, d, n)),
  //           d in r ||
  //             ((r[d] = g.start),
  //             q &&
  //               ((g.end = g.start),
  //               (g.start = "width" === d || "height" === d ? 1 : 0)));
  //     }
  //   }
  //   function jc(a, b) {
  //     var c, d, e, f, g;
  //     for (c in a)
  //       if (
  //         ((d = m.camelCase(c)),
  //         (e = b[d]),
  //         (f = a[c]),
  //         m.isArray(f) && ((e = f[1]), (f = a[c] = f[0])),
  //         c !== d && ((a[d] = f), delete a[c]),
  //         (g = m.cssHooks[d]),
  //         g && "expand" in g)
  //       ) {
  //         (f = g.expand(f)), delete a[d];
  //         for (c in f) c in a || ((a[c] = f[c]), (b[c] = e));
  //       } else b[d] = e;
  //   }
  //   function kc(a, b, c) {
  //     var d,
  //       e,
  //       f = 0,
  //       g = dc.length,
  //       h = m.Deferred().always(function () {
  //         delete i.elem;
  //       }),
  //       i = function () {
  //         if (e) return !1;
  //         for (
  //           var b = $b || fc(),
  //             c = Math.max(0, j.startTime + j.duration - b),
  //             d = c / j.duration || 0,
  //             f = 1 - d,
  //             g = 0,
  //             i = j.tweens.length;
  //           i > g;
  //           g++
  //         )
  //           j.tweens[g].run(f);
  //         return (
  //           h.notifyWith(a, [j, f, c]),
  //           1 > f && i ? c : (h.resolveWith(a, [j]), !1)
  //         );
  //       },
  //       j = h.promise({
  //         elem: a,
  //         props: m.extend({}, b),
  //         opts: m.extend(!0, { specialEasing: {} }, c),
  //         originalProperties: b,
  //         originalOptions: c,
  //         startTime: $b || fc(),
  //         duration: c.duration,
  //         tweens: [],
  //         createTween: function (b, c) {
  //           var d = m.Tween(
  //             a,
  //             j.opts,
  //             b,
  //             c,
  //             j.opts.specialEasing[b] || j.opts.easing
  //           );
  //           return j.tweens.push(d), d;
  //         },
  //         stop: function (b) {
  //           var c = 0,
  //             d = b ? j.tweens.length : 0;
  //           if (e) return this;
  //           for (e = !0; d > c; c++) j.tweens[c].run(1);
  //           return b ? h.resolveWith(a, [j, b]) : h.rejectWith(a, [j, b]), this;
  //         },
  //       }),
  //       k = j.props;
  //     for (jc(k, j.opts.specialEasing); g > f; f++)
  //       if ((d = dc[f].call(j, a, k, j.opts))) return d;
  //     return (
  //       m.map(k, hc, j),
  //       m.isFunction(j.opts.start) && j.opts.start.call(a, j),
  //       m.fx.timer(m.extend(i, { elem: a, anim: j, queue: j.opts.queue })),
  //       j
  //         .progress(j.opts.progress)
  //         .done(j.opts.done, j.opts.complete)
  //         .fail(j.opts.fail)
  //         .always(j.opts.always)
  //     );
  //   }
  //   (m.Animation = m.extend(kc, {
  //     tweener: function (a, b) {
  //       m.isFunction(a) ? ((b = a), (a = ["*"])) : (a = a.split(" "));
  //       for (var c, d = 0, e = a.length; e > d; d++)
  //         (c = a[d]), (ec[c] = ec[c] || []), ec[c].unshift(b);
  //     },
  //     prefilter: function (a, b) {
  //       b ? dc.unshift(a) : dc.push(a);
  //     },
  //   })),
  //     (m.speed = function (a, b, c) {
  //       var d =
  //         a && "object" == typeof a
  //           ? m.extend({}, a)
  //           : {
  //               complete: c || (!c && b) || (m.isFunction(a) && a),
  //               duration: a,
  //               easing: (c && b) || (b && !m.isFunction(b) && b),
  //             };
  //       return (
  //         (d.duration = m.fx.off
  //           ? 0
  //           : "number" == typeof d.duration
  //           ? d.duration
  //           : d.duration in m.fx.speeds
  //           ? m.fx.speeds[d.duration]
  //           : m.fx.speeds._default),
  //         (null == d.queue || d.queue === !0) && (d.queue = "fx"),
  //         (d.old = d.complete),
  //         (d.complete = function () {
  //           m.isFunction(d.old) && d.old.call(this),
  //             d.queue && m.dequeue(this, d.queue);
  //         }),
  //         d
  //       );
  //     }),
  //     m.fn.extend({
  //       fadeTo: function (a, b, c, d) {
  //         return this.filter(U)
  //           .css("opacity", 0)
  //           .show()
  //           .end()
  //           .animate({ opacity: b }, a, c, d);
  //       },
  //       animate: function (a, b, c, d) {
  //         var e = m.isEmptyObject(a),
  //           f = m.speed(b, c, d),
  //           g = function () {
  //             var b = kc(this, m.extend({}, a), f);
  //             (e || m._data(this, "finish")) && b.stop(!0);
  //           };
  //         return (
  //           (g.finish = g),
  //           e || f.queue === !1 ? this.each(g) : this.queue(f.queue, g)
  //         );
  //       },
  //       stop: function (a, b, c) {
  //         var d = function (a) {
  //           var b = a.stop;
  //           delete a.stop, b(c);
  //         };
  //         return (
  //           "string" != typeof a && ((c = b), (b = a), (a = void 0)),
  //           b && a !== !1 && this.queue(a || "fx", []),
  //           this.each(function () {
  //             var b = !0,
  //               e = null != a && a + "queueHooks",
  //               f = m.timers,
  //               g = m._data(this);
  //             if (e) g[e] && g[e].stop && d(g[e]);
  //             else for (e in g) g[e] && g[e].stop && cc.test(e) && d(g[e]);
  //             for (e = f.length; e--; )
  //               f[e].elem !== this ||
  //                 (null != a && f[e].queue !== a) ||
  //                 (f[e].anim.stop(c), (b = !1), f.splice(e, 1));
  //             (b || !c) && m.dequeue(this, a);
  //           })
  //         );
  //       },
  //       finish: function (a) {
  //         return (
  //           a !== !1 && (a = a || "fx"),
  //           this.each(function () {
  //             var b,
  //               c = m._data(this),
  //               d = c[a + "queue"],
  //               e = c[a + "queueHooks"],
  //               f = m.timers,
  //               g = d ? d.length : 0;
  //             for (
  //               c.finish = !0,
  //                 m.queue(this, a, []),
  //                 e && e.stop && e.stop.call(this, !0),
  //                 b = f.length;
  //               b--;
  
  //             )
  //               f[b].elem === this &&
  //                 f[b].queue === a &&
  //                 (f[b].anim.stop(!0), f.splice(b, 1));
  //             for (b = 0; g > b; b++)
  //               d[b] && d[b].finish && d[b].finish.call(this);
  //             delete c.finish;
  //           })
  //         );
  //       },
  //     }),
  //     m.each(["toggle", "show", "hide"], function (a, b) {
  //       var c = m.fn[b];
  //       m.fn[b] = function (a, d, e) {
  //         return null == a || "boolean" == typeof a
  //           ? c.apply(this, arguments)
  //           : this.animate(gc(b, !0), a, d, e);
  //       };
  //     }),
  //     m.each(
  //       {
  //         slideDown: gc("show"),
  //         slideUp: gc("hide"),
  //         slideToggle: gc("toggle"),
  //         fadeIn: { opacity: "show" },
  //         fadeOut: { opacity: "hide" },
  //         fadeToggle: { opacity: "toggle" },
  //       },
  //       function (a, b) {
  //         m.fn[a] = function (a, c, d) {
  //           return this.animate(b, a, c, d);
  //         };
  //       }
  //     ),
  //     (m.timers = []),
  //     (m.fx.tick = function () {
  //       var a,
  //         b = m.timers,
  //         c = 0;
  //       for ($b = m.now(); c < b.length; c++)
  //         (a = b[c]), a() || b[c] !== a || b.splice(c--, 1);
  //       b.length || m.fx.stop(), ($b = void 0);
  //     }),
  //     (m.fx.timer = function (a) {
  //       m.timers.push(a), a() ? m.fx.start() : m.timers.pop();
  //     }),
  //     (m.fx.interval = 13),
  //     (m.fx.start = function () {
  //       _b || (_b = setInterval(m.fx.tick, m.fx.interval));
  //     }),
  //     (m.fx.stop = function () {
  //       clearInterval(_b), (_b = null);
  //     }),
  //     (m.fx.speeds = { slow: 600, fast: 200, _default: 400 }),
  //     (m.fn.delay = function (a, b) {
  //       return (
  //         (a = m.fx ? m.fx.speeds[a] || a : a),
  //         (b = b || "fx"),
  //         this.queue(b, function (b, c) {
  //           var d = setTimeout(b, a);
  //           c.stop = function () {
  //             clearTimeout(d);
  //           };
  //         })
  //       );
  //     }),
  //     (function () {
  //       var a, b, c, d, e;
  //       (b = y.createElement("div")),
  //         b.setAttribute("className", "t"),
  //         (b.innerHTML =
  //           "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>"),
  //         (d = b.getElementsByTagName("a")[0]),
  //         (c = y.createElement("select")),
  //         (e = c.appendChild(y.createElement("option"))),
  //         (a = b.getElementsByTagName("input")[0]),
  //         (d.style.cssText = "top:1px"),
  //         (k.getSetAttribute = "t" !== b.className),
  //         (k.style = /top/.test(d.getAttribute("style"))),
  //         (k.hrefNormalized = "/a" === d.getAttribute("href")),
  //         (k.checkOn = !!a.value),
  //         (k.optSelected = e.selected),
  //         (k.enctype = !!y.createElement("form").enctype),
  //         (c.disabled = !0),
  //         (k.optDisabled = !e.disabled),
  //         (a = y.createElement("input")),
  //         a.setAttribute("value", ""),
  //         (k.input = "" === a.getAttribute("value")),
  //         (a.value = "t"),
  //         a.setAttribute("type", "radio"),
  //         (k.radioValue = "t" === a.value);
  //     })();
  //   var lc = /\r/g;
  //   m.fn.extend({
  //     val: function (a) {
  //       var b,
  //         c,
  //         d,
  //         e = this[0];
  //       {
  //         if (arguments.length)
  //           return (
  //             (d = m.isFunction(a)),
  //             this.each(function (c) {
  //               var e;
  //               1 === this.nodeType &&
  //                 ((e = d ? a.call(this, c, m(this).val()) : a),
  //                 null == e
  //                   ? (e = "")
  //                   : "number" == typeof e
  //                   ? (e += "")
  //                   : m.isArray(e) &&
  //                     (e = m.map(e, function (a) {
  //                       return null == a ? "" : a + "";
  //                     })),
  //                 (b =
  //                   m.valHooks[this.type] ||
  //                   m.valHooks[this.nodeName.toLowerCase()]),
  //                 (b && "set" in b && void 0 !== b.set(this, e, "value")) ||
  //                   (this.value = e));
  //             })
  //           );
  //         if (e)
  //           return (
  //             (b = m.valHooks[e.type] || m.valHooks[e.nodeName.toLowerCase()]),
  //             b && "get" in b && void 0 !== (c = b.get(e, "value"))
  //               ? c
  //               : ((c = e.value),
  //                 "string" == typeof c ? c.replace(lc, "") : null == c ? "" : c)
  //           );
  //       }
  //     },
  //   }),
  //     m.extend({
  //       valHooks: {
  //         option: {
  //           get: function (a) {
  //             var b = m.find.attr(a, "value");
  //             return null != b ? b : m.trim(m.text(a));
  //           },
  //         },
  //         select: {
  //           get: function (a) {
  //             for (
  //               var b,
  //                 c,
  //                 d = a.options,
  //                 e = a.selectedIndex,
  //                 f = "select-one" === a.type || 0 > e,
  //                 g = f ? null : [],
  //                 h = f ? e + 1 : d.length,
  //                 i = 0 > e ? h : f ? e : 0;
  //               h > i;
  //               i++
  //             )
  //               if (
  //                 ((c = d[i]),
  //                 !(
  //                   (!c.selected && i !== e) ||
  //                   (k.optDisabled
  //                     ? c.disabled
  //                     : null !== c.getAttribute("disabled")) ||
  //                   (c.parentNode.disabled &&
  //                     m.nodeName(c.parentNode, "optgroup"))
  //                 ))
  //               ) {
  //                 if (((b = m(c).val()), f)) return b;
  //                 g.push(b);
  //               }
  //             return g;
  //           },
  //           set: function (a, b) {
  //             var c,
  //               d,
  //               e = a.options,
  //               f = m.makeArray(b),
  //               g = e.length;
  //             while (g--)
  //               if (((d = e[g]), m.inArray(m.valHooks.option.get(d), f) >= 0))
  //                 try {
  //                   d.selected = c = !0;
  //                 } catch (h) {
  //                   d.scrollHeight;
  //                 }
  //               else d.selected = !1;
  //             return c || (a.selectedIndex = -1), e;
  //           },
  //         },
  //       },
  //     }),
  //     m.each(["radio", "checkbox"], function () {
  //       (m.valHooks[this] = {
  //         set: function (a, b) {
  //           return m.isArray(b)
  //             ? (a.checked = m.inArray(m(a).val(), b) >= 0)
  //             : void 0;
  //         },
  //       }),
  //         k.checkOn ||
  //           (m.valHooks[this].get = function (a) {
  //             return null === a.getAttribute("value") ? "on" : a.value;
  //           });
  //     });
  //   var mc,
  //     nc,
  //     oc = m.expr.attrHandle,
  //     pc = /^(?:checked|selected)$/i,
  //     qc = k.getSetAttribute,
  //     rc = k.input;
  //   m.fn.extend({
  //     attr: function (a, b) {
  //       return V(this, m.attr, a, b, arguments.length > 1);
  //     },
  //     removeAttr: function (a) {
  //       return this.each(function () {
  //         m.removeAttr(this, a);
  //       });
  //     },
  //   }),
  //     m.extend({
  //       attr: function (a, b, c) {
  //         var d,
  //           e,
  //           f = a.nodeType;
  //         if (a && 3 !== f && 8 !== f && 2 !== f)
  //           return typeof a.getAttribute === K
  //             ? m.prop(a, b, c)
  //             : ((1 === f && m.isXMLDoc(a)) ||
  //                 ((b = b.toLowerCase()),
  //                 (d = m.attrHooks[b] || (m.expr.match.bool.test(b) ? nc : mc))),
  //               void 0 === c
  //                 ? d && "get" in d && null !== (e = d.get(a, b))
  //                   ? e
  //                   : ((e = m.find.attr(a, b)), null == e ? void 0 : e)
  //                 : null !== c
  //                 ? d && "set" in d && void 0 !== (e = d.set(a, c, b))
  //                   ? e
  //                   : (a.setAttribute(b, c + ""), c)
  //                 : void m.removeAttr(a, b));
  //       },
  //       removeAttr: function (a, b) {
  //         var c,
  //           d,
  //           e = 0,
  //           f = b && b.match(E);
  //         if (f && 1 === a.nodeType)
  //           while ((c = f[e++]))
  //             (d = m.propFix[c] || c),
  //               m.expr.match.bool.test(c)
  //                 ? (rc && qc) || !pc.test(c)
  //                   ? (a[d] = !1)
  //                   : (a[m.camelCase("default-" + c)] = a[d] = !1)
  //                 : m.attr(a, c, ""),
  //               a.removeAttribute(qc ? c : d);
  //       },
  //       attrHooks: {
  //         type: {
  //           set: function (a, b) {
  //             if (!k.radioValue && "radio" === b && m.nodeName(a, "input")) {
  //               var c = a.value;
  //               return a.setAttribute("type", b), c && (a.value = c), b;
  //             }
  //           },
  //         },
  //       },
  //     }),
  //     (nc = {
  //       set: function (a, b, c) {
  //         return (
  //           b === !1
  //             ? m.removeAttr(a, c)
  //             : (rc && qc) || !pc.test(c)
  //             ? a.setAttribute((!qc && m.propFix[c]) || c, c)
  //             : (a[m.camelCase("default-" + c)] = a[c] = !0),
  //           c
  //         );
  //       },
  //     }),
  //     m.each(m.expr.match.bool.source.match(/\w+/g), function (a, b) {
  //       var c = oc[b] || m.find.attr;
  //       oc[b] =
  //         (rc && qc) || !pc.test(b)
  //           ? function (a, b, d) {
  //               var e, f;
  //               return (
  //                 d ||
  //                   ((f = oc[b]),
  //                   (oc[b] = e),
  //                   (e = null != c(a, b, d) ? b.toLowerCase() : null),
  //                   (oc[b] = f)),
  //                 e
  //               );
  //             }
  //           : function (a, b, c) {
  //               return c
  //                 ? void 0
  //                 : a[m.camelCase("default-" + b)]
  //                 ? b.toLowerCase()
  //                 : null;
  //             };
  //     }),
  //     (rc && qc) ||
  //       (m.attrHooks.value = {
  //         set: function (a, b, c) {
  //           return m.nodeName(a, "input")
  //             ? void (a.defaultValue = b)
  //             : mc && mc.set(a, b, c);
  //         },
  //       }),
  //     qc ||
  //       ((mc = {
  //         set: function (a, b, c) {
  //           var d = a.getAttributeNode(c);
  //           return (
  //             d || a.setAttributeNode((d = a.ownerDocument.createAttribute(c))),
  //             (d.value = b += ""),
  //             "value" === c || b === a.getAttribute(c) ? b : void 0
  //           );
  //         },
  //       }),
  //       (oc.id =
  //         oc.name =
  //         oc.coords =
  //           function (a, b, c) {
  //             var d;
  //             return c
  //               ? void 0
  //               : (d = a.getAttributeNode(b)) && "" !== d.value
  //               ? d.value
  //               : null;
  //           }),
  //       (m.valHooks.button = {
  //         get: function (a, b) {
  //           var c = a.getAttributeNode(b);
  //           return c && c.specified ? c.value : void 0;
  //         },
  //         set: mc.set,
  //       }),
  //       (m.attrHooks.contenteditable = {
  //         set: function (a, b, c) {
  //           mc.set(a, "" === b ? !1 : b, c);
  //         },
  //       }),
  //       m.each(["width", "height"], function (a, b) {
  //         m.attrHooks[b] = {
  //           set: function (a, c) {
  //             return "" === c ? (a.setAttribute(b, "auto"), c) : void 0;
  //           },
  //         };
  //       })),
  //     k.style ||
  //       (m.attrHooks.style = {
  //         get: function (a) {
  //           return a.style.cssText || void 0;
  //         },
  //         set: function (a, b) {
  //           return (a.style.cssText = b + "");
  //         },
  //       });
  //   var sc = /^(?:input|select|textarea|button|object)$/i,
  //     tc = /^(?:a|area)$/i;
  //   m.fn.extend({
  //     prop: function (a, b) {
  //       return V(this, m.prop, a, b, arguments.length > 1);
  //     },
  //     removeProp: function (a) {
  //       return (
  //         (a = m.propFix[a] || a),
  //         this.each(function () {
  //           try {
  //             (this[a] = void 0), delete this[a];
  //           } catch (b) {}
  //         })
  //       );
  //     },
  //   }),
  //     m.extend({
  //       propFix: { for: "htmlFor", class: "className" },
  //       prop: function (a, b, c) {
  //         var d,
  //           e,
  //           f,
  //           g = a.nodeType;
  //         if (a && 3 !== g && 8 !== g && 2 !== g)
  //           return (
  //             (f = 1 !== g || !m.isXMLDoc(a)),
  //             f && ((b = m.propFix[b] || b), (e = m.propHooks[b])),
  //             void 0 !== c
  //               ? e && "set" in e && void 0 !== (d = e.set(a, c, b))
  //                 ? d
  //                 : (a[b] = c)
  //               : e && "get" in e && null !== (d = e.get(a, b))
  //               ? d
  //               : a[b]
  //           );
  //       },
  //       propHooks: {
  //         tabIndex: {
  //           get: function (a) {
  //             var b = m.find.attr(a, "tabindex");
  //             return b
  //               ? parseInt(b, 10)
  //               : sc.test(a.nodeName) || (tc.test(a.nodeName) && a.href)
  //               ? 0
  //               : -1;
  //           },
  //         },
  //       },
  //     }),
  //     k.hrefNormalized ||
  //       m.each(["href", "src"], function (a, b) {
  //         m.propHooks[b] = {
  //           get: function (a) {
  //             return a.getAttribute(b, 4);
  //           },
  //         };
  //       }),
  //     k.optSelected ||
  //       (m.propHooks.selected = {
  //         get: function (a) {
  //           var b = a.parentNode;
  //           return (
  //             b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex),
  //             null
  //           );
  //         },
  //       }),
  //     m.each(
  //       [
  //         "tabIndex",
  //         "readOnly",
  //         "maxLength",
  //         "cellSpacing",
  //         "cellPadding",
  //         "rowSpan",
  //         "colSpan",
  //         "useMap",
  //         "frameBorder",
  //         "contentEditable",
  //       ],
  //       function () {
  //         m.propFix[this.toLowerCase()] = this;
  //       }
  //     ),
  //     k.enctype || (m.propFix.enctype = "encoding");
  //   var uc = /[\t\r\n\f]/g;
  //   m.fn.extend({
  //     addClass: function (a) {
  //       var b,
  //         c,
  //         d,
  //         e,
  //         f,
  //         g,
  //         h = 0,
  //         i = this.length,
  //         j = "string" == typeof a && a;
  //       if (m.isFunction(a))
  //         return this.each(function (b) {
  //           m(this).addClass(a.call(this, b, this.className));
  //         });
  //       if (j)
  //         for (b = (a || "").match(E) || []; i > h; h++)
  //           if (
  //             ((c = this[h]),
  //             (d =
  //               1 === c.nodeType &&
  //               (c.className ? (" " + c.className + " ").replace(uc, " ") : " ")))
  //           ) {
  //             f = 0;
  //             while ((e = b[f++])) d.indexOf(" " + e + " ") < 0 && (d += e + " ");
  //             (g = m.trim(d)), c.className !== g && (c.className = g);
  //           }
  //       return this;
  //     },
  //     removeClass: function (a) {
  //       var b,
  //         c,
  //         d,
  //         e,
  //         f,
  //         g,
  //         h = 0,
  //         i = this.length,
  //         j = 0 === arguments.length || ("string" == typeof a && a);
  //       if (m.isFunction(a))
  //         return this.each(function (b) {
  //           m(this).removeClass(a.call(this, b, this.className));
  //         });
  //       if (j)
  //         for (b = (a || "").match(E) || []; i > h; h++)
  //           if (
  //             ((c = this[h]),
  //             (d =
  //               1 === c.nodeType &&
  //               (c.className ? (" " + c.className + " ").replace(uc, " ") : "")))
  //           ) {
  //             f = 0;
  //             while ((e = b[f++]))
  //               while (d.indexOf(" " + e + " ") >= 0)
  //                 d = d.replace(" " + e + " ", " ");
  //             (g = a ? m.trim(d) : ""), c.className !== g && (c.className = g);
  //           }
  //       return this;
  //     },
  //     toggleClass: function (a, b) {
  //       var c = typeof a;
  //       return "boolean" == typeof b && "string" === c
  //         ? b
  //           ? this.addClass(a)
  //           : this.removeClass(a)
  //         : this.each(
  //             m.isFunction(a)
  //               ? function (c) {
  //                   m(this).toggleClass(a.call(this, c, this.className, b), b);
  //                 }
  //               : function () {
  //                   if ("string" === c) {
  //                     var b,
  //                       d = 0,
  //                       e = m(this),
  //                       f = a.match(E) || [];
  //                     while ((b = f[d++]))
  //                       e.hasClass(b) ? e.removeClass(b) : e.addClass(b);
  //                   } else
  //                     (c === K || "boolean" === c) &&
  //                       (this.className &&
  //                         m._data(this, "__className__", this.className),
  //                       (this.className =
  //                         this.className || a === !1
  //                           ? ""
  //                           : m._data(this, "__className__") || ""));
  //                 }
  //           );
  //     },
  //     hasClass: function (a) {
  //       for (var b = " " + a + " ", c = 0, d = this.length; d > c; c++)
  //         if (
  //           1 === this[c].nodeType &&
  //           (" " + this[c].className + " ").replace(uc, " ").indexOf(b) >= 0
  //         )
  //           return !0;
  //       return !1;
  //     },
  //   }),
  //     m.each(
  //       "blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(
  //         " "
  //       ),
  //       function (a, b) {
  //         m.fn[b] = function (a, c) {
  //           return arguments.length > 0
  //             ? this.on(b, null, a, c)
  //             : this.trigger(b);
  //         };
  //       }
  //     ),
  //     m.fn.extend({
  //       hover: function (a, b) {
  //         return this.mouseenter(a).mouseleave(b || a);
  //       },
  //       bind: function (a, b, c) {
  //         return this.on(a, null, b, c);
  //       },
  //       unbind: function (a, b) {
  //         return this.off(a, null, b);
  //       },
  //       delegate: function (a, b, c, d) {
  //         return this.on(b, a, c, d);
  //       },
  //       undelegate: function (a, b, c) {
  //         return 1 === arguments.length
  //           ? this.off(a, "**")
  //           : this.off(b, a || "**", c);
  //       },
  //     });
  //   var vc = m.now(),
  //     wc = /\?/,
  //     xc =
  //       /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
  //   (m.parseJSON = function (b) {
  //     if (a.JSON && a.JSON.parse) return a.JSON.parse(b + "");
  //     var c,
  //       d = null,
  //       e = m.trim(b + "");
  //     return e &&
  //       !m.trim(
  //         e.replace(xc, function (a, b, e, f) {
  //           return (
  //             c && b && (d = 0), 0 === d ? a : ((c = e || b), (d += !f - !e), "")
  //           );
  //         })
  //       )
  //       ? Function("return " + e)()
  //       : m.error("Invalid JSON: " + b);
  //   }),
  //     (m.parseXML = function (b) {
  //       var c, d;
  //       if (!b || "string" != typeof b) return null;
  //       try {
  //         a.DOMParser
  //           ? ((d = new DOMParser()), (c = d.parseFromString(b, "text/xml")))
  //           : ((c = new ActiveXObject("Microsoft.XMLDOM")),
  //             (c.async = "false"),
  //             c.loadXML(b));
  //       } catch (e) {
  //         c = void 0;
  //       }
  //       return (
  //         (c &&
  //           c.documentElement &&
  //           !c.getElementsByTagName("parsererror").length) ||
  //           m.error("Invalid XML: " + b),
  //         c
  //       );
  //     });
  //   var yc,
  //     zc,
  //     Ac = /#.*$/,
  //     Bc = /([?&])_=[^&]*/,
  //     Cc = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
  //     Dc = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
  //     Ec = /^(?:GET|HEAD)$/,
  //     Fc = /^\/\//,
  //     Gc = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
  //     Hc = {},
  //     Ic = {},
  //     Jc = "*/".concat("*");
  //   try {
  //     zc = location.href;
  //   } catch (Kc) {
  //     (zc = y.createElement("a")), (zc.href = ""), (zc = zc.href);
  //   }
  //   yc = Gc.exec(zc.toLowerCase()) || [];
  //   function Lc(a) {
  //     return function (b, c) {
  //       "string" != typeof b && ((c = b), (b = "*"));
  //       var d,
  //         e = 0,
  //         f = b.toLowerCase().match(E) || [];
  //       if (m.isFunction(c))
  //         while ((d = f[e++]))
  //           "+" === d.charAt(0)
  //             ? ((d = d.slice(1) || "*"), (a[d] = a[d] || []).unshift(c))
  //             : (a[d] = a[d] || []).push(c);
  //     };
  //   }
  //   function Mc(a, b, c, d) {
  //     var e = {},
  //       f = a === Ic;
  //     function g(h) {
  //       var i;
  //       return (
  //         (e[h] = !0),
  //         m.each(a[h] || [], function (a, h) {
  //           var j = h(b, c, d);
  //           return "string" != typeof j || f || e[j]
  //             ? f
  //               ? !(i = j)
  //               : void 0
  //             : (b.dataTypes.unshift(j), g(j), !1);
  //         }),
  //         i
  //       );
  //     }
  //     return g(b.dataTypes[0]) || (!e["*"] && g("*"));
  //   }
  //   function Nc(a, b) {
  //     var c,
  //       d,
  //       e = m.ajaxSettings.flatOptions || {};
  //     for (d in b) void 0 !== b[d] && ((e[d] ? a : c || (c = {}))[d] = b[d]);
  //     return c && m.extend(!0, a, c), a;
  //   }
  //   function Oc(a, b, c) {
  //     var d,
  //       e,
  //       f,
  //       g,
  //       h = a.contents,
  //       i = a.dataTypes;
  //     while ("*" === i[0])
  //       i.shift(),
  //         void 0 === e && (e = a.mimeType || b.getResponseHeader("Content-Type"));
  //     if (e)
  //       for (g in h)
  //         if (h[g] && h[g].test(e)) {
  //           i.unshift(g);
  //           break;
  //         }
  //     if (i[0] in c) f = i[0];
  //     else {
  //       for (g in c) {
  //         if (!i[0] || a.converters[g + " " + i[0]]) {
  //           f = g;
  //           break;
  //         }
  //         d || (d = g);
  //       }
  //       f = f || d;
  //     }
  //     return f ? (f !== i[0] && i.unshift(f), c[f]) : void 0;
  //   }
  //   function Pc(a, b, c, d) {
  //     var e,
  //       f,
  //       g,
  //       h,
  //       i,
  //       j = {},
  //       k = a.dataTypes.slice();
  //     if (k[1]) for (g in a.converters) j[g.toLowerCase()] = a.converters[g];
  //     f = k.shift();
  //     while (f)
  //       if (
  //         (a.responseFields[f] && (c[a.responseFields[f]] = b),
  //         !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)),
  //         (i = f),
  //         (f = k.shift()))
  //       )
  //         if ("*" === f) f = i;
  //         else if ("*" !== i && i !== f) {
  //           if (((g = j[i + " " + f] || j["* " + f]), !g))
  //             for (e in j)
  //               if (
  //                 ((h = e.split(" ")),
  //                 h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]]))
  //               ) {
  //                 g === !0
  //                   ? (g = j[e])
  //                   : j[e] !== !0 && ((f = h[0]), k.unshift(h[1]));
  //                 break;
  //               }
  //           if (g !== !0)
  //             if (g && a["throws"]) b = g(b);
  //             else
  //               try {
  //                 b = g(b);
  //               } catch (l) {
  //                 return {
  //                   state: "parsererror",
  //                   error: g ? l : "No conversion from " + i + " to " + f,
  //                 };
  //               }
  //         }
  //     return { state: "success", data: b };
  //   }
  //   m.extend({
  //     active: 0,
  //     lastModified: {},
  //     etag: {},
  //     ajaxSettings: {
  //       url: zc,
  //       type: "GET",
  //       isLocal: Dc.test(yc[1]),
  //       global: !0,
  //       processData: !0,
  //       async: !0,
  //       contentType: "application/x-www-form-urlencoded; charset=UTF-8",
  //       accepts: {
  //         "*": Jc,
  //         text: "text/plain",
  //         html: "text/html",
  //         xml: "application/xml, text/xml",
  //         json: "application/json, text/javascript",
  //       },
  //       contents: { xml: /xml/, html: /html/, json: /json/ },
  //       responseFields: {
  //         xml: "responseXML",
  //         text: "responseText",
  //         json: "responseJSON",
  //       },
  //       converters: {
  //         "* text": String,
  //         "text html": !0,
  //         "text json": m.parseJSON,
  //         "text xml": m.parseXML,
  //       },
  //       flatOptions: { url: !0, context: !0 },
  //     },
  //     ajaxSetup: function (a, b) {
  //       return b ? Nc(Nc(a, m.ajaxSettings), b) : Nc(m.ajaxSettings, a);
  //     },
  //     ajaxPrefilter: Lc(Hc),
  //     ajaxTransport: Lc(Ic),
  //     ajax: function (a, b) {
  //       "object" == typeof a && ((b = a), (a = void 0)), (b = b || {});
  //       var c,
  //         d,
  //         e,
  //         f,
  //         g,
  //         h,
  //         i,
  //         j,
  //         k = m.ajaxSetup({}, b),
  //         l = k.context || k,
  //         n = k.context && (l.nodeType || l.jquery) ? m(l) : m.event,
  //         o = m.Deferred(),
  //         p = m.Callbacks("once memory"),
  //         q = k.statusCode || {},
  //         r = {},
  //         s = {},
  //         t = 0,
  //         u = "canceled",
  //         v = {
  //           readyState: 0,
  //           getResponseHeader: function (a) {
  //             var b;
  //             if (2 === t) {
  //               if (!j) {
  //                 j = {};
  //                 while ((b = Cc.exec(f))) j[b[1].toLowerCase()] = b[2];
  //               }
  //               b = j[a.toLowerCase()];
  //             }
  //             return null == b ? null : b;
  //           },
  //           getAllResponseHeaders: function () {
  //             return 2 === t ? f : null;
  //           },
  //           setRequestHeader: function (a, b) {
  //             var c = a.toLowerCase();
  //             return t || ((a = s[c] = s[c] || a), (r[a] = b)), this;
  //           },
  //           overrideMimeType: function (a) {
  //             return t || (k.mimeType = a), this;
  //           },
  //           statusCode: function (a) {
  //             var b;
  //             if (a)
  //               if (2 > t) for (b in a) q[b] = [q[b], a[b]];
  //               else v.always(a[v.status]);
  //             return this;
  //           },
  //           abort: function (a) {
  //             var b = a || u;
  //             return i && i.abort(b), x(0, b), this;
  //           },
  //         };
  //       if (
  //         ((o.promise(v).complete = p.add),
  //         (v.success = v.done),
  //         (v.error = v.fail),
  //         (k.url = ((a || k.url || zc) + "")
  //           .replace(Ac, "")
  //           .replace(Fc, yc[1] + "//")),
  //         (k.type = b.method || b.type || k.method || k.type),
  //         (k.dataTypes = m
  //           .trim(k.dataType || "*")
  //           .toLowerCase()
  //           .match(E) || [""]),
  //         null == k.crossDomain &&
  //           ((c = Gc.exec(k.url.toLowerCase())),
  //           (k.crossDomain = !(
  //             !c ||
  //             (c[1] === yc[1] &&
  //               c[2] === yc[2] &&
  //               (c[3] || ("http:" === c[1] ? "80" : "443")) ===
  //                 (yc[3] || ("http:" === yc[1] ? "80" : "443")))
  //           ))),
  //         k.data &&
  //           k.processData &&
  //           "string" != typeof k.data &&
  //           (k.data = m.param(k.data, k.traditional)),
  //         Mc(Hc, k, b, v),
  //         2 === t)
  //       )
  //         return v;
  //       (h = m.event && k.global),
  //         h && 0 === m.active++ && m.event.trigger("ajaxStart"),
  //         (k.type = k.type.toUpperCase()),
  //         (k.hasContent = !Ec.test(k.type)),
  //         (e = k.url),
  //         k.hasContent ||
  //           (k.data &&
  //             ((e = k.url += (wc.test(e) ? "&" : "?") + k.data), delete k.data),
  //           k.cache === !1 &&
  //             (k.url = Bc.test(e)
  //               ? e.replace(Bc, "$1_=" + vc++)
  //               : e + (wc.test(e) ? "&" : "?") + "_=" + vc++)),
  //         k.ifModified &&
  //           (m.lastModified[e] &&
  //             v.setRequestHeader("If-Modified-Since", m.lastModified[e]),
  //           m.etag[e] && v.setRequestHeader("If-None-Match", m.etag[e])),
  //         ((k.data && k.hasContent && k.contentType !== !1) || b.contentType) &&
  //           v.setRequestHeader("Content-Type", k.contentType),
  //         v.setRequestHeader(
  //           "Accept",
  //           k.dataTypes[0] && k.accepts[k.dataTypes[0]]
  //             ? k.accepts[k.dataTypes[0]] +
  //                 ("*" !== k.dataTypes[0] ? ", " + Jc + "; q=0.01" : "")
  //             : k.accepts["*"]
  //         );
  //       for (d in k.headers) v.setRequestHeader(d, k.headers[d]);
  //       if (k.beforeSend && (k.beforeSend.call(l, v, k) === !1 || 2 === t))
  //         return v.abort();
  //       u = "abort";
  //       for (d in { success: 1, error: 1, complete: 1 }) v[d](k[d]);
  //       if ((i = Mc(Ic, k, b, v))) {
  //         (v.readyState = 1),
  //           h && n.trigger("ajaxSend", [v, k]),
  //           k.async &&
  //             k.timeout > 0 &&
  //             (g = setTimeout(function () {
  //               v.abort("timeout");
  //             }, k.timeout));
  //         try {
  //           (t = 1), i.send(r, x);
  //         } catch (w) {
  //           if (!(2 > t)) throw w;
  //           x(-1, w);
  //         }
  //       } else x(-1, "No Transport");
  //       function x(a, b, c, d) {
  //         var j,
  //           r,
  //           s,
  //           u,
  //           w,
  //           x = b;
  //         2 !== t &&
  //           ((t = 2),
  //           g && clearTimeout(g),
  //           (i = void 0),
  //           (f = d || ""),
  //           (v.readyState = a > 0 ? 4 : 0),
  //           (j = (a >= 200 && 300 > a) || 304 === a),
  //           c && (u = Oc(k, v, c)),
  //           (u = Pc(k, u, v, j)),
  //           j
  //             ? (k.ifModified &&
  //                 ((w = v.getResponseHeader("Last-Modified")),
  //                 w && (m.lastModified[e] = w),
  //                 (w = v.getResponseHeader("etag")),
  //                 w && (m.etag[e] = w)),
  //               204 === a || "HEAD" === k.type
  //                 ? (x = "nocontent")
  //                 : 304 === a
  //                 ? (x = "notmodified")
  //                 : ((x = u.state), (r = u.data), (s = u.error), (j = !s)))
  //             : ((s = x), (a || !x) && ((x = "error"), 0 > a && (a = 0))),
  //           (v.status = a),
  //           (v.statusText = (b || x) + ""),
  //           j ? o.resolveWith(l, [r, x, v]) : o.rejectWith(l, [v, x, s]),
  //           v.statusCode(q),
  //           (q = void 0),
  //           h && n.trigger(j ? "ajaxSuccess" : "ajaxError", [v, k, j ? r : s]),
  //           p.fireWith(l, [v, x]),
  //           h &&
  //             (n.trigger("ajaxComplete", [v, k]),
  //             --m.active || m.event.trigger("ajaxStop")));
  //       }
  //       return v;
  //     },
  //     getJSON: function (a, b, c) {
  //       return m.get(a, b, c, "json");
  //     },
  //     getScript: function (a, b) {
  //       return m.get(a, void 0, b, "script");
  //     },
  //   }),
  //     m.each(["get", "post"], function (a, b) {
  //       m[b] = function (a, c, d, e) {
  //         return (
  //           m.isFunction(c) && ((e = e || d), (d = c), (c = void 0)),
  //           m.ajax({ url: a, type: b, dataType: e, data: c, success: d })
  //         );
  //       };
  //     }),
  //     (m._evalUrl = function (a) {
  //       return m.ajax({
  //         url: a,
  //         type: "GET",
  //         dataType: "script",
  //         async: !1,
  //         global: !1,
  //         throws: !0,
  //       });
  //     }),
  //     m.fn.extend({
  //       wrapAll: function (a) {
  //         if (m.isFunction(a))
  //           return this.each(function (b) {
  //             m(this).wrapAll(a.call(this, b));
  //           });
  //         if (this[0]) {
  //           var b = m(a, this[0].ownerDocument).eq(0).clone(!0);
  //           this[0].parentNode && b.insertBefore(this[0]),
  //             b
  //               .map(function () {
  //                 var a = this;
  //                 while (a.firstChild && 1 === a.firstChild.nodeType)
  //                   a = a.firstChild;
  //                 return a;
  //               })
  //               .append(this);
  //         }
  //         return this;
  //       },
  //       wrapInner: function (a) {
  //         return this.each(
  //           m.isFunction(a)
  //             ? function (b) {
  //                 m(this).wrapInner(a.call(this, b));
  //               }
  //             : function () {
  //                 var b = m(this),
  //                   c = b.contents();
  //                 c.length ? c.wrapAll(a) : b.append(a);
  //               }
  //         );
  //       },
  //       wrap: function (a) {
  //         var b = m.isFunction(a);
  //         return this.each(function (c) {
  //           m(this).wrapAll(b ? a.call(this, c) : a);
  //         });
  //       },
  //       unwrap: function () {
  //         return this.parent()
  //           .each(function () {
  //             m.nodeName(this, "body") || m(this).replaceWith(this.childNodes);
  //           })
  //           .end();
  //       },
  //     }),
  //     (m.expr.filters.hidden = function (a) {
  //       return (
  //         (a.offsetWidth <= 0 && a.offsetHeight <= 0) ||
  //         (!k.reliableHiddenOffsets() &&
  //           "none" === ((a.style && a.style.display) || m.css(a, "display")))
  //       );
  //     }),
  //     (m.expr.filters.visible = function (a) {
  //       return !m.expr.filters.hidden(a);
  //     });
  //   var Qc = /%20/g,
  //     Rc = /\[\]$/,
  //     Sc = /\r?\n/g,
  //     Tc = /^(?:submit|button|image|reset|file)$/i,
  //     Uc = /^(?:input|select|textarea|keygen)/i;
  //   function Vc(a, b, c, d) {
  //     var e;
  //     if (m.isArray(b))
  //       m.each(b, function (b, e) {
  //         c || Rc.test(a)
  //           ? d(a, e)
  //           : Vc(a + "[" + ("object" == typeof e ? b : "") + "]", e, c, d);
  //       });
  //     else if (c || "object" !== m.type(b)) d(a, b);
  //     else for (e in b) Vc(a + "[" + e + "]", b[e], c, d);
  //   }
  //   (m.param = function (a, b) {
  //     var c,
  //       d = [],
  //       e = function (a, b) {
  //         (b = m.isFunction(b) ? b() : null == b ? "" : b),
  //           (d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b));
  //       };
  //     if (
  //       (void 0 === b && (b = m.ajaxSettings && m.ajaxSettings.traditional),
  //       m.isArray(a) || (a.jquery && !m.isPlainObject(a)))
  //     )
  //       m.each(a, function () {
  //         e(this.name, this.value);
  //       });
  //     else for (c in a) Vc(c, a[c], b, e);
  //     return d.join("&").replace(Qc, "+");
  //   }),
  //     m.fn.extend({
  //       serialize: function () {
  //         return m.param(this.serializeArray());
  //       },
  //       serializeArray: function () {
  //         return this.map(function () {
  //           var a = m.prop(this, "elements");
  //           return a ? m.makeArray(a) : this;
  //         })
  //           .filter(function () {
  //             var a = this.type;
  //             return (
  //               this.name &&
  //               !m(this).is(":disabled") &&
  //               Uc.test(this.nodeName) &&
  //               !Tc.test(a) &&
  //               (this.checked || !W.test(a))
  //             );
  //           })
  //           .map(function (a, b) {
  //             var c = m(this).val();
  //             return null == c
  //               ? null
  //               : m.isArray(c)
  //               ? m.map(c, function (a) {
  //                   return { name: b.name, value: a.replace(Sc, "\r\n") };
  //                 })
  //               : { name: b.name, value: c.replace(Sc, "\r\n") };
  //           })
  //           .get();
  //       },
  //     }),
  //     (m.ajaxSettings.xhr =
  //       void 0 !== a.ActiveXObject
  //         ? function () {
  //             return (
  //               (!this.isLocal &&
  //                 /^(get|post|head|put|delete|options)$/i.test(this.type) &&
  //                 Zc()) ||
  //               $c()
  //             );
  //           }
  //         : Zc);
  //   var Wc = 0,
  //     Xc = {},
  //     Yc = m.ajaxSettings.xhr();
  //   a.attachEvent &&
  //     a.attachEvent("onunload", function () {
  //       for (var a in Xc) Xc[a](void 0, !0);
  //     }),
  //     (k.cors = !!Yc && "withCredentials" in Yc),
  //     (Yc = k.ajax = !!Yc),
  //     Yc &&
  //       m.ajaxTransport(function (a) {
  //         if (!a.crossDomain || k.cors) {
  //           var b;
  //           return {
  //             send: function (c, d) {
  //               var e,
  //                 f = a.xhr(),
  //                 g = ++Wc;
  //               if (
  //                 (f.open(a.type, a.url, a.async, a.username, a.password),
  //                 a.xhrFields)
  //               )
  //                 for (e in a.xhrFields) f[e] = a.xhrFields[e];
  //               a.mimeType &&
  //                 f.overrideMimeType &&
  //                 f.overrideMimeType(a.mimeType),
  //                 a.crossDomain ||
  //                   c["X-Requested-With"] ||
  //                   (c["X-Requested-With"] = "XMLHttpRequest");
  //               for (e in c) void 0 !== c[e] && f.setRequestHeader(e, c[e] + "");
  //               f.send((a.hasContent && a.data) || null),
  //                 (b = function (c, e) {
  //                   var h, i, j;
  //                   if (b && (e || 4 === f.readyState))
  //                     if (
  //                       (delete Xc[g],
  //                       (b = void 0),
  //                       (f.onreadystatechange = m.noop),
  //                       e)
  //                     )
  //                       4 !== f.readyState && f.abort();
  //                     else {
  //                       (j = {}),
  //                         (h = f.status),
  //                         "string" == typeof f.responseText &&
  //                           (j.text = f.responseText);
  //                       try {
  //                         i = f.statusText;
  //                       } catch (k) {
  //                         i = "";
  //                       }
  //                       h || !a.isLocal || a.crossDomain
  //                         ? 1223 === h && (h = 204)
  //                         : (h = j.text ? 200 : 404);
  //                     }
  //                   j && d(h, i, j, f.getAllResponseHeaders());
  //                 }),
  //                 a.async
  //                   ? 4 === f.readyState
  //                     ? setTimeout(b)
  //                     : (f.onreadystatechange = Xc[g] = b)
  //                   : b();
  //             },
  //             abort: function () {
  //               b && b(void 0, !0);
  //             },
  //           };
  //         }
  //       });
  //   function Zc() {
  //     try {
  //       return new a.XMLHttpRequest();
  //     } catch (b) {}
  //   }
  //   function $c() {
  //     try {
  //       return new a.ActiveXObject("Microsoft.XMLHTTP");
  //     } catch (b) {}
  //   }
  //   m.ajaxSetup({
  //     accepts: {
  //       script:
  //         "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript",
  //     },
  //     contents: { script: /(?:java|ecma)script/ },
  //     converters: {
  //       "text script": function (a) {
  //         return m.globalEval(a), a;
  //       },
  //     },
  //   }),
  //     m.ajaxPrefilter("script", function (a) {
  //       void 0 === a.cache && (a.cache = !1),
  //         a.crossDomain && ((a.type = "GET"), (a.global = !1));
  //     }),
  //     m.ajaxTransport("script", function (a) {
  //       if (a.crossDomain) {
  //         var b,
  //           c = y.head || m("head")[0] || y.documentElement;
  //         return {
  //           send: function (d, e) {
  //             (b = y.createElement("script")),
  //               (b.async = !0),
  //               a.scriptCharset && (b.charset = a.scriptCharset),
  //               (b.src = a.url),
  //               (b.onload = b.onreadystatechange =
  //                 function (a, c) {
  //                   (c ||
  //                     !b.readyState ||
  //                     /loaded|complete/.test(b.readyState)) &&
  //                     ((b.onload = b.onreadystatechange = null),
  //                     b.parentNode && b.parentNode.removeChild(b),
  //                     (b = null),
  //                     c || e(200, "success"));
  //                 }),
  //               c.insertBefore(b, c.firstChild);
  //           },
  //           abort: function () {
  //             b && b.onload(void 0, !0);
  //           },
  //         };
  //       }
  //     });
  //   var _c = [],
  //     ad = /(=)\?(?=&|$)|\?\?/;
  //   m.ajaxSetup({
  //     jsonp: "callback",
  //     jsonpCallback: function () {
  //       var a = _c.pop() || m.expando + "_" + vc++;
  //       return (this[a] = !0), a;
  //     },
  //   }),
  //     m.ajaxPrefilter("json jsonp", function (b, c, d) {
  //       var e,
  //         f,
  //         g,
  //         h =
  //           b.jsonp !== !1 &&
  //           (ad.test(b.url)
  //             ? "url"
  //             : "string" == typeof b.data &&
  //               !(b.contentType || "").indexOf(
  //                 "application/x-www-form-urlencoded"
  //               ) &&
  //               ad.test(b.data) &&
  //               "data");
  //       return h || "jsonp" === b.dataTypes[0]
  //         ? ((e = b.jsonpCallback =
  //             m.isFunction(b.jsonpCallback)
  //               ? b.jsonpCallback()
  //               : b.jsonpCallback),
  //           h
  //             ? (b[h] = b[h].replace(ad, "$1" + e))
  //             : b.jsonp !== !1 &&
  //               (b.url += (wc.test(b.url) ? "&" : "?") + b.jsonp + "=" + e),
  //           (b.converters["script json"] = function () {
  //             return g || m.error(e + " was not called"), g[0];
  //           }),
  //           (b.dataTypes[0] = "json"),
  //           (f = a[e]),
  //           (a[e] = function () {
  //             g = arguments;
  //           }),
  //           d.always(function () {
  //             (a[e] = f),
  //               b[e] && ((b.jsonpCallback = c.jsonpCallback), _c.push(e)),
  //               g && m.isFunction(f) && f(g[0]),
  //               (g = f = void 0);
  //           }),
  //           "script")
  //         : void 0;
  //     }),
  //     (m.parseHTML = function (a, b, c) {
  //       if (!a || "string" != typeof a) return null;
  //       "boolean" == typeof b && ((c = b), (b = !1)), (b = b || y);
  //       var d = u.exec(a),
  //         e = !c && [];
  //       return d
  //         ? [b.createElement(d[1])]
  //         : ((d = m.buildFragment([a], b, e)),
  //           e && e.length && m(e).remove(),
  //           m.merge([], d.childNodes));
  //     });
  //   var bd = m.fn.load;
  //   (m.fn.load = function (a, b, c) {
  //     if ("string" != typeof a && bd) return bd.apply(this, arguments);
  //     var d,
  //       e,
  //       f,
  //       g = this,
  //       h = a.indexOf(" ");
  //     return (
  //       h >= 0 && ((d = m.trim(a.slice(h, a.length))), (a = a.slice(0, h))),
  //       m.isFunction(b)
  //         ? ((c = b), (b = void 0))
  //         : b && "object" == typeof b && (f = "POST"),
  //       g.length > 0 &&
  //         m
  //           .ajax({ url: a, type: f, dataType: "html", data: b })
  //           .done(function (a) {
  //             (e = arguments),
  //               g.html(d ? m("<div>").append(m.parseHTML(a)).find(d) : a);
  //           })
  //           .complete(
  //             c &&
  //               function (a, b) {
  //                 g.each(c, e || [a.responseText, b, a]);
  //               }
  //           ),
  //       this
  //     );
  //   }),
  //     m.each(
  //       [
  //         "ajaxStart",
  //         "ajaxStop",
  //         "ajaxComplete",
  //         "ajaxError",
  //         "ajaxSuccess",
  //         "ajaxSend",
  //       ],
  //       function (a, b) {
  //         m.fn[b] = function (a) {
  //           return this.on(b, a);
  //         };
  //       }
  //     ),
  //     (m.expr.filters.animated = function (a) {
  //       return m.grep(m.timers, function (b) {
  //         return a === b.elem;
  //       }).length;
  //     });
  //   var cd = a.document.documentElement;
  //   function dd(a) {
  //     return m.isWindow(a)
  //       ? a
  //       : 9 === a.nodeType
  //       ? a.defaultView || a.parentWindow
  //       : !1;
  //   }
  //   (m.offset = {
  //     setOffset: function (a, b, c) {
  //       var d,
  //         e,
  //         f,
  //         g,
  //         h,
  //         i,
  //         j,
  //         k = m.css(a, "position"),
  //         l = m(a),
  //         n = {};
  //       "static" === k && (a.style.position = "relative"),
  //         (h = l.offset()),
  //         (f = m.css(a, "top")),
  //         (i = m.css(a, "left")),
  //         (j =
  //           ("absolute" === k || "fixed" === k) &&
  //           m.inArray("auto", [f, i]) > -1),
  //         j
  //           ? ((d = l.position()), (g = d.top), (e = d.left))
  //           : ((g = parseFloat(f) || 0), (e = parseFloat(i) || 0)),
  //         m.isFunction(b) && (b = b.call(a, c, h)),
  //         null != b.top && (n.top = b.top - h.top + g),
  //         null != b.left && (n.left = b.left - h.left + e),
  //         "using" in b ? b.using.call(a, n) : l.css(n);
  //     },
  //   }),
  //     m.fn.extend({
  //       offset: function (a) {
  //         if (arguments.length)
  //           return void 0 === a
  //             ? this
  //             : this.each(function (b) {
  //                 m.offset.setOffset(this, a, b);
  //               });
  //         var b,
  //           c,
  //           d = { top: 0, left: 0 },
  //           e = this[0],
  //           f = e && e.ownerDocument;
  //         if (f)
  //           return (
  //             (b = f.documentElement),
  //             m.contains(b, e)
  //               ? (typeof e.getBoundingClientRect !== K &&
  //                   (d = e.getBoundingClientRect()),
  //                 (c = dd(f)),
  //                 {
  //                   top:
  //                     d.top + (c.pageYOffset || b.scrollTop) - (b.clientTop || 0),
  //                   left:
  //                     d.left +
  //                     (c.pageXOffset || b.scrollLeft) -
  //                     (b.clientLeft || 0),
  //                 })
  //               : d
  //           );
  //       },
  //       position: function () {
  //         if (this[0]) {
  //           var a,
  //             b,
  //             c = { top: 0, left: 0 },
  //             d = this[0];
  //           return (
  //             "fixed" === m.css(d, "position")
  //               ? (b = d.getBoundingClientRect())
  //               : ((a = this.offsetParent()),
  //                 (b = this.offset()),
  //                 m.nodeName(a[0], "html") || (c = a.offset()),
  //                 (c.top += m.css(a[0], "borderTopWidth", !0)),
  //                 (c.left += m.css(a[0], "borderLeftWidth", !0))),
  //             {
  //               top: b.top - c.top - m.css(d, "marginTop", !0),
  //               left: b.left - c.left - m.css(d, "marginLeft", !0),
  //             }
  //           );
  //         }
  //       },
  //       offsetParent: function () {
  //         return this.map(function () {
  //           var a = this.offsetParent || cd;
  //           while (
  //             a &&
  //             !m.nodeName(a, "html") &&
  //             "static" === m.css(a, "position")
  //           )
  //             a = a.offsetParent;
  //           return a || cd;
  //         });
  //       },
  //     }),
  //     m.each(
  //       { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" },
  //       function (a, b) {
  //         var c = /Y/.test(b);
  //         m.fn[a] = function (d) {
  //           return V(
  //             this,
  //             function (a, d, e) {
  //               var f = dd(a);
  //               return void 0 === e
  //                 ? f
  //                   ? b in f
  //                     ? f[b]
  //                     : f.document.documentElement[d]
  //                   : a[d]
  //                 : void (f
  //                     ? f.scrollTo(
  //                         c ? m(f).scrollLeft() : e,
  //                         c ? e : m(f).scrollTop()
  //                       )
  //                     : (a[d] = e));
  //             },
  //             a,
  //             d,
  //             arguments.length,
  //             null
  //           );
  //         };
  //       }
  //     ),
  //     m.each(["top", "left"], function (a, b) {
  //       m.cssHooks[b] = Lb(k.pixelPosition, function (a, c) {
  //         return c
  //           ? ((c = Jb(a, b)), Hb.test(c) ? m(a).position()[b] + "px" : c)
  //           : void 0;
  //       });
  //     }),
  //     m.each({ Height: "height", Width: "width" }, function (a, b) {
  //       m.each(
  //         { padding: "inner" + a, content: b, "": "outer" + a },
  //         function (c, d) {
  //           m.fn[d] = function (d, e) {
  //             var f = arguments.length && (c || "boolean" != typeof d),
  //               g = c || (d === !0 || e === !0 ? "margin" : "border");
  //             return V(
  //               this,
  //               function (b, c, d) {
  //                 var e;
  //                 return m.isWindow(b)
  //                   ? b.document.documentElement["client" + a]
  //                   : 9 === b.nodeType
  //                   ? ((e = b.documentElement),
  //                     Math.max(
  //                       b.body["scroll" + a],
  //                       e["scroll" + a],
  //                       b.body["offset" + a],
  //                       e["offset" + a],
  //                       e["client" + a]
  //                     ))
  //                   : void 0 === d
  //                   ? m.css(b, c, g)
  //                   : m.style(b, c, d, g);
  //               },
  //               b,
  //               f ? d : void 0,
  //               f,
  //               null
  //             );
  //           };
  //         }
  //       );
  //     }),
  //     (m.fn.size = function () {
  //       return this.length;
  //     }),
  //     (m.fn.andSelf = m.fn.addBack),
  //     "function" == typeof define &&
  //       define.amd &&
  //       define("jquery", [], function () {
  //         return m;
  //       });
  //   var ed = a.jQuery,
  //     fd = a.$;
  //   return (
  //     (m.noConflict = function (b) {
  //       return a.$ === m && (a.$ = fd), b && a.jQuery === m && (a.jQuery = ed), m;
  //     }),
  //     typeof b === K && (a.jQuery = a.$ = m),
  //     m
  //   );
  // });
  
  /**kvch/bootstrap.min.js**/
  // if ("unefined" == typeof jQuery)
  //   throw new Error("Bootstrap's JavaScript requires jQuery");
  // +(function (t) {
  //   "use strict";
  //   var e = t.fn.jquery.split(" ")[0].split(".");
  //   if (
  //     (e[0] < 2 && e[1] < 9) ||
  //     (1 == e[0] && 9 == e[1] && e[2] < 1) ||
  //     e[0] > 2
  //   )
  //     throw new Error(
  //       "Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 3"
  //     );
  // })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e() {
  //       var t = document.createElement("bootstrap"),
  //         e = {
  //           WebkitTransition: "webkitTransitionEnd",
  //           MozTransition: "transitionend",
  //           OTransition: "oTransitionEnd otransitionend",
  //           transition: "transitionend",
  //         };
  //       for (var i in e) if (void 0 !== t.style[i]) return { end: e[i] };
  //       return !1;
  //     }
  //     (window.closepopup = function (t) {
  //       document.querySelector("body").style.overflow = "";
  //     }),
  //       (t.fn.emulateTransitionEnd = function (e) {
  //         var i = !1,
  //           o = this;
  //         t(this).one("bsTransitionEnd", function () {
  //           i = !0;
  //         });
  //         var n = function () {
  //           i || t(o).trigger(t.support.transition.end);
  //         };
  //         return setTimeout(n, e), this;
  //       }),
  //       t(function () {
  //         (t.support.transition = e()),
  //           t.support.transition &&
  //             (t.event.special.bsTransitionEnd = {
  //               bindType: t.support.transition.end,
  //               delegateType: t.support.transition.end,
  //               handle: function (e) {
  //                 return t(e.target).is(this)
  //                   ? e.handleObj.handler.apply(this, arguments)
  //                   : void 0;
  //               },
  //             });
  //       });
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(e) {
  //       return this.each(function () {
  //         var i = t(this),
  //           n = i.data("bs.alert");
  //         n || i.data("bs.alert", (n = new o(this))),
  //           "string" == typeof e && n[e].call(i);
  //       });
  //     }
  //     var i = '[data-dismiss="alert"]',
  //       o = function (e) {
  //         t(e).on("click", i, this.close);
  //       };
  //     (o.VERSION = "3.3.6"),
  //       (o.TRANSITION_DURATION = 150),
  //       (o.prototype.close = function (e) {
  //         function i() {
  //           a.detach().trigger("closed.bs.alert").remove();
  //         }
  //         var n = t(this),
  //           s = n.attr("data-target");
  //         s || ((s = n.attr("href")), (s = s && s.replace(/.*(?=#[^\s]*$)/, "")));
  //         var a = t(s);
  //         e && e.preventDefault(),
  //           a.length || (a = n.closest(".alert")),
  //           a.trigger((e = t.Event("close.bs.alert"))),
  //           e.isDefaultPrevented() ||
  //             (a.removeClass("in"),
  //             t.support.transition && a.hasClass("fade")
  //               ? a
  //                   .one("bsTransitionEnd", i)
  //                   .emulateTransitionEnd(o.TRANSITION_DURATION)
  //               : i());
  //       });
  //     var n = t.fn.alert;
  //     (t.fn.alert = e),
  //       (t.fn.alert.Constructor = o),
  //       (t.fn.alert.noConflict = function () {
  //         return (t.fn.alert = n), this;
  //       }),
  //       t(document).on("click.bs.alert.data-api", i, o.prototype.close);
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(e) {
  //       return this.each(function () {
  //         var o = t(this),
  //           n = o.data("bs.button"),
  //           s = "object" == typeof e && e;
  //         n || o.data("bs.button", (n = new i(this, s))),
  //           "toggle" == e ? n.toggle() : e && n.setState(e);
  //       });
  //     }
  //     var i = function (e, o) {
  //       (this.$element = t(e)),
  //         (this.options = t.extend({}, i.DEFAULTS, o)),
  //         (this.isLoading = !1);
  //     };
  //     (i.VERSION = "3.3.6"),
  //       (i.DEFAULTS = { loadingText: "loading..." }),
  //       (i.prototype.setState = function (e) {
  //         var i = "disabled",
  //           o = this.$element,
  //           n = o.is("input") ? "val" : "html",
  //           s = o.data();
  //         (e += "Text"),
  //           null == s.resetText && o.data("resetText", o[n]()),
  //           setTimeout(
  //             t.proxy(function () {
  //               o[n](null == s[e] ? this.options[e] : s[e]),
  //                 "loadingText" == e
  //                   ? ((this.isLoading = !0), o.addClass(i).attr(i, i))
  //                   : this.isLoading &&
  //                     ((this.isLoading = !1), o.removeClass(i).removeAttr(i));
  //             }, this),
  //             0
  //           );
  //       }),
  //       (i.prototype.toggle = function () {
  //         var t = !0,
  //           e = this.$element.closest('[data-toggle="buttons"]');
  //         if (e.length) {
  //           var i = this.$element.find("input");
  //           "radio" == i.prop("type")
  //             ? (i.prop("checked") && (t = !1),
  //               e.find(".active").removeClass("active"),
  //               this.$element.addClass("active"))
  //             : "checkbox" == i.prop("type") &&
  //               (i.prop("checked") !== this.$element.hasClass("active") &&
  //                 (t = !1),
  //               this.$element.toggleClass("active")),
  //             i.prop("checked", this.$element.hasClass("active")),
  //             t && i.trigger("change");
  //         } else
  //           this.$element.attr("aria-pressed", !this.$element.hasClass("active")),
  //             this.$element.toggleClass("active");
  //       });
  //     var o = t.fn.button;
  //     (t.fn.button = e),
  //       (t.fn.button.Constructor = i),
  //       (t.fn.button.noConflict = function () {
  //         return (t.fn.button = o), this;
  //       }),
  //       t(document)
  //         .on(
  //           "click.bs.button.data-api",
  //           '[data-toggle^="button"]',
  //           function (i) {
  //             var o = t(i.target);
  //             o.hasClass("btn") || (o = o.closest(".btn")),
  //               e.call(o, "toggle"),
  //               t(i.target).is('input[type="radio"]') ||
  //                 t(i.target).is('input[type="checkbox"]') ||
  //                 i.preventDefault();
  //           }
  //         )
  //         .on(
  //           "focus.bs.button.data-api blur.bs.button.data-api",
  //           '[data-toggle^="button"]',
  //           function (e) {
  //             t(e.target)
  //               .closest(".btn")
  //               .toggleClass("focus", /^focus(in)?$/.test(e.type));
  //           }
  //         );
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(e) {
  //       return this.each(function () {
  //         var o = t(this),
  //           n = o.data("bs.carousel"),
  //           s = t.extend({}, i.DEFAULTS, o.data(), "object" == typeof e && e),
  //           a = "string" == typeof e ? e : s.slide;
  //         n || o.data("bs.carousel", (n = new i(this, s))),
  //           "number" == typeof e
  //             ? n.to(e)
  //             : a
  //             ? n[a]()
  //             : s.interval && n.pause().cycle();
  //       });
  //     }
  //     var i = function (e, i) {
  //       (this.$element = t(e)),
  //         (this.$indicators = this.$element.find(".carousel-indicators")),
  //         (this.options = i),
  //         (this.paused = null),
  //         (this.sliding = null),
  //         (this.interval = null),
  //         (this.$active = null),
  //         (this.$items = null),
  //         this.options.keyboard &&
  //           this.$element.on("keydown.bs.carousel", t.proxy(this.keydown, this)),
  //         "hover" == this.options.pause &&
  //           !("ontouchstart" in document.documentElement) &&
  //           this.$element
  //             .on("mouseenter.bs.carousel", t.proxy(this.pause, this))
  //             .on("mouseleave.bs.carousel", t.proxy(this.cycle, this));
  //     };
  //     (i.VERSION = "3.3.6"),
  //       (i.TRANSITION_DURATION = 600),
  //       (i.DEFAULTS = { interval: 5e3, pause: "hover", wrap: !0, keyboard: !0 }),
  //       (i.prototype.keydown = function (t) {
  //         if (!/input|textarea/i.test(t.target.tagName)) {
  //           switch (t.which) {
  //             case 37:
  //               this.prev();
  //               break;
  //             case 39:
  //               this.next();
  //               break;
  //             default:
  //               return;
  //           }
  //           t.preventDefault();
  //         }
  //       }),
  //       (i.prototype.cycle = function (e) {
  //         return (
  //           e || (this.paused = !1),
  //           this.interval && clearInterval(this.interval),
  //           this.options.interval &&
  //             !this.paused &&
  //             (this.interval = setInterval(
  //               t.proxy(this.next, this),
  //               this.options.interval
  //             )),
  //           this
  //         );
  //       }),
  //       (i.prototype.getItemIndex = function (t) {
  //         return (
  //           (this.$items = t.parent().children(".item")),
  //           this.$items.index(t || this.$active)
  //         );
  //       }),
  //       (i.prototype.getItemForDirection = function (t, e) {
  //         var i = this.getItemIndex(e),
  //           o =
  //             ("prev" == t && 0 === i) ||
  //             ("next" == t && i == this.$items.length - 1);
  //         if (o && !this.options.wrap) return e;
  //         var n = "prev" == t ? -1 : 1,
  //           s = (i + n) % this.$items.length;
  //         return this.$items.eq(s);
  //       }),
  //       (i.prototype.to = function (t) {
  //         var e = this,
  //           i = this.getItemIndex(
  //             (this.$active = this.$element.find(".item.active"))
  //           );
  //         return t > this.$items.length - 1 || 0 > t
  //           ? void 0
  //           : this.sliding
  //           ? this.$element.one("slid.bs.carousel", function () {
  //               e.to(t);
  //             })
  //           : i == t
  //           ? this.pause().cycle()
  //           : this.slide(t > i ? "next" : "prev", this.$items.eq(t));
  //       }),
  //       (i.prototype.pause = function (e) {
  //         return (
  //           e || (this.paused = !0),
  //           this.$element.find(".next, .prev").length &&
  //             t.support.transition &&
  //             (this.$element.trigger(t.support.transition.end), this.cycle(!0)),
  //           (this.interval = clearInterval(this.interval)),
  //           this
  //         );
  //       }),
  //       (i.prototype.next = function () {
  //         return this.sliding ? void 0 : this.slide("next");
  //       }),
  //       (i.prototype.prev = function () {
  //         return this.sliding ? void 0 : this.slide("prev");
  //       }),
  //       (i.prototype.slide = function (e, o) {
  //         var n = this.$element.find(".item.active"),
  //           s = o || this.getItemForDirection(e, n),
  //           a = this.interval,
  //           r = "next" == e ? "left" : "right",
  //           l = this;
  //         if (s.hasClass("active")) return (this.sliding = !1);
  //         var h = s[0],
  //           d = t.Event("slide.bs.carousel", { relatedTarget: h, direction: r });
  //         if ((this.$element.trigger(d), !d.isDefaultPrevented())) {
  //           if (
  //             ((this.sliding = !0), a && this.pause(), this.$indicators.length)
  //           ) {
  //             this.$indicators.find(".active").removeClass("active");
  //             var p = t(this.$indicators.children()[this.getItemIndex(s)]);
  //             p && p.addClass("active");
  //           }
  //           var c = t.Event("slid.bs.carousel", {
  //             relatedTarget: h,
  //             direction: r,
  //           });
  //           return (
  //             t.support.transition && this.$element.hasClass("slide")
  //               ? (s.addClass(e),
  //                 s[0].offsetWidth,
  //                 n.addClass(r),
  //                 s.addClass(r),
  //                 n
  //                   .one("bsTransitionEnd", function () {
  //                     s.removeClass([e, r].join(" ")).addClass("active"),
  //                       n.removeClass(["active", r].join(" ")),
  //                       (l.sliding = !1),
  //                       setTimeout(function () {
  //                         l.$element.trigger(c);
  //                       }, 0);
  //                   })
  //                   .emulateTransitionEnd(i.TRANSITION_DURATION))
  //               : (n.removeClass("active"),
  //                 s.addClass("active"),
  //                 (this.sliding = !1),
  //                 this.$element.trigger(c)),
  //             a && this.cycle(),
  //             this
  //           );
  //         }
  //       });
  //     var o = t.fn.carousel;
  //     (t.fn.carousel = e),
  //       (t.fn.carousel.Constructor = i),
  //       (t.fn.carousel.noConflict = function () {
  //         return (t.fn.carousel = o), this;
  //       });
  //     var n = function (i) {
  //       var o,
  //         n = t(this),
  //         s = t(
  //           n.attr("data-target") ||
  //             ((o = n.attr("href")) && o.replace(/.*(?=#[^\s]+$)/, ""))
  //         );
  //       if (s.hasClass("carousel")) {
  //         var a = t.extend({}, s.data(), n.data()),
  //           r = n.attr("data-slide-to");
  //         r && (a.interval = !1),
  //           e.call(s, a),
  //           r && s.data("bs.carousel").to(r),
  //           i.preventDefault();
  //       }
  //     };
  //     t(document)
  //       .on("click.bs.carousel.data-api", "[data-slide]", n)
  //       .on("click.bs.carousel.data-api", "[data-slide-to]", n),
  //       t(window).on("load", function () {
  //         t('[data-ride="carousel"]').each(function () {
  //           var i = t(this);
  //           e.call(i, i.data());
  //         });
  //       });
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(e) {
  //       var i,
  //         o =
  //           e.attr("data-target") ||
  //           ((i = e.attr("href")) && i.replace(/.*(?=#[^\s]+$)/, ""));
  //       return t(o);
  //     }
  //     function i(e) {
  //       return this.each(function () {
  //         var i = t(this),
  //           n = i.data("bs.collapse"),
  //           s = t.extend({}, o.DEFAULTS, i.data(), "object" == typeof e && e);
  //         !n && s.toggle && /show|hide/.test(e) && (s.toggle = !1),
  //           n || i.data("bs.collapse", (n = new o(this, s))),
  //           "string" == typeof e && n[e]();
  //       });
  //     }
  //     var o = function (e, i) {
  //       (this.$element = t(e)),
  //         (this.options = t.extend({}, o.DEFAULTS, i)),
  //         (this.$trigger = t(
  //           '[data-toggle="collapse"][href="#' +
  //             e.id +
  //             '"],[data-toggle="collapse"][data-target="#' +
  //             e.id +
  //             '"]'
  //         )),
  //         (this.transitioning = null),
  //         this.options.parent
  //           ? (this.$parent = this.getParent())
  //           : this.addAriaAndCollapsedClass(this.$element, this.$trigger),
  //         this.options.toggle && this.toggle();
  //     };
  //     (o.VERSION = "3.3.6"),
  //       (o.TRANSITION_DURATION = 350),
  //       (o.DEFAULTS = { toggle: !0 }),
  //       (o.prototype.dimension = function () {
  //         var t = this.$element.hasClass("width");
  //         return t ? "width" : "height";
  //       }),
  //       (o.prototype.show = function () {
  //         if (!this.transitioning && !this.$element.hasClass("in")) {
  //           var e,
  //             n =
  //               this.$parent &&
  //               this.$parent.children(".panel").children(".in, .collapsing");
  //           if (
  //             !(
  //               n &&
  //               n.length &&
  //               ((e = n.data("bs.collapse")), e && e.transitioning)
  //             )
  //           ) {
  //             var s = t.Event("show.bs.collapse");
  //             if ((this.$element.trigger(s), !s.isDefaultPrevented())) {
  //               n &&
  //                 n.length &&
  //                 (i.call(n, "hide"), e || n.data("bs.collapse", null));
  //               var a = this.dimension();
  //               this.$element
  //                 .removeClass("collapse")
  //                 .addClass("collapsing")
  //                 [a](0)
  //                 .attr("aria-expanded", !0),
  //                 this.$trigger
  //                   .removeClass("collapsed")
  //                   .attr("aria-expanded", !0),
  //                 (this.transitioning = 1);
  //               var r = function () {
  //                 this.$element
  //                   .removeClass("collapsing")
  //                   .addClass("collapse in")
  //                   [a](""),
  //                   (this.transitioning = 0),
  //                   this.$element.trigger("shown.bs.collapse");
  //               };
  //               if (!t.support.transition) return r.call(this);
  //               var l = t.camelCase(["scroll", a].join("-"));
  //               this.$element
  //                 .one("bsTransitionEnd", t.proxy(r, this))
  //                 .emulateTransitionEnd(o.TRANSITION_DURATION)
  //                 [a](this.$element[0][l]);
  //             }
  //           }
  //         }
  //       }),
  //       (o.prototype.hide = function () {
  //         if (!this.transitioning && this.$element.hasClass("in")) {
  //           var e = t.Event("hide.bs.collapse");
  //           if ((this.$element.trigger(e), !e.isDefaultPrevented())) {
  //             var i = this.dimension();
  //             this.$element[i](this.$element[i]())[0].offsetHeight,
  //               this.$element
  //                 .addClass("collapsing")
  //                 .removeClass("collapse in")
  //                 .attr("aria-expanded", !1),
  //               this.$trigger.addClass("collapsed").attr("aria-expanded", !1),
  //               (this.transitioning = 1);
  //             var n = function () {
  //               (this.transitioning = 0),
  //                 this.$element
  //                   .removeClass("collapsing")
  //                   .addClass("collapse")
  //                   .trigger("hidden.bs.collapse");
  //             };
  //             return t.support.transition
  //               ? void this.$element[i](0)
  //                   .one("bsTransitionEnd", t.proxy(n, this))
  //                   .emulateTransitionEnd(o.TRANSITION_DURATION)
  //               : n.call(this);
  //           }
  //         }
  //       }),
  //       (o.prototype.toggle = function () {
  //         this[this.$element.hasClass("in") ? "hide" : "show"]();
  //       }),
  //       (o.prototype.getParent = function () {
  //         return t(this.options.parent)
  //           .find(
  //             '[data-toggle="collapse"][data-parent="' +
  //               this.options.parent +
  //               '"]'
  //           )
  //           .each(
  //             t.proxy(function (i, o) {
  //               var n = t(o);
  //               this.addAriaAndCollapsedClass(e(n), n);
  //             }, this)
  //           )
  //           .end();
  //       }),
  //       (o.prototype.addAriaAndCollapsedClass = function (t, e) {
  //         var i = t.hasClass("in");
  //         t.attr("aria-expanded", i),
  //           e.toggleClass("collapsed", !i).attr("aria-expanded", i);
  //       });
  //     var n = t.fn.collapse;
  //     (t.fn.collapse = i),
  //       (t.fn.collapse.Constructor = o),
  //       (t.fn.collapse.noConflict = function () {
  //         return (t.fn.collapse = n), this;
  //       }),
  //       t(document).on(
  //         "click.bs.collapse.data-api",
  //         '[data-toggle="collapse"]',
  //         function (o) {
  //           var n = t(this);
  //           n.attr("data-target") || o.preventDefault();
  //           var s = e(n),
  //             a = s.data("bs.collapse"),
  //             r = a ? "toggle" : n.data();
  //           i.call(s, r);
  //         }
  //       );
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(e) {
  //       var i = e.attr("data-target");
  //       i ||
  //         ((i = e.attr("href")),
  //         (i = i && /#[A-Za-z]/.test(i) && i.replace(/.*(?=#[^\s]*$)/, "")));
  //       var o = i && t(i);
  //       return o && o.length ? o : e.parent();
  //     }
  //     function i(i) {
  //       (i && 3 === i.which) ||
  //         (t(n).remove(),
  //         t(s).each(function () {
  //           var o = t(this),
  //             n = e(o),
  //             s = { relatedTarget: this };
  //           n.hasClass("open") &&
  //             ((i &&
  //               "click" == i.type &&
  //               /input|textarea/i.test(i.target.tagName) &&
  //               t.contains(n[0], i.target)) ||
  //               (n.trigger((i = t.Event("hide.bs.dropdown", s))),
  //               i.isDefaultPrevented() ||
  //                 (o.attr("aria-expanded", "false"),
  //                 n
  //                   .removeClass("open")
  //                   .trigger(t.Event("hidden.bs.dropdown", s)))));
  //         }));
  //     }
  //     function o(e) {
  //       return this.each(function () {
  //         var i = t(this),
  //           o = i.data("bs.dropdown");
  //         o || i.data("bs.dropdown", (o = new a(this))),
  //           "string" == typeof e && o[e].call(i);
  //       });
  //     }
  //     var n = ".dropdown-backdrop",
  //       s = '[data-toggle="dropdown"]',
  //       a = function (e) {
  //         t(e).on("click.bs.dropdown", this.toggle);
  //       };
  //     (a.VERSION = "3.3.6"),
  //       (a.prototype.toggle = function (o) {
  //         var n = t(this);
  //         if (!n.is(".disabled, :disabled")) {
  //           var s = e(n),
  //             a = s.hasClass("open");
  //           if ((i(), !a)) {
  //             "ontouchstart" in document.documentElement &&
  //               !s.closest(".navbar-nav").length &&
  //               t(document.createElement("div"))
  //                 .addClass("dropdown-backdrop")
  //                 .insertAfter(t(this))
  //                 .on("click", i);
  //             var r = { relatedTarget: this };
  //             if (
  //               (s.trigger((o = t.Event("show.bs.dropdown", r))),
  //               o.isDefaultPrevented())
  //             )
  //               return;
  //             n.trigger("focus").attr("aria-expanded", "true"),
  //               s.toggleClass("open").trigger(t.Event("shown.bs.dropdown", r));
  //           }
  //           return !1;
  //         }
  //       }),
  //       (a.prototype.keydown = function (i) {
  //         if (
  //           /(38|40|27|32)/.test(i.which) &&
  //           !/input|textarea/i.test(i.target.tagName)
  //         ) {
  //           var o = t(this);
  //           if (
  //             (i.preventDefault(),
  //             i.stopPropagation(),
  //             !o.is(".disabled, :disabled"))
  //           ) {
  //             var n = e(o),
  //               a = n.hasClass("open");
  //             if ((!a && 27 != i.which) || (a && 27 == i.which))
  //               return (
  //                 27 == i.which && n.find(s).trigger("focus"), o.trigger("click")
  //               );
  //             var r = " li:not(.disabled):visible a",
  //               l = n.find(".dropdown-menu" + r);
  //             if (l.length) {
  //               var h = l.index(i.target);
  //               38 == i.which && h > 0 && h--,
  //                 40 == i.which && h < l.length - 1 && h++,
  //                 ~h || (h = 0),
  //                 l.eq(h).trigger("focus");
  //             }
  //           }
  //         }
  //       });
  //     var r = t.fn.dropdown;
  //     (t.fn.dropdown = o),
  //       (t.fn.dropdown.Constructor = a),
  //       (t.fn.dropdown.noConflict = function () {
  //         return (t.fn.dropdown = r), this;
  //       }),
  //       t(document)
  //         .on("click.bs.dropdown.data-api", i)
  //         .on("click.bs.dropdown.data-api", ".dropdown form", function (t) {
  //           t.stopPropagation();
  //         })
  //         .on("click.bs.dropdown.data-api", s, a.prototype.toggle)
  //         .on("keydown.bs.dropdown.data-api", s, a.prototype.keydown)
  //         .on(
  //           "keydown.bs.dropdown.data-api",
  //           ".dropdown-menu",
  //           a.prototype.keydown
  //         );
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(e, o) {
  //       return this.each(function () {
  //         var n = t(this),
  //           s = n.data("bs.modal"),
  //           a = t.extend({}, i.DEFAULTS, n.data(), "object" == typeof e && e);
  //         s || n.data("bs.modal", (s = new i(this, a))),
  //           "string" == typeof e ? s[e](o) : a.show && s.show(o);
  //       });
  //     }
  //     var i = function (e, i) {
  //       (this.options = i),
  //         (this.$body = t(document.body)),
  //         (this.$element = t(e)),
  //         (this.$dialog = this.$element.find(".modal-dialog")),
  //         (this.$backdrop = null),
  //         (this.isShown = null),
  //         (this.originalBodyPad = null),
  //         (this.scrollbarWidth = 0),
  //         (this.ignoreBackdropClick = !1),
  //         this.options.remote &&
  //           this.$element.find(".modal-content").load(
  //             this.options.remote,
  //             t.proxy(function () {
  //               this.$element.trigger("loaded.bs.modal");
  //             }, this)
  //           );
  //     };
  //     (i.VERSION = "3.3.6"),
  //       (i.TRANSITION_DURATION = 300),
  //       (i.BACKDROP_TRANSITION_DURATION = 150),
  //       (i.DEFAULTS = { backdrop: !0, keyboard: !0, show: !0 }),
  //       (i.prototype.toggle = function (t) {
  //         return this.isShown ? this.hide() : this.show(t);
  //       }),
  //       (i.prototype.show = function (e) {
  //         var o = this,
  //           n = t.Event("show.bs.modal", { relatedTarget: e });
  //         this.$element.trigger(n),
  //           this.isShown ||
  //             n.isDefaultPrevented() ||
  //             ((this.isShown = !0),
  //             this.checkScrollbar(),
  //             this.setScrollbar(),
  //             this.$body.addClass("modal-open"),
  //             this.escape(),
  //             this.resize(),
  //             this.$element.on(
  //               "click.dismiss.bs.modal",
  //               '[data-dismiss="modal"]',
  //               t.proxy(this.hide, this)
  //             ),
  //             this.$dialog.on("mousedown.dismiss.bs.modal", function () {
  //               o.$element.one("mouseup.dismiss.bs.modal", function (e) {
  //                 t(e.target).is(o.$element) && (o.ignoreBackdropClick = !0);
  //               });
  //             }),
  //             this.backdrop(function () {
  //               var n = t.support.transition && o.$element.hasClass("fade");
  //               o.$element.parent().length || o.$element.appendTo(o.$body),
  //                 o.$element.show().scrollTop(0),
  //                 o.adjustDialog(),
  //                 n && o.$element[0].offsetWidth,
  //                 o.$element.addClass("in"),
  //                 o.enforceFocus();
  //               var s = t.Event("shown.bs.modal", { relatedTarget: e });
  //               n
  //                 ? o.$dialog
  //                     .one("bsTransitionEnd", function () {
  //                       o.$element.trigger("focus").trigger(s);
  //                     })
  //                     .emulateTransitionEnd(i.TRANSITION_DURATION)
  //                 : o.$element.trigger("focus").trigger(s);
  //             }));
  //       }),
  //       (i.prototype.hide = function (e) {
  //         console.log(this),
  //           e && e.preventDefault(),
  //           (e = t.Event("hide.bs.modal")),
  //           this.$element.trigger(e),
  //           this.isShown &&
  //             !e.isDefaultPrevented() &&
  //             ((this.isShown = !1),
  //             this.escape(),
  //             this.resize(),
  //             t(document).off("focusin.bs.modal"),
  //             this.$element
  //               .removeClass("in")
  //               .off("click.dismiss.bs.modal")
  //               .off("mouseup.dismiss.bs.modal"),
  //             this.$dialog.off("mousedown.dismiss.bs.modal"),
  //             t.support.transition && this.$element.hasClass("fade")
  //               ? this.$element
  //                   .one("bsTransitionEnd", t.proxy(this.hideModal, this))
  //                   .emulateTransitionEnd(i.TRANSITION_DURATION)
  //               : this.hideModal());
  //       }),
  //       (i.prototype.enforceFocus = function () {
  //         t(document)
  //           .off("focusin.bs.modal")
  //           .on(
  //             "focusin.bs.modal",
  //             t.proxy(function (t) {
  //               this.$element[0] === t.target ||
  //                 this.$element.has(t.target).length ||
  //                 this.$element.trigger("focus");
  //             }, this)
  //           );
  //       }),
  //       (i.prototype.escape = function () {
  //         this.isShown && this.options.keyboard
  //           ? this.$element.on(
  //               "keydown.dismiss.bs.modal",
  //               t.proxy(function (t) {
  //                 27 == t.which && this.hide();
  //               }, this)
  //             )
  //           : this.isShown || this.$element.off("keydown.dismiss.bs.modal");
  //       }),
  //       (i.prototype.resize = function () {
  //         this.isShown
  //           ? t(window).on("resize.bs.modal", t.proxy(this.handleUpdate, this))
  //           : t(window).off("resize.bs.modal");
  //       }),
  //       (i.prototype.hideModal = function () {
  //         var t = this;
  //         closepopup(this.$element),
  //           this.$element.hide(),
  //           this.backdrop(function () {
  //             t.$body.removeClass("modal-open"),
  //               t.resetAdjustments(),
  //               t.resetScrollbar(),
  //               t.$element.trigger("hidden.bs.modal");
  //           });
  //       }),
  //       (i.prototype.removeBackdrop = function () {
  //         this.$backdrop && this.$backdrop.remove(), (this.$backdrop = null);
  //       }),
  //       (i.prototype.backdrop = function (e) {
  //         var o = this,
  //           n = this.$element.hasClass("fade") ? "fade" : "";
  //         if (this.isShown && this.options.backdrop) {
  //           var s = t.support.transition && n;
  //           if (
  //             ((this.$backdrop = t(document.createElement("div"))
  //               .addClass("modal-backdrop " + n)
  //               .appendTo(this.$body)),
  //             this.$element.on(
  //               "click.dismiss.bs.modal",
  //               t.proxy(function (t) {
  //                 return this.ignoreBackdropClick
  //                   ? void (this.ignoreBackdropClick = !1)
  //                   : void (
  //                       t.target === t.currentTarget &&
  //                       ("static" == this.options.backdrop
  //                         ? this.$element[0].focus()
  //                         : this.hide())
  //                     );
  //               }, this)
  //             ),
  //             s && this.$backdrop[0].offsetWidth,
  //             this.$backdrop.addClass("in"),
  //             !e)
  //           )
  //             return;
  //           s
  //             ? this.$backdrop
  //                 .one("bsTransitionEnd", e)
  //                 .emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION)
  //             : e();
  //         } else if (!this.isShown && this.$backdrop) {
  //           this.$backdrop.removeClass("in");
  //           var a = function () {
  //             o.removeBackdrop(), e && e();
  //           };
  //           t.support.transition && this.$element.hasClass("fade")
  //             ? this.$backdrop
  //                 .one("bsTransitionEnd", a)
  //                 .emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION)
  //             : a();
  //         } else e && e();
  //       }),
  //       (i.prototype.handleUpdate = function () {
  //         this.adjustDialog();
  //       }),
  //       (i.prototype.adjustDialog = function () {
  //         var t =
  //           this.$element[0].scrollHeight > document.documentElement.clientHeight;
  //         this.$element.css({
  //           paddingLeft: !this.bodyIsOverflowing && t ? this.scrollbarWidth : "",
  //           paddingRight: this.bodyIsOverflowing && !t ? this.scrollbarWidth : "",
  //         });
  //       }),
  //       (i.prototype.resetAdjustments = function () {
  //         this.$element.css({ paddingLeft: "", paddingRight: "" });
  //       }),
  //       (i.prototype.checkScrollbar = function () {
  //         var t = window.innerWidth;
  //         if (!t) {
  //           var e = document.documentElement.getBoundingClientRect();
  //           t = e.right - Math.abs(e.left);
  //         }
  //         (this.bodyIsOverflowing = document.body.clientWidth < t),
  //           (this.scrollbarWidth = this.measureScrollbar());
  //       }),
  //       (i.prototype.setScrollbar = function () {
  //         var t = parseInt(this.$body.css("padding-right") || 0, 10);
  //         (this.originalBodyPad = document.body.style.paddingRight || ""),
  //           this.bodyIsOverflowing &&
  //             this.$body.css("padding-right", t + this.scrollbarWidth);
  //       }),
  //       (i.prototype.resetScrollbar = function () {
  //         this.$body.css("padding-right", this.originalBodyPad);
  //       }),
  //       (i.prototype.measureScrollbar = function () {
  //         var t = document.createElement("div");
  //         (t.className = "modal-scrollbar-measure"), this.$body.append(t);
  //         var e = t.offsetWidth - t.clientWidth;
  //         return this.$body[0].removeChild(t), e;
  //       });
  //     var o = t.fn.modal;
  //     (t.fn.modal = e),
  //       (t.fn.modal.Constructor = i),
  //       (t.fn.modal.noConflict = function () {
  //         return (t.fn.modal = o), this;
  //       }),
  //       t(document).on(
  //         "click.bs.modal.data-api",
  //         '[data-toggle="modal"]',
  //         function (i) {
  //           var o = t(this),
  //             n = o.attr("href"),
  //             s = t(
  //               o.attr("data-target") || (n && n.replace(/.*(?=#[^\s]+$)/, ""))
  //             ),
  //             a = s.data("bs.modal")
  //               ? "toggle"
  //               : t.extend({ remote: !/#/.test(n) && n }, s.data(), o.data());
  //           o.is("a") && i.preventDefault(),
  //             s.one("show.bs.modal", function (t) {
  //               t.isDefaultPrevented() ||
  //                 s.one("hidden.bs.modal", function () {
  //                   o.is(":visible") && o.trigger("focus");
  //                 });
  //             }),
  //             e.call(s, a, this);
  //         }
  //       );
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(e) {
  //       return this.each(function () {
  //         var o = t(this),
  //           n = o.data("bs.tooltip"),
  //           s = "object" == typeof e && e;
  //         (n || !/destroy|hide/.test(e)) &&
  //           (n || o.data("bs.tooltip", (n = new i(this, s))),
  //           "string" == typeof e && n[e]());
  //       });
  //     }
  //     var i = function (t, e) {
  //       (this.type = null),
  //         (this.options = null),
  //         (this.enabled = null),
  //         (this.timeout = null),
  //         (this.hoverState = null),
  //         (this.$element = null),
  //         (this.inState = null),
  //         this.init("tooltip", t, e);
  //     };
  //     (i.VERSION = "3.3.6"),
  //       (i.TRANSITION_DURATION = 150),
  //       (i.DEFAULTS = {
  //         animation: !0,
  //         placement: "top",
  //         selector: !1,
  //         template:
  //           '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
  //         trigger: "hover focus",
  //         title: "",
  //         delay: 0,
  //         html: !1,
  //         container: !1,
  //         viewport: { selector: "body", padding: 0 },
  //       }),
  //       (i.prototype.init = function (e, i, o) {
  //         if (
  //           ((this.enabled = !0),
  //           (this.type = e),
  //           (this.$element = t(i)),
  //           (this.options = this.getOptions(o)),
  //           (this.$viewport =
  //             this.options.viewport &&
  //             t(
  //               t.isFunction(this.options.viewport)
  //                 ? this.options.viewport.call(this, this.$element)
  //                 : this.options.viewport.selector || this.options.viewport
  //             )),
  //           (this.inState = { click: !1, hover: !1, focus: !1 }),
  //           this.$element[0] instanceof document.constructor &&
  //             !this.options.selector)
  //         )
  //           throw new Error(
  //             "`selector` option must be specified when initializing " +
  //               this.type +
  //               " on the window.document object!"
  //           );
  //         for (var n = this.options.trigger.split(" "), s = n.length; s--; ) {
  //           var a = n[s];
  //           if ("click" == a)
  //             this.$element.on(
  //               "click." + this.type,
  //               this.options.selector,
  //               t.proxy(this.toggle, this)
  //             );
  //           else if ("manual" != a) {
  //             var r = "hover" == a ? "mouseenter" : "focusin",
  //               l = "hover" == a ? "mouseleave" : "focusout";
  //             this.$element.on(
  //               r + "." + this.type,
  //               this.options.selector,
  //               t.proxy(this.enter, this)
  //             ),
  //               this.$element.on(
  //                 l + "." + this.type,
  //                 this.options.selector,
  //                 t.proxy(this.leave, this)
  //               );
  //           }
  //         }
  //         this.options.selector
  //           ? (this._options = t.extend({}, this.options, {
  //               trigger: "manual",
  //               selector: "",
  //             }))
  //           : this.fixTitle();
  //       }),
  //       (i.prototype.getDefaults = function () {
  //         return i.DEFAULTS;
  //       }),
  //       (i.prototype.getOptions = function (e) {
  //         return (
  //           (e = t.extend({}, this.getDefaults(), this.$element.data(), e)),
  //           e.delay &&
  //             "number" == typeof e.delay &&
  //             (e.delay = { show: e.delay, hide: e.delay }),
  //           e
  //         );
  //       }),
  //       (i.prototype.getDelegateOptions = function () {
  //         var e = {},
  //           i = this.getDefaults();
  //         return (
  //           this._options &&
  //             t.each(this._options, function (t, o) {
  //               i[t] != o && (e[t] = o);
  //             }),
  //           e
  //         );
  //       }),
  //       (i.prototype.enter = function (e) {
  //         var i =
  //           e instanceof this.constructor
  //             ? e
  //             : t(e.currentTarget).data("bs." + this.type);
  //         return (
  //           i ||
  //             ((i = new this.constructor(
  //               e.currentTarget,
  //               this.getDelegateOptions()
  //             )),
  //             t(e.currentTarget).data("bs." + this.type, i)),
  //           e instanceof t.Event &&
  //             (i.inState["focusin" == e.type ? "focus" : "hover"] = !0),
  //           i.tip().hasClass("in") || "in" == i.hoverState
  //             ? void (i.hoverState = "in")
  //             : (clearTimeout(i.timeout),
  //               (i.hoverState = "in"),
  //               i.options.delay && i.options.delay.show
  //                 ? void (i.timeout = setTimeout(function () {
  //                     "in" == i.hoverState && i.show();
  //                   }, i.options.delay.show))
  //                 : i.show())
  //         );
  //       }),
  //       (i.prototype.isInStateTrue = function () {
  //         for (var t in this.inState) if (this.inState[t]) return !0;
  //         return !1;
  //       }),
  //       (i.prototype.leave = function (e) {
  //         var i =
  //           e instanceof this.constructor
  //             ? e
  //             : t(e.currentTarget).data("bs." + this.type);
  //         return (
  //           i ||
  //             ((i = new this.constructor(
  //               e.currentTarget,
  //               this.getDelegateOptions()
  //             )),
  //             t(e.currentTarget).data("bs." + this.type, i)),
  //           e instanceof t.Event &&
  //             (i.inState["focusout" == e.type ? "focus" : "hover"] = !1),
  //           i.isInStateTrue()
  //             ? void 0
  //             : (clearTimeout(i.timeout),
  //               (i.hoverState = "out"),
  //               i.options.delay && i.options.delay.hide
  //                 ? void (i.timeout = setTimeout(function () {
  //                     "out" == i.hoverState && i.hide();
  //                   }, i.options.delay.hide))
  //                 : i.hide())
  //         );
  //       }),
  //       (i.prototype.show = function () {
  //         var e = t.Event("show.bs." + this.type);
  //         if (this.hasContent() && this.enabled) {
  //           this.$element.trigger(e);
  //           var o = t.contains(
  //             this.$element[0].ownerDocument.documentElement,
  //             this.$element[0]
  //           );
  //           if (e.isDefaultPrevented() || !o) return;
  //           var n = this,
  //             s = this.tip(),
  //             a = this.getUID(this.type);
  //           this.setContent(),
  //             s.attr("id", a),
  //             this.$element.attr("aria-describedby", a),
  //             this.options.animation && s.addClass("fade");
  //           var r =
  //               "function" == typeof this.options.placement
  //                 ? this.options.placement.call(this, s[0], this.$element[0])
  //                 : this.options.placement,
  //             l = /\s?auto?\s?/i,
  //             h = l.test(r);
  //           h && (r = r.replace(l, "") || "top"),
  //             s
  //               .detach()
  //               .css({ top: 0, left: 0, display: "block" })
  //               .addClass(r)
  //               .data("bs." + this.type, this),
  //             this.options.container
  //               ? s.appendTo(this.options.container)
  //               : s.insertAfter(this.$element),
  //             this.$element.trigger("inserted.bs." + this.type);
  //           var d = this.getPosition(),
  //             p = s[0].offsetWidth,
  //             c = s[0].offsetHeight;
  //           if (h) {
  //             var f = r,
  //               u = this.getPosition(this.$viewport);
  //             (r =
  //               "bottom" == r && d.bottom + c > u.bottom
  //                 ? "top"
  //                 : "top" == r && d.top - c < u.top
  //                 ? "bottom"
  //                 : "right" == r && d.right + p > u.width
  //                 ? "left"
  //                 : "left" == r && d.left - p < u.left
  //                 ? "right"
  //                 : r),
  //               s.removeClass(f).addClass(r);
  //           }
  //           var g = this.getCalculatedOffset(r, d, p, c);
  //           this.applyPlacement(g, r);
  //           var v = function () {
  //             var t = n.hoverState;
  //             n.$element.trigger("shown.bs." + n.type),
  //               (n.hoverState = null),
  //               "out" == t && n.leave(n);
  //           };
  //           t.support.transition && this.$tip.hasClass("fade")
  //             ? s
  //                 .one("bsTransitionEnd", v)
  //                 .emulateTransitionEnd(i.TRANSITION_DURATION)
  //             : v();
  //         }
  //       }),
  //       (i.prototype.applyPlacement = function (e, i) {
  //         var o = this.tip(),
  //           n = o[0].offsetWidth,
  //           s = o[0].offsetHeight,
  //           a = parseInt(o.css("margin-top"), 10),
  //           r = parseInt(o.css("margin-left"), 10);
  //         isNaN(a) && (a = 0),
  //           isNaN(r) && (r = 0),
  //           (e.top += a),
  //           (e.left += r),
  //           t.offset.setOffset(
  //             o[0],
  //             t.extend(
  //               {
  //                 using: function (t) {
  //                   o.css({ top: Math.round(t.top), left: Math.round(t.left) });
  //                 },
  //               },
  //               e
  //             ),
  //             0
  //           ),
  //           o.addClass("in");
  //         var l = o[0].offsetWidth,
  //           h = o[0].offsetHeight;
  //         "top" == i && h != s && (e.top = e.top + s - h);
  //         var d = this.getViewportAdjustedDelta(i, e, l, h);
  //         d.left ? (e.left += d.left) : (e.top += d.top);
  //         var p = /top|bottom/.test(i),
  //           c = p ? 2 * d.left - n + l : 2 * d.top - s + h,
  //           f = p ? "offsetWidth" : "offsetHeight";
  //         o.offset(e), this.replaceArrow(c, o[0][f], p);
  //       }),
  //       (i.prototype.replaceArrow = function (t, e, i) {
  //         this.arrow()
  //           .css(i ? "left" : "top", 50 * (1 - t / e) + "%")
  //           .css(i ? "top" : "left", "");
  //       }),
  //       (i.prototype.setContent = function () {
  //         var t = this.tip(),
  //           e = this.getTitle();
  //         t.find(".tooltip-inner")[this.options.html ? "html" : "text"](e),
  //           t.removeClass("fade in top bottom left right");
  //       }),
  //       (i.prototype.hide = function (e) {
  //         function o() {
  //           "in" != n.hoverState && s.detach(),
  //             n.$element
  //               .removeAttr("aria-describedby")
  //               .trigger("hidden.bs." + n.type),
  //             e && e();
  //         }
  //         var n = this,
  //           s = t(this.$tip),
  //           a = t.Event("hide.bs." + this.type);
  //         return (
  //           this.$element.trigger(a),
  //           a.isDefaultPrevented()
  //             ? void 0
  //             : (s.removeClass("in"),
  //               t.support.transition && s.hasClass("fade")
  //                 ? s
  //                     .one("bsTransitionEnd", o)
  //                     .emulateTransitionEnd(i.TRANSITION_DURATION)
  //                 : o(),
  //               (this.hoverState = null),
  //               this)
  //         );
  //       }),
  //       (i.prototype.fixTitle = function () {
  //         var t = this.$element;
  //         (t.attr("title") || "string" != typeof t.attr("data-original-title")) &&
  //           t
  //             .attr("data-original-title", t.attr("title") || "")
  //             .attr("title", "");
  //       }),
  //       (i.prototype.hasContent = function () {
  //         return this.getTitle();
  //       }),
  //       (i.prototype.getPosition = function (e) {
  //         e = e || this.$element;
  //         var i = e[0],
  //           o = "BODY" == i.tagName,
  //           n = i.getBoundingClientRect();
  //         null == n.width &&
  //           (n = t.extend({}, n, {
  //             width: n.right - n.left,
  //             height: n.bottom - n.top,
  //           }));
  //         var s = o ? { top: 0, left: 0 } : e.offset(),
  //           a = {
  //             scroll: o
  //               ? document.documentElement.scrollTop || document.body.scrollTop
  //               : e.scrollTop(),
  //           },
  //           r = o
  //             ? { width: t(window).width(), height: t(window).height() }
  //             : null;
  //         return t.extend({}, n, a, r, s);
  //       }),
  //       (i.prototype.getCalculatedOffset = function (t, e, i, o) {
  //         return "bottom" == t
  //           ? { top: e.top + e.height, left: e.left + e.width / 2 - i / 2 }
  //           : "top" == t
  //           ? { top: e.top - o, left: e.left + e.width / 2 - i / 2 }
  //           : "left" == t
  //           ? { top: e.top + e.height / 2 - o / 2, left: e.left - i }
  //           : { top: e.top + e.height / 2 - o / 2, left: e.left + e.width };
  //       }),
  //       (i.prototype.getViewportAdjustedDelta = function (t, e, i, o) {
  //         var n = { top: 0, left: 0 };
  //         if (!this.$viewport) return n;
  //         var s = (this.options.viewport && this.options.viewport.padding) || 0,
  //           a = this.getPosition(this.$viewport);
  //         if (/right|left/.test(t)) {
  //           var r = e.top - s - a.scroll,
  //             l = e.top + s - a.scroll + o;
  //           r < a.top
  //             ? (n.top = a.top - r)
  //             : l > a.top + a.height && (n.top = a.top + a.height - l);
  //         } else {
  //           var h = e.left - s,
  //             d = e.left + s + i;
  //           h < a.left
  //             ? (n.left = a.left - h)
  //             : d > a.right && (n.left = a.left + a.width - d);
  //         }
  //         return n;
  //       }),
  //       (i.prototype.getTitle = function () {
  //         var t,
  //           e = this.$element,
  //           i = this.options;
  //         return (t =
  //           e.attr("data-original-title") ||
  //           ("function" == typeof i.title ? i.title.call(e[0]) : i.title));
  //       }),
  //       (i.prototype.getUID = function (t) {
  //         do t += ~~(1e6 * Math.random());
  //         while (document.getElementById(t));
  //         return t;
  //       }),
  //       (i.prototype.tip = function () {
  //         if (
  //           !this.$tip &&
  //           ((this.$tip = t(this.options.template)), 1 != this.$tip.length)
  //         )
  //           throw new Error(
  //             this.type +
  //               " `template` option must consist of exactly 1 top-level element!"
  //           );
  //         return this.$tip;
  //       }),
  //       (i.prototype.arrow = function () {
  //         return (this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow"));
  //       }),
  //       (i.prototype.enable = function () {
  //         this.enabled = !0;
  //       }),
  //       (i.prototype.disable = function () {
  //         this.enabled = !1;
  //       }),
  //       (i.prototype.toggleEnabled = function () {
  //         this.enabled = !this.enabled;
  //       }),
  //       (i.prototype.toggle = function (e) {
  //         var i = this;
  //         e &&
  //           ((i = t(e.currentTarget).data("bs." + this.type)),
  //           i ||
  //             ((i = new this.constructor(
  //               e.currentTarget,
  //               this.getDelegateOptions()
  //             )),
  //             t(e.currentTarget).data("bs." + this.type, i))),
  //           e
  //             ? ((i.inState.click = !i.inState.click),
  //               i.isInStateTrue() ? i.enter(i) : i.leave(i))
  //             : i.tip().hasClass("in")
  //             ? i.leave(i)
  //             : i.enter(i);
  //       }),
  //       (i.prototype.destroy = function () {
  //         var t = this;
  //         clearTimeout(this.timeout),
  //           this.hide(function () {
  //             t.$element.off("." + t.type).removeData("bs." + t.type),
  //               t.$tip && t.$tip.detach(),
  //               (t.$tip = null),
  //               (t.$arrow = null),
  //               (t.$viewport = null);
  //           });
  //       });
  //     var o = t.fn.tooltip;
  //     (t.fn.tooltip = e),
  //       (t.fn.tooltip.Constructor = i),
  //       (t.fn.tooltip.noConflict = function () {
  //         return (t.fn.tooltip = o), this;
  //       });
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(e) {
  //       return this.each(function () {
  //         var o = t(this),
  //           n = o.data("bs.popover"),
  //           s = "object" == typeof e && e;
  //         (n || !/destroy|hide/.test(e)) &&
  //           (n || o.data("bs.popover", (n = new i(this, s))),
  //           "string" == typeof e && n[e]());
  //       });
  //     }
  //     var i = function (t, e) {
  //       this.init("popover", t, e);
  //     };
  //     if (!t.fn.tooltip) throw new Error("Popover requires tooltip.js");
  //     (i.VERSION = "3.3.6"),
  //       (i.DEFAULTS = t.extend({}, t.fn.tooltip.Constructor.DEFAULTS, {
  //         placement: "right",
  //         trigger: "click",
  //         content: "",
  //         template:
  //           '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
  //       })),
  //       (i.prototype = t.extend({}, t.fn.tooltip.Constructor.prototype)),
  //       (i.prototype.constructor = i),
  //       (i.prototype.getDefaults = function () {
  //         return i.DEFAULTS;
  //       }),
  //       (i.prototype.setContent = function () {
  //         var t = this.tip(),
  //           e = this.getTitle(),
  //           i = this.getContent();
  //         t.find(".popover-title")[this.options.html ? "html" : "text"](e),
  //           t
  //             .find(".popover-content")
  //             .children()
  //             .detach()
  //             .end()
  //             [
  //               this.options.html
  //                 ? "string" == typeof i
  //                   ? "html"
  //                   : "append"
  //                 : "text"
  //             ](i),
  //           t.removeClass("fade top bottom left right in"),
  //           t.find(".popover-title").html() || t.find(".popover-title").hide();
  //       }),
  //       (i.prototype.hasContent = function () {
  //         return this.getTitle() || this.getContent();
  //       }),
  //       (i.prototype.getContent = function () {
  //         var t = this.$element,
  //           e = this.options;
  //         return (
  //           t.attr("data-content") ||
  //           ("function" == typeof e.content ? e.content.call(t[0]) : e.content)
  //         );
  //       }),
  //       (i.prototype.arrow = function () {
  //         return (this.$arrow = this.$arrow || this.tip().find(".arrow"));
  //       });
  //     var o = t.fn.popover;
  //     (t.fn.popover = e),
  //       (t.fn.popover.Constructor = i),
  //       (t.fn.popover.noConflict = function () {
  //         return (t.fn.popover = o), this;
  //       });
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(i, o) {
  //       (this.$body = t(document.body)),
  //         (this.$scrollElement = t(t(i).is(document.body) ? window : i)),
  //         (this.options = t.extend({}, e.DEFAULTS, o)),
  //         (this.selector = (this.options.target || "") + " .nav li > a"),
  //         (this.offsets = []),
  //         (this.targets = []),
  //         (this.activeTarget = null),
  //         (this.scrollHeight = 0),
  //         this.$scrollElement.on(
  //           "scroll.bs.scrollspy",
  //           t.proxy(this.process, this)
  //         ),
  //         this.refresh(),
  //         this.process();
  //     }
  //     function i(i) {
  //       return this.each(function () {
  //         var o = t(this),
  //           n = o.data("bs.scrollspy"),
  //           s = "object" == typeof i && i;
  //         n || o.data("bs.scrollspy", (n = new e(this, s))),
  //           "string" == typeof i && n[i]();
  //       });
  //     }
  //     (e.VERSION = "3.3.6"),
  //       (e.DEFAULTS = { offset: 10 }),
  //       (e.prototype.getScrollHeight = function () {
  //         return (
  //           this.$scrollElement[0].scrollHeight ||
  //           Math.max(
  //             this.$body[0].scrollHeight,
  //             document.documentElement.scrollHeight
  //           )
  //         );
  //       }),
  //       (e.prototype.refresh = function () {
  //         var e = this,
  //           i = "offset",
  //           o = 0;
  //         (this.offsets = []),
  //           (this.targets = []),
  //           (this.scrollHeight = this.getScrollHeight()),
  //           t.isWindow(this.$scrollElement[0]) ||
  //             ((i = "position"), (o = this.$scrollElement.scrollTop())),
  //           this.$body
  //             .find(this.selector)
  //             .map(function () {
  //               var e = t(this),
  //                 n = e.data("target") || e.attr("href"),
  //                 s = /^#./.test(n) && t(n);
  //               return (
  //                 (s && s.length && s.is(":visible") && [[s[i]().top + o, n]]) ||
  //                 null
  //               );
  //             })
  //             .sort(function (t, e) {
  //               return t[0] - e[0];
  //             })
  //             .each(function () {
  //               e.offsets.push(this[0]), e.targets.push(this[1]);
  //             });
  //       }),
  //       (e.prototype.process = function () {
  //         var t,
  //           e = this.$scrollElement.scrollTop() + this.options.offset,
  //           i = this.getScrollHeight(),
  //           o = this.options.offset + i - this.$scrollElement.height(),
  //           n = this.offsets,
  //           s = this.targets,
  //           a = this.activeTarget;
  //         if ((this.scrollHeight != i && this.refresh(), e >= o))
  //           return a != (t = s[s.length - 1]) && this.activate(t);
  //         if (a && e < n[0]) return (this.activeTarget = null), this.clear();
  //         for (t = n.length; t--; )
  //           a != s[t] &&
  //             e >= n[t] &&
  //             (void 0 === n[t + 1] || e < n[t + 1]) &&
  //             this.activate(s[t]);
  //       }),
  //       (e.prototype.activate = function (e) {
  //         (this.activeTarget = e), this.clear();
  //         var i =
  //             this.selector +
  //             '[data-target="' +
  //             e +
  //             '"],' +
  //             this.selector +
  //             '[href="' +
  //             e +
  //             '"]',
  //           o = t(i).parents("li").addClass("active");
  //         o.parent(".dropdown-menu").length &&
  //           (o = o.closest("li.dropdown").addClass("active")),
  //           o.trigger("activate.bs.scrollspy");
  //       }),
  //       (e.prototype.clear = function () {
  //         t(this.selector)
  //           .parentsUntil(this.options.target, ".active")
  //           .removeClass("active");
  //       });
  //     var o = t.fn.scrollspy;
  //     (t.fn.scrollspy = i),
  //       (t.fn.scrollspy.Constructor = e),
  //       (t.fn.scrollspy.noConflict = function () {
  //         return (t.fn.scrollspy = o), this;
  //       }),
  //       t(window).on("load.bs.scrollspy.data-api", function () {
  //         t('[data-spy="scroll"]').each(function () {
  //           var e = t(this);
  //           i.call(e, e.data());
  //         });
  //       });
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(e) {
  //       return this.each(function () {
  //         var o = t(this),
  //           n = o.data("bs.tab");
  //         n || o.data("bs.tab", (n = new i(this))),
  //           "string" == typeof e && n[e]();
  //       });
  //     }
  //     var i = function (e) {
  //       this.element = t(e);
  //     };
  //     (i.VERSION = "3.3.6"),
  //       (i.TRANSITION_DURATION = 150),
  //       (i.prototype.show = function () {
  //         var e = this.element,
  //           i = e.closest("ul:not(.dropdown-menu)"),
  //           o = e.data("target");
  //         if (
  //           (o ||
  //             ((o = e.attr("href")), (o = o && o.replace(/.*(?=#[^\s]*$)/, ""))),
  //           !e.parent("li").hasClass("active"))
  //         ) {
  //           var n = i.find(".active:last a"),
  //             s = t.Event("hide.bs.tab", { relatedTarget: e[0] }),
  //             a = t.Event("show.bs.tab", { relatedTarget: n[0] });
  //           if (
  //             (n.trigger(s),
  //             e.trigger(a),
  //             !a.isDefaultPrevented() && !s.isDefaultPrevented())
  //           ) {
  //             var r = t(o);
  //             this.activate(e.closest("li"), i),
  //               this.activate(r, r.parent(), function () {
  //                 n.trigger({ type: "hidden.bs.tab", relatedTarget: e[0] }),
  //                   e.trigger({ type: "shown.bs.tab", relatedTarget: n[0] });
  //               });
  //           }
  //         }
  //       }),
  //       (i.prototype.activate = function (e, o, n) {
  //         function s() {
  //           a
  //             .removeClass("active")
  //             .find("> .dropdown-menu > .active")
  //             .removeClass("active")
  //             .end()
  //             .find('[data-toggle="tab"]')
  //             .attr("aria-expanded", !1),
  //             e
  //               .addClass("active")
  //               .find('[data-toggle="tab"]')
  //               .attr("aria-expanded", !0),
  //             r ? (e[0].offsetWidth, e.addClass("in")) : e.removeClass("fade"),
  //             e.parent(".dropdown-menu").length &&
  //               e
  //                 .closest("li.dropdown")
  //                 .addClass("active")
  //                 .end()
  //                 .find('[data-toggle="tab"]')
  //                 .attr("aria-expanded", !0),
  //             n && n();
  //         }
  //         var a = o.find("> .active"),
  //           r =
  //             n &&
  //             t.support.transition &&
  //             ((a.length && a.hasClass("fade")) || !!o.find("> .fade").length);
  //         a.length && r
  //           ? a
  //               .one("bsTransitionEnd", s)
  //               .emulateTransitionEnd(i.TRANSITION_DURATION)
  //           : s(),
  //           a.removeClass("in");
  //       });
  //     var o = t.fn.tab;
  //     (t.fn.tab = e),
  //       (t.fn.tab.Constructor = i),
  //       (t.fn.tab.noConflict = function () {
  //         return (t.fn.tab = o), this;
  //       });
  //     var n = function (i) {
  //       i.preventDefault(), e.call(t(this), "show");
  //     };
  //     t(document)
  //       .on("click.bs.tab.data-api", '[data-toggle="tab"]', n)
  //       .on("click.bs.tab.data-api", '[data-toggle="pill"]', n);
  //   })(jQuery),
  //   +(function (t) {
  //     "use strict";
  //     function e(e) {
  //       return this.each(function () {
  //         var o = t(this),
  //           n = o.data("bs.affix"),
  //           s = "object" == typeof e && e;
  //         n || o.data("bs.affix", (n = new i(this, s))),
  //           "string" == typeof e && n[e]();
  //       });
  //     }
  //     var i = function (e, o) {
  //       (this.options = t.extend({}, i.DEFAULTS, o)),
  //         (this.$target = t(this.options.target)
  //           .on("scroll.bs.affix.data-api", t.proxy(this.checkPosition, this))
  //           .on(
  //             "click.bs.affix.data-api",
  //             t.proxy(this.checkPositionWithEventLoop, this)
  //           )),
  //         (this.$element = t(e)),
  //         (this.affixed = null),
  //         (this.unpin = null),
  //         (this.pinnedOffset = null),
  //         this.checkPosition();
  //     };
  //     (i.VERSION = "3.3.6"),
  //       (i.RESET = "affix affix-top affix-bottom"),
  //       (i.DEFAULTS = { offset: 0, target: window }),
  //       (i.prototype.getState = function (t, e, i, o) {
  //         var n = this.$target.scrollTop(),
  //           s = this.$element.offset(),
  //           a = this.$target.height();
  //         if (null != i && "top" == this.affixed) return i > n ? "top" : !1;
  //         if ("bottom" == this.affixed)
  //           return null != i
  //             ? n + this.unpin <= s.top
  //               ? !1
  //               : "bottom"
  //             : t - o >= n + a
  //             ? !1
  //             : "bottom";
  //         var r = null == this.affixed,
  //           l = r ? n : s.top,
  //           h = r ? a : e;
  //         return null != i && i >= n
  //           ? "top"
  //           : null != o && l + h >= t - o
  //           ? "bottom"
  //           : !1;
  //       }),
  //       (i.prototype.getPinnedOffset = function () {
  //         if (this.pinnedOffset) return this.pinnedOffset;
  //         this.$element.removeClass(i.RESET).addClass("affix");
  //         var t = this.$target.scrollTop(),
  //           e = this.$element.offset();
  //         return (this.pinnedOffset = e.top - t);
  //       }),
  //       (i.prototype.checkPositionWithEventLoop = function () {
  //         setTimeout(t.proxy(this.checkPosition, this), 1);
  //       }),
  //       (i.prototype.checkPosition = function () {
  //         if (this.$element.is(":visible")) {
  //           var e = this.$element.height(),
  //             o = this.options.offset,
  //             n = o.top,
  //             s = o.bottom,
  //             a = Math.max(t(document).height(), t(document.body).height());
  //           "object" != typeof o && (s = n = o),
  //             "function" == typeof n && (n = o.top(this.$element)),
  //             "function" == typeof s && (s = o.bottom(this.$element));
  //           var r = this.getState(a, e, n, s);
  //           if (this.affixed != r) {
  //             null != this.unpin && this.$element.css("top", "");
  //             var l = "affix" + (r ? "-" + r : ""),
  //               h = t.Event(l + ".bs.affix");
  //             if ((this.$element.trigger(h), h.isDefaultPrevented())) return;
  //             (this.affixed = r),
  //               (this.unpin = "bottom" == r ? this.getPinnedOffset() : null),
  //               this.$element
  //                 .removeClass(i.RESET)
  //                 .addClass(l)
  //                 .trigger(l.replace("affix", "affixed") + ".bs.affix");
  //           }
  //           "bottom" == r && this.$element.offset({ top: a - e - s });
  //         }
  //       });
  //     var o = t.fn.affix;
  //     (t.fn.affix = e),
  //       (t.fn.affix.Constructor = i),
  //       (t.fn.affix.noConflict = function () {
  //         return (t.fn.affix = o), this;
  //       }),
  //       t(window).on("load", function () {
  //         t('[data-spy="affix"]').each(function () {
  //           var i = t(this),
  //             o = i.data();
  //           (o.offset = o.offset || {}),
  //             null != o.offsetBottom && (o.offset.bottom = o.offsetBottom),
  //             null != o.offsetTop && (o.offset.top = o.offsetTop),
  //             e.call(i, o);
  //         });
  //       });
  //   })(jQuery);
  // /**kvch/slick.min.js**/
  // !(function (i) {
  //   "use strict";
  //   "function" == typeof define && define.amd
  //     ? define(["jquery"], i)
  //     : "undefined" != typeof exports
  //     ? (module.exports = i(require("jquery")))
  //     : i(jQuery);
  // })(function (i) {
  //   "use strict";
  //   var e = window.Slick || {};
  //   ((e = (function () {
  //     var e = 0;
  //     return function (t, o) {
  //       var s,
  //         n = this;
  //       (n.defaults = {
  //         accessibility: !0,
  //         adaptiveHeight: !1,
  //         appendArrows: i(t),
  //         appendDots: i(t),
  //         arrows: !0,
  //         asNavFor: null,
  //         prevArrow:
  //           '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
  //         nextArrow:
  //           '<button class="slick-next" aria-label="Next" type="button">Next</button>',
  //         autoplay: !1,
  //         autoplaySpeed: 3e3,
  //         centerMode: !1,
  //         centerPadding: "50px",
  //         cssEase: "ease",
  //         customPaging: function (e, t) {
  //           return i('<button type="button" />').text(t + 1);
  //         },
  //         dots: !1,
  //         dotsClass: "slick-dots",
  //         draggable: !0,
  //         easing: "linear",
  //         edgeFriction: 0.35,
  //         fade: !1,
  //         focusOnSelect: !1,
  //         focusOnChange: !1,
  //         infinite: !0,
  //         initialSlide: 0,
  //         lazyLoad: "ondemand",
  //         mobileFirst: !1,
  //         pauseOnHover: !0,
  //         pauseOnFocus: !0,
  //         pauseOnDotsHover: !1,
  //         respondTo: "window",
  //         responsive: null,
  //         rows: 1,
  //         rtl: !1,
  //         slide: "",
  //         slidesPerRow: 1,
  //         slidesToShow: 1,
  //         slidesToScroll: 1,
  //         speed: 500,
  //         swipe: !0,
  //         swipeToSlide: !1,
  //         touchMove: !0,
  //         touchThreshold: 5,
  //         useCSS: !0,
  //         useTransform: !0,
  //         variableWidth: !1,
  //         vertical: !1,
  //         verticalSwiping: !1,
  //         waitForAnimate: !0,
  //         zIndex: 1e3,
  //       }),
  //         (n.initials = {
  //           animating: !1,
  //           dragging: !1,
  //           autoPlayTimer: null,
  //           currentDirection: 0,
  //           currentLeft: null,
  //           currentSlide: 0,
  //           direction: 1,
  //           $dots: null,
  //           listWidth: null,
  //           listHeight: null,
  //           loadIndex: 0,
  //           $nextArrow: null,
  //           $prevArrow: null,
  //           scrolling: !1,
  //           slideCount: null,
  //           slideWidth: null,
  //           $slideTrack: null,
  //           $slides: null,
  //           sliding: !1,
  //           slideOffset: 0,
  //           swipeLeft: null,
  //           swiping: !1,
  //           $list: null,
  //           touchObject: {},
  //           transformsEnabled: !1,
  //           unslicked: !1,
  //         }),
  //         i.extend(n, n.initials),
  //         (n.activeBreakpoint = null),
  //         (n.animType = null),
  //         (n.animProp = null),
  //         (n.breakpoints = []),
  //         (n.breakpointSettings = []),
  //         (n.cssTransitions = !1),
  //         (n.focussed = !1),
  //         (n.interrupted = !1),
  //         (n.hidden = "hidden"),
  //         (n.paused = !0),
  //         (n.positionProp = null),
  //         (n.respondTo = null),
  //         (n.rowCount = 1),
  //         (n.shouldClick = !0),
  //         (n.$slider = i(t)),
  //         (n.$slidesCache = null),
  //         (n.transformType = null),
  //         (n.transitionType = null),
  //         (n.visibilityChange = "visibilitychange"),
  //         (n.windowWidth = 0),
  //         (n.windowTimer = null),
  //         (s = i(t).data("slick") || {}),
  //         (n.options = i.extend({}, n.defaults, o, s)),
  //         (n.currentSlide = n.options.initialSlide),
  //         (n.originalSettings = n.options),
  //         void 0 !== document.mozHidden
  //           ? ((n.hidden = "mozHidden"),
  //             (n.visibilityChange = "mozvisibilitychange"))
  //           : void 0 !== document.webkitHidden &&
  //             ((n.hidden = "webkitHidden"),
  //             (n.visibilityChange = "webkitvisibilitychange")),
  //         (n.autoPlay = i.proxy(n.autoPlay, n)),
  //         (n.autoPlayClear = i.proxy(n.autoPlayClear, n)),
  //         (n.autoPlayIterator = i.proxy(n.autoPlayIterator, n)),
  //         (n.changeSlide = i.proxy(n.changeSlide, n)),
  //         (n.clickHandler = i.proxy(n.clickHandler, n)),
  //         (n.selectHandler = i.proxy(n.selectHandler, n)),
  //         (n.setPosition = i.proxy(n.setPosition, n)),
  //         (n.swipeHandler = i.proxy(n.swipeHandler, n)),
  //         (n.dragHandler = i.proxy(n.dragHandler, n)),
  //         (n.keyHandler = i.proxy(n.keyHandler, n)),
  //         (n.instanceUid = e++),
  //         (n.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/),
  //         n.registerBreakpoints(),
  //         n.init(!0);
  //     };
  //   })()).prototype.activateADA = function () {
  //     this.$slideTrack
  //       .find(".slick-active")
  //       .attr({ "aria-hidden": "false" })
  //       .find("a, input, button, select")
  //       .attr({ tabindex: "0" });
  //   }),
  //     (e.prototype.addSlide = e.prototype.slickAdd =
  //       function (e, t, o) {
  //         var s = this;
  //         if ("boolean" == typeof t) (o = t), (t = null);
  //         else if (t < 0 || t >= s.slideCount) return !1;
  //         s.unload(),
  //           "number" == typeof t
  //             ? 0 === t && 0 === s.$slides.length
  //               ? i(e).appendTo(s.$slideTrack)
  //               : o
  //               ? i(e).insertBefore(s.$slides.eq(t))
  //               : i(e).insertAfter(s.$slides.eq(t))
  //             : !0 === o
  //             ? i(e).prependTo(s.$slideTrack)
  //             : i(e).appendTo(s.$slideTrack),
  //           (s.$slides = s.$slideTrack.children(this.options.slide)),
  //           s.$slideTrack.children(this.options.slide).detach(),
  //           s.$slideTrack.append(s.$slides),
  //           s.$slides.each(function (e, t) {
  //             i(t).attr("data-slick-index", e);
  //           }),
  //           (s.$slidesCache = s.$slides),
  //           s.reinit();
  //       }),
  //     (e.prototype.animateHeight = function () {
  //       var i = this;
  //       if (
  //         1 === i.options.slidesToShow &&
  //         !0 === i.options.adaptiveHeight &&
  //         !1 === i.options.vertical
  //       ) {
  //         var e = i.$slides.eq(i.currentSlide).outerHeight(!0);
  //         i.$list.animate({ height: e }, i.options.speed);
  //       }
  //     }),
  //     (e.prototype.animateSlide = function (e, t) {
  //       var o = {},
  //         s = this;
  //       s.animateHeight(),
  //         !0 === s.options.rtl && !1 === s.options.vertical && (e = -e),
  //         !1 === s.transformsEnabled
  //           ? !1 === s.options.vertical
  //             ? s.$slideTrack.animate(
  //                 { left: e },
  //                 s.options.speed,
  //                 s.options.easing,
  //                 t
  //               )
  //             : s.$slideTrack.animate(
  //                 { top: e },
  //                 s.options.speed,
  //                 s.options.easing,
  //                 t
  //               )
  //           : !1 === s.cssTransitions
  //           ? (!0 === s.options.rtl && (s.currentLeft = -s.currentLeft),
  //             i({ animStart: s.currentLeft }).animate(
  //               { animStart: e },
  //               {
  //                 duration: s.options.speed,
  //                 easing: s.options.easing,
  //                 step: function (i) {
  //                   (i = Math.ceil(i)),
  //                     !1 === s.options.vertical
  //                       ? ((o[s.animType] = "translate(" + i + "px, 0px)"),
  //                         s.$slideTrack.css(o))
  //                       : ((o[s.animType] = "translate(0px," + i + "px)"),
  //                         s.$slideTrack.css(o));
  //                 },
  //                 complete: function () {
  //                   t && t.call();
  //                 },
  //               }
  //             ))
  //           : (s.applyTransition(),
  //             (e = Math.ceil(e)),
  //             !1 === s.options.vertical
  //               ? (o[s.animType] = "translate3d(" + e + "px, 0px, 0px)")
  //               : (o[s.animType] = "translate3d(0px," + e + "px, 0px)"),
  //             s.$slideTrack.css(o),
  //             t &&
  //               setTimeout(function () {
  //                 s.disableTransition(), t.call();
  //               }, s.options.speed));
  //     }),
  //     (e.prototype.getNavTarget = function () {
  //       var e = this,
  //         t = e.options.asNavFor;
  //       return t && null !== t && (t = i(t).not(e.$slider)), t;
  //     }),
  //     (e.prototype.asNavFor = function (e) {
  //       var t = this.getNavTarget();
  //       null !== t &&
  //         "object" == typeof t &&
  //         t.each(function () {
  //           var t = i(this).slick("getSlick");
  //           t.unslicked || t.slideHandler(e, !0);
  //         });
  //     }),
  //     (e.prototype.applyTransition = function (i) {
  //       var e = this,
  //         t = {};
  //       !1 === e.options.fade
  //         ? (t[e.transitionType] =
  //             e.transformType + " " + e.options.speed + "ms " + e.options.cssEase)
  //         : (t[e.transitionType] =
  //             "opacity " + e.options.speed + "ms " + e.options.cssEase),
  //         !1 === e.options.fade ? e.$slideTrack.css(t) : e.$slides.eq(i).css(t);
  //     }),
  //     (e.prototype.autoPlay = function () {
  //       var i = this;
  //       i.autoPlayClear(),
  //         i.slideCount > i.options.slidesToShow &&
  //           (i.autoPlayTimer = setInterval(
  //             i.autoPlayIterator,
  //             i.options.autoplaySpeed
  //           ));
  //     }),
  //     (e.prototype.autoPlayClear = function () {
  //       var i = this;
  //       i.autoPlayTimer && clearInterval(i.autoPlayTimer);
  //     }),
  //     (e.prototype.autoPlayIterator = function () {
  //       var i = this,
  //         e = i.currentSlide + i.options.slidesToScroll;
  //       i.paused ||
  //         i.interrupted ||
  //         i.focussed ||
  //         (!1 === i.options.infinite &&
  //           (1 === i.direction && i.currentSlide + 1 === i.slideCount - 1
  //             ? (i.direction = 0)
  //             : 0 === i.direction &&
  //               ((e = i.currentSlide - i.options.slidesToScroll),
  //               i.currentSlide - 1 == 0 && (i.direction = 1))),
  //         i.slideHandler(e));
  //     }),
  //     (e.prototype.buildArrows = function () {
  //       var e = this;
  //       !0 === e.options.arrows &&
  //         ((e.$prevArrow = i(e.options.prevArrow).addClass("slick-arrow")),
  //         (e.$nextArrow = i(e.options.nextArrow).addClass("slick-arrow")),
  //         e.slideCount > e.options.slidesToShow
  //           ? (e.$prevArrow
  //               .removeClass("slick-hidden")
  //               .removeAttr("aria-hidden tabindex"),
  //             e.$nextArrow
  //               .removeClass("slick-hidden")
  //               .removeAttr("aria-hidden tabindex"),
  //             e.htmlExpr.test(e.options.prevArrow) &&
  //               e.$prevArrow.prependTo(e.options.appendArrows),
  //             e.htmlExpr.test(e.options.nextArrow) &&
  //               e.$nextArrow.appendTo(e.options.appendArrows),
  //             !0 !== e.options.infinite &&
  //               e.$prevArrow
  //                 .addClass("slick-disabled")
  //                 .attr("aria-disabled", "true"))
  //           : e.$prevArrow
  //               .add(e.$nextArrow)
  //               .addClass("slick-hidden")
  //               .attr({ "aria-disabled": "true", tabindex: "-1" }));
  //     }),
  //     (e.prototype.buildDots = function () {
  //       var e,
  //         t,
  //         o = this;
  //       if (!0 === o.options.dots) {
  //         for (
  //           o.$slider.addClass("slick-dotted"),
  //             t = i("<ul />").addClass(o.options.dotsClass),
  //             e = 0;
  //           e <= o.getDotCount();
  //           e += 1
  //         )
  //           t.append(i("<li />").append(o.options.customPaging.call(this, o, e)));
  //         (o.$dots = t.appendTo(o.options.appendDots)),
  //           o.$dots.find("li").first().addClass("slick-active");
  //       }
  //     }),
  //     (e.prototype.buildOut = function () {
  //       var e = this;
  //       (e.$slides = e.$slider
  //         .children(e.options.slide + ":not(.slick-cloned)")
  //         .addClass("slick-slide")),
  //         (e.slideCount = e.$slides.length),
  //         e.$slides.each(function (e, t) {
  //           i(t)
  //             .attr("data-slick-index", e)
  //             .data("originalStyling", i(t).attr("style") || "");
  //         }),
  //         e.$slider.addClass("slick-slider"),
  //         (e.$slideTrack =
  //           0 === e.slideCount
  //             ? i('<div class="slick-track"/>').appendTo(e.$slider)
  //             : e.$slides.wrapAll('<div class="slick-track"/>').parent()),
  //         (e.$list = e.$slideTrack.wrap('<div class="slick-list"/>').parent()),
  //         e.$slideTrack.css("opacity", 0),
  //         (!0 !== e.options.centerMode && !0 !== e.options.swipeToSlide) ||
  //           (e.options.slidesToScroll = 1),
  //         i("img[data-lazy]", e.$slider).not("[src]").addClass("slick-loading"),
  //         e.setupInfinite(),
  //         e.buildArrows(),
  //         e.buildDots(),
  //         e.updateDots(),
  //         e.setSlideClasses(
  //           "number" == typeof e.currentSlide ? e.currentSlide : 0
  //         ),
  //         !0 === e.options.draggable && e.$list.addClass("draggable");
  //     }),
  //     (e.prototype.buildRows = function () {
  //       var i,
  //         e,
  //         t,
  //         o,
  //         s,
  //         n,
  //         r,
  //         l = this;
  //       if (
  //         ((o = document.createDocumentFragment()),
  //         (n = l.$slider.children()),
  //         l.options.rows > 1)
  //       ) {
  //         for (
  //           r = l.options.slidesPerRow * l.options.rows,
  //             s = Math.ceil(n.length / r),
  //             i = 0;
  //           i < s;
  //           i++
  //         ) {
  //           var d = document.createElement("div");
  //           for (e = 0; e < l.options.rows; e++) {
  //             var a = document.createElement("div");
  //             for (t = 0; t < l.options.slidesPerRow; t++) {
  //               var c = i * r + (e * l.options.slidesPerRow + t);
  //               n.get(c) && a.appendChild(n.get(c));
  //             }
  //             d.appendChild(a);
  //           }
  //           o.appendChild(d);
  //         }
  //         l.$slider.empty().append(o),
  //           l.$slider
  //             .children()
  //             .children()
  //             .children()
  //             .css({
  //               width: 100 / l.options.slidesPerRow + "%",
  //               display: "inline-block",
  //             });
  //       }
  //     }),
  //     (e.prototype.checkResponsive = function (e, t) {
  //       var o,
  //         s,
  //         n,
  //         r = this,
  //         l = !1,
  //         d = r.$slider.width(),
  //         a = window.innerWidth || i(window).width();
  //       if (
  //         ("window" === r.respondTo
  //           ? (n = a)
  //           : "slider" === r.respondTo
  //           ? (n = d)
  //           : "min" === r.respondTo && (n = Math.min(a, d)),
  //         r.options.responsive &&
  //           r.options.responsive.length &&
  //           null !== r.options.responsive)
  //       ) {
  //         s = null;
  //         for (o in r.breakpoints)
  //           r.breakpoints.hasOwnProperty(o) &&
  //             (!1 === r.originalSettings.mobileFirst
  //               ? n < r.breakpoints[o] && (s = r.breakpoints[o])
  //               : n > r.breakpoints[o] && (s = r.breakpoints[o]));
  //         null !== s
  //           ? null !== r.activeBreakpoint
  //             ? (s !== r.activeBreakpoint || t) &&
  //               ((r.activeBreakpoint = s),
  //               "unslick" === r.breakpointSettings[s]
  //                 ? r.unslick(s)
  //                 : ((r.options = i.extend(
  //                     {},
  //                     r.originalSettings,
  //                     r.breakpointSettings[s]
  //                   )),
  //                   !0 === e && (r.currentSlide = r.options.initialSlide),
  //                   r.refresh(e)),
  //               (l = s))
  //             : ((r.activeBreakpoint = s),
  //               "unslick" === r.breakpointSettings[s]
  //                 ? r.unslick(s)
  //                 : ((r.options = i.extend(
  //                     {},
  //                     r.originalSettings,
  //                     r.breakpointSettings[s]
  //                   )),
  //                   !0 === e && (r.currentSlide = r.options.initialSlide),
  //                   r.refresh(e)),
  //               (l = s))
  //           : null !== r.activeBreakpoint &&
  //             ((r.activeBreakpoint = null),
  //             (r.options = r.originalSettings),
  //             !0 === e && (r.currentSlide = r.options.initialSlide),
  //             r.refresh(e),
  //             (l = s)),
  //           e || !1 === l || r.$slider.trigger("breakpoint", [r, l]);
  //       }
  //     }),
  //     (e.prototype.changeSlide = function (e, t) {
  //       var o,
  //         s,
  //         n,
  //         r = this,
  //         l = i(e.currentTarget);
  //       switch (
  //         (l.is("a") && e.preventDefault(),
  //         l.is("li") || (l = l.closest("li")),
  //         (n = r.slideCount % r.options.slidesToScroll != 0),
  //         (o = n
  //           ? 0
  //           : (r.slideCount - r.currentSlide) % r.options.slidesToScroll),
  //         e.data.message)
  //       ) {
  //         case "previous":
  //           (s = 0 === o ? r.options.slidesToScroll : r.options.slidesToShow - o),
  //             r.slideCount > r.options.slidesToShow &&
  //               r.slideHandler(r.currentSlide - s, !1, t);
  //           break;
  //         case "next":
  //           (s = 0 === o ? r.options.slidesToScroll : o),
  //             r.slideCount > r.options.slidesToShow &&
  //               r.slideHandler(r.currentSlide + s, !1, t);
  //           break;
  //         case "index":
  //           var d =
  //             0 === e.data.index
  //               ? 0
  //               : e.data.index || l.index() * r.options.slidesToScroll;
  //           r.slideHandler(r.checkNavigable(d), !1, t),
  //             l.children().trigger("focus");
  //           break;
  //         default:
  //           return;
  //       }
  //     }),
  //     (e.prototype.checkNavigable = function (i) {
  //       var e, t;
  //       if (((e = this.getNavigableIndexes()), (t = 0), i > e[e.length - 1]))
  //         i = e[e.length - 1];
  //       else
  //         for (var o in e) {
  //           if (i < e[o]) {
  //             i = t;
  //             break;
  //           }
  //           t = e[o];
  //         }
  //       return i;
  //     }),
  //     (e.prototype.cleanUpEvents = function () {
  //       var e = this;
  //       e.options.dots &&
  //         null !== e.$dots &&
  //         (i("li", e.$dots)
  //           .off("click.slick", e.changeSlide)
  //           .off("mouseenter.slick", i.proxy(e.interrupt, e, !0))
  //           .off("mouseleave.slick", i.proxy(e.interrupt, e, !1)),
  //         !0 === e.options.accessibility &&
  //           e.$dots.off("keydown.slick", e.keyHandler)),
  //         e.$slider.off("focus.slick blur.slick"),
  //         !0 === e.options.arrows &&
  //           e.slideCount > e.options.slidesToShow &&
  //           (e.$prevArrow && e.$prevArrow.off("click.slick", e.changeSlide),
  //           e.$nextArrow && e.$nextArrow.off("click.slick", e.changeSlide),
  //           !0 === e.options.accessibility &&
  //             (e.$prevArrow && e.$prevArrow.off("keydown.slick", e.keyHandler),
  //             e.$nextArrow && e.$nextArrow.off("keydown.slick", e.keyHandler))),
  //         e.$list.off("touchstart.slick mousedown.slick", e.swipeHandler),
  //         e.$list.off("touchmove.slick mousemove.slick", e.swipeHandler),
  //         e.$list.off("touchend.slick mouseup.slick", e.swipeHandler),
  //         e.$list.off("touchcancel.slick mouseleave.slick", e.swipeHandler),
  //         e.$list.off("click.slick", e.clickHandler),
  //         i(document).off(e.visibilityChange, e.visibility),
  //         e.cleanUpSlideEvents(),
  //         !0 === e.options.accessibility &&
  //           e.$list.off("keydown.slick", e.keyHandler),
  //         !0 === e.options.focusOnSelect &&
  //           i(e.$slideTrack).children().off("click.slick", e.selectHandler),
  //         i(window).off(
  //           "orientationchange.slick.slick-" + e.instanceUid,
  //           e.orientationChange
  //         ),
  //         i(window).off("resize.slick.slick-" + e.instanceUid, e.resize),
  //         i("[draggable!=true]", e.$slideTrack).off(
  //           "dragstart",
  //           e.preventDefault
  //         ),
  //         i(window).off("load.slick.slick-" + e.instanceUid, e.setPosition);
  //     }),
  //     (e.prototype.cleanUpSlideEvents = function () {
  //       var e = this;
  //       e.$list.off("mouseenter.slick", i.proxy(e.interrupt, e, !0)),
  //         e.$list.off("mouseleave.slick", i.proxy(e.interrupt, e, !1));
  //     }),
  //     (e.prototype.cleanUpRows = function () {
  //       var i,
  //         e = this;
  //       e.options.rows > 1 &&
  //         ((i = e.$slides.children().children()).removeAttr("style"),
  //         e.$slider.empty().append(i));
  //     }),
  //     (e.prototype.clickHandler = function (i) {
  //       !1 === this.shouldClick &&
  //         (i.stopImmediatePropagation(), i.stopPropagation(), i.preventDefault());
  //     }),
  //     (e.prototype.destroy = function (e) {
  //       var t = this;
  //       t.autoPlayClear(),
  //         (t.touchObject = {}),
  //         t.cleanUpEvents(),
  //         i(".slick-cloned", t.$slider).detach(),
  //         t.$dots && t.$dots.remove(),
  //         t.$prevArrow &&
  //           t.$prevArrow.length &&
  //           (t.$prevArrow
  //             .removeClass("slick-disabled slick-arrow slick-hidden")
  //             .removeAttr("aria-hidden aria-disabled tabindex")
  //             .css("display", ""),
  //           t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove()),
  //         t.$nextArrow &&
  //           t.$nextArrow.length &&
  //           (t.$nextArrow
  //             .removeClass("slick-disabled slick-arrow slick-hidden")
  //             .removeAttr("aria-hidden aria-disabled tabindex")
  //             .css("display", ""),
  //           t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove()),
  //         t.$slides &&
  //           (t.$slides
  //             .removeClass(
  //               "slick-slide slick-active slick-center slick-visible slick-current"
  //             )
  //             .removeAttr("aria-hidden")
  //             .removeAttr("data-slick-index")
  //             .each(function () {
  //               i(this).attr("style", i(this).data("originalStyling"));
  //             }),
  //           t.$slideTrack.children(this.options.slide).detach(),
  //           t.$slideTrack.detach(),
  //           t.$list.detach(),
  //           t.$slider.append(t.$slides)),
  //         t.cleanUpRows(),
  //         t.$slider.removeClass("slick-slider"),
  //         t.$slider.removeClass("slick-initialized"),
  //         t.$slider.removeClass("slick-dotted"),
  //         (t.unslicked = !0),
  //         e || t.$slider.trigger("destroy", [t]);
  //     }),
  //     (e.prototype.disableTransition = function (i) {
  //       var e = this,
  //         t = {};
  //       (t[e.transitionType] = ""),
  //         !1 === e.options.fade ? e.$slideTrack.css(t) : e.$slides.eq(i).css(t);
  //     }),
  //     (e.prototype.fadeSlide = function (i, e) {
  //       var t = this;
  //       !1 === t.cssTransitions
  //         ? (t.$slides.eq(i).css({ zIndex: t.options.zIndex }),
  //           t.$slides
  //             .eq(i)
  //             .animate({ opacity: 1 }, t.options.speed, t.options.easing, e))
  //         : (t.applyTransition(i),
  //           t.$slides.eq(i).css({ opacity: 1, zIndex: t.options.zIndex }),
  //           e &&
  //             setTimeout(function () {
  //               t.disableTransition(i), e.call();
  //             }, t.options.speed));
  //     }),
  //     (e.prototype.fadeSlideOut = function (i) {
  //       var e = this;
  //       !1 === e.cssTransitions
  //         ? e.$slides
  //             .eq(i)
  //             .animate(
  //               { opacity: 0, zIndex: e.options.zIndex - 2 },
  //               e.options.speed,
  //               e.options.easing
  //             )
  //         : (e.applyTransition(i),
  //           e.$slides.eq(i).css({ opacity: 0, zIndex: e.options.zIndex - 2 }));
  //     }),
  //     (e.prototype.filterSlides = e.prototype.slickFilter =
  //       function (i) {
  //         var e = this;
  //         null !== i &&
  //           ((e.$slidesCache = e.$slides),
  //           e.unload(),
  //           e.$slideTrack.children(this.options.slide).detach(),
  //           e.$slidesCache.filter(i).appendTo(e.$slideTrack),
  //           e.reinit());
  //       }),
  //     (e.prototype.focusHandler = function () {
  //       var e = this;
  //       e.$slider
  //         .off("focus.slick blur.slick")
  //         .on("focus.slick blur.slick", "*", function (t) {
  //           t.stopImmediatePropagation();
  //           var o = i(this);
  //           setTimeout(function () {
  //             e.options.pauseOnFocus &&
  //               ((e.focussed = o.is(":focus")), e.autoPlay());
  //           }, 0);
  //         });
  //     }),
  //     (e.prototype.getCurrent = e.prototype.slickCurrentSlide =
  //       function () {
  //         return this.currentSlide;
  //       }),
  //     (e.prototype.getDotCount = function () {
  //       var i = this,
  //         e = 0,
  //         t = 0,
  //         o = 0;
  //       if (!0 === i.options.infinite)
  //         if (i.slideCount <= i.options.slidesToShow) ++o;
  //         else
  //           for (; e < i.slideCount; )
  //             ++o,
  //               (e = t + i.options.slidesToScroll),
  //               (t +=
  //                 i.options.slidesToScroll <= i.options.slidesToShow
  //                   ? i.options.slidesToScroll
  //                   : i.options.slidesToShow);
  //       else if (!0 === i.options.centerMode) o = i.slideCount;
  //       else if (i.options.asNavFor)
  //         for (; e < i.slideCount; )
  //           ++o,
  //             (e = t + i.options.slidesToScroll),
  //             (t +=
  //               i.options.slidesToScroll <= i.options.slidesToShow
  //                 ? i.options.slidesToScroll
  //                 : i.options.slidesToShow);
  //       else
  //         o =
  //           1 +
  //           Math.ceil(
  //             (i.slideCount - i.options.slidesToShow) / i.options.slidesToScroll
  //           );
  //       return o - 1;
  //     }),
  //     (e.prototype.getLeft = function (i) {
  //       var e,
  //         t,
  //         o,
  //         s,
  //         n = this,
  //         r = 0;
  //       return (
  //         (n.slideOffset = 0),
  //         (t = n.$slides.first().outerHeight(!0)),
  //         !0 === n.options.infinite
  //           ? (n.slideCount > n.options.slidesToShow &&
  //               ((n.slideOffset = n.slideWidth * n.options.slidesToShow * -1),
  //               (s = -1),
  //               !0 === n.options.vertical &&
  //                 !0 === n.options.centerMode &&
  //                 (2 === n.options.slidesToShow
  //                   ? (s = -1.5)
  //                   : 1 === n.options.slidesToShow && (s = -2)),
  //               (r = t * n.options.slidesToShow * s)),
  //             n.slideCount % n.options.slidesToScroll != 0 &&
  //               i + n.options.slidesToScroll > n.slideCount &&
  //               n.slideCount > n.options.slidesToShow &&
  //               (i > n.slideCount
  //                 ? ((n.slideOffset =
  //                     (n.options.slidesToShow - (i - n.slideCount)) *
  //                     n.slideWidth *
  //                     -1),
  //                   (r = (n.options.slidesToShow - (i - n.slideCount)) * t * -1))
  //                 : ((n.slideOffset =
  //                     (n.slideCount % n.options.slidesToScroll) *
  //                     n.slideWidth *
  //                     -1),
  //                   (r = (n.slideCount % n.options.slidesToScroll) * t * -1))))
  //           : i + n.options.slidesToShow > n.slideCount &&
  //             ((n.slideOffset =
  //               (i + n.options.slidesToShow - n.slideCount) * n.slideWidth),
  //             (r = (i + n.options.slidesToShow - n.slideCount) * t)),
  //         n.slideCount <= n.options.slidesToShow &&
  //           ((n.slideOffset = 0), (r = 0)),
  //         !0 === n.options.centerMode && n.slideCount <= n.options.slidesToShow
  //           ? (n.slideOffset =
  //               (n.slideWidth * Math.floor(n.options.slidesToShow)) / 2 -
  //               (n.slideWidth * n.slideCount) / 2)
  //           : !0 === n.options.centerMode && !0 === n.options.infinite
  //           ? (n.slideOffset +=
  //               n.slideWidth * Math.floor(n.options.slidesToShow / 2) -
  //               n.slideWidth)
  //           : !0 === n.options.centerMode &&
  //             ((n.slideOffset = 0),
  //             (n.slideOffset +=
  //               n.slideWidth * Math.floor(n.options.slidesToShow / 2))),
  //         (e =
  //           !1 === n.options.vertical
  //             ? i * n.slideWidth * -1 + n.slideOffset
  //             : i * t * -1 + r),
  //         !0 === n.options.variableWidth &&
  //           ((o =
  //             n.slideCount <= n.options.slidesToShow || !1 === n.options.infinite
  //               ? n.$slideTrack.children(".slick-slide").eq(i)
  //               : n.$slideTrack
  //                   .children(".slick-slide")
  //                   .eq(i + n.options.slidesToShow)),
  //           (e =
  //             !0 === n.options.rtl
  //               ? o[0]
  //                 ? -1 * (n.$slideTrack.width() - o[0].offsetLeft - o.width())
  //                 : 0
  //               : o[0]
  //               ? -1 * o[0].offsetLeft
  //               : 0),
  //           !0 === n.options.centerMode &&
  //             ((o =
  //               n.slideCount <= n.options.slidesToShow ||
  //               !1 === n.options.infinite
  //                 ? n.$slideTrack.children(".slick-slide").eq(i)
  //                 : n.$slideTrack
  //                     .children(".slick-slide")
  //                     .eq(i + n.options.slidesToShow + 1)),
  //             (e =
  //               !0 === n.options.rtl
  //                 ? o[0]
  //                   ? -1 * (n.$slideTrack.width() - o[0].offsetLeft - o.width())
  //                   : 0
  //                 : o[0]
  //                 ? -1 * o[0].offsetLeft
  //                 : 0),
  //             (e += (n.$list.width() - o.outerWidth()) / 2))),
  //         e
  //       );
  //     }),
  //     (e.prototype.getOption = e.prototype.slickGetOption =
  //       function (i) {
  //         return this.options[i];
  //       }),
  //     (e.prototype.getNavigableIndexes = function () {
  //       var i,
  //         e = this,
  //         t = 0,
  //         o = 0,
  //         s = [];
  //       for (
  //         !1 === e.options.infinite
  //           ? (i = e.slideCount)
  //           : ((t = -1 * e.options.slidesToScroll),
  //             (o = -1 * e.options.slidesToScroll),
  //             (i = 2 * e.slideCount));
  //         t < i;
  
  //       )
  //         s.push(t),
  //           (t = o + e.options.slidesToScroll),
  //           (o +=
  //             e.options.slidesToScroll <= e.options.slidesToShow
  //               ? e.options.slidesToScroll
  //               : e.options.slidesToShow);
  //       return s;
  //     }),
  //     (e.prototype.getSlick = function () {
  //       return this;
  //     }),
  //     (e.prototype.getSlideCount = function () {
  //       var e,
  //         t,
  //         o = this;
  //       return (
  //         (t =
  //           !0 === o.options.centerMode
  //             ? o.slideWidth * Math.floor(o.options.slidesToShow / 2)
  //             : 0),
  //         !0 === o.options.swipeToSlide
  //           ? (o.$slideTrack.find(".slick-slide").each(function (s, n) {
  //               if (n.offsetLeft - t + i(n).outerWidth() / 2 > -1 * o.swipeLeft)
  //                 return (e = n), !1;
  //             }),
  //             Math.abs(i(e).attr("data-slick-index") - o.currentSlide) || 1)
  //           : o.options.slidesToScroll
  //       );
  //     }),
  //     (e.prototype.goTo = e.prototype.slickGoTo =
  //       function (i, e) {
  //         this.changeSlide({ data: { message: "index", index: parseInt(i) } }, e);
  //       }),
  //     (e.prototype.init = function (e) {
  //       var t = this;
  //       i(t.$slider).hasClass("slick-initialized") ||
  //         (i(t.$slider).addClass("slick-initialized"),
  //         t.buildRows(),
  //         t.buildOut(),
  //         t.setProps(),
  //         t.startLoad(),
  //         t.loadSlider(),
  //         t.initializeEvents(),
  //         t.updateArrows(),
  //         t.updateDots(),
  //         t.checkResponsive(!0),
  //         t.focusHandler()),
  //         e && t.$slider.trigger("init", [t]),
  //         !0 === t.options.accessibility && t.initADA(),
  //         t.options.autoplay && ((t.paused = !1), t.autoPlay());
  //     }),
  //     (e.prototype.initADA = function () {
  //       var e = this,
  //         t = Math.ceil(e.slideCount / e.options.slidesToShow),
  //         o = e.getNavigableIndexes().filter(function (i) {
  //           return i >= 0 && i < e.slideCount;
  //         });
  //       e.$slides
  //         .add(e.$slideTrack.find(".slick-cloned"))
  //         .attr({ "aria-hidden": "true", tabindex: "-1" })
  //         .find("a, input, button, select")
  //         .attr({ tabindex: "-1" }),
  //         null !== e.$dots &&
  //           (e.$slides
  //             .not(e.$slideTrack.find(".slick-cloned"))
  //             .each(function (t) {
  //               var s = o.indexOf(t);
  //               i(this).attr({
  //                 role: "tabpanel",
  //                 id: "slick-slide" + e.instanceUid + t,
  //                 tabindex: -1,
  //               }),
  //                 -1 !== s &&
  //                   i(this).attr({
  //                     "aria-describedby":
  //                       "slick-slide-control" + e.instanceUid + s,
  //                   });
  //             }),
  //           e.$dots
  //             .attr("role", "tablist")
  //             .find("li")
  //             .each(function (s) {
  //               var n = o[s];
  //               i(this).attr({ role: "presentation" }),
  //                 i(this)
  //                   .find("button")
  //                   .first()
  //                   .attr({
  //                     role: "tab",
  //                     id: "slick-slide-control" + e.instanceUid + s,
  //                     "aria-controls": "slick-slide" + e.instanceUid + n,
  //                     "aria-label": s + 1 + " of " + t,
  //                     "aria-selected": null,
  //                     tabindex: "-1",
  //                   });
  //             })
  //             .eq(e.currentSlide)
  //             .find("button")
  //             .attr({ "aria-selected": "true", tabindex: "0" })
  //             .end());
  //       for (var s = e.currentSlide, n = s + e.options.slidesToShow; s < n; s++)
  //         e.$slides.eq(s).attr("tabindex", 0);
  //       e.activateADA();
  //     }),
  //     (e.prototype.initArrowEvents = function () {
  //       var i = this;
  //       !0 === i.options.arrows &&
  //         i.slideCount > i.options.slidesToShow &&
  //         (i.$prevArrow
  //           .off("click.slick")
  //           .on("click.slick", { message: "previous" }, i.changeSlide),
  //         i.$nextArrow
  //           .off("click.slick")
  //           .on("click.slick", { message: "next" }, i.changeSlide),
  //         !0 === i.options.accessibility &&
  //           (i.$prevArrow.on("keydown.slick", i.keyHandler),
  //           i.$nextArrow.on("keydown.slick", i.keyHandler)));
  //     }),
  //     (e.prototype.initDotEvents = function () {
  //       var e = this;
  //       !0 === e.options.dots &&
  //         (i("li", e.$dots).on(
  //           "click.slick",
  //           { message: "index" },
  //           e.changeSlide
  //         ),
  //         !0 === e.options.accessibility &&
  //           e.$dots.on("keydown.slick", e.keyHandler)),
  //         !0 === e.options.dots &&
  //           !0 === e.options.pauseOnDotsHover &&
  //           i("li", e.$dots)
  //             .on("mouseenter.slick", i.proxy(e.interrupt, e, !0))
  //             .on("mouseleave.slick", i.proxy(e.interrupt, e, !1));
  //     }),
  //     (e.prototype.initSlideEvents = function () {
  //       var e = this;
  //       e.options.pauseOnHover &&
  //         (e.$list.on("mouseenter.slick", i.proxy(e.interrupt, e, !0)),
  //         e.$list.on("mouseleave.slick", i.proxy(e.interrupt, e, !1)));
  //     }),
  //     (e.prototype.initializeEvents = function () {
  //       var e = this;
  //       e.initArrowEvents(),
  //         e.initDotEvents(),
  //         e.initSlideEvents(),
  //         e.$list.on(
  //           "touchstart.slick mousedown.slick",
  //           { action: "start" },
  //           e.swipeHandler
  //         ),
  //         e.$list.on(
  //           "touchmove.slick mousemove.slick",
  //           { action: "move" },
  //           e.swipeHandler
  //         ),
  //         e.$list.on(
  //           "touchend.slick mouseup.slick",
  //           { action: "end" },
  //           e.swipeHandler
  //         ),
  //         e.$list.on(
  //           "touchcancel.slick mouseleave.slick",
  //           { action: "end" },
  //           e.swipeHandler
  //         ),
  //         e.$list.on("click.slick", e.clickHandler),
  //         i(document).on(e.visibilityChange, i.proxy(e.visibility, e)),
  //         !0 === e.options.accessibility &&
  //           e.$list.on("keydown.slick", e.keyHandler),
  //         !0 === e.options.focusOnSelect &&
  //           i(e.$slideTrack).children().on("click.slick", e.selectHandler),
  //         i(window).on(
  //           "orientationchange.slick.slick-" + e.instanceUid,
  //           i.proxy(e.orientationChange, e)
  //         ),
  //         i(window).on(
  //           "resize.slick.slick-" + e.instanceUid,
  //           i.proxy(e.resize, e)
  //         ),
  //         i("[draggable!=true]", e.$slideTrack).on("dragstart", e.preventDefault),
  //         i(window).on("load.slick.slick-" + e.instanceUid, e.setPosition),
  //         i(e.setPosition);
  //     }),
  //     (e.prototype.initUI = function () {
  //       var i = this;
  //       !0 === i.options.arrows &&
  //         i.slideCount > i.options.slidesToShow &&
  //         (i.$prevArrow.show(), i.$nextArrow.show()),
  //         !0 === i.options.dots &&
  //           i.slideCount > i.options.slidesToShow &&
  //           i.$dots.show();
  //     }),
  //     (e.prototype.keyHandler = function (i) {
  //       var e = this;
  //       i.target.tagName.match("TEXTAREA|INPUT|SELECT") ||
  //         (37 === i.keyCode && !0 === e.options.accessibility
  //           ? e.changeSlide({
  //               data: { message: !0 === e.options.rtl ? "next" : "previous" },
  //             })
  //           : 39 === i.keyCode &&
  //             !0 === e.options.accessibility &&
  //             e.changeSlide({
  //               data: { message: !0 === e.options.rtl ? "previous" : "next" },
  //             }));
  //     }),
  //     (e.prototype.lazyLoad = function () {
  //       function e(e) {
  //         i("img[data-lazy]", e).each(function () {
  //           var e = i(this),
  //             t = i(this).attr("data-lazy"),
  //             o = i(this).attr("data-srcset"),
  //             s = i(this).attr("data-sizes") || n.$slider.attr("data-sizes"),
  //             r = document.createElement("img");
  //           (r.onload = function () {
  //             e.animate({ opacity: 0 }, 100, function () {
  //               o && (e.attr("srcset", o), s && e.attr("sizes", s)),
  //                 e.attr("src", t).animate({ opacity: 1 }, 200, function () {
  //                   e.removeAttr("data-lazy data-srcset data-sizes").removeClass(
  //                     "slick-loading"
  //                   );
  //                 }),
  //                 n.$slider.trigger("lazyLoaded", [n, e, t]);
  //             });
  //           }),
  //             (r.onerror = function () {
  //               e
  //                 .removeAttr("data-lazy")
  //                 .removeClass("slick-loading")
  //                 .addClass("slick-lazyload-error"),
  //                 n.$slider.trigger("lazyLoadError", [n, e, t]);
  //             }),
  //             (r.src = t);
  //         });
  //       }
  //       var t,
  //         o,
  //         s,
  //         n = this;
  //       if (
  //         (!0 === n.options.centerMode
  //           ? !0 === n.options.infinite
  //             ? (s =
  //                 (o = n.currentSlide + (n.options.slidesToShow / 2 + 1)) +
  //                 n.options.slidesToShow +
  //                 2)
  //             : ((o = Math.max(
  //                 0,
  //                 n.currentSlide - (n.options.slidesToShow / 2 + 1)
  //               )),
  //               (s = n.options.slidesToShow / 2 + 1 + 2 + n.currentSlide))
  //           : ((o = n.options.infinite
  //               ? n.options.slidesToShow + n.currentSlide
  //               : n.currentSlide),
  //             (s = Math.ceil(o + n.options.slidesToShow)),
  //             !0 === n.options.fade && (o > 0 && o--, s <= n.slideCount && s++)),
  //         (t = n.$slider.find(".slick-slide").slice(o, s)),
  //         "anticipated" === n.options.lazyLoad)
  //       )
  //         for (
  //           var r = o - 1, l = s, d = n.$slider.find(".slick-slide"), a = 0;
  //           a < n.options.slidesToScroll;
  //           a++
  //         )
  //           r < 0 && (r = n.slideCount - 1),
  //             (t = (t = t.add(d.eq(r))).add(d.eq(l))),
  //             r--,
  //             l++;
  //       e(t),
  //         n.slideCount <= n.options.slidesToShow
  //           ? e(n.$slider.find(".slick-slide"))
  //           : n.currentSlide >= n.slideCount - n.options.slidesToShow
  //           ? e(n.$slider.find(".slick-cloned").slice(0, n.options.slidesToShow))
  //           : 0 === n.currentSlide &&
  //             e(
  //               n.$slider.find(".slick-cloned").slice(-1 * n.options.slidesToShow)
  //             );
  //     }),
  //     (e.prototype.loadSlider = function () {
  //       var i = this;
  //       i.setPosition(),
  //         i.$slideTrack.css({ opacity: 1 }),
  //         i.$slider.removeClass("slick-loading"),
  //         i.initUI(),
  //         "progressive" === i.options.lazyLoad && i.progressiveLazyLoad();
  //     }),
  //     (e.prototype.next = e.prototype.slickNext =
  //       function () {
  //         this.changeSlide({ data: { message: "next" } });
  //       }),
  //     (e.prototype.orientationChange = function () {
  //       var i = this;
  //       i.checkResponsive(), i.setPosition();
  //     }),
  //     (e.prototype.pause = e.prototype.slickPause =
  //       function () {
  //         var i = this;
  //         i.autoPlayClear(), (i.paused = !0);
  //       }),
  //     (e.prototype.play = e.prototype.slickPlay =
  //       function () {
  //         var i = this;
  //         i.autoPlay(),
  //           (i.options.autoplay = !0),
  //           (i.paused = !1),
  //           (i.focussed = !1),
  //           (i.interrupted = !1);
  //       }),
  //     (e.prototype.postSlide = function (e) {
  //       var t = this;
  //       t.unslicked ||
  //         (t.$slider.trigger("afterChange", [t, e]),
  //         (t.animating = !1),
  //         t.slideCount > t.options.slidesToShow && t.setPosition(),
  //         (t.swipeLeft = null),
  //         t.options.autoplay && t.autoPlay(),
  //         !0 === t.options.accessibility &&
  //           (t.initADA(),
  //           t.options.focusOnChange &&
  //             i(t.$slides.get(t.currentSlide)).attr("tabindex", 0).focus()));
  //     }),
  //     (e.prototype.prev = e.prototype.slickPrev =
  //       function () {
  //         this.changeSlide({ data: { message: "previous" } });
  //       }),
  //     (e.prototype.preventDefault = function (i) {
  //       i.preventDefault();
  //     }),
  //     (e.prototype.progressiveLazyLoad = function (e) {
  //       e = e || 1;
  //       var t,
  //         o,
  //         s,
  //         n,
  //         r,
  //         l = this,
  //         d = i("img[data-lazy]", l.$slider);
  //       d.length
  //         ? ((t = d.first()),
  //           (o = t.attr("data-lazy")),
  //           (s = t.attr("data-srcset")),
  //           (n = t.attr("data-sizes") || l.$slider.attr("data-sizes")),
  //           ((r = document.createElement("img")).onload = function () {
  //             s && (t.attr("srcset", s), n && t.attr("sizes", n)),
  //               t
  //                 .attr("src", o)
  //                 .removeAttr("data-lazy data-srcset data-sizes")
  //                 .removeClass("slick-loading"),
  //               !0 === l.options.adaptiveHeight && l.setPosition(),
  //               l.$slider.trigger("lazyLoaded", [l, t, o]),
  //               l.progressiveLazyLoad();
  //           }),
  //           (r.onerror = function () {
  //             e < 3
  //               ? setTimeout(function () {
  //                   l.progressiveLazyLoad(e + 1);
  //                 }, 500)
  //               : (t
  //                   .removeAttr("data-lazy")
  //                   .removeClass("slick-loading")
  //                   .addClass("slick-lazyload-error"),
  //                 l.$slider.trigger("lazyLoadError", [l, t, o]),
  //                 l.progressiveLazyLoad());
  //           }),
  //           (r.src = o))
  //         : l.$slider.trigger("allImagesLoaded", [l]);
  //     }),
  //     (e.prototype.refresh = function (e) {
  //       var t,
  //         o,
  //         s = this;
  //       (o = s.slideCount - s.options.slidesToShow),
  //         !s.options.infinite && s.currentSlide > o && (s.currentSlide = o),
  //         s.slideCount <= s.options.slidesToShow && (s.currentSlide = 0),
  //         (t = s.currentSlide),
  //         s.destroy(!0),
  //         i.extend(s, s.initials, { currentSlide: t }),
  //         s.init(),
  //         e || s.changeSlide({ data: { message: "index", index: t } }, !1);
  //     }),
  //     (e.prototype.registerBreakpoints = function () {
  //       var e,
  //         t,
  //         o,
  //         s = this,
  //         n = s.options.responsive || null;
  //       if ("array" === i.type(n) && n.length) {
  //         s.respondTo = s.options.respondTo || "window";
  //         for (e in n)
  //           if (((o = s.breakpoints.length - 1), n.hasOwnProperty(e))) {
  //             for (t = n[e].breakpoint; o >= 0; )
  //               s.breakpoints[o] &&
  //                 s.breakpoints[o] === t &&
  //                 s.breakpoints.splice(o, 1),
  //                 o--;
  //             s.breakpoints.push(t), (s.breakpointSettings[t] = n[e].settings);
  //           }
  //         s.breakpoints.sort(function (i, e) {
  //           return s.options.mobileFirst ? i - e : e - i;
  //         });
  //       }
  //     }),
  //     (e.prototype.reinit = function () {
  //       var e = this;
  //       (e.$slides = e.$slideTrack
  //         .children(e.options.slide)
  //         .addClass("slick-slide")),
  //         (e.slideCount = e.$slides.length),
  //         e.currentSlide >= e.slideCount &&
  //           0 !== e.currentSlide &&
  //           (e.currentSlide = e.currentSlide - e.options.slidesToScroll),
  //         e.slideCount <= e.options.slidesToShow && (e.currentSlide = 0),
  //         e.registerBreakpoints(),
  //         e.setProps(),
  //         e.setupInfinite(),
  //         e.buildArrows(),
  //         e.updateArrows(),
  //         e.initArrowEvents(),
  //         e.buildDots(),
  //         e.updateDots(),
  //         e.initDotEvents(),
  //         e.cleanUpSlideEvents(),
  //         e.initSlideEvents(),
  //         e.checkResponsive(!1, !0),
  //         !0 === e.options.focusOnSelect &&
  //           i(e.$slideTrack).children().on("click.slick", e.selectHandler),
  //         e.setSlideClasses(
  //           "number" == typeof e.currentSlide ? e.currentSlide : 0
  //         ),
  //         e.setPosition(),
  //         e.focusHandler(),
  //         (e.paused = !e.options.autoplay),
  //         e.autoPlay(),
  //         e.$slider.trigger("reInit", [e]);
  //     }),
  //     (e.prototype.resize = function () {
  //       var e = this;
  //       i(window).width() !== e.windowWidth &&
  //         (clearTimeout(e.windowDelay),
  //         (e.windowDelay = window.setTimeout(function () {
  //           (e.windowWidth = i(window).width()),
  //             e.checkResponsive(),
  //             e.unslicked || e.setPosition();
  //         }, 50)));
  //     }),
  //     (e.prototype.removeSlide = e.prototype.slickRemove =
  //       function (i, e, t) {
  //         var o = this;
  //         if (
  //           ((i =
  //             "boolean" == typeof i
  //               ? !0 === (e = i)
  //                 ? 0
  //                 : o.slideCount - 1
  //               : !0 === e
  //               ? --i
  //               : i),
  //           o.slideCount < 1 || i < 0 || i > o.slideCount - 1)
  //         )
  //           return !1;
  //         o.unload(),
  //           !0 === t
  //             ? o.$slideTrack.children().remove()
  //             : o.$slideTrack.children(this.options.slide).eq(i).remove(),
  //           (o.$slides = o.$slideTrack.children(this.options.slide)),
  //           o.$slideTrack.children(this.options.slide).detach(),
  //           o.$slideTrack.append(o.$slides),
  //           (o.$slidesCache = o.$slides),
  //           o.reinit();
  //       }),
  //     (e.prototype.setCSS = function (i) {
  //       var e,
  //         t,
  //         o = this,
  //         s = {};
  //       !0 === o.options.rtl && (i = -i),
  //         (e = "left" == o.positionProp ? Math.ceil(i) + "px" : "0px"),
  //         (t = "top" == o.positionProp ? Math.ceil(i) + "px" : "0px"),
  //         (s[o.positionProp] = i),
  //         !1 === o.transformsEnabled
  //           ? o.$slideTrack.css(s)
  //           : ((s = {}),
  //             !1 === o.cssTransitions
  //               ? ((s[o.animType] = "translate(" + e + ", " + t + ")"),
  //                 o.$slideTrack.css(s))
  //               : ((s[o.animType] = "translate3d(" + e + ", " + t + ", 0px)"),
  //                 o.$slideTrack.css(s)));
  //     }),
  //     (e.prototype.setDimensions = function () {
  //       var i = this;
  //       !1 === i.options.vertical
  //         ? !0 === i.options.centerMode &&
  //           i.$list.css({ padding: "0px " + i.options.centerPadding })
  //         : (i.$list.height(
  //             i.$slides.first().outerHeight(!0) * i.options.slidesToShow
  //           ),
  //           !0 === i.options.centerMode &&
  //             i.$list.css({ padding: i.options.centerPadding + " 0px" })),
  //         (i.listWidth = i.$list.width()),
  //         (i.listHeight = i.$list.height()),
  //         !1 === i.options.vertical && !1 === i.options.variableWidth
  //           ? ((i.slideWidth = Math.ceil(i.listWidth / i.options.slidesToShow)),
  //             i.$slideTrack.width(
  //               Math.ceil(
  //                 i.slideWidth * i.$slideTrack.children(".slick-slide").length
  //               )
  //             ))
  //           : !0 === i.options.variableWidth
  //           ? i.$slideTrack.width(5e3 * i.slideCount)
  //           : ((i.slideWidth = Math.ceil(i.listWidth)),
  //             i.$slideTrack.height(
  //               Math.ceil(
  //                 i.$slides.first().outerHeight(!0) *
  //                   i.$slideTrack.children(".slick-slide").length
  //               )
  //             ));
  //       var e = i.$slides.first().outerWidth(!0) - i.$slides.first().width();
  //       !1 === i.options.variableWidth &&
  //         i.$slideTrack.children(".slick-slide").width(i.slideWidth - e);
  //     }),
  //     (e.prototype.setFade = function () {
  //       var e,
  //         t = this;
  //       t.$slides.each(function (o, s) {
  //         (e = t.slideWidth * o * -1),
  //           !0 === t.options.rtl
  //             ? i(s).css({
  //                 position: "relative",
  //                 right: e,
  //                 top: 0,
  //                 zIndex: t.options.zIndex - 2,
  //                 opacity: 0,
  //               })
  //             : i(s).css({
  //                 position: "relative",
  //                 left: e,
  //                 top: 0,
  //                 zIndex: t.options.zIndex - 2,
  //                 opacity: 0,
  //               });
  //       }),
  //         t.$slides
  //           .eq(t.currentSlide)
  //           .css({ zIndex: t.options.zIndex - 1, opacity: 1 });
  //     }),
  //     (e.prototype.setHeight = function () {
  //       var i = this;
  //       if (
  //         1 === i.options.slidesToShow &&
  //         !0 === i.options.adaptiveHeight &&
  //         !1 === i.options.vertical
  //       ) {
  //         var e = i.$slides.eq(i.currentSlide).outerHeight(!0);
  //         i.$list.css("height", e);
  //       }
  //     }),
  //     (e.prototype.setOption = e.prototype.slickSetOption =
  //       function () {
  //         var e,
  //           t,
  //           o,
  //           s,
  //           n,
  //           r = this,
  //           l = !1;
  //         if (
  //           ("object" === i.type(arguments[0])
  //             ? ((o = arguments[0]), (l = arguments[1]), (n = "multiple"))
  //             : "string" === i.type(arguments[0]) &&
  //               ((o = arguments[0]),
  //               (s = arguments[1]),
  //               (l = arguments[2]),
  //               "responsive" === arguments[0] && "array" === i.type(arguments[1])
  //                 ? (n = "responsive")
  //                 : void 0 !== arguments[1] && (n = "single")),
  //           "single" === n)
  //         )
  //           r.options[o] = s;
  //         else if ("multiple" === n)
  //           i.each(o, function (i, e) {
  //             r.options[i] = e;
  //           });
  //         else if ("responsive" === n)
  //           for (t in s)
  //             if ("array" !== i.type(r.options.responsive))
  //               r.options.responsive = [s[t]];
  //             else {
  //               for (e = r.options.responsive.length - 1; e >= 0; )
  //                 r.options.responsive[e].breakpoint === s[t].breakpoint &&
  //                   r.options.responsive.splice(e, 1),
  //                   e--;
  //               r.options.responsive.push(s[t]);
  //             }
  //         l && (r.unload(), r.reinit());
  //       }),
  //     (e.prototype.setPosition = function () {
  //       var i = this;
  //       i.setDimensions(),
  //         i.setHeight(),
  //         !1 === i.options.fade
  //           ? i.setCSS(i.getLeft(i.currentSlide))
  //           : i.setFade(),
  //         i.$slider.trigger("setPosition", [i]);
  //     }),
  //     (e.prototype.setProps = function () {
  //       var i = this,
  //         e = document.body.style;
  //       (i.positionProp = !0 === i.options.vertical ? "top" : "left"),
  //         "top" === i.positionProp
  //           ? i.$slider.addClass("slick-vertical")
  //           : i.$slider.removeClass("slick-vertical"),
  //         (void 0 === e.WebkitTransition &&
  //           void 0 === e.MozTransition &&
  //           void 0 === e.msTransition) ||
  //           (!0 === i.options.useCSS && (i.cssTransitions = !0)),
  //         i.options.fade &&
  //           ("number" == typeof i.options.zIndex
  //             ? i.options.zIndex < 3 && (i.options.zIndex = 3)
  //             : (i.options.zIndex = i.defaults.zIndex)),
  //         void 0 !== e.OTransform &&
  //           ((i.animType = "OTransform"),
  //           (i.transformType = "-o-transform"),
  //           (i.transitionType = "OTransition"),
  //           void 0 === e.perspectiveProperty &&
  //             void 0 === e.webkitPerspective &&
  //             (i.animType = !1)),
  //         void 0 !== e.MozTransform &&
  //           ((i.animType = "MozTransform"),
  //           (i.transformType = "-moz-transform"),
  //           (i.transitionType = "MozTransition"),
  //           void 0 === e.perspectiveProperty &&
  //             void 0 === e.MozPerspective &&
  //             (i.animType = !1)),
  //         void 0 !== e.webkitTransform &&
  //           ((i.animType = "webkitTransform"),
  //           (i.transformType = "-webkit-transform"),
  //           (i.transitionType = "webkitTransition"),
  //           void 0 === e.perspectiveProperty &&
  //             void 0 === e.webkitPerspective &&
  //             (i.animType = !1)),
  //         void 0 !== e.msTransform &&
  //           ((i.animType = "msTransform"),
  //           (i.transformType = "-ms-transform"),
  //           (i.transitionType = "msTransition"),
  //           void 0 === e.msTransform && (i.animType = !1)),
  //         void 0 !== e.transform &&
  //           !1 !== i.animType &&
  //           ((i.animType = "transform"),
  //           (i.transformType = "transform"),
  //           (i.transitionType = "transition")),
  //         (i.transformsEnabled =
  //           i.options.useTransform && null !== i.animType && !1 !== i.animType);
  //     }),
  //     (e.prototype.setSlideClasses = function (i) {
  //       var e,
  //         t,
  //         o,
  //         s,
  //         n = this;
  //       if (
  //         ((t = n.$slider
  //           .find(".slick-slide")
  //           .removeClass("slick-active slick-center slick-current")
  //           .attr("aria-hidden", "true")),
  //         n.$slides.eq(i).addClass("slick-current"),
  //         !0 === n.options.centerMode)
  //       ) {
  //         var r = n.options.slidesToShow % 2 == 0 ? 1 : 0;
  //         (e = Math.floor(n.options.slidesToShow / 2)),
  //           !0 === n.options.infinite &&
  //             (i >= e && i <= n.slideCount - 1 - e
  //               ? n.$slides
  //                   .slice(i - e + r, i + e + 1)
  //                   .addClass("slick-active")
  //                   .attr("aria-hidden", "false")
  //               : ((o = n.options.slidesToShow + i),
  //                 t
  //                   .slice(o - e + 1 + r, o + e + 2)
  //                   .addClass("slick-active")
  //                   .attr("aria-hidden", "false")),
  //             0 === i
  //               ? t
  //                   .eq(t.length - 1 - n.options.slidesToShow)
  //                   .addClass("slick-center")
  //               : i === n.slideCount - 1 &&
  //                 t.eq(n.options.slidesToShow).addClass("slick-center")),
  //           n.$slides.eq(i).addClass("slick-center");
  //       } else
  //         i >= 0 && i <= n.slideCount - n.options.slidesToShow
  //           ? n.$slides
  //               .slice(i, i + n.options.slidesToShow)
  //               .addClass("slick-active")
  //               .attr("aria-hidden", "false")
  //           : t.length <= n.options.slidesToShow
  //           ? t.addClass("slick-active").attr("aria-hidden", "false")
  //           : ((s = n.slideCount % n.options.slidesToShow),
  //             (o = !0 === n.options.infinite ? n.options.slidesToShow + i : i),
  //             n.options.slidesToShow == n.options.slidesToScroll &&
  //             n.slideCount - i < n.options.slidesToShow
  //               ? t
  //                   .slice(o - (n.options.slidesToShow - s), o + s)
  //                   .addClass("slick-active")
  //                   .attr("aria-hidden", "false")
  //               : t
  //                   .slice(o, o + n.options.slidesToShow)
  //                   .addClass("slick-active")
  //                   .attr("aria-hidden", "false"));
  //       ("ondemand" !== n.options.lazyLoad &&
  //         "anticipated" !== n.options.lazyLoad) ||
  //         n.lazyLoad();
  //     }),
  //     (e.prototype.setupInfinite = function () {
  //       var e,
  //         t,
  //         o,
  //         s = this;
  //       if (
  //         (!0 === s.options.fade && (s.options.centerMode = !1),
  //         !0 === s.options.infinite &&
  //           !1 === s.options.fade &&
  //           ((t = null), s.slideCount > s.options.slidesToShow))
  //       ) {
  //         for (
  //           o =
  //             !0 === s.options.centerMode
  //               ? s.options.slidesToShow + 1
  //               : s.options.slidesToShow,
  //             e = s.slideCount;
  //           e > s.slideCount - o;
  //           e -= 1
  //         )
  //           (t = e - 1),
  //             i(s.$slides[t])
  //               .clone(!0)
  //               .attr("id", "")
  //               .attr("data-slick-index", t - s.slideCount)
  //               .prependTo(s.$slideTrack)
  //               .addClass("slick-cloned");
  //         for (e = 0; e < o + s.slideCount; e += 1)
  //           (t = e),
  //             i(s.$slides[t])
  //               .clone(!0)
  //               .attr("id", "")
  //               .attr("data-slick-index", t + s.slideCount)
  //               .appendTo(s.$slideTrack)
  //               .addClass("slick-cloned");
  //         s.$slideTrack
  //           .find(".slick-cloned")
  //           .find("[id]")
  //           .each(function () {
  //             i(this).attr("id", "");
  //           });
  //       }
  //     }),
  //     (e.prototype.interrupt = function (i) {
  //       var e = this;
  //       i || e.autoPlay(), (e.interrupted = i);
  //     }),
  //     (e.prototype.selectHandler = function (e) {
  //       var t = this,
  //         o = i(e.target).is(".slick-slide")
  //           ? i(e.target)
  //           : i(e.target).parents(".slick-slide"),
  //         s = parseInt(o.attr("data-slick-index"));
  //       s || (s = 0),
  //         t.slideCount <= t.options.slidesToShow
  //           ? t.slideHandler(s, !1, !0)
  //           : t.slideHandler(s);
  //     }),
  //     (e.prototype.slideHandler = function (i, e, t) {
  //       var o,
  //         s,
  //         n,
  //         r,
  //         l,
  //         d = null,
  //         a = this;
  //       if (
  //         ((e = e || !1),
  //         !(
  //           (!0 === a.animating && !0 === a.options.waitForAnimate) ||
  //           (!0 === a.options.fade && a.currentSlide === i)
  //         ))
  //       )
  //         if (
  //           (!1 === e && a.asNavFor(i),
  //           (o = i),
  //           (d = a.getLeft(o)),
  //           (r = a.getLeft(a.currentSlide)),
  //           (a.currentLeft = null === a.swipeLeft ? r : a.swipeLeft),
  //           !1 === a.options.infinite &&
  //             !1 === a.options.centerMode &&
  //             (i < 0 || i > a.getDotCount() * a.options.slidesToScroll))
  //         )
  //           !1 === a.options.fade &&
  //             ((o = a.currentSlide),
  //             !0 !== t
  //               ? a.animateSlide(r, function () {
  //                   a.postSlide(o);
  //                 })
  //               : a.postSlide(o));
  //         else if (
  //           !1 === a.options.infinite &&
  //           !0 === a.options.centerMode &&
  //           (i < 0 || i > a.slideCount - a.options.slidesToScroll)
  //         )
  //           !1 === a.options.fade &&
  //             ((o = a.currentSlide),
  //             !0 !== t
  //               ? a.animateSlide(r, function () {
  //                   a.postSlide(o);
  //                 })
  //               : a.postSlide(o));
  //         else {
  //           if (
  //             (a.options.autoplay && clearInterval(a.autoPlayTimer),
  //             (s =
  //               o < 0
  //                 ? a.slideCount % a.options.slidesToScroll != 0
  //                   ? a.slideCount - (a.slideCount % a.options.slidesToScroll)
  //                   : a.slideCount + o
  //                 : o >= a.slideCount
  //                 ? a.slideCount % a.options.slidesToScroll != 0
  //                   ? 0
  //                   : o - a.slideCount
  //                 : o),
  //             (a.animating = !0),
  //             a.$slider.trigger("beforeChange", [a, a.currentSlide, s]),
  //             (n = a.currentSlide),
  //             (a.currentSlide = s),
  //             a.setSlideClasses(a.currentSlide),
  //             a.options.asNavFor &&
  //               (l = (l = a.getNavTarget()).slick("getSlick")).slideCount <=
  //                 l.options.slidesToShow &&
  //               l.setSlideClasses(a.currentSlide),
  //             a.updateDots(),
  //             a.updateArrows(),
  //             !0 === a.options.fade)
  //           )
  //             return (
  //               !0 !== t
  //                 ? (a.fadeSlideOut(n),
  //                   a.fadeSlide(s, function () {
  //                     a.postSlide(s);
  //                   }))
  //                 : a.postSlide(s),
  //               void a.animateHeight()
  //             );
  //           !0 !== t
  //             ? a.animateSlide(d, function () {
  //                 a.postSlide(s);
  //               })
  //             : a.postSlide(s);
  //         }
  //     }),
  //     (e.prototype.startLoad = function () {
  //       var i = this;
  //       !0 === i.options.arrows &&
  //         i.slideCount > i.options.slidesToShow &&
  //         (i.$prevArrow.hide(), i.$nextArrow.hide()),
  //         !0 === i.options.dots &&
  //           i.slideCount > i.options.slidesToShow &&
  //           i.$dots.hide(),
  //         i.$slider.addClass("slick-loading");
  //     }),
  //     (e.prototype.swipeDirection = function () {
  //       var i,
  //         e,
  //         t,
  //         o,
  //         s = this;
  //       return (
  //         (i = s.touchObject.startX - s.touchObject.curX),
  //         (e = s.touchObject.startY - s.touchObject.curY),
  //         (t = Math.atan2(e, i)),
  //         (o = Math.round((180 * t) / Math.PI)) < 0 && (o = 360 - Math.abs(o)),
  //         o <= 45 && o >= 0
  //           ? !1 === s.options.rtl
  //             ? "left"
  //             : "right"
  //           : o <= 360 && o >= 315
  //           ? !1 === s.options.rtl
  //             ? "left"
  //             : "right"
  //           : o >= 135 && o <= 225
  //           ? !1 === s.options.rtl
  //             ? "right"
  //             : "left"
  //           : !0 === s.options.verticalSwiping
  //           ? o >= 35 && o <= 135
  //             ? "down"
  //             : "up"
  //           : "vertical"
  //       );
  //     }),
  //     (e.prototype.swipeEnd = function (i) {
  //       var e,
  //         t,
  //         o = this;
  //       if (((o.dragging = !1), (o.swiping = !1), o.scrolling))
  //         return (o.scrolling = !1), !1;
  //       if (
  //         ((o.interrupted = !1),
  //         (o.shouldClick = !(o.touchObject.swipeLength > 10)),
  //         void 0 === o.touchObject.curX)
  //       )
  //         return !1;
  //       if (
  //         (!0 === o.touchObject.edgeHit &&
  //           o.$slider.trigger("edge", [o, o.swipeDirection()]),
  //         o.touchObject.swipeLength >= o.touchObject.minSwipe)
  //       ) {
  //         switch ((t = o.swipeDirection())) {
  //           case "left":
  //           case "down":
  //             (e = o.options.swipeToSlide
  //               ? o.checkNavigable(o.currentSlide + o.getSlideCount())
  //               : o.currentSlide + o.getSlideCount()),
  //               (o.currentDirection = 0);
  //             break;
  //           case "right":
  //           case "up":
  //             (e = o.options.swipeToSlide
  //               ? o.checkNavigable(o.currentSlide - o.getSlideCount())
  //               : o.currentSlide - o.getSlideCount()),
  //               (o.currentDirection = 1);
  //         }
  //         "vertical" != t &&
  //           (o.slideHandler(e),
  //           (o.touchObject = {}),
  //           o.$slider.trigger("swipe", [o, t]));
  //       } else
  //         o.touchObject.startX !== o.touchObject.curX &&
  //           (o.slideHandler(o.currentSlide), (o.touchObject = {}));
  //     }),
  //     (e.prototype.swipeHandler = function (i) {
  //       var e = this;
  //       if (
  //         !(
  //           !1 === e.options.swipe ||
  //           ("ontouchend" in document && !1 === e.options.swipe) ||
  //           (!1 === e.options.draggable && -1 !== i.type.indexOf("mouse"))
  //         )
  //       )
  //         switch (
  //           ((e.touchObject.fingerCount =
  //             i.originalEvent && void 0 !== i.originalEvent.touches
  //               ? i.originalEvent.touches.length
  //               : 1),
  //           (e.touchObject.minSwipe = e.listWidth / e.options.touchThreshold),
  //           !0 === e.options.verticalSwiping &&
  //             (e.touchObject.minSwipe = e.listHeight / e.options.touchThreshold),
  //           i.data.action)
  //         ) {
  //           case "start":
  //             e.swipeStart(i);
  //             break;
  //           case "move":
  //             e.swipeMove(i);
  //             break;
  //           case "end":
  //             e.swipeEnd(i);
  //         }
  //     }),
  //     (e.prototype.swipeMove = function (i) {
  //       var e,
  //         t,
  //         o,
  //         s,
  //         n,
  //         r,
  //         l = this;
  //       return (
  //         (n = void 0 !== i.originalEvent ? i.originalEvent.touches : null),
  //         !(!l.dragging || l.scrolling || (n && 1 !== n.length)) &&
  //           ((e = l.getLeft(l.currentSlide)),
  //           (l.touchObject.curX = void 0 !== n ? n[0].pageX : i.clientX),
  //           (l.touchObject.curY = void 0 !== n ? n[0].pageY : i.clientY),
  //           (l.touchObject.swipeLength = Math.round(
  //             Math.sqrt(Math.pow(l.touchObject.curX - l.touchObject.startX, 2))
  //           )),
  //           (r = Math.round(
  //             Math.sqrt(Math.pow(l.touchObject.curY - l.touchObject.startY, 2))
  //           )),
  //           !l.options.verticalSwiping && !l.swiping && r > 4
  //             ? ((l.scrolling = !0), !1)
  //             : (!0 === l.options.verticalSwiping &&
  //                 (l.touchObject.swipeLength = r),
  //               (t = l.swipeDirection()),
  //               void 0 !== i.originalEvent &&
  //                 l.touchObject.swipeLength > 4 &&
  //                 ((l.swiping = !0), i.preventDefault()),
  //               (s =
  //                 (!1 === l.options.rtl ? 1 : -1) *
  //                 (l.touchObject.curX > l.touchObject.startX ? 1 : -1)),
  //               !0 === l.options.verticalSwiping &&
  //                 (s = l.touchObject.curY > l.touchObject.startY ? 1 : -1),
  //               (o = l.touchObject.swipeLength),
  //               (l.touchObject.edgeHit = !1),
  //               !1 === l.options.infinite &&
  //                 ((0 === l.currentSlide && "right" === t) ||
  //                   (l.currentSlide >= l.getDotCount() && "left" === t)) &&
  //                 ((o = l.touchObject.swipeLength * l.options.edgeFriction),
  //                 (l.touchObject.edgeHit = !0)),
  //               !1 === l.options.vertical
  //                 ? (l.swipeLeft = e + o * s)
  //                 : (l.swipeLeft = e + o * (l.$list.height() / l.listWidth) * s),
  //               !0 === l.options.verticalSwiping && (l.swipeLeft = e + o * s),
  //               !0 !== l.options.fade &&
  //                 !1 !== l.options.touchMove &&
  //                 (!0 === l.animating
  //                   ? ((l.swipeLeft = null), !1)
  //                   : void l.setCSS(l.swipeLeft))))
  //       );
  //     }),
  //     (e.prototype.swipeStart = function (i) {
  //       var e,
  //         t = this;
  //       if (
  //         ((t.interrupted = !0),
  //         1 !== t.touchObject.fingerCount ||
  //           t.slideCount <= t.options.slidesToShow)
  //       )
  //         return (t.touchObject = {}), !1;
  //       void 0 !== i.originalEvent &&
  //         void 0 !== i.originalEvent.touches &&
  //         (e = i.originalEvent.touches[0]),
  //         (t.touchObject.startX = t.touchObject.curX =
  //           void 0 !== e ? e.pageX : i.clientX),
  //         (t.touchObject.startY = t.touchObject.curY =
  //           void 0 !== e ? e.pageY : i.clientY),
  //         (t.dragging = !0);
  //     }),
  //     (e.prototype.unfilterSlides = e.prototype.slickUnfilter =
  //       function () {
  //         var i = this;
  //         null !== i.$slidesCache &&
  //           (i.unload(),
  //           i.$slideTrack.children(this.options.slide).detach(),
  //           i.$slidesCache.appendTo(i.$slideTrack),
  //           i.reinit());
  //       }),
  //     (e.prototype.unload = function () {
  //       var e = this;
  //       i(".slick-cloned", e.$slider).remove(),
  //         e.$dots && e.$dots.remove(),
  //         e.$prevArrow &&
  //           e.htmlExpr.test(e.options.prevArrow) &&
  //           e.$prevArrow.remove(),
  //         e.$nextArrow &&
  //           e.htmlExpr.test(e.options.nextArrow) &&
  //           e.$nextArrow.remove(),
  //         e.$slides
  //           .removeClass("slick-slide slick-active slick-visible slick-current")
  //           .attr("aria-hidden", "true")
  //           .css("width", "");
  //     }),
  //     (e.prototype.unslick = function (i) {
  //       var e = this;
  //       e.$slider.trigger("unslick", [e, i]), e.destroy();
  //     }),
  //     (e.prototype.updateArrows = function () {
  //       var i = this;
  //       Math.floor(i.options.slidesToShow / 2),
  //         !0 === i.options.arrows &&
  //           i.slideCount > i.options.slidesToShow &&
  //           !i.options.infinite &&
  //           (i.$prevArrow
  //             .removeClass("slick-disabled")
  //             .attr("aria-disabled", "false"),
  //           i.$nextArrow
  //             .removeClass("slick-disabled")
  //             .attr("aria-disabled", "false"),
  //           0 === i.currentSlide
  //             ? (i.$prevArrow
  //                 .addClass("slick-disabled")
  //                 .attr("aria-disabled", "true"),
  //               i.$nextArrow
  //                 .removeClass("slick-disabled")
  //                 .attr("aria-disabled", "false"))
  //             : i.currentSlide >= i.slideCount - i.options.slidesToShow &&
  //               !1 === i.options.centerMode
  //             ? (i.$nextArrow
  //                 .addClass("slick-disabled")
  //                 .attr("aria-disabled", "true"),
  //               i.$prevArrow
  //                 .removeClass("slick-disabled")
  //                 .attr("aria-disabled", "false"))
  //             : i.currentSlide >= i.slideCount - 1 &&
  //               !0 === i.options.centerMode &&
  //               (i.$nextArrow
  //                 .addClass("slick-disabled")
  //                 .attr("aria-disabled", "true"),
  //               i.$prevArrow
  //                 .removeClass("slick-disabled")
  //                 .attr("aria-disabled", "false")));
  //     }),
  //     (e.prototype.updateDots = function () {
  //       var i = this;
  //       null !== i.$dots &&
  //         (i.$dots.find("li").removeClass("slick-active").end(),
  //         i.$dots
  //           .find("li")
  //           .eq(Math.floor(i.currentSlide / i.options.slidesToScroll))
  //           .addClass("slick-active"));
  //     }),
  //     (e.prototype.visibility = function () {
  //       var i = this;
  //       i.options.autoplay &&
  //         (document[i.hidden] ? (i.interrupted = !0) : (i.interrupted = !1));
  //     }),
  //     (i.fn.slick = function () {
  //       var i,
  //         t,
  //         o = this,
  //         s = arguments[0],
  //         n = Array.prototype.slice.call(arguments, 1),
  //         r = o.length;
  //       for (i = 0; i < r; i++)
  //         if (
  //           ("object" == typeof s || void 0 === s
  //             ? (o[i].slick = new e(o[i], s))
  //             : (t = o[i].slick[s].apply(o[i].slick, n)),
  //           void 0 !== t)
  //         )
  //           return t;
  //       return o;
  //     });
  // });
  



  // var _createClass = (function () {
  //   function defineProperties(target, props) {
  //     for (var i = 0; i < props.length; i++) {
  //       var descriptor = props[i];
  //       descriptor.enumerable = descriptor.enumerable || false;
  //       descriptor.configurable = true;
  //       if ("value" in descriptor) descriptor.writable = true;
  //       Object.defineProperty(target, descriptor.key, descriptor);
  //     }
  //   }
  //   return function (Constructor, protoProps, staticProps) {
  //     if (protoProps) defineProperties(Constructor.prototype, protoProps);
  //     if (staticProps) defineProperties(Constructor, staticProps);
  //     return Constructor;
  //   };
  // })();
  // function _classCallCheck(instance, Constructor) {
  //   if (!(instance instanceof Constructor)) {
  //     throw new TypeError("Cannot call a class as a function");
  //   }
  // }
  // (function ($) {
  //   var PLUGIN_NAME = "slideMenu";
  //   var DEFAULT_OPTIONS = {
  //     position: "right",
  //     showBackLink: true,
  //     keycodeOpen: null,
  //     keycodeClose: 27,
  //     submenuLinkBefore: "",
  //     submenuLinkAfter: "",
  //     backLinkBefore: "",
  //     backLinkAfter: "",
  //   };
  //   var SlideMenu = (function () {
  //     function SlideMenu(options) {
  //       _classCallCheck(this, SlideMenu);
  //       this.options = options;
  //       this._menu = options.elem;
  //       this._menu.find("ul:first").wrap('<div class="slider">');
  //       this._anchors = this._menu.find("a");
  //       this._slider = this._menu.find(".slider:first");
  //       this._level = 0;
  //       this._isOpen = false;
  //       this._isAnimating = false;
  //       this._hasMenu = this._anchors.length > 0;
  //       this._lastAction = null;
  //       this._setupEventHandlers();
  //       this._setupMenu();
  //       if (this._hasMenu) this._setupSubmenus();
  //     }
  //     _createClass(SlideMenu, [
  //       {
  //         key: "toggle",
  //         value: function toggle() {
  //           var open =
  //             arguments.length > 0 && arguments[0] !== undefined
  //               ? arguments[0]
  //               : null;
  //           var animate =
  //             arguments.length > 1 && arguments[1] !== undefined
  //               ? arguments[1]
  //               : true;
  //           var offset = void 0;
  //           if (open === null) {
  //             if (this._isOpen) {
  //               this.close();
  //             } else {
  //               this.open();
  //             }
  //             return;
  //           } else if (open) {
  //             offset = 0;
  //             this._isOpen = true;
  //           } else {
  //             offset = this.options.position === "left" ? "-100%" : "100%";
  //             this._isOpen = false;
  //           }
  //           this._triggerEvent();
  //           if (animate) this._triggerAnimation(this._menu, offset);
  //           else {
  //             this._pauseAnimations(
  //               this._triggerAnimation.bind(this, this._menu, offset)
  //             );
  //             this._isAnimating = false;
  //           }
  //         },
  //       },
  //       {
  //         key: "open",
  //         value: function open() {
  //           var animate =
  //             arguments.length > 0 && arguments[0] !== undefined
  //               ? arguments[0]
  //               : true;
  //           this._lastAction = "open";
  //           this.toggle(true, animate);
  //         },
  //       },
  //       {
  //         key: "close",
  //         value: function close() {
  //           var animate =
  //             arguments.length > 0 && arguments[0] !== undefined
  //               ? arguments[0]
  //               : true;
  //           this._lastAction = "close";
  //           this.toggle(false, animate);
  //         },
  //       },
  //       {
  //         key: "back",
  //         value: function back() {
  //           this._lastAction = "back";
  //           this._navigate(null, -1);
  //         },
  //       },
  //       {
  //         key: "navigateTo",
  //         value: function navigateTo(target) {
  //           var _this = this;
  //           target = this._menu.find($(target)).first();
  //           if (!target.length) return false;
  //           var parents = target.parents("ul");
  //           var level = parents.length - 1;
  //           if (level === 0) return false;
  //           this._pauseAnimations(function () {
  //             _this._level = level;
  //             parents.show().first().addClass("active");
  //             _this._triggerAnimation(_this._slider, -_this._level * 100);
  //           });
  //         },
  //       },
  //       {
  //         key: "_setupEventHandlers",
  //         value: function _setupEventHandlers() {
  //           var _this2 = this;
  //           if (this._hasMenu) {
  //             this._anchors.click(function (event) {
  //               var anchor = $(event.target).is("a")
  //                 ? $(event.target)
  //                 : $(event.target).parents("a:first");
  //               _this2._navigate(anchor);
  //             });
  //           }
  //           $(this._menu.add(this._slider)).on(
  //             "transitionend msTransitionEnd",
  //             function () {
  //               _this2._isAnimating = false;
  //               _this2._triggerEvent(true);
  //             }
  //           );
  //           $(document).keydown(function (e) {
  //             switch (e.which) {
  //               case _this2.options.keycodeClose:
  //                 _this2.close();
  //                 break;
  //               case _this2.options.keycodeOpen:
  //                 _this2.open();
  //                 break;
  //               default:
  //                 return;
  //             }
  //             e.preventDefault();
  //           });
  //           this._menu.on("sm.back-after", function () {
  //             var lastActiveUl = "ul " + ".active ".repeat(_this2._level + 1);
  //             _this2._menu.find(lastActiveUl).removeClass("active").hide();
  //           });
  //         },
  //       },
  //       {
  //         key: "_triggerEvent",
  //         value: function _triggerEvent() {
  //           var afterAnimation =
  //             arguments.length > 0 && arguments[0] !== undefined
  //               ? arguments[0]
  //               : false;
  //           var eventName = "sm." + this._lastAction;
  //           if (afterAnimation) eventName += "-after";
  //           this._menu.trigger(eventName);
  //         },
  //       },
  //       {
  //         key: "_navigate",
  //         value: function _navigate(anchor) {
  //           var dir =
  //             arguments.length > 1 && arguments[1] !== undefined
  //               ? arguments[1]
  //               : 1;
  //           if (this._isAnimating) {
  //             return;
  //           }
  //           var offset = (this._level + dir) * -100;
  //           if (dir > 0) {
  //             if (!anchor.next("ul").length) return;
  //             anchor.next("ul").addClass("active").show();
  //           } else if (this._level === 0) {
  //             return;
  //           }
  //           this._lastAction = dir > 0 ? "forward" : "back";
  //           this._level = this._level + dir;
  //           this._triggerAnimation(this._slider, offset);
  //         },
  //       },
  //       {
  //         key: "_triggerAnimation",
  //         value: function _triggerAnimation(elem, offset) {
  //           this._triggerEvent();
  //           if (!(String(offset).indexOf("%") !== -1)) offset += "%";
  //           elem.css("transform", "translateX(" + offset + ")");
  //           this._isAnimating = true;
  //         },
  //       },
  //       {
  //         key: "_setupMenu",
  //         value: function _setupMenu() {
  //           var _this3 = this;
  //           this._pauseAnimations(function () {
  //             switch (_this3.options.position) {
  //               case "left":
  //                 _this3._menu.css({
  //                   left: 0,
  //                   right: "auto",
  //                   transform: "translateX(-100%)",
  //                 });
  //                 break;
  //               default:
  //                 _this3._menu.css({ left: "auto", right: 0 });
  //                 break;
  //             }
  //             _this3._menu.show();
  //           });
  //         },
  //       },
  //       {
  //         key: "_pauseAnimations",
  //         value: function _pauseAnimations(work) {
  //           this._menu.addClass("no-transition");
  //           work();
  //           this._menu[0].offsetHeight;
  //           this._menu.removeClass("no-transition");
  //         },
  //       },
  //       {
  //         key: "_setupSubmenus",
  //         value: function _setupSubmenus() {
  //           var _this4 = this;
  //           this._anchors.each(function (i, anchor) {
  //             anchor = $(anchor);
  //             if (anchor.next("ul").length) {
  //               anchor.click(function (ev) {
  //                 ev.preventDefault();
  //               });
  //               var anchorTitle = anchor.text();
  //               anchor.html(
  //                 _this4.options.submenuLinkBefore +
  //                   anchorTitle +
  //                   _this4.options.submenuLinkAfter
  //               );
  //               if (_this4.options.showBackLink) {
  //                 var backLink = $(
  //                   '<a href class="slide-menu-control" data-action="back">' +
  //                     anchorTitle +
  //                     "</a>"
  //                 );
  //                 backLink.html(
  //                   _this4.options.backLinkBefore +
  //                     backLink.text() +
  //                     _this4.options.backLinkAfter
  //                 );
  //                 anchor.next("ul").prepend($("<li>").append(backLink));
  //               }
  //             }
  //           });
  //         },
  //       },
  //     ]);
  //     return SlideMenu;
  //   })();
  //   $("body").on("click", ".slide-menu-control", function (e) {
  //     var menu = void 0;
  //     var target = $(this).data("target");
  //     if (!target || target === "this") {
  //       menu = $(this).parents(".slide-menu:first");
  //     } else {
  //       menu = $("#" + target);
  //     }
  //     if (!menu.length) return;
  //     var instance = menu.data(PLUGIN_NAME);
  //     var action = $(this).data("action");
  //     if (instance && typeof instance[action] === "function") {
  //       instance[action]();
  //     }
  //     return false;
  //   });
  //   $.fn[PLUGIN_NAME] = function (options) {
  //     if (!$(this).length) {
  //       console.warn(
  //         "Slide Menu: Unable to find menu DOM element. Maybe a typo?"
  //       );
  //       return;
  //     }
  //     options = $.extend({}, DEFAULT_OPTIONS, options);
  //     options.elem = $(this);
  //     var instance = new SlideMenu(options);
  //     $(this).data(PLUGIN_NAME, instance);
  //     return instance;
  //   };
  // })(jQuery);
  // /**kvch/performance/header_side_menu_responsive.js**/
  // $(document).ready(function () {
  //   (function ($) {
  //     var $window = $(window),
  //       $html = $("header");
  //     function resize() {
  //       if ($window.width() < 767) {
  //         return $html.addClass("mobile_screen");
  //       }
  //       $html.removeClass("mobile_screen");
  //     }
  //     $window.resize(resize).trigger("resize");
  //   })(jQuery);
  //   $(window).scroll(function () {
  //     if ($(this).scrollTop() > 60) {
  //       $("header").addClass("mobile_scroll");
  //     } else {
  //       $("header").removeClass("mobile_scroll");
  //     }
  //   });
  //   $(".new_head_ham").click(function () {
  //     $(".slide_menu_back").addClass("open");
  //   });
  //   $(".controls.slide-menu-control").click(function () {
  //     $(".slide_menu_back").removeClass("open");
  //     $("a.slide-menu-control").trigger("click");
  //   });
  //   var menuLeft = $("#test-menu-left").slideMenu({
  //     position: "left",
  //     submenuLinkAfter: '<i class="fa fa-angle-right"></i>',
  //     backLinkBefore: '<i class="fa fa-angle-left"></i>',
  //   });
  //   $(".login_new, .signup_new ").on("click", function () {
  //     $("#test-menu-left").css("transform", "translateX(-100%)");
  //     $(".slide_menu_back").removeClass("open");
  //   });
  // });

  
  // kvch/
  $(document).on("click", function (e) {
    if ($(e.target).closest(".search_result_web").length === 0) {
      $(".search_result_web").addClass("hide");
    }
  });
  $(document).ready(function () {
    $("#discoverysearchtab li:eq(0) a").addClass("active");
  });
  $(".open_search_overlay").click(function () {
    $(".open_search_overlay").blur();
    loadDiscoverySearchOverlay();
    return true;
  });
  $("#inputKeyword").keyup(function () {
    if ($(this).val()) {
      $(".search_result_web").removeClass("hide");
    } else {
      $(".search_result_web").addClass("hide");
    }
  });
  $(".closeimmersivesearch, #search_back_btn").click(function () {
    $("#inputKeyword").val("");
    $(".discoversearch").removeClass("show").addClass("hide");
    $("body").css("overflow", "");
  });
  $(".open_search_overlay").on("focus", function () {
    if (typeof page_name != "undefined" && page_name == "home_optimized") {
      logGAEvent("Search_overlay", "Search_overalay_opened");
    }
    $(this).blur();
    loadDiscoverySearchOverlay();
    return true;
  });
  function loadDiscoverySearchOverlay() {
    $(".discoversearch").removeClass("hide").addClass("show");
    $("#inputKeyword").focus();
    $("body").css("overflow", "hidden");
    // loadDiscoveryCat();
  }

  