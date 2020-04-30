/**
 * @popperjs/core v2.4.0 - MIT License
 */

'use strict';
!function(e, t) {
  'object' == typeof exports && 'undefined' != typeof module
      ? t(exports)
      : 'function' == typeof define && define.amd ? define(['exports'], t) : t(
      (e = e || self).Popper = {});
}(this, (function(e) {
  function t(e) {
    return {
      width: (e = e.getBoundingClientRect()).width,
      height: e.height,
      top: e.top,
      right: e.right,
      bottom: e.bottom,
      left: e.left,
      x: e.left,
      y: e.top,
    };
  }

  function n(e) {
    return '[object Window]' !== e.toString()
        ? (e = e.ownerDocument) ? e.defaultView : window
        : e;
  }

  function r(e) {
    return {
      scrollLeft: (e = n(e)).pageXOffset,
      scrollTop: e.pageYOffset,
    };
  }

  function o(e) {return e instanceof n(e).Element || e instanceof Element;}

  function i(e) {
    return e instanceof n(e).HTMLElement || e instanceof HTMLElement;
  }

  function a(e) {return e ? (e.nodeName || '').toLowerCase() : null;}

  function s(e) {return (o(e) ? e.ownerDocument : e.document).documentElement;}

  function f(e) {return t(s(e)).left + r(e).scrollLeft;}

  function p(e) {return n(e).getComputedStyle(e);}

  function c(e) {
    return e = p(e), /auto|scroll|overlay|hidden/.test(
        e.overflow + e.overflowY + e.overflowX);
  }

  function u(e, o, p) {
    void 0 === p && (p = !1);
    var u = s(o);
    e = t(e);
    var d = {scrollLeft: 0, scrollTop: 0}, l = {x: 0, y: 0};
    return p || (('body' !== a(o) || c(u)) && (d = o !== n(o) && i(o)
        ? {scrollLeft: o.scrollLeft, scrollTop: o.scrollTop}
        : r(o)), i(o)
        ? ((l = t(o)).x += o.clientLeft, l.y += o.clientTop)
        : u && (l.x = f(u))), {
      x: e.left + d.scrollLeft - l.x,
      y: e.top + d.scrollTop - l.y,
      width: e.width,
      height: e.height,
    };
  }

  function d(e) {
    return {
      x: e.offsetLeft,
      y: e.offsetTop,
      width: e.offsetWidth,
      height: e.offsetHeight,
    };
  }

  function l(e) {
    return 'html' === a(e) ? e : e.assignedSlot || e.parentNode || e.host ||
        s(e);
  }

  function m(e, t) {
    void 0 === t && (t = []);
    var r = function e(t) {
      return 0 <= ['html', 'body', '#document'].indexOf(a(t))
          ? t.ownerDocument.body
          : i(t) && c(t) ? t : e(l(t));
    }(e);
    e = 'body' === a(r);
    var o = n(r);
    return r = e
        ? [o].concat(o.visualViewport || [], c(r) ? r : [])
        : r, t = t.concat(r), e ? t : t.concat(m(l(r)));
  }

  function h(e) {
    return i(e) && 'fixed' !== p(e).position
        ? e.offsetParent
        : null;
  }

  function v(e) {
    var t = n(e);
    for (e = h(e); e && 0 <= ["table", "td", "th"].indexOf(a(e));) e = h(e);
    return e && 'body' === a(e) && 'static' === p(e).position ? t : e || t;
  }

  function g(e) {
    var t = new Map, n = new Set, r = [];
    return e.forEach((function(e) {t.set(e.name, e);})), e.forEach((function(e) {
      n.has(e.name) || function e(o) {
        n.add(o.name), [].concat(o.requires || [], o.requiresIfExists || []).
            forEach((function(r) {n.has(r) || (r = t.get(r)) && e(r);})), r.push(
            o);
      }(e);
    })), r;
  }

  function b(e) {
    var t;
    return function() {
      return t || (t = new Promise((function(n) {
        Promise.resolve().
            then((function() {t = void 0, n(e());}));
      }))), t;
    };
  }

  function y(e) {return e.split('-')[0];}

  function x() {
    for (var e = arguments.length, t = Array(e), n = 0; n <
    e; n++) t[n] = arguments[n];
    return !t.some((function(e) {
      return !(e && 'function' == typeof e.getBoundingClientRect);
    }));
  }

  function w(e) {
    void 0 === e && (e = {});
    var t = e.defaultModifiers, n = void 0 === t ? [] : t,
        r = void 0 === (e = e.defaultOptions) ? N : e;
    return function(e, t, i) {
      function a() {f.forEach((function(e) {return e();})), f = [];}

      void 0 === i && (i = r);
      var s = {
        placement: 'bottom',
        orderedModifiers: [],
        options: Object.assign({}, N, {}, r),
        modifiersData: {},
        elements: {reference: e, popper: t},
        attributes: {},
        styles: {},
      }, f = [], p = !1, c = {
        state: s,
        setOptions: function(i) {
          return a(), s.options = Object.assign({}, r, {}, s.options, {},
              i), s.scrollParents = {
            reference: o(e) ? m(e) : e.contextElement
                ? m(e.contextElement)
                : [], popper: m(t),
          }, i = function(e) {
            var t = g(e);
            return F.reduce((function(e, n) {
              return e.concat(t.filter((function(e) {return e.phase === n;})));
            }), []);
          }(function(e) {
            var t = e.reduce((function(e, t) {
              var n = e[t.name];
              return e[t.name] = n ? Object.assign({}, n, {}, t, {
                options: Object.assign({}, n.options, {}, t.options),
                data: Object.assign({}, n.data, {}, t.data),
              }) : t, e;
            }), {});
            return Object.keys(t).map((function(e) {return t[e];}));
          }([].concat(n, s.options.modifiers))), s.orderedModifiers = i.filter(
              (function(e) {return e.enabled;})), s.orderedModifiers.forEach(
              (function(e) {
                var t = e.name, n = e.options;
                n = void 0 === n ? {} : n, 'function' ==
                typeof (e = e.effect) &&
                (t = e({state: s, name: t, instance: c, options: n}), f.push(
                    t || function() {}));
              })), c.update();
        },
        forceUpdate: function() {
          if (!p) {
            var e = s.elements, t = e.reference;
            if (x(t, e = e.popper)) for (s.rects = {
              reference: u(t, v(e), 'fixed' === s.options.strategy),
              popper: d(e),
            }, s.reset = !1, s.placement = s.options.placement, s.orderedModifiers.forEach(
                (function(e) {
                  return s.modifiersData[e.name] = Object.assign({}, e.data);
                })), t = 0; t < s.orderedModifiers.length; t++) if (!0 ===
                s.reset) s.reset = !1, t = -1; else {
              var n = s.orderedModifiers[t];
              e = n.fn;
              var r = n.options;
              r = void 0 === r ? {} : r, n = n.name, 'function' == typeof e &&
              (s = e({state: s, options: r, name: n, instance: c}) || s);
            }
          }
        },
        update: b((function() {
          return new Promise((function(e) {c.forceUpdate(), e(s);}));
        })),
        destroy: function() {a(), p = !0;},
      };
      return x(e, t)
          ? (c.setOptions(i).
              then((function(e) {
                !p && i.onFirstUpdate && i.onFirstUpdate(e);
              })), c)
          : c;
    };
  }

  function O(e) {return 0 <= ['top', 'bottom'].indexOf(e) ? 'x' : 'y';}

  function M(e) {
    var t = e.reference, n = e.element, r = (e = e.placement) ? y(e) : null;
    e = e ? e.split('-')[1] : null;
    var o = t.x + t.width / 2 - n.width / 2,
        i = t.y + t.height / 2 - n.height / 2;
    switch (r) {
      case'top':
        o = {x: o, y: t.y - n.height};
        break;
      case'bottom':
        o = {x: o, y: t.y + t.height};
        break;
      case'right':
        o = {x: t.x + t.width, y: i};
        break;
      case'left':
        o = {x: t.x - n.width, y: i};
        break;
      default:
        o = {x: t.x, y: t.y};
    }
    if (null != (r = r ? O(r) : null)) switch (i = 'y' === r
        ? 'height'
        : 'width', e) {
      case'start':
        o[r] = Math.floor(o[r]) - Math.floor(t[i] / 2 - n[i] / 2);
        break;
      case'end':
        o[r] = Math.floor(o[r]) + Math.ceil(t[i] / 2 - n[i] / 2);
    }
    return o;
  }

  function j(e) {
    var t, r = e.popper, o = e.popperRect, i = e.placement, a = e.offsets,
        f = e.position, p = e.gpuAcceleration, c = e.adaptive,
        u = window.devicePixelRatio || 1;
    e = Math.round(a.x * u) / u || 0, u = Math.round(a.y * u) / u || 0;
    var d = a.hasOwnProperty('x');
    a = a.hasOwnProperty('y');
    var l, m = 'left', h = 'top', g = window;
    if (c) {
      var b = v(r);
      b === n(r) && (b = s(r)), 'top' === i &&
      (h = 'bottom', u -= b.clientHeight - o.height, u *= p
          ? 1
          : -1), 'left' === i &&
      (m = 'right', e -= b.clientWidth - o.width, e *= p ? 1 : -1);
    }
    return r = Object.assign({position: f}, c && I), p ? Object.assign({}, r,
        ((l = {})[h] = a ? '0' : '', l[m] = d ? '0' : '', l.transform = 2 >
        (g.devicePixelRatio || 1)
            ? 'translate(' + e + 'px, ' + u + 'px)'
            : 'translate3d(' + e + 'px, ' + u + 'px, 0)', l)) : Object.assign(
        {}, r, ((t = {})[h] = a ? u + 'px' : '', t[m] = d
            ? e + 'px'
            : '', t.transform = '', t));
  }

  function E(e) {
    return e.replace(/left|right|bottom|top/g, (function(e) {return _[e];}));
  }

  function D(e) {return e.replace(/start|end/g, (function(e) {return U[e];}));}

  function P(e, t) {
    var n = !(!t.getRootNode || !t.getRootNode().host);
    if (e.contains(t)) return !0;
    if (n) do {
      if (t && e.isSameNode(t)) return !0;
      t = t.parentNode || t.host;
    } while (t);
    return !1;
  }

  function L(e) {
    return Object.assign({}, e,
        {left: e.x, top: e.y, right: e.x + e.width, bottom: e.y + e.height});
  }

  function k(e, o) {
    if ('viewport' === o) {
      var a = n(e);
      e = a.visualViewport, o = a.innerWidth, a = a.innerHeight, e &&
      /iPhone|iPod|iPad/.test(navigator.platform) &&
      (o = e.width, a = e.height), e = L({width: o, height: a, x: 0, y: 0});
    } else i(o) ? e = t(o) : (e = n(a = s(e)), o = r(a), (a = u(s(a),
        e)).height = Math.max(a.height, e.innerHeight), a.width = Math.max(
        a.width, e.innerWidth), a.x = -o.scrollLeft, a.y = -o.scrollTop, e = L(
        a));
    return e;
  }

  function B(e, t, r) {
    return t = 'clippingParents' === t
        ? function(e) {
          var t = m(e),
              n = 0 <= ['absolute', 'fixed'].indexOf(p(e).position) && i(e)
                  ? v(e)
                  : e;
          return o(n) ? t.filter((function(e) {return o(e) && P(e, n);})) : [];
        }(e)
        : [].concat(t), (r = (r = [].concat(t, [r])).reduce((function(t, r) {
      var o = k(e, r), c = n(r = i(r) ? r : s(e)), u = i(r) ? p(r) : {};
      parseFloat(u.borderTopWidth);
      var d = parseFloat(u.borderRightWidth) || 0,
          l = parseFloat(u.borderBottomWidth) || 0,
          m = parseFloat(u.borderLeftWidth) || 0;
      u = 'html' === a(r);
      var h = f(r), v = r.clientWidth + d, g = r.clientHeight + l;
      return u && 50 < c.innerHeight - r.clientHeight &&
      (g = c.innerHeight - l), l = u ? 0 : r.clientTop, d = r.clientLeft > m
          ? d
          : u ? c.innerWidth - v - h : r.offsetWidth - v, c = u
          ? c.innerHeight - g
          : r.offsetHeight - g, r = u ? h : r.clientLeft, t.top = Math.max(
          o.top + l, t.top), t.right = Math.min(o.right - d,
          t.right), t.bottom = Math.min(o.bottom - c,
          t.bottom), t.left = Math.max(o.left + r, t.left), t;
    }), k(e, r[0]))).width = r.right - r.left, r.height = r.bottom -
        r.top, r.x = r.left, r.y = r.top, r;
  }

  function W(e) {
    return Object.assign({}, {top: 0, right: 0, bottom: 0, left: 0}, {}, e);
  }

  function A(e, t) {return t.reduce((function(t, n) {return t[n] = e, t;}), {});}

  function H(e, n) {
    void 0 === n && (n = {});
    var r = n;
    n = void 0 === (n = r.placement) ? e.placement : n;
    var i = r.boundary, a = void 0 === i ? 'clippingParents' : i,
        f = void 0 === (i = r.rootBoundary) ? 'viewport' : i;
    i = void 0 === (i = r.elementContext) ? 'popper' : i;
    var p = r.altBoundary, c = void 0 !== p && p;
    r = W('number' != typeof (r = void 0 === (r = r.padding) ? 0 : r) ? r : A(r,
        q));
    var u = e.elements.reference;
    p = e.rects.popper, a = B(
        o(c = e.elements[c ? 'popper' === i ? 'reference' : 'popper' : i])
            ? c
            : c.contextElement || s(e.elements.popper), a, f), c = M({
      reference: f = t(u),
      element: p,
      strategy: 'absolute',
      placement: n,
    }), p = L(Object.assign({}, p, {}, c)), f = 'popper' === i ? p : f;
    var d = {
      top: a.top - f.top + r.top,
      bottom: f.bottom - a.bottom + r.bottom,
      left: a.left - f.left + r.left,
      right: f.right - a.right + r.right,
    };
    if (e = e.modifiersData.offset, 'popper' === i && e) {
      var l = e[n];
      Object.keys(d).
          forEach((function(e) {
            var t = 0 <= ['right', 'bottom'].indexOf(e)
                ? 1
                : -1, n = 0 <= ['top', 'bottom'].indexOf(e) ? 'y' : 'x';
            d[e] += l[n] * t;
          }));
    }
    return d;
  }

  function T(e, t, n) {
    return void 0 === n && (n = {x: 0, y: 0}), {
      top: e.top - t.height - n.y,
      right: e.right - t.width + n.x,
      bottom: e.bottom - t.height + n.y,
      left: e.left - t.width - n.x,
    };
  }

  function R(e) {
    return ['top', 'right', 'bottom', 'left'].some(
        (function(t) {return 0 <= e[t];}));
  }

  var q = ['top', 'bottom', 'right', 'left'], S = q.reduce(
      (function(e, t) {return e.concat([t + '-start', t + '-end']);}), []),
      C = [].concat(q, ['auto']).
          reduce(
              (function(e, t) {return e.concat([t, t + '-start', t + '-end']);}),
              []),
      F = 'beforeRead read afterRead beforeMain main afterMain beforeWrite write afterWrite'.split(
          ' '), N = {placement: 'bottom', modifiers: [], strategy: 'absolute'},
      V = {passive: !0},
      I = {top: 'auto', right: 'auto', bottom: 'auto', left: 'auto'},
      _ = {left: 'right', right: 'left', bottom: 'top', top: 'bottom'},
      U = {start: 'end', end: 'start'}, z = [
        {
          name: 'eventListeners',
          enabled: !0,
          phase: 'write',
          fn: function() {},
          effect: function(e) {
            var t = e.state, r = e.instance, o = (e = e.options).scroll,
                i = void 0 === o || o, a = void 0 === (e = e.resize) || e,
                s = n(t.elements.popper),
                f = [].concat(t.scrollParents.reference, t.scrollParents.popper);
            return i && f.forEach(
                (function(e) {e.addEventListener('scroll', r.update, V);})), a &&
            s.addEventListener('resize', r.update, V), function() {
              i && f.forEach((function(e) {
                e.removeEventListener('scroll', r.update, V);
              })), a && s.removeEventListener('resize', r.update, V);
            };
          },
          data: {},
        },
        {
          name: 'popperOffsets',
          enabled: !0,
          phase: 'read',
          fn: function(e) {
            var t = e.state;
            t.modifiersData[e.name] = M({
              reference: t.rects.reference,
              element: t.rects.popper,
              strategy: 'absolute',
              placement: t.placement,
            });
          },
          data: {},
        },
        {
          name: 'computeStyles',
          enabled: !0,
          phase: 'beforeWrite',
          fn: function(e) {
            var t = e.state, n = e.options;
            e = void 0 === (e = n.gpuAcceleration) || e, n = void 0 ===
                (n = n.adaptive) || n, e = {
              placement: y(t.placement),
              popper: t.elements.popper,
              popperRect: t.rects.popper,
              gpuAcceleration: e,
            }, null != t.modifiersData.popperOffsets &&
            (t.styles.popper = Object.assign({}, t.styles.popper, {},
                j(Object.assign({}, e, {
                  offsets: t.modifiersData.popperOffsets,
                  position: t.options.strategy,
                  adaptive: n,
                })))), null != t.modifiersData.arrow &&
            (t.styles.arrow = Object.assign({}, t.styles.arrow, {},
                j(Object.assign({}, e, {
                  offsets: t.modifiersData.arrow,
                  position: 'absolute',
                  adaptive: !1,
                })))), t.attributes.popper = Object.assign({}, t.attributes.popper,
                {'data-popper-placement': t.placement});
          },
          data: {},
        },
        {
          name: 'applyStyles',
          enabled: !0,
          phase: 'write',
          fn: function(e) {
            var t = e.state;
            Object.keys(t.elements).
                forEach((function(e) {
                  var n = t.styles[e] || {}, r = t.attributes[e] || {},
                      o = t.elements[e];
                  i(o) && a(o) && (Object.assign(o.style, n), Object.keys(r).
                      forEach((function(e) {
                        var t = r[e];
                        !1 === t ? o.removeAttribute(e) : o.setAttribute(e,
                            !0 === t ? '' : t);
                      })));
                }));
          },
          effect: function(e) {
            var t = e.state, n = {
              popper: {
                position: t.options.strategy,
                left: '0',
                top: '0',
                margin: '0',
              }, arrow: {position: 'absolute'}, reference: {},
            };
            return Object.assign(t.elements.popper.style,
                n.popper), t.elements.arrow &&
            Object.assign(t.elements.arrow.style, n.arrow), function() {
              Object.keys(t.elements).
                  forEach((function(e) {
                    var r = t.elements[e], o = t.attributes[e] || {};
                    e = Object.keys(
                        t.styles.hasOwnProperty(e) ? t.styles[e] : n[e]).
                        reduce((function(e, t) {return e[t] = '', e;}), {}), i(r) &&
                    a(r) && (Object.assign(r.style, e), Object.keys(o).
                        forEach((function(e) {r.removeAttribute(e);})));
                  }));
            };
          },
          requires: ['computeStyles'],
        },
        {
          name: 'offset',
          enabled: !0,
          phase: 'main',
          requires: ['popperOffsets'],
          fn: function(e) {
            var t = e.state, n = e.name,
                r = void 0 === (e = e.options.offset) ? [0, 0] : e,
                o = (e = C.reduce((function(e, n) {
                  var o = t.rects, i = y(n),
                      a = 0 <= ['left', 'top'].indexOf(i) ? -1 : 1,
                      s = 'function' == typeof r ? r(
                          Object.assign({}, o, {placement: n})) : r;
                  return o = (o = s[0]) || 0, s = ((s = s[1]) || 0) * a, i = 0 <=
                  ['left', 'right'].indexOf(i) ? {x: s, y: o} : {
                    x: o,
                    y: s,
                  }, e[n] = i, e;
                }), {}))[t.placement], i = o.x;
            o = o.y, null != t.modifiersData.popperOffsets &&
            (t.modifiersData.popperOffsets.x += i, t.modifiersData.popperOffsets.y += o), t.modifiersData[n] = e;
          },
        },
        {
          name: 'flip', enabled: !0, phase: 'main', fn: function(e) {
            var t = e.state, n = e.options;
            if (e = e.name, !t.modifiersData[e]._skip) {
              var r = n.mainAxis;
              r = void 0 === r || r;
              var o = n.altAxis;
              o = void 0 === o || o;
              var i = n.fallbackPlacements, a = n.padding, s = n.boundary,
                  f = n.rootBoundary, p = n.altBoundary, c = n.flipVariations,
                  u = void 0 === c || c, d = n.allowedAutoPlacements;
              c = y(n = t.options.placement), i = i || (c !== n && u ? function(e) {
                if ('auto' === y(e)) return [];
                var t = E(e);
                return [D(e), t, D(t)];
              }(n) : [E(n)]);
              var l = [n].concat(i).
                  reduce((function(e, n) {
                    return e.concat('auto' === y(n) ? function(e, t) {
                      void 0 === t && (t = {});
                      var n = t.boundary, r = t.rootBoundary, o = t.padding,
                          i = t.flipVariations, a = t.allowedAutoPlacements,
                          s = void 0 === a ? C : a, f = t.placement.split('-')[1],
                          p = (f
                              ? i ? S : S.filter(
                                  (function(e) {return e.split('-')[1] === f;}))
                              : q).filter((function(e) {return 0 <= s.indexOf(e);})).
                              reduce((function(t, i) {
                                return t[i] = H(e, {
                                  placement: i,
                                  boundary: n,
                                  rootBoundary: r,
                                  padding: o,
                                })[y(i)], t;
                              }), {});
                      return Object.keys(p).
                          sort((function(e, t) {return p[e] - p[t];}));
                    }(t, {
                      placement: n,
                      boundary: s,
                      rootBoundary: f,
                      padding: a,
                      flipVariations: u,
                      allowedAutoPlacements: d,
                    }) : n);
                  }), []);
              n = t.rects.reference, i = t.rects.popper;
              var m = new Map;
              c = !0;
              for (var h = l[0], v = 0; v < l.length; v++) {
                var g = l[v], b = y(g), x = 'start' === g.split('-')[1],
                    w = 0 <= ['top', 'bottom'].indexOf(b),
                    O = w ? 'width' : 'height', M = H(t, {
                      placement: g,
                      boundary: s,
                      rootBoundary: f,
                      altBoundary: p,
                      padding: a,
                    });
                if (x = w ? x ? 'right' : 'left' : x ? 'bottom' : 'top', n[O] >
                i[O] && (x = E(x)), O = E(x), w = [], r && w.push(0 >= M[b]), o &&
                w.push(0 >= M[x], 0 >= M[O]), w.every((function(e) {return e;}))) {
                  h = g, c = !1;
                  break;
                }
                m.set(g, w);
              }
              if (c) for (r = function(e) {
                var t = l.find((function(t) {
                  if (t = m.get(t)) return t.slice(0, e).
                      every((function(e) {return e;}));
                }));
                if (t) return h = t, 'break';
              }, o = u ? 3 : 1; 0 < o && "break" !== r(o); o--) ;
              t.placement !== h &&
              (t.modifiersData[e]._skip = !0, t.placement = h, t.reset = !0);
            }
          }, requiresIfExists: ['offset'], data: {_skip: !1},
        },
        {
          name: 'preventOverflow', enabled: !0, phase: 'main', fn: function(e) {
            var t = e.state, n = e.options;
            e = e.name;
            var r = n.mainAxis, o = void 0 === r || r;
            r = void 0 !== (r = n.altAxis) && r;
            var i = n.tether;
            i = void 0 === i || i;
            var a = n.tetherOffset, s = void 0 === a ? 0 : a;
            n = H(t, {
              boundary: n.boundary,
              rootBoundary: n.rootBoundary,
              padding: n.padding,
              altBoundary: n.altBoundary,
            }), a = y(t.placement);
            var f = t.placement.split('-')[1], p = !f, c = O(a);
            a = 'x' === c ? 'y' : 'x';
            var u = t.modifiersData.popperOffsets, l = t.rects.reference,
                m = t.rects.popper, h = 'function' == typeof s ? s(
                Object.assign({}, t.rects, {placement: t.placement})) : s;
            if (s = {x: 0, y: 0}, u) {
              if (o) {
                var g = 'y' === c ? 'top' : 'left',
                    b = 'y' === c ? 'bottom' : 'right',
                    x = 'y' === c ? 'height' : 'width';
                o = u[c];
                var w = u[c] + n[g], M = u[c] - n[b], j = i ? -m[x] / 2 : 0,
                    E = 'start' === f ? l[x] : m[x];
                f = 'start' === f ? -m[x] : -l[x], m = t.elements.arrow, m = i && m
                    ? d(m)
                    : {width: 0, height: 0};
                var D = t.modifiersData['arrow#persistent']
                    ? t.modifiersData['arrow#persistent'].padding
                    : {top: 0, right: 0, bottom: 0, left: 0};
                g = D[g], b = D[b], m = Math.max(0, Math.min(l[x], m[x])), E = p
                    ? l[x] / 2 - j - m - g - h
                    : E - m - g - h, p = p ? -l[x] / 2 + j + m + b + h : f + m + b +
                    h, h = t.elements.arrow &&
                    v(t.elements.arrow), l = t.modifiersData.offset
                    ? t.modifiersData.offset[t.placement][c]
                    : 0, h = u[c] + E - l - (h
                    ? 'y' === c ? h.clientTop || 0 : h.clientLeft || 0
                    : 0), p = u[c] + p - l, i = Math.max(i ? Math.min(w, h) : w,
                    Math.min(o, i ? Math.max(M, p) : M)), u[c] = i, s[c] = i - o;
              }
              r && (r = u[a], i = Math.max(r + n['x' === c ? 'top' : 'left'],
                  Math.min(r,
                      r - n['x' === c ? 'bottom' : 'right'])), u[a] = i, s[a] = i -
                  r), t.modifiersData[e] = s;
            }
          }, requiresIfExists: ['offset'],
        },
        {
          name: 'arrow',
          enabled: !0,
          phase: 'main',
          fn: function(e) {
            var t, n = e.state;
            e = e.name;
            var r = n.elements.arrow, o = n.modifiersData.popperOffsets,
                i = y(n.placement), a = O(i);
            if (i = 0 <= ['left', 'right'].indexOf(i) ? 'height' : 'width', r &&
            o) {
              var s = n.modifiersData[e + '#persistent'].padding, f = d(r),
                  p = 'y' === a ? 'top' : 'left',
                  c = 'y' === a ? 'bottom' : 'right',
                  u = n.rects.reference[i] + n.rects.reference[a] - o[a] -
                      n.rects.popper[i];
              o = o[a] - n.rects.reference[a], u = (r = (r = v(r)) ? 'y' === a
                  ? r.clientHeight || 0
                  : r.clientWidth || 0 : 0) / 2 - f[i] / 2 +
                  (u / 2 - o / 2), i = Math.max(s[p], Math.min(u, r - f[i] -
                  s[c])), n.modifiersData[e] = ((t = {})[a] = i, t.centerOffset = i -
                  u, t);
            }
          },
          effect: function(e) {
            var t = e.state, n = e.options;
            e = e.name;
            var r = n.element;
            if (r = void 0 === r ? '[data-popper-arrow]' : r, n = void 0 ===
            (n = n.padding) ? 0 : n, null != r) {
              if ('string' == typeof r &&
                  !(r = t.elements.popper.querySelector(r))) return;
              P(t.elements.popper, r) && (t.elements.arrow = r, t.modifiersData[e +
              '#persistent'] = {padding: W('number' != typeof n ? n : A(n, q))});
            }
          },
          requires: ['popperOffsets'],
          requiresIfExists: ['preventOverflow'],
        },
        {
          name: 'hide',
          enabled: !0,
          phase: 'main',
          requiresIfExists: ['preventOverflow'],
          fn: function(e) {
            var t = e.state;
            e = e.name;
            var n = t.rects.reference, r = t.rects.popper,
                o = t.modifiersData.preventOverflow,
                i = H(t, {elementContext: 'reference'}),
                a = H(t, {altBoundary: !0});
            n = T(i, n), r = T(a, r, o), o = R(n), a = R(r), t.modifiersData[e] = {
              referenceClippingOffsets: n,
              popperEscapeOffsets: r,
              isReferenceHidden: o,
              hasPopperEscaped: a,
            }, t.attributes.popper = Object.assign({}, t.attributes.popper,
                {'data-popper-reference-hidden': o, 'data-popper-escaped': a});
          },
        }], X = w({defaultModifiers: z});
  e.createPopper = X, e.defaultModifiers = z, e.detectOverflow = H, e.popperGenerator = w, Object.defineProperty(
      e, '__esModule', {value: !0});
}));
//# sourceMappingURL=popper.min.js.map