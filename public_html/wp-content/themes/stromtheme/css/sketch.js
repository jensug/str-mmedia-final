let values = [];
let n = 50;
let t = 0;
let key, j;
let whileLoop = false;

function setup(){
  createCanvas(1000, 500);


  for(let i = 0; i < n; i++){
    values[i] = random(10);

  }

  frameRate(100);
  //noLoop();

}


function draw(){

    if(t<n && !whileLoop){
      key = values[t];
      j = t - 1;
      whileLoop = true;
    }
  if(whileLoop){
    if((j >= 0 && values[j] > key)){
        values[j + 1] = values[j];
        j = j - 1;

        visualize();
        print(values[j]);

    }else{
      whileLoop = false;
    }
  }
    if(t<n && !whileLoop){
      values[j + 1] = key;
      t++;
    }
}


function visualize(){

  background(255);
  noStroke();
  fill(255, 204, 0);
  for(let i = 0; i < n; i++){
    //line(i, 100 , i, 100 - values[i]);
    if(i==j){
      fill(255, 104, 0);
    }else{
      fill(255, 204, 0);
    }
    rect(i*(width/n), 0+height-(height/values[i]), width/n, height/values[i]);
  }

}
