window.onload = function () {
$("#navmadlib").on({
   mouseenter: function(){
   	 $("#sidetitletext").css({'color': 'pink'});
     $("#sidetitletext").text("MADLIBS");
     var shake = anime({
  		targets: ['#sidetitletext'],
  		easing: 'linear',
        duration: 780,
  		translateX: [
		    {value: -3,},
		    {value: 3,},
		    {value: -1,},
		    {value: 1,},
		    {value: 0}
    	 ],
    	 skewX: [
			{value: 1,},
		    {value: -1,},
		    {value: 0.25,},
		    {value: -0.25,},
		    {value: 0}
    	 ]
    	 })
 	  },
  	  mouseleave: function(){
  	 $("#sidetitletext").clearQueue();
  	 $("#sidetitletext").css({'color': 'black'});
     $("#sidetitletext").text("ASSIGNMENT 6");
    }
})
$("#navcalc").on({
   mouseenter: function(){
   	 $("#sidetitletext").css({'color': 'blue'});
     $("#sidetitletext").text("CALCULATOR");
     var shake = anime({
  		targets: ['#sidetitletext'],
  		easing: 'linear',
        duration: 740,
  		translateX: [
		    {value: -3,},
		    {value: 3,},
		    {value: -1,},
		    {value: 1,},
		    {value: 0}
    	 ],
    	 skewX: [
			{value: 1,},
		    {value: -1,},
		    {value: 0.25,},
		    {value: -0.25,},
		    {value: 0}
    	 ]
    	 })
 	  },
  	  mouseleave: function(){
  	 $("#sidetitletext").clearQueue();
  	 $("#sidetitletext").css({'color': 'black'});
     $("#sidetitletext").text("ASSIGNMENT 6");
    }
})
$("#navstore").on({
   mouseenter: function(){
   	 $("#sidetitletext").css({'color': 'green'});
     $("#sidetitletext").text("STORE");
     var shake = anime({
  		targets: ['#sidetitletext'],
  		easing: 'linear',
        duration: 720,
  		translateX: [
		    {value: -3,},
		    {value: 3,},
		    {value: -1,},
		    {value: 1,},
		    {value: 0}
    	 ],
    	 skewX: [
			{value: 1,},
		    {value: -1,},
		    {value: 0.25,},
		    {value: -0.25,},
		    {value: 0}
    	 ]
    	 })
 	  },
  	  mouseleave: function(){
  	 $("#sidetitletext").clearQueue();
  	 $("#sidetitletext").css({'color': 'black'});
     $("#sidetitletext").text("ASSIGNMENT 6");
    }
})
$("#navquiz").on({
   mouseenter: function(){
   	 $("#sidetitletext").css({'color': 'black'});
     $("#sidetitletext").text("QUIZ");
     var shake = anime({
  		targets: ['#sidetitletext'],
  		easing: 'linear',
        duration: 777,
  		translateX: [
		    {value: -3,},
		    {value: 3,},
		    {value: -1,},
		    {value: 1,},
		    {value: 0}
    	 ],
    	 skewX: [
			{value: 1,},
		    {value: -1,},
		    {value: 0.25,},
		    {value: -0.25,},
		    {value: 0}
    	 ]
    	 })
 	  },
  	  mouseleave: function(){
  	 $("#sidetitletext").clearQueue();
  	 $("#sidetitletext").css({'color': 'black'});
     $("#sidetitletext").text("ASSIGNMENT 6");
    }
})
};
