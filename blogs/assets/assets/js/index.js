function removeifenteredblank() {
    document.getElementById("searchboxcourses").innerHTML = "", document.getElementById("searchboxcourses").style.display = "none"
}

function searchCourseKeyPress(e) {

//alert('keypress');
    $("#searchboxcourses").html("");
    var s = document.getElementById("course_name1").value;
	//alert('keypress'+s);
    if ("" != s) {
        var t = new XMLHttpRequest;
        t.onreadystatechange = function() {
            if (4 == this.readyState && 200 == this.status)
                if (console.log(this.responseText), "No result found" == this.responseText) document.getElementById("searchboxcourses").style.height = "33px", document.getElementById("searchboxcourses").style.overflow = "hidden", document.getElementById("searchboxcourses").style.display = "block", document.getElementById("searchboxcourses").innerHTML = "<ul> <li style='color:red;'> " + this.responseText + "</li></ul>";
                else {
                    var e = JSON.parse(this.responseText);
                    document.getElementById("searchboxcourses").innerHTML = "";
                    for (var s = 0; s < e.length; s++) console.log(e), $("#searchboxcourses").append("<ul> <li> <a href=" + e[s].link + ">" + e[s].name + "</a> </li></ul>");
                    document.getElementById("searchboxcourses").style.display = "block", document.getElementById("searchboxcourses").style.height = "155px", document.getElementById("searchboxcourses").style.overflow = "scroll"
                }
        }, t.open("GET", "backend/searhcourses.php?courseval=" + s, !0), t.send()
    } else document.getElementById("searchboxcourses").innerHTML = "", document.getElementById("searchboxcourses").style.display = "none"
}

function enterPressed(e) {
    var s = document.getElementById("course_name1").value;
        t = e.which ? e.which : event.keyCode;
    if (0 == s.length && removeifenteredblank(), 13 == t && "" == s) removeifenteredblank();
    else if (13 == t && "" != s) {
        "" != document.getElementById("searchboxcourses").text && (document.getElementById("searchboxcourses").innerHTML = "");
        var o = new XMLHttpRequest;
        o.onreadystatechange = function() {
            if (4 == this.readyState && 200 == this.status)
                if (console.log(this.responseText), "No result found" == this.responseText) document.getElementById("searchboxcourses").style.height = "33px", document.getElementById("searchboxcourses").style.overflow = "hidden", document.getElementById("searchboxcourses").style.display = "block", document.getElementById("searchboxcourses").innerHTML = "<ul> <li style='color:red;'> " + this.responseText + "</li></ul>";
                else {
                    console.log(this.responseText);
                    var e = JSON.parse(this.responseText);
                    document.getElementById("searchboxcourses").innerHTML = "";
                    for (var s = 0; s < e.length; s++) console.log(e), document.getElementById("searchboxcourses").innerHTML += "<ul> <li> <a href=" + e[s].link + ">" + e[s].name + "</a> </li></ul>";
                    document.getElementById("searchboxcourses").style.display = "block", document.getElementById("searchboxcourses").style.height = "155px", document.getElementById("searchboxcourses").style.overflow = "scroll"
                }
        }, o.open("GET", "backend/searhcourses.php?courseval=" + s, !0), o.send()
    }
}

function onFocuesDiv() {
    var e = document.getElementById("course_name1").value;
	//alert('onfocus'+e);
    ("" == e || null == e) && (document.getElementById("searchboxcourses").innerHTML = "", document.getElementById("searchboxcourses").style.display = "none")
}

function removeDivSearch() {
    document.getElementById("searchboxcourses").style.display = "none", document.getElementById("searchboxcourses").innerHTML = ""
}

function findcourse() {
	     
    "" != document.getElementById("searchboxcourses").text && (document.getElementById("searchboxcourses").innerHTML = "");
    var e = document.getElementById("course_name1").value;
		//alert('thi is course name'+e);
        s = new XMLHttpRequest;
    s.onreadystatechange = function() {
        if (4 == this.readyState && 200 == this.status)
            if (console.log(this.responseText), "No result found" == this.responseText) removeDivSearch(), document.getElementById("searchboxcourses").style.height = "33px", document.getElementById("searchboxcourses").style.overflow = "hidden", document.getElementById("searchboxcourses").style.display = "block", document.getElementById("searchboxcourses").innerHTML = "<ul> <li style='color:red;'> " + this.responseText + "</li></ul>";
            else {
                console.log(this.responseText);
                var e = JSON.parse(this.responseText);
                document.getElementById("searchboxcourses").innerHTML = "";
                for (var s = 0; s < e.length; s++) console.log(e), document.getElementById("searchboxcourses").innerHTML += "<ul> <li> <a href=" + e[s].link + ">" + e[s].name + "</a> </li></ul>";
                document.getElementById("searchboxcourses").style.display = "block", document.getElementById("searchboxcourses").style.height = "155px", document.getElementById("searchboxcourses").style.overflow = "scroll"
            }
    }, s.open("GET", "backend/searhcourses.php?courseval=" + e, !0), s.send()
}

function getcourse(e) {
    var s = e;
    if (!(s.length >= 2)) return $("#searchboxcourses").html(""), document.getElementById("searchboxcourses").style.display = "none", !1;
    var t = new XMLHttpRequest;
    t.onreadystatechange = function() {
        if (4 == this.readyState && 200 == this.status)
            if ("No result found" == this.responseText) removeDivSearch(), document.getElementById("searchboxcourses").style.display = "block", document.getElementById("searchboxcourses").style.height = "33px", document.getElementById("searchboxcourses").style.overflow = "hidden", document.getElementById("searchboxcourses").innerHTML = "<ul> <li> <a href='" + this.responseText + "'>" + this.responseText + "</a></li></ul>";
            else {
                var e = JSON.parse(this.responseText);
                document.getElementById("searchboxcourses").innerHTML = "";
                for (var s = 1; s < e.length; s++) console.log(e), document.getElementById("searchboxcourses").innerHTML += "<ul> <li> <a href=" + e[s].link + ">" + e[s].name + "</a> </li></ul>";
                document.getElementById("searchboxcourses").style.display = "block", document.getElementById("searchboxcourses").style.height = "155px", document.getElementById("searchboxcourses").style.overflow = "scroll"
            }
    }, t.open("GET", "backend/searhcourses.php?courseval=" + s, !0), t.send()
}! function(e, s, t, o, n, r, c) {
    e.fbq || (n = e.fbq = function() {
        n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    }, e._fbq || (e._fbq = n), n.push = n, n.loaded = !0, n.version = "2.0", n.queue = [], r = s.createElement(t), r.async = !0, r.src = o, c = s.getElementsByTagName(t)[0], c.parentNode.insertBefore(r, c))
}(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js"), fbq("init", "268171933576802"), fbq("track", "PageView"), document.onkeydown = function(e) {
    e = e || window.event, 27 == e.keyCode && (document.getElementById("searchboxcourses").style.display = "none", document.getElementById("course_name1").value = "")
}, $("#searchboxcourses").html(""), $("#searchboxcourses").html("");