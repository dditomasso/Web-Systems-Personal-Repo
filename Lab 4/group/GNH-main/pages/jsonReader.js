$(document).ready(function() {
  
	var option=1;	
	  

	  if (option==1) {
	  
		$.ajax({
			  type: "GET",
			  url: "../resources/data.json",
			  dataType: "json",
			  success: function(responseData, status){
		  var output = "";
			   $.each(responseData.items, function(i, item) {
                if (item.activity==="Company Expose"){
                    output='<p>'+item.description+'</p>';
                }
			});
			$('#companyExpose').html(output);
		  }, error: function(msg) {
						// there was a problem
			alert("There was a problem: " + msg.status + " " + msg.statusText);
		  }
		});
	  }

      if (option==1) {
	  
		$.ajax({
			  type: "GET",
			  url: "../resources/data.json",
			  dataType: "json",
			  success: function(responseData, status){
		  var output = "";
			   $.each(responseData.items, function(i, item) {
                if (item.activity==="Tutoring"){
                    output=`Calling all undergraduate ITWS students! Are you 
                    struggling to keep up with the RPI work-load?`+item.description+
                    `We hope to see you there!`;
                }
			});
			$('#tutoring').html(output);
		  }, error: function(msg) {
						// there was a problem
			alert("There was a problem: " + msg.status + " " + msg.statusText);
		  }
		});
	  }
  });
  
