<?php require("../../includes/header.php"); ?><h1>Head over meals</h1><div class="content">

<p>Adam, an Adasaurus, works for a dish washing company. He comes across a pile consisting of N plates with a number tag each placed one on top of the other. He wishes to arrange the plates in the increasing order of the tag number. Though a plate can be pulled out of the stand, but it can only be returned to the top of the pile. Therefore, he can only sort the plates by repeatedly pulling out a plate and placing it on the top of the pile.</p>
<p>The plates are labelled with numbers from 1 to N. So, they need to be ordered as (1, 2, ..., N), counting from the top. For example, if N = 3 and the starting order is (1, 3, 2), two moves are sufficient. First, pulling out the plate number 2 and placing it on top makes the order (2, 1, 3) and similarly with plate number 1 makes the final order (1, 2, 3).</p>
<p>You need to help Adam sort the given starting order in minimum number of moves.</p>
<h3>Input</h3>
<p>The first input line contains the integer N (N &lt;= 300 000) and the subsequent N lines contain a single positive integer representing the order of Adam's plates from top to bottom of the pile. Also note that these integers 1, 2, 3,..., N appear exactly once.</p>
<h3>Output</h3>
<p>Print the minimum number of moves required on a single line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1 
3 
2 

<b>Output:</b>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ajitesh14">ajitesh14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-04-2011</td>
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