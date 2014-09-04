<?php require("../../includes/header.php"); ?><h1>Across the River</h1><div class="content">
<p>
Chef Ciel would like to make a bridge on the river in order to purchase cooking ingredients more easily. The river is an infinitely long straight line with width <b>W</b>. To be more specific, the river is a set of the all points on <b>0 ≤ y ≤ W</b> in <b>xy</b>-plane.
</p>

<p>
There are <b>N</b> piles on the river, and <b>M</b> types of wooden disks are available.
The location of the <b>k</b>-th pile is <b>(X<sub>k</sub>, Y<sub>k</sub>)</b>.
The <b>k</b>-th type of wooden disks has radius <b>R<sub>k</sub></b>, and its price is <b>C<sub>k</sub></b> per disk.
</p>

<p>
Ciel can buy wooden disks as many as she likes, and Ciel can put them on the river.
For each wooden disk, its center must be one of the locations <b>(X<sub>k</sub>, Y<sub>k</sub>)</b> of piles.
Note that some part of wooden disks may be on the ground (<b>y &lt; 0</b>, <b>W &lt; y</b>) or other piles.
</p>

<p>
Ciel can move only on <b>y = 0</b>, on <b>y = W</b>, and on wooden disks.
What is the minimum cost to make it possible to move from <b>y = 0</b> to <b>y = W</b>.
</p>


<h3>Input</h3>
<p>
The first line contains an integer <b>T</b>, the number of test cases.
Then <b>T</b> test cases follow.
The first line for each test case has <b>3</b> space-sparated integers <b>N</b>, <b>M</b> and <b>W</b>.
Next <b>N</b> lines has <b>2</b> space-separated integers <b>X<sub>k</sub></b> and <b>Y<sub>k</sub></b>.
Then next <b>M</b> lines has <b>2</b> space-separated integers <b>R<sub>k</sub></b> and <b>C<sub>k</sub></b>.
</p>

<h3>Output</h3>
<p>
For each test case, print the minimum cost to make it possible to move from <b>y = 0</b> to <b>y = W</b>.
If it is impossible, print "impossible" without quotes.
</p>

<h3>Constraints</h3>
<p>
<b>1 ≤ T ≤ 10</b><br />
<b>1 ≤ N ≤ 250</b><br />
<b>1 ≤ M ≤ 250</b><br />
<b>2 ≤ W ≤ 1000000000 (10<sup>9</sup>)</b><br />
<b>0 ≤ X<sub>k</sub> ≤ 1000000000 (10<sup>9</sup>)</b><br />
<b>1 ≤ Y<sub>k</sub> &lt; W</b><br />
<b>1 ≤ R<sub>k</sub> ≤ 1000000000 (10<sup>9</sup>)</b><br />
<b>1 ≤ C<sub>k</sub> ≤ 1000000 (10<sup>6</sup>)</b><br />
</p>

<h3>Sample</h3>
<pre>
<b>Input</b>
3
11 4 13
19 10
8 7
11 4
26 1
4 2
15 4
19 4
1 9
4 6
19 5
15 10
2 1
3 100
4 10000
5 1000000
11 4 13
19 10
8 7
11 4
26 1
4 2
15 4
19 4
1 9
4 6
19 5
15 10
2 1
3 2
4 3
5 4
1 1 1000000000
0 500000000
1 1

<b>Output</b>
206
5
impossible

</pre>

<h3>Explanation</h3>
<p>
The following figure indicates the optimal way for the first case.
</p>
<img src="http://www.codechef.com/download/RIVPILE.png" width="515" height="257" />    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-09-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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