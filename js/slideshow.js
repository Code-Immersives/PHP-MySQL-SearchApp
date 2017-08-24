var bigPic = '<img src="../../images/propPics/' + imgArr[0] + '" width="100%" height="auto">';
// output first big pic on page load
document.getElementById("bigPic").innerHTML = bigPic;

// make the thumbs using an array, pass in the param "i"
for(i=0; i<imgArr.length; i++) {
    var thumb = '<img src="../../images/propPics/' + imgArr[i] + '" width="100%" height="auto" onclick="swapPic(' + i + ')">';
    document.getElementById("thumbs").innerHTML += thumb;
}

// function swaps image when user clicks a thumb
// param tells func which thumb was clicked 
function swapPic(i) {
    // use the func param to select the correct array index
    bigPic = '<img src="../../images/propPics/' + imgArr[i] + '" width="100%" height="auto">';
    document.getElementById("bigPic").innerHTML = bigPic;
}
