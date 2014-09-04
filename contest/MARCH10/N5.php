<?php require("../../includes/header.php"); ?><h1>Traffic jam</h1><div class="content">

<p>Little Johnny has a selection of boxes. Each box has a number on its side. The boxes are placed in a sequence, and Johnny wants to sort them (in ascending order). He has a device to manipulate the boxes, which performs the following operation. Johnny can select a subset of boxes, and the machine will lift the selected subset, shift the selected subset to the right (keeping the order in the subset), shift the not-selected subset to the left, filling up empty spaces (keeping the order in the subset), then finally move the raised boxes to be in one level again.</p>
<p>For example: if Johnny has the sequence: 1,2,3,4,5,6, and selects the subset in bold: 1,2,<strong>3</strong>,<strong>4</strong>,5,<strong>6</strong>, then the result is: 1,2,5,<strong>3</strong>,<strong>4</strong>,<strong>6</strong>.</p>
<p>Help Johnny to write a program that will calculate the minimal number of moves required to sort the given sequence of boxes in ascending order of numbers.</p>
<h3>Input</h3>
<p>First, 1≤t≤10, the number of test cases. Then, t testcases follow. Each starts with 1≤n≤10<sup>5</sup>, the number of boxes. Then, n integer values describing the sizes of boxes in the sequence.</p>
<h3>Output</h3>
<p>For each testcase, in a separate line, print the answer to that testcase.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
1<br />6 1 3 5 2 4 6<br /><strong>Output:</strong>
2</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>