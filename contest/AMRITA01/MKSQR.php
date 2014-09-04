<?php require("../../includes/header.php"); ?><h1>Make A Square</h1><div class="content">

<h3>Statement</h3>
<p>
You are give a set of 2-d vectors (x,y) [ -10^8 ≤ x,y ≤ 10^8, x ≠ y ] of size n (1 ≤ n ≤ 50000 ). Lets denote the ith vector as vi. <br />
You are to determine if the following system of equations has a solution : <br />
        <quote>a1*v1 + a2*v2 + a3*v3 + ... ai*v1 + ... an*vn = (k,k) for some arbitrary k. </quote> <br />
All ai's are non-negative integers [ 0 ≤ ai ≤ 10^16 ] and <br />
ALL ai's CANNOT BE ZERO ;). <br />
In other words, you need to find some linear combination of these vectors with positive coefficient such that you end up with a vector(a,b) with a=b. 
</p>
<h3>Input</h3>
<p>
First line of the input contains an integer t ( 1 ≤ t ≤ 100 ) which denotes the number of test cases to follow. <br />
For each test case, the first line contains n ( number of vectors in the set) . n lines follow, each containing a pair of space separated integers a and b which denote the vector(a,b). 
</p>
<h3>Output</h3>
<p>
Output should contain exactly t lines, with "YES" or "NO" ( without the quotes - see the sample test case for more details ).
</p>
<h3>Sample Input</h3>
<pre>
2
3
0 1
-1 0
1 0

4
1 2
10 -6
-5 -1
1 -1
</pre><h3>Sample Output</h3>
<pre>
YES
YES
</pre><h3>Explanation</h3>
<p>
Test case 1 : a1 = 0 , a2 = 1, a3 = 1. <br />
Test case 2 : a1 = 2 , a2 = 0 , a3 = 1, a4 = 3.  
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anshuman_singh">anshuman_singh</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-09-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>