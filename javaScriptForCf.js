               var cErrors=0;
                function userNameCheck()
                {
                    var teamName=document.getElementsByName("username")[0];
                    var pattern=/^[a-z0-9]{1,}[ ]{0,}[a-z0-9]{1,}$/i;
                    if(pattern.test(teamName.value))
                    {teamName.style.backgroundColor='#4DDB4D';}
                    else
                    {teamName.style.backgroundColor="#f67070";cErrors++;}
                }
                function teamNameCheck()
                {
                    var teamName=document.getElementsByName("team")[0];
                    var pattern=/^[a-z0-9]{1,}[ ]{0,}[a-z0-9]{1,}$/i;
                    if(pattern.test(teamName.value))
                    {teamName.style.backgroundColor="#4DDB4D";}
                    else
                    {teamName.style.backgroundColor="#f67070";cErrors++;}
                }
                function tPassCheck()
                {
                    var teamName=document.getElementsByName("password")[0];
                    var pattern=/^[a-z0-9]{5,}$/i;
                    if(pattern.test(teamName.value))
                    {teamName.style.backgroundColor="#4DDB4D";}
                    else
                    {teamName.style.backgroundColor="#f67070";cErrors++;}
                }
                
                  function mOneCheck()
                {
                    var teamName=document.getElementsByName("user1")[0];
                    var pattern=/^[a-z]{1,}[ ]{0,}[a-z]{1,}$/i;
                    if(pattern.test(teamName.value))
                    {teamName.style.backgroundColor="#4DDB4D";}
                    else
                    {teamName.style.backgroundColor="#f67070";cErrors++;}
                }
                  function mTwoCheck()
                {
                    var teamName=document.getElementsByName("user2")[0];
                    var pattern=/^[a-z]{1,}[ ]{0,}[a-z]{1,}$/i;
                    if(pattern.test(teamName.value) || teamName.value=="")
                    {teamName.style.backgroundColor="#4DDB4D";}
                    else
                    {teamName.style.backgroundColor="#f67070";cErrors++;}
                }
                 
                function isEthinkAlright()
                {
                    cErrors=0;
                    userNameCheck()
                    teamNameCheck();
                    tPassCheck();
                    mOneCheck();
                    mTwoCheck();
                    if(cErrors==0)
                    {return true;}
                    else
                    { alert("error");return false;  }
                }
                var msize=100;
                var myVar;
            	 function trialSony()
                {
                	if(msize>3)
                	{msize-=2;
                	}
                	if(msize>0.1)
                	{msize-=0.1;}
                	else{clearInterval(myVar);}
                	white_line="<div style='background-color:#00d09a;width:100%;height:"+msize+"%;'></div>";
 			backPage="<table style='width:100%;height:100%;background-color:#26343f;text-align:center;'><tr><td style='width:100%;height:100%'>"+white_line+"</td></tr></table>";
                	document.body.innerHTML=backPage;
                	
	
                }
                function thisisfun()
                {
                terminalT=setInterval(function(){terminalText("CODING NINJA!")},300);
                }
                function locindex()
                {
                	//myVar=setInterval(function(){trialSony();},1);
                	setTimeout(function(){window.location.assign('index.php');},500);
                }
                 function loclogin()
                {
                	//myVar=setInterval(function(){trialSony();},1);
                	setTimeout(function(){window.location.assign('login.php');},500);
                }
                function locsignup()
                {
                	
                	//myVar=setInterval(function(){trialSony();},1);
                	setTimeout(function(){window.location.assign('signup.php');},500);
                }
            
                function loccontact()
                {
                	
                	//myVar=setInterval(function(){trialSony();},1);
                	setTimeout(function(){window.location.assign('contact.php');},500);
                }
                
                function locleaderboard()
                {
                	
                	//myVar=setInterval(function(){trialSony();},1);
                	setTimeout(function(){window.location.assign('leaderboard.php');},500);
                }
                function loccontest()
                {
                	
                	//myVar=setInterval(function(){trialSony();},1);
                	setTimeout(function(){window.location.assign('contest.php');},500);
                }
                function loclogout()
                {
                	
                	myVar=setInterval(function(){trialSony();},1);
                	setTimeout(function(){window.location.assign('logout.php');},500);
                }
                function submitForm()
                {	
                	document.getElementById("inputForm").submit();
                }
                function locloginvalid()
                { 
                	//myVar=setInterval(function(){trialSony();},1);
                	setTimeout(function(){submitForm();},500);
                	
                }
                function locQuestionOne()
                {
                	
                	//myVar=setInterval(function(){trialSony();},1);
                	setTimeout(function(){window.location.assign('questionI.php');},500);
                }
		var currentC=0;
		var string="CODING NINJA!";
		var terminalT;
		function terminalText(string)
		{
		if(document.getElementById("terminalText")!=null)
		{
			var tText=document.getElementById("terminalText");
			currentC=currentC%string.length;
			tText.innerHTML=string.substring(0,currentC)+"|";
			currentC++;
			if(currentC==string.length)
			{clearInterval(terminalT);	
			}
		}
		}
 //setInterval(function(){terminalText()},100);
 //#00d09a   #26343f  #18222b
            
