<?php require("../../includes/header.php"); ?><h1>The Route</h1><div class="content">

<h3>The Beginning</h3>
<p>This is a story of the time when human kind had spread its presence through out the galaxy and had established an empire in its own right .<br />
<p/>
<p>To rule the galaxy effectively and maintain law and order , the galaxy had been divided into sixty four sectors and laws were imposed as to how trade and other activities that were to take place be implemented  , of which the the vitals ones being :<br />
<p/>
<p>One can trade only a fixed amount of commodities , which has been predefined by the senate , in a sector .</p>
<p>One can travel only to the sectors just after or before a given sector and in no other way .<br />
<p/>
<p>The map of the galaxy being :<br />
<p/>
<p>          64  63  62  61  60  59  58  57<br />
          49  50  51  52  53  54  55  56<br />
          48  47  46  45  44  43  42  41<br />
          33  34  35  36  37  38  39  40<br />
          32  31  30  29  28  27  26  25<br />
          17  18  19  20  21  22  23  24<br />
          16  15  14  13  12  11  10  09<br />
          01  02  03  04  05  06  07  08</p>
<p>If you are in Sector 05 , you can either go to Sector 06 or Sector 04 .<br/><br />
If you are in Sector 09 , you can either go to Sector 08 or Sector 10 .<br />
<p/>
<p>To extend the empire further , the Senate decides to send an expedition beyond their current reaches of the Empire .<br />
The expedition was to travel through the galaxy following the laws and and get to Sector 64 .<br />
There , the Expedition would be fitted with Hyper Drives which would take them beyond the Galaxy .<br />
So a crew of the best explorers were chosen for the mission and they left on the Expedition , unaware of what lay ahead .</p>
<h3>The Route </h3>
<p>
The space craft can carry a maximum amount of fuel of 5 units .<br /> <br />
It starts its journey from Sector 1 , where Earth is located and is given the amount of fuel present on Earth .<br />
For every sector traversed into , it loses one unit of fuel .<br />
The spacecraft may land in  any sector to refill its fuel supplies .<br />
The amount of fuel available on a base varies between 1 to 5 .<br />
<p/>
<p>The space craft has to pick up all the fuel that there is on offer at a given base in accordance with the trade agreements and it can not carry more fuel than its maximum capacity which implies that the maximum fuel on a base station it lands on can not be more than the difference between its maximum fuel capacity and fuel left in its reserve .
</p><p>When it lands on a base station , its data base is uploaded with the information about the amount of fuel present in the next five immediate bases based on which the captain decides their next base halt .<br />
<p/>
<p>The captain decides their halt in a way so as to ensure that they have the maximum amount of fuel left by the time they traverse into the last sector in their current database (which must not be their destination , Sector 64 ) and in case more than one option are available , the one that is farthest from their current location is chosen .<br />
In case the last sector on their database is Sector 64 , and the space craft can travel the distance without making any further landings , the captain will ensure that they make no further landings even if by the time they traverse into Sector 64 , they have no fuel left .<br />
</p><p />
</p><p>The captain also ensures that information about their next halt is sent to the head of the current base station before proceeding so that a rescue mission can be carried in case something goes wrong . <br /></p>
<h3>Input</h3>
<p>
<br />
n<br />
n1 n2 n3 n4 n5 ......... n64<br />
n1 n2 n3 n4 n5 ......... n64<br />
n1 n2 n3 n4 n5............n64<br />
..........<br />
..........<br />
..........<br />
n times </p>
<p><b>Where :</b></p>
<p>n : Number of test cases .<br />
0 &lt; n &lt; 32000</p>
<p>n1 , n2 , n3 , n4 , n5 , n6 ............   n64  :  Amount of fuel present at each base , starting from Sector 1 . <br />
0 &lt; nx &lt; 6 .
</p>
<h3>Output</h3>
<p>
<br />
h1 h2 h3 h4 ....... hn <br />
h1 h2 .................. hn <br />
..................<br />
.................<br />
for n cases </p>
<p><b>Where :</b> </p>
<p>h1 , h2 , h3 , .............hn : Sectors halted at , including the last sector , Sector 64 .<br />
0 &lt; hx &lt; 64 
</p>
<h3>Example</h3>
<p><b>Input : </b><br />
<br />
1<br />
1 2 3 4 5 1 2 3 4 5 1 2 3 4 5 1 2 3 4 5 1 2 3 4 5 1 2 3 4 5 1 2 3 4 5 1 2 3 4 5 1 2 3 4 5 1 2 3 4 5 1 2 3 4 5 1 2 3 4 5 1 2 3 4 </p>
<p><b>Output:</b><br />
<br />
1 2 4 8 11 12 14 18 21 22 24 28 31 32 34 38 41 42 44 48 51 52 54 58 61 62 64 </p>
</p/></p></p/></p></p/></br/></p></p/></p></p/></p></p/></p></p/></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/roy">roy</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>