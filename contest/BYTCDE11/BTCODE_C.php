<?php require("../../includes/header.php"); ?><h1>Fun With Inequalities</h1><div class="content">

<p>You are given 'n' inequalities. Each inequality is of one of the following 4 types:<br />
<br/>Type 1: x > v<br />
<br/>Type 2: x &lt; v<br />
<br/>Type 3: x = v<br />
<br/>Type 4: x != v</br/></br/></br/></br/></p>
<p>where 'x' is a variable which can only take non-negative integral values.</p>
<p>Your task is to find the maximum number of inequalities which are satisfied for some value of 'x'. You are also required to find the minimum value of 'x' for which the maximum number of inequalities are satisfied.</p>
<h3>Input</h3>
<p>The first line of input contains a single integer 'n', denoting the total number of inequalities.<br />
<br/>Each of the next 'n' lines contain 2 space separated integers t<sub>i</sub> and v<sub>i</sub>. t<sub>i</sub> denotes the type of inequality and v<sub>i</sub> denotes the value on the right hand side of the inequality.</br/></p>
<h3>Output</h3>
<p>Output two space separated integers, the first integer denoting the maximum number of inequalities which are satisfied for some value of 'x', and the second integer denoting the minimum value of 'x' for which the maximum number of inequalities are satisfied.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
1 10
2 9
3 7
4 4

<b>Output:</b>
3 7

<b>Constraints:</b>
1 &lt;= n &lt;= 100000
1 &lt;= t<sub>i</sub> &lt;= 4
1 &lt;= v<sub>i</sub> &lt;= 10^18

</pre><p><b>Explanation:</b></p>
<p>The given inequalities are: 1) x > 10, 2) x &lt; 9, 3) x = 7, 4) x != 4. For x=7, the inequalities 2), 3) and 4) are satisfied.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>