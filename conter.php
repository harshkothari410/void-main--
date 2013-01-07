<html>

<table><tr><td>
<style type="text/css">

#countbox
{
color:brown;
font-size:33px;
background-image:url('images/calender.png');
width:405px;
padding-top:27px;
padding-left:36px;
}

.clk{
align:left;
}

a{
text-decoration:none;
}

</style>

<SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
<!--

dateFuture = new Date(2012,2,24,12,0,0);

function GetCount(){

        dateNow = new Date();                                                                        //grab current date
        amount = dateFuture.getTime() - dateNow.getTime();                //calc milliseconds between dates
        delete dateNow;

        // time is already past
        if(amount < 0){
                document.getElementById('countbox').innerHTML="Now!";
        }
        // date is still good
        else{
                days=0;hours=0;mins=0;secs=0;out="<table width=100%><tr><td class='clk' width=100>";

                amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs

                days=Math.floor(amount/86400);//days
                amount=amount%86400;

                hours=Math.floor(amount/3600);//hours
                amount=amount%3600;

                mins=Math.floor(amount/60);//minutes
                amount=amount%60;

                secs=Math.floor(amount);//seconds
                if(days != 0){out+= days+"<td class='clk' width=100>"+((days!=1)?"":"")+"";}
                if(days != 0 || hours != 0){out += hours +"<td class='clk' width=100>"+((hours!=1)?"":"")+" ";}
                if(days != 0 || hours != 0 || mins != 0){out += mins +"<td class='clk' width=100>"+((mins!=1)?"":"")+"";}
                out += secs +"</table>";
                document.getElementById('countbox').innerHTML=out;

                setTimeout("GetCount()", 1000);
        }
}

window.onload=function(){GetCount();}//call when everything has loaded

//-->
</script>
<td id="countbox"></td></table>

</html>