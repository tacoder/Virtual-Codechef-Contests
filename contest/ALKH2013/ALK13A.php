<?php require("../../includes/header.php"); ?><h1>Rescue Jack Sparrow</h1><div class="content">
<p>Will, Elizabeth, Barbossa, and the entire crew of Black Pearl are set out to rescue Captain Jack Sparrow from Davy Jones's Locker. The escape map is a graph with <b>N</b> islands and <b>M</b> routes. Each route represents a bi-directional way from one island to another. The <b>N</b> islands are numbered from <b>1</b> to <b>N</b>. With each route associated is end-points <b>(A<sub>i</sub>,B<sub>i</sub>)</b> and the length of the route <b>C<sub>i</sub></b>. Since Davy Jones have left some of his servants at each island, there is some danger level associated with each island <b>D<sub>j</sub></b>. The crew wants to escape out of the locker of davy jones alive. They need to go from Davy Jone's island to their home following the given routes. As a matter of fact, their ship Black Pearl have only <b>K</b> units of fuel left in it. Black Pearl travels <b>1 unit</b> with <b>1 unit of fuel</b>. You need to tell Jack the minimum danger level with which the crew can escape to determine their chances of survival. If it is impossible to escape, the entire crew is doomed and you should <b>print -1</b>. The danger level of a path is defined as the maximum of danger level out of all the nodes present in that particular path.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of each test case would contain two integers, <b>N</b> and <b>K</b>. The following line would contain <b>N</b> integers separated by a single space representing <b>D<sub>j</sub></b>, the danger level of each island. The next line would contain three integers, <b>M</b>, <b>X</b> and <b>Y</b>, representing the number of edges, Davy Jones island and Jack's home respectively. The next <b>M</b> lines contains the routes on the map given by three integers, <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> and <b>C<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing one integer, the danger level of the required path or -1 if no such path is possible.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>N</b> &lt;= <b>1000</b></li>
<li><b>1</b> &lt;= <b>M</b> &lt;= <b>10000</b></li>
<li><b>0</b> &lt;= <b>C<sub>i</sub>, K</b> &lt;= <b>100000</b></li>
<li><b>0</b> &lt;= <b>D<sub>j</sub></b> &lt;= <b>10<sup>15</sup></b></li>
<li><b>1</b> &lt;= <b> A<sub>i</sub>, B<sub>i</sub>, X, Y</b> &lt;= <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input</b>
1
6 10000
20 30 15 5 40 15
8 1 4
1 2 1
2 3 7
3 4 4
4 5 10
6 5 3
6 1 2
2 5 5
3 6 9
</pre><pre><b>Output</b>
20
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divanshu">divanshu</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
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