<?php require("../../includes/header.php"); ?><h1>Buggy algorithm</h1><div class="content">

<p>Lukas was asked to be solve the following problem: 'given a permutation of numbers 1,..,n, calculate the number of inversions in it, i.e., the number of pairs of numbers i, j from 1..n, such that i&lt;j and i comes after j in the permutation'. After thinking about the problem for some time, he has invented the following algorithm: 'for each number in the permutation, if it is located to the right of its correct position in sorted sequence, add to the output value the distance between this two positions'. Formally, Lukas's answer is given as: Sum ( max {0, i-pi[i]} ), where pi[i] i s the i-the element of the permutation .</p>
<p>So, for permutation 4,1,2,3, the algorithm would give the answer 0+1+1+1 = 3, and for the permutation 3,4,5,1,2, the answer 0+0+0+3+3 =6.</p>
<p>Obviously, this algorithm is wrong (it gives wrong results e.g. for permutation 3,2,1), but... sometimes it gives correct results.</p>
<p>Lucas would like to calculate what are the chances that this algorithm gives the correct result. Specifically, he wants to know how many different permutations of fixed length, which start with a given prefix (several starting numbers), lead to a correct answer to this problem.</p>
<h3>Input</h3>
<p>First, an integer t&lt;100, representing the number of test cases. Each test case consists of two integers n and m, where n, 1≤n≤30, is the length of permutation, and m, 0≤m≤n, is the length of the given prefix; then, m distinct integers between 1 and n follow, describing the prefix of the permutation.</p>
<h3>Output</h3>
<p>For each test-case, output in how many ways we can augment the prefix to a complete permutation so that the algorithm gives correct results.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3<br />3 0<br />5 2 1 4<br />5 1 3<br /><br /><strong>Output:<br /></strong>5<br />3<br />9 <br /><br /></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-06-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>