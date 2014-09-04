<?php require("../../includes/header.php"); ?><h1>Distribute Candies</h1><div class="content">

<p>IIIT Allahabad is celebrating its annual Techno-Cultural Fiesta from  1st  to 5th   October. The Chef has agreed to provide the supply candies for this fest.<br />
The Chef has <b>N</b> boxes of candies arranged linearly having some random number of candies in each box .  Chef wants to have same number of candies in each box but he can only transfer candies to the next (i+1) th box only. He can remove any number of candies from the last box and throw them out. He wants to put maximum number candies in each box. Since you are really good at mathematics, so he has asked you to find the maximum number of candies <b>K</b> that he can put in each box.</p>
<h3>Input</h3>
<p>First line of input contains a single integer <b>T</b>, number of test cases. Description of each test contains 2 lines. First line contains single integer <b>N</b>, number of boxes. Next line contains <b>N</b> integers. i th number denoting <b>C[i]</b>, the number of candies in each box .</p>
<h3>Output</h3>
<p>For each test case output the maximum number of candies each box will contain after transferring candies, <b>K</b>. </p>
<pre>


<b>Constraints:</b>

1&lt;=<b>T</b>&lt;=100
1&lt;= <b>N</b>&lt;=10^4
1&lt;=<b>C[i]</b>&lt;=10^9
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
3
3
3 2 1
4
1 2 3 4
3
3 1 2

<b>Output:</b>
2
1
2

<b>Explanation:</b>
<pre>
For first test case, he can transfer 1 candy to next box that makes configuration as 2 3 1. 
Then he can transfer 1 candy from 2nd box to 3rd , thus <b>K</b>=2.
</pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>2 sec</td>
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