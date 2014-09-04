<?php require("../../includes/header.php"); ?><h1>2048</h1><div class="content">
<h3>Problem description.</h3>
<p>In a world full of numbers, you are given ‘N’ blocks of value 2. Your target is to merge these blocks in such a way that one bigger number is formed. The merging takes place as follows : Two blocks of value 2 will make one block of value 4, then two block of value 4 will make one block of value 8 and so on. At any step, after merging, if there is a block left, then that block is automatically upgraded to next higher value. You need to find out the numbers of block merges required to get largest number possible.</p>
<h3>Input Description</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
Each test case contains a number ‘N’ i.e. number of blocks of value 2
</p>

<h3>Output Description</h3>
<p>The number of block merges required to get the largest number possible
</p>

<h3>Sample Input</h3>
<p>
1<br />
5</p>

<h3>Sample Output</h3>
<p>
4
</p>

<h3>Sample Input Explanation</h3>
<p>
5 blocks of 2s will make 2 blocks of 4 and one block of 2 will be upgraded to 4. Now 2 blocks of 4 will make one block 8 and one block of 4 will be upgraded to 8. Finally 2 blocks of 8 will make one block of 16 (which is the largest number possible).<br />
Hence number of merges required are: 2 + 1 + 1 = 4
</p>
<h3>Constraints</h3>
<ul>
<li><b>1 </b>&lt;= <b>T</b> &lt;= <b>100000</b></li>
<li><b>1</b> ≤ <b> <b>N<sub>i</sub></b> ≤ <b>10000000000</b></b></li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/procon2014">procon2014</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-08-2014</td>
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