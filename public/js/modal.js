// Get the modal
var modal = document.getElementById("modal1");


var photoView = document.getElementsByClassName("photoView");
var modalImg = document.getElementById("img01");

if(photoView){
  for(var i = 0; i < photoView.length; i++) {
    photoView[i].onclick = function(){
      modalImg.src = this.src;
    }
  }
}