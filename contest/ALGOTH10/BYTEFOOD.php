<?php require("../../includes/header.php"); ?><h1>Food Shortage in Byteland</h1><div class="content">

<p></p><p align=justify><br />
Fanatics from the BBFO blew up all the food factories in the Bytelandian capital! Hurry up! There is still some food left in shops. Some shops are located in the centre, others in the suburbs, so Johnny has to decide which of them are worth visiting. Some shops can be very big and have plenty of food in them, others may be so small that food dissappears from them at an alarming rate... So? Help Johnny buy as much food as possible.<br />
<br /><br /><br />
There are <i>n</i> open shops, each of them located at position (<i>x<sub>i</sub></i>,<i>y<sub>i</sub></i>), for <i>i</i>=1,...,<i>n</i>, where 0 &lt;= <i>x<sub>i</sub></i>,<i>y<sub>i</sub></i> &lt;= 250. The distances between shops are measured using the Manhattan metric (i.e. as sums of absolute values of differences of x and y coordinates). Besides, every shop is characterized by a linear time function describing how much food is left in the shop at the moment:</p>
<p align=center><center><i>f<sub>i</sub></i> = <b>max</b>{0, <i>a<sub>i</sub></i> - <i>b<sub>i</sub></i> * <i>time</i>}</center></p>
<p align=justify>where 0 &lt;= <i>a<sub>i</sub></i> &lt;= 1000000, 0 &lt;= <i>b<sub>i</sub></i> &lt;= 1000, while <i>time</i> is the time (in minutes) that has elapsed from the moment Johnny left the house (assume that Johnny does not live in the same place as any shop). If Johnny decides to stay in a shop, he can buy at most <i>b<sub>i</sub></i> units of food per minute. Otherwise, he can move along the ortogonal system of streets of the city at a constant speed of unit distance per minute. Johnny only ever changes the action he is performing at the full minute. Because his family is slowly beginning to starve, he should be back at home not later than <i>m</i> minutes after he left.<br />
Since there are thousands of starving families in the capital, Johnny can't spent more that 1 &lt;= <i>c<sub>i</sub></i> &lt;= 10 minutes in a shop. Moreover, he will never go into the same shop twice for fear of being lynched...</p>
<p><h3>Input</h3>
</p><p></p><p align=justify><br />
The first line of input contains a single positive integer <i>t</i> &lt;= 1000, the number of test cases.</p>
<p>Each test case begins with the number of shops in the city 1 &lt;= <i>n</i> &lt;= 1000 and the deadline 1 &lt;= <i>m</i> &lt;= 5000.</p>
<p>Then the following <i>n</i> lines consist of four integers <i>x<sub>i</sub> y<sub>i</sub> a<sub>i</sub> b<sub>i</sub> c<sub>i</sub></i> each, describing the position and the parameters of the function for food availability of the <i>i</i>-th shop. At the end of every test case comes a line with two integers<i>p q</i> (between 0 and 250), corresponding to the x and y coordinates of the position of Johnny's house.<br />
<br /><br />All the input data are integers.
</p>
<p><h3>Output</h3>
</p><p></p><p align=justify><br />
Process all test cases. The correct output for the <i>i</i>-th test case takes the following form:<br />
<br /><i>i</i>	[the number of the test case, in the input order]<br />
<br /><i>s m</i> [<i>s</i> is the number of the target shop and <i>m</i> > 0 is the number of minutes spent in it].<br />
<br />At the end of the series of moves you should always write a line conisting of two zeros ('0 0').<br />
<br /><br />All the output data should be integers.
</p>
<p><h3>Scoring</h3>
</p><p></p><p align=justify><br />
The score of your program is the total amount of food that Johnny bought (summed over all the testcases in which he managed to come back home before the deadline).
</p>
<p><h3>Example</h3>
</p><p></p><p align=justify></p>
<pre>
<b>Input</b>
4
2 20
0 0 100 5 5
10 0 200 10 10
5 0
2 20
0 0 180 15 10
10 0 200 20 10
5 0
4 101
0 0 1000 20 5
20 0 200 1 5
0 20 5000 200 5
20 20 300 5 10
10 10
1 15
1 0 10 1 5
5 0

<b>Output</b>
1
2 10
0 0
2
1 10
0 0
3
3 5
4 10
2 1
0 0
4
1 5
0 0

<b>Score</b>
Score = 1261
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-12-2008</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>17 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>