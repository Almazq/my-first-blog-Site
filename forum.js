var img = document.getElementById('img-search');
var inp = document.getElementById('inp');
img.onclick = function cl(){
	if (inp.style.display === "none") {
		inp.style.display = "block";
	}else{
		inp.style.display = "none"
	}
}
