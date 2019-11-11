<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
</body>
</html>
<script>
//新增poker陣列
var poker_arr = new Array();
//黑桃(s)
for(var i = 1; i<=13;i++)
{
  poker_arr.push('s_'+i);
}
//梅花(c)
for(var i = 1; i<=13;i++)
{
  poker_arr.push('c_'+i);
}
//方塊(d)
for(var i = 1; i<=13;i++)
{
  poker_arr.push('d_'+i);
}
//愛心(h)
for(var i = 1; i<=13;i++)
{
  poker_arr.push('h_'+i);
}

//var index = Math.floor((Math.random()*poker_arr.length));

//新增八個數組
var arr_groove = [[],[],[],[],[],[],[],[]];

Array.prototype.remove = function(val) {
	var index = this.indexOf(val);
	if (index > -1) {
	this.splice(index, 1);
	}
};

function getNumber() {
  return Math.floor(Math.random()*(7-6+1))+6;
}

for(var x=0;x<arr_groove.length;x++)
{
	 var randomNumber = getNumber();
	 for(var j = 0; j < randomNumber; j++)
	 {
		var index = Math.floor((Math.random() * poker_arr.length));
		arr_groove[x].push(poker_arr[index]);
		poker_arr.remove(poker_arr[index]);
	 }
}

//如果還有多的牌
if(poker_arr.length > 0)
{
	for(var x=0;x<arr_groove.length;x++)
	{
		for(var y=0;y<arr_groove[x].length;y++)
		{
			if(arr_groove[x].length == 6)
			{
				var index = Math.floor((Math.random() * poker_arr.length));
				arr_groove[x].push(poker_arr[index]);
				poker_arr.remove(poker_arr[index]);
			}
		}
	}
}
//把undefined拿掉
for(var x=0;x<arr_groove.length;x++)
{
	for(var y=0;y<arr_groove[x].length;y++)
	{
		//把undefined清除掉
		if((arr_groove[x][y]) == undefined)
		{			
			  arr_groove[x].splice(y,1);  
			  y= y-1; 
		}
	}
}

console.log(arr_groove);



</script>
