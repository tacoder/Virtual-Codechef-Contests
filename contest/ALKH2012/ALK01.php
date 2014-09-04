<?php require("../../includes/header.php"); ?><h1>Swap the Boxes</h1><div class="content">

<p>
IIIT Allahabad is celebrating its annual Techno-Cultural Fiesta Effervescence MM12 from 1st  to 5th   October. The Chef has agreed to supply candies for this festive season.</p>
<p>The chef has prepared <b>N</b> boxes of candies, numbered <b>1 to N</b> (Each number occurring exactly once ). The Chef is very particular about the arrangement of boxes. He wants boxes to be arranged in a particular order, but unfortunately Chef is busy. He has asked you to rearrange the boxes for him.</p>
<p>Given the current order of boxes, you have to rearrange the boxes in the specified order. However there is a restriction.You can only swap two adjacent boxes to achieve the required order. Output, the minimum number of such adjacent swaps required. </p>
<h3>Input</h3>
<p>
First line of input contains a single integer <b>T</b>, number of test cases. Each test case contains 3 lines, first line contains a single integer <b>N</b>, number of boxes. Next 2 lines contains <b>N</b> numbers each, first row is the given order of boxes while second row is the required order.</p>
<h3>Output</h3>
<p>
For each test case, output a single integer 'K', minimum number of adjacent swaps required.</p>
<h3>Constraints:</h3>
<pre>
1&lt;=<b>T</b>&lt;=10
1&lt;=<b>N</b>&lt;=10^5

</pre><h3>Example</h3>
<pre>
<b>Input:</b>
4

3
1 2 3
3 1 2

3
1 2 3
3 2 1

5
3 4 5 2 1 
4 1 5 2 3 

4
1 2 3 4
2 3 4 1
<b>Output:</b>
2
3
6
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bb_1">bb_1</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
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