<?php require("../../includes/header.php"); ?><h1>Fill Candies</h1><div class="content">

<p>There are N boxes numbered from 1..N which need to be filled with candies. Assume there are infinite candies. The boxes are arranged in increasing order of capacity, and the i<sup>th</sup> box has capacity i. Every box has a specific cost c<sub>i</sub>. You fill candies in rounds. In every round, you pick a subset of boxes and fill them with candies. This subset should be such that each subsequent box picked in a round should be more spacious than the previous one. Also, the difference in cost of consecutive boxes should be at least K. <br/><br/><br />
What is the least number of rounds in which all boxes could be filled. </br/></br/></p>
<h3>Input</h3>
<p>The first line contains the number of test cases T. T test cases follow. <br/><br />
Each case contains an integer N and K on the first line, followed by integers c<sub>1</sub>,...,c<sub>n</sub> on the second line. <br/><br />
1 &lt;= T &lt;= 100 <br/><br />
1 &lt;= N &lt;= 300 <br/><br />
1 &lt;= ci &lt;= 1000 <br/><br />
1 &lt;= K &lt;= 1000 <br/></br/></br/></br/></br/></br/></br/></p>
<h3>Output</h3>
<p>Output T lines, one for each test case, containing the minimum number of rounds in which all boxes could be filled.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 2
5 4 7
5 1
5 3 4 5 6


<b>Output:</b>
2
1
</pre><p>
<br/><br />
<b>Explanation:</b></br/></p>
<p>For the first example, you can fill the boxes of cost 5 and 7 in the first round and the box with cost 4 in the next round. Note that the boxes with cost 5 and 4 cannot be filled consecutively because the costs should differ by at least K (which is 2). Also, the boxes cannot be filled in order 5,7,4 in one round because the boxes filled in a round should be in increasing capacity.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivamagarwal">shivamagarwal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 - 20 sec</td>
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