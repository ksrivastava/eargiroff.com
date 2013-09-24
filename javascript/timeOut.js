var images = new Array()
images[0] = "tree.jpg";
images[1] = "owl.jpg";
images[2] = "people.jpg";
setTimeout("changeImage()", 3000);
var x=0;

function changeImage()
{
document.getElementById("img").src=images[x]
x++;

if (x >= images.length) x = 0;

}