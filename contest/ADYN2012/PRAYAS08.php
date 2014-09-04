<?php require("../../includes/header.php"); ?><h1>Vicky For Vendetta</h1><div class="content">

<p>Revenge is once again high on the mind of obnoxious Vicky. Vicky is chasing <b>N</b> of his friends including Abhishek, Atishay, Ankit and Abhijeet who he thinks have stolen his candy. The <b>i</b>th friend is at <b>( xi, yi )</b> at <b>t = 0</b> and is moving with a constant velocity of <b>( vxi, vyi )</b>, such that the <b>i</b>th friend is at <b>( xi + vxi, yi + vyi)</b> at <b>t = 1</b> and at <b>( xi + 2*vxi,  yi + 2*vyi )</b> and so on. Vicky himself is at <b>(x, y)</b> and has <b>M</b> possible choices of velocity to move with. However once he has chosen a velocity he can move only with that constant velocity throughout the journey. The way these velocities are expressed and the way Vicky moves after he has chosen a particular velocity follow the same constraints as that of his friends. <br />
Vicky has got one flash bomb and wants to burst it at a location (which is his own location at that moment) where he can drive as many of his friends blind as possible. The range till which the bomb has its effect is different for different friends. More formally, the range for the <b>i</b>th friend is <b>ri</b>, and the <b>i</b>th friend will be affected by the bomb only if he is within the range <b>ri</b> of the bomb. <br />
Vicky intends to choose and move with the velocity that will take him to a location where he can harm as many of his friends as possible. Help obnoxious Vicky find out the number of friends he can hurt by making the best choice.</p>
<h3>Input</h3>
<p>The first line of the input file consists of two space separated integers <b>M</b> and <b>N</b>, followed by another line containing two space separated integer <b>x, y</b>. This is followed by <b>M</b> lines containing <b>M</b> possible velocities to choose from. More formally, the <b>j</b>th line contains two space separated integers <b>vxj</b> and <b>vyj</b> Vicky can choose to move with. Thereafter <b>N</b> lines follow describing <b>N</b> different friends. The <b>i</b>th line  of these N lines contains <b>5</b> space separated integers <b>xi, yi, vxi, vyi, ri</b>.</p>
<h3>Output</h3>
<p>Print a single integer which is the maximum number of friends Vicky can hurt making the optimal choice.</p>
<h3>Constraints</h3>
<pre>
1 &lt;= M &lt;= 1000
1 &lt;= N  &lt;= 1000
-1000 &lt;= x, y, vx, vy, xi, yi, vxi, vyi &lt;= 1000
1 &lt;= ri &lt;= 2500
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
1 3 
0 0 
0 2
0 -3 0 4 1
1 2 -1 1 1
1 -2 2 -1 1

<b>Output:</b>
2

<b>Explanation:</b>
At time 1.5, Vicky is at point (0, 3), and the three friends are at points (0, 3), (-0.5, 3.5), and (4, -3.5).<br/>The first two friends are within 1 unit of Vicky, while the third will never be within 1 unit of Vicky.
</br/></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/the123abhishek">the123abhishek</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>