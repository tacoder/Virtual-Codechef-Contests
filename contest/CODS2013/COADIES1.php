<?php require("../../includes/header.php"); ?><h1>Cross The Tiger</h1><div class="content">

<pre>
<p><b>Problem description :</b>
Raghu wants to check Rannvijay's Mental Ability.He give him a problem which is stated as:
There is a Grid of <b>N x M</b> where <b>N</b> is number of Rows and <b>M</b> is number of
Columns.The starting point is at <b>(1,1)</b> and the victory point is at <b>(N x M)</b>.
Raghu wants Rannvijay to tell him the number of ways of going from starting to victory point.
But Raghu introduced a TWIST! 
He make a Tiger sit at somewhere between the grid at <b>P x Q</b>.So,Rannvijay cannot pass 
through this point.
So, you have to help Rannvijay to calculate the number of ways to reach the victory point..</p>

<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>First line contains one integer <b>T</b>, the number of test cases. Each of the following test cases 
contains two lines.</li>
<li>First lines contain two space separated integers <b>N x M</b> denoting size of the grid.</li>
<li>Next line contain two space separated integers <b>P x Q</b> denoting the position where the Tiger is sitting.</li>
</ul>

<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each of the T test cases print one integer, the number X, such that it denotes number of 
ways of reaching from Starting to Victory point...".</li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></li>
<li><b>3x3</b> &lt;= <b>NxM</b> &lt;= <b>25x25</b></li>
<li><b>1</b>&lt;=<b>P</b>&lt;=<b>N And <b>1</b>&lt;=<b>Q</b>&lt;=<b>M</b></b></li>
<li><b>P and Q cannot be simultaneously 1.</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 3
2 2
20 20
10 10
5 5
5 5

<b>Output:</b>
2
592623304
0
</pre><p> </p>
<h3>Explanation</h3>
<p><b>First test case</b>: Of course, he cannot pass through 2x2.He can go from these two routes only:<br />
Ist Route:(1,1)->(1,2)->(1,3)->(2,3)->(3,3).<br />
2nd Route:(1,1)->(2,1)->(3,1)->(3,2)->(3,3).<br />
<b>Second test case</b>: Check Yourself.<br />
<b>Third test case</b>:As the tiger is sitting at the victory point so there in no way<br />
that Rannvijay can reach to the victory point.<br />
 ...</p>
<pre>
</pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/teamcoadies10">teamcoadies10</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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