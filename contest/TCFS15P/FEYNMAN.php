<?php require("../../includes/header.php"); ?><h1>Feynman and Manufacturing Plant</h1><div class="content">
<p>There us a story told by Richard Feynman in the book "Surely You're Joking Mr. Feynman" where he describes inspecting a manufacturing plant. The plant has <b> N </b> chambers and <b> M </b> valves, each valve connects two chambers. The valves are <b> bidirectional </b>, i.e., substance can flow in either direction through the valve. <br /></p>
<p>Substance is manufactured in chamber 1 and flows to chamber N, where is exits the plant. <br /></p>
<p>Due to it's explosive nature, the substance should not be allowed to accumulate. Hence the plant has the property that failure of a single valve cannot prevent substance flow from chamber 1 to chamber N. (Failure of a valve means that substance cannot flow in either direction through that valve). <br /></p>
<p>Feynman "accidentally" found a valve that violated the condition mentioned above. Can you? <br /><br />
<br /><br />
INPUT : <br /><br />
First line contains an integer T, number of test cases <br /><br />
Each testcase starts with a line containing two space-separated integers, N and M <br /><br />
M lines follow, each containing two space-separated integers A and B, indicating that there is a valve from chamber A to chamber B. <br /></p>
<p>Assume that it is possible for substance to flow from any chamber to any other in the input. <br /><br />
<br /><br />
OUTPUT : <br /><br />
For each testcase, print the <b>total number of valves</b> which violate the mentioned condition. <br /><br />
<br /><br />
SAMPLE INPUT : <br /><br />
1 <br /><br />
4 3 <br /><br />
1 2 <br /><br />
2 3 <br /><br />
3 4 <br /><br />
<br /><br />
SAMPLE OUTPUT : <br /><br />
3 <br /><br />
<br /><br />
CONSTRAINTS : <br /><br />
1 &lt;= T &lt;= 10 <br /><br />
1 &lt;= N &lt;= 100000 <br /><br />
1 &lt;= M &lt;= 200000</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-08-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>