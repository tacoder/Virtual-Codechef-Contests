<?php require("../../includes/header.php"); ?><h1>Travelling Nomad</h1><div class="content">
<p> </p>
<h3>Problem description.</h3>
<p> <br />
A traveler has to travel from a source to a destination along a straight path,the locations of which are given as <b>s1</b> and <b>d1</b>. On his way he encounters <b>N</b> townships each consisting of any no of houses, all located along the straight path,the locations of which are given by <b>t1,t2,.....tk</b>. <br />
Each township must have at least a single house and no house can be in more than <b>1</b> township.The source and destination are not in any township.The traveler must stop in every township.Again,he also must stop in only a single house in a township.The traveler can stop in a house depending on whether that house is reachable from the house he stayed in the previous township,(i.e  the maximum distance <b>M</b> the traveler is allowed to travel before resting will be specified). </p>
<p>More over he cannot stay in any house which is not included in any township. You have to find  the no of ways to reach the destination from the source.<br />
<br />
Assume that all the houses in the first township are reachable from the source and the destination is reachable from all the houses in the last township irrespective of the value of M.
</p>
<h3>Input</h3>
<p>
The first line contains the number of test cases <b>T</b><br />
For each test case, the first line contains two space separated integers <b>A</b> and <b>M</b>.  A is the total no of houses including source and destination and M is the maximum distance the traveler is allowed to travel before resting.<br />
 <br />
Then A lines will follow and the <b>i</b>th line will have the value of <b>ti</b>. The input will be such that a solution will always exist.The locations will be given in ascending order.<br />
<br />
Then  the next line will contain the number of townships <b>N</b>. Then <b>N</b> lines follow with each line specifying the starting and ending index of the houses located in that township given in ascending order(i.e the indexes of the array where the house locations are stored.Index position is assumed to start from 0).</p>

<h3>Output</h3>

<p>
 Output in a new line the no of possible ways to reach from source to destination..<br />
For two consecutive test cases, the outputs should have a gap of one line between them.
</p>
<h3>Constraints</h3>
<ul>
<li> <b>2</b> &lt; <b>A</b> &lt;= <b>1000</b> </li>
<li> <b>1</b> &lt;= <b>M</b> &lt;= <b>500</b> </li>
<li> <b>s1</b> &lt; <b>t1</b> &lt; <b>t2</b> &lt; ....... &lt; <b>tk</b> &lt; <b>d1</b></li>
<li> <b>1</b> &lt;= <b>N</b> &lt;= <b>A-2</b></li>
<li> <b>0</b> &lt;= <b>ti</b> &lt;= <b>5000</b> </li>
</ul>
<p> <br />
Starting index of a house in a township, <b>a</b> &gt; Ending index of a house in that township, <b>b</b><br />
Distance between the end houses in two consecutive townships,<br />
<b>D</b> &gt;= <b>M</b><br />
Distance between the starting  houses in two consecutive townships,<b>L</b> &lt;= <b>M</b><br />
</p>
<p>The source must be reachable to all the houses in the first township<br />
All houses in the last township must be reachable to the destination
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<p>
1
8  3
0
2
3
4
6
8
9
11
3
2 2
4 4
5 6
</p>

<b>Output:</b>
<p> 
2
</p>
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> <br />
Here the two paths are<br />
0-&gt;3-&gt;6-&gt;8-&gt;11 <br />
0-&gt;3-&gt;6-&gt;9-&gt;11
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/codemaster_tx">codemaster_tx</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-10-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>