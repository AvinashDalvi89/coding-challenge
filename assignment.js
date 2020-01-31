const getIntersectingRectangle = (r1, r2) => {
    const noIntersect = r2.x[0] > r1.x[1] || r2.x[1] < r1.x[0] ||
                        r2.y[0] > r1.y[1] || r2.y[1] < r1.y[0];

    return noIntersect ? false : {
        x1: Math.max(r1.x[0], r2.x[0]), // _[0] is the lesser,
        y1: Math.max(r1.y[0], r2.y[0]), // _[1] is the greater
        x2: Math.min(r1.x[1], r2.x[1]),
        y2: Math.min(r1.y[1], r2.y[1])
    };
};

function totalArea (rect) {
    var totalArea = 0;
    for(let i=0 ;i< rect.length-1;i++) {
        var rectangle = rect[i]
        var areaRect = (rectangle.x[1]-rectangle.x[0])*(rectangle.y[1]-rectangle.y[0]);
        var interRect = getIntersectingRectangle(rect[i], rect[i+1])
        var areaInterRect = interRect === false ? 0 : (interRect.x2-interRect.x1)*(interRect.y2-interRect.y1);
        if(!interRect) {
            totalArea = totalArea + areaRect
        } else {
            totalArea = totalArea + areaRect - areaInterRect;
        }
        if(i === rect.length-2){
            var remRectArea = (rect[i+1].x[1]-rect[i+1].x[0])*(rect[i+1].y[1]-rect[i+1].y[0])
            totalArea = totalArea + remRectArea
        }
        
    }
    return totalArea;
}

function main(input) {

  var lines = input.split("\n");
  var t = Number(lines[0]);
  var rectangles = []
  
  for (var l = 1; l <= t; l++) {
        var grid = lines[l].split(" ")
        var x = grid[0];
        var y = grid[1];
        
        var matchX = x.match(/\d+/g).map(Number);
        var matchY = y.match(/\d+/g).map(Number);
        var xArray = [matchX[0],matchY[0]];
        var yArray = [matchX[1],matchY[1]];
        var rectangle = { x:xArray,y:yArray }
        
        rectangles.push(rectangle)
  }
        var result = totalArea(rectangles)
	    process.stdout.write(result.toString());
	    process.stdout.write("\n");
}

process.stdin.resume();
process.stdin.setEncoding("utf-8");
var stdin_input = "";

process.stdin.on("data", function(input) { 
   stdin_input += input;  
});

process.stdin.on("end", function() {
    console.log("afasfafa");
  main(stdin_input);
});