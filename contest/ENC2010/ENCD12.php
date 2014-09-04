<?php require("../../includes/header.php"); ?><h1>Distorted Palindrome</h1><div class="content">

<p>A palindrome is a string of letters that is equal to itself when reversed. Given an input string, not necessarily a palindrome, compute the number of times you need to swap to transform the string into a palindrome. By swap we mean reversing the order of two adjacent symbols. For example, the string "mamad" may be transformed into the palindrome "madam" with 3 swaps: <br /><br />
swap "ad" to get "mamda" <br /><br />
swap "md" to get "madma" <br /><br />
swap "ma" to get "madam" <br /></p>
<h3>Input</h3>
<p>The Input will have number of test cases. For each test case, one line of input containing a string of up to 100 lowercase letters will be there. Terminate the input with a 0(zero).</p>
<h3>Output</h3>
<p>
Output consists of one line. This line will contain the number of swaps, or "Impossible" if it is not possible to transform the input string to a palindrome.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
mamad
asflkj
aabb
0
<b>Output:</b>
3
Impossible
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rscrbv">rscrbv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-01-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>