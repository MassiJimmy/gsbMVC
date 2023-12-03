/*var canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");
canvas.width = 1920;
canvas.height = 800;

const CarrexArray = []*20;
const CarreyArray = []*20;

const CerclexArray = []*20;
const CercleyArray = []*20;

const TrianglexArray = []*20;
const TriangleyArray = []*20;


for(let j = 0; j < CarrexArray.length-1; j++)
{
    CarrexArray[j]=Math.random()*canvas.width;
    CarreyArray[j]=Math.random()*canvas.width;
}

for(let j = 0; j < CerclexArray.length-1; j++)
{
    CerclexArray[j]=Math.random()*canvas.width;
    CercleyArray[j]=Math.random()*canvas.width;
}


for(let j = 0; j < TrianglexArray.length-1; j++)
{
    TrianglexArray[j]=Math.random()*canvas.width;
    TriangleyArray[j]=Math.random()*canvas.height;
}

for (let i = 0; i < CarrexArray.length-1; i++) {
    ctx.fillStyle = "red";
  let x = CarrexArray[i];
  let y = CarreyArray[i];
  ctx.beginPath();
  ctx.rect(x, y, 5, 5, 0, 0);
  ctx.fill();
}

for (let i = 0; i < CerclexArray.length-1; i++) {
    ctx.fillStyle = "blue";
    let x = CerclexArray[i];
    let y = CercleyArray[i];
    ctx.beginPath();
    ctx.ellipse(x, y, 3, 3, 0, 0,Math.PI * 2);
    ctx.fill();
  }

  for (let i = 0; i < TrianglexArray.length-1; i++) {
    ctx.fillStyle = "green";
    let x = TrianglexArray[i];
    let y = TriangleyArray[i];
    ctx.beginPath();
    ctx.moveTo(3, 2);
    ctx.lineTo(4, 3);
    ctx.lineTo(4, 1)
    ctx.fill();
  }
  */