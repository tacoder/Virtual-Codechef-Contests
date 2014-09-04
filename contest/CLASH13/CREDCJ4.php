<?php require("../../includes/header.php"); ?><h1>Snyder Man</h1><div class="content">
<p>You are Snyder Man and want to cross the walls in front of you. The walls have varying spaces between them. Using your snyder web, you can reach a height of H-[X/2] on the next wall, where X is the distance between the walls and H is your height on the current wall.<br />
You can crawl up or down at the speed 'C' . Given a series of walls along with your final and initial positions,  output the minimum possible time required to cross the walls.
</p>
<p>
The distance X covered during jumps takes time <b>t=(X / (n^2 + 1))</b>, where n in the number of the wall you are currently on.<br />
Wall numbers start from 1, not zero.
</p>
<p><h3>Input</h3>
</p><p>The first line contains the number of test cases, <b>T.</b><br /><br />
<b>T</b> test cases follow.<br /><br />
For each test case, <br /><br />
The first line contains the number of walls <b>W</b>.<br /><br />
The next line contains the height <b>H</b> of the starting and end point seperated by a space.<br /><br />
The next line contains <b>W-1</b> real numbers specifying the distances <b>X</b> between the <b>W</b> number of walls in this form :<br />
X(W1,W2) X(W2,W3) X(W3,W4) ...<br />
<br /><br />
The next line contains the crawl speed <b>C</b>.<br /></p>
<p>For each case, the initial position specifies the position on Wall 1 while the final position specifies the position on Wall W.
</p>
<h3>Output</h3>
<p>For each test case, output on a single line the minimum possible time taken by Snyder man to travel from the initial position to the final position.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
76
413.222862 1830.717106
4418.307489 3247.661047 2790.918310 50.274133 4323.737944 <br />2449.028352 4873.145599 2802.747425 2117.035863 3773.017525 <br />2556.703947 4801.156783 3336.887981 4977.807188 3163.619914 <br />4334.064151 2373.365955 1679.835151 1043.493875 2252.698063 <br />1877.208214 4761.522211 696.219126 4523.180168 903.643660 <br />1673.473659 4548.577968 1376.014067 467.756332 4960.800830 <br />3205.731173 4885.063823 3207.461878 995.649483 4934.337956 <br />2530.199822 3443.677835 4806.483555 331.947246 559.713700 <br />3578.501082 2887.651193 359.870483 1914.389063 2864.458383 <br />3522.490397 1247.453216 236.824338 201.325549 2289.947091 <br />2488.522401 2077.533765 2050.469305 3183.741527 1599.713933 <br />2953.112965 4856.215189 1147.291902 4328.127032 322.971520 <br />1107.092732 2532.858205 207.035343 4313.554609 3527.507691 <br />140.373299 1842.754431 1970.185525 4945.856856 2173.701680 <br />2528.899225 3523.357938 60.352873 2887.769709 436.747001 
<br />59.456225
29
1683.200218 3159.635595
1609.585657 3972.147311 647.157996 3686.119422 1021.616617 <br />3829.899525 284.833356 3973.729582 3685.114714 1431.125257 <br />3300.856617 4007.086234 2537.217989 832.714822 4213.121579 <br />1849.772599 4359.222513 4352.494878 3691.527033 1328.408040 <br />4297.351734 864.228713 3856.307265 2819.709672 923.581586 <br />1743.076976 3255.456676 3846.392845 
64.006742

<b>Output:</b>
5460.565504
2946.679100
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ashmew2">ashmew2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-08-2013</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>