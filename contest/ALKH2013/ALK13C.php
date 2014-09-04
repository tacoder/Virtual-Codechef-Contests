<?php require("../../includes/header.php"); ?><h1>Divide And Rule</h1><div class="content">
<p>East India company wants to eliminate all the pirates of the Carribbean. Lord Cutler Beckett has come up with a brilliant plan to crush all that's left of the pirates. Consider the whole sea of caribbean as a grid of infinite width and length, Beckett decides that he will use the oldest and the greatest strategy of all times - Divide and Rule. The sea contains <b>N</b> islands. Beckett has analysed the entire Carribean and marked the coordinates of each island present as <b>(X<sub>i</sub>,Y<sub>i</sub>)</b> . The islands are assumed to be a point lying exactly on the grid point.</p>
<p>To destroy the pirates, at each pirate island he will construct two mutually perpendicular infinite length fences parallel to x and y axis crossing each other only at the island itself. This will create many partitions of the sea which will then be attacked separately to outpower the pirates. Fences constructed may overlap or cut each other but each fence extends to the infinity in both X and Y direction. Only partitions with non-zero area will be considered, thus all the overlapping fences need to be considered as one fence only. </p>
<p>The Beckett needs to train his huge army in a number of battalions to kill the pirates. One battalion can attack one and only one partition of the grid. The battalions are trained enough to beat any number of pirates, thus they always win in their partition. Your task is to calculate the number of battalions to be trained to make the pirate race extinct.</p>
<h3>Input </h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
The first line of each test case gives the number of islands <b>N</b>. The next <b>N</b> lines will contain two integers, <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> denoting the coordinates of the <b>i</b><sup>th</sup> island.</p>
<h3>Output</h3>
<p>For each test case, output a single integer representing the number of battalions which will have to be trained by Beckett.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></li>
<li><b>0</b> &lt;= <b>N</b> &lt;= <b>10000</b></li>
<li><b>-100000</b> &lt;= <b>X<sub>i</sub> , Y<sub>i</sub></b> &lt;= <b>100000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input</b>
2
2
2 2
3 3
2
2 2
3 2
</pre><pre><b>Output</b>
9
6
</pre><p><br /><br />
<b>Explanation</b>
</p><p>
In the first test case there will be 9 partitions as shown in the figure below</p>
<p><img src="http://i.imgur.com/2FCJr1z.jpg?1" /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divanshu">divanshu</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-10-2013</td>
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