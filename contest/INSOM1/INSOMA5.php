<?php require("../../includes/header.php"); ?><h1>XAndOr</h1><div class="content">

<p>The planet of XANDOR was famous in the intergalactic empire for being home to the Carden - a race of super-intelligent computer scientists that were held in high regard for their achievements in the Intergalactic Mind Game Olympiads. The Carden decided to build a huge computer to answer questions related to <em>Life, the Universe and Everything</em>. They decided to use only their best two-input, noise immune, Boolean gates for this device - AND, OR and XOR. After a lot of minimization, they arrived at a variable assignment for their gates. Just then, lightning struck and erased all the parentheses from their expression. Not willing to spend the trouble parenthesizing the huge expression again, they outsourced the work to Earth.</p>
<p>
As a consultant to XANDOR, you need to create a computer program that parenthesizes the Boolean expression in such a manner that the expression results in a true value and report the number of ways possible to do it. In case it is not possible to do so, you need to return 0.
</p>
<h3>Input</h3>
<p>An unparenthesized Boolean expression containing literals T and F which are connected via gates represented as . (dot) for an AND gate, + (plus) for an OR gate and * (star) for an XOR gate. There will be at least one literal in input line. Maximum number of literals i.e. T or F will be 15.</p>
<h3>Output</h3>
<p>Line 1: A single value C >= 0 representing the number of true parenthesizations possible.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
T.F+T*F

<b>Output:</b>
5

</pre><p>
<b>Description</b><br />
The 5 values correspond to the parenthesizations (((T.F)+T)*F), ((T.F)+(T*F)), ((T.(F+T))*F, (T.((F+T)*F)), (T.(F+(T*F))) - all of which evaluate to true.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-03-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 9 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>