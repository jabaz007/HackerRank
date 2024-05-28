var s = "a-bC-dEf=gjhl!!";

var rs = s.split('');
var rrs = [];

rs.forEach(function (v, i) {
	if (v.match(/[a-zA-Z]/)) {
		rrs.unshift(v);
	}
});

rs.forEach(function (v, i) {
	if (v.match(/[^a-zA-Z]/)) {
		rrs.splice(i, 0, v);
	}
});

console.log(rrs);