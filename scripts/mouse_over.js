function changeimage(towhat,url){
if (document.images){
document.images.targetimage.src=towhat.src
gotolink=url
}
}

function warp(){
window.location=gotolink
}

var myimages=new Array()
var gotolink="#"


function preloadimages(){
for (i=0;i<preloadimages.arguments.length;i++){
myimages[i]=new Image()
myimages[i].src=preloadimages.arguments[i]
}

function preloadArray(){
	var numOfArtists = 61;
	var skipArtistIndex = [7,11];
	var preloadArr;
	for(i=0; i<numOfArtists; i++){
		preloadArr.push("../artists/img/artist"+[i]+".jpg");
	}
}

}


preloadimages("", "../artists/img/artist1.jpg",
	"../artists/img/artist2.jpg",
	"../artists/img/artist3.jpg",
	"../artists/img/artist4.jpg",
	"../artists/img/artist5.jpg",
	"../artists/img/artist6.jpg",
	"../artists/img/artist8.jpg",
	"../artists/img/artist9.jpg",
	"../artists/img/artist10.jpg",
	"../artists/img/artist12.jpg",
	"../artists/img/artist13.jpg",
	"../artists/img/artist14.jpg",
	"../artists/img/artist15.jpg",
	"../artists/img/artist16.jpg",
	"../artists/img/artist17.jpg",
	"../artists/img/artist18.jpg",
	"../artists/img/artist19.jpg",
	"../artists/img/artist20.jpg",
	"../artists/img/artist21.jpg",
	"../artists/img/artist22.jpg",
	"../artists/img/artist23.jpg",
	"../artists/img/artist24.jpg",
	"../artists/img/artist25.jpg",
	"../artists/img/artist26.jpg",
	"../artists/img/artist27.jpg",
	"../artists/img/artist28.jpg",
	"../artists/img/artist29.jpg",
	"../artists/img/artist30.jpg",
	"../artists/img/artist31.jpg",
	"../artists/img/artist32.jpg",
	"../artists/img/artist33.jpg",
	"../artists/img/artist34.jpg",
	"../artists/img/artist35.jpg",
	"../artists/img/artist36.jpg",
	"../artists/img/artist37.jpg",
	"../artists/img/artist38.jpg",
	"../artists/img/artist39.jpg",
	"../artists/img/artist40.jpg",
	"../artists/img/artist41.jpg",
	"../artists/img/artist42.jpg",
	"../artists/img/artist43.jpg",
	"../artists/img/artist44.jpg",
	"../artists/img/artist45.jpg",
	"../artists/img/artist46.jpg",
	"../artists/img/artist47.jpg",
	"../artists/img/artist48.jpg",
	"../artists/img/artist49.jpg",
	"../artists/img/artist50.jpg",
	"../artists/img/artist51.jpg",
	"../artists/img/artist52.jpg",
	"../artists/img/artist53.jpg",
	"../artists/img/artist54.jpg",
	"../artists/img/artist55.jpg",
	"../artists/img/artist56.jpg",
	"../artists/img/artist57.jpg",
	"../artists/img/artist58.jpg",
	"../artists/img/artist59.jpg",
	"../artists/img/artist60.jpg",
	"../artists/img/artist61.jpg",
	"../artists/img/artist62.jpg",
	"../artists/img/artist63.jpg")
