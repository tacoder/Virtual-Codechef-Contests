<?php require("../../includes/header.php"); ?><h1>Johnny and the Beanstalk</h1><div class="content">

<p>One evening Johnny found some funny looking beens in his grandfather's garden shed, and decided to plant one of them. Next morning, to his surprise he found an enormous beanstalk growing in his back yard. Undaunted by its size, he decided to count its leaves.</p>
<p>You must know that beanstalks in Byteland grow in a very special way. At the lowest (1st) level, there is exactly one stem. At any level(including the 1st), a stem can end (forming exactly one leaf), or branch into exactly two stems which grow into the next level, following the same rules.</p>
<p>Johnny believes he has managed to count the number of leaves at each of the levels of the beanstalk. However, you must know that before he began to count, Johnny ate one or two of the other beans he found in his grandfather's shed, and that's why he is not quite sure of his results. Please verify whether Johnny's results may possibly be correct, at least in theory.</p>
<h3>Input</h3>
<p>The input starts with a line containing integer <i>t</i>, the number of test cases (1&lt;= <i>t</i> &lt;= 20). The descriptions of exactly <i>t</i> test cases follow.</p>
<p>Each test case starts with an integer <i>k</i>, representing the number of levels of the beanstalk (1&lt;= <i>k</i>&lt;=10<sup>6</sup>). The next <i>k</i> non-negative space-separated integers (not greater than 10<sup>6</sup>) represent the number of leaves of the beanstalk at successive levels, starting from level 1.</p>
<h3>Output</h3>
<p>
For each test case, output a line containing exactly one of the words 'Yes' or 'No', depending on whether a beanstalk having the stated leaf counts can grow in accordance with the Bytelandian rules.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
0 1 2
3
0 0 3

<b>Output:</b>
Yes
No
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-12-2008</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 6 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>