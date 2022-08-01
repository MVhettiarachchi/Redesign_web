function editProfile(tableref,tablekey){
	$("td[id ^="+tableref+"][id $="+tablekey+"]").each(function(){
		text = $(this).html();
		width = $(this).css('width');
		width = (parseInt(width,10)-7)+"px";
		insertele = "<textarea rows='2' style='width:"+width+"' >"+text+"</textarea>";
		$(this).html(insertele);
	});
	//text = document.getElementById(tableref+"_"+tablekey).innerHTML;
	
	//insertele = "<textarea rows='3' cols='100'>"+text+"</textarea>";
	//document.getElementById(tableref+"_"+tablekey).innerHTML = insertele;
	
	document.getElementById('edit_'+tableref+'_'+tablekey).style.display = "none";
	document.getElementById('save_'+tableref+'_'+tablekey).style.display = "block";
	document.getElementById('cancel_'+tableref+'_'+tablekey).style.display = "block";
	
	//insertsavebtn = "<img src='../assets/save.png' title='Save' onclick='saveProfileField("+tableref+","+tablekey+")'>";
	
}

function cancelProfileField(tableref,tablekey){
	document.getElementById('edit_'+tableref+'_'+tablekey).style.display = "block";
	document.getElementById('save_'+tableref+'_'+tablekey).style.display = "none";
	document.getElementById('cancel_'+tableref+'_'+tablekey).style.display = "none";
	
	$("td[id ^="+tableref+"][id $="+tablekey+"]").each(function(){
		value = $(this).children().val();
		$(this).html(value);
	});
	
}

function updateProfileField(tableref,tablekey){
	document.getElementById('save_'+tableref+'_'+tablekey).style.display = "none";
	document.getElementById('edit_'+tableref+'_'+tablekey).style.display = "none";
	document.getElementById('cancel_'+tableref+'_'+tablekey).style.display = "none";
	
	params = '&table='+tableref+'&key='+tablekey;
	
	$("td[id ^="+tableref+"][id $="+tablekey+"]").each(function(){
		text = $(this).children().val();
		id = $(this).attr('id');
		id_parts = id.split("_");
		key = id_parts[id_parts.length-2];
		
		params += "&"+key+"="+text;
	});
	
	//value = $("#"+tableref+"_"+tablekey+" textarea").val();
	//params = '&table='+tableref+'&key='+tablekey+'&value='+value;
	var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	var response = JSON.parse( this.responseText);
	       
	        	if(response.status){
	        		insertele = '<img src="../assets/tick.png">';
	        		$("#btn_"+tableref+"_"+tablekey).append(insertele);

	        		$("td[id ^="+tableref+"][id $="+tablekey+"]").each(function(){
	        			value = $(this).children().val();
	        			$(this).html(value);
	        		});
	        	}
	    
	    }
	  };
	  xhttp.open("GET", "../ajaxprocess.php?task=updateprofilefield"+params, true);
	  xhttp.send();
}

function addNewRow(tableref){
		$("#add-"+tableref).hide();
		row = $("<tr id='new-"+tableref+"'></tr>");

		colsave = $('<td id="save-add-new"><img src="../assets/save.png" title="Save" onclick="saveNewField(\''+tableref+'\')"></td>');
		colcancel = $('<td><img class="icon"  src="../assets/cancel.png"  title="Cancel" onclick="cancelField(\''+tableref+'\');"/></td>');
	
		if(tableref == 'publications'){
			textarea = "<textarea rows='2' cols='100' ></textarea>";
			col1 = $("<td>"+textarea+"</td>");
		
			row.append(col1,colsave,colcancel).prependTo("#tab-"+tableref);   

		}
		else if(tableref == 'professional_qualifications'){
			textarea = "<textarea rows='2' cols='10' id='designation'></textarea>";
			col1 = $("<td>"+textarea+"</td>");
			textarea = "<textarea rows='2' cols='63' id='institute'></textarea>";
			col2 = $("<td>"+textarea+"</td>");
			textarea = "<textarea rows='2' cols='20' id='period'></textarea>";
			col3 = $("<td>"+textarea+"</td>");
		
			row.append(col1,col2,col3,colsave,colcancel).prependTo("#tab-"+tableref);   

		}
		else if(tableref == 'awards'){
			textarea = "<textarea rows='2' cols='100' ></textarea>";
			col1 = $("<td>"+textarea+"</td>");
		
			row.append(col1,colsave,colcancel).prependTo("#tab-"+tableref); 
		}
		else if(tableref == 'memberships'){
			textarea = "<textarea rows='2' cols='80' ></textarea>";
			col1 = $("<td>"+textarea+"</td>");
		
			row.append(col1,colsave,colcancel).prependTo("#tab-"+tableref); 
		}
		else if(tableref == 'research_interests'){
			textarea = "<textarea rows='2' cols='50' ></textarea>";
			col1 = $("<td>"+textarea+"</td>");
		
			row.append(col1,colsave,colcancel).prependTo("#tab-"+tableref); 
		}
		
	}

