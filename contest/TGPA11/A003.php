<?php require("../../includes/header.php"); ?><h1>The Mother-ship</h1><div class="content">

<p>On being teleported through the teleport channel , the crew reach Earth and find that the invaders have attacked the planet .<br />
They decide to join the war against the invaders .</p>
<p>Based on information available , the crew of the ship decides to analyze the probability of the Mother-ship of the invaders being in a sector and then focus their attacks on the ones with highest probability .</p>
<p>They decide the probability of the Mother-ship being in a particular sector based on the amount of protection it gets from the supporting Frigates in the grid .<br />
There are eight Frigates in the grid and no two of them are in the same sector .</p>
<p>The protection a sector receives from a Frigate is decided as follows : </p>
<p>Every Frigate has the ability to protect any sector in the row , column and diagonal it is located in .<br />
But it's ability to protect is maximum when the sector is just adjacent to it in it's row or column ( let us just call it as Protection Status 14 ) and then gradually falls at a rate of 2 units per sector as the distance increases ( as in , the sector next to its adjacent sector has Protection Status as 12 and so on ) . <br />
The protection of a sector along its diagonal is half the protection of a sector at same distance along the row or column , as in , the Protection Status of a sector adjacent to a frigate along its diagonals is 7 and it falls of as the distance increases at a rate of 1 unit per sector .</p>
<p>Also , if a sector is protected by more than one frigate , the Protection Status of that sector is the sum of the protections provided by all the Frigates for the sector in the grid .
</p>
<p><b>Example </b></p>
<p>The map of the galaxy being : 
</p>
<pre>
               64  63  62  61  60  59  58  57
               49  50  51  52  53  54  55  56
               48  47  46  45  44  43  42  41
               33  34  35  36  37  38  39  40
               32  31  30  29  28  27  26  25
               17  18  19  20  21  22  23  24
               16  15  14  13  12  11  10  09
               01  02  03  04  05  06  07  08
</pre><p></p>
<p>
In the 8x8 grid , if a Frigate is at Sector 12  , it protects the following sectors ( with the Protection Status in bracket ) .</p>
<p>Row Elements : 11(14) , 10(12) , 09(10) , 13(14) , 14(12) , 15(10) , 16(08)  . <br /><br />
<br />
Column Elements : 05(14) , 21(14) , 28(12) , 37(10) , 44(08) , 53 (06) . </p>
<p>Diagonal Elements : 22(7) , 26(6) , 40(5), 04(7) , 20(7) , 30(6) , 34(5) , 48(4) , 06(7) .  </p>
<p>
It can be taken for granted that the Mother-ship in not in a sector where a Frigate is .<br />
If more than one sector has same protection status which also happens to be the highest ,<br />
the sector numbers are to be output in an increasing order .<br />

</p>
<h3>Input</h3>
<pre>
n
N1 N2 N3 N4 N5 N6 N7 N8 
N1 N2 N3 N4 N5 N6 N7 N8 
N1 N2 N3 N4 N5 N6 N7 N8 
.................
.................
n times .
</pre><p>
<br />
<b>Where</b> </p>
<p>n : Number of test cases . <br />
0 &lt; n &lt; 32000 </p>
<p>N1 , N2 , N3 , N4 , N5 , N6 , N7 , N8 : Integers giving the location of the sectors where the frigates<br />
are located .</p>
<p>0 &lt; Nx &lt; 65 
</p>
<h3>Output</h3>
<pre>
n1 n2 n3 n4 .....
n1 n2 n3 ......
n1 n2 n3 .........
.............
.............
n cases 
</pre><p>
<br />
<b>Where</b> </p>
<p>n : Number of test cases . <br />
0 &lt; n &lt; 32000 </p>
<p>1 , n2 , n3 ........ nn : Integers denoting the sector number of each sector having the maximum Protection Status , one sequence per line . .</p>
<p>0 &lt; Nx &lt; 65 
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 2 3 4 5 6 7 8
8 9 24 25 40 41 56 67

<b>Output:</b>
10 11 12 13 14 15 
10 23 26 39 42 55
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/roy">roy</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2011</td>
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