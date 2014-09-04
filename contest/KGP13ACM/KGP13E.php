<?php require("../../includes/header.php"); ?><h1>One-Way Roads</h1><div class="content">
<p>A city has a road network with all roads arranged in a <b>K</b> x <b>K</b> square grid, with intersections  (total (<b>K</b>+1) x (<b>K</b>+1)) numbered as shown below (for an example 4 x 4 grid).</p>
<div align="center">
<img width="200px" src="http://www.codechef.com/download/grid_kgp.png" />
</div>
<p>There are no one-way roads in the city now. For ease of movement of cars, the traffic department plans to convert all roads to one-way, while ensuring that any intersection can be reached from any other intersection. However, the fire brigade is located beside intersection <b>A</b>, and a set of factories with high fire risks are located in a set of intersections <b>J</b>. It is known that no intersection in <b>J</b> can be reached from <b>A</b> without making a turn somewhere, irrespective of which roads are made one-way or the route followed. The fire brigade has requested the traffic department to convert the roads to one-way in such a manner such that fire trucks starting from <b>A</b> can reach all of the intersections in <b>J</b> passing through the minimum total number of intersections possible to avoid delay. How should the traffic department decide which road to set which way?</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b>.</p>
<p>For each test case, the first line contains <b>K</b>, the dimension of the grid. The second line contains the intersection number <b>A </b>(an integer indicating the intersection number in the numbering scheme shown). The third line contains the number of elements in <b>J</b>, followed by the intersection numbers of the elements in <b>J</b>.</p>
<h3>Output</h3>
<p>For each test case, in the first line, print the case number, followed by a colon, followed by a single space, followed by the total number of intersections passed to reach all elements of <b>J</b> from <b>A</b>, <b>not counting intersection A or the intersections in J</b>. Then print 2<b>K</b>(<b>K</b>+1) line, one for each possible edge in the grid. Each of these lines should contain (in this order): an integer <b>x</b>, an integer <b>y</b>, and an integer <b>d</b> from the set {0,1} where <b>x</b> and <b>y</b> are valid intersection numbers, and <b>d</b>=0 if the one-way is set from <b>x</b> to <b>y</b> or <b>d</b>=1 if it is set from <b>y</b> to <b>x</b>. The two nodes in an edge can be printed in any order as long as the correct d is printed. Similarly, the edges can be printed in any order.</p>
<h3>Constraints</h3>
<p>0 &lt; <b>N</b> ≤ 3</p>
<p>1 &lt; <b>K</b> ≤ 100</p>
<p>1 ≤ |<b>J</b>| ≤ <b>K</b><sup>2</sup> (|<b>J</b>| integers indicating the intersection numbers in the numbering scheme shown)</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
2
4
2 6 2

<b>Output:</b>
Case 1: 2
0 1 1
4 5 0
2 1 1
6 7 1
1 4 1
2 5 0
3 4 0
7 4 1
0 3 0
5 8 0
3 6 1
7 8 1

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>