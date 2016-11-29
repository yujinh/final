function imageClicked(image) {
	var modalImg = document.getElementById("modalimage");
	modalImg.src = image.src;
	displayModalView();
}

function displayModalView() {
	var modal = document.getElementById('modal');
    modal.style.display = "block";
}

function closeModalView() {
	var modal = document.getElementById('modal');
    modal.style.display = "none";
}