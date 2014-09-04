<?php require("../../includes/header.php"); ?><h1>Bertie Botts Beans</h1><div class="content">

<p>
Bertie Bott's Every Flavour Beans are available in <b>f</b> different flavours, numbered from 1 to <b>f</b>. (Contrary to intution, <b>f</b> is finite. In fact 2&lt;=  <b>f</b> &lt;=10^8.) One of the displays of Bertie Botts Every Flavour Beans at the Leaky Cauldron has <b>N</b> (1&lt;= <b>N</b> &lt;=10^8) slots numbered from 1 to <b>N</b> arranged in a sequence. Each slot can contain a jar full of beans of the same flavour.</p>
<p>Currently, the display consists of alternating jars of flavours 1 and 2 starting with a jar of flavour 1. It is desired to transform it to one consisting of alternating jars of flavours 1 and 2 starting with a jar of flavour 2. For example if <b>N</b>=5, the display must be transformed from (1,2,1,2,1) to (2,1,2,1,2).</p>
<p>In one operation, one can pick a slot <b>s</b> (1&lt;= <b>s</b> &lt;=<b>N</b>) and a flavour <b>e</b> (1&lt;= <b>e</b> &lt;=<b>f</b>) and replace the jar currently at slot <b>s</b> with a jar of beans of flavour <b>e</b>. Since, the primary selling point of the beans is the variety of flavours available, all states of the display in which two adjacent slots contain jars with beans of same flavour are undesirable. All other states are desirable.</p>
<p>Your task is to find the minimum number of operations which convert the initial state to the target state such that all intermediate states of the display are desirable.</p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b>, the number of test cases.<br />
<b>T</b> lines of input follow, each containing two space-seperated integers, <b>N</b> and <b>f</b>.</p>
<h3>Output</h3>
<p>Output should consist of <b>T</b> lines.<br />
Each line must contain a single integer, the answer to the ith test case.</p>
<h3>Constraints</h3>
<p>1&lt;=<b>T</b>&lt;=1000</p>
<p>1&lt;=<b>N</b>&lt;=10^8</p>
<p>2&lt;=<b>f</b>&lt;=10^8
</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 5
5 2

<b>Output:</b>
6
-1
</pre><h3>Explanation</h3>
<p>1) One optimal sequence of operations is as follows: (1,2,1,2)->(1,3,1,2)->(1,3,4,2)->(2,3,4,2)->(2,3,4,1)->(2,1,4,1)->(2,1,2,1).</p>
<p>2) Since only 2 flavours are available, it is easy to see that the desired transformation from (1,2,1,2,1) to (2,1,2,1,2) cannot be realised.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
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