function saveNewField(tableref){
	$('#save-add-new ').html('');
	
	if(tableref == 'publications'){
		newval = $("#new-"+tableref+" textarea").val();
		params = '&table='+tableref+'&value='+newval;
	}else if(tableref == 'professional_qualifications'){
		designation = $("#designation").val();
		institute = $("#institute").val();
		period = $("#period").val();
		
		params = '&table='+tableref+'&designation='+designation+'&institute='+institute+'&period='+period;
		
	}else if(tableref == 'awards'){
		newval = $("#new-"+tableref+" textarea").val();
		params = '&table='+tableref+'&value='+newval;
	}else if(tableref == 'memberships'){
		newval = $("#new-"+tableref+" textarea").val();
		params = '&table='+tableref+'&value='+newval;
	}
	else if(tableref == 'research_interests'){
		newval = $("#new-"+tableref+" textarea").val();
		params = '&table='+tableref+'&value='+newval;
	}

	var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	var response = JSON.parse( this.responseText);
	       
	        	if(response.status){
	        		insertele = '<img src="../assets/tick.png">';
	        		$("#tab-"+tableref+" #save-add-new").append(insertele);
	        		
	        		$("#new-"+tableref+" td textarea").each(function(){
	        			$(this).parent().html($(this).val());
	        		});
	        			
	        		
	        		//$("#new-"+tableref+" td:nth-child(3) input").val('Remove');
	        		changeonclick = "removeProfileField('"+tableref+"',"+ response.insert_id +",1)";
	        		$("#new-"+tableref+" td:last-child img").attr('onclick',changeonclick);
	        		$("#new-"+tableref+" td:last-child img").attr('src','../assets/remove.png');
	        		$("#new-"+tableref).attr('id', tableref+"_"+ response.insert_id);
	        		
	        		//display the add new button
	        		$("#add-"+tableref).show();
	        	}
    
	    }
	  };
	  xhttp.open("GET", "../ajaxprocess.php?task=savenewfield"+params, true);
	  xhttp.send();
}

function cancelField(tableref){
	$("#new-"+tableref).remove();
	$("#add-"+tableref).show();
}

function removeProfileField(tableref,tablekey,isnew=0){
	if (confirm("Are you sure to remove this?")) {
		params = '&table='+tableref+'&key='+tablekey;
		
		var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		    	var response = JSON.parse( this.responseText);
		       
		        	if(response.status){
		        		if(isnew){
		        			$("tr[id ^="+tableref+"][id $="+tablekey+"]").remove();
		        		}else{
		        			$("td[id ^="+tableref+"][id $="+tablekey+"]").closest("tr").remove();
		        		}
		        	}
	    
		    }
		  };
		  xhttp.open("GET", "../ajaxprocess.php?task=removeprofilefield"+params, true);
		  xhttp.send();
	} else {
		  //do nothing
	}
	
}

//////////////////////image upload function /////////////////////
$(document).ready(function () {
    //If image edit link is clicked
    $(".editLink").on('click', function(e){
        e.preventDefault();
        $("#fileInput:hidden").trigger('click');
    });

    //On select file to upload
    $("#fileInput").on('change', function(){
        var image = $('#fileInput').val();
        var img_ex = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        
        //validate file type
        if(!img_ex.exec(image)){
            alert('Please upload only .jpg/.jpeg/.png/.gif file.');
            $('#fileInput').val('');
            return false;
        }else{
            $('.uploadProcess').show();
            $('#uploadForm').hide();
            $( "#picUploadForm" ).submit();
        }
    });
});

//After completion of image upload process
function completeUpload(success, fileName) {
    if(success == 1){
        $('#imagePreview').attr("src", "");
        $('#imagePreview').attr("src", fileName);
        $('#fileInput').attr("value", fileName);
        $('.uploadProcess').hide();
    }else{
        $('.uploadProcess').hide();
        alert('There was an error during file upload!');
    }
    return true;
}