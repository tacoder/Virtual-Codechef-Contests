<?php require("../../includes/header.php"); ?><h1>Minimum Sum</h1><div class="content">

<p>Given below is a tree like structure (where each successive row will contain two more nodes) as shown below:</p>
<pre>
                                               1
                                        5     3     2
                                  7    4     6     9    8
</pre><p>
You have to select a node in each row such that the sum of all the nodes selected is minimum. However you are given number “m” and “n” such that if a particular node is chosen in some row, the adjacent node (in the row above or row below) to be selected is at most “m” units to the left or at most “n” units right of the previously selected node.<br />
Say in the above diagram if by some means you select the node with value 3, and say m=0 and n=2, then in the row above you can select 1 ( it is the only option ) and in the row below you can select from 6 ( the node immediately below ) or 9,8 ( 2 places to right you can go while you can’t go left as m=0 ).</p>
<h3>Input</h3>

<p>The first line will give the number of test cases. For each test case input the height of the tree , value of m and value of n. Next input all the numbers forming the tree.</p>
<h3>Output</h3>

<p>Print the minimum sum.</p>
<h3>Example</h3>
<pre>
<b>Input:
2
3  0  2
1  5  3  2  7  4  6  9  8
4  1  2
10  2  3  7  8  12  14  2  1  2  8  4  5  20  2  1
</b>

<b>Output:
10
15</b>
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ankit_tripathi">ankit_tripathi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2012</td>
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