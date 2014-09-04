<?php require("../../includes/header.php"); ?><h1>Two Roads</h1><div class="content">
<p> </p>
<p>Byteland is notorious for its poor transportation system. There are <b>N</b> villages located far away from each other. So the only way of going from one village to another is using the narrow pathways. But now it's time to make some changes. People in Byteland are going to improve the transportation system in their own way. They have planned to build two straight roads. These roads will not necessary connect any cities but they should decrease the time of traveling between some cities. People can use a pathway to go from one city to the nearest point on the road. Then they can move [along the road] to the point of the road that is the nearest to their destination. And finally, they can use another pathway to move from that point to the destination.</p>
<p>Let <b>d</b> be the distance from the city to the closest point that belongs to one of the roads, then the sadness of that city will be equal to <b>d<sup>2</sup></b>. The sadness of the whole country is the average of the sadness of all cities. Can you help Byteland to find the plan that will minimize the sadness of the country? You can assume that:</p>
<ul>
<li>The cities are considered to be points on the plane and the roads are considered to be line segments.</li>
<li>A road can have arbitrary length if that reduces the sadness of the country.</li>
<li>The two roads may have a common point.</li>
<li>A road can go through some cities (so the distance from these cities to the road is 0).</li>
<li>No 3 or more cities lie on the same line.</li>
</ul>
<h3>Input</h3>
<p>The first line contains an integer <b>N</b>. The next <b>N</b> lines give co-ordinates of the <b>N</b> cities. The <b>i</b>-th line contains two real numbers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b> that give co-ordinates of the <b>i</b>-th city.</p>
<h3>Output</h3>
<p>Print out the minimum sadness of the country with absolute error less than <b>10<sup>-6</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>3</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>0.0</b> ≤ <b>x<sub> i </sub> </b>, <b>y<sub> i </sub> </b> ≤ <b>1000.0</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 1
2 2
10 0
20 0

<b>Output:</b>
0
</pre>
<h3>Explanation</h3>
<p>The first road goes through the first two cities and the second road goes through the last two cities.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-08-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>