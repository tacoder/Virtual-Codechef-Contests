<?php require("../../includes/header.php"); ?><h1>Racing Competition</h1><div class="content">
<p> Ramesh and Suresh are having a racing competition to see who is the best runner. They don't want to decide this in a single race, so they choose a number <b>N</b> which is the minimum number of points one of them should have to be declared the winner. Here are the rules: </p>
<ol>
<li> Both start with a score of zero. </li>
<li> No race ends in a tie. Whoever wins, gets a point. </li>
<li> If one of them gets to a score of <b>N</b> while the other's score is less than or equal to <b>N</b>-2, he is the winner. </li>
<li> If both of them reach a score of <b>N</b>-1, they continue to race until there is an absolute score difference of 2, in which case the person having the higher score at the end is declared the winner. </li>
</ol>
<p><br /></p>
<p> You will be given <b>N</b>, <b>R</b> (Ramesh's score) and <b>S</b> (Suresh's score). </p>
<h3>Input Description</h3>
<p>First line contains <b>N</b><br />
Second line contains <b>R</b><br />
Third line contains <b>S</b></p>
<h3>Output Description</h3>
<p>Print the number of different sequences of getting points that can lead to these scores at the end. If no sequences end with this score, print 0. Since there can be too many sequences that end in the given score, output your answer modulo 1000000007. </p>
<h3>Constraints</h3>
<p>1 &lt;= N &lt;= 30,<br /><br />
0 &lt;= R &lt;= 10^9,<br /><br />
0 &lt;= S &lt;= 10^9<br /></p>
<h3>Example 1</h3>
<p><b>Input:</b> <br /><br />
25<br /><br />
3<br /><br />
25<br /><br />
<br /></p>
<p><b>Output:</b> <br /><br />
2925<br />
<br /></p>
<h3>Example 2</h3>
<p><b>Input:</b> <br /><br />
20<br /><br />
10<br /><br />
10<br /><br />
<br /></p>
<p><b>Output:</b> <br /><br />
0<br />
<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-10-2014</td>
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