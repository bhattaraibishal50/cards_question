
// with vanilla js
class Sufflle {

	constructor(){
		this.suffleBtn = document.getElementById("shuffleBtn");
	    this.suffleDeckPannel = document.getElementById("suffleDeckPannel");
	    this.newDeckPannel = document.getElementById("newDeckPannel");
	    this.event();
	}

	event(){
   		this.suffleBtn.addEventListener("click", this.action.bind(this));
   	}
   	action(){
		console.log("sufflebtn clicked");
		var location = "./public/" ;
		window.location.reload(true);
	}
   	
}


new Sufflle();
