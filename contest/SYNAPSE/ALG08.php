<?php require("../../includes/header.php"); ?><h1>Cold-Drink</h1><div class="content">

<p>Ram needs to transport cold-drink bottles. He takes a box and divides the box into AxB cells. In each cell he can place atmost one bottle. He then decides that he wants to put cushion around each bottle so now he will not be able to put two bottles adjacent to each other. He must just have placed the bottle in alternate fashion. But when he saw the box there were certain locations that were not suitable to put the bottles. He has a problem to know how many bottles can be accomodated into this box</p>
<h3>Input</h3>
<p> 1st  Line gives number of the test cases<br />
1st line of each test case gives number of bottles<br />
2nd line gives values of A and B values<br />
2nd line is followed by AxB matrix of 0s and 1s where 0 for unsuitable location and 1 for suitable location.</p>
<h3>Output</h3>
<p> maximum number of bottle that can be accomodated into the box and no of ways it can be placed</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
2 2
01
11
4
3 4
1111
1001
1111

<b>Output:</b>
3 9
1 2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/illume">illume</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2011</td>
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