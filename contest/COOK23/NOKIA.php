<?php require("../../includes/header.php"); ?><h1>Connecting Soldiers</h1><div class="content">

<p align="justify">
To protect people from evil,<br />
a long and tall wall was constructed a few years ago.<br />
But just a wall is not safe, there should also be soldiers on it,<br />
always keeping vigil.<br />
The wall is very long and connects the left and the right towers.<br />
There are exactly <b>N</b> spots (numbered 1 to <b>N</b>) on the wall for soldiers.<br />
The <i>K</i><sup>th</sup> spot is <i>K</i> miles far from the left tower and (<b>N</b>+1-<i>K</i>) miles from the right tower.</p>
<p align="justify">
Given a permutation of spots <i>P</i> of {1, 2, ..., <b>N</b>}, soldiers occupy the <b>N</b> spots in that order.<br />
The <i>P</i>[<i>i</i>]<sup>th</sup> spot is occupied before the <i>P</i>[<i>i</i>+1]<sup>th</sup> spot.<br />
When a soldier occupies a spot, he is connected to his nearest soldier already placed to his left.<br />
If there is no soldier to his left, he is connected to the left tower. The same is the case with right side.<br />
A connection between two spots requires a wire of length equal to the distance between the two.</p>
<p align="justify">
The realm has already purchased a wire of <b>M</b> miles long from Nokia,<br />
possibly the wire will be cut into smaller length wires.<br />
As we can observe, the total length of the used wire depends on the permutation of the spots <i>P</i>. Help the realm in minimizing the length of the unused wire. If there is not enough wire, output -1.</p>
<h3>Input</h3>

<p align="justify">First line contains an integer <b>T</b> (number of test cases, 1 ≤ <b>T</b> ≤ 10 ). Each of the next <b>T</b> lines contains two integers <b>N M</b>, as explained in the problem statement (1 ≤ <b>N</b> ≤ 30 , 1 ≤ <b>M</b> ≤ 1000).</p>
<h3>Output</h3>

<p align="justify">For each test case, output the minimum length of the unused wire, or -1 if the the wire is not sufficient.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
3 8
3 9
2 4
5 25

<b>Output:</b>
0
0
-1
5
</pre><p>
<b>Explanation:</b><br />
In the 1st case, for example, the permutation <i>P</i> = {2, 1, 3} will use the exact 8 miles wires in total.</p>
<p>In the 2nd case, for example, the permutation <i>P</i> = {1, 3, 2} will use the exact 9 miles wires in total.</p>
<p>To understand the first two cases, you can see the following figures:<br />
<img src="http://www.codechef.com/download/NOKIA1.png" width="500" height="683" /></p>
<p>
<img src="http://www.codechef.com/download/NOKIA2.png" width="500" height="692" /></p>
<p>
In the 3rd case, the minimum length of wire required is 5, for any of the permutations {1,2} or {2,1}, so length 4 is not sufficient.</p>
<p>In the 4th case, for the permutation {1, 2, 3, 4, 5} we need the maximum length of the wire = 20. So minimum possible unused wire length = 25 - 20 = 5.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-06-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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