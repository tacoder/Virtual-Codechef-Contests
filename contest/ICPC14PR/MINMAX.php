<?php require("../../includes/header.php"); ?><h1>Wormtongues Mind</h1><div class="content">

<p><html> <body></body></html></p>
<h1 style="font-family: Arial;"><small>ACM International Collegiate     Programming Contest, Asia-Amritapuri Site, 2012</small></h1>
<h2>Wormtongue's Mind<br /> </h2>
<p> <i>Wormtongue looked from face to face. In his eyes was the hunted look of a beast seeking some gap in the ring of his enemies.<br />     'Nay, Eomer, you do not fully understand the mind of Master Wormtongue,' said Gandalf, turning his piercing glance upon him. 'He is bold and cunning.     Even now he plays a game with peril and wins a throw.' </i>- Gandalf, trying to figure out Wormtongue's mind.</p>
<p> In fact, Wormtongue's mind is a complicated system of evaluating various variables and parameters. In essence, each parameter is a uniform random floating point variable between 0 and 1 (inclusive). Further, his mind works on calculating best and worst-case values, which are equivalent to min/max of 2 expressions.</p>
<p> For example, right now Wormtongue is calculating :<br /> 'Chances of escaping' = <b>max</b>('Theoden letting me go', 'Me killing everyone')<br /> 'Theoden letting me go' = <b>max</b>('Theoden is forgiving by nature', 'Gandalf advises him to let me go').<br /> 'Me killing everyone' = <b>min</b>('Me killing Gandalf', 'Me killing Theoden').</p>
<p> So, you are given an expression consisting of independent uniform [0, 1] random variables, on which you have an expression consisting of "<b>min</b>", and "<b>max</b>" alone. Help Gandalf figure out Wormtongue's mind by finding the <b>expected value</b> of this expression.</p>
<h3>Input (STDIN):</h3>

<p> The first line contains <b>T</b>, the number of test cases.<br /> Each test case consists of a single line describing the expression. The characters of the string are derived from the set {'<b>M</b>','<b>m</b>','<b>x</b>'}, where '<b>M</b>' stands for <b>max</b>, '<b>m</b>' stands for <b>min</b>, and '<b>x</b>' is a random variable<br /> Formally, in the expression tree, each node which asks for <b>max</b> is labeled as '<b>M</b>', each node which asks for <b>min</b> is labelled '<b>m</b>', and all the leaves are labeled '<b>x</b>'. The description of the expression is preorder traversal of this tree.<br /> For example, <b>Mxmxx</b> describes the expression <b>max(x1, min(x2, x3))</b>.</p>
<h3>Output (STDOUT):</h3>

<p> For each test case, output one line which contains the <b>expected value</b> of the expression. <b>The results should be accurate within an error range of 10^-6.</b></p>
<h3>Constraints:</h3>

<p><b>1 &lt;= T &lt;= 1,000<br /> 1 &lt;= input string length &lt;= 100</b></p>
<p></p>
<h3>Sample Input:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 4<br /> x<br /> mxx<br /> Mxx<br /> MmxxMxx </span></p>
<h3>Sample Output:</h3>

<p> <span style="font-family: Courier New,Courier,monospace;"> 0.500000<br /> 0.333333<br /> 0.666667<br /> 0.700000<br /> </span></p>
<h3>Notes/Explanation of Sample Input:</h3>

<p> For the first test case, it asks for the mean of a random number between 0 and 1, which is 0.5.</p>
<p> Note:<br /> It is recommended to use <b>long long</b> and <b>long double</b> data types in calculation to avoid precision errors.</p>
<p> </p>
<p>  </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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