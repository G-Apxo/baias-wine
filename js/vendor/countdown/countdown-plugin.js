/** Abstract base class for collection plugins v1.0.1.
	Written by Keith Wood (kbwood{at}iinet.com.au) December 2013.
	Licensed under the MIT (https://github.com/jquery/jquery/blob/master/MIT-LICENSE.txt) license. */
(function() {
	"use strict";
	var j = false;
	window.JQClass = function() {};
	JQClass.classes = {};
	JQClass.extend = function extender(f) {
		var g = this.prototype;
		j = true;
		var h = new this();
		j = false;
		for (var i in f) {
			h[i] = typeof f[i] == 'function' && typeof g[i] == 'function' ? (function(d, e) {
				"use strict";
				return function() {
					var b = this._super;
					this._super = function(a) {
						return g[d].apply(this, a || [])
					};
					var c = e.apply(this, arguments);
					this._super = b;
					return c
				}
			})(i, f[i]) : f[i]
		}

		function JQClass() {
			"use strict";
			if (!j && this._init) {
				this._init.apply(this, arguments)
			}
		}
		JQClass.prototype = h;
		JQClass.prototype.constructor = JQClass;
		JQClass.extend = extender;
		return JQClass
	}
})();
(function($) {
	"use strict";
	JQClass.classes.JQPlugin = JQClass.extend({
		name: 'plugin',
		defaultOptions: {},
		regionalOptions: {},
		_getters: [],
		_getMarker: function() {
			return 'is-' + this.name
		},
		_init: function() {
			"use strict";
			$.extend(this.defaultOptions, (this.regionalOptions && this.regionalOptions['']) || {});
			var c = camelCase(this.name);
			$[c] = this;
			$.fn[c] = function(a) {
				"use strict";
				var b = Array.prototype.slice.call(arguments, 1);
				if ($[c]._isNotChained(a, b)) {
					return $[c][a].apply($[c], [this[0]].concat(b))
				}
				return this.each(function() {
					"use strict";
					if (typeof a === 'string') {
						if (a[0] === '_' || !$[c][a]) {
							throw 'Unknown method: ' + a;
						}
						$[c][a].apply($[c], [this].concat(b))
					} else {
						$[c]._attach(this, a)
					}
				})
			}
		},
		setDefaults: function(a) {
			"use strict";
			$.extend(this.defaultOptions, a || {})
		},
		_isNotChained: function(a, b) {
			if (a === 'option' && (b.length === 0 || (b.length === 1 && typeof b[0] === 'string'))) {
				return true
			}
			return $.inArray(a, this._getters) > -1
		},
		_attach: function(a, b) {
			"use strict";
			a = $(a);
			if (a.hasClass(this._getMarker())) {
				return
			}
			a.addClass(this._getMarker());
			b = $.extend({}, this.defaultOptions, this._getMetadata(a), b || {});
			var c = $.extend({
				name: this.name,
				elem: a,
				options: b
			}, this._instSettings(a, b));
			a.data(this.name, c);
			this._postAttach(a, c);
			this.option(a, b)
		},
		_instSettings: function(a, b) {
			"use strict";
			return {}
		},
		_postAttach: function(a, b) {},
		_getMetadata: function(d) {
			"use strict";
			try {
				var f = d.data(this.name.toLowerCase()) || '';
				f = f.replace(/'/g, '"');
				f = f.replace(/([a-zA-Z0-9]+):/g, function(a, b, i) {
					"use strict";
					var c = f.substring(0, i).match(/"/g);
					return (!c || c.length % 2 === 0 ? '"' + b + '":' : b + ':')
				});
				f = $.parseJSON('{' + f + '}');
				for (var g in f) {
					var h = f[g];
					if (typeof h === 'string' && h.match(/^new Date\((.*)\)$/)) {
						f[g] = eval(h)
					}
				}
				return f
			} catch (e) {
				return {}
			}
		},
		_getInst: function(a) {
			"use strict";
			return $(a).data(this.name) || {}
		},
		option: function(a, b, c) {
			"use strict";
			a = $(a);
			var d = a.data(this.name);
			if (!b || (typeof b === 'string' && c == null)) {
				var e = (d || {}).options;
				return (e && b ? e[b] : e)
			}
			if (!a.hasClass(this._getMarker())) {
				return
			}
			var e = b || {};
			if (typeof b === 'string') {
				e = {};
				e[b] = c
			}
			this._optionsChanged(a, d, e);
			$.extend(d.options, e)
		},
		_optionsChanged: function(a, b, c) {},
		destroy: function(a) {
			"use strict";
			a = $(a);
			if (!a.hasClass(this._getMarker())) {
				return
			}
			this._preDestroy(a, this._getInst(a));
			a.removeData(this.name).removeClass(this._getMarker())
		},
		_preDestroy: function(a, b) {}
	});

	function camelCase(c) {
		"use strict";
		return c.replace(/-([a-z])/g, function(a, b) {
			return b.toUpperCase()
		})
	}
	$.JQPlugin = {
		createPlugin: function(a, b) {
			"use strict";
			if (typeof a === 'object') {
				b = a;
				a = 'JQPlugin'
			}
			a = camelCase(a);
			var c = camelCase(b.name);
			JQClass.classes[c] = JQClass.classes[a].extend(b);
			new JQClass.classes[c]()
		}
	}
})(jQuery);