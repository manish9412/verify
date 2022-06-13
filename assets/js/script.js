let counter = document.querySelector('h1');
let count =1;

setInterval(()=>{
	counter.innerText = count;
	count++;

	if(count > 1) localtion.replace('index.php')
},1000)